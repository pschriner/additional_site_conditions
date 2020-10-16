<?php
declare(strict_types = 1);

namespace Schriner\AdditionalSiteConditions\ExpressionLanguage\ExpressionLanguageVariables;

/*
 * This file is part of the EXT:additional_site_conditions project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class SiteConditionProvider
 */
class IndpEnv
{

    /**
     * Return the value of a \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv() call
     *
     * @param string $arg
     */
    public function get(string $arg): string
    {
        return (string)GeneralUtility::getIndpEnv($arg);
    }
}
