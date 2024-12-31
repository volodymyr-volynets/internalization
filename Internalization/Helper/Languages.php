<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Helper;

use Numbers\Internalization\Internalization\Model\Language\Codes;

class Languages
{
    /**
     * Render one language
     *
     * @param string $language_code
     */
    public static function renderOneLanguage($language_code)
    {
        $languages = Codes::getStatic([
            'pk' => ['in_language_code']
        ]);
        $title = $languages[$language_code]['in_language_name'];
        if (!empty($languages[$language_code]['in_language_native_name'])) {
            $title .= ' - ' . $languages[$language_code]['in_language_native_name'];
        }
        if (!empty($languages[$language_code]['in_language_country_code'])) {
            return '<i class="flag flag-' . strtolower($languages[$language_code]['in_language_country_code']) . '" title="' . $title . '"></i>';
        } else {
            return '<span title="' . $title . '">' . $language_code . '<span>';
        }
    }
}
