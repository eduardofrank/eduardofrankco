<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Creates a new internal link and returns its identifier.
 * An internal link is a clickable area which directs to another place within the document.
 * The identifier can then be passed to Cell(), Write(), Image() or Link().
 * The destination is defined with SetLink().
 */
class AddLinkViewHelper extends AbstractViewHelper
{
    /**
     * Creates a new internal link and returns its identifier.
     * An internal link is a clickable area which directs to another place within the document.
     * The identifier can then be passed to Cell(), Write(), Image() or Link().
     * The destination is defined with SetLink().
     *
     * @return  int Returns link identifier
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $linkIdentifier = $fpdf->AddLink();
        $this->renderChildren();
        return $linkIdentifier;
    }
}
