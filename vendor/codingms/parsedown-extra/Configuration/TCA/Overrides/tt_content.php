<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::registerPlugin(
    'parsedown_extra',
    'Parsedown',
    'special'
);
//
$field = [
    'tx_parsedownextra_file' => [
        'displayCond' => [
            'AND' => [
                'FIELD:CType:=:parsedownextra_parsedown',
            ],
        ],
        'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.markdown_file',
        'exclude' => 1,
        'config' => [
            'type' => 'user',
            'renderType' => 'markdownSelect',
        ],
    ],
    'tx_parsedownextra_file_uid' => [
        'displayCond' => [
            'AND' => [
                'FIELD:CType:=:parsedownextra_parsedown',
            ],
        ],
        'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.markdown_file',
        'exclude' => 1,
        'config' => [
            'type' => 'file',
            'minitems' => 0,
            'maxitems' => 1,
            // hier nur md erlauben
            'allowed' => 'md',
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:images.addFileReference',
            ],
            'overrideChildTca' => [
                'columns' => [
                    'title' => [
                        'config' => [
                            'type' => 'passthrough',
                        ],
                    ],
                    // Metadaten-Feld "description" unsichtbar machen
                    'description' => [
                        'config' => [
                            'type' => 'passthrough',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'tx_parsedownextra_markdown' => [
        'displayCond' => [
            'AND' => [
                'FIELD:CType:=:parsedownextra_parsedown',
            ],
        ],
        'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.markdown',
        'exclude' => 1,
        'config' => [
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'markdown',
            'cols' => 80,
            'rows' => 60,
            'eval' => 'trim',
            'default' => '',
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $field);
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.tab_markdown,tx_parsedownextra_markdown,tx_parsedownextra_file,tx_parsedownextra_file_uid',
    'parsedownextra_parsedown',
    'after:subheader'
);
