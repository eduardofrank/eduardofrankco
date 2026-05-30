# How to pass some variables into the Footer-Template?

First you have to define the Footer-Template and pass the variables by the *footerArguments* Attribute.

```xml
<fpdf:pdf footerTemplate="{template.settings.footer.template}"
		  footerArguments="{template.settings}">

	<fpdf:addPage />

</fpdf:pdf>
```

Afterwards you're able to use it in Footer-Template.

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">

	<!-- Page numbers -->
	<fpdf:setFont family="Helvetica" style="{settings.footer.fontStyle}" size="{settings.footer.fontSize}" />

	<fpdf:setXY x="20" y="280" />
	<fpdf:cell width="170" text="{settings.footer.text}" align="L" border="T" height="{settings.footer.lineHeight}" />

	<fpdf:variable.set name="pages" value="Seite {fpdf:pageNo()} von |nb|" />
	<fpdf:cell text="{pages}" align="R" width="43" height="{settings.footer.lineHeight}" />

	<fpdf:setSourceFile file="{settings.backgroundPdf}" />
	<fpdf:useTemplate pageNo="1" x="0" y="0" />

</html>
```

In our example we have some TypoScript-Configuration, which we pass to the Fluid.

```typo3_typoscript
settings {
    backgroundPdf = EXT:fluid_fpdf/Resources/Private/Pdf/Normbriefbogen_DIN5008.pdf
    footer {
        template = EXT:crm/Resources/Private/Templates/Pdf/Footer.html
        text = PDF-Description
        pageNumberPrefix = Seite
        pageNumberDivider = von
        fontSize = 9
        fontStyle = N
        lineHeight = 6
    }
}
```
