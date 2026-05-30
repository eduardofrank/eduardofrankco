<?php

/***************************************************************
 *
 * Copyright notice
 *
 * (c) 2026 Thomas Deuling <typo3@coding.ms>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

$EM_CONF['parsedown_extra'] = [
    'title' => 'TYPO3 Parsedown-Extra - Markdown by coding.ms',
    'description' => 'Provides a content element and ViewHelper which displays markdown files including Mermaid diagrams (UML, Activity, State and more). Parses email links with TYPO3 encryption. ViewHelper for parsing Markdown from individual sources. Defining abbreviations globally by using TypoScript. Code/Syntax Highlighting and many more.',
    'category' => 'frontend',
    'author' => 'www.coding.ms',
    'author_email' => 'typo3@coding.ms',
    'author_company' => 'coding.ms',
    'state' => 'stable',
    'version' => '5.0.1',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.5.99',
            'typo3' => '13.4.22-14.3.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
