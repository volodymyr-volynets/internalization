<?php

namespace Numbers\Internalization\Internalization\Model;
class GroupsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Groups::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_group_tenant_id','in_group_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_group_tenant_id = NULL {
                        get => $this->in_group_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_tenant_id', $value);
                            $this->in_group_tenant_id = $value;
                        }
                    }

    /**
     * Group #
     *
     *
     *
     * {domain{group_id_sequence}}
     *
     * @var int|null Domain: group_id_sequence Type: serial
     */
    public int|null $in_group_id = null {
                        get => $this->in_group_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_id', $value);
                            $this->in_group_id = $value;
                        }
                    }

    /**
     * Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $in_group_name = null {
                        get => $this->in_group_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_name', $value);
                            $this->in_group_name = $value;
                        }
                    }

    /**
     * Native Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $in_group_native_name = null {
                        get => $this->in_group_native_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_native_name', $value);
                            $this->in_group_native_name = $value;
                        }
                    }

    /**
     * Country Code
     *
     *
     *
     * {domain{country_code}}
     *
     * @var string|null Domain: country_code Type: char
     */
    public string|null $in_group_country_code = null {
                        get => $this->in_group_country_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_country_code', $value);
                            $this->in_group_country_code = $value;
                        }
                    }

    /**
     * Currency Code
     *
     *
     *
     * {domain{currency_code}}
     *
     * @var string|null Domain: currency_code Type: char
     */
    public string|null $in_group_currency_code = null {
                        get => $this->in_group_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_currency_code', $value);
                            $this->in_group_currency_code = $value;
                        }
                    }

    /**
     * Language Code
     *
     *
     *
     * {domain{language_code}}
     *
     * @var string|null Domain: language_code Type: char
     */
    public string|null $in_group_language_code = null {
                        get => $this->in_group_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_language_code', $value);
                            $this->in_group_language_code = $value;
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
    public string|null $in_group_locale_code = null {
                        get => $this->in_group_locale_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_locale_code', $value);
                            $this->in_group_locale_code = $value;
                        }
                    }

    /**
     * Timezone Code
     *
     *
     *
     * {domain{timezone_code}}
     *
     * @var string|null Domain: timezone_code Type: varchar
     */
    public string|null $in_group_timezone_code = null {
                        get => $this->in_group_timezone_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_timezone_code', $value);
                            $this->in_group_timezone_code = $value;
                        }
                    }

    /**
     * Organization #
     *
     *
     *
     * {domain{organization_id}}
     *
     * @var int|null Domain: organization_id Type: integer
     */
    public int|null $in_group_organization_id = NULL {
                        get => $this->in_group_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_organization_id', $value);
                            $this->in_group_organization_id = $value;
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
    public int|null $in_group_inactive = 0 {
                        get => $this->in_group_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_inactive', $value);
                            $this->in_group_inactive = $value;
                        }
                    }

    /**
     * Date Format
     *
     *
     *
     * {domain{code}}
     *
     * @var string|null Domain: code Type: varchar
     */
    public string|null $in_group_format_date = null {
                        get => $this->in_group_format_date;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_date', $value);
                            $this->in_group_format_date = $value;
                        }
                    }

    /**
     * Time Format
     *
     *
     *
     * {domain{code}}
     *
     * @var string|null Domain: code Type: varchar
     */
    public string|null $in_group_format_time = null {
                        get => $this->in_group_format_time;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_time', $value);
                            $this->in_group_format_time = $value;
                        }
                    }

    /**
     * Datetime Format
     *
     *
     *
     * {domain{code}}
     *
     * @var string|null Domain: code Type: varchar
     */
    public string|null $in_group_format_datetime = null {
                        get => $this->in_group_format_datetime;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_datetime', $value);
                            $this->in_group_format_datetime = $value;
                        }
                    }

    /**
     * Timestamp Format
     *
     *
     *
     * {domain{code}}
     *
     * @var string|null Domain: code Type: varchar
     */
    public string|null $in_group_format_timestamp = null {
                        get => $this->in_group_format_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_timestamp', $value);
                            $this->in_group_format_timestamp = $value;
                        }
                    }

    /**
     * Amounts In Forms
     *
     *
     * {options_model{\Object\Format\Amounts}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $in_group_format_amount_frm = NULL {
                        get => $this->in_group_format_amount_frm;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_amount_frm', $value);
                            $this->in_group_format_amount_frm = $value;
                        }
                    }

    /**
     * Amounts In Financial Statement
     *
     *
     * {options_model{\Object\Format\Amounts}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $in_group_format_amount_fs = NULL {
                        get => $this->in_group_format_amount_fs;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_amount_fs', $value);
                            $this->in_group_format_amount_fs = $value;
                        }
                    }

    /**
     * Unit of Measures
     *
     *
     * {options_model{\Object\Format\UoM}}
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $in_group_format_uom = 'METRIC' {
                        get => $this->in_group_format_uom;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_format_uom', $value);
                            $this->in_group_format_uom = $value;
                        }
                    }

    /**
     * Optimistic Lock
     *
     *
     *
     * {domain{optimistic_lock}}
     *
     * @var string|null Domain: optimistic_lock Type: timestamp
     */
    public string|null $in_group_optimistic_lock = 'now()' {
                        get => $this->in_group_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('in_group_optimistic_lock', $value);
                            $this->in_group_optimistic_lock = $value;
                        }
                    }
}
