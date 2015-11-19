<?php

/*
 * Coba_model.php, Mar 31, 2015 9:32:51 PM    
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

class Ledger_model extends CI_Model {

  function get_list($param, $order_column, $order_direction, $limit, $offset) {
    $where = "WHERE YEAR(journals_date) = {$param['year']} AND MONTH(journals_date) = {$param['month']}";
    if ($param['account_id'] != 0) {
      $where .= " AND detail.account_id = {$param['account_id']}";
    }

    $sql = "SELECT header.journals_id, detail.journals_detail_id, detail.account_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
            {$where}
            ORDER BY acc.account_id ASC, journals_date ASC";
    $data['rows'] = $this->db->query($sql)->result();

    $sql = "SELECT COUNT(journals_detail_id) AS count
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id {$where}";
    $data['total'] = $this->db->query($sql)->row()->count;

    return $data;
  }

  public function get_report($month = 0, $year = 0, $account_id=0) {
    $where = "WHERE YEAR(journals_date) = {$year} AND MONTH(journals_date) = {$month}";
    if ($account_id != 0) {
      $where .= " AND detail.account_id = {$account_id}";
    }
    $sql = "SELECT header.journals_id, detail.journals_detail_id, detail.account_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
            {$where}
            ORDER BY acc.account_id ASC, journals_date ASC";
    return $this->db->query($sql)->result();
  }

}
