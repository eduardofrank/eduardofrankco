# TYPO3 v14 Upgrade - Issues Fixed

Issues encountered and resolved during the v13 to v14 upgrade. These are site-specific or edge-case problems that may not apply to every upgrade.

## 1. Form Content Elements Showing Twice

**Symptom:** Contact form rendered twice on translated pages (German, English).

**Cause:** The three language variants of the form content element (Spanish, German, English) all had `l18n_parent = 0`, meaning they were not connected as translations. In TYPO3's `fallback` language mode, the system showed both the language-specific record and the fallback (default language) record because it didn't know they were related.

**Fix:** Connected the translation records by setting `l18n_parent` and `l10n_source` on the German and English records to point to the Spanish original:

```sql
UPDATE tt_content SET l18n_parent = <original_uid>, l10n_source = <original_uid>
  WHERE uid IN (<german_uid>, <english_uid>);
```

**Lesson:** When using `fallbackType: fallback` in site language configuration, ensure all translated content elements have proper `l18n_parent` values. Unconnected records (free mode) will cause duplicates in fallback mode.

## 2. Form Textarea Unreadable in Dark Theme

**Symptom:** The message textarea had a light background with light-colored text, making it impossible to read.

**Cause:** Bootstrap's `data-bs-theme="dark"` did not fully propagate to `.form-control` elements rendered by `ext:form`. The Bootstrap Package's compiled SCSS did not include dark-mode overrides for form inputs.

**Fix:** Added explicit dark theme styles in the site package CSS:

```css
.form-control,
.form-select {
    background-color: var(--sf);
    color: var(--tx);
    border-color: var(--bd);
}

.form-control:focus,
.form-select:focus {
    background-color: var(--sa);
    color: var(--tx);
    border-color: var(--primary);
}
```

## 3. Navbar Background Gradient

**Symptom:** The main navigation bar displayed a grey gradient instead of a solid color, caused by the carousel/hero image bleeding through.

**Cause:** The navbar lacked explicit declarations to prevent background images or backdrop effects from showing through.

**Fix:** Added `background-image: none` and `backdrop-filter: none` to the navbar CSS:

```css
.navbar-mainnavigation {
    background-color: var(--sf) !important;
    background-image: none !important;
    backdrop-filter: none !important;
}
```

## 4. Composer Constraint: `^14.4` vs `^14.0`

**Symptom:** `composer update` failed to resolve TYPO3 core packages.

**Cause:** The constraint `^14.4` was used, but the TYPO3 v14 LTS release is 14.3.x. The `^14.4` constraint requires a minimum of 14.4.0 which doesn't exist.

**Fix:** Changed all `typo3/cms-*` constraints from `^14.4` to `^14.0`.

## 5. `netresearch/rte-ckeditor-image` Has No v14 Release

**Symptom:** `composer require netresearch/rte-ckeditor-image:^14.0` failed.

**Cause:** The package's v13.x releases already support TYPO3 v14 via their version constraints. No separate v14 branch was published.

**Fix:** Kept the constraint at `^13.0`.

## 6. class-alias-loader Error During Composer Update

**Symptom:**
```
Class "TYPO3\ClassAliasLoader\IncludeFile\CaseSensitiveToken" not found
```

**Fix:** Run `composer dump-autoload` before retrying the update.

## 7. SMTP `transport_smtp_encrypt` Must Be Boolean

**Symptom:** Contact form submissions failed with `stream_socket_enable_crypto(): SSL operation failed` and `wrong version number` errors.

**Cause:** `transport_smtp_encrypt` was set to `'starttls'` (a string). Since TYPO3 v10.4 (changelog #91070), this setting is a **boolean**: `false` = auto-negotiate STARTTLS (port 587), `true` = implicit SSL (port 465). The string `'starttls'` is truthy in PHP, so it was treated as `true`, causing Symfony Mailer to open an `ssl://` connection on port 587 — which Gmail rejects.

**Fix:** Set `transport_smtp_encrypt` to `false` (boolean, no quotes) in `config/system/settings.php`:

```php
'transport_smtp_encrypt' => false,
'transport_smtp_server' => 'smtp.gmail.com:587',
```

**Lesson:** Always use `false` for STARTTLS on port 587 and `true` for implicit SSL on port 465. Never use string values.

## 8. Gmail Deduplicates Emails When Sender Equals Recipient

**Symptom:** Contact form emails appeared in Gmail's Sent folder but never arrived in the Inbox. Not in spam either.

**Cause:** The SMTP sender account (`eduardocfrankr@gmail.com`) was also the final recipient — `info@eduardofrank.co` was forwarded back to the same Gmail via Cloudflare Email Routing. Gmail deduplicates by message-id: if the sending account and receiving account are the same, the message only appears in Sent.

**Fix:** Forward `info@eduardofrank.co` to a different email address than the one used for SMTP sending. Alternatively, use a different Gmail account as the SMTP sender.

## 9. Form Plugin "No Read Access" / 503 — Form YAML Registration Deprecated (v14.2)

**Symptom:** In the backend, the form plugin on the contact page (page id=4) showed `"…" (no read access)`. After removing the old config YAML, opening that page in the Web → Layout module threw a 503:

```
An error occurred while parsing file "EXT:efrank14/Configuration/Yaml/CustomFormSetup.yaml":
YAML file "EXT:efrank14/Configuration/Yaml/CustomFormSetup.yaml" does not contain data.
```

**Cause:** TYPO3 v14.2 (changelog #109412) **deprecated** TypoScript-based registration of custom form YAML (`plugin.tx_form.settings.yamlConfigurations` / `module.tx_form.settings.yamlConfigurations`) in favour of **auto-discovery**. The backend stopped loading `persistenceManager.allowedExtensionPaths` from the old TypoScript registration, so `EXT:efrank14/Resources/Private/Forms/` was no longer an allowed extension folder → the form definition could not be read ("no read access"). Once the referenced YAML file was deleted, the still-cached registration pointed at a missing file and fataled.

**Fix:** Migrate to the auto-discovery convention. Create `EXT:efrank14/Configuration/Form/EfrankForms/config.yaml` — metadata keys plus the form config at the top level (drop the old `TYPO3.CMS.Form` wrapper):

```yaml
name: eduardo-frank/efrank14-forms
label: 'efrank14 Form Configuration'
priority: 200            # core base set is priority 10
persistenceManager:
  allowSaveToExtensionPaths: true
  allowDeleteFromExtensionPaths: true
  allowedExtensionPaths:
    200: 'EXT:efrank14/Resources/Private/Forms/'
prototypes:
  standard:
    formElementsDefinition:
      Form:
        renderingOptions:
          translation:
            translationFiles:
              10: 'EXT:form/Resources/Private/Language/locallang.xlf'
              20: 'EXT:efrank14/Resources/Private/Language/locallang.xlf'
```

Then delete `Configuration/Yaml/CustomFormSetup.yaml`, remove the two `yamlConfigurations` lines from `setup.typoscript`, and flush caches.

**Verify:** the public service `TYPO3\CMS\Form\Mvc\Configuration\FormYamlCollector::getAllConfigurations()` should list the new `config.yaml` alongside `EXT:form/Configuration/Form/Base/config.yaml`. Load the form's page on the frontend to confirm read access end-to-end.

**Lesson:** From v14.2, form YAML is auto-loaded for **both** frontend and backend from `Configuration/Form/<SetName>/config.yaml` — no TypoScript or PHP registration needed. The old registration still works during the deprecation window but is removed in v15.

## 10. Deployment Drift — Incomplete Commit + Dual-Tracked Site Package

**Symptom:** The Issue 9 fix worked in local DDEV, but production's page id=4 kept throwing the same 503 even after `git pull` + cache flush.

**Cause:** Two compounding problems:
1. **Incomplete commit.** The original commit only added the new `config.yaml` and deleted the old YAML — the `setup.typoscript` edit that removes the dangling `yamlConfigurations` registration was never staged (a `git add` with a non-matching pathspec silently staged nothing). So production pulled a commit that still left the deprecated registration in `setup.typoscript`.
2. **Dual-tracked package.** `packages/efrank14` was tracked by the parent repo AND had its own nested `.git` cloned from a separate `efrank14.git` repo, so the site package could drift from the parent. (This was a red herring for *this* failure but a real hazard.)

**Fix:**
- Committed the missing `setup.typoscript` change and pushed it.
- Consolidated the site package into the parent repo: removed the nested `packages/efrank14/.git` (backed up first) so a plain `git pull` updates it — no submodule, no second repo.
- On production, cleared `var/cache/code/typoscript/*.php` explicitly — a generic `cache:flush` does not stick if the on-disk source is still wrong, because every page load regenerates the compiled TypoScript from it.
- Removed the now-unused `packages/efrank13` v13 package (nothing referenced it: composer, config, vendor, or DB).

**Lesson:** Always confirm a commit actually contains every intended change (`git show --stat <sha>`) before chasing deeper causes. Keep the site package single-source-tracked. For TypoScript/form-config fixes, clear the compiled TypoScript cache (`var/cache/code/typoscript/*.php`), not just a generic flush.
