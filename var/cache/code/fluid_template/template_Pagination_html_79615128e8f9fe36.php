<?php
class template_Pagination_html_79615128e8f9fe36 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/t3g/blog/Resources/Private/Partials/Pagination/Pagination.html';
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

$output0 .= '<nav class="blogpagination" role="navigation" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.label',
'extensionName' => 'Blog',
];

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '">
    <ul class="blogpagination__list">

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array3 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber'),
];

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments15 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output5 = '';

$output5 .= '
            <li class="blogpagination__item blogpagination__item--previous">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.goto.previous',
'extensionName' => 'Blog',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9);
};

$arguments6 = [
'value' => NULL,
'name' => 'ariaLabel',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output5 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output5 .= '
                <a class="blogpagination__link" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$array12 = [
'currentPage' => $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber'),
];

$arguments10 = [
'action' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'argumentsToBeExcludedFromQueryString' => [],
'arguments' => $array12,
'addQueryString' => 1,
];

$output5 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11)]);

$output5 .= '" aria-label="';

$output5 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ariaLabel')]);

$output5 .= '" rel="prev" >
                    <span class="blogpagination__itemtitle">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.previous',
'extensionName' => 'Blog',
];

$output5 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14)]);

$output5 .= '</span>
                </a>
            </li>
        ';
return $output5;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments15, $renderingContext)
;

$output0 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.lessPages'),
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output18 = '';

$output18 .= '
            <li class="blogpagination__item blogpagination__item--first">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber'),
];

$arguments21 = [
'id' => NULL,
'default' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.goto.page',
'arguments' => $array23,
'extensionName' => 'Blog',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);
};

$arguments19 = [
'value' => NULL,
'name' => 'ariaLabel',
];
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20)]);

$output18 .= '
                <a class="blogpagination__link" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$array26 = [
'currentPage' => $renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber'),
];

$arguments24 = [
'action' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'argumentsToBeExcludedFromQueryString' => [],
'arguments' => $array26,
'addQueryString' => 1,
];

$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25)]);

$output18 .= '" aria-label="';

$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ariaLabel')]);

$output18 .= '">
                    <span class="blogpagination__itemtitle">';

$output18 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber')]);

$output18 .= '</span>
                </a>
            </li>
            <li class="blogpagination__item blogpagination__item--disabled blogpagination__item--ellipsis">
                <a href="javascript:void();" tabindex="-1" aria-hidden="true" class="blogpagination__link">
                    <span class="blogpagination__itemtitle">…</span>
                </a>
            </li>
        ';
return $output18;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments27, $renderingContext)
;

$output0 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array49 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageNumber'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('pagination.currentPageNumber'),
];

$expression50 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments51 = [
'__then' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                    <li class="blogpagination__item blogpagination__item--active">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$array36 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageNumber'),
];

$arguments34 = [
'id' => NULL,
'default' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.current.page',
'arguments' => $array36,
'extensionName' => 'Blog',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35);
};

$arguments32 = [
'value' => NULL,
'name' => 'ariaLabel',
];
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;
$output31 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33)]);

$output31 .= '
                        <a class="blogpagination__link" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$array39 = [
'currentPage' => $renderingContext->getVariableProvider()->getByPath('pageNumber'),
];

$arguments37 = [
'action' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'argumentsToBeExcludedFromQueryString' => [],
'arguments' => $array39,
'addQueryString' => 1,
];

$output31 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class, $arguments37, $renderingContext, $renderChildrenClosure38)]);

$output31 .= '" aria-label="';

$output31 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ariaLabel')]);

$output31 .= '" aria-current="true">
                            <span class="blogpagination__itemtitle">';

$output31 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber')]);

$output31 .= '</span>
                        </a>
                    </li>
                ';
return $output31;
},
'__else' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                    <li class="blogpagination__item">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$array45 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageNumber'),
];

$arguments43 = [
'id' => NULL,
'default' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.goto.page',
'arguments' => $array45,
'extensionName' => 'Blog',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);
};

$arguments41 = [
'value' => NULL,
'name' => 'ariaLabel',
];
$renderChildrenClosure42 = ($arguments41['value'] !== null) ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42;
$output40 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments41, $renderingContext, $renderChildrenClosure42)]);

$output40 .= '
                        <a class="blogpagination__link" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$array48 = [
'currentPage' => $renderingContext->getVariableProvider()->getByPath('pageNumber'),
];

$arguments46 = [
'action' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'argumentsToBeExcludedFromQueryString' => [],
'arguments' => $array48,
'addQueryString' => 1,
];

$output40 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47)]);

$output40 .= '" aria-label="';

$output40 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ariaLabel')]);

$output40 .= '">
                            <span class="blogpagination__itemtitle">';

$output40 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber')]);

$output40 .= '</span>
                        </a>
                    </li>
                ';
return $output40;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression50(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)),
    $renderingContext
),
];

$output30 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments51, $renderingContext)
;

$output30 .= '
        ';
return $output30;
};

$arguments28 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('pagination.displayPageNumbers'),
'as' => 'pageNumber',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array52 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.morePages'),
];

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments63 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output54 = '';

$output54 .= '
            <li class="blogpagination__item blogpagination__item--disabled blogpagination__item--ellipsis">
                <a href="javascript:void();" tabindex="-1" aria-hidden="true" class="blogpagination__link">
                    <span class="blogpagination__itemtitle">…</span>
                </a>
            </li>
            <li class="blogpagination__item blogpagination__item--last">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$array59 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber'),
];

$arguments57 = [
'id' => NULL,
'default' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.goto.page',
'arguments' => $array59,
'extensionName' => 'Blog',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments57, $renderingContext, $renderChildrenClosure58);
};

$arguments55 = [
'value' => NULL,
'name' => 'ariaLabel',
];
$renderChildrenClosure56 = ($arguments55['value'] !== null) ? function() use ($arguments55) { return $arguments55['value']; } : $renderChildrenClosure56;
$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments55, $renderingContext, $renderChildrenClosure56)]);

$output54 .= '
                <a class="blogpagination__link" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$array62 = [
'currentPage' => $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber'),
];

$arguments60 = [
'action' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'argumentsToBeExcludedFromQueryString' => [],
'arguments' => $array62,
'addQueryString' => 1,
];

$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61)]);

$output54 .= '" aria-label="';

$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ariaLabel')]);

$output54 .= '">
                    <span class="blogpagination__itemtitle">';

$output54 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber')]);

$output54 .= '</span>
                </a>
            </li>
        ';
return $output54;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments63, $renderingContext)
;

$output0 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array64 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber'),
];

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments76 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression65(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output66 = '';

$output66 .= '
            <li class="blogpagination__item blogpagination__item--next">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.aria.goto.next',
'extensionName' => 'BootstrapPackage',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments69, $renderingContext, $renderChildrenClosure70);
};

$arguments67 = [
'value' => NULL,
'name' => 'ariaLabel',
];
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments67, $renderingContext, $renderChildrenClosure68)]);

$output66 .= '
                <a class="blogpagination__link" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$array73 = [
'currentPage' => $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber'),
];

$arguments71 = [
'action' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'argumentsToBeExcludedFromQueryString' => [],
'arguments' => $array73,
'addQueryString' => 1,
];

$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::class, $arguments71, $renderingContext, $renderChildrenClosure72)]);

$output66 .= '" aria-label="';

$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ariaLabel')]);

$output66 .= '" rel="next">
                    <span class="blogpagination__itemtitle">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'pagination.next',
'extensionName' => 'Blog',
];

$output66 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments74, $renderingContext, $renderChildrenClosure75)]);

$output66 .= '</span>
                </a>
            </li>
        ';
return $output66;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments76, $renderingContext)
;

$output0 .= '

    </ul>
</nav>
';

    return $output0;
}

}

#