<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Adds a index in PDF
 */
class CreateIndexViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('pagePrefix', 'string', 'The prefix for the page numbers', false, 'page ');
    }

    /**
     * Adds a index in PDF
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->CreateIndex($this->arguments['pagePrefix']);
        $this->renderChildren();
    }
}
