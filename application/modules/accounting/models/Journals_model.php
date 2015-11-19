<?php

/*
  Document   : Journals_model
  Created on : Jun 25, 2015, 8:19:18 PM
  Author     : tumbas
  Description:
  Purpose of the Class follows.
 */

/**
 * Description of Journals_model
 *
 * @author tumbas
 */
class Journals_model extends Tumbas_Model {

  public function __construct() {
    parent::__construct();
  }

  /**
   * Journals List for datatable
   * 
   * @param string $search
   * @param string $order_column
   * @param string $order_direction
   * @param int $limit
   * @param int $offset
   * 
   * @return json
   */
  function get_list($search, $order_column, $order_direction, $limit, $offset) {
   $where = "WHERE journals_type = 1 AND YEAR(journals_date) = {$search['year']} AND MONTH(journals_date) = {$search['month']}";
    if ($search != '') {
      $where .= " AND (transaction_id LIKE '%{$search['search']}%' OR account_name LIKE '%{$search['search']}%' OR account_no LIKE '%{$search['search']}%') ";
    }
    
    $sql = "SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id {$where}
            ORDER BY {$order_column} {$order_direction}, journals_detail_id ASC
            -- LIMIT {$limit} OFFSET {$offset}";
    $data['rows'] = $this->db->query($sql)->result();
    
    $sql = "SELECT COUNT(journals_detail_id) AS count
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id {$where}";
    $data['total'] = $this->db->query($sql)->row()->count;
    
    return $data;
  }
  
  public function get_report($month=0, $year=0) {
    $sql = "SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id
            WHERE journals_type = 1 AND MONTH(journals_date) = {$month} AND YEAR(journals_date) = {$year}
            ORDER BY journals_date ASC, journals_detail_id ASC";
    return $this->db->query($sql)->result();
  }
  
  function get_cash_flow($month=0, $year=0) {
    $sql = "SELECT DAY(journals_date) as day, account_no, account_name, debit, credit, remark
            FROM t_trx_journals_detail jur_det 
            JOIN t_trx_journals jur ON jur.journals_id = jur_det.journals_id
            JOIN t_mtr_account acc ON acc.account_id = jur_det.account_id
            WHERE jur_det.account_id = 47 AND MONTH(journals_date) = {$month} AND YEAR(journals_date) = {$year}
            ORDER BY journals_date";
    return $this->db->query($sql)->result();
  }
  
}

?>