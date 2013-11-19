-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2008 年 08 月 17 日 22:17
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `bbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) character set gb2312 NOT NULL,
  `sex` varchar(2) character set gb2312 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `test`
--

INSERT INTO `test` (`id`, `name`, `sex`) VALUES
(1, '张三', '男'),
(2, '李四', '女'),
(3, '王五', '男'),
(4, '赵六', '女'),
(5, '小七', '男'),
(6, '小八', '男'),
(7, '小九', '男'),
(8, '小十', '女'),
(9, '小十一', '男'),
(10, '小十二', '男');
