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

	/**
	 * @param mixed &$data
	 * @param Skin $skin
	 * @return void
	 */
	public static function forGoogleTranslatorAfterContent( &$data, $skin ) {
		$data .=
			"
	<script>
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({
			  }, 'google_translate_element');
			}
	</script>
	<script src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>".
			'';
	}
}
