<?php

namespace Numbers\Internalization\Internalization\Model\Translation;
class OrganizationsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Internalization\Internalization\Model\Translation\Organizations::class;

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
	public ?int $in_translorg_tenant_id = NULL;

	/**
	 * #
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: bigserial
	 */
	public ?int $in_translorg_id = null;

	/**
	 * Translation #
	 *
	 *
	 *
	 * {domain{big_id}}
	 *
	 * @var int Domain: big_id Type: bigint
	 */
	public ?int $in_translorg_translation_id = NULL;

	/**
	 * Organization #
	 *
	 *
	 *
	 * {domain{organization_id}}
	 *
	 * @var int Domain: organization_id Type: integer
	 */
	public ?int $in_translorg_organization_id = NULL;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_translorg_inactive = 0;
}