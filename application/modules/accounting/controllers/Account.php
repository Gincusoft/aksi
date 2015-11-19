<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account
 *
 * @author tumbas
 */
class Account extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('account_model');
  }

  private function _set_rules() {
    $config = array(
        array(
            'field' => 'account_no',
            'label' => 'No Rekening',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'account_name',
            'label' => 'Nama Rekening',
            'rules' => 'trim|required'
        ),
    );

    $this->form_validation->set_rules($config);
  }

  public function index() {
    $data['title'] = 'Data Rekening';
    $data['content'] = 'account/list';

    $this->_generate_view($data);
  }

  public function get_list() {
    if ($this->input->is_ajax_request() && $this->input->get()) {
      $search = $this->input->get('search');
      $limit = $this->input->get('length');
      $offset = $this->input->get('start');

      $columns = $this->input->get('columns');
      $order_arr = $this->input->get('order');
      $order_direction = strtoupper($order_arr[0]['dir']);
      $order_column = $order_arr[0]['column'];
      $order_column = $columns[$order_column]['data'];
      $data = $this->account_model->get_list(trim($search), $order_column, $order_direction, $limit, $offset);
      $json['data'] = array();
      $i = $offset + 1;

      foreach ($data['rows'] as $row) {
        $row->no = $i++;
        $row->account_id = encode($row->account_id);
        $edit_url = base_url("accounting/account/edit/{$row->account_id}");
        $row->action = "<button title='Edit' class='btn btn-xs btn-success edit_btn' onclick='doEdit(\"{$edit_url}\")'><i class='fa fa-pencil'></i></button>
          <button title='Hapus' class='btn btn-xs btn-default' onclick='doDelete(\"{$row->account_id}\", \"$row->account_name\")'><i class='fa fa-remove'></i></button>";
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

  public function add() {
    if ($this->input->is_ajax_request()) {
      if ($this->input->post() == FALSE) {
        $this->load->view("account/add");
      } else { //SAVING DATA 
        $this->_set_rules();
        if ($this->form_validation->run() == TRUE) {
          $data_account = array(
              'account_name' => $this->input->post('account_name'),
              'account_no' => $this->input->post('account_no'),
          );
          $query = $this->global_model->save_data('t_mtr_account', $data_account);
          if ($query) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil menambah rekening.<br>Tambah lagi?'
            );
          } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal menambah rekening, silahkan coba lagi atau hubungi administrator.'
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

  public function edit() {
    if ($this->input->is_ajax_request()) {
      if ($this->input->post() == FALSE) {
        $id = decode($this->uri->segment(4));
        $data = $this->account_model->get_by_pk($id);
        $data->account_id = $this->uri->segment(4);

        $this->load->view("account/edit", $data);
      } else { //SAVING DATA HERE
        $this->form_validation->set_rules('account_id', 'ID', 'trim|required');
        $this->_set_rules();
        if ($this->form_validation->run() == TRUE) {
          $data_account = array(
              'account_id' => decode($this->input->post('account_id')),
              'account_no' => $this->input->post('account_no'),
              'account_name' => $this->input->post('account_name'),
          );
          $query = $this->global_model->save_data('t_mtr_account', $data_account, 'account_id');
          if ($query) {
            $response = array(
                'status' => 'success',
                'message' => "Berhasil mengedit rekening \"{$data_account['account_name']}\"."
            );
          } else {
            $response = array(
                'status' => 'error',
                'message' => "Gagal mengedit rekening \"{$data_account['account_name']}\"."
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
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $query = $this->global_model->soft_delete('t_mtr_account', decode($this->input->post('account_id')));
      if ($query) {
        $response = array(
            'status' => 'success',
            'message' => "Berhasil menghapus rekening <b>\"{$this->input->post('account_name')}\"</b>."
        );
      } else {
        $response = array(
            'status' => 'error',
            'message' => "Gagal menghapus rekening <b>\"{$this->input->post('account_name')}\"</b>."
        );
      }

      echo json_encode($response);
    } else {
      echo 'Forbidden access!';
    }
  }

  public function is_unique() {
    if ($this->input->is_ajax_request() && $this->input->get()) {
      $this->db->where('account_no', $this->input->get('account_no'));
      $this->db->where('active', 1);
      if ($this->input->get('account_id')) { //for edit
        $this->db->where('account_id <>', decode($this->input->get('account_id')));
      }
      $query = $this->db->get('t_mtr_account')->row();

      if ($query == null) {
        echo 'true';
      } else {
        echo 'false';
      }
    } else {
      echo 'Forbidden access!';
    }
  }

//  public function insert_dummy() {
//    for ($index = 1; $index <= 100; $index++) {
//      $r = rand(1000000000, 9999999999);
//      $data = array(
//          'account_name' => 'Rekening ' . $index,
//          'account_address' => 'Jalan Rekening ' . $index,
//          'account_phone' => '08' . $r
//      );
//      $this->account_model->add_account($data);
//    }
//  }
}
