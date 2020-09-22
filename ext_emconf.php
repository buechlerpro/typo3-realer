<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Real estate publisher',
    'description' => 'Provides information regarding real estate properties.',
    'category' => 'plugin',
    'author' => 'Roman Büchler',
    'author_email' => 'rb@buechler.pro',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.0.2-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.4-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
