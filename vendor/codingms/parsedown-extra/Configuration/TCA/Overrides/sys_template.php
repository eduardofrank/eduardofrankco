<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

//
// Static template
ExtensionManagementUtility::addStaticFile(
    'parsedown_extra',
    'Configuration/TypoScript/Stylesheet',
    'Parsedown - Default stylesheets'
);
ExtensionManagementUtility::addStaticFile(
    'parsedown_extra',
    'Configuration/TypoScript/Colorbox',
    'Parsedown - Colorbox'
);
ExtensionManagementUtility::addStaticFile(
    'parsedown_extra',
    'Configuration/TypoScript/PrismJs',
    'Parsedown - PrismJs Syntax-Highlighting'
);
ExtensionManagementUtility::addStaticFile(
    'parsedown_extra',
    'Configuration/TypoScript/MermaidJs',
    'Parsedown - MermaidJs Diagrams & Charts'
);
ExtensionManagementUtility::addStaticFile(
    'parsedown_extra',
    'Configuration/TypoScript/jQuery',
    'Parsedown - jQuery'
);
