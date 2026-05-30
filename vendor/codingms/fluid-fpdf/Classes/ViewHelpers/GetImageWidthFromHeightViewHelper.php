<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the image width based on a giving height
 */
class GetImageWidthFromHeightViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('image', FileReference::class, 'Image file reference.');
        $this->registerArgument('height', 'int', 'Height of the target image');
    }

    /**
     * Returns the image width based on a giving height
     *
     * @return float|int
     */
    public function render()
    {
        /** @var FileReference $image */
        $image = $this->arguments['image'];
        $file = $image->getOriginalResource();
        $filePublicUrl = ltrim((string)$file->getPublicUrl(), '/');
        $filePath = GeneralUtility::getFileAbsFileName($filePublicUrl);
        $return = 0;
        if (file_exists($filePath) && is_array(getimagesize($filePath))) {
            [$originalWidth, $originalHeight] = getimagesize($filePath);
            $onePercent = $originalHeight / 100;
            $heightPercent = $this->arguments['height'] / $onePercent;
            $return = $originalWidth / 100 * $heightPercent;
        }
        return $return;
    }
}
