<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: action.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 02.10.14 09:05
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

if(isset($_GET['status'])){
    xtc_db_query("UPDATE multislider SET slider_status = 0");
    xtc_db_query("UPDATE multislider SET slider_status = ".$_GET['status']." WHERE slider_id = ".(int)$_GET['sid']);

    xtc_redirect(xtc_href_link('multislider.php'));
}

if(isset($_POST['save-slider'])){
    xtc_db_query("UPDATE multislider SET slider_status = 0");
    xtc_db_query("UPDATE multislider SET slider_status = 1 WHERE slider_id = ".(int)$_POST['active_slider']);
}

if(isset($_GET['did'])){
    xtc_db_query("DELETE FROM multislider WHERE slider_id = ".(int)$_GET['did']);
    xtc_db_query("DELETE FROM multislider_items WHERE slider_id = ".(int)$_GET['did']);

    xtc_redirect(xtc_href_link('multislider.php'));
}