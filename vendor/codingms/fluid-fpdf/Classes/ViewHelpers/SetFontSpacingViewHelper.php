<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the font/letter spacing.
 */
class SetFontSpacingViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('spacing', 'float', 'Letter spacing.', false, 0.0);
    }

    /**
     * Defines the font/letter spacing.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetFontSpacing($this->arguments['spacing']);
        $this->renderChildren();
    }
}
