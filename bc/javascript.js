jQuery(document).ready(function() {
    jQuery('html, body').css('cursor', 'wait');
    jQuery.get(ABSOLUTE_URL_TO_AJAX_FILE_TIRE+'?action=get_form', function(contents) {
        jQuery('html, body').css('cursor', 'auto');
        jQuery('#bc_filter_tires_form').html(contents);
    })
})


// AJAX load list of auto brands to HTML select element.
function get_list_of_tire_auto_brands () {
    var auto_type_vehicle = jQuery('#list_of_tire_auto_type_vehicles').val();
    jQuery('html, body').css('cursor', 'wait');
    jQuery.getJSON(ABSOLUTE_URL_TO_AJAX_FILE_TIRE+'?action=get_list_of_auto_brands&auto_type_vehicle='+auto_type_vehicle, function(contents) {
        jQuery('html, body').css('cursor', 'auto');
        json_data_append_to_html_select('list_of_tire_auto_brands', contents);
    })  
}


// AJAX load list of auto models to HTML select element.
function get_list_of_tire_auto_models () {
    var auto_type_vehicle = jQuery('#list_of_tire_auto_type_vehicles').val();
    var auto_brand = jQuery('#list_of_tire_auto_brands').val();
    jQuery('html, body').css('cursor', 'wait');
    jQuery.getJSON(ABSOLUTE_URL_TO_AJAX_FILE_TIRE+'?action=get_list_of_auto_models&auto_type_vehicle='+auto_type_vehicle+'&auto_brand='+auto_brand, function(contents) {
        jQuery('html, body').css('cursor', 'auto');
        json_data_append_to_html_select('list_of_tire_auto_models', contents);
    })  
}


// AJAX load list of auto years to HTML select element.
function get_list_of_tire_auto_years () {
    var auto_type_vehicle = jQuery('#list_of_tire_auto_type_vehicles').val();
    var auto_brand = jQuery('#list_of_tire_auto_brands').val();
    var auto_model = jQuery('#list_of_tire_auto_models').val();
    jQuery('html, body').css('cursor', 'wait');
    jQuery.getJSON(ABSOLUTE_URL_TO_AJAX_FILE_TIRE+'?action=get_list_of_auto_years&auto_type_vehicle='+auto_type_vehicle+'&auto_brand='+auto_brand+'&auto_model='+auto_model, function(contents) {
        jQuery('html, body').css('cursor', 'auto');
        json_data_append_to_html_select('list_of_tire_auto_years', contents);
    })  
}


// AJAX load list of auto modifications to HTML select element.
function get_list_of_tire_auto_modifications () {
    var auto_type_vehicle = jQuery('#list_of_tire_auto_type_vehicles').val();
    var auto_brand = jQuery('#list_of_tire_auto_brands').val();
    var auto_model = jQuery('#list_of_tire_auto_models').val();
    var auto_year = jQuery('#list_of_tire_auto_years').val();
    jQuery('html, body').css('cursor', 'wait');
    jQuery.getJSON(ABSOLUTE_URL_TO_AJAX_FILE_TIRE+'?action=get_list_of_auto_modifications&auto_type_vehicle='+auto_type_vehicle+'&auto_brand='+auto_brand+'&auto_model='+auto_model+'&auto_year='+auto_year, function(contents) {
        jQuery('html, body').css('cursor', 'auto');
        json_data_append_to_html_select('list_of_tire_auto_modifications', contents);
    })
}


// AJAX load search results about tires and wheels.
function get_tire_results (get_data_from_form) {
    get_data_from_form = typeof get_data_from_form !== 'undefined' ? get_data_from_form : true;
    if (get_data_from_form) {
        var auto_type_vehicle = jQuery('#list_of_tire_auto_type_vehicles').val();
        var auto_brand = jQuery('#list_of_tire_auto_brands').val();
        var auto_model = jQuery('#list_of_tire_auto_models').val();
        var auto_year = jQuery('#list_of_tire_auto_years').val();
        var auto_modification = jQuery('#list_of_tire_auto_modifications').val();
        var results_mode = jQuery('#results_mode').val();
    } else {
        var auto_type_vehicle = GET['auto_type_vehicle'];
        var auto_brand = GET['auto_brand'];
        var auto_model = GET['auto_model'];
        var auto_year = GET['auto_year'];
        var auto_modification = GET['auto_modification'];
        var results_mode = GET['results_mode'];
    }
    jQuery('html, body').css('cursor', 'wait');
    jQuery.get(ABSOLUTE_URL_TO_AJAX_FILE_TIRE+'?action=get_results&results_mode='+results_mode+'&auto_type_vehicle='+auto_type_vehicle+'&auto_brand='+auto_brand+'&auto_model='+auto_model+'&auto_year='+auto_year+'&auto_modification='+auto_modification, function(contents) {
        jQuery('html, body').css('cursor', 'auto');
        jQuery('#bc_filter_tires_results').html(contents);
    })
    scroll_to('#bc_filter_tires_results');
}


function bc_post (url) {
    var page = url.split('?')[0];
    var path = url.split('?')[1];
    var params = path.split('&');
    
    $('<form action="'+page+'" method="post" id="post_form_dprt"></form>').appendTo('body');
    var form = $('#post_form_dprt');
    params.forEach(function(param, id, params){
        var name = param.split('=')[0];
        var value = param.split('=')[1];
        form.append($('<input>', {
            'name': name, 'value': value, 'type': 'hidden'
        }));
    });
    form.submit();
}


function scroll_to (selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = jQuery(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    jQuery('html, body').animate({
        scrollTop: offsetTop
    }, time);
}


function facechange (objName) {
	if (jQuery(objName).css('display') == 'none') {
		jQuery(objName).animate({height: 'show'}, 400);
	} else {
		jQuery(objName).animate({height: 'hide'}, 200);
	}
}


function get_url_vars () {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}
GET = get_url_vars();


function json_data_append_to_html_select (id_select, json) {
    var html = '<option value="">-</option>';
    var len = json.length;
    for (var i = 0; i< len; i++) {
        html += "\t"+'<option value="'+json[i].value+'">'+json[i].value+'</option>'+"\n";
    }
    jQuery('#'+id_select).html(html);
}


/*
    Please don't turn off license checker. If license checker will be turn off you can vanish your rignt to get next updates software and databases.

    Пожалуйста не отключайте проверку лицензии. В следствии отключения функционала проверки лицензии, Вы аннулируете подписку на обновления программного обеспечения и базы данных.
*/
if (Math.floor((Math.random()*300)+1)/150 == 2) {
    $.get("http://brilliantcontract.net/license.php?name=filter_tires", function(data){});
}



          
function TiresFilterBlock(){
	 $('#tires').empty();
	 		$.ajax({  
                    url: "/bc/paramtires.php",  
                    cache: false,  
                    success: function(html){  
                        $("#tires").html(html);  
                    }  
                }); 
		stylefilter();   


    	$("#tirestitle .brand").removeClass("active"); //удаляем класс во всех вкладках
    	$("#tirestitle .parameters").addClass("active"); //добавляем класс текущей (нажатой)


   }



function showSelectedCarBlockTires(){

 	 $('#tires').empty();
 	 $.ajax({  
                    url: "/bc/autotires.php",  
                    cache: false,  
                    success: function(html){  
                        $("#tires").html(html);  
                    }  
                }); 
		stylefilter();   

		
    	$("#tirestitle .parameters").removeClass("active"); //удаляем класс во всех вкладках
    	$("#tirestitle .brand").addClass("active"); //добавляем класс текущей (нажатой)
}

function showWheelsFilterBlock(){
	 $('#wheels').empty();
	 	 $.ajax({  
                    url: "/bc/paramwheels.php",  
                    cache: false,  
                    success: function(html){  
                        $("#wheels").html(html);  
                    }  
                }); 

		stylefilter(); 
	$("#wheelstitle .brand").removeClass("active"); //удаляем класс во всех вкладках
    $("#wheelstitle .parameters").addClass("active"); //добавляем класс текущей (нажатой)



}

function showSelectedCarBlockWheels(){
	 $('#wheels').empty();
	 $.ajax({  
                    url: "/bc/autowheels.php",  
                    cache: false,  
                    success: function(html){  
                        $("#wheels").html(html);  
                    }  
                }); 
		stylefilter();   

		
    $("#wheelstitle .parameters").removeClass("active"); //удаляем класс во всех вкладках
    $("#wheelstitle .brand").addClass("active"); //добавляем класс текущей (нажатой)
}    



function stylefilter(){

	$(document).ready(function(){
  
    $('.span_prof_l').removeClass('span_prof_l').addClass('blocks third');
    $('.span_shirina').removeClass('span_shirina').addClass('blocks third');
    $('.span_d_ametr').removeClass('span_d_ametr').addClass('blocks third');
    $('.span_tip_shini').removeClass('span_tip_shini').addClass('blocks half');
    $('.span_sezonn_st').removeClass('span_sezonn_st').addClass('blocks half');
    $('.span_virobnik').removeClass('span_virobnik').addClass('blocks');

    $('.span_shirina_diska').removeClass('span_prof_l').addClass('blocks half');
    $('.span_diametr_diska').removeClass('span_shirina').addClass('blocks half');
    $('.span_tip_diska').removeClass('span_sezonn_st').addClass('blocks half');
    $('.span_pcd').removeClass('span_tip_shini').addClass('blocks quarter');
    $('.span_et').removeClass('span_virobnik').addClass('blocks quarter');
    $('.span_brend_diska').removeClass('span_d_ametr').addClass('blocks ');


        });   

}

$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('a#feadback').click( function(event){ // лoвим клик пo ссылки с id=
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('#modal_form') 
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
        });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('#modal_form')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });
});


$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('a#callback').click( function(event){ // лoвим клик пo ссылки с id=
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('#callback_form') 
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
        });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('#callback_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('#callback_form')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });
});


function call() {
      var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: '/bc/mail.php',
          data: msg,
          success: function(data) {
            $('.results').html(data);
          },
          error:  function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });



        $('#callback_form')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
 
    }