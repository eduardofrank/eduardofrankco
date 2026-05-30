<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the left margin. The method can be called before creating the first page.
 * If the current abscissa gets out of page, it is brought back to the margin.
 */
class SetLeftMarginViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('margin', 'float', 'The margin.', false, 0.0);
    }

    /**
     * Defines the left margin. The method can be called before creating the first page.
     * If the current abscissa gets out of page, it is brought back to the margin.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetLeftMargin($this->arguments['margin']);
        $this->renderChildren();
    }
}
