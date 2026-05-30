# How to write a PDF template, which returns the PDF as string?
This is useful, if you like to attach the created PDF to a mail or something else.

```xml
<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true"><f:spaceless>
<f:format.raw>
	<fpdf:pdf destination="S">
		<fpdf:addPage orientation="P" size="A4">
			<fpdf:setFont family="Arial" style="B" size="10" />
			<fpdf:text x="10" y="10" text="Hello Pdf-World" />
			<fpdf:setXY x="40" y="40" />
			<fpdf:cell width="40" height="10" text="Hello World!" />
		</fpdf:addPage>
	</fpdf:pdf>
</f:format.raw>
</f:spaceless></html>
```

The important thing is, that there're no spaces and the PDF-Code is not escaped!
