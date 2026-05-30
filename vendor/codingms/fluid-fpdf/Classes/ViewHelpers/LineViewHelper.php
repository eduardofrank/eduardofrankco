<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Draws a line between two points.
 */
class LineViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('x1', 'float', 'Abscissa of first point.', false, 0.0);
        $this->registerArgument('y1', 'float', 'Ordinate of first point.', false, 0.0);
        $this->registerArgument('x2', 'float', 'Abscissa of second point.', false, 0.0);
        $this->registerArgument('y2', 'float', 'Ordinate of second point.', false, 0.0);
    }

    /**
     * Draws a line between two points.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Line($this->arguments['x1'], $this->arguments['y1'], $this->arguments['x2'], $this->arguments['y2']);
        $this->renderChildren();
    }
}
