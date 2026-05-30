<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the line width. By default, the value equals 0.2 mm.
 * The method can be called before the first page is created and the value is retained from page to page.
 */
class SetLineWidthViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('width', 'float', 'The width.', false, 0.0);
    }

    /**
     * Defines the line width. By default, the value equals 0.2 mm.
     * The method can be called before the first page is created and the value is retained from page to page.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetLineWidth($this->arguments['width']);
        $this->renderChildren();
    }
}
