<?php

declare(strict_types=1);

namespace EduardoFrank\Efrank14;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use TYPO3\CMS\Backend\View\BackendViewFactory;
use TYPO3\CMS\Dashboard\WidgetRegistry;
use EduardoFrank\Efrank14\Domain\Repository\PersonalNoteRepository;
use EduardoFrank\Efrank14\Widgets\PersonalNotepadWidget;

return function (ContainerConfigurator $configurator, ContainerBuilder $containerBuilder) {
    $services = $configurator->services();
    $services->defaults()
        ->autowire()
        ->autoconfigure()
        ->private();

    $services->load('EduardoFrank\\Efrank14\\', '../Classes/*');

    if ($containerBuilder->hasDefinition(WidgetRegistry::class)) {
        $services->set('dashboard.widget.efrank14.personal_notepad')
            ->class(PersonalNotepadWidget::class)
            ->arg('$backendViewFactory', new Reference(BackendViewFactory::class))
            ->arg('$personalNoteRepository', new Reference(PersonalNoteRepository::class))
            ->arg('$options', ['refreshAvailable' => true])
            ->tag('dashboard.widget', [
                'identifier' => 'efrank14_personal_notepad',
                'groupNames' => 'sys_note',
                'title' => 'LLL:EXT:efrank14/Resources/Private/Language/locallang_be.xlf:widget.personalNotepad.title',
                'description' => 'LLL:EXT:efrank14/Resources/Private/Language/locallang_be.xlf:widget.personalNotepad.description',
                'iconIdentifier' => 'content-note',
                'height' => 'large',
                'width' => 'medium',
            ]);
    }
};
