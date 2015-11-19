<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-20 20:33:51 --> 404 Page Not Found: Employee/is_unique
ERROR - 2015-10-20 20:35:50 --> Severity: Notice --> Undefined index: photo /home/tumbas/Web/icos/application/controllers/Employee.php 220
ERROR - 2015-10-20 20:35:50 --> Query error: Unknown column 'birth_place_id' in 'field list' - Invalid query: INSERT INTO `t_mtr_employee` (`employee_name`, `employee_no`, `birth_place_id`, `birth_date`, `gender_id`, `marriage_status_id`, `phone`, `address`, `start_date`, `status_id`, `division_id`, `position_id`, `npwp`, `religion_id`, `education_id`, `photo`, `photo_thumb`, `active`, `created_by`, `created_on`) VALUES ('Andedi', '123456', '1', '1991-06-28', '1', '2', '087918626622', 'Patrol', '2015-10-20', NULL, '2', '1', NULL, '1', '9', NULL, NULL, 1, 1, '2015-10-20 20:35:50')
ERROR - 2015-10-20 20:37:34 --> Severity: Notice --> Undefined index: photo /home/tumbas/Web/icos/application/controllers/Employee.php 220
ERROR - 2015-10-20 20:37:34 --> Query error: Unknown column 'birth_place_id' in 'field list' - Invalid query: INSERT INTO `t_mtr_employee` (`employee_name`, `employee_no`, `birth_place_id`, `birth_date`, `gender_id`, `marriage_status_id`, `phone`, `address`, `start_date`, `status_id`, `division_id`, `position_id`, `npwp`, `religion_id`, `education_id`, `photo`, `photo_thumb`, `active`, `created_by`, `created_on`) VALUES ('Andedi', '123', '1', '1991-01-01', '1', '2', '0871231343545', 'Patrol', '2015-10-20', NULL, '3', '1', NULL, '1', '9', NULL, NULL, 1, 1, '2015-10-20 20:37:34')
ERROR - 2015-10-20 20:45:48 --> The upload destination folder does not appear to be writable.
ERROR - 2015-10-20 20:47:16 --> Query error: Unknown column 'birth_place_id' in 'field list' - Invalid query: INSERT INTO `t_mtr_employee` (`employee_name`, `employee_no`, `birth_place_id`, `birth_date`, `gender_id`, `marriage_status_id`, `phone`, `address`, `start_date`, `status_id`, `division_id`, `position_id`, `npwp`, `religion_id`, `education_id`, `photo`, `photo_thumb`, `active`, `created_by`, `created_on`) VALUES ('Andedi', '123', '1', '1991-06-28', '1', '1', '123', 'Patrol', '2015-10-20', NULL, '2', '1', NULL, '1', '9', NULL, NULL, 1, 1, '2015-10-20 20:47:16')
ERROR - 2015-10-20 20:50:00 --> The image you are attempting to upload doesn't fit into the allowed dimensions.
ERROR - 2015-10-20 20:50:00 --> Query error: Unknown column 'city_id' in 'field list' - Invalid query: SELECT employee_id, employee_no, employee_name, city_id, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-20 20:50:50 --> Severity: Notice --> Undefined property: stdClass::$city_id /home/tumbas/Web/icos/application/controllers/Employee.php 57
ERROR - 2015-10-20 21:01:45 --> Severity: Notice --> Undefined property: stdClass::$photo_thumb /home/tumbas/Web/icos/application/controllers/Employee.php 56
ERROR - 2015-10-20 21:01:45 --> Severity: Notice --> Undefined property: stdClass::$photo_thumb /home/tumbas/Web/icos/application/controllers/Employee.php 56
ERROR - 2015-10-20 21:04:18 --> 404 Page Not Found: Assets/images
ERROR - 2015-10-20 21:04:18 --> 404 Page Not Found: Assets/images
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:41:27 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:33 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:43:51 --> Severity: Notice --> Undefined property: stdClass::$empoloyee_id /home/tumbas/Web/icos/application/controllers/Employee.php 62
ERROR - 2015-10-20 21:44:15 --> 404 Page Not Found: Employee/view
ERROR - 2015-10-20 21:45:17 --> 404 Page Not Found: Employee/view
ERROR - 2015-10-20 22:07:02 --> 404 Page Not Found: Assets/images
ERROR - 2015-10-20 22:12:35 --> Severity: Compile Error --> Cannot redeclare Employee_model::get_list() /home/tumbas/Web/icos/application/models/Employee_model.php 43
ERROR - 2015-10-20 22:12:39 --> Severity: Compile Error --> Cannot redeclare Employee_model::get_list() /home/tumbas/Web/icos/application/models/Employee_model.php 43
