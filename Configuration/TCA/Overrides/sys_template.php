<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'realer',
        'Configuration/TypoScript',
        'Real estate publisher'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'realer',
        'Configuration/TypoScript/LessTheme',
        'Real estate publisher - Less theme (bootstrap_package)'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'realer',
        'Configuration/TypoScript/ScssTheme',
        'Real estate publisher - Scss theme (bootstrap_package)'
    );
})();
