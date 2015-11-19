<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-13 00:10:17 --> Query error: Unknown column 'detail.amount' in 'field list' - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit FROM (
            (SELECT account_no, account_name, detail.amount AS debit, 0 AS credit
                        FROM t_trx_journals header
                        LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
                        LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015')
                        UNION ALL
                        (SELECT account_no, account_name, 0  AS debit, detail.amount AS credit
                        FROM t_trx_journals header
                        LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
                        LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015')
                        ORDER BY account_no ASC
            ) AS tt
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-13 00:11:38 --> Query error: Unknown column 'detail.amount' in 'field list' - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit FROM (
            (SELECT account_no, account_name, detail.amount AS debit, 0 AS credit
                        FROM t_trx_journals header
                        LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
                        LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015')
                        UNION ALL
                        (SELECT account_no, account_name, 0  AS debit, detail.amount AS credit
                        FROM t_trx_journals header
                        LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
                        LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015')
                        ORDER BY account_no ASC
            ) AS tt
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-13 00:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail ' at line 2 - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit FROM 
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015'
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 66
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:20:05 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/adjusting_journals/add.php 184
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 66
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:23:45 --> Severity: Notice --> Undefined property: stdClass::$account_type /home/tumbas/Web/koperasi/application/views/journals/edit.php 180
ERROR - 2015-10-13 00:38:55 --> Query error: Unknown column 'adjusting_journals_date' in 'order clause' - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 2
            ORDER BY adjusting_journals_date ASC, journals_detail_id ASC
            LIMIT 10 OFFSET 0
ERROR - 2015-10-13 00:39:00 --> Query error: Unknown column 'adjusting_journals_date' in 'order clause' - Invalid query: SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, debit, credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE journals_type = 2
            ORDER BY adjusting_journals_date ASC, journals_detail_id ASC
            LIMIT 10 OFFSET 0
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined property: stdClass::$adjusting_journals_id /home/tumbas/Web/koperasi/application/controllers/Adjusting_journals.php 82
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined property: stdClass::$adjusting_journals_date /home/tumbas/Web/koperasi/application/controllers/Adjusting_journals.php 84
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined offset: 2 /home/tumbas/Web/koperasi/application/helpers/tumbas_helper.php 70
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined offset: 1 /home/tumbas/Web/koperasi/application/helpers/tumbas_helper.php 70
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined index:  /home/tumbas/Web/koperasi/application/helpers/tumbas_helper.php 70
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined property: stdClass::$adjusting_journals_id /home/tumbas/Web/koperasi/application/controllers/Adjusting_journals.php 82
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined property: stdClass::$adjusting_journals_date /home/tumbas/Web/koperasi/application/controllers/Adjusting_journals.php 84
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined offset: 2 /home/tumbas/Web/koperasi/application/helpers/tumbas_helper.php 70
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined offset: 1 /home/tumbas/Web/koperasi/application/helpers/tumbas_helper.php 70
ERROR - 2015-10-13 00:41:58 --> Severity: Notice --> Undefined index:  /home/tumbas/Web/koperasi/application/helpers/tumbas_helper.php 70
ERROR - 2015-10-13 01:20:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'YEAR(journals_date) = '2015'
            GROUP BY account_no
            ORDER B' at line 4 - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE LEFT(account_no, 1) IN (4,5) YEAR(journals_date) = '2015'
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-13 01:20:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'YEAR(journals_date) = '2015'
            GROUP BY account_no
            ORDER B' at line 4 - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE LEFT(account_no, 1) IN (4,5) YEAR(journals_date) = '2015'
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-13 20:52:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''WHERE journals_type = 1  
            GROUP BY account_no
            ORDER BY ' at line 5 - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015'
            'WHERE journals_type = 1  
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-13 20:52:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE journals_type = 1  
            GROUP BY account_no
            ORDER BY a' at line 5 - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015'
            WHERE journals_type = 1  
            GROUP BY account_no
            ORDER BY account_no ASC
