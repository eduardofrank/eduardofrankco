# How to add a missing € character to a font

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
