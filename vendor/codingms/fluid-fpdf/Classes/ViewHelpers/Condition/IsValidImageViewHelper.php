<?php

namespace CodingMs\FluidFpdf\ViewHelpers\Condition;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

class IsValidImageViewHelper extends AbstractConditionViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('publicUrl', 'string', 'Image url', true);
        $this->registerArgument('vector', 'boolean', 'Is vector image format', false, false);
    }

    /**
     * This method decides if the condition is TRUE or FALSE. It can be overridden in extending ViewHelpers to adjust functionality.
     *
     * @param array<string, mixed> $arguments ViewHelper arguments to evaluate the condition for this ViewHelper, allows for flexibility in overriding this method.
     * @return bool
     */
    public static function verdict(array $arguments, RenderingContextInterface $renderingContext): bool
    {
        $pathInfo = pathinfo(strtolower($arguments['publicUrl']));
        $validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if ($arguments['vector'] === true) {
            $validExtensions = ['eps', 'ai'];
        }
        return in_array($pathInfo['extension'], $validExtensions);
    }
}
