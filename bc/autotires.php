<?php
require 'config.php';
require 'lib.php';
require 'translate.php';
$t = $t[TRANSLATE_LANG];
?>

<script>
jQuery('#list_of_tire_auto_type_vehicles').change(function(){
    get_list_of_tire_auto_brands();
});

jQuery('#list_of_tire_auto_brands').change(function(){
    get_list_of_tire_auto_models();
});

jQuery('#list_of_tire_auto_models').change(function(){
    get_list_of_tire_auto_years();
});

jQuery('#list_of_tire_auto_years').change(function(){
    get_list_of_tire_auto_modifications();
});

jQuery('#list_of_tire_auto_modifications').change(function(){
   
});


// ---------------------------------------
//      Customization <form> over jQuery.
// ---------------------------------------
var url = window.location.toString();

// Auto select type of vehicle.
jQuery(document).ready(function() {
    $('#list_of_tire_auto_type_vehicles option[value="passanger"]').attr('selected','selected');
    $('#list_of_tire_auto_type_vehicles option[value="passanger"]').change();
})

/*
Hide buttons.
$('#get_all_results').hide();           // Show all results
$('#get_only_tires_results').hide();    // Show only tires results
$('#get_only_wheels_results').hide();   // Show only wheels results

Reselect type of vehicle.
$('#list_of_tire_auto_type_vehicles option[value="passanger"]').attr('selected','selected');
$('#list_of_tire_auto_type_vehicles option[value="truck"]').attr('selected','selected');
$('#list_of_tire_auto_type_vehicles option[value="moto"]').attr('selected','selected');

Hide select element for select type of vehicle.
$('#list_of_tire_auto_type_vehicles').hide();

Example: if url contain string 'gruzovye-shiny', than select type vehicle 'truck' and show button for view only tires results.
if (url.indexOf('gruzovye-shiny') != -1) {
    $('#list_of_tire_auto_type_vehicles option[value="truck"]').attr('selected','selected');
    $('#btn_show_only_tires').show();
}
*/
</script>


                <div class="form" id="wheels">
                     <form method="get" id="bc_innter_form_tires_filter">
    <!-- Results mode can be: all, only_tires, only_wheels. -->
    <input type="hidden" name="results_mode" id="results_mode" value="all" />


     <span class="blocks">  
     <label><?php echo $t['select_type_vehicle']; ?><br /></label>    
    <select class="jq-selectbox" name="auto_type_vehicle" id="list_of_tire_auto_type_vehicles" >
        <option value="" selected>-</option>
        <option value="passanger"><?php echo $t['tv_passanger']; ?></option>
        <option value="truck"><?php echo $t['tv_truck']; ?></option>
        <!--option value="special"><?php echo $t['tv_special']; ?></option-->
        <option value="moto"><?php echo $t['tv_moto']; ?></option>
    </select><br />
    </span>

    <span class="blocks half"> 
    <label><?php echo $t['select_brand']; ?><br /></label>     
    <select class="jq-selectbox" name="auto_brand" id="list_of_tire_auto_brands"  required></select><br />
    </span>
    
    <span class="blocks half">  
    <label><?php echo $t['select_model']; ?><br /></label>    
    <select class="jq-selectbox" name="auto_model" id="list_of_tire_auto_models" required></select><br />
    </span>
    
    <span class="blocks half">  
    <label><?php echo $t['select_year']; ?><br /></label>   
    <select class="jq-selectbox" name="auto_year" id="list_of_tire_auto_years"  required></select><br />
    </span>
    
    <span class="blocks half">  
    <label><?php echo $t['select_modification']; ?><br /></label>    
    <select class="jq-selectbox" name="auto_modification" id="list_of_tire_auto_modifications"  required></select><br />
    </span>

    <div class='text_center'> 
    <a href="javascript:void(0);" class='btn btn_yellow' onclick="jQuery('#results_mode').val('only_tires'); get_tire_results(true);" id="get_only_tires_results" ><?php echo $t['search_only_tires']; ?></a>

   <!-- <a href="javascript:void(0);" class='btn btn_green' onclick="jQuery('#results_mode').val('only_wheels'); get_tire_results(true);" id="get_only_wheels_results"><?php echo $t['search_only_wheels']; ?></a>
     --></div>   
</form>
                                        </div>
           


<script type="text/javascript">
   stylefilter();

 </script>