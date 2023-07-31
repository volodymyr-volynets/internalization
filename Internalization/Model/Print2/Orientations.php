<?php

namespace Numbers\Internalization\Internalization\Model\Print2;
class Orientations extends \Object\Data {
	public $column_key = 'in_print_orientation_code';
	public $column_prefix = 'in_print_orientation_';
	public $orderby;
	public $columns = [
		'in_print_orientation_code' => ['name' => 'Code', 'domain' => 'type_code'],
		'in_print_orientation_name' => ['name' => 'Name', 'type' => 'text']
	];
	public $data = [
		'P' => ['in_print_orientation_name' => 'Portrait'],
		'L' => ['in_print_orientation_name' => 'Landscape']
	];
}