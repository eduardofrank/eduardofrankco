# Translations

Following you'll find an overview about all translations for the frontend of this extension and a description on how to customize them.


## Override translation values

The translation values can be easily overwritten by the following Setup-TypoScript:

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

For the label of the pro extension it must be like this:

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


## Translation overview

| Key                                                        | Extension       | en                          | de                          |
| ---------------------------------------------------------- | --------------- | --------------------------- | --------------------------- |
| tx_parsedownextra_exception.parsedown_parser_not_found     | parsedown_extra | Parsedown parser not found! | Parsedown parser not found! |
| tx_parsedownextra_message.warning_parsedown_file_not_found | parsedown_extra | Parsedown file not found!   | Parsedown file not found!   |

