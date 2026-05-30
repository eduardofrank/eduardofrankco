<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * FPDF
 */
class PdfAViewHelper extends PdfViewHelper
{
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
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'FluidFpdf.php');
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'zugferd/zugferd.php');
        }
        // ..also FluidFpdf-Class
        if (!class_exists('FluidFpdfA')) {
            $libraryPath = ExtensionManagementUtility::extPath('fluid_fpdf') . 'Resources/Private/Php/';
            /** @noinspection PhpIncludeInspection */
            require_once($libraryPath . 'FluidFpdfA.php');
        }
    }

    protected function getInstance($orientation, $unit, $size)
    {
        /** @phpstan-ignore-next-line */
        return new \FluidFpdfA($orientation, $unit, $size);
    }
}
