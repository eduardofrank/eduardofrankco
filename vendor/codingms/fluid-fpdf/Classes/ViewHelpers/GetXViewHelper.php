<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the abscissa of the current position.
 */
class GetXViewHelper extends AbstractViewHelper
{
    /**
     * Returns the abscissa of the current position.
     *
     * @return  int
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $x = $fpdf->GetX();
        $this->renderChildren();
        return $x;
    }
}
