<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-28 13:59:44 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'vastramela.tp.tbl_product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select *,count(tbl_product_id) count from tbl_main_category tmc,tbl_product tp where tp.tbl_main_category_id=tmc.tbl_main_category_id group by tmc.tbl_main_category_id order by tp.tbl_product_id desc
ERROR - 2018-07-28 14:00:13 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'vastramela.tp.tbl_product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select *,count(tbl_product_id) count from tbl_main_category tmc,tbl_product tp where tp.tbl_main_category_id=tmc.tbl_main_category_id group by tmc.tbl_main_category_id order by tp.tbl_product_id desc
ERROR - 2018-07-28 14:00:23 --> Severity: Notice --> Undefined variable: ptid E:\wamp\www\vastramela\application\controllers\Admin\Type.php 44
ERROR - 2018-07-28 14:00:23 --> Query error: Column 'tbl_product_type_id' cannot be null - Invalid query: INSERT INTO `tbl_type` (`tbl_product_type_id`, `name`, `created_date`) VALUES (NULL, 'Test', '2018-07-28 14:00:23')
ERROR - 2018-07-28 14:00:40 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'vastramela.tp.tbl_product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select *,count(tbl_product_id) count from tbl_main_category tmc,tbl_product tp where tp.tbl_main_category_id=tmc.tbl_main_category_id group by tmc.tbl_main_category_id order by tp.tbl_product_id desc