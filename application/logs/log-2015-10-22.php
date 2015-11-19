<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-22 21:05:59 --> 404 Page Not Found: Journals/print
ERROR - 2015-10-22 21:06:19 --> 404 Page Not Found: Journals/print
ERROR - 2015-10-22 21:10:45 --> 404 Page Not Found: Journals/print
ERROR - 2015-10-22 21:12:14 --> Severity: Warning --> Missing argument 1 for Journals::print_report() /home/tumbas/Web/icos/application/controllers/Journals.php 447
ERROR - 2015-10-22 21:12:14 --> Severity: Notice --> Undefined variable: param /home/tumbas/Web/icos/application/controllers/Journals.php 448
ERROR - 2015-10-22 21:12:14 --> Query error: Table 'db_gincu_koperasi.t_mtr_supplier' doesn't exist - Invalid query: SELECT `journals_id`, `invoice`, `supplier_id`, `supp_name`, `supp_address`, `journals_date`, `payment_type_id`, `payment`.`lookup_label` AS `payment_type`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = "payment_type"
WHERE `journals_id` = ''
ERROR - 2015-10-22 21:13:06 --> Query error: Table 'db_gincu_koperasi.t_mtr_supplier' doesn't exist - Invalid query: SELECT `journals_id`, `invoice`, `supplier_id`, `supp_name`, `supp_address`, `journals_date`, `payment_type_id`, `payment`.`lookup_label` AS `payment_type`
FROM `t_trx_journals` `journals`
LEFT JOIN `t_mtr_supplier` `supp` ON `supp`.`supp_id` = `journals`.`supplier_id`
LEFT JOIN `t_mtr_lookup` `payment` ON `payment`.`lookup_value` = `journals`.`payment_type_id` AND `payment`.`lookup_key` = "payment_type"
WHERE `journals_id` = ''
ERROR - 2015-10-22 22:06:56 --> Severity: Error --> Cannot redeclare sql_to_human_simple() (previously declared in /home/tumbas/Web/icos/application/helpers/tumbas_helper.php:73) /home/tumbas/Web/icos/application/helpers/tumbas_helper.php 105
