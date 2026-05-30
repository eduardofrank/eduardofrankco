# Fluid FPDF Tutorial Debugging

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
