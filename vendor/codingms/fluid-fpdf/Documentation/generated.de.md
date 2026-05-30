# Fluid-Fpdf Erweiterung für TYPO3

Diese Extension bietet einen umfangreichen Satz an PDF-ViewHelpern zur Arbeit mit FPDF in Fluid. Nach Einbindung des fpdf-Namespaces kannst Du PDFs direkt in eigenen TYPO3-Extensions erzeugen. Zusätzlich steht ein integriertes Plugin zur Ausgabe vordefinierter PDFs bereit, das verfügbare PDF-Definitionen automatisch bereitstellt. Unterstützt werden außerdem Barcode-Generierung, Text-Rotation, PDF/A-3b sowie ZUGFeRD und Factur-X (E-Rechnung).


**Features:**

*   Alle FPDF Bibliotheksfunktionen als ViewHelper
*   PDFs können als Datei gespeichert oder direkt als Download ausgegeben werden
*   Individuelles PDF-Design ist als Hintergrund hinterlegbar
*   PDF-Inhaltsverzeichnisse lassen sich erstellen
*   Font-Subsetting ist möglich (Text aus RTE wird geparst und ins PDF geschrieben, mögliche Tags: h1, h2, h3, h4, h5, b, u, i, a, p, br, pagebreak, strike, strong, small, em, ul, ol, li, dl, dt, dd)
*   Bookmarks inkl. Verlinkung können generiert werden
*   Barcode-Generator
*   Text-Rotation möglich
*   PDF/A-3b möglich
*   ZUGFeRD möglich
*   Factur-X möglich
*   Kostenfrei durch Open-Source-Lizenz

Wenn ein zusätzliches oder individuelles Feature benötigt wird - kontaktiere uns gern!


**Links:**

*   [TYPO3 Fluid-Fpdf Dokumentation](https://www.coding.ms/documentation/typo3-fluid-fpdf "Fluid-Fpdf Dokumentation")
*   [TYPO3 Fluid-Fpdf Bug-Tracker](https://gitlab.com/codingms/typo3-public/fluid_fpdf/-/issues "Fluid-Fpdf Bug-Tracker")
*   [TYPO3 Fluid-Fpdf Repository](https://gitlab.com/codingms/typo3-public/fluid_fpdf "Fluid-Fpdf Repository")
*   [TYPO3 Fluid-FPDF Produktdetails](https://www.coding.ms/de/typo3-extensions/typo3-fluid-fpdf/ "TYPO3 Fluid-FPDF Produktdetails")
*   [TYPO3 Fluid-FPDF Dokumentation](https://www.coding.ms/de/dokumentation/typo3-fluid-fpdf "TYPO3 Fluid-FPDF Dokumentation")
*   [FPDF.org](http://www.fpdf.org/ "FPDF.org")
*   [FPDF.de](http://www.fpdf.de/ "FPDF.de")
*   [TYPO3 Fluid-FPDF Extension-Download](https://typo3.org/extensions/repository/view/fluid_fpdf "TYPO3 Fluid-FPDF Extension-Download")

## TypoScript-Konstanten Einstellungen


### Allgemein

| **Konstante**    | plugin.tx_fluidfpdf.view.templateRootPath   |
|:-----------------|:--------------------------------------------|
| **Label**        | Pfad zu Template (FE)                       |
| **Beschreibung** |                                             |
| **Typ**          | string                                      |
| **Standardwert** | EXT:fluid_fpdf/Resources/Private/Templates/ |

| **Konstante**    | plugin.tx_fluidfpdf.view.partialRootPath    |
|:-----------------|:--------------------------------------------|
| **Label**        | Pfad zu Template-Partials (FE)              |
| **Beschreibung** |                                             |
| **Typ**          | string                                      |
| **Standardwert** | EXT:fluid_fpdf/Resources/Private/Partials/  |

| **Konstante**    | plugin.tx_fluidfpdf.persistence.storagePid  |
|:-----------------|:--------------------------------------------|
| **Label**        | Standard Datensatz Container                |
| **Beschreibung** |                                             |
| **Typ**          | string                                      |
| **Standardwert** |                                             |





## Verfügbare Plugin

Diese Erweiterung enthält folgende Plugins, die auf Ihrer Website platziert werden können.


### PDF

Zeigt ein vordefiniertes PDF.

**Tab: General-Settings**
-   **PDF-Template**
    
    
    


## Barcode Example

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>
	<fpdf:setFont family="Arial" style="" size="15" />

	<fpdf:addPage />

	<fpdf:barcode x="20" y="20" width="150" height="40" code="www.coding.ms" />
	<fpdf:cell width="0" height="6" text="www.coding.ms" />

</fpdf:pdf>
</html>
```


## Fluid FPDF Tutorial Bookmarks

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>
	<fpdf:setFont family="Arial" style="" size="15" />

	<fpdf:addPage />
	<fpdf:bookmark title="Page 1" isUTF8="false" />
	<fpdf:bookmark title="Paragraph 1" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Paragraph 1" />
	<fpdf:ln height="50" />
	<fpdf:bookmark title="Paragraph 2" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Paragraph 2" />

	<fpdf:addPage />
	<fpdf:bookmark title="Page 2" isUTF8="false" />
	<fpdf:bookmark title="Paragraph 3" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Paragraph 3" />

</fpdf:pdf>
</html>
```


## Fluid FPDF Tutorial Custom Index

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>
	<fpdf:setFont family="Arial" style="" size="15" />

	<fpdf:addPage />
	<!-- Add an empty page -->

	<fpdf:addPage />
	<fpdf:bookmark title="Section 1" isUTF8="false" />
	<fpdf:cell width="0" height="6" text="Section 1" />
	<fpdf:ln height="10" />
	<fpdf:bookmark title="Subsection 1" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 1" />
	<fpdf:ln height="50" />
	<fpdf:bookmark title="Subsection 2" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 2" />

	<fpdf:addPage />
	<fpdf:bookmark title="Section 2" isUTF8="false" />
	<fpdf:cell width="0" height="6" text="Section 2" />
	<fpdf:ln height="10" />
	<fpdf:bookmark title="Subsection 3" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 3" />

	<fpdf:goToPage number="1" />
	<fpdf:setXY x="10" y="20" />
	<fpdf:cell width="0" height="6" text="Index" />
	<fpdf:ln height="10" />

	<fpdf:variable.set name="indexEntries" value="{fpdf:getIndex()}" />
	<fpdf:variable.set name="indexStartX" value="30" />
	<fpdf:variable.set name="indexIndentX" value="10" />
	<f:if condition="{f:count(subject: indexEntries)}">
		<f:for each="{indexEntries}" as="indexEntry">
			<!-- Calculate x position -->
			<fpdf:variable.set name="indexEntryX" value="{fpdf:math.product(a: indexIndentX, b: indexEntry.l)}" />
			<fpdf:variable.set name="indexEntryX" value="{fpdf:math.sum(a: indexEntryX, b: indexStartX)}" />
			<!-- Calculate y position -->
			<fpdf:variable.set name="indexStartY" value="{fpdf:getY()}" />
			<fpdf:variable.set name="indexEntryY" value="{fpdf:math.sum(a: indexStartY, b: 10)}" />
			<!-- Print entry -->
			<fpdf:setXY x="{indexEntryX}" y="{indexEntryY}" />
			<fpdf:cell text="{indexEntry.t} (Seite {indexEntry.p})" align="L" width="120" />
		</f:for>
	</f:if>

	<!-- ATTENTION: Don't forget to go back to last page!!! -->
	<fpdf:goToPage />

</fpdf:pdf>
</html>
```


## Fluid FPDF Tutorial Debugging

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>

	<!-- show all border and debug information -->
	<fpdf:variable.set name="debug" value="1"/>
	<fpdf:variable.set name="debugText" value=""/>

	<fpdf:addPage>

		<!-- Automatic page break -->
		<fpdf:variable.set name="autoPageBreak" value="10"/>
		<fpdf:setAutoPageBreak margin="{autoPageBreak}"/>

		<!-- Set margins -->
		<fpdf:variable.set name="marginTop" value="32"/>
		<fpdf:variable.set name="marginLeft" value="9"/>
		<fpdf:variable.set name="marginRight" value="{fpdf:math.subtract(a: 210, b: 10)}"/>
		<fpdf:variable.set name="marginBottom" value="{fpdf:math.subtract(a: 297, b: autoPageBreak)}"/>
		<fpdf:variable.set name="marginLeftAndRight" value="20"/>
		<fpdf:variable.set name="marginTopAndBottom" value="{fpdf:math.sum(a: marginTop, b: autoPageBreak)}"/>
		<fpdf:setTopMargin margin="{marginTop}"/>
		<fpdf:setLeftMargin margin="{marginLeft}"/>
		<fpdf:setRightMargin margin="{marginRight}"/>

		<!-- Content width & height -->
		<fpdf:variable.set name="contentWidth" value="{fpdf:math.subtract(a: 210, b: marginLeftAndRight)}" />
		<fpdf:variable.set name="contentHeight" value="{fpdf:math.subtract(a: 297, b: marginTopAndBottom)}" />


		<!-- Print debug lines for margin -->
		<f:if condition="{debug}">
			<fpdf:setDrawColor hex="#FF0000"/>
			<fpdf:setLineWidth width="0.05"/>
			<!-- Margins -->
			<fpdf:line x1="{marginLeft}" x2="{marginLeft}" y1="0" y2="297.00"/>
			<fpdf:line x1="{marginRight}" x2="{marginRight}" y1="0" y2="297.00"/>
			<fpdf:line x1="0" x2="210.00" y1="{marginTop}" y2="{marginTop}"/>
			<fpdf:line x1="0" x2="210.00" y1="{marginBottom}" y2="{marginBottom}"/>
		</f:if>

<fpdf:variable.set name="debugText">{debugText}Before values:
x: {fpdf:getX()}
y: {fpdf:getY()}
</fpdf:variable.set>

		<fpdf:setXY x="{marginLeft}" y="{marginTop}" />
		<fpdf:setFont family="Arial" style="B" size="16" />
		<fpdf:cell width="40" height="10" text="Hello World!" border="{debug}" />

<fpdf:variable.set name="debugText">{debugText}After values:
x: {fpdf:getX()}
y: {fpdf:getY()}
</fpdf:variable.set>

		<!-- Print debugging output -->
		<f:if condition="{debug}">
			<fpdf:addPage />
			<fpdf:variable.set name="debugText">================================================================================
DEBUGGING:
================================================================================
{debugText}</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="" size="10" />
			<fpdf:multiCell width="{contentWidth}" height="4" text="{debugText}" border="{debug}" />
		</f:if>

	</fpdf:addPage>
</fpdf:pdf>
</html>
```


## Fluid FPDF Tutorial 1

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>
	<fpdf:addPage>
		<fpdf:setFont family="Arial" style="B" size="16" />
		<fpdf:cell width="40" height="10" text="Hello World!" />
	</fpdf:addPage>
</fpdf:pdf>
</html>
```


## Fluid FPDF Tutorial Footer

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


## Fluid FPDF - FPDI Example

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


## Fluid FPDF Tutorial HTML MultiCell für RTE-Texte

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
	<fpdf:pdf>
		<fpdf:addPage>

			<fpdf:setFont family="Courier" style="N" size="9" />
			<fpdf:variable.set name="multiLineText">
				<p>Mit dem zentralen Innovationsprogramm Mittelstand (ZIM) fördert das BMWi mittelständische&nbsp;Unternehmen deutschlandweit in der Umsetzung von innovativen Vorhaben über den Stand der Technik hinaus. Gefördert wird die Entwicklung von Produkten, Verfahren oder technischen Dienstleistungen; sowohl in Einzel- (ZIM-EP) als auch in Kooperationsprojekten (ZIM-KOOP).</p>
				<p>Als Vorstufe zum "großen" ZIM-Projekt wurde mit der Anpassung der Förderrichtlinie die Durchführbarkeitsstudie (ZIM-DS) eingeführt. Ziel ist die Realisierbarkeit und die Erfolgsaussichten innovativer Produkte, Verfahren oder technischer Dienstleistungen anhand von Vorprojekten und Studien zu validieren.</p>
				<p>&nbsp;</p>
				<p><strong>Wer wird gefördert?</strong></p>
				<p>ZIM-Durchführbarkeitsstudie</p>
				<ul>
					<li>Kleinstunternehmen (weniger als&nbsp;10 Mitarbeiter:innen)</li>
					<li>junges Unternehmen (weniger als 10 Jahre)</li>
					<li>Erstbewilligungsempfänger:innen (keine FuE-Förderungen in den letzten 3 Jahren)</li>
				</ul>
				<p>ZIM-Einzel- und Kooperationsprojekte</p>
				<ul>
					<li>KMU bis 500 Mitarbeiter:innen&nbsp;(ggf. bis 1.000 Mitarbeiter:innen)</li>
					<li>auch Kooperationen mit Hochschulen&nbsp;/ FuE-Einrichtungen</li>
				</ul>
				<p>&nbsp;</p>
				<p><strong>Was wird gefördert?</strong></p>
				<ul>
					<li>technische Vorprojekte, Studien und Tests sowie Recherchearbeiten (Markt, Stand der Technik, etc.)</li>
					<li>themenoffene Entwicklungen (Personalkosten, Dienstleister:innen) neuer Produkte, Verfahren oder Dienstleistungen, welche nicht Stand der Technik sind</li>
				</ul>
				<p>&nbsp;</p>
				<p><strong>Wie wird gefördert?</strong></p>
				<p>ZIM-Durchführbarkeitsstudie</p>
				<ul>
					<li>Zuschuss: bis zu&nbsp;70.000 €</li>
					<li>Förderquote:&nbsp;50 % bis 70 % (je nach Unternehmensgröße)</li>
				</ul>
				<p>ZIM-Einzelprojekt</p>
				<ul>
					<li>Zuschuss: bis zu 247.500 €</li>
					<li>Förderquote: 25 % bis 45&nbsp;% (je nach Unternehmensgröße)</li>
				</ul>
				<p>ZIM-Kooperationsprojekt (mind. zwei Partner:innen)</p>
				<p>Unternehmen</p>
				<ul>
					<li>Zuschuss: bis zu 270.000 €&nbsp;(je Kooperationspartner:innen)</li>
					<li>Förderquote: 30 %&nbsp;- 60 %&nbsp;(je nach Unternehmensgröße)</li>
				</ul>
				<p>Forschungs- und Entwicklungseinrichtungen</p>
				<ul>
					<li>Zuschuss: bis zu 220.000 €</li>
					<li>Förderquote: 100 %</li>
				</ul>
				<p>Förderfähige Kosten</p>
				<ul>
					<li>Personalkosten</li>
					<li>externe Dienstleister:innen</li>
				</ul>
			</fpdf:variable.set>
			<fpdf:htmlMultiCell x="25"
								width="150"
								height="4"
								listMarginBottom="2"
								listIndent="0"
								listIndentMargin="4"
								listItemMarginBottom="0"
								paragraphMarginBottom="4"
								text="{multiLineText}"/>

			<fpdf:addPage />

			<fpdf:variable.set name="crmtest"><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
				Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadga.</p>
				<p>Hier ein einzelner Paragraph mit Sonderzeichen sdfgsdfgs &gt;dsfgsdfg sd&gt; &lt; #+!"§$%&amp;/(.<br />
					Hier ein paar gängige: Euro (€), apo-a (à), bullet (•)</p>
				<p>Hier Text mit <b>bold</b>, und ein wenig <i>italic</i>, dann <u>underlined</u> und abschließend durch <strike>gestrichen</strike>. Jetzt eine Kombination <i><b>aus bold und italic</b></i>, <i><u>italic und underlined</u></i>,&nbsp;</p>
				<p>Als nächstes starten wir eine numerische Aufzählung:</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absatz in der Aufzählung: amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Unter diesem Punkt startet eine verschachtete Aufzählung mit Bullets:
						<ul>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata san.</li>
							<li>Lorem ipsum dolor sit amet, sed diam, consetetur sadipscing elitr.</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</li>
							<li>nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
						</ul>
					</li>
					<li>Hier geht es mit Punkt 4 weiter. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
				</ol>
				<p>Normaler Text und jetzt folgen zwei harte breaks..<br />
					<br />
					<br />
					..und hier geht es mit dem Text weiter.</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat
						<ol>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat
								<ol>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
										Hier ein Absat</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
										Hier ein Absat</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
										Hier ein Absat</li>
								</ol>
							</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
						</ol>
					</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
				</ol>
			</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="N" size="8.50" />
			<fpdf:htmlMultiCell height="4"
								width="160"
								x="20"
								text="{crmtest}" />

			<fpdf:addPage />

			<fpdf:variable.set name="crmtest"><h1>Headline 1</h1><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
				Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadga.</p>
				<p>Hier ein einzelner Paragraph mit Sonderzeichen sdfgsdfgs &gt;dsfgsdfg sd&gt; &lt; #+!"§$%&amp;/(.<br />
					Hier ein paar gängige: Euro (€), apo-a (à), bullet (•)</p>
				<p>Hier Text mit <b>bold</b>, und ein wenig <i>italic</i>, dann <u>underlined</u> und abschließend durch <strike>gestrichen</strike>. Jetzt eine Kombination <i><b>aus bold und italic</b></i>, <i><u>italic und underlined</u></i>,&nbsp;und hier <strong>strong</strong></p>
				<h2>Headline 2</h2>
				<p>Als nächstes starten wir eine numerische Aufzählung:</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absatz in der Aufzählung: amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
					<li>Unter diesem Punkt startet eine verschachtete Aufzählung mit Bullets:
						<ul>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata san.</li>
							<li>Lorem ipsum dolor sit amet, sed diam, consetetur sadipscing elitr.</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</li>
							<li>nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
						</ul>
					</li>
					<li>Hier geht es mit Punkt 4 weiter. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
				</ol>
				<h3>Headline 3</h3>
				<p>Normaler Text und jetzt folgen zwei harte breaks..<br />
					<br />
					<br />
					..und hier geht es mit dem Text weiter.</p>
				<h4>Headline 4</h4>
				<ol>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat
						<ol>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat
								<ol>
									<li>Lorem ipsu</li>
									<li>Lorem ipsum in Absat</li>
									<li>Lorem ips Absat</li>
								</ol>
							</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
							<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
								Hier ein Absat</li>
						</ol>
					</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />
						Hier ein Absat</li>
				</ol>
				<h5>Headline 5</h5>
				<p>Normaler Text und jetzt folgen zwei harte breaks..<br />
					<br />
					<br />
					..und hier geht es mit dem Text weiter.</p>
				<pagebreak />
				<h1>Headline 1 <b>bold</b> <i>italic</i></h1><p>Normaler Text&nbsp;sdfg sdfg <small>this is a small text</small> sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h1>Headline 1 <b>bold</b> <i>italic</i></h1><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h2>Headline 2 <b>bold</b> <i>italic</i></h2><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h3>Headline 3 <b>bold</b> <i>italic</i></h3><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h4>Headline 4 <b>bold</b> <i>italic</i></h4><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>
				<h5>Headline 5 <b>bold</b> <i>italic</i></h5><p>Normaler Text&nbsp;sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdf.<br />
					Hier beginnt ein neuer Absatz dfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfg sdadgasdfdfg sdfg sdfg sdfggasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfdgasdfdfg sdfg sdfg sdfg sdadgasdfd</p>

			</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="N" size="8.50" />
			<fpdf:htmlMultiCell height="4"
								width="160"
								x="20"
								text="{crmtest}" />

			<fpdf:addPage />

			<fpdf:variable.set name="crmtest">
				<h5>Beispiel für Definitionslisten</h5>
				<dl>
					<dt>Erstes Etikett</dt>
					<dd>Erste Definition</dd>
					<dt>Zweites Etikett</dt>
					<dd>Zweite Definition</dd>
					<dt>Drittes Etikett</dt>
					<dd>Dritte Definition</dd>
				</dl>
			</fpdf:variable.set>
			<fpdf:setFont family="Courier" style="N" size="8.50" />
			<fpdf:htmlMultiCell height="4"
								width="160"
								x="20"
								text="{crmtest}"
								listIndent="0"
								ddTitleBold="1"
								ddTitleWidth="35" />

		</fpdf:addPage>
	</fpdf:pdf>
</html>

```


## Fluid FPDF Tutorial Index

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>
	<fpdf:setFont family="Arial" style="" size="15" />

	<fpdf:addPage />
	<fpdf:bookmark title="Section 1" isUTF8="false" />
	<fpdf:cell width="0" height="6" text="Section 1" />
	<fpdf:ln height="10" />
	<fpdf:bookmark title="Subsection 1" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 1" />
	<fpdf:ln height="50" />
	<fpdf:bookmark title="Subsection 2" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 2" />

	<fpdf:addPage />
	<fpdf:bookmark title="Section 2" isUTF8="false" />
	<fpdf:cell width="0" height="6" text="Section 2" />
	<fpdf:ln height="10" />
	<fpdf:bookmark title="Subsection 3" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 3" />

	<fpdf:addPage />
	<fpdf:cell width="0" height="6" text="Index" />
	<fpdf:ln height="10" />
	<fpdf:createIndex />

</fpdf:pdf>
</html>
```


## Fluid FPDF Tutorial Intro Index

```xml
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
	  xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
	  xmlns:fpdf="http://typo3.org/ns/CodingMs/FluidFpdf/ViewHelpers"
	  data-namespace-typo3-fluid="true">
<fpdf:pdf>
	<fpdf:setFont family="Arial" style="" size="15" />

	<fpdf:addPage />
	<!-- Add an empty page -->

	<fpdf:addPage />
	<fpdf:bookmark title="Section 1" isUTF8="false" />
	<fpdf:cell width="0" height="6" text="Section 1" />
	<fpdf:ln height="10" />
	<fpdf:bookmark title="Subsection 1" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 1" />
	<fpdf:ln height="50" />
	<fpdf:bookmark title="Subsection 2" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 2" />

	<fpdf:addPage />
	<fpdf:bookmark title="Section 2" isUTF8="false" />
	<fpdf:cell width="0" height="6" text="Section 2" />
	<fpdf:ln height="10" />
	<fpdf:bookmark title="Subsection 3" isUTF8="false" level="1" y="-1" />
	<fpdf:cell width="0" height="6" text="Subsection 3" />

	<fpdf:goToPage number="1" />
	<fpdf:setXY x="10" y="20" />
	<fpdf:cell width="0" height="6" text="Index" />
	<fpdf:ln height="10" />
	<fpdf:createIndex />

	<!-- !Go back to last page! -->
	<fpdf:goToPage />

</fpdf:pdf>
</html>
```


## PDF/A mit ZUGFeRD (E-Rechnung)

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


## How to add a missing € character to a font

1.  Open Font with FontForge
2.  Menu -> View -> Goto -> search for 'Euro'
3.  Copy character 8364
4.  Select character 128 and paste the copied € character
5.  Menu -> Encoding -> Reencode -> ISO 8859-1
6.  Select character 128 -> right click on 'Glyph Info' -> enter 'Euro' in 'Glyph Name' and press 'Set From Name'
7. Menu -> File -> Generate Fonts -> save as .ttf

**Attention:** While generating the FPDF font with makefont, select *cp1250*!

Perform the same actions for adding a bullet:

1.  Menu -> View -> Goto -> search for 'Bullet'
2.  Copy character 8226
3.  Select character 149 and paste the copied character
4.  Select character 128 -> right click on 'Glyph Info' -> enter 'bullet' in 'Glyph Name' and press 'Set From Name'


## How to write a PDF template, which returns the PDF as string?
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


## A character of my font isn't displayed well in PDF (for example the €-character) - what to do?
First create a character dump of the string, in order to identify which characters are used:

```xml
<fpdf:debug.stringCharacterDump string="1.20 €" />
```

The result should look like this:

```text
1 : 49
. : 46
2 : 50
0 : 48
 : 32
? : 63
 : 0
```

Now you know, your €-character is placed by the character with ASCII-No. *63*.

In the next step, you perform a font dump with the font you want to use:

```xml
<fpdf:debug.fontDump />
```

I our example, the character on number *63* is displayed as *?* - that's not what we expect. Take a closer look on your
font dump and search for the €-character. We found it on ASCII-No. *162*.


## Wie man ein Hintergrund-PDF festlegt

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


## How to use your own fonts in PDF
For using your own fonts in Fluid-FPDF, you need to convert the fonts into a special format.

The FPDF-Website supports a small Converting-Tool: http://www.fpdf.org/makefont/

![Fluid-FPDF Font-Converting Tool][#image_001]

Just choose your TTF-File and select the required encoding (for example ISO-8859-15). The result are two files - one
php-File and one z-File.

![Fluid-FPDF Font-Converting Result][#image_002]

For example, you want to convert the Ubuntu-Font which is available on Google-Webfonts. You need the regular and bold
font. Downloaded you receive the following files:

*	Ubuntu-Regular.ttf
*	Ubuntu-Bold.ttf

Once converted, you have these files:

*	Ubuntu-Regular.php
*	Ubuntu-Regular.z
*	Ubuntu-Bold.php
*	Ubuntu-Bold.z

Follow the next steps, in order to use the font:

1.	Upload these two file into your TYPO3-Installation
2.	Define the new Fontpath in *fpdf:pdf*
3.	Add fonts with the *fpdf:addFont*
4.	Set the required font
5.	Write your text

```xml
<fpdf:pdf fontPath="EXT:theme_bootstrap4/Resources/Private/Fonts">
	<!-- Add required Fonts -->
	<fpdf:addFont family="Ubuntu" style="N" filename="Ubuntu-Regular.php" />
	<fpdf:addFont family="Ubuntu" style="B" filename="Ubuntu-Bold.php" />
	<fpdf:addPage orientation="P" size="A4">
		<!-- Set font -->
		<fpdf:setFont family="Ubuntu" style="N" size="12" />
		<!-- Write your text -->
		<fpdf:multiCell width="100" height="5" text="Hello world" />
		<f:comment>
			// Your PDF content...
		</f:comment>
	</fpdf:addPage>
</fpdf:pdf>
```

>	**Notice:**
>
>	You need some support by converting your font? Get in contact with us: typo3@coding.ms


[#image_001]: https://www.coding.ms/fileadmin/extensions/fluid_fpdf/current/Documentation/Images/Fluid-FPDF-Font-Converting-Tool.png "Fluid-FPDF Font-Converting Tool"
[#image_002]: https://www.coding.ms/fileadmin/extensions/fluid_fpdf/current/Documentation/Images/Fluid-FPDF-Font-Converting-Result.png "Fluid-FPDF Font-Converting Result"


## Wie löse ich eine neue Seite aus?

Wenn Sie innerhalb einer längeren HTML-Ausgabe mit _fpdf:htmlMultiCell_ eine neue Seite auslösen möchten, fügen Sie einfach `<p>ADD_PAGE</p>` in den HTML-Code ein.


## How to pass some variables into the Footer-Template?

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


## Fluid FPDF ViewHelpers

### fpdf:addFont
Imports a TrueType, OpenType or Type1 font and makes it available.
It is necessary to generate a font definition file first with the MakeFont utility.
The definition file (and the font file itself when embedding) must be present in the font directory. If it is not found,
the error "Could not include font definition file" is raised.

#### Parameter

| **Name**     | **Type** | **Default** | **Description**                                                                                                            |
|:-------------|:---------|:------------|:---------------------------------------------------------------------------------------------------------------------------|
| **family**   | string   |             | Font family. The name can be chosen arbitrarily. If it is a standard family name, it will override the corresponding font. |
| **style**    | string   |             | Font style. (N: regular, B: bold, I: italic)                                                                               |
| **filename** | string   |             | The font definition file. By default, the name is built from the family and style, in lower case with no space.            |

#### Return
`void`

#### Usage:
```xml
<fpdf:setFont family="Arial" style="B" size="10.5" />
```

------------------------------------------------------------------------------------------------------------------------


### fpdf:pdf
Creates a new PDF.

#### Parameter

| **Name**         | **Type** | **Default**                             | **Description**                                                                                   |
|:-----------------|:---------|:----------------------------------------|:--------------------------------------------------------------------------------------------------|
| **filename**     | string   | FluidFpdf.pdf                           | The name of the file                                                                              |
| **destination**  | string   | I                                       | Destination where to send the document. It can take one of the following values: I, D, F, S       |
| **orientation**  | string   | P                                       | Default page orientation.                                                                         |
| **unit**         | string   | mm                                      | User unit.                                                                                        |
| **size**         | string   | A4                                      | The size used for pages.                                                                          |
| **title**        | string   | Fluid-Fpdf                              | Defines the title of the document.                                                                |
| **subject**      | string   | Fluid-Fpdf                              | Defines the subject of the document.                                                              |
| **author**       | string   | Fluid-Fpdf                              | FDefines the author of the document.                                                              |
| **keywords**     | string   | TYPO3 Fluid FPDF typo3@coding.ms        | Associates keywords with the document, generally in the form 'keyword1 keyword2 ...'.             |
| **fontPath**     | string   | EXT:fluid_fpdf/Resources/Private/Fonts  | Defines the font path for the included fonts (for example: EXT:fluid_fpdf/Resources/Private/Fonts) or some TYPO3 path like /fileadmin/fonts/    |
| **imagePath**    | string   | EXT:fluid_fpdf/Resources/Private/Images | Defines the image path for the included images (for example: EXT:fluid_fpdf/Resources/Private/Images) or some TYPO3 path like /fileadmin/fonts/ |
| **characterMap** | array    |                                         | Defines a character map, for mapping characters. For Example, for mapping €-character with character at ASCII-No. 162, use {162: '€'}           |

#### Return
`void`

#### Usage:
```xml
<fpdf:pdf>
	<fpdf:addPage orientation="P" size="A4">
		// Your PDF content...
	</fpdf:addPage>
</fpdf:pdf>
```

------------------------------------------------------------------------------------------------------------------------


### fpdf:setFont
Sets the font used to print character strings.

#### Parameter

| **Name**   | **Type** | **Default** | **Description**                                                       |
|:-----------|:---------|:------------|:----------------------------------------------------------------------|
| **family** | string   | Arial       | Family font.                                                          |
| **style**  | string   | N           | Font style. (N: regular, B: bold, I: italic, U: underline)            |
| **size**   | string   | 12          | Font size in points.                                                  |

#### Return
`void`

#### Usage:
```xml
<fpdf:setFont family="Arial" style="B" size="10.5" />
```

------------------------------------------------------------------------------------------------------------------------


### fpdf:setSourceFile
Set the source file for PDF page templates.

#### Parameter

| **Name** | **Type** | **Default**                                                         | **Description**                      |
|:---------|:---------|:--------------------------------------------------------------------|:-------------------------------------|
| **file** | string   | EXT:fluid_fpdf/Resources/Private/Pdf/TYPO3_2012-logo_sRGB_color.pdf | Filename with abs path of the source |

#### Return
`int` - Number of pages found in source file

#### Usage:
```xml
<fpdf:setSourceFile file="EXT:fluid_fpdf/Resources/Private/Pdf/Normbriefbogen_DIN5008.pdf" />
```

------------------------------------------------------------------------------------------------------------------------


### fpdf:useTemplate
Prints a PDF-Template into a page

#### Parameter

| **Name**           | **Type** | **Default** | **Description**                                                                       |
|:-------------------|:---------|:------------|:--------------------------------------------------------------------------------------|
| **pageNo**         | int      | 0           | The page number                                                                       |
| **x**              | int      | 0           | The x-position                                                                        |
| **y**              | int      | 0           | The y-position                                                                        |
| **w**              | int      | 0           | The new width of the template                                                         |
| **h**              | int      | 0           | The new height of the template                                                        |
| **adjustPageSize** | boolean  | false       | If set to true the current page will be resized to fit the dimensions of the template |

#### Return
`void`

#### Usage:
```xml
<fpdf:useTemplate pageNo="1" x="0" y="0" w="0" h="0" adjustPageSize="0" />
```

------------------------------------------------------------------------------------------------------------------------


## Fluid-FPDF for TYPO3 Change-Log

### 2026-04-29 Release of version 3.0.1

*	[BUGFIX] Raise version ext_emconf.php



### 2026-04-29 Release of version 3.0.0

*	[TASK] Migrate for TYPO3 14 and remove support for TYPO3 12
*	[TASK] Clean up the PDF-A demo and documentation
*	[TASK] Normalize and move upgrade wizards
*	[TASK] Migration for TYPO3 14 and remove support for TYPO3 12
*	[TASK] Add or update PHP doc comment for classes
*	[TASK] Migrate StandaloneView to ViewFactory



### 2026-04-17 Release of version 2.9.5

*	[BUGFIX] Add missing extension configuration



### 2026-04-16 Release of version 2.9.4

*	[TASK] Add update check in flex-form



### 2026-04-01 Release of version 2.9.3

*	[TASK] Add and extend examples in documentation



### 2026-03-30 Release of version 2.9.2

*	[TASK] Add site set configuration
*	[TASK] Optimize and extend documentation



### 2026-02-09 Release of version 2.9.1

*	[TASK] Optimize documentation



### 2026-02-03 Release of version 2.9.0

*	[FEATURE] Add SpacelessRaw ViewHelper as a shorter replacement for Spaceless + FormatRaw



### 2026-01-26 Release of version 2.8.8

*	[TASK] Improve code quality and documentation



### 2026-01-20 Release of version 2.8.7

*	[BUGFIX] Avoid issues on using get-image-orientation with an invalid image



### 2026-01-15 Release of version 2.8.6

*	[TASK] Switch methods from protected to private in the final DrawItem class



### 2026-01-09 Release of version 2.8.5

*	[TASK] Optimize code style and quality
*	[BUGFIX] Upgrade FPDFi in order to avoid issues with PHP 8.4



### 2025-10-10 Release of version 2.8.4

*	[BUGFIX] Fix is-valid-image view-helper
*	[TASK] Clean up change-log



### 2025-09-26 Release of version 2.8.3

*	[BUGFIX] Fix list-type to c-type update wizard for TYPO3 12



### 2025-08-29 Release of version 2.8.2

*	[BUGFIX] Remove missing documentation page



### 2025-08-21 Release of version 2.8.1

*	[BUGFIX] Remove migration documentation page because there is no migration required



### 2025-08-20 Release of version 2.8.0

*	[TASK] Update developer section in documentation
*	[TASK] Add new documentation sections and rebuild documentation
*	[TASK] Update to FPDF version 1.86
*	[FEATURE] Add PDF/A-3b support
*	[FEATURE] Add ZUGFeRD / Factur-X support
*	[TASK] Add or update PHP doc comment for classes
*	[TASK] Add translations.json file for documentation



### 2025-05-30 Release of version 2.7.7

*	[BUGFIX] Fix issue in documentation



### 2025-04-14 Release of version 2.7.6

*	[BUGFIX] Fix new content element wizards for TYPO3 12



### 2025-02-19 Release of version 2.7.5

*	[TASK] Mark compatible wit PHP 8.4



### 2025-01-21 Release of version 2.7.4

*	[BUGFIX] Insert missing PluginUtility for plugin registration



### 2025-01-19 Release of version 2.7.3

*	[TASK] Fix code style



### 2025-01-17 Release of version 2.7.2

*	[BUGFIX] Remove migration command from services.yaml



### 2025-01-17 Release of version 2.7.1

*	[TASK] Add new content element wizard and missing icon registration
*	[TASK] Migrate registering page-tsconfig
*	[TASK] Migrate to plugins to content elements and icon registration
*	[TASK] Remove signal/slot from older TYPO3 versions



### 2025-01-xx Release of version 2.7.0

*	[TASK] Migrate to TYPO3 13, remove support for TYPO3 11
*	[TASK] Migrate utf8_decode functionality
*	[TASK] Migrate utf8_encode functionality
*	[TASK] Migrate TypoScript imports
*	[TASK] Update feature listing in readme files



### 2023-12-10 Release of version 2.6.0

*	[FEATURE] Add view helper for rotating text



### 2023-12-05 Release of version 2.5.2

*	[BUGFIX] WriteHtmlTrait::PutLink() calls Write() with fix line height
*	[TASK] Optimize version conditions in PHP code



### 2023-11-13 Release of version 2.5.1

*	[BUGFIX] Fix bullet list and paragraph line breaks in HTML printing



### 2023-11-10 Release of version 2.5.0

*	[FEATURE] Introduce dl, dt, dd tags in HTML for definition lists for HtmlMultiCell
*	[BUGFIX] Improve HTML tag documentation in features



### 2023-11-02 Release of version 2.4.6

*	[BUGFIX] Remove red debugging table border



### 2023-11-01 Release of version 2.4.5

*	[TASK] Clean up documentation



### 2023-10-27 Release of version 2.4.4

*	[BUGFIX] Fix access on non defined ctype index in backend preview



### 2023-09-22 Release of version 2.4.3

*	[TASK] Refactor and optimize HtmlMultiCellViewHelper
*	[TASK] Introduce <pagebreak> tag in HTML for triggering a PDF page break
*	[TASK] Update and extend documentation



### 2023-09-20 Release of version 2.4.2

*	[TASK] Introduce listMarginBottom listIndentMargin attribute for HtmlMultiCellViewHelper



### 2023-09-13 Release of version 2.4.1

*	[BUGFIX] Fix SetFontViewHelper for nullable style argument



### 2023-09-04 Release of version 2.4.0

*	[TASK] Migrate to TYPO3 12 and remove support for TYPO3 10



### 2023-02-23 Release of version 2.3.7

*	[TASK] Generated documentation for TypoScript constants
*	[TASK] Normalize and migrate configuration files
*	[BUGFIX] Fix undefined array index in CellViewHelper for PHP 8+
*	[BUGFIX] Fix H tags and gaps after UL tags



### 2022-11-14 Release of version 2.3.6

*	[BUGFIX] Suppress warning in WriteHtmlTrait
*	[BUGFIX] Fix type issue in Barcode trait



### 2022-07-28 Release of version 2.3.5

*	[BUGFIX] Suppress warning on file_exists in Image ViewHelper



### 2022-05-27 Release of version 2.3.4

*	[BUGFIX] Fix image paths for TYPO3 11
*	[BUGFIX] Fix view helper namespaces



### 2022-05-12 Release of version 2.3.3

*	[TASK] Add replace and explode ViewHelper



### 2022-04-23 Release of version 2.3.2

*	[TASK] Insert index space check
*	[TASK] Move extension icon into public folder
*	[BUGFIX] Fix casting issue in index creation



### 2022-04-16 Release of version 2.3.1

*	[TASK] Add condition for ADD_PAGE in HTML output for triggering new pages
*	[BUGFIX] Fix spaces in beginning of a line after a line break



### 2022-02-07 Release of version 2.3.0

*	[TASK] Optimize code style
*	[TASK] Clean up Documentation files
*	[TASK] Clean up PHP sources and dividing by traits
*	[BUGFIX] Fix documentation configuration
*	[TASK] Update FPDF library to version 1.84
*	[TASK] Migration for TYPO3 11.5 - remove support for TYPO3 9.5
*	[TASK] Add documentations configuration



### 2022-05-12 Release of version 2.2.2

*	[BUGFIX] Fix explode ViewHelper limit



### 2022-05-12 Release of version 2.2.1

*	[BUGFIX] Fix spaces in beginning of a line after a line break
*	[TASK] Add replace and explode ViewHelper



### 2021-06-10 Release of version 2.2.0

*	[FEATURE] Add barcode ViewHelper



2021-01-13  ## Release of version 2.1.5

*	[BUGFIX] Fix deprecation notices in old PHP array usage



### 2020-11-30 Release of version 2.1.4

*	[TASK] Remove quotation mark from description



### 2020-11-19 Release of version 2.1.3

*	[TASK] Extend extra tags in composer.json



### 2020-06-19 Release of version 2.1.2

*	[TASK] Add extra tags in composer.json
*	[TASK] Reformat ChangeLog.md



### 2020-06-19 Release of version 2.1.1

*	[BUGFIX] Remove use statements from ext_tables and ext_localconf



### 2020-04-06 Release of version 2.1.0

*	[BUGFIX] Fix Flexform registration and render types
*	[TASK] Source code optimizations
*	[BUGFIX] Fix usage of $EXTKEY for TYPO3 10.4
*	[TASK] Migration for TYPO3 10.4
*	[TASK] FPDF library upgrade



### 2020-04-02 Release of version 2.0.5

*	[BUGFIX] Fix output to local file



### 2020-03-02 Release of version 2.0.4

*	[BUGFIX] Fix GetStringWidth ViewHelper parameter definition



### 2019-10-13 Release of version 2.0.3

*	[TASK] Add Gitlab-CI configuration.
*	[TASK] Change image urls in the documentation.



### 2019-02-27 Release of version 2.0.2

*	[BUGFIX] Removing DEV identifier.



### 2019-01-28 Release of version 2.0.1

*	[BUGFIX] Fixing argument definition in SetFontSize ViewHelper.



### 2019-01-28 Release of version 2.0.0

*	[TASK] Migration for TYPO3 9.5.
*	[FEATURE] Adding paragraphMarginBottom attribute in HtmlMultiCell-ViewHelper.
*	[BUGFIX] Removing double UTF8 encoding in Cell-ViewHelper.
*	[TASK] Optimizing spaces between ol/ul li in HtmlMultiCell.



### 2018-08-23 Release of version 1.13.0

*	[FEATURE] Adding HtmlMultiCell ViewHelper, which is able to handle the following HTML tags: b, u, i, a, p, br, strike, strong, small, em, ul, ol and li
*	[BUGFIX] Fixing conposer.json.
*	[FEATURE] Adding UTF8 Encode ViewHelper.
*	[BUGFIX] Fixing encoding issue in Cell ViewHelper.



### 2018-06-04 Release of version 1.12.0

*	[FEATURE] Adding possibility to pass variables into Footer-Template (see Readme.md).



### 2018-02-22 Release of version 1.11.1

*	[BUGFIX] Fixing image path issue by using config.absRefPrefix = /.



### 2018-02-02 Release of version 1.11.0

*	[BUGFIX] Fixing image path issue by using config.absRefPrefix = /.
*	[FEATURE] Adding IsValidImage-ViewHelper for checking a valid image type. It check if an image is vector based and if the image owns a supported file extensions.
*	[BUGFIX] Fixing UseTemplate-ViewHelper, which import the first page twice.
*	[TASK] Updating the FPDI library to version 2.0.0.



### 2018-01-13 Release of version 1.10.1

*	[BUGFIX] Fixing AddFont-ViewHelper.



### 2018-01-11 Release of version 1.10.0

*	[FEATURE] Adding support for EPS and AI image files.
*	[FEATURE] Adding custom sizes for pages. Instead of using A4, just use 213x321 in mm.



### 2017-11-23 Release of version 1.9.0

*	[TASK] Get template container variable optimization
*	[TASK] Adding new demo in documentation
*	[FEATURE] Adding ViewHelper for GetImageHeightFromWidth and GetImageWidthFromHeight



### 2017-11-19 Release of version 1.8.0

*	[FEATURE] Adding UTF8-Decode ViewHelper



### 2017-10-24 Release of version 1.7.0

*	[BUGFIX] Fixing image ViewHelper. By using config.absRefPrefix the image path is broken.
*	[FEATURE] Adding Footer feature
*	[BUGFIX] Fixing ViewHelper attribute inline line breaks



### 2017-09-27 Release of version 1.6.0

*	[FEATURE] Adding GetImageOrientation ViewHelper for identifying, if an image is portrait, landscape or squared.
*	[FEATURE] Adding SetFontSpacing ViewHelper for setting letter spacing.
*	[BUGFIX] Fixing pageno ViewHelper
*	[FEATURE] Adding GetIndexOrientation ViewHelper for writing a customized index.



### 2017-09-25 Release of version 1.5.0

*	[BUGFIX] Fixing page module content preview
*	[FEATURE] Adding Bookmarks feature (see: http://fpdf.org/en/script/script1.php).
*	[FEATURE] Adding Index feature (see: http://fpdf.org/en/script/script13.php).
*	[FEATURE] Adding GoToPage-ViewHelper for getting to previous pages (see: FpdfTutorialIntroIndex.html example).
*	[BUGFIX] Fixing encoding of windows quotes
*	[BUGFIX] Fixing style (N === '') in SetFont PDF-ViewHelper



### 2017-07-09 Release of version 1.4.2

*	[BUGFIX] Support for destination S in PDF-ViewHelper
*	[BUGFIX] Fixing exit in PDF-ViewHelper



### 2017-06-15 Release of version 1.4.1

*	[TASK] Fixing version numbers



### 2017-06-14 Release of version 1.4.0

*	[TASK] Migration to TYPO3 8.6



### 2017-04-11 Release of version 1.3.0

*	[FEATURE] Adding Debug/FontDump-ViewHelper for dumping all characters with ASCII-No.
*	[FEATURE] Adding Debug/StringCharacterDump-ViewHelper for dumping all characters from a string (with ASCII-No.)
*	[FEATURE] PDF-ViewHelper now got a *characterMap* attributes, which allows you to map characters to other ASCII-No. within the PDF-Font.
*	[TASK] SetFont-ViewHelper: Attribute style: Default value is now 'N'
*	[TASK] UseTemplate-ViewHelper: Attribute pageNo: Default value is now '0'
*	[TASK] Documentation
*	[BUGFIX] Fixing GetStringWidth ViewHelper



### 2015-09-02 Release of version 1.2.1

*	[BUGFIX] Fixing conversion of the euro symbol



### 2015-09-02 Release of version 1.2.0

*	[TASK] PHP 7 compatibility
*	[FEATURE] Adding GetPageWidth- and GetPageHeight-ViewHelper
*	[TASK] Upgrade to FPDF 1.8.1
*	[FEATURE] Adding hex color parameter for SetDrawColor-, SetFillColor- and SetTextColor-ViewHelper



### 2015-05-19 Release of version 1.1.0

*	[FEATURE] Adding FPDI feature, merge existing PDF-Pages to PDF


