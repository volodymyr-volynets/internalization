<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Form\List2;

use Object\Form\Wrapper\List2;

class Localizations extends List2
{
    public $form_link = 'in_localizations_list';
    public $module_code = 'IN';
    public $title = 'I/N Localizations List';
    public $options = [
        'segment' => self::SEGMENT_LIST,
        'actions' => [
            'refresh' => true,
            'new' => ['onclick' => null],
            'filter_sort' => ['value' => 'Filter/Sort', 'sort' => 32000, 'icon' => 'fa-solid fa-filter', 'onclick' => 'Numbers.Form.listFilterSortToggle(this);']
        ]
    ];
    public $containers = [
        'tabs' => ['default_row_type' => 'grid', 'order' => 1000, 'type' => 'tabs', 'class' => 'numbers_form_filter_sort_container'],
        'filter' => ['default_row_type' => 'grid', 'order' => 1500],
        'sort' => self::LIST_SORT_CONTAINER,
        self::LIST_CONTAINER => ['default_row_type' => 'grid', 'order' => PHP_INT_MAX],
    ];
    public $rows = [
        'tabs' => [
            'filter' => ['order' => 100, 'label_name' => 'Filter'],
            'sort' => ['order' => 200, 'label_name' => 'Sort'],
        ]
    ];
    public $elements = [
        'tabs' => [
            'filter' => [
                'filter' => ['container' => 'filter', 'order' => 100]
            ],
            'sort' => [
                'sort' => ['container' => 'sort', 'order' => 100]
            ]
        ],
        'filter' => [
            'in_localization_locale_code1' => [
                'in_localization_locale_code1' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Locale', 'domain' => 'locale_code', 'percent' => 25, 'null' => true, 'query_builder' => 'a.in_localization_locale_code;>='],
                'in_localization_locale_code2' => ['order' => 2, 'label_name' => 'Locale', 'domain' => 'locale_code', 'percent' => 25, 'null' => true, 'query_builder' => 'a.in_localization_locale_code;<='],
                'in_localization_inactive1' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Object\Data\Model\Inactive', 'query_builder' => 'a.in_localization_inactive;=']
            ],
            'full_text_search' => [
                'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.in_localization_key', 'a.in_localization_text'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
            ]
        ],
        'sort' => [
            '__sort' => [
                '__sort' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Sort', 'domain' => 'code', 'details_unique_select' => true, 'percent' => 50, 'null' => true, 'method' => 'select', 'options' => self::LIST_SORT_OPTIONS, 'onchange' => 'this.form.submit();'],
                '__order' => ['order' => 2, 'label_name' => 'Order', 'type' => 'smallint', 'default' => SORT_ASC, 'percent' => 50, 'null' => true, 'method' => 'select', 'no_choose' => true, 'options_model' => '\Object\Data\Model\Order', 'onchange' => 'this.form.submit();'],
            ]
        ],
        self::LIST_BUTTONS => self::LIST_BUTTONS_DATA,
        self::LIST_CONTAINER => [
            'row1' => [
                'in_localization_locale_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Locale', 'domain' => 'locale_code', 'percent' => 15, 'url_edit' => true],
                'in_localization_key' => ['order' => 2, 'label_name' => 'Key', 'domain' => 'loc', 'percent' => 80],
                'in_localization_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'row2' => [
                '__blank' => ['order' => 1, 'row_order' => 200, 'label_name' => '', 'percent' => 15],
                'in_localization_text' => ['order' => 2, 'label_name' => 'Text', 'type' => 'text', 'percent' => 80],
                'in_localization_javascript' => ['order' => 3, 'label_name' => 'Javascript', 'type' => 'boolean', 'percent' => 5],
            ]
        ]
    ];
    public $query_primary_model = '\Numbers\Internalization\Internalization\Model\Localizations';
    public $list_options = [
        'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'default_limit' => 30,
        'default_sort' => [
            'in_localization_key' => SORT_ASC
        ]
    ];
    public const LIST_SORT_OPTIONS = [
        'in_localization_key' => ['name' => 'Key'],
        'in_localization_locale_code' => ['name' => 'Locale']
    ];
}
