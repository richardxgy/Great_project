-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-24 09:21:41
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `great_project`
--

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `fenleiname` char(32) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`id`, `fenleiname`) VALUES
(1, '零食/坚果/特产'),
(2, '粮油米面/土特产/调味品'),
(3, '水果蔬菜/水产肉类/熟食'),
(4, '茶/咖啡/冲饮/饮料'),
(5, '酒类'),
(6, '保健滋补医药'),
(7, '参茸滋补');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist01`
--

CREATE TABLE `home_erjilist01` (
  `id` int(32) NOT NULL COMMENT '主键',
  `name` char(32) NOT NULL COMMENT '名字'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist01`
--

INSERT INTO `home_erjilist01` (`id`, `name`) VALUES
(1, '手撕蛋糕'),
(2, '山核桃'),
(3, '铜锣烧'),
(4, '肉松饼'),
(5, '切片蛋糕'),
(6, '蔓越小曲奇'),
(7, '茶酥小点心'),
(8, '抹茶麻仁'),
(9, '沙琪玛'),
(10, '江米条');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist02`
--

CREATE TABLE `home_erjilist02` (
  `id` int(32) NOT NULL COMMENT '主键,自动增加',
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist02`
--

INSERT INTO `home_erjilist02` (`id`, `name`) VALUES
(1, '生日小蛋糕'),
(2, '手撕蛋糕'),
(3, '冷冻蛋糕'),
(4, '法式小蛋糕'),
(6, '黑森林蛋糕'),
(7, '港荣蒸蛋糕'),
(8, '松鼠饼干蛋糕'),
(9, '草莓冰激凌蛋糕'),
(10, '虎皮蛋糕');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist03`
--

CREATE TABLE `home_erjilist03` (
  `id` int(32) NOT NULL,
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist03`
--

INSERT INTO `home_erjilist03` (`id`, `name`) VALUES
(1, '起士味饼干'),
(2, '蔓越莓曲奇'),
(3, '康师傅苏打夹心饼'),
(4, '苏打饼干'),
(5, '杂粮薄饼干'),
(6, '混合蔬菜味饼干'),
(7, '提子饼干'),
(8, '巧克力夹心饼干'),
(9, '燕麦维他饼干'),
(10, '小熊饼干');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist04`
--

CREATE TABLE `home_erjilist04` (
  `id` int(32) NOT NULL,
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist04`
--

INSERT INTO `home_erjilist04` (`id`, `name`) VALUES
(1, '乐视薯片'),
(2, '膨化食品'),
(3, '旺旺仙贝'),
(4, '奶酪玉米棒'),
(5, '旺旺大米饼'),
(6, '上好佳虾片'),
(7, '五香怪味豆'),
(8, '香香鱿鱼酥'),
(9, '天津大麻花'),
(10, '玉米角');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist05`
--

CREATE TABLE `home_erjilist05` (
  `id` int(32) NOT NULL,
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist05`
--

INSERT INTO `home_erjilist05` (`id`, `name`) VALUES
(1, '德州扒鸡'),
(2, '卤味牛肉干'),
(3, '酱香牛肉'),
(4, '叫花鸡'),
(5, '五香童子鸡'),
(6, '红烧牛腱'),
(7, '酱味排骨'),
(8, '卤牛肚'),
(9, '麻辣面筋'),
(10, '辣条');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist06`
--

CREATE TABLE `home_erjilist06` (
  `id` int(32) NOT NULL,
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist06`
--

INSERT INTO `home_erjilist06` (`id`, `name`) VALUES
(1, '猪肉干'),
(2, '五香牛肉粒'),
(3, '香辣猪蹄'),
(4, '烧烤鱿鱼'),
(5, '卤味鸡翅鸭舌'),
(6, '原味烤香肠'),
(7, '皇上皇腊肠'),
(8, '风干鸭脖'),
(9, '广味盐焗鸡'),
(10, '泡椒牛肉');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist07`
--

CREATE TABLE `home_erjilist07` (
  `id` int(32) NOT NULL,
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist07`
--

INSERT INTO `home_erjilist07` (`id`, `name`) VALUES
(1, '混合坚果'),
(2, '碧根果'),
(3, '夏威夷果'),
(4, '核桃仁'),
(5, '小栗子'),
(6, '开心果'),
(7, '手剥巴旦木'),
(8, '烧烤味腰果'),
(9, '兰花豆'),
(10, '牛肉味蚕豆');

-- --------------------------------------------------------

--
-- 表的结构 `home_erjilist08`
--

CREATE TABLE `home_erjilist08` (
  `id` int(32) NOT NULL,
  `name` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `home_erjilist08`
--

INSERT INTO `home_erjilist08` (`id`, `name`) VALUES
(1, '恰恰炒瓜子'),
(2, '五香花生'),
(3, '紫薯花生'),
(4, '开口板栗'),
(5, '五香山核桃'),
(6, '多味葵瓜子'),
(7, '开口松子');

-- --------------------------------------------------------

--
-- 表的结构 `listproduce`
--

CREATE TABLE `listproduce` (
  `id` int(32) NOT NULL,
  `name` char(32) CHARACTER SET utf8 NOT NULL,
  `fenlei1` char(32) CHARACTER SET utf8 NOT NULL,
  `fenlei2` int(32) NOT NULL,
  `price` int(32) NOT NULL,
  `xiaoliang` int(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `listproduce`
--

INSERT INTO `listproduce` (`id`, `name`, `fenlei1`, `fenlei2`, `price`, `xiaoliang`) VALUES
(1, '三只松鼠坚果', '零食', 1, 50, 5000),
(2, '杏仁八珍糕粉', '零食', 1, 16, 20),
(3, '黄金土豆片', '土特产', 2, 5, 12);

-- --------------------------------------------------------

--
-- 表的结构 `myshopcar`
--

CREATE TABLE `myshopcar` (
  `id` int(32) NOT NULL COMMENT 'id',
  `image` char(32) NOT NULL COMMENT '图片',
  `name` char(32) NOT NULL COMMENT '品名',
  `information` char(32) NOT NULL COMMENT '详情',
  `price` int(32) NOT NULL COMMENT '单价',
  `number` int(32) NOT NULL COMMENT '数量',
  `amount` int(32) NOT NULL COMMENT '金额'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `myshopcar`
--

INSERT INTO `myshopcar` (`id`, `image`, `name`, `information`, `price`, `number`, `amount`) VALUES
(5, 'kouhong.jpg', '良品铺子  手剥松子', '奶油味', 12, 19, 228),
(6, 'kouhong.jpg', '良品铺子  辣条', '香辣辣味', 5, 6, 30),
(7, 'kouhong.jpg', '良品铺子  手剥松子', '抹茶味', 12, 4, 48),
(8, '', '\n                \n', '', 0, 1, 0),
(9, '01.jpg', '\n                \n', '', 0, 1, 0),
(10, '', '\n                \n', '', 0, 1, 0),
(11, '', '\n                \n', '', 0, 1, 0),
(12, '', '\n                \n', '', 0, 1, 0),
(13, '', '\n                \n', '', 0, 1, 0),
(14, '01.jpg', '\n                \n', '', 0, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(32) NOT NULL COMMENT '主键,自动增加',
  `username` char(32) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, '小华', '123456'),
(3, '小林', '123321'),
(4, 'qeqwe', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `user_address`
--

CREATE TABLE `user_address` (
  `id` int(32) NOT NULL,
  `user_name` char(32) NOT NULL,
  `user_phone` int(32) NOT NULL,
  `provinces` char(32) NOT NULL,
  `city` char(32) NOT NULL,
  `county` char(32) NOT NULL,
  `user_intro` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_address`
--

INSERT INTO `user_address` (`id`, `user_name`, `user_phone`, `provinces`, `city`, `county`, `user_intro`) VALUES
(2, '李鑫', 123456789, '四川省', '成都市', '武侯区', '你的快递到；了'),
(4, '提姆', 2147483647, '四川省', '成都市', '武侯区', '科华北路99号');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist01`
--
ALTER TABLE `home_erjilist01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist02`
--
ALTER TABLE `home_erjilist02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist03`
--
ALTER TABLE `home_erjilist03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist04`
--
ALTER TABLE `home_erjilist04`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist05`
--
ALTER TABLE `home_erjilist05`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist06`
--
ALTER TABLE `home_erjilist06`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist07`
--
ALTER TABLE `home_erjilist07`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_erjilist08`
--
ALTER TABLE `home_erjilist08`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listproduce`
--
ALTER TABLE `listproduce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myshopcar`
--
ALTER TABLE `myshopcar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `home_erjilist01`
--
ALTER TABLE `home_erjilist01`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist02`
--
ALTER TABLE `home_erjilist02`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT '主键,自动增加', AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist03`
--
ALTER TABLE `home_erjilist03`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist04`
--
ALTER TABLE `home_erjilist04`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist05`
--
ALTER TABLE `home_erjilist05`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist06`
--
ALTER TABLE `home_erjilist06`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist07`
--
ALTER TABLE `home_erjilist07`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `home_erjilist08`
--
ALTER TABLE `home_erjilist08`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `listproduce`
--
ALTER TABLE `listproduce`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `myshopcar`
--
ALTER TABLE `myshopcar`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT COMMENT '主键,自动增加', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
