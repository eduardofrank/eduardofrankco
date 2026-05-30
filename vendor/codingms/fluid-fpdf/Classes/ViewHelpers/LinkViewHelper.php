<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Puts a link on a rectangular area of the page.
 * Text or image links are generally put via Cell(), Write() or Image(),
 * but this method can be useful for instance to define a clickable
 * area inside an image.
 */
class LinkViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('x', 'float', 'Abscissa of the upper-left corner of the rectangle.', false, 0.0);
        $this->registerArgument('y', 'float', 'Ordinate of the upper-left corner of the rectangle.', false, 0.0);
        $this->registerArgument('width', 'float', 'Width of the rectangle.', false, 0.0);
        $this->registerArgument('height', 'float', 'Height of the rectangle.', false, 0.0);
        $this->registerArgument('link', 'string', 'URL or identifier returned by AddLink().', false, '');
    }

    /**
     * Puts a link on a rectangular area of the page.
     * Text or image links are generally put via Cell(), Write() or Image(),
     * but this method can be useful for instance to define a clickable
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Link($this->arguments['x'], $this->arguments['y'], $this->arguments['width'], $this->arguments['height'], $this->arguments['link']);
        $this->renderChildren();
    }
}
