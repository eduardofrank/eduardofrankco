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

$EM_CONF['fluid_fpdf'] = [
    'title' => 'TYPO3 Fluid-FPDF - PDF by coding.ms',
    'description' => 'This extension provides a comprehensive set of PDF-ViewHelpers for working with FPDF in Fluid. By defining the fpdf namespace, you can generate PDFs directly in your own TYPO3 extensions. It also includes a built-in plugin for rendering predefined PDFs, automatically exposing all available PDF definitions. Additional features include barcode generation, text rotation, PDF/A-3b support, as well as ZUGFeRD and Factur-X compatibility (e-invoice).',
    'category' => 'plugin',
    'author' => 'www.coding.ms',
    'author_email' => 'typo3@coding.ms',
    'author_company' => 'coding.ms',
    'state' => 'stable',
    'version' => '3.0.2',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.5.99',
            'typo3' => '13.4.28-14.3.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
