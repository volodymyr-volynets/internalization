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

class Timezones extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'IN';
    public $title = 'I/N Timezones';
    public $name = 'in_timezones';
    public $pk = ['in_timezone_tenant_id', 'in_timezone_code'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'in_timezone_';
    public $columns = [
        'in_timezone_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'in_timezone_code' => ['name' => 'Timezone Code', 'domain' => 'timezone_code'],
        'in_timezone_name' => ['name' => 'Name', 'domain' => 'name'],
        'in_timezone_hours_offset' => ['name' => 'Hours Offset', 'type' => 'smallint', 'default' => 0],
        'in_timezone_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'in_timezones_pk' => ['type' => 'pk', 'columns' => ['in_timezone_tenant_id', 'in_timezone_code']]
    ];
    public $indexes = [
        'in_timezones_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['in_timezone_code', 'in_timezone_name']]
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
