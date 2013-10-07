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
			$md = seo42_utils::makeHeadlinePretty($md);

			$parser = new Michelf\Markdown;
			return $parser->transform($md);
		} else {
			return '[translate:' . $file . ']';
		}
	}
}

