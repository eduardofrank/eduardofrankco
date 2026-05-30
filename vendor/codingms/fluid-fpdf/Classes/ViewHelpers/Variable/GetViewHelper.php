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

class GetViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('name', 'string', 'Name of variable to retrieve');
        $this->registerArgument(
            'useRawKeys',
            'boolean',
            'If TRUE, the path is directly passed to ObjectAccess. If FALSE, a custom and compatible VHS method is used'
        );
    }

    public function render()
    {
        $variableProvider = $this->renderingContext->getVariableProvider();
        $name = $this->arguments['name'];
        $useRawKeys = $this->arguments['useRawKeys'];
        if (!str_contains((string)$name, '.')) {
            if ($variableProvider->exists($name) === true) {
                return $variableProvider->get($name);
            }
        } else {
            $segments = explode('.', (string)$name);
            $lastSegment = array_shift($segments);
            $templateVariableRootName = $lastSegment;
            if ($variableProvider->exists($templateVariableRootName) === true) {
                $templateVariableRoot = $variableProvider->get($templateVariableRootName);
                if ($useRawKeys === true) {
                    return ObjectAccess::getPropertyPath($templateVariableRoot, implode('.', $segments));
                }
                try {
                    $value = $templateVariableRoot;
                    foreach ($segments as $segment) {
                        if (ctype_digit($segment) === true) {
                            $segment = (int)$segment;
                            $index = 0;
                            $found = false;
                            // Note: this loop approach is not a stupid solution. If you doubt this,
                            // attempt to fetch a number at a numeric index from ObjectStorage ;)
                            foreach ($value as $possibleValue) {
                                if ($index === $segment) {
                                    $value = $possibleValue;
                                    $found = true;
                                    break;
                                }
                                ++$index;
                            }
                            if (!$found) {
                                return null;
                            }
                            continue;
                        }
                        try {
                            $value = ObjectAccess::getProperty($value, $segment);
                        } catch (\Throwable) {
                            $value = null;
                        }
                    }
                    return $value;
                } catch (\Exception) {
                    return null;
                }
            }
        }
        return null;
    }
}
