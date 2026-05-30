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
