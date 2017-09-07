<?php

namespace Numbers\Internalization\Internalization\Model\Group;
class Organizations extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'IN';
	public $title = 'I/N Group Organizations';
	public $name = 'in_group_organizations';
	public $pk = ['in_grporg_tenant_id', 'in_grporg_group_id', 'in_grporg_organization_id'];
	public $tenant = true;
	public $orderby = [
		'in_grporg_id' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'in_grporg_';
	public $columns = [
		'in_grporg_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'in_grporg_id' => ['name' => '#', 'type' => 'bigserial'],
		'in_grporg_group_id' => ['name' => 'User #', 'domain' => 'user_id'],
		'in_grporg_organization_id' => ['name' => 'Organization #', 'domain' => 'organization_id'],
		'in_grporg_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'in_group_organizations_pk' => ['type' => 'pk', 'columns' => ['in_grporg_tenant_id', 'in_grporg_group_id', 'in_grporg_organization_id']],
		'in_grporg_group_id_fk' => [
			'type' => 'fk',
			'columns' => ['in_grporg_tenant_id', 'in_grporg_group_id'],
			'foreign_model' => '\Numbers\Internalization\Internalization\Model\Groups',
			'foreign_columns' => ['in_group_tenant_id', 'in_group_id']
		],
		'in_grporg_organization_id_fk' => [
			'type' => 'fk',
			'columns' => ['in_grporg_tenant_id', 'in_grporg_organization_id'],
			'foreign_model' => '\Numbers\Users\Organizations\Model\Organizations',
			'foreign_columns' => ['on_organization_tenant_id', 'on_organization_id']
		]
	];
	public $indexes = [];
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
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];
}