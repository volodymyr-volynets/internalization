<?php

namespace Numbers\Internalization\Internalization\Helper;
class Languages {

	/**
	 * Render one language
	 *
	 * @param string $language_code
	 */
	public static function renderOneLanguage($language_code) {
		$languages = \Numbers\Internalization\Internalization\Model\Language\Codes::getStatic([
			'pk' => ['in_language_code']
		]);
		$title = $languages[$language_code]['in_language_name'];
		if (!empty($languages[$language_code]['in_language_native_name'])) {
			$title.= ' - ' . $languages[$language_code]['in_language_native_name'];
		}
		if (!empty($languages[$language_code]['in_language_country_code'])) {
			return '<i class="flag flag-' . strtolower($languages[$language_code]['in_language_country_code']) . '" title="' . $title . '"></i>';
		} else {
			return '<span title="' . $title . '">' . $language_code . '<span>';
		}
	}
}