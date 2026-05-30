<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Set the source file for PDF page templates
 */
class SetSourceFileViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('file', 'string', 'Filename with abs path of the source', false, 'EXT:fluid_fpdf/Resources/Private/Pdf/TYPO3_2012-logo_sRGB_color.pdf');
    }

    /**
     * Set the source file for PDF page templates
     *
     * @return  int Number of pages found in source file
     * @throws \Exception
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $absFile = GeneralUtility::getFileAbsFileName($this->arguments['file']);
        if ($absFile === null) {
            throw new \Exception('PDF-Template \'' . $absFile . '\' not found');
        }
        // set the source file
        $numberOfPagesInSourceFile = $fpdf->setSourceFile($absFile);
        $this->renderChildren();
        return $numberOfPagesInSourceFile;
    }
}
