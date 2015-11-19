<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee_model
 *
 * @author tumbas
 */
class Employee_model extends Tumbas_Model {
  
  public function __construct() {
    parent::__construct();
  }
  
  function get_list($search, $order_column, $order_direction, $limit, $offset) {
    $where = ' WHERE emp. active = 1 ';
    if ($search != '') {
      $where .= " AND (employee_name LIKE '%$search%' OR employee_no LIKE '%$search%')";
    }

    $sql = "SELECT employee_id, photo_thumb, employee_no, employee_name, city_name, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
      LEFT JOIN t_mtr_city city ON city.city_id = emp.birth_place_id
      {$where}
      ORDER BY {$order_column} {$order_direction} 
      LIMIT {$limit} OFFSET {$offset}";
    $query = $this->db->query($sql);
    $data['rows'] = $query->result();
    
    $sql = "SELECT COUNT(employee_id) as total from t_mtr_employee emp {$where}";
    $query = $this->db->query($sql);
    $data['total'] = $query->row()->total;

    return $data;
  }
  
  function get_info($param) {
    $sql = "SELECT employee_id, photo, employee_no, employee_name, city_name, birth_date, phone, division_name, position_name, phone, address, start_date, 
      npwp, gen.lookup_label AS gender_name, mar.lookup_label AS marriage_status_name, rel.lookup_label AS religion_name, edu.lookup_label AS education_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
      LEFT JOIN t_mtr_city city ON city.city_id = emp.birth_place_id
      LEFT JOIN t_mtr_lookup gen ON gen.lookup_key = 'gender' AND gen.lookup_value = emp.gender_id
      LEFT JOIN t_mtr_lookup mar ON mar.lookup_key = 'marriage_status' AND mar.lookup_value = emp.marriage_status_id
      LEFT JOIN t_mtr_lookup rel ON rel.lookup_key = 'religion' AND rel.lookup_value = emp.religion_id
      LEFT JOIN t_mtr_lookup edu ON edu.lookup_key = 'education' AND edu.lookup_value = emp.education_id
      WHERE employee_id = {$param}";
    $query = $this->db->query($sql);
    
    return $query->row();
  }
  
}

?>
