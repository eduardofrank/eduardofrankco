<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the left, top and right margins. By default, they equal 1 cm.
 * Call this method to change them.
 */
class SetMarginsViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('left', 'float', 'Left margin.', false, 0.0);
        $this->registerArgument('top', 'float', 'Top margin.', false, 0.0);
        $this->registerArgument('right', 'float', 'Right margin. Default value is the left one.', false, 0.0);
    }

    /**
     * Defines the left, top and right margins. By default, they equal 1 cm.
     * Call this method to change them.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetMargins($this->arguments['left'], $this->arguments['top'], $this->arguments['right']);
        $this->renderChildren();
    }
}
