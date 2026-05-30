<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Prints a HTML text
 */
class HtmlMultiCellViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('text', 'string', 'String to print.', false, '');
        $this->registerArgument('x', 'float', 'X position of the text block', false, 0.0);
        $this->registerArgument('width', 'float', 'Width of cells. If 0, they extend up to the right margin of the page.', false, 0.0);
        $this->registerArgument('height', 'float', 'Height of a line.', false, 0.0);
        $this->registerArgument('listIndent', 'float', 'Indent of listings and enumerations', false, 8.0);
        $this->registerArgument('listIndentMargin', 'float', 'Margin of listings bullets text', false, 0.0);
        $this->registerArgument('listMarginBottom', 'float', 'Margin bottom of listing UL-tag', false, 0.0);
        $this->registerArgument('listItemMarginBottom', 'float', 'Margin bottom of listing LI-tag', false, null);
        $this->registerArgument('paragraphMarginBottom', 'float', 'Margin bottom for paragraphs (P-tag). If no value for listMarginBottom and/or listItemMarginBottom is set, this value will be used for backwards compatibility.', false, 0.0);
        $this->registerArgument('ddTitleBold', 'bool', 'List definition title be bold or not bold', false, false);
        $this->registerArgument('ddTitleWidth', 'float', 'Width of the list definition title column', false, 0.0);
    }

    /**
     * Prints a HTML text
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
        $fpdf->WriteHTML(
            (string)$text,
            $this->arguments['x'],
            $this->arguments['width'],
            $this->arguments['height'],
            $this->arguments['listIndent'],
            $this->arguments['listIndentMargin'],
            $this->arguments['listMarginBottom'],
            $this->arguments['listItemMarginBottom'],
            $this->arguments['paragraphMarginBottom'],
            $this->arguments['ddTitleBold'],
            $this->arguments['ddTitleWidth']
        );
        $this->renderChildren();
    }
}
