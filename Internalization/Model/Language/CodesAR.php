<?php

namespace Numbers\Internalization\Internalization\Model\Language;
class CodesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Internalization\Internalization\Model\Language\Codes::class;

	/**
	 * Constructing object
	 *
	 * @param array $options
	 *		skip_db_object
	 *		skip_table_object
	 */
	public function __construct($options = []) {
		if (empty($options['skip_table_object'])) {
			$this->object_table_object = new $this->object_table_class($options);
		}
	}
	/**
	 * Tenant #
	 *
	 *
	 *
	 * {domain{tenant_id}}
	 *
	 * @var int Domain: tenant_id Type: integer
	 */
	public ?int $in_language_tenant_id = NULL;

	/**
	 * Language Code
	 *
	 *
	 *
	 * {domain{language_code}}
	 *
	 * @var string Domain: language_code Type: char
	 */
	public ?string $in_language_code = null;

	/**
	 * Language Code (2)
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: char
	 */
	public ?string $in_language_code2 = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $in_language_name = null;

	/**
	 * Native Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $in_language_native_name = null;

	/**
	 * Right to Left
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_language_rtl = 0;

	/**
	 * Family Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $in_language_family_name = null;

	/**
	 * Country Code
	 *
	 *
	 *
	 * {domain{country_code}}
	 *
	 * @var string Domain: country_code Type: char
	 */
	public ?string $in_language_country_code = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_language_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $in_language_optimistic_lock = 'now()';
}