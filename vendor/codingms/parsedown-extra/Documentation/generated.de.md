# Parsedown-Extra Erweiterung für TYPO3

Bietet ein Content-Element und einen ViewHelper zur Darstellung von Markdown-Dateien inklusive Mermaid-Diagrammen (UML, Activity, State und mehr). Verarbeitet E-Mail-Links mit TYPO3-Verschlüsselung. ViewHelper zum Parsen von Markdown aus individuellen Quellen. Globale Definition von Abkürzungen per TypoScript. Code-/Syntax-Highlighting und vieles mehr.


**Features:**

*   Parst E-Mailadressen Links mit der TYPO3 encryption
*   Inhaltselement zur Auswahl von Markdown-Dateien, welche geparst im Frontend ausgegeben werden
*   ViewHelper zum parsen von Markdown aus beliebigen Quellen
*   Global definiertes Abkürzungs-Verzeichnis aus TypoScript
*   SourceCode Syntax-Highlighting mit PrismJS
*   Syntax-Highlighting für TypoScript
*   Diagramme und Charts via MermaidJS

Wenn ein zusätzliches oder individuelles Feature benötigt wird - kontaktiere uns gern!


**Links:**

*   [TYPO3 Parsedown-Extra Dokumentation](https://www.coding.ms/documentation/typo3-parsedown-extra "Parsedown-Extra Dokumentation")
*   [TYPO3 Parsedown-Extra Bug-Tracker](https://gitlab.com/codingms/typo3-public/parsedown_extra/-/issues "Parsedown-Extra Bug-Tracker")
*   [TYPO3 Parsedown-Extra Repository](https://gitlab.com/codingms/typo3-public/parsedown_extra "Parsedown-Extra Repository")
*   [TYPO3 Parsedown-Extra Productdetails](https://www.coding.ms/typo3-extensions/typo3-parsedown-extra/ "TYPO3 Parsedown-Extra Productdetails")
*   [TYPO3 Parsedown-Extra Dokumentation](https://www.coding.ms/de/dokumentation/typo3-parsedown-extra "TYPO3 Parsedown-Extra Dokumentation")
*   [Markdown Syntax](https://daringfireball.net/projects/markdown/syntax "Markdown Syntax")
*   [Parsedown Webseite](http://parsedown.org/ "Parsedown Webseite")
*   [Parsedown-Extra Webseite](https://michelf.ca/projects/php-markdown/extra/ "Parsedown-Extra Webseite")
*   [Mermaid Diagramming and charting tool](https://mermaid.js.org/ "Mermaid Diagramming and charting tool")

## TypoScript-Konstanten Einstellungen


### Allgemein

| **Konstante**    | styles.content.imgtext.linkWrap.lightboxEnabled                |
|:-----------------|:---------------------------------------------------------------|
| **Label**        | LightBox für Inhaltselemente/Bilder aktivieren                 |
| **Beschreibung** |                                                                |
| **Typ**          | Auswahlbox mit Optionen: 0, 1                                  |
| **Standardwert** | 1                                                              |

| **Konstante**    | styles.content.imgtext.linkWrap.lightboxCssClass               |
|:-----------------|:---------------------------------------------------------------|
| **Label**        | CSS-Klasse für Lightbox                                        |
| **Beschreibung** |                                                                |
| **Typ**          | string                                                         |
| **Standardwert** | lightbox                                                       |

| **Konstante**    | styles.content.imgtext.linkWrap.lightboxRelAttribute           |
|:-----------------|:---------------------------------------------------------------|
| **Label**        | CSS-Relationattribut für Lightbox                              |
| **Beschreibung** |                                                                |
| **Typ**          | string                                                         |
| **Standardwert** | lightbox[{field:uid}]                                          |

| **Konstante**    | themes.configuration.lightbox.colorbox.theme                   |
|:-----------------|:---------------------------------------------------------------|
| **Label**        | LightBox-Design, mögliche Werte 1-5                            |
| **Beschreibung** |                                                                |
| **Typ**          | Auswahlbox mit Optionen: 1, 2, 3, 4, 5                         |
| **Standardwert** | 2                                                              |

| **Konstante**    | themes.configuration.lightbox.colorbox.cssUrl                  |
|:-----------------|:---------------------------------------------------------------|
| **Label**        | Basis-URL für CSS-Theme                                        |
| **Beschreibung** |                                                                |
| **Typ**          | string                                                         |
| **Standardwert** | https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/ |

| **Konstante**    | themes.configuration.lightbox.colorbox.jsUrl                   |
|:-----------------|:---------------------------------------------------------------|
| **Label**        | Basis-URL für Skript                                           |
| **Beschreibung** |                                                                |
| **Typ**          | string                                                         |
| **Standardwert** | https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/ |





## Verfügbare Plugin

Diese Erweiterung enthält folgende Plugins, die auf Ihrer Website platziert werden können.


### 





## Abkürzungen in Parsedown-Extra für TYPO3

Parsedown-Extra ermöglicht es Dir Abkürzungen zu definieren (groß/klein Schreibung beachten!). Du kannst solche Abkürzungen auf zwei Arten definieren.

### Definierung in der Markdown-Datei

Wenn Du eine Abkürzung nur in einer Datei verwenden möchtest, kannst Du diese wie folgt definieren:

```markdown
*[TYPO3]: TYPO3 - Content Management System
```

### Definierung für alle Markdown-Renderings

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


## Block-Zitate

### Notizen, Warnungen etc. mit Hilfe von Block Zitaten

Warnungen, Notizen, Information und weitere können wie folgt angezeigt werden:

```markdown
>	#### Information: {.alert .alert-info}
>
>	This is the message...
```

Weil wir in unserem Frontend-Template Bootstrap-Styles verwenden, können wir *success*, *danger*, *warning* und *info* verwenden.



### Examples


#### Info message box

>	#### Information: {.alert .alert-info}
>
>	This is the message...


#### Error message box

>	#### Attention: {.alert .alert-danger}
>
>	This is the message...


## Konfiguration von HTML-Rendering in Parsedown-Extra für TYPO3

### Definition von CSS-Klassen für HTML Table-Tags

Du kannst einfach eigene CSS-Klassen für HTML Table-Tags definieren - hierfür verwendest Du einfach folgendes Setup-TypoScript:

```typo3_typoscript
plugin.tx_parsedownextra {
  settings {
    tableClass = table table-bordered table-striped table-hover table-sm Test
  }
}
```


### Definition von Attributen für Links

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


### Definition von Attributen für externe Links

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


### Definition von Attributen für Bilder

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


## Bilder in Parsedown-Extra für TYPO3

Bild-Definitionen als Referenz:

```markdown
[module-filelist]: https://www.domain.de/fileadmin/Documentation/Images/Module/filelist.png "Dateilisten-Modul"
```

Verwendung der Bild-Referenz:

```markdown
Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
![Filelist-Module][module-filelist] {.inline-image}
Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
```


## Links in Parsedown-Extra für TYPO3

### Link-Definition als Referenz:

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


### Inline Link-Definition:

```markdown
Read [here](https://www.ampproject.org/learn/overview/#video "This is the title of the a-tag!") how AMP works in detail.
```



## Diagramme und Charts mit Mermaid

Definiere einfach einen Code-Block mit der Sprache `mermaid` wie folgt:

```markdown
```mermaid

flowchart TD
    A([Gibt es ein Problem?]) -->|Nein| OK1[Alles gut. Weiterarbeiten.]
    A -->|Ja| B{Rutscht es?}

    B -->|Ja| C{Soll es rutschen?}
    B -->|Nein| D{Soll es rutschen?}

    C -->|Ja| OK2[Perfekt. Nichts tun.]
    C -->|Nein| T[Gaffa-Tape einsetzen.]

    D -->|Ja| W[WD-40 benutzen.]
    D -->|Nein| OK3[Perfekt. Nichts tun.]

    T --> E{Problem behoben?}
    W --> E
    OK2 --> E
    OK3 --> E

    E -->|Ja| DONE[[Fertig. Kaffee holen.]]
    E -->|Nein| B

    %% Optional: kleine Legende
    subgraph Legende
      L1[WD-40: wenn es rutschen/sich bewegen soll]
      L2[Gaffa-Tape: wenn es nicht rutschen/sich nicht bewegen soll]
    end
```

Das folgende Diagramm wird gerendert:

```mermaid

flowchart TD
	A([Gibt es ein Problem?]) -->|Nein| OK1[Alles gut. Weiterarbeiten.]
	A -->|Ja| B{Rutscht es?}

	B -->|Ja| C{Soll es rutschen?}
	B -->|Nein| D{Soll es rutschen?}

	C -->|Ja| OK2[Perfekt. Nichts tun.]
	C -->|Nein| T[Gaffa-Tape einsetzen.]

	D -->|Ja| W[WD-40 benutzen.]
	D -->|Nein| OK3[Perfekt. Nichts tun.]

	T --> E{Problem behoben?}
	W --> E
	OK2 --> E
	OK3 --> E

	E -->|Ja| DONE[[Fertig. Kaffee holen.]]
	E -->|Nein| B

%% Optional: kleine Legende
	subgraph Legende
		L1[WD-40: wenn es rutschen/sich bewegen soll]
		L2[Gaffa-Tape: wenn es nicht rutschen/sich nicht bewegen soll]
	end
```


Weitere Informationen:
- [Mermaid website](https://mermaid.js.org/)
- [Mermaid live editor](https://mermaid.live/)


## First Headline

Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu! Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa. Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu! Poulet tikka masala hahaha.



### Second Headline

Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu! Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa. Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu! Poulet tikka masala hahaha.



### Second Headline

Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu! Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa. Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu! Poulet tikka masala hahaha.



#### Third Headline

Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu! Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa. Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu! Poulet tikka masala hahaha.

*   Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii.
*   La bodaaa tank yuuu!
*   Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa.
*   Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu!
*   Poulet tikka masala hahaha.

Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu! Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa. Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu! Poulet tikka masala hahaha.

1.  Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii.
2.  La bodaaa tank yuuu!
3.  Tulaliloo bappleees poulet tikka masala la bodaaa tulaliloo la bodaaa.
4.  Bananaaaa ti aamoo! Underweaaar underweaaar belloo! Me want bananaaa! Chasy gelatooo jiji. Poopayee me want bananaaa! Belloo! Pepete po kass wiiiii po kass. Me want bananaaa! ti aamoo! Baboiii bee do bee do bee do hana dul sae bananaaaa baboiii bappleees gelatooo. Tatata bala tu pepete jiji hana dul sae. Underweaaar butt bappleees daa belloo! Bananaaaa potatoooo daa poopayee belloo! Hahaha poopayee hana dul sae underweaaar potatoooo pepete tank yuuu!
5.  Poulet tikka masala hahaha.



### Blockquotes

>	#### Successful: {.alert .alert-success}
>
>	Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu!

>	#### Information: {.alert .alert-info}
>
>	Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu!

>	#### Attention: {.alert .alert-danger}
>
>	Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu!

>	#### Warning: {.alert .alert-warning}
>
>	Minions ipsum tatata bala tu pepete jeje baboiii chasy potatoooo wiiiii. La bodaaa tank yuuu!



*[TYPO3]: TYPO3 - Content Management System


## Vorschläge für ausgewogene Dokumentationen


### Breadcrumbs

`Startseite -> Daten -> Pressebereich -> Downloads`


## Übersetzungen

Nachfolgend findest du eine Übersicht über alle Übersetzungen für das Frontend dieser Erweiterung und eine Beschreibung, wie du diese anpassen kannst.


### Übersetzungs-Werte überschreiben

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


### Übersetzungs-Übersicht

| Key                                                        | Extension       | en                          | de                          |
| ---------------------------------------------------------- | --------------- | --------------------------- | --------------------------- |
| tx_parsedownextra_exception.parsedown_parser_not_found     | parsedown_extra | Parsedown parser not found! | Parsedown parser not found! |
| tx_parsedownextra_message.warning_parsedown_file_not_found | parsedown_extra | Parsedown file not found!   | Parsedown file not found!   |



## Parsedown Extra Change-Log

### 2026-04-29 Release of version 5.0.1

*	[TASK] Optimize and rebuild documentation



### 2026-04-28 Release of version 5.0.0

*	[TASK] Migrate for TYPO3 14 and remove support for TYPO3 12
*	[TASK] Add or update PHP doc comment for classes
*	[TASK] Migrate and normalize upgrade-wizards
*	[BUGFIX] Fix email rendering for TYPO3 13 and 14



### 2026-04-17 Release of version 4.3.8

*	[BUGFIX] Fix TypoScript identifier for mermaid-init JavaScript



### 2026-04-17 Release of version 4.3.7

*	[BUGFIX] Fix translation in new-content-element-wizard
*	[BUGFIX] Fix content-element registration



### 2026-03-26 Release of version 4.3.6

*	[TASK] Add site set configuration



### 2026-03-09 Release of version 4.3.5

*	[TASK] Add documentation about translations



### 2026-02-11 Release of version 4.3.4

*	[BUGFIX] Avoid inserting Markdown tab in all content elements



### 2026-01-27 Release of version 4.3.3

*	[TASK] Switch methods from protected to private in the final DrawItem class
*	[TASK] Code clean up and quality improvements



### 2025-10-20 Release of version 4.3.2

*	[TASK] Move jQuery libraries into footer



### 2025-10-20 Release of version 4.3.1

*	[TASK] Add jQuery as an optional static include
*	[TASK] Insert a more complex Mermaid example in the documentation



### 2025-10-13 Release of version 4.3.0

*	[FEATURE] Add markdown from an editor in content-element
*	[TASK] Add Nermaid into TER description



### 2025-10-11 Release of version 4.2.2

*	[TASK] Code clean up



### 2025-10-10 Release of version 4.2.1

*	[BUGFIX] Fix version definition



### 2025-10-10 Release of version 4.2.0

*	[FEATURE] Add Mermaid diagram support



### 2025-09-08 Release of version 4.1.2

*	[BUGFIX] Add forceOnTop for Prism JavaScript library, so that it is loaded before the other libraries



### 2025-08-29 Release of version 4.1.1

*	[TASK] Update developer section in documentation
*	[TASK] Add or update PHP doc comment for classes
*	[TASK] Add translations.json file for documentation
*	[BUGFIX] Set a unique upgrade wizard identifier



### 2025-05-26 Release of version 4.1.0

*	[BUGFIX] Fix colleting attributes for links and images, so that all defined CSS classes remains
*	[BUGFIX] Fix building links in TYPO3 13
*	[BUGFIX] Fix usage of translated files in content-element
*	[BUGFIX] Fix sorting of backend file selection
*	[FEATURE] Provide an optional selection for a markdown file by FAL
*	[TASK] Optimize code style



### 2025-04-14 Release of version 4.0.2

*	[TASK] Migrate to plugins to content elements and icon registration
*	[BUGFIX] Fix new content element wizards for TYPO3 12



### 2025-02-18 Release of version 4.0.1

*	[BUGFIX] Fix deprecation notice for nullable method parameter
*	[TASK] Mark compatible with PHP 8.4



### 2024-11-27 Release of version 4.0.0

*	[TASK] Migrate to TYPO3 13, remove support for TYPO3 11
*	[TASK] Migrate TypoScript imports



### 2024-07-08 Release of version 3.0.5

*	[BUGFIX] Fix PHP parent class issue by updating ParseDown-Extra library
*	[TASK] Optimize version conditions in PHP code
*	[TASK] Code style optimization



### 2023-11-01 Release of version 3.0.4

*	[TASK] Clean up documentation
*	[BUGFIX] Fix get content object for TYPO3 11



### 2023-10-27 Release of version 3.0.3

*	[BUGFIX] Fix access on non defined ctype index in backend preview



### 2023-08-18 Release of version 3.0.2

*	[TASK] Migration of tt_content_drawItem hook for TYPO3 12



### 2023-08-16 Release of version 3.0.1

*	[TASK] Add more documentation



### 2023-08-08 Release of version 3.0.0

*	[TASK] Migrate to TYPO3 12 and remove support for TYPO3 10



### 2022-11-29 Release of Version 2.3.2

*	[BUGFIX] Fix insecure js library loading



### 2022-11-20 Release of Version 2.3.1

*	[BUGFIX] Fix attributes and classes for HTML table rendering



### 2022-11-07 Release of Version 2.3.0

*	[FEATURE] Insert configuration for image tag attributes
*	[BUGFIX] Fix PHP warnings for PHP 8.0



### 2022-09-09 Release of Version 2.2.0

*	[TASK] Upgrade Parsedown Extra Plugin



### 2022-08-18 Release of Version 2.1.3

*	[TASK] Optimize documentation metadata



### 2022-05-09 Release of Version 2.1.2

*	[BUGFIX] Fix selected markdown item in backend flexform
*	[TASK] Clean up ext_tables.php
*	[TASK] Update of the parsedown/extra/plugin libraries
*	[TASK] Add missing documentation file for styleguide



### 2022-04-09 Release of Version 2.1.1

*	[TASK] Move backend icon into Resources/Public/Icons
*	[TASK] Add content object into Fluid template



### 2022-02-07 Release of Version 2.1.0

*	[TASK] Insert a Styleguide Documentation page
*	[TASK] Code clean up
*	[TASK] Extend and validate documentations configuration
*	[TASK] Add documentations configuration
*	[TASK] Drop support for TYPO3 9
*	[TASK] Rise PHP version to 7.4
*	[TASK] Preparations for TYPO3 11



### 2021-02-19 Release of Version 2.0.2

*	[BUGFIX] Handle only relative files in markdown selection



### 2021-02-18 Release of Version 2.0.1

*	[BUGFIX] Fix file selection in content element



2021-02-14 Release of Version 2.0.0

*	[TASK] Migration for TYPO3 10



2021-01-07 Release of Version 1.5.3

*	[TASK] Add extra tags in composer.json
*	[TASK] Add german translation



### 2020-11-13 Release of Version 1.5.2

*	[BUGFIX] Check if markdown file exists in parsedown ViewHelper



### 2020-11-13 Release of Version 1.5.1

*	[TASK] Change extra tags



### 2020-11-13 Release of Version 1.5.0

*	[TASK] Disable Record storage page and Recursive in tt_content
*	[FEATURE] Viewhelper file attribute



### 2020-06-25 Release of Version 1.4.2

*	[TASK] Update extra tags in composer.json
*	[TASK] Update description in ext_emconf.php




### 2020-06-04 Release of Version 1.4.1

*	[TASK] Add extra tags in composer.json
*	[BUGFIX] Fix version in ext_emconf.php



### 2020-05-25 Release of Version 1.4.0

*	[TASK] Cleanup Change-Log



### 2020-01-13 Release of version 1.3.0

*	[FEATURE] Add parameter for shift HTML headlines
*	[FEATURE] Add parameter for disable email protection



### 2019-11-01 Release of version 1.2.2

*	[TASK] Add Gitlab-CI configuration.



### 2019-11-01 Release of version 1.2.1

*	[BUGFIX] Fix warning in TCA overrides.
*	[TASK] Changing links inside documentation.
*	[TASK] Remove DEV identifier.
*	[BUGFIX] Fixing argument type in Parsedown ViewHelper.



### 2019-01-21 Release of version 1.2.0

*	[TASK] Migration for TYPO3 9.5.



### 2018-10-24 Release of version 1.1.2

*	[BUGFIX] Fixing pass configuration from TypoScript.



### 2018-10-10 Release of version 1.1.1

*	[BUGFIX] Fixing array iteration of abbreviations.



### 2018-10-03 Release of version 1.1.0

*	[TASK] Moving abbreviations configuration into TypoScript settings.
*	[FEATURE] Adding configuration for CSS classes in HTML table tags.
*	[FEATURE] Adding configuration for Link attributes in HTML a tags.
*	[TASK] Working on documentation.
*	[TASK] Removing FlexForm and using DB-Field for selected Markdown files.
*	[TASK] Moving JavaScript into Footer
*	[FEATURE] Add page module preview
*	[TASK] Add icon as SVG
*	[FEATURE] Add parseing for email links with TYPO3 encryption
*	[TASK] Add a parse ViewHelper



### 2017-06-25 Release of version 1.0.0

*	[TASK] Development of first version



