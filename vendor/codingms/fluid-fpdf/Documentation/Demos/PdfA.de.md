# PDF/A mit ZUGFeRD (E-Rechnung)

In diesem Beispiel wird ein PDF/A-3b Dokument erstellt, welches z.B. für eine E-Rechnung (ZUGFeRD / Factur-X) verwendet werden kann. Wichtig ist hierbei, dass die Schriften in das PDF eingebettet werden müssen und das eine XML-Datei übergeben wird.

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdfA>
	<fpdf:addPage>

		<fpdf:addFont family="Monospace" style="N" filename="ubuntumono_n.php" />
		<fpdf:addFont family="Monospace" style="B" filename="ubuntumono_b.php" />
		<fpdf:addFont family="Monospace" style="I" filename="ubuntumono_i.php" />
		<fpdf:addFont family="Monospace" style="BI" filename="ubuntumono_bi.php" />

		<fpdf:setFont family="Monospace" style="B" size="16" />
		<fpdf:cell width="40" height="10" text="Hello World!" />

		<fpdf:setXmlFile file="EXT:fluid_fpdf/Resources/Private/Php/zugferd/factur-x.xml" />

	</fpdf:addPage>
</fpdf:pdfA>
</html>
```

Das XML für eine E-Rechnung kann mit folgendem Tool validiert werden: https://erechnungsvalidator.service-bw.de/
Du kannst auch das gesamte PDF mit diesem Tool validieren: https://www.e-rechnungs-checker.de/

Wenn Du einen Fehler wie `if($font['type']=='Core') $this->Error('All fonts must be embedded in PDF/A');` erhältst, stelle sicher, dass die Schriftarten mit dem ViewHelper `fpdf:addFont` eingebettet werden.
