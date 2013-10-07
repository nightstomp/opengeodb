<?php

// output
echo '
<div class="rex-addon-output">
	<h2 class="rex-hl2">Hilfe</h2>
	<div class="rex-addon-content">
		<div class= "addon-template">
';

$search = array('[CHANGELOG.md](CHANGELOG.md)', '[LICENSE.md](LICENSE.md)');
$replace = array('CHANGELOG.md', 'LICENSE.md');

echo rex_opengeodb_utils::getHtmlFromMDFile('README.md', $search, $replace);

echo '
		</div>
	</div>
</div>';

?>

<style type="text/css">
#rex-page-opengeodb div.rex-addon-content {
    padding: 10px 12px;
}

#rex-page-opengeodb div.rex-addon-content ul {
	margin-top: 0;
}

#rex-page-opengeodb a.extern,
#rex-page-opengeodb .rex-addon-output a[href^="http://"],
#rex-page-opengeodb .rex-addon-output a[href^="https://"] {
	background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAA8CAYAAACq76C9AAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFFSURBVHjaYtTpO/CfAQcACCAmBjwAIIAY//9HaNTtP4hiCkAAMeGSAAGAAGJCl7hcaM8IYwMEEBMuCRAACCAmXBIgABBAKA5CBwABhNcrAAGEVxIggPBKAgQQXkmAAMIrCRBAeCUBAgivJEAA4ZUECCC8kgABhFcSIIDwSgIEEF5JgADCKwkQQHglAQIIryRAAOGVBAggvJIAAYRXEiCA8EoCBBBeSYAAwisJEEB4JQECiAVbNoABgADCqxMggPDmMoAAwpvLAAIIby4DCCC8uQwggPDmMoAAwpvLAAIIr1cAAgivJEAA4ZUECCC8kgABhFcSIIDwSgIEEF5JgADCKwkQQHglAQIIryRAAOGVBAggvJIAAYRXEiCA8EoCBBBeSYAAwisJEEB4JQECCK8kQADhlQQIILySAAGEVxIggPBKAgQYAARTLlfrU5G2AAAAAElFTkSuQmCC) no-repeat right 3px;
	padding-right: 10px;
	display: inline;
}

#rex-page-opengeodb .addon-template h1 {
    font-size: 18px;
    margin-bottom: 7px;
}

#rex-page-opengeodb .rex-addon-output .rex-hl2 {
	padding-left : 12px;
}
</style>


