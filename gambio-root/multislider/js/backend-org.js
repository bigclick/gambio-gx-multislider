var Multislider = {
    jQuery: $,
    ajax_uri: site_url,

    init: function(){

        var a = this,
            $ = this.jQuery,
            bd = $('body');

        this.setLeftMenu();
        this.setMisc();
        this.Layers();
        this.LayerPreview();
        this.setToolTip();
        // this.LayerTimer();

        bd

            // Slider hinzufügen
            .on('click', '.nav-tabs > li:last', function(e){
                e.preventDefault();
                a.addSlider($(".nav-tabs li").size());
            })


            // richtigen Tab aktivieren
            .on("click", ".nav-tabs > li > a", function(e){
                e.preventDefault();
                a.activateTab($(this).parent('li').index());
            })

            /*
            // löschen eines Tabs
            .on("click", '.delete-slide', function(){
                var p = $(this).parent('li');

                a.deleteTab(p.index());
                p.remove();
            })
            */


            // Speichern des Sliders
            .on('click', '.slider-save-button', function(){
                a.clearMsg();
                a.saveSlider();
            })


            // klick auf "Bild hochladen"
            .on('click', '.choose-image', function(){
                $(this).next().trigger('click');
            })


            // Bild Hochladen
            .on('change', '.image-upload', function(e){
                e.preventDefault();
                a.imageUpload($(this));
            })


            // einen neuen Layer hinzufügen
            .on('click', '.add-new-layer', function(){
                a.addLayer($(this).parent('ul').attr('id'), $(this).closest('.tab-pane').data('id'));
            })


            // löschen eines Layers
            .on('click', '.delete-layer', function(){
                var id = $(this).closest('ul').attr('id');

                $(this).closest('.panel').remove();

                a.sortLayers(id);
            })


            // das linke Menü verstecken
            .on('click', '.toogle-menu', function(){
                a.toggleMenu();
            })
        ;
    },


    addSlider: function(index){
        var a = this,
            $ = this.jQuery;

        $.getJSON(this.ajax_uri+'?load=load_slide_tpl&count='+index, function(resp){

            var id = $(".nav-tabs").children().length,
                rid = a.makeId();

            $('.nav-tabs li:last').before(
                '<li>'+
                    '<a href="#">Slide '+id+'</a>'+
                    '<span class="fa fa-times-circle delete-slide" onclick="Multislider.deleteTab($(this).parent(\'li\').index())"></span>'+
                    '</li>');

            $('.tab-content').append('<div class="tab-pane fade in slider-'+rid+'" data-id="'+rid+'">'+resp.html+'</div>');

            $('.tab-pane').removeClass("active");
            $('.nav-tabs li').removeClass("active");

            $('.nav-tabs li').eq(-2).addClass('active');
            $('.tab-pane').eq(-1).addClass('active');
        });
    },


    addLayer: function(id, pid){
        var a = this,
            $ = this.jQuery;

        $.getJSON(this.ajax_uri+'?load=load_layer_tpl&lid='+id, function(resp){

            $(resp.html).insertBefore('#'+id+' .add-new-layer');
            a.sortLayers(id);

            a.setToolTip();

            //a.addTimer(pid);

        });
    },


    addTimer: function(pid){
        var en = $('.slider-'+pid+' input[name=delay]').val(),
            a = this;

        $.getJSON(this.ajax_uri+'?load=load_timer_tpl&end='+en, function(resp){

            $('.slider-'+pid+' .layer-timer').append(resp.html);

            setTimeout(function(){
                a.LayerTimer();
            }, 200);

        });
    },


    activateTab: function(i){
        // var i = $(this).parent('li').index();

        $('.tab-pane, .nav-tabs li').removeClass("active");

        $('.nav-tabs li').eq(i).addClass('active');
        $('.tab-pane').eq(i).addClass('active');
    },


    deleteTab: function(i){

        var a = this,
            $ = this.jQuery;

        $('.nav-tabs > li').eq(i).remove();
        $('.tab-pane').eq(i).remove();

        $(".nav-tabs > li").children('a').first().click();

        $('.nav-tabs > li').not('.nav-tabs > li:last').each(function(i){
            $(this).html(
                '<a href="#">Slide '+(i +1)+'</a>'+
                ((i +1 !== 1 ) ? '<span class="fa fa-times-circle" onclick="Multislider.deleteTab($(this).parent(\'li\').index())"></span>' : '')
            );
        });
    },


    saveSlider: function(){

        var sd = [],
            dc = [],
            m = [],
            sid = $('.slider_id').val(),
            sp = $('.slider_position').val(),
            n = $('input[name=slider_name]').val(),
            t = $('.tab-pane');

        m.push('slider_name='+n);
        m.push('slider_id='+sid);
        m.push('slider_position='+sp);

        sd.push($('.misc-data').find('input[name],select[name],textarea[name]').serialize());

        t.each(function(i){
            var ai = i;

            dc.push({
                options: t.eq(i).children('.list-group').find('input[name],select[name]').serialize(),
                layers : []
            });

            t.eq(i).find('li.panel').each(function(){
                dc[ai].layers.push( $(this).find('input[name],select[name]').serialize() );
            });
        });

        $.post(this.ajax_uri+'?load=save_form', { data: dc, main : m, misc : sd}, function(resp){
            var obj = $.parseJSON(resp);

            if(obj.js !== undefined){
                $.globalEval(obj.js);
            }

            $('.pageHeading').after(obj.msg);
        }, 'html');
    },


    imageUpload: function(b){

        this.clearMsg();

        var id = b.attr('id'),
            t = b.data('type'),
            p = b.closest('div'),
            o = $('<div class="overlay-loader" id="loader-'+id+'" />');

        $('.'+id).css({'background-image':'none'}).animate({height: 0}, 800);

        p.append(o);

        this.UploadProcess(t, id);
    },


    UploadProcess: function(type, id){
        $.ajaxFileUpload({

            url: this.ajax_uri+'?load=file_upload&id='+id+'&type='+type,
            secureuri:false,
            fileElementId: id,
            dataType: 'json',
            success: function (data){
                if(typeof(data.error) !== undefined){
                    if(data.error !== ''){
                        alert(data.error);
                    } else {

                        var img = new Image();

                        img.src = '../multislider/uploads/slider/big/'+data.resp;

                        img.onload = function() {
                            $('.'+id).animate({height: 400}, 800, function(){
                                $(this).css({'background-image':'url(../multislider/uploads/slider/big/'+data.resp+')'});
                            });

                            $('.hidden-'+id).val(data.resp);

                            $('#loader-'+id).remove();
                        }
                    }
                }
            },
            error: function (data, status, e){
                alert(e);
            }
        });
    },


    sortLayers: function(id){
        $('#'+id+' li').not('.add-new-layer').each(function(i){
            $(this).find('span').eq(0).html('Layer '+(i +1));
        });
    },


    Layers: function(){

        var a = this;

        $('.sortable-layers').sortable({
            placeholder: "ui-state-highlight",
            axis: "y",
            items: "li:not(.add-new-layer)",
            stop: function(event, ui){
                a.sortLayers(ui.item.parent().attr('id'));
            }
        });

        a.sortLayers($('.sortable-layers').attr('id'));
    },


    LayerPreview: function(){

        $('.layer-img-preview div').draggable({

        });
    },


    LayerTimer: function(){

        $('.layer-time').slider({
            range: true,
            slide: function( event, ui ) {
                // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                console.log(ui.values[0]+' - '+ui.values[1]);
            }
        });
    },


    toggleMenu: function(){
        $('.left-colum').fadeToggle(function(){
            if($('.left-colum').is(':visible') === true){
                $.cookie('multislider-menu', 'shown');
                $('.toogle-menu').text('Menü verbergen');
            } else {
                $.cookie('multislider-menu', 'hidden');
                $('.toogle-menu').text('Menü anzeigen');
            }
        });
    },


    setToolTip: function(){

        setTimeout(function(){
            $('[data-toggle="tooltip"]').tooltip({
                placement: 'top',
                container: 'body',
                html: true
            });
        }, 300);
    },


    clearMsg: function(){
        $('.alert').remove();
        $('.danger-bg').removeClass('danger-bg');
    },


    setMisc: function(){
        $('.content_width').css({'overflow':'hidden'});
        $('.pageHeading').html($('.pageHeading').text() + ' <small style="float:right;text-transform:none"><em><a target="_blank" href="http://www.big-click.com">Powered by BigClick GmbH & Co.KG</a></em></small>');
    },


    setLeftMenu: function(){
        if($.cookie('multislider-menu') === 'hidden'){
            $('.left-colum').hide();
            $('.toogle-menu').text('Menü anzeigen');
        }
    },


    makeId: function(){
        var text = '',
            possible = "abcdefghijklmnopqrstuvwxyz0123456789";

        for(var i = 0; i < 5; i++ ){
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        }

        return text;
    }
};

Multislider.init();