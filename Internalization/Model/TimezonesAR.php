<?php

namespace Numbers\Internalization\Internalization\Model;
class TimezonesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Internalization\Internalization\Model\Timezones::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_timezone_tenant_id','in_timezone_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_timezone_tenant_id = NULL {
                        get => $this->in_timezone_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('in_timezone_tenant_id', $value);
                            $this->in_timezone_tenant_id = $value;
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
    public string|null $in_timezone_code = null {
                        get => $this->in_timezone_code;
                        set {
                            $this->setFullPkAndFilledColumn('in_timezone_code', $value);
                            $this->in_timezone_code = $value;
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
    public string|null $in_timezone_name = null {
                        get => $this->in_timezone_name;
                        set {
                            $this->setFullPkAndFilledColumn('in_timezone_name', $value);
                            $this->in_timezone_name = $value;
                        }
                    }

    /**
     * Hours Offset
     *
     *
     *
     *
     *
     * @var int|null Type: smallint
     */
    public int|null $in_timezone_hours_offset = 0 {
                        get => $this->in_timezone_hours_offset;
                        set {
                            $this->setFullPkAndFilledColumn('in_timezone_hours_offset', $value);
                            $this->in_timezone_hours_offset = $value;
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
    public int|null $in_timezone_inactive = 0 {
                        get => $this->in_timezone_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('in_timezone_inactive', $value);
                            $this->in_timezone_inactive = $value;
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
    public string|null $in_timezone_optimistic_lock = 'now()' {
                        get => $this->in_timezone_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('in_timezone_optimistic_lock', $value);
                            $this->in_timezone_optimistic_lock = $value;
                        }
                    }
}
