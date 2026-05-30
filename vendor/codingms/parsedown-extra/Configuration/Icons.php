<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgSpriteIconProvider;

return [
    'content-plugin-parsedownextra-parsedown' => [
        'provider' => SvgSpriteIconProvider::class,
        'source' => 'EXT:parsedown_extra/Resources/Public/Icons/content-element.svg',
        'sprite' => 'EXT:parsedown_extra/Resources/Public/Icons/backend-sprites.svg#content-plugin-parsedownextra-parsedown',
    ],
];
