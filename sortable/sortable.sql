/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : 127.0.0.1:3306
Source Database       : sortable

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-08-07 23:52:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', 'item1', '0');
INSERT INTO `items` VALUES ('2', 'item2', '1');
INSERT INTO `items` VALUES ('4', 'item4', '2');
INSERT INTO `items` VALUES ('5', 'item5', '3');
INSERT INTO `items` VALUES ('6', 'item3', '4');
