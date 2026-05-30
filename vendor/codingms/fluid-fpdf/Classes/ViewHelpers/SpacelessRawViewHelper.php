<?php

declare(strict_types=1);

namespace CodingMs\FluidFpdf\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2026 Thomas Deuling <typo3@coding.ms>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3Fluid\Fluid\Core\Compiler\TemplateCompiler;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Outputs an argument/value without any escaping and removes redundant spaces between HTML tags.
 */
class SpacelessRawViewHelper extends AbstractViewHelper
{
    /**
     * @var bool
     */
    protected $escapeChildren = false;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize arguments
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('value', 'mixed', 'The value to output', false, null, false);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $value = $this->renderChildren();
        if ($value === null) {
            return '';
        }
        return trim(preg_replace('/>\s+</', '><', (string)$value));
    }

    /**
     * @param string $argumentsName
     * @param string $closureName
     * @param string $initializationPhpCode
     * @param ViewHelperNode $node
     * @param TemplateCompiler $compiler
     * @return string
     */
    public function compile($argumentsName, $closureName, &$initializationPhpCode, ViewHelperNode $node, TemplateCompiler $compiler): string
    {
        $contentArgumentName = $this->getContentArgumentName();
        return sprintf(
            'trim(preg_replace(\'/>\s+</\', \'><\', (string)(isset(%s[\'%s\']) ? %s[\'%s\'] : %s())))',
            $argumentsName,
            $contentArgumentName,
            $argumentsName,
            $contentArgumentName,
            $closureName
        );
    }

    /**
     * Explicitly set argument name to be used as content.
     */
    public function getContentArgumentName(): string
    {
        return 'value';
    }
}
