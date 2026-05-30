<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Defines the color used for all drawing operations (lines, rectangles and cell borders).
 * It can be expressed in RGB components or gray scale.
 * The method can be called before the first page is created and the value is retained from page to page.
 */
class SetDrawColorViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('red', 'int', 'If g et b are given, red component; if not, indicates the gray level. Value between 0 and 255.', false, 0);
        $this->registerArgument('green', 'int', 'Green component (between 0 and 255).', false, 0);
        $this->registerArgument('blue', 'int', 'Blue component (between 0 and 255).', false, 0);
        $this->registerArgument('hex', 'string', 'Hex definition of a color', false, '');
    }

    /**
     * Defines the color used for all drawing operations (lines, rectangles and cell borders).
     * It can be expressed in RGB components or gray scale.
     * The method can be called before the first page is created and the value is retained from page to page.
     */
    public function render(): void
    {
        $red = $this->arguments['red'];
        $green = $this->arguments['green'];
        $blue = $this->arguments['blue'];
        if ($this->arguments['hex'] != '') {
            $rgb = $this->convertColor($this->arguments['hex'], true);
            if (is_array($rgb)) {
                $red = $rgb['r'];
                $green = $rgb['g'];
                $blue = $rgb['b'];
            }
        }
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->SetDrawColor($red, $green, $blue);
        $this->renderChildren();
    }

    /**
     * Converts a hex color to RGB
     *
     * @param    string $hex Hex color
     * @param    bool $asArray Return as array?
     * @return   mixed RGB color
     */
    protected function convertColor($hex, $asArray = false)
    {
        $hex_array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14, 'F' => 15];
        $hex = str_replace('#', '', strtoupper($hex));
        if (($length = strlen($hex)) == 3) {
            $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
            $length = 6;
        }
        if ($length != 6 or strlen(str_replace(array_keys($hex_array), '', $hex))) {
            return null;
        }
        $rgb['r'] = $hex_array[$hex[0]] * 16 + $hex_array[$hex[1]];
        $rgb['g'] = $hex_array[$hex[2]] * 16 + $hex_array[$hex[3]];
        $rgb['b'] = $hex_array[$hex[4]] * 16 + $hex_array[$hex[5]];
        if ($asArray) {
            return $rgb;
        }
        return $rgb['r'] . ', ' . $rgb['g'] . ', ' . $rgb['b'];
    }
}
