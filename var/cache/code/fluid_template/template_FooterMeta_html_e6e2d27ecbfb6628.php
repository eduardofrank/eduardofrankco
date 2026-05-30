<?php
class template_FooterMeta_html_e6e2d27ecbfb6628 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/bk2k/bootstrap-package/Resources/Private/Partials/Page/Structure/FooterMeta.html';
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
'0' => $renderingContext->getVariableProvider()->getByPath('theme.meta.enable'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('theme.language.enable'),
'3' => ' || ',
'4' => $renderingContext->getVariableProvider()->getByPath('theme.copyright.enable'),
'5' => ' || ',
'6' => $renderingContext->getVariableProvider()->getByPath('theme.socialmedia.enable'),
'7' => ' || ',
'8' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.enable'),
'9' => ' || ',
'10' => $renderingContext->getVariableProvider()->getByPath('theme.contact.enable'),
];

$expression2 = function($context) {return (((((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node8"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node10"]));};

$arguments54 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    <section class="section footer-section footer-section-meta">
        <div class="frame frame-background-none frame-space-before-none frame-space-after-none">
            <div class="frame-group-container">
                <div class="frame-group-inner">
                    <div class="frame-container frame-container-default">
                        <div class="frame-inner">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.enable'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('theme.contact.enable'),
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments25 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
                                <div class="footer-menu-section';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.enable'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments9 = [
'__then' => function() use ($renderingContext) {

return ' footer-menu-section-has-navigation';
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments9, $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.contact.enable'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'__then' => function() use ($renderingContext) {

return ' footer-menu-section-has-contact';
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
;

$output6 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.footernavigation.enable'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments18 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                                        <div class="footer-navigation">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Navigation/Footer',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output15 .= '
                                        </div>
                                    ';
return $output15;
},
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments18, $renderingContext)
;

$output6 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.contact.enable'),
];

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                                        <div class="footer-contact">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Structure/FooterContact',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output21 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23);

$output21 .= '
                                        </div>
                                    ';
return $output21;
},
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments24, $renderingContext)
;

$output6 .= '
                                </div>
                            ';
return $output6;
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments25, $renderingContext)
;

$output3 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.meta.enable'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('theme.language.enable'),
'3' => ' || ',
'4' => $renderingContext->getVariableProvider()->getByPath('theme.copyright.enable'),
'5' => ' || ',
'6' => $renderingContext->getVariableProvider()->getByPath('theme.socialmedia.enable'),
];

$expression27 = function($context) {return (((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"]));};

$arguments53 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                <div class="footer-info-section">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.meta.enable'),
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments34 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                        <div class="footer-meta">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Navigation/Meta',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output31 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output31 .= '
                                        </div>
                                    ';
return $output31;
},
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments34, $renderingContext)
;

$output28 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.language.enable'),
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments40 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                                        <div class="footer-language">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Navigation/Language',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output37 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output37 .= '
                                        </div>
                                    ';
return $output37;
},
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments40, $renderingContext)
;

$output28 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.copyright.enable'),
];

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments46 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output43 = '';

$output43 .= '
                                        <div class="footer-copyright">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Structure/Copyright',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output43 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments44, $renderingContext, $renderChildrenClosure45);

$output43 .= '
                                        </div>
                                    ';
return $output43;
},
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments46, $renderingContext)
;

$output28 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.socialmedia.enable'),
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
                                        <div class="footer-sociallinks">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Structure/SocialLinks',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output49 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Adminpanel\ViewHelpers\Fluid\RenderViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51);

$output49 .= '
                                        </div>
                                    ';
return $output49;
},
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments52, $renderingContext)
;

$output28 .= '
                                </div>
                            ';
return $output28;
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments53, $renderingContext)
;

$output3 .= '
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
';
return $output3;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments54, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#