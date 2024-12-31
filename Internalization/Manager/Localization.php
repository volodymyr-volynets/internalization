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

class Localization
{
    /**
     * Run
     *
     * @param string $mode - test or commit
     */
    public static function run(string $mode, mixed $verbose): array
    {
        $result = RESULT_BLANK;
        // commit dependencies
        $deps = Dependencies::processDepsAll(['mode' => 'commit', 'skip_confirmation' => true, 'show_warnings' => true]);
        if (!$deps['success']) {
            $result['error'][] = 'Could not commit dependencies!';
            return $result;
        }
        // init translator
        $translate = new TranslateClient([
            'key' => \Application::get('google.api.api_key'),
        ]);
        // go through locales
        $paths = \Application::get('flag.global.loc.path') ?? [];
        $supported_locales = \Application::get('flag.global.loc.supported_locales') ?? [];
        $default_locale = \Application::get('flag.global.loc.default_locale') ?? 'en_CA.UTF-8';
        $short_default = explode('_', $default_locale)[0];
        foreach ($supported_locales as $k => $v) {
            if ($k == 'AN') {
                continue;
            }
            if (empty($paths[$k])) {
                continue;
            }
            if (!file_exists($paths[$k] . $default_locale)) {
                continue;
            }
            $files = File::iterate($paths[$k] . $default_locale, [
                'only_extensions' => 'json',
            ]);
            foreach ($v as $k2 => $v2) {
                if ($v2['locale'] == $default_locale) {
                    continue;
                }
                $short_language = explode('_', $v2['locale'])[0];
                foreach ($files as $v3) {
                    $dir = $paths[$k] . $v2['locale'] . DIRECTORY_SEPARATOR;
                    $filename = $dir . basename($v3);
                    $diff = self::diff($v3, $filename);
                    if (!empty($diff['missing'])) {
                        $flag_translated = false;
                        foreach ($diff['missing'] as $k4 => $v4) {
                            // translate text from english
                            $translated = $translate->translate($v4, [
                                'source' => $short_default,
                                'target' => $short_language,
                                'format' => 'html'
                            ]);
                            $diff['existing'][$k4] = $translated['text'];
                            $flag_translated = true;
                        }
                        if ($flag_translated) {
                            ksort($diff['existing']);
                            if (!is_dir($dir)) {
                                File::mkdir($dir, 0777, ['skip_realpath' => true]);
                            }
                            File::writeJSON($filename, $diff['existing'], 0777);
                        }
                    }
                }
            }
        }
        // combine locales
        $sites = \Application::get('application.sites');
        foreach ($supported_locales['AN'] ?? [] as $k => $v) {
            foreach ($supported_locales as $k2 => $v2) {
                if ($k2 == 'AN') {
                    continue;
                }
                foreach ($v2 as $v3) {
                    $dir = $paths[$k2] . $v3['locale'];
                    if (!file_exists($dir)) {
                        continue;
                    }
                    $files = File::iterate($dir, [
                        'only_extensions' => 'json',
                    ]);
                    foreach ($files as $v4) {
                        $basename = basename($v4);
                        if (file_exists($paths['AN'] . $v3['locale'] . DIRECTORY_SEPARATOR . $basename)) {
                            $existing = File::readJSON($paths['AN'] . $v3['locale'] . DIRECTORY_SEPARATOR . $basename, true);
                        } else {
                            $existing = [];
                        }
                        $decoded = File::readJSON($v4, true);
                        if (!is_dir($paths['AN'] . $v3['locale'])) {
                            File::mkdir($paths['AN'] . $v3['locale'], 0777, ['skip_realpath' => true]);
                        }
                        // merge and sort
                        $existing = array_merge_hard($decoded, $existing);
                        ksort($existing);
                        // write to JSON
                        File::writeJSON($paths['AN'] . $v3['locale'] . DIRECTORY_SEPARATOR . $basename, $existing, 0777);
                        // write to sites public dir
                        foreach ($sites as $site_data) {
                            if (!empty($site_data['model']['dir'])) {
                                $dir_sites = rtrim($site_data['model']['dir'], '/') . DIRECTORY_SEPARATOR . 'Application' . DIRECTORY_SEPARATOR . 'Miscellaneous' . DIRECTORY_SEPARATOR . 'Localization' . DIRECTORY_SEPARATOR;
                                if (!file_exists($dir_sites . $v3['locale'])) {
                                    File::mkdir($dir_sites . $v3['locale'], 0777, ['skip_realpath' => true]);
                                }
                                File::writeJSON($dir_sites . $v3['locale'] . DIRECTORY_SEPARATOR . $basename, $existing, 0777);
                            }
                        }
                    }
                }
            }
        }
        return $result;
    }

    /**
     * Diff
     *
     * @param string $default_locale_filename
     * @param string $localized_locale_filename
     * @return array
     */
    private static function diff(string $default_locale_filename, string $localized_locale_filename): array
    {
        $default_locale_data = File::readJSON($default_locale_filename);
        if (file_exists($localized_locale_filename)) {
            $localized_locale_data = File::readJSON($localized_locale_filename);
        } else {
            $localized_locale_data = [];
        }
        $result = [];
        foreach ($default_locale_data as $k => $v) {
            if (!isset($localized_locale_data[$k])) {
                $result[$k] = $v;
            }
        }
        return [
            'existing' => $localized_locale_data,
            'missing' => $result,
        ];
    }
}
