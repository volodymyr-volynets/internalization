<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Data\Activation;

use Object\Import;

class Internalization extends Import
{
    public $data = [
        'language_codes' => [
            'options' => [
                'pk' => ['in_language_tenant_id', 'in_language_code'],
                'model' => '\Numbers\Internalization\Internalization\Model\Language\Codes',
                'method' => 'save'
            ],
            'data' => [
                [
                    'in_language_tenant_id' => null,
                    'in_language_code' => 'sm0',
                    'in_language_code2' => null,
                    'in_language_name' => 'System',
                    'in_language_native_name' => 'System',
                    'in_language_rtl' => 0,
                    'in_language_family_name' => 'System',
                    'in_language_inactive' => 0
                ],
                [
                    'in_language_tenant_id' => null,
                    'in_language_code' => 'eng',
                    'in_language_code2' => 'en',
                    'in_language_name' => 'English',
                    'in_language_native_name' => 'English',
                    'in_language_rtl' => 0,
                    'in_language_family_name' => 'Indo-European',
                    'in_language_inactive' => 0
                ],
                [
                    'in_language_tenant_id' => null,
                    'in_language_code' => 'fra',
                    'in_language_code2' => 'fr',
                    'in_language_name' => 'French',
                    'in_language_native_name' => 'Francais',
                    'in_language_rtl' => 0,
                    'in_language_family_name' => 'Indo-European',
                    'in_language_inactive' => 0
                ],
                [
                    'in_language_tenant_id' => null,
                    'in_language_code' => 'ukr',
                    'in_language_code2' => 'uk',
                    'in_language_name' => 'Ukrainian',
                    'in_language_native_name' => 'Українська',
                    'in_language_rtl' => 0,
                    'in_language_family_name' => 'Indo-European',
                    'in_language_inactive' => 0
                ]
            ]
        ],
        'locales' => [
            'options' => [
                'pk' => ['in_locale_tenant_id', 'in_locale_code'],
                'model' => '\Numbers\Internalization\Internalization\Model\Locales',
                'method' => 'save_insert_new'
            ],
            'data' => [
                [
                    'in_locale_tenant_id' => null,
                    'in_locale_code' => 'en_CA.UTF-8',
                    'in_locale_name' => 'en_CA.UTF-8',
                    'in_locale_language_code' => 'eng',
                    'in_locale_language_code2' => 'en',
                    'in_locale_inactive' => 0
                ],
                [
                    'in_locale_tenant_id' => null,
                    'in_locale_code' => 'fr_CA.UTF-8',
                    'in_locale_name' => 'fr_CA.UTF-8',
                    'in_locale_language_code' => 'fra',
                    'in_locale_language_code2' => 'fr',
                    'in_locale_inactive' => 0
                ],
                [
                    'in_locale_tenant_id' => null,
                    'in_locale_code' => 'uk_UA.UTF-8',
                    'in_locale_name' => 'uk_UA.UTF-8',
                    'in_locale_language_code' => 'ukr',
                    'in_locale_language_code2' => 'uk',
                    'in_locale_inactive' => 0
                ]
            ]
        ],
        'timezones' => [
            'options' => [
                'pk' => ['in_timezone_tenant_id', 'in_timezone_code'],
                'model' => '\Numbers\Internalization\Internalization\Model\Timezones',
                'method' => 'save_insert_new'
            ],
            'data' => [
                [
                    'in_timezone_tenant_id' => null,
                    'in_timezone_code' => 'America/Toronto',
                    'in_timezone_name' => 'America/Toronto',
                    'in_timezone_inactive' => 0
                ],
            ]
        ],
        'groups' => [
            'options' => [
                'pk' => ['in_group_tenant_id', 'in_group_name'],
                'model' => '\Numbers\Internalization\Internalization\Model\Groups',
                'method' => 'save_insert_new'
            ],
            'data' => [
                [
                    'in_group_tenant_id' => null,
                    'in_group_name' => 'English (Canada)',
                    'in_group_native_name' => null,
                    'in_group_language_code' => 'eng',
                    'in_group_locale_code' => 'en_CA.UTF-8',
                    'in_group_timezone_code' => 'America/Toronto',
                    'in_group_organization_id' => null,
                    'in_group_inactive' => 0,
                    'in_group_format_date' => 'm/d/Y',
                    'in_group_format_time' => 'g:i:s a',
                    'in_group_format_datetime' => 'm/d/Y g:i:s a',
                    'in_group_format_timestamp' => 'm/d/Y g:i:s.u a',
                    'in_group_format_amount_frm' => 10,
                    'in_group_format_amount_fs' => 30
                ],
                [
                    'in_group_tenant_id' => null,
                    'in_group_name' => 'French (Canada)',
                    'in_group_native_name' => 'Francais',
                    'in_group_language_code' => 'fra',
                    'in_group_locale_code' => 'fr_CA.UTF-8',
                    'in_group_timezone_code' => 'America/Toronto',
                    'in_group_organization_id' => null,
                    'in_group_inactive' => 0,
                    'in_group_format_date' => 'm/d/Y',
                    'in_group_format_time' => 'g:i:s a',
                    'in_group_format_datetime' => 'm/d/Y g:i:s a',
                    'in_group_format_timestamp' => 'm/d/Y g:i:s.u a',
                    'in_group_format_amount_frm' => 10,
                    'in_group_format_amount_fs' => 30
                ],
                [
                    'in_group_tenant_id' => null,
                    'in_group_name' => 'Ukrainian (Ukraine)',
                    'in_group_native_name' => 'Українська',
                    'in_group_language_code' => 'ukr',
                    'in_group_locale_code' => 'uk_UA.UTF-8',
                    'in_group_timezone_code' => 'America/Toronto',
                    'in_group_organization_id' => null,
                    'in_group_inactive' => 0,
                    'in_group_format_date' => 'm/d/Y',
                    'in_group_format_time' => 'g:i:s a',
                    'in_group_format_datetime' => 'm/d/Y g:i:s a',
                    'in_group_format_timestamp' => 'm/d/Y g:i:s.u a',
                    'in_group_format_amount_frm' => 10,
                    'in_group_format_amount_fs' => 30
                ]
            ]
        ]
    ];
}
