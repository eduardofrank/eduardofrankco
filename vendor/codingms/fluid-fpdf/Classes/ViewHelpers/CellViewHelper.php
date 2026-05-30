<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Prints a cell (rectangular area) with optional borders, background color and character string.
 */
class CellViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('width', 'float', 'Cell width. If 0, the cell extends up to the right margin.');
        $this->registerArgument('height', 'float', 'Cell height. Default value: 0.', false, 0.0);
        $this->registerArgument('text', 'string', 'String to print.', false, '');
        $this->registerArgument('border', 'string', 'Indicates if borders must be drawn around the cell.', false, '0');
        $this->registerArgument('ln', 'string', 'Indicates where the current position should go after the call.', false, '0');
        $this->registerArgument('align', 'string', 'Allows to center or align the text.', false, 'L');
        $this->registerArgument('fill', 'bool', 'Indicates if the cell background must be painted (true) or transparent (false). Default value: false.', false, false);
        $this->registerArgument('link', 'string', 'URL or identifier returned by AddLink().', false, '');
    }

    /**
     * Prints a cell (rectangular area) with optional borders, background color and character string.e
     */
    public function render(): void
    {
        $text = html_entity_decode($this->arguments['text'] ?? '');
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
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Cell($this->arguments['width'], $this->arguments['height'], $text, $this->arguments['border'], $this->arguments['ln'], $this->arguments['align'], $this->arguments['fill'], $this->arguments['link']);
        $this->renderChildren();
    }
}
