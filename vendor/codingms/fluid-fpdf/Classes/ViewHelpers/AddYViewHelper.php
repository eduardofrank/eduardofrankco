<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Adds a value to the current Y
 */
class AddYViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('add', 'float', 'The value to add', false, 0.0);
    }

    /**
     * Adds a value to the current Y
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetY($fpdf->getY() + $this->arguments['add']);
        $this->renderChildren();
    }
}
