<?php
class template_Comments_html_7a7ebfd08d063576 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/eduardo-frank/efrank14/Resources/Private/Partials/Meta/Elements/Comments.html';
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
return 'comments';
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
'section' => 'Comment',
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
'key' => 'meta.comments.join_conversation',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.comments.comments',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16);
};

$arguments13 = [
'value' => NULL,
'name' => 'text',
];
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.comments.active'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('post.commentsActive'),
];

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments65 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('post.activeComments');
};

$arguments22 = [
'subject' => NULL,
];
$renderChildrenClosure23 = ($arguments22['subject'] !== null) ? function() use ($arguments22) { return $arguments22['subject']; } : $renderChildrenClosure23;
$arguments20 = [
'name' => 'commentCount',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23),
];
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output19 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21)]);

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.comments.disqus._typoScriptNodeValue'),
'1' => ' != 1',
];

$expression25 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};

$arguments58 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('commentCount'),
'1' => ' == 0',
];

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};

$arguments39 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output29 = '';

$output29 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.comments.start_conversation',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);
};

$arguments30 = [
'value' => NULL,
'name' => 'prefix',
];
$renderChildrenClosure31 = ($arguments30['value'] !== null) ? function() use ($arguments30) { return $arguments30['value']; } : $renderChildrenClosure31;
$output29 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31)]);

$output29 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('commentCount'),
];

$arguments36 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.comments.has_comments',
'arguments' => $array38,
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37);
};

$arguments34 = [
'value' => NULL,
'name' => 'text',
];
$renderChildrenClosure35 = ($arguments34['value'] !== null) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35;
$output29 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]);

$output29 .= '
        ';
return $output29;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments39, $renderingContext)
;

$output26 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array40 = [
'0' => $renderingContext->getVariableProvider()->getByPath('commentCount'),
'1' => ' == 1',
];

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments48 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression41(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('commentCount'),
];

$arguments45 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.comments.has_comment',
'arguments' => $array47,
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46);
};

$arguments43 = [
'value' => NULL,
'name' => 'text',
];
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44)]);

$output42 .= '
        ';
return $output42;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments48, $renderingContext)
;

$output26 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array49 = [
'0' => $renderingContext->getVariableProvider()->getByPath('commentCount'),
'1' => ' >= 1',
];

$expression50 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) >= 1);};

$arguments57 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression50(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output51 = '';

$output51 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$array56 = [
'0' => $renderingContext->getVariableProvider()->getByPath('commentCount'),
];

$arguments54 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'meta.comments.has_comments',
'arguments' => $array56,
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments54, $renderingContext, $renderChildrenClosure55);
};

$arguments52 = [
'value' => NULL,
'name' => 'text',
];
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output51 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments52, $renderingContext, $renderChildrenClosure53)]);

$output51 .= '
        ';
return $output51;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments57, $renderingContext)
;

$output26 .= '
    ';
return $output26;
},
];

$output19 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments58, $renderingContext)
;

$output19 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
        ';
// Rendering ViewHelper T3G\AgencyPack\Blog\ViewHelpers\Link\PostViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('text')]);
};

$arguments63 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'createAbsoluteUri' => false,
'returnUri' => false,
'post' => $renderingContext->getVariableProvider()->getByPath('post'),
'section' => 'comments',
];

$output62 .= $renderingContext->getViewHelperInvoker()->invoke(T3G\AgencyPack\Blog\ViewHelpers\Link\PostViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64);

$output62 .= '
    ';
return $output62;
};

$array61 = [
'name' => $renderingContext->getVariableProvider()->getByPath('name'),
'icon' => $renderingContext->getVariableProvider()->getByPath('icon'),
'prefix' => $renderingContext->getVariableProvider()->getByPath('prefix'),
];

$arguments59 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'debug' => true,
'partial' => 'Meta/Rendering/Item',
'arguments' => $array61,
'contentAs' => 'content',
];

$output19 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments59, $renderingContext, $renderChildrenClosure60);

$output19 .= '
';
return $output19;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments65, $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#