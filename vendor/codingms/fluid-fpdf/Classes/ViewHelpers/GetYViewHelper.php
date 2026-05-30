<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the ordinate of the current position.
 */
class GetYViewHelper extends AbstractViewHelper
{
    /**
     * Returns the ordinate of the current position.
     *
     * @return  int
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $y = $fpdf->GetY();
        $this->renderChildren();
        return $y;
    }
}
