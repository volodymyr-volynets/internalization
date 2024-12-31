<?php

namespace Numbers\Internalization\Internalization\Model\Translation;
class MissingAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Translation\Missing::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_translmiss_tenant_id','in_translmiss_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_translmiss_tenant_id = NULL {
                        get => $this->in_translmiss_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_tenant_id', $value);
                            $this->in_translmiss_tenant_id = $value;
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
    public int|null $in_translmiss_id = null {
                        get => $this->in_translmiss_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_id', $value);
                            $this->in_translmiss_id = $value;
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
    public string|null $in_translmiss_from_language_code = null {
                        get => $this->in_translmiss_from_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_from_language_code', $value);
                            $this->in_translmiss_from_language_code = $value;
                        }
                    }

    /**
     * System Text
     *
     *
     *
     *
     *
     * @var string|null Type: varchar
     */
    public string|null $in_translmiss_from_text = null {
                        get => $this->in_translmiss_from_text;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_from_text', $value);
                            $this->in_translmiss_from_text = $value;
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
    public string|null $in_translmiss_to_language_code = null {
                        get => $this->in_translmiss_to_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_to_language_code', $value);
                            $this->in_translmiss_to_language_code = $value;
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
    public int|null $in_translmiss_organization_id = NULL {
                        get => $this->in_translmiss_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_organization_id', $value);
                            $this->in_translmiss_organization_id = $value;
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
    public int|null $in_translmiss_javascript = 0 {
                        get => $this->in_translmiss_javascript;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_javascript', $value);
                            $this->in_translmiss_javascript = $value;
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
    public int|null $in_translmiss_inactive = 0 {
                        get => $this->in_translmiss_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_translmiss_inactive', $value);
                            $this->in_translmiss_inactive = $value;
                        }
                    }
}
