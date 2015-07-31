/*
Navicat MySQL Data Transfer

Source Server         : magento
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : laravel5_1.1

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-07-31 23:00:35
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO migrations VALUES ('2015_07_16_100117_user', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('1', 'quanit94@aiko.com', 'Quân Trần', '/profilepics/quantran.jpg', '$2y$10$eycjIU0bTxj08H/X73bs6OjetP27KybWXc8KBeyJAQC9Qe.vmoYAm', 'quanbn94', '1', '1', '3PxbzrSg8DXIcVn6afWkxxRxGljKp7IZaSPFgATh62a8uXrqNjBn2MdRQwvR', '0000-00-00 00:00:00', '2015-07-31 08:07:56');
INSERT INTO user VALUES ('4', 'quanit2@aiko.com', 'Quân Trần', '/profilepics/quanit94.jpg', '$2y$10$iiLmBw5OoQ1hmxQhR40s/OxQRrKARcgtbX0o1Vhp63jjzGd3EDqLW', '12345', '0', '1', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO user VALUES ('8', 'quanit6@aiko.com', 'Quân Trần', '/profilepics/quanit94.jpg', '$2y$10$TsUt.C.e7soGZi/Oondmiu8rCZrTIaYBFNFQFOsMMeQyuQc9HYCTG', '12345', '0', '1', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO user VALUES ('9', 'quanit7@aiko.com', 'Quân Trần', '/profilepics/quanit94.jpg', '$2y$10$IAAgINMrdzRsmA/gNYYf9.RvaYu1br3ynwrhdwBSJoKsSHIoXZtE6', '12345', '0', '1', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO user VALUES ('10', 'quanit8@aiko.com', 'Quân Trần', '/profilepics/quanit94.jpg', '$2y$10$mw8BcRjI5.5GFBWMupwWs.f/Prg8WFz5jhQUKY5uTpy3GspEASlbK', '12345', '0', '1', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO user VALUES ('11', 'quanit9@aiko.com', 'Quân Trần', '/profilepics/quanit94.jpg', '$2y$10$8SnBUbYHLj8hCit0tr.lg.8Tt4fZmMrZ/OkrDrQF//SMtuXY0SkRW', '12345', '0', '1', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO user VALUES ('18', 'deas@aiko.com', 'sdvsdv', '/profilepics/1438353312-1392624015137.jpg', '$2y$10$Bg59tEXXuuHlvROnxZBwie6ahnxKrnfGtOwNwN1eiLnG8zDyr8XX6', '123456', '1', '1', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
