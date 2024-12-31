<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Model\Print2;

use Object\Data;

class Orientations extends Data
{
    public $column_key = 'in_print_orientation_code';
    public $column_prefix = 'in_print_orientation_';
    public $orderby;
    public $columns = [
        'in_print_orientation_code' => ['name' => 'Code', 'domain' => 'type_code'],
        'in_print_orientation_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $data = [
        'P' => ['in_print_orientation_name' => 'Portrait'],
        'L' => ['in_print_orientation_name' => 'Landscape']
    ];
}
