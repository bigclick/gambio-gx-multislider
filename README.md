#gambio-gx-multislider v1.1.0

Multislider für Gambio v2.1.x.x mit Text-Layern - kostenlos!

Ein kleines Demo-Video findest Du hier: [Gambio Multislider](http://www.stargutschein.de/content/gambio-gx2-slider-modul.html)



## Vorbereitung:
**Achte auf einen sorgfältigen Einbau und befolge genau die Anleitung!**

* Legen eine Sicherung Deiner vorhandenen Shop-Datenbank an.
* Sichere die Dateien des Shops vom FTP


### Update
Der Multisilder ist bereits installiert? Dann braucht nur der Inhalt des Ordners `/gambio-root/` **ohne** den Ordner `/gambio-root/multislider/uploads/` auf den Server geladen werden. Nun noch den Cache vom Shop leeren.

Fertig!


*oder*

### Neuinstallation

* Führe die beiliegende SQL-Datei in einem geeignetem SQL-Programm aus. Bsp: [phpMyAdmin](http://www.phpmyadmin.net/home_page/index.php) oder [MySQLDumer](http://www.mysqldumper.de/)

* Lade die Datei-Struktur des Ordners `/gambio-root/` 1:1 auf Deinen Webserver ins Shopverzeichnis. Es werden keine vorhandenen Dateien überschrieben
* Die Verzeichnisse `/multislider/uploads/slider/big/` und `/multislider/uploads/slider/thumb/` brauchen rekursive Schreibrechte

> *Für einen fehlerhaften Einbau übernehmen wir keine Haftung!!*


**Integration:**


*öffne*

`/templates/EyeCandy/module/main_content.html`

*Suche:*

```
{$MODULE_error}
```

*Füge danach ein:*

```
{$MODULE_multislider}
```


---------------------------

Fertig!

Nach der Installation:
--------
Da Gambio von Haus aus immer einen Cache aktiviert hat, ist es wichtig nach dem Einbau alle Cache-Dateien des Systems zu löschen. 
Dazu bitte einfach im Menüpunkt "Toolbox" im Admin-Bereich den Link "Cache leeren" auswählen und die ersten beiden Links anklicken.


Changelog:
----------
**06.10.2014** - v1.2.0
- Overload Überlagerung entfernt *(alle Bestandteile der Startseite werden angezeigt)*
- verbesserter Ajaxupload *(mit größerer Bildvorschau)*
- Version Checker integriert
- Slider lassen sich löschen
- neuer, sauberer Look
- Firefox lässt nun das bearbeiten von Layern zu


**24.09.2014** - v1.1.0
- Overload Klassen hinzugefügt *(Eingriffe in die Systemdateien sind nicht mehr notwendig)*


**22.09.2014** - v1.0.0
- erste Stabile Version


Bugs:
-----
Sollte wieder erwarten ein Fehler auftauchen, schreibe in den [Bug-Tracker](https://github.com/bigclick/gambio-gx-multislider/issues/new). Wir werden uns so schnell wie möglich darum kümmern.



