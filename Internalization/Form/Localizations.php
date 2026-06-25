<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Form;

use Object\Form\Wrapper\Base;

class Localizations extends Base
{
    public $form_link = 'in_localizations';
    public $module_code = 'IN';
    public $title = 'I/N Localizations Form';
    public $options = [
        'segment' => self::SEGMENT_FORM,
        'actions' => [
            'refresh' => true,
            'back' => true,
            'new' => true,
            'import' => true
        ]
    ];
    public $containers = [
        'top' => ['default_row_type' => 'grid', 'order' => 100],
        'buttons' => ['default_row_type' => 'grid', 'order' => 900]
    ];
    public $rows = [];
    public $elements = [
        'top' => [
            'in_localization_locale_code' => [
                'in_localization_locale_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Locale', 'domain' => 'locale_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Internalization\Internalization\Model\Locales', 'onchange' => 'this.form.submit();'],
                'in_localization_key' => ['order' => 2, 'label_name' => 'Key', 'domain' => 'loc', 'null' => true, 'required' => true, 'percent' => 50],
            ],
            'in_localization_text' => [
                'in_localization_text' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Text', 'type' => 'text', 'null' => true, 'required' => true, 'percent' => 80, 'method' => 'textarea', 'rows' => 3],
                'in_localization_javascript' => ['order' => 2, 'label_name' => 'Javascript', 'type' => 'boolean', 'percent' => 10],
                'in_localization_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 10]
            ],
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'IN Localizations',
        'model' => '\Numbers\Internalization\Internalization\Model\Localizations'
    ];
}
