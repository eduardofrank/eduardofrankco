<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Sets the font used to print character strings.
 */
class SetFontViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('family', 'string', 'Family font.', false, 'Arial');
        $this->registerArgument('style', 'string', 'Font style. (N: regular, B: bold, I: italic, U: underline)', false, 'N');
        $this->registerArgument('size', 'string', 'Font size in points.', false, '12');
    }

    public function render(): void
    {
        if (is_null($this->arguments['style']) || trim(strtoupper($this->arguments['style'])) === 'N') {
            $this->arguments['style'] = '';
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetFont($this->arguments['family'], $this->arguments['style'], $this->arguments['size']);
        $this->renderChildren();
    }
}
