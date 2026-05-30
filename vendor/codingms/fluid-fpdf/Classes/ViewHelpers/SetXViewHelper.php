<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the abscissa of the current position. If the passed value is negative, it is relative to the right of the page.
 */
class SetXViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('x', 'float', 'The value of the abscissa.', false, 0.0);
    }

    /**
     * Defines the abscissa of the current position. If the passed value is negative, it is relative to the right of the page.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetX($this->arguments['x']);
        $this->renderChildren();
    }
}
