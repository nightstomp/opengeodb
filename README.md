OpenGeoDB AddOn für REDAXO 4
============================

Stellt die OgdbDistance Lib zur Umkreissuche für REDAXO bereit.

Codebeispiele
-------------

`var_dump('Entfernung: ' . ogdbDistance(47443, 47058));`

`var_dump("Umkreis:" . var_export(ogdbRadius(47443, 20), TRUE));`


Hinweise
--------

* Getestet mit REDAXO 4.5
* AddOn-Ordner lautet: `opengeodb`
* In der `settings.inc.php` werden kann angegeben welche Daten verwendet werden soll (siehe `data` Verzeichnis).

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
