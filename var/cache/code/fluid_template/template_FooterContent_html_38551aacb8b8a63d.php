<?php
class template_FooterContent_html_38551aacb8b8a63d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/Page/Structure/FooterContent.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
<section class="section footer-section footer-section-content">
    <div class="container">
        <div class="section-row">
            <div class="section-column footer-section-content-column footer-section-content-column-left">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 10,
'slide' => -1,
];

$arguments1 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContent',
'data' => $array3,
];
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
            </div>
            <div class="section-column footer-section-content-column footer-section-content-column-middle">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$array6 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 11,
'slide' => -1,
];

$arguments4 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContent',
'data' => $array6,
];
$renderChildrenClosure5 = ($arguments4['data'] !== null) ? function() use ($arguments4) { return $arguments4['data']; } : $renderChildrenClosure5;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output0 .= '
            </div>
            <div class="section-column footer-section-content-column footer-section-content-column-right">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$array9 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 12,
'slide' => -1,
];

$arguments7 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContent',
'data' => $array9,
];
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output0 .= '
            </div>
        </div>
    </div>
</section>

';

    return $output0;
}

}

#