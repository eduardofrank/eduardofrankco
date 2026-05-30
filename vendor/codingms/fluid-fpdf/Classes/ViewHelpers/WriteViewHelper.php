<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This method prints text from the current position.
 * When the right margin is reached (or the \n character is met) a line break occurs and text continues from the left margin.
 * Upon method exit, the current position is left just at the end of the text.
 * It is possible to put a link on the text.
 */
class WriteViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('height', 'float', 'Line height.', false, 0.0);
        $this->registerArgument('text', 'string', 'String to print.', false, '');
        $this->registerArgument('link', 'string', 'URL or identifier returned by AddLink().', false, '');
    }

    /**
     * This method prints text from the current position.
     * When the right margin is reached (or the \n character is met) a line break occurs and text continues from the left margin.
     * Upon method exit, the current position is left just at the end of the text.
     * It is possible to put a link on the text.
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
        $fpdf->Write($this->arguments['height'], $text, $this->arguments['link']);
        $this->renderChildren();
    }
}
