<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\Form\Element;

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

use CodingMs\ParsedownExtra\Form\Element\Traits\Typo3Version13Trait;
use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Core\Utility\StringUtility;

/**
 * Displays a markdown selection row
 *
 * @author Thomas Deuling <typo3@coding.ms>
 */
class MarkdownSelect extends AbstractFormElement
{
    use Typo3Version13Trait;

    /**
     * Handler for single nodes
     *
     * @return array<mixed> As defined in initializeResultArray() of AbstractNode
     */
    public function render(): array
    {
        $languageService = $this->getLanguageService();
        $table = $this->data['tableName'];
        $fieldName = $this->data['fieldName'];
        $row = $this->data['databaseRow'];
        $parameterArray = $this->data['parameterArray'];
        $resultArray = $this->initializeResultArray();
        //
        $itemValue = trim((string)$parameterArray['itemFormElValue']);
        $config = $parameterArray['fieldConf']['config'];
        $size = MathUtility::forceIntegerInRange($config['size'] ?? $this->defaultInputWidth, $this->minimumInputWidth, $this->maxInputWidth);
        $width = (int)$this->formMaxWidth($size);
        $id = StringUtility::getUniqueId('formengine-input-');
        $attributes = [
            'value' => $itemValue,
            'id' => $id,
            'class' => implode(' ', [
                'form-control',
                'hasDefaultValue',
                't3js-clearable',
            ]),
            'data-formengine-validation-rules' => $this->getValidationDataAsJsonString([]), //$config),
            'data-formengine-input-params' => json_encode([
                'field' => '',
                'evalList' => '',
                'is_in' => '',
            ]),
            'data-formengine-input-name' => $parameterArray['itemFormElName'],
        ];
        //
        // Is read only?!
        $readOnly = isset($config['readOnly']) ? (bool)$config['readOnly'] : false;
        if ($readOnly) {
            $attributes['readonly'] = 'readonly';
        }
        $folder = GeneralUtility::getFileAbsFileName('fileadmin/');
        $selectArray = GeneralUtility::getAllFilesAndFoldersInPath([], $folder, 'md');
        if (empty($selectArray)) {
            $select = '<div>No markdown files found in file storage!</div>' . PHP_EOL;
        } else {
            // Sort entries an finish building the select
            sort($selectArray);
            $select = '<select name="' . htmlspecialchars((string)$parameterArray['itemFormElName']) . '"  class="form-control select">' . PHP_EOL;
            $select .= '<option value="">Select a markdown file…</option>' . PHP_EOL;
            foreach ($selectArray as $selectItem) {
                $relativeFile = substr($selectItem, (int)strpos($selectItem, 'fileadmin/'));
                if ($itemValue === $relativeFile) {
                    $select .= '<option value="' . $relativeFile . '" selected="selected">' . $relativeFile . '</option>' . PHP_EOL;
                } else {
                    $select .= '<option value="' . $relativeFile . '">' . $relativeFile . '</option>' . PHP_EOL;
                }
            }
            $select .= '</select>' . PHP_EOL;
        }
        //
        // HTML
        $html = [];
        if ($this->isTypo3Version13OrNewer()) {
            $html[] = $this->generateInputLabelHtml($parameterArray, $fieldName);
        }
        $html[] = '<div class="formengine-field-item t3js-formengine-field-item">';
        $html[] = '<div class="form-wizards-wrap">';
        $html[] = '<div class="form-wizards-element">';
        $html[] = '<div class="form-control-wrap" style="max-width: ' . $width . 'px">' . $select . '</div>';
        $html[] = '</div>';
        $html[] = '</div>';
        $html[] = '</div>';
        $resultArray['html'] = implode(PHP_EOL, $html);
        return $resultArray;
    }
}
