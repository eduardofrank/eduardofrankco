<?php
class template_BackgroundImage_html_1113a69794451a9a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/ViewHelpers/Frame/BackgroundImage.html';
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
'0' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.file'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments95 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    <div class="frame-backgroundimage-container">
        <div id="';

$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImage.id')]);

$output3 .= '" class="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\ImplodeViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('backgroundImage.classes');
};

$arguments4 = [
'data' => NULL,
'as' => NULL,
'delimiter' => ' ',
];

$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\ImplodeViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output3 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'name' => 'styles',
'value' => '',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string13 = '{variant.breakpoint as integer}';
$array14 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string13, $array14);
};

$arguments11 = [
'value' => NULL,
'name' => 'breakpoint',
];
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;
$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12)]);

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string17 = '{variant.width as integer}';
$array18 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string17, $array18);
};

$arguments15 = [
'value' => NULL,
'name' => 'width',
];
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;
$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16)]);

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('width'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
];

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments88 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'name' => 'variantStyle',
'value' => '',
];
$renderChildrenClosure23 = ($arguments22['value'] !== null) ? function() use ($arguments22) { return $arguments22['value']; } : $renderChildrenClosure23;
$output21 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23)]);

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string29 = '{sizeConfig.multiplier as float}';
$array30 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string29, $array30);
};

$arguments27 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments27, $renderingContext, $renderChildrenClosure28)]);

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string33 = '{sizeWidth * width}';
$array34 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string33, $array34);
};

$arguments31 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32)]);

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string37 = '{sizeKey as float}';
$array38 = array (
  0 => '{sizeKey as float}',
  1 => '{sizeKey as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string37, $array38);
};

$arguments35 = [
'value' => NULL,
'name' => 'sizeDppx',
];
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36)]);

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('breakpoint'),
];

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments44 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output43 = '';

$output43 .= '(min-width: ';

$output43 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output43 .= 'px)';
return $output43;
},
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments44, $renderingContext)
;
};

$arguments39 = [
'value' => NULL,
'name' => 'mediaBreakpoint',
];
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments39, $renderingContext, $renderChildrenClosure40)]);

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'name' => 'mediaQuery',
'value' => '',
];
$renderChildrenClosure46 = ($arguments45['value'] !== null) ? function() use ($arguments45) { return $arguments45['value']; } : $renderChildrenClosure46;
$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46)]);

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments52 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression48(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
};

$arguments50 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure51 = ($arguments50['value'] !== null) ? function() use ($arguments50) { return $arguments50['value']; } : $renderChildrenClosure51;
$output49 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51)]);

$output49 .= '
                        ';
return $output49;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments52, $renderingContext)
;

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array53 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sizeDppx'),
'1' => ' > 1',
];

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments70 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression54(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output58 = '';

$output58 .= '(-webkit-min-device-pixel-ratio: ';

$output58 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output58 .= ')';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array59 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments62 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression60(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output61 = '';

$output61 .= ' and ';

$output61 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output61;
},
];

$output58 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments62, $renderingContext)
;
return $output58;
};

$arguments56 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output55 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments56, $renderingContext, $renderChildrenClosure57)]);

$output55 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
$output65 = '';

$output65 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output65 .= ', (min-resolution: ';

$output65 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output65 .= 'dppx)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array66 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments69 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output68 = '';

$output68 .= ' and ';

$output68 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output68;
},
];

$output65 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments69, $renderingContext)
;
return $output65;
};

$arguments63 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output55 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64)]);

$output55 .= '
                        ';
return $output55;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments70, $renderingContext)
;

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
$output73 = '';

$output73 .= $renderingContext->getVariableProvider()->getByPath('variantStyle');

$output73 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array74 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression75(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output76 = '';

$output76 .= '@media ';

$output76 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output76 .= ' { ';
return $output76;
},
];

$output73 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments77, $renderingContext)
;

$output73 .= '#';

$output73 .= $renderingContext->getVariableProvider()->getByPath('backgroundImage.id');

$output73 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$arguments78 = [
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
'image' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.file'),
'cropVariant' => $renderingContext->getVariableProvider()->getByPath('name'),
'maxWidth' => $renderingContext->getVariableProvider()->getByPath('sizeWidth'),
];

$output73 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::class, $arguments78, $renderingContext, $renderChildrenClosure79);

$output73 .= '\'); }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments82 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ' }';
},
];

$output73 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments82, $renderingContext)
;
return $output73;
};

$arguments71 = [
'value' => NULL,
'name' => 'variantStyle',
];
$renderChildrenClosure72 = ($arguments71['value'] !== null) ? function() use ($arguments71) { return $arguments71['value']; } : $renderChildrenClosure72;
$output26 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments71, $renderingContext, $renderChildrenClosure72)]);

$output26 .= '
                    ';
return $output26;
};

$arguments24 = [
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
'key' => 'sizeKey',
'as' => 'sizeConfig',
'iteration' => 'iteration',
];

$output21 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25);

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};
$output85 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('variantStyle');
};

$arguments86 = [
'value' => NULL,
'characters' => NULL,
'side' => 'both',
];

$output85 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\TrimViewHelper::class, $arguments86, $renderingContext, $renderChildrenClosure87);

$output85 .= ' ';

$output85 .= $renderingContext->getVariableProvider()->getByPath('styles');

$arguments83 = [
'name' => 'styles',
'value' => $output85,
];
$renderChildrenClosure84 = ($arguments83['value'] !== null) ? function() use ($arguments83) { return $arguments83['value']; } : $renderChildrenClosure84;
$output21 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments83, $renderingContext, $renderChildrenClosure84)]);

$output21 .= '
                ';
return $output21;
},
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments88, $renderingContext)
;

$output10 .= '
            ';
return $output10;
};

$arguments8 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('variants'),
'key' => 'name',
'as' => 'variant',
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('styles');
};

$arguments93 = [
'value' => NULL,
];
return isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();
};

$array91 = [
'0' => 1,
];

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments89 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'disabled' => NULL,
'csp' => NULL,
'priority' => false,
'inline' => false,
'identifier' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.id'),
'useNonce' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression92(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)),
    $renderingContext
),
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::class, $arguments89, $renderingContext, $renderChildrenClosure90);

$output3 .= '
        </div>
    </div>
';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments95, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#