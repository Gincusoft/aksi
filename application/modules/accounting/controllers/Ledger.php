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
class Ledger extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('ledger_model');
  }

  public function index() {
    $this->load->model('account_model');
    $list = $this->account_model->get_all();
    $data['account_list'] = array('0' => ' - Semua Rekening - ');
    foreach ($list as $value) {
      $data['account_list'][$value->account_id] = "{$value->account_no} | {$value->account_name}";
    }

    $data['title'] = 'Data Buku Besar';
    $data['content'] = 'ledger/list';
    $data['month_list'] = $this->global_model->get_month();
    $data['year_list'] = $this->global_model->get_year();
    $data['month_now'] = date('m');
    $data['year_now'] = date('Y');

    $this->_generate_view($data);
  }

  public function get_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $data_post = $this->input->post();
//      $search = $data_post['search'];
      $limit = $data_post['length'];
      $offset = $data_post['start'];

      $columns = $data_post['columns'];
      $order_arr = $data_post['order'];
      $order_direction = strtoupper($order_arr[0]['dir']);
      $order_column = $order_arr[0]['column'];
      $order_column = $columns[$order_column]['data'];
      $data = $this->ledger_model->get_list($data_post, $order_column, $order_direction, $limit, $offset);
      $json['data'] = array();
      $i = $offset + 1;

      $saldo = 0;
      $current_account_id = 0;
      foreach ($data['rows'] as $row) {

        if ($current_account_id != $row->account_id) {
          $saldo = 0;
        }
        $current_account_id = $row->account_id;

        $row->no = $i++;
        $row->journals_date = sql_to_human($row->journals_date);

        $row->debit_txt = format_idr_currency($row->debit);
        $row->credit_txt = format_idr_currency($row->credit);

        $row->saldo_debit = '0';
        $row->saldo_credit = '0';

        $saldo = $saldo + $row->debit - $row->credit;
        if ($saldo > 0) {
          $row->saldo_debit = format_idr_currency($saldo);
        } else if ($saldo < 0) {
          $row->saldo_credit = format_idr_currency(abs($saldo));
        }

        array_push($json['data'], $row);
      }

      $json['recordsTotal'] = $data['total'];
      $json['recordsFiltered'] = $data['total'];
      $json['draw'] = $data_post['draw'];

      echo json_encode($json);
    } else {
      echo 'Forbidden access!';
    }
  }

  public function print_report() {
    //    error_reporting(0);
    $label_account = '';
    if ($this->input->get('account_id') == '0') { //all acount
      $view = 'ledger/print_all';
      $rows = $this->ledger_model->get_report($this->input->get('month'), $this->input->get('year'));
    } else { //per account
      $view = 'ledger/print';
      $rows = $this->ledger_model->get_report($this->input->get('month'), $this->input->get('year'), $this->input->get('account_id'));
      $label_account = "{$rows[0]->account_no} {$rows[0]->account_name}";
    }
    
    if (count($rows) == 0) {
      echo "<script>alert('Tidak ada data!');close();</script>";
      exit();
    }
    
    $saldo = 0;
    $data['rows'] = array();
    $i = 1;
    $current_account_id = 0;
    foreach ($rows as $row) {

      if ($current_account_id != $row->account_id) {
        $i = 1;
        $saldo = 0;
      }
      $current_account_id = $row->account_id;

      $row->no = $i++;
      $row->journals_date = sql_to_human($row->journals_date);

      $row->debit_txt = format_idr_currency($row->debit);
      $row->credit_txt = format_idr_currency($row->credit);

      $row->saldo_debit = '0';
      $row->saldo_credit = '0';

      $saldo = $saldo + $row->debit - $row->credit;
      if ($saldo > 0) {
        $row->saldo_debit = format_idr_currency($saldo);
      } else if ($saldo < 0) {
        $row->saldo_credit = format_idr_currency(abs($saldo));
      }

      array_push($data['rows'], $row);
    }

    $data['company_name'] = $this->_get_company_name();
    $data['company_address'] = $this->_get_company_address();
    $month = month_indo($this->input->get('month'));
    $data['period'] = $month . ' ' . $this->input->get('year');
    $html = $this->load->view($view, $data, true);
    
    $this->load->library('tumbaspdf');
    $title = "Buku Besar {$label_account} {$data['period']}";
    $this->tumbaspdf->set_author("{$data['company_name']} - $this->_user_name");
    $this->tumbaspdf->generate_pdf($html, $title);
  }

}
