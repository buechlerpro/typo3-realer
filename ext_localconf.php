<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Synac.Realer',
            'Objectlisting',
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
                    objectlisting {
                        iconIdentifier = realer-plugin-objectlisting
                        title = LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_objectlisting.name
                        description = LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_objectlisting.description
                        tt_content_defValues {
                            CType = list
                            list_type = realer_objectlisting
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'realer-plugin-objectlisting',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:realer/Resources/Public/Icons/user_plugin_objectlisting.svg']
			);
		
    }
);
