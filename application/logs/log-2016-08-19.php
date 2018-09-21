<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-19 00:00:59 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-19 01:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?? and product_name!="" order by tbl_product_id desc LIMIT  0,8' at line 1 - Invalid query: select * from tbl_product where tbl_main_category_id=Åø and product_name!="" order by tbl_product_id desc LIMIT  0,8
ERROR - 2016-08-19 10:00:53 --> Severity: Notice --> Undefined index: id /var/www/vastramela.com/public_html/application/controllers/Cart.php 73
ERROR - 2016-08-19 10:00:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and tbl_product_id=151' at line 1 - Invalid query: select * from tbl_shoping_cart WHERE tbl_customer_id= and tbl_product_id=151
ERROR - 2016-08-19 10:00:53 --> Severity: Notice --> Undefined index: id /var/www/vastramela.com/public_html/application/controllers/Cart.php 83
ERROR - 2016-08-19 10:00:53 --> Query error: Column 'tbl_customer_id' cannot be null - Invalid query: INSERT INTO `tbl_shoping_cart` (`tbl_product_id`, `tbl_customer_id`, `qty`, `c_date`) VALUES ('151', NULL, '1', '2016-08-19 10:00:53')
ERROR - 2016-08-19 13:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '??' at line 1 - Invalid query: select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=Åø
ERROR - 2016-08-19 13:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?? GROUP BY tp.tbl_product_id' at line 1 - Invalid query: SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,''))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,''))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,''))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,''))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=Åø GROUP BY tp.tbl_product_id
ERROR - 2016-08-19 13:57:09 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 176
ERROR - 2016-08-19 13:57:09 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 185
ERROR - 2016-08-19 19:49:45 --> Severity: Notice --> Undefined variable: username /var/www/vastramela.com/public_html/application/controllers/Helper.php 75
ERROR - 2016-08-19 19:49:45 --> Severity: Notice --> Undefined variable: password /var/www/vastramela.com/public_html/application/controllers/Helper.php 75
ERROR - 2016-08-19 19:49:45 --> Severity: Notice --> Undefined variable: username /var/www/vastramela.com/public_html/application/controllers/Helper.php 76
ERROR - 2016-08-19 19:49:45 --> Severity: Notice --> Undefined variable: password /var/www/vastramela.com/public_html/application/controllers/Helper.php 76
