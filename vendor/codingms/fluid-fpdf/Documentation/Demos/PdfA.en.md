# PDF/A with ZUGFeRD (e-invoice)

In this example, a PDF/A-3b document is created, which can be used, for example, for an e-invoice (ZUGFeRD / Factur-X). It is important that the fonts are embedded into the PDF and that an XML file is provided.

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

You can validate the XML file with the following tool: https://erechnungsvalidator.service-bw.de/
You can also validate the whole PDF with this tool: https://www.e-rechnungs-checker.de/

If you get an error like `if($font['type']=='Core') $this->Error('All fonts must be embedded in PDF/A');` – ensure that the fonts are embedded with the `fpdf:addFont` ViewHelper.
