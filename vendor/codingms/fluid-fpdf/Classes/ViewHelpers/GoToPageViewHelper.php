<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Got to page in PDF
 */
class GoToPageViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('number', 'int', 'Number of the page. -1 means the last page.', false, -1);
    }

    /**
     * Got to page in PDF
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->GoToPage($this->arguments['number']);
        $this->renderChildren();
    }
}
