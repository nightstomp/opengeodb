<?php

$search = array('(CHANGELOG.md)', '(LICENSE.md)');
$replace = array('(index.php?page=opengeodb&subpage=help&chapter=changelog)', '(index.php?page=opengeodb&subpage=help&chapter=license)');

echo rex_opengeodb_utils::getHtmlFromMDFile('README.md', $search, $replace);

