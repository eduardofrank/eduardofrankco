<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the way the document is to be displayed by the viewer.
 * The zoom level can be set: pages can be displayed entirely on screen,
 * occupy the full width of the window, use real size, be scaled by a
 * specific zooming factor or use viewer default (configured in the
 * Preferences menu of Adobe Reader).
 * The page layout can be specified too: single at once, continuous
 * display, two columns or viewer default.
 */
class SetDisplayModeViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('zoom', 'string', 'The zoom to use.', false, 'default');
        $this->registerArgument('layout', 'string', 'The page layout.', false, 'default');
    }

    /**
     * Defines the way the document is to be displayed by the viewer.
     * The zoom level can be set: pages can be displayed entirely on screen,
     * occupy the full width of the window, use real size, be scaled by a
     * specific zooming factor or use viewer default (configured in the
     * Preferences menu of Adobe Reader).
     * The page layout can be specified too: single at once, continuous
     * display, two columns or viewer default.
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetDisplayMode($this->arguments['zoom'], $this->arguments['layout']);
        $this->renderChildren();
    }
}
