<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined variable: cart /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 95
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined variable: cartitem /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 103
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-09-22 00:09:29 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-09-22 14:17:47 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 181
ERROR - 2016-09-22 14:17:47 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 193
ERROR - 2016-09-22 20:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and product_name!="" order by tbl_product_id desc LIMIT  0,8' at line 1 - Invalid query: select * from tbl_product where tbl_main_category_id= and product_name!="" order by tbl_product_id desc LIMIT  0,8
ERROR - 2016-09-22 20:17:46 --> Severity: Notice --> Undefined variable: cart /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 95
ERROR - 2016-09-22 20:17:46 --> Severity: Notice --> Undefined variable: cartitem /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 103
ERROR - 2016-09-22 22:02:48 --> Severity: Notice --> Undefined variable: ids /var/www/vastramela.com/public_html/application/controllers/Category.php 30
ERROR - 2016-09-22 22:02:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and product_name!="" order by tbl_product_id desc LIMIT  0,8' at line 1 - Invalid query: select * from tbl_product where tbl_main_category_id= and product_name!="" order by tbl_product_id desc LIMIT  0,8
ERROR - 2016-09-22 22:02:48 --> Severity: Notice --> Undefined variable: cart /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 95
ERROR - 2016-09-22 22:02:48 --> Severity: Notice --> Undefined variable: cartitem /var/www/vastramela.com/public_html/application/views/Client/helper/header.php 103
ERROR - 2016-09-22 22:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??' at line 1 - Invalid query: select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=Åø
ERROR - 2016-09-22 22:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?? GROUP BY tp.tbl_product_id' at line 1 - Invalid query: SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,''))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,''))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,''))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,''))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=Åø GROUP BY tp.tbl_product_id
ERROR - 2016-09-22 22:15:31 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 181
ERROR - 2016-09-22 22:15:31 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 193
