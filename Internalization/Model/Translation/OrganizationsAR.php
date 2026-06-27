<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Model\Translation;

use Object\ActiveRecord;

class OrganizationsAR extends ActiveRecord
{
    /**
     * @var string
     */
    public string $object_table_class = Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['in_translorg_tenant_id','in_translorg_translation_id','in_translorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $in_translorg_tenant_id = null {
        get => $this->in_translorg_tenant_id;
        set {
            $this->setFullPkAndFilledColumn('in_translorg_tenant_id', $value);
            $this->in_translorg_tenant_id = $value;
        }
    }

    /**
     * #
     *
     *
     *
     *
     *
     * @var int|null Type: bigserial
     */
    public int|null $in_translorg_id = null {
        get => $this->in_translorg_id;
        set {
            $this->setFullPkAndFilledColumn('in_translorg_id', $value);
            $this->in_translorg_id = $value;
        }
    }

    /**
     * Translation #
     *
     *
     *
     * {domain{big_id}}
     *
     * @var int|null Domain: big_id Type: bigint
     */
    public int|null $in_translorg_translation_id = null {
        get => $this->in_translorg_translation_id;
        set {
            $this->setFullPkAndFilledColumn('in_translorg_translation_id', $value);
            $this->in_translorg_translation_id = $value;
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
    public int|null $in_translorg_organization_id = null {
        get => $this->in_translorg_organization_id;
        set {
            $this->setFullPkAndFilledColumn('in_translorg_organization_id', $value);
            $this->in_translorg_organization_id = $value;
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
    public int|null $in_translorg_inactive = 0 {
        get => $this->in_translorg_inactive;
        set {
            $this->setFullPkAndFilledColumn('in_translorg_inactive', $value);
            $this->in_translorg_inactive = $value;
        }
    }
}
