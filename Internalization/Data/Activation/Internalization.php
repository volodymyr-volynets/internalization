<?php

namespace Numbers\Internalization\Internalization\Data\Activation;
class Internalization extends \Object\Import {
	public $data = [
		'language_codes' => [
			'options' => [
				'pk' => ['tm_structure_code'],
				'model' => '\Numbers\Internalization\Internalization\Model\Language\Codes',
				'method' => 'save_insert_new'
			],
			'data' => [
				[
					'in_language_code' => 'sm0',
					'in_language_code2' => null,
					'in_language_name' => 'Systems Language',
					'in_language_native_name' => null,
					'in_language_rtl' => 0,
					'in_language_parent_language_code' => null,
					'in_language_family_name' => null,
					'in_language_inactive' => 0
				]
			]
		]
	];
}