<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\CodingMs\FluidFpdf\Utility\PluginUtility::add(
    'fluid_fpdf',
    'Pdf',
    'pdf'
);
