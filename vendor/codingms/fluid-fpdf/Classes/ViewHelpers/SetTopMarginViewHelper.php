<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the top margin. The method can be called before creating the first page.
 */
class SetTopMarginViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('margin', 'float', 'The margin.', false, 0.0);
    }

    /**
     * Defines the top margin. The method can be called before creating the first page.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetTopMargin($this->arguments['margin']);
        $this->renderChildren();
    }
}
