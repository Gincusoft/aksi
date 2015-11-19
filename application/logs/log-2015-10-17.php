<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-17 19:59:04 --> 404 Page Not Found: Buying/index
ERROR - 2015-10-17 20:42:41 --> 404 Page Not Found: Cashier_location/index
ERROR - 2015-10-17 20:55:29 --> 404 Page Not Found: Employee/index
ERROR - 2015-10-17 21:02:39 --> Severity: Error --> Interface 'Tumbas_Interface' not found /home/tumbas/Web/icos/application/controllers/Employee.php 13
ERROR - 2015-10-17 21:05:04 --> Severity: Notice --> Undefined variable: title /home/tumbas/Web/icos/application/views/template.php 10
ERROR - 2015-10-17 21:05:04 --> Severity: Notice --> Undefined variable: content /home/tumbas/Web/icos/application/views/template.php 331
ERROR - 2015-10-17 21:06:08 --> Severity: Notice --> Undefined variable: title /home/tumbas/Web/icos/application/views/template.php 10
ERROR - 2015-10-17 21:07:50 --> Severity: Notice --> Undefined variable: month_list /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:07:50 --> Severity: Notice --> Undefined variable: month_now /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:07:50 --> Severity: Notice --> Undefined variable: year_list /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:07:50 --> Severity: Notice --> Undefined variable: year_now /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:08:00 --> Severity: Notice --> Undefined variable: month_list /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:08:00 --> Severity: Notice --> Undefined variable: month_now /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:08:00 --> Severity: Notice --> Undefined variable: year_list /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:08:00 --> Severity: Notice --> Undefined variable: year_now /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:08:53 --> Severity: Notice --> Undefined variable: month_list /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:08:53 --> Severity: Notice --> Undefined variable: month_now /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:08:53 --> Severity: Notice --> Undefined variable: year_list /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:08:53 --> Severity: Notice --> Undefined variable: year_now /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:20:09 --> Severity: Notice --> Undefined variable: month_list /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:20:09 --> Severity: Notice --> Undefined variable: month_now /home/tumbas/Web/icos/application/views/employee/list.php 28
ERROR - 2015-10-17 21:20:09 --> Severity: Notice --> Undefined variable: year_list /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:20:09 --> Severity: Notice --> Undefined variable: year_now /home/tumbas/Web/icos/application/views/employee/list.php 35
ERROR - 2015-10-17 21:21:01 --> Severity: Notice --> Undefined index: year /home/tumbas/Web/icos/application/models/Journals_model.php 34
ERROR - 2015-10-17 21:21:01 --> Severity: Notice --> Undefined index: month /home/tumbas/Web/icos/application/models/Journals_model.php 34
ERROR - 2015-10-17 21:21:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND MONTH(journals_date) <=  AND (transaction_id LIKE '%%' OR account_name LIKE ' at line 4 - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1 AND YEAR(journals_date) =  AND MONTH(journals_date) <=  AND (transaction_id LIKE '%%' OR account_name LIKE '%%' OR account_no LIKE '%%') 
            ORDER BY journals_date ASC, journals_detail_id ASC
            -- LIMIT -1 OFFSET 0
ERROR - 2015-10-17 21:21:20 --> Severity: Notice --> Undefined index: year /home/tumbas/Web/icos/application/models/Journals_model.php 34
ERROR - 2015-10-17 21:21:20 --> Severity: Notice --> Undefined index: month /home/tumbas/Web/icos/application/models/Journals_model.php 34
ERROR - 2015-10-17 21:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND MONTH(journals_date) <=  AND (transaction_id LIKE '%%' OR account_name LIKE ' at line 4 - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1 AND YEAR(journals_date) =  AND MONTH(journals_date) <=  AND (transaction_id LIKE '%%' OR account_name LIKE '%%' OR account_no LIKE '%%') 
            ORDER BY journals_date ASC, journals_detail_id ASC
            -- LIMIT -1 OFFSET 0
ERROR - 2015-10-17 21:38:12 --> 404 Page Not Found: Employee/get_list
ERROR - 2015-10-17 21:38:52 --> Severity: Notice --> Undefined property: Employee::$account_model /home/tumbas/Web/icos/application/controllers/Employee.php 50
ERROR - 2015-10-17 21:38:52 --> Severity: Error --> Call to a member function get_list() on a non-object /home/tumbas/Web/icos/application/controllers/Employee.php 50
ERROR - 2015-10-17 21:40:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1 OFFSET 0' at line 4 - Invalid query: SELECT * FROM t_mtr_employee 
       WHERE active = 1 
      ORDER BY employee_date ASC 
      LIMIT -1 OFFSET 0
ERROR - 2015-10-17 21:40:49 --> Query error: Unknown column 'employee_date' in 'order clause' - Invalid query: SELECT * FROM t_mtr_employee 
       WHERE active = 1 
      ORDER BY employee_date ASC 
      LIMIT 10 OFFSET 0
