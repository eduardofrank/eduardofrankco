<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Builder;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Dto\RequestParameters;
use MaxServ\FrontendRequest\Event\ModifyUrlEvent;
use Psr\EventDispatcher\EventDispatcherInterface;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class RequestContextBuilder
{
    public function __construct(
        protected readonly PageRepository $pageRepository,
        protected readonly SiteFinder $siteFinder,
        protected readonly EventDispatcherInterface $eventDispatcher
    ) {}

    public function build(RequestParameters $parameters): RequestContext
    {
        $this->resolveMountPoint($parameters);
        $site = $this->getSite($parameters);
        if ($site === null) {
            return new RequestContext();
        }
        $url = $this->generateUri($site, $parameters);

        $event = new ModifyUrlEvent($url, $site, $parameters);
        $this->eventDispatcher->dispatch($event);

        return new RequestContext(
            $event->getUrl(),
            $site,
            $parameters
        );
    }

    protected function resolveMountPoint(RequestParameters $parameters): void
    {
        if ($parameters->getPageId() === null) {
            return;
        }
        $mountPoint = $this->pageRepository->getMountPointInfo($parameters->getPageId());
        if (isset($mountPoint['overlay'], $mountPoint['mount_pid'], $mountPoint['MPvar'])) {
            $parameters->setPageId($mountPoint['mount_pid']);
            $parameters->addAdditionalParameters('&MP=' . $mountPoint['MPvar']);
        }
    }

    protected function getSite(RequestParameters $parameters): ?Site
    {
        if ($parameters->getPageId() === null) {
            return null;
        }
        $rootLine = BackendUtility::BEgetRootLine($parameters->getPageId());
        try {
            return $this->siteFinder->getSiteByPageId($parameters->getPageId(), $rootLine);
        } catch (SiteNotFoundException) {
            return null;
        }
    }

    protected function generateUri(Site $site, RequestParameters $parameters): string
    {
        if ($parameters->getPageId() === null) {
            return '';
        }
        $additionalQueryParams = [];
        $additionalGetVars = rawurldecode($parameters->getAdditionalParameters() ?? '');
        parse_str($additionalGetVars, $additionalQueryParams);
        $additionalQueryParams['_language'] = $site->getLanguageById($parameters->getLanguageId() ?? 0);
        return $this->fixAbsoluteUrl(
            (string)$site->getRouter()->generateUri($parameters->getPageId(), $additionalQueryParams)
        );
    }

    protected function fixAbsoluteUrl(string $url): string
    {
        if (str_starts_with($url, '/')) {
            $url = GeneralUtility::getIndpEnv('TYPO3_REQUEST_HOST') . $url;
        }
        return $url;
    }
}
