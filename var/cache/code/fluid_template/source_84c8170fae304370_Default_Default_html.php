<?php
class source_84c8170fae304370_Default_Default_html extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return NULL;
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

$output0 .= '<link rel="apple-touch-icon" sizes="180x180" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'resource' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => 'Icons/apple-touch-icon.png',
'extensionName' => 'efrank14',
];
$renderChildrenClosure2 = ($arguments1['resource'] !== null) ? function() use ($arguments1) { return $arguments1['resource']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '">
<link rel="icon" type="image/png" sizes="32x32" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'resource' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => 'Icons/favicon-32x32.png',
'extensionName' => 'efrank14',
];
$renderChildrenClosure4 = ($arguments3['resource'] !== null) ? function() use ($arguments3) { return $arguments3['resource']; } : $renderChildrenClosure4;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4)]);

$output0 .= '">
<link rel="icon" type="image/png" sizes="16x16" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'resource' => NULL,
'absolute' => false,
'useCacheBusting' => true,
'path' => 'Icons/favicon-16x16.png',
'extensionName' => 'efrank14',
];
$renderChildrenClosure6 = ($arguments5['resource'] !== null) ? function() use ($arguments5) { return $arguments5['resource']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#161616">';

    return $output0;
}

}

#