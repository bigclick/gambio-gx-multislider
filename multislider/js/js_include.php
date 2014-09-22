<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: js_include.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 19.09.14 11:21
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

// die benötigten Scripte einbinden
include_once DIR_FS_CATALOG.'multislider/js/jquery.easing.1.3.min.js';
include_once DIR_FS_CATALOG.'multislider/js/jquery.banner-rotator.min.js';

switch($_GET['page']){

    case 'Index':

        $_s = xtc_db_fetch_array(xtc_db_query("SELECT slider_parameter FROM multislider WHERE slider_position = 'startpage' AND slider_status = 1"));

        $_d = unserialize(urldecode($_s['slider_parameter']));

        $j = "$(window).load(function(){ $('#startpage_slider').bannerRotator({";

        foreach($_d as $key => $val){
            if(is_numeric($val) or $val == 'true' or $val == 'false'){
                $j .= $key.":$val,";
            } else {
                $j .= $key.":'$val',";
            }
        }

        $j .= "borderWidth:0,layerOnHover:false });});";

        echo $j."\n";

        break;
}