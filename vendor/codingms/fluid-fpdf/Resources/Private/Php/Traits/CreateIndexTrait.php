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
 * CreateIndexTrait
 */
trait CreateIndexTrait
{

    /**
     * EXT:Index
     * @param string $pagePrefix
     */
    public function CreateIndex($pagePrefix = 'p. ')
    {
        $size = sizeof($this->outlines);
        // Width of the highest/last page
        $PageCellSize = $this->GetStringWidth($pagePrefix . $this->outlines[$size - 1]['p']) + 2;
        // Foreach index entry
        for ($i = 0; $i < $size; $i++) {
            //Offset
            $level = $this->outlines[$i]['l'];
            if ($level > 0) {
                $this->Cell($level * 8);
            }
            //Caption
            $str = mb_convert_encoding($this->outlines[$i]['t'], 'ISO-8859-1', 'UTF-8');
            $strsize = $this->GetStringWidth($str);
            $avail_size = $this->w - $this->lMargin - $this->rMargin - $PageCellSize - ($level * 8) - 4;
            if ($avail_size < 0) {
                throw new Exception('Not enough space for creating index!');
            }
            while ($strsize >= $avail_size) {
                $str = substr($str, 0, -1);
                $strsize = $this->GetStringWidth($str);
            }
            $this->Cell($strsize + 2, $this->FontSize + 2, $str);
            //Filling dots
            $w = $this->w - $this->lMargin - $this->rMargin - $PageCellSize - ($level * 8) - ($strsize + 2);
            $nb = (int)($w / $this->GetStringWidth('.'));
            $dots = str_repeat('.', $nb);
            $this->Cell($w, $this->FontSize + 2, $dots, 0, 0, 'R');
            //Page number
            $this->Cell($PageCellSize, $this->FontSize + 2, $pagePrefix . $this->outlines[$i]['p'], 0, 1, 'R');
        }
    }

    /**
     * EXT:Index
     * @param int $level The level of index entries. -1 means all levels.
     * @return array
     */
    public function GetIndex($level = -1)
    {
        $entries = [];
        if (count($this->outlines) > 0) {
            foreach ($this->outlines as $outline) {
                if ($level === $outline['l']) {
                    $entries[] = $outline;
                } elseif ($level === -1) {
                    $entries[] = $outline;
                }
            }
        }
        return $entries;
    }
}
