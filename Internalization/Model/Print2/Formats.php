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

class Formats extends Data
{
    public $column_key = 'in_print_format_code';
    public $column_prefix = 'in_print_format_';
    public $orderby;
    public $columns = [
        'in_print_format_code' => ['name' => 'Code', 'domain' => 'type_code'],
        'in_print_format_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $data = [
        'A4' => ['in_print_format_name' => 'A4'],
        'LETTER' => ['in_print_format_name' => 'Letter'],
        'LEGAL' => ['in_print_format_name' => 'Legal']
    ];
}
