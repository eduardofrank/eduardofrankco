<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Adds a new page to the document.
 */
class AddPageViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('orientation', 'string', 'Page orientation. Possible values are (case insensitive): P or Portrait, L or Landscape', false, 'P');
        $this->registerArgument('size', 'string', 'Page size, for example: A3, A4, A5. A custom size like 213x321 (in mm) is also possible.', false, 'A4');
    }

    /**
     * Adds a new page to the document.
     */
    public function render(): void
    {
        //
        // Explode sizes
        if (strstr($this->arguments['size'], 'x')) {
            $sizes = explode('x', $this->arguments['size']);
            if (count($sizes) === 2) {
                $sizes[0] = (int)$sizes[0];
                $sizes[1] = (int)$sizes[1];
                if ($sizes[0] > 0 && $sizes[1] > 0) {
                    $this->arguments['size'] = $sizes;
                }
            }
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->AddPage($this->arguments['orientation'], $this->arguments['size']);
        $this->renderChildren();
    }
}
