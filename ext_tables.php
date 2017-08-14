<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Synac.Realer',
            'Objectlisting',
            'Realer - Objectlisting'
        );




        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('realer', 'Configuration/TypoScript', 'Real estate publisher');


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_realer_domain_model_property', 'EXT:realer/Resources/Private/Language/locallang_csh_tx_realer_domain_model_property.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_realer_domain_model_property');

    }
);
