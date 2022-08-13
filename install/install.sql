DROP TABLE IF EXISTS `auth_config`;</explode>
CREATE TABLE `auth_config` (
  `k` varchar(32) NOT NULL,
  `v` text,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>
INSERT INTO `auth_config` VALUES ('title', 'UK云授权系统');</explode>
INSERT INTO `auth_config` VALUES ('keywords', 'UK云授权系统');</explode>
INSERT INTO `auth_config` VALUES ('description', 'UK云授权系统');</explode>
INSERT INTO `auth_config` VALUES ('repair', '0');</explode>
INSERT INTO `auth_config` VALUES ('qqqun', 'QQ群号');</explode>
INSERT INTO `auth_config` VALUES ('qqqunurl', 'QQ群链接');</explode>
INSERT INTO `auth_config` VALUES ('regrepair', '1');</explode>
INSERT INTO `auth_config` VALUES ('gg', '授权最低20</br>授权商最低50</br>发现低于限制禁封处理');</explode>
INSERT INTO `auth_config` VALUES ('tz', '授权最低20</br>授权商最低50</br>发现低于限制禁封处理');</explode>
INSERT INTO `auth_config` VALUES ('switch', '1');</explode>
INSERT INTO `auth_config` VALUES ('ipauth', '1');</explode>
INSERT INTO `auth_config` VALUES ('update', '1');</explode>
INSERT INTO `auth_config` VALUES ('mail_cloud', '0');</explode>
INSERT INTO `auth_config` VALUES ('mail_smtp', 'smtp.qq.com');</explode>
INSERT INTO `auth_config` VALUES ('mail_port', '465');</explode>
INSERT INTO `auth_config` VALUES ('mail_name', 'ukyunstudio@qq.com');</explode>
INSERT INTO `auth_config` VALUES ('mail_pwd', 'ukyunstudio');</explode>
INSERT INTO `auth_config` VALUES ('mail_recv', '2874992246@qq.com');</explode>
INSERT INTO `auth_config` VALUES ('download', 'close');</explode>
INSERT INTO `auth_config` VALUES ('qqdl', '1');</explode>
INSERT INTO `auth_config` VALUES ('qqbd', '1');</explode>
INSERT INTO `auth_config` VALUES ('muban', 'ukyun');</explode>
INSERT INTO `auth_config` VALUES ('authfile', '/includes/authcode.php');</explode>
INSERT INTO `auth_config` VALUES ('hmpass', 'ukyun');</explode>
INSERT INTO `auth_config` VALUES ('qq', '2874992246');</explode>
INSERT INTO `auth_config` VALUES ('version', '1314');</explode>
INSERT INTO `auth_config` VALUES ('ver', 'V5.2.0');</explode>
INSERT INTO `auth_config` VALUES ('content', '您的网站未授权！购买正版请联系QQ：2874992246');</explode>
INSERT INTO `auth_config` VALUES ('hmdz', '/includes/common.php');</explode>
INSERT INTO `auth_config` VALUES ('login', 'admin_caihong');</explode>
INSERT INTO `auth_config` VALUES ('uplog', '
1.UK云工作室承接代刷二开
2.官网:www.ukyun.cn
3.本程序版权归UK云工作室所有
4.程序开发人员:辉辉很乖
5.程序维护由UK云工作室进行');</explode>

DROP TABLE IF EXISTS `auth_user`;</explode>
CREATE TABLE `auth_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL COMMENT '用户账号',
  `pass` varchar(150) NOT NULL COMMENT '登录密码',
  `qq` varchar(150) NOT NULL COMMENT '用户QQ',
  `active` varchar(150) NOT NULL COMMENT '账号状态',
  `power` text COMMENT '用户权限',
  `name` text COMMENT '用户名字',
  `last` varchar(150) NOT NULL COMMENT '最后登录IP',
  `ip` varchar(150) NOT NULL COMMENT 'IP地址',
  `boss` varchar(150) NOT NULL COMMENT '用户上级',
  `access_token` text COMMENT '快捷QQ登录',
   PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

INSERT INTO `auth_user`(`user`, `pass`, `qq`, `active`, `power`, `name`, `last`, `ip`, `boss`, `access_token`) VALUES
('admin', '123456', '2874992246', '1', '1', '辉辉很乖', 'NULL', 'NULL', '1', '');</explode>

DROP TABLE IF EXISTS `auth_daili`;</explode>
CREATE TABLE `auth_daili` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL COMMENT '用户账号',
  `pass` varchar(150) NOT NULL COMMENT '登录密码',
  `qq` varchar(150) NOT NULL COMMENT '用户QQ',
  `active` varchar(150) NOT NULL COMMENT '账号状态',
  `power` text COMMENT '用户权限',
  `name` text COMMENT '用户名字',
  `last` varchar(150) NOT NULL COMMENT '最后登录IP',
  `ip` varchar(150) NOT NULL COMMENT 'IP地址',
  `citylist` varchar(150) NOT NULL COMMENT '常登录IP',
  `boss` varchar(150) NOT NULL COMMENT '用户上级',
  `access_token` text COMMENT '快捷QQ登录',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `auth_kms`;</explode>
CREATE TABLE `auth_kms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `km` varchar(150) NOT NULL COMMENT '卡密号',
  `zt` varchar(150) NOT NULL COMMENT '卡密状态',
  `userid` varchar(150) NOT NULL COMMENT '用户ID',
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `auth_pays`;</explode>
CREATE TABLE `auth_pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(150) DEFAULT NULL,
  `qq` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `date` datetime NOT NULL,
  `active` int(1) DEFAULT '1',
  `daili` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `auth_site`;</explode>
CREATE TABLE `auth_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL,
  `authcode` varchar(100) DEFAULT NULL,
  `sign` varchar(20) DEFAULT NULL,
  `syskey` varchar(40) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `daili` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `auth_block`;</explode>
create table `auth_block` (
  `url` varchar(150) NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(150) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `db` varchar(100) DEFAULT NULL,
  `ver` varchar(20) DEFAULT NULL,
  `authcode` varchar(150) NOT NULL,
  `qq` varchar(150) NOT NULL,
  `admin_user` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `auth_log`;</explode>
CREATE TABLE `auth_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) DEFAULT NULL,
  `type` varchar(20) NULL,
  `date` datetime NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `data` text NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `auth_down`;</explode>
CREATE TABLE `auth_down` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NULL,
  `authcode` varchar(100) NULL,
  `sign` varchar(100) NULL,
  `ip` varchar(20) DEFAULT NULL,
  `date` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>