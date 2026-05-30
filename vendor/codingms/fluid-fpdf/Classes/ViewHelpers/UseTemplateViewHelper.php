<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use setasign\Fpdi\PdfReader\PdfReaderException;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Prints a PDF-Template into a page
 */
class UseTemplateViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('pageNo', 'int', 'The page number', false, 1);
        $this->registerArgument('x', 'float', 'The x-position', false, 0.0);
        $this->registerArgument('y', 'float', 'The y-position', false, 0.0);
        $this->registerArgument('w', 'float', 'The new width of the template. If zero, the width of the current page will be used.', false, 0.0);
        $this->registerArgument('h', 'float', 'The new height of the template. If zero, the height of the current page will be used.', false, 0.0);
        $this->registerArgument('adjustPageSize', 'bool', 'If set to true the current page will be resized to fit the dimensions of the template', false, false);
    }

    /**
     * Prints a PDF-Template into a page
     *
     * @throws PdfReaderException
     */
    public function render(): void
    {
        $x = $this->arguments['x'];
        $y = $this->arguments['y'];
        $w = $this->arguments['w'];
        $h = $this->arguments['h'];
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        // Use default size, when no size was passed
        if ($w === 0.0 && $h === 0.0) {
            $currentPageSize = $fpdf->GetCurrentPageSize();
            if ($fpdf->GetCurrentOrientation() === 'P') {
                $w = $currentPageSize[0];
                $h = $currentPageSize[1];
            } else {
                $w = $currentPageSize[1];
                $h = $currentPageSize[0];
            }
        }
        // import page 1
        $tplIdx = $fpdf->importPage($this->arguments['pageNo']);
        // use the imported page and place it at point 10,10 with a width of 100 mm
        $fpdf->useTemplate($tplIdx, $x, $y, $w, $h, $this->arguments['adjustPageSize']);
        $this->renderChildren();
    }
}
