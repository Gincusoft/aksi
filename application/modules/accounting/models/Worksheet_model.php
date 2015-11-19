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

class Worksheet_model extends CI_Model {

  function get_list($param=array()) {
    $where = "WHERE YEAR(journals_date) = '{$param['year']}' AND MONTH(journals_date) = '{$param['month']}'";
     $sql = "SELECT account_no, account_name, t1.debit AS debit1, t1.credit AS credit1, t1.saldo AS saldo1, t2.debit AS debit2, t2.credit AS credit2, t2.saldo AS saldo2, t3.debit As debit3, t3.credit AS credit3, t3.saldo AS saldo3, t4.debit AS debit4, t4.credit AS credit4, t4.saldo AS saldo4, t5.debit AS debit5, t5.credit AS credit5, t5.saldo AS saldo5
              FROM t_mtr_account acc

              LEFT JOIN 
              (SELECT account_id, SUM(debit) AS debit, SUM(credit) AS credit, SUM(debit) - SUM(credit) AS saldo
              FROM t_trx_journals_detail  detail
              JOIN  t_trx_journals header ON header.journals_id= detail.journals_id AND journals_type = 1
              {$where}
              GROUP BY account_id) AS t1 ON t1.account_id = acc.account_id

              LEFT JOIN
              (SELECT account_id, SUM(debit) AS debit, SUM(credit) AS credit, SUM(debit) - SUM(credit) AS saldo
              FROM t_trx_journals_detail  detail
              JOIN  t_trx_journals header ON header.journals_id= detail.journals_id AND journals_type = 2
              {$where}
              GROUP BY account_id) AS t2 ON t2.account_id = acc.account_id

              LEFT JOIN
              (SELECT account_id, SUM(debit) AS debit, SUM(credit) AS credit, SUM(debit) - SUM(credit) AS saldo
              FROM t_trx_journals_detail  detail
              JOIN  t_trx_journals header ON header.journals_id= detail.journals_id
              {$where}
              GROUP BY account_id) AS t3 ON t3.account_id = acc.account_id

              LEFT JOIN
              (SELECT detail.account_id, SUM(debit) AS debit, SUM(credit) AS credit, SUM(debit) - SUM(credit) AS saldo
              FROM t_trx_journals_detail  detail
              JOIN  t_trx_journals header ON header.journals_id= detail.journals_id
              LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
              {$where} AND LEFT(account_no, 1) IN (4,5)
              GROUP BY detail.account_id) AS t4 ON t4.account_id = acc.account_id

              LEFT JOIN
              (SELECT detail.account_id, SUM(debit) AS debit, SUM(credit) AS credit, SUM(debit) - SUM(credit) AS saldo
              FROM t_trx_journals_detail  detail
              JOIN  t_trx_journals header ON header.journals_id= detail.journals_id
              LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id 
              {$where} AND LEFT(account_no, 1) IN (1,2,3)
              GROUP BY detail.account_id) AS t5 ON t5.account_id = acc.account_id

              WHERE acc.active = 1
              ORDER BY account_no ASC";
    return $this->db->query($sql)->result();
  }

}
