--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `message`
--

INSERT INTO `message` (`id`, `title`, `content`) VALUES
(1, '666', '888'),
(4, '8888', '9999'),
(5, '9999', '78687');
