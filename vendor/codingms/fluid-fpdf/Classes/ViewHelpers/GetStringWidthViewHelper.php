<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the length of a string in user unit. A font must be selected.
 */
class GetStringWidthViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('string', 'string', 'String to measure.', true, '');
    }

    /**
     * Returns the length of a string in user unit. A font must be selected
     *
     * @return float|int
     */
    public function render()
    {
        $string = mb_convert_encoding($this->arguments['string'], 'ISO-8859-1', 'UTF-8');
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $stringWidth = $fpdf->GetStringWidth($string);
        $this->renderChildren();
        return $stringWidth;
    }
}
