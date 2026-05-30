<?php
class template_Header_html_ce25ecfe59a8568b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/ContentElements/Header/Header.html';
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
'0' => $renderingContext->getVariableProvider()->getByPath('header'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments89 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
            <h1 class="';

$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output42 .= ' ';

$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output42 .= ' ';

$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output42 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '<span>';

$output45 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output45 .= '</span>';
return $output45;
};

$arguments43 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output42 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);

$output42 .= '
            </h1>
        ';
return $output42;
};

$arguments40 = [
'value' => 1,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
$output48 = '';

$output48 .= '
            <h2 class="';

$output48 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output48 .= ' ';

$output48 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output48 .= ' ';

$output48 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output48 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
$output51 = '';

$output51 .= '<span>';

$output51 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output51 .= '</span>';
return $output51;
};

$arguments49 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output48 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments49, $renderingContext, $renderChildrenClosure50);

$output48 .= '
            </h2>
        ';
return $output48;
};

$arguments46 = [
'value' => 2,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
$output54 = '';

$output54 .= '
            <h3 class="';

$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output54 .= ' ';

$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output54 .= ' ';

$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output54 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output57 = '';

$output57 .= '<span>';

$output57 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output57 .= '</span>';
return $output57;
};

$arguments55 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output54 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments55, $renderingContext, $renderChildrenClosure56);

$output54 .= '
            </h3>
        ';
return $output54;
};

$arguments52 = [
'value' => 3,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
$output60 = '';

$output60 .= '
            <h4 class="';

$output60 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output60 .= ' ';

$output60 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output60 .= ' ';

$output60 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output60 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '<span>';

$output63 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output63 .= '</span>';
return $output63;
};

$arguments61 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output60 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments61, $renderingContext, $renderChildrenClosure62);

$output60 .= '
            </h4>
        ';
return $output60;
};

$arguments58 = [
'value' => 4,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
$output66 = '';

$output66 .= '
            <h5 class="';

$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output66 .= ' ';

$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output66 .= ' ';

$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output66 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
$output69 = '';

$output69 .= '<span>';

$output69 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output69 .= '</span>';
return $output69;
};

$arguments67 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output66 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments67, $renderingContext, $renderChildrenClosure68);

$output66 .= '
            </h5>
        ';
return $output66;
};

$arguments64 = [
'value' => 5,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
$output72 = '';

$output72 .= '
            <h6 class="';

$output72 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output72 .= ' ';

$output72 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output72 .= ' ';

$output72 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output72 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '<span>';

$output75 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output75 .= '</span>';
return $output75;
};

$arguments73 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output72 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments73, $renderingContext, $renderChildrenClosure74);

$output72 .= '
            </h6>
        ';
return $output72;
};

$arguments70 = [
'value' => 6,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
            ';

$output78 .= '';

$output78 .= '';

$output78 .= '';

$output78 .= '
        ';
return $output78;
};

$arguments76 = [
'value' => 100,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
$output81 = '';

$output81 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array82 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments88 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression83(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output84 = '';

$output84 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$array87 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
'class' => $renderingContext->getVariableProvider()->getByPath('class'),
'displayClass' => $renderingContext->getVariableProvider()->getByPath('displayClass'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'link' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$arguments85 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array87,
];

$output84 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments85, $renderingContext, $renderChildrenClosure86);

$output84 .= '
            ';
return $output84;
},
];

$output81 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments88, $renderingContext)
;

$output81 .= '
        ';
return $output81;
};

$arguments79 = [
];

$output39 .= '';

$output39 .= '
    ';
return $output39;
};

$arguments4 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('layout'),
];

$output3 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 1;
}): return call_user_func(function() use ($renderingContext) {
$output6 = '';

$output6 .= '
            <h1 class="';

$output6 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output6 .= ' ';

$output6 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output6 .= ' ';

$output6 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output6 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '<span>';

$output9 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output9 .= '</span>';
return $output9;
};

$arguments7 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output6 .= '
            </h1>
        ';
return $output6;
});
case call_user_func(function() use ($renderingContext) {

return 2;
}): return call_user_func(function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            <h2 class="';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output10 .= ' ';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output10 .= ' ';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output10 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '<span>';

$output13 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output13 .= '</span>';
return $output13;
};

$arguments11 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output10 .= '
            </h2>
        ';
return $output10;
});
case call_user_func(function() use ($renderingContext) {

return 3;
}): return call_user_func(function() use ($renderingContext) {
$output14 = '';

$output14 .= '
            <h3 class="';

$output14 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output14 .= ' ';

$output14 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output14 .= ' ';

$output14 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output14 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '<span>';

$output17 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output17 .= '</span>';
return $output17;
};

$arguments15 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16);

$output14 .= '
            </h3>
        ';
return $output14;
});
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output18 = '';

$output18 .= '
            <h4 class="';

$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output18 .= ' ';

$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output18 .= ' ';

$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output18 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '<span>';

$output21 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output21 .= '</span>';
return $output21;
};

$arguments19 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output18 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20);

$output18 .= '
            </h4>
        ';
return $output18;
});
case call_user_func(function() use ($renderingContext) {

return 5;
}): return call_user_func(function() use ($renderingContext) {
$output22 = '';

$output22 .= '
            <h5 class="';

$output22 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output22 .= ' ';

$output22 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output22 .= ' ';

$output22 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output22 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '<span>';

$output25 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output25 .= '</span>';
return $output25;
};

$arguments23 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$output22 .= '
            </h5>
        ';
return $output22;
});
case call_user_func(function() use ($renderingContext) {

return 6;
}): return call_user_func(function() use ($renderingContext) {
$output26 = '';

$output26 .= '
            <h6 class="';

$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output26 .= ' ';

$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output26 .= ' ';

$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output26 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
$output29 = '';

$output29 .= '<span>';

$output29 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);

$output29 .= '</span>';
return $output29;
};

$arguments27 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'partsAs' => NULL,
'parts-as' => NULL,
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments27, $renderingContext, $renderChildrenClosure28);

$output26 .= '
            </h6>
        ';
return $output26;
});
case call_user_func(function() use ($renderingContext) {

return 100;
}): return call_user_func(function() use ($renderingContext) {
$output30 = '';

$output30 .= '
            ';

$output30 .= '';

$output30 .= '';

$output30 .= '';

$output30 .= '
        ';
return $output30;
});
default: return call_user_func(function() use ($renderingContext) {
$output31 = '';

$output31 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array32 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments38 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression33(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$array37 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
'class' => $renderingContext->getVariableProvider()->getByPath('class'),
'displayClass' => $renderingContext->getVariableProvider()->getByPath('displayClass'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'link' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$arguments35 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array37,
];

$output34 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36);

$output34 .= '
            ';
return $output34;
},
];

$output31 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments38, $renderingContext)
;

$output31 .= '
        ';
return $output31;
});
}
}, array($arguments4));

$output3 .= '
';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments89, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#