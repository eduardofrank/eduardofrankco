<?php
/**
 * Compiled ext_localconf.php cache file
 */
/**
 * Extension: core
 * File: /var/www/html/vendor/typo3/cms-core/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Authentication\AuthenticationService;
use TYPO3\CMS\Core\Controller\FileDumpController;
use TYPO3\CMS\Core\Hooks\BackendUserPasswordCheck;
use TYPO3\CMS\Core\Hooks\CreateSiteConfiguration;
use TYPO3\CMS\Core\Hooks\DestroySessionHook;
use TYPO3\CMS\Core\Hooks\PagesTsConfigGuard;
use TYPO3\CMS\Core\Hooks\SystemMaintainerAllowanceCheck;
use TYPO3\CMS\Core\Hooks\UpdateFileIndexEntry;
use TYPO3\CMS\Core\MetaTag\EdgeMetaTagManager;
use TYPO3\CMS\Core\MetaTag\Html5MetaTagManager;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Resource\MimeTypeCompatibilityTypeGuesser;
use TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\RendererRegistry;
use TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer;
use TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer;
use TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect;
use TYPO3\CMS\Core\Resource\Security\FilePermissionAspect;
use TYPO3\CMS\Core\Resource\Security\SvgHookHandler;
use TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor;
use TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry;
use TYPO3\CMS\Core\Type\File\FileInfo;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][GeneralUtility::class]['moveUploadedFile'][] = SvgHookHandler::class . '->processMoveUploadedFile';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserPasswordCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = SystemMaintainerAllowanceCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FilePermissionAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FilePermissionAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DestroySessionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = PagesTsConfigGuard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][CreateSiteConfiguration::class] = CreateSiteConfiguration::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][UpdateFileIndexEntry::class] = UpdateFileIndexEntry::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][FileInfo::class]['mimeTypeGuessers'][MimeTypeCompatibilityTypeGuesser::class] = MimeTypeCompatibilityTypeGuesser::class . '->guessMimeType';
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = FileDumpController::class . '::dumpAction';

$rendererRegistry = GeneralUtility::makeInstance(RendererRegistry::class);
$rendererRegistry->registerRendererClass(AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = GeneralUtility::makeInstance(TextExtractorRegistry::class);
$textExtractorRegistry->registerTextExtractor(PlainTextExtractor::class);
unset($textExtractorRegistry);

// Register base authentication service
ExtensionManagementUtility::addService(
    'core',
    'auth',
    AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserBE,authUserFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => TYPO3\CMS\Core\Authentication\AuthenticationService::class,
    ]
);

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'html5',
    Html5MetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'edge',
    EdgeMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup('
    config.pageTitleProviders {
        record.provider = TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider
        recordTitle {
            provider = TYPO3\CMS\Core\PageTitle\RecordTitleProvider
            before = record
        }
    }
');

// Register preset for sys_news
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'] = 'EXT:core/Configuration/RTE/SysNews.yaml';
}
}


/**
 * Extension: scheduler
 * File: /var/www/html/vendor/typo3/cms-scheduler/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Scheduler\Form\Element\AdditionalSchedulerFieldsElement;
use TYPO3\CMS\Scheduler\Form\Element\RegisteredExtractors;
use TYPO3\CMS\Scheduler\Form\Element\SchedulableCommandConfigurationElement;
use TYPO3\CMS\Scheduler\Form\Element\TaskTypeInfoElement;
use TYPO3\CMS\Scheduler\Form\Element\TimingOptionsElement;
use TYPO3\CMS\Scheduler\Form\FieldInformation\ExpirePeriodInformation;
use TYPO3\CMS\Scheduler\Hooks\SchedulerTaskPersistenceValidator;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1746714036] = [
    'nodeName' => 'schedulerTimingOptions',
    'priority' => 40,
    'class' => TimingOptionsElement::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1746714037] = [
    'nodeName' => 'schedulerAdditionalFields',
    'priority' => 40,
    'class' => AdditionalSchedulerFieldsElement::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1758189546] = [
    'nodeName' => 'taskTypeInfo',
    'priority' => 40,
    'class' => TaskTypeInfoElement::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1758791054] = [
    'nodeName' => 'registeredExtractors',
    'priority' => 40,
    'class' => RegisteredExtractors::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1758906785] = [
    'nodeName' => 'expirePeriodInformation',
    'priority' => 40,
    'class' => ExpirePeriodInformation::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1759164368] = [
    'nodeName' => 'schedulableCommandConfiguration',
    'priority' => 40,
    'class' => SchedulableCommandConfigurationElement::class,
];

// Register hook for datamap
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = SchedulerTaskPersistenceValidator::class;
}


/**
 * Extension: extbase
 * File: /var/www/html/vendor/typo3/cms-extbase/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTypoScriptSetup('
config.tx_extbase {
    mvc {
        throwPageNotFoundExceptionIfActionCantBeResolved = 0
    }
    persistence {
        enableAutomaticCacheClearing = 1
    }
}
');
}


/**
 * Extension: backend
 * File: /var/www/html/vendor/typo3/cms-backend/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Backend\Hooks\DataHandlerAuthenticationContext;
use TYPO3\CMS\Backend\Hooks\DataHandlerContentElementRestrictionHook;
use TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
    'provider' => UsernamePasswordLoginProvider::class,
    'sorting' => 50,
    'iconIdentifier' => 'actions-key',
    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link',
];

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DataHandlerAuthenticationContext::class;

// Giving the two hook registrations a unique name to allow unsetting this hook if it is not wanted.
// ext:container does this to apply own logic.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['contentElementRestriction'] = DataHandlerContentElementRestrictionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['contentElementRestriction'] = DataHandlerContentElementRestrictionHook::class;

// Initialize empty structure for backward compatibility with extensions
// that add fields via $GLOBALS['TYPO3_USER_SETTINGS']['columns'].
// Core settings are now defined in Configuration/TCA/Overrides/be_users.php.
// Access to settings should go through UserSettingsSchema which merges both sources.
// @deprecated since TYPO3 v14, remove in TYPO3 v15
$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [],
    'showitem' => '',
];
}


/**
 * Extension: frontend
 * File: /var/www/html/vendor/typo3/cms-frontend/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Frontend\Controller\ShowImageController;

defined('TYPO3') or die();

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = ShowImageController::class . '::processRequest';

ExtensionManagementUtility::addTypoScriptSetup(
    '
# Creates persistent ParseFunc setup for non-HTML content.
lib.parseFunc {
    makelinks = 1
    makelinks {
        http {
            keep = path
            extTarget = _blank
        }
        mailto {
            keep = path
        }
    }
    tags {
        a = TEXT
        a {
            current = 1
            typolink {
                parameter.data = parameters:href
                title.data = parameters:title
                target.data = parameters:target
                ATagParams.data = parameters:allParams
            }
        }
    }
    nonTypoTagStdWrap {
        HTMLparser = 1
        HTMLparser {
            keepNonMatchedTags = 1
            htmlSpecialChars = 2
        }
    }
}

# Creates persistent ParseFunc setup for RTE content (which is mainly HTML) based on the "default" transformation.
lib.parseFunc_RTE < lib.parseFunc
lib.parseFunc_RTE {
    # Processing <ol>, <ul> and <table> blocks separately
    externalBlocks = article, aside, blockquote, div, dd, dl, footer, header, nav, ol, section, table, ul, pre, figure, figcaption
    externalBlocks {
        ol {
            stripNL = 1
            stdWrap.parseFunc = < lib.parseFunc
        }
        ul {
            stripNL = 1
            stdWrap.parseFunc = < lib.parseFunc
        }
        pre {
            stdWrap.parseFunc < lib.parseFunc
        }
        table {
            stripNL = 1
            stdWrap {
                HTMLparser = 1
                HTMLparser {
                    keepNonMatchedTags = 1
                }
            }
            HTMLtableCells = 1
            HTMLtableCells {
                # Recursive call to self but without wrapping non-wrapped cell content
                default.stdWrap {
                    parseFunc = < lib.parseFunc_RTE
                    parseFunc.nonTypoTagStdWrap.encapsLines {
                        nonWrappedTag =
                        innerStdWrap_all.ifBlank =
                    }
                }
            }
        }
        # ideally, "div" is not calling itself recursive, but instead uses a similar approach as ol/ul/pre
        # so it is a container with content, which does not need to be wrapping <p> tags in it.
        div {
            stripNL = 1
            callRecursive = 1
        }
        article < .div
        aside < .div
        figure < .div
        figcaption {
            stripNL = 1
        }
        blockquote < .div
        footer < .div
        header < .div
        nav < .div
        section < .div
        dl < .div
        dd < .div
    }
    nonTypoTagStdWrap {
        encapsLines {
            encapsTagList = p,pre,h1,h2,h3,h4,h5,h6,hr,dt
            nonWrappedTag = P
            innerStdWrap_all.ifBlank = &nbsp;
        }
    }
}

# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';
}


/**
 * Extension: adminpanel
 * File: /var/www/html/vendor/typo3/cms-adminpanel/ext_localconf.php
 */
namespace {




use Psr\Log\LogLevel;
use TYPO3\CMS\Adminpanel\Log\InMemoryLogWriter;
use TYPO3\CMS\Adminpanel\Modules\CacheModule;
use TYPO3\CMS\Adminpanel\Modules\Debug\Events;
use TYPO3\CMS\Adminpanel\Modules\Debug\Log;
use TYPO3\CMS\Adminpanel\Modules\Debug\PageTitle;
use TYPO3\CMS\Adminpanel\Modules\Debug\QueryInformation;
use TYPO3\CMS\Adminpanel\Modules\DebugModule;
use TYPO3\CMS\Adminpanel\Modules\Info\GeneralInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\PhpInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\RequestInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\UserIntInformation;
use TYPO3\CMS\Adminpanel\Modules\InfoModule;
use TYPO3\CMS\Adminpanel\Modules\PreviewModule;
use TYPO3\CMS\Adminpanel\Modules\TsDebug\TypoScriptWaterfall;
use TYPO3\CMS\Adminpanel\Modules\TsDebugModule;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules'] = [
    'preview' => [
        'module' => PreviewModule::class,
        'before' => ['cache'],
    ],
    'cache' => [
        'module' => CacheModule::class,
        'after' => ['preview'],
    ],
    'tsdebug' => [
        'module' => TsDebugModule::class,
        'after' => ['edit'],
        'submodules' => [
            'ts-waterfall' => [
                'module' => TypoScriptWaterfall::class,
            ],
        ],
    ],
    'info' => [
        'module' => InfoModule::class,
        'after' => ['tsdebug'],
        'submodules' => [
            'general' => [
                'module' => GeneralInformation::class,
            ],
            'request' => [
                'module' => RequestInformation::class,
            ],
            'phpinfo' => [
                'module' => PhpInformation::class,
            ],
            'userint' => [
                'module' => UserIntInformation::class,
            ],
        ],
    ],
    'debug' => [
        'module' => DebugModule::class,
        'after' => ['info'],
        'submodules' => [
            'log' => [
                'module' => Log::class,
            ],
            'queryInformation' => [
                'module' => QueryInformation::class,
            ],
            'pageTitle' => [
                'module' => PageTitle::class,
            ],
            'events' => [
                'module' => Events::class,
            ],
        ],
    ],
];

// The admin panel has a module to show log messages. Register a debug logger to gather those.
$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][LogLevel::DEBUG][InMemoryLogWriter::class] = [];

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['DB']['Connections']['Default']['driverMiddlewares'] = [];
}

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares']['adminpanel_loggingmiddleware'] = [
    'target' => \TYPO3\CMS\Adminpanel\Log\DoctrineSqlLoggingMiddleware::class,
    'after' => [
        'typo3/core/custom-platform-driver-middleware',
    ],
];
}


/**
 * Extension: dashboard
 * File: /var/www/html/vendor/typo3/cms-dashboard/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Cache\Backend\FileBackend;
use TYPO3\CMS\Core\Cache\Frontend\VariableFrontend;
use TYPO3\CMS\Dashboard\Persistence\DashboardCreationEnricher;

defined('TYPO3') or die();

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] = [
        'frontend' => VariableFrontend::class,
        'backend' => FileBackend::class,
        'options' => [
            'defaultLifetime' => 900,
        ],
    ];
}

// Fill the "owner" field of a dashboard with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DashboardCreationEnricher::class;
}


/**
 * Extension: form
 * File: /var/www/html/vendor/typo3/cms-form/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Form\Controller\FormFrontendController;
use TYPO3\CMS\Form\Evaluation\EmailOrFormElementIdentifier;
use TYPO3\CMS\Form\Hooks\ImportExportHook;
use TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration;

defined('TYPO3') or die();

if (ExtensionManagementUtility::isLoaded('impexp')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/impexp/class.tx_impexp.php']['before_addSysFileRecord'][1530637161]
        = ImportExportHook::class . '->beforeAddSysFileRecordOnImport';
}

// Register RTE presets for form extension
// form-label: Simple formatting for labels (bold, italic, link)
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['form-label'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['form-label'] = 'EXT:form/Configuration/RTE/FormLabel.yaml';
}
// form-content: Extended formatting for content fields (includes lists)
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['form-content'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['form-content'] = 'EXT:form/Configuration/RTE/FormContent.yaml';
}

// FE file upload processing
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterFormStateInitialized'][1613296803] = PropertyMappingConfiguration::class;

// Add validation call for input which contains email or form element identifier
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][EmailOrFormElementIdentifier::class] = '';

// Register FE plugin
ExtensionUtility::configurePlugin('Form', 'Formframework', [FormFrontendController::class => ['render', 'perform']], [FormFrontendController::class => ['perform']]);
}


/**
 * Extension: redirects
 * File: /var/www/html/vendor/typo3/cms-redirects/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Backend\Form\FormDataProvider\TcaInputPlaceholders;
use TYPO3\CMS\Redirects\Evaluation\SourceHost;
use TYPO3\CMS\Redirects\Form\Element\QrCodeElement;
use TYPO3\CMS\Redirects\Form\Element\RenderCreationInformation;
use TYPO3\CMS\Redirects\Form\Element\ShortUrlElement;
use TYPO3\CMS\Redirects\Form\FieldControl\ShortUrlGenerator;
use TYPO3\CMS\Redirects\FormDataProvider\QrCodeSourceHostDataProvider;
use TYPO3\CMS\Redirects\FormDataProvider\ShortUrlDataProvider;
use TYPO3\CMS\Redirects\FormDataProvider\ValuePickerItemDataProvider;
use TYPO3\CMS\Redirects\Hooks\DataHandlerCacheFlushingHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerPermissionGuardHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerSlugUpdateHook;
use TYPO3\CMS\Redirects\Hooks\DispatchNotificationHook;
use TYPO3\CMS\Redirects\Hooks\HandleNewQrCodeRecord;
use TYPO3\CMS\Redirects\Hooks\HandleNewShortUrlRecord;

defined('TYPO3') or die();

// Rebuild cache in DataHandler on changing / inserting / adding redirect records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['redirects'] = DataHandlerCacheFlushingHook::class . '->rebuildRedirectCacheIfNecessary';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects'] = DataHandlerSlugUpdateHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects-qrcode'] = HandleNewQrCodeRecord::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects-short-url'] = HandleNewShortUrlRecord::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirectsAccessGuard'] = DataHandlerPermissionGuardHook::class;

// Inject sys_domains into valuepicker form
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[ValuePickerItemDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Renders Redirect creation information. i.e. backend username and creation date.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1761573166] = [
    'nodeName' => 'creationInformation',
    'priority' => 40,
    'class' => RenderCreationInformation::class,
];

// Renders QR code with options
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1764867024] = [
    'nodeName' => 'qrCode',
    'priority' => 40,
    'class' => QrCodeElement::class,
];

// Renders Short URL element
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1770156231] = [
    'nodeName' => 'shortUrl',
    'priority' => 40,
    'class' => ShortUrlElement::class,
];

// Renders shortUrlGenerator field control
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1770204638] = [
    'nodeName' => 'shortUrlGenerator',
    'priority' => 40,
    'class' => ShortUrlGenerator::class,
];

// Set "source_host" to "readOnly" for the sys_redirects of type "qrcode"
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[QrCodeSourceHostDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Set "short_url" to "readOnly" for the sys_redirects of type "short_url"
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[ShortUrlDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Add validation call for form field source_host and source_path
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][SourceHost::class] = '';

// Register update signal to send delayed notifications
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['redirects:slugChanged'] = DispatchNotificationHook::class . '->dispatchNotification';
}


/**
 * Extension: seo
 * File: /var/www/html/vendor/typo3/cms-seo/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Seo\Canonical\CanonicalGenerator;
use TYPO3\CMS\Seo\MetaTag\MetaTagGenerator;
use TYPO3\CMS\Seo\MetaTag\OpenGraphMetaTagManager;
use TYPO3\CMS\Seo\MetaTag\TwitterCardMetaTagManager;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['metatag']
    = MetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical']
    = CanonicalGenerator::class . '->generate';

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'opengraph',
    OpenGraphMetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'twitter',
    TwitterCardMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        seo {
            provider = TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
            before = record
        }
    }
'));
}


/**
 * Extension: sys_note
 * File: /var/www/html/vendor/typo3/cms-sys-note/ext_localconf.php
 */
namespace {




use TYPO3\CMS\SysNote\Persistence\NoteCreationEnricher;

defined('TYPO3') or die();

// Fill the "owner" field of a sys_note with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = NoteCreationEnricher::class;
}


/**
 * Extension: felogin
 * File: /var/www/html/vendor/typo3/cms-felogin/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\FrontendLogin\Controller\LoginController;
use TYPO3\CMS\FrontendLogin\Controller\PasswordRecoveryController;

defined('TYPO3') or die();

// Add default TypoScript
ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:felogin/Configuration/TypoScript/constants.typoscript'",
    false
);
ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:felogin/Configuration/TypoScript/setup.typoscript'",
    false
);

ExtensionUtility::configurePlugin(
    'Felogin',
    'Login',
    [
        LoginController::class => ['login', 'overview'],
        PasswordRecoveryController::class => ['recovery', 'showChangePassword', 'changePassword'],
    ],
    [
        LoginController::class => ['login', 'overview'],
        PasswordRecoveryController::class => ['recovery', 'showChangePassword', 'changePassword'],
    ],
);
}


/**
 * Extension: opendocs
 * File: /var/www/html/vendor/typo3/cms-opendocs/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Opendocs\Backend\OpenDocumentUpdateSignal;
use TYPO3\CMS\Opendocs\EventListener\TrackOpenDocumentsEventListener;

defined('TYPO3') or die();

// Register update signal to update the number of open documents
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['opendocs:updateRequested'] = OpenDocumentUpdateSignal::class . '->updateNumber';

// Register DataHandler hooks for tracking record updates and deletions
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['opendocs'] = TrackOpenDocumentsEventListener::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['opendocs'] = TrackOpenDocumentsEventListener::class;
}


/**
 * Extension: rte_ckeditor
 * File: /var/www/html/vendor/typo3/cms-rte-ckeditor/ext_localconf.php
 */
namespace {




use TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver;

defined('TYPO3') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => RichTextNodeResolver::class,
];

// Register the presets
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}
}


/**
 * Extension: tstemplate
 * File: /var/www/html/vendor/typo3/cms-tstemplate/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['tstemplate'] = DataHandlerClearCachePostProcHook::class . '->clearPageCacheIfNecessary';
}


/**
 * Extension: workspaces
 * File: /var/www/html/vendor/typo3/cms-workspaces/ext_localconf.php
 */
namespace {




use TYPO3\CMS\Workspaces\Hook\DataHandlerHook;
use TYPO3\CMS\Workspaces\Hook\DataHandlerInternalWorkspaceTablesHook;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['workspaces'] = DataHandlerHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['workspaces'] = DataHandlerHook::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['workspacesInternalTables'] = DataHandlerInternalWorkspaceTablesHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['workspacesInternalTables'] = DataHandlerInternalWorkspaceTablesHook::class;
}


/**
 * Extension: yoast_seo
 * File: /var/www/html/vendor/yoast-seo-for-typo3/yoast_seo/ext_localconf.php
 */
namespace {


/**
 * This file is part of the "yoast_seo" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use YoastSeoForTypo3\YoastSeo\Frontend\AdditionalPreviewData;
use YoastSeoForTypo3\YoastSeo\Hooks\DisableAnalysisCleanupHook;
use YoastSeoForTypo3\YoastSeo\MetaTag\AdvancedRobots\AdvancedRobotsGenerator;
use YoastSeoForTypo3\YoastSeo\MetaTag\RecordMetaTagGenerator;
use YoastSeoForTypo3\YoastSeo\StructuredData\StructuredDataProviderManager;
use YoastSeoForTypo3\YoastSeo\Utility\ConfigurationUtility;

defined('TYPO3') || die;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][] = StructuredDataProviderManager::class . '->render';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][] = AdditionalPreviewData::class . '->render';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['yoastRecord'] = RecordMetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['advancedrobots'] = AdvancedRobotsGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DisableAnalysisCleanupHook::class;

ExtensionManagementUtility::addTypoScript(
    'yoast_seo',
    'setup',
    "@import 'EXT:yoast_seo/Configuration/TypoScript/setup.typoscript'"
);

foreach (ConfigurationUtility::getFormEngineNodes() as $nodeKey => $nodeInfo) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][$nodeKey] = [
        'nodeName' => $nodeInfo[0],
        'priority' => 40,
        'class' => $nodeInfo[1],
    ];
}

$defaultConfiguration = ConfigurationUtility::getDefaultConfiguration();
ArrayUtility::mergeRecursiveWithOverrule(
    $defaultConfiguration,
    (array)($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['yoast_seo'] ?? [])
);
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['yoast_seo'] = $defaultConfiguration;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['yoastseo_recordcache'] ??= [];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['yoastseo_recordcache']['groups'] ??= ['system'];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['yoastSeoInclusiveLanguage'] ??= false;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['yoastSeoDisableAllCachesOnPreviewRequest'] ??= false;
}


/**
 * Extension: bootstrap_package
 * File: /var/www/html/vendor/bk2k/bootstrap-package/ext_localconf.php
 */
namespace {


/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'bootstrappackage/Configuration/TypoScript/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'bootstrappackage/Configuration/TypoScript/ContentElement/';

// Make the extension configuration accessible
$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
);

// Register custom EXT:form configuration
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('form')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
        module.tx_form {
            settings {
                yamlConfigurations {
                    110 = EXT:bootstrap_package/Configuration/Form/Setup.yaml
                }
            }
        }
        plugin.tx_form {
            settings {
                yamlConfigurations {
                    110 = EXT:bootstrap_package/Configuration/Form/Setup.yaml
                }
            }
        }
    '));
}

// Register google font hook
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disableGoogleFontCaching')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][\BK2K\BootstrapPackage\Hooks\PageRenderer\GoogleFontHook::class]
        = \BK2K\BootstrapPackage\Hooks\PageRenderer\GoogleFontHook::class . '->execute';
}

// Register css processing parser
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/css']['parser'][\BK2K\BootstrapPackage\Parser\ScssParser::class] =
    \BK2K\BootstrapPackage\Parser\ScssParser::class;

// Register css processing hooks
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disableCssProcessing')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][\BK2K\BootstrapPackage\Hooks\PageRenderer\PreProcessHook::class]
        = \BK2K\BootstrapPackage\Hooks\PageRenderer\PreProcessHook::class . '->execute';
}

// Add default RTE configuration for bootstrap package
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['bootstrap'] = 'EXT:bootstrap_package/Configuration/RTE/Default.yaml';

// Register "bk2k" as global fluid namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['bk2k'][] = 'BK2K\\BootstrapPackage\\ViewHelpers';

// Register "icon" wizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1687516916] = [
    'nodeName' => 'iconWizard',
    'priority' => 40,
    'class' => \BK2K\BootstrapPackage\Form\FieldWizard\IconWizard::class,
];
}


/**
 * Extension: blog
 * File: /var/www/html/vendor/t3g/blog/ext_localconf.php
 */
namespace {


/*
 * This file is part of the package t3g/blog.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use T3G\AgencyPack\Blog\Backend\FormDataProvider\CategoryDefaultValueProvider;
use T3G\AgencyPack\Blog\Controller\CommentController;
use T3G\AgencyPack\Blog\Controller\PostController;
use T3G\AgencyPack\Blog\Controller\WidgetController;
use T3G\AgencyPack\Blog\Hooks\CreateSiteConfigurationHook;
use T3G\AgencyPack\Blog\Hooks\DataHandlerHook;
use T3G\AgencyPack\Blog\Notification\CommentAddedNotification;
use T3G\AgencyPack\Blog\Notification\Processor\AdminNotificationProcessor;
use T3G\AgencyPack\Blog\Notification\Processor\AuthorNotificationProcessor;
use T3G\AgencyPack\Blog\Routing\Aspect\StaticDatabaseMapper;
use TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowInitializeNew;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

// Register "blogvh" as global fluid namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['blogvh'][] = 'T3G\\AgencyPack\\Blog\\ViewHelpers';

// Register new form data provider
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][CategoryDefaultValueProvider::class] = [
    'depends' => [DatabaseRowInitializeNew::class],
    'after' => [DatabaseRowInitializeNew::class],
];

// Register site configuration hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][CreateSiteConfigurationHook::class]
    = CreateSiteConfigurationHook::class;

ExtensionUtility::configurePlugin(
    'Blog',
    'Posts',
    [
        PostController::class => 'listRecentPosts',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'DemandedPosts',
    [
        PostController::class => 'listByDemand',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'LatestPosts',
    [
        PostController::class => 'listLatestPosts',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Category',
    [
        PostController::class => 'listPostsByCategory',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'AuthorPosts',
    [
        PostController::class => 'listPostsByAuthor',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Tag',
    [
        PostController::class => 'listPostsByTag',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Archive',
    [
        PostController::class => 'listPostsByDate',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Sidebar',
    [
        PostController::class => 'sidebar',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'CommentForm',
    [
        CommentController::class => 'form',
    ],
    [
        CommentController::class => 'form',
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Comments',
    [
        CommentController::class => 'comments',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Header',
    [
        PostController::class => 'header',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Footer',
    [
        PostController::class => 'footer',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'Authors',
    [
        PostController::class => 'authors',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'RelatedPosts',
    [
        PostController::class => 'relatedPosts',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// Widgets
ExtensionUtility::configurePlugin(
    'Blog',
    'RecentPostsWidget',
    [
        WidgetController::class => 'recentPosts',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'CategoryWidget',
    [
        WidgetController::class => 'categories',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'TagWidget',
    [
        WidgetController::class => 'tags',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'CommentsWidget',
    [
        WidgetController::class => 'comments',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'ArchiveWidget',
    [
        WidgetController::class => 'archive',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Blog',
    'FeedWidget',
    [
        WidgetController::class => 'feed',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

// Hooks
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['Blog']
    = DataHandlerHook::class;

// Register Static Database Mapper
$GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['BlogStaticDatabaseMapper']
    = StaticDatabaseMapper::class;

// Register Notification visitors
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['Blog']['notificationRegistry'][CommentAddedNotification::class][]
    = AdminNotificationProcessor::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['Blog']['notificationRegistry'][CommentAddedNotification::class][]
    = AuthorNotificationProcessor::class;
}


/**
 * Extension: efrank14
 * File: /var/www/html/vendor/eduardo-frank/efrank14/ext_localconf.php
 */
namespace {


defined('TYPO3') or die('Access denied.');

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['efrank14'] = 'EXT:efrank14/Configuration/RTE/Default.yaml';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['yoast_seo']['allowedDoktypes']['blog'] = 137;
}


/**
 * Extension: fluid_fpdf
 * File: /var/www/html/vendor/codingms/fluid-fpdf/ext_localconf.php
 */
namespace {


if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'FluidFpdf',
    'Pdf',
    [
        \CodingMs\FluidFpdf\Controller\PdfController::class => 'show',
    ],
    // non-cacheable actions
    [
        \CodingMs\FluidFpdf\Controller\PdfController::class => 'show',
    ],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
}


/**
 * Extension: parsedown_extra
 * File: /var/www/html/vendor/codingms/parsedown-extra/ext_localconf.php
 */
namespace {


use CodingMs\ParsedownExtra\Controller\ParsedownController;
use CodingMs\ParsedownExtra\Form\Element\MarkdownSelect;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

// Parsedown plugin
ExtensionUtility::configurePlugin(
    'ParsedownExtra',
    'Parsedown',
    [ParsedownController::class => 'show'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
$extensionPath = ExtensionManagementUtility::extPath('parsedown_extra');
if (!class_exists('\Parsedown')) {
    $library = '/Resources/Private/Php/Parsedown/Parsedown.php';
    include_once($extensionPath . $library);
}
if (!class_exists('\ParsedownExtra')) {
    $library = '/Resources/Private/Php/ParsedownExtra/ParsedownExtra.php';
    include_once($extensionPath . $library);
}
if (!class_exists('\ParsedownExtraPlugin')) {
    $library = '/Resources/Private/Php/ParsedownExtraPlugin/ParsedownExtraPlugin.php';
    include_once($extensionPath . $library);
}
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1586262363] = [
    'nodeName' => 'markdownSelect',
    'priority' => '70',
    'class' => MarkdownSelect::class,
];
}


/**
 * Extension: rte_ckeditor_image
 * File: /var/www/html/vendor/netresearch/rte-ckeditor-image/ext_localconf.php
 */
namespace {


/*
 * Copyright (c) 2025-2026 Netresearch DTT GmbH
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */



use Netresearch\RteCKEditorImage\Database\RteImagesDbHook;

defined('TYPO3') || exit;

call_user_func(static function (): void {
    // Register DataHandler hook for RTE image processing.
    // TYPO3 bootstrap guarantees the TYPO3_CONF_VARS structure exists;
    // @phpstan-var annotations satisfy PHPStan level 10 without runtime guards.

    /** @phpstan-var array{SC_OPTIONS: array<string, array<string, list<class-string>>>, RTE: array{Presets: array<string, string>}} $conf */
    $conf = &$GLOBALS['TYPO3_CONF_VARS'];

    $conf['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = RteImagesDbHook::class;
    $conf['RTE']['Presets']['rteWithImages']                                      = 'EXT:rte_ckeditor_image/Configuration/RTE/rteWithImages.yaml';
});
}


#