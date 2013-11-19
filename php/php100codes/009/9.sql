CREATE TABLE `test` (
  `id` int(10) NOT NULL auto_increment,
  `uid` varchar(10) NOT NULL default '0',
  `regdate` date NOT NULL,
  `remark` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

INSERT INTO `test` (`id`, `uid`, `regdate`, `remark`) VALUES
(1, '张三', '2008-07-02', '学生'),
(2, '李四', '2008-07-03', '学生'),
(3, '王五', '2008-07-02', '工人'),
(4, '赵六', '2008-07-01', '学生');
