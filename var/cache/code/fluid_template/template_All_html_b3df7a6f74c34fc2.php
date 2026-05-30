<?php
class template_All_html_b3df7a6f74c34fc2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/ContentElements/Header/All.html';
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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array1 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_layout'),
'1' => ' != 100',
];

$expression2 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 100);};

$arguments29 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('data.subheader'),
'3' => ' || ',
'4' => $renderingContext->getVariableProvider()->getByPath('data.date'),
];

$expression5 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};

$arguments28 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        <div class="frame-header">
            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_position'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= 'text-';

$output10 .= $renderingContext->getVariableProvider()->getByPath('data.header_position');

return $output10;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
];

$array9 = [
'header' => $renderingContext->getVariableProvider()->getByPath('data.header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('data.header_layout'),
'class' => $renderingContext->getVariableProvider()->getByPath('settings.header.class'),
'displayClass' => $renderingContext->getVariableProvider()->getByPath('data.header_class'),
'positionClass' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments13, $renderingContext)
,
'link' => $renderingContext->getVariableProvider()->getByPath('data.header_link'),
'default' => $renderingContext->getVariableProvider()->getByPath('settings.header.defaultHeaderType'),
];

$arguments7 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array9,
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_position'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments20 = [
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= 'text-';

$output17 .= $renderingContext->getVariableProvider()->getByPath('data.header_position');

return $output17;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
];

$array16 = [
'subheader' => $renderingContext->getVariableProvider()->getByPath('data.subheader'),
'layout' => $renderingContext->getVariableProvider()->getByPath('data.header_layout'),
'class' => $renderingContext->getVariableProvider()->getByPath('settings.subheader.class'),
'displayClass' => $renderingContext->getVariableProvider()->getByPath('data.subheader_class'),
'positionClass' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments20, $renderingContext)
,
'default' => $renderingContext->getVariableProvider()->getByPath('settings.header.defaultHeaderType'),
];

$arguments14 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/SubHeader',
'arguments' => $array16,
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array25 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.header_position'),
];

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= 'text-';

$output24 .= $renderingContext->getVariableProvider()->getByPath('data.header_position');

return $output24;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression26(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)),
    $renderingContext
),
];

$array23 = [
'date' => $renderingContext->getVariableProvider()->getByPath('data.date'),
'format' => $renderingContext->getVariableProvider()->getByPath('settings.header.date.format'),
'positionClass' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments27, $renderingContext)
,
];

$arguments21 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Date',
'arguments' => $array23,
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output6 .= '
        </div>
    ';
return $output6;
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments28, $renderingContext)
;

$output3 .= '
';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments29, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#