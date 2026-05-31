# CLAUDE.md

Guidance for working in this repository.

## What this is

A TYPO3 v14 (14.3.x, PHP 8.3) website for **eduardofrank.co**, built as a Composer
distribution. Local dev runs in **DDEV**; production runs on **Cloudways**.

- Docroot: `public/`
- Site package: `packages/efrank14` (Composer path repo `eduardo-frank/efrank14`) — plain
  files tracked directly in this repo (no submodule).
- Site config: `config/sites/efrank_site_id/config.yaml` (production `base:` comes from the
  `TYPO3_BASE_URL` env var).
- TYPO3 CLI: `vendor/bin/typo3` (helhum/typo3-console also available).

## Local development (DDEV)

```bash
ddev start
ddev exec vendor/bin/typo3 cache:flush
ddev mysql            # MySQL shell
ddev describe         # URLs / ports
```

Local URL: https://eduardofrank.ddev.site

## Deployment to Cloudways

Production path: `~/public_html/efrank` (SSH required; cannot be done from local DDEV).
Since the site package was consolidated into this repo, deployment is a plain pull —
no submodule, no second repo:

```bash
cd ~/public_html/efrank
git pull
composer install --no-dev          # only when composer.lock changed
rm -f var/cache/code/typoscript/*.php
vendor/bin/typo3 cache:flush
```

**The cache step is mandatory** for any TypoScript / YAML / form-config change. A generic
`cache:flush` alone does **not** stick if an on-disk source file is still wrong, because
every page load regenerates the compiled TypoScript from it — so clear
`var/cache/code/typoscript/*.php` explicitly. After deploying, verify the changed files
actually updated on the server (e.g. `grep` for the expected edit) and confirm a commit
contains every intended change (`git show --stat <sha>`) before assuming a deploy failed
for a deeper reason.

## Gotchas (see TYPO3-v14-Upgrade-Issues-Log.md for full write-ups)

- **The database stores extension paths literally.** After swapping/renaming a site package,
  `tt_content.pi_flexform` (form `persistenceIdentifier`), `pages.TSconfig`, and
  `sys_template` may still reference the old `EXT:...` path and must be updated in the DB.
- **Form config (ext:form) uses auto-discovery (v14.2+).** Custom form YAML lives in
  `packages/efrank14/Configuration/Form/<Set>/config.yaml` and is loaded automatically for
  frontend and backend. Do **not** re-add the deprecated
  `plugin.tx_form`/`module.tx_form.settings.yamlConfigurations` TypoScript registration.
- **`sys_template` drifts between environments.** After a DB import, verify
  `include_static_file` (Bootstrap Package before the site package; blog static template
  present).
- **SMTP `transport_smtp_encrypt` is a boolean**, not a string: `false` = STARTTLS (port 587),
  `true` = implicit SSL (port 465).
