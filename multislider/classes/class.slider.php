<?php
/* -------------------------------------------------------------------------------------
* 	ID:						Id: class.slider.php
* 	zuletzt geaendert von:	Author: danielsiekiera
* 	Datum:					Date: 09.09.14 15:37
*
* 	BigClick GmbH & Co.KG
* 	http://www.big-click.com
*
* 	Copyright (c) 2014 BigClick GmbH & Co.KG
* ----------------------------------------------------------------------------------- */

class Slider {


    public function loadTPL($data = array()){

        $_rand = $this->getRandomId(6);

        $c  =   '<ul class="list-group">';

        $c .=       '<li class="list-group-item td-head-row">';
        $c .=           '<div class="row">';
        $c .=               '<div class="col-sm-12">';
        $c .=                   'Slide - Optionen';
        $c .=               '</div>';
        $c .=           '</div>';
        $c .=       '</li>';

        $c .=       '<li class="list-group-item">';
        $c .=           '<div class="row">';

        $c .=               '<div class="col-sm-3">';
        $c .=                   '<strong>&Uuml;berblend Effekt</strong>
                                    <select name="effect" class="form-control">

                                    <option value="none"'.($data['effect'] == 'none' ? ' selected=""' : '').'>No transition</option>
                                    <option value="random"'.(($data['effect'] == 'random' or $data['effect'] == '') ? ' selected=""' : '').'>Randomly selected transition</option>
                                    <option value="fade"'.($data['effect'] == 'fade' ? ' selected=""' : '').'>Fade in transition</option>

                                    <optgroup label="Slide">
                                        <option value="horizontalSlide"'.($data['effect'] == 'none' ? ' selected=""' : '').'>Horizontal slide transition</option>
                                        <option value="verticalSlide"'.($data['effect'] == 'none' ? ' selected=""' : '').'>Vertical slide transition</option>
                                        </optgroup>

                                    <optgroup label="Zoom">
                                        <option value="zoomIn"'.($data['effect'] == 'zoomIn' ? ' selected=""' : '').'>zoom in transition</option>
                                        <option value="zoomOut"'.($data['effect'] == 'zoomOut' ? ' selected=""' : '').'>zoom out transition</option>
                                        </optgroup>

                                    <optgroup label="Cover">
                                        <option value="coverDown"'.($data['effect'] == 'coverDown' ? ' selected=""' : '').'>Cover down transition</option>
                                        <option value="coverUp"'.($data['effect'] == 'coverUp' ? ' selected=""' : '').'>Cover up transition</option>
                                        <option value="coverRight"'.($data['effect'] == 'coverRight' ? ' selected=""' : '').'>Cover right transition</option>
                                        <option value="coverLeft"'.($data['effect'] == 'coverLeft' ? ' selected=""' : '').'>Cover left transition</option>
                                        </optgroup>

                                    <optgroup label="Block">
                                        <option value="blockExpandDown"'.($data['effect'] == 'blockExpandDown' ? ' selected=""' : '').'>Blocks expand in down direction</option>
                                        <option value="blockExpandUp"'.($data['effect'] == 'blockExpandUp' ? ' selected=""' : '').'>Blocks expand in up direction</option>
                                        <option value="blockExpandRight"'.($data['effect'] == 'blockExpandRight' ? ' selected=""' : '').'>Blocks expand in right direction</option>
                                        <option value="blockExpandLeft"'.($data['effect'] == 'blockExpandLeft' ? ' selected=""' : '').'>Blocks expand in left direction</option>
                                        <option value="diagonalFade"'.($data['effect'] == 'diagonalFade' ? ' selected=""' : '').'>Blocks fade in diagonal direction</option>
                                        <option value="diagonalExpand"'.($data['effect'] == 'diagonalExpand' ? ' selected=""' : '').'>Blocks expand in diagonal direction</option>
                                        <option value="diagonalShift"'.($data['effect'] == 'diagonalShift' ? ' selected=""' : '').'>Blocks shift in diagonal direction</option>
                                        <option value="reverseDiagonalFade"'.($data['effect'] == 'reverseDiagonalFade' ? ' selected=""' : '').'>Blocks fade in reverse diagonal direction</option>
                                        <option value="reverseDiagonalExpand"'.($data['effect'] == 'reverseDiagonalExpand' ? ' selected=""' : '').'>Blocks expand in reverse diagonal direction</option>
                                        <option value="reverseDiagonalShift"'.($data['effect'] == 'reverseDiagonalShift' ? ' selected=""' : '').'>Blocks shift in reverse diagonal direction</option>
                                        <option value="blockRandomFade"'.($data['effect'] == 'blockRandomFade' ? ' selected=""' : '').'>Blocks fade in at random</option>
                                        <option value="blockRandomExpand"'.($data['effect'] == 'blockRandomExpand' ? ' selected=""' : '').'>Blocks expand at random</option>
                                        <option value="blockRandomDrop"'.($data['effect'] == 'blockRandomDrop' ? ' selected=""' : '').'>Blocks drop down at random</option>
                                        <option value="zigZagDown"'.($data['effect'] == 'zigZagDown' ? ' selected=""' : '').'>Blocks fade in zigzagging in down direction</option>
                                        <option value="zigZagUp"'.($data['effect'] == 'zigZagUp' ? ' selected=""' : '').'>Blocks fade in zigzagging in up direction</option>
                                        <option value="zigZagRight"'.($data['effect'] == 'zigZagRight' ? ' selected=""' : '').'>Blocks fade in zigzagging in right direction</option>
                                        <option value="zigZagLeft"'.($data['effect'] == 'zigZagLeft' ? ' selected=""' : '').'>Blocks fade in zigzagging in left direction</option>
                                        <option value="spiralIn"'.($data['effect'] == 'spiralIn' ? ' selected=""' : '').'>Blocks fade in spiraling in direction</option>
                                        <option value="spiralOut"'.($data['effect'] == 'spiralOut' ? ' selected=""' : '').'>Blocks fade in spiraling out direction</option>
                                        </optgroup>

                                    <optgroup label="Vertical Slice">
                                        <option value="sliceDownRight"'.($data['effect'] == 'sliceDownRight' ? ' selected=""' : '').'>Vertical slices down in right direction</option>
                                        <option value="sliceDownLeft"'.($data['effect'] == 'sliceDownLeft' ? ' selected=""' : '').'>Vertical slices down in left direction</option>
                                        <option value="sliceDownRandom"'.($data['effect'] == 'sliceDownRandom' ? ' selected=""' : '').'>Vertical slices down at random</option>
                                        <option value="sliceUpRight"'.($data['effect'] == 'sliceUpRight' ? ' selected=""' : '').'>Vertical slices up in right direction</option>
                                        <option value="sliceUpLeft"'.($data['effect'] == 'sliceUpLeft' ? ' selected=""' : '').'>Vertical slices up in left direction</option>
                                        <option value="sliceUpRandom"'.($data['effect'] == 'sliceUpRandom' ? ' selected=""' : '').'>Vertical slices up at random</option>
                                        <option value="sliceFadeRight"'.($data['effect'] == 'sliceFadeRight' ? ' selected=""' : '').'>Vertical slices fade in right direction</option>
                                        <option value="sliceFadeLeft"'.($data['effect'] == 'sliceFadeLeft' ? ' selected=""' : '').'>Vertical slices fade in left direction</option>
                                        <option value="verticalRandomFade"'.($data['effect'] == 'verticalRandomFade' ? ' selected=""' : '').'>Vertical slices fade in at random</option>
                                        <option value="sliceAltRight"'.($data['effect'] == 'sliceAltRight' ? ' selected=""' : '').'>Alternating vertical slices in, right direction</option>
                                        <option value="sliceAltLeft"'.($data['effect'] == 'sliceAltLeft' ? ' selected=""' : '').'>Alternating vertical slices in, left direction</option>
                                        <option value="blindsRight"'.($data['effect'] == 'blindsRight' ? ' selected=""' : '').'>Vertical blinds transition in right direction</option>
                                        <option value="blindsLeft"'.($data['effect'] == 'blindsLeft' ? ' selected=""' : '').'>Vertical blinds transition in left direction</option>
                                        <option value="verticalRandomBlinds"'.($data['effect'] == 'verticalRandomBlinds' ? ' selected=""' : '').'>Vertical blinds transition at random</option>
                                        <option value="sliceMoveRight"'.($data['effect'] == 'sliceMoveRight' ? ' selected=""' : '').'>Vertical slices move right</option>
                                        <option value="sliceMoveLeft"'.($data['effect'] == 'sliceMoveLeft' ? ' selected=""' : '').'>Vertical slices move left</option>
                                        </optgroup>

                                    <optgroup label="Horizontal Slice">
                                        <option value="sliceRightDown"'.($data['effect'] == 'sliceRightDown' ? ' selected=""' : '').'>Horizontal slices right in down direction</option>
                                        <option value="sliceRightUp"'.($data['effect'] == 'sliceRightUp' ? ' selected=""' : '').'>Horizontal slices right in up direction</option>
                                        <option value="sliceRightRandom"'.($data['effect'] == 'sliceRightRandom' ? ' selected=""' : '').'>Horizontal slices right at random</option>
                                        <option value="sliceLeftDown"'.($data['effect'] == 'sliceLeftDown' ? ' selected=""' : '').'>Horizontal slices left in down direction</option>
                                        <option value="sliceLeftUp"'.($data['effect'] == 'sliceLeftUp' ? ' selected=""' : '').'>Horizontal slices left in up direction</option>
                                        <option value="sliceLeftRandom"'.($data['effect'] == 'sliceLeftRandom' ? ' selected=""' : '').'>Horizontal slices left at random</option>
                                        <option value="sliceFadeDown"'.($data['effect'] == 'sliceFadeDown' ? ' selected=""' : '').'>Horizontal slices fade in down direction</option>
                                        <option value="sliceFadeUp"'.($data['effect'] == 'sliceFadeUp' ? ' selected=""' : '').'>Horizontal slices fade in up direction</option>
                                        <option value="horizontalRandomFade"'.($data['effect'] == 'horizontalRandomFade' ? ' selected=""' : '').'>Horizontal slices fade in at random</option>
                                        <option value="sliceAltUp"'.($data['effect'] == 'sliceAltUp' ? ' selected=""' : '').'>Alternating horizontal slices in, up direction</option>
                                        <option value="blindsDown"'.($data['effect'] == 'blindsDown' ? ' selected=""' : '').'>Horizontal blinds transition in down direction</option>
                                        <option value="blindsUp"'.($data['effect'] == 'blindsUp' ? ' selected=""' : '').'>Horizontal blinds transition in up direction</option>
                                        <option value="horizontalRandomBlinds"'.($data['effect'] == 'horizontalRandomBlinds' ? ' selected=""' : '').'>Horizontal blinds transition at random</option>
                                        <option value="sliceMoveDown"'.($data['effect'] == 'sliceMoveDown' ? ' selected=""' : '').'>Horizontal slices move down</option>
                                        <option value="sliceMoveUp"'.($data['effect'] == 'sliceMoveUp' ? ' selected=""' : '').'>Horizontal slices move up</option>
                                        </optgroup>
                                    </select>';
        $c .=               '</div>';

        $c .=               '<div class="col-sm-3">';
        $c .=                   '<strong>Effektdauer</strong> <small><em>1000ms = 1s</em></small>';
        $c .=                   '<div class="input-group">';
        $c .=                       '<input type="number" min="0" step="10" class="form-control" name="duration" value="'.(!empty($data['duration']) ? $data['duration'] : '500').'">';
        $c .=                       '<span class="input-group-addon">ms</span>';
        $c .=                   '</div>';
        $c .=               '</div>';


        $c .=               '<div class="col-sm-3">';

        $c .=                   '<strong>Einblend-Effekt</strong>';
        $c .=                   '<select name="easing" class="form-control">';
        $c .=                       '<option value="linear"'.(($data['easing'] == 'easing' or $data['easing'] == '') ? ' selected=""' : '').'>linear</option>';
        $c .=                       '<option value="swing"'.($data['easing'] == 'swing' ? ' selected=""' : '').'>swing</option>';
        $c .=                       '<option value="easeInQuad"'.($data['easing'] == 'easeInQuad' ? ' selected=""' : '').'>easeInQuad</option>';
        $c .=                       '<option value="easeOutQuad"'.($data['easing'] == 'easeOutQuad' ? ' selected=""' : '').'>easeOutQuad</option>';
        $c .=                       '<option value="easeInOutQuad"'.($data['easing'] == 'easeInOutQuad' ? ' selected=""' : '').'>easeInOutQuad</option>';
        $c .=                       '<option value="easeInCubic"'.($data['easing'] == 'easeInCubic' ? ' selected=""' : '').'>easeInCubic</option>';
        $c .=                       '<option value="easeOutCubic"'.($data['easing'] == 'easeOutCubic' ? ' selected=""' : '').'>easeOutCubic</option>';
        $c .=                       '<option value="easeInOutCubic"'.($data['easing'] == 'easeInOutCubic' ? ' selected=""' : '').'>easeInOutCubic</option>';
        $c .=                       '<option value="easeInQuart"'.($data['easing'] == 'easeInQuart' ? ' selected=""' : '').'>easeInQuart</option>';
        $c .=                       '<option value="easeOutQuart"'.($data['easing'] == 'easeOutQuart' ? ' selected=""' : '').'>easeOutQuart</option>';
        $c .=                       '<option value="easeInOutQuart"'.($data['easing'] == 'easeInOutQuart' ? ' selected=""' : '').'>easeInOutQuart</option>';
        $c .=                       '<option value="easeInQuint"'.($data['easing'] == 'easeInQuint' ? ' selected=""' : '').'>easeInQuint</option>';
        $c .=                       '<option value="easeOutQuint"'.($data['easing'] == 'easeOutQuint' ? ' selected=""' : '').'>easeOutQuint</option>';
        $c .=                       '<option value="easeInOutQuint"'.($data['easing'] == 'easeInOutQuint' ? ' selected=""' : '').'>easeInOutQuint</option>';
        $c .=                       '<option value="easeInExpo"'.($data['easing'] == 'easeInExpo' ? ' selected=""' : '').'>easeInExpo</option>';
        $c .=                       '<option value="easeOutExpo"'.($data['easing'] == 'easeOutExpo' ? ' selected=""' : '').'>easeOutExpo</option>';
        $c .=                       '<option value="easeInOutExpo"'.($data['easing'] == 'easeInOutExpo' ? ' selected=""' : '').'>easeInOutExpo</option>';
        $c .=                       '<option value="easeInSine"'.($data['easing'] == 'easeInSine' ? ' selected=""' : '').'>easeInSine</option>';
        $c .=                       '<option value="easeOutSine"'.($data['easing'] == 'easeOutSine' ? ' selected=""' : '').'>easeOutSine</option>';
        $c .=                       '<option value="easeInOutSine"'.($data['easing'] == 'easeInOutSine' ? ' selected=""' : '').'>easeInOutSine</option>';
        $c .=                       '<option value="easeInCirc"'.($data['easing'] == 'easeInCirc' ? ' selected=""' : '').'>easeInCirc</option>';
        $c .=                       '<option value="easeOutCirc"'.($data['easing'] == 'easeOutCirc' ? ' selected=""' : '').'>easeOutCirc</option>';
        $c .=                       '<option value="easeInOutCirc"'.($data['easing'] == 'easeInOutCirc' ? ' selected=""' : '').'>easeInOutCirc</option>';
        $c .=                       '<option value="easeInElastic"'.($data['easing'] == 'easeInElastic' ? ' selected=""' : '').'>easeInElastic</option>';
        $c .=                       '<option value="easeOutElastic"'.($data['easing'] == 'easeOutElastic' ? ' selected=""' : '').'>easeOutElastic</option>';
        $c .=                       '<option value="easeInOutElastic"'.($data['easing'] == 'easeInOutElastic' ? ' selected=""' : '').'>easeInOutElastic</option>';
        $c .=                       '<option value="easeInBack"'.($data['easing'] == 'easeInBack' ? ' selected=""' : '').'>easeInBack</option>';
        $c .=                       '<option value="easeOutBack"'.($data['easing'] == 'easeOutBack' ? ' selected=""' : '').'>easeOutBack</option>';
        $c .=                       '<option value="easeInOutBack"'.($data['easing'] == 'easeInOutBack' ? ' selected=""' : '').'>easeInOutBack</option>';
        $c .=                       '<option value="easeInBounce"'.($data['easing'] == 'easeInBounce' ? ' selected=""' : '').'>easeInBounce</option>';
        $c .=                       '<option value="easeOutBounce"'.($data['easing'] == 'easeOutBounce' ? ' selected=""' : '').'>easeOutBounce</option>';
        $c .=                       '<option value="easeInOutBounce"'.($data['easing'] == 'easeInOutBounce' ? ' selected=""' : '').'>easeInOutBounce</option>';
        $c .=                   '</select>';

        $c .=               '</div>';

        $c .=               '<div class="col-sm-3">';
        $c .=                   '<strong>Pause</strong> <small><em>1000ms = 1s</em></small>';
        $c .=                   '<div class="input-group">';
        $c .=                       '<input type="number" min="0" step="100" class="form-control" name="delay" value="'.(!empty($data['delay']) ? $data['delay'] : '4000').'">';
        $c .=                       '<span class="input-group-addon">ms</span>';
        $c .=                   '</div>';
        $c .=               '</div>';

        $c .=           '</div>';
        $c .=       '</li>';

        $c .=       '<li class="list-group-item">';
        $c .=           '<div class="row">';
        $c .=               '<div class="col-md-6">';
        $c .=                   '<label class="btn btn-sm btn-primary label-upload">';
        $c .=                       '<input type="file" class="form-control image-upload" data-type="slider" name="'.$_rand.'" id="'.$_rand.'">';
        $c .=                       'Bild ausw&auml;hlen';
        $c .=                   '</label>';

        $c .=                   '<input type="hidden" name="background_image" value="'.$data['background_image'].'" class="hidden-'.$_rand.'">';

        if(!empty($data['background_image'])){
            $c .=               '<br>Name: <em>'.$data['background_image'].'</em><br>';
        }
        $c .=               '</div>';

        $c .=               '<div class="col-md-6 col-link-holder">';
        $c .=                   '<input type="text" class="form-control" name="layer_link" value="'.(!empty($data['layer_link']) ? urldecode(urldecode($data['layer_link'])) : '').'" placeholder="Link (optional)">';
        $c .=                   '<select class="form-control mt10" name="layer_link_target" value="" style="width:234px">';
        $c .=                       '<option value="_self"'.($data['layer_link_target'] == '_self' or $_GET['action'] == 'new' ? ' selected=""' : '').'>zur selben Seite</option>';
        $c .=                       '<option value="_blank"'.($data['layer_link_target'] == '_blank' ? ' selected=""' : '').'>in neuer Seite &ouml;ffnen</option>';
        $c .=                       '<option value="_parent"'.($data['layer_link_target'] == '_parent' ? ' selected=""' : '').'>&ouml;ffnen im &uuml;bergeordnetem Frame</option>';
        $c .=                       '<option value="_top"'.($data['layer_link_target'] == '_top' ? ' selected=""' : '').'>&ouml;ffnen im Hauptframe</option>';
        $c .=                   '</select>';
        $c .=               '</div>';

        $c .=           '</div><br>';

        $c .=           '<div class="row">';
        $c .=               '<div class="col-md-12">';
        $c .=                   '<div class="layer-img-preview '.$_rand.'" style="'.(!empty($data['background_image']) ? 'display:block' : 'display:none').'">';

        if(!empty($data['background_image'])){
            $c .=                   '<img src="../multislider/uploads/slider/big/'.$data['background_image'].'" class="img-responsive">';
        }

        $c .=                   '</div>';
        $c .=               '</div>';
        $c .=           '</div><br>';

        $c .=       '</li>';

        $c .=   '</ul>';

        $c .=   $this->LayerTPL($data['layers']);

        return $c;
    }


    protected function LayerTPL($data = array()){
        $_id = $this->getRandomId(3);

        $c  =   '<ul class="sortable-layers panel-group" id="'.$_id.'">';

        if(!empty($data)){
            foreach($data as $layer){
                $c .=   $this->LayerTPLItem($_id, $layer);
            }

        }

        $c .=       '<li class="add-new-layer">';
        $c .=           '<i class="fa fa-plus"></i> neuer Layer';
        $c .=       '</li>';
        $c .=   '</ul>';

        return $c;
    }


    public function LayerTPLItem($pid, $data = array()){

        $_id_p = $this->getRandomId(5);

        $c  =       '<li class="panel panel-default">';
        $c .=           '<div class="panel-heading">';
        $c .=               '<h4 class="panel-title">';
        $c .=                   '<i class="fa fa-bars"></i> ';
        $c .=                   '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#'.$pid.'" href="#'.$_id_p.'">';
        $c .=                       '<span>Layer</span>';
        $c .=                   '</a>';
        $c .=                   '<i class="fa fa-times-circle delete-layer"></i>';
        $c .=               '</h4>';
        $c .=           '</div> ';
        $c .=           '<div id="'.$_id_p.'" class="panel-collapse collapse">';
        $c .=               '<div class="panel-body">';
        $c .=                   '<div class="row">';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>HTML-Typ</strong>';
        $c .=                           '<select name="layer_tag" class="form-control">';
        $c .=                               '<option value="h1"'.($data['layer_tag'] == 'h1' ? ' selected=""' : '').'>h1</option>';
        $c .=                               '<option value="h2"'.($data['layer_tag'] == 'h2' ? ' selected=""' : '').'>h2</option>';
        $c .=                               '<option value="h3"'.($data['layer_tag'] == 'h3' ? ' selected=""' : '').'>h3</option>';
        $c .=                               '<option value="h4"'.($data['layer_tag'] == 'h4' ? ' selected=""' : '').'>h4</option>';
        $c .=                               '<option value="h5"'.($data['layer_tag'] == 'h5' ? ' selected=""' : '').'>h5</option>';
        $c .=                               '<option value="h6"'.($data['layer_tag'] == 'h6' ? ' selected=""' : '').'>h6</option>';
        $c .=                               '<option value="div"'.(($data['layer_tag'] == 'div' or $data['layer_tag'] == '') ? ' selected=""' : '').'>div</option>';
        $c .=                           '</select>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Wort/Satz</strong>';
        $c .=                           '<input type="text" class="form-control" name="layer_text" value="'.(!empty($data['layer_text']) ? urldecode($data['layer_text']) : '').'">';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Abstand von oben</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" class="form-control" name="layer_top" value="'.(!empty($data['layer_top']) ? $data['layer_top'] : '').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Abstand von links</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" class="form-control" name="layer_left" value="'.(!empty($data['layer_left']) ? $data['layer_left'] : '').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                   '</div><br>';

        $c .=                   '<div class="row">';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Abstand von unten</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" class="form-control" name="layer_bottom" value="'.(!empty($data['layer_bottom']) ? $data['layer_bottom'] : '').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Abstand von rechts</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" class="form-control" name="layer_right" value="'.(!empty($data['layer_right']) ? $data['layer_right'] : '').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Breite</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="text" class="form-control" name="layer_width" value="'.(!empty($data['layer_width']) ? $data['layer_width'] : 'auto').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>H&ouml;he</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="text" class="form-control" name="layer_height" value="'.(!empty($data['layer_height']) ? $data['layer_height'] : 'auto').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                   '</div><br>';

        $c .=                   '<div class="row">';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Abstand nach innen</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="text" class="form-control" name="layer_padding" value="'.(!empty($data['layer_padding']) ? $data['layer_padding'] : '').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Rand</strong> <small><em>Bsp: 1px solid #000</em></small>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="text" class="form-control" name="layer_border" value="'.(!empty($data['layer_border']) ? urldecode($data['layer_border']) : '').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Textfarbe</strong> <small><em>Bsp: #555</em></small>';
        $c .=                           '<input type="text" class="form-control" name="layer_color" value="'.(!empty($data['layer_color']) ? urldecode($data['layer_color']) : '').'">';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Hintergrundfarbe</strong> <small><em>Bsp: #ddd</em></small>';
        $c .=                           '<input type="text" class="form-control" name="layer_background_color" value="'.(!empty($data['layer_background_color']) ? urldecode($data['layer_background_color']) : '').'">';
        $c .=                       '</div>';

        $c .=                   '</div><br>';

        $c .=                   '<hr>';

        $c .=                   '<div class="row">';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Einblend-Effekt</strong>';
        $c .=                           '<select name="layer_effect" class="form-control">';

        $c .=                               '<option value="none"'.($data['layer_effect'] == 'none' ? ' selected=""' : '').'>none</option>';
        $c .=                               '<option value="fade"'.(($data['layer_effect'] == 'fade' or $data['layer_effect'] == '') ? ' selected=""' : '').'>fade</option>';
        $c .=                               '<optgroup label="Move">';
        $c .=                                   '<option value="moveDown"'.($data['layer_effect'] == 'moveDown' ? ' selected=""' : '').'>moveDown</option>';
        $c .=                                   '<option value="moveUp"'.($data['layer_effect'] == 'moveUp' ? ' selected=""' : '').'>moveUp</option>';
        $c .=                                   '<option value="moveRight"'.($data['layer_effect'] == 'moveRight' ? ' selected=""' : '').'>moveRight</option>';
        $c .=                                   '<option value="moveLeft"'.($data['layer_effect'] == 'moveLeft' ? ' selected=""' : '').'>moveLeft</option>';
        $c .=                               '</optgroup>';
        $c .=                               '<optgroup label="Slide">';
        $c .=                                   '<option value="slideDown"'.($data['layer_effect'] == 'slideDown' ? ' selected=""' : '').'>slideDown</option>';
        $c .=                                   '<option value="slideUp"'.($data['layer_effect'] == 'slideUp' ? ' selected=""' : '').'>slideUp</option>';
        $c .=                                   '<option value="slideRight"'.($data['layer_effect'] == 'slideRight' ? ' selected=""' : '').'>slideRight</option>';
        $c .=                                   '<option value="slideLeft"'.($data['layer_effect'] == 'slideLeft' ? ' selected=""' : '').'>slideLeft</option>';
        $c .=                               '</optgroup>';
        $c .=                               '<optgroup label="Flip">';
        $c .=                                   '<option value="flipDown"'.($data['layer_effect'] == 'flipDown' ? ' selected=""' : '').'>flipDown</option>';
        $c .=                                   '<option value="flipUp"'.($data['layer_effect'] == 'flipUp' ? ' selected=""' : '').'>flipUp</option>';
        $c .=                                   '<option value="flipRight"'.($data['layer_effect'] == 'flipRight' ? ' selected=""' : '').'>flipRight</option>';
        $c .=                                   '<option value="flipLeft"'.($data['layer_effect'] == 'flipLeft' ? ' selected=""' : '').'>flipLeft</option>';
        $c .=                               '</optgroup>';
        $c .=                               '<optgroup label="Zoom">';
        $c .=                                   '<option value="zoomIn"'.($data['layer_effect'] == 'zoomIn' ? ' selected=""' : '').'>zoomIn</option>';
        $c .=                                   '<option value="zoomOut"'.($data['layer_effect'] == 'zoomOut' ? ' selected=""' : '').'>zoomOut</option>';
        $c .=                               '</optgroup>';
        $c .=                           '</select>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Effektdauer</strong> <small><em>1000ms = 1s</em></small>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" step="10" class="form-control" name="layer_duration" value="'.(!empty($data['layer_duration']) ? $data['layer_duration'] : '500').'">';
        $c .=                               '<span class="input-group-addon">ms</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Einblend-&Uuml;bergangs-Effekt</strong>';
        $c .=                           '<select name="layer_easing" class="form-control">';
        $c .=                               '<option value="linear"'.(($data['layer_easing'] == 'easing' or $data['layer_easing'] == '') ? ' selected=""' : '').'>linear</option>';
        $c .=                               '<option value="swing"'.($data['layer_easing'] == 'swing' ? ' selected=""' : '').'>swing</option>';
        $c .=                               '<option value="easeInQuad"'.($data['layer_easing'] == 'easeInQuad' ? ' selected=""' : '').'>easeInQuad</option>';
        $c .=                               '<option value="easeOutQuad"'.($data['layer_easing'] == 'easeOutQuad' ? ' selected=""' : '').'>easeOutQuad</option>';
        $c .=                               '<option value="easeInOutQuad"'.($data['layer_easing'] == 'easeInOutQuad' ? ' selected=""' : '').'>easeInOutQuad</option>';
        $c .=                               '<option value="easeInCubic"'.($data['layer_easing'] == 'easeInCubic' ? ' selected=""' : '').'>easeInCubic</option>';
        $c .=                               '<option value="easeOutCubic"'.($data['layer_easing'] == 'easeOutCubic' ? ' selected=""' : '').'>easeOutCubic</option>';
        $c .=                               '<option value="easeInOutCubic"'.($data['layer_easing'] == 'easeInOutCubic' ? ' selected=""' : '').'>easeInOutCubic</option>';
        $c .=                               '<option value="easeInQuart"'.($data['layer_easing'] == 'easeInQuart' ? ' selected=""' : '').'>easeInQuart</option>';
        $c .=                               '<option value="easeOutQuart"'.($data['layer_easing'] == 'easeOutQuart' ? ' selected=""' : '').'>easeOutQuart</option>';
        $c .=                               '<option value="easeInOutQuart"'.($data['layer_easing'] == 'easeInOutQuart' ? ' selected=""' : '').'>easeInOutQuart</option>';
        $c .=                               '<option value="easeInQuint"'.($data['layer_easing'] == 'easeInQuint' ? ' selected=""' : '').'>easeInQuint</option>';
        $c .=                               '<option value="easeOutQuint"'.($data['layer_easing'] == 'easeOutQuint' ? ' selected=""' : '').'>easeOutQuint</option>';
        $c .=                               '<option value="easeInOutQuint"'.($data['layer_easing'] == 'easeInOutQuint' ? ' selected=""' : '').'>easeInOutQuint</option>';
        $c .=                               '<option value="easeInExpo"'.($data['layer_easing'] == 'easeInExpo' ? ' selected=""' : '').'>easeInExpo</option>';
        $c .=                               '<option value="easeOutExpo"'.($data['layer_easing'] == 'easeOutExpo' ? ' selected=""' : '').'>easeOutExpo</option>';
        $c .=                               '<option value="easeInOutExpo"'.($data['layer_easing'] == 'easeInOutExpo' ? ' selected=""' : '').'>easeInOutExpo</option>';
        $c .=                               '<option value="easeInSine"'.($data['layer_easing'] == 'easeInSine' ? ' selected=""' : '').'>easeInSine</option>';
        $c .=                               '<option value="easeOutSine"'.($data['layer_easing'] == 'easeOutSine' ? ' selected=""' : '').'>easeOutSine</option>';
        $c .=                               '<option value="easeInOutSine"'.($data['layer_easing'] == 'easeInOutSine' ? ' selected=""' : '').'>easeInOutSine</option>';
        $c .=                               '<option value="easeInCirc"'.($data['layer_easing'] == 'easeInCirc' ? ' selected=""' : '').'>easeInCirc</option>';
        $c .=                               '<option value="easeOutCirc"'.($data['easlayer_easinging'] == 'easeOutCirc' ? ' selected=""' : '').'>easeOutCirc</option>';
        $c .=                               '<option value="easeInOutCirc"'.($data['layer_easing'] == 'easeInOutCirc' ? ' selected=""' : '').'>easeInOutCirc</option>';
        $c .=                               '<option value="easeInElastic"'.($data['layer_easing'] == 'easeInElastic' ? ' selected=""' : '').'>easeInElastic</option>';
        $c .=                               '<option value="easeOutElastic"'.($data['layer_easing'] == 'easeOutElastic' ? ' selected=""' : '').'>easeOutElastic</option>';
        $c .=                               '<option value="easeInOutElastic"'.($data['layer_easing'] == 'easeInOutElastic' ? ' selected=""' : '').'>easeInOutElastic</option>';
        $c .=                               '<option value="easeInBack"'.($data['layer_easing'] == 'easeInBack' ? ' selected=""' : '').'>easeInBack</option>';
        $c .=                               '<option value="easeOutBack"'.($data['layer_easing'] == 'easeOutBack' ? ' selected=""' : '').'>easeOutBack</option>';
        $c .=                               '<option value="easeInOutBack"'.($data['layer_easing'] == 'easeInOutBack' ? ' selected=""' : '').'>easeInOutBack</option>';
        $c .=                               '<option value="easeInBounce"'.($data['layer_easing'] == 'easeInBounce' ? ' selected=""' : '').'>easeInBounce</option>';
        $c .=                               '<option value="easeOutBounce"'.($data['layer_easing'] == 'easeOutBounce' ? ' selected=""' : '').'>easeOutBounce</option>';
        $c .=                               '<option value="easeInOutBounce"'.($data['layer_easing'] == 'easeInOutBounce' ? ' selected=""' : '').'>easeInOutBounce</option>';
        $c .=                           '</select>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Zeit bis zum Einblenden</strong> <small><em>1000ms = 1s</em></small>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" step="100" class="form-control" name="layer_delay" value="'.(!empty($data['layer_delay']) ? $data['layer_delay'] : '1000').'">';
        $c .=                               '<span class="input-group-addon">ms</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                   '</div><br>';

        $c .=                   '<div class="row">';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Schriftgröße</strong>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="14" class="form-control" name="layer_font_size" value="'.(!empty($data['layer_font_size']) ? $data['layer_font_size'] : '18').'">';
        $c .=                               '<span class="input-group-addon">px</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                   '</div><br>';


        $c .=                   '<div class="row">';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Ausblend-Effekt</strong>';
        $c .=                           '<select name="layer_effect_out" class="form-control">';

        $c .=                               '<option value="none"'.($data['layer_effect_out'] == 'none' ? ' selected=""' : '').'>none</option>';
        $c .=                               '<option value="fade"'.(($data['layer_effect_out'] == 'fade' or $data['layer_effect_out'] == '') ? ' selected=""' : '').'>fade</option>';
        $c .=                               '<optgroup label="Move">';
        $c .=                                   '<option value="moveDown"'.($data['layer_effect_out'] == 'moveDown' ? ' selected=""' : '').'>moveDown</option>';
        $c .=                                   '<option value="moveUp"'.($data['layer_effect_out'] == 'moveUp' ? ' selected=""' : '').'>moveUp</option>';
        $c .=                                   '<option value="moveRight"'.($data['layer_effect_out'] == 'moveRight' ? ' selected=""' : '').'>moveRight</option>';
        $c .=                                   '<option value="moveLeft"'.($data['layer_effect_out'] == 'moveLeft' ? ' selected=""' : '').'>moveLeft</option>';
        $c .=                               '</optgroup>';
        $c .=                               '<optgroup label="Slide">';
        $c .=                                   '<option value="slideDown"'.($data['layer_effect_out'] == 'slideDown' ? ' selected=""' : '').'>slideDown</option>';
        $c .=                                   '<option value="slideUp"'.($data['layer_effect_out'] == 'slideUp' ? ' selected=""' : '').'>slideUp</option>';
        $c .=                                   '<option value="slideRight"'.($data['layer_effect_out'] == 'slideRight' ? ' selected=""' : '').'>slideRight</option>';
        $c .=                                   '<option value="slideLeft"'.($data['layer_effect_out'] == 'slideLeft' ? ' selected=""' : '').'>slideLeft</option>';
        $c .=                               '</optgroup>';
        $c .=                               '<optgroup label="Flip">';
        $c .=                                   '<option value="flipDown"'.($data['layer_effect_out'] == 'flipDown' ? ' selected=""' : '').'>flipDown</option>';
        $c .=                                   '<option value="flipUp"'.($data['layer_effect_out'] == 'flipUp' ? ' selected=""' : '').'>flipUp</option>';
        $c .=                                   '<option value="flipRight"'.($data['layer_effect_out'] == 'flipRight' ? ' selected=""' : '').'>flipRight</option>';
        $c .=                                   '<option value="flipLeft"'.($data['layer_effect_out'] == 'flipLeft' ? ' selected=""' : '').'>flipLeft</option>';
        $c .=                               '</optgroup>';
        $c .=                               '<optgroup label="Zoom">';
        $c .=                                   '<option value="zoomIn"'.($data['layer_effect_out'] == 'zoomIn' ? ' selected=""' : '').'>zoomIn</option>';
        $c .=                                   '<option value="zoomOut"'.($data['layer_effect_out'] == 'zoomOut' ? ' selected=""' : '').'>zoomOut</option>';
        $c .=                               '</optgroup>';
        $c .=                           '</select>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Effektdauer</strong> <small><em>1000ms = 1s</em></small>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" step="10" class="form-control" name="layer_duration_out" value="'.(!empty($data['layer_duration_out']) ? $data['layer_duration_out'] : '500').'">';
        $c .=                               '<span class="input-group-addon">ms</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Ausblend-&Uuml;bergangs-Effekt</strong>';
        $c .=                           '<select name="layer_easing_out" class="form-control">';
        $c .=                               '<option value="linear"'.(($data['layer_easing_out'] == 'easing' or $data['layer_easing_out'] == '') ? ' selected=""' : '').'>linear</option>';
        $c .=                               '<option value="swing"'.($data['layer_easing_out'] == 'swing' ? ' selected=""' : '').'>swing</option>';
        $c .=                               '<option value="easeInQuad"'.($data['layer_easing_out'] == 'easeInQuad' ? ' selected=""' : '').'>easeInQuad</option>';
        $c .=                               '<option value="easeOutQuad"'.($data['layer_easing_out'] == 'easeOutQuad' ? ' selected=""' : '').'>easeOutQuad</option>';
        $c .=                               '<option value="easeInOutQuad"'.($data['layer_easing_out'] == 'easeInOutQuad' ? ' selected=""' : '').'>easeInOutQuad</option>';
        $c .=                               '<option value="easeInCubic"'.($data['layer_easing_out'] == 'easeInCubic' ? ' selected=""' : '').'>easeInCubic</option>';
        $c .=                               '<option value="easeOutCubic"'.($data['layer_easing_out'] == 'easeOutCubic' ? ' selected=""' : '').'>easeOutCubic</option>';
        $c .=                               '<option value="easeInOutCubic"'.($data['layer_easing_out'] == 'easeInOutCubic' ? ' selected=""' : '').'>easeInOutCubic</option>';
        $c .=                               '<option value="easeInQuart"'.($data['layer_easing_out'] == 'easeInQuart' ? ' selected=""' : '').'>easeInQuart</option>';
        $c .=                               '<option value="easeOutQuart"'.($data['layer_easing_out'] == 'easeOutQuart' ? ' selected=""' : '').'>easeOutQuart</option>';
        $c .=                               '<option value="easeInOutQuart"'.($data['layer_easing_out'] == 'easeInOutQuart' ? ' selected=""' : '').'>easeInOutQuart</option>';
        $c .=                               '<option value="easeInQuint"'.($data['layer_easing_out'] == 'easeInQuint' ? ' selected=""' : '').'>easeInQuint</option>';
        $c .=                               '<option value="easeOutQuint"'.($data['layer_easing_out'] == 'easeOutQuint' ? ' selected=""' : '').'>easeOutQuint</option>';
        $c .=                               '<option value="easeInOutQuint"'.($data['layer_easing_out'] == 'easeInOutQuint' ? ' selected=""' : '').'>easeInOutQuint</option>';
        $c .=                               '<option value="easeInExpo"'.($data['layer_easing_out'] == 'easeInExpo' ? ' selected=""' : '').'>easeInExpo</option>';
        $c .=                               '<option value="easeOutExpo"'.($data['layer_easing_out'] == 'easeOutExpo' ? ' selected=""' : '').'>easeOutExpo</option>';
        $c .=                               '<option value="easeInOutExpo"'.($data['layer_easing_out'] == 'easeInOutExpo' ? ' selected=""' : '').'>easeInOutExpo</option>';
        $c .=                               '<option value="easeInSine"'.($data['layer_easing_out'] == 'easeInSine' ? ' selected=""' : '').'>easeInSine</option>';
        $c .=                               '<option value="easeOutSine"'.($data['layer_easing_out'] == 'easeOutSine' ? ' selected=""' : '').'>easeOutSine</option>';
        $c .=                               '<option value="easeInOutSine"'.($data['layer_easing_out'] == 'easeInOutSine' ? ' selected=""' : '').'>easeInOutSine</option>';
        $c .=                               '<option value="easeInCirc"'.($data['layer_easing_out'] == 'easeInCirc' ? ' selected=""' : '').'>easeInCirc</option>';
        $c .=                               '<option value="easeOutCirc"'.($data['layer_easing_out'] == 'easeOutCirc' ? ' selected=""' : '').'>easeOutCirc</option>';
        $c .=                               '<option value="easeInOutCirc"'.($data['layer_easing_out'] == 'easeInOutCirc' ? ' selected=""' : '').'>easeInOutCirc</option>';
        $c .=                               '<option value="easeInElastic"'.($data['layer_easing_out'] == 'easeInElastic' ? ' selected=""' : '').'>easeInElastic</option>';
        $c .=                               '<option value="easeOutElastic"'.($data['layer_easing_out'] == 'easeOutElastic' ? ' selected=""' : '').'>easeOutElastic</option>';
        $c .=                               '<option value="easeInOutElastic"'.($data['layer_easing_out'] == 'easeInOutElastic' ? ' selected=""' : '').'>easeInOutElastic</option>';
        $c .=                               '<option value="easeInBack"'.($data['layer_easing_out'] == 'easeInBack' ? ' selected=""' : '').'>easeInBack</option>';
        $c .=                               '<option value="easeOutBack"'.($data['layer_easing_out'] == 'easeOutBack' ? ' selected=""' : '').'>easeOutBack</option>';
        $c .=                               '<option value="easeInOutBack"'.($data['layer_easing_out'] == 'easeInOutBack' ? ' selected=""' : '').'>easeInOutBack</option>';
        $c .=                               '<option value="easeInBounce"'.($data['layer_easing_out'] == 'easeInBounce' ? ' selected=""' : '').'>easeInBounce</option>';
        $c .=                               '<option value="easeOutBounce"'.($data['layer_easing_out'] == 'easeOutBounce' ? ' selected=""' : '').'>easeOutBounce</option>';
        $c .=                               '<option value="easeInOutBounce"'.($data['layer_easing_out'] == 'easeInOutBounce' ? ' selected=""' : '').'>easeInOutBounce</option>';
        $c .=                           '</select>';
        $c .=                       '</div>';

        $c .=                       '<div class="col-sm-3">';
        $c .=                           '<strong>Zeit bis zum Ausblenden</strong> <small><em>1000ms = 1s</em></small>';
        $c .=                           '<div class="input-group">';
        $c .=                               '<input type="number" min="0" step="100" class="form-control" name="layer_delay_out" value="'.(!empty($data['layer_delay_out']) ? $data['layer_delay_out'] : '1000').'">';
        $c .=                               '<span class="input-group-addon">ms</span>';
        $c .=                           '</div>';
        $c .=                       '</div>';

        $c .=                   '</div><br>';

        $c .=               '</div>';
        $c .=           '</div>';
        $c .=       '</li>';

        return $c;
    }


    public function saveSlider(){
        $_js = '';

        $_params = array();
        $_cnt = 0;

        foreach($_POST['data'] as $_s){
            $_p = explode('&', $_s['options']);

            foreach($_p as $v){
                $_kv = explode('=', $v);
                $_params[$_cnt][$_kv[0]] = $_kv[1];
            }

            if(isset($_s['layers'])){

                $_params[$_cnt]['layers'] = array();
                $_scnt = 0;

                foreach($_s['layers'] as $_l){
                    $_p = explode('&', $_l);

                    foreach($_p as $v){
                        $_kv = explode('=', $v);
                        if($_kv[0]){
                            $_params[$_cnt]['layers'][$_scnt][$_kv[0]] = $_kv[1];
                        }
                    }

                    if(empty($_params[$_cnt]['layers'][$_scnt]['layer_text'])){
                        unset($_params[$_cnt]['layers'][$_scnt]);
                    }

                    $_scnt++;
                }

                $_params[$_cnt]['layers'] = array_values($_params[$_cnt]['layers']);
            }

            $_cnt++;
        }

        $_misc_data = array();
        $_cnt = 0;

        foreach($_POST['misc'] as $_s){
            $_p = explode('&', $_s);

            foreach($_p as $v){
                $_kv = explode('=', $v);
                $_misc_data[$_kv[0]] = $_kv[1];
            }
            $_cnt++;
        }


        $_main = array();
        $_cnt = 0;

        foreach($_POST['main'] as $_s){
            $_p = explode('=', $_s);

            $_main[$_p[0]] = $_p[1];

            $_cnt++;
        }


        if(!empty($_main['slider_name'])){

            if(sizeof($_params) == 1 && empty($_params[0]['background_image'])){
                $_error = true;
                $_msg = $this->showNotice('Du musst mindestens eine Grafik hochladen', 'danger');
                $_js = "$('.col-image-holder:first').addClass('danger-bg')";

            } else {
                $_error = false;
                $_msg = $this->showNotice('Der Slider wurde erfolgreich in der Datenbank abgelegt');
            }

        } else {
            $_error = true;
            $_msg = $this->showNotice('Bitte vergebe dem Slider einen eindeutigen Namen', 'danger');
            $_js = "$('.slider-form > h3').addClass('danger-bg')";
        }


        if($_error === false) {

            // alle anderen deaktivieren
            xtc_db_query("UPDATE multislider SET slider_status = 0");


            $_sql = "REPLACE INTO multislider (
                            slider_id,
                            slider_name,
                            slider_position,
                            slider_parameter,
                            slider_status,
                            date_added)
                      VALUES (
                            '".$_main['slider_id']."',
                            '".$_main['slider_name']."',
                            '".$_main['slider_position']."',
                            '".urlencode(serialize($_misc_data))."',
                            1,
                            NOW()
                      )";

            xtc_db_query($_sql);


            # ----------------------------------------------------- #

            $_sql = "REPLACE INTO multislider_items (
                            slider_id,
                            slider_parameters,
                            date_added)
                      VALUES (
                            '".$_main['slider_id']."',
                            '".urlencode(serialize($_params))."',
                            NOW()
                      )";

            xtc_db_query($_sql);
        }


        $_resp = array(
            'msg' => $_msg,
            'js' => $_js
        );

        return json_encode($_resp);
    }


    public function saveImageUpload($id){

        $error = '';
        $folder = $_GET['type'];

        if(!empty($_FILES[$id]['error'])) {
        
            switch($_FILES[$id]['error']) {

                case '1':
                    $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
                    break;
                case '2':
                    $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
                    break;
                case '3':
                    $error = 'The uploaded file was only partially uploaded';
                    break;
                case '4':
                    $error = 'No file was uploaded.';
                    break;

                case '6':
                    $error = 'Missing a temporary folder';
                    break;
                case '7':
                    $error = 'Failed to write file to disk';
                    break;
                case '8':
                    $error = 'File upload stopped by extension';
                    break;
                case '999':
                default:
                    $error = 'No error code avaiable';
            }

        } elseif(empty($_FILES[$id]['tmp_name']) || $_FILES[$id]['tmp_name'] == 'none'){
            $error = 'Wählen Sie zuerst eine Datei zum Hochladen aus!';

        } else {
            $_src = $_FILES[$id]['tmp_name'];
            $_path_big = DIR_FS_CATALOG.'multislider/uploads/'.$folder.'/big/';
            $_path_thumb = DIR_FS_CATALOG.'multislider/uploads/'.$folder.'/thumb/';

            $_tmp = explode('.', $_FILES[$id]['name']);
            $_name = $this->clean_string($_tmp[0]).'.'.$_tmp[1];

            $this->createImage($_src, $_path_big.$_name);
            $this->createImage($_src, $_path_thumb.$_name, 50, 50);

            @unlink($_FILES[$id]);
        }

        $_resp = array(
            'resp' => $_name,
            'error' => $error
        );

        return json_encode($_resp);
    }


    protected function createImage($srcFile, $destFile, $max = 1000, $quality = 98, $trans = false){
        if(file_exists($srcFile) && isset($destFile)){
            $size = getimagesize($srcFile);

            $height = $max;
            $width = $max;

            $w_org = $size[0];
            $h_org = $size[1];

            if($w_org < 1 or $h_org < 1)
                return false;

            $ratio_orig = $w_org/$h_org;

            if($width/$height > $ratio_orig)
                $width = $height*$ratio_orig;
            else
                $height = $width/$ratio_orig;

            $this->copyImage($srcFile, $destFile, $width, $height, $quality, $trans);
        }
    }


    protected function copyImage($srcFile, $destFile, $w, $h, $quality, $trans){
        $size = getimagesize($srcFile);

        $dest = imagecreatetruecolor($w, $h);

        switch($size[2]) {
            case 1:       // gif
                $src = imagecreatefromgif($srcFile);
                break;

            case 2:       // jpg
                $src = imagecreatefromjpeg($srcFile);
                break;

            case 3:       // png
                $src = imagecreatefrompng($srcFile);
                break;

            default:
                return false;
                break;
        }

        imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);

        if($trans){
            // Grafik in transparentem PNG ablegen
            imagealphablending($dest, true);

            imagecolortransparent($dest, imagecolorallocate($dest, 255,255,255)); // weiß
            imagecolortransparent($dest, imagecolorallocate($dest, 253,250,253)); // grau-ton
            imagecolortransparent($dest, imagecolorallocate($dest, 250,248,248)); // grau-ton
            imagecolortransparent($dest, imagecolorallocate($dest, 252,250,250)); // grau-ton
            imagecolortransparent($dest, imagecolorallocate($dest, 253,254,251)); // grau-ton

            imagepng($dest, $destFile);

        } else {

            switch($size[2]) {
                case 1:
                case 2:
                    imagejpeg($dest, $destFile, $quality);
                    break;
                case 3:
                    imagepng($dest, $destFile);
            }
        }

        imagedestroy($dest);

        @chmod($destFile, octdec(777));
    }


    protected function getRandomId($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890'){
        for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
        return $s;
    }


    protected function showNotice($msg, $type = 'success'){
        $a  =   '<div class="alert alert-'.$type.' alert-dismissible fade in" role="alert">';
        $a .=       '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
        $a .=       $msg;
        $a .=   '</div>';

        return $a;
    }


    public function clean_string($string) {
        $search = array();
        $replace = array();
        $this->getRegExps($search, $replace);
        $validUrl = preg_replace("/<br>/i", "-", $string);
        $validUrl = strip_tags($validUrl);
        $validUrl = preg_replace("/\//", "-", $validUrl);
        $validUrl = preg_replace($search, $replace, $validUrl);
        $validUrl = preg_replace("/(-){2,}/", "-", $validUrl);
        $validUrl = preg_replace("/[^a-z0-9-]/i", "", $validUrl);
        $validUrl = strtolower($validUrl);
        $validUrl = urlencode($validUrl);

        return($validUrl);
    }


    protected function getRegExps(&$search, &$replace) {
        $search = array(
            "/ß/",              //--Umlaute entfernen
            "/ä/",
            "/ü/",
            "/ö/",
            "/Ä/",
            "/Ü/",
            "/Ö/",
            "'&(auml|#228);'i",
            "'&(ouml|#246);'i",
            "'&(uuml|#252);'i",
            "'&(szlig|#223);'i",
            "'[\r\n\s]+'",	    // strip out white space
            "'&(quote|#34);'i",	// replace html entities
            "'&(amp|#38);'i",
            "'&(lt|#60);'i",
            "'&(gt|#62);'i",
            "'&(nbsp|#160);'i",
            "'&(iexcl|#161);'i",
            "'&(cent|#162);'i",
            "'&(pound|#163);'i",
            "'&(copy|#169);'i",
            "'&'",              // ampersant in + konvertieren
            "'%'",              //-- % entfernen
            "/[\[\({]/",        //--ˆffnende Klammern nach Bindestriche entfernen
            "/[\)\]\}]/",       //--schliessende Klammern entfernen
            "/ﬂ/",              //--Umlaute entfernen
            "/‰/",
            "/¸/",
            "/ˆ/",
            "/ƒ/",
            "/‹/",
            "/÷/",
            "/'|\"|¥|`/",       //--Anführungszeichen entfernen
            "/[:,\.!?\*\+]/",   //--Doppelpunkte, Komma, Punkt, asterisk entfernen
            "'\s&\s'",          // remove ampersant
        );
        $replace    = array(
            "ss",
            "ae",
            "ue",
            "oe",
            "Ae",
            "Ue",
            "Oe",
            "ae",
            "oe",
            "ue",
            "ss",
            "-",
            "\"",
            "-",
            "<",
            ">",
            "",
            chr(161),
            chr(162),
            chr(163),
            chr(169),
            "-",
            "+",
            "-",
            "",
            "ss",
            "ae",
            "ue",
            "oe",
            "Ae",
            "Ue",
            "Oe",
            "",
            "",
            "-"
        );
    }
}
