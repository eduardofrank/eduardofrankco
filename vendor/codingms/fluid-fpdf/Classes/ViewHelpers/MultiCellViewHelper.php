<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This method allows printing text with line breaks. They can be automatic
 * (as soon as the text reaches the right border of the cell) or explicit
 * (via the \n character). As many cells as necessary are output, one below
 * the other.
 * Text can be aligned, centered or justified. The cell block can be framed
 * and the background painted.
 */
class MultiCellViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('width', 'float', 'Width of cells. If 0, they extend up to the right margin of the page.', false, 0.0);
        $this->registerArgument('height', 'float', 'Height of cells.', false, 0.0);
        $this->registerArgument('text', 'string', 'String to print.', false, '');
        $this->registerArgument('border', 'mixed', 'Indicates if borders must be drawn around the cell block.', false, 0);
        $this->registerArgument('align', 'string', 'Sets the text alignment.', false, 'L');
        $this->registerArgument('fill', 'bool', 'Indicates if the cell background must be painted (true) or transparent (false). Default value: false.', false, false);
    }

    /**
     * This method allows printing text with line breaks. They can be automatic
     * (as soon as the text reaches the right border of the cell) or explicit
     * (via the \n character). As many cells as necessary are output, one below
     * the other.
     * Text can be aligned, centered or justified. The cell block can be framed
     * and the background painted.
     */
    public function render(): void
    {
        $text = html_entity_decode($this->arguments['text']);
        // Map characters
        if ($this->templateVariableContainer->exists('characterMap')) {
            $characterMap = $this->templateVariableContainer->get('characterMap');
            if (is_array($characterMap) && !empty($characterMap)) {
                foreach ($characterMap as $asciiNo => $character) {
                    $text = str_replace($character, mb_convert_encoding(chr($asciiNo), 'UTF-8', 'ISO-8859-1'), $text);
                }
            }
        }
        if (iconv('UTF-8', 'cp1252//TRANSLIT', $text) != $text) {
            $text = iconv('UTF-8', 'cp1252//TRANSLIT', $text);
        } else {
            $text = mb_convert_encoding($text, 'ISO-8859-1', 'UTF-8');
        }
        // Replace line-breaks
        $text = str_replace('\n', "\n", (string)$text);
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->MultiCell($this->arguments['width'], $this->arguments['height'], $text, $this->arguments['border'], $this->arguments['align'], $this->arguments['fill']);
        $this->renderChildren();
    }
}
