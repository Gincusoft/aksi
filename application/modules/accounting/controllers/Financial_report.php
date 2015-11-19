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
class Financial_report extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('financial_report_model');
  }

  public function index() {
    $this->load->model('financial_report_model');
    $data['title'] = 'Laporan Keuangan';
    $data['content'] = 'financial_report/list';

    $data['month_list'] = $this->global_model->get_month();
    $data['year_list'] = $this->global_model->get_year();
    $data['month_now'] = date('m');
    $data['year_now'] = date('Y');
    $data['loss_profit'] = $this->financial_report_model->get_loss_profit_list($data['month_now'], $data['year_now']);
//    $data['loss_profit_balance'] = $this->financial_report_model->get_loss_profit_balance($data['month_now'], $data['year_now']);
//    $data['loss_profit_label'] = ($data['loss_profit_balance'] > 0) ? 'Laba Bersih' : 'Rugi Bersih';
    $data['capital_changes'] = $this->financial_report_model->get_capital_changes_list($data['month_now'], $data['year_now']);
    $data['balance'] = $this->financial_report_model->get_balance_list($data['month_now'], $data['year_now']);

    $this->_generate_view($data);
  }

  public function get_loss_profit_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
//      $data_post = $this->input->post();
//      $search = $data_post['search'];
      $data = $this->financial_report_model->get_loss_profit_list($this->input->post('month'), $this->input->post('year'));
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

//      $json['recordsTotal'] = $data['total'];
//      $json['recordsFiltered'] = $data['total'];
      $json['draw'] = $this->input->post('draw');

      echo json_encode($json);
    } else {
      echo 'Forbidden access!';
    }
  }

  public function get_capital_changes_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
//      $data_post = $this->input->post();
//      $search = $data_post['search'];
      $data = $this->financial_report_model->get_capital_changes_list($this->input->post('month'), $this->input->post('year'));
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

//      $json['recordsTotal'] = $data['total'];
//      $json['recordsFiltered'] = $data['total'];
      $json['draw'] = $this->input->post('draw');

      echo json_encode($json);
    } else {
      echo 'Forbidden access!';
    }
  }

  public function get_balance_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
//      $data_post = $this->input->post();
//      $search = $data_post['search'];
      $data = $this->financial_report_model->get_balance_list($this->input->post('month'), $this->input->post('year'));
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

//      $json['recordsTotal'] = $data['total'];
//      $json['recordsFiltered'] = $data['total'];
      $json['draw'] = $this->input->post('draw');

      echo json_encode($json);
    } else {
      echo 'Forbidden access!';
    }
  }

  public function print_report() {
//    error_reporting(0);
    $data = $this->input->get();
//    $data['month_now'] = date('m');
//    $data['year_now'] = date('Y');

    //loss profit
    $rows = $this->financial_report_model->get_loss_profit_list($data['month'], $data['year']);
    $data['loss_profit'] = array();
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

      array_push($data['loss_profit'], $row);
    }

    //capital change
    $rows = $this->financial_report_model->get_capital_changes_list($data['month'], $data['year']);
    $data['capital_changes'] = array();
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

      array_push($data['capital_changes'], $row);
    }
//    $data['loss_profit_balance'] = $this->financial_report_model->get_loss_profit_balance($data['month_now'], $data['year_now']);
//    $data['loss_profit_label'] = ($data['loss_profit_balance'] > 0) ? 'Laba Bersih' : 'Rugi Bersih';
    $rows = $this->financial_report_model->get_balance_list($data['month'], $data['year']);
    $data['balance'] = array();
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
      array_push($data['balance'], $row);
    }

    if (count($data['loss_profit']) == 0) {
      echo "<script>alert('Tidak ada data!');close();</script>";
      exit();
    }

//    $data['rows'] = array();
//    $i = 1;
//    foreach ($rows as $row) {
//      $row->no = $i++;
//      $row->debit_txt = '0';
//      $row->credit_txt = '0';
//      $saldo = $row->debit - $row->credit;
//      if ($saldo > 0) {
//        $row->debit_txt = format_idr_currency($saldo);
//        $row->debit = $saldo;
//        $row->credit = 0;
//      } else if ($saldo < 0) {
//        $row->credit_txt = format_idr_currency(abs($saldo));
//        $row->debit = 0;
//        $row->credit = abs($saldo);
//      } else {
//        $row->debit = 0;
//        $row->credit = 0;
//      }
//
//      array_push($data['rows'], $row);
//    }

    $data['company_name'] = $this->_get_company_name();
    $data['company_address'] = $this->_get_company_address();
    $month = month_indo($this->input->get('month'));
    $data['period'] = $month . ' ' . $this->input->get('year');
    $html = $this->load->view('financial_report/print', $data, true);

    $this->load->library('tumbaspdf');
    $title = "Laporan Keuangan {$data['period']}";
    $this->tumbaspdf->set_author("{$data['company_name']} - $this->_user_name");
    $this->tumbaspdf->generate_pdf($html, $title);
  }

}
