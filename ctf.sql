-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 06 月 09 日 01:38
-- 伺服器版本: 10.1.14-MariaDB
-- PHP 版本： 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ctf`
--

-- --------------------------------------------------------

--
-- 資料表結構 `flag`
--

CREATE TABLE `flag` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `content` varchar(300) NOT NULL,
  `hint` varchar(100) NOT NULL,
  `point` int(11) NOT NULL,
  `flag` varchar(100) NOT NULL,
  `open` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `flag`
--

INSERT INTO `flag` (`id`, `qid`, `name`, `content`, `hint`, `point`, `flag`, `open`) VALUES
(1, 1, 'repeat after me', 'Just answer me what you see. <br> nc pwn.duckll.tw 7771', '', 100, 'NCYU{rem0te_c0nnect_1s_ea5y}', 1),
(2, 2, 'Gime me the pass', '<a href="./data/give_me_the_pass">file</a> <br> nc pwn.duckll.tw 7772', '', 500, 'NCYU{Reverse_1s_ea5y_4_U}', 1),
(3, 3, 'Overwrite', '<a href="./data/overwrite">file</a><br>nc pwn.duckll.tw 7773', '', 300, 'NCYU{asm_i5_1nterst1n8_ri8ht7?}', 1),
(4, 4, 'No more space', '<a href="./data/no_more_space">file</a><br> nc pwn.duckll.tw 7774', '', 600, 'NCYU{a11_va1ue_i5_rea6y_f0r_U}', 1),
(5, 5, 'Where U go?', '<a href="./data/where_U_go">file</a><br> nc pwn.duckll.tw 7775', '', 300, 'NCYU{4ddress_15_p0werfu1}', 1),
(6, 6, 'gadget4U', '', '', 0, '', 0),
(7, 7, 'where U cat', '', '', 0, '', 0),
(8, 8, 'U know libc?', '', '', 0, '', 0),
(9, 9, 'Under protector', '', '', 0, '', 0),
(10, 10, '64bit!!!', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `lasttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `q1` tinyint(1) NOT NULL,
  `q2` tinyint(1) NOT NULL,
  `q3` tinyint(1) NOT NULL,
  `q4` tinyint(1) NOT NULL,
  `q5` tinyint(1) NOT NULL,
  `q6` tinyint(1) NOT NULL,
  `q7` tinyint(1) NOT NULL,
  `q8` tinyint(1) NOT NULL,
  `q9` tinyint(1) NOT NULL,
  `q10` tinyint(1) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `name`, `pass`, `lasttime`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `point`) VALUES
(1, 'duckll', 'd10598f58e2ebdaf185743dcae59fff0', '2016-06-09 01:37:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `flag`
--
ALTER TABLE `flag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
