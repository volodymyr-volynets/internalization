<?php

namespace Numbers\Internalization\Internalization\Model\Translation;
class MissingAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Internalization\Internalization\Model\Translation\Missing::class;

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
	public ?int $in_translmiss_tenant_id = NULL;

	/**
	 * Translation #
	 *
	 *
	 *
	 * {domain{big_id_sequence}}
	 *
	 * @var int Domain: big_id_sequence Type: bigserial
	 */
	public ?int $in_translmiss_id = null;

	/**
	 * From Language Code
	 *
	 *
	 *
	 * {domain{language_code}}
	 *
	 * @var string Domain: language_code Type: char
	 */
	public ?string $in_translmiss_from_language_code = null;

	/**
	 * System Text
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: varchar
	 */
	public ?string $in_translmiss_from_text = null;

	/**
	 * To Language Code
	 *
	 *
	 *
	 * {domain{language_code}}
	 *
	 * @var string Domain: language_code Type: char
	 */
	public ?string $in_translmiss_to_language_code = null;

	/**
	 * Organization #
	 *
	 *
	 *
	 * {domain{organization_id}}
	 *
	 * @var int Domain: organization_id Type: integer
	 */
	public ?int $in_translmiss_organization_id = NULL;

	/**
	 * Javascript
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_translmiss_javascript = 0;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_translmiss_inactive = 0;
}