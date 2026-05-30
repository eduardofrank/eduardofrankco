<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the page height
 */
class GetPageHeightViewHelper extends AbstractViewHelper
{
    /**
     *  Returns the page height
     *
     * @return  int
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $pageHeight = $fpdf->GetPageHeight();
        $this->renderChildren();
        return $pageHeight;
    }
}
