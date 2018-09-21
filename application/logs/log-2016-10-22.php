<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-22 11:02:30 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=id
ERROR - 2016-10-22 11:02:30 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,''))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,''))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,''))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,''))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=id GROUP BY tp.tbl_product_id
ERROR - 2016-10-22 11:02:30 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 181
ERROR - 2016-10-22 11:02:30 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 193
ERROR - 2016-10-22 19:56:43 --> Severity: Notice --> Undefined variable: ids /var/www/vastramela.com/public_html/application/controllers/Category.php 30
ERROR - 2016-10-22 19:56:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and product_name!="" order by tbl_product_id desc LIMIT  0,8' at line 1 - Invalid query: select * from tbl_product where tbl_main_category_id= and product_name!="" order by tbl_product_id desc LIMIT  0,8
ERROR - 2016-10-22 19:56:43 --> Severity: Notice --> Undefined variable: cart /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 99
ERROR - 2016-10-22 19:56:44 --> Severity: Notice --> Undefined variable: username /var/www/vastramela.com/public_html/application/controllers/Helper.php 77
ERROR - 2016-10-22 19:56:44 --> Severity: Notice --> Undefined variable: password /var/www/vastramela.com/public_html/application/controllers/Helper.php 77
ERROR - 2016-10-22 19:56:44 --> Severity: Notice --> Undefined variable: username /var/www/vastramela.com/public_html/application/controllers/Helper.php 78
ERROR - 2016-10-22 19:56:44 --> Severity: Notice --> Undefined variable: password /var/www/vastramela.com/public_html/application/controllers/Helper.php 78
ERROR - 2016-10-22 19:56:48 --> Severity: Notice --> Undefined variable: pro /var/www/vastramela.com/public_html/application/controllers/Ecom.php 87
ERROR - 2016-10-22 19:57:22 --> Severity: Notice --> Undefined variable: upid /var/www/vastramela.com/public_html/application/controllers/Checkout.php 95
ERROR - 2016-10-22 19:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: select * from tbl_customer_address WHERE tbl_customer_address_id=
ERROR - 2016-10-22 19:57:22 --> Severity: Notice --> Undefined index: id /var/www/vastramela.com/public_html/application/controllers/Checkout.php 97
ERROR - 2016-10-22 19:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: update tbl_customer_address set is_default=0 WHERE tbl_customer_id=
ERROR - 2016-10-22 19:57:22 --> Severity: Notice --> Undefined variable: upid /var/www/vastramela.com/public_html/application/controllers/Checkout.php 98
ERROR - 2016-10-22 19:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: update tbl_customer_address set is_default=1 WHERE tbl_customer_address_id=
ERROR - 2016-10-22 22:38:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:43 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:43 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:43 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:38:43 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:38:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:44 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:44 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:44 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:38:44 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:38:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:45 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:45 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:45 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:38:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:38:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:45 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:38:45 --> Unable to connect to the database
ERROR - 2016-10-22 22:38:45 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:38:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:00 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:00 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:00 --> Query error: No such file or directory - Invalid query: select * from tbl_main_category where name= 'Dress'
ERROR - 2016-10-22 22:39:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:00 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:00 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:00 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:01 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:01 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:01 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:01 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:01 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:01 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:02 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:02 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:02 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:03 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:03 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:03 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:03 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:03 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:03 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:04 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:04 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:04 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:04 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:04 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:04 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:04 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:04 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:07 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:07 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:07 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-22 22:39:07 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:08 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:08 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:08 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-22 22:39:08 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:08 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:08 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:08 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:08 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:08 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:08 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:08 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:08 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:14 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:14 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:14 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-22 22:39:14 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:14 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:14 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:14 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-22 22:39:14 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:14 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:14 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:14 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:14 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:15 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:15 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:15 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:15 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:39 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:39 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:39 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-22 22:39:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:39 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:39 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:39 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_product`
ERROR - 2016-10-22 22:39:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:39 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:39 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:39 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
ERROR - 2016-10-22 22:39:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:40 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /var/www/vastramela.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2016-10-22 22:39:40 --> Unable to connect to the database
ERROR - 2016-10-22 22:39:40 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `tbl_contact`
ERROR - 2016-10-22 22:39:40 --> Severity: error --> Exception: Call to a member function result_array() on boolean /var/www/vastramela.com/public_html/application/models/Data_model.php 21
