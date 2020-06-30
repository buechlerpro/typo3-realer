<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Buepro.Realer',
            'Propertylisting',
            [
                'Property' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Property' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        propertylisting {
                            iconIdentifier = realer-plugin-propertylisting
                            title = LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_propertylisting.name
                            description = LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_propertylisting.description
                            tt_content_defValues {
                                CType = list
                                list_type = realer_propertylisting
                            }
                        }
                    }
                    show = *
                }
           }'
        );

        // icons
        if (TYPO3_MODE === 'BE') {
            $icons = [
                'realer-plugin-propertylisting' => 'realer_plugin_propertylisting.svg',
                'realer-domain-model-property' => 'realer_domain_model_property.svg'
            ];
            $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
            foreach ($icons as $identifier => $file) {
                $iconRegistry->registerIcon(
                    $identifier,
                    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                    ['source' => 'EXT:realer/Resources/Public/Icons/' . $file]
                );
            }
        }
    }
);
