<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct(){
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
    }


    public function bc_tires_autos(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_autos');
        $crud->columns('id','id_type_vehicle','id_brand','id_model','id_modification','id_year','id_wheel_pcd','id_wheel_dia','id_wheel_fastener_size','id_wheel_fastener_type','id_tire_speed_index','id_tire_load_index');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_type_vehicle','bc_tires_auto_type_vehicles_dict','value');
        $crud->set_relation('id_brand','bc_tires_auto_brands_dict','value');
        $crud->set_relation('id_model','bc_tires_auto_models_dict','value');
        $crud->set_relation('id_modification','bc_tires_auto_modifications_dict','value');
        $crud->set_relation('id_year','bc_tires_auto_years_dict','value');
        // PCD состоит из двух id указывающих на кол-во болтов и диаметр
        //$crud->set_relation('id_wheel_pcd','bc_tires_wheel_pcds_dict','value');
        $crud->set_relation('id_wheel_dia','bc_tires_wheel_dias_dict','value');
        $crud->set_relation('id_wheel_fastener_size','bc_tires_wheel_fastener_sizes_dict','value');
        $crud->set_relation('id_wheel_fastener_type','bc_tires_wheel_fastener_types_dict','value');
        $crud->set_relation('id_tire_speed_index','bc_tires_tire_speed_indexes_dict','value');
        $crud->set_relation('id_tire_load_index','bc_tires_tire_load_indexes_dict','value');
        $crud->display_as('id','ИН');
        $crud->display_as('id_type_vehicle','Тип ТС');
        $crud->display_as('id_brand','Бренд');
        $crud->display_as('id_model','Модель');
        $crud->display_as('id_modification','Модификация');
        $crud->display_as('id_year','Год');
        $crud->display_as('id_wheel_pcd','PCD');
        $crud->display_as('id_wheel_dia','Dia');
        $crud->display_as('id_wheel_fastener_size','Размер крепления');
        $crud->display_as('id_wheel_fastener_type','Тип крепления');
        $crud->display_as('id_tire_speed_index','Индекс скорости');
        $crud->display_as('id_tire_load_index','Индекс нагрузки');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_auto_brands_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_auto_brands_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_auto_models_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_auto_models_dict');
        $crud->columns('id','value');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_auto_modifications_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_auto_modifications_dict');
        $crud->columns('id','value');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_auto_type_vehicles_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_auto_type_vehicles_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_auto_years_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_auto_years_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_tire_diameters_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_tire_diameters_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_tire_heights_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_tire_heights_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_tire_load_indexes_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_tire_load_indexes_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_tire_sizes_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_tire_sizes_dict');
        $crud->columns('id','id_width', 'id_height', 'id_diameter');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->set_relation('id_width','bc_tires_tire_widths_dict','value');
        $crud->set_relation('id_height','bc_tires_tire_heights_dict','value');
        $crud->set_relation('id_diameter','bc_tires_tire_diameters_dict','value');
        $crud->display_as('id','ИН');
        $crud->display_as('id_width','Ширина');
        $crud->display_as('id_height','Высота');
        $crud->display_as('id_diameter','Диаметр');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_tire_speed_indexes_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_tire_speed_indexes_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_tire_widths_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_tire_widths_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_diameters_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_diameters_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_dias_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_dias_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_ets_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_ets_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_fastener_sizes_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_fastener_sizes_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_fastener_types_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_fastener_types_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_pcds_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_pcds_dict');
        $crud->columns('id','id_pcd_length_of_diameter', 'id_pcd_number_of_stud');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->set_relation('id_pcd_length_of_diameter','bc_tires_wheel_pcd_length_of_diameters_dict','value');
        $crud->set_relation('id_pcd_number_of_stud','bc_tires_wheel_pcd_number_of_studs_dict','value');
        $crud->display_as('id','ИН');
        $crud->display_as('id_pcd_length_of_diameter','ИН длины диаметра');
        $crud->display_as('id_pcd_number_of_stud','ИН числа отверстий');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_pcd_length_of_diameters_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_pcd_length_of_diameters_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_pcd_number_of_studs_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_pcd_number_of_studs_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_rims_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_rims_dict');
        $crud->columns('id','value');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->display_as('id','ИН');
        $crud->display_as('value','Значение');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_wheel_sizes_dict(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_wheel_sizes_dict');
        $crud->columns('id','id_rim','id_diameter','id_et');
        $crud->set_theme('datatables');
        $crud->set_language('russian');
        $crud->set_relation('id_rim','bc_tires_wheel_rims_dict','value');
        $crud->set_relation('id_diameter','bc_tires_wheel_diameters_dict','value');
        $crud->set_relation('id_et','bc_tires_wheel_ets_dict','value');
        $crud->display_as('id','ИН');
        $crud->display_as('id_rim','Ширина');
        $crud->display_as('id_diameter','Диаметр');
        $crud->display_as('id_et','Вылет');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_alt_front_tires(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_alt_front_tires');
        $crud->columns('id','id_auto','id_tire_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_tire_size','bc_tires_tire_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_tire_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_alt_front_wheels(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_alt_front_wheels');
        $crud->columns('id','id_auto','id_wheel_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_wheel_size','bc_tires_wheel_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_wheel_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_alt_rear_tires(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_alt_rear_tires');
        $crud->columns('id','id_auto','id_tire_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_tire_size','bc_tires_tire_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_tire_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_alt_rear_wheels(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_alt_rear_wheels');
        $crud->columns('id','id_auto','id_wheel_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_wheel_size','bc_tires_wheel_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_wheel_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_def_front_tires(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_def_front_tires');
        $crud->columns('id','id_auto','id_tire_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_tire_size','bc_tires_tire_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_tire_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_def_front_wheels(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_def_front_wheels');
        $crud->columns('id','id_auto','id_wheel_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_wheel_size','bc_tires_wheel_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_wheel_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_def_rear_tires(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_def_rear_tires');
        $crud->columns('id','id_auto','id_tire_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_tire_size','bc_tires_tire_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_tire_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }

    public function bc_tires_def_rear_wheels(){
        $crud = new grocery_CRUD();
        $crud->set_table('bc_tires_def_rear_wheels');
        $crud->columns('id','id_auto','id_wheel_size');
        $crud->set_theme('flexigrid');
        $crud->set_language('russian');
        $crud->set_relation('id_auto','bc_tires_autos','id');
        $crud->set_relation('id_wheel_size','bc_tires_wheel_sizes_dict','id');
        $crud->display_as('id','ИН');
        $crud->display_as('id_auto','Авто');
        $crud->display_as('id_wheel_size','Размер');
        $output = $crud->render();
        $this->load->view('main.php',$output);
    }
}
?>
