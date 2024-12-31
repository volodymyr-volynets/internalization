<?php

namespace Numbers\Internalization\Internalization\Model;
class TranslationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Translations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_translation_tenant_id','in_translation_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_translation_tenant_id = NULL {
                        get => $this->in_translation_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_tenant_id', $value);
                            $this->in_translation_tenant_id = $value;
                        }
                    }

    /**
     * Translation #
     *
     *
     *
     * {domain{big_id_sequence}}
     *
     * @var int|null Domain: big_id_sequence Type: bigserial
     */
    public int|null $in_translation_id = null {
                        get => $this->in_translation_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_id', $value);
                            $this->in_translation_id = $value;
                        }
                    }

    /**
     * I18n #
     *
     *
     *
     * {domain{group_id}}
     *
     * @var int|null Domain: group_id Type: integer
     */
    public int|null $in_translation_i18n_id = NULL {
                        get => $this->in_translation_i18n_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_i18n_id', $value);
                            $this->in_translation_i18n_id = $value;
                        }
                    }

    /**
     * From Language Code
     *
     *
     *
     * {domain{language_code}}
     *
     * @var string|null Domain: language_code Type: char
     */
    public string|null $in_translation_from_language_code = null {
                        get => $this->in_translation_from_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_from_language_code', $value);
                            $this->in_translation_from_language_code = $value;
                        }
                    }

    /**
     * From Text
     *
     *
     *
     *
     *
     * @var string|null Type: varchar
     */
    public string|null $in_translation_from_text = null {
                        get => $this->in_translation_from_text;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_from_text', $value);
                            $this->in_translation_from_text = $value;
                        }
                    }

    /**
     * To Language Code
     *
     *
     *
     * {domain{language_code}}
     *
     * @var string|null Domain: language_code Type: char
     */
    public string|null $in_translation_to_language_code = null {
                        get => $this->in_translation_to_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_to_language_code', $value);
                            $this->in_translation_to_language_code = $value;
                        }
                    }

    /**
     * To Text
     *
     *
     *
     *
     *
     * @var string|null Type: varchar
     */
    public string|null $in_translation_to_text = null {
                        get => $this->in_translation_to_text;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_to_text', $value);
                            $this->in_translation_to_text = $value;
                        }
                    }

    /**
     * Javascript
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $in_translation_javascript = 0 {
                        get => $this->in_translation_javascript;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_javascript', $value);
                            $this->in_translation_javascript = $value;
                        }
                    }

    /**
     * Inactive
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $in_translation_inactive = 0 {
                        get => $this->in_translation_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_translation_inactive', $value);
                            $this->in_translation_inactive = $value;
                        }
                    }
}
