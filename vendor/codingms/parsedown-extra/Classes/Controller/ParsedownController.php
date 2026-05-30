<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\Controller;

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

use CodingMs\ParsedownExtra\Service\ParsedownService;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Parsedown Controller
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class ParsedownController extends ActionController
{
    /**
     * Parse a Markdown file and display the result
     *
     * @throws \Exception
     */
    public function showAction(): ResponseInterface
    {
        //
        // Get content data
        /** @var ContentObjectRenderer $content */
        $content = $this->request->getAttribute('currentContentObject');
        // @extensionScannerIgnoreLine
        $contentArray = $content->data;
        $this->view->assign('content', $contentArray);
        if ($contentArray['tx_parsedownextra_markdown'] !== '') {
            $markdown = ParsedownService::parse($contentArray['tx_parsedownextra_markdown']);
            $this->view->assign('markdown', $markdown);
            return $this->htmlResponse();
        }
        //
        $markdown = LocalizationUtility::translate(
            'tx_parsedownextra_message.warning_parsedown_file_not_found',
            'ParsedownExtra'
        );
        $markdownFile = $contentArray['tx_parsedownextra_file'];
        if (file_exists($markdownFile)) {
            $markdown = (string)file_get_contents($markdownFile);
            $markdown = ParsedownService::parse($markdown);
        } else {
            //
            // Read optional from file_uid
            /** @var FileRepository $fileRepository */
            $fileRepository = GeneralUtility::makeInstance(FileRepository::class);
            /** @var FileReference[] $fileReferences */
            $fileReferences = $fileRepository->findByRelation(
                'tt_content',
                'tx_parsedownextra_file_uid',
                ($contentArray['_LOCALIZED_UID'] ?? $contentArray['uid'])
            );
            foreach ($fileReferences as $fileReference) {
                $markdown = $fileReference->getContents();
                $markdown = ParsedownService::parse($markdown);
            }
        }
        $this->view->assign('markdown', $markdown);
        return $this->htmlResponse();
    }
}
