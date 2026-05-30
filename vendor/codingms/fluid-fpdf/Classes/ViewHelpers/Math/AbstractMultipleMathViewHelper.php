<?php

namespace CodingMs\FluidFpdf\ViewHelpers\Math;

/*************************************************************
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
 *************************************************************/

//use FluidTYPO3\Vhs\Traits\ArrayConsumingViewHelperTrait;
use TYPO3Fluid\Fluid\Core\ViewHelper\Exception;

abstract class AbstractMultipleMathViewHelper extends AbstractSingleMathViewHelper
{
    //use ArrayConsumingViewHelperTrait;

    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('b', 'mixed', 'Second number or Iterator/Traversable/Array for calculation', true);
    }

    public function render()
    {
        $a = $this->getInlineArgument();
        $b = $this->arguments['b'];
        return $this->calculate($a, $b);
    }

    protected function calculate($a, $b = null)
    {
        if ($b === null) {
            throw new Exception('Required argument "b" was not supplied', 1237823699);
        }
        return $this->calculateAction($a, $b);
    }

    protected function calculateAction($a, $b)
    {
        return $a + $b;
    }
}
