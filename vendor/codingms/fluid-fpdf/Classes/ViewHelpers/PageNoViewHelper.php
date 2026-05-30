<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the current page number.
 */
class PageNoViewHelper extends AbstractViewHelper
{
    /**
     * Returns the current page number.
     *
     * @return int
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $pageNo = $fpdf->PageNo();
        $this->renderChildren();
        return $pageNo;
    }
}
