<?php
/**
 * Compiled ext_tables.php cache file
 */
/**
 * Extension: yoast_seo
 * File: /var/www/html/vendor/yoast-seo-for-typo3/yoast_seo/ext_tables.php
 */
namespace {


/**
 * This file is part of the "yoast_seo" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use YoastSeoForTypo3\YoastSeo\Hooks\BackendYoastTranslations;

defined('TYPO3') || die;

// Extend user settings
$GLOBALS['TYPO3_USER_SETTINGS']['columns']['hideYoastInPageModule'] = [
    'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:usersettings.hideYoastInPageModule',
    'type' => 'check',
];
ExtensionManagementUtility::addFieldsToUserSettings(
    '--div--;LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:usersettings.title,hideYoastInPageModule'
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][]
    = BackendYoastTranslations::class . '->renderTranslations';
}


/**
 * Extension: bootstrap_package
 * File: /var/www/html/vendor/bk2k/bootstrap-package/ext_tables.php
 */
namespace {


/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');
}


/**
 * Extension: blog
 * File: /var/www/html/vendor/t3g/blog/ext_tables.php
 */
namespace {


/*
 * This file is part of the package t3g/blog.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use T3G\AgencyPack\Blog\Constants;
use TYPO3\CMS\Core\DataHandling\PageDoktypeRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

$dokTypeRegistry = GeneralUtility::makeInstance(PageDoktypeRegistry::class);
$dokTypeRegistry->add(Constants::DOKTYPE_BLOG_POST, ['allowedTables' => '*']);
$dokTypeRegistry->add(Constants::DOKTYPE_BLOG_PAGE, ['allowedTables' => '*']);
}


/**
 * Extension: efrank14
 * File: /var/www/html/vendor/eduardo-frank/efrank14/ext_tables.php
 */
namespace {


defined('TYPO3') or die('Access denied.');
}


#