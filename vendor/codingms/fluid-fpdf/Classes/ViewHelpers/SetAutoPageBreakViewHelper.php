<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Enables or disables the automatic page breaking mode.
 * When enabling, the second parameter is the distance from
 * the bottom of the page that defines the triggering limit.
 * By default, the mode is on and the margin is 2 cm.
 */
class SetAutoPageBreakViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('auto', 'bool', 'Boolean indicating if mode should be on or off.', false, true);
        $this->registerArgument('margin', 'float', 'Distance from the bottom of the page.', false, 20.0);
    }

    /**
     * Enables or disables the automatic page breaking mode.
     * When enabling, the second parameter is the distance from
     * the bottom of the page that defines the triggering limit.
     * By default, the mode is on and the margin is 2 cm.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetAutoPageBreak($this->arguments['auto'], $this->arguments['margin']);
        $this->renderChildren();
    }
}
