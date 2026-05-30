# Fluid FPDF Tutorial Footer

In this tutorial we want to reuse a footer template on each PDF page. For that you need to create an additional Template, we call it simply `Templates/Pdf/Footer.html`. This template could look like this:

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">

	<!-- Page numbers -->
	<fpdf:setXY x="160" y="280" />
	<fpdf:cell text="{fpdf:pageNo()}/|nb|" align="R" width="40" />

</html>
```

Additionally we need a FPDF template like usual. In this template we need to define the path to the footer template in the `<fpdf:pdf` tag. Our testing template looks like this:

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf footerTemplate="EXT:fluid_fpdf/Resources/Private/Templates/Pdf/Footer.html">
	<fpdf:setFont family="Arial" style="" size="15" />

	<fpdf:addPage />

	<fpdf:addPage />

	<fpdf:addPage />

	<fpdf:addPage />

</fpdf:pdf>
</html>
```
