<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author tumbas
 */
class Main extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    if ($this->input->post() == FALSE) {
      if ($this->session->userdata('is_login') != 1) {
        $this->load->view('login');
      } else {
        redirect('dashboard');
      }
    } else {
      $this->load->model('user_model');

      $cek_user = $this->user_model->get_row(array(
          'user_name' => $this->input->post('user_name'),
      ));

      if ($cek_user == null) {
        $response = array(
            'status' => 'error',
            'field' => 'user_name',
            'message' => 'Nama pengguna belum terdaftar.'
        );

        echo json_encode($response);
        exit();
      }

      $row = $this->user_model->get_row(array(
          'user_name' => $this->input->post('user_name'),
          'password' => md5('91ncu50ft' . $this->input->post('password'))
      ));

      $response = array();
      if ($row != null) {
        $sess_data = array(
            'user_id' => $row->user_id,
            'user_name' => $row->user_name,
            'full_name' => $row->full_name,
            'is_login' => 1,
            'last_login' => $row->last_login
        );
        $this->session->set_userdata($sess_data);
        
        $this->session->set_flashdata('first_login', 1);

        $data = array(
            'user_id' => $row->user_id,
            'is_login' => 1,
            'last_login' => date('Y-m-d H:i:s')
        );
        $this->global_model->save_data('t_mtr_user', $data, 'user_id');

        $response = array(
            'status' => 'success',
            'message' => 'Berhasil masuk.'
        );
      } else {
        $response = array(
            'status' => 'error',
            'field' => 'password',
            'message' => 'Kata sandi tidak cocok.'
        );
      }

      echo json_encode($response);
    }
  }
  
  public function logout() {
    $this->session->sess_destroy();
    redirect('');
  }
  
  public function splash_screen() {
    $this->load->view('splash_screen');
  }

}

?>
