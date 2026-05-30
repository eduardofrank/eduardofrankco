<?php

use CodingMs\ParsedownExtra\Controller\ParsedownController;
use CodingMs\ParsedownExtra\Form\Element\MarkdownSelect;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

// Parsedown plugin
ExtensionUtility::configurePlugin(
    'ParsedownExtra',
    'Parsedown',
    [ParsedownController::class => 'show'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
$extensionPath = ExtensionManagementUtility::extPath('parsedown_extra');
if (!class_exists('\Parsedown')) {
    $library = '/Resources/Private/Php/Parsedown/Parsedown.php';
    include_once($extensionPath . $library);
}
if (!class_exists('\ParsedownExtra')) {
    $library = '/Resources/Private/Php/ParsedownExtra/ParsedownExtra.php';
    include_once($extensionPath . $library);
}
if (!class_exists('\ParsedownExtraPlugin')) {
    $library = '/Resources/Private/Php/ParsedownExtraPlugin/ParsedownExtraPlugin.php';
    include_once($extensionPath . $library);
}
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1586262363] = [
    'nodeName' => 'markdownSelect',
    'priority' => '70',
    'class' => MarkdownSelect::class,
];
