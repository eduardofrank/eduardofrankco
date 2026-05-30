<?php
class template_Categories_html_76712d113c067e40 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/eduardo-frank/efrank14/Resources/Private/Partials/Meta/Elements/Categories.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return 'categories';
};

$arguments1 = [
'value' => NULL,
'name' => 'name',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'0' => 'true',
];

$expression8 = function($context) {return TRUE;};

$arguments5 = [
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'General/BlogIcons',
'section' => 'Category',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6);
};

$arguments3 = [
'value' => NULL,
'name' => 'icon',
];
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.categories.category',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);
};

$arguments9 = [
'value' => NULL,
'name' => 'prefix',
];
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('post.categories'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments35 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('post.categories');
};

$arguments17 = [
'subject' => NULL,
];
$renderChildrenClosure18 = ($arguments17['subject'] !== null) ? function() use ($arguments17) { return $arguments17['subject']; } : $renderChildrenClosure18;
$array16 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments17, $renderingContext, $renderChildrenClosure18),
'1' => ' > 1',
];

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments25 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.categories.categories',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);
};

$arguments21 = [
'value' => NULL,
'name' => 'prefix',
];
$renderChildrenClosure22 = ($arguments21['value'] !== null) ? function() use ($arguments21) { return $arguments21['value']; } : $renderChildrenClosure22;
$output20 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22)]);

$output20 .= '
    ';
return $output20;
},
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments25, $renderingContext)
;

$output15 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output29 = '';

$output29 .= '
        <ul class="postmetagroup__list">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                <li>
                    <span class="postmetagroup__listitem" data-blog-category="';

$output32 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postCategory.uid')]);

$output32 .= '">
                        <span class="postmetagroup__listtext">';
// Rendering ViewHelper T3G\AgencyPack\Blog\ViewHelpers\Link\CategoryViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'rss' => false,
'category' => $renderingContext->getVariableProvider()->getByPath('postCategory'),
];

$output32 .= $renderingContext->getViewHelperInvoker()->invoke(T3G\AgencyPack\Blog\ViewHelpers\Link\CategoryViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34);

$output32 .= '</span>
                    </span>
                </li>
            ';
return $output32;
};

$arguments30 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('post.categories'),
'as' => 'postCategory',
];

$output29 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31);

$output29 .= '
        </ul>
    ';
return $output29;
};

$array28 = [
'name' => $renderingContext->getVariableProvider()->getByPath('name'),
'icon' => $renderingContext->getVariableProvider()->getByPath('icon'),
'prefix' => $renderingContext->getVariableProvider()->getByPath('prefix'),
];

$arguments26 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'debug' => true,
'partial' => 'Meta/Rendering/Item',
'arguments' => $array28,
'contentAs' => 'content',
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27);

$output15 .= '
';
return $output15;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments35, $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#