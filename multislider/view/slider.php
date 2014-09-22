<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: slider.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 09.09.14 14:43
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

require DIR_FS_CATALOG.'multislider/classes/class.slider.php';

$_tpl = new Slider();

// der aller erste Slider wird geladen
if(isset($_GET['action']) && $_GET['action'] == 'new'){

    $multislider_smarty->assign('slider_tpl', '<div class="tab-pane fade in active">'.$_tpl->loadTPL().'</div>');
    $multislider_smarty->assign('slider_li', '<li class="active"><a href="#">Slide #1</a></li>');

    // die nächste Nummer holen
    $_next = xtc_db_fetch_array(xtc_db_query("SHOW TABLE STATUS WHERE Name = 'multislider'"));
    $multislider_smarty->assign('slider_id', $_next['Auto_increment'] +1);


// einen vorhanden aus der Datenbank holen
} else {

    $_sd = xtc_db_fetch_array(xtc_db_query("SELECT * FROM multislider WHERE slider_id = ".(int)$_GET['sid']));
    $multislider_smarty->assign('slider', $_sd);
    $multislider_smarty->assign('slider_data', unserialize(urldecode($_sd['slider_parameter'])));
    $multislider_smarty->assign('slider_id', (int)$_GET['sid']);

    $_sp = xtc_db_fetch_array(xtc_db_query("SELECT slider_parameters FROM multislider_items WHERE slider_id = ".(int)$_GET['sid']));

    $_data = unserialize(urldecode($_sp['slider_parameters']));

    $_tab_pane = '';
    $_ul_li = '';
    $_cnt = 1;

    foreach($_data as $_d){

        $_ul_li .= '<li class="'.($_cnt == 1 ? 'active' : '').'"><a href="#">Slide #'.$_cnt.'</a>'.($_cnt > 1 ? '<span class="fa fa-times-circle delete-slide"></span>' : '').'</li>';

        $_tab_pane .= '<div class="tab-pane fade in'.($_cnt == 1 ? ' active' : '').'">'.$_tpl->loadTPL($_d).'</div>';

        $_cnt++;
    }


    $multislider_smarty->assign('slider_tpl', $_tab_pane);
    $multislider_smarty->assign('slider_li', $_ul_li);
}

$multislider_smarty->assign('back_url', xtc_href_link('multislider.php'));