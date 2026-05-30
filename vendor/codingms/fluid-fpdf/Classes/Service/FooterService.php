<?php

namespace CodingMs\FluidFpdf\Service;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\View\ViewFactoryData;
use TYPO3\CMS\Core\View\ViewFactoryInterface;

/**
 * Services for printing PDF footer
 *
 * @author Thomas Deuling <typo3@coding.ms>
 */
class FooterService
{
    /**
     * Creates a footer
     *
     * @param \FluidFpdf $fpdf
     */
    /** @phpstan-ignore-next-line */
    public function write(\FluidFpdf $fpdf): void
    {
        $templateRootPath = GeneralUtility::getFileAbsFileName($fpdf->GetFooterTemplate());
        if (file_exists($templateRootPath)) {
            $request = $GLOBALS['TYPO3_REQUEST'] ?? null;
            $viewFactory = GeneralUtility::makeInstance(ViewFactoryInterface::class);
            $viewFactoryData = new ViewFactoryData(
                templateRootPaths: [dirname($templateRootPath)],
                request: $request,
            );
            $view = $viewFactory->create($viewFactoryData);
            $view->assign('fpdf', $fpdf);
            $view->assign('settings', $fpdf->getFooterArguments());
            $view->render(basename($templateRootPath));
        }
    }
}
