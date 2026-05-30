# Diagrams and charts with Mermaid

Just define a code-block with the `mermaid` language.

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

This will render the following diagram:

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


More information:
- [Mermaid website](https://mermaid.js.org/)
- [Mermaid live editor](https://mermaid.live/)
