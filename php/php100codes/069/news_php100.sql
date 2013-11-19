-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 11 月 25 日 01:01
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `news_php100`
--

-- --------------------------------------------------------

--
-- 表的结构 `p_admin`
--

CREATE TABLE `p_admin` (
  `uid` int(3) NOT NULL auto_increment,
  `m_id` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=21 ;

--
-- 导出表中的数据 `p_admin`
--

INSERT INTO `p_admin` (`uid`, `m_id`, `username`, `password`, `name`) VALUES
(20, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'PHP100');

-- --------------------------------------------------------

--
-- 表的结构 `p_config`
--

CREATE TABLE `p_config` (
  `name` varchar(20) collate gbk_bin NOT NULL,
  `values` varchar(100) collate gbk_bin NOT NULL,
  `remark` tinytext collate gbk_bin NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COLLATE=gbk_bin;

--
-- 导出表中的数据 `p_config`
--

INSERT INTO `p_config` (`name`, `values`, `remark`) VALUES
('websitename', '大家的第一个新闻系统', ''),
('website_url', 'http://www.php100.net', ''),
('website_keyword', 'PHP，视频，教程，网站', ''),
('website_cp', '备案号：。。。。', ''),
('website_tel', '137648888888', ''),
('website_email', 'haowubai@sss.com', '');

-- --------------------------------------------------------

--
-- 表的结构 `p_newsbase`
--

CREATE TABLE `p_newsbase` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL,
  `title` varchar(50) collate gbk_bin NOT NULL,
  `author` varchar(25) collate gbk_bin NOT NULL,
  `date_time` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `p_newsbase`
--

INSERT INTO `p_newsbase` (`id`, `cid`, `title`, `author`, `date_time`) VALUES
(1, 4, 'eeeeeeeeeeeeeeeee', '张', 1256463917),
(3, 1, 'wwww', '问问', 1256464927),
(4, 3, 'PHP100测试新闻', '2222', 1257690471),
(5, 15, '22222222222222222222222222', '22222222', 1258271514),
(6, 18, '4444444444444', '444444444', 1258272987);

-- --------------------------------------------------------

--
-- 表的结构 `p_newsclass`
--

CREATE TABLE `p_newsclass` (
  `id` int(11) NOT NULL auto_increment COMMENT '分类id',
  `f_id` int(11) NOT NULL COMMENT '父id',
  `name` varchar(25) collate gbk_bin NOT NULL COMMENT '分类名称',
  `keywrod` varchar(100) collate gbk_bin NOT NULL COMMENT '关键字',
  `remark` varchar(100) collate gbk_bin NOT NULL COMMENT '备注',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `p_newsclass`
--

INSERT INTO `p_newsclass` (`id`, `f_id`, `name`, `keywrod`, `remark`) VALUES
(1, 0, '业界新闻', '', ''),
(15, 14, '交流区', '', ''),
(3, 1, 'PHP新闻', '', ''),
(4, 1, 'linux新闻', '', ''),
(7, 0, '培训教育', '', ''),
(16, 14, '计算机区', '', ''),
(14, 0, '机架式论', '', ''),
(11, 0, '视频教程', '', ''),
(18, 7, '333333', '', ''),
(19, 7, '555555', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `p_newscontent`
--

CREATE TABLE `p_newscontent` (
  `nid` int(11) NOT NULL,
  `keywrod` varchar(100) collate gbk_bin NOT NULL,
  `content` text collate gbk_bin NOT NULL,
  `remark` text collate gbk_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk COLLATE=gbk_bin;

--
-- 导出表中的数据 `p_newscontent`
--

INSERT INTO `p_newscontent` (`nid`, `keywrod`, `content`, `remark`) VALUES
(1, '新闻，教程，', '添加一个PHP100视频教程新闻添加一个PHP100视频教程新闻添加一个PHP100视频教程新闻添加一个PHP100视频教程新闻添加一个PHP100视频教程新闻\r\n', ''),
(3, '问问', '我我我&nbsp;\r\n', ''),
(4, 'PHP100测试新闻', 'PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测<br>PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP<br><br>PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP<br><br><br>PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP<br>PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\nPHP<br>试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻PHP100测试新闻\r\n', ''),
(5, '2222222222', '222222222222222222222222222222', ''),
(6, '44444444444444444444', '4444444444444', '');
