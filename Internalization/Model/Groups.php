<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Model;

use Object\Table;

class Groups extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'IN';
    public $title = 'I/N Groups';
    public $name = 'in_groups';
    public $pk = ['in_group_tenant_id', 'in_group_id'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'in_group_';
    public $columns = [
        'in_group_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'in_group_id' => ['name' => 'Group #', 'domain' => 'group_id_sequence'],
        'in_group_name' => ['name' => 'Name', 'domain' => 'name'],
        'in_group_native_name' => ['name' => 'Native Name', 'domain' => 'name', 'null' => true],
        'in_group_country_code' => ['name' => 'Country Code', 'domain' => 'country_code', 'null' => true],
        'in_group_currency_code' => ['name' => 'Currency Code', 'domain' => 'currency_code', 'null' => true],
        // i18n settings
        'in_group_language_code' => ['name' => 'Language Code', 'domain' => 'language_code'],
        'in_group_locale_code' => ['name' => 'Locale Code', 'domain' => 'locale_code'],
        'in_group_timezone_code' => ['name' => 'Timezone Code', 'domain' => 'timezone_code'],
        'in_group_organization_id' => ['name' => 'Organization #', 'domain' => 'organization_id', 'null' => true],
        'in_group_inactive' => ['name' => 'Inactive', 'type' => 'boolean'],
        // format settings, if not set would be inherited from application settings
        'in_group_format_date' => ['name' => 'Date Format', 'domain' => 'code'],
        'in_group_format_time' => ['name' => 'Time Format', 'domain' => 'code'],
        'in_group_format_datetime' => ['name' => 'Datetime Format', 'domain' => 'code'],
        'in_group_format_timestamp' => ['name' => 'Timestamp Format', 'domain' => 'code'],
        'in_group_format_amount_frm' => ['name' => 'Amounts In Forms', 'domain' => 'type_id', 'options_model' => '\Object\Format\Amounts'],
        'in_group_format_amount_fs' => ['name' => 'Amounts In Financial Statement', 'domain' => 'type_id', 'options_model' => '\Object\Format\Amounts'],
        'in_group_format_uom' => ['name' => 'Unit of Measures', 'domain' => 'group_code', 'default' => 'METRIC', 'options_model' => '\Object\Format\UoM']
    ];
    public $constraints = [
        'in_groups_pk' => ['type' => 'pk', 'columns' => ['in_group_tenant_id', 'in_group_id']],
        'in_group_locale_code_fk' => [
            'type' => 'fk',
            'columns' => ['in_group_tenant_id', 'in_group_locale_code'],
            'foreign_model' => '\Numbers\Internalization\Internalization\Model\Locales',
            'foreign_columns' => ['in_locale_tenant_id', 'in_locale_code']
        ],
        'in_group_timezone_code_fk' => [
            'type' => 'fk',
            'columns' => ['in_group_tenant_id', 'in_group_timezone_code'],
            'foreign_model' => '\Numbers\Internalization\Internalization\Model\Timezones',
            'foreign_columns' => ['in_timezone_tenant_id', 'in_timezone_code']
        ],
        'in_group_language_code_fk' => [
            'type' => 'fk',
            'columns' => ['in_group_tenant_id', 'in_group_language_code'],
            'foreign_model' => '\Numbers\Internalization\Internalization\Model\Language\Codes',
            'foreign_columns' => ['in_language_tenant_id', 'in_language_code']
        ],
        'in_group_organization_id_fk' => [
            'type' => 'fk',
            'columns' => ['in_group_tenant_id', 'in_group_organization_id'],
            'foreign_model' => '\Numbers\Users\Organizations\Model\Organizations',
            'foreign_columns' => ['on_organization_tenant_id', 'on_organization_id']
        ],
        'in_group_country_code_fk' => [
            'type' => 'fk',
            'columns' => ['in_group_tenant_id', 'in_group_country_code'],
            'foreign_model' => '\Numbers\Countries\Countries\Model\Countries',
            'foreign_columns' => ['cm_country_tenant_id', 'cm_country_code']
        ],
        'in_group_currency_code_fk' => [
            'type' => 'fk',
            'columns' => ['in_group_tenant_id', 'in_group_currency_code'],
            'foreign_model' => '\Numbers\Countries\Currencies\Model\Currencies',
            'foreign_columns' => ['cy_currency_tenant_id', 'cy_currency_code']
        ]
    ];
    public $indexes = [
        'in_groups_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['in_group_name']]
    ];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = true;
    public $options_map = [
        'in_group_name' => 'name',
        'in_group_native_name' => 'name',
        'in_group_id' => 'id',
        'in_group_country_code' => 'flag_country_code',
        'in_group_locale_code' => 'locale_code',
        'in_group_language_code' => 'language_code',
        'in_group_timezone_code' => 'timezone_code',
        'in_group_inactive' => 'inactive'
    ];
    public $options_active = [
        'in_group_inactive' => 0
    ];
    public $engine = [
        'MySQLi' => 'InnoDB'
    ];

    public $cache = true;
    public $cache_tags = [];
    public $cache_memory = false;

    public $data_asset = [
        'classification' => 'public',
        'protection' => 0,
        'scope' => 'global'
    ];
}
