<?php
class template_Post_html_a22460c66c22e4ca extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/eduardo-frank/efrank14/Resources/Private/Partials/List/Post.html';
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

$output0 .= '<article class="postlist__post">
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Meta/ListHeaderTime',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array3 = [
'0' => $renderingContext->getVariableProvider()->getByPath('post.featuredImage'),
];

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output5 = '';

$output5 .= '
        ';
// Rendering ViewHelper T3G\AgencyPack\Blog\ViewHelpers\Link\PostViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$array12 = [
'image' => $renderingContext->getVariableProvider()->getByPath('post.featuredImage'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings.lists.featuredImage'),
];

$arguments10 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'General/FeaturedImage',
'arguments' => $array12,
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11);

$output9 .= '
        ';
return $output9;
};

$array8 = [
'aria-hidden' => 'true',
];

$arguments6 = [
'data' => NULL,
'aria' => NULL,
'section' => NULL,
'createAbsoluteUri' => false,
'returnUri' => false,
'post' => $renderingContext->getVariableProvider()->getByPath('post'),
'additionalAttributes' => $array8,
'class' => 'postlist__featuredimage',
'tabindex' => -1,
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(T3G\AgencyPack\Blog\ViewHelpers\Link\PostViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output5 .= '
    ';
return $output5;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments13, $renderingContext)
;

$output0 .= '
    <h4 class="postlist__posttitle" itemprop="name">';
// Rendering ViewHelper T3G\AgencyPack\Blog\ViewHelpers\Link\PostViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'section' => NULL,
'createAbsoluteUri' => false,
'returnUri' => false,
'post' => $renderingContext->getVariableProvider()->getByPath('post'),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(T3G\AgencyPack\Blog\ViewHelpers\Link\PostViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);

$output0 .= '</h4>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('post.abstract'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments20 = [
'__then' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <p class="postlist__postdescription" itemprop="description">';

$output16 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.abstract')]);

$output16 .= '</p>
        ';
return $output16;
},
'__else' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
            <p class="postlist__postdescription" itemprop="description">';

$output17 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.description')]);

$output17 .= '</p>
        ';
return $output17;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments20, $renderingContext)
;

$output0 .= '
    <div class="footer-wrapper">
        ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Meta/ListFooter',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output0 .= '
    </div>
</article>
';

    return $output0;
}

}

#