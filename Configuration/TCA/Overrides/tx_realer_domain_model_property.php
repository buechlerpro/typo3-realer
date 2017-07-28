<?php
$GLOBALS['TCA']['tx_realer_domain_model_property']['types'] = [
    '1' => ['showitem' => '
            sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, agent_reference, has_priority, sales_state, available_for_sale, available_for_rent, available_for_business_transfer, price_before, price_after, insurance_value, running_cost, images, introduction, 
            --div--;LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.tabs.location,location_type, address, zip, place, zone, region, country, latitude, longitude, orientation, 
            --div--;LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.tabs.detail,object_type, house_type, flat_type, land_type, classification, room_count, is_new, property_age, construction_area, useful_area, state, description, 
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'
    ]
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['sales_state']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.sales_state.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.sales_state.2', 2],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['location_type']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.location_type.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.location_type.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.location_type.3', 3],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['object_type']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.3', 3],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.4', 4],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.5', 5],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.6', 6],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.7', 7],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.8', 8],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.9', 9],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.10', 10],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.11', 11],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.12', 12],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.13', 13],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.14', 14],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.15', 15],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.16', 16],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.17', 17],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.18', 18],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['house_type']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.3', 3],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.4', 4],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.5', 5],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.6', 6],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.house_type.7', 7],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['flat_type']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.3', 3],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.4', 4],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.5', 5],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.6', 6],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.flat_type.7', 7],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['land_type']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.land_type.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.land_type.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.land_type.3', 3],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['classification']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.classification.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.classification.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.classification.3', 3],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.classification.4', 4],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.classification.5', 5],
];

$GLOBALS['TCA']['tx_realer_domain_model_property']['columns']['state']['config']['items'] = [
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:selectBox.pleaseSelect', 0],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.state.1', 1],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.state.2', 2],
    ['LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.state.3', 3],
];