<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die('Access denied.');

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_realer_domain_model_property', 'EXT:realer/Resources/Private/Language/locallang_csh_tx_realer_domain_model_property.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_realer_domain_model_property');
})();
