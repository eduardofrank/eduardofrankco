<?php
return array (
  'pageTsConfig-set-bootstrap-package-content-elements' => 
  array (
    'filename' => '/var/www/html/vendor/bk2k/bootstrap-package/Configuration/Sets/ContentElements/page.tsconfig',
    'content' => '@import \'./PageTsConfig/*\'
',
  ),
  'pageTsConfig-set-bootstrap-package-backend-layouts' => 
  array (
    'filename' => '/var/www/html/vendor/bk2k/bootstrap-package/Configuration/Sets/BackendLayouts/page.tsconfig',
    'content' => '@import \'./PageTsConfig/\'
',
  ),
  'pageTsConfig-set-bootstrap-package-rte' => 
  array (
    'filename' => '/var/www/html/vendor/bk2k/bootstrap-package/Configuration/Sets/RTE/page.tsconfig',
    'content' => 'RTE {
    default {
        preset = bootstrap
    }
}

',
  ),
  'pageTsConfig-set-bootstrap-package-full' => 
  array (
    'filename' => '/var/www/html/vendor/bk2k/bootstrap-package/Configuration/Sets/Full/page.tsconfig',
    'content' => '@import \'./PageTsConfig/\'
',
  ),
  'pageTsConfig-set-blog-static' => 
  array (
    'filename' => '/var/www/html/vendor/t3g/blog/Configuration/Sets/Static/page.tsconfig',
    'content' => 'TCEFORM.pages.tags.PAGE_TSCONFIG_ID = {$plugin.tx_blog.settings.storagePid}
TCEFORM.pages.authors.PAGE_TSCONFIG_ID = {$plugin.tx_blog.settings.storagePid}
TCEFORM.pages.categories.PAGE_TSCONFIG_ID = {$plugin.tx_blog.settings.storagePid}
TCEFORM.tt_content.pi_flexform.blog_demandedposts.sDEF.settings\\.demand\\.authors.PAGE_TSCONFIG_ID = {$plugin.tx_blog.settings.storagePid}
TCEFORM.tt_content.pi_flexform.blog_demandedposts.sDEF.settings\\.demand\\.tags.PAGE_TSCONFIG_ID = {$plugin.tx_blog.settings.storagePid}
TCEFORM.tt_content.pi_flexform.blog_demandedposts.sDEF.settings\\.demand\\.categories.PAGE_TSCONFIG_ID = {$plugin.tx_blog.settings.storagePid}
',
  ),
  'pageTsConfig-set-netresearch-rte-ckeditor-image' => 
  array (
    'filename' => '/var/www/html/vendor/netresearch/rte-ckeditor-image/Configuration/Sets/RteCKEditorImage/page.tsconfig',
    'content' => '####################################################
# Page TSconfig for RTE CKEditor Image Site Set
####################################################
# This configures the Rich Text Editor to use our
# custom preset with image caption support

# Enable RTE preset with image support
RTE.default.preset = rteWithImages

# Configure image processing
RTE.default.proc.overruleMode := addToList(default)

RTE.default.buttons.image.options.magic {
    maxWidth = 1920
    maxHeight = 9999
}
',
  ),
  'pageTsConfig-set-eduardo-frank-efrank14' => 
  array (
    'filename' => '/var/www/html/vendor/eduardo-frank/efrank14/Configuration/Sets/SitePackage/page.tsconfig',
    'content' => '@import \'./PageTsConfig/BackendLayouts/\'

RTE {
    default {
        preset = efrank14
    }
}

TCEFORM {
    pages {

    }
    tt_content {

    }
}

TCEMAIN {

}

',
  ),
  'pageTsConfig-site-efrank_site_id' => 
  array (
    'filename' => '/var/www/html/config/sites/efrank_site_id/page.tsconfig',
    'content' => '',
  ),
);
#