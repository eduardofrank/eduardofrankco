<?php

namespace CodingMs\FluidFpdf\ViewHelpers\Variable;

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

use TYPO3\CMS\Extbase\Reflection\ObjectAccess;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class SetViewHelper extends AbstractViewHelper
{
    /**
     * @var bool
     */
    protected $escapeChildren = false;

    public function initializeArguments(): void
    {
        $this->registerArgument('value', 'mixed', 'Value to set');
        $this->registerArgument('name', 'string', 'Name of variable to assign');
    }

    public function render()
    {
        $name = $this->arguments['name'];
        $value = $this->renderChildren();
        if ($value === null) {
            $value = $this->arguments['value'];
        }
        $variableProvider = $this->renderingContext->getVariableProvider();
        if (!str_contains((string)$name, '.')) {
            if ($variableProvider->exists($name) === true) {
                $variableProvider->remove($name);
            }
            $variableProvider->add($name, $value);
        } elseif (mb_substr_count((string)$name, '.') === 1) {
            $parts = explode('.', (string)$name);
            $objectName = array_shift($parts);
            $path = implode('.', $parts);
            if ($variableProvider->exists($objectName) === false) {
                return null;
            }
            $object = $variableProvider->get($objectName);
            try {
                ObjectAccess::setProperty($object, $path, $value);
                // Note: re-insert the variable to ensure unreferenced values like arrays also get updated
                $variableProvider->remove($objectName);
                $variableProvider->add($objectName, $object);
            } catch (\Exception) {
                return null;
            }
        }
        return null;
    }
}
