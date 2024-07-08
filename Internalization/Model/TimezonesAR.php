<?php

namespace Numbers\Internalization\Internalization\Model;
class TimezonesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Internalization\Internalization\Model\Timezones::class;

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
	public ?int $in_timezone_tenant_id = NULL;

	/**
	 * Timezone Code
	 *
	 *
	 *
	 * {domain{timezone_code}}
	 *
	 * @var string Domain: timezone_code Type: varchar
	 */
	public ?string $in_timezone_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $in_timezone_name = null;

	/**
	 * Hours Offset
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: smallint
	 */
	public ?int $in_timezone_hours_offset = 0;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_timezone_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $in_timezone_optimistic_lock = 'now()';
}