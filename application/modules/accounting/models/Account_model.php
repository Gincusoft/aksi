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

class Account_model extends CI_Model {

  function get_list($search, $order_column, $order_direction, $limit, $offset) {
    $where = ' WHERE active = 1 ';
    if ($search != '') {
      $where .= " AND (account_name LIKE '%$search%' OR account_no LIKE '%$search%')";
    }

    $sql = "SELECT COUNT(account_id) as total from t_mtr_account {$where}";
    $query = $this->db->query($sql);
    $data['total'] = $query->row()->total;

    $sql = "SELECT account_id, account_no, account_name
      FROM t_mtr_account acc 
      {$where}
      ORDER BY {$order_column} {$order_direction} 
      LIMIT {$limit} OFFSET {$offset}";
    $query = $this->db->query($sql);
    $data['rows'] = $query->result();

    return $data;
  }

  function get_by_pk($id) {
    $this->db->where('account_id', $id);
    $query = $this->db->get('t_mtr_account');

    return $query->row();
  }
  
  function get_all() {
     $sql = "SELECT account_id, account_no, account_name
      FROM t_mtr_account
      WHERE active = 1
      ORDER BY account_no";
    $query = $this->db->query($sql);

    return $query->result();
  }
  
}
