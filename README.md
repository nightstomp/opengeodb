OpenGeoDB AddOn für REDAXO 4
============================

Stellt die OgdbDistance Lib zur Umkreissuche für REDAXO bereit.

Codebeispiele
-------------

```php
<?php
var_dump('Entfernung: ' . ogdbDistance(47443, 47058));

var_dump("Umkreis:" . var_export(ogdbRadius(47443, 20), TRUE));
?>
```


Hinweise
--------

* Getestet mit REDAXO 4.5, 4.6
* AddOn-Ordner lautet: `opengeodb`
* Einstellungen befinden sich in der Datei: `/include/data/addons/opengeodb/settings.inc.php`
* In den Einstellungen kann angegeben werden welche Daten verwendet werden soll, siehe: `/include/addons/opengeodb/data/`

Changelog
---------

siehe [CHANGELOG.md](CHANGELOG.md)

Lizenz
------

siehe [LICENSE.md](LICENSE.md)

Credits
-------

* <http://opengeodb.giswiki.org/wiki/OpenGeoDB>
* OgdbDistance Lib by Manuel Hoppe
* PHP Markdown Lib by Michel Fortin
