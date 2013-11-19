-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 08 月 13 日 05:34
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `double`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_list`
--

CREATE TABLE `user_list` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(18) character set gb2312 collate gb2312_bin NOT NULL,
  `password` varchar(50) character set gb2312 collate gb2312_bin NOT NULL,
  `email` varchar(25) character set gb2312 collate gb2312_bin NOT NULL,
  `regdate` time NOT NULL,
  `question` text character set gbk NOT NULL,
  `answer` text character set gbk collate gbk_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- 导出表中的数据 `user_list`
--

INSERT INTO `user_list` (`id`, `username`, `password`, `email`, `regdate`, `question`, `answer`) VALUES
(19, 'uidkey', '6535b292752555426cba7dfabf55ab2c', 'uidkey@gmail.com', '19:47:03', '你最爱的人的生日？', 0x3139393230383130),
(18, 'coxn218', '905a56faa79b95dce6b71e66ff77d1e3', 'evercn@qq.com', '15:29:04', '你最爱的人的生日？', 0x3139393230383130),
(20, 'alex', '977505a533a174cfad3e322486ff4ade', 'evercn@qq.com', '01:32:00', '你最爱的人的生日？', 0x3139393230383130),
(55, 'cniiue', '806cf13f78e4f39c8d1ed79846beb60d', '', '00:00:00', '', '');
