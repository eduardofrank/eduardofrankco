# A character of my font isn't displayed well in PDF (for example the €-character) - what to do?
First create a character dump of the string, in order to identify which characters are used:

```xml
<fpdf:debug.stringCharacterDump string="1.20 €" />
```

The result should look like this:

```text
1 : 49
. : 46
2 : 50
0 : 48
 : 32
? : 63
 : 0
```

Now you know, your €-character is placed by the character with ASCII-No. *63*.

In the next step, you perform a font dump with the font you want to use:

```xml
<fpdf:debug.fontDump />
```

I our example, the character on number *63* is displayed as *?* - that's not what we expect. Take a closer look on your
font dump and search for the €-character. We found it on ASCII-No. *162*.
