<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ledger
 *
 * @author tumbas
 */
class Trial_balance extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('trial_balance_model');
  }

  public function index() {
    $data['month_list'] = $this->global_model->get_month();
    $data['year_list'] = $this->global_model->get_year();
    $data['month_now'] = date('m');
    $data['year_now'] = date('Y');
    $data['title'] = 'Data Neraca Saldo';
    $data['content'] = 'trial_balance/list';

    $this->_generate_view($data);
  }

  public function get_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $data = $this->trial_balance_model->get_list($this->input->post());
      $json['data'] = array();

      $i = 1;
      foreach ($data as $row) {
        $row->no = $i++;
        $row->debit_txt = '0';
        $row->credit_txt = '0';
        $saldo = $row->debit - $row->credit;
        if ($saldo > 0) {
          $row->debit_txt = format_idr_currency($saldo);
          $row->debit = $saldo;
          $row->credit = 0;
        } else if ($saldo < 0) {
          $row->credit_txt = format_idr_currency(abs($saldo));
          $row->debit = 0;
          $row->credit = abs($saldo);
        } else {
          $row->debit = 0;
          $row->credit = 0;
        }
        array_push($json['data'], $row);
      }

      $json['draw'] = $this->input->post('draw');

      echo json_encode($json);
    } else {
      echo 'Forbidden access!';
    }
  }

  public function print_report() {
//    error_reporting(0);
    $rows = $this->trial_balance_model->get_list($this->input->get());

    if (count($rows) == 0) {
      echo "<script>alert('Tidak ada data!');close();</script>";
      exit();
    }

    $data['rows'] = array();
    $i = 1;
    foreach ($rows as $row) {
      $row->no = $i++;
        $row->debit_txt = '0';
        $row->credit_txt = '0';
        $saldo = $row->debit - $row->credit;
        if ($saldo > 0) {
          $row->debit_txt = format_idr_currency($saldo);
          $row->debit = $saldo;
          $row->credit = 0;
        } else if ($saldo < 0) {
          $row->credit_txt = format_idr_currency(abs($saldo));
          $row->debit = 0;
          $row->credit = abs($saldo);
        } else {
          $row->debit = 0;
          $row->credit = 0;
        }

      array_push($data['rows'], $row);
    }

    $data['company_name'] = $this->_get_company_name();
    $data['company_address'] = $this->_get_company_address();
    $month = month_indo($this->input->get('month'));
    $data['period'] = $month . ' ' . $this->input->get('year');
    $html = $this->load->view('trial_balance/print', $data, true);

    $this->load->library('tumbaspdf');
    $title = "Neraca Saldo {$data['period']}";
    $this->tumbaspdf->set_author("{$data['company_name']} - $this->_user_name");
    $this->tumbaspdf->generate_pdf($html, $title);
  }

}
