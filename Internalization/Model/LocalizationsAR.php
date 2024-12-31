<?php

namespace Numbers\Internalization\Internalization\Model;
class LocalizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Localizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_localization_tenant_id','in_localization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_localization_tenant_id = NULL {
                        get => $this->in_localization_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_localization_tenant_id', $value);
                            $this->in_localization_tenant_id = $value;
                        }
                    }

    /**
     * Locale Code
     *
     *
     *
     * {domain{locale_code}}
     *
     * @var string|null Domain: locale_code Type: varchar
     */
    public string|null $in_localization_locale_code = null {
                        get => $this->in_localization_locale_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_localization_locale_code', $value);
                            $this->in_localization_locale_code = $value;
                        }
                    }

    /**
     * Key
     *
     *
     *
     * {domain{loc}}
     *
     * @var string|null Domain: loc Type: varchar
     */
    public string|null $in_localization_key = null {
                        get => $this->in_localization_key;
                        set {
                            $this->setFullPkAndFilledColumn('in_localization_key', $value);
                            $this->in_localization_key = $value;
                        }
                    }

    /**
     * Text
     *
     *
     *
     *
     *
     * @var string|null Type: text
     */
    public string|null $in_localization_text = null {
                        get => $this->in_localization_text;
                        set {
                            $this->setFullPkAndFilledColumn('in_localization_text', $value);
                            $this->in_localization_text = $value;
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
    public int|null $in_localization_javascript = 0 {
                        get => $this->in_localization_javascript;
                        set {
                            $this->setFullPkAndFilledColumn('in_localization_javascript', $value);
                            $this->in_localization_javascript = $value;
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
    public int|null $in_localization_inactive = 0 {
                        get => $this->in_localization_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_localization_inactive', $value);
                            $this->in_localization_inactive = $value;
                        }
                    }
}
