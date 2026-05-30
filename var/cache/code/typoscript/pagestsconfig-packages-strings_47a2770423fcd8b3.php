<?php
return unserialize('a:14:{s:26:"pagesTsConfig-package-core";a:2:{s:8:"filename";s:63:"/var/www/html/vendor/typo3/cms-core/Configuration/page.tsconfig";s:7:"content";s:46:"TCEMAIN.translateToMessage = Translate to %s:
";}s:29:"pagesTsConfig-package-backend";a:2:{s:8:"filename";s:66:"/var/www/html/vendor/typo3/cms-backend/Configuration/page.tsconfig";s:7:"content";s:1990:"# Register default link handlers
TCEMAIN.linkHandler {
  page {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\PageLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:page
  }
  url {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\UrlLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:extUrl
    displayAfter = page,file,folder
    scanAfter = telephone
  }
  email {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\MailLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:email
    displayAfter = page,file,folder,url
    scanBefore = url
  }
  telephone {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\TelephoneLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:telephone
    displayAfter = page,file,folder,url,mail
    scanBefore = url
  }
}

mod.web_list {
  enableClipBoard = selectable
  tableDisplayOrder {
    be_users.after = be_groups
    sys_filemounts.after = be_users
    sys_file_storage.after = sys_filemounts
    fe_users.after = fe_groups
    fe_users.before = pages
    sys_template.after = pages
    backend_layout.after = pages
    tt_content.after = pages,backend_layout,sys_template
    sys_category.after = tt_content
  }
  searchLevel.items {
    -1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.infinite
    0 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.0
    1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.1
    2 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.2
    3 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.3
    4 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.4
  }
}

# dummy placeholders for item groups
mod.wizards {
  newRecord.pages.show {
    pageInside = 1
    pageAfter = 1
    pageSelectPosition = 1
  }
}
";}s:30:"pagesTsConfig-package-frontend";a:2:{s:8:"filename";s:67:"/var/www/html/vendor/typo3/cms-frontend/Configuration/page.tsconfig";s:7:"content";s:124:"TCEFORM.tt_content {
  imageorient {
    types {
      image {
        removeItems = 8,9,10,17,18,25,26
      }
    }
  }
}
";}s:30:"pagesTsConfig-package-filelist";a:2:{s:8:"filename";s:67:"/var/www/html/vendor/typo3/cms-filelist/Configuration/page.tsconfig";s:7:"content";s:477:"# Register link handlers
TCEMAIN.linkHandler {
  file {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FileLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:file
    displayAfter = page
    scanAfter = page
  }
  folder {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FolderLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:folder
    displayAfter = page,file
    scanAfter = page,file
  }
}
";}s:26:"pagesTsConfig-package-form";a:2:{s:8:"filename";s:63:"/var/www/html/vendor/typo3/cms-form/Configuration/page.tsconfig";s:7:"content";s:242:"# Deny creating form_definition records via the "New Record" wizard
# or the "+" button in the record list. Form definitions should only
# be created through the Form Manager module.
mod.web_list.deniedNewTables := addToList(form_definition)
";}s:25:"pagesTsConfig-package-seo";a:2:{s:8:"filename";s:62:"/var/www/html/vendor/typo3/cms-seo/Configuration/page.tsconfig";s:7:"content";s:431:"mod.web_info.fieldDefinitions {
  seo {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:seo
    fields = title,uid,slug,seo_title,description,no_index,no_follow,canonical_link,sitemap_changefreq,sitemap_priority
  }
  social_media {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:social_media
    fields = title,uid,og_title,og_description,twitter_title,twitter_description
  }
}
";}s:35:"pagesTsConfig-package-linkvalidator";a:2:{s:8:"filename";s:72:"/var/www/html/vendor/typo3/cms-linkvalidator/Configuration/page.tsconfig";s:7:"content";s:1621:"mod.linkvalidator {

  # specify fields to be crawled
  searchFields {
    # pages.media: forward compatibility, not yet supported (type=file not as softref), but may be in the future
    pages = link, media, canonical_link
    # tt_content.records: forward compatibility, not yet supported (type=group not as softref), but may be in the future
    tt_content = bodytext, header_link, records
    sys_file_reference = link
    sys_redirect = target
  }

  # specify link types to be crawled
  #   !!! external link types are currently not checked by default, see "Known problems" in documentation
  #   https://docs.typo3.org/c/typo3/cms-linkvalidator/main/en-us/KnownProblems/Index.html
  linktypes = db,file

  linktypesConfig {
    external {

      # User-Agent string is filled with information about the crawling site
      httpAgentName = TYPO3 LinkValidator
      httpAgentUrl =
      httpAgentEmail =

      headers {

      }

      method = HEAD

      range = 0-4048

      # This is the total timeout of the request in
      # seconds.
      # If set, this overrides the timeout in $GLOBALS[\'TYPO3_CONF_VARS\'][\'HTTP\'][\'timeout\'].
      # which defaults to 0.
      #
      # WARNING:
      #   A value 0 means no timeout, which may mean that the request never ends
      #   and can also result in scheduler tasks to run indefinitely.
      timeout = 20
    }
  }

  checkhidden = 0
  showCheckLinkTab = 1
  # recheck | setNeedsRecheck
  actionAfterEditRecord = recheck
  mail {
    fromname = LinkValidator
    fromemail =
    replytoname =
    replytoemail =
    subject = TYPO3 LinkValidator report
  }
}
";}s:26:"pagesTsConfig-package-info";a:2:{s:8:"filename";s:63:"/var/www/html/vendor/typo3/cms-info/Configuration/page.tsconfig";s:7:"content";s:823:"mod.web_info.fieldDefinitions {
    0 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_0
        fields = title,uid,sys_language_uid,slug,starttime,endtime,fe_group,target,link,shortcut,shortcut_mode
    }
    1 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_1
        fields = title,uid,###ALL_TABLES###
    }
    2 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_2
        fields = title,uid,sys_language_uid,lastUpdated,newUntil,cache_timeout,php_tree_stop,TSconfig,is_siteroot
    }
    3 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_layouts
        fields = title,uid,sys_language_uid,actual_backend_layout,backend_layout,backend_layout_next_level,layout
    }
}
";}s:30:"pagesTsConfig-package-viewpage";a:2:{s:8:"filename";s:67:"/var/www/html/vendor/typo3/cms-viewpage/Configuration/page.tsconfig";s:7:"content";s:1055:"mod.web_view.previewFrameWidths {
    phone {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:mobile
        type = mobile
        width = 390
        height = 844
    }
    tabletPortrait {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:tabletPortrait
        type = tablet
        width = 768
        height = 1024
    }
    tabletLandscape {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:tabletLandscape
        type = tablet
        width = 1024
        height = 768
    }
    1280 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1280
        height = 1024
    }
    1440 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1440
        height = 1024
    }
    1920 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1920
        height = 1080
    }
}
";}s:32:"pagesTsConfig-package-workspaces";a:2:{s:8:"filename";s:69:"/var/www/html/vendor/typo3/cms-workspaces/Configuration/page.tsconfig";s:7:"content";s:299:"tx_workspaces.emails.layoutRootPaths.90 = EXT:workspaces/Resources/Private/Layouts/
tx_workspaces.emails.partialRootPaths.90 = EXT:workspaces/Resources/Private/Partials/
tx_workspaces.emails.templateRootPaths.90 = EXT:workspaces/Resources/Private/Templates/Email/
tx_workspaces.emails.format = html
";}s:31:"pagesTsConfig-package-yoast_seo";a:2:{s:8:"filename";s:78:"/var/www/html/vendor/yoast-seo-for-typo3/yoast_seo/Configuration/page.tsconfig";s:7:"content";s:101:"templates.yoast-seo-for-typo3/yoast_seo {
    10 = yoast-seo-for-typo3/yoast_seo:Resources/Private
}
";}s:26:"pagesTsConfig-package-blog";a:2:{s:8:"filename";s:57:"/var/www/html/vendor/t3g/blog/Configuration/page.tsconfig";s:7:"content";s:885:"mod.wizards.newContentElement.wizardItems {
    blog {
        after = common, menu, special, forms, plugins
        header = LLL:EXT:blog/Resources/Private/Language/locallang_db.xlf:wizard.group.blog
        removeItems := addToList(blog_authors)
        removeItems := addToList(blog_commentform)
        removeItems := addToList(blog_comments)
        removeItems := addToList(blog_footer)
        removeItems := addToList(blog_header)
        removeItems := addToList(blog_relatedposts)
        removeItems := addToList(blog_sidebar)
    }
}

TCEFORM.tt_content.CType {
    removeItems := addToList(blog_authors)
    removeItems := addToList(blog_commentform)
    removeItems := addToList(blog_comments)
    removeItems := addToList(blog_footer)
    removeItems := addToList(blog_header)
    removeItems := addToList(blog_relatedposts)
    removeItems := addToList(blog_sidebar)
}
";}s:32:"pagesTsConfig-package-fluid_fpdf";a:2:{s:8:"filename";s:68:"/var/www/html/vendor/codingms/fluid-fpdf/Configuration/page.tsconfig";s:7:"content";s:66:"@import \'EXT:fluid_fpdf/Configuration/PageTS/tsconfig.typoscript\'
";}s:37:"pagesTsConfig-package-parsedown_extra";a:2:{s:8:"filename";s:73:"/var/www/html/vendor/codingms/parsedown-extra/Configuration/page.tsconfig";s:7:"content";s:687:"mod.wizards.newContentElement.wizardItems {
    special {
        show = *
        elements {
            parsedown {
                title = LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_newcontentelementwizard.xlf:tx_parsedownextra_newcontentelementwizard_parsedown.title
                description = LLL:EXT:parsedown_extra/Resources/Private/Language/locallang_newcontentelementwizard.xlf:tx_parsedownextra_newcontentelementwizard_parsedown.description
                iconIdentifier = content-plugin-parsedownextra-parsedown
                tt_content_defValues {
                    CType = parsedownextra_parsedown
                }
            }
        }
    }
}
";}}');
#