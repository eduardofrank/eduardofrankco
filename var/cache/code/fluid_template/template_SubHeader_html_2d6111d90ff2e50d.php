<?php
class template_SubHeader_html_2d6111d90ff2e50d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/ContentElements/Header/SubHeader.html';
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
'0' => $renderingContext->getVariableProvider()->getByPath('subheader'),
];

$expression2 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments85 = [
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
            <h2 class="';

$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output42 .= ' ';

$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output42 .= ' ';

$output42 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output42 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array45 = [
'0' => 'false',
];

$expression46 = function($context) {return FALSE;};

$arguments43 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression46(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)),
    $renderingContext
),
];

$output42 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);

$output42 .= '</span>
            </h2>
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
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
            <h3 class="';

$output49 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output49 .= ' ';

$output49 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output49 .= ' ';

$output49 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output49 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array52 = [
'0' => 'false',
];

$expression53 = function($context) {return FALSE;};

$arguments50 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];

$output49 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51);

$output49 .= '</span>
            </h3>
        ';
return $output49;
};

$arguments47 = [
'value' => 2,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
            <h4 class="';

$output56 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output56 .= ' ';

$output56 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output56 .= ' ';

$output56 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output56 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array59 = [
'0' => 'false',
];

$expression60 = function($context) {return FALSE;};

$arguments57 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression60(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)),
    $renderingContext
),
];

$output56 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments57, $renderingContext, $renderChildrenClosure58);

$output56 .= '</span>
            </h4>
        ';
return $output56;
};

$arguments54 = [
'value' => 3,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
            <h5 class="';

$output63 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output63 .= ' ';

$output63 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output63 .= ' ';

$output63 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output63 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array66 = [
'0' => 'false',
];

$expression67 = function($context) {return FALSE;};

$arguments64 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
];

$output63 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments64, $renderingContext, $renderChildrenClosure65);

$output63 .= '</span>
            </h5>
        ';
return $output63;
};

$arguments61 = [
'value' => 4,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
$output70 = '';

$output70 .= '
            <h6 class="';

$output70 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output70 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array73 = [
'0' => 'false',
];

$expression74 = function($context) {return FALSE;};

$arguments71 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)),
    $renderingContext
),
];

$output70 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments71, $renderingContext, $renderChildrenClosure72);

$output70 .= '</span>
            </h6>
        ';
return $output70;
};

$arguments68 = [
'value' => 5,
];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
$output77 = '';

$output77 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments84 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$array83 = [
'subheader' => $renderingContext->getVariableProvider()->getByPath('subheader'),
'class' => $renderingContext->getVariableProvider()->getByPath('class'),
'displayClass' => $renderingContext->getVariableProvider()->getByPath('displayClass'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$arguments81 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/SubHeader',
'arguments' => $array83,
];

$output80 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments81, $renderingContext, $renderChildrenClosure82);

$output80 .= '
            ';
return $output80;
},
];

$output77 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments84, $renderingContext)
;

$output77 .= '
        ';
return $output77;
};

$arguments75 = [
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
            <h2 class="';

$output6 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output6 .= ' ';

$output6 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output6 .= ' ';

$output6 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output6 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array9 = [
'0' => 'false',
];

$expression10 = function($context) {return FALSE;};

$arguments7 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output6 .= '</span>
            </h2>
        ';
return $output6;
});
case call_user_func(function() use ($renderingContext) {

return 2;
}): return call_user_func(function() use ($renderingContext) {
$output11 = '';

$output11 .= '
            <h3 class="';

$output11 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output11 .= ' ';

$output11 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output11 .= ' ';

$output11 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output11 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array14 = [
'0' => 'false',
];

$expression15 = function($context) {return FALSE;};

$arguments12 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);

$output11 .= '</span>
            </h3>
        ';
return $output11;
});
case call_user_func(function() use ($renderingContext) {

return 3;
}): return call_user_func(function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <h4 class="';

$output16 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output16 .= ' ';

$output16 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output16 .= ' ';

$output16 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output16 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array19 = [
'0' => 'false',
];

$expression20 = function($context) {return FALSE;};

$arguments17 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
];

$output16 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments17, $renderingContext, $renderChildrenClosure18);

$output16 .= '</span>
            </h4>
        ';
return $output16;
});
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output21 = '';

$output21 .= '
            <h5 class="';

$output21 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output21 .= ' ';

$output21 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayClass')]);

$output21 .= ' ';

$output21 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output21 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array24 = [
'0' => 'false',
];

$expression25 = function($context) {return FALSE;};

$arguments22 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
];

$output21 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23);

$output21 .= '</span>
            </h5>
        ';
return $output21;
});
case call_user_func(function() use ($renderingContext) {

return 5;
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
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array29 = [
'0' => 'false',
];

$expression30 = function($context) {return FALSE;};

$arguments27 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments27, $renderingContext, $renderChildrenClosure28);

$output26 .= '</span>
            </h6>
        ';
return $output26;
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
'subheader' => $renderingContext->getVariableProvider()->getByPath('subheader'),
'class' => $renderingContext->getVariableProvider()->getByPath('class'),
'displayClass' => $renderingContext->getVariableProvider()->getByPath('displayClass'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$arguments35 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/SubHeader',
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

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments85, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#