<?php
$GLOBALS['TCA']['tx_realer_domain_model_property']['types'] = [
    '1' => ['showitem' => '
            sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, agent_reference, has_priority, sales_state, available_for_sale, available_for_rent, available_for_business_transfer, price_before, price_after, insurance_value, running_cost, images, introduction, 
            --div--;Location,location_type, address, zip, place, zone, region, country, latitude, longitude, orientation, 
            --div--;Object,object_type, house_type, flat_type, land_type, classification, room_count, is_new, property_age, construction_area, useful_area, state, description, 
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'
    ]
];