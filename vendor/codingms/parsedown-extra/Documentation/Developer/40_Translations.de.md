# Übersetzungen

Nachfolgend findest du eine Übersicht über alle Übersetzungen für das Frontend dieser Erweiterung und eine Beschreibung, wie du diese anpassen kannst.


## Übersetzungs-Werte überschreiben

Die Übersetzungswerte können einfach durch das folgende Setup-TypoScript überschrieben werden:

```typo3_typoscript
plugin.tx_parsedownextra._LOCAL_LANG {
    default {
        tx_parsedownextra_label.example_key = Example value
    }
    en {
        tx_parsedownextra_label.example_key = Example value
    }
    de {
        tx_parsedownextra_label.example_key = Beispiel-Wert
    }
}
```

Für das Label der Pro-Erweiterung muss es wie folgt aussehen:

```typo3_typoscript
plugin.tx_parsedownextrapro._LOCAL_LANG {
    default {
        tx_parsedownextra_label.example_key = Example value
    }
    en {
        tx_parsedownextra_label.example_key = Example value
    }
    de {
        tx_parsedownextra_label.example_key = Beispiel-Wert
    }
}
```


## Übersetzungs-Übersicht

| Key                                                        | Extension       | en                          | de                          |
| ---------------------------------------------------------- | --------------- | --------------------------- | --------------------------- |
| tx_parsedownextra_exception.parsedown_parser_not_found     | parsedown_extra | Parsedown parser not found! | Parsedown parser not found! |
| tx_parsedownextra_message.warning_parsedown_file_not_found | parsedown_extra | Parsedown file not found!   | Parsedown file not found!   |

