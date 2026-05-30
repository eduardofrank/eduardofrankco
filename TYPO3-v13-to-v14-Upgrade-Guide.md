# TYPO3 v13 to v14 LTS Upgrade Guide

## Prerequisites

- TYPO3 v13.4.x LTS running and stable
- PHP 8.3 or higher
- Composer-based installation
- Full database backup before starting

## 1. Extension Compatibility

Verify all extensions have v14-compatible releases before upgrading. Key packages and their v14 targets:

| Package | v13 Version | v14 Target |
|---------|-------------|------------|
| `typo3/cms-*` (core) | `^13.4` | `^14.0` |
| `bk2k/bootstrap-package` | `^15.0` | `^16.0` |
| `t3g/blog` | `^13.0` | `^14.0` |
| `helhum/typo3-console` | `^8.3` | `^8.3` |
| `yoast-seo-for-typo3/yoast_seo` | `^12.0` | `^12.0` |

**Note:** Use `^14.0` for core packages, not `^14.4`. The LTS release is 14.3.x, so `^14.4` will fail to resolve.

## 2. Database Backup

```bash
ddev export-db --gzip=false --file=/path/to/pre-v14-backup.sql
```

Do not delete this backup until the upgrade is fully stable and deployed to production.

## 3. Site Package Migration

If your site package targets Bootstrap Package, create a new package for v16 compatibility. Key changes:

- Update `composer.json` with the new namespace and TYPO3 v14 constraints
- Update all PHP class namespaces
- Update all `EXT:old_package` references to `EXT:new_package`
- Update `Configuration/Sets/SitePackage/config.yaml` dependencies

## 4. Bootstrap Package v16 Breaking Changes

### Classic TypoScript Removed

Bootstrap Package v16 removed the `Configuration/TypoScript/` directory entirely. All TypoScript is now delivered exclusively via Site Sets.

**Impact:** Any `sys_template` record that includes Bootstrap Package via `include_static_file` will reference a non-existent path.

**Fix:** Remove Bootstrap Package entries from `include_static_file` in `sys_template` records. Ensure all TypoScript is loaded through Site Sets via the site configuration's `dependencies`.

### sys_template `clear` Field

If your `sys_template` record has `clear = 3` (clear constants + setup), it will also clear the Site Set TypoScript base layer, resulting in "No page configured for type=0".

**Fix:** Set `clear = 0` on the root `sys_template` record when using Site Sets.

## 5. Remove `typo3/cms-fluid-styled-content`

When using Bootstrap Package v16, **remove `typo3/cms-fluid-styled-content` from `composer.json`**.

Bootstrap Package v16 handles all content rendering via its own Site Sets. However, `fluid-styled-content` registers itself globally via `ext_localconf.php`:

```php
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';
```

This `contentRenderingTemplates` mechanism loads **after** Site Set TypoScript, overwriting Bootstrap Package's `lib.contentElement` definition with `fluid-styled-content` template paths. The result is template resolution errors like:

```
Failed to resolve a template file for templateName "CarouselSmall"
```

Since Bootstrap Package v16 no longer ships a `Configuration/TypoScript/` directory, its own `contentRenderingTemplates` registration is a no-op, leaving only `fluid-styled-content`'s paths active.

**Fix:**
```bash
composer remove typo3/cms-fluid-styled-content
```

Also remove `typo3/fluid-styled-content` and `typo3/fluid-styled-content-css` from your site configuration's `dependencies` in `config/sites/*/config.yaml`.

## 6. Site Configuration Dependencies

With Site Sets, the site configuration (`config/sites/*/config.yaml`) should list only your site package as a dependency. Your site package's own `config.yaml` pulls in everything else through its dependency chain.

```yaml
# config/sites/my_site/config.yaml
dependencies:
  - my-vendor/my-site-package
```

Your site package's `config.yaml`:
```yaml
# packages/my_site_package/Configuration/Sets/SitePackage/config.yaml
name: my-vendor/my-site-package
dependencies:
  - bootstrap-package/full
  - blog/integration
  # ... other dependencies
```

Do **not** list `typo3/fluid-styled-content` as a dependency.

## 7. `$GLOBALS['TSFE']` Removed

`TypoScriptFrontendController` (`$GLOBALS['TSFE']`) has been completely removed in TYPO3 v14. Code that accesses `$GLOBALS['TSFE']->page`, `$GLOBALS['TSFE']->id`, etc. will silently return `null`.

**Impact on Blog Extension:** The `blog/integration` Site Set uses TypoScript conditions `[blog.isPost()]` and `[blog.isPage()]` that internally rely on `$GLOBALS['TSFE']->page`. These conditions silently return `false` in v14, causing the blog's page templates (`BlogPost.html`, `BlogList.html`) to never be applied. Blog posts render with the default backend layout instead of the blog layout with sidebar.

**Fix:** Add equivalent conditions in your site package's `setup.typoscript` using TYPO3 v14's native syntax:

```typoscript
[page["doktype"] == 137 || page["doktype"] == 138]
page.10 {
    templateName >
    templateName = BlogList
    layoutRootPaths.-1579272243 = EXT:blog/Resources/Private/Layouts/Page/
    templateRootPaths.-1579272243 = EXT:blog/Resources/Private/Templates/Page/
}
[end]

[page["doktype"] == 137]
page.10.templateName = BlogPost
[end]
```

Where doktype 137 = Blog Post and 138 = Blog Page.

## 8. `external` Property Removed

The `external` property on TypoScript asset includes (CSS/JS) has been removed in v14. Absolute `https://` URLs are now auto-detected.

```typoscript
# v13
page.includeJSFooter.mermaid = https://cdn.example.com/lib.js
page.includeJSFooter.mermaid.external = 1

# v14 - remove the .external line
page.includeJSFooter.mermaid = https://cdn.example.com/lib.js
```

## 9. Update `composer.json`

```bash
# Update core packages
composer require "typo3/cms-core:^14.0" "typo3/cms-backend:^14.0" ... --no-update

# Update third-party packages
composer require "bk2k/bootstrap-package:^16.0" "t3g/blog:^14.0" --no-update

# Remove fluid-styled-content
composer remove typo3/cms-fluid-styled-content --no-update

# Run the update
composer update
```

If you encounter a `class-alias-loader` error during update:
```
Class "TYPO3\ClassAliasLoader\IncludeFile\CaseSensitiveToken" not found
```
Run `composer dump-autoload` and retry.

## 10. Run Upgrade Wizards

```bash
vendor/bin/typo3 upgrade:run
vendor/bin/typo3 extension:setup
vendor/bin/typo3 cache:flush
```

## 11. Database Reference Updates

If you switched site packages (renamed the extension), update stored references in the database:

- **Form FlexForm XML** in `tt_content`: `EXT:old_package` to `EXT:new_package`
- **Page TSconfig** in `pages`: RTE preset references, etc.
- **sys_template** `include_static_file`: remove obsolete entries

```sql
UPDATE tt_content SET pi_flexform = REPLACE(pi_flexform, 'EXT:old_package', 'EXT:new_package')
  WHERE CType = 'form_formframework' AND pi_flexform LIKE '%EXT:old_package%';

UPDATE pages SET TSconfig = REPLACE(TSconfig, 'old_package', 'new_package')
  WHERE TSconfig LIKE '%old_package%';
```

## 12. Verification Checklist

After upgrading, verify:

- [ ] `vendor/bin/typo3 --version` shows 14.x
- [ ] Homepage renders correctly
- [ ] All languages work
- [ ] Blog list and single post views render with sidebar
- [ ] Mermaid or other JS-rendered content works
- [ ] CKEditor with image insertion works in backend
- [ ] Contact/other forms submit correctly
- [ ] Backend dashboard and custom widgets load
- [ ] Dark/light theme applied correctly
- [ ] Breadcrumbs display correctly
- [ ] 404 error page works
- [ ] No PHP errors in `var/log/`

## 13. Deployment

Standard deployment process:

1. Commit all changes
2. Push to remote
3. On production: `git pull && composer install --no-dev`
4. Run database updates: `vendor/bin/typo3 upgrade:run`
5. Update DB references (Section 11) if site package was renamed
6. Flush caches: `vendor/bin/typo3 cache:flush`
