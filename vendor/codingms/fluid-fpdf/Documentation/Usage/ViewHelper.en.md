# Fluid FPDF ViewHelpers

## fpdf:addFont
Imports a TrueType, OpenType or Type1 font and makes it available.
It is necessary to generate a font definition file first with the MakeFont utility.
The definition file (and the font file itself when embedding) must be present in the font directory. If it is not found,
the error "Could not include font definition file" is raised.

### Parameter

| **Name**     | **Type** | **Default** | **Description**                                                                                                            |
|:-------------|:---------|:------------|:---------------------------------------------------------------------------------------------------------------------------|
| **family**   | string   |             | Font family. The name can be chosen arbitrarily. If it is a standard family name, it will override the corresponding font. |
| **style**    | string   |             | Font style. (N: regular, B: bold, I: italic)                                                                               |
| **filename** | string   |             | The font definition file. By default, the name is built from the family and style, in lower case with no space.            |

### Return
`void`

### Usage:
```xml
<fpdf:setFont family="Arial" style="B" size="10.5" />
```

------------------------------------------------------------------------------------------------------------------------


## fpdf:pdf
Creates a new PDF.

### Parameter

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

### Return
`void`

### Usage:
```xml
<fpdf:pdf>
	<fpdf:addPage orientation="P" size="A4">
		// Your PDF content...
	</fpdf:addPage>
</fpdf:pdf>
```

------------------------------------------------------------------------------------------------------------------------


## fpdf:setFont
Sets the font used to print character strings.

### Parameter

| **Name**   | **Type** | **Default** | **Description**                                                       |
|:-----------|:---------|:------------|:----------------------------------------------------------------------|
| **family** | string   | Arial       | Family font.                                                          |
| **style**  | string   | N           | Font style. (N: regular, B: bold, I: italic, U: underline)            |
| **size**   | string   | 12          | Font size in points.                                                  |

### Return
`void`

### Usage:
```xml
<fpdf:setFont family="Arial" style="B" size="10.5" />
```

------------------------------------------------------------------------------------------------------------------------


## fpdf:setSourceFile
Set the source file for PDF page templates.

### Parameter

| **Name** | **Type** | **Default**                                                         | **Description**                      |
|:---------|:---------|:--------------------------------------------------------------------|:-------------------------------------|
| **file** | string   | EXT:fluid_fpdf/Resources/Private/Pdf/TYPO3_2012-logo_sRGB_color.pdf | Filename with abs path of the source |

### Return
`int` - Number of pages found in source file

### Usage:
```xml
<fpdf:setSourceFile file="EXT:fluid_fpdf/Resources/Private/Pdf/Normbriefbogen_DIN5008.pdf" />
```

------------------------------------------------------------------------------------------------------------------------


## fpdf:useTemplate
Prints a PDF-Template into a page

### Parameter

| **Name**           | **Type** | **Default** | **Description**                                                                       |
|:-------------------|:---------|:------------|:--------------------------------------------------------------------------------------|
| **pageNo**         | int      | 0           | The page number                                                                       |
| **x**              | int      | 0           | The x-position                                                                        |
| **y**              | int      | 0           | The y-position                                                                        |
| **w**              | int      | 0           | The new width of the template                                                         |
| **h**              | int      | 0           | The new height of the template                                                        |
| **adjustPageSize** | boolean  | false       | If set to true the current page will be resized to fit the dimensions of the template |

### Return
`void`

### Usage:
```xml
<fpdf:useTemplate pageNo="1" x="0" y="0" w="0" h="0" adjustPageSize="0" />
```

------------------------------------------------------------------------------------------------------------------------
