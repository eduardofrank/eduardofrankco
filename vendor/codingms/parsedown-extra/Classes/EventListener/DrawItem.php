<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\EventListener;

/***************************************************************
 *
 * Copyright notice
 *
 * (c) 2026 Thomas Deuling <typo3@coding.ms>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use CodingMs\ParsedownExtra\Service\FlexFormService;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\View\Event\PageContentPreviewRenderingEvent;
use TYPO3\CMS\Core\Domain\FlexFormFieldValues;
use TYPO3\CMS\Core\Domain\Record;
use TYPO3\CMS\Core\Localization\LanguageServiceFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

final class DrawItem
{
    /**
     * @param PageContentPreviewRenderingEvent $event
     */
    public function __invoke(PageContentPreviewRenderingEvent $event): void
    {
        $contentType = 'parsedownextra_parsedown';
        if ($event->getTable() !== 'tt_content') {
            return;
        }
        if ((int)VersionNumberUtility::getCurrentTypo3Version() < 14) {
            /** @var array<string, mixed> $recordArray */ // @phpstan-ignore varTag.nativeType
            $recordArray = $event->getRecord();
        } else {
            /** @var Record $record */
            $record = $event->getRecord();
            $recordArray = $record->toArray();
        }
        $flexFormSheets = FlexFormService::fetchSheetsByContentType($recordArray['CType']);
        if ($contentType === $recordArray['CType'] && isset($recordArray['pi_flexform'])) {
            // Get general tab data
            if ($recordArray['pi_flexform'] instanceof FlexFormFieldValues && (int)VersionNumberUtility::getCurrentTypo3Version() > 13) {
                $flexformArray = $recordArray['pi_flexform']->toArray();
            } else {
                $recordArray['pi_flexform'] = (string)$recordArray['pi_flexform'];
                //
                // Get the settings from flex form
                $flexformArray = GeneralUtility::xml2array($recordArray['pi_flexform']);
                if (is_string($flexformArray)) {
                    $flexformArray = [];
                }
            }
            //
            // Get the flex form definition
            if (!empty($flexFormSheets)) {
                $event->setPreviewContent(self::buildPreviewTable($flexformArray, $flexFormSheets));
            }
        }
    }

    public static function buildPreviewTable(array $flexformArray, array $flexFormSheets): string
    {
        $languageService = GeneralUtility::makeInstance(LanguageServiceFactory::class)
            ->createFromUserPreferences($GLOBALS['BE_USER']);
        //
        // Build the preview table
        $itemContent = '';
        $itemContent .= '<table class="table table-bordered table-striped">';
        foreach ($flexFormSheets as $sheetKey => $sheet) {
            //
            // Sheet/Tab headline
            $itemContent .= '<thead>';
            $itemContent .= '<tr>';
            $sheetTitle = $languageService->sL($sheet['ROOT']['sheetTitle'] ?? '');
            if ($sheetTitle) {
                $itemContent .= '<th colspan="2">' . $sheetTitle . '</th>';
            } else {
                $itemContent .= '<th colspan="2"><i class="text-danger">sheetTitle missing</i>' . '</th>';
            }
            $itemContent .= '</tr>';
            $itemContent .= '</thead>';
            //
            // Sheet/Tab settings
            foreach ($sheet['ROOT']['el'] as $key => $element) {
                $value = null;
                if (isset($flexformArray['data'][$sheetKey]['lDEF'][$key]) && (int)VersionNumberUtility::getCurrentTypo3Version() <= 13) {
                    $value = $flexformArray['data'][$sheetKey]['lDEF'][$key]['vDEF'];
                } else {
                    if (isset($flexformArray[$sheetKey])) {
                        $value = self::getByPath($flexformArray[$sheetKey], $key);
                    }
                }
                if ($value || $element['config']['type'] === 'check') {
                    //
                    if ($element['config']['type'] === 'select' && $element['config']['renderType'] === 'selectSingle') {
                        //
                        // Single select
                        $valueLabel = '';
                        //
                        // Sometimes the values are not set!?
                        // Try to fetch automatically!
                        if (!isset($element['config']['items']) || empty($element['config']['items'])) {
                            if ($value > 0 && isset($element['config']['foreign_table'])) {
                                $record = BackendUtility::getRecord($element['config']['foreign_table'], $value);
                                $labelField = $GLOBALS['TCA'][$element['config']['foreign_table']]['ctrl']['label'];
                                if (is_array($record)) {
                                    $element['config']['items'][] = [
                                        $record[$labelField],
                                        $value,
                                    ];
                                }
                            }
                        }
                        $valueFound = false;
                        $element['config']['items'] ??= [];
                        foreach ($element['config']['items'] as $item) {
                            if ($item['value'] === $value) {
                                $valueFound = true;
                                $valueLabel = '<span title="' . $item['value'] . '">' . $languageService->sL($item['label']) . '</span>';
                            }
                        }
                        if (!$valueFound) {
                            $valueLabel = '<span>' . $value . '</span>';
                        }
                        $itemContent .= '<tr>';
                        $itemContent .= '<td style="width: 20%;">' . $languageService->sL($element['label']) . '</td>';
                        $itemContent .= '<td>' . $valueLabel . '</td>';
                        $itemContent .= '</tr>';
                        //
                    } elseif ($element['config']['type'] === 'select' && $element['config']['renderType'] === 'selectMultipleSideBySide') {
                        //
                        // Multiple select
                        if ((int)VersionNumberUtility::getCurrentTypo3Version() <= 13) {
                            $values = GeneralUtility::trimExplode(',', $value, true);
                        } else {
                            $values = $value;
                        }
                        $valueLabels = [];
                        $implodeBy = ', ';
                        if (isset($element['config']['foreign_table'])) {
                            foreach ($values as $uid) {
                                if (VersionNumberUtility::getCurrentTypo3Version() >= 14) {
                                    $valueLabels[] = $uid->get('title');
                                } else {
                                    $relationRow = BackendUtility::getRecord($element['config']['foreign_table'], $uid);
                                    if (is_array($relationRow)) {
                                        $valueLabels[] = BackendUtility::getRecordTitle($element['config']['foreign_table'], $relationRow) . ' [' . $uid . ']';
                                    }
                                }
                            }
                            $implodeBy = '<br />';
                        } elseif (isset($element['config']['items'])) {
                            foreach ($element['config']['items'] as $item) {
                                if (in_array($item['value'], $values)) {
                                    $valueLabels[] = '<span title="' . $item['value'] . '">' . $languageService->sL($item['label']) . '</span>';
                                }
                            }
                        }
                        $itemContent .= '<tr>';
                        $itemContent .= '<td style="width: 20%;">' . $languageService->sL($element['label']) . '</td>';
                        $itemContent .= '<td>' . implode($implodeBy, $valueLabels) . '</td>';
                        $itemContent .= '</tr>';
                    } elseif ($element['config']['type'] === 'check') {
                        //
                        // Checkbox
                        $itemContent .= '<tr>';
                        $itemContent .= '<td style="width: 20%;">' . $languageService->sL($element['label']) . '</td>';
                        if ($value) {
                            $value = '<typo3-backend-icon identifier="actions-check" size="small"></typo3-backend-icon>';
                        } else {
                            $value = '<typo3-backend-icon identifier="actions-close" size="small"></typo3-backend-icon>';
                        }
                        $itemContent .= '<td>' . $value . '</td>';
                        $itemContent .= '</tr>';
                    } else {
                        //
                        // Simple input
                        if (trim((string)$value) !== '') {
                            $itemContent .= '<tr>';
                            $itemContent .= '<td style="width: 20%;">' . $languageService->sL($element['label']) . '</td>';
                            $itemContent .= '<td>' . $value . '</td>';
                            $itemContent .= '</tr>';
                        }
                    }
                }
            }
        }
        $itemContent .= '</table>';
        return $itemContent;
    }

    private static function getByPath(array $array, string $path, mixed $default = null): mixed
    {
        $value = $array;
        foreach (explode('.', $path) as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                return $default;
            }
            $value = $value[$segment];
        }
        return $value;
    }
}
