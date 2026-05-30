<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Imports a TrueType, OpenType or Type1 font and makes it available.
 * It is necessary to generate a font definition file first with the MakeFont utility.
 * The definition file (and the font file itself when embedding) must
 * be present in the font directory. If it is not found, the error
 * "Could not include font definition file" is raised.
 */
class AddFontViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('family', 'string', 'Font family. The name can be chosen arbitrarily. If it is a standard family name, it will override the corresponding font.', false, '');
        $this->registerArgument('style', 'string', 'Font style.', false, '');
        $this->registerArgument('filename', 'string', 'The font definition file. By default, the name is built from the family and style, in lower case with no space.', false, '');
    }

    /**
     * Imports a TrueType, OpenType or Type1 font and makes it available.
     * It is necessary to generate a font definition file first with the MakeFont utility.
     * The definition file (and the font file itself when embedding) must
     * be present in the font directory. If it is not found, the error
     * "Could not include font definition file" is raised.
     */
    public function render(): void
    {
        if (trim(strtoupper($this->arguments['style'])) === 'N') {
            $this->arguments['style'] = '';
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->AddFont($this->arguments['family'], $this->arguments['style'], $this->arguments['filename']);
        $this->renderChildren();
    }
}
