document.addEventListener("DOMContentLoaded", async () => {
    // Schritt 1: Mermaid-Blöcke in <div class="mermaid"> umwandeln
    document.querySelectorAll('pre > code.language-mermaid').forEach(code => {
        const pre = code.parentElement;
        const div = document.createElement('div');
        div.className = 'mermaid';
        div.textContent = code.textContent;
        pre.replaceWith(div);
    });

    // Schritt 2: Prism auf ALLE anderen Codeblöcke anwenden
    document.querySelectorAll('pre > code:not(.language-mermaid)').forEach(el => {
        Prism.highlightElement(el);
    });

    // Schritt 3: Mermaid initialisieren
    mermaid.initialize({ startOnLoad: false, "theme": "neutral" });
    await mermaid.run({ querySelector: '.mermaid' });
});
