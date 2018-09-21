<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-08-23 02:54:53 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 176
ERROR - 2016-08-23 02:54:53 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 185
ERROR - 2016-08-23 05:02:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and product_name!="" order by tbl_product_id desc LIMIT  0,8' at line 1 - Invalid query: select * from tbl_product where tbl_main_category_id= and product_name!="" order by tbl_product_id desc LIMIT  0,8
ERROR - 2016-08-23 05:05:24 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 176
ERROR - 2016-08-23 05:05:24 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 185
ERROR - 2016-08-23 05:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??' at line 1 - Invalid query: select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=Åø
ERROR - 2016-08-23 05:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?? GROUP BY tp.tbl_product_id' at line 1 - Invalid query: SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,''))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,''))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,''))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,''))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=Åø GROUP BY tp.tbl_product_id
ERROR - 2016-08-23 05:24:31 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 176
ERROR - 2016-08-23 05:24:31 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 185
ERROR - 2016-08-23 11:19:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 11:19:22 --> Unable to connect to the database
ERROR - 2016-08-23 11:19:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 11:19:23 --> Unable to connect to the database
ERROR - 2016-08-23 16:49:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 16:49:23 --> Unable to connect to the database
ERROR - 2016-08-23 16:49:23 --> Query error: Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-08-23 16:49:23 --> Severity: Error --> Call to a member function result_array() on a non-object /var/www/vastramela.com/public_html/application/models/Data_model.php 20
ERROR - 2016-08-23 11:31:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 11:31:52 --> Unable to connect to the database
ERROR - 2016-08-23 17:01:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 17:01:52 --> Unable to connect to the database
ERROR - 2016-08-23 17:01:52 --> Query error: Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) - Invalid query: SELECT *
FROM `tbl_config`
ERROR - 2016-08-23 17:01:52 --> Severity: Error --> Call to a member function result_array() on a non-object /var/www/vastramela.com/public_html/application/models/Data_model.php 20
ERROR - 2016-08-23 13:32:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 13:32:05 --> Unable to connect to the database
ERROR - 2016-08-23 19:02:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 19:02:05 --> Unable to connect to the database
ERROR - 2016-08-23 19:02:05 --> Query error: Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-08-23 19:02:05 --> Severity: Error --> Call to a member function result_array() on a non-object /var/www/vastramela.com/public_html/application/models/Data_model.php 20
ERROR - 2016-08-23 14:18:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 14:18:35 --> Unable to connect to the database
ERROR - 2016-08-23 19:48:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-08-23 19:48:35 --> Unable to connect to the database
ERROR - 2016-08-23 19:48:35 --> Query error: Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111) - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-08-23 19:48:35 --> Severity: Error --> Call to a member function result_array() on a non-object /var/www/vastramela.com/public_html/application/models/Data_model.php 20
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-23 23:32:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
