<?php

/*
 * Coba.php, Mar 31, 2015 9:32:00 PM    
 * 
 * Andedi Tarmadi
 * 
 * 
 * ----------------
 * Tumbas Wiralodra
 * Email : andedi.foss@gmail.com
 * 087829986468
 */

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Dashboard extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
  }

  function index() {
    $data['title'] = 'Dashboard';
    $data['content'] = 'dashboard/index';
    $data['month_list'] = $this->global_model->get_month();
    $data['year_list'] = $this->global_model->get_year();
    $data['month_now'] = date('m');
    $data['year_now'] = date('Y');

    $this->_generate_view($data);
  }

  public function get_cash_flow() {
    if ($this->input->is_ajax_request()) {
      $this->load->model('accounting/journals_model');
      
      $rows = $this->journals_model->get_cash_flow($this->input->get('month'), $this->input->get('year'));
      $debit_temp = array();
      foreach ($rows as $row) {
        $debit_temp[$row->day] = array($row->day, (int)$row->debit);
      }
      
      $credit_temp = array();
      foreach ($rows as $row) {
        $credit_temp[$row->day] = array($row->day, (int)$row->credit);
      }
      
      $debit = array();
      $credit= array();
      for ($i=1; $i <=30; $i++) {
        if (in_array($i, $debit_temp)) {
          
        } else {
          $debit[] = array($i, 0);
        }
        
        if (in_array($i, $credit_temp)) {
          
        } else {
          $credit[] = array($i, 0);
        }
        
      }
      
      $cash_flow = array(
          'debit' => $debit,
          'credit' => $credit
      );
      echo json_encode($cash_flow);
    } else {
      echo 'Forbidden access!';
    }
  }

}