<?php
/**
 * @see       https://github.com/zendframework/zend-i18n for the canonical source repository
 * @copyright Copyright (c) 2005-2019 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-i18n/blob/master/LICENSE.md New BSD License
 */

return [
    'code' => '689',
    'patterns' => [
        'national' => [
            'general' => '/^[2-9]\\d{5}$/',
            'fixed' => '/^(?:4(?:[02-9]\\d|1[02-9])|[5689]\\d{2})\\d{3}$/',
            'mobile' => '/^(?:[27]\\d{2}|3[0-79]\\d|411)\\d{3}$/',
            'emergency' => '/^1[578]$/',
        ],
        'possible' => [
            'general' => '/^\\d{6}$/',
            'emergency' => '/^\\d{2}$/',
        ],
    ],
];
