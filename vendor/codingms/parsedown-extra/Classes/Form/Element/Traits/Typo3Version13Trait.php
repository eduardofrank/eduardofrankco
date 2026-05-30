<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace CodingMs\ParsedownExtra\Form\Element\Traits;

use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

/**
 * Mark this class deprecated once the support for TYPO3 v12 is dropped.
 */
trait Typo3Version13Trait
{
    /**
     * @return bool
     */
    protected function isTypo3Version13OrNewer(): bool
    {
        return ((int)VersionNumberUtility::getCurrentTypo3Version()) >= 13;
    }

    /**
     * @param array<string, mixed> $parameterArray
     * @param string $fieldName
     * @return string
     */
    protected function generateInputLabelHtml(array $parameterArray, string $fieldName): string
    {
        $itemFormElName = (string)($parameterArray['itemFormElName'] ?? '');
        $label = (string)($parameterArray['fieldConf']['label'] ?? '');
        $key = '';
        $backendUserAuthentication = $GLOBALS['BE_USER'];
        if ($backendUserAuthentication instanceof BackendUserAuthentication) {
            if ($backendUserAuthentication->isAdmin()) {
                $key = '<code>[' . $fieldName . ']</code>';
            }
        }
        return '<label for="' . $itemFormElName . '" class="form-label t3js-formengine-label">' . $label . ' ' . $key . '</label>';
    }
}
