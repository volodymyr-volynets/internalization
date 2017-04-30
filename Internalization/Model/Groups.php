<?php

namespace Numbers\Internalization\Internalization\Model;
class Groups extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'IN';
	public $title = 'I/N Groups';
	public $name = 'in_groups';
	public $pk = ['in_group_tenant_id', 'in_group_id'];
	public $orderby;
	public $limit;
	public $column_prefix = 'in_group_';
	public $columns = [
		'in_group_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'in_group_id' => ['name' => 'Group #', 'domain' => 'group_id_sequence'],
		'in_group_name' => ['name' => 'Name', 'domain' => 'name'],
		'in_group_language_code' => ['name' => 'Language Code', 'domain' => 'language_code'],
		'in_group_locale_code' => ['name' => 'Locale Code', 'domain' => 'locale_code'],
		'in_group_timezone_code' => ['name' => 'Timezone Code', 'domain' => 'timezone_code'],
		'in_group_inactive' => ['name' => 'Inactive', 'type' => 'boolean'],
		// format settings, if not set would be inherited from application settings
		'in_group_format_date' => ['name' => 'Date Format', 'domain' => 'code', 'null' => true],
		'in_group_format_time' => ['name' => 'Time Format', 'domain' => 'code', 'null' => true],
		'in_group_format_datetime' => ['name' => 'Datetime Format', 'domain' => 'code', 'null' => true],
		'in_group_format_timestamp' => ['name' => 'Timestamp Format', 'domain' => 'code', 'null' => true],
		'in_group_format_amount_frm' => ['name' => 'Amounts In Forms', 'domain' => 'type_id', 'null' => true, 'options_model' => '\Numbers\Internalization\Internalization\Model\Format\Amounts'],
		'in_group_format_amount_fs' => ['name' => 'Amounts In Financial Statement', 'domain' => 'type_id', 'null' => true, 'options_model' => '\Numbers\Internalization\Internalization\Model\Format\Amounts']
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
		]
	];
	public $indexes = [
		'in_groups_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['in_group_name']]
	];
	public $history = false;
	public $audit = false;
	public $optimistic_lock = true;
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'mysqli' => 'InnoDB'
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