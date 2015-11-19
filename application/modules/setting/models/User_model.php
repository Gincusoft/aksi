<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main_model
 *
 * @author tumbas
 */
class User_model extends CI_Model {
  
  public function get_row($param='') {
    if (is_array($param)) {
      $this->db->where($param);
    } else {
      $this->db->where('user_id', $param);
    }
    
    return $this->db->get('t_mtr_user')->row();
  }
 
}

?>
