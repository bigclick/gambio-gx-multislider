<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: load_slide_tpl.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 09.09.14 15:35
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

$_code = $_tpl->LayerTPLItem($_GET['lid']);

$_resp = array(
    'html' => $_code['html'],
    'id' => $_code['id'],
);

echo json_encode($_resp);