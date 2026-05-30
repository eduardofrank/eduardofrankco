<?php

namespace CodingMs\FluidFpdf\Controller;

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

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * PDF controller
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class PdfController extends ActionController
{
    /**
     * Creates a Pdf
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    public function showAction(): ResponseInterface
    {
        // If a special template is defined
        if (isset($this->settings['template'])) {
            $templateNotFound = true;
            $templatePathsTried = [];
            // Append .html, if necessary
            if (substr($this->settings['template'], -5, 5) !== '.html') {
                $this->settings['template'] = $this->settings['template'] . '.html';
            }
            // Prepend Pdf/, if necessary
            if (substr($this->settings['template'], 0, 4) !== 'Pdf/') {
                $this->settings['template'] = 'Pdf/' . $this->settings['template'];
            }
            // Read Settings/TemplatePath
            $configurationTypeFramework = ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK;
            $configuration = $this->configurationManager->getConfiguration($configurationTypeFramework, 'FluidFpdf');
            // Get the first template in template paths
            $templateRootPaths = $configuration['view']['templateRootPaths'];
            krsort($templateRootPaths);
            foreach ($templateRootPaths as $templateRootPath) {
                // Append slash if necessary
                if (substr($templateRootPath, -1, 1) !== '/') {
                    $templateRootPath = $templateRootPath . '/';
                }
                $templatePathsTried[] = $templateRootPath . $this->settings['template'];
                $templateDir = GeneralUtility::getFileAbsFileName($templateRootPath);
                if (file_exists($templateDir . $this->settings['template'])) {
                    $this->view->render($this->settings['template']);
                    $templateNotFound = false;
                    break;
                }
            }
            if ($templateNotFound) {
                throw new \Exception('PDF-Template not found in: ' . implode(', ', $templatePathsTried));
            }
        }

        return $this->htmlResponse();
    }
}
