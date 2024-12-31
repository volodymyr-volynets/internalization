<?php

namespace Numbers\Internalization\Internalization\Model;
class LocalesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Locales::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_locale_tenant_id','in_locale_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_locale_tenant_id = NULL {
                        get => $this->in_locale_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_tenant_id', $value);
                            $this->in_locale_tenant_id = $value;
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
    public string|null $in_locale_code = null {
                        get => $this->in_locale_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_code', $value);
                            $this->in_locale_code = $value;
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
    public string|null $in_locale_name = null {
                        get => $this->in_locale_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_name', $value);
                            $this->in_locale_name = $value;
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
    public string|null $in_locale_language_code = 'eng' {
                        get => $this->in_locale_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_language_code', $value);
                            $this->in_locale_language_code = $value;
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
    public string|null $in_locale_language_code2 = 'en' {
                        get => $this->in_locale_language_code2;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_language_code2', $value);
                            $this->in_locale_language_code2 = $value;
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
    public int|null $in_locale_inactive = 0 {
                        get => $this->in_locale_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_inactive', $value);
                            $this->in_locale_inactive = $value;
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
    public string|null $in_locale_optimistic_lock = 'now()' {
                        get => $this->in_locale_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('in_locale_optimistic_lock', $value);
                            $this->in_locale_optimistic_lock = $value;
                        }
                    }
}
