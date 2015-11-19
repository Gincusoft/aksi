<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AutoReply
 *
 * @author tumbas
 */
class Daemon extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('daemon_model');
  }
  
  public function auto_reply() {
    $unprocess = $this->daemon_model->get_unprocessed_inbox();
    
  }
  
}

?>
