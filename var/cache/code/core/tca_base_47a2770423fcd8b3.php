<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'groupName' => 'backendaccess',
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:page_tree_entry_points',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:page_tree_entry_points.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms.description',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailablePageTypes',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'tablePermission',
            'selectFieldName' => 'tables_select',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExcludeFields',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExplicitAuthValues',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
            'dbFieldLength' => 255,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateCustomPermissionOptions',
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'mfa_providers' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:mfa_providers',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Authentication\\Mfa\\MfaProviderRegistry->allowedProvidersItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:tsconfig_includes',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT({#be_groups}.{#uid} = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.accounts:group.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'availableWidgets' => 
        array (
          'label' => 'core.tca:availableWidgets',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Dashboard\\WidgetRegistry->widgetItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                title, subgroup,
                --palette--;;authentication,
            --div--;core.form.tabs:recordpermissions,
                --palette--;;permissionGeneral,
                --palette--;;permissionSpecific,
                --palette--;;permissionLanguages,
            --div--;core.form.tabs:modulepermissions,
                groupMods, availableWidgets, custom_options, workspace_perms,
            --div--;core.form.tabs:mounts,
                db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;core.form.tabs:options,
                TSconfig, tsconfig_includes,
            --div--;core.form.tabs:access,
                hidden,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended',
        ),
      ),
      'palettes' => 
      array (
        'authentication' => 
        array (
          'label' => 'core.form.palettes:authentication',
          'showitem' => 'mfa_providers',
        ),
        'permissionGeneral' => 
        array (
          'label' => 'core.form.palettes:permission_general',
          'showitem' => '
                tables_modify,
                --linebreak--, non_exclude_fields
            ',
        ),
        'permissionLanguages' => 
        array (
          'label' => 'core.form.palettes:permission_languages',
          'showitem' => 'allowed_languages',
        ),
        'permissionSpecific' => 
        array (
          'label' => 'core.form.palettes:permission_specific',
          'showitem' => '
                pagetypes_select,
                --linebreak--, explicit_allowdeny
            ',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'nospace,trim,lower,unique',
            'autocomplete' => false,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
            'fieldControl' => 
            array (
              'passwordGenerator' => 
              array (
                'renderType' => 'passwordGenerator',
                'options' => 
                array (
                  'title' => 'core.core:labels.generatePassword',
                  'allowEdit' => true,
                  'passwordPolicy' => 'default',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'once' => true,
          ),
        ),
        'mfa' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.mfa',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'mfaInfo',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'size' => 5,
            'dbFieldLength' => 512,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'file',
            'relationship' => 'manyToOne',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
              'tablenames' => 'be_users',
            ),
            'maxitems' => 1,
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_page_tree_entry_points',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_page_tree_entry_points.description',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
            'softref' => 'email[subst]',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_page_tree_entry_points',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms.description',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSystemLanguagesForBackend',
            'default' => 'en',
            'dbFieldLength' => 10,
            'items' => 
            array (
            ),
            'itemGroups' => 
            array (
              'installed' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.installed',
              'unavailable' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.unavailable',
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
            'dbFieldLength' => 255,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:tsconfig_includes',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'user_settings' => 
        array (
          'label' => 'backend.user_profile:user_settings',
          'config' => 
          array (
            'type' => 'json',
          ),
          'showitem' => '--div--;core.form.tabs:personaldata, realName, email, emailMeAtLogin, avatar, lang,
    --div--;core.form.tabs:account_security, password, password2, mfaProviders,
    --div--;core.form.tabs:backend_appearance, colorScheme, theme, startModule, backendTitleFormat, dateTimeFirstDayOfWeek,
    --div--;core.form.tabs:personalization, titleLen, edit_docModuleUpload, contextualRecordEdit, showHiddenFilesAndFolders, displayRecentlyUsed, showWorkspaceLiveIndicator, copyLevels',
          'columns' => 
          array (
            'realName' => 
            array (
              'inheritFromParent' => true,
            ),
            'email' => 
            array (
              'inheritFromParent' => true,
            ),
            'emailMeAtLogin' => 
            array (
              'label' => 'backend.user_profile:email_me_at_login',
              'config' => 
              array (
                'type' => 'check',
                'renderType' => 'checkboxToggle',
              ),
            ),
            'avatar' => 
            array (
              'label' => 'backend.user_profile:avatar',
              'config' => 
              array (
                'type' => 'none',
                'renderType' => 'avatar',
              ),
            ),
            'lang' => 
            array (
              'label' => 'backend.user_profile:language',
              'table' => 'be_users',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\UserFunctions\\UserSettingsItemsProcFunc->addLanguageItems',
              ),
            ),
            'password' => 
            array (
              'inheritFromParent' => true,
              'label' => 'backend.user_profile:new_password',
            ),
            'password2' => 
            array (
              'label' => 'backend.user_profile:new_password_again',
              'config' => 
              array (
                'type' => 'password',
                'passwordPolicy' => 'default',
                'size' => 20,
                'required' => true,
              ),
            ),
            'mfaProviders' => 
            array (
              'label' => 'backend.user_profile:mfa_providers',
              'config' => 
              array (
                'type' => 'none',
                'renderType' => 'mfaInfo',
              ),
              'authenticationContext' => 
              array (
                'group' => 'be.userManagement',
              ),
            ),
            'colorScheme' => 
            array (
              'label' => 'backend.messages:colorScheme',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => 
                array (
                  0 => 
                  array (
                    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:colorScheme.auto',
                    'value' => 'auto',
                  ),
                  1 => 
                  array (
                    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:colorScheme.light',
                    'value' => 'light',
                  ),
                  2 => 
                  array (
                    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:colorScheme.dark',
                    'value' => 'dark',
                  ),
                ),
              ),
            ),
            'theme' => 
            array (
              'label' => 'backend.messages:theme',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => 
                array (
                  0 => 
                  array (
                    'label' => 'backend.messages:theme.fresh',
                    'value' => 'fresh',
                  ),
                  1 => 
                  array (
                    'label' => 'backend.messages:theme.modern',
                    'value' => 'modern',
                  ),
                  2 => 
                  array (
                    'label' => 'backend.messages:theme.classic',
                    'value' => 'classic',
                  ),
                ),
              ),
            ),
            'startModule' => 
            array (
              'label' => 'backend.user_profile:start_module',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\UserFunctions\\UserSettingsItemsProcFunc->renderStartModuleSelect',
                'items' => 
                array (
                ),
              ),
            ),
            'backendTitleFormat' => 
            array (
              'label' => 'backend.user_profile:backend_title_format',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => 
                array (
                  0 => 
                  array (
                    'label' => 'backend.user_profile:backend_title_format.title_first',
                    'value' => 'titleFirst',
                  ),
                  1 => 
                  array (
                    'label' => 'backend.user_profile:backend_title_format.sitename_first',
                    'value' => 'sitenameFirst',
                  ),
                ),
              ),
            ),
            'dateTimeFirstDayOfWeek' => 
            array (
              'label' => 'backend.user_profile:datetime_first_day_of_week',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\UserFunctions\\UserSettingsItemsProcFunc->renderDateTimeFirstDayOfWeekSelect',
                'items' => 
                array (
                ),
              ),
            ),
            'titleLen' => 
            array (
              'label' => 'backend.user_profile:max_title_len',
              'config' => 
              array (
                'type' => 'number',
                'size' => 5,
                'range' => 
                array (
                  'lower' => 10,
                  'upper' => 255,
                ),
                'default' => 50,
              ),
            ),
            'edit_docModuleUpload' => 
            array (
              'label' => 'backend.user_profile:edit_doc_module_upload',
              'config' => 
              array (
                'type' => 'check',
                'renderType' => 'checkboxToggle',
              ),
            ),
            'showHiddenFilesAndFolders' => 
            array (
              'label' => 'backend.user_profile:show_hidden_files_and_folders',
              'config' => 
              array (
                'type' => 'check',
                'renderType' => 'checkboxToggle',
              ),
            ),
            'displayRecentlyUsed' => 
            array (
              'label' => 'backend.user_profile:display_recently_used',
              'persistentUpdate' => true,
              'config' => 
              array (
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 1,
              ),
            ),
            'contextualRecordEdit' => 
            array (
              'label' => 'backend.user_profile:contextual_record_edit',
              'persistentUpdate' => true,
              'config' => 
              array (
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 1,
              ),
            ),
            'copyLevels' => 
            array (
              'label' => 'backend.user_profile:copy_levels',
              'config' => 
              array (
                'type' => 'number',
                'size' => 5,
                'range' => 
                array (
                  'lower' => 0,
                  'upper' => 100,
                ),
                'default' => 0,
              ),
            ),
            'showWorkspaceLiveIndicator' => 
            array (
              'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang.xlf:userSetting.showWorkspaceLiveIndicator',
              'persistentUpdate' => true,
              'config' => 
              array (
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 1,
              ),
            ),
          ),
        ),
        'disable' => 
        array (
          'label' => 'core.db.accounts:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isRecordCurrentUser:false',
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
          'authenticationContext' => 
          array (
            'group' => 'be.userManagement',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'title' => 'core.tca:be_users.types.user',
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;account,
                    usergroup,
                    --palette--;;authentication,
                --div--;core.form.tabs:personaldata,
                    realName, email, avatar, lang,
                --div--;core.form.tabs:recordpermissions,
                    --palette--;;permissionLanguages,
                --div--;core.form.tabs:modulepermissions,
                    userMods, workspace_perms,
                --div--;core.form.tabs:mounts,
                    db_mountpoints, options, file_mountpoints, file_permissions, category_perms,
                --div--;core.form.tabs:options,
                    TSconfig, tsconfig_includes,
                --div--;core.form.tabs:access,
                    --palette--;;status,
                    --palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
        1 => 
        array (
          'title' => 'core.tca:be_users.types.admin',
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;account,
                    usergroup,
                    --palette--;;authentication,
                --div--;core.form.tabs:personaldata,
                    realName, email, avatar, lang,
                --div--;core.form.tabs:options,
                    TSconfig, tsconfig_includes, db_mountpoints, options, file_mountpoints,
                --div--;core.form.tabs:access,
                    --palette--;;status,
                    --palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'account' => 
        array (
          'label' => 'core.form.palettes:account',
          'showitem' => '
                admin,
                --linebreak--, username, password
            ',
        ),
        'authentication' => 
        array (
          'label' => 'core.form.palettes:authentication',
          'showitem' => 'mfa',
        ),
        'permissionLanguages' => 
        array (
          'label' => 'core.form.palettes:permission_languages',
          'showitem' => 'allowed_languages',
        ),
        'status' => 
        array (
          'showitem' => 'disable, lastlogin',
        ),
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
          'contains-blog' => 'record-folder-contains-blog',
          138 => 'record-blog-page',
          '138-root' => 'record-blog-page-root',
          137 => 'record-blog-post',
        ),
        'defaultAllowedRecordTypes' => 
        array (
          0 => 'backend_layout',
          1 => 'sys_template',
          2 => 'tt_content',
          3 => 'sys_redirect',
          4 => 'sys_note',
          5 => 'tx_yoastseo_prominent_word',
          6 => 'tx_yoastseo_related_focuskeyword',
          7 => 'tx_bootstrappackage_accordion_item',
          8 => 'tx_bootstrappackage_card_group_item',
          9 => 'tx_bootstrappackage_carousel_item',
          10 => 'tx_bootstrappackage_icon_group_item',
          11 => 'tx_bootstrappackage_tab_item',
          12 => 'tx_bootstrappackage_timeline_item',
          13 => 'tx_blog_domain_model_comment',
        ),
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:doktype',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'core.db.pages:doktype.default',
                'value' => '1',
                'icon' => 'apps-pagetree-page-default',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_tca.xlf:pages.doktype.blog-post',
                'value' => '137',
                'icon' => 'record-blog-post',
                'group' => 'blog',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_tca.xlf:pages.doktype.blog-page',
                'value' => '138',
                'icon' => 'record-blog-page',
                'group' => 'blog',
              ),
              3 => 
              array (
                'label' => 'core.db.pages:doktype.be_user_section',
                'value' => '6',
                'icon' => 'apps-pagetree-page-backend-users',
                'group' => 'default',
              ),
              4 => 
              array (
                'label' => 'core.db.pages:doktype.shortcut',
                'value' => '4',
                'icon' => 'apps-pagetree-page-shortcut',
                'group' => 'link',
              ),
              5 => 
              array (
                'label' => 'core.db.pages:doktype.mountpoint',
                'value' => '7',
                'icon' => 'apps-pagetree-page-mountpoint',
                'group' => 'link',
              ),
              6 => 
              array (
                'label' => 'core.db.pages:doktype.link',
                'value' => '3',
                'icon' => 'apps-pagetree-page-shortcut-external',
                'group' => 'link',
              ),
              7 => 
              array (
                'label' => 'core.db.pages:doktype.sysfolder',
                'value' => '254',
                'icon' => 'apps-pagetree-folder-default',
                'group' => 'special',
              ),
              8 => 
              array (
                'label' => 'core.db.pages:doktype.spacer',
                'value' => '199',
                'icon' => 'apps-pagetree-spacer',
                'group' => 'special',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'core.db.pages:doktype.group.page',
              'link' => 'core.db.pages:doktype.group.link',
              'special' => 'core.db.pages:doktype.group.special',
              'blog' => 'Blog',
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'slug' => 
        array (
          'label' => 'core.db.pages:slug',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:tsconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'cols' => 40,
            'rows' => 15,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:extend_to_subpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:nav_hide',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  'value' => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'link' => 
        array (
          'label' => 'core.db.pages:link',
          'description' => 'core.db.pages:link.description',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'target',
              ),
            ),
            'default' => '',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'required' => true,
            'softref' => 'typolink',
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:last_updated',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:new_until',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                'value' => 60,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                'value' => 300,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                'value' => 900,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                'value' => 1800,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                'value' => 3600,
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                'value' => 14400,
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                'value' => 86400,
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                'value' => 172800,
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                'value' => 604800,
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                'value' => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'core.db.pages:shortcut',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                'value' => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'default' => 0,
            'maxitems' => 1,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'core.db.pages:abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 255,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:author_email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 23,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'core.db.pages:media',
          'config' => 
          array (
            'type' => 'file',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'pages',
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                'value' => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                'value' => 'fe_users',
                'icon' => 'status-user-frontend',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:blog-folder',
                'value' => 'blog',
                'icon' => 'record-folder-contains-blog',
              ),
            ),
            'default' => '',
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:backend_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'fieldInformation' => 
            array (
              'backendLayoutFromParentPage' => 
              array (
                'renderType' => 'backendLayoutFromParentPage',
              ),
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:backend_layout_next_level',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'core.db.pages:tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'core.db.general:fe_group.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'core.db.general:fe_group.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'core.db.general:fe_group.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'core.db.general:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
          'l10n_mode' => 'exclude',
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#uid}=###CURRENT_PID### AND {#pages}.{#sys_language_uid} = 0',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'seo.db:pages.no_index_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'seo.db:pages.no_follow_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.sitemap_changefreq',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.always',
                'value' => 'always',
              ),
              2 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.hourly',
                'value' => 'hourly',
              ),
              3 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.daily',
                'value' => 'daily',
              ),
              4 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.weekly',
                'value' => 'weekly',
              ),
              5 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.monthly',
                'value' => 'monthly',
              ),
              6 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.yearly',
                'value' => 'yearly',
              ),
              7 => 
              array (
                'label' => 'seo.db:pages.sitemap_changefreq.never',
                'value' => 'never',
              ),
            ),
            'dbFieldLength' => 10,
          ),
        ),
        'sitemap_priority' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.sitemap_priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '0.5',
            'items' => 
            array (
              0 => 
              array (
                'label' => '0.0',
                'value' => '0.0',
              ),
              1 => 
              array (
                'label' => '0.1',
                'value' => '0.1',
              ),
              2 => 
              array (
                'label' => '0.2',
                'value' => '0.2',
              ),
              3 => 
              array (
                'label' => '0.3',
                'value' => '0.3',
              ),
              4 => 
              array (
                'label' => '0.4',
                'value' => '0.4',
              ),
              5 => 
              array (
                'label' => '0.5',
                'value' => '0.5',
              ),
              6 => 
              array (
                'label' => '0.6',
                'value' => '0.6',
              ),
              7 => 
              array (
                'label' => '0.7',
                'value' => '0.7',
              ),
              8 => 
              array (
                'label' => '0.8',
                'value' => '0.8',
              ),
              9 => 
              array (
                'label' => '0.9',
                'value' => '0.9',
              ),
              10 => 
              array (
                'label' => '1.0',
                'value' => '1.0',
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.canonical_link',
          'description' => 'seo.db:pages.canonical_link.description',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'url',
              2 => 'record',
            ),
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'seo.db:pages.canonical_link',
              'allowedOptions' => 
              array (
                0 => 'params',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.og_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'core.wizards:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
              'tablenames' => 'pages',
            ),
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'seo.db:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.twitter_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'core.wizards:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'core.wizards:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
              'tablenames' => 'pages',
            ),
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'seo.db:pages.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'seo.db:pages.twitter_card.summary',
                'value' => 'summary',
              ),
              2 => 
              array (
                'label' => 'seo.db:pages.twitter_card.summary_large_image',
                'value' => 'summary_large_image',
              ),
            ),
            'dbFieldLength' => 255,
          ),
        ),
        'tx_yoastseo_snippetpreview' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:snippetPreview',
          'exclude' => true,
          'displayCond' => 
          array (
            'OR' => 
            array (
              0 => 'FIELD:tx_yoastseo_hide_snippet_preview:REQ:false',
              1 => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
            ),
          ),
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'snippetPreview',
            'settings' => 
            array (
              'titleField' => 'seo_title',
              'descriptionField' => 'description',
            ),
          ),
        ),
        'tx_yoastseo_readability_analysis' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:analysis',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'readabilityAnalysis',
          ),
        ),
        'tx_yoastseo_focuskeyword' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:seoFocusKeyword',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tx_yoastseo_focuskeyword_analysis' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:analysis',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'focusKeywordAnalysis',
            'settings' => 
            array (
              'focusKeywordField' => 'tx_yoastseo_focuskeyword',
            ),
          ),
        ),
        'tx_yoastseo_cornerstone' => 
        array (
          'label' => '',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'input',
            'default' => 0,
            'renderType' => 'cornerstone',
          ),
        ),
        'tx_yoastseo_score_readability' => 
        array (
          'label' => '',
          'exclude' => false,
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_yoastseo_score_seo' => 
        array (
          'label' => '',
          'exclude' => false,
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_yoastseo_focuskeyword_related' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.tx_yoastseo_focuskeyword_related',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_yoastseo_related_focuskeyword',
            'foreign_field' => 'uid_foreign',
            'foreign_table_field' => 'tablenames',
            'maxitems' => 5,
          ),
        ),
        'tx_yoastseo_insights' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'insights',
          ),
        ),
        'tx_yoastseo_focuskeyword_synonyms' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:synonyms',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tx_yoastseo_robots_noimageindex' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.robots.noimageindex',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        'tx_yoastseo_robots_noarchive' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.robots.noarchive',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        'tx_yoastseo_robots_nosnippet' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.robots.nosnippet',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        'tx_yoastseo_disable_analysis' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:disableAnalysis',
          'exclude' => true,
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'tx_yoastseo_hide_snippet_preview' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:hideSnippetPreview',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'tx_yoastseo_facebook_preview' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.tx_yoastseo_facebook_preview',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'facebookPreview',
          ),
        ),
        'tx_yoastseo_twitter_preview' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.tx_yoastseo_twitter_preview',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_disable_analysis:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'twitterPreview',
          ),
        ),
        'nav_icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
          'l10n_mode' => 'exclude',
        ),
        'nav_icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:nav_icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'nav_icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'nav_icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.nav_icon',
          'displayCond' => 'FIELD:nav_icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '--palette--;;filePalette',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'nav_icon',
              'tablenames' => 'pages',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'thumbnail' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.thumbnail',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'minitems' => 0,
            'maxitems' => 1,
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette
                            ',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'thumbnail',
              'tablenames' => 'pages',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'comments_active' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.comments_active',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'comments' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.comments',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_blog_domain_model_comment',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
            'size' => 10,
            'maxitems' => 9999,
            'autoSizeMax' => 30,
            'multiple' => 0,
            'appearance' => 
            array (
              'collapseAll' => 1,
              'levelLinksPosition' => 'top',
              'showSynchronizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
            ),
          ),
        ),
        'crdate_month' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.crdate_month',
          'config' => 
          array (
            'type' => 'input',
            'size' => '13',
            'eval' => 'num',
            'default' => '0',
            'readOnly' => true,
          ),
        ),
        'crdate_year' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.crdate_year',
          'config' => 
          array (
            'type' => 'input',
            'size' => '13',
            'eval' => 'num',
            'default' => '0',
            'readOnly' => true,
          ),
        ),
        'archive_date' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.archive_date',
          'config' => 
          array (
            'type' => 'datetime',
            'size' => '13',
            'default' => '0',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'publish_date' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.publish_date',
          'config' => 
          array (
            'type' => 'datetime',
            'size' => '13',
            'default' => '0',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'tags' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.tags',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 9999,
            'autoSizeMax' => 10,
            'multiple' => 0,
            'foreign_table' => 'tx_blog_domain_model_tag',
            'foreign_table_where' => 'AND tx_blog_domain_model_tag.sys_language_uid IN (0,-1) AND tx_blog_domain_model_tag.pid = ###PAGE_TSCONFIG_ID### ORDER BY tx_blog_domain_model_tag.title ASC',
            'MM' => 'tx_blog_tag_pages_mm',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'authors' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.authors',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'multiple' => 0,
            'foreign_table' => 'tx_blog_domain_model_author',
            'foreign_table_where' => 'AND tx_blog_domain_model_author.sys_language_uid IN (0,-1) AND tx_blog_domain_model_author.pid = ###PAGE_TSCONFIG_ID### ORDER BY tx_blog_domain_model_author.name ASC',
            'MM' => 'tx_blog_post_author_mm',
            'minitems' => 0,
            'maxitems' => 99999,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'featured_image' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.featured_image',
          'config' => 
          array (
            'type' => 'file',
            'minitems' => 0,
            'maxitems' => 1,
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'featured_image',
              'tablenames' => 'pages',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier, --div--;core.form.tabs:seo, --palette--;Label;yoast-snippetpreview, , --palette--;;seo, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.readability;yoast-readability, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusKeyphrase;yoast-focuskeyword, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusRelatedKeyphrases;yoast-relatedkeywords, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.insights;yoast-insights, , --palette--;;robots, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.robots;yoast-advanced-robots, , --palette--;;canonical, --palette--;;sitemap, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.advanced;yoast-advanced, , --div--;core.form.tabs:socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout, thumbnail,
                    --palette--;;replace,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
          ),
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        6 => 
        array (
          'allowedRecordTypes' => 
          array (
            0 => '*',
          ),
          'showitem' => '--div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;title,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended, --palette--;Label;yoast-snippetpreview, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.readability;yoast-readability, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusKeyphrase;yoast-focuskeyword, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusRelatedKeyphrases;yoast-relatedkeywords, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.insights;yoast-insights, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.robots;yoast-advanced-robots, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.advanced;yoast-advanced, ',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
          ),
        ),
        3 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    doktype,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier,
                    --palette--;;link,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout, thumbnail,
                --div--;core.form.tabs:behaviour,
                    --palette--;;miscellaneous,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
            'links' => 
            array (
              'title' => 'backend.wizards.page:step.link',
              'fields' => 
              array (
                0 => 'link',
              ),
              'after' => 
              array (
                0 => 'setup',
              ),
            ),
          ),
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        4 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    doktype,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier,
                    --palette--;;shortcut,
                    --palette--;;shortcutpage,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout, thumbnail,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
            'shortcut' => 
            array (
              'title' => 'backend.wizards.page:step.shortcut',
              'fields' => 
              array (
                0 => 'shortcut_mode',
                1 => 'shortcut',
              ),
              'after' => 
              array (
                0 => 'setup',
              ),
            ),
          ),
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        7 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    doktype,
                    --palette--;;title,
                    --palette--;;mountpoint,
                    --palette--;;mountpage,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
            'mounting' => 
            array (
              'title' => 'backend.wizards.page:step.mounting',
              'fields' => 
              array (
                0 => 'mount_pid_ol',
                1 => 'mount_pid',
              ),
              'after' => 
              array (
                0 => 'setup',
              ),
            ),
          ),
        ),
        199 => 
        array (
          'isViewable' => false,
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;core.form.tabs:appearance,
                    --palette--;;backend_layout,
                --div--;core.form.tabs:resources,
                    --palette--;;config,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'hidden',
                3 => 'nav_hide',
              ),
            ),
          ),
        ),
        254 => 
        array (
          'allowedRecordTypes' => 
          array (
            0 => '*',
          ),
          'isViewable' => false,
          'showitem' => '
                --div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;core.form.tabs:appearance,
                    --palette--;;backend_layout,
                --div--;core.form.tabs:behaviour,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended,
            ',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'hidden',
              ),
            ),
          ),
        ),
        137 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier, --div--;core.form.tabs:seo, --palette--;Label;yoast-snippetpreview, , --palette--;;seo, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.readability;yoast-readability, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusKeyphrase;yoast-focuskeyword, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusRelatedKeyphrases;yoast-relatedkeywords, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.insights;yoast-insights, , --palette--;;robots, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.robots;yoast-advanced-robots, , --palette--;;canonical, --palette--;;sitemap, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.advanced;yoast-advanced, , --div--;core.form.tabs:socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout, thumbnail,
                    --palette--;;replace,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended, --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.tabs.blog, --palette--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:pages.palettes.publish_date;publish_date, featured_image, archive_date, tags, authors, comments_active, comments',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
          ),
          'columnsOverrides' => 
          array (
            'categories' => 
            array (
              'config' => 
              array (
                'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) AND sys_category.pid = ###PAGE_TSCONFIG_ID###',
              ),
            ),
          ),
        ),
        138 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    --palette--;;standard,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier, --div--;core.form.tabs:seo, --palette--;Label;yoast-snippetpreview, , --palette--;;seo, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.readability;yoast-readability, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusKeyphrase;yoast-focuskeyword, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusRelatedKeyphrases;yoast-relatedkeywords, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.insights;yoast-insights, , --palette--;;robots, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.robots;yoast-advanced-robots, , --palette--;;canonical, --palette--;;sitemap, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.advanced;yoast-advanced, , --div--;core.form.tabs:socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;core.form.tabs:metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;core.form.tabs:appearance,
                    --palette--;;layout, thumbnail,
                    --palette--;;replace,
                --div--;core.form.tabs:behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;core.form.tabs:resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:notes,
                    rowDescription,
                --div--;core.form.tabs:extended',
          'wizardSteps' => 
          array (
            'setup' => 
            array (
              'title' => 'backend.wizards.page:step.setup',
              'fields' => 
              array (
                0 => 'title',
                1 => 'slug',
                2 => 'nav_title',
                3 => 'hidden',
                4 => 'nav_hide',
              ),
            ),
          ),
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'standard' => 
        array (
          'label' => 'core.form.palettes:standard',
          'showitem' => 'doktype',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid',
        ),
        'link' => 
        array (
          'showitem' => 'link',
        ),
        'title' => 
        array (
          'label' => 'core.form.palettes:title',
          'showitem' => 'title, --linebreak--, slug, --linebreak--, nav_title, --linebreak--, subtitle',
        ),
        'titleonly' => 
        array (
          'label' => 'core.form.palettes:title',
          'showitem' => 'title, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'core.form.palettes:visibility',
          'showitem' => 'hidden;core.db.pages:hidden, nav_hide',
        ),
        'hiddenonly' => 
        array (
          'label' => 'core.form.palettes:visibility',
          'showitem' => 'hidden;core.db.pages:hidden',
        ),
        'access' => 
        array (
          'label' => 'core.form.palettes:access',
          'showitem' => 'starttime, endtime, extendToSubpages, --linebreak--, fe_group, --linebreak--, editlock',
        ),
        'abstract' => 
        array (
          'label' => 'core.form.palettes:abstract',
          'showitem' => 'abstract',
        ),
        'metatags' => 
        array (
          'label' => 'core.form.palettes:metatags',
          'showitem' => 'keywords',
        ),
        'editorial' => 
        array (
          'label' => 'core.form.palettes:editorial',
          'showitem' => 'author, author_email, lastUpdated',
        ),
        'layout' => 
        array (
          'label' => 'core.form.palettes:layout',
          'showitem' => 'layout, newUntil, --linebreak--, backend_layout, backend_layout_next_level',
        ),
        'backend_layout' => 
        array (
          'label' => 'core.form.palettes:page_layout',
          'showitem' => 'backend_layout, backend_layout_next_level',
        ),
        'module' => 
        array (
          'label' => 'core.form.palettes:use_as_container',
          'showitem' => 'module',
        ),
        'replace' => 
        array (
          'label' => 'core.form.palettes:replace',
          'showitem' => 'content_from_pid',
        ),
        'links' => 
        array (
          'label' => 'core.form.palettes:links',
          'showitem' => 'target;core.db.pages:link.target',
        ),
        'caching' => 
        array (
          'label' => 'core.form.palettes:caching',
          'showitem' => 'cache_timeout, cache_tags',
        ),
        'language' => 
        array (
          'label' => 'core.form.palettes:language',
          'showitem' => 'l18n_cfg',
        ),
        'miscellaneous' => 
        array (
          'label' => 'core.form.palettes:miscellaneous',
          'showitem' => 'is_siteroot, no_search, php_tree_stop',
        ),
        'adminsonly' => 
        array (
          'label' => 'core.form.palettes:miscellaneous',
          'showitem' => 'editlock',
        ),
        'media' => 
        array (
          'label' => 'core.form.palettes:media',
          'showitem' => 'media',
        ),
        'config' => 
        array (
          'label' => 'core.form.palettes:config',
          'showitem' => 'tsconfig_includes, --linebreak--, TSconfig',
        ),
        'seo' => 
        array (
          'label' => 'core.form.palettes:seo',
          'showitem' => '--linebreak--, tx_yoastseo_snippetpreview, --linebreak--, seo_title, --linebreak--, --linebreak--, tx_yoastseo_cornerstone, --linebreak--, description',
        ),
        'robots' => 
        array (
          'label' => 'core.form.palettes:robots',
          'showitem' => 'no_index, no_follow',
        ),
        'canonical' => 
        array (
          'label' => 'core.form.palettes:canonical',
          'showitem' => 'canonical_link',
        ),
        'sitemap' => 
        array (
          'label' => 'core.form.palettes:sitemap',
          'showitem' => 'sitemap_changefreq, sitemap_priority',
        ),
        'opengraph' => 
        array (
          'label' => 'core.form.palettes:opengraph',
          'showitem' => 'tx_yoastseo_facebook_preview, --linebreak--, og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'core.form.palettes:twittercards',
          'showitem' => 'tx_yoastseo_twitter_preview, --linebreak--, twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image, --linebreak--, twitter_card',
        ),
        'yoast-readability' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_readability_analysis',
        ),
        'yoast-focuskeyword' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_focuskeyword, --linebreak--, tx_yoastseo_focuskeyword_synonyms, --linebreak--, tx_yoastseo_focuskeyword_analysis',
        ),
        'yoast-relatedkeywords' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_focuskeyword_related ',
        ),
        'yoast-insights' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_insights',
        ),
        'yoast-advanced-robots' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_robots_noimageindex, tx_yoastseo_robots_noarchive, tx_yoastseo_robots_nosnippet',
        ),
        'yoast-advanced' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_disable_analysis, tx_yoastseo_hide_snippet_preview',
          'description' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.advanced.description',
        ),
        'publish_date' => 
        array (
          'showitem' => 'publish_date, crdate_month, crdate_year',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'versioningWS' => true,
        'rootLevel' => -1,
        'groupName' => 'content',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
          100 => 'record-blog-category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
        'type' => 'record_type',
        'typeicon_column' => 'record_type',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    record_type, title, slug, parent,
                --div--;core.form.tabs:items,
                    items,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended',
        ),
        100 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    record_type, title, slug, parent,
                --div--;core.form.tabs:items,
                    items,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended, --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:sys_category.tabs.seo, content, --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:sys_category.tabs.blog, posts',
          'columnsOverrides' => 
          array (
            'parent' => 
            array (
              'config' => 
              array (
                'foreign_table_where' => ' AND sys_category.record_type = 100  AND sys_category.pid = ###CURRENT_PID### ',
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND {#sys_category}.{#pid}=###CURRENT_PID### AND {#sys_category}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'record_type' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:sys_category.record_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_tca.xlf:sys_category.record_type.default',
                'value' => '1',
                'icon' => 'mimetypes-x-sys_category',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_tca.xlf:sys_category.record_type.blog',
                'value' => '100',
                'icon' => 'record-blog-category',
              ),
            ),
            'default' => '1',
          ),
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:sys_category.slug',
          'config' => 
          array (
            'type' => 'slug',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:sys_category.content',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_blog_category_content',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => 
            array (
              'collapseAll' => 1,
              'expandSingle' => 1,
              'levelLinksPosition' => 'bottom',
              'useSortable' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
              'showSynchronizationLink' => 1,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'richtextConfiguration' => 'default',
          ),
        ),
        'posts' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:sys_category.posts',
          'config' => 
          array (
            'type' => 'group',
            'size' => 5,
            'allowed' => 'pages',
            'foreign_table' => 'pages',
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => 
            array (
              'fieldname' => 'categories',
              'tablenames' => 'pages',
            ),
            'maxitems' => 1000,
          ),
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                'value' => 3,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                'value' => 4,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                'value' => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'number',
            'size' => 8,
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'relationship' => 'oneToOne',
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'content',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
      ),
      'columns' => 
      array (
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                'value' => 'static',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                'value' => 'folder',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                'value' => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'file',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
              'tablenames' => 'sys_file_collection',
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'folder_identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'folder',
            'minitems' => 1,
            'relationship' => 'manyToOne',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND {#sys_file_collection}.{#pid}=###CURRENT_PID### AND {#sys_file_collection}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,files,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
        'static' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,files,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
        'folder' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,folder_identifier, recursive,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
        'category' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    type,title,category,
                --div--;core.form.tabs:language,
                    --palette--;;language,
                --div--;core.form.tabs:access,
                    hidden,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND {#sys_file}.{#uid} = ###REC_FIELD_file###',
            'minitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.width',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.height',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_metadata',
            'size' => 1,
            'relationship' => 'manyToOne',
            'default' => 0,
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'status' => 
        array (
          'exclude' => true,
          'label' => 'filemetadata.db:sys_file_metadata.status',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.status.1',
                'value' => 1,
                'icon' => 'actions-check',
              ),
              1 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.status.2',
                'value' => 2,
                'icon' => 'actions-clock',
              ),
              2 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.status.3',
                'value' => 3,
                'icon' => 'actions-view',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'filemetadata.db:sys_file_metadata.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'placeholder' => 'filemetadata.db:placeholder.keywords',
          ),
        ),
        'caption' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'filemetadata.db:sys_file_metadata.caption',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'creator_tool' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.creator_tool',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'download_name' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.download_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'creator' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.creator',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'publisher' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.publisher',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 120,
          ),
        ),
        'source' => 
        array (
          'exclude' => true,
          'label' => 'filemetadata.db:sys_file_metadata.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 255,
          ),
        ),
        'copyright' => 
        array (
          'exclude' => true,
          'label' => 'filemetadata.db:sys_file_metadata.copyright',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'location_country' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'filemetadata.db:sys_file_metadata.location_country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 45,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_region' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'filemetadata.db:sys_file_metadata.location_region',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 45,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_city' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'filemetadata.db:sys_file_metadata.location_city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 45,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'latitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.latitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'longitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.longitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'ranking' => 
        array (
          'exclude' => true,
          'label' => 'filemetadata.db:sys_file_metadata.ranking',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'minitems' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => 0,
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 1,
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 2,
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 3,
                'value' => 3,
              ),
              4 => 
              array (
                'label' => 4,
                'value' => 4,
              ),
              5 => 
              array (
                'label' => 5,
                'value' => 5,
              ),
            ),
          ),
        ),
        'content_creation_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.content_creation_date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 1780103151,
          ),
        ),
        'content_modification_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.content_modification_date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 1780103151,
          ),
        ),
        'note' => 
        array (
          'exclude' => true,
          'label' => 'filemetadata.db:sys_file_metadata.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
        'unit' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.unit',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.px',
                'value' => 'px',
              ),
              2 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.cm',
                'value' => 'cm',
              ),
              3 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.in',
                'value' => 'in',
              ),
              4 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.mm',
                'value' => 'mm',
              ),
              5 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.m',
                'value' => 'm',
              ),
              6 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.p',
                'value' => 'p',
              ),
              7 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.unit.pt',
                'value' => 'pt',
              ),
            ),
            'default' => '',
            'readOnly' => true,
            'dbFieldLength' => 3,
          ),
        ),
        'duration' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.duration',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
          ),
        ),
        'color_space' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.color_space',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.RGB',
                'value' => 'RGB',
              ),
              2 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.sRGB',
                'value' => 'sRGB',
              ),
              3 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.CMYK',
                'value' => 'CMYK',
              ),
              4 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.CMY',
                'value' => 'CMY',
              ),
              5 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.YUV',
                'value' => 'YUV',
              ),
              6 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.grey',
                'value' => 'grey',
              ),
              7 => 
              array (
                'label' => 'filemetadata.db:sys_file_metadata.color_space.indx',
                'value' => 'indx',
              ),
            ),
            'default' => '',
            'readOnly' => true,
            'dbFieldLength' => 4,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.pages',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'readOnly' => true,
          ),
        ),
        'language' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'filemetadata.db:sys_file_metadata.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'max' => 45,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;core.form.tabs:metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    status,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:extended,
            ',
        ),
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;core.form.tabs:metadata,
                    creator, creator_tool, publisher, source, copyright,
                    --palette--;;40,
                    status,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:extended,
            ',
        ),
        2 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;core.form.tabs:metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    --palette--;;30,
                    --palette--;;60,
                    status,
                --div--;core.form.tabs:camera,
                    color_space,
                    --palette--;;50,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:extended,
            ',
        ),
        3 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;core.form.tabs:metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;60,
                    status,
                --div--;core.form.tabs:audio,
                    duration,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:extended,
            ',
        ),
        4 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;core.form.tabs:metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;60,
                    status,
                --div--;core.form.tabs:video,
                    duration,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:extended,
            ',
        ),
        5 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;core.form.tabs:metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    pages,
                    --palette--;;50,
                    --palette--;;60,
                    status,
                --div--;core.form.tabs:categories,
                    categories,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        20 => 
        array (
          'label' => 'core.form.palettes:accessibility',
          'showitem' => 'alternative, --linebreak--, caption, --linebreak--, download_name',
        ),
        25 => 
        array (
          'label' => 'core.form.palettes:accessibility',
          'showitem' => 'caption, --linebreak--, download_name',
        ),
        30 => 
        array (
          'label' => 'core.form.palettes:gps',
          'showitem' => 'latitude, longitude',
        ),
        40 => 
        array (
          'label' => 'core.form.palettes:geolocation',
          'showitem' => 'location_country, location_region, location_city',
        ),
        50 => 
        array (
          'label' => 'core.form.palettes:metrics',
          'showitem' => 'width, height, unit',
        ),
        60 => 
        array (
          'label' => 'core.form.palettes:contentdate',
          'showitem' => 'content_creation_date, content_modification_date',
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'size' => 1,
            'relationship' => 'manyToOne',
            'allowed' => 'sys_file',
            'hideSuggest' => true,
            'maxitems' => 1,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 64,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'max' => 64,
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 20,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_reference',
            'size' => 1,
            'relationship' => 'manyToOne',
            'default' => 0,
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '
				--palette--;;imageoverlayPalette,
				--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				alternative,description,--linebreak--,
				link,title,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'groupName' => 'system',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'type' => 'driver',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                'label' => 'Local filesystem',
                'value' => 'Local',
              ),
            ),
            'default' => 'Local',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => '<T3DataStructure><ROOT></ROOT></T3DataStructure>',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                        name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
                --div--;core.form.tabs:accesscapabilities,
                        --palette--;;capabilities,
                --div--;core.form.tabs:access,
                        is_online,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
        'Local' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                        name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
                --div--;core.form.tabs:accesscapabilities,
                        --palette--;;capabilities,
                --div--;core.form.tabs:access,
                        is_online,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
          'columnsOverrides' => 
          array (
            'configuration' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'label' => 'core.form.tabs:capabilities',
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.identifier',
          'config' => 
          array (
            'type' => 'folder',
            'required' => true,
            'relationship' => 'manyToOne',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                title, identifier, read_only,
            --div--;core.form.tabs:access,
                hidden,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'sys_news',
            'softref' => 'rtehtmlarea_images',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    title,content,crdate,
                --div--;core.form.tabs:access,
                    hidden, --palette--;;timeRestriction,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_scheduler_task' => 
    array (
      'ctrl' => 
      array (
        'label' => 'tasktype',
        'label_alt' => 'description',
        'label_alt_force' => true,
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'nextexecution',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Linkvalidator\\Task\\ValidatorTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Recycler\\Task\\CleanerTask' => 'mimetypes-x-tx_scheduler_task_group',
          'TYPO3\\CMS\\Extensionmanager\\Task\\UpdateExtensionListTask' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'type' => 'tasktype',
        'hideTable' => true,
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
        ),
      ),
      'columns' => 
      array (
        'tasktype' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.tasktype',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'taskTypeInfo',
            'itemsProcFunc' => 'TYPO3\\CMS\\Scheduler\\Service\\TaskService->getTaskTypesForTcaItems',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'messenger:consume',
                'description' => 'Consume messages',
                'value' => 'messenger:consume',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'messenger',
              ),
              1 => 
              array (
                'label' => 'fluid:analyze',
                'description' => 'Analyzes Fluid templates for syntax errors and deprecated functionality.',
                'value' => 'fluid:analyze',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'fluid',
              ),
              2 => 
              array (
                'label' => 'fluid:namespaces',
                'description' => 'Lists all registered global Fluid ViewHelper namespaces.',
                'value' => 'fluid:namespaces',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'fluid',
              ),
              3 => 
              array (
                'label' => 'fluid:schema:generate',
                'description' => 'Generate XSD schema files for all available ViewHelpers in var/transient/.',
                'value' => 'fluid:schema:generate',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'fluid',
              ),
              4 => 
              array (
                'label' => 'fluid:cache:warmup',
                'description' => 'Performs a cache warmup for detected Fluid templates.',
                'value' => 'fluid:cache:warmup',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'fluid',
              ),
              5 => 
              array (
                'label' => 'backend:lock',
                'description' => 'Lock the TYPO3 Backend',
                'value' => 'backend:lock',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'backend',
              ),
              6 => 
              array (
                'label' => 'referenceindex:update',
                'description' => 'Update the reference index of TYPO3',
                'value' => 'referenceindex:update',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'referenceindex',
              ),
              7 => 
              array (
                'label' => 'backend:unlock',
                'description' => 'Unlock the TYPO3 Backend',
                'value' => 'backend:unlock',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'backend',
              ),
              8 => 
              array (
                'label' => 'impexp:export',
                'description' => 'Exports a T3D / XML file with content of a page tree',
                'value' => 'impexp:export',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'impexp',
              ),
              9 => 
              array (
                'label' => 'impexp:import',
                'description' => 'Imports a T3D / XML file with content into a page tree',
                'value' => 'impexp:import',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'impexp',
              ),
              10 => 
              array (
                'label' => 'cleanup:flexforms',
                'description' => 'Clean up database FlexForm fields that do not match the chosen data structure.',
                'value' => 'cleanup:flexforms',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              11 => 
              array (
                'label' => 'cleanup:localprocessedfiles',
                'description' => 'Delete processed files and their database records.',
                'value' => 'cleanup:localprocessedfiles',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              12 => 
              array (
                'label' => 'configuration:show',
                'description' => 'Show configuration value',
                'value' => 'configuration:show',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'configuration',
              ),
              13 => 
              array (
                'label' => 'cleanup:deletedrecords',
                'description' => 'Permanently deletes all records marked as "deleted" in the database.',
                'value' => 'cleanup:deletedrecords',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              14 => 
              array (
                'label' => 'cleanup:missingrelations',
                'description' => 'Find all record references pointing to a non-existing record',
                'value' => 'cleanup:missingrelations',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              15 => 
              array (
                'label' => 'cleanup:orphanrecords',
                'description' => 'Find and delete records that have lost their connection with the page tree',
                'value' => 'cleanup:orphanrecords',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              16 => 
              array (
                'label' => 'form:cleanup:uploads',
                'description' => 'Remove old form file upload folders based on retention period.',
                'value' => 'form:cleanup:uploads',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'form',
              ),
              17 => 
              array (
                'label' => 'form:definition:transfer',
                'description' => 'Transfer form definitions between storage backends',
                'value' => 'form:definition:transfer',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'form',
              ),
              18 => 
              array (
                'label' => 'redirects:checkintegrity',
                'description' => 'Check integrity of redirects',
                'value' => 'redirects:checkintegrity',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'redirects',
              ),
              19 => 
              array (
                'label' => 'redirects:cleanup',
                'description' => 'Cleanup old redirects periodically for given constraints like days, hit count or domains.',
                'value' => 'redirects:cleanup',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'redirects',
              ),
              20 => 
              array (
                'label' => 'workspace:autopublish',
                'description' => 'Publish a workspace with a publication date.',
                'value' => 'workspace:autopublish',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'workspace',
              ),
              21 => 
              array (
                'label' => 'cleanup:previewlinks',
                'description' => 'Find all versioned records and possibly cleans up invalid records in the database.',
                'value' => 'cleanup:previewlinks',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              22 => 
              array (
                'label' => 'cleanup:versions',
                'description' => 'Find all versioned records and possibly cleans up invalid records in the database.',
                'value' => 'cleanup:versions',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cleanup',
              ),
              23 => 
              array (
                'label' => 'backend:createadmin',
                'description' => 'Create admin backend user',
                'value' => 'backend:createadmin',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'backend',
              ),
              24 => 
              array (
                'label' => 'backend:lockforeditors',
                'description' => 'Lock backend for editors',
                'value' => 'backend:lockforeditors',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'backend',
              ),
              25 => 
              array (
                'label' => 'backend:unlockforeditors',
                'description' => 'Unlock backend for editors',
                'value' => 'backend:unlockforeditors',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'backend',
              ),
              26 => 
              array (
                'label' => 'cache:listgroups',
                'description' => 'List cache groups',
                'value' => 'cache:listgroups',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'cache',
              ),
              27 => 
              array (
                'label' => 'configuration:showactive',
                'description' => 'Show active configuration value',
                'value' => 'configuration:showactive',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'configuration',
              ),
              28 => 
              array (
                'label' => 'frontend:request',
                'description' => 'Submit frontend request',
                'value' => 'frontend:request',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'frontend',
              ),
              29 => 
              array (
                'label' => 'language:update',
                'description' => 'Update the language files of all activated extensions',
                'value' => 'language:update',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'group' => 'language',
              ),
              30 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
              ),
              31 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
              ),
              32 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
              ),
              33 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.description',
              ),
              34 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
              ),
              35 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
              ),
              36 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
                'value' => 'TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'scheduler',
                'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
              ),
              37 => 
              array (
                'label' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
                'value' => 'TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'reports',
                'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
              ),
              38 => 
              array (
                'label' => 'linkvalidator.db:tasks.validate.name',
                'value' => 'TYPO3\\CMS\\Linkvalidator\\Task\\ValidatorTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'linkvalidator',
                'description' => 'linkvalidator.db:tasks.validate.description',
              ),
              39 => 
              array (
                'label' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
                'value' => 'TYPO3\\CMS\\Recycler\\Task\\CleanerTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'recycler',
                'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
              ),
              40 => 
              array (
                'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
                'value' => 'TYPO3\\CMS\\Extensionmanager\\Task\\UpdateExtensionListTask',
                'icon' => 'mimetypes-x-tx_scheduler_task_group',
                'iconOverlay' => NULL,
                'group' => 'extensionmanager',
                'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
              ),
            ),
            'default' => '',
            'required' => true,
            'nullable' => true,
          ),
        ),
        'task_group' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.task_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_scheduler_task_group',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'size' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'priority' => 
        array (
          'label' => 'scheduler.tca:tx_scheduler_task.priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'scheduler.tca:tx_scheduler_task.priority.high',
                'value' => 150,
              ),
              1 => 
              array (
                'label' => 'scheduler.tca:tx_scheduler_task.priority.regular',
                'value' => 100,
              ),
              2 => 
              array (
                'label' => 'scheduler.tca:tx_scheduler_task.priority.low',
                'value' => 50,
              ),
            ),
            'default' => 100,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'parameters' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.parameters',
          'config' => 
          array (
            'type' => 'json',
            'renderType' => 'schedulerAdditionalFields',
          ),
        ),
        'execution_details' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.execution_details',
          'config' => 
          array (
            'type' => 'json',
            'renderType' => 'schedulerTimingOptions',
            'overrideFieldTca' => 
            array (
              'frequency' => 
              array (
                'config' => 
                array (
                  'valuePicker' => 
                  array (
                    'items' => 
                    array (
                      0 => 
                      array (
                        'value' => '0 9,15 * * 1-5',
                        'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example1',
                      ),
                      1 => 
                      array (
                        'value' => '0 */2 * * *',
                        'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example2',
                      ),
                      2 => 
                      array (
                        'value' => '*/20 * * * *',
                        'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example3',
                      ),
                      3 => 
                      array (
                        'value' => '0 7 * * 2',
                        'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example4',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'nextexecution' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.nextexecution',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
        ),
        'lastexecution_time' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.lastexecution_time',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
        ),
        'lastexecution_failure' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.lastexecution_failure',
          'config' => 
          array (
            'type' => 'text',
            'readOnly' => true,
          ),
        ),
        'lastexecution_context' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task.lastexecution_context',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'value' => 'CLI',
                'label' => 'CLI',
              ),
              1 => 
              array (
                'value' => 'BE',
                'label' => 'BE',
              ),
              2 => 
              array (
                'value' => '',
                'label' => '',
              ),
            ),
            'readOnly' => true,
            'dbFieldLength' => 3,
            'default' => '',
          ),
        ),
        'serialized_executions' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'number_of_days' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tx_scheduler_task.number_of_days',
          'config' => 
          array (
            'type' => 'number',
            'default' => 0,
          ),
        ),
        'selected_tables' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tx_scheduler_task.selected_tables',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'dbFieldLength' => 4000,
            'minitems' => 1,
            'maxitems' => 100,
            'items' => 
            array (
            ),
          ),
        ),
        'file_storage' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tx_scheduler_task.file_storage',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'relationship' => 'manyToOne',
          ),
        ),
        'disable' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'cache_backends' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.cachingFrameworkGarbageCollection.selectBackends',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'itemsProcFunc' => 'TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask->getRegisteredBackends',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 100,
            'default' => '',
          ),
        ),
        'max_file_count' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.fileStorageExtraction.fileCount',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1,
              'upper' => 9999,
            ),
          ),
        ),
        'registered_extractors' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'registeredExtractors',
          ),
        ),
        'ip_mask' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.mask',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 2,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.mask.1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.mask.2',
                'value' => 2,
              ),
            ),
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'all_tables' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.tableGarbageCollection.allTables',
          'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.tableGarbageCollection.allTables.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'tx_reports_notification_email' => 
        array (
          'label' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskField_notificationEmails',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 3,
            'cols' => 50,
            'required' => true,
            'placeholder' => 'admin@example.com',
          ),
        ),
        'tx_reports_notification_all' => 
        array (
          'label' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskField_notificationAll',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'tx_linkvalidator_configuration' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.conf',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'tx_linkvalidator_depth' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.depth',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'value' => '0',
                'label' => 'core.db.general:depth_0',
              ),
              1 => 
              array (
                'value' => '1',
                'label' => 'core.db.general:depth_1',
              ),
              2 => 
              array (
                'value' => '2',
                'label' => 'core.db.general:depth_2',
              ),
              3 => 
              array (
                'value' => '3',
                'label' => 'core.db.general:depth_3',
              ),
              4 => 
              array (
                'value' => '4',
                'label' => 'core.db.general:depth_4',
              ),
              5 => 
              array (
                'value' => '999',
                'label' => 'core.db.general:depth_infi',
              ),
            ),
          ),
        ),
        'tx_linkvalidator_page' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.page',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
        'tx_linkvalidator_languages' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.languages',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tx_linkvalidator_email' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.email',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'tx_linkvalidator_email_on_broken_link_only' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.emailOnBrokenLinkOnly',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'tx_linkvalidator_email_template_name' => 
        array (
          'label' => 'linkvalidator.db:tasks.validate.emailTemplateName',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    tasktype,
                    task_group,
                    description,
                    parameters,
                --div--;core.form.tabs:timing,
                    --palette--;;execution,
                --div--;core.form.tabs:access,
                    disable,
                --div--;core.form.tabs:extended,
            ',
        ),
        'messenger:consume' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'fluid:analyze' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'fluid:namespaces' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'fluid:schema:generate' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'fluid:cache:warmup' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'backend:lock' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'referenceindex:update' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'backend:unlock' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'impexp:export' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'impexp:import' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:flexforms' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:localprocessedfiles' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'configuration:show' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:deletedrecords' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:missingrelations' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:orphanrecords' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'form:cleanup:uploads' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'form:definition:transfer' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'redirects:checkintegrity' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'redirects:cleanup' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'workspace:autopublish' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:previewlinks' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cleanup:versions' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'backend:createadmin' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'backend:lockforeditors' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'backend:unlockforeditors' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'cache:listgroups' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'configuration:showactive' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'frontend:request' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'language:update' => 
        array (
          'showitem' => '
                    --div--;core.form.tabs:general,
                        tasktype,
                        task_group,
                        description,
                        parameters,
                    --div--;core.form.tabs:timing,
                        --palette--;;execution,
                    --div--;core.form.tabs:access,
                        disable,
                    --div--;core.form.tabs:extended,
                ',
          'columnsOverrides' => 
          array (
            'parameters' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration',
              'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.schedulableCommand.command_configuration.description',
              'config' => 
              array (
                'renderType' => 'schedulableCommandConfiguration',
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'className' => 'TYPO3\\CMS\\Scheduler\\Task\\ExecuteSchedulableCommandTask',
          ),
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\CachingFrameworkGarbageCollectionTask' => 
        array (
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            cache_backends;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.cachingFrameworkGarbageCollection.selectBackends,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\FileStorageExtractionTask' => 
        array (
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            file_storage;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.fileStorageIndexing.storage,
            max_file_count,
            registered_extractors,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\FileStorageIndexingTask' => 
        array (
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            file_storage;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.fileStorageIndexing.storage,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_tables' => 
            array (
              'displayCond' => 'FIELD:all_tables:=:0',
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.table',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                'itemsProcFunc' => 'TYPO3\\CMS\\Scheduler\\Task\\IpAnonymizationTask->getAnonymizableTables',
              ),
            ),
            'number_of_days' => 
            array (
              'displayCond' => 'FIELD:all_tables:=:0',
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.numberOfDays',
              'config' => 
              array (
                'type' => 'number',
                'default' => 0,
                'range' => 
                array (
                  'lower' => 0,
                ),
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'tables' => 
            array (
              'sys_log' => 
              array (
                'dateField' => 'tstamp',
                'ipField' => 'IP',
              ),
            ),
          ),
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            ip_mask,
            selected_tables;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.table,
            number_of_days;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.ipAnonymization.numberOfDays,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_tables' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.optimizeDatabaseTables.selectTables',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 10,
                'minitems' => 1,
                'maxitems' => 100,
                'itemsProcFunc' => 'TYPO3\\CMS\\Scheduler\\Task\\OptimizeDatabaseTableTask->getOptimizableTables',
              ),
            ),
          ),
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            selected_tables;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.optimizeDatabaseTables.selectTables,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\RecyclerGarbageCollectionTask' => 
        array (
          'columnsOverrides' => 
          array (
            'number_of_days' => 
            array (
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.recyclerGarbageCollection.numberOfDays',
              'config' => 
              array (
                'type' => 'number',
                'default' => 30,
                'range' => 
                array (
                  'lower' => 0,
                ),
              ),
            ),
          ),
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            number_of_days;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.recyclerGarbageCollection.numberOfDays,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_tables' => 
            array (
              'displayCond' => 'FIELD:all_tables:=:0',
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.tableGarbageCollection.table',
              'config' => 
              array (
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'minitems' => 1,
                'maxitems' => 1,
                'itemsProcFunc' => 'TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask->getCleanableTables',
              ),
            ),
            'number_of_days' => 
            array (
              'displayCond' => 'FIELD:all_tables:=:0',
              'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.tableGarbageCollection.numberOfDays',
              'config' => 
              array (
                'type' => 'number',
                'default' => 0,
                'range' => 
                array (
                  'lower' => 0,
                ),
                'fieldInformation' => 
                array (
                  'expirePeriodInformation' => 
                  array (
                    'renderType' => 'expirePeriodInformation',
                    'options' => 
                    array (
                      'refField' => 'selected_tables',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'taskOptions' => 
          array (
            'tables' => 
            array (
              'sys_log' => 
              array (
                'dateField' => 'tstamp',
                'expirePeriod' => 180,
              ),
              'sys_http_report' => 
              array (
                'dateField' => 'changed',
                'expirePeriod' => 30,
              ),
              'sys_history' => 
              array (
                'dateField' => 'tstamp',
                'expirePeriod' => 30,
              ),
            ),
          ),
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            all_tables,
            selected_tables;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.tableGarbageCollection.table,
            number_of_days;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:label.tableGarbageCollection.numberOfDays,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTask' => 
        array (
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            tx_reports_notification_email,
            tx_reports_notification_all,
        --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Linkvalidator\\Task\\ValidatorTask' => 
        array (
          'showitem' => '
        --div--;core.form.tabs:general,
            tasktype,
            task_group,
            description,
            tx_linkvalidator_page,
            tx_linkvalidator_depth,
            tx_linkvalidator_languages,
            tx_linkvalidator_configuration,
            tx_linkvalidator_email,
            tx_linkvalidator_email_on_broken_link_only,
            tx_linkvalidator_email_template_name,
        --div--;scheduler.messages:scheduler.form.palettes.timing,
            --palette--;;execution,
        --div--;core.form.tabs:access,
            disable,
        --div--;core.form.tabs:extended,',
        ),
        'TYPO3\\CMS\\Recycler\\Task\\CleanerTask' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_tables' => 
            array (
              'label' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTCA',
              'config' => 
              array (
                'size' => 10,
                'maxitems' => 100,
                'itemsProcFunc' => 'TYPO3\\CMS\\Recycler\\Task\\CleanerTask->getAllTcaTables',
              ),
            ),
          ),
          'showitem' => '
            --div--;core.form.tabs:general,
                tasktype,
                task_group,
                description,
                selected_tables;LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTCA,
                number_of_days;LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskPeriod,
            --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
                --palette--;;execution,
            --div--;core.form.tabs:access,
                disable,
            --div--;core.form.tabs:extended,
,',
        ),
        'TYPO3\\CMS\\Extensionmanager\\Task\\UpdateExtensionListTask' => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                tasktype,
                task_group,
                description,
            --div--;LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:scheduler.form.palettes.timing,
                --palette--;;execution,
            --div--;core.form.tabs:access,
                disable,
            --div--;core.form.tabs:extended,
,',
        ),
      ),
      'palettes' => 
      array (
        'execution' => 
        array (
          'showitem' => '
                execution_details,
                --linebreak--,
                nextexecution,
                priority,
                --linebreak--,
                lastexecution_context,
                lastexecution_time,
                --linebreak--,
                lastexecution_failure,
            ',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'required' => true,
            'eval' => 'unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'color' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color',
          'config' => 
          array (
            'type' => 'color',
            'size' => 10,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.typo3Orange',
                  'value' => '#FF8700',
                ),
                1 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.white',
                  'value' => '#ffffff',
                ),
                2 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.gray',
                  'value' => '#808080',
                ),
                3 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.black',
                  'value' => '#000000',
                ),
                4 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.blue',
                  'value' => '#2671d9',
                ),
                5 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.purple',
                  'value' => '#5e4db2',
                ),
                6 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.teal',
                  'value' => '#2da8d2',
                ),
                7 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.green',
                  'value' => '#3cc38c',
                ),
                8 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.magenta',
                  'value' => '#c6398f',
                ),
                9 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.yellow',
                  'value' => '#ffbf00',
                ),
                10 => 
                array (
                  'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.color.red',
                  'value' => '#d13a2e',
                ),
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general, groupName, color,
                --div--;core.form.tabs:access, hidden,
                --div--;core.form.tabs:notes, description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'system',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'relationship' => 'manyToOne',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
              'tablenames' => 'backend_layout',
            ),
            'maxitems' => 1,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    title,icon,config,
                --div--;core.form.tabs:access,
                    hidden,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'groupName' => 'frontendaccess',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT({#fe_groups}.{#uid} = ###THIS_UID###)',
            'size' => 6,
            'autoSizeMax' => 10,
            'maxitems' => 20,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.accounts:group.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                title,subgroup, felogin_redirectPid,
            --div--;core.form.tabs:access,
                hidden,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'groupName' => 'frontendaccess',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,disable,starttime,endtime',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'required' => true,
            'eval' => 'nospace,trim,lower,uniqueInPid',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
            'fieldControl' => 
            array (
              'passwordGenerator' => 
              array (
                'renderType' => 'passwordGenerator',
                'options' => 
                array (
                  'title' => 'core.core:labels.generatePassword',
                  'allowEdit' => true,
                  'passwordPolicy' => 'default',
                ),
              ),
            ),
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'size' => 6,
            'minitems' => 1,
            'dbFieldLength' => 512,
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
            'default' => '',
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
            'softref' => 'email[subst]',
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'maxitems' => 6,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'fe_users',
            ),
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'disable' => 
        array (
          'label' => 'core.db.accounts:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.accounts:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                'value' => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    username,password,usergroup, felogin_redirectPid,lastlogin,
                --div--;core.form.tabs:personaldata,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;core.form.tabs:access,
                    disable,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended, tx_extbase_type',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;core.form.tabs:general,
                    username,password,usergroup, felogin_redirectPid,lastlogin,
                --div--;core.form.tabs:personaldata,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;core.form.tabs:access,
                    disable,--palette--;;timeRestriction,
                --div--;core.form.tabs:notes,
                    description,
                --div--;core.form.tabs:extended, tx_extbase_type',
          'creationOptions' => 
          array (
            'enableDirectRecordTypeCreation' => false,
          ),
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'groupName' => 'system',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.rootDescription',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clearDescription',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Constants',
              ),
              1 => 
              array (
                'label' => 'Setup',
              ),
            ),
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'cols' => 48,
            'rows' => 15,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_fileDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Form (form)',
                'value' => 'EXT:form/Configuration/TypoScript/',
              ),
              1 => 
              array (
                'label' => 'XML Sitemap (seo)',
                'value' => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
              2 => 
              array (
                'label' => 'efrank14 (efrank14)',
                'value' => 'EXT:efrank14/Configuration/TypoScript',
              ),
              3 => 
              array (
                'label' => 'Fluid-FPDF (only required when using the PDF content element!) (fluid_fpdf)',
                'value' => 'EXT:fluid_fpdf/Configuration/TypoScript',
              ),
              4 => 
              array (
                'label' => 'Parsedown - Default stylesheets (parsedown_extra)',
                'value' => 'EXT:parsedown_extra/Configuration/TypoScript/Stylesheet',
              ),
              5 => 
              array (
                'label' => 'Parsedown - Colorbox (parsedown_extra)',
                'value' => 'EXT:parsedown_extra/Configuration/TypoScript/Colorbox',
              ),
              6 => 
              array (
                'label' => 'Parsedown - PrismJs Syntax-Highlighting (parsedown_extra)',
                'value' => 'EXT:parsedown_extra/Configuration/TypoScript/PrismJs',
              ),
              7 => 
              array (
                'label' => 'Parsedown - MermaidJs Diagrams & Charts (parsedown_extra)',
                'value' => 'EXT:parsedown_extra/Configuration/TypoScript/MermaidJs',
              ),
              8 => 
              array (
                'label' => 'Parsedown - jQuery (parsedown_extra)',
                'value' => 'EXT:parsedown_extra/Configuration/TypoScript/jQuery',
              ),
              9 => 
              array (
                'label' => 'CKEditor Image Support (rte_ckeditor_image)',
                'value' => 'EXT:rte_ckeditor_image/Configuration/TypoScript/ImageRendering',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOnDescription',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOnDescription',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'typoscript',
            'rows' => 15,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_modeDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                title, constants, config,
            --div--;core.form.tabs:advancedoptions,
                clear, root, include_static_file, basedOn, includeStaticAfterBasedOn, static_file_mode,
            --div--;core.form.tabs:access,
                hidden,--palette--;;timeRestriction,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'groupName' => 'content',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'previewRenderer' => 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'default' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'shortcut' => 'mimetypes-x-content-link',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'form_formframework' => 'content-form',
          'felogin_login' => 'mimetypes-x-content-login',
          'accordion' => 'content-bootstrappackage-accordion',
          'audio' => 'content-audio',
          'card_group' => 'content-bootstrappackage-card-group',
          'carousel' => 'content-bootstrappackage-carousel',
          'carousel_small' => 'content-bootstrappackage-carousel',
          'carousel_fullscreen' => 'content-bootstrappackage-carousel',
          'csv' => 'content-bootstrappackage-csv',
          'external_media' => 'content-bootstrappackage-externalmedia',
          'icon_group' => 'content-bootstrappackage-icon-group',
          'listgroup' => 'content-bootstrappackage-listgroup',
          'media' => 'mimetypes-x-content-multimedia',
          'menu_card_list' => 'content-bootstrappackage-menu-card',
          'menu_card_dir' => 'content-bootstrappackage-menu-card',
          'menu_thumbnail_list' => 'content-menu-thumbnail',
          'menu_thumbnail_dir' => 'content-menu-thumbnail',
          'panel' => 'content-panel',
          'quote' => 'content-quote',
          'social_links' => 'content-bootstrappackage-social-links',
          'tab' => 'content-bootstrappackage-tab',
          'textcolumn' => 'content-text-columns',
          'texticon' => 'content-bootstrappackage-texticon',
          'textteaser' => 'content-text-teaser',
          'timeline' => 'content-bootstrappackage-timeline',
          'gallery' => 'content-bootstrappackage-gallery',
          'blog_posts' => 'plugin-blog-posts',
          'blog_latestposts' => 'plugin-blog-posts',
          'blog_category' => 'plugin-blog-category',
          'blog_authorposts' => 'plugin-blog-authorposts',
          'blog_tag' => 'plugin-blog-tag',
          'blog_archive' => 'plugin-blog-archive',
          'blog_sidebar' => 'plugin-blog-sidebar',
          'blog_commentform' => 'plugin-blog-sidebar',
          'blog_comments' => 'plugin-blog-comments',
          'blog_authors' => 'plugin-blog-authors',
          'blog_demandedposts' => 'plugin-blog-demandedposts',
          'blog_relatedposts' => 'plugin-blog-relatedposts',
          'blog_header' => 'plugin-blog-header',
          'blog_footer' => 'plugin-blog-footer',
          'fluidfpdf_pdf' => 'content-plugin-fluidfpdf-pdf',
          'parsedownextra_parsedown' => 'content-plugin',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'frontend.db.tt_content:type',
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.header',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.header.description',
                'value' => 'header',
                'icon' => 'content-header',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.text',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.text.description',
                'value' => 'text',
                'icon' => 'content-text',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textpic',
                'value' => 'textpic',
                'icon' => 'mimetypes-x-content-text-picture',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textpic.description',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.image',
                'value' => 'image',
                'icon' => 'mimetypes-x-content-image',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.image.description',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                'value' => 'textmedia',
                'icon' => 'mimetypes-x-content-text-media',
                'iconOverlay' => NULL,
                'group' => 'default',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia.description',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.bullets',
                'value' => 'bullets',
                'icon' => 'mimetypes-x-content-list-bullets',
                'iconOverlay' => NULL,
                'group' => 'lists',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.bullets.description',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.table',
                'value' => 'table',
                'icon' => 'mimetypes-x-content-table',
                'iconOverlay' => NULL,
                'group' => 'lists',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.table.description',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.uploads',
                'value' => 'uploads',
                'icon' => 'mimetypes-x-content-list-files',
                'iconOverlay' => NULL,
                'group' => 'lists',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.uploads.description',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                'value' => 'menu_abstract',
                'icon' => 'content-menu-abstract',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract.description',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                'value' => 'menu_categorized_content',
                'icon' => 'content-menu-categorized',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content.description',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                'value' => 'menu_categorized_pages',
                'icon' => 'content-menu-categorized',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages.description',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                'value' => 'menu_pages',
                'icon' => 'content-menu-pages',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages.description',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                'value' => 'menu_subpages',
                'icon' => 'content-menu-pages',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages.description',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                'value' => 'menu_recently_updated',
                'icon' => 'content-menu-recently-updated',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated.description',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                'value' => 'menu_related_pages',
                'icon' => 'content-menu-related',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages.description',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                'value' => 'menu_section',
                'icon' => 'content-menu-section',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section.description',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                'value' => 'menu_section_pages',
                'icon' => 'content-menu-section',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages.description',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                'value' => 'menu_sitemap',
                'icon' => 'content-menu-sitemap',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap.description',
              ),
              18 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                'value' => 'menu_sitemap_pages',
                'icon' => 'content-menu-sitemap-pages',
                'iconOverlay' => NULL,
                'group' => 'menu',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages.description',
              ),
              19 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.shortcut',
                'value' => 'shortcut',
                'icon' => 'mimetypes-x-content-link',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.shortcut.description',
              ),
              20 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div',
                'value' => 'div',
                'icon' => 'mimetypes-x-content-divider',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.description',
              ),
              21 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.html',
                'value' => 'html',
                'icon' => 'mimetypes-x-content-html',
                'iconOverlay' => NULL,
                'group' => 'special',
                'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.html.description',
              ),
              22 => 
              array (
                'label' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_title',
                'value' => 'form_formframework',
                'icon' => 'content-form',
                'iconOverlay' => NULL,
                'group' => 'forms',
                'description' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_description',
              ),
              23 => 
              array (
                'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:tt_content.CType.felogin_login.title',
                'value' => 'felogin_login',
                'icon' => 'mimetypes-x-content-login',
                'iconOverlay' => NULL,
                'group' => 'forms',
                'description' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:tt_content.CType.felogin_login.description',
              ),
              24 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.accordion',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.accordion.description',
                'value' => 'accordion',
                'icon' => 'content-bootstrappackage-accordion',
                'group' => 'bootstrap_package',
              ),
              25 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.audio',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.audio.description',
                'value' => 'audio',
                'icon' => 'content-audio',
                'group' => 'bootstrap_package',
              ),
              26 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group.description',
                'value' => 'card_group',
                'icon' => 'content-bootstrappackage-card-group',
                'group' => 'bootstrap_package',
              ),
              27 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel.description',
                'value' => 'carousel',
                'icon' => 'content-bootstrappackage-carousel',
                'group' => 'bootstrap_package',
              ),
              28 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_small',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_small.description',
                'value' => 'carousel_small',
                'icon' => 'content-bootstrappackage-carousel',
                'group' => 'bootstrap_package',
              ),
              29 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_fullscreen',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_fullscreen.description',
                'value' => 'carousel_fullscreen',
                'icon' => 'content-bootstrappackage-carousel',
                'group' => 'bootstrap_package',
              ),
              30 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.csv',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.csv.description',
                'value' => 'csv',
                'icon' => 'content-bootstrappackage-csv',
                'group' => 'bootstrap_package',
              ),
              31 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.external_media',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.external_media.description',
                'value' => 'external_media',
                'icon' => 'content-bootstrappackage-externalmedia',
                'group' => 'bootstrap_package',
              ),
              32 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.gallery',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.gallery.description',
                'value' => 'gallery',
                'icon' => 'content-bootstrappackage-gallery',
                'group' => 'bootstrap_package',
              ),
              33 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group.description',
                'value' => 'icon_group',
                'icon' => 'content-bootstrappackage-icon-group',
                'group' => 'bootstrap_package',
              ),
              34 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.listgroup',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.listgroup.description',
                'value' => 'listgroup',
                'icon' => 'content-bootstrappackage-listgroup',
                'group' => 'bootstrap_package',
              ),
              35 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.media',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.media.description',
                'value' => 'media',
                'icon' => 'mimetypes-x-content-multimedia',
                'group' => 'bootstrap_package',
              ),
              36 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_list',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_list.description',
                'value' => 'menu_card_list',
                'icon' => 'content-bootstrappackage-menu-card',
                'group' => 'bootstrap_package',
              ),
              37 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_dir',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_dir.description',
                'value' => 'menu_card_dir',
                'icon' => 'content-bootstrappackage-menu-card',
                'group' => 'bootstrap_package',
              ),
              38 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_list',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_list.description',
                'value' => 'menu_thumbnail_list',
                'icon' => 'content-menu-thumbnail',
                'group' => 'bootstrap_package',
              ),
              39 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_dir',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_dir.description',
                'value' => 'menu_thumbnail_dir',
                'icon' => 'content-menu-thumbnail',
                'group' => 'bootstrap_package',
              ),
              40 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.panel',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.panel.description',
                'value' => 'panel',
                'icon' => 'content-panel',
                'group' => 'bootstrap_package',
              ),
              41 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.quote',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.quote.description',
                'value' => 'quote',
                'icon' => 'content-quote',
                'group' => 'bootstrap_package',
              ),
              42 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.social_links',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.social_links.description',
                'value' => 'social_links',
                'icon' => 'content-bootstrappackage-social-links',
                'group' => 'bootstrap_package',
              ),
              43 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.tab',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.tab.description',
                'value' => 'tab',
                'icon' => 'content-bootstrappackage-tab',
                'group' => 'bootstrap_package',
              ),
              44 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textcolumn',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textcolumn.description',
                'value' => 'textcolumn',
                'icon' => 'content-text-columns',
                'group' => 'bootstrap_package',
              ),
              45 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.texticon',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.texticon.description',
                'value' => 'texticon',
                'icon' => 'content-bootstrappackage-texticon',
                'group' => 'bootstrap_package',
              ),
              46 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textteaser',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textteaser.description',
                'value' => 'textteaser',
                'icon' => 'content-text-teaser',
                'group' => 'bootstrap_package',
              ),
              47 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.timeline',
                'description' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.timeline.description',
                'value' => 'timeline',
                'icon' => 'content-bootstrappackage-timeline',
                'group' => 'bootstrap_package',
              ),
              48 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_posts.title',
                'value' => 'blog_posts',
                'icon' => 'plugin-blog-posts',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_posts.description',
              ),
              49 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_latestposts.title',
                'value' => 'blog_latestposts',
                'icon' => 'plugin-blog-posts',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_latestposts.description',
              ),
              50 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_category.title',
                'value' => 'blog_category',
                'icon' => 'plugin-blog-category',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_category.description',
              ),
              51 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_authorposts.title',
                'value' => 'blog_authorposts',
                'icon' => 'plugin-blog-authorposts',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_authorposts.description',
              ),
              52 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_tag.title',
                'value' => 'blog_tag',
                'icon' => 'plugin-blog-tag',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_tag.description',
              ),
              53 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_archive.title',
                'value' => 'blog_archive',
                'icon' => 'plugin-blog-archive',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_archive.description',
              ),
              54 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_sidebar.title',
                'value' => 'blog_sidebar',
                'icon' => 'plugin-blog-sidebar',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_sidebar.description',
              ),
              55 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_commentform.title',
                'value' => 'blog_commentform',
                'icon' => 'plugin-blog-sidebar',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_commentform.description',
              ),
              56 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_comments.title',
                'value' => 'blog_comments',
                'icon' => 'plugin-blog-comments',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_comments.description',
              ),
              57 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_authors.title',
                'value' => 'blog_authors',
                'icon' => 'plugin-blog-authors',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_authors.description',
              ),
              58 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_demandedposts.title',
                'value' => 'blog_demandedposts',
                'icon' => 'plugin-blog-demandedposts',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_demandedposts.description',
              ),
              59 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_relatedposts.title',
                'value' => 'blog_relatedposts',
                'icon' => 'plugin-blog-relatedposts',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_relatedposts.description',
              ),
              60 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_header.title',
                'value' => 'blog_header',
                'icon' => 'plugin-blog-header',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_header.description',
              ),
              61 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_footer.title',
                'value' => 'blog_footer',
                'icon' => 'plugin-blog-footer',
                'iconOverlay' => NULL,
                'group' => 'blog',
                'description' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:plugin.blog_footer.description',
              ),
              62 => 
              array (
                'label' => 'LLL:EXT:fluid_fpdf/Resources/Private/Language/locallang_newcontentelementwizard.xlf:tx_fluidfpdf_newcontentelementwizard_pdf.title',
                'value' => 'fluidfpdf_pdf',
                'icon' => 'content-plugin-fluidfpdf-pdf',
                'iconOverlay' => NULL,
                'group' => 'pdf',
                'description' => 'LLL:EXT:fluid_fpdf/Resources/Private/Language/locallang_newcontentelementwizard.xlf:tx_fluidfpdf_newcontentelementwizard_pdf.description',
              ),
              63 => 
              array (
                'label' => 'special',
                'value' => 'parsedownextra_parsedown',
                'icon' => 'content-plugin',
                'iconOverlay' => NULL,
                'group' => 'plugins',
                'description' => '',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.default',
              'bootstrap_package' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:theme_name',
              'lists' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.lists',
              'menu' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.menu',
              'forms' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.forms',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.special',
              'plugins' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:group.plugins',
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'dbFieldLength' => 255,
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                'value' => 'ruler-before',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                'value' => 'ruler-after',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                'value' => 'indent',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                'value' => 'indent-left',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                'value' => 'indent-right',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                'value' => 'none',
              ),
            ),
            'default' => 'default',
          ),
          'onChange' => 'reload',
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 60,
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 60,
          ),
        ),
        'colPos' => 
        array (
          'label' => 'frontend.db.tt_content:column',
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                'value' => '0',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'frontend.db.tt_content:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:header_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                'value' => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'frontend.db.tt_content:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                'value' => 'center',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                'value' => 'left',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 255,
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:header_link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'frontend.db.tt_content:header_link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'frontend.db.tt_content:bodytext',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 50,
            'rows' => 15,
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:asset_references',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => '3gp,aac,ai,aif,avif,bmp,flac,gif,heic,ico,jpeg,jpg,m4a,m4v,mov,mp3,mp4,ogg,opus,pdf,png,psd,svg,vimeo,wav,webm,webp,youtube',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:asset_references.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imagewidth',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 1,
            ),
            'nullable' => true,
            'default' => NULL,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imageheight',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 1,
            ),
            'nullable' => true,
            'default' => NULL,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imageorientation',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                'value' => 0,
                'icon' => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                'value' => 1,
                'icon' => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                'value' => 2,
                'icon' => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                'value' => 8,
                'icon' => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                'value' => 9,
                'icon' => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                'value' => 10,
                'icon' => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                'value' => 17,
                'icon' => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                'value' => 18,
                'icon' => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                'value' => 25,
                'icon' => 'content-beside-text-img-right',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                'value' => 26,
                'icon' => 'content-beside-text-img-left',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.125',
                'value' => '125',
                'icon' => 'content-bootstrappackage-beside-text-img-centered-right',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.126',
                'value' => '126',
                'icon' => 'content-bootstrappackage-beside-text-img-centered-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
              6 => 
              array (
                'label' => '7',
                'value' => 7,
              ),
              7 => 
              array (
                'label' => '8',
                'value' => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                'value' => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:section_index',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:link_to_top',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => '
                    <T3DataStructure>
                      <ROOT>
                        <type>array</type>
                        <el>
                            <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                          <xmlTitle>
                            <label>The Title:</label>
                            <config>
                                <type>input</type>
                                <size>48</size>
                            </config>
                          </xmlTitle>
                        </el>
                      </ROOT>
                    </T3DataStructure>
                ',
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableCategoryFields',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'core.db.general:fe_group.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'core.db.general:fe_group.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'core.db.general:fe_group.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'core.db.general:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND {#tt_content}.{#pid}=###CURRENT_PID### AND {#tt_content}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => '4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => '5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => '6',
                'value' => '6',
              ),
              7 => 
              array (
                'label' => '7',
                'value' => '7',
              ),
              8 => 
              array (
                'label' => '8',
                'value' => '8',
              ),
              9 => 
              array (
                'label' => '9',
                'value' => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class.default',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class.striped',
                'value' => 'striped',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_class.bordered',
                'value' => 'bordered',
              ),
            ),
            'default' => '',
            'dbFieldLength' => 60,
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.124',
                'value' => 124,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.59',
                'value' => 59,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.44',
                'value' => 44,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.58',
                'value' => 58,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_delimiter.9',
                'value' => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure.39',
                'value' => 39,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_enclosure.34',
                'value' => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_header_position.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'size' => 5,
            'fieldControl' => 
            array (
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'frontend.db.tt_content:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                'value' => 'extension',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                'value' => 'name',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                'value' => 'type',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                'value' => 'size',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                'value' => 'creation_date',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                'value' => 'modification_date',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.title',
                'value' => 'title',
              ),
            ),
            'dbFieldLength' => 64,
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                'value' => 'asc',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                'value' => 'desc',
              ),
            ),
            'dbFieldLength' => 4,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'max' => 30,
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  'value' => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:uploads_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_yoastseo_linking_suggestions' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:tx_yoastseo_linking_suggestions',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'internalLinkingSuggestion',
          ),
        ),
        'tx_bootstrappackage_accordion_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'tx_bootstrappackage_card_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'external_media_title' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'external_media_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'max' => 1024,
          ),
        ),
        'external_media_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '16:9',
                'value' => '16by9',
              ),
              1 => 
              array (
                'label' => '4:3',
                'value' => '4by3',
              ),
            ),
          ),
        ),
        'tx_bootstrappackage_icon_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'panel_class' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.panel_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.success',
                'value' => 'success',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.info',
                'value' => 'info',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.warning',
                'value' => 'warning',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.danger',
                'value' => 'danger',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.lighter',
                'value' => 'lighter',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.light',
                'value' => 'light',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.dark',
                'value' => 'dark',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.darker',
                'value' => 'darker',
              ),
            ),
          ),
        ),
        'quote_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'quote_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'tx_bootstrappackage_tab_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '--palette--;;filePalette',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
              'tablenames' => 'tt_content',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.left',
                'value' => 'left',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.right',
                'value' => 'right',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.top',
                'value' => 'top',
              ),
            ),
          ),
        ),
        'icon_type' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.square',
                'value' => 'square',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.circle',
                'value' => 'circle',
              ),
            ),
          ),
        ),
        'icon_size' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_size',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                'value' => 'medium',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                'value' => 'large',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.awesome',
                'value' => 'awesome',
              ),
            ),
          ),
        ),
        'icon_color' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_color',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#FFFFFF',
          ),
        ),
        'icon_background' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_background',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#333333',
          ),
        ),
        'tx_bootstrappackage_timeline_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'header_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.header_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h1',
                'value' => 'h1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h2',
                'value' => 'h2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h3',
                'value' => 'h3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h4',
                'value' => 'h4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h5',
                'value' => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.subheader_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h1',
                'value' => 'h1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h2',
                'value' => 'h2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h3',
                'value' => 'h3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h4',
                'value' => 'h4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h5',
                'value' => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'frame_layout' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'embedded',
                'value' => 'embedded',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'frame_options' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.ruler_before',
                'value' => 'ruler-before',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.ruler_after',
                'value' => 'ruler-after',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.indent_left',
                'value' => 'indent-left',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.indent_right',
                'value' => 'indent-right',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color_class' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_color_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'none',
                'value' => 'none',
              ),
              1 => 
              array (
                'label' => 'primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'light',
                'value' => 'light',
              ),
              6 => 
              array (
                'label' => 'dark',
                'value' => 'dark',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'minitems' => 0,
            'maxitems' => 1,
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => 'crop,--palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
              'tablenames' => 'tt_content',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
          ),
          'l10n_mode' => 'exclude',
        ),
        'readmore_label' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.readmore_label',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'teaser' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.teaser',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'softref' => 'typolink_tag',
            'cols' => '40',
            'rows' => '3',
          ),
        ),
        'tx_bootstrappackage_carousel_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'file_folder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.file_folder',
          'config' => 
          array (
            'type' => 'folder',
          ),
        ),
        'aspect_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.aspect_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                'value' => '1.3333333333333',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                'value' => '1.7777777777778',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                'value' => '1',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'items_per_page' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.items_per_page',
          'config' => 
          array (
            'type' => 'number',
            'size' => 2,
            'range' => 
            array (
              'lower' => 1,
              'upper' => 50,
            ),
            'default' => 10,
          ),
          'l10n_mode' => 'exclude',
        ),
        'subitems_header_layout' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:subitems_header_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 2,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h2',
                'value' => 2,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h3',
                'value' => 3,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h4',
                'value' => 4,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.h5',
                'value' => 5,
              ),
            ),
          ),
        ),
        'tx_parsedownextra_file' => 
        array (
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:CType:=:parsedownextra_parsedown',
            ),
          ),
          'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.markdown_file',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'markdownSelect',
          ),
        ),
        'tx_parsedownextra_file_uid' => 
        array (
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:CType:=:parsedownextra_parsedown',
            ),
          ),
          'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.markdown_file',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'file',
            'minitems' => 0,
            'maxitems' => 1,
            'allowed' => 'md',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'title' => 
                array (
                  'config' => 
                  array (
                    'type' => 'passthrough',
                  ),
                ),
                'description' => 
                array (
                  'config' => 
                  array (
                    'type' => 'passthrough',
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_parsedownextra_file_uid',
              'tablenames' => 'tt_content',
            ),
          ),
        ),
        'tx_parsedownextra_markdown' => 
        array (
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:CType:=:parsedownextra_parsedown',
            ),
          ),
          'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.markdown',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'codeEditor',
            'format' => 'markdown',
            'cols' => 80,
            'rows' => 60,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;;general,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription',
        ),
        'header' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'text' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,tx_yoastseo_linking_suggestions,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'textpic' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,tx_yoastseo_linking_suggestions,--div--;core.form.tabs:images,image,file_folder,filelink_sorting,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'image' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:images,image,file_folder,filelink_sorting,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'assets' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,tx_yoastseo_linking_suggestions,--div--;core.form.tabs:media,assets,--palette--;;mediaAdjustments,--palette--;;gallerySettings,--palette--;;imagelinks,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'bullets' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bullets_type,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'table' => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext',
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,bodytext,--palette--;;tableconfiguration,table_caption,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;tablelayout,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'uploads' => 
        array (
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'label' => 'frontend.db.tt_content:uploads.media',
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,--palette--;;uploads,--palette--;;uploadslayout,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_categorized_content' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,selected_categories,category_field,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_categorized_pages' => 
        array (
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
          'showitem' => '--palette--;;general,--palette--;;headers,selected_categories,category_field,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_section' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'shortcut' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'div' => 
        array (
          'creationOptions' => 
          array (
            'saveAndClose' => true,
          ),
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'html' => 
        array (
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'codeEditor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:plugin,pi_flexform,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              ),
            ),
          ),
          'previewRenderer' => 'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer',
        ),
        'felogin_login' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:plugin,pi_flexform,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              ),
            ),
          ),
        ),
        'accordion' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,tx_bootstrappackage_accordion_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Accordion.xml',
              ),
            ),
          ),
        ),
        'audio' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,subitems_header_layout,assets,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'allowed' => 'mp3',
              ),
            ),
          ),
        ),
        'card_group' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,tx_bootstrappackage_card_group_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/CardGroup.xml',
              ),
            ),
          ),
        ),
        'carousel' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_carousel_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              ),
            ),
          ),
        ),
        'carousel_small' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_carousel_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              ),
            ),
          ),
        ),
        'carousel_fullscreen' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_carousel_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              ),
            ),
          ),
        ),
        'csv' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,--palette--;;tableconfiguration,--palette--;;tablelayout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'allowed' => 'csv',
              ),
            ),
          ),
        ),
        'external_media' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.palette.external_media;external_media,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'icon_group' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,tx_bootstrappackage_icon_group_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/IconGroup.xml',
              ),
            ),
          ),
        ),
        'listgroup' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel',
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,file_folder,filelink_sorting,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'allowed' => 'youtube,vimeo',
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'menu_card_list' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,readmore_label,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              ),
            ),
          ),
        ),
        'menu_card_dir' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,readmore_label,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              ),
            ),
          ),
        ),
        'menu_thumbnail_list' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              ),
            ),
          ),
        ),
        'menu_thumbnail_dir' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              ),
            ),
          ),
        ),
        'panel' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header_minimal,bodytext,panel_class,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'quote' => 
        array (
          'showitem' => '--palette--;;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,quote_link;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link,quote_source;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source,bodytext;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.text,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'social_links' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'tab' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_bootstrappackage_tab_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Tab.xml',
              ),
            ),
          ),
        ),
        'textcolumn' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'texticon' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.icon,--palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon;bootstrap_package_icons,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'textteaser' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,teaser,bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'timeline' => 
        array (
          'showitem' => '--palette--;;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,subitems_header_layout,tx_bootstrappackage_timeline_item,--div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline.options,pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Timeline.xml',
              ),
            ),
          ),
        ),
        'gallery' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,file_folder,filelink_sorting,--palette--;;mediaAdjustments,--palette--;;gallerySettings,aspect_ratio,items_per_page,--palette--;;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'blog_posts' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_latestposts' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_category' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_authorposts' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_tag' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_archive' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_sidebar' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_commentform' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_comments' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_authors' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_demandedposts' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin,pi_flexform,pages,recursive,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:blog/Configuration/FlexForms/Demand.xml',
              ),
            ),
          ),
        ),
        'blog_relatedposts' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_header' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'blog_footer' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
        'fluidfpdf_pdf' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;Configuration,pi_flexform,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
          'columnsOverrides' => 
          array (
            'pi_flexform' => 
            array (
              'config' => 
              array (
                'ds' => 'FILE:EXT:fluid_fpdf/Configuration/FlexForms/Pdf.xml',
              ),
            ),
          ),
        ),
        'parsedownextra_parsedown' => 
        array (
          'showitem' => '--palette--;;general,--palette--;;headers,--div--;LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_db.xlf:tx_parsedownextra_label.tab_markdown,tx_parsedownextra_markdown,tx_parsedownextra_file,tx_parsedownextra_file_uid,--div--;core.form.tabs:appearance,--palette--;;frames,--palette--;;appearanceLinks,--div--;core.form.tabs:categories,categories,--div--;core.form.tabs:language,--palette--;;language,--div--;core.form.tabs:access,--palette--;;hidden,--palette--;;access,--div--;core.form.tabs:notes,rowDescription,--div--;core.form.tabs:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'core.form.palettes:general',
          'showitem' => 'CType,colPos',
        ),
        'header' => 
        array (
          'label' => 'core.form.palettes:header',
          'showitem' => 'header,--linebreak--,header_layout,header_class,header_position,date,--linebreak--,header_link,subheader_class',
        ),
        'headers' => 
        array (
          'label' => 'core.form.palettes:headers',
          'showitem' => 'header,--linebreak--,header_layout,header_class,header_position,date,--linebreak--,header_link,--linebreak--,subheader,subheader_class',
        ),
        'gallerySettings' => 
        array (
          'label' => 'core.form.palettes:settings_gallery',
          'showitem' => 'imageorient,imagecols',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'core.form.palettes:media_adjustments',
          'showitem' => 'imagewidth,imageheight,imageborder',
        ),
        'imagelinks' => 
        array (
          'label' => 'core.form.palettes:media_behaviour',
          'showitem' => 'image_zoom',
        ),
        'hidden' => 
        array (
          'showitem' => 'hidden;frontend.db.tt_content:hidden',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid,l18n_parent',
        ),
        'access' => 
        array (
          'label' => 'core.form.palettes:access',
          'showitem' => '
                starttime;core.db.general:starttime, endtime;core.db.general:endtime,
                --linebreak--, fe_group;core.db.general:fe_group,
                --linebreak--, editlock',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'core.form.palettes:links_appearance',
          'showitem' => 'sectionIndex,linkToTop',
        ),
        'frames' => 
        array (
          'label' => 'core.form.palettes:content_layout',
          'showitem' => 'layout,frame_class,space_before_class,space_after_class
    --linebreak--,frame_layout,frame_options,--linebreak--,background_color_class,--linebreak--,background_image,background_image_options',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => 'table_delimiter,table_enclosure',
        ),
        'tablelayout' => 
        array (
          'label' => 'core.form.palettes:table_layout',
          'showitem' => 'cols,table_class,table_header_position,table_tfoot',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => 'media,--linebreak--,file_collections,--linebreak--,filelink_sorting,filelink_sorting_direction,target',
        ),
        'uploadslayout' => 
        array (
          'label' => 'core.form.palettes:downloads_layout',
          'showitem' => 'filelink_size,uploads_description,uploads_type',
        ),
        'external_media' => 
        array (
          'showitem' => 'external_media_title,--linebreak--,external_media_source,--linebreak--,external_media_ratio',
        ),
        'bootstrap_package_icons' => 
        array (
          'showitem' => 'icon_position,icon_type,icon_size,--linebreak--,icon_color,icon_background,--linebreak--,icon_set,--linebreak--,icon,icon_file',
        ),
        'header_minimal' => 
        array (
          'showitem' => 'header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,--linebreak--,header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel',
        ),
      ),
    ),
    'be_dashboards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'dashboard.db:be_dashboard',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'hideTable' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'content-dashboard',
        ),
      ),
      'columns' => 
      array (
        'cruser_id' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'identifier' => 
        array (
          'label' => 'dashboard.db:identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'title' => 
        array (
          'label' => 'dashboard.db:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general,
                    identifier,title,
                --div--;core.form.tabs:access,
                    hidden, --palette--;;timeRestriction,
                --div--;core.form.tabs:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'ctrl' => 
      array (
        'title' => 'impexp.db:tx_impexp_presets',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'typeicon_classes' => 
        array (
          'default' => 'actions-cog',
        ),
        'hideTable' => true,
        'rootLevel' => -1,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'impexp.db:title',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'public' => 
        array (
          'label' => 'impexp.db:public',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'user_uid' => 
        array (
          'label' => 'impexp.db:user_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'item_uid' => 
        array (
          'label' => 'impexp.db:item_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'preset_data' => 
        array (
          'label' => 'impexp.db:preset_data',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, public, user_uid, item_uid, preset_data',
        ),
      ),
    ),
    'form_definition' => 
    array (
      'ctrl' => 
      array (
        'title' => 'form.db:form_definition',
        'label' => 'label',
        'crdate' => 'crdate',
        'tstamp' => 'tstamp',
        'versioningWS' => false,
        'default_sortby' => 'label',
        'delete' => 'deleted',
        'rootLevel' => 1,
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-form',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general, label, identifier, configuration,
            ',
        ),
      ),
      'columns' => 
      array (
        'label' => 
        array (
          'label' => 'form.db:form_definition.label',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'readOnly' => true,
            'required' => true,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'form.db:form_definition.identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,unique',
            'readOnly' => true,
            'required' => true,
          ),
        ),
        'configuration' => 
        array (
          'label' => 'form.db:form_definition.configuration',
          'config' => 
          array (
            'type' => 'json',
            'readOnly' => true,
            'required' => true,
          ),
        ),
      ),
    ),
    'sys_redirect' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect',
        'descriptionColumn' => 'description',
        'label' => 'source_host',
        'label_alt' => 'source_path',
        'label_alt_force' => true,
        'crdate' => 'createdon',
        'tstamp' => 'updatedon',
        'hideTable' => true,
        'versioningWS' => false,
        'groupName' => 'system',
        'default_sortby' => 'source_host, source_path',
        'rootLevel' => -1,
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
          'ignorePageTypeRestriction' => true,
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'redirect_type',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_redirect',
          'qrcode' => 'actions-qrcode',
          'short_url' => 'module-urls',
        ),
        'type' => 'redirect_type',
      ),
      'types' => 
      array (
        'default' => 
        array (
          'showitem' => '
                --div--;core.form.tabs:general, --palette--;;source, --palette--;;targetdetails, protected, --palette--;;internals,
                --div--;redirects.db:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;core.form.tabs:access, --palette--;;visibility,
                --div--;core.form.tabs:notes, description, redirect_type',
          'columnsOverrides' => 
          array (
            'source_host' => 
            array (
              'config' => 
              array (
                'default' => '*',
              ),
            ),
          ),
        ),
        'qrcode' => 
        array (
          'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.redirect_type.qr_code',
          'showitem' => '
                --div--;core.form.tabs:general, --palette--;;qrcode_target,qrcode_display,
                --div--;redirects.db:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;core.form.tabs:access, --palette--;;visibility,
                --div--;core.form.tabs:notes, description, redirect_type
                ',
        ),
        'short_url' => 
        array (
          'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.redirect_type.short_url',
          'showitem' => '
                --div--;core.form.tabs:general, --palette--;;short_url_target,
                --div--;redirects.db:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;core.form.tabs:access, --palette--;;visibility,
                --div--;core.form.tabs:notes, description, redirect_type
                ',
          'columnsOverrides' => 
          array (
            'source_path' => 
            array (
              'config' => 
              array (
                'placeholder' => 'redirects.module_redirect:short_url.source_path.placeholder',
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'visibility' => 
        array (
          'showitem' => 'disabled, --linebreak--, starttime, endtime',
        ),
        'source' => 
        array (
          'showitem' => 'source_host, source_path, --linebreak--, respect_query_parameters, is_regexp',
        ),
        'targetdetails' => 
        array (
          'showitem' => 'target, target_statuscode, --linebreak--, force_https, keep_query_parameters',
        ),
        'internals' => 
        array (
          'showitem' => 'creation_type, integrity_status, --linebreak--, createdby',
        ),
        'qrcode_target' => 
        array (
          'showitem' => 'source_host, target, --linebreak--, createdby, force_https',
        ),
        'short_url_target' => 
        array (
          'showitem' => 'short_url, --linebreak--, target, --linebreak--, createdby, force_https',
        ),
      ),
      'columns' => 
      array (
        'redirect_type' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 'default',
          ),
        ),
        'qrcode_display' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'qrCode',
          ),
        ),
        'short_url' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.short_url',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.short_url.description',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'shortUrl',
            'fieldControl' => 
            array (
              'shortUrlGenerator' => 
              array (
                'renderType' => 'shortUrlGenerator',
                'options' => 
                array (
                  'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.short_url.shortUrlGenerator',
                ),
              ),
            ),
          ),
        ),
        'source_host' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim,TYPO3\\CMS\\Redirects\\Evaluation\\SourceHost',
            'valuePicker' => 
            array (
            ),
          ),
        ),
        'source_path' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
            'eval' => 'trim',
            'placeholder' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path.placeholder',
            'max' => 2048,
          ),
        ),
        'force_https' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.force_https.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'keep_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.keep_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'respect_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.respect_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'record',
            ),
            'appearance' => 
            array (
              'allowedOptions' => 
              array (
                0 => 'params',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'target_statuscode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.301',
                'value' => 301,
                'group' => 'change',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.302',
                'value' => 302,
                'group' => 'change',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.303',
                'value' => 303,
                'group' => 'change',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.307',
                'value' => 307,
                'group' => 'keep',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.308',
                'value' => 308,
                'group' => 'keep',
              ),
            ),
            'itemGroups' => 
            array (
              'keep' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.keep',
              'change' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.change',
            ),
            'default' => 307,
          ),
        ),
        'hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 5,
            'default' => 0,
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'lasthiton' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.lasthiton',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'createdon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'disable_hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcountState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'is_regexp' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.is_regexp',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'protected' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'creation_type' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.1',
                'value' => 1,
              ),
            ),
            'default' => 1,
            'readOnly' => true,
          ),
        ),
        'createdby' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.createdby',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.createdby.description',
          'config' => 
          array (
            'type' => 'passthrough',
            'renderType' => 'creationInformation',
            'default' => 0,
          ),
        ),
        'integrity_status' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'dbFieldLength' => 180,
            'default' => 'no_conflict',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status.no_conflict',
                'value' => 'no_conflict',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.integrity_status.self_reference',
                'value' => 'self_reference',
              ),
            ),
            'readOnly' => true,
          ),
        ),
        'disabled' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 4291761600,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'groupName' => 'content',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.0',
                'value' => '0',
                'icon' => 'sysnote-type-0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                'value' => '1',
                'icon' => 'sysnote-type-1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                'value' => '3',
                'icon' => 'sysnote-type-3',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                'value' => '4',
                'icon' => 'sysnote-type-4',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                'value' => '2',
                'icon' => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'position' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.top',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.bottom',
                'value' => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'cruser' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                category, subject,message,position,
            --div--;core.form.tabs:access,
                personal,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
    ),
    'sys_workspace' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'title' => 'workspaces.db:sys_workspace',
        'descriptionColumn' => 'description',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'system',
        'delete' => 'deleted',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_workspace',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'core.general:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 30,
            'required' => true,
            'eval' => 'trim,unique',
          ),
        ),
        'color' => 
        array (
          'label' => 'core.common:color',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'orange',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'core.common:color.orange',
                'value' => 'orange',
              ),
              1 => 
              array (
                'label' => 'core.common:color.yellow',
                'value' => 'yellow',
              ),
              2 => 
              array (
                'label' => 'core.common:color.lime',
                'value' => 'lime',
              ),
              3 => 
              array (
                'label' => 'core.common:color.green',
                'value' => 'green',
              ),
              4 => 
              array (
                'label' => 'core.common:color.teal',
                'value' => 'teal',
              ),
              5 => 
              array (
                'label' => 'core.common:color.blue',
                'value' => 'blue',
              ),
              6 => 
              array (
                'label' => 'core.common:color.indigo',
                'value' => 'indigo',
              ),
              7 => 
              array (
                'label' => 'core.common:color.purple',
                'value' => 'purple',
              ),
              8 => 
              array (
                'label' => 'core.common:color.magenta',
                'value' => 'magenta',
              ),
            ),
          ),
        ),
        'adminusers' => 
        array (
          'label' => 'workspaces.db:sys_workspace.adminusers',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 10,
            'autoSizeMax' => 10,
          ),
        ),
        'members' => 
        array (
          'label' => 'workspaces.db:sys_workspace.members',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'core.tca:page_tree_entry_points',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'core.tca:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'sys_filemounts',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'publish_time' => 
        array (
          'label' => 'workspaces.db:sys_workspace.publish_time',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'live_edit' => 
        array (
          'label' => 'workspaces.db:sys_workspace.live_edit',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'publish_access' => 
        array (
          'label' => 'workspaces.db:sys_workspace.publish_access',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.publish_access.1',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.publish_access.2',
              ),
              2 => 
              array (
                'label' => 'workspaces.db:sys_workspace.publish_access.3',
              ),
            ),
          ),
        ),
        'previewlink_lifetime' => 
        array (
          'label' => 'workspaces.db:sys_workspace.previewlink_lifetime',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 48,
          ),
        ),
        'stagechg_notification' => 
        array (
          'label' => 'workspaces.db:sys_workspace.stagechg_notification',
          'description' => 'workspaces.db:sys_workspace.stagechg_notification.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'custom_stages' => 
        array (
          'label' => 'workspaces.db:sys_workspace.custom_stages',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_workspace_stage',
            'appearance' => 
            array (
              'useSortable' => true,
              'expandSingle' => true,
            ),
            'foreign_field' => 'parentid',
          ),
        ),
        'edit_notification_defaults' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'edit_allow_notificaton_settings' => 
        array (
          'label' => 'workspaces.db:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.showDialog',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.changeablePreselection',
              ),
            ),
            'default' => 3,
            'cols' => 1,
          ),
        ),
        'edit_notification_preselection' => 
        array (
          'label' => 'workspaces.db:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.owners',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.members',
              ),
            ),
            'default' => 2,
            'cols' => 1,
          ),
        ),
        'publish_notification_defaults' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'publish_allow_notificaton_settings' => 
        array (
          'label' => 'workspaces.db:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.showDialog',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.changeablePreselection',
              ),
            ),
            'default' => 3,
            'cols' => 1,
          ),
        ),
        'publish_notification_preselection' => 
        array (
          'label' => 'workspaces.db:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.owners',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.members',
              ),
            ),
            'default' => 1,
            'cols' => 1,
          ),
        ),
        'execute_notification_defaults' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'execute_allow_notificaton_settings' => 
        array (
          'label' => 'workspaces.db:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.showDialog',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.changeablePreselection',
              ),
            ),
            'default' => 3,
            'cols' => 1,
          ),
        ),
        'execute_notification_preselection' => 
        array (
          'label' => 'workspaces.db:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.owners',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.members',
              ),
            ),
            'default' => 3,
            'cols' => 1,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'palettes' => 
      array (
        'memberlist' => 
        array (
          'label' => 'workspaces.db:tabs.users',
          'showitem' => 'adminusers,members',
        ),
        'stage.edit' => 
        array (
          'label' => 'workspaces.db:sys_workspace.palette.stage.edit',
          'showitem' => 'edit_allow_notificaton_settings, edit_notification_preselection,',
        ),
        'stage.publish' => 
        array (
          'label' => 'workspaces.db:sys_workspace.palette.stage.publish',
          'showitem' => 'publish_allow_notificaton_settings, publish_notification_preselection,',
        ),
        'stage.execute' => 
        array (
          'label' => 'workspaces.db:sys_workspace.palette.stage.execute',
          'showitem' => 'execute_allow_notificaton_settings, execute_notification_preselection,',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                title,color,
                stagechg_notification,
                --palette--;;memberlist,
            --div--;workspaces.db:tabs.internal_stages,
            --palette--;workspaces.db:tabs.notification_settings,
                --palette--;;stage.edit, edit_notification_defaults,
                --palette--;;stage.publish, publish_notification_defaults,
                --palette--;;stage.execute, execute_notification_defaults,
            --div--;workspaces.db:tabs.custom_stages,
                custom_stages,
            --div--;workspaces.db:tabs.mountpoints,
                db_mountpoints,file_mountpoints,
            --div--;workspaces.db:tabs.publish_access,
                previewlink_lifetime,live_edit,publish_access,publish_time,
            --div--;core.form.tabs:notes,
                description,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
    ),
    'sys_workspace_stage' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'workspaces.db:sys_workspace_stage',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'delete' => 'deleted',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_workspace',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'core.general:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 30,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'responsible_persons' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.responsible_persons',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'default_mailcomment' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.default_mailcomment',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'parentid' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.parentid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'notification_defaults' => 
        array (
          'label' => 'workspaces.db:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'allow_notificaton_settings' => 
        array (
          'label' => 'workspaces.db:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.showDialog',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.settingsDialog.changeablePreselection',
              ),
            ),
            'default' => 3,
            'cols' => 1,
          ),
        ),
        'notification_preselection' => 
        array (
          'label' => 'workspaces.db:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.owners',
              ),
              1 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.members',
              ),
              2 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.editors',
              ),
              3 => 
              array (
                'label' => 'workspaces.db:sys_workspace.preselection.responsiblePersons',
              ),
            ),
            'default' => 8,
            'cols' => 1,
          ),
        ),
      ),
      'palettes' => 
      array (
        'stage' => 
        array (
          'showitem' => 'allow_notificaton_settings, notification_preselection,',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;core.form.tabs:general,
                title,responsible_persons,
            --div--;workspaces.db:tabs.notification_settings,
                --palette--;;stage, notification_defaults, default_mailcomment,
            --div--;core.form.tabs:extended,
        ',
        ),
      ),
    ),
    'tx_yoastseo_prominent_word' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.title',
        'label' => 'stem',
        'languageField' => 'sys_language_uid',
        'iconfile' => 'EXT:yoast_seo/Resources/Public/Icons/Extension.svg',
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'transOrigPointerField' => 'l10n_parent',
      ),
      'columns' => 
      array (
        'stem' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.fields.stem',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'table' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.fields.table',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'weight' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.fields.weight',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_yoastseo_prominent_word',
            'foreign_table_where' => 'AND {#tx_yoastseo_prominent_word}.{#pid}=###CURRENT_PID### AND {#tx_yoastseo_prominent_word}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
      ),
      'palettes' => 
      array (
        'yoast-prominentword' => 
        array (
          'showitem' => '
                --linebreak--, stem,
                --linebreak--, table,
                --linebreak--, weight',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;General, --palette--;;yoast-prominentword,
                --div--;Visibility, sys_language_uid
            ',
        ),
      ),
    ),
    'tx_yoastseo_related_focuskeyword' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.title',
        'label' => 'keyword',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'sortby' => 'sorting',
        'iconfile' => 'EXT:yoast_seo/Resources/Public/Icons/Extension.svg',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'keyword' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.fields.keyword',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'synonyms' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.fields.synonyms',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'analysis' => 
        array (
          'exclude' => 1,
          'displayCond' => 'FIELD:keyword:REQ:TRUE',
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.fields.analysis',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'focusKeywordAnalysis',
          ),
        ),
        'uid_foreign' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tablenames' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'core.db.general:enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_yoastseo_related_focuskeyword',
            'foreign_table_where' => 'AND {#tx_yoastseo_related_focuskeyword}.{#pid}=###CURRENT_PID### AND {#tx_yoastseo_related_focuskeyword}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'palettes' => 
      array (
        'yoast-focuskeyword' => 
        array (
          'showitem' => '
                --linebreak--, keyword,
                --linebreak--, synonyms,
                --linebreak--, analysis',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;General, --palette--;;yoast-focuskeyword,
                --div--;Visibility, sys_language_uid, l10n_parent,l10n_diffsource, uid_foreign, tablenames, hidden
            ',
        ),
      ),
    ),
    'tx_bootstrappackage_accordion_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-accordion-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                bodytext,
                media,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaposition;mediaposition,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'accordion\'',
            'maxitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_accordion_item.pid=###CURRENT_PID### AND tx_bootstrappackage_accordion_item.sys_language_uid IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'enableRichtext' => true,
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.media',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => '3gp,aac,ai,aif,avif,bmp,flac,gif,heic,ico,jpeg,jpg,m4a,m4v,mov,mp3,mp4,ogg,opus,pdf,png,psd,svg,vimeo,wav,webm,webp,youtube',
            'disallowed' => 'mp3,wav,flac,opus',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tx_bootstrappackage_accordion_item',
            ),
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.left',
                'value' => 'left',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.top',
                'value' => 'top',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.right',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.bottom',
                'value' => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_card_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-card-group-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header;header,
                image,
                bodytext,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link;link,
                icon_file,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                --linebreak--,
                subheader,
            ',
        ),
        'link' => 
        array (
          'showitem' => '
                link,
                link_title,
                --linebreak--,
                link_class,
                --linebreak--,
                link_icon_set,
                --linebreak--,
                link_icon_identifier,
                link_icon,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'card_group\'',
            'maxitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_card_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_card_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'minitems' => 0,
            'maxitems' => 1,
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bootstrappackage_card_group_item',
            ),
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.bodytext',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'enableRichtext' => true,
          ),
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'link_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'link_icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
          'l10n_mode' => 'exclude',
        ),
        'link_icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon_identifier',
          'displayCond' => 'FIELD:link_icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'link_icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'link_icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon',
          'displayCond' => 'FIELD:link_icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '--palette--;;filePalette',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'link_icon',
              'tablenames' => 'tx_bootstrappackage_card_group_item',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'link_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'success',
                'value' => 'success',
              ),
              6 => 
              array (
                'label' => 'info',
                'value' => 'info',
              ),
              7 => 
              array (
                'label' => 'warning',
                'value' => 'warning',
              ),
              8 => 
              array (
                'label' => 'danger',
                'value' => 'danger',
              ),
              9 => 
              array (
                'label' => 'outline-default',
                'value' => 'outline-default',
              ),
              10 => 
              array (
                'label' => 'outline-primary',
                'value' => 'outline-primary',
              ),
              11 => 
              array (
                'label' => 'outline-secondary',
                'value' => 'outline-secondary',
              ),
              12 => 
              array (
                'label' => 'outline-tertiary',
                'value' => 'outline-tertiary',
              ),
              13 => 
              array (
                'label' => 'outline-quaternary',
                'value' => 'outline-quaternary',
              ),
              14 => 
              array (
                'label' => 'outline-success',
                'value' => 'outline-success',
              ),
              15 => 
              array (
                'label' => 'outline-info',
                'value' => 'outline-info',
              ),
              16 => 
              array (
                'label' => 'outline-warning',
                'value' => 'outline-warning',
              ),
              17 => 
              array (
                'label' => 'outline-danger',
                'value' => 'outline-danger',
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_carousel_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
        'type' => 'item_type',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'typeicon_column' => 'item_type',
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-carousel-item',
          'header' => 'content-bootstrappackage-carousel-item-header',
          'call_to_action' => 'content-bootstrappackage-carousel-item-calltoaction',
          'image' => 'content-bootstrappackage-carousel-item-image',
          'text' => 'content-bootstrappackage-carousel-item-text',
          'text_and_image' => 'content-bootstrappackage-carousel-item-textandimage',
          'background_image' => 'content-bootstrappackage-carousel-item-backgroundimage',
          'html' => 'content-bootstrappackage-carousel-item-html',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
        ),
        'header' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                text_color,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'text' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                text_color,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'call_to_action' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                button_text,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                image,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'text_and_image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                text_color,
                image,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'background_image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                background_color,
                background_image,
                background_image_options,
                link,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'html' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'codeEditor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                header_layout,
                header_class,
                --linebreak--,
                subheader,
                subheader_layout,
                subheader_class,
                --linebreak--,
                header_position,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                --linebreak--,
                layout,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType} IN (\'carousel\',\'carousel_small\',\'carousel_fullscreen\')',
            'maxitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
          ),
        ),
        'item_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.header',
                'value' => 'header',
                'icon' => 'content-bootstrappackage-carousel-item-header',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.text',
                'value' => 'text',
                'icon' => 'content-bootstrappackage-carousel-item-text',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.calltoaction',
                'value' => 'call_to_action',
                'icon' => 'content-bootstrappackage-carousel-item-calltoaction',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.image',
                'value' => 'image',
                'icon' => 'content-bootstrappackage-carousel-item-image',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.textandimage',
                'value' => 'text_and_image',
                'icon' => 'content-bootstrappackage-carousel-item-textandimage',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.backgroundimage',
                'value' => 'background_image',
                'icon' => 'content-bootstrappackage-carousel-item-backgroundimage',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.html',
                'value' => 'html',
                'icon' => 'content-bootstrappackage-carousel-item-html',
              ),
            ),
            'default' => 'header',
            'authMode' => 'explicitAllow',
          ),
          'l10n_mode' => 'exclude',
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_carousel_item.pid=###CURRENT_PID### AND tx_bootstrappackage_carousel_item.sys_language_uid IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.layout',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'custom',
                'value' => 'custom',
              ),
              1 => 
              array (
                'label' => 'primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'light',
                'value' => 'light',
              ),
              6 => 
              array (
                'label' => 'dark',
                'value' => 'dark',
              ),
            ),
            'default' => 'secondary',
          ),
          'l10n_mode' => 'exclude',
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
            ),
            'softref' => 'typolink',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'H1',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'H2',
                'value' => '2',
              ),
              2 => 
              array (
                'label' => 'H3',
                'value' => '3',
              ),
              3 => 
              array (
                'label' => 'H4',
                'value' => '4',
              ),
            ),
            'default' => '1',
          ),
          'l10n_mode' => 'exclude',
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.default',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.center',
                'value' => 'center',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.right',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.left',
                'value' => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 'none',
              ),
              1 => 
              array (
                'label' => 'h1',
                'value' => 'h1',
              ),
              2 => 
              array (
                'label' => 'h2',
                'value' => 'h2',
              ),
              3 => 
              array (
                'label' => 'h3',
                'value' => 'h3',
              ),
              4 => 
              array (
                'label' => 'h4',
                'value' => 'h4',
              ),
              5 => 
              array (
                'label' => 'h5',
                'value' => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'subheader_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'H2',
                'value' => '2',
              ),
              1 => 
              array (
                'label' => 'H3',
                'value' => '3',
              ),
              2 => 
              array (
                'label' => 'H4',
                'value' => '4',
              ),
            ),
            'default' => '2',
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 'none',
              ),
              1 => 
              array (
                'label' => 'h1',
                'value' => 'h1',
              ),
              2 => 
              array (
                'label' => 'h2',
                'value' => 'h2',
              ),
              3 => 
              array (
                'label' => 'h3',
                'value' => 'h3',
              ),
              4 => 
              array (
                'label' => 'h4',
                'value' => 'h4',
              ),
              5 => 
              array (
                'label' => 'h5',
                'value' => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '5',
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'enableRichtext' => true,
          ),
        ),
        'button_text' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.button_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'minitems' => 0,
            'maxitems' => 1,
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bootstrappackage_carousel_item',
            ),
          ),
        ),
        'text_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.text_color',
          'displayCond' => 'FIELD:layout:=:custom',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#FFFFFF',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_color',
          'displayCond' => 'FIELD:layout:=:custom',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#333333',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => '3gp,aac,ai,aif,avif,bmp,flac,gif,heic,ico,jpeg,jpg,m4a,m4v,mov,mp3,mp4,ogg,opus,pdf,png,psd,svg,vimeo,wav,webm,webp,youtube',
            'minitems' => 0,
            'maxitems' => 1,
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => 'crop,--palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
              'tablenames' => 'tx_bootstrappackage_carousel_item',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
          ),
          'l10n_mode' => 'exclude',
        ),
      ),
    ),
    'tx_bootstrappackage_icon_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-icon-group-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                subheader,
                bodytext,
                link,
                icon_set,
                icon_identifier,
                icon_file,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'icon_group\'',
            'maxitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_icon_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_icon_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'subheader' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'enableRichtext' => true,
          ),
        ),
        'link' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
            ),
            'softref' => 'typolink',
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_identifier',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '--palette--;;filePalette',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
              'tablenames' => 'tx_bootstrappackage_icon_group_item',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
      ),
    ),
    'tx_bootstrappackage_tab_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-tab-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                bodytext,
                media,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaposition;mediaposition,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'tab\'',
            'maxitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_tab_item.pid=###CURRENT_PID### AND tx_bootstrappackage_tab_item.sys_language_uid IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'enableRichtext' => true,
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.media',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => '3gp,aac,ai,aif,avif,bmp,flac,gif,heic,ico,jpeg,jpg,m4a,m4v,mov,mp3,mp4,ogg,opus,pdf,png,psd,svg,vimeo,wav,webm,webp,youtube',
            'disallowed' => 'mp3,wav,flac,opus',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tx_bootstrappackage_tab_item',
            ),
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.left',
                'value' => 'left',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.top',
                'value' => 'top',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.right',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.bottom',
                'value' => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_timeline_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_userFunc' => 'BK2K\\BootstrapPackage\\Userfuncs\\Tca->timelineItemLabel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'default_sortby' => 'date',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-timeline-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                date,
                header,
                bodytext,
                icon_set,
                icon_identifier,
                icon_file,
                image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'timeline\'',
            'maxitems' => 1,
            'default' => 0,
            'relationship' => 'manyToOne',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_timeline_item.pid=###CURRENT_PID### AND tx_bootstrappackage_timeline_item.sys_language_uid IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.date',
          'config' => 
          array (
            'type' => 'datetime',
            'dbType' => 'datetime',
            'required' => true,
          ),
          'l10n_mode' => 'exclude',
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'enableRichtext' => true,
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_identifier',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '--palette--;;filePalette',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
              'tablenames' => 'tx_bootstrappackage_timeline_item',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'minitems' => 0,
            'maxitems' => 1,
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bootstrappackage_timeline_item',
            ),
          ),
        ),
      ),
    ),
    'tx_blog_domain_model_author' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author',
        'label' => 'name',
        'label_alt_force' => 0,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'record-blog-author',
        ),
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
      ),
      'palettes' => 
      array (
        'palette_access' => 
        array (
          'showitem' => 'hidden',
        ),
        'palette_personal' => 
        array (
          'showitem' => 'name, title',
        ),
        'palette_contact' => 
        array (
          'showitem' => 'website, email',
        ),
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
          'l10n_display' => 'defaultAsReadonly',
          'l10n_mode' => 'exclude',
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.slug',
          'config' => 
          array (
            'type' => 'slug',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'name',
              ),
              'replacements' => 
              array (
                '/' => '',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
            'searchable' => false,
          ),
          'l10n_display' => 'defaultAsReadonly',
          'l10n_mode' => 'exclude',
        ),
        'avatar_provider' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.avatar_provider',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Please choose one avatar provider',
                'value' => '--div--',
              ),
              1 => 
              array (
                'label' => 'Gravatar',
                'value' => 'T3G\\AgencyPack\\Blog\\AvatarProvider\\GravatarProvider',
              ),
              2 => 
              array (
                'label' => 'Image',
                'value' => 'T3G\\AgencyPack\\Blog\\AvatarProvider\\ImageProvider',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.image',
          'displayCond' => 'FIELD:avatar_provider:=:T3G\\AgencyPack\\Blog\\AvatarProvider\\ImageProvider',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                crop,
                                --palette--;;filePalette
                            ',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp,avif',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_blog_domain_model_author',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
          ),
        ),
        'website' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.website',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'domainname',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 30,
            'required' => true,
            'searchable' => false,
            'softref' => 'email[subst]',
          ),
          'l10n_mode' => 'exclude',
        ),
        'location' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.location',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'twitter' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.twitter',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'linkedin' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.linkedin',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'xing' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.xing',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'instagram' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.instagram',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'profile' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.profile',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
            'searchable' => false,
          ),
          'l10n_mode' => 'exclude',
        ),
        'bio' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.bio',
          'config' => 
          array (
            'type' => 'text',
            'eval' => '',
            'searchable' => false,
          ),
        ),
        'posts' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.posts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'multiple' => 0,
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#doktype}=137 AND {#pages}.{#sys_language_uid} IN (-1,0)',
            'MM' => 'tx_blog_post_author_mm',
            'MM_opposite_field' => 'authors',
            'minitems' => 0,
            'maxitems' => 99999,
          ),
          'l10n_mode' => 'exclude',
        ),
        'details_page' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.details_page',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'core.db.general:language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'core.db.general:l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_blog_domain_model_author',
            'foreign_table_where' => 'AND {#tx_blog_domain_model_author}.{#pid}=###CURRENT_PID### AND {#tx_blog_domain_model_author}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'sys_language_uid' => 
      array (
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
        'config' => 
        array (
          'type' => 'language',
        ),
      ),
      'l18n_parent' => 
      array (
        'displayCond' => 'FIELD:sys_language_uid:>:0',
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
        'config' => 
        array (
          'type' => 'select',
          'renderType' => 'selectSingle',
          'items' => 
          array (
            0 => 
            array (
              0 => '',
              1 => 0,
            ),
          ),
          'foreign_table' => 'tx_blog_domain_model_author',
          'foreign_table_where' => 'AND tx_blog_domain_model_author.pid=###CURRENT_PID### AND tx_blog_domain_model_author.sys_language_uid IN (-1,0)',
        ),
      ),
      'l18n_diffsource' => 
      array (
        'config' => 
        array (
          'type' => 'passthrough',
          'default' => '',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.tab_profile,
                    --palette--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.palette_personal;palette_personal,
                    slug,
                    location,
                    avatar_provider,
                    image,
                    bio,
                    --palette--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.palette_contact;palette_contact,
                --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.tab_social_media,
                    twitter,
                    linkedin,
                    xing,
                    instagram,
                    profile,
                --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_author.tab_blog,
                    posts,
                    details_page,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;palette_access
            ',
        ),
      ),
    ),
    'tx_blog_domain_model_comment' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment',
        'label' => 'name',
        'label_alt' => 'crdate',
        'label_alt_force' => 1,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'record-blog-comment',
        ),
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
        'versioningWS' => true,
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => '',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'www',
            'searchable' => false,
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 30,
            'softref' => 'email[subst]',
          ),
        ),
        'comment' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.comment',
          'config' => 
          array (
            'type' => 'text',
            'size' => 30,
            'eval' => '',
          ),
        ),
        'post_language_id' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'status' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.status',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.status.pending',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.status.approved',
                'value' => 10,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.status.declined',
                'value' => 50,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_comment.status.deleted',
                'value' => 90,
              ),
            ),
          ),
        ),
        'parentid' => 
        array (
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'pages',
            'foreign_table_where' => ' AND doktype = 137',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'relationship' => 'manyToOne',
          ),
        ),
        'parenttable' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hp' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'post_language_id,status,name,url,email,comment,post',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,',
          'canNotCollapse' => true,
        ),
      ),
    ),
    'tx_blog_domain_model_tag' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag',
        'label' => 'title',
        'label_alt' => 'sys_language_uid',
        'label_alt_force' => 0,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'record-blog-tag',
        ),
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.slug',
          'config' => 
          array (
            'type' => 'slug',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
            'searchable' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.description',
          'config' => 
          array (
            'type' => 'text',
            'searchable' => false,
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.content',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_blog_tag_content',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => 
            array (
              'collapseAll' => 1,
              'expandSingle' => 1,
              'levelLinksPosition' => 'bottom',
              'useSortable' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
              'showSynchronizationLink' => 1,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'richtextConfiguration' => 'default',
          ),
        ),
        'post' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_blog_domain_model_tag',
            'foreign_table_where' => 'AND tx_blog_domain_model_tag.pid=###CURRENT_PID### AND tx_blog_domain_model_tag.sys_language_uid IN (-1,0)',
            'relationship' => 'manyToOne',
            'maxitems' => 1,
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.tabs.general,
                    title,
                    slug,
                    --palette--;;paletteCore,
                --div--;LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:tx_blog_domain_model_tag.tabs.seo,
                    description,
                    content
            ',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,sys_language_uid,l18n_parent,l18n_diffsource',
          'canNotCollapse' => true,
        ),
      ),
    ),
  ),
);
#