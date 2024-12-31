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

class Localizations extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'IN';
    public $title = 'I/N Localizations';
    public $name = 'in_localizations';
    public $pk = ['in_localization_tenant_id', 'in_localization_id'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'in_localization_';
    public $columns = [
        'in_localization_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'in_localization_locale_code' => ['name' => 'Locale Code', 'domain' => 'locale_code'],
        'in_localization_key' => ['name' => 'Key', 'domain' => 'loc'],
        'in_localization_text' => ['name' => 'Text', 'type' => 'text'],
        'in_localization_javascript' => ['name' => 'Javascript', 'type' => 'boolean'],
        'in_localization_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'in_localizations_pk' => ['type' => 'pk', 'columns' => ['in_localization_tenant_id', 'in_localization_locale_code', 'in_localization_key']],
        'in_localization_locale_code_fk' => [
            'type' => 'fk',
            'columns' => ['in_localization_tenant_id', 'in_localization_locale_code'],
            'foreign_model' => '\Numbers\Internalization\Internalization\Model\Locales',
            'foreign_columns' => ['in_locale_tenant_id', 'in_locale_code']
        ],
    ];
    public $indexes = [
        'in_localizations_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['in_localization_key', 'in_localization_text']]
    ];
    public $history = false;
    public $audit = false;
    public $options_map = [];
    public $options_active = [];
    public $engine = [
        'MySQLi' => 'InnoDB'
    ];

    public $cache = false;
    public $cache_tags = [];
    public $cache_memory = false;

    public $data_asset = [
        'classification' => 'public',
        'protection' => 0,
        'scope' => 'global'
    ];
}
