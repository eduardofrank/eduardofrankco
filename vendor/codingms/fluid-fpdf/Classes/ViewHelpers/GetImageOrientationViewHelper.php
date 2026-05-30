<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the image orientation: square, portrait or landscape
 */
class GetImageOrientationViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('image', FileReference::class, 'Image file reference.');
    }

    /**
     * Returns the image orientation: square, portrait or landscape
     *
     * @return string|null
     */
    public function render()
    {
        $return = null;
        /** @var FileReference $image */
        $image = $this->arguments['image'];
        if ($image !== null) {
            $file = $image->getOriginalResource();
            $filePublicUrl = ltrim((string)$file->getPublicUrl(), '/');
            $filePath = GeneralUtility::getFileAbsFileName($filePublicUrl);
            if (file_exists($filePath) && is_array(getimagesize($filePath))) {
                [$width, $height] = getimagesize($filePath);
                if ($width === $height) {
                    $return = 'square';
                } else {
                    if ($width > $height) {
                        $return = 'landscape';
                    } else {
                        $return = 'portrait';
                    }
                }
            }
        }
        return $return;
    }
}
