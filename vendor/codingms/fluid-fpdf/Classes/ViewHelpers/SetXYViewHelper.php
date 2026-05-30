<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the abscissa and ordinate of the current position. If the passed values are negative, they are relative respectively to the right and bottom of the page.
 */
class SetXYViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('x', 'float', 'Abscissa of the origin.', false, 0.0);
        $this->registerArgument('y', 'float', 'Ordinate of the origin.', false, 0.0);
    }

    /**
     * Defines the abscissa and ordinate of the current position. If the passed values are negative, they are relative respectively to the right and bottom of the page.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetXY($this->arguments['x'], $this->arguments['y']);
        $this->renderChildren();
    }
}
