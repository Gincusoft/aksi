<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-18 14:11:56 --> 404 Page Not Found: Reference/index
ERROR - 2015-10-18 15:10:21 --> 404 Page Not Found: Reference/index
ERROR - 2015-10-18 16:40:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'div ON div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position p' at line 3 - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division div ON div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:40:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'div ON div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position p' at line 3 - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division div ON div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:40:45 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/icos/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-18 16:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'div ON ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos O' at line 3 - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division div ON ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:40:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'div ON ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos O' at line 3 - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division div ON ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON p' at line 3 - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:41:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON p' at line 3 - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division div ON div.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:42:57 --> Query error: Unknown column 'position_name' in 'field list' - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:43:22 --> Query error: Column 'active' in where clause is ambiguous - Invalid query: SELECT employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE active = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 16:43:34 --> Query error: Unknown column 'emp.active' in 'where clause' - Invalid query: SELECT COUNT(employee_id) as total from t_mtr_employee  WHERE emp.active = 1 
ERROR - 2015-10-18 16:43:49 --> Severity: Notice --> Undefined property: stdClass::$employee_id /home/tumbas/Web/icos/application/controllers/Employee.php 56
ERROR - 2015-10-18 16:44:22 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/icos/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-18 16:59:09 --> Severity: Notice --> Undefined variable: data_loading_text /home/tumbas/Web/icos/application/views/employee/add.php 22
ERROR - 2015-10-18 17:06:27 --> Severity: Notice --> Undefined variable: list_gender /home/tumbas/Web/icos/application/views/employee/add.php 34
ERROR - 2015-10-18 17:06:27 --> Severity: Notice --> Undefined variable: list_city /home/tumbas/Web/icos/application/views/employee/add.php 40
ERROR - 2015-10-18 17:06:27 --> Severity: Notice --> Undefined variable: list_day /home/tumbas/Web/icos/application/views/employee/add.php 46
ERROR - 2015-10-18 17:06:27 --> Severity: Notice --> Undefined variable: list_month /home/tumbas/Web/icos/application/views/employee/add.php 49
ERROR - 2015-10-18 17:06:27 --> Severity: Notice --> Undefined variable: list_year /home/tumbas/Web/icos/application/views/employee/add.php 52
ERROR - 2015-10-18 17:07:46 --> Severity: Notice --> Undefined property: Employee::$city_model /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:07:46 --> Severity: Error --> Call to a member function get_city_all() on a non-object /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:07:51 --> Severity: Notice --> Undefined property: Employee::$city_model /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:07:51 --> Severity: Error --> Call to a member function get_city_all() on a non-object /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:08:02 --> Severity: Notice --> Undefined variable: list_gender /home/tumbas/Web/icos/application/views/employee/add.php 34
ERROR - 2015-10-18 17:08:02 --> Severity: Notice --> Undefined variable: list_city /home/tumbas/Web/icos/application/views/employee/add.php 40
ERROR - 2015-10-18 17:08:02 --> Severity: Notice --> Undefined variable: list_day /home/tumbas/Web/icos/application/views/employee/add.php 46
ERROR - 2015-10-18 17:08:02 --> Severity: Notice --> Undefined variable: list_month /home/tumbas/Web/icos/application/views/employee/add.php 49
ERROR - 2015-10-18 17:08:02 --> Severity: Notice --> Undefined variable: list_year /home/tumbas/Web/icos/application/views/employee/add.php 52
ERROR - 2015-10-18 17:09:04 --> Severity: Notice --> Undefined variable: list_city /home/tumbas/Web/icos/application/views/employee/add.php 40
ERROR - 2015-10-18 17:14:33 --> Severity: Notice --> Undefined property: Employee::$city_model /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:14:33 --> Severity: Error --> Call to a member function get_city_all() on a non-object /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:14:38 --> Severity: Notice --> Undefined property: Employee::$city_model /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:14:38 --> Severity: Error --> Call to a member function get_city_all() on a non-object /home/tumbas/Web/icos/application/controllers/Employee.php 85
ERROR - 2015-10-18 17:15:16 --> Query error: Unknown column 'status' in 'where clause' - Invalid query: SELECT * FROM t_mtr_city WHERE status = 1 ORDER BY city_name
ERROR - 2015-10-18 20:34:30 --> 404 Page Not Found: Reference/index
ERROR - 2015-10-18 21:34:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%' OR employee_no LIKE '%'%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFF' at line 5 - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '%'%' OR employee_no LIKE '%'%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:34:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%' OR employee_no LIKE '%'%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFF' at line 5 - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '%'%' OR employee_no LIKE '%'%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:38:07 --> Query error: Unknown column 'employeeno' in 'where clause' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '%?%' OR employeeno LIKE '%?%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:39:17 --> Query error: Unknown column 'employeeno' in 'where clause' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '% ? %' OR employeeno LIKE '% ? %')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:39:25 --> Query error: Unknown column 'employeeno' in 'where clause' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '% ? %' OR employeeno LIKE '% ? %')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?  AND (employee_name LIKE '% ? %' OR employeeno LIKE '% ? %')
      ORDER BY em' at line 5 - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = ?  AND (employee_name LIKE '% ? %' OR employeeno LIKE '% ? %')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:40:54 --> Query error: Unknown column 'emp.activ' in 'where clause' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. activ = 1 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:42:13 --> Query error: Table 'db_gincu_koperasi.t_mtr_employe' doesn't exist - Invalid query: SELECT COUNT(employee_id) as total from t_mtr_employe emp  WHERE emp. active = 1 
ERROR - 2015-10-18 21:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '? 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0' at line 5 - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = ? 
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:43:54 --> Query error: Unknown column 'employeeno' in 'where clause' - Invalid query: SELECT employee_id, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '%?%' OR employeeno LIKE '%?%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-18 21:47:13 --> Query error: Unknown column 'employee_i' in 'field list' - Invalid query: SELECT employee_i, employee_no, employee_name, birth_place, birth_date, phone, division_name, position_name
      FROM t_mtr_employee emp
      LEFT JOIN t_mtr_division divs ON divs.division_id = emp.division_id
      LEFT JOIN t_mtr_position pos ON pos.position_id = emp.position_id
       WHERE emp. active = 1  AND (employee_name LIKE '%?%' OR employee_no LIKE '%?%')
      ORDER BY employee_no ASC 
      LIMIT 10 OFFSET 0
