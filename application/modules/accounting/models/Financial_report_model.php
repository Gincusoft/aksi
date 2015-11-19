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

class Financial_report_model extends CI_Model {

  function get_loss_profit_list($month=0, $year=0) {
     $sql = "SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
            WHERE LEFT(account_no, 1) IN (4,5) AND MONTH(journals_date) = '{$month}' AND YEAR(journals_date) = '{$year}'
            GROUP BY detail.account_id
            ORDER BY account_no ASC";
    return $this->db->query($sql)->result();
  }
  
  function get_capital_changes_list($month=0, $year=0) {
     $sql = "SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
            WHERE account_no = 300 AND MONTH(journals_date) = '{$month}' AND YEAR(journals_date) = '{$year}'
            GROUP BY detail.account_id
            ORDER BY account_no ASC";
    return $this->db->query($sql)->result();
  }
  
  function get_balance_list($month=0, $year=0) {
     $sql = "SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
            WHERE LEFT(account_no, 1) IN (1,2,3) AND MONTH(journals_date) = '{$month}' AND YEAR(journals_date) = '{$year}'
            GROUP BY detail.account_id
            ORDER BY account_no ASC";
    return $this->db->query($sql)->result();
  }

  function get_loss_profit_balance($month=0, $year=0) {
    $sql = "SELECT SUM(credit) - SUM(debit) AS saldo
              FROM t_trx_journals_detail  detail
              JOIN  t_trx_journals header ON header.journals_id= detail.journals_id
              LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
              WHERE LEFT(account_no, 1) IN (4,5) AND MONTH(journals_date) = '{$month}' AND YEAR(journals_date) = '{$year}'";
    return $this->db->query($sql)->row()->saldo;
  }

}
