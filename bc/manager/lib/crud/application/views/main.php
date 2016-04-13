<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}

.head_menu a { 
    color: #818286;
}
.head_menu span {
    color: #bbb000;
}
.head_menu {
    margin-left: 20px;
    margin-bottom: 10px;
}
.head_menu .active {
    color: #000000;
}
</style>
</head>
<body>
<div class="head_menu">
    Авто:
    <a href="<?php echo site_url('main/bc_tires_autos'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_autos')?'active':''); ?>">АВТО</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_auto_type_vehicles_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_auto_type_vehicles_dict')?'active':''); ?>">Типы транспорта</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_auto_brands_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_auto_brands_dict')?'active':''); ?>">Бренды</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_auto_models_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_auto_models_dict')?'active':''); ?>">Модели</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_auto_modifications_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_auto_modifications_dict')?'active':''); ?>">Модификации</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_auto_years_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_auto_years_dict')?'active':''); ?>">Года</a><br />

    Оси:
    <a href="<?php echo site_url('main/bc_tires_def_front_tires'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_def_front_tires')?'active':''); ?>">Шины завод. перед.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_def_rear_tires'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_def_rear_tires')?'active':''); ?>">Шины завод. зад.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_alt_front_tires'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_alt_front_tires')?'active':''); ?>">Шины альт. перед.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_alt_rear_tires'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_alt_rear_tires')?'active':''); ?>">Шины альт. зад.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_def_front_wheels'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_def_front_wheels')?'active':''); ?>">Диски завод. перед.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_def_rear_wheels'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_def_rear_wheels')?'active':''); ?>">Диски завод. зад.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_alt_front_wheels'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_alt_front_wheels')?'active':''); ?>">Диски альт. перед.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_alt_rear_wheels'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_alt_rear_wheels')?'active':''); ?>">Диски альт. зад.</a><br />

    Шины:
    <a href="<?php echo site_url('main/bc_tires_tire_sizes_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_tire_sizes_dict')?'active':''); ?>">РАЗМЕРЫ ШИН</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_tire_widths_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_tire_widths_dict')?'active':''); ?>">Ширины</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_tire_heights_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_tire_heights_dict')?'active':''); ?>">Высоты</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_tire_diameters_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_tire_diameters_dict')?'active':''); ?>">Диаметры</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_tire_load_indexes_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_tire_load_indexes_dict')?'active':''); ?>">Индексы нагрузки</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_tire_speed_indexes_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_tire_speed_indexes_dict')?'active':''); ?>">Индексы скорости</a><br />

    Диски:
    <a href="<?php echo site_url('main/bc_tires_wheel_sizes_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_sizes_dict')?'active':''); ?>">РАЗМЕРЫ ДИСКОВ</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_rims_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_rims_dict')?'active':''); ?>">Ширины</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_diameters_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_diameters_dict')?'active':''); ?>">Диаметры</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_dias_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_dias_dict')?'active':''); ?>">Внутр. диам.</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_ets_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_ets_dict')?'active':''); ?>">ETs</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_fastener_sizes_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_fastener_sizes_dict')?'active':''); ?>">Fastener sizes</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_fastener_types_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_fastener_types_dict')?'active':''); ?>">Fastener types</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_pcds_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_pcds_dict')?'active':''); ?>">PCDs</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_pcd_length_of_diameters_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_pcd_length_of_diameters_dict')?'active':''); ?>">PCD длина</a> <span>|</span>
    <a href="<?php echo site_url('main/bc_tires_wheel_pcd_number_of_studs_dict'); ?>" class="<?php echo (($_SERVER['PATH_INFO']=='/main/bc_tires_wheel_pcd_number_of_studs_dict')?'active':''); ?>">PCD отверстия</a>
</div>
    <?php echo $output; ?>
</body>
</html>
