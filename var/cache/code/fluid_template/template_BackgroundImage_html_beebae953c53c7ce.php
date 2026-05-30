<?php
class template_BackgroundImage_html_beebae953c53c7ce extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/ContentElements/Carousel/General/BackgroundImage.html';
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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
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
'0' => $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments122 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'name' => 'backgroundImageObject',
'value' => $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0'),
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
$output8 = '';

$output8 .= 'carousel-backgroundimage-';

$output8 .= $renderingContext->getVariableProvider()->getByPath('data.uid');

$output8 .= '-';

$output8 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid');

$arguments6 = [
'name' => 'backgroundImageIdentifier',
'value' => $output8,
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return 'carousel-backgroundimage';
};

$arguments9 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.parallax'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output15 .= ' carousel-backgroundimage-parallax';
return $output15;
};

$arguments13 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;return call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14)]);
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments16, $renderingContext)
;

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.fade'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output21 .= ' carousel-backgroundimage-fade';
return $output21;
};

$arguments19 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;return call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20)]);
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments22, $renderingContext)
;

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
$output27 = '';

$output27 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output27 .= ' carousel-backgroundimage-';

$output27 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter');
return $output27;
};

$arguments25 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;return call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments25, $renderingContext, $renderChildrenClosure26)]);
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments28, $renderingContext)
;

$output3 .= '
    <div class="carousel-backgroundimage-container">
        <div id="';

$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier')]);

$output3 .= '" class="';

$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClasses')]);

$output3 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'name' => 'styles',
'value' => '',
];
$renderChildrenClosure30 = ($arguments29['value'] !== null) ? function() use ($arguments29) { return $arguments29['value']; } : $renderChildrenClosure30;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments29, $renderingContext, $renderChildrenClosure30)]);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.{data.CType}.background_image');
};

$arguments31 = [
'value' => NULL,
'name' => 'imageConfig',
];
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32)]);

$output3 .= '
            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'aspectRatio' => NULL,
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections'),
];

$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34)]);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string40 = '{variant.breakpoint as integer}';
$array41 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string40, $array41);
};

$arguments38 = [
'value' => NULL,
'name' => 'breakpoint',
];
$renderChildrenClosure39 = ($arguments38['value'] !== null) ? function() use ($arguments38) { return $arguments38['value']; } : $renderChildrenClosure39;
$output37 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39)]);

$output37 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string44 = '{variant.width as integer}';
$array45 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string44, $array45);
};

$arguments42 = [
'value' => NULL,
'name' => 'width',
];
$renderChildrenClosure43 = ($arguments42['value'] !== null) ? function() use ($arguments42) { return $arguments42['value']; } : $renderChildrenClosure43;
$output37 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments42, $renderingContext, $renderChildrenClosure43)]);

$output37 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array46 = [
'0' => $renderingContext->getVariableProvider()->getByPath('width'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
];

$expression47 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments115 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression47(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output48 = '';

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$arguments49 = [
'name' => 'variantStyle',
'value' => '',
];
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output48 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments49, $renderingContext, $renderChildrenClosure50)]);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
$output53 = '';

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string56 = '{sizeConfig.multiplier as float}';
$array57 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string56, $array57);
};

$arguments54 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure55 = ($arguments54['value'] !== null) ? function() use ($arguments54) { return $arguments54['value']; } : $renderChildrenClosure55;
$output53 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments54, $renderingContext, $renderChildrenClosure55)]);

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string60 = '{sizeWidth * width}';
$array61 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string60, $array61);
};

$arguments58 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure59 = ($arguments58['value'] !== null) ? function() use ($arguments58) { return $arguments58['value']; } : $renderChildrenClosure59;
$output53 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments58, $renderingContext, $renderChildrenClosure59)]);

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string64 = '{sizeKey as float}';
$array65 = array (
  0 => '{sizeKey as float}',
  1 => '{sizeKey as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string64, $array65);
};

$arguments62 = [
'value' => NULL,
'name' => 'sizeDppx',
];
$renderChildrenClosure63 = ($arguments62['value'] !== null) ? function() use ($arguments62) { return $arguments62['value']; } : $renderChildrenClosure63;
$output53 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments62, $renderingContext, $renderChildrenClosure63)]);

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => $renderingContext->getVariableProvider()->getByPath('breakpoint'),
];

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments71 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output70 = '';

$output70 .= '(min-width: ';

$output70 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output70 .= 'px)';
return $output70;
},
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments71, $renderingContext)
;
};

$arguments66 = [
'value' => NULL,
'name' => 'mediaBreakpoint',
];
$renderChildrenClosure67 = ($arguments66['value'] !== null) ? function() use ($arguments66) { return $arguments66['value']; } : $renderChildrenClosure67;
$output53 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments66, $renderingContext, $renderChildrenClosure67)]);

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$arguments72 = [
'name' => 'mediaQuery',
'value' => '',
];
$renderChildrenClosure73 = ($arguments72['value'] !== null) ? function() use ($arguments72) { return $arguments72['value']; } : $renderChildrenClosure73;
$output53 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments72, $renderingContext, $renderChildrenClosure73)]);

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array74 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments79 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression75(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
};

$arguments77 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure78 = ($arguments77['value'] !== null) ? function() use ($arguments77) { return $arguments77['value']; } : $renderChildrenClosure78;
$output76 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments77, $renderingContext, $renderChildrenClosure78)]);

$output76 .= '
                        ';
return $output76;
},
];

$output53 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments79, $renderingContext)
;

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sizeDppx'),
'1' => ' > 1',
];

$expression81 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments97 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
$output85 = '';

$output85 .= '(-webkit-min-device-pixel-ratio: ';

$output85 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output85 .= ')';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array86 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments89 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression87(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output88 = '';

$output88 .= ' and ';

$output88 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output88;
},
];

$output85 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments89, $renderingContext)
;
return $output85;
};

$arguments83 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure84 = ($arguments83['value'] !== null) ? function() use ($arguments83) { return $arguments83['value']; } : $renderChildrenClosure84;
$output82 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments83, $renderingContext, $renderChildrenClosure84)]);

$output82 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
$output92 = '';

$output92 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output92 .= ', (min-resolution: ';

$output92 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output92 .= 'dppx)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array93 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments96 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression94(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output95 = '';

$output95 .= ' and ';

$output95 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output95;
},
];

$output92 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments96, $renderingContext)
;
return $output92;
};

$arguments90 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;
$output82 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments90, $renderingContext, $renderChildrenClosure91)]);

$output82 .= '
                        ';
return $output82;
},
];

$output53 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments97, $renderingContext)
;

$output53 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
$output100 = '';

$output100 .= $renderingContext->getVariableProvider()->getByPath('variantStyle');

$output100 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array101 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments104 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression102(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output103 = '';

$output103 .= '@media ';

$output103 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output103 .= ' { ';
return $output103;
},
];

$output100 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments104, $renderingContext)
;

$output100 .= '#';

$output100 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier');

$output100 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'src' => '',
'treatIdAsReference' => false,
'crop' => NULL,
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'base64' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('backgroundImageObject'),
'cropVariant' => $renderingContext->getVariableProvider()->getByPath('name'),
'maxWidth' => $renderingContext->getVariableProvider()->getByPath('sizeWidth'),
];

$output100 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::class, $arguments105, $renderingContext, $renderChildrenClosure106);

$output100 .= '\'); }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array107 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments109 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression108(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ' }';
},
];

$output100 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments109, $renderingContext)
;
return $output100;
};

$arguments98 = [
'value' => NULL,
'name' => 'variantStyle',
];
$renderChildrenClosure99 = ($arguments98['value'] !== null) ? function() use ($arguments98) { return $arguments98['value']; } : $renderChildrenClosure99;
$output53 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments98, $renderingContext, $renderChildrenClosure99)]);

$output53 .= '
                    ';
return $output53;
};

$arguments51 = [
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
'key' => 'sizeKey',
'as' => 'sizeConfig',
'iteration' => 'iteration',
];

$output48 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments51, $renderingContext, $renderChildrenClosure52);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};
$output112 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('variantStyle');
};

$arguments113 = [
'value' => NULL,
'characters' => NULL,
'side' => 'both',
];

$output112 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\TrimViewHelper::class, $arguments113, $renderingContext, $renderChildrenClosure114);

$output112 .= ' ';

$output112 .= $renderingContext->getVariableProvider()->getByPath('styles');

$arguments110 = [
'name' => 'styles',
'value' => $output112,
];
$renderChildrenClosure111 = ($arguments110['value'] !== null) ? function() use ($arguments110) { return $arguments110['value']; } : $renderChildrenClosure111;
$output48 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments110, $renderingContext, $renderChildrenClosure111)]);

$output48 .= '
                ';
return $output48;
},
];

$output37 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments115, $renderingContext)
;

$output37 .= '
            ';
return $output37;
};

$arguments35 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('variants'),
'key' => 'name',
'as' => 'variant',
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('styles');
};

$arguments120 = [
'value' => NULL,
];
return isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();
};

$array118 = [
'0' => 1,
];

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments116 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'disabled' => NULL,
'csp' => NULL,
'priority' => false,
'inline' => false,
'identifier' => $renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier'),
'useNonce' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression119(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)),
    $renderingContext
),
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::class, $arguments116, $renderingContext, $renderChildrenClosure117);

$output3 .= '
        </div>
    </div>
';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments122, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#