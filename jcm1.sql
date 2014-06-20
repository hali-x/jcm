/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50619
Source Host           : localhost:3306
Source Database       : jcm1

Target Server Type    : MYSQL
Target Server Version : 50619
File Encoding         : 65001

Date: 2014-06-20 01:40:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agent
-- ----------------------------
DROP TABLE IF EXISTS `agent`;
CREATE TABLE `agent` (
  `agentId` bigint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `defaultcontact` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`agentId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agent
-- ----------------------------
INSERT INTO `agent` VALUES ('1', 'test1', null);
INSERT INTO `agent` VALUES ('2', 'john11', '00000000000000000004');
INSERT INTO `agent` VALUES ('3', 'marias', '00000000000000000006');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `contactid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `agentId` bigint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `dtag` int(1) DEFAULT '0',
  PRIMARY KEY (`contactid`),
  KEY `agentId` (`agentId`),
  CONSTRAINT `agentId` FOREIGN KEY (`agentId`) REFERENCES `agent` (`agentId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('00000000000000000003', '2', 'johnpapa', '021456789', '0');
INSERT INTO `contact` VALUES ('00000000000000000004', '2', 'john mama', '7000011155997', '1');
INSERT INTO `contact` VALUES ('00000000000000000005', '2', 'johnpapa', '70000111559971', '0');
INSERT INTO `contact` VALUES ('00000000000000000006', '3', 'marias cc', '7000011155997222', '1');
