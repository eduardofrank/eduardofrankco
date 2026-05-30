<?php

declare(strict_types=1);

namespace CodingMs\FluidFpdf\ViewHelpers\Iterator;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * ExplodeViewHelper
 */
class ExplodeViewHelper extends AbstractViewHelper
{
    /**
     * Register arguments:
     * - separator: string to explode by (required)
     * - content: string to split (optional; falls back to rendered child content)
     * - removeEmptyValues: whether to remove empty elements (optional, default false)
     * - limit: max number of elements (optional, default 0 = no limit)
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('separator', 'string', 'Separator string', true);
        $this->registerArgument('content', 'string', 'Content string to explode', false, '');
        $this->registerArgument('removeEmptyValues', 'bool', 'Remove empty values from the result', false, false);
        $this->registerArgument('limit', 'int', 'Limit the number of array elements', false, 0);
    }

    public function render(): array
    {
        $content = $this->arguments['content'] !== '' ? $this->arguments['content'] : (string)$this->renderChildren();
        return GeneralUtility::trimExplode(
            $this->arguments['separator'],
            $content,
            (bool)$this->arguments['removeEmptyValues'],
            (int)$this->arguments['limit']
        );
    }
}
