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
 * Bookmarks
 */
/**
 * @extensionScannerIgnoreFile
 */
trait BookmarksTrait
{

    /**
     * Outline
     * @var array
     */
    protected $outlines = [];

    /**
     * Outline root
     * @var string
     */
    protected $outlineRoot;

    /**
     * @param $txt
     * @param bool $isUTF8
     * @param int $level
     * @param int $y
     */
    public function Bookmark($txt, $isUTF8 = false, $level = 0, $y = 0)
    {
        if (!$isUTF8) {
            $txt = mb_convert_encoding($txt, 'UTF-8', 'ISO-8859-1');
        }
        if ($y == -1) {
            $y = $this->GetY();
        }
        $this->outlines[] = ['t' => $txt, 'l' => $level, 'y' => ($this->h - $y) * $this->k, 'p' => $this->PageNo()];
    }

    /**
     * EXT:Bookmarks
     */
    public function _putbookmarks()
    {
        $nb = count($this->outlines);
        if ($nb == 0) {
            return;
        }
        $lru = [];
        $level = 0;
        foreach ($this->outlines as $i => $o) {
            if ($o['l'] > 0) {
                $parent = $lru[$o['l'] - 1];
                // Set parent and last pointers
                $this->outlines[$i]['parent'] = $parent;
                $this->outlines[$parent]['last'] = $i;
                if ($o['l'] > $level) {
                    // Level increasing: set first pointer
                    $this->outlines[$parent]['first'] = $i;
                }
            } else {
                $this->outlines[$i]['parent'] = $nb;
            }
            if ($o['l'] <= $level && $i > 0) {
                // Set prev and next pointers
                $prev = $lru[$o['l']];
                $this->outlines[$prev]['next'] = $i;
                $this->outlines[$i]['prev'] = $prev;
            }
            $lru[$o['l']] = $i;
            $level = $o['l'];
        }
        // Outline items
        $n = $this->n + 1;
        foreach ($this->outlines as $i => $o) {
            $this->_newobj();
            $this->_put('<</Title ' . $this->_textstring($o['t']));
            $this->_put('/Parent ' . ($n + $o['parent']) . ' 0 R');
            if (isset($o['prev'])) {
                $this->_put('/Prev ' . ($n + $o['prev']) . ' 0 R');
            }
            if (isset($o['next'])) {
                $this->_put('/Next ' . ($n + $o['next']) . ' 0 R');
            }
            if (isset($o['first'])) {
                $this->_put('/First ' . ($n + $o['first']) . ' 0 R');
            }
            if (isset($o['last'])) {
                $this->_put('/Last ' . ($n + $o['last']) . ' 0 R');
            }
            $this->_put(sprintf('/Dest [%d 0 R /XYZ 0 %.2F null]', $this->PageInfo[$o['p']]['n'], $o['y']));
            $this->_put('/Count 0>>');
            $this->_put('endobj');
        }
        // Outline root
        $this->_newobj();
        $this->outlineRoot = $this->n;
        $this->_put('<</Type /Outlines /First ' . $n . ' 0 R');
        $this->_put('/Last ' . ($n + $lru[0]) . ' 0 R>>');
        $this->_put('endobj');
    }

    /**
     * EXT:Bookmarks
     */
    protected function _putresources()
    {
        parent::_putresources();
        $this->_putbookmarks();
    }

    /**
     * EXT:Bookmarks
     */
    protected function _putcatalog()
    {
        parent::_putcatalog();
        if (count($this->outlines) > 0) {
            $this->_put('/Outlines ' . $this->outlineRoot . ' 0 R');
            $this->_put('/PageMode /UseOutlines');
        }
    }
}
