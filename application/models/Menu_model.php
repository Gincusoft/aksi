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

class Menu_model extends CI_Model {

    function get_menu_list($search, $order_column, $order_direction, $limit, $offset) {
        $where = '';
        if ($search != '') {
            $where = " WHERE menu_name LIKE '%$search%'";
        }
        
        $sql = "SELECT COUNT(menu_id) as total from t_mtr_menu {$where}";
        $query = $this->db->query($sql);
        $data['total'] = $query->row()->total;
        
        $sql = "SELECT * from t_mtr_menu {$where} ORDER BY  LIMIT {$limit} OFFSET {$offset}";
        $query = $this->db->query($sql);
        $data['rows'] = $query->result();
        
        return $data;
    }
    
    function add_menu($data) {
        $this->db->trans_start();
        
        //Update menu existing
        $sql = "UPDATE t_mtr_menu SET order_no = order_no + 1 WHERE parent_id = {$data['parent_id']} AND order_no >= {$data['order_no']} ";
        $this->db->query($sql);
        
        //insert new menu
        $this->global_model->insert_data('t_mtr_menu', $data);
        $this->db->trans_complete();
        
        return $this->db->trans_status();
    }
    
    function edit_menu($data, $id) {
        $this->db->trans_start();
        
        if ($data['order_no'] < $data['order_no_old']) { //from upper to lower
            $sql = "UPDATE t_mtr_menu SET order_no = order_no + 1 WHERE parent_id = {$data['parent_id']} AND order_no >= {$data['order_no']}
                AND order_no < {$data['order_no_old']}";
            $this->db->query($sql);
        } elseif ($data['order_no'] > $data['order_no_old']) { //from lower to upper
            $sql = "UPDATE t_mtr_menu SET order_no = order_no - 1 WHERE parent_id = {$data['parent_id']} AND order_no > {$data['order_no_old']}
                AND order_no <= {$data['order_no']}";
            $this->db->query($sql);
        }
        
        unset($data['order_no_old']);
        $this->global_model->update_data('t_mtr_menu', $data, array('menu_id' => $id));
        
        $this->db->trans_complete();
        
        return $this->db->trans_status();
    }
    
    function delete_menu($id, $data) {
        $this->db->trans_start();
        // Update menu existing
        $sql = "UPDATE t_mtr_menu SET order_no = order_no - 1 WHERE parent_id = {$data['parent_id']} AND order_no > {$data['order_no']} ";
        $this->db->query($sql);
        
        // Delete menu
        $this->db->delete('t_mtr_menu', array('parent_id' => $id));
        $this->db->delete('t_mtr_menu', array('menu_id' => $id));
        $this->db->trans_complete();
        
        return $this->db->trans_status();
    }
    
    function get_menu() {
        $sql = "SELECT * FROM t_mtr_menu WHERE parent_id = 0 ORDER BY order_no asc";
        $query = $this->db->query($sql);
        
        return $query->result();
    }
    
    function get_menu_max($parent_id=0) {
        $sql = "SELECT COUNT(menu_id) AS count_menu FROM t_mtr_menu WHERE parent_id = {$parent_id}";
        $query = $this->db->query($sql);
        
        return $query->row();
    }
    
    function get_menu_item($parent_id) {
        $sql = "SELECT * FROM t_mtr_menu WHERE parent_id = {$parent_id} ORDER BY order_no asc";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

}
