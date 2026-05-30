<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\ViewHelpers;

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

use CodingMs\ParsedownExtra\Service\ParsedownService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ParsedownViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('markdown', 'string', 'Markdown string');
        $this->registerArgument('emailProtection', 'bool', 'Protect emails', false, true);
        $this->registerArgument('shiftHeadlines', 'bool', 'Shift HTML headlines', false, false);
        $this->registerArgument('useMarkdownFile', 'bool', 'Use markdown file', false, false);
        $this->registerArgument('markdownFile', 'string', 'Markdown file');
    }

    /**
     * Parse markdown
     *
     * @return string
     * @throws \Exception
     */
    public function render()
    {
        if ($this->arguments['useMarkdownFile'] && isset($this->arguments['markdownFile'])) {
            $absFileName = GeneralUtility::getFileAbsFileName($this->arguments['markdownFile']);
            if (file_exists($absFileName)) {
                $markdownString = file_get_contents($absFileName);
                if ($markdownString !== false) {
                    return ParsedownService::parse($markdownString, $this->arguments['emailProtection'], $this->arguments['shiftHeadlines']);
                }
            }
            return '';
        }
        return ParsedownService::parse($this->arguments['markdown'], $this->arguments['emailProtection'], $this->arguments['shiftHeadlines']);
    }
}
