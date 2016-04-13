<style>
.bc_link {
    width: 130px;
    text-align: left;
    display: inline-block;
    font-weight: normal;
}
.bc_href_title:hover {
    text-decoration: none;
    color: red;
    position: relative;
}
.bc_href_title:hover:after {
    content: attr(ownTitle);
    padding: 4px 8px;
    color: #333;
    position: absolute;
    left: 0;
    top: 100%;
    white-space: nowrap;
    z-index: 20px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0px 0px 4px #222;
    -webkit-box-shadow: 0px 0px 4px #222;
    box-shadow: 0px 0px 4px #222;
    background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #eeeeee),color-stop(1, #cccccc));
    background-image: -webkit-linear-gradient(top, #eeeeee, #cccccc);
    background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
    background-image: -ms-linear-gradient(top, #eeeeee, #cccccc);
    background-image: -o-linear-gradient(top, #eeeeee, #cccccc);
}
.bc_block_main {
    float: left;
    width: 400px;
}
.bc_block_complectation {
    margin-bottom: 30px;
    font-weight: bold;
}
.bc_axle_name {
    width: 130px;
    margin-left: 30px;
}
.bc_table_with_results td {
    padding-left: 10px;
}
.bc_right_border {
    padding-right: 10px;
    border-right: 1px #777 solid;
}
h1{
    font-size: 32px;
}
</style>

<?php if (!isset($auto_info['def_front_tires'][0])): ?>
<p><?php echo $t['res_nothing']; ?></p>
<?php exit(0); endif; ?>

<!-- Show simple results form for vehicles who have some tire sizes on front and rear axles. -->
<?php if (isset($auto_info['def_front_tires'][0]['value']) AND isset($auto_info['def_rear_tires'][0]['value']) AND $auto_info['def_front_tires'][0]['value'] == $auto_info['def_rear_tires'][0]['value']): ?>

<?php if ($_REQUEST['results_mode'] == 'all' OR $_REQUEST['results_mode'] == 'only_tires'):?>
<h1><?php echo $t['res_tires_for_auto']; ?> 
<?php echo $auto_info['main']['brand'].' '.$auto_info['main']['model'].' '.$auto_info['main']['year'].' '.$auto_info['main']['modification']; ?></h1>
<p>
    <?php echo $t['res_speed_index']; ?>
    <?php echo $auto_info['main']['speed_index']; ?>,

    <?php echo $t['res_load_index']; ?>
    <?php echo $auto_info['main']['load_index']; ?>
</p>
<table id="bc_results_tires" class="bc_table_with_results">
    <tr>
        <td class="bc_right_border"><?php echo $t['res_manufacture_complect']; ?></td>
        <td><?php foreach($auto_info['def_front_tires'] as $size) echo $size['link']; ?></td>
    </tr><tr>
        <td class="bc_right_border"><?php echo $t['res_alt_complect']; ?></td>
        <td><?php foreach($auto_info['alt_front_tires'] as $size) echo $size['link']; ?></td>
    </tr><tr>
        <td class="bc_right_border"><?php echo $t['res_tuning']; ?></td>
        <td><?php foreach($auto_info['tuning_low_profile_tires'] as $size) echo $size['link']; ?></td>
    </tr>
</table>
<?php endif; ?>


<?php if ($_REQUEST['results_mode'] == 'all' OR $_REQUEST['results_mode'] == 'only_wheels'):?>
<h3><?php echo $t['res_wheels_for_auto']; ?> 
<?php echo $auto_info['main']['brand'].' '.$auto_info['main']['model'].' '.$auto_info['main']['year'].' '.$auto_info['main']['modification']; ?></h3>
<p>
    <?php echo $t['res_pcd']; ?>
    <?php echo $auto_info['main']['pcd']; ?>,
    
    <?php echo $t['res_dia']; ?>
    <?php echo $auto_info['main']['dia']; ?>,
    
    <?php echo $t['res_fastener']; ?>
    <?php echo $auto_info['main']['fastener_type']; ?>:&nbsp;<?php echo $auto_info['main']['fastener_size']; ?>
</p>
<table id="bc_results_tires" class="bc_table_with_results">
    <tr>
        <td class="bc_right_border"><?php echo $t['res_manufacture_complect']; ?></td>
        <td><?php foreach ($auto_info['def_front_wheels'] as $size) echo $size['link']; ?></td>
    </tr><tr>
        <td class="bc_right_border"><?php echo $t['res_alt_complect']; ?></td>
        <td><?php foreach ($auto_info['alt_front_wheels'] as $size) echo $size['link']; ?></td>
    </tr><tr>
        <td class="bc_right_border"><?php echo $t['res_tuning']; ?></td>
        <td><?php foreach ($auto_info['tuning_low_profile_wheels'] as $size) echo $size['link']; ?></td>
    </tr>
</table>
<?php endif; ?>




<?php else: ?>




<p>
    <?php echo $t['res_tires_wheels_for_auto']; ?>
    <strong><?php echo $auto_info['main']['brand'].' '.$auto_info['main']['model'].' '.$auto_info['main']['year'].' '.$auto_info['main']['modification']; ?></strong><br />
    <?php echo $t['res_speed_index']; ?>
    <?php echo $auto_info['main']['speed_index']; ?>,

    <?php echo $t['res_load_index']; ?>
    <?php echo $auto_info['main']['load_index']; ?>,
    
    <?php echo $t['res_pcd']; ?>
    <?php echo $auto_info['main']['pcd']; ?>,

    <?php echo $t['res_dia']; ?>
    <?php echo $auto_info['main']['dia']; ?>,

    <?php echo $t['res_fastener']; ?>
    <?php echo $auto_info['main']['fastener_type']; ?>:&nbsp;<?php echo $auto_info['main']['fastener_size']; ?>
</p>


<?php if ($_REQUEST['results_mode'] == 'all' OR $_REQUEST['results_mode'] == 'only_tires'):?>
<div id="bc_results_tires" class="bc_block_main">
<h3><?php echo $t['res_tires']; ?></h3>
<div class="bc_block_complectation">
    <?php echo $t['res_manufacture_complect']; ?><br />
    <div class="bc_axle_name"><?php echo $t['res_front_axle']; ?></div>
    <?php foreach ($auto_info['def_front_tires'] as $size) echo $size['link']; ?>
    <br />
    <div class="bc_axle_name"><?php echo $t['res_rear_axle']; ?></div>
    <?php foreach ($auto_info['def_rear_tires'] as $size) echo $size['link']; ?>
</div>

<div class="bc_block_complectation">
    <?php echo $t['res_alt_complect']; ?><br />
    <div class="bc_axle_name"><?php echo $t['res_front_axle']; ?></div>
    <?php foreach ($auto_info['alt_front_tires'] as $size) echo $size['link']; ?>
    <br />
    <div class="bc_axle_name"><?php echo $t['res_rear_axle']; ?></div>
    <?php foreach ($auto_info['alt_rear_tires'] as $size) echo $size['link']; ?>
</div>

<div class="bc_block_complectation">
    <?php echo $t['res_tuning_diff_width']; ?><br />
    <div style="margin-left: 30px;">
        <?php echo $t['res_front_axle']; ?>    <?php echo $t['res_rear_axle']; ?><br />
        <?php foreach ($auto_info['tuning_different_size_tires'] as $size) echo $size['front']['link'].$size['rear']['link'].'<br />'; ?>
    </div>
</div>

<div class="bc_block_complectation">
    <?php echo $t['res_tuning_low_tires']; ?><br />
    <div class="bc_axle_name"><?php echo $t['res_both_axles']; ?></div>
    <?php foreach ($auto_info['tuning_low_profile_tires'] as $size) echo $size['link']; ?>
</div>
</div>
<?php endif; ?>



<?php if ($_REQUEST['results_mode'] == 'all' OR $_REQUEST['results_mode'] == 'only_wheels'):?>
<div id="bc_results_wheels" class="bc_block_main">
<h3><?php echo $t['res_wheels']; ?></h3>
<div class="bc_block_complectation">
    <?php echo $t['res_manufacture_complect']; ?><br />
    <div class="bc_axle_name"><?php echo $t['res_front_axle']; ?></div>
    <?php foreach ($auto_info['def_front_wheels'] as $size) echo $size['link']; ?>
    <br />
    <div class="bc_axle_name"><?php echo $t['res_rear_axle']; ?></div>
    <?php foreach ($auto_info['def_rear_wheels'] as $size) echo $size['link']; ?>
</div>

<div class="bc_block_complectation">
    <?php echo $t['res_alt_complect']; ?><br />
    <div class="bc_axle_name"><?php echo $t['res_front_axle']; ?></div>
    <?php foreach ($auto_info['alt_front_wheels'] as $size) echo $size['link']; ?>
    <br />
    <div class="bc_axle_name"><?php echo $t['res_rear_axle']; ?></div>
    <?php foreach ($auto_info['alt_rear_wheels'] as $size) echo $size['link']; ?>
</div>

<div class="bc_block_complectation">
    <?php echo $t['res_tuning_diff_width']; ?><br />
    <div style="margin-left: 30px;">
        <?php echo $t['res_front_axle']; ?>    <?php echo $t['res_rear_axle']; ?><br />
        <?php foreach ($auto_info['tuning_different_size_wheels'] as $size) echo $size['front']['link'].$size['rear']['link'].'<br />'; ?>
    </div>
</div>

<div class="bc_block_complectation">
    <?php echo $t['res_tuning_low_tires']; ?><br />
    <div class="bc_axle_name"><?php echo $t['res_both_axles']; ?></div>
    <?php foreach ($auto_info['tuning_low_profile_wheels'] as $size) echo $size['link']; ?>
</div>
</div>
<?php endif; ?>
<div style="clear: both;"></div>
<?php endif; ?>
