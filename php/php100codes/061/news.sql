CREATE TABLE `p_admin` (
  `id` int(3) NOT NULL auto_increment,
  `mid` varchar(1) collate gbk_bin NOT NULL,
  `username` varchar(32) collate gbk_bin NOT NULL,
  `passwd` varchar(32) collate gbk_bin NOT NULL,
  `remark` varchar(50) collate gbk_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COLLATE=gbk_bin AUTO_INCREMENT=6 ;

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
