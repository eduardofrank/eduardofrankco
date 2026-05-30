<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'FluidFpdf',
    'Pdf',
    [
        \CodingMs\FluidFpdf\Controller\PdfController::class => 'show',
    ],
    // non-cacheable actions
    [
        \CodingMs\FluidFpdf\Controller\PdfController::class => 'show',
    ],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
