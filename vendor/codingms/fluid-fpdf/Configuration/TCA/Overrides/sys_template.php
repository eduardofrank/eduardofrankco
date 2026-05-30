<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

//
// Static template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'fluid_fpdf',
    'Configuration/TypoScript',
    'Fluid-FPDF (only required when using the PDF content element!)'
);
