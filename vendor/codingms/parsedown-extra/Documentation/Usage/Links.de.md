# Links in Parsedown-Extra für TYPO3

## Link-Definition als Referenz:

```markdown
[link-codingms]: https://www.coding.ms/  "Title of the link"
```

Verwendung:

```markdown
Lorem ipsum [Label of the link][link-codingms] and some more text.
```

Ergebnis:

Lorem ipsum [Label of the link][link-codingms] and some more text.
[link-codingms]: https://www.coding.ms/  "Title of the link"


>	#### Information: {.alert .alert-info}
>
>	Du kannst die Link-Attribute mit Hilfe von Setup-TypoScript konfigurieren. Lies dazu mehr im Abschnitt *HTML-Rendering*.


## Inline Link-Definition:

```markdown
Read [here](https://www.ampproject.org/learn/overview/#video "This is the title of the a-tag!") how AMP works in detail.
```

