<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use Exception;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Puts an image as eps or ai.
 */
class ImageEpsViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('filename', 'string', 'Path or URL of the image.', false, '');
        $this->registerArgument('x', 'float', 'Abscissa of the upper-left corner. If not specified or equal to null, the current abscissa is used.', false, 0.0);
        $this->registerArgument('y', 'float', 'Ordinate of the upper-left corner. If not specified or equal to null, the current ordinate is used; moreover, a page break is triggered first if necessary (in case automatic page breaking is enabled) and, after the call, the current ordinate is moved to the bottom of the image.', false, 0.0);
        $this->registerArgument('width', 'float', 'Width of the image in the page.', false, 0.0);
        $this->registerArgument('height', 'float', 'Height of the image in the page.', false, 0.0);
        $this->registerArgument('link', 'string', 'URL or identifier returned by AddLink().', false, '');
        $this->registerArgument('useBoundingBox', 'bool', 'Use bounding box.', false, true);
    }

    /**
     * Puts an image as eps or ai.
     *
     * @throws \Exception
     */
    public function render(): void
    {
        $filename = $this->arguments['filename'];
        // Ensure the filename isn't an absolute url
        // That may happen by using config.absRefPrefix
        if (substr($filename, 0, 4) === 'http') {
            $filename = parse_url($filename, PHP_URL_PATH);
            // Remove first slash
            $filename = substr((string)$filename, 1);
        }
        // Another problem by using config.absRefPrefix = /
        // Our image path could start with /
        if (substr($filename, 0, 1) === '/' && @!file_exists($filename)) {
            $filename = substr($filename, 1);
        }
        $fullFilename = GeneralUtility::getFileAbsFileName($filename);
        // If the file is not found, search in the default image-path
        if (!file_exists($fullFilename)) {
            /** @phpstan-ignore-next-line */
            $fullFilename = FPDF_IMAGEPATH . '/' . $filename;
        }
        // File not found exception
        if (!file_exists($fullFilename)) {
            throw new \Exception('Image \'' . $fullFilename . '/' . $filename . '\' not found');
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->ImageEps($fullFilename, $this->arguments['x'], $this->arguments['y'], $this->arguments['width'], $this->arguments['height'], $this->arguments['link'], $this->arguments['useBoundingBox']);
        $this->renderChildren();
    }
}
