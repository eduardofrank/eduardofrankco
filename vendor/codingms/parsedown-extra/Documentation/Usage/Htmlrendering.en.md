# Configuring the HTML-Rendering in Parsedown-Extra for TYPO3

## Defining CSS classes for HTML table tags

You can simply add own CSS classes to the HTML table tags by using the following TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    tableClass = table table-bordered table-striped table-hover table-sm Test
  }
}
```


## Defining attributes for links

You can simply add own attributes to the HTML a tags by using the following TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    linksAttr {
      class = interal-link
      target = _top
    }
  }
}
```


## Defining attributes for external links

You can simply add own attributes to the HTML a tags by using the following TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    linksExternalAttr {
      class = external-link
      target = _blank
    }
  }
}
```


## Defining attributes for images

You can simply add own attributes to the HTML img tags by using the following TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    imagesAttr {
      loading = lazy
    }
  }
}
```
