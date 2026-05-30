<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines an alias for the total number of pages. It will be substituted as the document is closed.
 */
class AliasNbPagesViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('alias', 'string', 'The alias. Default value: |nb|.', false, '|nb|');
    }

    /**
     * Defines an alias for the total number of pages. It will be substituted as the document is closed.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->AliasNbPages($this->arguments['alias']);
        $this->renderChildren();
    }
}
