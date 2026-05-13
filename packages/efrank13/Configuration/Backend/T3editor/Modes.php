<?php

use TYPO3\CMS\Core\Page\JavaScriptModuleInstruction;

return [
    'markdown' => [
        'module' => JavaScriptModuleInstruction::create('@codemirror/lang-html', 'html')->invoke(),
        'extensions' => ['md', 'markdown'],
    ],
];
