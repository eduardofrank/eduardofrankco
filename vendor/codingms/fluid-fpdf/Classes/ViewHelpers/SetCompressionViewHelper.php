<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Activates or deactivates page compression. When activated, the internal
 * representation of each page is compressed, which leads to a compression
 * ratio of about 2 for the resulting document.
 * Compression is on by default.
 */
class SetCompressionViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('compress', 'bool', 'Boolean indicating if compression must be enabled.', false, true);
    }

    /**
     * Activates or deactivates page compression. When activated, the internal
     * representation of each page is compressed, which leads to a compression
     * ratio of about 2 for the resulting document.
     * Compression is on by default.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetCompression($this->arguments['compress']);
        $this->renderChildren();
    }
}
