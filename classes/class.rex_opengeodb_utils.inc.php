<?php
class rex_opengeodb_utils {
	public static function getHtmlFromMDFile($mdFile, $search = array(), $replace = array()) {
		global $REX;

		$curLocale = strtolower($REX['LANG']);

		if ($curLocale == 'de_de') {
			$file = $REX['INCLUDE_PATH'] . '/addons/opengeodb/' . $mdFile;
		} else {
			$file = $REX['INCLUDE_PATH'] . '/addons/opengeodb/lang/' . $curLocale . '/' . $mdFile;
		}

		if (file_exists($file)) {
			$md = file_get_contents($file);
			$md = str_replace($search, $replace, $md);
			$md = self::makeHeadlinePretty($md);

			return Parsedown::instance()->parse($md);
		} else {
			return '[translate:' . $file . ']';
		}
	}

	public static function makeHeadlinePretty($md) {
		return str_replace('OpenGeoDB AddOn - ', '', $md);
	}
}

