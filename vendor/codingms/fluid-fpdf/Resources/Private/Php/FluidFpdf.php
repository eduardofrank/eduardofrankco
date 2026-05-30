<?php

use CodingMs\FluidFpdf\Event\DrawPdfFooterEvent;
use Psr\EventDispatcher\EventDispatcherInterface;
use setasign\Fpdi\FPDI;
use TYPO3\CMS\Core\Utility\GeneralUtility;

require_once __DIR__ . '/Traits/BarcodeTrait.php';
require_once __DIR__ . '/Traits/BookmarksTrait.php';
require_once __DIR__ . '/Traits/CreateIndexTrait.php';
require_once __DIR__ . '/Traits/GoToPageTrait.php';
require_once __DIR__ . '/Traits/ImageEpsTrait.php';
require_once __DIR__ . '/Traits/SetFontSpacingTrait.php';
require_once __DIR__ . '/Traits/WriteHtmlTrait.php';
require_once __DIR__ . '/Traits/RotateTrait.php';

class FluidFpdf extends FPDI
{
    use BarcodeTrait;
    use BookmarksTrait;
    use CreateIndexTrait;
    use GoToPageTrait;
    use ImageEpsTrait;
    use SetFontSpacingTrait;
    use WriteHtmlTrait;
    use RotateTrait;

    /**
     * EXT:Footer
     * @var string
     */
    protected $footerTemplate;

    /**
     * EXT:Footer
     * @var array
     */
    protected $footerArguments;

    protected EventDispatcherInterface $typo3EventDispatcher;

    public function __construct($orientation='P', $unit='mm', $format='A4')
    {
        parent::__construct($orientation, $unit, $format);
        $this->typo3EventDispatcher = GeneralUtility::makeInstance(EventDispatcherInterface::class);
        $this->initializeCode128();
    }

    public function Header()
    {
        // To be implemented in your own inherited class
    }

    /**
     */
    public function Footer()
    {
        $drawPdfFooterEvent = GeneralUtility::makeInstance(DrawPdfFooterEvent::class, $this);
        $this->typo3EventDispatcher->dispatch($drawPdfFooterEvent);
    }

    public function SetFooterTemplate($footerTemplate)
    {
        $this->footerTemplate = $footerTemplate;
    }

    public function GetFooterTemplate()
    {
        return $this->footerTemplate;
    }

    public function SetFooterArguments($footerArguments)
    {
        $this->footerArguments = $footerArguments;
    }

    public function GetFooterArguments()
    {
        return $this->footerArguments;
    }

    public function GetDefaultPageSize()
    {
        return $this->DefPageSize;
    }
    public function GetCurrentPageSize()
    {
        return $this->CurPageSize;
    }
    public function GetDefaultOrientation()
    {
        return $this->DefOrientation;
    }
    public function GetCurrentOrientation()
    {
        return $this->CurOrientation;
    }
}
