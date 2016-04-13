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

<script type="text/javascript">
    
    $( init );

function init() {

  $('.span__ndeks_shivdkost_').remove();
  $('.span__ndeks_navantazhenost_').remove();

}

</script>






    

<div id="content">
<!--    --><!--        <div class="bread_crumbs">-->
<!--            --><!--        </div>-->
<!--    -->    
<div id="main_page" >

    <div class="main_form clear_fix">
        <div class="tire_form fl_left">
            <div class="form_title text_center">Шины</div>
                <div class="form_block">
                    <div class="toggle_form clear_fix"id="tirestitle">
                        <a class="parameters fl_left active" href="javascript: void(0);"  onclick="TiresFilterBlock(this)">
                            <span>По параметрам</span>
                        </a>
                        <a class="brand toggle_block fl_left" href="javascript: void(0);"  onclick="showSelectedCarBlockTires(this)">
                            <span>По по марке авто</span>
                        </a>
                    </div>
                    <div class="form" id="tires">
                         <?php

                            $connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
                            if (!$connect) exit ('MySQL Error!');

                            mysqli_set_charset($connect ,"utf8");

                            echo '<form action="/category/shini/" method="get">';

                            $qwery=mysqli_query($connect, 'SELECT id, name,code, type FROM shop_feature ' );

                            while ($label=mysqli_fetch_assoc($qwery))
                             {  
                                if ($label['code']=='shirina' || $label['code']=='prof_l'|| $label['code']=='d_ametr'||
                                 $label['code']=='virobnik'|| $label['code']=='sezonn_st'|| $label['code']=='tip_shini') {
                                   
                              
                                echo "<span class='span_$label[code]'>";
                                echo "<label>$label[name]";
                                echo "</label>";
                                echo "<select class='jq-selectbox' name='$label[code]'>";
                                $table="shop_feature_values_{$label['type']}";
                                echo " <option value=''>Вибрать</option>";


                                $qwery2=mysqli_query($connect, "SELECT value, id FROM $table WHERE feature_id = $label[id]" );

                                while ($row=mysqli_fetch_assoc($qwery2)) {
                                    
                                echo " <option value='$row[id]'>$row[value]</option>";
                                }

                                echo "</select>";
                                echo "</span>";

                             }

                            }

                             mysqli_close($connect); 

                                echo "<div class='text_center'>               
                                        <input type='submit' class='btn btn_yellow' value='Подобрать'></div>";

                                echo '</form>';



                            ?>

                    </div>
                </div>
        </div>

        <div class="wheels_form fl_right">

            <div class="form_title text_center">Диски</div>
            <div class="form_block">
                <div class="toggle_form clear_fix" id="wheelstitle">
                    <a class="parameters fl_left active" href="javascript: void(0);" onclick="showWheelsFilterBlock(this)">
                        <span>По параметрах</span>
                    </a>
                   <a class="brand fl_left toggle_block" href="javascript: void(0);" data-category="diski" onclick="showSelectedCarBlockWheels(this)">
                        <span>По марке авто</span>
                    </a>
                </div>
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

  
    </div>   
</form>
                                        </div>
            </div>
        </div>
        <img class="wheel" src="/img/form_wheel.png" alt="wheel">
        <img class="tires" src="/img/form_tires.png" alt="tires">
    </div>

</div>
</div>


<script type="text/javascript">
   stylefilter();
   showWheelsFilterBlock();

 </script>

