<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Global_model
 *
 * @author tumbas
 */
class Global_model extends CI_Model {

  function insert_data($table_name, $data) {
    $data['created_by'] = $this->session->userdata('user_id');
    $data['created_on'] = date('Y-m-d H:i:s');
    $this->db->insert($table_name, $data);

    return $this->db->insert_id();
  }

  function update_data($table_name, $data, $where) {
    $data['updated_by'] = $this->session->userdata('user_id');
    $data['updated_on'] = date('Y-m-d H:i:s');
    $this->db->where($where);

    return $this->db->update($table_name, $data);
  }

  function save_data($table_name, $data, $where='') {
//    $fields = $this->db->field_data($table_name);

    if ($where == '' || $where == NULL) { //INSERT
//      foreach ($fields as $field) {
//        if ($field->name == 'active') {
          $data['active'] = 1;
//        } elseif ($field->name == 'created_by') {
          $data['created_by'] = $this->session->userdata('user_id');
//        } elseif ($field->name == 'created_on') {
          $data['created_on'] = date('Y-m-d H:i:s');
//        }
//      }
      $this->db->insert($table_name, $data);

      return $this->db->insert_id();
    } else { //UPDATE
//      foreach ($fields as $field) {
//        if ($field->name == 'updated_by') {
          $data['updated_by'] = $this->session->userdata('user_id');
//        } elseif ($field->name == 'updated_on') {
          $data['updated_on'] = date('Y-m-d H:i:s');
//        }
//      }
      if (is_array($where)) {
        foreach ($where as $value) {
          $this->db->where($value, $data[$value]);
          unset($data[$value]);
        }
      } else {
        $this->db->where($where, $data[$where]);
        unset($data[$where]);
      }

      return $this->db->update($table_name, $data);
    }
  }

  /**
   * Change active to 0, not really delete
   * 
   * @param type $table_name
   * @param type $primary_key
   */
  function soft_delete($table_name, $param) {
    $fields = $this->db->field_data($table_name);

    if (is_array($param)) { //If condition more than one
      $this->db->where($param);
    } else { //If condition by primary key
      foreach ($fields as $field) {
        if ($field->primary_key == 1) {
          $this->db->where($field->name, $param);
          break;
        }
      }
    }
    
    $data = array('active' => 0);
    foreach ($fields as $field) {
      if ($field->name == 'updated_by') {
        $data['updated_by'] = $this->session->userdata('user_id');
      }  elseif ($field->name == 'updated_on') {
        $data['updated_on'] = date('Y-m-d H:i:s');
      }
    }

    return $this->db->update($table_name, $data);
  }

  function save_log($action='') {
    $data = array(
        'action' => $action,
        'uri' => uri_string(),
        'created_by' => $this->session->userdata('user_id'),
        'created_on' => date('Y-m-d H:i:s'),
    );
    $this->db->insert('t_log', $data);
  }
  
  function get_menu() {
    $sql = "SELECT * FROM t_mtr_menu WHERE active = 1 AND parent_id = 0 ORDER BY order_no asc";
    $query = $this->db->query($sql);

    return $query->result();
  }

  function get_menu_item($parent_id) {
    $sql = "SELECT * FROM t_mtr_menu WHERE active = 1 AND parent_id = {$parent_id} ORDER BY order_no asc";
    $query = $this->db->query($sql);

    return $query->result();
  }

  function get_menu2() {
    $sql = "SELECT * FROM t_mtr_menu WHERE active = 1 ORDER BY order_no asc";
    $query = $this->db->query($sql);

    return $query->result_array();
  }
  
  function get_lookup($lookup_key = '') {
    $sql = "SELECT * FROM t_mtr_lookup WHERE lookup_key = '{$lookup_key}' ORDER BY order_no ASC";
    $query = $this->db->query($sql);

    return $query;
  }
  
  function get_config($key = '') {
    $this->db->where('key', $key);
    $query = $this->db->get('t_mtr_config');
    
    return $query->row()->value;
  }
  
  function get_year() {
    $sql = 'SELECT DISTINCT YEAR(journals_date) AS period FROM t_trx_journals ORDER BY period DESC';
    $list = $this->db->query($sql)->result();
    
    $year_list = array();
    foreach ($list as $value) {
      $year_list[$value->period] = "{$value->period}";
    }
    
    return $year_list;
  }
  
  function get_month() {
     $months_arr = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    );
     
    return $months_arr;
  }

}
