<?php

declare(strict_types=1);

/***************************************************************
 *
 * Copyright notice
 *
 * (c) 2026 Thomas Deuling <typo3@coding.ms>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @extensionScannerIgnoreFile
 */

/**
 * WriteHtmlTrait
 *
 * Source: http://fpdf.org/en/script/script42.php
 */
trait WriteHtmlTrait
{

    // Remember if an HTML tag is open
    protected int $B = 0;
    protected int $I = 0;
    protected int $U = 0;

    /**
     * Settings of HTML parser
     * @param array<string, mixed>
     */
    protected $htmlSettings = [
        'lineHeight' => 5.0,
        'paragraphMarginBottom' => 7.5,
        'href' => '',
        'list' => [],
        'listLi' => false,
        'listIndent' => 8.0,
        'listIndentMargin' => 0.0,
        'listMarginBottom' => 0.0,
        'listItemMarginBottom' => null,
        'originalMarginLeft' => 0,
        'originalFontSize' => 0,
        'lastInsertedTag' => null,
        'dlList' => false
    ];

    /**
     * Source: http://fpdf.org/en/script/script42.php
     *
     * @param $html string HTML text
     * @param $lineHeight float Line height
     * @param $listIndent float List indent
     */

    /**
     * @param string $html HTML markup
     * @param int $x
     * @param int $width
     * @param float $lineHeight Line height
     * @param float $listIndent List indent
     * @param float $listIndentMargin List indent margin
     * @param float $listMarginBottom List margin bottom
     * @param float $paragraphMarginBottom Margin bottom for paragraphs, listings and enumerations.
     */
    public function WriteHTML(
        $html,
        $x = 30,
        $width = 100,
        $lineHeight = 5.0,
        $listIndent = 8.0,
        $listIndentMargin = 8.0,
        $listMarginBottom = 0.0,
        $listItemMarginBottom = null,
        $paragraphMarginBottom = 0.0,
        $ddTitleBold = false,
        $ddTitleWidth = 0.0
    )
    {
        //
        // Fix spaces in beginning of a line after a line break!,
        $html = str_replace('<br /> ', '<br />', $html);
        //
        // Save Margin left, so that we can restore it later
        $this->htmlSettings['originalMarginLeft'] = $this->lMargin;
        $this->htmlSettings['originalMarginRight'] = $this->rMargin;
        $this->lMargin = $x;
        $this->rMargin = $this->GetPageWidth() - ($x + $width);
        //
        // Prepare HTML settings
        $this->htmlSettings['lineHeight'] = $lineHeight;
        $this->htmlSettings['originalLineHeight'] = $lineHeight;
        $this->htmlSettings['listIndent'] = $listIndent;
        $this->htmlSettings['listMarginBottom'] = $listMarginBottom;
        $this->htmlSettings['listItemMarginBottom'] = $listItemMarginBottom;
        $this->htmlSettings['paragraphMarginBottom'] = $paragraphMarginBottom;
        $this->htmlSettings['originalFontSize'] = $this->FontSizePt;
        $this->htmlSettings['ddTitleBold'] = $ddTitleBold;
        $this->htmlSettings['ddTitleWidth'] = $ddTitleWidth;
        //
        // Strip restricted tags and explode HTML
        $html = strip_tags($html, '<h1><h2><h3><h4><h5><b><u><i><a><p><br><pagebreak><strike><strong><small><em><ul><ol><li><dl><dt><dd>');
        //$html = str_replace("\n", ' ', $html);
        $html = str_replace('</ul> ', '</ul>', $html);
        $html = str_replace('</ol> ', '</ol>', $html);
        $html = str_replace('</li> ', '</li>', $html);
        $html = str_replace('</dl> ', '</dl>', $html);
        $html = str_replace('</dt> ', '</dt>', $html);
        $html = str_replace('</dd> ', '</dd>', $html);
        $htmlParts = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        //
        // Set position to previous Line
        $this->SetXY($this->lMargin, ($this->GetY() - $this->htmlSettings['lineHeight']));
        //
        // Process HTML
        $prev = '';
        foreach ($htmlParts as $index => $htmlPart) {
            //
            // Check if we need a page break
            if ($this->GetY() + 20 > $this->PageBreakTrigger) {
                $this->AddPage();
            }
            //
            if ($index % 2 == 0) {
                // Text
                if (trim($this->htmlSettings['href']) !== '') {
                    $this->PutLink($this->htmlSettings['href'], $htmlPart);
                } else {
                    //
                    // In ul/ol list?
                    if (count($this->htmlSettings['list']) > 0 && $this->htmlSettings['listLi']) {
                        $x = $this->GetX();
                        $y = $this->GetY();
                        $listCharacter = '';
                        $listCharacterX = ($x - $this->htmlSettings['listIndent']);
                        $restoreFont = $this->FontFamily;
                        $restoreStyle = $this->FontStyle;
                        $currentList = $this->htmlSettings['list'][(count($this->htmlSettings['list']) - 1)];
                        if ($currentList['type'] === 'UL') {
                            $listCharacter = chr(127);
                            // Switch font to ensure, that the bullet is available
                            $this->SetFont('Courier', '');
                            $listCharacterX = $listCharacterX + ($this->htmlSettings['listIndent'] / 2);
                        } elseif ($currentList['type'] === 'OL') {
                            if ($currentList['bullets'] === '1') {
                                $listCharacter = $currentList['items'] . '.';
                            // Concatenated list numbers
                                //foreach($this->htmlSettings['list'] as $listLevel) {
                                //    $listCharacter .= $listLevel['items'] . '.';
                                //}
                            } elseif ($currentList['bullets'] === 'a') {
                                $map = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't'];
                                $listCharacter = $map[($currentList['items']) - 1] . '.';
                            }
                        }
                        $this->htmlSettings['listLi'] = false;
                        //
                        // Check if we need a page break
                        if ($this->GetY() + 20 > $this->PageBreakTrigger) {
                            $this->AddPage();
                        }
                        //
                        // Print the List bullet or enumeration number
                        $this->SetXY($listCharacterX, $y);
                        $this->Write($this->htmlSettings['lineHeight'], $listCharacter);
                        $this->SetXY($x + $listIndentMargin, $y);
                        // Restore font and style
                        if ($currentList['type'] === 'UL') {
                            $this->SetFont($restoreFont, $restoreStyle);
                        }
                    }
                    //
                    // Remove tabs and newlines, which are leftovers from HTML structure
                    $writeText = stripslashes($this->TextEntities($htmlPart));
                    $writeText = str_replace("\t", '', $writeText);
                    $writeText = str_replace("\n", '', $writeText);
                    //
                    // Print normal Text
                    if (trim($writeText) === 'ADD_PAGE') {
                        $this->AddPage();
                    } elseif ($writeText !== '') {
                        if ($this->htmlSettings['dlList']) {
                            $this->Cell($this->htmlSettings['ddTitleWidth'], $this->htmlSettings['lineHeight'], $writeText, 0, 0, 'L');
                        } else {
                            $this->Write($this->htmlSettings['lineHeight'], $writeText);
                        }
                    }
                }
            } else {
                // Tag
                if ($htmlPart[0] === '/') {
                    $prev = strtoupper(substr($htmlPart, 1));
                    $this->CloseTag($prev);
                } else {
                    // Extract attributes
                    $a2 = explode(' ', $htmlPart);
                    $tag = strtoupper(array_shift($a2));
                    $attr = [];
                    foreach ($a2 as $v) {
                        if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3)) {
                            $attr[strtoupper($a3[1])] = $a3[2];
                        }
                    }
                    $this->OpenTag($tag, $attr, $prev);
                }
            }
        }
        //
        // Restore left and right margin
        $this->SetLeftMargin($this->htmlSettings['originalMarginLeft']);
        $this->SetRightMargin($this->htmlSettings['originalMarginRight']);
        //
        // Set position to new Line
        $this->SetXY($this->lMargin, ($this->GetY() + $this->htmlSettings['lineHeight']));
    }

    /**
     * Processing HTML opening tag.
     * @param $tag string Tag identifier
     * @param $attr array Tag attributes
     */
    public function OpenTag($tag, $attr, $prev)
    {
        if ($prev === 'UL' && in_array($tag, ['H1', 'H2', 'H3', 'H4', 'H5'])) {
            $this->Ln(6);
        }

        // Opening tag
        switch ($tag) {
            case 'PAGEBREAK':
                $this->AddPage();
                break;
            case 'H1':
                $faktor = 2;
                $this->htmlSettings['lineHeight'] = $this->htmlSettings['originalLineHeight'] * $faktor;
                $this->Ln($this->htmlSettings['lineHeight'] * 1.5);
                $this->SetFontSize($this->FontSizePt * $faktor);
                break;
            case 'H2':
                $faktor = 1.8;
                $this->htmlSettings['lineHeight'] = $this->htmlSettings['originalLineHeight'] * $faktor;
                $this->Ln($this->htmlSettings['lineHeight'] * 1.5);
                $this->SetFontSize($this->FontSizePt * $faktor);
                break;
            case 'H3':
                $faktor = 1.6;
                $this->htmlSettings['lineHeight'] = $this->htmlSettings['originalLineHeight'] * $faktor;
                $this->Ln($this->htmlSettings['lineHeight'] * 1.5);
                $this->SetFontSize($this->FontSizePt * $faktor);
                break;
            case 'H4':
                $faktor = 1.4;
                $this->htmlSettings['lineHeight'] = $this->htmlSettings['originalLineHeight'] * $faktor;
                $this->Ln($this->htmlSettings['lineHeight'] * 1.5);
                $this->SetFontSize($this->FontSizePt * $faktor);
                break;
            case 'H5':
                $faktor = 1.2;
                $this->htmlSettings['lineHeight'] = $this->htmlSettings['originalLineHeight'] * $faktor;
                $this->Ln($this->htmlSettings['lineHeight'] * 1.5);
                $this->SetFontSize($this->FontSizePt * $faktor);
                break;
            case 'SMALL':
                $this->SetFontSize($this->FontSizePt * 0.8);
                break;
            case 'STRONG':
                $this->SetStyle('B', true);
                break;
            case 'EM':
                $this->SetStyle('I', true);
                break;
            case 'B':
            case 'I':
            case 'U':
                $this->SetStyle($tag, true);
                break;
            case 'A':
                $this->htmlSettings['href'] = $attr['HREF'];
                break;
            case 'TR':
            case 'BLOCKQUOTE':
            case 'BR':
                $this->Ln($this->htmlSettings['lineHeight']);
                break;
            case 'P':
                if ($this->htmlSettings['lastInsertedTag'] !== 'P') {
                    $this->Ln($this->htmlSettings['lineHeight'] + $this->htmlSettings['paragraphMarginBottom']);
                }
                break;
            case 'UL':
                $this->SetFontSize($this->htmlSettings['originalFontSize']);
                $this->lMargin += $this->htmlSettings['listIndent'];
                $this->htmlSettings['list'][count($this->htmlSettings['list'])] = [
                    'type' => 'UL',
                    'items' => 0,
                    'bullets' => isset($attr['TYPE']) ? trim($attr['TYPE']) : '1',
                ];
                if ($this->htmlSettings['lastInsertedTag'] === 'P') {
                    $y = $this->GetY();
                    $this->SetXY($this->lMargin, $y - $this->htmlSettings['paragraphMarginBottom']);
                }
                break;
            case 'DL':
                $this->SetFontSize($this->htmlSettings['originalFontSize']);
                $this->htmlSettings['list'][count($this->htmlSettings['list'])] = [
                    'type' => 'DL',
                    'items' => 0
                ];
                if ($this->htmlSettings['lastInsertedTag'] === 'P') {
                    $y = $this->GetY();
                    $this->SetXY($this->lMargin, $y - $this->htmlSettings['paragraphMarginBottom']);
                }
                break;
            case 'OL':
                $this->SetFontSize($this->htmlSettings['originalFontSize']);
                $this->lMargin += $this->htmlSettings['listIndent'];
                $this->htmlSettings['list'][count($this->htmlSettings['list'])] = [
                    'type' => 'OL',
                    'items' => 0,
                    'bullets' => isset($attr['TYPE']) ? trim($attr['TYPE']) : '1',
                ];
                if ($this->htmlSettings['lastInsertedTag'] === 'P') {
                    $y = $this->GetY();
                    $this->SetXY($this->lMargin, $y - $this->htmlSettings['paragraphMarginBottom']);
                }
                break;
            case 'LI':
                $this->SetFontSize($this->htmlSettings['originalFontSize']);
                $this->htmlSettings['listLi'] = true;
                $this->htmlSettings['list'][(count($this->htmlSettings['list']) - 1)]['items']++;
                $this->Ln($this->htmlSettings['lineHeight']);
                break;
            case 'DT':
                $this->SetFontSize($this->htmlSettings['originalFontSize']);
                $this->htmlSettings['listLi'] = false;
                $this->htmlSettings['list'][(count($this->htmlSettings['list']) - 1)]['items']++;
                if ($this->htmlSettings['ddTitleBold']) {
                    $this->SetFont('','B');
                }
                if ($this->htmlSettings['ddTitleWidth'] > 0) {
                    $this->htmlSettings['dlList'] = true;
                }

                $this->Ln($this->htmlSettings['lineHeight']);
                break;
            case 'DD':
                break;
        }
    }

    /**
     * Processing HTML closing tag.
     * @param $tag string Tag identifier
     */
    public function CloseTag($tag)
    {

        if ($tag === 'H1' || $tag === 'H2' || $tag === 'H3' || $tag === 'H4' || $tag === 'H5') {
            $y = $this->GetY();
            $y += $this->htmlSettings['lineHeight'] / 2;
            $this->SetXY($this->lMargin, $y);
            $this->SetFontSize($this->htmlSettings['originalFontSize']);
            $this->htmlSettings['lineHeight'] = $this->htmlSettings['originalLineHeight'];
        }

        if ($tag == 'SMALL') {
            $this->SetFontSize($this->htmlSettings['originalFontSize']);
        }
        if ($tag == 'STRONG') {
            $tag = 'B';
        }
        if ($tag == 'EM') {
            $tag = 'I';
        }
        if ($tag == 'B' || $tag == 'I' || $tag == 'U') {
            $this->SetStyle($tag, false);
        }
        if ($tag === 'A') {
            $this->htmlSettings['href'] = '';
        }
        if ($tag === 'P') {
            if ($this->htmlSettings['lastInsertedTag'] !== 'P' ||
                $this->htmlSettings['lastInsertedTag'] !== 'UL' ||
                $this->htmlSettings['lastInsertedTag'] !== 'OL') {
                    $this->Ln($this->htmlSettings['lineHeight'] + $this->htmlSettings['paragraphMarginBottom']);
            }
        }
        if ($tag === 'DT') {
            if ($this->htmlSettings['ddTitleBold']) {
                $this->SetFont('');
            }
            if ($this->htmlSettings['ddTitleWidth'] > 0) {
                $this->htmlSettings['dlList'] = false;
            }
        }
        if ($tag === 'DD') {
            $x = $this->GetX();
            $y = $this->GetY();
            if (is_null($this->htmlSettings['listItemMarginBottom'])) {
                $y += $this->htmlSettings['paragraphMarginBottom'];
            } else {
                $y += $this->htmlSettings['listItemMarginBottom'];
            }
            $this->SetXY($x, $y);

        }
        if ($tag === 'LI') {
            $y = $this->GetY();
            if (is_null($this->htmlSettings['listItemMarginBottom'])) {
                $y += $this->htmlSettings['paragraphMarginBottom'];
            } else {
                $y += $this->htmlSettings['listItemMarginBottom'];
            }
            $this->SetXY($this->lMargin, $y);
        }
        if ($tag === 'UL') {
            $this->lMargin -= $this->htmlSettings['listIndent'];
            unset($this->htmlSettings['list'][(count($this->htmlSettings['list']) - 1)]);
            $y = $this->GetY();
            if (count($this->htmlSettings['list']) > 0) {
                // If we're still in a listing, add some space below
                $y += $this->htmlSettings['paragraphMarginBottom'];
            }
            $this->SetXY($this->lMargin, $y + $this->htmlSettings['listMarginBottom']);
        }
        if ($tag === 'DL') {
            unset($this->htmlSettings['list'][(count($this->htmlSettings['list']) - 1)]);
            $y = $this->GetY();
            if (count($this->htmlSettings['list']) > 0) {
                // If we're still in a listing, add some space below
                $y += $this->htmlSettings['paragraphMarginBottom'];
            }
            $this->SetXY($this->lMargin, $y + $this->htmlSettings['listMarginBottom']);
        }
        if ($tag === 'OL') {
            $this->lMargin -= $this->htmlSettings['listIndent'];
            unset($this->htmlSettings['list'][(count($this->htmlSettings['list']) - 1)]);
            $y = $this->GetY();
            if (count($this->htmlSettings['list']) > 0) {
                // If we're still in a listing, add some space below
                $y += $this->htmlSettings['paragraphMarginBottom'];
            }
            $this->SetXY($this->lMargin, $y + $this->htmlSettings['listMarginBottom']);
        }

        $this->htmlSettings['lastInsertedTag'] = $tag;
    }

    public function SetStyle($tag, $enable)
    {
        // Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach (['B', 'I', 'U'] as $s) {
            if ($this->$s > 0) {
                $style .= $s;
            }
        }
        $this->SetFont('', $style);
    }

    /**
     * Insert a link
     * @param $url
     * @param $text
     */
    protected function PutLink($url, $text)
    {
        $this->SetTextColor(0, 0, 255);
        $this->SetStyle('U', true);
        $this->Write($this->htmlSettings['lineHeight'], $text, $url);
        $this->SetStyle('U', false);
        $this->SetTextColor(0);
    }

    protected function TextEntities($html)
    {
        $trans = get_html_translation_table(HTML_ENTITIES);
        $trans = array_flip($trans);
        return strtr($html, $trans);
    }
}
