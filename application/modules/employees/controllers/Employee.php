<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author tumbas
 */
class Employee extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('employee_model');
  }

  private function _set_rules() {
    $config = array(
        array(
            'field' => 'employee_name',
            'label' => 'Nama Lengkap',
            'rules' => 'trim|required'
        ),
    );

    $this->form_validation->set_rules($config);
  }

  public function index() {
    $data['title'] = 'Data Karyawan';
    $data['content'] = 'employee/list';

    $this->_generate_view($data);
  }

  public function get_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $search = $this->input->post('search');
      $limit = $this->input->post('length');
      $offset = $this->input->post('start');

      $columns = $this->input->post('columns');
      $order_arr = $this->input->post('order');
      $order_direction = strtoupper($order_arr[0]['dir']);
      $order_column = $order_arr[0]['column'];
      $order_column = $columns[$order_column]['data'];
      $data = $this->employee_model->get_list(trim($search), $order_column, $order_direction, $limit, $offset);
      $json['data'] = array();
      $i = $offset + 1;

      foreach ($data['rows'] as $row) {
        $row->no = $i++;
        $row->photo_thumb = "<img src='".  base_url("assets/images/employee/thumb/{$row->photo_thumb}")."'>";
        $row->employee_id = encode($row->employee_id);
        $row->birth = $row->city_name . ', ' . sql_to_human($row->birth_date);
        $edit_url = base_url("employee/edit/{$row->employee_id}");
        $row->action = "<button title='Edit' class='btn btn-xs btn-success edit_btn' onclick='doEdit(\"{$edit_url}\")'><i class='fa fa-pencil'></i></button>
          <button title='Hapus' class='btn btn-xs btn-default' onclick='doDelete(\"{$row->employee_id}\", \"$row->employee_name\")'><i class='fa fa-remove'></i></button>";
        $row->employee_name = "<a href='#' onclick=\"viewData('{$row->employee_id}')\">{$row->employee_name}</a>";

        array_push($json['data'], $row);
      }

      $json['recordsTotal'] = $data['total'];
      $json['recordsFiltered'] = $data['total'];
      $json['draw'] = $this->input->post('draw');

      echo json_encode($json);
    } else {
      echo 'Forbidden access!';
    }
  }

  private function _list_data() {
    $this->load->model(array('city_model', 'division_model', 'position_model'));

    $data['list_gender'] = array('' => '- Pilih -',);
    $rows = $this->global_model->get_lookup('gender')->result();
    foreach ($rows as $row) {
      $data['list_gender'][$row->lookup_value] = $row->lookup_label;
    }

    $data['list_city'] = array('' => '- Pilih -',);
    $rows = $this->city_model->get_all();
    foreach ($rows as $row) {
      $data['list_city'][$row->city_id] = $row->city_name;
    }

    $data['list_division'] = array('' => '- Pilih -',);
    $rows = $this->division_model->get_all();
    foreach ($rows as $row) {
      $data['list_division'][$row->division_id] = $row->division_name;
    }

    $data['list_position'] = array('' => '- Pilih -',);
    $rows = $this->position_model->get_all();
    foreach ($rows as $row) {
      $data['list_position'][$row->position_id] = $row->position_name;
    }

    $data['list_day'] = array();
    for ($i = 1; $i <= 31; $i++) {
      if ($i <= 9)
        $i = "0{$i}";
      $data['list_day']["{$i}"] = "{$i}";
    }

    $data['list_month'] = array();
    for ($i = 1; $i <= 12; $i++) {
      if ($i <= 9)
        $i = "0{$i}";
      $data['list_month']["{$i}"] = "{$i}";
    }

    $data['list_year'] = array();
    for ($i = 1900; $i <= intval(date('Y')); $i++) {
      $data['list_year']["{$i}"] = "{$i}";
    }

    $data['list_religion'] = array('' => '- Pilih -',);
    $rows = $this->global_model->get_lookup('religion')->result();
    foreach ($rows as $row) {
      $data['list_religion'][$row->lookup_value] = $row->lookup_label;
    }

    $data['list_marriage_status'] = array('' => '- Pilih -',);
    $rows = $this->global_model->get_lookup('marriage_status')->result();
    foreach ($rows as $row) {
      $data['list_marriage_status'][$row->lookup_value] = $row->lookup_label;
    }

    $data['list_education'] = array('' => '- Pilih -',);
    $rows = $this->global_model->get_lookup('education')->result();
    foreach ($rows as $row) {
      $data['list_education'][$row->lookup_value] = $row->lookup_label;
    }

    $data['list_employee_status'] = array('' => '- Pilih -',);
    $rows = $this->global_model->get_lookup('employee_status')->result();
    foreach ($rows as $row) {
      $data['list_employee_status'][$row->lookup_value] = $row->lookup_label;
    }

    return $data;
  }

  private function _upload_file($source = 'userfile', $file_name = '') {
    //config upload
    $config['upload_path'] = './assets/images/employee';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['file_ext_tolower'] = TRUE;
    $config['max_size'] = '1024';
//    $config['max_width'] = '1024';
//    $config['max_height'] = '768';
    $config['file_name'] = $file_name;
    $this->load->library('upload', $config);

    if ($_FILES[$source]['name'] != '') {
      if ($this->upload->do_upload($source)) {
        $file_data = $this->upload->data();

        $config_img['image_library'] = 'GD2';
        $config_img['source_image'] = $file_data['full_path'];
        $config_img['maintain_ratio'] = TRUE;
        $config_img['quality'] = '86%';
        $config_img['width'] = 200;
        $config_img['height'] = 200;

        $this->load->library('image_lib', $config_img);

        if ($this->image_lib->resize()) {
          $thumb_name = $file_name . '_thumb' . $file_data['file_ext'];
          $config_img['create_thumb'] = TRUE;
          $config_img['new_image'] = "./assets/images/employee/thumb/{$thumb_name}";
          $config_img['width'] = 48;
          $config_img['height'] = 48;
          $this->image_lib->initialize($config_img);
          if ($this->image_lib->resize())
            $data['photo_thumb'] = $thumb_name;
        } else {
          $response['status'] = 'error';
          $response['message'] = $this->image_lib->display_errors();
          echo json_encode($response);
          exit();
        }

        $data['photo'] = $file_data['file_name'];
      } else {
        $result['status'] = 'error';
        $result['message'] = $this->upload->display_errors();

        echo json_encode($result);
        exit();
      }
    } else {
      $data['photo'] = NULL;
      $data['photo_thumb'] = NULL;
    }

    return $data;
  }

  public function is_unique() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $this->db->where('employee_no', $this->input->post('employee_no'));
      $this->db->where('active', 1);
      if ($this->input->post('employee_id')) { //for edit
        $this->db->where('employee_id <>', decode($this->input->post('employee_id')));
      }
      $query = $this->db->get('t_mtr_employee')->row();

      if ($query == null) {
        echo 'true';
      } else {
        echo 'false';
      }
    } else {
      echo 'Forbidden access!';
    }
  }

  public function add() {
    if ($this->input->is_ajax_request()) {
      if ($this->input->post() == FALSE) {
        $data = $this->_list_data();
        $this->load->view("employee/add", $data);
      } else { //SAVING DATA 
        $this->_set_rules();
        
        if ($_FILES['photo']['name'] != '') {
          $upload_file = $this->_upload_file('photo', $this->input->post('employee_name') . '-' . date('YmdHis'));
        } else {
          if ($this->input->post('gender_id') == 1) {
            $upload_file = array(
                'photo' => 'male.png',
                'photo_thumb' => 'male_thumb.png'
            );
          } else {
            $upload_file = array(
                'photo' => 'female.png',
                'photo_thumb' => 'female_thumb.png'
            );
          }
        }
        
        if ($this->form_validation->run() == TRUE) {
          $data_employee = array(
              'employee_name' => $this->input->post('employee_name'),
              'employee_no' => $this->input->post('employee_no'),
              'birth_place_id' => $this->input->post('birth_place_id'),
              'birth_date' => $this->input->post('year') . '-' . $this->input->post('month') . '-' . $this->input->post('day'),
              'gender_id' => $this->input->post('gender_id'),
              'marriage_status_id' => $this->input->post('marriage_status_id'),
              'phone' => $this->input->post('phone'),
              'address' => $this->input->post('address'),
              'start_date' => human_to_sql($this->input->post('start_date')),
              'status_id' => $this->input->post('status_id'),
              'division_id' => $this->input->post('division_id'),
              'position_id' => $this->input->post('birth_place_id'),
              'npwp' => $this->input->post('npwp'),
              'religion_id' => $this->input->post('religion_id'),
              'education_id' => $this->input->post('education_id'),
              'photo' => $upload_file['photo'],
              'photo_thumb' => $upload_file['photo_thumb']
          );
          $query = $this->global_model->save_data('t_mtr_employee', $data_employee);
          if ($query == TRUE) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil menambah karyawan.<br>Tambah lagi?'
            );
          } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal menambah karyawan, silahkan coba lagi atau hubungi administrator.'
            );
          }
        } else {
          $response = array(
              'status' => 'error',
              'message' => validation_errors()
          );
        }

        echo json_encode($response);
      }
    } else {
      echo 'Forbidden access!';
    }
  }

  public function delete() {
    
  }

  public function edit() {
    
  }
  
  public function view($param='') {
    if ($this->input->is_ajax_request() && $param !='') {
      $data = $this->employee_model->get_info(decode($param));
      $data->employee_id = encode($data->employee_id);
      $data->birth_date = sql_to_human($data->birth_date);
      $this->load->view('employee/view', $data);
    } else {
      echo 'Forbidden access!';
    }
  }
  
  public function view_job($param='') {
    if ($this->input->is_ajax_request() && $param !='') {
      $this->load->view('employee/view_job');
    } else {
      echo 'Forbidden access!';
    }
  }

}

?>