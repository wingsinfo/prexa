<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 51
ERROR - 2016-08-21 00:42:55 --> Severity: Notice --> Undefined index: name /var/www/vastramela.com/public_html/application/views/Client/shop.php 72
ERROR - 2016-08-21 15:23:42 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=id
ERROR - 2016-08-21 15:23:42 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,''))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,''))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,''))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,''))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=id GROUP BY tp.tbl_product_id
ERROR - 2016-08-21 15:23:42 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 176
ERROR - 2016-08-21 15:23:42 --> Severity: Notice --> Undefined variable: dt /var/www/vastramela.com/public_html/application/views/Client/single-product.php 185
