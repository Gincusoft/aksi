<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tumbas_Model
 *
 * @author tumbas
 */
class Tumbas_Model extends CI_Model {

  //Constant Global
  const ACTIVE = 1;
  const NOT_ACTIVE = 0;

  //Variable Global
  protected $_user_id;
  protected $_date_now;

  public function __construct() {
    parent::__construct();
    $this->_date_now = date('Y-m-d H:i:s');
    $this->_user_id = $this->session->userdata('user_id');
  }

}

?>
