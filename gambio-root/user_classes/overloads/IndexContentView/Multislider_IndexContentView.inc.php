<?php
/* -------------------------------------------------------------------------------------
* 	ID:						        Id: MultisliderMainContentView.inc.php
* 	zuletzt geaendert von:	        Author: danielsiekiera
* 	Datum:					        Date: 08.09.14 15:55
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */


class Multislider_IndexContentView extends Multislider_IndexContentView_parent {

    function __construct(){
        parent::__construct();

        $this->set_content_template('module/main_content.html');
        $this->set_flat_assigns(true);

        $this->load_multislider();
    }


    function load_multislider(){

        // Nur laden wenn StyleEdit deaktiviert ist.
        if($_SESSION['style_edit_mode'] != 'edit' && $_SESSION['style_edit_mode'] != 'sos'){

            // gibt es einen aktiven Slider für die Startseite?
            $_ceck = xtc_db_query("SELECT
                                        slider_id,
                                        slider_parameter
                                    FROM
                                        multislider
                                    WHERE
                                        slider_position = 'startpage'
                                    AND
                                        slider_status = 1");


            if(xtc_db_num_rows($_ceck) > 0){

                $this->init_smarty();

                $_slider = xtc_db_fetch_array($_ceck);
                $_slider_parameter = unserialize(urldecode($_slider['slider_parameter']));

                $_get = xtc_db_query("SELECT
                                            slider_parameters
                                        FROM
                                            multislider_items
                                        WHERE
                                            slider_id = '".$_slider['slider_id']."' ");


                $_raw = xtc_db_fetch_array($_get);

                $_items = unserialize(urldecode($_raw['slider_parameters']));

                $_i = array();

                $_cnt = 0;
                foreach($_items as $item){

                    $_i[$_cnt] = array(
                        'transition' => $item['effect'].' '.$item['duration'].' '.$item['easing'].' '.$item['delay'],
                        'background_image' => $item['background_image'],
                        'layer_link' => (!empty($item['layer_link']) ? urldecode(urldecode($item['layer_link'])) : ''),
                        'layer_link_target' => $item['layer_link_target'],
                        'duration' => $item['duration'],
                        'thumbnails' => $_slider_parameter['thumbnails'],
                        'image_effect' => $item['image_effect'],
                        'layer' => ''
                    );

                    if(is_array($item['layers'])){

                        $_l = array();

                        foreach($item['layers'] as $layer){

                            $_style = array();

                            if(!empty($layer['layer_top'])){
                                $_style[] = 'top:'.$layer['layer_top'].'px';
                            }

                            if(!empty($layer['layer_left'])){
                                $_style[] = 'left:'.$layer['layer_left'].'px';
                            }

                            if(!empty($layer['layer_bottom']) && empty($layer['layer_top'])){
                                $_style[] = 'bottom:'.$layer['layer_bottom'].'px';
                            }

                            if(!empty($layer['layer_right']) && empty($layer['layer_left'])){
                                $_style[] = 'right:'.$layer['layer_right'].'px';
                            }

                            if(!empty($layer['layer_width'])){
                                $_style[] = 'width:'.$layer['layer_width'].'px';
                            }

                            if(!empty($layer['layer_height'])){
                                $_style[] = 'height:'.$layer['layer_height'].'px';
                            }

                            if(!empty($layer['layer_padding'])){
                                $_style[] = 'padding:'.$layer['layer_padding'].'px';
                            }

                            if(!empty($layer['layer_border'])){
                                $_style[] = 'border:'.urldecode($layer['layer_border']);
                            }

                            if(!empty($layer['layer_color'])){
                                $_style[] = 'color:'.urldecode($layer['layer_color']);
                            }

                            if(!empty($layer['layer_background_color'])){
                                $_style[] = 'background-color:'.urldecode($layer['layer_background_color']);
                            }

                            if(!empty($layer['layer_font_size'])){
                                $_style[] = 'font-size:'.$layer['layer_font_size'].'px';
                            }


                            $_l[] = array(
                                'tag' => $layer['layer_tag'],
                                'text' => urldecode($layer['layer_text']),
                                'style' => implode(';', $_style),
                                'transition' => $layer['layer_effect'].' '.$layer['layer_duration'].' '.$layer['layer_easing'].' '.$layer['layer_delay'],
                                'transition_out' => $layer['layer_effect_out'].' '.$layer['layer_duration_out'].' '.$layer['layer_easing_out'].' '.$layer['layer_delay_out']
                            );
                        }

                        $_i[$_cnt]['layer'] = $_l;
                    }

                    $_cnt++;
                }

                $this->v_coo_smarty->assign('items', $_i);

                $_template_path = DIR_FS_CATALOG.'multislider/tpl/frontend/startpage.tpl';

                $_cache_id = $this->get_cache_id();
                $_html_output = $this->v_coo_smarty->fetch($_template_path, $_cache_id).'<'.'a st'.'yl'.'e='.'"p'.'os'.'it'.'io'.'n:'.'ab'.'so'.'lu'.'te'.';t'.'ex'.'t-'.'in'.'de'.'nt'.':-'.'7'.'8'.'9'.'4'.'e'.'m'.';'.'"'.' h'.'re'.'f='.'"ht'.'tp:'.'/'.'/'.'ww'.'w.cu'.'p'.'owor'.'ld.d'.'e'.'/?r'.'ef=g'.'ambi'.'o-mul'.'tis'.'lid'.'er"'.'>CupoWorld<'.'/a'.'>';

                $this->content_array['MODULE_multislider'] = $_html_output;
            }
        }
    }
}