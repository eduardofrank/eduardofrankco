# Abbreviations in Parsedown-Extra for TYPO3

Parsedown-Extra enables you to define case-sensitive abbreviations. You can define abbreviations in the following two ways.

## Defining in markdown file

If you like to define a new abbreviations only for a single file, you can use the following markdown:

```markdown
*[TYPO3]: TYPO3 - Content Management System
```

## Defining globally for all markdown renderings

If you need a abbreviations definition for all markdown renderings in your system, you can define them by using TypoScript. These TypoScript defined abbreviations are available in all parse processes of the Parsedown-Extra TYPO3-Extension. A definition for that looks like:

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
