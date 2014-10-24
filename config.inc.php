<?php
// init addon
$REX['ADDON']['name']['opengeodb'] = 'OpenGeoDB';
$REX['ADDON']['page']['opengeodb'] = 'Opengeodb';
$REX['ADDON']['version']['opengeodb'] = '1.0.0 DEV';
$REX['ADDON']['author']['opengeodb'] = 'RexDude';
$REX['ADDON']['supportpage']['opengeodb'] = 'forum.redaxo.de';
$REX['ADDON']['perm']['opengeodb'] = 'opengeodb[]';

// permissions
$REX['PERM'][] = 'opengeodb[]';

// add lang file
if ($REX['REDAXO']) {
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/opengeodb/lang/');
}

// includes
require($REX['INCLUDE_PATH'] . '/addons/opengeodb/classes/class.rex_opengeodb_utils.inc.php');

// default settings (user settings are saved in data dir!)
$REX['ADDON']['opengeodb']['settings'] = array(
	'data_file' => 'DE.tab'
);

// overwrite default settings with user settings
rex_opengeodb_utils::includeSettingsFile();

// includes
require($REX['INCLUDE_PATH'] . '/addons/opengeodb/classes/ogdbdistance.lib.php');

/*if ($REX['REDAXO']) {
	// add subpages
	$REX['ADDON']['opengeodb']['SUBPAGES'] = array(
		array('', $I18N->msg('opengeodb_help'))
	);
}*/
?>
