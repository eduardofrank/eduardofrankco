<?php

declare(strict_types=1);

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

/**
 * @extensionScannerIgnoreFile
 */

/**
 * SetFontSpacing
 */
trait SetFontSpacingTrait
{

    /**
     * Current font spacing in points
     * @var float
     */
    protected $fontSpacingPt;

    /**
     * Current font spacing in user units
     * @var float
     */
    protected $fontSpacing;

    /**
     * @param float $spacing
     */
    public function SetFontSpacing($spacing = 0.0)
    {
        if ($this->fontSpacingPt == $spacing) {
            return;
        }
        $this->fontSpacingPt = $spacing;
        $this->fontSpacing = $spacing / $this->k;
        if ($this->page > 0) {
            $this->_out(sprintf('BT %.3f Tc ET', $spacing));
        }
    }
}
