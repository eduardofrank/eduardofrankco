<?php
class template_Default_html_e41c94ec2b1c842f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Templates/Page/Default.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        
return 'Default';
    }
    public function hasLayout(): bool {
        return true;
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
 * section Border
 */
public function section_65c5fd7b1d848d04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 3,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide'),
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

';

    return $output0;
}
/**
 * section Main
 */
public function section_b0000ec1c8d5f383(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output4 = '';

$output4 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 8,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide'),
];

$arguments5 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContent',
'data' => $array7,
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6);

$output4 .= '

    <div class="section section-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 0,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide'),
];

$arguments8 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContent',
'data' => $array10,
];
$renderChildrenClosure9 = ($arguments8['data'] !== null) ? function() use ($arguments8) { return $arguments8['data']; } : $renderChildrenClosure9;
$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9);

$output4 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 9,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide'),
];

$arguments11 = [
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.dynamicContent',
'data' => $array13,
];
$renderChildrenClosure12 = ($arguments11['data'] !== null) ? function() use ($arguments11) { return $arguments11['data']; } : $renderChildrenClosure12;
$output4 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output4 .= '

';

    return $output4;
}
/**
 * section Footer
 */
public function section_c78e0fe1614dd0fe(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output14 = '';

$output14 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Structure/FooterContent',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16);

$output14 .= '

';

    return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output17 = '';

$output17 .= '
';

$output17 .= '';

$output17 .= '
';

$output17 .= '';

$output17 .= '
';

$output17 .= '';

$output17 .= '
';

$output17 .= '';

$output17 .= '

';

    return $output17;
}

}

#