<?php
class template_ListPostsByCategory_html_8449e5956ceb6e92 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/t3g/blog/Resources/Private/Templates/Post/ListPostsByCategory.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        
return 'Default';
    }
    public function hasLayout(): bool {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
));
    }
    
    
    /**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array42 = [
'0' => $renderingContext->getVariableProvider()->getByPath('category'),
];

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments44 = [
'__then' => function() use ($renderingContext) {
$output1 = '';

$output1 .= '

            <header class="blogarchiveheader blogarchiveheader--category">
                <h1 class="blogarchiveheader__title">
                    <span class="blogarchiveheader__titletext">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext) {
return NULL;
};

$arguments2 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'headline.category.simple',
];

$output1 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments2, $renderingContext, $renderChildrenClosure3)]);

$output1 .= ':
                        ';

$output1 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.title')]);

$output1 .= '
                    </span>
                    ';
// Rendering ViewHelper T3G\AgencyPack\Blog\ViewHelpers\Link\CategoryViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                        <span class="blogicon">';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'0' => 'true',
];

$expression12 = function($context) {return TRUE;};

$arguments9 = [
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'General/SocialIcons',
'section' => 'Rss',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10);

$output8 .= '</span>
                    ';
return $output8;
};

$array6 = [
'0' => 'true',
];

$expression7 = function($context) {return TRUE;};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'rss' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
'category' => $renderingContext->getVariableProvider()->getByPath('category'),
'class' => 'blogarchiveheader__titlelink',
];

$output1 .= $renderingContext->getViewHelperInvoker()->invoke(T3G\AgencyPack\Blog\ViewHelpers\Link\CategoryViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output1 .= '
                </h1>
                <div class="blogarchiveheader__description">
                    <p>';

$output1 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.description')]);

$output1 .= '</p>
                </div>
            </header>
            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'List',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output1 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output1 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.categoryUid'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('category.content'),
];

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments33 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                <footer class="blogarchivefooter blogarchivefooter--category">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.categoryUid'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments26 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                        <div class="blogarchivefooter__backlink">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'list.backlink.categories',
];

$output23 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25)]);

$output23 .= '
                            ';
return $output23;
};

$arguments21 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'pageUid' => $renderingContext->getVariableProvider()->getByPath('settings.categoryUid'),
];

$output20 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output20 .= '
                        </div>
                    ';
return $output20;
},
];

$output17 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments26, $renderingContext)
;

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('category.content'),
];

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments32 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output29 = '';

$output29 .= '
                        <div class="blogarchivefooter__content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('category.contentElementUidList');
};

$arguments30 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.blog.contentElementRendering',
];
$renderChildrenClosure31 = ($arguments30['data'] !== null) ? function() use ($arguments30) { return $arguments30['data']; } : $renderChildrenClosure31;
$output29 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31);

$output29 .= '
                        </div>
                    ';
return $output29;
},
];

$output17 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments32, $renderingContext)
;

$output17 .= '
                </footer>
            ';
return $output17;
},
];

$output1 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments33, $renderingContext)
;

$output1 .= '

        ';
return $output1;
},
'__else' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '

            <header class="blogarchiveheader blogarchiveheader--categories">
                <h1 class="blogarchiveheader__title">
                    <span class="blogarchiveheader__titletext">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'headline.categories',
];

$output34 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36)]);

$output34 .= '
                    </span>
                </h1>
            </header>
            <div class="bloglist bloglist--categories">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'List/Category',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output39 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments40, $renderingContext, $renderChildrenClosure41);

$output39 .= '
                ';
return $output39;
};

$arguments37 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('categories'),
'as' => 'category',
];

$output34 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments37, $renderingContext, $renderChildrenClosure38);

$output34 .= '
            </div>

        ';
return $output34;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments44, $renderingContext)
;

$output0 .= '
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output45 = '';

$output45 .= '';

$output45 .= '
';

$output45 .= '';

$output45 .= '
';

    return $output45;
}

}

#