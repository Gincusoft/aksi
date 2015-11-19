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
class Phonebook_model extends Tumbas_Model {

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
    $where = "";
    $search = $this->db->escape_like_str($search);
    if ($search != '') {
      $where .= " WHERE name LIKE '%$search%' OR phone_number LIKE '%$search%' OR phonebook_group_name LIKE '%$search%'";
    }

    $sql = "SELECT phonebook_id, name, phone_number, phonebook_group_name 
            FROM t_mtr_phonebook pb 
            LEFT JOIN t_mtr_phonebook_group pbg ON pbg.phonebook_group_id = pb.phonebook_group_id
            {$where} 
            ORDER BY {$order_column} {$order_direction}
            LIMIT {$limit} OFFSET {$offset}";
    $data['rows'] = $this->db->query($sql)->result();

    $sql = "SELECT COUNT(name) AS count
            FROM t_mtr_phonebook pb 
            LEFT JOIN t_mtr_phonebook_group pbg ON pbg.phonebook_group_id = pb.phonebook_group_id";
    $data['total'] = $this->db->query($sql)->row()->count;

    return $data;
  }
  
  function get_phonebook_group_all() {
    $this->db->select('phonebook_group_name');
    $this->db->order_by('phonebook_group_name', 'asc');
    return $this->db->get('t_mtr_phonebook_group')->result();
  }

  function add() {
    $this->db->trans_start();
    
    //insert phonebook group first
    $group = $this->input->post('phonebook_group_name');
    $row = $this->db->get_where('t_mtr_phonebook_group', array('phonebook_group_name'=> $group))->row();
    if ($row == NULL) {
      $data_group = array(
          'phonebook_group_name' => $group
      );
      $group_id = $this->global_model->save_data('t_mtr_phonebook_group', $data_group);
    } else {
      $group_id = $row->phonebook_group_id;
    }
    
    //insert phonebook
    $data = array(
        'name' => $this->input->post('name'),
        'phone_number' => '+62'.$this->input->post('phone_number'),
        'phonebook_group_id' => $group_id
    );
    $this->global_model->save_data('t_mtr_phonebook', $data);
    
    $this->global_model->save_log('Tambah buku telepon');
    $this->db->trans_complete();
    
    return $this->db->trans_status();
  }

}

?>