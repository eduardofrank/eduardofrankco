<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\Service;

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

use TYPO3\CMS\Core\LinkHandling\LinkService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\Typolink\EmailLinkBuilder;
use TYPO3\CMS\Frontend\Typolink\LinkResult;

/**
 * Parsedown extra service
 *
 * @author Thomas Deuling <typo3@coding.ms>
 */
class ParsedownService
{
    /**
     * Converts the session array into an object
     *
     * @param string $markdown Markdown text
     * @param bool $emailProtection  Protect emails
     * @param bool $shiftHeadlines  Shift HTML headlines
     * @return string HTML
     * @throws \Exception
     */
    public static function parse(string $markdown, bool $emailProtection = true, bool $shiftHeadlines = false)
    {
        $translation = '';
        if (class_exists('\Parsedown') && class_exists('\ParsedownExtra') && class_exists('\ParsedownExtraPlugin')) {
            $parsedown = new \ParsedownExtraPlugin();
            $parsedown->voidElementSuffix = '>';
            //
            // Get configuration
            $configurationManager = GeneralUtility::makeInstance(ConfigurationManager::class);
            $configurationType = ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK;
            $configuration = $configurationManager->getConfiguration($configurationType, 'ParsedownExtra');
            // Prepare tables
            $parsedown->tableAttributes = function () {
                $attributes = [];
                $configurationManager = GeneralUtility::makeInstance(ConfigurationManager::class);
                $configurationType = ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK;
                $configuration = $configurationManager->getConfiguration($configurationType, 'ParsedownExtra');
                if (isset($configuration['settings']['tableClass'])) {
                    $attributes = ['class' => $configuration['settings']['tableClass']];
                }
                return $attributes;
            };
            // Prepare links
            $parsedown->linkAttributes = function ($Text, $Attributes, &$Element, $Internal) {
                $attributes = is_array($Attributes) ? $Attributes : [];
                $configurationManager = GeneralUtility::makeInstance(ConfigurationManager::class);
                $configurationType = ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK;
                $configuration = $configurationManager->getConfiguration($configurationType, 'ParsedownExtra');
                if (!$Internal) {
                    if (isset($configuration['settings']['linksExternalAttr']) && is_array($configuration['settings']['linksExternalAttr'])) {
                        if (isset($attributes['class']) && isset($configuration['settings']['linksExternalAttr']['class'])) {
                            $configuration['settings']['linksExternalAttr']['class'] = $attributes['class'] . ' ' . $configuration['settings']['linksExternalAttr']['class'];
                        }
                        $attributes = array_merge($attributes, $configuration['settings']['linksExternalAttr']);
                    }
                } else {
                    if (isset($configuration['settings']['linksAttr']) && is_array($configuration['settings']['linksAttr'])) {
                        if (isset($attributes['class']) && isset($configuration['settings']['linksAttr']['class'])) {
                            $configuration['settings']['linksAttr']['class'] = $attributes['class'] . ' ' . $configuration['settings']['linksAttr']['class'];
                        }
                        $attributes = array_merge($attributes, $configuration['settings']['linksAttr']);
                    }
                }
                return $attributes;
            };
            // Prepare images
            $parsedown->imageAttributes = function ($Image, $Attributes, &$Element) {
                $attributes = is_array($Attributes) ? $Attributes : [];
                $configurationManager = GeneralUtility::makeInstance(ConfigurationManager::class);
                $configurationType = ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK;
                $configuration = $configurationManager->getConfiguration($configurationType, 'ParsedownExtra');
                if (isset($configuration['settings']['imagesAttr']) && is_array($configuration['settings']['imagesAttr'])) {
                    if (isset($attributes['class']) && isset($configuration['settings']['imagesAttr']['class'])) {
                        $configuration['settings']['imagesAttr']['class'] = $attributes['class'] . ' ' . $configuration['settings']['imagesAttr']['class'];
                    }
                    $attributes = array_merge($attributes, $configuration['settings']['imagesAttr']);
                }
                return $attributes;
            };
            //
            if (isset($configuration['settings']['abbreviations'])) {
                foreach ($configuration['settings']['abbreviations'] as $abbreviations) {
                    $parsedown->abbreviationData[$abbreviations['search']] = $abbreviations['value'];
                }
            }
            $markdown = $parsedown->text($markdown);
        } else {
            $translation = LocalizationUtility::translate(
                'tx_parsedownextra_exception.parsedown_parser_not_found',
                'ParsedownExtra'
            );
            throw new \Exception((string)$translation, 6676929422);
        }
        // Protect E-Mail addresses
        if ($emailProtection) {
            $pattern = '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i';
            preg_match_all($pattern, (string)$markdown, $matches);
            if (count($matches) > 0) {
                $emails = array_unique($matches[0]);
            }
            if (!empty($emails)) {
                $request = $GLOBALS['TYPO3_REQUEST'] ?? null;
                $contentObjectRenderer = GeneralUtility::makeInstance(ContentObjectRenderer::class);
                $contentObjectRenderer->setRequest($request);
                $contentObjectRenderer->start(
                    $request->getAttribute('frontend.page.information')->getPageRecord(),
                    'pages'
                );
                $linkService = GeneralUtility::makeInstance(LinkService::class);
                if ((int)VersionNumberUtility::getCurrentTypo3Version() < 14) {
                    $emailLinkBuilder = GeneralUtility::makeInstance(EmailLinkBuilder::class, $contentObjectRenderer);
                } else {
                    $emailLinkBuilder = GeneralUtility::makeInstance(EmailLinkBuilder::class, $linkService);
                }
                $emails = array_unique($emails);
                /** @var string $email */
                foreach ($emails as $email) {
                    if ((int)VersionNumberUtility::getCurrentTypo3Version() >= 14) {
                        [$url, $linkText, $attributes] = $emailLinkBuilder->processEmailLink($email, $email, [], $request);
                    } else {
                        /** @phpstan-ignore-next-line */
                        [$url, $linkText, $attributes] = $emailLinkBuilder->processEmailLink($email, $email);
                    }
                    $mailLink = (string)(new LinkResult(LinkService::TYPE_EMAIL, $url))
                        ->withLinkText($linkText)
                        ->withAttributes($attributes);
                    $markdown = str_replace(
                        '<a href="mailto:' . $email . '">' . $email . '</a>',
                        $mailLink,
                        $markdown
                    );
                }
            }
        }
        // Shift headlines
        if ($shiftHeadlines) {
            $markdown = str_replace('h5>', 'h6>', $markdown);
            $markdown = str_replace('h4>', 'h5>', $markdown);
            $markdown = str_replace('h3>', 'h4>', $markdown);
            $markdown = str_replace('h2>', 'h3>', $markdown);
            $markdown = str_replace('h1>', 'h2>', $markdown);
        }
        return $markdown . $translation;
    }
}
