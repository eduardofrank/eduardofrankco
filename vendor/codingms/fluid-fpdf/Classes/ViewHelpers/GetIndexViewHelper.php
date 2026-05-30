<?php

namespace CodingMs\FluidFpdf\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns the index
 */
class GetIndexViewHelper extends AbstractViewHelper
{
    /**
     * Initialize
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('level', 'int', 'The level of index entries. -1 means all levels.', false, -1);
    }

    /**
     * Returns the index
     *
     * @return array<int, mixed>
     */
    public function render()
    {
        /** @var \FluidFpdf $fpdf */
        $fpdf = $this->templateVariableContainer->get('fpdf');
        $index = $fpdf->GetIndex($this->arguments['level']);
        $this->renderChildren();
        return $index;
    }
}
