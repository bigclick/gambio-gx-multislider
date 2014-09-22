<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: a.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 09.09.14 15:32
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

chdir('../');

include ('includes/application_top.php');

if(isset($_SESSION['customer_id'])){

    require DIR_FS_CATALOG . 'multislider/classes/class.slider.php';
    $_tpl = new Slider();

    if(file_exists(DIR_FS_CATALOG.'multislider/ajax/'.$_GET['load'].'.php')){
        include DIR_FS_CATALOG.'multislider/ajax/'.$_GET['load'].'.php';
    } else {
        echo 'File not found!';
    }
}

