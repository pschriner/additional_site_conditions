<?php
declare(strict_types = 1);

namespace Schriner\AdditionalSiteConditions\ExpressionLanguage;

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

use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use Schriner\AdditionalSiteConditions\ExpressionLanguage\ExpressionLanguageVariables\IndpEnv;

/**
 * Class SiteConditionProvider
 */
class SiteConditionProvider extends AbstractProvider
{
    public function __construct()
    {
        $this->expressionLanguageVariables = [
            'indpEnv' => new IndpEnv()
        ];
    }
}
