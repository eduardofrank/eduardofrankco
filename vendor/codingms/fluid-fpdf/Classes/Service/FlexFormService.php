<?php

declare(strict_types=1);

namespace CodingMs\FluidFpdf\Service;

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

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Services for flex-forms
 *
 * @author Thomas Deuling <typo3@coding.ms>
 */
class FlexFormService implements SingletonInterface
{
    /**
     * Returns flex-form sheets by content-type
     * @return array<string, mixed>
     */
    public static function fetchSheetsByContentType(string $contentType): array
    {
        return self::fetchSheetsByTcaNode($contentType);
    }

    /**
     * Returns flex-form sheets by list-type
     * @return array<string, mixed>
     */
    public static function fetchSheetsByListType(string $listType): array
    {
        return self::fetchSheetsByTcaNode($listType . ',list');
    }

    /**
     * Returns flex-form sheets by flex form key in TCA
     * @return array<string, mixed>
     */
    protected static function fetchSheetsByTcaNode(string $flexKey): array
    {
        $flexFormSheets = [];
        if (isset($GLOBALS['TCA']['tt_content']['types'][$flexKey]['columnsOverrides']['pi_flexform']['config']['ds'])) {
            $flexformTcaNode = $GLOBALS['TCA']['tt_content']['types'][$flexKey]['columnsOverrides']['pi_flexform']['config']['ds'] ?? '';
            if ($flexformTcaNode !== '') {
                $flexformXml = '';
                if (str_starts_with((string)$flexformTcaNode, '<')) {
                    $flexformXml = $flexformTcaNode;
                } else {
                    if (str_starts_with((string)$flexformTcaNode, 'FILE:')) {
                        $flexformFilename = substr((string)$flexformTcaNode, 5);
                    } else {
                        $flexformFilename = $flexformTcaNode;
                    }
                    $flexformFilenameAbsolute = GeneralUtility::getFileAbsFileName($flexformFilename);
                    if (file_exists($flexformFilenameAbsolute)) {
                        $flexformXml = file_get_contents($flexformFilenameAbsolute);
                        if (!is_string($flexformXml)) {
                            $flexformXml = '';
                        }
                    }
                }
                if ($flexformXml !== '') {
                    $flexformArray = GeneralUtility::xml2array($flexformXml);
                    $flexFormSheets = $flexformArray['sheets'] ?? [];
                }
            }
        }
        return $flexFormSheets;
    }
}
