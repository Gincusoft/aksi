<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-10 09:37:56 --> 404 Page Not Found: Coa/index
ERROR - 2015-10-10 09:39:51 --> 404 Page Not Found: Account/index
ERROR - 2015-10-10 09:42:43 --> Query error: Unknown column 'account_id' in 'field list' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_customer  WHERE status = 1 
ERROR - 2015-10-10 09:43:05 --> Query error: Unknown column 'account_id' in 'field list' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_customer  WHERE status = 1 
ERROR - 2015-10-10 09:43:21 --> Query error: Unknown column 'account_id' in 'field list' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_customer  WHERE status = 1 
ERROR - 2015-10-10 09:44:09 --> Query error: Unknown column 'account_id' in 'field list' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_customer  WHERE status = 1 
ERROR - 2015-10-10 09:44:21 --> Query error: Unknown column 'account_id' in 'field list' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_customer  WHERE status = 1 
ERROR - 2015-10-10 09:44:26 --> Query error: Unknown column 'account_id' in 'field list' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_customer  WHERE status = 1 
ERROR - 2015-10-10 09:44:49 --> Query error: Table 'db_gincu_koperasi.t_mtr_account' doesn't exist - Invalid query: SELECT COUNT(account_id) as total from t_mtr_account  WHERE status = 1 
ERROR - 2015-10-10 09:46:33 --> Query error: Unknown column 'active' in 'where clause' - Invalid query: SELECT * FROM t_mtr_menu WHERE active = 1 AND parent_id = 0 ORDER BY order_no asc
ERROR - 2015-10-10 09:47:15 --> Query error: Unknown column 'active' in 'where clause' - Invalid query: SELECT * FROM t_mtr_menu WHERE active = 1 AND parent_id = 0 ORDER BY order_no asc
ERROR - 2015-10-10 09:47:37 --> Query error: Table 'db_gincu_koperasi.t_mtr_account' doesn't exist - Invalid query: SELECT COUNT(account_id) as total from t_mtr_account  WHERE active = 1 
ERROR - 2015-10-10 09:47:42 --> Query error: Table 'db_gincu_koperasi.t_mtr_account' doesn't exist - Invalid query: SELECT COUNT(account_id) as total from t_mtr_account  WHERE active = 1 
ERROR - 2015-10-10 10:12:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN t_mtr_lookup look ON look.lookup_value = acc.account_type AND lookup_key = ' at line 3 - Invalid query: SELECT account_id, account_no, account_name, account_type, lookup_desc AS account_type_desc 
      FROM t_mtr_account acc  WHERE active = 1  
      JOIN t_mtr_lookup look ON look.lookup_value = acc.account_type AND lookup_key = 'account_type'
      ORDER BY account_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-10 10:12:42 --> Query error: Unknown column 'lookup_desc' in 'field list' - Invalid query: SELECT account_id, account_no, account_name, account_type, lookup_desc AS account_type_desc 
      FROM t_mtr_account acc 
      JOIN t_mtr_lookup look ON look.lookup_value = acc.account_type AND lookup_key = 'account_type'
       WHERE active = 1 
      ORDER BY account_no ASC 
      LIMIT 10 OFFSET 0
ERROR - 2015-10-10 10:15:35 --> Query error: Unknown column 'account_address' in 'where clause' - Invalid query: SELECT COUNT(account_id) as total from t_mtr_account  WHERE active = 1  AND (account_name LIKE '%11%' OR account_address LIKE '%11%' OR account_phone LIKE '%11%')
ERROR - 2015-10-10 10:24:14 --> Severity: Notice --> Undefined variable: cust_id /home/tumbas/Web/koperasi/application/views/account/edit.php 7
ERROR - 2015-10-10 10:24:14 --> Severity: Notice --> Undefined variable: cust_name /home/tumbas/Web/koperasi/application/views/account/edit.php 12
ERROR - 2015-10-10 10:24:14 --> Severity: Notice --> Undefined variable: cust_address /home/tumbas/Web/koperasi/application/views/account/edit.php 18
ERROR - 2015-10-10 10:24:14 --> Severity: Notice --> Undefined variable: cust_phone /home/tumbas/Web/koperasi/application/views/account/edit.php 24
ERROR - 2015-10-10 10:33:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/tumbas/Web/koperasi/application/controllers/Account.php 90
ERROR - 2015-10-10 10:35:58 --> Query error: Unknown column 'status' in 'where clause' - Invalid query: SELECT *
FROM `t_mtr_account`
WHERE `account_name` IS NULL
AND `status` = 1
ERROR - 2015-10-10 10:37:15 --> Query error: Unknown column 'status' in 'where clause' - Invalid query: SELECT *
FROM `t_mtr_account`
WHERE `account_no` = '1111'
AND `status` = 1
ERROR - 2015-10-10 10:38:39 --> Query error: Unknown column 'account_address' in 'field list' - Invalid query: INSERT INTO `t_mtr_account` (`account_name`, `account_address`, `account_phone`, `active`, `created_by`, `created_on`) VALUES ('1111', NULL, NULL, 1, 1, '2015-10-10 10:38:39')
ERROR - 2015-10-10 10:38:47 --> Query error: Unknown column 'account_address' in 'field list' - Invalid query: INSERT INTO `t_mtr_account` (`account_name`, `account_address`, `account_phone`, `active`, `created_by`, `created_on`) VALUES ('1111', NULL, NULL, 1, 1, '2015-10-10 10:38:47')
ERROR - 2015-10-10 10:42:25 --> Severity: Notice --> Undefined variable: cust_id /home/tumbas/Web/koperasi/application/views/account/edit.php 7
ERROR - 2015-10-10 10:42:25 --> Severity: Notice --> Undefined variable: cust_name /home/tumbas/Web/koperasi/application/views/account/edit.php 12
ERROR - 2015-10-10 10:42:25 --> Severity: Notice --> Undefined variable: cust_address /home/tumbas/Web/koperasi/application/views/account/edit.php 18
ERROR - 2015-10-10 10:42:25 --> Severity: Notice --> Undefined variable: cust_phone /home/tumbas/Web/koperasi/application/views/account/edit.php 24
ERROR - 2015-10-10 10:47:44 --> Severity: Notice --> Undefined variable: account_type_list /home/tumbas/Web/koperasi/application/views/account/edit.php 24
ERROR - 2015-10-10 10:48:18 --> Severity: Error --> Cannot use object of type stdClass as array /home/tumbas/Web/koperasi/application/controllers/Account.php 136
ERROR - 2015-10-10 10:48:33 --> Severity: Error --> Cannot use object of type stdClass as array /home/tumbas/Web/koperasi/application/controllers/Account.php 136
ERROR - 2015-10-10 15:49:18 --> 404 Page Not Found: Journals/index
ERROR - 2015-10-10 15:55:02 --> 404 Page Not Found: Journals/index
ERROR - 2015-10-10 16:06:45 --> 404 Page Not Found: Buying/get_list
ERROR - 2015-10-10 16:07:54 --> 404 Page Not Found: Buying/get_list
ERROR - 2015-10-10 16:08:22 --> 404 Page Not Found: Buying/get_list
ERROR - 2015-10-10 16:08:24 --> 404 Page Not Found: Buying/add
ERROR - 2015-10-10 16:08:26 --> 404 Page Not Found: Buying/get_list
ERROR - 2015-10-10 16:08:29 --> 404 Page Not Found: Buying/get_list
ERROR - 2015-10-10 16:09:03 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:09:15 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:09:20 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:12:39 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:13:23 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:14:22 --> Query error: Unknown column 'invoice' in 'field list' - Invalid query: SELECT `invoice`
FROM `t_trx_journals`
ORDER BY `invoice` DESC
 LIMIT 1
ERROR - 2015-10-10 16:15:54 --> Severity: Notice --> Undefined variable: invoice /home/tumbas/Web/koperasi/application/views/journals/add.php 21
ERROR - 2015-10-10 16:15:54 --> Severity: Notice --> Undefined variable: supplier_list /home/tumbas/Web/koperasi/application/views/journals/add.php 27
ERROR - 2015-10-10 16:15:54 --> Severity: Notice --> Undefined variable: buying_date /home/tumbas/Web/koperasi/application/views/journals/add.php 34
ERROR - 2015-10-10 16:15:54 --> Severity: Notice --> Undefined variable: payment_type_list /home/tumbas/Web/koperasi/application/views/journals/add.php 42
ERROR - 2015-10-10 16:15:55 --> 404 Page Not Found: Buying/get_temp_item
ERROR - 2015-10-10 16:16:45 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:17:57 --> Severity: Notice --> Undefined variable: invoice /home/tumbas/Web/koperasi/application/views/journals/add.php 21
ERROR - 2015-10-10 16:17:57 --> Severity: Notice --> Undefined variable: supplier_list /home/tumbas/Web/koperasi/application/views/journals/add.php 27
ERROR - 2015-10-10 16:17:57 --> Severity: Notice --> Undefined variable: buying_date /home/tumbas/Web/koperasi/application/views/journals/add.php 34
ERROR - 2015-10-10 16:17:57 --> Severity: Notice --> Undefined variable: payment_type_list /home/tumbas/Web/koperasi/application/views/journals/add.php 42
ERROR - 2015-10-10 16:17:57 --> 404 Page Not Found: Buying/get_temp_item
ERROR - 2015-10-10 16:20:16 --> 404 Page Not Found: Buying/get_temp_item
ERROR - 2015-10-10 16:20:23 --> 404 Page Not Found: Buying/get_temp_item
ERROR - 2015-10-10 16:20:35 --> 404 Page Not Found: Buying/get_temp_item
ERROR - 2015-10-10 16:21:00 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:22:35 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:23:26 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:24:38 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:24:42 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:24:50 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:24:54 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:24:57 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:28:51 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:28:53 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:29:21 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:30:08 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:30:28 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:30:44 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:31:03 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:37:30 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:43:33 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:44:00 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:44:05 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:45:26 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:45:29 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:46:18 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:46:28 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:47:49 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:47:51 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:47:57 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:48:04 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:48:24 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:48:26 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:48:42 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:48:45 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:48:57 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:49:58 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:50:00 --> Query error: Table 'db_gincu_koperasi.t_tmp_journals' doesn't exist - Invalid query: SELECT `tmp_journals_id`, `journals`.`item_id`, `item_code`, `item_name`, `quantity`, `cost`, `discount`
FROM `t_tmp_journals` `journals`
JOIN `t_mtr_item` `item` ON `item`.`item_id` = `journals`.`item_id`
WHERE `journals`.`created_by` = 1
ORDER BY `tmp_journals_id` ASC
ERROR - 2015-10-10 16:50:16 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:50:35 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:50:58 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:51:05 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:51:37 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:52:31 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:54:52 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:57:57 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:58:46 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:59:26 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 16:59:42 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 17:00:00 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 17:06:13 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 17:17:30 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 17:27:58 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 17:28:06 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined property: mysqli::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined property: mysqli::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined variable: transaction_id /home/tumbas/Web/koperasi/application/views/journals/add.php 22
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined variable: remark /home/tumbas/Web/koperasi/application/views/journals/add.php 37
ERROR - 2015-10-10 17:45:21 --> Severity: Notice --> Undefined variable: loading_text /home/tumbas/Web/koperasi/application/views/journals/add.php 89
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Undefined property: mysqli::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Undefined property: mysqli::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 17:45:51 --> Severity: Notice --> Undefined variable: loading_text /home/tumbas/Web/koperasi/application/views/journals/add.php 89
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Undefined property: mysqli::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Undefined property: mysqli::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:28:53 --> Severity: Notice --> Undefined variable: loading_text /home/tumbas/Web/koperasi/application/views/journals/add.php 89
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Undefined property: mysqli::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Undefined property: mysqli::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:38 --> Severity: Notice --> Undefined variable: loading_text /home/tumbas/Web/koperasi/application/views/journals/add.php 89
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Undefined property: mysqli::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Undefined property: mysqli::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:32:47 --> Severity: Notice --> Undefined variable: loading_text /home/tumbas/Web/koperasi/application/views/journals/add.php 89
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Undefined property: mysqli::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Undefined property: mysqli::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_key /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Undefined property: mysqli_result::$lookup_value /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 19:33:38 --> Severity: Notice --> Trying to get property of non-object /home/tumbas/Web/koperasi/application/controllers/Journals.php 84
ERROR - 2015-10-10 20:01:32 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:08:11 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:08:36 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:15:47 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:15:50 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:16:28 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:16:50 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:44:27 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:46:44 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
ERROR - 2015-10-10 20:57:06 --> Query error: Unknown column 'journals.supplier_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = 'payment_type' 
LEFT JOIN `t_mtr_user` `user` ON `user`.`user_id` = `journals`.`created_by`
