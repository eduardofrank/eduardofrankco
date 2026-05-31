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

Do not delete this backup until the upgrade is fully stable and deployed to production. (When a rename/migration is involved, keep it indefinitely — a "cleanup" delete has caused real data loss.)

## 3. Pre-Upgrade Deprecation Scan

Before touching constraints, find deprecated/removed API usage in your own code and extensions so you can fix it on v13 first (code that is deprecated-but-present in v13 is frequently *removed* in v14).

- **Extension Scanner** — Admin Tools → Upgrade → "Scan Extension Files". Flags uses of deprecated/removed core API (e.g. `$GLOBALS['TSFE']`) in your site package and third-party extensions. "Strong" matches are almost always real; "weak" matches need a manual look.
- **Deprecation log** — run the site and watch `var/log/typo3_deprecations_*.log` for runtime notices (deprecated APIs, FlexForm on-the-fly migrations, TypoScript).
- **Upgrade wizard list** — `vendor/bin/typo3 upgrade:list` shows which database/structure wizards will need to run.
- **Reports / lowlevel** — the Reports module and System → Configuration help spot misconfiguration before and after the jump.

## 4. Site Package Migration

If your site package targets Bootstrap Package, create a new package for v16 compatibility. Key changes:

- Update `composer.json` with the new namespace and TYPO3 v14 constraints
- Update all PHP class namespaces
- Update all `EXT:old_package` references to `EXT:new_package`
- Update `Configuration/Sets/SitePackage/config.yaml` dependencies

## 5. Bootstrap Package v16 Breaking Changes

### Classic TypoScript Removed

Bootstrap Package v16 removed the `Configuration/TypoScript/` directory entirely. All TypoScript is now delivered exclusively via Site Sets.

**Impact:** Any `sys_template` record that includes Bootstrap Package via `include_static_file` will reference a non-existent path.

**Fix:** Remove Bootstrap Package entries from `include_static_file` in `sys_template` records. Ensure all TypoScript is loaded through Site Sets via the site configuration's `dependencies`.

### sys_template `clear` Field

If your `sys_template` record has `clear = 3` (clear constants + setup), it will also clear the Site Set TypoScript base layer, resulting in "No page configured for type=0".

**Fix:** Set `clear = 0` on the root `sys_template` record when using Site Sets.

## 6. Remove `typo3/cms-fluid-styled-content`

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

## 7. Site Configuration Dependencies

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

## 8. `$GLOBALS['TSFE']` Removed

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

## 9. `external` Property Removed

The `external` property on TypoScript asset includes (CSS/JS) has been removed in v14. Absolute `https://` URLs are now auto-detected.

```typoscript
# v13
page.includeJSFooter.mermaid = https://cdn.example.com/lib.js
page.includeJSFooter.mermaid.external = 1

# v14 - remove the .external line
page.includeJSFooter.mermaid = https://cdn.example.com/lib.js
```

## 10. ext:form — Migrate Custom Form YAML to Auto-Discovery (v14.2)

TYPO3 **v14.2 (#109412)** deprecated TypoScript registration of custom form YAML —
`plugin.tx_form.settings.yamlConfigurations` and `module.tx_form.settings.yamlConfigurations` —
in favour of **auto-discovery**. If you don't migrate, the backend stops loading
`persistenceManager.allowedExtensionPaths`, so the form plugin shows **"no read access"**
(and a 503 once the referenced YAML file is removed). See Issues Log #9.

**Migrate:** create `packages/<site-package>/Configuration/Form/<SetName>/config.yaml` with the
metadata keys plus the form config at the **top level** (drop the old `TYPO3.CMS.Form` wrapper):

```yaml
name: my-vendor/my-forms
label: 'My Form Configuration'
priority: 200            # core base set is priority 10
persistenceManager:
  allowSaveToExtensionPaths: true
  allowDeleteFromExtensionPaths: true
  allowedExtensionPaths:
    200: 'EXT:my_package/Resources/Private/Forms/'
prototypes:
  standard:
    formElementsDefinition:
      Form:
        renderingOptions:
          translation:
            translationFiles:
              10: 'EXT:form/Resources/Private/Language/locallang.xlf'
              20: 'EXT:my_package/Resources/Private/Language/locallang.xlf'
```

Then delete the old `Configuration/Yaml/*.yaml` and remove the `yamlConfigurations` lines from
`setup.typoscript`. The config is auto-loaded for **both** frontend and backend. Verify with
`TYPO3\CMS\Form\Mvc\Configuration\FormYamlCollector::getAllConfigurations()` or in
System → Configuration → "Form: YAML Configuration".

**Also (v14.2):** the **file-based form storage adapter** (form definitions stored under
`1:/form_definitions/` in fileadmin) is deprecated. Prefer **extension storage**
(`EXT:my_package/Resources/Private/Forms/`, version-controlled) or **database storage**.
`public/fileadmin/` is commonly gitignored, so fileadmin-stored forms aren't deployed and drift
between environments — another reason to move them into the package.

## 11. Update `composer.json`

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

## 12. Run Upgrade Wizards

```bash
vendor/bin/typo3 upgrade:run
vendor/bin/typo3 extension:setup
vendor/bin/typo3 cache:flush
```

## 13. Database Reference Updates

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

Search broadly — any text/blob column can hold an `EXT:` path. Note that the **form plugin
stores which form an element loads in `tt_content.pi_flexform`** (`settings.persistenceIdentifier`),
not in the package, so a deploy never changes it; fix it in the DB or by re-selecting the form
in the backend.

## 14. Verification Checklist

After upgrading, verify:

- [ ] `vendor/bin/typo3 --version` shows 14.x
- [ ] Homepage renders correctly
- [ ] All languages work
- [ ] Blog list and single post views render with sidebar
- [ ] Mermaid or other JS-rendered content works
- [ ] CKEditor with image insertion works in backend
- [ ] Contact/other forms submit correctly — test the actual **POST**, not just that the page loads. DDEV routes mail to **mailpit**, so SMTP/mail failures will not reproduce locally; verify on a real environment.
- [ ] Form definitions load: System → Configuration → "Form: YAML Configuration" lists your set, and the backend form plugin shows the form (no "no read access")
- [ ] Backend dashboard and custom widgets load
- [ ] Dark/light theme applied correctly
- [ ] Breadcrumbs display correctly
- [ ] 404 error page works
- [ ] No PHP errors in `var/log/`

## 15. Deployment

Standard deployment process:

1. Commit all changes
2. Push to remote
3. On production: `git pull && composer install --no-dev`
4. Run database updates: `vendor/bin/typo3 upgrade:run`
5. Update DB references (Section 13) if site package was renamed
6. Flush caches: `vendor/bin/typo3 cache:flush`

Deployment gotchas worth checking (see TYPO3-v14-Upgrade-Issues-Log.md #10):

- **Know your site-package model.** If the package is *plain files* in the main repo, a plain `git pull` updates it. If it's a *git submodule*, also run `git submodule update` — a `git pull` only moves the submodule pointer, leaving the package files on the old commit.
- **Clear the compiled TypoScript** for any TypoScript / YAML / form change: `rm -f var/cache/code/typoscript/*.php` then `cache:flush`. A generic flush does not stick if an on-disk source is still wrong — every page load regenerates the compiled TypoScript from it.
- **Verify the deploy actually landed.** Use `git show --stat <sha>` to confirm the commit contains every intended file (a partial `git add` can silently omit one), and `grep` the changed file on the server to confirm it updated.
- **Gitignored, env-specific files don't deploy.** `config/system/settings.php` (SMTP/secrets) and `public/fileadmin/` are typically gitignored — apply changes such as SMTP settings directly on each environment.
