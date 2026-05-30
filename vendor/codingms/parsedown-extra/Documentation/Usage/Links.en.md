# Links in Parsedown-Extra for TYPO3

## Defining links as reference:

```markdown
[link-codingms]: https://www.coding.ms/  "Title of the link"
```

Usage:

```markdown
Lorem ipsum [Label of the link][link-codingms] and some more text.
```

Result:

Lorem ipsum [Label of the link][link-codingms] and some more text.
[link-codingms]: https://www.coding.ms/  "Title of the link"


>	#### Information: {.alert .alert-info}
>
>	You are able to modify the link attributes by TypoScript configuration. Read more about that in section *HTML-Rendering*.


## Defining inline links:

```markdown
Read [here](https://www.ampproject.org/learn/overview/#video "This is the title of the a-tag!") how AMP works in detail.
```

