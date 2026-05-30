<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Send the document to a given destination: browser, file or string.
 * In the case of browser, the plug-in may be used (if present) or a
 * download ("Save as" dialog box) may be forced.
 * The method first calls Close() if necessary to terminate the document.
 */
class OutputViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('filename', 'string', 'The name of the file', false, 'FluidFpdf.pdf');
        $this->registerArgument('destination', 'string', 'Destination where to send the document. It can take one of the following values: I, D, F, S', false, 'I');
    }

    /**
     * Send the document to a given destination: browser, file or string.
     * In the case of browser, the plug-in may be used (if present) or a
     * download ("Save as" dialog box) may be forced.
     * The method first calls Close() if necessary to terminate the document.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Output($this->arguments['filename'], $this->arguments['destination']);
        $this->renderChildren();
    }
}
