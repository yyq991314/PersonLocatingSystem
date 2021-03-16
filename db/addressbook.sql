-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-06-01 04:02:29
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_pwd` varchar(10) NOT NULL,
  `is_use` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_pwd`, `is_use`) VALUES
(1, 'admin', '123456', 1),
(2, 'sia', '123456', 1);

-- --------------------------------------------------------

--
-- 表的结构 `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `isuse` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `speciality_id`, `isuse`) VALUES
(1, '计算机14', 1, 1),
(2, '英语14', 2, 1),
(3, '经管14', 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `isuse` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `colleges`
--

INSERT INTO `colleges` (`id`, `college_name`, `isuse`) VALUES
(1, '国服学院', 1),
(2, '外国语学院', 1),
(3, '经济与贸易学院', 1);

-- --------------------------------------------------------

--
-- 表的结构 `specialities`
--

CREATE TABLE `specialities` (
  `id` int(11) NOT NULL,
  `speciality_name` varchar(10) NOT NULL,
  `college_id` int(11) NOT NULL,
  `isuse` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `specialities`
--

INSERT INTO `specialities` (`id`, `speciality_name`, `college_id`, `isuse`) VALUES
(1, '计算机', 1, 1),
(2, '英语', 3, 1),
(3, '经济管理', 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pwd` varchar(10) NOT NULL,
  `real_name` varchar(10) NOT NULL,
  `card_no` varchar(18) NOT NULL,
  `business` varchar(10) NOT NULL,
  `enter_year` varchar(4) NOT NULL,
  `class_id` int(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `image` varchar(30) NOT NULL,
  `isuse` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `students`
--

INSERT INTO `students` (`id`, `user_name`, `user_pwd`, `real_name`, `card_no`, `business`, `enter_year`, `class_id`, `mobile`, `address`, `zipcode`, `image`, `isuse`) VALUES
(2019005, 'songchunling', '123456', '宋春玲', '330782199412172130', '阿里集团', '2015', 1, '13821448787', '浙江省杭州市余杭区', '322000', '../images/3.jpg', 1),
(2019003, 'liujinpeng', '123456', '刘金鹏', '330782199402154562', '外贸公司', '2014', 3, '13845144562', '浙江省杭州市余杭区', '322000', '../images/2.jpg', 1),
(2019002, 'lijie', '123456', '李洁', '330782199307301230', '英语老师', '2015', 2, '13654572547', '浙江省丽水市莲都区', '323000', '../images/5.jpg', 1),
(2019001, 'yangyuqiong', '123456', '杨玉琼', '330782199409151245', '程序员', '2014', 1, '13954127855', '浙江省杭州市余杭区', '320000', '../images/4.jpg', 1),
(2019008, 'zengyiming', '123456', '曾一鸣', '330782199512091212', '外贸公司', '2014', 3, '13614587892', '浙江省杭州市拱墅区', '320000', '../images/5.jpg', 1),
(2019004, 'mengbin', '123456', '孟斌', '330782199307122458', '英语老师', '2014', 2, '13845624712', '浙江省杭州市余杭区', '320000', '../images/3.jpg', 1),
(2019009, 'liujunliang', '123456', '刘俊良', '330782199507194521', '英语老师', '2015', 2, '13845216324', '浙江省杭州市余杭区', '320000', '../images/4.jpg', 1),
(2019010, 'cuishijie', '123456', '崔世杰', '330782199512034855', '英语老师', '2014', 3, '13956478625', '浙江省丽水市莲都区', '323000', '../images/3.jpg', 1),
(2019011, 'yufei', '123456', '余飞', '330782199308171245', '创业', '2014', 3, '18845214523', '北京市海淀区', '100000', '../images/2.jpg', 1),
(2019012, 'fengmin', '123456', '杨敏', '330782199310232145', '程序员', '2015', 1, '13354789622', '浙江省丽水市莲都区', '323000', '../images/1.jpg', 1),
(2019022, 'yangdajuan', '123456', '杨文娟', '330782199812226729', '学校', '2016', 1, '18857943011', '浙江省义乌市', '322000', '../images/201905260532253.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019024;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
