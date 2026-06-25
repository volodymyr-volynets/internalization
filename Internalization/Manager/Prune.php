<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Manager;

use Google\Cloud\Translate\V2\TranslateClient;
use Helper\File;
use System\Dependencies;

class Prune
{
    /**
     * Run
     *
     * @param string $mode - test or commit
     */
    public static function run(string $mode, mixed $verbose): array
    {
        $result = [
            'success' => false,
            'error' => [],
            'hint' => [],
            'data' => [],
        ];

        // commit dependencies
        $deps = Dependencies::processDepsAll(['mode' => 'commit', 'skip_confirmation' => true, 'show_warnings' => true]);
        if (!$deps['success']) {
            $result['error'][] = 'Could not commit dependencies!';
            return $result;
        }
        // go through locales
        $supported_locales = \Application::get('flag.global.loc.supported_locales.AN');
        $default_locale = \Application::get('flag.global.loc.default_locale') ?? 'en_CA.UTF-8';
        // go through locales
        foreach ($deps['data']['loc_dirs'] as $v) {
            foreach ($supported_locales as $v2) {
                if ($v2['locale'] == $default_locale) {
                    continue;
                }
                if (file_exists($v . $v2['locale'] . DIRECTORY_SEPARATOR)) {
                    File::delete($v . $v2['locale'] . DIRECTORY_SEPARATOR);
                }
            }
        }
        // if we got here means ok
        $result['success'] = true;
        return $result;
    }
}
