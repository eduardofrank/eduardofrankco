<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the size of the current font.
 */
class SetFontSizeViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('size', 'float', 'The size (in points).', false, 0.0);
    }

    /**
     * Defines the size of the current font.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetFontSize($this->arguments['size']);
        $this->renderChildren();
    }
}
