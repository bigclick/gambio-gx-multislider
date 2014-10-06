<?php
/* -------------------------------------------------------------------------------------
* 	ID:						                Id: start.php
* 	zuletzt geaendert von:	                Author: Daniel Siekiera
* 	Datum:					                Date: 09.09.14 13:35
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

$_get_q = xtc_db_query("SELECT
                            slider_id,
                            slider_name,
                            slider_status,
                            date_added,
                            DATE_FORMAT(date_added, '%d.%m.%Y %H:%i Uhr') as fromated_date
                        FROM
                            multislider
                        ORDER BY
                            date_added DESC");

if(xtc_db_num_rows($_get_q)){

    $_slider_array = array();

    while($s = xtc_db_fetch_array($_get_q)){

        $_slider_array[] = array(
            'id' => $s['slider_id'],
            'name' => $s['slider_name'],
            'date' => $s['fromated_date'],
            'status' => $s['slider_status'],
            'status_link' => xtc_href_link('multislider.php', ($s['slider_status'] == 1 ? 'status=0' : 'status=1').'&sid='.$s['slider_id']),
            'edit_link' => xtc_href_link('multislider.php', 'view=slider&sid='.$s['slider_id']),
            'delete_link' => xtc_href_link('multislider.php', 'did='.$s['slider_id'])
        );

    }

    $multislider_smarty->assign('sliders', $_slider_array);
}

$multislider_smarty->assign('new_link', xtc_href_link('multislider.php', 'view=slider&action=new'));
$multislider_smarty->assign('form_url', xtc_href_link('multislider.php'));
