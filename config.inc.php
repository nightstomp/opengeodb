<?php
// init addon
$REX['ADDON']['name']['opengeodb'] = 'OpenGeoDB';
$REX['ADDON']['page']['opengeodb'] = 'Opengeodb';
$REX['ADDON']['version']['opengeodb'] = '1.0.0';
$REX['ADDON']['author']['opengeodb'] = 'RexDude';
$REX['ADDON']['supportpage']['opengeodb'] = 'forum.redaxo.de';
$REX['ADDON']['perm']['opengeodb'] = 'opengeodb[]';

// permissions
$REX['PERM'][] = 'opengeodb[]';

// includes
require($REX['INCLUDE_PATH'] . '/addons/opengeodb/settings.inc.php');
require($REX['INCLUDE_PATH'] . '/addons/opengeodb/classes/ogdbdistance.lib.php');

if ($REX['REDAXO']) {
	// includes
	require($REX['INCLUDE_PATH'] . '/addons/opengeodb/classes/class.rex_opengeodb_utils.inc.php');

	// add lang file
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/opengeodb/lang/');

	// add subpages
	/*$REX['ADDON']['opengeodb']['SUBPAGES'] = array(
		array('', $I18N->msg('opengeodb_help'))
	);*/
}
?>
