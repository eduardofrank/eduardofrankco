<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Performs a line break. The current abscissa goes back to the left margin
 * and the ordinate increases by the amount passed in parameter.
 */
class LnViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('height', 'mixed', 'The height of the break. By default, the value equals the height of the last printed cell.', false, null);
    }

    /**
     * Performs a line break. The current abscissa goes back to the left margin
     * and the ordinate increases by the amount passed in parameter.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        if ($this->arguments['height'] !== null) {
            $fpdf->Ln($this->arguments['height']);
        } else {
            $fpdf->Ln();
        }
        $this->renderChildren();
    }
}
