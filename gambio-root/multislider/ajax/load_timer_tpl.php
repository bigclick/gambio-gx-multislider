<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: load_timer_tpl.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 05.10.14 14:52
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

$_resp = array(
    'html' => $_tpl->TimerTPLItem(0, $_GET['end'])
);

echo json_encode($_resp);