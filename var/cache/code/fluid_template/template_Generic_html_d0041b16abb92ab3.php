<?php
class template_Generic_html_d0041b16abb92ab3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Templates/ContentElements/Generic.html';
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
 * section Main
 */
public function section_b0000ec1c8d5f383(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

    ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('content'),
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};

$arguments1 = [
'value' => NULL,
];
return isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};
$output5 = '';

$output5 .= 'tt_content.';

$output5 .= $renderingContext->getVariableProvider()->getByPath('data.CType');

$output5 .= '.20';

$arguments3 = [
'currentValueKey' => NULL,
'typoscriptObjectPath' => $output5,
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'table' => 'tt_content',
];
$renderChildrenClosure4 = ($arguments3['data'] !== null) ? function() use ($arguments3) { return $arguments3['data']; } : $renderChildrenClosure4;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments8, $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output9 = '';

$output9 .= '
';

$output9 .= '';

$output9 .= '
';

$output9 .= '';

$output9 .= '

';

    return $output9;
}

}

#