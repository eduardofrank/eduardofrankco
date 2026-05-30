<?php
class template_Default_html_62989017953c9030 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Layouts/ContentElements/Default.html';
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
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'multiplier' => NULL,
'gutters' => NULL,
'corrections' => NULL,
'aspectRatio' => NULL,
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.variants'),
];

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.backendlayout.{backendlayout}');
};

$arguments3 = [
'value' => NULL,
'name' => 'backendlayoutConfig',
];
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('backendlayoutConfig.{data.colPos}');
};

$arguments5 = [
'value' => NULL,
'name' => 'columnConfig',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('columnConfig'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'aspectRatio' => NULL,
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('columnConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('columnConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('columnConfig.corrections'),
];

$output9 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11)]);

$output9 .= '
';
return $output9;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('containerContext'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments29 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.container.{context.CType}');
};

$arguments19 = [
'value' => NULL,
'name' => 'containerConfig',
];
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20)]);

$output18 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('containerConfig.{context.childColPos}');
};

$arguments21 = [
'value' => NULL,
'name' => 'containerColumnConfig',
];
$renderChildrenClosure22 = ($arguments21['value'] !== null) ? function() use ($arguments21) { return $arguments21['value']; } : $renderChildrenClosure22;
$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22)]);

$output18 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'aspectRatio' => NULL,
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.corrections'),
];

$output25 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27)]);

$output25 .= '
        ';
return $output25;
},
];

$output18 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments28, $renderingContext)
;

$output18 .= '
    ';
return $output18;
};

$arguments16 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('containerContext'),
'as' => 'context',
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output15 .= '
';
return $output15;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments29, $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\FrameViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array34 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID'),
];

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression35(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output36 = '';

$output36 .= '<a id="c';

$output36 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output36 .= '"></a>';
return $output36;
},
];

$output33 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments37, $renderingContext)
;

$output33 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'DropIn/Before/All',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments42, $renderingContext, $renderChildrenClosure43);
};

$array40 = [
'0' => 'true',
];

$expression41 = function($context) {return TRUE;};

$arguments38 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Before',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression41(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
];

$output33 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output33 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/All',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments48, $renderingContext, $renderChildrenClosure49);
};

$array46 = [
'0' => 'true',
];

$expression47 = function($context) {return TRUE;};

$arguments44 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Header',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression47(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)),
    $renderingContext
),
];

$output33 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments44, $renderingContext, $renderChildrenClosure45);

$output33 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$array52 = [
'0' => 'true',
];

$expression53 = function($context) {return TRUE;};

$arguments50 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Main',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];

$output33 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51);

$output33 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Footer/All',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments58, $renderingContext, $renderChildrenClosure59);
};

$array56 = [
'0' => 'true',
];

$expression57 = function($context) {return TRUE;};

$arguments54 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Footer',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression57(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)),
    $renderingContext
),
];

$output33 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments54, $renderingContext, $renderChildrenClosure55);

$output33 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$arguments64 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'DropIn/After/All',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments64, $renderingContext, $renderChildrenClosure65);
};

$array62 = [
'0' => 'true',
];

$expression63 = function($context) {return TRUE;};

$arguments60 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'After',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression63(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)),
    $renderingContext
),
];

$output33 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61);

$output33 .= '
';
return $output33;
};
$output32 = '';

$output32 .= 'c';

$output32 .= $renderingContext->getVariableProvider()->getByPath('data.uid');

$arguments30 = [
'height' => 'default',
'id' => $output32,
'type' => $renderingContext->getVariableProvider()->getByPath('data.CType'),
'size' => 'default',
'layout' => $renderingContext->getVariableProvider()->getByPath('data.frame_layout'),
'frameClass' => $renderingContext->getVariableProvider()->getByPath('data.frame_class'),
'frameAttributes' => $renderingContext->getVariableProvider()->getByPath('frameAttributes'),
'spaceBefore' => $renderingContext->getVariableProvider()->getByPath('data.space_before_class'),
'spaceAfter' => $renderingContext->getVariableProvider()->getByPath('data.space_after_class'),
'options' => $renderingContext->getVariableProvider()->getByPath('data.frame_options'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'backgroundColor' => $renderingContext->getVariableProvider()->getByPath('data.background_color_class'),
'backgroundImage' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.0'),
'backgroundImageOptions' => $renderingContext->getVariableProvider()->getByPath('data.background_image_options'),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\FrameViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31);

$output0 .= '

';

    return $output0;
}

}

#