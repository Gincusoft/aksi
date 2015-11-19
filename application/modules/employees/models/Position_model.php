<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Andedi
 */


if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Position_model extends CI_Model {

  function get_list($search, $order_column, $order_direction, $limit, $offset) {
    $where = ' WHERE active = 1 ';
    if ($search != '') {
      $where .= " AND position_name LIKE '%$search%'";
    }

    $sql = "SELECT COUNT(position_id) as total from t_mtr_position {$where}";
    $query = $this->db->query($sql);
    $data['total'] = $query->row()->total;

    $sql = "SELECT * from t_mtr_position {$where} ORDER BY {$order_column} {$order_direction} LIMIT {$limit} OFFSET {$offset}";
    $query = $this->db->query($sql);
    $data['rows'] = $query->result();

    return $data;
  }

  function get_all() {
    $sql = "SELECT * FROM t_mtr_position WHERE active = 1 ORDER BY position_name";
    $query = $this->db->query($sql);

    return $query->result();
  }

}