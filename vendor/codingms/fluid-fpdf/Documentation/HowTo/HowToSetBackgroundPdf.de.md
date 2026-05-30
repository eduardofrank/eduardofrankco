# Wie man ein Hintergrund-PDF festlegt

Verwenden Sie einfach den *fpdf:useTemplate*-ViewHelper, zum Beispiel:

```xml
<fpdf:pdf>
	<fpdf:addPage orientation="P" size="A4">
		<fpdf:setSourceFile file="EXT:fluid_fpdf/Resources/Private/Pdf/Normbriefbogen_DIN5008.pdf" />
		<fpdf:useTemplate pageNo="1" x="0" y="0" />
		<f:comment>
			// Your PDF content...
		</f:comment>
	</fpdf:addPage>
</fpdf:pdf>
```
