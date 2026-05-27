document.addEventListener('DOMContentLoaded', function () {
  if (typeof mermaid === 'undefined') return;

  document.querySelectorAll('pre > code.language-mermaid').forEach(function (codeEl) {
    var pre = codeEl.parentElement;
    var div = document.createElement('div');
    div.classList.add('mermaid');
    div.textContent = codeEl.textContent;
    pre.parentElement.replaceChild(div, pre);
  });

  mermaid.initialize({ startOnLoad: true, theme: 'dark' });
});
