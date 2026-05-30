<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Prints a character string. The origin is on the left of the first character, on the baseline.
 */
class TextViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('text', 'string', 'String to print.', false, '');
        $this->registerArgument('x', 'float', 'Abscissa of the origin.', false, 0.0);
        $this->registerArgument('y', 'float', 'Ordinate of the origin.', false, 0.0);
    }

    /**
     * Prints a character string. The origin is on the left of the first character, on the baseline
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
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Text($this->arguments['x'], $this->arguments['y'], $text);
        $this->renderChildren();
    }
}
