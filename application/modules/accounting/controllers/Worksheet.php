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
class Worksheet extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('worksheet_model');
  }

  public function index() {
    $data['title'] = 'Data Neraca Lajur';
    $data['content'] = 'worksheet/list';

    $data['month_list'] = $this->global_model->get_month();
    $data['year_list'] = $this->global_model->get_year();
    $data['month_now'] = date('m');
    $data['year_now'] = date('Y');

    $this->_generate_view($data);
  }

  public function get_list() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
//      $data_post = $this->input->post();
//      $search = $data_post['search'];
      $data = $this->worksheet_model->get_list($this->input->post());
      $json['data'] = array();

//      $saldo = 0;
      $i = 1;
      foreach ($data as $row) {
        $row->no = $i++;
        //Neraca Saldo
        $row->debit1_txt = '0';
        $row->credit1_txt = '0';
        if ($row->saldo1 > 0) {
          $row->debit1_txt = format_idr_currency($row->saldo1);
          $row->debit1 = $row->saldo1;
          $row->credit1 = 0;
        } else if ($row->saldo1 < 0) {
          $row->credit1_txt = format_idr_currency(abs($row->saldo1));
          $row->credit1 = abs($row->saldo1);
          $row->debit1 = 0;
        } else {
          $row->debit1 = 0;
          $row->credit1 = 0;
        }
        //Penyesuaian
        $row->debit2_txt = '0';
        $row->credit2_txt = '0';
        if ($row->saldo2 > 0) {
          $row->debit2_txt = format_idr_currency($row->saldo2);
          $row->debit2 = $row->saldo2;
          $row->credit2 = 0;
        } else if ($row->saldo2 < 0) {
          $row->credit2_txt = format_idr_currency(abs($row->saldo2));
          $row->credit2 = abs($row->saldo2);
          $row->debit2 = 0;
        } else {
          $row->debit2 = 0;
          $row->credit2 = 0;
        }
        //Neraca saldo setelah penyesuaian
        $row->debit3_txt = '0';
        $row->credit3_txt = '0';
        if ($row->saldo3 > 0) {
          $row->debit3_txt = format_idr_currency($row->saldo3);
          $row->debit3 = $row->saldo3;
          $row->credit3 = 0;
        } else if ($row->saldo3 < 0) {
          $row->credit3_txt = format_idr_currency(abs($row->saldo3));
          $row->credit3 = abs($row->saldo3);
          $row->debit3 = 0;
        } else {
          $row->debit3 = 0;
          $row->credit3 = 0;
        }
        //Laba rugi
        $row->debit4_txt = '0';
        $row->credit4_txt = '0';
        if ($row->saldo4 > 0) {
          $row->debit4_txt = format_idr_currency($row->saldo4);
          $row->debit4 = $row->saldo4;
          $row->credit4 = 0;
        } else if ($row->saldo4 < 0) {
          $row->credit4_txt = format_idr_currency(abs($row->saldo4));
          $row->credit4 = abs($row->saldo4);
          $row->debit4 = 0;
        } else {
          $row->debit4 = 0;
          $row->credit4 = 0;
        }
        //Neraca
        $row->debit5_txt = '0';
        $row->credit5_txt = '0';
        if ($row->saldo5 > 0) {
          $row->debit5_txt = format_idr_currency($row->saldo5);
          $row->debit5 = $row->saldo5;
          $row->credit5 = 0;
        } else if ($row->saldo5 < 0) {
          $row->credit5_txt = format_idr_currency(abs($row->saldo5));
          $row->credit5 = abs($row->saldo5);
          $row->debit5 = 0;
        } else {
          $row->debit5 = 0;
          $row->credit5 = 0;
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
    $rows = $this->worksheet_model->get_list($this->input->get());
    
    if (count($rows) == 0) {
      echo "<script>alert('Tidak ada data!');close();</script>";
      exit();
    }
    
    $data['rows'] = array();
    $i = 1;
    foreach ($rows as $row) {
      $row->no = $i++;
      //Neraca Saldo
      $row->debit1_txt = '0';
      $row->credit1_txt = '0';
      if ($row->saldo1 > 0) {
        $row->debit1_txt = format_idr_currency($row->saldo1);
        $row->debit1 = $row->saldo1;
        $row->credit1 = 0;
      } else if ($row->saldo1 < 0) {
        $row->credit1_txt = format_idr_currency(abs($row->saldo1));
        $row->credit1 = abs($row->saldo1);
        $row->debit1 = 0;
      } else {
        $row->debit1 = 0;
        $row->credit1 = 0;
      }
      //Penyesuaian
      $row->debit2_txt = '0';
      $row->credit2_txt = '0';
      if ($row->saldo2 > 0) {
        $row->debit2_txt = format_idr_currency($row->saldo2);
        $row->debit2 = $row->saldo2;
        $row->credit2 = 0;
      } else if ($row->saldo2 < 0) {
        $row->credit2_txt = format_idr_currency(abs($row->saldo2));
        $row->credit2 = abs($row->saldo2);
        $row->debit2 = 0;
      } else {
        $row->debit2 = 0;
        $row->credit2 = 0;
      }
      //Neraca saldo setelah penyesuaian
      $row->debit3_txt = '0';
      $row->credit3_txt = '0';
      if ($row->saldo3 > 0) {
        $row->debit3_txt = format_idr_currency($row->saldo3);
        $row->debit3 = $row->saldo3;
        $row->credit3 = 0;
      } else if ($row->saldo3 < 0) {
        $row->credit3_txt = format_idr_currency(abs($row->saldo3));
        $row->credit3 = abs($row->saldo3);
        $row->debit3 = 0;
      } else {
        $row->debit3 = 0;
        $row->credit3 = 0;
      }
      //Laba rugi
      $row->debit4_txt = '0';
      $row->credit4_txt = '0';
      if ($row->saldo4 > 0) {
        $row->debit4_txt = format_idr_currency($row->saldo4);
        $row->debit4 = $row->saldo4;
        $row->credit4 = 0;
      } else if ($row->saldo4 < 0) {
        $row->credit4_txt = format_idr_currency(abs($row->saldo4));
        $row->credit4 = abs($row->saldo4);
        $row->debit4 = 0;
      } else {
        $row->debit4 = 0;
        $row->credit4 = 0;
      }
      //Neraca
      $row->debit5_txt = '0';
      $row->credit5_txt = '0';
      if ($row->saldo5 > 0) {
        $row->debit5_txt = format_idr_currency($row->saldo5);
        $row->debit5 = $row->saldo5;
        $row->credit5 = 0;
      } else if ($row->saldo5 < 0) {
        $row->credit5_txt = format_idr_currency(abs($row->saldo5));
        $row->credit5 = abs($row->saldo5);
        $row->debit5 = 0;
      } else {
        $row->debit5 = 0;
        $row->credit5 = 0;
      }

      array_push($data['rows'], $row);
    }

    $data['company_name'] = $this->_get_company_name();
    $data['company_address'] = $this->_get_company_address();
    $month = month_indo($this->input->get('month'));
    $data['period'] = $month . ' ' . $this->input->get('year');
    $html = $this->load->view('worksheet/print', $data, true);
//    $this->load->view('worksheet/print', $data);
//    die('nih lagiiiii');
    $this->load->library('tumbaspdf');
    $title = "Neraca Lajur {$data['period']}";
    $this->tumbaspdf->set_author("{$data['company_name']} - $this->_user_name");
    $this->tumbaspdf->generate_pdf($html, $title, 'L');
  }

}
