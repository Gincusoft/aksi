<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-14 00:05:35 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/icos/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-14 00:47:23 --> 404 Page Not Found: Profit_loss/index
ERROR - 2015-10-14 00:47:55 --> Severity: Error --> Class 'Financial_report_model' not found /home/tumbas/Web/icos/system/core/Loader.php 305
ERROR - 2015-10-14 00:48:53 --> Query error: Column 'account_id' in group statement is ambiguous - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE LEFT(account_no, 1) IN (4,5) AND YEAR(journals_date) = '2015'
            GROUP BY account_id
            ORDER BY account_no ASC
ERROR - 2015-10-14 00:48:59 --> Query error: Column 'account_id' in group statement is ambiguous - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE LEFT(account_no, 1) IN (4,5) AND YEAR(journals_date) = '2015'
            GROUP BY account_id
            ORDER BY account_no ASC
ERROR - 2015-10-14 00:49:30 --> Query error: Column 'account_id' in group statement is ambiguous - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1 AND YEAR(journals_date) = '2015'
            GROUP BY account_id
            ORDER BY account_no ASC
ERROR - 2015-10-14 00:51:57 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/icos/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-14 02:15:21 --> Severity: Warning --> Missing argument 1 for Financial_report_model::get_loss_profit_list(), called in /home/tumbas/Web/icos/application/controllers/Financial_report.php on line 29 and defined /home/tumbas/Web/icos/application/models/Financial_report_model.php 20
ERROR - 2015-10-14 02:15:21 --> Severity: Notice --> Undefined variable: search /home/tumbas/Web/icos/application/models/Financial_report_model.php 24
ERROR - 2015-10-14 02:15:21 --> Severity: Notice --> Undefined variable: loss_profit_txt /home/tumbas/Web/icos/application/views/financial_report/list.php 92
ERROR - 2015-10-14 02:15:21 --> Severity: Notice --> Undefined variable: loss_profit_debit_txt /home/tumbas/Web/icos/application/views/financial_report/list.php 93
ERROR - 2015-10-14 02:15:21 --> Severity: Notice --> Undefined variable: loss_profit_credit_txt /home/tumbas/Web/icos/application/views/financial_report/list.php 94
ERROR - 2015-10-14 02:15:41 --> Severity: Notice --> Undefined variable: loss_profit_txt /home/tumbas/Web/icos/application/views/financial_report/list.php 92
ERROR - 2015-10-14 02:15:41 --> Severity: Notice --> Undefined variable: loss_profit_debit_txt /home/tumbas/Web/icos/application/views/financial_report/list.php 93
ERROR - 2015-10-14 02:15:41 --> Severity: Notice --> Undefined variable: loss_profit_credit_txt /home/tumbas/Web/icos/application/views/financial_report/list.php 94
ERROR - 2015-10-14 03:21:05 --> Severity: Notice --> Undefined variable: loss_profit_debit /home/tumbas/Web/icos/application/views/financial_report/list.php 151
ERROR - 2015-10-14 03:21:05 --> Severity: Notice --> Undefined variable: loss_profit_credit /home/tumbas/Web/icos/application/views/financial_report/list.php 152
ERROR - 2015-10-14 03:21:11 --> Severity: Notice --> Undefined variable: loss_profit_debit /home/tumbas/Web/icos/application/views/financial_report/list.php 151
ERROR - 2015-10-14 03:21:11 --> Severity: Notice --> Undefined variable: loss_profit_credit /home/tumbas/Web/icos/application/views/financial_report/list.php 152
ERROR - 2015-10-14 03:21:35 --> Severity: Notice --> Undefined variable: loss_profit_debit /home/tumbas/Web/icos/application/views/financial_report/list.php 151
ERROR - 2015-10-14 03:21:35 --> Severity: Notice --> Undefined variable: loss_profit_credit /home/tumbas/Web/icos/application/views/financial_report/list.php 152
ERROR - 2015-10-14 03:21:45 --> Severity: Notice --> Undefined variable: loss_profit_debit /home/tumbas/Web/icos/application/views/financial_report/list.php 151
ERROR - 2015-10-14 03:21:45 --> Severity: Notice --> Undefined variable: loss_profit_credit /home/tumbas/Web/icos/application/views/financial_report/list.php 152
ERROR - 2015-10-14 14:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(transaction_id LIKE '%kas%' OR account_name LIKE '%kas%' OR account_no LIKE '%k' at line 4 - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1 (transaction_id LIKE '%kas%' OR account_name LIKE '%kas%' OR account_no LIKE '%kas%') 
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT 100 OFFSET 0
ERROR - 2015-10-14 14:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(transaction_id LIKE '%kas%' OR account_name LIKE '%kas%' OR account_no LIKE '%k' at line 4 - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1 (transaction_id LIKE '%kas%' OR account_name LIKE '%kas%' OR account_no LIKE '%kas%') 
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT 100 OFFSET 0
ERROR - 2015-10-14 14:11:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(transaction_id LIKE '%kas%' OR account_name LIKE '%kas%' OR account_no LIKE '%k' at line 4 - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1 (transaction_id LIKE '%kas%' OR account_name LIKE '%kas%' OR account_no LIKE '%kas%') 
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT 100 OFFSET 0
ERROR - 2015-10-14 14:26:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1 OFFSET 0' at line 6 - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 1
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT -1 OFFSET 0
