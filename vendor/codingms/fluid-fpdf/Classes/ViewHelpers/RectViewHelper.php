<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Outputs a rectangle. It can be drawn (border only), filled (with no border) or both.
 */
class RectViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('x', 'float', 'Abscissa of upper-left corner.', false, 0.0);
        $this->registerArgument('y', 'float', 'Ordinate of upper-left corner.', false, 0.0);
        $this->registerArgument('width', 'float', 'Width', false, 0.0);
        $this->registerArgument('height', 'float', 'Height', false, 0.0);
        $this->registerArgument('style', 'string', 'Style of rendering.', false, 'D');
    }

    /**
     * Outputs a rectangle. It can be drawn (border only), filled (with no border) or both.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Rect($this->arguments['x'], $this->arguments['y'], $this->arguments['width'], $this->arguments['height'], $this->arguments['style']);
        $this->renderChildren();
    }
}
