<?php

namespace CodingMs\FluidFpdf\ViewHelpers\Debug;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Writes a font dump
 */
class FontDumpViewHelper extends AbstractViewHelper
{
    /**
     * Writes a font dump
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        for ($i = 32; $i <= 255; $i++) {
            $fpdf->Cell(12, 5.5, $i . ' : ');
            $fpdf->Cell(0, 5.5, chr($i), 0, 1);
        }
    }
}
