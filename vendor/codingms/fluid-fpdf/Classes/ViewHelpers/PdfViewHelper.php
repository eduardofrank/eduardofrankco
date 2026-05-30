<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use FluidFpdf;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * FPDF
 */
class PdfViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('filename', 'string', 'The name of the file', false, 'FluidFpdf.pdf');
        $this->registerArgument('destination', 'string', 'Destination where to send the document. It can take one of the following values: I, D, F, S', false, 'I');
        $this->registerArgument('orientation', 'string', 'Default page orientation.', false, 'P');
        $this->registerArgument('unit', 'string', 'User unit.', false, 'mm');
        $this->registerArgument('size', 'string', 'Page size, for example: A3, A4, A5. A custom size like 213x321 (in mm) is also possible.', false, 'A4');
        $this->registerArgument('title', 'string', 'Defines the title of the document.', false, 'Fluid-Fpdf');
        $this->registerArgument('subject', 'string', 'Defines the subject of the document.', false, 'Fluid-Fpdf');
        $this->registerArgument('author', 'string', 'Defines the author of the document.', false, 'Fluid-Fpdf');
        $this->registerArgument('keywords', 'string', 'Associates keywords with the document, generally in the form \'keyword1 keyword2 ...\'.', false, 'TYPO3 Fluid FPDF typo3@coding.ms');
        $this->registerArgument('fontPath', 'string', 'Defines the font path for the included fonts (default: EXT:fluid_fpdf/Resources/Private/Fonts)', false, 'EXT:fluid_fpdf/Resources/Private/Fonts');
        $this->registerArgument('imagePath', 'string', 'Defines the image path for the included images (default: EXT:fluid_fpdf/Resources/Private/Images)', false, 'EXT:fluid_fpdf/Resources/Private/Images');
        $this->registerArgument('footerTemplate', 'string', 'Defines the footer template (for example: EXT:fluid_fpdf/Resources/Private/Templates/Pdf/Footer.html)', false, '');
        $this->registerArgument('footerArguments', 'array', 'Defines the footer arguments. Pass required variables by using an array.', false, []);
        $this->registerArgument('characterMap', 'array', 'Defines a character map, for mapping characters. For Example, for mapping €-character with character at ASCII-No. 162, use {162: \'€\'}', false, []);
    }

    protected function requiredLibraries(): void
    {
        // If FPDF-Class not available
        // require it!
        if (!class_exists('FPDF')) {
            $libraryPath = ExtensionManagementUtility::extPath('fluid_fpdf') . 'Resources/Private/Php/';
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'fpdf/fpdf.php');
        }
        // ..also FPDI-Class
        if (!class_exists('FPDI')) {
            $libraryPath = ExtensionManagementUtility::extPath('fluid_fpdf') . 'Resources/Private/Php/';
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'fpdi/src/autoload.php');
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'fpdi/src/FpdiTrait.php');
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'fpdi/src/FpdfTpl.php');
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'fpdi/src/Fpdi.php');
            // ..also FluidFpdf-Class
            if (!class_exists('FluidFpdf')) {
                $libraryPath = ExtensionManagementUtility::extPath('fluid_fpdf') . 'Resources/Private/Php/';
                /** @noinspection PhpIncludeInspection */
                require_once($libraryPath . 'FluidFpdf.php');
            }
        }
    }

    protected function getInstance($orientation, $unit, $size)
    {
        /** @phpstan-ignore-next-line */
        return new \FluidFpdf($orientation, $unit, $size);
    }

    /**
     * Creates a new PDF
     *
     * @return  string
     * @throws \Exception
     */
    public function render()
    {
        $this->requiredLibraries();
        //
        // Set Font-Path
        if (!defined('FPDF_FONTPATH')) {
            $fontDir = GeneralUtility::getFileAbsFileName($this->arguments['fontPath']);
            if ($fontDir === null) {
                $fontDir = str_replace('EXT:', 'typo3conf/ext/', $this->arguments['fontPath']);
                $fontDir = GeneralUtility::getFileAbsFileName($fontDir);
            }
            if ($fontDir === null) {
                throw new \Exception('FontPath \'' . $this->arguments['fontPath'] . '\' not found');
            }
            define('FPDF_FONTPATH', $fontDir);
        }
        //
        // Set Font-Path
        if (!defined('FPDF_IMAGEPATH')) {
            $imageDir = GeneralUtility::getFileAbsFileName($this->arguments['imagePath']);
            if ($imageDir === null) {
                $imageDir = str_replace('EXT:', 'typo3conf/ext/', $this->arguments['imagePath']);
                $imageDir = GeneralUtility::getFileAbsFileName($imageDir);
            }
            if ($imageDir === null) {
                throw new \Exception('ImagePath \'' . $this->arguments['imagePath'] . '\' not found');
            }
            define('FPDF_IMAGEPATH', $imageDir);
        }
        // Set character map
        if (!is_array($this->arguments['characterMap'])) {
            $this->arguments['characterMap'] = [];
        }
        $this->templateVariableContainer->add('characterMap', $this->arguments['characterMap']);
        //
        // Explode sizes
        if (strstr($this->arguments['size'], 'x')) {
            $sizes = explode('x', $this->arguments['size']);
            if (count($sizes) === 2) {
                $sizes[0] = (int)$sizes[0];
                $sizes[1] = (int)$sizes[1];
                if ($sizes[0] > 0 && $sizes[1] > 0) {
                    $this->arguments['size'] = $sizes;
                }
            }
        }
        //
        // Create a new FPDF
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->getInstance($this->arguments['orientation'], $this->arguments['unit'], $this->arguments['size']);

        /**
         * @Todo: isUTF8 integration
         */

        // Set title, subject, author
        $fpdf->SetTitle($this->arguments['title']); //  [, boolean isUTF8]
        $fpdf->SetSubject($this->arguments['subject']); // [, boolean isUTF8])
        $fpdf->SetAuthor($this->arguments['author']); // [, boolean isUTF8])
        $fpdf->SetKeywords($this->arguments['keywords']); // [, boolean isUTF8])
        $fpdf->SetCreator('TYPO3 Fluid-FPDF by www.coding.ms - typo3@coding.ms'); // [, boolean isUTF8])

        $fpdf->SetFooterTemplate($this->arguments['footerTemplate']);
        $fpdf->SetFooterArguments($this->arguments['footerArguments']);

        // Change the pages alias, because of the default is parsed by Fluid
        $fpdf->AliasNbPages('|nb|');

        // Create PDF with child elements
        $this->templateVariableContainer->add('fpdf', $fpdf);
        $this->renderChildren();

        $this->templateVariableContainer->remove('fpdf');
        if ($this->arguments['destination'] === 'I' || $this->arguments['destination'] === 'D') {
            $fpdf->Output($this->arguments['destination'], $this->arguments['filename']);
            exit();
        }
        if ($this->arguments['destination'] === 'S') {
            return $fpdf->Output($this->arguments['destination'], $this->arguments['filename']);
        }
        if ($this->arguments['destination'] === 'F') {
            return $fpdf->Output($this->arguments['destination'], $this->arguments['filename']);
        }
        return '';
    }
}
