<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-15 14:41:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-15 14:41:28 --> Unable to connect to the database
ERROR - 2016-10-15 14:41:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-15 14:41:28 --> Unable to connect to the database
ERROR - 2016-10-15 14:41:28 --> Query error: Access denied for user 'root'@'localhost' (using password: YES) - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-15 14:41:28 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-15 14:41:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-15 14:41:28 --> Unable to connect to the database
ERROR - 2016-10-15 14:41:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-15 14:41:28 --> Unable to connect to the database
ERROR - 2016-10-15 14:41:28 --> Query error: Access denied for user 'root'@'localhost' (using password: YES) - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-15 14:41:28 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-15 22:08:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??' at line 1 - Invalid query: select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=Åø
ERROR - 2016-10-15 22:08:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?? GROUP BY tp.tbl_product_id' at line 1 - Invalid query: SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,''))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,''))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,''))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,''))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=Åø GROUP BY tp.tbl_product_id
ERROR - 2016-10-15 22:08:10 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 181
ERROR - 2016-10-15 22:08:10 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 193
