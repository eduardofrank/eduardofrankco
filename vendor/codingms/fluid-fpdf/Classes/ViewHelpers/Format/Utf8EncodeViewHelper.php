<?php

namespace CodingMs\FluidFpdf\ViewHelpers\Format;

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

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * UTF8-Encode
 */
class Utf8EncodeViewHelper extends AbstractViewHelper
{
    /**
     * Output is escaped already. We must not escape children, to avoid double encoding.
     *
     * @var bool
     */
    protected $escapeChildren = false;

    public function initializeArguments(): void
    {
        $this->registerArgument('value', 'string', 'string to format');
    }

    public function render(): string
    {
        $value = $this->arguments['value'];
        if ($value === null) {
            $value = $this->renderChildren();
        }
        if (!is_string($value)) {
            return (string)$value;
        }
        return mb_convert_encoding($value, 'UTF-8', 'ISO-8859-1');
    }
}
