<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-09-21 09:01:51 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'vastramela.tp.tbl_product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select *,count(tbl_product_id) count from tbl_main_category tmc,tbl_product tp where tp.tbl_main_category_id=tmc.tbl_main_category_id group by tmc.tbl_main_category_id order by tp.tbl_product_id desc
