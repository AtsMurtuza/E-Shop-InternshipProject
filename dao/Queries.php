<?php

defined('SEARCH_USER_EMAIL') ? null : define('SEARCH_USER_EMAIL',"select * from `user` where `user_email`='?' ;");
defined('ADD_USER') ? null : define('ADD_USER',"INSERT INTO `user` (`user_email`,`user_password_hash`,`user_activation_hash`) values ('?','?','?');");
defined('UPDATE_USER_ACTIVATION') ? null : define('UPDATE_USER_ACTIVATION',"UPDATE `user` set `user_activation_hash` = 'ACTIVE' where `user_activation_hash` = '?';");
defined('SEARCH_USER_BY_ACTIVATION') ? null : define('SEARCH_USER_BY_ACTIVATION',"select * from `user` where `user_activation_hash`='?' ;");
defined('SEARCH_SUPPLIER_ID') ? null : define('SEARCH_SUPPLIER_ID',"select * from `tb_supplier` where `supplier_id`=?");
defined('ADD_SUPPLIER') ? null : define('ADD_SUPPLIER',"INSERT INTO `tb_supplier` (`supplier_id`,`supplier_name`) values (?,'?');");

defined('SEARCH_SHOPNAME') ? null : define('SEARCH_SHOPNAME',"select * from `tb_shop` where `shop_name`='?' ;");
defined('ADD_SHOP') ? null : define('ADD_SHOP',"INSERT INTO `tb_shop` (`shop_name`,`shop_supplier_id`,`shop_activation_hash`) values ('?',?,'?');");
defined('SEARCH_SHOP_BY_OWNER') ? null : define('SEARCH_SHOP_BY_OWNER',"select * from `tb_shop` where `shop_supplier_id`=? ;");
defined('SEARCH_SHOP_BY_ACTIVATION') ? null : define('SEARCH_SHOP_BY_ACTIVATION',"select * from `tb_shop` where `shop_activation_hash`='?' ;");
defined('UPDATE_SHOP_ACTIVATION') ? null : define('UPDATE_SHOP_ACTIVATION',"UPDATE `tb_shop` set `shop_activation_hash` = 'ACTIVE' where `shop_activation_hash` = '?';");
defined('ADD_PRODUCT') ? null : define('ADD_PRODUCT',"INSERT INTO `product` 
									  (`category_id`, `product_name`, `product_description`, `supplier_id`, `unit_price`, `product_mrp`, `available_size`, `available_color`, `discount`, `weight`, `unit_in_stock`, `unit_on_order`, `product_ranking`)
									   VALUES ('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');");
defined('CHECK_CATEGORY') ? null : define('CHECK_CATEGORY',"SELECT * FROM `category` WHERE `category_name` = '?';");
defined('FIND_PARENT') ? null : define('FIND_PARENT',"SELECT * FROM `category` where `category_id`!=0 ORDER BY `parent_id` asc;");
defined('ADD_CATEGORY') ? null : define('ADD_CATEGORY'," INSERT INTO `category`(`parent_id`, `category_name`, `category_description`, `active_bool`) VALUES ('?','?','?','?');");

defined('ADD_GIFT_COUPON') ? null : define('ADD_GIFT_COUPON'," INSERT INTO `giftcoupon`(`shop_id`, `gift_coupon_code`, `expiry_date`, `value`) VALUES ('?','?','?','?');");
defined('ADD_DISCOUNT_COUPON') ? null : define('ADD_DISCOUNT_COUPON'," INSERT INTO `discountcoupon`(`shop_id`, `discount_coupon_code`, `expiry_date`, `percentage_value`, `cash_value`) VALUES ('?','?','?','?','?');");
defined('ADD_DEALS') ? null : define('ADD_DEALS'," INSERT INTO `deals`(`shop_id`, `product_id`,`expiry_date`,`buy`,`get`)VALUES ('?','?','?','?','?');");
defined('PRODUCT_LIST') ? null :define('PRODUCT_LIST',"SELECT `product_id`, `category_id` ,`product_name`, `unit_price`,`unit_in_stock`,`product_ranking` FROM `product`;")

?>