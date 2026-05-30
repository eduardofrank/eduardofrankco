<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the page and position a link points to.
 */
class SetLinkViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('link', 'string', 'The link identifier returned by AddLink().', false, '');
        $this->registerArgument('y', 'float', 'Ordinate of target position; -1 indicates the current position. The default value is 0 (top of page).', false, 0.0);
        $this->registerArgument('p', 'int', 'Number of target page; -1 indicates the current page. This is the default value.', false, 0);
    }

    /**
     * Defines the page and position a link points to.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetLink($this->arguments['link'], $this->arguments['y'], $this->arguments['p']);
        $this->renderChildren();
    }
}
