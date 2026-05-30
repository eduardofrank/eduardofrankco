<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgSpriteIconProvider;

return [
    'content-plugin-fluidfpdf-pdf' => [
        'provider' => SvgSpriteIconProvider::class,
        'source' => 'EXT:fluid_fpdf/Resources/Public/Icons/iconmonstr-file-36.svg',
        'sprite' => 'EXT:fluid_fpdf/Resources/Public/Icons/backend-sprites.svg#content-plugin-fluidfpdf-pdf',
    ],
];
