gambio-gx-multislider
=====================
------------------------------------

Multislider für Gambio v2.1.x.x mit Text-Layern

**Vorbereitung:**
-----------------

**Achte auf einen sorgfältigen Einbau und befolge genau die Anleitung!**

* Legen eine Sicherung Deiner vorhandenen Shop-Datenbank an.
* Sichere die Dateien des Shops vom FTP


* Führe die beiliegende SQL-Datei in einem geeignetem SQL-Programm aus. Bsp: phpMyAdmin oder MySQLDumer
* Lade die Datei-Struktur 1:1 auf Deinen Webserver ins Shopverzeichnis. Es werden keine vorhandenen Dateien überschrieben

[phpMyAdmin]:http://www.phpmyadmin.net/home_page/index.php
[MySQLDumer]:http://www.mysqldumper.de/


**Integration:**
-----------------

*öffne:*

gm_javascript.js.php


*Suche:*

`/* EOF StyleEdit */`

*Füge danach ein:*

```
		if($_GET['page'] == 'Index'){
			include_once DIR_FS_CATALOG.'multislider/js/js_include.php';
		}
```

------------------------
*öffne:*

/system/classes/layout/IndexContentView.inc.php

*Suche:*

```
		protected function load_center_modules()
		{
```

*Füge direkt danach ein:*

```
		// Multislider
		$_multislider = MainFactory::create_object('MultisliderMainContentView');
	    $_multislider->set_('customers_fsk18_display', $_SESSION['customers_status']['customers_fsk18_display']);
	    $_multislider->set_('customers_status_id', $_SESSION['customers_status']['customers_status_id']);
	    $_multislider->set_('languages_id', $_SESSION['languages_id']);
	    $_multislider_view = $_multislider->get_html();
	    $this->set_content_data('MODULE_multislider', $_multislider_view);
```

--------------------------

*öffne*

/templates/EyeCandy/module/main_content.html

*Suche:*

```
{$MODULE_error}
```

*Füge danach ein:*

```
{$MODULE_multislider}
```