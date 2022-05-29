<?php
/**
 * Class file for the GoogleTranslator extension
 *
 * @addtogroup Extensions
 * @author Joachim De Schrijver
 * @license LGPL
 */
class GoogleTranslator {
	/**
	 * @param Skin $skin
	 * @param array &$bar
	 */
	public static function forGoogleTranslatorInSidebar( $skin, &$bar ) {
		global $wgGoogleTranslatorOriginal, $wgGoogleTranslatorLanguages;

		$bar[ 'googletranslator' ] = [
			[
				'text'   => 'TestPage',
				'href'   => '#',
				'id'     => 'google_translate_element',
				'active' => ''
			],
		];
	}
}
