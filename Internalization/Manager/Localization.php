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
        // init translator
        $translate = new TranslateClient([
            'key' => \Application::get('google.api.api_key'),
        ]);
        // go through locales
        $supported_locales = \Application::get('flag.global.loc.supported_locales.AN');
        $default_locale = \Application::get('flag.global.loc.default_locale') ?? 'en_CA.UTF-8';
        $short_default = explode('_', $default_locale)[0];

        $all_translations = [];
        foreach ($deps['data']['loc_groupped'] as $k => $v) {
            foreach ($v[$default_locale] as $k2 => $v2) {
                if (str_starts_with($v2, 'Miscellaneous')) {
                    // but we put into common array
                    $default_locale_data = File::readJSON($v2);
                    $all_translations[$k][$default_locale] ??= [];
                    $all_translations[$k][$default_locale] = array_merge_hard($all_translations[$k][$v3['locale']], $default_locale_data);
                    continue;
                }
                foreach ($supported_locales as $k3 => $v3) {
                    // we do not translate default locale
                    if ($v3['locale'] == $default_locale) {
                        // but we put into common array
                        $default_locale_data = File::readJSON($v2);
                        $all_translations[$k][$v3['locale']] ??= [];
                        $all_translations[$k][$v3['locale']] = array_merge_hard($all_translations[$k][$v3['locale']], $default_locale_data);
                        continue;
                    }
                    $v2_new_filename = str_replace($default_locale, $v3['locale'], $v2);
                    $diff = self::diff($v2, $v2_new_filename);
                    if (!empty($diff['missing'])) {
                        $flag_translated = false;
                        $translated_counter = 0;
                        $short_language = explode('_', $v3['locale'])[0];
                        foreach ($diff['missing'] as $k4 => $v4) {
                            $diff['existing'][$k4] = self::translateOne(
                                $translate,
                                $v4,
                                $short_default,
                                $short_language,
                            );
                            $flag_translated = true;
                            $translated_counter++;
                        }
                        if ($flag_translated) {
                            ksort($diff['existing']);
                            $dir = dirname($v2_new_filename);
                            if (!is_dir($dir)) {
                                File::mkdir($dir, 0777, ['skip_realpath' => true]);
                            }
                            File::writeJSON($v2_new_filename, $diff['existing'], 0777);
                            // record for future use
                            $all_translations[$k][$v3['locale']] ??= [];
                            $all_translations[$k][$v3['locale']] = array_merge_hard($all_translations[$k][$v3['locale']], $diff['existing']);
                            // add hint
                            $result['hint'][] = 'Translated ' . $translated_counter . ' records for locale ' . $v3['locale'] . ' for file ' . $k;
                        }
                    } else {
                        // if no new tranlation found
                        $all_translations[$k][$v3['locale']] ??= [];
                        $all_translations[$k][$v3['locale']] = array_merge_hard($all_translations[$k][$v3['locale']], $diff['existing']);
                    }
                }
            }
        }
        // we finally process Miscellaneous folder in Application
        foreach ($deps['data']['loc_groupped'] as $k => $v) {
            foreach ($v[$default_locale] as $k2 => $v2) {
                if (!str_starts_with($v2, 'Miscellaneous')) {
                    continue;
                }
                foreach ($supported_locales as $k3 => $v3) {
                    $v2_new_filename = str_replace($default_locale, $v3['locale'], $v2);
                    $diff = self::diff($all_translations[$k][$v3['locale']], $v2_new_filename);
                    if (!empty($diff['missing'])) {
                        // for default locale we simply put keys
                        if ($default_locale == $v3['locale']) {
                            foreach ($diff['missing'] as $k4 => $v4) {
                                $diff['existing'][$k4] = $v4;
                            }
                            goto write_localization_file;
                        }
                        $flag_translated = false;
                        $translated_counter = 0;
                        $short_language = explode('_', $v3['locale'])[0];
                        foreach ($diff['missing'] as $k4 => $v4) {
                            // if text already translated
                            if (isset($all_translations[$k][$v3['locale']][$k4])) {
                                $diff['existing'][$k4] = $all_translations[$k][$v3['locale']][$k4];
                                $flag_translated = true;
                                $translated_counter++;
                                continue;
                            }
                            $diff['existing'][$k4] = self::translateOne(
                                $translate,
                                $v4,
                                $short_default,
                                $short_language,
                            );
                            $flag_translated = true;
                            $translated_counter++;
                        }
                        if ($flag_translated) {
                            write_localization_file:
                                                        ksort($diff['existing']);
                            $dir = dirname($v2_new_filename);
                            if (!is_dir($dir)) {
                                File::mkdir($dir, 0777, ['skip_realpath' => true]);
                            }
                            File::writeJSON($v2_new_filename, $diff['existing'], 0777);
                            // add hint
                            $result['hint'][] = 'Translated ' . $translated_counter . ' records for locale ' . $v3['locale'] . ' for file ' . $k;
                        }
                    }
                }
            }
        }
        // another step to check variables
        foreach ($all_translations as $k => $v) {
            foreach ($v[$default_locale] as $k2 => $v2) {
                // if wee do not have variable we skip
                if (strpos($v2, '{') === false) {
                    continue;
                }
                // match all variables
                if (preg_match_all('/{(.*?)}/', $v2, $matches, PREG_PATTERN_ORDER)) {
                    foreach ($supported_locales as $k3 => $v3) {
                        // we skip default locale
                        if ($v3['locale'] == $default_locale) {
                            continue;
                        }
                        //print_r2($v[$v3['locale']][$k2]);
                        $v2_translated_value = $v[$v3['locale']][$k2];
                        if (preg_match_all('/{(.*?)}/', $v2_translated_value, $matches_translated_value, PREG_PATTERN_ORDER)) {
                            if (!array_key_compare_strict($matches[1], $matches_translated_value[1] ?? [])) {
                                $result['hint'][] = 'Error in translation: ' . $k . ' locale: ' . $v3['locale'] . ' key: ' . $k2 . ' english: ' . $v2 . ' translated: ' . $v2_translated_value;
                            }
                        }
                    }
                }
            }
        }
        // if we got here means ok
        $result['success'] = true;
        return $result;
    }

    /**
     * Diff
     *
     * @param string|array $default_locale_filename
     * @param string $localized_locale_filename
     * @return array
     */
    private static function diff(string|array $default_locale_filename, string $localized_locale_filename): array
    {
        if (is_array($default_locale_filename)) {
            $default_locale_data = $default_locale_filename;
        } else {
            $default_locale_data = File::readJSON($default_locale_filename);
        }
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

    /**
     * Summary of translateOne
     *
     * @param mixed $translate
     * @param string $text
     * @param string $short_default
     * @param string $short_language
     * @return string
     */
    public static function translateOne(& $translate, string $text, string $short_default, string $short_language): string
    {
        // process default or from
        if (strpos($short_default, '_') !== false) {
            $short_default = explode('_', $short_default)[0];
        }
        // process language or to
        if (strpos($short_language, '_') !== false) {
            $short_language = explode('_', $short_language)[0];
        }
        // if its the same language we return as is
        if ($short_default == $short_language) {
            return $text;
        }
        // need to process white space
        $text = nl2br($text);
        // process variables in text
        $need_variable_encoding = false;
        $variables = [];
        if (preg_match_all('/{(.*?)}/', $text, $matches, PREG_PATTERN_ORDER)) {
            foreach ($matches[0] as $v) {
                // pass full sha hash
                $variables[$v] = '{0x' . sha1($v) . '}';
                $text = str_replace($v, $variables[$v], $text);
            }
            $need_variable_encoding = true;
        }
        // translate text from default locale
        $translated = $translate->translate($text, [
            'source' => $short_default,
            'target' => $short_language,
            'format' => 'html'
        ]);
        // convert variables back
        if ($need_variable_encoding) {
            foreach ($variables as $k => $v) {
                $translated['text'] = str_replace($v, $k, $translated['text']);
            }
        }
        return br2nl($translated['text']);
    }
}
