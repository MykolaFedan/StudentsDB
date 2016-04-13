<?php
include '../config.php';
?>
function delete_tire (id_auto) {
    if(window.confirm('Вы уверены?')){
        $.get('ajax.php?action=delete_tire&db_name=<?php echo DATABASE_NAME; ?>&id='+id_auto, function(contents){
            $('#message').html(contents);
            scroll_to('#message', 1000, -100);
            $('#tr_'+id_auto).remove();
            $('#list_of_autos').removeClass('twitter_table-striped');
            $('#list_of_autos').addClass('twitter_table-striped');
        });
    }
}

function scroll_to (selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html, body').animate({
        scrollTop: offsetTop
    }, time);
}

function copy_tire_selects () {
    value = $("#def_front_axle_tire\\[0\\] option:selected").val();
    $("#def_rear_axle_tire\\[0\\] option[value='"+value+"']").attr("selected", "selected");
    value = $("#def_front_axle_tire\\[1\\] option:selected").val();
    $("#def_rear_axle_tire\\[1\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#def_front_axle_tire\\[2\\] option:selected").val();
    $("#def_rear_axle_tire\\[2\\] [value='"+value+"']").attr("selected", "selected");

    value = $("#def_front_axle_wheel\\[0\\] option:selected").val();
    $("#def_rear_axle_wheel\\[0\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#def_front_axle_wheel\\[1\\] option:selected").val();
    $("#def_rear_axle_wheel\\[1\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#def_front_axle_wheel\\[2\\] option:selected").val();
    $("#def_rear_axle_wheel\\[2\\] [value='"+value+"']").attr("selected", "selected");

    value = $("#alt_front_axle_tire\\[0\\] option:selected").val();
    $("#alt_rear_axle_tire\\[0\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[1\\] option:selected").val();
    $("#alt_rear_axle_tire\\[1\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[2\\] option:selected").val();
    $("#alt_rear_axle_tire\\[2\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[3\\] option:selected").val();
    $("#alt_rear_axle_tire\\[3\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[4\\] option:selected").val();
    $("#alt_rear_axle_tire\\[4\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[5\\] option:selected").val();
    $("#alt_rear_axle_tire\\[5\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[6\\] option:selected").val();
    $("#alt_rear_axle_tire\\[6\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_tire\\[7\\] option:selected").val();
    $("#alt_rear_axle_tire\\[7\\] [value='"+value+"']").attr("selected", "selected");

    value = $("#alt_front_axle_wheel\\[0\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[0\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[1\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[1\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[2\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[2\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[3\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[3\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[4\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[4\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[5\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[5\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[6\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[6\\] [value='"+value+"']").attr("selected", "selected");
    value = $("#alt_front_axle_wheel\\[7\\] option:selected").val();
    $("#alt_rear_axle_wheel\\[7\\] [value='"+value+"']").attr("selected", "selected");
    $('select').trigger('chosen:updated');
}
