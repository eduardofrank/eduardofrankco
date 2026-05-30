<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Adds a bookmark in PDF
 */
class BookmarkViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('title', 'string', 'The bookmark title', false, '');
        $this->registerArgument('isUTF8', 'bool', 'Indicates if the title is encoded in ISO-8859-1 (false) or UTF-8 (true). Default value: false.', false, false);
        $this->registerArgument('level', 'int', 'The bookmark level (0 is top level, 1 is just below, and so on). Default value: 0.', false, 0);
        $this->registerArgument('y', 'float', 'The y position of the bookmark destination in the current page. -1 means the current position. Default value: 0.', false, 0.0);
    }

    /**
     * Adds a bookmark in PDF
     */
    public function render(): void
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $fpdf->Bookmark($this->arguments['title'], $this->arguments['isUTF8'], $this->arguments['level'], $this->arguments['y']);
        $this->renderChildren();
    }
}
