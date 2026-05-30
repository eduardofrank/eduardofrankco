# Konfiguration von HTML-Rendering in Parsedown-Extra für TYPO3

## Definition von CSS-Klassen für HTML Table-Tags

Du kannst einfach eigene CSS-Klassen für HTML Table-Tags definieren - hierfür verwendest Du einfach folgendes Setup-TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    tableClass = table table-bordered table-striped table-hover table-sm Test
  }
}
```


## Definition von Attributen für Links

Du kannst einfach eigene CSS-Klassen für HTML Link-Tags definieren - hierfür verwendest Du einfach folgendes Setup-TypoScript:

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


## Definition von Attributen für externe Links

Du kannst einfach eigene CSS-Klassen für HTML Link-Tags mit externen Zielen definieren - hierfür verwendest Du einfach folgendes Setup-TypoScript:

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


## Definition von Attributen für Bilder

Du kannst einfach eigene Attribute für deinen HTML Image-Tags definieren - hierfür verwendest Du einfach folgendes Setup-TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    imagesAttr {
      loading = lazy
    }
  }
}
```
