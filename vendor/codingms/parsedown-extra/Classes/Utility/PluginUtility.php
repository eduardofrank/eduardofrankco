<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\Utility;

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

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

/**
 * Plugin Tools
 */
class PluginUtility
{
    /**
     * @param string $extensionKey For example, 'fluid_form'
     * @param string $pluginName For example 'Form' or 'PollTeaser'
     * @param string $group For example, 'forms' or 'poll'
     */
    public static function add(string $extensionKey, string $pluginName, string $group = ''): void
    {
        $extensionKeyCompressed = str_replace('_', '', $extensionKey);
        $pluginNameToLower = strtolower($pluginName);
        $signature = $extensionKeyCompressed . '_' . $pluginNameToLower;
        $lll = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_newcontentelementwizard.xlf:';
        $lll .= 'tx_' . $extensionKeyCompressed . '_newcontentelementwizard_' . $pluginNameToLower;
        ExtensionUtility::registerPlugin(
            $extensionKey,
            $pluginName,
            $lll . '.title',
            'content-plugin-' . $extensionKeyCompressed . '-' . $pluginNameToLower,
            $group,
            $lll . '.description',
        );
        //
        // Add a flex-form, if available
        $flexFormFile = 'EXT:' . $extensionKey . '/Configuration/FlexForms/' . $pluginName . '.xml';
        $flexFormFileAbsolutePath = GeneralUtility::getFileAbsFileName($flexFormFile);
        if (file_exists($flexFormFileAbsolutePath)) {
            ExtensionManagementUtility::addToAllTCAtypes(
                'tt_content',
                '--div--;Configuration,pi_flexform,',
                $signature,
                'after:subheader'
            );
            $GLOBALS['TCA']['tt_content']['types'][$signature]['columnsOverrides']['pi_flexform']['config']['ds'] = 'FILE:' . $flexFormFile;
        }
    }
}
