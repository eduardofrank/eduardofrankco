<?php

declare(strict_types=1);

namespace CodingMs\FluidFpdf\EventListener;

use CodingMs\FluidFpdf\Event\DrawPdfFooterEvent;
use CodingMs\FluidFpdf\Service\FooterService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class DrawPdfFooter
{
    /**
     * @param DrawPdfFooterEvent $event
     */
    public function __invoke(DrawPdfFooterEvent $event): void
    {
        /** @var  FooterService $footerService */
        $footerService = GeneralUtility::makeInstance(FooterService::class);
        $footerService->write($event->getFpdf());
    }
}
