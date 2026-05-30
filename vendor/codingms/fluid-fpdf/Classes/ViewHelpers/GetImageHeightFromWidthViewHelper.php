<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the image height based on a giving width
 */
class GetImageHeightFromWidthViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('image', FileReference::class, 'Image file reference.');
        $this->registerArgument('width', 'int', 'Width of the target image');
    }

    /**
     * Returns the image height based on a giving width
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
            $onePercent = $originalWidth / 100;
            $widthPercent = $this->arguments['width'] / $onePercent;
            $return = $originalHeight / 100 * $widthPercent;
        }
        return $return;
    }
}
