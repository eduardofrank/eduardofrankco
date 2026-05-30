<?php

declare(strict_types=1);

namespace CodingMs\ParsedownExtra\Upgrades;

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

use TYPO3\CMS\Install\Attribute\UpgradeWizard;

// @extensionScannerIgnoreLine
#[UpgradeWizard('parsedownExtraPluginListTypeToCTypeUpgradeWizard')]
final class PluginListTypeToCTypeUpgradeWizard extends AbstractListTypeToCTypeUpgradeWizard
{
    protected function getListTypeToCTypeMapping(): array
    {
        return [
            'parsedownextra_parsedown' => 'parsedownextra_parsedown',
        ];
    }

    public function getTitle(): string
    {
        return 'EXT:parsedown_extra: PluginListTypeToCTypeUpgradeWizard Upgrade Wizard';
    }

    public function getDescription(): string
    {
        return 'EXT:parsedown_extra: Switches ListTypes to CTypes for TYPO3 V12 and V13';
    }
}
