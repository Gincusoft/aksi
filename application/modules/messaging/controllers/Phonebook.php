<?php

//error_reporting(0);
/*
  Document   : Journals
  Created on : Jun 25, 2015, 8:17:48 PM
  Author     : tumbas
  Description:
  Purpose of the Class follows.
 */

/**
 * Description of Journals
 *
 * @author tumbas
 */
class Phonebook extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model(array('phonebook_model'));
  }

  private function _set_rules() {
    //Validate
    $config = array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'trim|required|alpha_numeric_spaces'
        ),
        array(
            'field' => 'phone_number',
            'label' => 'Nomor Telepon',
            'rules' => 'trim|required|is_natural_no_zero'
        ),
        array(
            'field' => 'phonebook_group',
            'label' => 'Grup',
            'rules' => 'trim|alpha_numeric_spaces'
        ),
    );

    $this->form_validation->set_rules($config);
//    $this->form_validation->set_error_delimiters('<div><i class="fa fa-square-o"></i> ', '</div>');
  }

  public function index() {
    $data['title'] = 'Data Buku Telepon';
    $data['content'] = 'phonebook/list';

    $this->_generate_view($data);
  }

  public function get_list() {
    if ($this->input->is_ajax_request() && $this->input->get()) {
      $data_post = $this->input->get();
      $search = $data_post['search'];
      $limit = $data_post['length'];
      $offset = $data_post['start'];

      $columns = $data_post['columns'];
      $order_arr = $data_post['order'];
      $order_direction = strtoupper($order_arr[0]['dir']);
      $order_column = $order_arr[0]['column'];
      $order_column = $columns[$order_column]['data'];
      $data = $this->phonebook_model->get_list($search, $order_column, $order_direction, $limit, $offset);
      $json['data'] = array();
      $i = $offset + 1;

      $this->load->helper('text_helper');
      foreach ($data['rows'] as $row) {
        $phonebook_id = encode($row->phonebook_id);
        $row->no = $i++;
        $edit_url = base_url("messaging/phonebook/edit/{$row->phonebook_id}");
        $row->action = "<button title='Edit' class='btn btn-xs btn-success edit_btn' onclick='doEdit(\"{$edit_url}\")'><i class='fa fa-pencil'></i></button>
          <button title='Hapus' class='btn btn-xs btn-default' onclick='doDelete(\"{$row->phonebook_id}\", \"$row->name\")'><i class='fa fa-remove'></i></button>";

        array_push($json['data'], $row);
      }

      $json['recordsTotal'] = $data['total'];
      $json['recordsFiltered'] = $data['total'];
      $json['draw'] = $data_post['draw'];

      echo json_encode($json);
    } else {
      echo '{^_^) Gincusoft.';
    }
  }

  public function add() {
    if ($this->input->is_ajax_request()) {
      if ($this->input->post() == FALSE) {
        $this->load->view("messaging/phonebook/add");
      } else { //SAVING DATA 
        $this->_set_rules();
        if ($this->form_validation->run() == TRUE) {
          $query = $this->phonebook_model->add();
          if ($query) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil menambah buku telepon.<br>Tambah lagi?'
            );
          } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal menambah buku telepon, silahkan coba lagi atau hubungi administrator.'
            );
          }
        } else {
          $response = array(
              'status' => 'warning',
              'message' => validation_errors()
          );
        }

        echo json_encode($response);
      }
    } else {
      echo '{^_^) Gincusoft.';
    }
  }

  public function detail($param = '') {
    if ($this->input->is_ajax_request() == TRUE) {
      $data['title'] = decode($param);
      $this->phonebook_model->set_read(decode($param));
      $data['sms'] = $this->phonebook_model->get_sms_by_phone_number(decode($param));
//      die($this->db->last_query());
      $this->load->view('phonebook/detail', $data);
    } else {
      
    }
  }

  public function get_phonebook_group() {
    if ($this->input->is_ajax_request()) {
      $result = $this->phonebook_model->get_phonebook_group_all();
      $phonebook_group = array();
      foreach ($result as $value) {
        $phonebook_group[] = $value->phonebook_group_name;
      }
      
      echo json_encode($phonebook_group);
    } else {
      echo '{^_^) Gincusoft.';
    }
  }

  public function delete() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $query = $this->phonebook_model->delete(decode($this->input->post('phonebook_id')));
      if ($query) {
        $response = array(
            'status' => 'success',
            'message' => "Berhasil menghapus pesan."
        );
      } else {
        $response = array(
            'status' => 'error',
            'message' => "Gagal menghapus pesan."
        );
      }

      echo json_encode($response);
    } else {
      echo '{^_^) Gincusoft.';
    }
  }

}

?>