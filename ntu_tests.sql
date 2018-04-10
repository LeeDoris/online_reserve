/*
 Navicat Premium Data Transfer

 Source Server         : lee
 Source Server Type    : MySQL
 Source Server Version : 50505
 Source Host           : localhost
 Source Database       : ntu_tests

 Target Server Type    : MySQL
 Target Server Version : 50505
 File Encoding         : utf-8

 Date: 04/10/2018 22:10:08 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `categories`
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', null, '1', 'Category 1', 'category-1', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('2', null, '1', 'Category 2', 'category-2', '2018-01-10 09:31:36', '2018-01-10 09:31:36');
COMMIT;

-- ----------------------------
--  Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `cityname` varchar(255) DEFAULT NULL,
  `message` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Records of `contacts`
-- ----------------------------
BEGIN;
INSERT INTO `contacts` VALUES ('1', 'asdfasdf', 'asdf@gmail.com', '123123', 'adfsdf', 'asdfsdf', '2018-02-28 14:35:09', '2018-02-28 14:35:09'), ('2', 'adsfsdf', 'asdfasd@gmail.com', '12312312', 'sdfadf', 'adfsdf', '2018-02-28 14:36:29', '2018-02-28 14:36:29');
COMMIT;

-- ----------------------------
--  Table structure for `data_rows`
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `data_rows`
-- ----------------------------
BEGIN;
INSERT INTO `data_rows` VALUES ('1', '1', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1'), ('2', '1', 'author_id', 'text', 'Author', '1', '0', '1', '1', '0', '1', '', '2'), ('3', '1', 'category_id', 'text', 'Category', '1', '0', '1', '1', '1', '0', '', '3'), ('4', '1', 'title', 'text', 'Title', '1', '1', '1', '1', '1', '1', '', '4'), ('5', '1', 'excerpt', 'text_area', 'excerpt', '1', '0', '1', '1', '1', '1', '', '5'), ('6', '1', 'body', 'rich_text_box', 'Body', '1', '0', '1', '1', '1', '1', '', '6'), ('7', '1', 'image', 'image', 'Post Image', '0', '1', '1', '1', '1', '1', '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', '7'), ('8', '1', 'slug', 'text', 'slug', '1', '0', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', '8'), ('9', '1', 'meta_description', 'text_area', 'meta_description', '1', '0', '1', '1', '1', '1', '', '9'), ('10', '1', 'meta_keywords', 'text_area', 'meta_keywords', '1', '0', '1', '1', '1', '1', '', '10'), ('11', '1', 'status', 'select_dropdown', 'status', '1', '1', '1', '1', '1', '1', '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', '11'), ('12', '1', 'created_at', 'timestamp', 'created_at', '0', '1', '1', '0', '0', '0', '', '12'), ('13', '1', 'updated_at', 'timestamp', 'updated_at', '0', '0', '0', '0', '0', '0', '', '13'), ('14', '2', 'id', 'number', 'id', '1', '0', '0', '0', '0', '0', '', '1'), ('15', '2', 'author_id', 'text', 'author_id', '1', '0', '0', '0', '0', '0', '', '2'), ('16', '2', 'title', 'text', 'title', '1', '1', '1', '1', '1', '1', '', '3'), ('17', '2', 'excerpt', 'text_area', 'excerpt', '1', '0', '1', '1', '1', '1', '', '4'), ('18', '2', 'body', 'rich_text_box', 'body', '1', '0', '1', '1', '1', '1', '', '5'), ('19', '2', 'slug', 'text', 'slug', '1', '0', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"title\"}}', '6'), ('20', '2', 'meta_description', 'text', 'meta_description', '1', '0', '1', '1', '1', '1', '', '7'), ('21', '2', 'meta_keywords', 'text', 'meta_keywords', '1', '0', '1', '1', '1', '1', '', '8'), ('22', '2', 'status', 'select_dropdown', 'status', '1', '1', '1', '1', '1', '1', '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', '9'), ('23', '2', 'created_at', 'timestamp', 'created_at', '1', '1', '1', '0', '0', '0', '', '10'), ('24', '2', 'updated_at', 'timestamp', 'updated_at', '1', '0', '0', '0', '0', '0', '', '11'), ('25', '2', 'image', 'image', 'image', '0', '1', '1', '1', '1', '1', '', '12'), ('26', '3', 'id', 'number', 'id', '1', '0', '0', '0', '0', '0', null, '1'), ('27', '3', 'name', 'text', 'name', '1', '1', '1', '1', '1', '1', null, '2'), ('28', '3', 'email', 'text', 'email', '1', '1', '1', '1', '1', '1', null, '3'), ('29', '3', 'password', 'password', 'password', '1', '0', '0', '1', '1', '0', null, '4'), ('30', '3', 'user_belongsto_role_relationship', 'relationship', 'Role', '0', '1', '1', '1', '1', '0', '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', '10'), ('31', '3', 'remember_token', 'text', 'remember_token', '0', '0', '0', '0', '0', '0', null, '5'), ('32', '3', 'created_at', 'timestamp', 'created_at', '0', '1', '1', '0', '0', '0', null, '6'), ('33', '3', 'updated_at', 'timestamp', 'updated_at', '0', '0', '0', '0', '0', '0', null, '7'), ('34', '3', 'avatar', 'image', 'avatar', '0', '0', '1', '1', '1', '1', null, '8'), ('35', '5', 'id', 'number', 'id', '1', '0', '0', '0', '0', '0', '', '1'), ('36', '5', 'name', 'text', 'name', '1', '1', '1', '1', '1', '1', '', '2'), ('37', '5', 'created_at', 'timestamp', 'created_at', '0', '0', '0', '0', '0', '0', '', '3'), ('38', '5', 'updated_at', 'timestamp', 'updated_at', '0', '0', '0', '0', '0', '0', '', '4'), ('39', '4', 'id', 'number', 'id', '1', '0', '0', '0', '0', '0', '', '1'), ('40', '4', 'parent_id', 'select_dropdown', 'parent_id', '0', '0', '1', '1', '1', '1', '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', '2'), ('41', '4', 'order', 'text', 'order', '1', '1', '1', '1', '1', '1', '{\"default\":1}', '3'), ('42', '4', 'name', 'text', 'name', '1', '1', '1', '1', '1', '1', '', '4'), ('43', '4', 'slug', 'text', 'slug', '1', '1', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"name\"}}', '5'), ('44', '4', 'created_at', 'timestamp', 'created_at', '0', '0', '1', '0', '0', '0', '', '6'), ('45', '4', 'updated_at', 'timestamp', 'updated_at', '0', '0', '0', '0', '0', '0', '', '7'), ('46', '6', 'id', 'number', 'id', '1', '0', '0', '0', '0', '0', '', '1'), ('47', '6', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', '', '2'), ('48', '6', 'created_at', 'timestamp', 'created_at', '0', '0', '0', '0', '0', '0', '', '3'), ('49', '6', 'updated_at', 'timestamp', 'updated_at', '0', '0', '0', '0', '0', '0', '', '4'), ('50', '6', 'display_name', 'text', 'Display Name', '1', '1', '1', '1', '1', '1', '', '5'), ('51', '1', 'seo_title', 'text', 'seo_title', '0', '1', '1', '1', '1', '1', '', '14'), ('52', '1', 'featured', 'checkbox', 'featured', '1', '1', '1', '1', '1', '1', '', '15'), ('53', '3', 'role_id', 'text', 'role_id', '0', '1', '1', '1', '1', '1', null, '9'), ('54', '7', 'id', 'checkbox', 'Id', '1', '0', '0', '0', '0', '0', null, '1'), ('55', '7', 'number', 'text', 'Number', '1', '1', '1', '1', '1', '1', null, '2'), ('56', '7', 'seats', 'text', 'Seats', '1', '1', '1', '1', '1', '1', null, '3'), ('57', '7', 'position', 'text', 'Position', '0', '1', '1', '1', '1', '1', null, '4'), ('58', '7', 'description', 'text_area', 'Description', '0', '0', '1', '1', '1', '1', null, '5'), ('59', '7', 'available', 'select_dropdown', 'Available', '1', '1', '1', '1', '1', '1', '{\"default\":\"UNAVAILABLE\",\"options\":{\"0\":\"UNAVAILABLE\",\"1\":\"AVAILABLE\"}}', '6'), ('60', '7', 'image_url', 'image', 'Image Url', '0', '1', '1', '1', '1', '1', null, '7'), ('61', '7', 'created_at', 'timestamp', 'Created At', '0', '0', '1', '1', '0', '1', null, '8'), ('62', '7', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '9'), ('63', '8', 'id', 'checkbox', 'Id', '1', '0', '0', '0', '0', '0', null, '1'), ('64', '8', 'user_id', 'text', 'User Id', '1', '1', '1', '1', '1', '1', null, '2'), ('65', '8', 'table_id', 'text', 'Table Id', '1', '1', '1', '1', '1', '1', null, '3'), ('66', '8', 'reservation_start', 'text', 'Reservation Start', '1', '0', '1', '1', '1', '1', null, '4'), ('67', '8', 'reservation_end', 'text', 'Reservation End', '1', '0', '1', '1', '1', '1', null, '5'), ('68', '8', 'seats', 'text', 'Seats', '0', '1', '1', '1', '1', '1', null, '6'), ('69', '8', 'active', 'select_dropdown', 'Active', '1', '1', '1', '1', '1', '1', '{\"default\":\"ACTIVE\",\"options\":{\"0\":\"UNACTIVE\",\"1\":\"ACTIVE\"}}', '7'), ('70', '8', 'created_at', 'timestamp', 'Created At', '0', '0', '1', '1', '0', '1', null, '8'), ('71', '8', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '9'), ('72', '3', 'username', 'text', 'Username', '1', '0', '1', '1', '1', '1', null, '4'), ('73', '3', 'telephone', 'text', 'Telephone', '1', '1', '1', '1', '1', '1', null, '6');
COMMIT;

-- ----------------------------
--  Table structure for `data_types`
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `data_types`
-- ----------------------------
BEGIN;
INSERT INTO `data_types` VALUES ('1', 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', '1', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('2', 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', null, '', '', '1', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('3', 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', null, null, '1', '0', '2018-01-10 09:31:36', '2018-02-27 20:37:01'), ('4', 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', null, '', '', '1', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('5', 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', null, '', '', '1', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('6', 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', null, '', '', '1', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('7', 'tables', 'tables', 'Table', 'Tables', null, 'App\\Models\\Table', null, null, null, '1', '0', '2018-02-24 10:51:51', '2018-02-26 09:30:42'), ('8', 'reservations', 'reservations', 'Reservation', 'Reservations', null, 'App\\Models\\Reservation', null, null, null, '1', '0', '2018-02-24 15:16:31', '2018-02-24 17:04:09');
COMMIT;

-- ----------------------------
--  Table structure for `item_categories`
-- ----------------------------
DROP TABLE IF EXISTS `item_categories`;
CREATE TABLE `item_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `item_categories`
-- ----------------------------
BEGIN;
INSERT INTO `item_categories` VALUES ('7', 'expedita', '2018-02-08 17:06:14', '2018-02-08 17:06:14'), ('8', 'distinctio', '2018-02-08 17:06:14', '2018-02-08 17:06:14'), ('9', 'magnam', '2018-02-08 17:06:14', '2018-02-08 17:06:14'), ('10', 'suscipit', '2018-02-08 17:06:14', '2018-02-08 17:06:14'), ('11', 'nam', '2018-02-08 17:06:14', '2018-02-08 17:06:14'), ('12', 'omnis', '2018-02-08 17:06:14', '2018-02-08 17:06:14'), ('13', 'mollitia', '2018-02-08 17:06:14', '2018-02-08 17:06:14');
COMMIT;

-- ----------------------------
--  Table structure for `item_order`
-- ----------------------------
DROP TABLE IF EXISTS `item_order`;
CREATE TABLE `item_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_order_item_id_index` (`item_id`),
  KEY `item_order_order_id_index` (`order_id`),
  CONSTRAINT `item_order_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  CONSTRAINT `item_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `item_category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_item_category_id_index` (`item_category_id`),
  CONSTRAINT `items_item_category_id_foreign` FOREIGN KEY (`item_category_id`) REFERENCES `item_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `jobs`
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `menu_items`
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `menu_items`
-- ----------------------------
BEGIN;
INSERT INTO `menu_items` VALUES ('1', '1', 'Dashboard', '', '_self', 'voyager-home', null, null, '1', '2018-01-10 09:31:36', '2018-01-10 09:31:36', 'voyager.dashboard', null), ('2', '1', 'Media', '', '_self', 'voyager-images', null, null, '7', '2018-01-10 09:31:36', '2018-01-14 11:39:55', 'voyager.media.index', null), ('4', '1', 'Users', '', '_self', 'voyager-person', null, null, '6', '2018-01-10 09:31:36', '2018-01-14 11:39:55', 'voyager.users.index', null), ('7', '1', 'Roles', '', '_self', 'voyager-lock', null, null, '5', '2018-01-10 09:31:36', '2018-02-24 15:11:09', 'voyager.roles.index', null), ('8', '1', 'Tools', '', '_self', 'voyager-tools', null, null, '8', '2018-01-10 09:31:36', '2018-01-14 11:39:30', null, null), ('9', '1', 'Menu Builder', '', '_self', 'voyager-list', null, '8', '1', '2018-01-10 09:31:36', '2018-01-14 11:39:30', 'voyager.menus.index', null), ('10', '1', 'Database', '', '_self', 'voyager-data', null, '8', '2', '2018-01-10 09:31:36', '2018-01-14 11:39:30', 'voyager.database.index', null), ('11', '1', 'Compass', '', '_self', 'voyager-compass', null, '8', '3', '2018-01-10 09:31:36', '2018-01-14 11:39:30', 'voyager.compass.index', null), ('13', '1', 'Settings', '', '_self', 'voyager-settings', null, null, '9', '2018-01-10 09:31:36', '2018-01-14 11:39:30', 'voyager.settings.index', null), ('14', '1', 'Tables', '', '_self', 'voyager-file-text', '#000000', null, '2', '2018-02-24 10:07:29', '2018-02-24 10:40:10', 'voyager.tables.index', 'null'), ('17', '1', 'Reservations', '/admin/reservations', '_self', 'voyager-alarm-clock', '#000000', null, '3', '2018-02-24 15:16:31', '2018-02-24 15:29:09', null, ''), ('18', '2', 'Tables', '', '_self', 'voyager-file-text', '#000000', null, '10', '2018-02-28 00:33:25', '2018-02-28 00:33:25', 'voyager.tables.index', 'null'), ('19', '2', 'Reservations', '/admin/reservations', '_self', 'voyager-alarm-clock', '#000000', null, '11', '2018-02-28 00:34:51', '2018-02-28 00:34:51', null, ''), ('20', '3', 'Reservations', '/admin/reservations', '_self', 'voyager-alarm-clock', '#000000', null, '12', '2018-02-28 00:35:29', '2018-02-28 00:35:29', null, '');
COMMIT;

-- ----------------------------
--  Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `menus`
-- ----------------------------
BEGIN;
INSERT INTO `menus` VALUES ('1', 'admin', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('2', 'manager', '2018-02-28 00:31:02', '2018-02-28 00:31:02'), ('3', 'user', '2018-02-28 00:31:36', '2018-02-28 00:31:36');
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1'), ('2', '2014_10_12_100000_create_password_resets_table', '1'), ('3', '2016_01_01_000000_add_voyager_user_fields', '1'), ('4', '2016_01_01_000000_create_data_types_table', '1'), ('5', '2016_01_01_000000_create_pages_table', '1'), ('6', '2016_01_01_000000_create_posts_table', '1'), ('7', '2016_02_15_204651_create_categories_table', '1'), ('8', '2016_05_19_173453_create_menu_table', '1'), ('9', '2016_10_21_190000_create_roles_table', '1'), ('10', '2016_10_21_190000_create_settings_table', '1'), ('11', '2016_11_30_135954_create_permission_table', '1'), ('12', '2016_11_30_141208_create_permission_role_table', '1'), ('13', '2016_12_26_201236_data_types__add__server_side', '1'), ('14', '2017_01_13_000000_add_route_to_menu_items_table', '1'), ('15', '2017_01_14_005015_create_translations_table', '1'), ('16', '2017_01_15_000000_add_permission_group_id_to_permissions_table', '1'), ('17', '2017_01_15_000000_create_permission_groups_table', '1'), ('18', '2017_01_15_000000_make_table_name_nullable_in_permissions_table', '1'), ('19', '2017_03_06_000000_add_controller_to_data_types_table', '1'), ('20', '2017_04_11_000000_alter_post_nullable_fields_table', '1'), ('21', '2017_04_21_000000_add_order_to_data_rows_table', '1'), ('22', '2017_07_05_210000_add_policyname_to_data_types_table', '1'), ('23', '2017_08_05_000000_add_group_to_settings_table', '1'), ('24', '2018_01_30_175302_create_reservations_table', '2'), ('25', '2018_01_30_183637_create_tables_table', '2'), ('26', '2018_01_30_183720_create_item_categories_table', '2'), ('27', '2018_01_30_183746_create_items_table', '2'), ('28', '2018_01_30_183811_create_orders_table', '2'), ('29', '2018_01_30_183834_create_item_order_table', '2'), ('30', '2018_03_12_180246_create_jobs_table', '3');
COMMIT;

-- ----------------------------
--  Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_id` int(11) NOT NULL,
  `completed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `pages`
-- ----------------------------
BEGIN;
INSERT INTO `pages` VALUES ('1', '1', 'Tables 1', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/January2018/mKgRjj3DJj9sll8xSQ39.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-01-10 09:31:36', '2018-01-14 12:02:50');
COMMIT;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `permission_groups`
-- ----------------------------
DROP TABLE IF EXISTS `permission_groups`;
CREATE TABLE `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `permission_role`
-- ----------------------------
BEGIN;
INSERT INTO `permission_role` VALUES ('1', '1'), ('1', '2'), ('1', '3'), ('2', '1'), ('3', '1'), ('4', '1'), ('5', '1'), ('6', '1'), ('7', '1'), ('8', '1'), ('9', '1'), ('10', '1'), ('11', '1'), ('12', '1'), ('13', '1'), ('14', '1'), ('15', '1'), ('16', '1'), ('17', '1'), ('18', '1'), ('19', '1'), ('20', '1'), ('21', '1'), ('22', '1'), ('23', '1'), ('24', '1'), ('25', '1'), ('26', '1'), ('27', '1'), ('28', '1'), ('29', '1'), ('30', '1'), ('31', '1'), ('32', '1'), ('33', '1'), ('34', '1'), ('35', '1'), ('36', '1'), ('37', '1'), ('38', '1'), ('39', '1'), ('40', '1'), ('41', '1'), ('41', '3'), ('42', '1'), ('42', '3'), ('43', '1'), ('43', '3'), ('44', '1'), ('44', '3'), ('45', '1'), ('45', '3'), ('46', '1'), ('46', '2'), ('46', '3'), ('47', '1'), ('47', '3'), ('48', '1'), ('48', '3'), ('49', '1'), ('49', '3'), ('50', '1'), ('50', '3');
COMMIT;

-- ----------------------------
--  Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `permissions`
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES ('1', 'browse_admin', null, '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('2', 'browse_database', null, '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('3', 'browse_media', null, '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('4', 'browse_compass', null, '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('5', 'browse_hooks', null, '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('6', 'browse_menus', 'menus', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('7', 'read_menus', 'menus', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('8', 'edit_menus', 'menus', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('9', 'add_menus', 'menus', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('10', 'delete_menus', 'menus', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('11', 'browse_pages', 'pages', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('12', 'read_pages', 'pages', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('13', 'edit_pages', 'pages', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('14', 'add_pages', 'pages', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('15', 'delete_pages', 'pages', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('16', 'browse_roles', 'roles', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('17', 'read_roles', 'roles', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('18', 'edit_roles', 'roles', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('19', 'add_roles', 'roles', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('20', 'delete_roles', 'roles', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('21', 'browse_users', 'users', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('22', 'read_users', 'users', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('23', 'edit_users', 'users', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('24', 'add_users', 'users', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('25', 'delete_users', 'users', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('26', 'browse_posts', 'posts', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('27', 'read_posts', 'posts', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('28', 'edit_posts', 'posts', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('29', 'add_posts', 'posts', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('30', 'delete_posts', 'posts', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('31', 'browse_categories', 'categories', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('32', 'read_categories', 'categories', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('33', 'edit_categories', 'categories', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('34', 'add_categories', 'categories', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('35', 'delete_categories', 'categories', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('36', 'browse_settings', 'settings', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('37', 'read_settings', 'settings', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('38', 'edit_settings', 'settings', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('39', 'add_settings', 'settings', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('40', 'delete_settings', 'settings', '2018-01-10 09:31:36', '2018-01-10 09:31:36', null), ('41', 'browse_tables', 'tables', '2018-02-24 10:51:51', '2018-02-24 10:51:51', null), ('42', 'read_tables', 'tables', '2018-02-24 10:51:51', '2018-02-24 10:51:51', null), ('43', 'edit_tables', 'tables', '2018-02-24 10:51:51', '2018-02-24 10:51:51', null), ('44', 'add_tables', 'tables', '2018-02-24 10:51:51', '2018-02-24 10:51:51', null), ('45', 'delete_tables', 'tables', '2018-02-24 10:51:51', '2018-02-24 10:51:51', null), ('46', 'browse_reservations', 'reservations', '2018-02-24 15:16:31', '2018-02-24 15:16:31', null), ('47', 'read_reservations', 'reservations', '2018-02-24 15:16:31', '2018-02-24 15:16:31', null), ('48', 'edit_reservations', 'reservations', '2018-02-24 15:16:31', '2018-02-24 15:16:31', null), ('49', 'add_reservations', 'reservations', '2018-02-24 15:16:31', '2018-02-24 15:16:31', null), ('50', 'delete_reservations', 'reservations', '2018-02-24 15:16:31', '2018-02-24 15:16:31', null);
COMMIT;

-- ----------------------------
--  Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `posts`
-- ----------------------------
BEGIN;
INSERT INTO `posts` VALUES ('1', '0', null, 'Lorem Ipsum Post', null, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('2', '0', null, 'My Sample Post', null, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('3', '0', null, 'Latest Post', null, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('4', '0', null, 'Yarr Post', null, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-01-10 09:31:36', '2018-01-10 09:31:36');
COMMIT;

-- ----------------------------
--  Table structure for `reservations`
-- ----------------------------
DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `table_id` int(10) unsigned DEFAULT NULL,
  `reservation_start` datetime NOT NULL,
  `reservation_end` datetime NOT NULL,
  `seats` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `author_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `reservations`
-- ----------------------------
BEGIN;
INSERT INTO `reservations` VALUES ('1', '1', '2', '2018-04-10 22:00:00', '2018-04-11 01:00:00', '2', '1', '1', '2018-04-10 22:04:10', '2018-04-10 22:04:10');
COMMIT;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `roles`
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrator', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('2', 'user', 'Normal User', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('3', 'manager', 'Manager', '2018-02-24 15:02:16', '2018-02-24 15:02:16');
COMMIT;

-- ----------------------------
--  Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `settings`
-- ----------------------------
BEGIN;
INSERT INTO `settings` VALUES ('1', 'site.title', 'Site Title', 'Site Title', '', 'text', '1', 'Site'), ('2', 'site.description', 'Site Description', 'Site Description', '', 'text', '2', 'Site'), ('3', 'site.logo', 'Site Logo', '', '', 'image', '3', 'Site'), ('4', 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', '4', 'Site'), ('5', 'admin.bg_image', 'Admin Background Image', '', '', 'image', '5', 'Admin'), ('6', 'admin.title', 'Admin Title', 'Hotpot Hero', '', 'text', '1', 'Admin'), ('7', 'admin.description', 'Admin Description', 'Welcome to Hotpot Hero. Smart Restaurant Queue System.', '', 'text', '2', 'Admin'), ('8', 'admin.loader', 'Admin Loader', '', '', 'image', '3', 'Admin'), ('9', 'admin.icon_image', 'Admin Icon Image', '', '', 'image', '4', 'Admin'), ('10', 'admin.reservation.email', 'Reservation Successful', 'You have reservation success! Please get to our restaurant in', null, 'text', '1', 'Admin'), ('11', 'admin.reservationfull.email', 'Reservation Full', 'Queue success. You need wait for about', null, 'text', '2', 'Admin'), ('12', 'admin.interval.time', 'Interval Time', '5', null, 'text', '3', 'Admin'), ('13', 'admin.advance.time', 'Advance Time', '2', null, 'text', '4', 'Admin'), ('14', 'admin.queue', 'Queue', '1', null, 'text', '1', 'Admin'), ('16', 'admin.admin_restaurant_layout', 'Admin Layout', 'settings/April2018/pBdqtlpdoOqHx3UPoNqb.jpg', null, 'image', '1', 'Admin');
COMMIT;

-- ----------------------------
--  Table structure for `tables`
-- ----------------------------
DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `available` tinyint(4) NOT NULL DEFAULT '1',
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `tables`
-- ----------------------------
BEGIN;
INSERT INTO `tables` VALUES ('2', '1', '2', 'Illum.', 'Eveniet qui sit nihil consectetur incidunt exercitationem aut. Est aliquam quia voluptatem saepe omnis quisquam occaecati.', '0', 'https://lorempixel.com/640/480/?94615', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('3', '2', '8', 'Reprehenderit optio.', 'In laudantium eos laudantium possimus necessitatibus non. Enim vitae cumque mollitia molestiae animi. Inventore optio deleniti suscipit ex. Distinctio est qui natus in.', '0', 'https://lorempixel.com/640/480/?93602', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('4', '3', '4', 'Consequuntur.', 'Expedita et ad aliquid qui. Quia iusto consequatur optio est ullam omnis.', '1', 'https://lorempixel.com/640/480/?70474', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('5', '4', '4', 'Est.', 'Vitae voluptatem velit accusamus est. Praesentium rerum esse illum non. Quis in est aliquid enim.', '0', 'https://lorempixel.com/640/480/?55385', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('6', '5', '2', 'Unde et.', 'Consequuntur sunt qui hic voluptatum. Sapiente ut fugit impedit illum ut sint. Quis ut et esse et ex aut aperiam ullam. Et ad omnis quod mollitia soluta dolores exercitationem.', '0', 'https://lorempixel.com/640/480/?86615', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('7', '6', '4', 'Dicta.', 'Beatae occaecati reiciendis qui iure. Deserunt ea eos ad ab amet dolorem. Ea est qui sit dolores sit excepturi. Repellat explicabo praesentium optio voluptatum dolorem alias aperiam.', '1', 'https://lorempixel.com/640/480/?36892', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('8', '7', '8', 'Voluptatibus natus.', 'Sint qui suscipit aut doloremque voluptatem quo consequatur. Eveniet qui cumque dignissimos officiis. Dicta mollitia dignissimos aut itaque velit in doloribus.', '1', 'https://lorempixel.com/640/480/?42273', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('9', '8', '4', 'Voluptatibus.', 'Repellendus officia ut consequatur ipsum labore. Eius et enim voluptatem omnis temporibus ipsa quae. Exercitationem dicta eum ipsam occaecati ut.', '1', 'https://lorempixel.com/640/480/?90268', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('10', '9', '4', 'Et.', 'Est quisquam ut quibusdam maxime iure ipsum omnis libero. Aliquam doloribus et cupiditate quasi dolor. Optio odit nihil non. Cupiditate voluptatem aut fugit labore alias ut odit blanditiis.', '1', 'https://lorempixel.com/640/480/?89391', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('11', '10', '4', 'Accusamus.', 'Inventore non et ut ut laborum quasi laudantium. Corrupti eius ipsum deserunt laudantium sequi. Doloribus assumenda voluptate animi.', '0', 'https://lorempixel.com/640/480/?75625', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('12', '11', '8', 'Sed.', 'Voluptas est aut quod nisi fuga consequatur. Ut deleniti nihil consequatur eum qui hic culpa.', '1', 'https://lorempixel.com/640/480/?95841', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('13', '12', '2', 'Exercitationem.', 'Amet hic dignissimos qui eum. Harum eveniet itaque rerum rerum. Consequuntur repudiandae unde eos autem. Ea eaque magnam vitae.', '1', 'https://lorempixel.com/640/480/?27492', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('14', '13', '8', 'Eius.', 'Veritatis et dolorum velit fugit ipsa voluptatibus. Aliquam quia cumque et sint perferendis dolorem velit. Distinctio consequatur dolorum aut. Aut recusandae fugit tenetur in nihil.', '0', 'https://lorempixel.com/640/480/?69085', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('15', '14', '4', 'Sint.', 'Dolor ipsum ullam eum ut. Ea asperiores similique pariatur officia et. Voluptates in dolor deserunt repellat et.', '1', 'https://lorempixel.com/640/480/?52696', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('16', '15', '2', 'At veniam.', 'Ad suscipit eius animi eum. Alias quidem occaecati molestiae quasi. Voluptatem voluptas doloremque asperiores quasi eius provident alias.', '0', 'https://lorempixel.com/640/480/?49592', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('17', '16', '8', 'Eveniet sint.', 'Eveniet repellat corporis mollitia sunt rem sit. Sint ea non autem modi quia. Non officiis ut reiciendis eum. Dolores laborum eum dignissimos inventore.', '0', 'https://lorempixel.com/640/480/?24278', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('18', '17', '2', 'Et eos.', 'Quo sit ab laudantium ut harum similique nulla officia. Fugiat architecto vero quis magni.', '1', 'https://lorempixel.com/640/480/?33620', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('19', '18', '8', 'Quod repellat.', 'Fugit maxime aut assumenda earum ut fuga. Ipsa consequuntur et et qui nobis. Praesentium quas harum sapiente consectetur rerum dolorum. Rerum distinctio tempore et culpa reiciendis incidunt.', '0', 'https://lorempixel.com/640/480/?57255', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('20', '19', '2', 'Et.', 'Ipsam rem eligendi recusandae omnis iste occaecati. Iste ut iste aliquam libero voluptas sint eligendi. Dolor voluptatibus sunt accusamus assumenda et.', '1', 'https://lorempixel.com/640/480/?60542', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49'), ('21', '20', '2', 'Eius qui.', 'Dolorem quam sed fugiat sed accusantium ut veniam. A molestiae hic rerum consectetur. Saepe eum adipisci nobis quod quo voluptas necessitatibus.', '0', 'https://lorempixel.com/640/480/?65392', null, '2018-02-08 17:48:49', '2018-02-08 17:48:49');
COMMIT;

-- ----------------------------
--  Table structure for `translations`
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `translations`
-- ----------------------------
BEGIN;
INSERT INTO `translations` VALUES ('1', 'data_types', 'display_name_singular', '1', 'pt', 'Post', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('2', 'data_types', 'display_name_singular', '2', 'pt', 'Página', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('3', 'data_types', 'display_name_singular', '3', 'pt', 'Utilizador', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('4', 'data_types', 'display_name_singular', '4', 'pt', 'Categoria', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('5', 'data_types', 'display_name_singular', '5', 'pt', 'Menu', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('6', 'data_types', 'display_name_singular', '6', 'pt', 'Função', '2018-01-10 09:31:36', '2018-01-10 09:31:36'), ('7', 'data_types', 'display_name_plural', '1', 'pt', 'Posts', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('8', 'data_types', 'display_name_plural', '2', 'pt', 'Páginas', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('9', 'data_types', 'display_name_plural', '3', 'pt', 'Utilizadores', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('10', 'data_types', 'display_name_plural', '4', 'pt', 'Categorias', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('11', 'data_types', 'display_name_plural', '5', 'pt', 'Menus', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('12', 'data_types', 'display_name_plural', '6', 'pt', 'Funções', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('13', 'categories', 'slug', '1', 'pt', 'categoria-1', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('14', 'categories', 'name', '1', 'pt', 'Categoria 1', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('15', 'categories', 'slug', '2', 'pt', 'categoria-2', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('16', 'categories', 'name', '2', 'pt', 'Categoria 2', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('17', 'pages', 'title', '1', 'pt', 'Olá Mundo', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('18', 'pages', 'slug', '1', 'pt', 'ola-mundo', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('19', 'pages', 'body', '1', 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('20', 'menu_items', 'title', '1', 'pt', 'Painel de Controle', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('21', 'menu_items', 'title', '2', 'pt', 'Media', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('22', 'menu_items', 'title', '3', 'pt', 'Publicações', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('23', 'menu_items', 'title', '4', 'pt', 'Utilizadores', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('24', 'menu_items', 'title', '5', 'pt', 'Categorias', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('25', 'menu_items', 'title', '6', 'pt', 'Páginas', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('26', 'menu_items', 'title', '7', 'pt', 'Funções', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('27', 'menu_items', 'title', '8', 'pt', 'Ferramentas', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('28', 'menu_items', 'title', '9', 'pt', 'Menus', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('29', 'menu_items', 'title', '10', 'pt', 'Base de dados', '2018-01-10 09:31:37', '2018-01-10 09:31:37'), ('30', 'menu_items', 'title', '13', 'pt', 'Configurações', '2018-01-10 09:31:37', '2018-01-10 09:31:37');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', '1', 'Admin', 'admin', 'admin@admin.com', '12345678', 'users/January2018/T1xAO2rAKMuzLoN0ZCt0.png', '$2y$10$pFfHW8.H6ImhTENeykUBaebyxDMQJyu0v.aoeK4dOpC.wNQ282.Ta', 'GCzIhX7rIlUs4xRAVNVFtcKqfi5WSaSbGur5zxEzkFTvuee1lPuzpDPwwsRr', '2018-01-10 09:31:36', '2018-01-13 10:43:27'), ('2', '3', 'manager1', 'manager1', '1111@1111.com', '12345678', 'users/default.png', '$2y$10$Ypm4JKUH/vXo.Rj.vEHvcelz9r4b7iAo/zHbvNoKQt/y1TThC.jaC', null, '2018-02-24 15:03:43', '2018-02-24 15:03:43'), ('3', '3', 'manager2', 'manager2', '2222@2222.com', '12345678', 'users/default.png', '$2y$10$n9dchibZ0HvpWcOXGIBI6uHKkCwdSQ4fJKfuO76pjLhbzyFs5ZWSy', '5e208sUY9tO609G4TFJAQaPxejYJAUBQy3tt8H7TTtOY7DUGMrc82YVTrw7O', '2018-02-24 15:04:52', '2018-02-24 15:04:52'), ('4', '3', 'manager3', 'manager3', '3333@3333.com', '12345678', 'users/default.png', '$2y$10$d9nGQ64ycSz8.5vMJz2C9uq/7TMe6c2SHA3wrz5W84oF.93HJJR/W', null, '2018-02-24 15:05:28', '2018-02-24 15:05:28'), ('5', '3', 'manager5', 'manager5', '5555@5555.com', '12345678', 'users/default.png', '$2y$10$RpuFqImYpmj74ZSBKRMkSuZPIao3XY226NrD4.cNMrQ2FE0Y28gSG', null, '2018-02-24 15:06:12', '2018-02-24 15:06:12'), ('6', '3', 'manager4', 'manager4', '4444@4444.com', '12345678', 'users/default.png', '$2y$10$PPZjJL4PJ0XwFGeU3ghdsuQhZhEVcuQlb0Ezp.1jgF4xldhnyRxSm', null, '2018-02-24 15:06:33', '2018-02-24 15:06:33'), ('7', '2', 'user1', 'user1', '111@111.com', '12345678', 'users/default.png', '$2y$10$zwaggwxx1PVwPhmj52c9Mu.hiarMGfebUP/iWNnWrdtS2OAO7lXWm', 'zCFz3Ob2EH9vGi2nHc3Ch5SMiLpF2ZpdB1IMJWuK7sLmmGw2RDnVEAkgLd23', '2018-02-24 15:07:04', '2018-02-24 15:07:04'), ('8', '2', 'user2', 'user2', '222@222.com', '12345678', 'users/default.png', '$2y$10$6b6C9lU5dIhfEQ30N/cUeetzAonTt9/19grJS6wro9q7BXRDzD1wG', null, '2018-02-24 15:07:26', '2018-02-24 15:07:26'), ('9', '2', 'user3', 'user3', '333@333.com', '12345678', 'users/default.png', '$2y$10$i1Bn9e9COxm2I0MZlSDDTusIt4rmLVV97VBT7YCQTweaJWqBvaG8y', null, '2018-02-24 15:07:45', '2018-02-24 15:07:45'), ('10', '2', 'user4', 'user4', '444@444.com', '12345678', 'users/default.png', '$2y$10$7HfJMqGThpgV.Ri0XQ5RvOTwEpmhSVhZCHhYim.EPCFo.uqTeKRdy', null, '2018-02-24 15:08:03', '2018-02-24 15:08:03'), ('11', '2', 'user5', 'user5', '555@555.com', '12345678', 'users/default.png', '$2y$10$.jmtEOvkepYKg.LfAA9LKeFN0rkmVKvaAXt9.vgfy4DSNEn87tY4O', null, '2018-02-24 15:08:25', '2018-02-24 15:08:25'), ('12', null, 'liliangze', 'liangze', 'liangzelee@gmail.com', '87878787', 'users/default.png', '$2y$10$cojUyWMrhoM9h4HnklVH5OGQB1QwLorsDOmePHDyXGSCTrQwVBNyC', null, '2018-02-27 21:16:00', '2018-02-27 21:16:00'), ('13', '2', 'liliangze', 'liangze', 'liangzelee@gmail.com1', '87878787', 'users/default.png', '$2y$10$KQYBvtFvZhqZq9ezGDRXIOtw4Op8pSVgJLkhhJxOeE.C9ysIi6wea', 'OB3WkzoRXnboX5ahxhTrtB6O5G6ZTt95qvkhYAMX3mEjPDcVoSJ9MiXy4NlQ', '2018-02-27 22:07:58', '2018-02-27 22:07:58'), ('14', '2', '123123', '123123', 'liangze_li@163.com', '213123123', 'users/default.png', '$2y$10$8uzxYYVJZXZ4lk1QINZY4eTwUX4Lp2raREK9popomyn0ZBzqCtdeu', 'xnwR8DbvMwks0wHt5J7bAfDPFdoxRwKMk1Z8HooIsXsKLY2rpxjoVOlxf7i6', '2018-03-14 00:26:44', '2018-03-14 00:26:44');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
