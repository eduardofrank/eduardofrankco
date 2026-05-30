<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the right margin. The method can be called before creating the first page.
 */
class SetRightMarginViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('margin', 'float', 'The margin.', false, 0.0);
    }

    /**
     * Defines the right margin. The method can be called before creating the first page.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetRightMargin($this->arguments['margin']);
        $this->renderChildren();
    }
}
