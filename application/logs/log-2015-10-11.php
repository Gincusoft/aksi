<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-11 04:00:42 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:03:41 --> Severity: Notice --> Undefined index: invoice /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:03:41 --> Severity: Notice --> Undefined index: supplier_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:03:41 --> Severity: Notice --> Undefined index: payment_type_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:03:41 --> Query error: Unknown column 'invoice' in 'field list' - Invalid query: INSERT INTO `t_trx_journals` (`invoice`, `journals_date`, `supplier_id`, `payment_type_id`, `created_by`, `created_on`) VALUES (NULL, '2015-10-11', NULL, NULL, 1, '2015-10-11 04:03:41')
ERROR - 2015-10-11 04:03:48 --> Severity: Notice --> Undefined index: invoice /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:03:48 --> Severity: Notice --> Undefined index: supplier_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:03:48 --> Severity: Notice --> Undefined index: payment_type_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:03:48 --> Query error: Unknown column 'invoice' in 'field list' - Invalid query: INSERT INTO `t_trx_journals` (`invoice`, `journals_date`, `supplier_id`, `payment_type_id`, `created_by`, `created_on`) VALUES (NULL, '2015-10-11', NULL, NULL, 1, '2015-10-11 04:03:48')
ERROR - 2015-10-11 04:04:00 --> Severity: Notice --> Undefined index: invoice /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:04:00 --> Severity: Notice --> Undefined index: supplier_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:04:00 --> Severity: Notice --> Undefined index: payment_type_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:04:00 --> Query error: Unknown column 'invoice' in 'field list' - Invalid query: INSERT INTO `t_trx_journals` (`invoice`, `journals_date`, `supplier_id`, `payment_type_id`, `created_by`, `created_on`) VALUES (NULL, '2015-10-11', NULL, NULL, 1, '2015-10-11 04:04:00')
ERROR - 2015-10-11 04:13:08 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:14:00 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:14:10 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:14:21 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:14:53 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:15:24 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:15:30 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:53:33 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:53:43 --> Severity: Notice --> Undefined index: invoice /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:53:43 --> Severity: Notice --> Undefined index: supplier_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:53:43 --> Severity: Notice --> Undefined index: payment_type_id /home/tumbas/Web/koperasi/application/models/Journals_model.php 184
ERROR - 2015-10-11 04:53:43 --> Query error: Unknown column 'invoice' in 'field list' - Invalid query: INSERT INTO `t_trx_journals` (`invoice`, `journals_date`, `supplier_id`, `payment_type_id`, `created_by`, `created_on`) VALUES (NULL, '2015-10-11', NULL, NULL, 1, '2015-10-11 04:53:43')
ERROR - 2015-10-11 04:53:53 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:54:00 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 04:59:06 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 05:00:48 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 05:01:31 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 05:04:18 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 05:08:09 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 05:33:01 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 05:52:51 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$total_cost /home/tumbas/Web/koperasi/application/controllers/Journals.php 91
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 93
ERROR - 2015-10-11 13:04:58 --> Severity: Notice --> Undefined property: stdClass::$invoice /home/tumbas/Web/koperasi/application/controllers/Journals.php 99
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:06:53 --> Severity: Notice --> Undefined property: stdClass::$status /home/tumbas/Web/koperasi/application/controllers/Journals.php 94
ERROR - 2015-10-11 13:19:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE transaction_id LIKE '%222%' OR account_name LIKE '%222%' OR account_no LIK' at line 10 - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id)
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id)
             WHERE transaction_id LIKE '%222%' OR account_name LIKE '%222%' OR account_no LIKE '%222%'
            ORDER BY journals_date DESC, journals_detail_id ASC
            LIMIT 10 OFFSET 0
ERROR - 2015-10-11 13:24:33 --> Query error: Unknown column 'transaction_id' in 'where clause' - Invalid query: SELECT COUNT(journals_detail_id) AS count FROM (
            (SELECT detail.journals_detail_id
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1) 
            UNION
            (SELECT detail.journals_detail_id
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2) 
            ) AS t1  WHERE transaction_id LIKE '%222%' OR account_name LIKE '%222%' OR account_no LIKE '%222%'
ERROR - 2015-10-11 13:26:49 --> Query error: Unknown column 'detail.account_i' in 'on clause' - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_i )
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            ORDER BY journals_date DESC, journals_detail_id ASC
            LIMIT 10 OFFSET 0
ERROR - 2015-10-11 13:28:11 --> Query error: Unknown column 'detail.account_i' in 'on clause' - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_i  WHERE transaction_id LIKE '%22%' OR account_name LIKE '%22%' OR account_no LIKE '%22%')
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id  WHERE transaction_id LIKE '%22%' OR account_name LIKE '%22%' OR account_no LIKE '%22%')
            ORDER BY journals_date DESC, journals_detail_id ASC
            LIMIT 10 OFFSET 0
ERROR - 2015-10-11 13:29:47 --> Query error: Unknown column 'detail.account_i' in 'on clause' - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_i  WHERE transaction_id LIKE '%22%' OR account_name LIKE '%22%' OR account_no LIKE '%22%')
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id  WHERE transaction_id LIKE '%22%' OR account_name LIKE '%22%' OR account_no LIKE '%22%')
            ORDER BY journals_date DESC, journals_detail_id ASC
            LIMIT 10 OFFSET 0
ERROR - 2015-10-11 13:29:54 --> Query error: Unknown column 'account_name' in 'where clause' - Invalid query: SELECT COUNT(journals_detail_id) AS count FROM (
            (SELECT detail.journals_detail_id
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1  WHERE transaction_id LIKE '%22%' OR account_name LIKE '%22%' OR account_no LIKE '%22%') 
            UNION
            (SELECT detail.journals_detail_id
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2  WHERE transaction_id LIKE '%22%' OR account_name LIKE '%22%' OR account_no LIKE '%22%') 
            ) AS t1
ERROR - 2015-10-11 13:46:40 --> 404 Page Not Found: Mw/index
ERROR - 2015-10-11 13:46:45 --> 404 Page Not Found: Mw/index
ERROR - 2015-10-11 15:11:23 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/koperasi/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-11 16:24:55 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/koperasi/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-11 16:51:19 --> 404 Page Not Found: Ledger/index
ERROR - 2015-10-11 16:54:26 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 16:54:40 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 16:54:50 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 16:58:41 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 16:59:48 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:05:34 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:05:43 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:06:32 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 39
ERROR - 2015-10-11 17:06:32 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:06:47 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 39
ERROR - 2015-10-11 17:06:47 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:06:58 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 39
ERROR - 2015-10-11 17:06:58 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:08:23 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 39
ERROR - 2015-10-11 17:08:23 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:08:31 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 39
ERROR - 2015-10-11 17:08:31 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:10:22 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 39
ERROR - 2015-10-11 17:10:22 --> Query error: Table 'db_gincu_koperasi.t_mtr_ledger' doesn't exist - Invalid query: SELECT COUNT(supp_id) as total from t_mtr_ledger  WHERE status = 1 
ERROR - 2015-10-11 17:11:55 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 38
ERROR - 2015-10-11 17:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1 OFFSET 0' at line 11 - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT -1 OFFSET 0
ERROR - 2015-10-11 17:12:18 --> Severity: Notice --> Undefined index: search /home/tumbas/Web/koperasi/application/controllers/Ledger.php 38
ERROR - 2015-10-11 17:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/tumbas/Web/koperasi/application/controllers/Ledger.php 51
ERROR - 2015-10-11 17:16:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/tumbas/Web/koperasi/application/controllers/Ledger.php 51
ERROR - 2015-10-11 17:19:19 --> Query error: Column 'account_id' in where clause is ambiguous - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id  WHERE account_id = 0)
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id  WHERE account_id = 0)
            ORDER BY journals_date ASC, journals_detail_id ASC
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:48 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 17:25:58 --> Severity: Notice --> Use of undefined constant saldo - assumed 'saldo' /home/tumbas/Web/koperasi/application/controllers/Ledger.php 57
ERROR - 2015-10-11 18:40:05 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/koperasi/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-11 18:40:20 --> Severity: Warning --> opendir(/var/lib/php5): failed to open dir: Permission denied /home/tumbas/Web/koperasi/system/libraries/Session/drivers/Session_files_driver.php 329
ERROR - 2015-10-11 19:44:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1 OFFSET 0' at line 11 - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT -1 OFFSET 0
ERROR - 2015-10-11 19:44:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1 OFFSET 0' at line 11 - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            ORDER BY journals_date ASC, journals_detail_id ASC
            LIMIT -1 OFFSET 0
ERROR - 2015-10-11 19:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '--LIMIT -1 OFFSET 0' at line 11 - Invalid query: (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, detail.amount AS debit, 0 AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            UNION
            (SELECT header.journals_id, detail.journals_detail_id, transaction_id, journals_date, account_no, account_name, header.remark, detail.account_type, 0  AS debit, detail.amount AS credit
            FROM t_trx_journals header
            LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
            LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id )
            ORDER BY journals_date ASC, journals_detail_id ASC
            --LIMIT -1 OFFSET 0
ERROR - 2015-10-11 20:47:18 --> Severity: Notice --> Undefined variable: list /home/tumbas/Web/koperasi/application/controllers/Trial_balance.php 24
ERROR - 2015-10-11 20:47:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/tumbas/Web/koperasi/application/controllers/Trial_balance.php 24
ERROR - 2015-10-11 20:47:18 --> Severity: 4096 --> Object of class stdClass could not be converted to string /home/tumbas/Web/koperasi/system/helpers/form_helper.php 405
ERROR - 2015-10-11 20:47:50 --> Severity: 4096 --> Object of class stdClass could not be converted to string /home/tumbas/Web/koperasi/system/helpers/form_helper.php 405
ERROR - 2015-10-11 21:09:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2015'')
                        ORDER BY account_no ASC
            ) AS tt
    ' at line 10 - Invalid query: SELECT account_no, account_name, SUM(debit) AS debit, SUM(credit) AS credit FROM (
            (SELECT account_no, account_name, detail.amount AS debit, 0 AS credit
                        FROM t_trx_journals header
                        LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 1
                        LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = '2015')
                        UNION
                        (SELECT account_no, account_name, 0  AS debit, detail.amount AS credit
                        FROM t_trx_journals header
                        LEFT JOIN  t_trx_journals_detail  detail  ON  detail.journals_id = header.journals_id AND detail.account_type = 2
                        LEFT JOIN t_mtr_account acc ON acc.account_id = detail.account_id WHERE YEAR(journals_date) = ''2015'')
                        ORDER BY account_no ASC
            ) AS tt
            GROUP BY account_no
            ORDER BY account_no ASC
ERROR - 2015-10-11 21:10:31 --> Severity: Notice --> Undefined variable: i /home/tumbas/Web/koperasi/application/controllers/Trial_balance.php 44
