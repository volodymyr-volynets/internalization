<?php

namespace Numbers\Internalization\Internalization\Model\Language;
class CodesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Language\Codes::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_language_tenant_id','in_language_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_language_tenant_id = NULL {
                        get => $this->in_language_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_tenant_id', $value);
                            $this->in_language_tenant_id = $value;
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
    public string|null $in_language_code = null {
                        get => $this->in_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_code', $value);
                            $this->in_language_code = $value;
                        }
                    }

    /**
     * Language Code (2)
     *
     *
     *
     *
     *
     * @var string|null Type: char
     */
    public string|null $in_language_code2 = null {
                        get => $this->in_language_code2;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_code2', $value);
                            $this->in_language_code2 = $value;
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
    public string|null $in_language_name = null {
                        get => $this->in_language_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_name', $value);
                            $this->in_language_name = $value;
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
    public string|null $in_language_native_name = null {
                        get => $this->in_language_native_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_native_name', $value);
                            $this->in_language_native_name = $value;
                        }
                    }

    /**
     * Right to Left
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $in_language_rtl = 0 {
                        get => $this->in_language_rtl;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_rtl', $value);
                            $this->in_language_rtl = $value;
                        }
                    }

    /**
     * Family Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $in_language_family_name = null {
                        get => $this->in_language_family_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_family_name', $value);
                            $this->in_language_family_name = $value;
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
    public string|null $in_language_country_code = null {
                        get => $this->in_language_country_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_country_code', $value);
                            $this->in_language_country_code = $value;
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
    public int|null $in_language_inactive = 0 {
                        get => $this->in_language_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_inactive', $value);
                            $this->in_language_inactive = $value;
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
    public string|null $in_language_optimistic_lock = 'now()' {
                        get => $this->in_language_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('in_language_optimistic_lock', $value);
                            $this->in_language_optimistic_lock = $value;
                        }
                    }
}
