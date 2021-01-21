-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 01 月 21 日 20:34
-- 伺服器版本： 10.4.16-MariaDB
-- PHP 版本： 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `banner`
--

CREATE TABLE `banner` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `banner`
--

INSERT INTO `banner` (`id`, `img`, `sh`) VALUES
(4, '01B03.jpg', 0),
(6, '01B04.jpg', 0),
(7, '20200330_200330_0002.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `basic`
--

CREATE TABLE `basic` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `basic`
--

INSERT INTO `basic` (`id`, `img`, `intro`, `sh`) VALUES
(12, '01C03.gif', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolores nulla facilis cumque, expedita labore assumenda, iure eius animi reiciendis quia! Magni molestiae, eveniet voluptatem asperiores corporis recusandae culpa autem!', 0),
(13, '01C04.gif', 'xxx', 0),
(17, '未命名-2.jpg', '2020年畢業於輔大織品系，主修布料設計。\r\n\r\n擔任畢業製作美宣長一職而接觸網頁設計，因而進入泰山職業訓練場學習，從此深深著迷於視覺呈現及程式邏輯的世界之中！\r\n\r\n持續積極學習視覺及網頁設計中！！！', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `basic_content`
--

CREATE TABLE `basic_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `basic_content`
--

INSERT INTO `basic_content` (`id`, `content`, `sh`) VALUES
(7, '姓名：林伶', 1),
(8, '信箱：marumaru19960115@gmail.com', 1),
(9, '居住地：新北市', 1),
(10, 'pppp', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `title`, `date`, `event`, `content`, `sh`) VALUES
(1, '學習網頁設計', '2020/09-2021/08', '泰山職業訓練場', '從沒寫過HTML到可以試著以自己思考的方式寫出程式。透過持續不斷的練習及製作作品來累積實力與業界接軌。', 1),
(4, '織品設計畢業成果展', '2020/04', '輔仁大學', '將大學四年學習的養分轉化為自己的作品，我透過布料設計傳遞對於家鄉的思念及提醒人們重視故鄉的概念。在學習過程中，老師帶給我們許多設計的思維，啟發我們。', 1),
(5, '商品企劃部實習', '2019/07-08', '佳和實業股份有限公司', '在學期間因參與學校計畫而有幸進入佳和實業實習，在實習過程中理解業界生產開發流程，而實習期間幸運參與到荷蘭設計趨勢分析會議，讓我了解趨勢分析流程，是很難得的體驗。', 1),
(6, '實習', '2018/07-08', 'jfpwjpw', 'name', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `port`
--

CREATE TABLE `port` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `port`
--

INSERT INTO `port` (`id`, `img`, `content`, `sh`) VALUES
(5, '截圖 2021-01-22 03.29.31.png', '使用PHP及CSS寫成的萬年曆', 1),
(6, '發票底圖.jpg', '使用PHP及CSS寫成的發票對獎系統', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `title`, `sh`, `type`) VALUES
(1, 'PHP', 1, '1'),
(2, 'MySQL', 1, '1'),
(4, 'HTML5', 1, '2'),
(5, ' CSS3', 1, '2'),
(6, ' JavaScript', 1, '2'),
(7, 'jQuery', 1, '2'),
(8, 'Illustrator', 1, '3'),
(9, 'Photoshop', 1, '3');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `basic_content`
--
ALTER TABLE `basic_content`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `basic_content`
--
ALTER TABLE `basic_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `port`
--
ALTER TABLE `port`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
