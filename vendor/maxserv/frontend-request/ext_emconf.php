<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Frontend Request',
    'description' => 'This extension provides a way to make a frontend request to a TYPO3 page from within the backend and parse the response.',
    'category' => 'backend',
    'author' => 'MaxServ',
    'author_company' => 'MaxServ B.V.',
    'author_email' => 'support@maxserv.com',
    'state' => 'stable',
    'version' => '2.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => ['MaxServ\\FrontendRequest\\' => 'Classes'],
    ],
];
