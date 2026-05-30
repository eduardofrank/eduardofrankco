# Fluid FPDF - FPDI Example

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
      xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
      xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
      data-namespace-typo3-fluid="true">
<fpdf:pdf>
    <fpdf:addPage orientation="P" size="A4">
        <fpdf:setSourceFile file="EXT:fluid_fpdf/Resources/Private/Pdf/TYPO3_2012-logo_sRGB_color.pdf" />
        <fpdf:useTemplate pageNo="1" x="0" y="0" />
        <fpdf:setFont family="Arial" style="B" size="10" />
        <fpdf:text x="10" y="10" text="Hello Pdf-World" />
        <fpdf:setXY x="40" y="40" />
        <fpdf:cell width="40" height="10" text="Hello World!" />
    </fpdf:addPage>
</fpdf:pdf>
</html>
```
