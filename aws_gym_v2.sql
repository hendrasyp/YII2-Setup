/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : aws_gym_v2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2015-11-26 17:42:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1447339552');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1447339556');

-- ----------------------------
-- Table structure for `mtcities`
-- ----------------------------
DROP TABLE IF EXISTS `mtcities`;
CREATE TABLE `mtcities` (
  `city_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `city_created` date NOT NULL,
  `city_updated` date NOT NULL,
  `city_status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `city_country_id` int(10) unsigned NOT NULL,
  `city_province_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `city_country_id` (`city_country_id`) USING BTREE,
  KEY `city_province_id` (`city_province_id`),
  CONSTRAINT `mtcities_ibfk_1` FOREIGN KEY (`city_province_id`) REFERENCES `mtprovinces` (`province_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mtcities_ibfk_2` FOREIGN KEY (`city_country_id`) REFERENCES `mtcountries` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtcities
-- ----------------------------
INSERT INTO `mtcities` VALUES ('1', 'Bandung', '0000-00-00', '2015-11-26', 'ACTIVE', '1', '1');
INSERT INTO `mtcities` VALUES ('2', 'Bandung', '2015-11-26', '2015-11-26', 'ACTIVE', '1', '1');
INSERT INTO `mtcities` VALUES ('3', 'Nagasaki', '2015-11-26', '2015-11-26', 'ACTIVE', '2', '4');

-- ----------------------------
-- Table structure for `mtcountries`
-- ----------------------------
DROP TABLE IF EXISTS `mtcountries`;
CREATE TABLE `mtcountries` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `country_created` date NOT NULL,
  `country_updated` date NOT NULL,
  `country_status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtcountries
-- ----------------------------
INSERT INTO `mtcountries` VALUES ('1', 'INDONESIA', '2015-11-25', '2015-11-25', 'ACTIVE');
INSERT INTO `mtcountries` VALUES ('2', 'JAPAN', '2015-11-25', '2015-11-25', 'ACTIVE');
INSERT INTO `mtcountries` VALUES ('3', 'MALAYSIA', '2015-11-25', '2015-11-25', 'ACTIVE');
INSERT INTO `mtcountries` VALUES ('4', 'SINGAPORE', '2015-11-25', '2015-11-25', 'ACTIVE');
INSERT INTO `mtcountries` VALUES ('5', 'THAILAND', '2015-11-25', '2015-11-25', 'INACTIVE');
INSERT INTO `mtcountries` VALUES ('6', 'AWSDASD', '2015-11-25', '2015-11-25', 'INACTIVE');
INSERT INTO `mtcountries` VALUES ('7', 'OKEZONE', '2015-11-25', '2015-11-25', 'INACTIVE');
INSERT INTO `mtcountries` VALUES ('8', 'TES', '2015-11-25', '2015-11-25', 'INACTIVE');
INSERT INTO `mtcountries` VALUES ('9', 'ASDF', '2015-11-25', '2015-11-25', 'INACTIVE');
INSERT INTO `mtcountries` VALUES ('10', 'ASDE', '2015-11-25', '2015-11-25', 'INACTIVE');

-- ----------------------------
-- Table structure for `mtemployeegroups`
-- ----------------------------
DROP TABLE IF EXISTS `mtemployeegroups`;
CREATE TABLE `mtemployeegroups` (
  `employee_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_group_name` varchar(255) NOT NULL,
  `employee_group_remark` varchar(255) NOT NULL,
  `employee_group_price` double(10,2) NOT NULL,
  `employee_group_created` date NOT NULL,
  `employee_group_updated` date NOT NULL,
  `employee_group_status` enum('ACTIVE','INACTIVE') DEFAULT 'ACTIVE',
  PRIMARY KEY (`employee_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtemployeegroups
-- ----------------------------

-- ----------------------------
-- Table structure for `mtemployees`
-- ----------------------------
DROP TABLE IF EXISTS `mtemployees`;
CREATE TABLE `mtemployees` (
  `employee_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(255) NOT NULL,
  `employee_group_id` int(10) unsigned NOT NULL,
  `employee_created` date NOT NULL,
  `employee_updated` date NOT NULL,
  `employee_status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`employee_id`),
  KEY `employee_group_id` (`employee_group_id`),
  CONSTRAINT `mtemployees_ibfk_1` FOREIGN KEY (`employee_group_id`) REFERENCES `mtemployeegroups` (`employee_group_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtemployees
-- ----------------------------

-- ----------------------------
-- Table structure for `mtgroups`
-- ----------------------------
DROP TABLE IF EXISTS `mtgroups`;
CREATE TABLE `mtgroups` (
  `group_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_code` enum('USERS GROUP','ITEMS','PACKAGES','STORE','BRANCHES') NOT NULL DEFAULT 'ITEMS',
  `group_name` varchar(255) NOT NULL,
  `group_created` date NOT NULL,
  `group_updated` date NOT NULL,
  `group_status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtgroups
-- ----------------------------
INSERT INTO `mtgroups` VALUES ('1', 'ITEMS', 'SUPLEMEN', '2015-11-11', '2015-11-11', 'ACTIVE');
INSERT INTO `mtgroups` VALUES ('2', 'ITEMS', 'SOFT DRINK', '2015-11-11', '2015-11-11', 'ACTIVE');

-- ----------------------------
-- Table structure for `mtidentitytypes`
-- ----------------------------
DROP TABLE IF EXISTS `mtidentitytypes`;
CREATE TABLE `mtidentitytypes` (
  `identity_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identity_name` varchar(255) NOT NULL,
  PRIMARY KEY (`identity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtidentitytypes
-- ----------------------------
INSERT INTO `mtidentitytypes` VALUES ('1', 'KTP');

-- ----------------------------
-- Table structure for `mtitemcategories`
-- ----------------------------
DROP TABLE IF EXISTS `mtitemcategories`;
CREATE TABLE `mtitemcategories` (
  `category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_group_id` bigint(20) unsigned NOT NULL,
  `category_created` date NOT NULL,
  `category_updated` date NOT NULL,
  `category_status` enum('') NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `category_group_id` (`category_group_id`),
  CONSTRAINT `mtitemcategories_ibfk_1` FOREIGN KEY (`category_group_id`) REFERENCES `mtgroups` (`group_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtitemcategories
-- ----------------------------
INSERT INTO `mtitemcategories` VALUES ('1', 'SUPLEMEN CAIR', '1', '0000-00-00', '0000-00-00', '');

-- ----------------------------
-- Table structure for `mtitems`
-- ----------------------------
DROP TABLE IF EXISTS `mtitems`;
CREATE TABLE `mtitems` (
  `item_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_category_id` bigint(20) unsigned NOT NULL,
  `item_uom` enum('PCS','UNIT') NOT NULL DEFAULT 'PCS',
  `item_base_price` double NOT NULL,
  `item_inc_price` int(11) NOT NULL COMMENT 'in percent',
  `item_min_qty` int(11) NOT NULL,
  `item_remark` text NOT NULL,
  `item_created` date NOT NULL,
  `item_updated` date NOT NULL,
  `item_code` varchar(255) DEFAULT NULL,
  `item_barcode` varchar(255) DEFAULT NULL,
  `item_picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `item_category_id` (`item_category_id`),
  CONSTRAINT `mtitems_ibfk_1` FOREIGN KEY (`item_category_id`) REFERENCES `mtitemcategories` (`category_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtitems
-- ----------------------------
INSERT INTO `mtitems` VALUES ('2', 'VIAGRA 50mg', '1', 'PCS', '90000', '10', '1', 'Khusus Obat dewasa', '2015-11-11', '2015-11-11', 'XXX', 'XXX0002', null);

-- ----------------------------
-- Table structure for `mtmembergroups`
-- ----------------------------
DROP TABLE IF EXISTS `mtmembergroups`;
CREATE TABLE `mtmembergroups` (
  `member_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_group_code` varchar(2) NOT NULL,
  `member_group_name` varchar(50) NOT NULL,
  `member_group_price` double(10,2) NOT NULL,
  `member_group_remark` text NOT NULL,
  `member_group_created` datetime NOT NULL,
  `member_group_date` datetime NOT NULL,
  PRIMARY KEY (`member_group_id`),
  UNIQUE KEY `member_group_code` (`member_group_code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtmembergroups
-- ----------------------------

-- ----------------------------
-- Table structure for `mtmembers`
-- ----------------------------
DROP TABLE IF EXISTS `mtmembers`;
CREATE TABLE `mtmembers` (
  `member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_group_id` int(10) unsigned NOT NULL,
  `member_identity_type_id` int(10) unsigned NOT NULL,
  `member_identity_number` varchar(255) NOT NULL,
  `member_code` varchar(255) NOT NULL,
  `member_sex` enum('MALE','FEMALE') NOT NULL DEFAULT 'MALE',
  `member_address` varchar(255) NOT NULL,
  `member_city_id` int(10) unsigned NOT NULL,
  `member_address_zipcode` varchar(255) NOT NULL,
  `member_contact_phone` varchar(255) NOT NULL,
  `member_contact_mobile` varchar(255) NOT NULL,
  `member_contact_email` varchar(255) NOT NULL,
  `member_picture` varchar(255) NOT NULL,
  `member_remark` varchar(255) NOT NULL,
  `member_created` datetime NOT NULL,
  `member_updated` datetime NOT NULL,
  `member_status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `member_register_date` datetime NOT NULL,
  `member_card_status` enum('NOT YET','DONE') NOT NULL DEFAULT 'NOT YET',
  PRIMARY KEY (`member_id`),
  KEY `member_group_id` (`member_group_id`),
  KEY `member_identity_type_id` (`member_identity_type_id`),
  KEY `member_city_id` (`member_city_id`),
  CONSTRAINT `mtmembers_ibfk_1` FOREIGN KEY (`member_group_id`) REFERENCES `mtmembergroups` (`member_group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mtmembers_ibfk_2` FOREIGN KEY (`member_identity_type_id`) REFERENCES `mtidentitytypes` (`identity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mtmembers_ibfk_3` FOREIGN KEY (`member_city_id`) REFERENCES `mtcities` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtmembers
-- ----------------------------

-- ----------------------------
-- Table structure for `mtprovinces`
-- ----------------------------
DROP TABLE IF EXISTS `mtprovinces`;
CREATE TABLE `mtprovinces` (
  `province_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province_name` varchar(100) NOT NULL,
  `province_country_id` int(10) unsigned NOT NULL,
  `province_created` datetime NOT NULL,
  `province_updated` datetime NOT NULL,
  `province_status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`province_id`),
  KEY `province_country_id` (`province_country_id`),
  CONSTRAINT `mtprovinces_ibfk_1` FOREIGN KEY (`province_country_id`) REFERENCES `mtcountries` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mtprovinces
-- ----------------------------
INSERT INTO `mtprovinces` VALUES ('1', 'Jawa Barat', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');
INSERT INTO `mtprovinces` VALUES ('2', 'Jawa Tengah', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');
INSERT INTO `mtprovinces` VALUES ('3', 'Jawa Timur', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');
INSERT INTO `mtprovinces` VALUES ('4', 'Antah Berantah', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');
INSERT INTO `mtprovinces` VALUES ('5', 'TENGTONG', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ACTIVE');
INSERT INTO `mtprovinces` VALUES ('6', 'JEPANG TIMUR', '2', '2015-11-26 01:56:33', '2015-11-26 01:56:33', 'ACTIVE');
INSERT INTO `mtprovinces` VALUES ('7', 'Jawa Oteng', '1', '2015-11-25 06:30:49', '2015-11-25 06:30:49', 'ACTIVE');

-- ----------------------------
-- Table structure for `sysmenus`
-- ----------------------------
DROP TABLE IF EXISTS `sysmenus`;
CREATE TABLE `sysmenus` (
  `menu_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `menu_url` varchar(255) DEFAULT NULL,
  `menu_parent_id` bigint(20) DEFAULT NULL,
  `menu_icon_class` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sysmenus
-- ----------------------------
INSERT INTO `sysmenus` VALUES ('1', 'Dashboard', 'Dashboard', '#', null, 'fa fa-dashboard');
INSERT INTO `sysmenus` VALUES ('2', 'Configurations', 'Configurations', 'configurations', null, 'fa fa-gear');
INSERT INTO `sysmenus` VALUES ('3', 'Regional', 'Regional', 'regional', '2', null);
INSERT INTO `sysmenus` VALUES ('4', 'Countries', 'countries', 'countries', '3', null);
INSERT INTO `sysmenus` VALUES ('5', 'Cities', 'Cities', 'cities', '3', null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', null, null, 'suhendra', 'qWMk-86i0T6BEz0xjmqMmFVrB_X2dyZZ', '$2y$13$KGlEpZ.wz1aLK2Ra54Dh.umBKTGyVM3HBkmdjRGaffZ1rF3m5ny/C', null, 'suhendra.yohana@gmail.com', '10', '1447339624', '1447339624');
