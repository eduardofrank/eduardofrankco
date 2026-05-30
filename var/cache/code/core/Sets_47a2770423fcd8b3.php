<?php
return array (
  'orderedSets' => 
  array (
    'bootstrap-package/content-elements' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/content-elements',
       'label' => 'Bootstrap Package: Content Elements',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/ContentElement/',
           'label' => 'Layout Root Path',
           'description' => 'Path to layouts',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/ContentElement/',
           'label' => 'Partial Root Path',
           'description' => 'Path to partials',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/ContentElement/',
           'label' => 'Template Root Path',
           'description' => 'Path to templates',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.header.defaultHeaderType',
           'type' => 'number',
           'default' => 2,
           'label' => 'Default Header type',
           'description' => 'Enter the number of the header layout to be used by default [1-5]',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.header.class',
           'type' => 'string',
           'default' => 'element-header',
           'label' => 'Default Header class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.header.date.format',
           'type' => 'string',
           'default' => '%B %e, %Y',
           'label' => 'Header date format',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.subheader.class',
           'type' => 'string',
           'default' => 'element-subheader',
           'label' => 'Default Subheader class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.subheader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.cssClass',
           'type' => 'string',
           'default' => 'lightbox',
           'label' => 'CSS Class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.prefix',
           'type' => 'string',
           'default' => 'lightbox-group',
           'label' => 'Group Prefix',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.image.maxHeight',
           'type' => 'int',
           'default' => 1200,
           'label' => 'Max Image Hight',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.lightbox.image.maxWidth',
           'type' => 'int',
           'default' => 1200,
           'label' => 'Max Image Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.lightbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.autoplay',
           'type' => 'bool',
           'default' => false,
           'label' => 'Autoplay',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.controls',
           'type' => 'bool',
           'default' => true,
           'label' => 'Controls',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.loop',
           'type' => 'bool',
           'default' => false,
           'label' => 'Loop',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.enablejsapi',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable JavaScript API',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.showinfo',
           'type' => 'bool',
           'default' => false,
           'label' => 'Show Info',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.relatedVideos',
           'type' => 'bool',
           'default' => false,
           'label' => 'Related Videos',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.modestbranding',
           'type' => 'bool',
           'default' => false,
           'label' => 'Modest Branding',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.media.additionalConfig.nocookie',
           'type' => 'bool',
           'default' => true,
           'label' => 'No Cookie',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.media',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.1.class',
           'type' => 'string',
           'default' => 'gallery-item-size-1',
           'label' => 'Item CSS Class for 1 column',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.2.class',
           'type' => 'string',
           'default' => 'gallery-item-size-2',
           'label' => 'Item CSS Class for 2 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.3.class',
           'type' => 'string',
           'default' => 'gallery-item-size-3',
           'label' => 'Item CSS Class for 3 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.4.class',
           'type' => 'string',
           'default' => 'gallery-item-size-4',
           'label' => 'Item CSS Class for 4 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.5.class',
           'type' => 'string',
           'default' => 'gallery-item-size-5',
           'label' => 'Item CSS Class for 5 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.gallery.columns.6.class',
           'type' => 'string',
           'default' => 'gallery-item-size-6',
           'label' => 'Item CSS Class for 6 columns',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.gallery',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        25 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_thumbnail.title.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Title',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-thumbnail',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        26 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_thumbnail.subtitle.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Subtitle',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-thumbnail',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        27 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.title.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Title',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        28 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.subtitle.crop',
           'type' => 'int',
           'default' => 100,
           'label' => 'Crop Subtitle',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        29 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.abstract.crop',
           'type' => 'int',
           'default' => 250,
           'label' => 'Crop Abstract',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        30 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.icon.enable',
           'type' => 'bool',
           'default' => false,
           'label' => 'Enable Icon',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        31 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.icon.height',
           'type' => 'string',
           'default' => '32',
           'label' => 'Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        32 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.menu_card.icon.width',
           'type' => 'string',
           'default' => '32c',
           'label' => 'Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.menu-card',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        33 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.default.height',
           'type' => 'string',
           'default' => '32',
           'label' => 'Default Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        34 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.default.width',
           'type' => 'string',
           'default' => '32',
           'label' => 'Default Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        35 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.medium.height',
           'type' => 'string',
           'default' => '48',
           'label' => 'Medium Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        36 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.medium.width',
           'type' => 'string',
           'default' => '48',
           'label' => 'Medium Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        37 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.large.height',
           'type' => 'string',
           'default' => '64',
           'label' => 'Large Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        38 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.large.width',
           'type' => 'string',
           'default' => '64',
           'label' => 'Large Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        39 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.awesome.height',
           'type' => 'string',
           'default' => '80',
           'label' => 'Awesome Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        40 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.texticon.icon.awesome.width',
           'type' => 'string',
           'default' => '80',
           'label' => 'Awesome Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.text-and-icon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        41 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.timeline.date.format',
           'type' => 'string',
           'default' => '%B %e, %Y - %H:%M',
           'label' => 'Date Format',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.timeline',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        42 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.uploads.preview.height',
           'type' => 'string',
           'default' => '100c',
           'label' => 'Preview Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.uploads',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        43 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_contentelements.uploads.preview.width',
           'type' => 'string',
           'default' => '100c',
           'label' => 'Preview Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.content-elements.uploads',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements',
           'label' => 'Content Elements',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.templates',
           'label' => 'Templates',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.header',
           'label' => 'Header',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.subheader',
           'label' => 'Subheader',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.lightbox',
           'label' => 'Lightbox',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.media',
           'label' => 'Media',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.gallery',
           'label' => 'Gallery',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.menu-thumbnail',
           'label' => 'Menu Thumbnail',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.menu-card',
           'label' => 'Menu Card',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.text-and-icon',
           'label' => 'Text and Icon',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.timeline',
           'label' => 'Timeline',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.content-elements.uploads',
           'label' => 'Uploads',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.content-elements',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/ContentElements/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/ContentElements/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/container' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/container',
       'label' => 'Bootstrap Package: Container',
       'dependencies' => 
      array (
        0 => 'bootstrap-package/content-elements',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Container/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Container/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/backend-layouts' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/backend-layouts',
       'label' => 'Bootstrap Package: Backend Layouts',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.default',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Default Layout',
           'description' => 'Enable the default backend layout with border, content before/after, main content and footer columns.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.simple',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Simple Layout',
           'description' => 'Enable the simple backend layout with border, content before/after and main content columns.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns Layout',
           'description' => 'Enable the 2 columns (75/25) backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns_25_75',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns 25/75 Layout',
           'description' => 'Enable the 2 columns (25/75) backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns_50_50',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns 50/50 Layout',
           'description' => 'Enable the 2 columns (50/50) backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.2_columns_offset_right',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 2 Columns Offset Right Layout',
           'description' => 'Enable the 2 columns offset right backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.3_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable 3 Columns Layout',
           'description' => 'Enable the 3 columns backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.special_feature',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Special Feature Layout',
           'description' => 'Enable the special feature backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.special_start',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Special Start Layout',
           'description' => 'Enable the special start backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_left',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Left Layout',
           'description' => 'Enable the subnavigation left backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_left_2_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Left 2 Columns Layout',
           'description' => 'Enable the subnavigation left with 2 columns backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_right',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Right Layout',
           'description' => 'Enable the subnavigation right backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'backendlayout.subnavigation_right_2_columns',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Subnavigation Right 2 Columns Layout',
           'description' => 'Enable the subnavigation right with 2 columns backend layout.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.backendLayouts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.backendLayouts',
           'label' => 'Backend Layouts',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/BackendLayouts/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/BackendLayouts/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/bootstrap-5' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/bootstrap-5',
       'label' => 'Bootstrap Package: Bootstrap 5',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.primary',
           'type' => 'string',
           'default' => '#577760',
           'label' => '$primary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.secondary',
           'type' => 'string',
           'default' => '#514553',
           'label' => '$secondary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.tertiary',
           'type' => 'string',
           'default' => '#758c7f',
           'label' => '$tertiary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.quaternary',
           'type' => 'string',
           'default' => '#2d1e2f',
           'label' => '$quaternary',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.default',
           'type' => 'string',
           'default' => '#eaebec',
           'label' => '$default',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.success',
           'type' => 'string',
           'default' => '#3A833A',
           'label' => '$success',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.info',
           'type' => 'string',
           'default' => '#287F9A',
           'label' => '$info',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.warning',
           'type' => 'string',
           'default' => '#a4660e',
           'label' => '$warning',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.danger',
           'type' => 'string',
           'default' => '#d4403a',
           'label' => '$danger',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.lighter',
           'type' => 'string',
           'default' => '$gray-100',
           'label' => '$lighter',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.light',
           'type' => 'string',
           'default' => '$gray-200',
           'label' => '$light',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.dark',
           'type' => 'string',
           'default' => '$gray-800',
           'label' => '$dark',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.darker',
           'type' => 'string',
           'default' => '$gray-900',
           'label' => '$darker',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.colors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.min-contrast-ratio',
           'type' => 'number',
           'default' => 4.5,
           'label' => '$min-contrast-ratio',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.contrast',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.body-bg',
           'type' => 'string',
           'default' => '$white',
           'label' => '$body-bg',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.body',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.body-color',
           'type' => 'string',
           'default' => '$gray-900',
           'label' => '$body-color',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.body',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.link-color',
           'type' => 'string',
           'default' => '$primary',
           'label' => '$link-color',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.links',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.link-shade-percentage',
           'type' => 'string',
           'default' => '20%',
           'label' => '$link-shade-percentage',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.links',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.link-hover-color',
           'type' => 'string',
           'default' => 'shift-color($link-color, $link-shade-percentage)',
           'label' => '$link-shade-percentage',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.links',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.font-family-sans-serif',
           'type' => 'string',
           'default' => '"#{$google-webfont}", sans-serif',
           'label' => '$font-family-sans-serif',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.fonts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.font-family-monospace',
           'type' => 'string',
           'default' => 'SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace',
           'label' => '$font-family-monospace',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.fonts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-rounded',
           'type' => 'bool',
           'default' => true,
           'label' => '$enable-rounded',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-shadows',
           'type' => 'bool',
           'default' => true,
           'label' => '$enable-shadows',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-gradients',
           'type' => 'bool',
           'default' => false,
           'label' => '$enable-gradients',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.scss.enable-transitions',
           'type' => 'bool',
           'default' => true,
           'label' => '$enable-transitions',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.scss.options',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss',
           'label' => 'SCSS',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.colors',
           'label' => 'Colors',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.contrast',
           'label' => 'Contrast',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.body',
           'label' => 'Body',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.links',
           'label' => 'Links',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.fonts',
           'label' => 'Fonts',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.scss.options',
           'label' => 'Options',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.scss',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Bootstrap5/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Bootstrap5/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/cookie-consent' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/cookie-consent',
       'label' => 'Bootstrap Package: Cookie Consent',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable Cookie Consent',
           'description' => 'For more information about this solution please head over to https://cookieconsent.insites.com/',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.layout',
           'type' => 'string',
           'default' => 'basic-header',
           'label' => 'Layout',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'basic' => 'Basic',
            'basic-close' => 'Basic Close',
            'basic-header' => 'Basic Header',
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.position',
           'type' => 'string',
           'default' => 'bottom',
           'label' => 'Position',
           'description' => 'If you specify "top" or "bottom", we assume that a full width "banner" is required. If however you specify a horizontal direction, we assume that a corner popup is required (which we call "floating").',
           'readonly' => false,
           'enum' => 
          array (
            'top' => 'Banner Top',
            'bottom' => 'Banner Bottom',
            'top-left' => 'Floating Top Left',
            'top-right' => 'Floating Top Right',
            'bottom-left' => 'Floating Bottom Left',
            'bottom-right' => 'Floating Bottom Right',
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.static',
           'type' => 'bool',
           'default' => false,
           'label' => 'Static Position',
           'description' => 'The popup uses position fixed to stay in one place on the screen despite any scroll bars. This option makes the popup position static so it displays at the top of the page. A height animation has also been added by default so the popup doesn’t make the page jump, but gradually grows and fades in.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.content.href',
           'type' => 'string',
           'default' => '',
           'label' => 'Privacy Police',
           'description' => 'Insert a full Link to the privacy police page or a page uid from your current TYPO3 System.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.revokable',
           'type' => 'bool',
           'default' => false,
           'label' => 'Revokable',
           'description' => 'If set true, revoke button is displayed every time. If false, revoke button is only displayed for advanced compliance options (opt-in and opt-out) and in countries that require revokable consent. The latter can be disabled by regionalLaw.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.location',
           'type' => 'bool',
           'default' => false,
           'label' => 'Location Detection',
           'description' => 'Location is simply a tool for getting the two letter country code that the user is in.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.law.countryCode',
           'type' => 'string',
           'default' => '',
           'label' => 'Country Code',
           'description' => 'Rather than getting the country code from the location services, you can hard code a particular country into the tool.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.law.regionalLaw',
           'type' => 'bool',
           'default' => true,
           'label' => 'Regional Law',
           'description' => 'If false, then we only enable the popup if the country has the cookie law. We ignore all other country specific rules.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.type',
           'type' => 'string',
           'default' => 'info',
           'label' => 'Compliance',
           'description' => 'The informal confirmation does not require any further adjustments to your JavaScript. The Opt-In and Opt-Out options are not out-of-the-box solutions, manual adjustments to your software are necessary. For your support we provide the events bk2k.cookie.enable, bk2k.cookie.disable and bk2k.cookie.revoke. These events allow you to let your application react to them and to set or remove cookies accordingly. The cookie that contains the current status is called cookieconsent_status.',
           'readonly' => false,
           'enum' => 
          array (
            'info' => 'Informal',
            'opt-in' => 'Opt-In',
            'opt-out' => 'Opt-Out',
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.cookieconsent.cookie.expiryDays',
           'type' => 'number',
           'default' => 365,
           'label' => 'Expiry Days',
           'description' => 'The cookies expire date, specified in days (specify -1 for no expiry)',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.cookie-consent',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.cookie-consent',
           'label' => 'Cookie Consent',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/CookieConsent/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/CookieConsent/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/google-font' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/google-font',
       'label' => 'Bootstrap Package: Google Font',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.googleFont.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-font',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.googleFont.font',
           'type' => 'string',
           'default' => 'Source Sans Pro',
           'label' => 'Font',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-font',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.googleFont.weight',
           'type' => 'string',
           'default' => '300,400,700',
           'label' => 'Font Weights',
           'description' => 'Comma separated list of font weights',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-font',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.google-font',
           'label' => 'Google Font',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/GoogleFont/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/GoogleFont/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/google-tag-manager' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/google-tag-manager',
       'label' => 'Bootstrap Package: Google Tag Manager',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.tracking.google.tagManagerContainerId',
           'type' => 'string',
           'default' => '',
           'label' => 'Container-ID',
           'description' => 'Google Tag Manager Container ID',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.google-tag-manager',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.google-tag-manager',
           'label' => 'Google Tag Manager',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/GoogleTagManager/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/GoogleTagManager/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/indexed-search' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/indexed-search',
       'label' => 'Bootstrap Package: Indexed Search',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
        0 => 'typo3/indexed-search',
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/IndexedSearch/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/IndexedSearch/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/rte' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/rte',
       'label' => 'Bootstrap Package: RTE',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/RTE/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/RTE/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'bootstrap-package/skiplink' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/skiplink',
       'label' => 'Bootstrap Package: Skiplink',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Skiplink/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Skiplink/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/form' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/form',
       'label' => 'Form Framework',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'form.templates.templateRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.form.templates.templateRootPath',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.description.form.templates.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'form.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'form.templates.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.form.templates.partialRootPath',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.description.form.templates.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'form.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'form.templates.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.form.templates.layoutRootPath',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.description.form.templates.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'form.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'form.translation.translationFile',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.form.translation.translationFile',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:settings.description.form.translation.translationFile',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'form.translation',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'form',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:categories.form',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:categories.description.form',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'form.templates',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:categories.form.templates',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:categories.description.form.templates',
           'icon' => NULL,
           'parent' => 'form',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'form.translation',
           'label' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:categories.form.translation',
           'description' => 'LLL:EXT:form/Configuration/Sets/Form/labels.xlf:categories.description.form.translation',
           'icon' => NULL,
           'parent' => 'form',
        )),
      ),
       'typoscript' => 'EXT:form/Configuration/Sets/Form/',
       'pagets' => 'EXT:form/Configuration/Sets/Form/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/seo-sitemap' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/seo-sitemap',
       'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Templates/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.templateRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Partials/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.partialRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Layouts/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.layoutRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.excludedDoktypes',
           'type' => 'string',
           'default' => '3, 4, 6, 7, 199, 254',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.excludedDoktypes',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.excludedDoktypes',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.excludePagesRecursive',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.excludePagesRecursive',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.excludePagesRecursive',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.additionalWhere',
           'type' => 'string',
           'default' => '{#no_index} = 0 AND {#canonical_link} = \'\'',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.additionalWhere',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.additionalWhere',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'seo',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.seo',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.description.seo',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'seo.templates',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.seo.templates',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.description.seo.templates',
           'icon' => NULL,
           'parent' => 'seo',
        )),
      ),
       'typoscript' => 'EXT:seo/Configuration/Sets/Sitemap/',
       'pagets' => 'EXT:seo/Configuration/Sets/Sitemap/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
        'PageTypeSuffix' => 
        array (
          'type' => 'PageType',
          'map' => 
          array (
            'sitemap.xml' => 1533906435,
          ),
        ),
        'Sitemap' => 
        array (
          'type' => 'Simple',
          'routePath' => 'sitemap-type/{sitemap}',
          'aspects' => 
          array (
            'sitemap' => 
            array (
              'type' => 'StaticValueMapper',
              'map' => 
              array (
                'pages' => 'pages',
              ),
            ),
          ),
          '_arguments' => 
          array (
            'sitemap' => 'tx_seo/sitemap',
          ),
        ),
      ),
    )),
    'bootstrap-package/full' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'bootstrap-package/full',
       'label' => 'Bootstrap Package: Full Package',
       'dependencies' => 
      array (
        0 => 'bootstrap-package/backend-layouts',
        1 => 'bootstrap-package/bootstrap-5',
        2 => 'bootstrap-package/content-elements',
        3 => 'bootstrap-package/cookie-consent',
        4 => 'bootstrap-package/google-font',
        5 => 'bootstrap-package/google-tag-manager',
        6 => 'bootstrap-package/rte',
        7 => 'bootstrap-package/skiplink',
      ),
       'optionalDependencies' => 
      array (
        0 => 'typo3/form',
        1 => 'typo3/seo-sitemap',
        2 => 'bootstrap-package/indexed-search',
        3 => 'bootstrap-package/container',
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.file',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Public/Images/BootstrapPackage.svg',
           'label' => 'Logo',
           'description' => 'Leave blank to use website title from template instead',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.fileInverted',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Public/Images/BootstrapPackageInverted.svg',
           'label' => 'Logo Inverted',
           'description' => 'Leave blank to use website title from template instead',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.height',
           'type' => 'number',
           'default' => 52,
           'label' => 'Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.width',
           'type' => 'number',
           'default' => 180,
           'label' => 'Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.alt',
           'type' => 'string',
           'default' => '',
           'label' => 'Alternative text',
           'description' => 'Text of the alt attribute of the logo image (default: "<website title> logo"',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.logo.linktitle',
           'type' => 'string',
           'default' => '',
           'label' => 'Link title',
           'description' => 'Title of the link attribute of the logo image',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.logo',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.favicon.file',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Public/Icons/favicon.ico',
           'label' => 'Favicon',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.favicon',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.style',
           'type' => 'string',
           'default' => 'default',
           'label' => 'Navigation Style',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'default' => 'Default',
            'default-transition' => 'Default Transition',
            'inverse' => 'Inverse',
            'inverse-transition' => 'Inverse Transition',
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.type',
           'type' => 'string',
           'default' => '',
           'label' => 'Navigation Style',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            '' => 'Default',
            'top' => 'Fixed',
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Navigation Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.icon.width',
           'type' => 'int',
           'default' => 20,
           'label' => 'Navigation Icon Width',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.icon.height',
           'type' => 'int',
           'default' => 20,
           'label' => 'Navigation Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.main',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.dropdown.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Dropdown Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.dropdown',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.dropdown.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'Dropdown Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.dropdown',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.navigation.dropdown.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'Dropdown Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.dropdown',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.subnavigation.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'SubNavigation Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.sub',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.subnavigation.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'SubNavigation Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.sub',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.subnavigation.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'SubNavigation Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.sub',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.enableLevel',
           'type' => 'int',
           'default' => 2,
           'label' => 'Show menu level if greater or equal to this value',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Breadcrumb Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'Breadcrumb Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.breadcrumb.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'Breadcrumb Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.breadcrumb',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.navigationValue',
           'type' => 'string',
           'default' => '',
           'label' => 'Values',
           'description' => 'Comma separated list of page uids',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        25 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.navigationType',
           'type' => 'string',
           'default' => 'list',
           'label' => 'Type',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'list' => 'List',
            'directory' => 'Directory',
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        26 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.meta.includeNotInMenu',
           'type' => 'bool',
           'default' => true,
           'label' => 'Include items not in menu',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        27 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        28 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.navigationValue',
           'type' => 'string',
           'default' => '',
           'label' => 'Values',
           'description' => 'Comma separated list of page uids',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        29 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.navigationType',
           'type' => 'string',
           'default' => 'list',
           'label' => 'Type',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'list' => 'List',
            'directory' => 'Directory',
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        30 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.includeNotInMenu',
           'type' => 'bool',
           'default' => true,
           'label' => 'Include items not in menu',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        31 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.levels',
           'type' => 'int',
           'default' => 2,
           'label' => 'Levels',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        32 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.icon.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Footer Icon Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        33 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.icon.width',
           'type' => 'int',
           'default' => 16,
           'label' => 'Footer Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        34 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.footernavigation.icon.height',
           'type' => 'int',
           'default' => 16,
           'label' => 'Footer Icon Height',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        35 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.language.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.language',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        36 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.language.languageValue',
           'type' => 'string',
           'default' => 'auto',
           'label' => 'Language Navigation',
           'description' => 'Comma separated list of language uids or set to "auto" to load all enabled system languages',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.navigation.language',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        37 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.enable',
           'type' => 'bool',
           'default' => false,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        38 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.label',
           'type' => 'string',
           'default' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/locallang.xlf:contact.label',
           'label' => 'Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        39 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.title',
           'type' => 'string',
           'default' => '',
           'label' => 'Title',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        40 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.addressLine1',
           'type' => 'string',
           'default' => '',
           'label' => 'Address Line 1',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        41 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.addressLine2',
           'type' => 'string',
           'default' => '',
           'label' => 'Address Line 2',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        42 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.addressLine3',
           'type' => 'string',
           'default' => '',
           'label' => 'Address Line 3',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        43 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.country',
           'type' => 'string',
           'default' => '',
           'label' => 'Country',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        44 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.phone',
           'type' => 'string',
           'default' => '',
           'label' => 'Phone',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        45 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.fax',
           'type' => 'string',
           'default' => '',
           'label' => 'Fax',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        46 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.email',
           'type' => 'string',
           'default' => '',
           'label' => 'Email',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        47 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.data.www',
           'type' => 'string',
           'default' => '',
           'label' => 'WWW',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.data',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        48 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.button.pageUid',
           'type' => 'int',
           'default' => 0,
           'label' => 'Page Uid',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.button',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        49 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.button.label',
           'type' => 'string',
           'default' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/locallang.xlf:contact.button.label',
           'label' => 'Page Uid',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.contact.button',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        50 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.contact.button.colorClass',
           'type' => 'string',
           'default' => 'primary',
           'label' => 'Class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            'primary' => 'primary',
            'secondary' => 'secondary',
          ),
           'category' => 'BootstrapPackage.contact.button',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        51 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.copyright.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.copyright',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        52 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.copyright.text',
           'type' => 'string',
           'default' => 'Running with <a href="http://www.typo3.org" rel="noopener" target="_blank">TYPO3</a> and <a href="https://www.bootstrap-package.com" rel="noopener" target="_blank">Bootstrap Package</a>.',
           'label' => 'Text',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.copyright',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        53 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'Enable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        54 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.facebook.label',
           'type' => 'string',
           'default' => 'Facebook',
           'label' => 'Facebook Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        55 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.facebook.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Facebook Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        56 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.x.label',
           'type' => 'string',
           'default' => 'X',
           'label' => 'X Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        57 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.x.url',
           'type' => 'string',
           'default' => '',
           'label' => 'X Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        58 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.bluesky.label',
           'type' => 'string',
           'default' => 'Bluesky',
           'label' => 'Bluesky Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        59 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.bluesky.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Bluesky Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        60 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.mastodon.label',
           'type' => 'string',
           'default' => 'Mastodon',
           'label' => 'Mastodon Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        61 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.mastodon.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Mastodon Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        62 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.threads.label',
           'type' => 'string',
           'default' => 'Threads',
           'label' => 'Threads Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        63 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.threads.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Threads Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        64 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.telegram.label',
           'type' => 'string',
           'default' => 'Telegram',
           'label' => 'Telegram Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        65 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.telegram.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Telegram Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        66 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.whatsapp.label',
           'type' => 'string',
           'default' => 'Whatsapp',
           'label' => 'Whatsapp Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        67 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.whatsapp.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Whatsapp Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        68 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.instagram.label',
           'type' => 'string',
           'default' => 'Instagram',
           'label' => 'Instagram Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        69 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.instagram.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Instagram Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        70 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.github.label',
           'type' => 'string',
           'default' => 'GitHub',
           'label' => 'GitHub Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        71 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.github.url',
           'type' => 'string',
           'default' => '',
           'label' => 'GitHub Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        72 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.researchgate.label',
           'type' => 'string',
           'default' => 'Research Gate',
           'label' => 'Research Gate Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        73 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.researchgate.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Research Gate Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        74 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.linkedin.label',
           'type' => 'string',
           'default' => 'LinkedIn',
           'label' => 'LinkedIn Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        75 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.linkedin.url',
           'type' => 'string',
           'default' => '',
           'label' => 'LinkedIn Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        76 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.xing.label',
           'type' => 'string',
           'default' => 'Xing',
           'label' => 'Xing Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        77 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.xing.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Xing Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        78 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.youtube.label',
           'type' => 'string',
           'default' => 'YouTube',
           'label' => 'YouTube Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        79 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.youtube.url',
           'type' => 'string',
           'default' => '',
           'label' => 'YouTube Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        80 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vk.label',
           'type' => 'string',
           'default' => 'VK',
           'label' => 'VK Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        81 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vk.url',
           'type' => 'string',
           'default' => '',
           'label' => 'VK Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        82 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vimeo.label',
           'type' => 'string',
           'default' => 'Vimeo',
           'label' => 'Vimeo Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        83 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.vimeo.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Vimeo Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        84 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.rss.label',
           'type' => 'string',
           'default' => 'RSS',
           'label' => 'RSS Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        85 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.rss.url',
           'type' => 'string',
           'default' => '',
           'label' => 'RSS Url',
           'description' => 'Insert the full account url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        86 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.discord.label',
           'type' => 'string',
           'default' => 'Discord',
           'label' => 'Discord Label',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        87 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.theme.socialmedia.channels.discord.url',
           'type' => 'string',
           'default' => '',
           'label' => 'Discord Url',
           'description' => 'Insert the full server url',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.socialmedia',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        88 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.fluidtemplate.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/Page/',
           'label' => 'Layout Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.page',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        89 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.fluidtemplate.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/Page/',
           'label' => 'Partial Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.page',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        90 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.fluidtemplate.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/Page/',
           'label' => 'Template Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.page',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        91 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_blocks.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/Blocks/',
           'label' => 'Layout Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.block',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        92 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_blocks.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/Blocks/',
           'label' => 'Partial Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.block',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        93 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package_blocks.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/Blocks/',
           'label' => 'Template Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.block',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        94 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Layouts/',
           'label' => 'Layout Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.plugin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        95 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Partials/',
           'label' => 'Partial Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.plugin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        96 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:bootstrap_package/Resources/Private/Templates/',
           'label' => 'Template Root Path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.templates.plugin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        97 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.cssSourceMapping',
           'type' => 'bool',
           'default' => false,
           'label' => 'CSS source mapping',
           'description' => 'Create a CSS source map useful to debug CSS in browser developer tools. Note: CSS compression will be disabled.',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.settings',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        98 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.bootstrap_package.settings.overrideParserVariables',
           'type' => 'bool',
           'default' => true,
           'label' => 'Override Parser Variables',
           'description' => 'If enabled the variables defined in your SCSS files will be overridden with the ones defined as Site Settings',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.settings',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        99 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.viewport',
           'type' => 'string',
           'default' => 'width=device-width, initial-scale=1, minimum-scale=1',
           'label' => 'viewport',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        100 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.robots',
           'type' => 'string',
           'default' => 'index,follow',
           'label' => 'robots',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        101 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.mobile-web-app-capable',
           'type' => 'string',
           'default' => 'no',
           'label' => 'mobile-web-app-capable',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        102 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.google',
           'type' => 'string',
           'default' => 'notranslate',
           'label' => 'google',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        103 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'page.meta.google-site-verification',
           'type' => 'string',
           'default' => '',
           'label' => 'google-site-verification',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.meta',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        104 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.no_cache',
           'type' => 'bool',
           'default' => false,
           'label' => 'No Cache',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        105 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.removeDefaultJS',
           'type' => 'string',
           'default' => '0',
           'label' => 'Remove default JavaScript',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            0 => 'Do not remove',
            1 => 'Remove',
            'external' => 'Move to external file',
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        106 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.compressJs',
           'type' => 'bool',
           'default' => true,
           'label' => 'Compress JavaScript',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        107 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.compressCss',
           'type' => 'bool',
           'default' => true,
           'label' => 'Compress CSS',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        108 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.concatenateJs',
           'type' => 'bool',
           'default' => true,
           'label' => 'Concatenate JavaScript',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        109 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.concatenateCss',
           'type' => 'bool',
           'default' => true,
           'label' => 'Concatenate CSS',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        110 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.admPanel',
           'type' => 'bool',
           'default' => true,
           'label' => 'Admin Panel',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        111 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.headerComment',
           'type' => 'string',
           'default' => 'Based on the TYPO3 Bootstrap Package by Benjamin Kott - https://www.bootstrap-package.com/',
           'label' => 'Header Comment',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        112 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'config.sendCacheHeaders',
           'type' => 'bool',
           'default' => true,
           'label' => 'Send cache headers',
           'description' => 'Allow appropriate caching by transparent proxies and browser clients',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'BootstrapPackage.config',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage',
           'label' => 'Bootstrap Package',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.logo',
           'label' => 'Logo',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.favicon',
           'label' => 'Favicon',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates',
           'label' => 'Templates',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates.page',
           'label' => 'Pages',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.templates',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates.block',
           'label' => 'Block',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.templates',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.templates.plugin',
           'label' => 'Plugin',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.templates',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation',
           'label' => 'Navigation',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.main',
           'label' => 'Main',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.dropdown',
           'label' => 'Dropdown',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.sub',
           'label' => 'Subnavigation',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.breadcrumb',
           'label' => 'Breadcrumb',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.meta',
           'label' => 'Meta',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.footer',
           'label' => 'Footer',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.navigation.language',
           'label' => 'Language',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.navigation',
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.contact',
           'label' => 'Contact',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.contact.data',
           'label' => 'Data',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.contact',
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.contact.button',
           'label' => 'Button',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage.contact',
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.copyright',
           'label' => 'Copyright',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.socialmedia',
           'label' => 'Social Media',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.meta',
           'label' => 'Meta',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.config',
           'label' => 'Config',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'BootstrapPackage.settings',
           'label' => 'Settings',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'BootstrapPackage',
        )),
      ),
       'typoscript' => 'EXT:bootstrap_package/Configuration/Sets/Full/',
       'pagets' => 'EXT:bootstrap_package/Configuration/Sets/Full/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'blog/static' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'blog/static',
       'label' => 'Blog: Static',
       'dependencies' => 
      array (
        0 => 'typo3/form',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:blog/Resources/Private/Templates/',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.view.templateRootPath',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.templates.frontend',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:blog/Resources/Private/Partials/',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.view.partialRootPath',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.templates.frontend',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:blog/Resources/Private/Layouts/',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.view.layoutRootPath',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.templates.frontend',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.view.emails.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:blog/Resources/Private/Mails/Templates/',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.view.emails.templateRootPath',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.view.emails.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.templates.email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.view.emails.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:blog/Resources/Private/Mails/Partials/',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.view.emails.partialRootPath',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.view.emails.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.templates.email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.view.emails.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:blog/Resources/Private/Mails/Layouts/',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.view.emails.layoutRootPath',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.view.emails.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.templates.email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.blogUid',
           'type' => 'page',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.blogUid',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.blogUid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.uids',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.authorUid',
           'type' => 'page',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.authorUid',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.authorUid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.uids',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.categoryUid',
           'type' => 'page',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.categoryUid',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.categoryUid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.uids',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.tagUid',
           'type' => 'page',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.tagUid',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.tagUid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.uids',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.archiveUid',
           'type' => 'page',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.archiveUid',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.archiveUid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.uids',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.storagePid',
           'type' => 'page',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.storagePid',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.storagePid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.uids',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.post.featuredImage.width',
           'type' => 'string',
           'default' => '1140',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.post.featuredImage.width',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.post.featuredImage.width',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.featuredimage',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.post.featuredImage.height',
           'type' => 'string',
           'default' => '400c',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.post.featuredImage.height',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.post.featuredImage.height',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.featuredimage',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.modifier',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.modifier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.modifier',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'simple',
            'condensed' => 'condensed',
            'extended' => 'extended',
            'modern' => 'modern',
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.authors.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.authors.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.authors.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.authors.avatar.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.authors.avatar.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.authors.avatar.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.authors.avatar.size',
           'type' => 'int',
           'default' => 20,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.authors.avatar.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.authors.avatar.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.categories.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.categories.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.categories.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.tags.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.tags.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.tags.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.published.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.published.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.published.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.published.format',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.published.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.published.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postheader.elements.comments.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postheader.elements.comments.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postheader.elements.comments.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        25 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.modifier',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.modifier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.modifier',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'simple',
            'condensed' => 'condensed',
            'extended' => 'extended',
            'modern' => 'modern',
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        26 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.authors.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.authors.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.authors.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        27 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.authors.avatar.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.authors.avatar.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.authors.avatar.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        28 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.authors.avatar.size',
           'type' => 'int',
           'default' => 20,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.authors.avatar.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.authors.avatar.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        29 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.categories.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.categories.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.categories.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        30 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.tags.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.tags.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.tags.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        31 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.published.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.published.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.published.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        32 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.published.format',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.published.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.published.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        33 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.postfooter.elements.comments.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.postfooter.elements.comments.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.postfooter.elements.comments.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_post.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        34 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.featuredImage.width',
           'type' => 'string',
           'default' => '1140',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.featuredImage.width',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.featuredImage.width',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.featuredimage',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        35 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.featuredImage.height',
           'type' => 'string',
           'default' => '400c',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.featuredImage.height',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.featuredImage.height',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.featuredimage',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        36 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        37 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.modifier',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.modifier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.modifier',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'simple',
            'condensed' => 'condensed',
            'extended' => 'extended',
            'modern' => 'modern',
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        38 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.authors.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.authors.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.authors.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        39 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.authors.avatar.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.authors.avatar.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.authors.avatar.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        40 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.authors.avatar.size',
           'type' => 'int',
           'default' => 20,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.authors.avatar.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.authors.avatar.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        41 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.categories.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.categories.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.categories.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        42 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.tags.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.tags.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.tags.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        43 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.published.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.published.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.published.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        44 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.published.format',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.published.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.published.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        45 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listheader.elements.comments.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listheader.elements.comments.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listheader.elements.comments.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementHeader',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        46 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        47 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.modifier',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.modifier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.modifier',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'simple',
            'condensed' => 'condensed',
            'extended' => 'extended',
            'modern' => 'modern',
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        48 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.authors.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.authors.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.authors.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        49 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.authors.avatar.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.authors.avatar.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.authors.avatar.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        50 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.authors.avatar.size',
           'type' => 'int',
           'default' => 20,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.authors.avatar.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.authors.avatar.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        51 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.categories.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.categories.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.categories.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        52 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.tags.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.tags.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.tags.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        53 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.published.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.published.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.published.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        54 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.published.format',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.published.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.published.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        55 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.listfooter.elements.comments.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.listfooter.elements.comments.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.listfooter.elements.comments.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_list.elementFooter',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        56 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        57 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.modifier',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.modifier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.modifier',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'simple',
            'condensed' => 'condensed',
            'extended' => 'extended',
            'modern' => 'modern',
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        58 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.authors.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.authors.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.authors.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        59 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.authors.avatar.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.authors.avatar.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.authors.avatar.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        60 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.authors.avatar.size',
           'type' => 'int',
           'default' => 20,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.authors.avatar.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.authors.avatar.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        61 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.categories.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.categories.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.categories.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        62 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.tags.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.tags.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.tags.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        63 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.published.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.published.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.published.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        64 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.published.format',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.published.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.published.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        65 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserheader.elements.comments.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserheader.elements.comments.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserheader.elements.comments.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.header',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        66 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        67 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.modifier',
           'type' => 'string',
           'default' => 'simple',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.modifier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.modifier',
           'readonly' => false,
           'enum' => 
          array (
            'simple' => 'simple',
            'condensed' => 'condensed',
            'extended' => 'extended',
            'modern' => 'modern',
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        68 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.authors.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.authors.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.authors.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        69 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.authors.avatar.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.authors.avatar.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.authors.avatar.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        70 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.authors.avatar.size',
           'type' => 'int',
           'default' => 20,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.authors.avatar.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.authors.avatar.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        71 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.categories.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.categories.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.categories.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        72 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.tags.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.tags.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.tags.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        73 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.published.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.published.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.published.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        74 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.published.format',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.published.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.published.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        75 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.meta.teaserfooter.elements.comments.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.meta.teaserfooter.elements.comments.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.meta.teaserfooter.elements.comments.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser.element.footer',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        76 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.posts.maximumDisplayedItems',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.posts.maximumDisplayedItems',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.posts.maximumDisplayedItems',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        77 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.posts.dateFormat',
           'type' => 'string',
           'default' => '%d.%m.%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.posts.dateFormat',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.posts.dateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        78 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.pagination.itemsPerPage',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.pagination.itemsPerPage',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.pagination.itemsPerPage',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.pagination',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        79 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.pagination.insertAbove',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.pagination.insertAbove',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.pagination.insertAbove',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.pagination',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        80 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.pagination.insertBelow',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.pagination.insertBelow',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.pagination.insertBelow',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.pagination',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        81 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.lists.pagination.maximumNumberOfLinks',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.lists.pagination.maximumNumberOfLinks',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.lists.pagination.maximumNumberOfLinks',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.pagination',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        82 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.archive.showCounter',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.archive.showCounter',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.archive.showCounter',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        83 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.archive.yearDateFormat',
           'type' => 'string',
           'default' => '%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.archive.yearDateFormat',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.archive.yearDateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        84 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.archive.monthDateFormat',
           'type' => 'string',
           'default' => '%B',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.archive.monthDateFormat',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.archive.monthDateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        85 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.relatedPosts.limit',
           'type' => 'int',
           'default' => 4,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.relatedPosts.limit',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.relatedPosts.limit',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.relatedPosts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        86 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.relatedPosts.categoryMultiplier',
           'type' => 'int',
           'default' => 1,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.relatedPosts.categoryMultiplier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.relatedPosts.categoryMultiplier',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.relatedPosts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        87 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.relatedPosts.tagMultiplier',
           'type' => 'int',
           'default' => 1,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.relatedPosts.tagMultiplier',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.relatedPosts.tagMultiplier',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.relatedPosts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        88 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.latestPosts.limit',
           'type' => 'int',
           'default' => 3,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.latestPosts.limit',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.latestPosts.limit',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.lists.latestPosts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        89 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.teaser.featuredImage.width',
           'type' => 'string',
           'default' => '1140',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.teaser.featuredImage.width',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.teaser.featuredImage.width',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        90 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.teaser.featuredImage.height',
           'type' => 'string',
           'default' => '400c',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.teaser.featuredImage.height',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.teaser.featuredImage.height',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog_teaser',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        91 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.comments.limit',
           'type' => 'int',
           'default' => 5,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.comments.limit',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.comments.limit',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.comments',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        92 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.recentposts.limit',
           'type' => 'int',
           'default' => 5,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.recentposts.limit',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.recentposts.limit',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.recent_posts',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        93 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.tags.limit',
           'type' => 'int',
           'default' => 5,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.tags.limit',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.tags.limit',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.tags',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        94 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.tags.minSize',
           'type' => 'int',
           'default' => 100,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.tags.minSize',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.tags.minSize',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.tags',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        95 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.tags.maxSize',
           'type' => 'int',
           'default' => 100,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.tags.maxSize',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.tags.maxSize',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.tags',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        96 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.archive.showCounter',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.archive.showCounter',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.archive.showCounter',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        97 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.archive.groupByYear',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.archive.groupByYear',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.archive.groupByYear',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        98 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.archive.groupByMonth',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.archive.groupByMonth',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.archive.groupByMonth',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        99 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.archive.yearDateFormat',
           'type' => 'string',
           'default' => '%Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.archive.yearDateFormat',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.archive.yearDateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        100 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.widgets.archive.monthDateFormat',
           'type' => 'string',
           'default' => '%B',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.widgets.archive.monthDateFormat',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.widgets.archive.monthDateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.widgets.archive',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        101 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.active',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.active',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.active',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        102 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.features.urls',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.features.urls',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.features.urls',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        103 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.moderation',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.moderation',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.moderation',
           'readonly' => false,
           'enum' => 
          array (
            0 => 0,
            1 => 1,
            2 => 2,
          ),
           'category' => 'blog.comments',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        104 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.respectPostLanguageId',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.respectPostLanguageId',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.respectPostLanguageId',
           'readonly' => false,
           'enum' => 
          array (
            0 => 0,
            1 => 1,
            -1 => -1,
          ),
           'category' => 'blog.comments',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        105 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.date.format',
           'type' => 'string',
           'default' => '%B %e, %Y',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.date.format',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.date.format',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        106 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.disqus.enable',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.disqus.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.disqus.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments.disqus',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        107 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.disqus.shortname',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.disqus.shortname',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.disqus.shortname',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments.disqus',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        108 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.google_recaptcha.enable',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.google_recaptcha.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.google_recaptcha.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments.googleRecaptcha',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        109 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.google_recaptcha.website_key',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.google_recaptcha.website_key',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.google_recaptcha.website_key',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments.googleRecaptcha',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        110 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.comments.google_recaptcha.secret_key',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.comments.google_recaptcha.secret_key',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.comments.google_recaptcha.secret_key',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.comments.googleRecaptcha',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        111 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.authors.avatar.provider.size',
           'type' => 'int',
           'default' => 72,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.authors.avatar.provider.size',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.authors.avatar.provider.size',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.authors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        112 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.authors.avatar.provider.default',
           'type' => 'string',
           'default' => 'mm',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.authors.avatar.provider.default',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.authors.avatar.provider.default',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.authors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        113 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.authors.avatar.provider.rating',
           'type' => 'string',
           'default' => 'g',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.authors.avatar.provider.rating',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.authors.avatar.provider.rating',
           'readonly' => false,
           'enum' => 
          array (
            'g' => 'g',
            'pg' => 'pg',
            'r' => 'r',
            'x' => 'x',
          ),
           'category' => 'blog.authors',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        114 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.notifications.email.senderName',
           'type' => 'string',
           'default' => 'TYPO3 Blog',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.notifications.email.senderName',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.notifications.email.senderName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.notifications',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        115 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.notifications.email.senderMail',
           'type' => 'string',
           'default' => 'no-reply@example.com',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.notifications.email.senderMail',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.notifications.email.senderMail',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.notifications',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        116 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.notifications.CommentAddedNotification.author.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.notifications.CommentAddedNotification.author.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.notifications.CommentAddedNotification.author.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.notifications',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        117 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.enable',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.enable',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.enable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.notifications',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        118 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.email',
           'type' => 'string',
           'default' => 'admin@example.com',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.email',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:settings.description.plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.email',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'blog.notifications',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.uids',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.uids',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.uids',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.templates',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.templates',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.templates',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.templates.frontend',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.templates.frontend',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.templates.frontend',
           'icon' => NULL,
           'parent' => 'blog.templates',
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.templates.email',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.templates.email',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.templates.email',
           'icon' => NULL,
           'parent' => 'blog.templates',
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.lists',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.lists',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.lists',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.lists.pagination',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.lists.pagination',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.lists.pagination',
           'icon' => NULL,
           'parent' => 'blog.lists',
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.lists.archive',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.lists.archive',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.lists.archive',
           'icon' => NULL,
           'parent' => 'blog.lists',
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.lists.relatedPosts',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.lists.relatedPosts',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.lists.relatedPosts',
           'icon' => NULL,
           'parent' => 'blog.lists',
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.lists.latestPosts',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.lists.latestPosts',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.lists.latestPosts',
           'icon' => NULL,
           'parent' => 'blog.lists',
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.widgets',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.widgets',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.widgets',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.widgets.comments',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.widgets.comments',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.widgets.comments',
           'icon' => NULL,
           'parent' => 'blog.widgets',
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.widgets.recent_posts',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.widgets.recent_posts',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.widgets.recent_posts',
           'icon' => NULL,
           'parent' => 'blog.widgets',
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.widgets.tags',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.widgets.tags',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.widgets.tags',
           'icon' => NULL,
           'parent' => 'blog.widgets',
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.widgets.archive',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.widgets.archive',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.widgets.archive',
           'icon' => NULL,
           'parent' => 'blog.widgets',
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.comments',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.comments',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.comments',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.comments.disqus',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.comments.disqus',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.comments.disqus',
           'icon' => NULL,
           'parent' => 'blog.comments',
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.comments.googleRecaptcha',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.comments.googleRecaptcha',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.comments.googleRecaptcha',
           'icon' => NULL,
           'parent' => 'blog.comments',
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.authors',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.authors',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.authors',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog.notifications',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog.notifications',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog.notifications',
           'icon' => NULL,
           'parent' => 'blog',
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_post',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_post',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_post',
           'icon' => NULL,
           'parent' => NULL,
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_post.featuredimage',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_post.featuredimage',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_post.featuredimage',
           'icon' => NULL,
           'parent' => 'blog_post',
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_post.header',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_post.header',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_post.header',
           'icon' => NULL,
           'parent' => 'blog_post',
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_post.footer',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_post.footer',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_post.footer',
           'icon' => NULL,
           'parent' => 'blog_post',
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_list',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_list',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_list',
           'icon' => NULL,
           'parent' => NULL,
        )),
        25 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_list.featuredimage',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_list.featuredimage',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_list.featuredimage',
           'icon' => NULL,
           'parent' => 'blog_list',
        )),
        26 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_list.elementHeader',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_list.elementHeader',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_list.elementHeader',
           'icon' => NULL,
           'parent' => 'blog_list',
        )),
        27 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_list.elementFooter',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_list.elementFooter',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_list.elementFooter',
           'icon' => NULL,
           'parent' => 'blog_list',
        )),
        28 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_teaser',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_teaser',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_teaser',
           'icon' => NULL,
           'parent' => NULL,
        )),
        29 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_teaser.element.header',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_teaser.element.header',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_teaser.element.header',
           'icon' => NULL,
           'parent' => 'blog_teaser',
        )),
        30 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'blog_teaser.element.footer',
           'label' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.blog_teaser.element.footer',
           'description' => 'LLL:EXT:blog/Configuration/Sets/Static/labels.xlf:categories.description.blog_teaser.element.footer',
           'icon' => NULL,
           'parent' => 'blog_teaser',
        )),
      ),
       'typoscript' => 'EXT:blog/Configuration/Sets/Static/',
       'pagets' => 'EXT:blog/Configuration/Sets/Static/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'blog/shared' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'blog/shared',
       'label' => 'Blog: Shared',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:blog/Configuration/Sets/Shared/',
       'pagets' => 'EXT:blog/Configuration/Sets/Shared/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => true,
       'routeEnhancers' => 
      array (
      ),
    )),
    'blog/integration' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'blog/integration',
       'label' => 'Blog: Integration',
       'dependencies' => 
      array (
        0 => 'blog/static',
        1 => 'blog/shared',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:blog/Configuration/Sets/Integration/',
       'pagets' => 'EXT:blog/Configuration/Sets/Integration/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'netresearch/rte-ckeditor-image' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'netresearch/rte-ckeditor-image',
       'label' => 'CKEditor Image Support',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
        0 => 'typo3/fluid-styled-content',
        1 => 'bootstrap-package/content-elements',
        2 => 'bootstrap-package/full',
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:rte_ckeditor_image/Configuration/Sets/RteCKEditorImage/',
       'pagets' => 'EXT:rte_ckeditor_image/Configuration/Sets/RteCKEditorImage/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'codingms/parsedown-extra-colorbox' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'codingms/parsedown-extra-colorbox',
       'label' => 'TYPO3 Parsedown-Extra - Colorbox',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.imgtext.linkWrap.lightboxEnabled',
           'type' => 'string',
           'default' => '1',
           'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_constants.xlf:tx_parsedownextra_constants.lightbox_enabled',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            0 => '0',
            1 => '1',
          ),
           'category' => NULL,
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.imgtext.linkWrap.lightboxCssClass',
           'type' => 'string',
           'default' => 'lightbox',
           'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_constants.xlf:tx_parsedownextra_constants.lightbox_css_class',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => NULL,
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.imgtext.linkWrap.lightboxRelAttribute',
           'type' => 'string',
           'default' => 'lightbox[{field:uid}]',
           'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_constants.xlf:tx_parsedownextra_constants.lightbox_rel_attribute',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => NULL,
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'themes.configuration.lightbox.colorbox.theme',
           'type' => 'string',
           'default' => '2',
           'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_constants.xlf:tx_parsedownextra_constants.lightbox_theme',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
            4 => '4',
            5 => '5',
          ),
           'category' => 'Lightbox.Colorbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'themes.configuration.lightbox.colorbox.cssUrl',
           'type' => 'string',
           'default' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/',
           'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_constants.xlf:tx_parsedownextra_constants.cssUrl',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'Lightbox.Colorbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'themes.configuration.lightbox.colorbox.jsUrl',
           'type' => 'string',
           'default' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/',
           'label' => 'LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_constants.xlf:tx_parsedownextra_constants.jsUrl',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'Lightbox.Colorbox',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'Lightbox',
           'label' => 'Lightbox',
           'description' => NULL,
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'Lightbox.Colorbox',
           'label' => 'Colorbox',
           'description' => NULL,
           'icon' => NULL,
           'parent' => 'Lightbox',
        )),
      ),
       'typoscript' => 'EXT:parsedown_extra/Configuration/Sets/Colorbox/',
       'pagets' => 'EXT:parsedown_extra/Configuration/Sets/Colorbox/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'codingms/parsedown-extra-stylesheet' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'codingms/parsedown-extra-stylesheet',
       'label' => 'TYPO3 Parsedown-Extra - Stylesheet',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:parsedown_extra/Configuration/Sets/Stylesheet/',
       'pagets' => 'EXT:parsedown_extra/Configuration/Sets/Stylesheet/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'eduardo-frank/efrank14' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'eduardo-frank/efrank14',
       'label' => 'efrank14',
       'dependencies' => 
      array (
        0 => 'bootstrap-package/full',
        1 => 'blog/integration',
        2 => 'codingms/parsedown-extra-stylesheet',
        3 => 'codingms/parsedown-extra-colorbox',
        4 => 'netresearch/rte-ckeditor-image',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:efrank14/Configuration/Sets/SitePackage/',
       'pagets' => 'EXT:efrank14/Configuration/Sets/SitePackage/page.tsconfig',
       'settings' => 
      array (
        'plugin.bootstrap_package.settings.scss.primary' => '#5bb8f0',
        'plugin.bootstrap_package.settings.scss.secondary' => '#3d8abf',
        'plugin.bootstrap_package.settings.scss.gray-800' => '#aaaaaa',
        'plugin.bootstrap_package.settings.scss.gray-900' => '#dcdcdc',
        'plugin.bootstrap_package.settings.scss.h1-font-size' => '$font-size-base * 1.75',
        'plugin.bootstrap_package.settings.scss.h2-font-size' => '$font-size-base * 1.5',
        'plugin.bootstrap_package.settings.scss.h3-font-size' => '$font-size-base * 1.25',
        'plugin.bootstrap_package.settings.scss.h4-font-size' => '$font-size-base * 1.15',
        'plugin.bootstrap_package.settings.scss.h5-font-size' => '$font-size-base * .95',
        'plugin.bootstrap_package.settings.scss.h6-font-size' => '$font-size-base * 0.8',
        'plugin.bootstrap_package.settings.scss.headings-line-height' => '.9',
        'page.logo.file' => 'EXT:efrank14/Resources/Public/Images/logo.svg',
        'page.logo.fileInverted' => 'EXT:efrank14/Resources/Public/Images/logo-inverted.svg',
        'page.logo.height' => 100,
        'page.logo.width' => 100,
        'page.logo.alt' => 'efrank logo',
        'page.logo.linktitle' => 'Eduardo Frank',
        'page.favicon.file' => 'EXT:efrank14/Resources/Public/Icons/favicon.ico',
        'page.fluidtemplate.layoutRootPath' => 'EXT:efrank14/Resources/Private/Layouts/Page/',
        'page.fluidtemplate.partialRootPath' => 'EXT:efrank14/Resources/Private/Partials/Page/',
        'page.fluidtemplate.templateRootPath' => 'EXT:efrank14/Resources/Private/Templates/Page/',
        'page.preloader.enable' => 0,
        'page.meta.author' => 'Eduardo Frank',
        'page.theme.cookieconsent.type' => 'info',
        'page.theme.copyright.text' => 'Made with <a href="http://www.typo3.org" rel="noopener" target="_blank">TYPO3</a> & <a href="https://www.bootstrap-package.com" rel="noopener" target="_blank">Bootstrap Package</a>.',
        'config.headerComment' => 'Integration by Eduardo Frank, based on the TYPO3 Bootstrap Package by Benjamin Kott - https://www.bootstrap-package.com/',
        'plugin.tx_blog.settings.blogUid' => 3,
        'plugin.tx_blog.settings.storagePid' => 7,
        'plugin.tx_blog.settings.categoryUid' => 8,
        'plugin.tx_blog.settings.tagUid' => 9,
        'plugin.tx_blog.settings.authorUid' => 10,
        'plugin.tx_blog.settings.archiveUid' => 11,
        'plugin.tx_blog.settings.lists.featuredImage.width' => 930,
        'plugin.tx_blog.settings.lists.featuredImage.height' => '414.11c',
        'plugin.tx_blog.settings.lists.pagination.itemsPerPage' => 4,
        'plugin.tx_blog.settings.comments.active' => 0,
        'plugin.tx_blog.settings.teaser.featuredImage.width' => 930,
        'plugin.tx_blog.settings.teaser.featuredImage.height' => '414.11c',
        'plugin.tx_blog.settings.post.featuredImage.width' => 930,
        'plugin.tx_blog.settings.post.featuredImage.height' => '414.11c',
        'plugin.tx_blog.view.partialRootPaths' => 'EXT:efrank14/Resources/Private/Partials/',
        'plugin.tx_blog.settings.meta.postheader.elements.categories.enable' => 1,
        'plugin.tx_blog.settings.meta.postheader.elements.tags.enable' => 1,
        'plugin.tx_blog.settings.meta.postfooter.elements.authors.enable' => 1,
        'plugin.tx_blog.settings.meta.postfooter.elements.published.enable' => 1,
        'plugin.tx_blog.settings.meta.listheader.enable' => 1,
        'plugin.tx_blog.settings.meta.listheader.modifier' => 'simple',
        'plugin.tx_blog.settings.meta.listheader.elements.published.enable' => 1,
        'plugin.tx_blog.settings.meta.listfooter.enable' => 1,
        'plugin.tx_blog.settings.meta.listfooter.modifier' => 'simple',
        'plugin.tx_blog.settings.meta.listfooter.elements.categories.enable' => 1,
        'plugin.tx_blog.settings.meta.listfooter.elements.tags.enable' => 1,
        'plugin.tx_blog.settings.relatedPosts.limit' => 0,
        'plugin.tx_blog.settings.notifications.CommentAddedNotification.admin.email' => 'efrank@eduardofrank.co',
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'codingms/fluid-fpdf' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'codingms/fluid-fpdf',
       'label' => 'TYPO3 Fluid-FPDF',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_fluidfpdf.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:fluid_fpdf/Resources/Private/Templates/',
           'label' => 'LLL:EXT:fluid_fpdf/Resources/Private/Language/locallang_constants.xlf:tx_fluidfpdf_constants.view_template_root_path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => NULL,
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_fluidfpdf.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:fluid_fpdf/Resources/Private/Partials/',
           'label' => 'LLL:EXT:fluid_fpdf/Resources/Private/Language/locallang_constants.xlf:tx_fluidfpdf_constants.view_partials_root_path',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => NULL,
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'plugin.tx_fluidfpdf.persistence.storagePid',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_fpdf/Resources/Private/Language/locallang_constants.xlf:tx_fluidfpdf_constants.storage_pid',
           'description' => NULL,
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => NULL,
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:fluid_fpdf/Configuration/Sets/General/',
       'pagets' => 'EXT:fluid_fpdf/Configuration/Sets/General/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'codingms/parsedown-extra-jquery' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'codingms/parsedown-extra-jquery',
       'label' => 'TYPO3 Parsedown-Extra - jQuery',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:parsedown_extra/Configuration/Sets/jQuery/',
       'pagets' => 'EXT:parsedown_extra/Configuration/Sets/jQuery/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'codingms/parsedown-extra-mermaidjs' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'codingms/parsedown-extra-mermaidjs',
       'label' => 'TYPO3 Parsedown-Extra - MermaidJs',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:parsedown_extra/Configuration/Sets/MermaidJs/',
       'pagets' => 'EXT:parsedown_extra/Configuration/Sets/MermaidJs/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'codingms/parsedown-extra-prismjs' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'codingms/parsedown-extra-prismjs',
       'label' => 'TYPO3 Parsedown-Extra - PrismJs',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:parsedown_extra/Configuration/Sets/PrismJs/',
       'pagets' => 'EXT:parsedown_extra/Configuration/Sets/PrismJs/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/email' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/email',
       'label' => 'TYPO3 Email Configuration',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.format',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.format',
           'readonly' => false,
           'enum' => 
          array (
            '' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.',
            'html' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.html',
            'plain' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.plain',
            'both' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.format.enum.both',
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.templateRootPaths',
           'type' => 'stringlist',
           'default' => 
          array (
            0 => '',
          ),
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.templateRootPaths',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.templateRootPaths',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.layoutRootPaths',
           'type' => 'stringlist',
           'default' => 
          array (
            0 => '',
          ),
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.layoutRootPaths',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.layoutRootPaths',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'email.partialRootPaths',
           'type' => 'stringlist',
           'default' => 
          array (
            0 => '',
          ),
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.email.partialRootPaths',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:settings.description.email.partialRootPaths',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'email',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'email',
           'label' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:categories.email',
           'description' => 'LLL:EXT:core/Configuration/Sets/Email/labels.xlf:categories.description.email',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:core/Configuration/Sets/Email/',
       'pagets' => 'EXT:core/Configuration/Sets/Email/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/felogin' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/felogin',
       'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.pid',
           'type' => 'string',
           'default' => '0',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.pid',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.pid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.recursive',
           'type' => 'string',
           'default' => '0',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.recursive',
           'readonly' => false,
           'enum' => 
          array (
            0 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.0',
            1 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.1',
            2 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.2',
            3 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.3',
            4 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.4',
            255 => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive.enum.255',
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showForgotPassword',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showForgotPassword',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showForgotPassword',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showPermaLogin',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showPermaLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showPermaLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showLogoutFormAfterLogin',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showLogoutFormAfterLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showLogoutFormAfterLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.emailFrom',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.emailFrom',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.emailFrom',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.emailFromName',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.emailFromName',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.emailFromName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.replyToEmail',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.replyToEmail',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.replyToEmail',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.dateFormat',
           'type' => 'string',
           'default' => 'Y-m-d H:i',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.dateFormat',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.dateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.layoutRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:felogin/Resources/Private/Email/Templates/',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.templateRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.partialRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.templateName',
           'type' => 'string',
           'default' => 'PasswordRecovery',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.templateName',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.templateName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectMode',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectMode',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectMode',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectFirstMethod',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectFirstMethod',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectFirstMethod',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLogin',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLoginError',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLoginError',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLoginError',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLogout',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLogout',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLogout',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectDisable',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectDisable',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectDisable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.forgotLinkHashValidTime',
           'type' => 'int',
           'default' => 12,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.forgotLinkHashValidTime',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.forgotLinkHashValidTime',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.domains',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.domains',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.domains',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.templateRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.templateRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.partialRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.layoutRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'felogin',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:categories.felogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:categories.description.felogin',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:felogin/Configuration/Sets/Felogin/',
       'pagets' => 'EXT:felogin/Configuration/Sets/Felogin/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
    'typo3/redirects' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/redirects',
       'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.autoUpdateSlugs',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.autoUpdateSlugs',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.autoUpdateSlugs',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.autoCreateRedirects',
           'type' => 'bool',
           'default' => true,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.autoCreateRedirects',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.autoCreateRedirects',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.redirectTTL',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.redirectTTL',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.redirectTTL',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'redirects.httpStatusCode',
           'type' => 'int',
           'default' => 307,
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.redirects.httpStatusCode',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:settings.description.redirects.httpStatusCode',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'redirects',
           'tags' => 
          array (
          ),
           'options' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'redirects',
           'label' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:categories.redirects',
           'description' => 'LLL:EXT:redirects/Configuration/Sets/redirects/labels.xlf:categories.description.redirects',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:redirects/Configuration/Sets/redirects/',
       'pagets' => 'EXT:redirects/Configuration/Sets/redirects/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
       'routeEnhancers' => 
      array (
      ),
    )),
  ),
  'invalidSets' => 
  array (
    'blog/standalone' => 
    array (
      'error' => 
      \TYPO3\CMS\Core\Site\Set\SetError::missingDependency,
      'name' => 'blog/standalone',
      'context' => 'typo3/fluid-styled-content',
    ),
  ),
);
#