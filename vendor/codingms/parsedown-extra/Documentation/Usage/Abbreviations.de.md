# Abkürzungen in Parsedown-Extra für TYPO3

Parsedown-Extra ermöglicht es Dir Abkürzungen zu definieren (groß/klein Schreibung beachten!). Du kannst solche Abkürzungen auf zwei Arten definieren.

## Definierung in der Markdown-Datei

Wenn Du eine Abkürzung nur in einer Datei verwenden möchtest, kannst Du diese wie folgt definieren:

```markdown
*[TYPO3]: TYPO3 - Content Management System
```

## Definierung für alle Markdown-Renderings

Wenn Du Abkürzungen für jegliches Markdown in Deinem System definieren möchtest, kannst Du dies mit Setup-TypoScript erreichen. Diese TypoScript definierten Abkürzungen sind für alle Parsedown-Prozesse der Parsedown-Extra TYPO3-Erweiterung verfügbar. Eine solche Definition erreichst Du wie folgt:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    abbreviations {
      101 {
        search = CSS
        value = Cascading Style Sheet
      }
      102 {
        search = HTML
        value = Hyper Text Markup Language
      }
      103 {
        search = JS
        value = JavaScript
      }
      104 {
        search = BCC
        value = Blind carbon copy
      }
    }
  }
}
```
