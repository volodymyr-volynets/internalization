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

class FontStyles extends Data
{
    public $column_key = 'in_print_fntstyle_code';
    public $column_prefix = 'in_print_fntstyle_';
    public $orderby;
    public $columns = [
        'in_print_fntstyle_code' => ['name' => 'Code', 'domain' => 'type_code'],
        'in_print_fntstyle_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $data = [
        'B' => ['in_print_fntstyle_name' => 'Bold'],
        'I' => ['in_print_fntstyle_name' => 'Italic'],
        'U' => ['in_print_fntstyle_name' => 'Underline'],
        'D' => ['in_print_fntstyle_name' => 'Line through'],
        'O' => ['in_print_fntstyle_name' => 'Overline'],
        'BI' => ['in_print_fntstyle_name' => 'Bold / Italic'],
        'BIU' => ['in_print_fntstyle_name' => 'Bold / Italic / Underline'],
    ];
}
