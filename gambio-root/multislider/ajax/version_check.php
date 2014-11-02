<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: version_check.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 06.10.14 12:08
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

$_resp = array(
    'html' => $_tpl->checkVersion()
);

echo json_encode($_resp);
