<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the page width
 */
class GetPageWidthViewHelper extends AbstractViewHelper
{
    /**
     * Returns the page width
     *
     * @return  int
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $pageWidth = $fpdf->GetPageWidth();
        $this->renderChildren();
        return $pageWidth;
    }
}
