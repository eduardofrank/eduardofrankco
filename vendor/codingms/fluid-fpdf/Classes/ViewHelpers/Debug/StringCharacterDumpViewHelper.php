<?php

namespace CodingMs\FluidFpdf\ViewHelpers\Debug;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Writes a character dump of a string
 */
class StringCharacterDumpViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('string', 'string', 'String which should be dumped', false, '');
    }

    /**
     * Writes a character dump of a string
     */
    public function render(): void
    {
        $string = $this->arguments['string'];
        $debug = false;
        if (iconv('UTF-8', 'cp1252//TRANSLIT', $string) != $string) {
            $string = iconv('UTF-8', 'cp1252//TRANSLIT', $string);
        } else {
            $string = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
        }
        if ($debug) {
            echo '<pre>';
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        for ($i = 0; $i <= strlen((string)$string); $i++) {
            if ($debug) {
                echo $string[$i] . ':' . ord($string[$i]) . '<br />';
            }
            $fpdf->Cell(12, 5.5, $string[$i] . ' : ');
            $fpdf->Cell(0, 5.5, ord($string[$i]), 0, 1);
        }
        if ($debug) {
            exit;
        }
    }
}
