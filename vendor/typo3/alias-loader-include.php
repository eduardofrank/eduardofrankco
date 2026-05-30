<?php

declare(strict_types=1);

$composerAutoLoader = require dirname(__DIR__) . '/autoload.php';
$classAliasLoader = new TYPO3\ClassAliasLoader\ClassAliasLoader($composerAutoLoader);
require_once dirname(__DIR__) . '/composer/autoload_classaliasmap_static.php';
$classAliasLoader->setAliasMap(TYPO3\ClassAliasLoader\ClassAliasLoaderStaticInit10c4df0c5d2b7e1674e195d5360b00e3::$aliasMap);
$classAliasLoader->register(true);
TYPO3\ClassAliasLoader\ClassAliasMap::setClassAliasLoader($classAliasLoader);
