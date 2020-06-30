<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die('Access denied.');

(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Buepro.Realer',
        'Propertylisting',
        'Realer - Propertylisting'
    );
})();
