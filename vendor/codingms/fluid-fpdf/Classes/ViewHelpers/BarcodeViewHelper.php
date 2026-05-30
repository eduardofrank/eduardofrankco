<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Puts a barcode.
 */
class BarcodeViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('x', 'float', 'Abscissa of the upper-left corner.', true, 0.0);
        $this->registerArgument('y', 'float', 'Ordinate of the upper-left corner.', true, 0.0);
        $this->registerArgument('code', 'string', 'Code string.', true, '');
        $this->registerArgument('width', 'float', 'Width of the barcode in the page.', false, 0.0);
        $this->registerArgument('height', 'float', 'Height of the barcode in the page.', false, 0.0);
    }

    /**
     * Puts a barcode.
     *
     * @throws \Exception
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Code128($this->arguments['x'], $this->arguments['y'], $this->arguments['code'], $this->arguments['width'], $this->arguments['height']);
        $this->renderChildren();
    }
}
