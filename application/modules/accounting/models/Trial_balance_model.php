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

class Trial_balance_model extends CI_Model {

  function get_list($param) {
     $sql = "SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
            WHERE journals_type = 1 AND YEAR(journals_date) = '{$param['year']}' AND MONTH(journals_date) = '{$param['month']}'
            GROUP BY detail.account_id
            ORDER BY account_no ASC";
    return $this->db->query($sql)->result();
  }
  
}
