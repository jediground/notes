-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 11 月 07 日 10:11
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db99`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_admin`
--

CREATE TABLE `user_admin` (
  `uid` int(5) NOT NULL auto_increment,
  `uname` varchar(25) collate gbk_bin NOT NULL,
  `passwd` varchar(32) collate gbk_bin NOT NULL,
  `gro` int(5) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `user_admin`
--

INSERT INTO `user_admin` (`uid`, `uname`, `passwd`, `gro`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(3, 'admin2', '111', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user_group`
--

CREATE TABLE `user_group` (
  `sid` int(5) NOT NULL auto_increment,
  `name` varchar(25) collate gbk_bin default NULL,
  `user_shell` varchar(200) collate gbk_bin default NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `user_group`
--

INSERT INTO `user_group` (`sid`, `name`, `user_shell`) VALUES
(1, '管理员组', '15'),
(2, '编辑组', '3');
