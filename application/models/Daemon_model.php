<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Daemon_model
 *
 * @author tumbas
 */
class Daemon_model extends CI_Model {
  
  public function get_unprocessed_inbox() {
    $this->db->where('Processed', 'false');
    return $this->db->get('inbox')->result();
  }
  
}

?>
