<?php
class template_Footer_html_3ab9c1d5bedecd9e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/Page/Navigation/Footer.html';
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
 * section FooterMenu
 */
public function section_b4dbd129cae52e34(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array1 = [
'0' => $renderingContext->getVariableProvider()->getByPath('menu'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments31 = [
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
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string6 = '{level + 1}';
$array7 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);

$arguments4 = [
'name' => 'level',
'value' => \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string6, $array7),
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output3 .= '
            <ul class="footer-navigation-list footer-navigation-list-level-';

$output3 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('level')]);

$output3 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                    <li class="footer-navigation-item footer-navigation-item-level-';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('level')]);

$output10 .= '">
                        <a class="footer-navigation-link footer-navigation-link-level-';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('level')]);

$output10 .= '" href="';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output10 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array12 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.target'),
];

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'__then' => function() use ($renderingContext) {
$output11 = '';

$output11 .= ' target="';

$output11 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target')]);

$output11 .= '"';

return $output11;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression13(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments14, $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.target'),
'1' => ' == "_blank"',
];

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};

$arguments17 = [
'__then' => function() use ($renderingContext) {

return ' rel="noopener noreferrer"';
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments17, $renderingContext)
;

$output10 .= ' title="';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output10 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.icon.enable'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('item.icon'),
];

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments23 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                                <span class="footer-navigation-link-icon">
                                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'icon' => $renderingContext->getVariableProvider()->getByPath('item.icon'),
'width' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.icon.width'),
'height' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.icon.height'),
];

$output20 .= $renderingContext->getViewHelperInvoker()->invoke(BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output20 .= '
                                </span>
                            ';
return $output20;
},
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments23, $renderingContext)
;

$output10 .= '
                            <span class="footer-navigation-link-text">
                                ';

$output10 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output10 .= '
                            </span>
                        </a>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.children'),
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$array29 = [
'menu' => $renderingContext->getVariableProvider()->getByPath('item.children'),
'level' => $renderingContext->getVariableProvider()->getByPath('level'),
'theme' => $renderingContext->getVariableProvider()->getByPath('theme'),
];

$arguments27 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'FooterMenu',
'arguments' => $array29,
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments27, $renderingContext, $renderChildrenClosure28);

$output26 .= '
                        ';
return $output26;
},
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments30, $renderingContext)
;

$output10 .= '
                    </li>
                ';
return $output10;
};

$arguments8 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('menu'),
'as' => 'item',
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9);

$output3 .= '
            </ul>
        ';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments31, $renderingContext)
;

$output0 .= '
    ';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output32 = '';

$output32 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$array35 = [
'menu' => $renderingContext->getVariableProvider()->getByPath('footernavigation'),
'level' => 0,
'theme' => $renderingContext->getVariableProvider()->getByPath('theme'),
];

$arguments33 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'FooterMenu',
'arguments' => $array35,
];

$output32 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34);

$output32 .= '
    ';

$output32 .= '';

$output32 .= '


';

    return $output32;
}

}

#