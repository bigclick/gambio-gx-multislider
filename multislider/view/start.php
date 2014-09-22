<?php
/* -------------------------------------------------------------------------------------
* 	ID:						                Id: start.php
* 	zuletzt geaendert von:	                Author: danielsiekiera
* 	Datum:					                Date: 09.09.14 13:35
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

if(isset($_POST['save-slider'])){
    xtc_db_query("UPDATE multislider SET slider_status = 0");
    xtc_db_query("UPDATE multislider SET slider_status = 1 WHERE slider_id = ".(int)$_POST['active_slider']);
}

if(isset($_GET['did'])){
    xtc_db_query("DELETE FROM multislider WHERE slider_id = ".(int)$_GET['did']);
    xtc_db_query("DELETE FROM multislider_items WHERE slider_id = ".(int)$_GET['did']);

    xtc_redirect('multislider.php');
}

$_get_q = xtc_db_query("SELECT slider_id, slider_name, slider_status, date_added FROM multislider ORDER BY date_added DESC");

if(xtc_db_num_rows($_get_q)){

    $_slider_array = array();

    while($s = xtc_db_fetch_array($_get_q)){
        $_slider_array[] = array(
            'id' => $s['slider_id'],
            'name' => $s['slider_name'],
            'date' => $s['date_added'],
            'status' => $s['slider_status'],
            'edit_link' => xtc_href_link('multislider.php', 'view=slider&sid='.$s['slider_id']),
            'delete_link' => xtc_href_link('multislider.php', 'did='.$s['slider_id'])
        );
    }

    $multislider_smarty->assign('sliders', $_slider_array);
}

$multislider_smarty->assign('new_link', xtc_href_link('multislider.php', 'view=slider&action=new'));
$multislider_smarty->assign('form_url', xtc_href_link('multislider.php'));
