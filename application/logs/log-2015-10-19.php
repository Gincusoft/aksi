<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-19 21:31:11 --> Severity: Notice --> Undefined variable: list_gender /home/tumbas/Web/icos/application/views/employee/add.php 41
ERROR - 2015-10-19 21:31:11 --> Severity: Notice --> Undefined variable: list_gender /home/tumbas/Web/icos/application/views/employee/add.php 121
ERROR - 2015-10-19 21:31:11 --> Severity: Notice --> Undefined variable: list_gender /home/tumbas/Web/icos/application/views/employee/add.php 127
ERROR - 2015-10-19 22:33:19 --> Query error: Unknown column 'birth_place' in 'field list' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-19 22:33:24 --> Query error: Unknown column 'birth_place' in 'field list' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-19 22:33:51 --> Severity: Notice --> Undefined property: stdClass::$birth_place /home/tumbas/Web/icos/application/controllers/Employee.php 57
ERROR - 2015-10-19 22:35:17 --> Query error: Unknown column 'birth_place_id' in 'field list' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place_id, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-19 22:35:34 --> Severity: Notice --> Undefined property: stdClass::$birth_place_id /home/tumbas/Web/icos/application/controllers/Employee.php 57
