<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Set an XML file for e-invoice, for instance
 */
class SetXmlFileViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('file', 'string', 'File name', true);
        $this->registerArgument('profile', 'string', 'Font style.', false, 'EN 16931');
    }

    public function render(): void
    {
        if (str_starts_with($this->arguments['file'], 'EXT:')) {
            $this->arguments['file'] = GeneralUtility::getFileAbsFileName($this->arguments['file']);
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetXmlFile($this->arguments['file'], $this->arguments['profile']);
    }
}
