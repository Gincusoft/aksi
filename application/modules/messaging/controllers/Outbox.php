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
class Outbox extends Tumbas_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model(array('outbox_model'));
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
            'field' => 'outbox_date',
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
//    $this->form_validation->set_error_delimiters('<div><i class="fa fa-square-o"></i> ', '</div>');
  }

  public function index() {
    $data['title'] = 'Data Kotak Keluar';
    $data['content'] = 'outbox/list';

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
      $data = $this->outbox_model->get_list($search, $order_column, $order_direction, $limit, $offset);
      $json['data'] = array();
      $i = $offset + 1;

      $this->load->helper('text_helper');
      foreach ($data['rows'] as $row) {
        $outbox_id = encode($row->dest_no);
        $row->no = $i++;
        $url_edit = base_url("messaging/outbox/detail/{$outbox_id}");
        $row->dest_no = "<a class='text-black' onclick='doDetail(\"{$url_edit}\", this); return false;' href=''>{$row->dest_no}</a>";
        $row->sms_text_short = word_limiter($row->sms_text, 5);
        $row->sms_text = "<a class='text-black' onclick='doDetail(\"{$url_edit}\", this); return false;'  href=''>" . word_limiter($row->sms_text, 15) . "</a>";
        $row->sms_date = timestamp_to_human($row->sms_date);
        
        
        if (strripos($row->status, 'SendingOK') !== FALSE) {
          $status = 'fa fa-check-circle';
          $label = 'success';
        } else if (strripos($row->status, 'SendingError') !== FALSE) {
          $status = 'fa fa-exclamation-circle';
          $label = 'danger';
        } else {
          $status = 'fa fa-clock-o';
          $label = 'default';
        }
        $row->status_label = "<span class='label label-{$label}' title='{$row->status}'><i class='{$status}'></i></span>";
        $row->sms_date = $row->status_label.' &nbsp; '.$row->sms_date;

        $row->action = "<button title='Hapus' class='btn btn-xs btn-default' onclick='doDelete(\"{$outbox_id}\")'><i class='fa fa-remove'></i></button>";

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

  public function detail($param = '') {
    if ($this->input->is_ajax_request() == TRUE) {
      $data['title'] = decode($param);
      $this->outbox_model->set_read(decode($param));
      $data['sms'] = $this->outbox_model->get_sms_by_phone_number(decode($param));
//      die($this->db->last_query());
      $this->load->view('outbox/detail', $data);
    } else {
      
    }
  }

  public function sending() {
    if ($this->input->is_ajax_request() == TRUE) {
      $data = array(
          'sender_id' => 'iCos',
          'sms_date' => date('Y-m-d H:i:s'),
          'sms_text' => $this->input->post('sms_text')
      );

      $length_text = strlen($this->input->post('sms_text'));
      if ($length_text > 160) {
        $long_msg = "-len {$length_text}";
      } else {
        $long_msg = '';
      }

      $query = $this->outbox_model->insert_outbox();

//      $sms_no = $this->input->post('sms_no');
//      $sms_text = $this->input->post('sms_text');
//      $data['smsd'] = exec("gammu-smsd-inject TEXT {$sms_no} {$long_msg} -text '{$sms_text}'");

      echo json_encode($data);
    } else {
      
    }
  }

  public function new_sms() {
    if ($this->input->is_ajax_request() == TRUE) {
      if ($this->input->post() == FALSE) {
        $data['title'] = 'Pesan Baru';
        $this->load->view('outbox/new_sms', $data);
      } else {
//        $length_text = strlen($this->input->post('sms_text'));
//        if ($length_text > 160) {
//          $long_msg = "-len {$length_text}";
//        } else {
//          $long_msg = '';
//        }

        $this->db->trans_start();
        $query = $this->outbox_model->insert_outbox();
        $this->db->trans_complete();

        if ($this->db->trans_status() == TRUE) {
          echo 'success';
        } else {
          echo 'failed';
        }
//        exec("gammu-smsd-inject TEXT {$sms_no} {$long_msg} -text '{$sms_text}'");
      }
    } else {
      echo 'Forbidden access.';
    }
  }

  public function check_outbox() {
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

    $this->db->trans_start();
    $result = $this->outbox_model->get_uncheck_outbox();
    $outbox_count = count($result);
    $message = '';
    $this->load->helper('text_helper');
    $sms_short = word_limiter($result[0]->TextDecoded, 5, '...');
    if ($outbox_count == 1) {
      $message = "{$result[0]->SenderNumber} : {$sms_short}";
    } elseif ($outbox_count > 1) {
      $message = "Ada {$outbox_count} pesan baru.";
    }

    $this->outbox_model->set_checked_outbox();

    $this->db->trans_complete();
    echo "data: {$message} \n\n";
    flush();
  }

  public function delete() {
    if ($this->input->is_ajax_request() && $this->input->post()) {
      $query = $this->outbox_model->delete(decode($this->input->post('outbox_id')));
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
      echo 'Forbidden access!';
    }
  }

}

?>