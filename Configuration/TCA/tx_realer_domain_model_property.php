<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

return [
    'ctrl' => [
        'title' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,agent_reference,has_priority,sales_state,available_for_sale,available_for_rent,available_for_business_transfer,price_before,price,insurance_value,running_cost,images,introduction,location_type,address,zip,place,zone,region,country,latitude,longitude,orientation,view,has_rural_zone,object_type,flat_type,house_type,land_type,is_new,property_age,land_area,construction_area,useful_area,classification,state,description,room_count,sleeping_room_count,has_hall,has_cellar,has_storage,has_balcony,has_elevator,has_garage,garage_count,has_chimney,has_pool,has_barbecue',
        'iconfile' => 'EXT:realer/Resources/Public/Icons/realer_domain_model_property.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, agent_reference, has_priority, sales_state, available_for_sale, available_for_rent, available_for_business_transfer, price_before, price, insurance_value, running_cost, images, introduction, location_type, address, zip, place, zone, region, country, latitude, longitude, orientation, view, has_rural_zone, object_type, flat_type, house_type, land_type, is_new, property_age, land_area, construction_area, useful_area, classification, state, description, room_count, sleeping_room_count, has_hall, has_cellar, has_storage, has_balcony, has_elevator, has_garage, garage_count, has_chimney, has_pool, has_barbecue, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_realer_domain_model_property',
                'foreign_table_where' => 'AND tx_realer_domain_model_property.pid=###CURRENT_PID### AND tx_realer_domain_model_property.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'agent_reference' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.agent_reference',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'has_priority' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_priority',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'sales_state' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.sales_state',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'available_for_sale' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.available_for_sale',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'available_for_rent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.available_for_rent',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'available_for_business_transfer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.available_for_business_transfer',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'price_before' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.price_before',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.price',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'insurance_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.insurance_value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'running_cost' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.running_cost',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'images' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'images',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'introduction' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.introduction',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            'defaultExtras' => 'richtext:rte_transform'
        ],
        'location_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.location_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'place' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.place',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'zone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.zone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'region' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.region',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'country' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.country',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.latitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.longitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'orientation' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.orientation',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'view' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.view',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'has_rural_zone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_rural_zone',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'object_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.object_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'flat_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.flat_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'house_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.house_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'land_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.land_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'is_new' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.is_new',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'property_age' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.property_age',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'land_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.land_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'construction_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.construction_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'useful_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.useful_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'classification' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.classification',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'state' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.state',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            'defaultExtras' => 'richtext:rte_transform'
        ],
        'room_count' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.room_count',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'sleeping_room_count' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.sleeping_room_count',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'has_hall' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_hall',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_cellar' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_cellar',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_storage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_storage',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_balcony' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_balcony',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_elevator' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_elevator',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_garage' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_garage',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'garage_count' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.garage_count',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'has_chimney' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_chimney',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_pool' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_pool',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'has_barbecue' => [
            'exclude' => true,
            'label' => 'LLL:EXT:realer/Resources/Private/Language/locallang_db.xlf:tx_realer_domain_model_property.has_barbecue',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],

    ],
];
