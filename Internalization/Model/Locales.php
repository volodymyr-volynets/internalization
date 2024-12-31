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

class Locales extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'IN';
    public $title = 'I/N Locales';
    public $name = 'in_locales';
    public $pk = ['in_locale_tenant_id', 'in_locale_code'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'in_locale_';
    public $columns = [
        'in_locale_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'in_locale_code' => ['name' => 'Locale Code', 'domain' => 'locale_code'],
        'in_locale_name' => ['name' => 'Name', 'domain' => 'name'],
        'in_locale_language_code' => ['name' => 'Language Code', 'domain' => 'language_code', 'default' => 'eng', 'null' => true],
        'in_locale_language_code2' => ['name' => 'Language Code (2)', 'type' => 'char', 'length' => 2, 'default' => 'en', 'null' => true],
        'in_locale_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'in_locales_pk' => ['type' => 'pk', 'columns' => ['in_locale_tenant_id', 'in_locale_code']]
    ];
    public $indexes = [
        'in_locales_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['in_locale_code', 'in_locale_name']]
    ];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = true;
    public $options_map = [];
    public $options_active = [];
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
