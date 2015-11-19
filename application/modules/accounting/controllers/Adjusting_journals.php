<?php

//error_reporting(0);
/*
  Document   : Adjusting_journals
  Created on : Jun 25, 2015, 8:17:48 PM
  Author     : tumbas
  Description:
  Purpose of the Class follows.
 */

/**
 * Description of Adjusting_journals
 *
 * @author tumbas
 */
class Adjusting_journals extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model(array('adjusting_journals_model'));
  }

  private function _set_rules() {
    //Validate
    $config = array(
        array(
            'field' => 'transaction_id',
            'label' => 'No Bukti',
            'rules' => 'trim'
        ),
        array(
            'field' => 'journals_date',
            'label' => 'Tanggal',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'remark',
            'label' => 'Keterangan',
            'rules' => 'trim'
        ),
        array(
            'field' => 'account_id[]',
            'label' => 'Rekening',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'account_id[]',
            'label' => 'Rekening',
            'rules' => 'integer|trim|required'
        ),
    );

    $this->form_validation->set_rules($config);
    $this->form_validation->set_error_delimiters('<div><i class="fa fa-square-o"></i> ', '</div>');
  }

  public function index() {
    $data['title'] = 'Data Jurnal Penyesuaian';
    $data['content'] = 'adjusting_journals/list';
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
       $search = $data_post;
      $limit = $data_post['length'];
      $offset = $data_post['start'];

      $columns = $data_post['columns'];
      $order_arr = $data_post['order'];
      $order_direction = strtoupper($order_arr[0]['dir']);
      $order_column = $order_arr[0]['column'];
      $order_column = $columns[$order_column]['data'];
      $data = $this->adjusting_journals_model->get_list($search, $order_column, $order_direction, $limit, $offset);
      $json['data'] = array();
      $i = $offset + 1;

      foreach ($data['rows'] as $row) {
        $journals_id = encode($row->journals_id);
        $row->no = $i++;
        $row->journals_date = sql_to_human($row->journals_date);
        $row->debit_txt = format_idr_currency($row->debit);
        $row->credit_txt = format_idr_currency($row->credit);
        $edit_url = base_url("accounting/adjusting_journals/edit/{$journals_id}");
        $row->action = "<button onclick='doEdit(\"{$edit_url}\")' title='Edit' class='btn btn-xs btn-success edit_btn')'><i class='fa fa-pencil'></i></button>
          <button title='Hapus' class='btn btn-xs btn-default' onclick='doDelete(\"{$journals_id}\", \"$row->account_name\")'><i class='fa fa-remove'></i></button>";
//        $row->invoice = anchor("adjusting_journals/view/{$adjusting_journals_id}", $row->invoice, 'title="Klik untuk lebih lengkap" target="_blank"');

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

  public function add() {
    if ($this->input->is_ajax_request()) {
      if ($this->input->post() == FALSE) {
        $this->load->model(array('account_model'));
        $data['account_list'] = $this->account_model->get_all();
        $data['journals_date'] = sql_to_human(date('Y-m-d'));
        $data['title'] = 'Tambah Jurnal Penyesuaian';
        $data['content'] = 'adjusting_journals/add';

        $this->load->view($data['content'], $data);
      } else { //SAVING DATA HERE
        $this->_set_rules();
        if ($this->form_validation->run() == TRUE) {
          $this->db->trans_start();

          //save header
          $data_header = array(
              'journals_date' => human_to_sql($this->input->post('journals_date')),
              'transaction_id' => $this->input->post('transaction_id'),
              'remark' => $this->input->post('remark'),
              'journals_type' => 2
          );
          $journals_id = $this->global_model->save_data('t_trx_journals', $data_header);

          //save detail
          foreach ($this->input->post('account_id') as $key => $value) {
            $data_detail = array(
                'journals_id' => $journals_id,
                'account_id' => $this->input->post("account_id[$key]"),
                'debit' => $this->input->post("debit[$key]"),
                'credit' => $this->input->post("credit[$key]"),
            );
            $this->global_model->save_data('t_trx_journals_detail', $data_detail);
          }

          $response = array();
          $this->db->trans_complete();
          if ($this->db->trans_status() == TRUE) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil menyimpan jurnal penyesuaian. Tambah lagi?',
//                'journals_id' => encode($journals)
            );
          } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal menyimpan jurnal penyesuaian.'
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
      echo 'Forbidden access';
    }
  }

  public function edit($param = '') {
    if ($this->input->is_ajax_request()) {
      if ($this->input->post() == FALSE) {
         $this->load->model(array('account_model'));

        $data = $this->db->get_where('t_trx_journals', array('journals_id' => decode($param)))->row_array();
        $data['journals_date'] = sql_to_human($data['journals_date']);
        $data['journals_id'] = $param;

        $data['journals_detail'] = $this->db->get_where('t_trx_journals_detail', array('journals_id' => decode($param)))->result();

        $data['account_list'] = $this->account_model->get_all();

        $data['title'] = 'Edit Jurnal Penyesuaian';
        $data['content'] = 'adjusting_journals/edit';
        $this->load->view($data['content'], $data);
      } else { //SAVING DATA HERE
        $this->_set_rules();
        if ($this->form_validation->run() == TRUE) {
          $this->db->trans_start();

          $journals_id = decode($this->input->post('journals_id'));
          //save header
          $data_header = array(
              'journals_id' => $journals_id,
              'journals_date' => human_to_sql($this->input->post('journals_date')),
              'transaction_id' => $this->input->post('transaction_id'),
              'remark' => $this->input->post('remark'),
              'journals_type' => 2
          );
          $this->global_model->save_data('t_trx_journals', $data_header, 'journals_id');

          //delete old detail
          $this->db->delete('t_trx_journals_detail', array('journals_id' => $journals_id));

          //save detail
          foreach ($this->input->post('account_id') as $key => $value) {
            $data_detail = array(
                'journals_id' => $journals_id,
                'account_id' => $this->input->post("account_id[$key]"),
                'debit' => $this->input->post("debit[$key]"),
                'credit' => $this->input->post("credit[$key]"),
            );
            $this->global_model->save_data('t_trx_journals_detail', $data_detail);
          }

          $response = array();
          $this->db->trans_complete();
          if ($this->db->trans_status() == TRUE) {
            $response = array(
                'status' => 'success',
                'message' => 'Berhasil mengedit jurnal penyesuaian.',
            );
          } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal mengedit jurnal penyesuaian.'
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
      echo 'Forbidden access';
    }
  }

  public function delete() {
    $this->form_validation->set_rules('adjusting_journals_id', 'Adjusting Journals ID', 'trim|required');
    if ($this->input->is_ajax_request() && $this->input->post() && $this->form_validation->run()) {
      $this->db->trans_start();

      $journals_id = decode($this->input->post('adjusting_journals_id'));
      $where = array('journals_id' => $journals_id);
      $this->db->delete('t_trx_journals', $where);
      $this->db->delete('t_trx_journals_detail', $where);

      $this->db->trans_complete();
      if ($this->db->trans_status() == TRUE) {
        $response = array(
            'status' => 'success',
            'message' => "Berhasil menghapus jurnal."
        );
      } else {
        $response = array(
            'status' => 'error',
            'message' => 'Gagal menghapus jurnal.'
        );
      }
      echo json_encode($response);
    }
  }
  
  public function print_report() {
//    error_reporting(0);
    $data['company_name'] = $this->_get_company_name();
    $data['company_address'] = $this->_get_company_address();
    $month = month_indo($this->input->get('month'));
    $data['period'] = $month.' '.$this->input->get('year');
    $data['rows'] = $this->adjusting_journals_model->get_report($this->input->get('month'), $this->input->get('year'));
    
     if (count($data['rows']) == 0) {
      echo "<script>alert('Tidak ada data!');close();</script>";
      exit();
    }
    
    $html = $this->load->view('adjusting_journals/print', $data, true);

    $this->load->library('tumbaspdf');
    $title = "Jurnal Penyesuaian {$data['period']}";
    $this->tumbaspdf->set_author("{$data['company_name']} - $this->_user_name");
    $this->tumbaspdf->generate_pdf($html, $title);
  }

}

?>