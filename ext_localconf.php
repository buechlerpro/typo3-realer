<?php
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
                'realer-plugin-propertylisting' => 'realer_plugin_propertylisting.png'
            ];
            $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
            foreach ($icons as $identifier => $file) {
                $iconRegistry->registerIcon(
                    $identifier,
                    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
                    ['source' => 'EXT:realer/Resources/Public/Icons/' . $file]
                );
            }
        }
    }
);
