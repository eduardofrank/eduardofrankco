<?php

declare(strict_types=1);

namespace EduardoFrank\Efrank13\Widgets;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\View\BackendViewFactory;
use TYPO3\CMS\Dashboard\Widgets\AdditionalCssInterface;
use TYPO3\CMS\Dashboard\Widgets\RequestAwareWidgetInterface;
use TYPO3\CMS\Dashboard\Widgets\WidgetConfigurationInterface;
use TYPO3\CMS\Dashboard\Widgets\WidgetInterface;
use EduardoFrank\Efrank13\Domain\Repository\PersonalNoteRepository;

class PersonalNotepadWidget implements WidgetInterface, AdditionalCssInterface, RequestAwareWidgetInterface
{
    private ServerRequestInterface $request;

    public function __construct(
        private readonly WidgetConfigurationInterface $configuration,
        private readonly PersonalNoteRepository $personalNoteRepository,
        private readonly BackendViewFactory $backendViewFactory,
        private readonly array $options = []
    ) {}

    public function setRequest(ServerRequestInterface $request): void
    {
        $this->request = $request;
    }

    public function renderWidgetContent(): string
    {
        $view = $this->backendViewFactory->create($this->request, [
            'typo3/cms-dashboard',
            'eduardo-frank/efrank13',
        ]);

        $notes = $this->personalNoteRepository->findPersonalNotes();

        $view->assignMultiple([
            'notes' => $notes,
            'configuration' => $this->configuration,
            'dateFormat' => $GLOBALS['TYPO3_CONF_VARS']['SYS']['ddmmyy'],
            'timeFormat' => $GLOBALS['TYPO3_CONF_VARS']['SYS']['hhmm'],
        ]);

        return $view->render('Widget/PersonalNotepad');
    }

    public function getCssFiles(): array
    {
        return ['EXT:efrank13/Resources/Public/Css/PersonalNotepad.css'];
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
