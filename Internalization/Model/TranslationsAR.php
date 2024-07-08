<?php

namespace Numbers\Internalization\Internalization\Model;
class TranslationsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Internalization\Internalization\Model\Translations::class;

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
	public ?int $in_translation_tenant_id = NULL;

	/**
	 * Translation #
	 *
	 *
	 *
	 * {domain{big_id_sequence}}
	 *
	 * @var int Domain: big_id_sequence Type: bigserial
	 */
	public ?int $in_translation_id = null;

	/**
	 * I18n #
	 *
	 *
	 *
	 * {domain{group_id}}
	 *
	 * @var int Domain: group_id Type: integer
	 */
	public ?int $in_translation_i18n_id = NULL;

	/**
	 * From Language Code
	 *
	 *
	 *
	 * {domain{language_code}}
	 *
	 * @var string Domain: language_code Type: char
	 */
	public ?string $in_translation_from_language_code = null;

	/**
	 * From Text
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: varchar
	 */
	public ?string $in_translation_from_text = null;

	/**
	 * To Language Code
	 *
	 *
	 *
	 * {domain{language_code}}
	 *
	 * @var string Domain: language_code Type: char
	 */
	public ?string $in_translation_to_language_code = null;

	/**
	 * To Text
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: varchar
	 */
	public ?string $in_translation_to_text = null;

	/**
	 * Javascript
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_translation_javascript = 0;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $in_translation_inactive = 0;
}