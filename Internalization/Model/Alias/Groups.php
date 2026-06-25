<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Model\Alias;

class Groups extends \Numbers\Internalization\Internalization\Model\Groups
{
    public $alias_model = true;
    public $options_map = [
        'in_group_name' => 'name',
        'in_group_native_name' => 'native_name',
        'in_group_id' => 'id',
        'in_group_country_code' => 'flag_country_code',
        'in_group_locale_code' => 'locale_code',
        'in_group_language_code' => 'language_code',
        'in_group_timezone_code' => 'timezone_code',
        'in_group_inactive' => 'inactive'
    ];
    public $options_active = [
        'in_group_inactive' => 0
    ];
}
