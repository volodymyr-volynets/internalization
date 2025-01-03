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

class Timezones extends Base
{
    public $form_link = 'in_timezones';
    public $module_code = 'IN';
    public $title = 'I/N Timezones Form';
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
            'in_timezone_code' => [
                'in_timezone_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Code', 'domain' => 'timezone_code', 'percent' => 95, 'required' => true, 'navigation' => true],
                'in_timezone_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'in_timezone_name' => [
                'in_timezone_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
            ],
            'in_timezone_hours_offset' => [
                'in_timezone_hours_offset' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Hours Offset', 'type' => 'smallint', 'default' => 0, 'readonly' => true],
            ]
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Timezones',
        'model' => '\Numbers\Internalization\Internalization\Model\Timezones'
    ];

    public function validate(& $form)
    {
        // validate if timezone is valid
        if (!empty($form->values['in_timezone_code'])) {
            $current_timezone = date_default_timezone_get();
            if (!date_default_timezone_set($form->values['in_timezone_code'])) {
                $form->error('danger', 'Provided timezone is not valid!', 'in_timezone_code');
            }
            date_default_timezone_set($current_timezone);
        }
        // calculate offset
        if (!empty($form->values['in_timezone_code'])) {
            $local_tz = new \DateTimeZone(\Format::$options['server_timezone_code']);
            $local = new \DateTime('now', $local_tz);
            $user_tz = new \DateTimeZone($form->values['in_timezone_code']);
            $user = new \DateTime('now', $user_tz);
            $local_offset = $local->getOffset() / 3600;
            $user_offset = $user->getOffset() / 3600;
            $form->values['in_timezone_hours_offset'] = ($user_offset - $local_offset);
        }
    }
}
