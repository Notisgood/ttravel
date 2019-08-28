-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2019 at 10:15 AM
-- Server version: 10.3.16-MariaDB-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `znot_scoot`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_status` int(11) DEFAULT NULL COMMENT '0 ไม่แสดง/ 1 แสดง',
  `banner_img` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_status`, `banner_img`, `created_at`, `updated_at`) VALUES
(1, 1, '20190815040921560442765.jpg', '2019-08-15 04:08:38', '2019-08-15 04:08:38'),
(8, 1, '201908150705281387659499.jpg', '2019-08-15 07:05:28', '2019-08-15 07:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `bannerword`
--

CREATE TABLE `bannerword` (
  `bannerword_id` int(11) NOT NULL COMMENT 'คีย์หลัก คำแบนเนอร์',
  `bannerword_status` int(11) DEFAULT NULL COMMENT '	0 ไม่แสดง/ 1 แสดง	',
  `bannerword_img` text DEFAULT NULL,
  `bannerword_th` text DEFAULT NULL COMMENT 'หัวข้อ',
  `bannerword_en` text DEFAULT NULL COMMENT 'หัวข้อ',
  `bannerword_th1` text DEFAULT NULL COMMENT 'หัวข้อ สีทอง',
  `bannerword_en1` text DEFAULT NULL COMMENT 'หัวข้อ สีทอง',
  `bannerword_th2` text DEFAULT NULL COMMENT 'รายละเอียด บรรทัด 1',
  `bannerword_en2` text DEFAULT NULL COMMENT 'รายละเอียด บรรทัด 1',
  `bannerword_th3` text DEFAULT NULL COMMENT 'ราย ทัด 2',
  `bannerword_en3` text DEFAULT NULL COMMENT 'ราย ทัด 2',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bannerword`
--

INSERT INTO `bannerword` (`bannerword_id`, `bannerword_status`, `bannerword_img`, `bannerword_th`, `bannerword_en`, `bannerword_th1`, `bannerword_en1`, `bannerword_th2`, `bannerword_en2`, `bannerword_th3`, `bannerword_en3`, `created_at`, `updated_at`) VALUES
(73, 1, '201908220944231112677333.jpg', 'สกู๊ดด', 'Scoot', 'ทราเวล', 'Travel', 'ท่องเที่ยวเอเชีย ยูโรป', 'Travel to Asia, Europe, the hottest', 'ที่ร้อนแรงที่สุดสำหรับถ่าย selfies ในหน้าร้อน', 'selfies with this summer.', '2019-08-19 03:59:33', '2019-08-27 08:07:28'),
(79, 1, '20190822095047741130445.jpg', 'หัวข้อตัวใหญ่', 'Eng 1', 'สีทอง', 'Eng gold', 'รายละเอียด บรรทัด 1', 'Eng line 1', 'รายละเอียด บรรทัด 2', 'Eng line 2', '2019-08-22 03:23:31', '2019-08-27 09:35:53'),
(81, 1, '20190822095121208586275.jpg', 'ซากู้ด', 'sagood', 'ทาเวลลลล', 'tralel', 'อร้าย้าาา', 'AYAYA', 'ซูซิ ซูซิ ซูซิ ซูซิ', 'SUSHI SUSHI  Pepega RUNNING LOW ON BRAIN CELLS', '2019-08-22 07:10:47', '2019-08-27 09:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `position_th` text DEFAULT NULL,
  `position_en` text DEFAULT NULL,
  `job_type_th` text DEFAULT NULL,
  `job_type_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `position_th`, `position_en`, `job_type_th`, `job_type_en`, `created_at`, `updated_at`) VALUES
(8, 'ผู้ประสานงาน', 'Administrator', NULL, NULL, '2019-08-19 10:39:01', '2019-08-22 11:04:58'),
(9, 'คนขับรถ', 'driver', NULL, NULL, '2019-08-20 02:29:19', '2019-08-22 07:15:52'),
(11, 'พนักงานขายแพคเกจทัวร์', 'Tour Package Seller', NULL, NULL, '2019-08-22 07:17:17', '2019-08-27 07:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `career_register`
--

CREATE TABLE `career_register` (
  `career_register_id` int(11) NOT NULL,
  `career_register_career_id` int(11) DEFAULT NULL,
  `career_register_name` text DEFAULT NULL,
  `career_register_email` text DEFAULT NULL,
  `career_register_tel` text DEFAULT NULL,
  `career_register_line` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career_register`
--

INSERT INTO `career_register` (`career_register_id`, `career_register_career_id`, `career_register_name`, `career_register_email`, `career_register_tel`, `career_register_line`, `created_at`) VALUES
(1, 8, 'asdsad', 'asd', 'sadasd', 'asd', '2019-08-22 08:38:15'),
(2, 8, 'asdsad', 'asd', 'sadasd', 'asd', '2019-08-22 08:38:59'),
(3, 9, 'asdas', 'dasda', 'sdasd', 'asd', '2019-08-22 08:39:18'),
(4, 9, 'dddd', 'dddd', 'dddd', 'ddddddd', '2019-08-22 08:47:58'),
(5, 9, 'ff', 'sdfsdf', '1131231', 'fsdds', '2019-08-22 09:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `continent_id` int(11) NOT NULL COMMENT 'คีย์หลักทวีป',
  `continent_country_id` int(11) DEFAULT NULL COMMENT 'คีย์เชื่อม ประเทศ',
  `continent_name_th` text DEFAULT NULL,
  `continent_name_en` text DEFAULT NULL,
  `continent_name_des_th` text DEFAULT NULL,
  `continent_name_des_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`continent_id`, `continent_country_id`, `continent_name_th`, `continent_name_en`, `continent_name_des_th`, `continent_name_des_en`, `created_at`, `updated_at`) VALUES
(1, NULL, 'เอเชีย', 'Asia', 'เอเชียยยยย', 'ใครไม่เชีย เอเชีย', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, NULL, 'ยุโรป', 'Europe', 'ทวีปยุโรปไง', 'It\'s Europe!!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, NULL, 'เที่ยวไทย', 'Thailand', 'ไทย', 'thai', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL COMMENT 'คีย์หลักประเทศ',
  `country_continent_id` int(11) NOT NULL COMMENT 'คีย์เชื่อม ทวีป',
  `country_name_th` text DEFAULT NULL,
  `country_name_en` text DEFAULT NULL,
  `country_des_th` text DEFAULT NULL,
  `country_des_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_continent_id`, `country_name_th`, `country_name_en`, `country_des_th`, `country_des_en`, `created_at`, `updated_at`) VALUES
(1, 1, 'ญี่ปุ่น', 'Japan', NULL, NULL, NULL, NULL),
(2, 1, 'จีน', 'China', NULL, NULL, NULL, NULL),
(5, 2, 'อังกฤษ', 'England', 'ใครไม่กิด อังกิด', 'island', NULL, NULL),
(7, 3, 'ไทยแลนด์', 'Thailand', 'ไทย', 'land', NULL, NULL),
(11, 1, 'เวียดนาม', 'Vietam', 'เวียด', 'nam', '2019-08-27 10:50:06', '2019-08-27 10:50:20'),
(12, 2, 'รัสเซีย', 'Russia', 'รัส', 'ssia', '2019-08-27 10:51:03', '2019-08-27 10:51:03'),
(13, 2, 'อิตาลี', 'italy', 'อิตาอิตา', 'ly', '2019-08-27 10:51:33', '2019-08-27 10:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `county_id` int(11) NOT NULL COMMENT 'คีย์หลักจังหวัด',
  `county_country_id` int(11) DEFAULT NULL COMMENT 'คีย์เชื่อมประเทศ',
  `county_name_th` text NOT NULL,
  `county_name_en` text NOT NULL,
  `county_des_th` text NOT NULL,
  `county_des_en` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`county_id`, `county_country_id`, `county_name_th`, `county_name_en`, `county_des_th`, `county_des_en`, `created_at`, `updated_at`) VALUES
(1, 1, 'นาโกย่า', 'Nagoya', 'ใครไม่โก นาโกย่า', 'nagoyaaaaaaa', '2019-08-20 06:19:41', '2019-08-20 06:19:41'),
(2, 1, 'เกียวโต', 'Kyoto', 'เกี๊ยววว', 'tototo', NULL, NULL),
(3, 5, 'ลอนดอน', 'London', 'ใครไม่ดอน ลอนดอน', 'lodo', NULL, NULL),
(5, 1, 'ฮอกไกโด', 'Hokkaido', 'ฮอก', 'kaido', NULL, NULL),
(6, 7, 'กรุงเทพ', 'Bangkok', 'กรุงเทพมหานคร', 'BKK', NULL, NULL),
(7, 7, 'เชียงใหม่', 'ChiangMai', 'เชียง', 'mai', '2019-08-20 06:06:28', '2019-08-20 06:06:28'),
(9, 2, 'hi', 'dede', 'ede', 'deed', '2019-08-23 04:44:33', '2019-08-23 04:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
  `duty_id` int(11) NOT NULL COMMENT 'คีย์หลักหน้าที่',
  `career_duty_id` int(11) DEFAULT NULL COMMENT 'คีย์เชื่อมไป career',
  `duty_th` text DEFAULT NULL,
  `duty_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`duty_id`, `career_duty_id`, `duty_th`, `duty_en`, `created_at`, `updated_at`) VALUES
(375, 9, 'ขับรถรับ-ส่งพนักงาน', 'pickup and driver', NULL, '2019-08-22 07:15:52'),
(376, 9, 'รับของส่งของ ส่งหน้างาน ในจังหวัดหรือต่างจังหวัด หรือได้รับมอบหมาย', 'delivery', NULL, '2019-08-22 07:15:52'),
(377, 9, 'ดูแลความสะอาดรถ', 'clean', NULL, '2019-08-22 07:15:52'),
(378, 9, 'หรืองานอื่นๆ ที่ได้รับมอบหมาย', 'etc', NULL, '2019-08-22 07:15:52'),
(382, 8, 'แก้ไขปัญหา', 'solveing problem', NULL, '2019-08-22 11:04:58'),
(384, 11, 'ขายทัวร์', 'sell tour', NULL, '2019-08-27 07:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_tour_id` int(11) DEFAULT NULL,
  `img_image` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `img_tour_id`, `img_image`, `created_at`, `updated_at`) VALUES
(25, 7, '20190822093033159532525.jpg', NULL, '2019-08-22 09:30:33'),
(26, 7, '201908220930331382209379.jpg', NULL, '2019-08-22 09:30:33'),
(27, 7, '20190822093033396317694.jpg', NULL, '2019-08-22 09:30:33'),
(28, 1, '201908220932041394357230.jpg', NULL, '2019-08-22 09:32:04'),
(29, 1, '201908220932041143646675.jpg', NULL, '2019-08-22 09:32:04'),
(30, 1, '201908220932042048794946.jpg', NULL, '2019-08-22 09:32:04'),
(34, 12, '20190822103506794104233.jpg', '2019-08-22 10:35:06', '2019-08-22 10:35:06'),
(35, 12, '20190822103506165913804.jpg', '2019-08-22 10:35:06', '2019-08-22 10:35:06'),
(36, 12, '201908221035061487941196.jpg', '2019-08-22 10:35:06', '2019-08-22 10:35:06'),
(37, 4, '20190822110105827904138.jpg', NULL, '2019-08-22 11:01:05'),
(38, 4, '20190822110105454196640.jpg', NULL, '2019-08-22 11:01:05'),
(39, 4, '20190822110105575701210.jpg', NULL, '2019-08-22 11:01:05'),
(40, 8, '20190822110132266305621.jpg', NULL, '2019-08-22 11:01:32'),
(41, 8, '2019082211013215459206.jpg', NULL, '2019-08-22 11:01:32'),
(42, 8, '201908221101321491823525.jpg', NULL, '2019-08-22 11:01:32'),
(43, 13, '20190823044510814222796.jpg', '2019-08-23 04:45:10', '2019-08-23 04:45:10'),
(44, 13, '20190823044510961026268.jpg', '2019-08-23 04:45:10', '2019-08-23 04:45:10'),
(45, 13, '2019082304451087749161.jpg', '2019-08-23 04:45:10', '2019-08-23 04:45:10'),
(46, 14, '201908230622331386093924.jpg', '2019-08-23 06:22:33', '2019-08-23 06:22:33'),
(47, 14, '20190823062233512265741.jpg', '2019-08-23 06:22:33', '2019-08-23 06:22:33'),
(48, 14, '201908230622331221921726.jpg', '2019-08-23 06:22:33', '2019-08-23 06:22:33'),
(49, 15, '20190823064306318336358.jpg', '2019-08-23 06:43:06', '2019-08-23 06:43:06'),
(50, 15, '20190823064306721182510.jpg', '2019-08-23 06:43:06', '2019-08-23 06:43:06'),
(51, 15, '201908230643061484737622.jpg', '2019-08-23 06:43:06', '2019-08-23 06:43:06'),
(52, 16, '201908270944271291679494.jpg', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(53, 16, '20190827094427921943346.jpg', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(54, 16, '20190827094427587814356.jpg', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(55, 10, '20190828022807849679719.jpg', NULL, '2019-08-28 02:28:08'),
(56, 10, '20190828022808324008794.jpg', NULL, '2019-08-28 02:28:08'),
(57, 10, '201908280228081945556790.jpg', NULL, '2019-08-28 02:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL COMMENT 'คีย์หลัก คุณสมบัติ',
  `property_career_id` int(11) NOT NULL COMMENT 'คีย์เชื่อมไป career',
  `property_name_th` text DEFAULT NULL,
  `property_detail_th` text DEFAULT NULL,
  `property_name_en` text DEFAULT NULL,
  `property_detail_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_career_id`, `property_name_th`, `property_detail_th`, `property_name_en`, `property_detail_en`, `created_at`, `updated_at`) VALUES
(40, 9, 'ประเภทของงาน', 'งานประจำ 3 อัตรา', 'job type', 'full-time work 3 pos', '2019-08-22 07:15:52', '2019-08-22 07:15:52'),
(45, 8, 'ประเภทของงาน', 'งานประจำ 3 อัตรา', 'jobtype', 'full-time work', '2019-08-22 11:04:59', '2019-08-22 11:04:59'),
(46, 11, 'ประเภทของงาน', 'งานประจำ 3 อัตรา', NULL, NULL, '2019-08-27 07:39:55', '2019-08-27 07:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `ticket_name_th` text DEFAULT NULL,
  `ticket_name_en` text DEFAULT NULL,
  `ticket_pri_th` text DEFAULT NULL,
  `ticket_pri_en` text DEFAULT NULL,
  `ticket_img` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_name_th`, `ticket_name_en`, `ticket_pri_th`, `ticket_pri_en`, `ticket_img`, `created_at`, `updated_at`) VALUES
(6, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '20190826082508526219586.jpg', '2019-08-26 06:22:29', '2019-08-26 08:25:08'),
(8, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '201908260931331652979954.jpg', '2019-08-26 06:34:03', '2019-08-26 09:31:33'),
(14, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '2019082609180433940598.jpg', '2019-08-26 07:48:16', '2019-08-26 09:18:04'),
(15, '123', '123', '123', '123', '20190826102014357255279.jpg', '2019-08-26 10:20:14', '2019-08-26 10:20:14'),
(16, 'asd', 'asd', 'asd', 'asd', '20190826103557389402000.jpg', '2019-08-26 10:35:57', '2019-08-26 10:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_date`
--

CREATE TABLE `ticket_date` (
  `ticket_date_id` int(11) NOT NULL,
  `ticket_date_ticket_id` int(11) NOT NULL,
  `ticket_date_th` text NOT NULL,
  `ticket_date_en` text NOT NULL,
  `ticket_date_depart_th` text NOT NULL,
  `ticket_date_depart_en` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_date`
--

INSERT INTO `ticket_date` (`ticket_date_id`, `ticket_date_ticket_id`, `ticket_date_th`, `ticket_date_en`, `ticket_date_depart_th`, `ticket_date_depart_en`, `created_at`, `updated_at`) VALUES
(8, 12, 'test', 'test', 'test', 'test', '2019-08-26 07:39:50', '2019-08-26 07:39:50'),
(10, 13, 'test', 'test', 'test', 'test', '2019-08-26 07:46:48', '2019-08-26 07:46:48'),
(11, 13, 'test', 'test', 'test', 'test', '2019-08-26 07:46:48', '2019-08-26 07:46:48'),
(20, 6, 'asd', 'sad', 'sad', 'asd', '2019-08-26 08:25:08', '2019-08-26 08:25:08'),
(21, 14, 'test', 'test', 'test', 'testqqq', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(22, 14, 'test', 'test', 'test', 'test', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(23, 8, 'abca', 'zc', 'zxc', 'zxc', '2019-08-26 09:31:33', '2019-08-26 09:31:33'),
(24, 15, 'asd', 'as', 'asd', 'asd', '2019-08-26 10:20:14', '2019-08-26 10:20:14'),
(25, 16, 'aasa', 'sas', 'asasas', 'asas', '2019-08-26 10:35:58', '2019-08-26 10:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_detail`
--

CREATE TABLE `ticket_detail` (
  `ticket_detail_id` int(11) NOT NULL,
  `ticket_detail_ticket_id` int(11) DEFAULT NULL,
  `ticket_detail_th` text DEFAULT NULL,
  `ticket_detail_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_detail`
--

INSERT INTO `ticket_detail` (`ticket_detail_id`, `ticket_detail_ticket_id`, `ticket_detail_th`, `ticket_detail_en`, `created_at`, `updated_at`) VALUES
(1, 10, 'test', NULL, '2019-08-26 06:39:25', '2019-08-26 06:39:25'),
(2, 11, 'ddddddddddddd', 'dddddddddddddd', '2019-08-26 06:40:17', '2019-08-26 06:40:17'),
(3, 12, 'ddf', 'dd', '2019-08-26 07:39:50', '2019-08-26 07:39:50'),
(4, 12, 'ff', 'ffff', '2019-08-26 07:39:50', '2019-08-26 07:39:50'),
(5, 13, 'ssdsf', 'dsfd', '2019-08-26 07:46:48', '2019-08-26 07:46:48'),
(6, 13, 'sadsad', 'sadsad', '2019-08-26 07:46:48', '2019-08-26 07:46:48'),
(12, 6, 'asd', 'sad', '2019-08-26 08:25:08', '2019-08-26 08:25:08'),
(13, 14, 'asdasdad', 'asdad', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(14, 14, 'asd', 'asd', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(15, 8, 'sadsa', 'dsadasd', '2019-08-26 09:31:33', '2019-08-26 09:31:33'),
(16, 15, 'asd', 'asd', '2019-08-26 10:20:14', '2019-08-26 10:20:14'),
(17, 16, 'asasd', 'asdads', '2019-08-26 10:35:58', '2019-08-26 10:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_image`
--

CREATE TABLE `ticket_image` (
  `ticket_image_id` int(11) NOT NULL,
  `ticket_image_ticket_id` int(11) DEFAULT NULL,
  `ticket_img` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_image`
--

INSERT INTO `ticket_image` (`ticket_image_id`, `ticket_image_ticket_id`, `ticket_img`, `created_at`, `updated_at`) VALUES
(2, 12, '20190826073950499649324.jpg', '2019-08-26 07:39:50', '2019-08-26 07:39:50'),
(14, 6, '201908260820592034700054.jpg', '2019-08-26 08:20:59', '2019-08-26 08:20:59'),
(15, 6, '20190826082059387914230.jpg', '2019-08-26 08:20:59', '2019-08-26 08:20:59'),
(16, 6, '201908260820591434409190.jpg', '2019-08-26 08:20:59', '2019-08-26 08:20:59'),
(17, 14, '201908260918051406597519.jpg', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(18, 14, '201908260918052090862760.jpg', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(19, 14, '201908260918051584394039.jpg', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(21, 8, '20190826093133560753729.jpg', '2019-08-26 09:31:33', '2019-08-26 09:31:33'),
(22, 15, '201908261020141709453707.jpg', '2019-08-26 10:20:14', '2019-08-26 10:20:14'),
(23, 15, '201908261020141349777782.jpg', '2019-08-26 10:20:14', '2019-08-26 10:20:14'),
(24, 15, '20190826102015357713734.jpg', '2019-08-26 10:20:15', '2019-08-26 10:20:15'),
(25, 16, '201908261035581075984894.jpg', '2019-08-26 10:35:58', '2019-08-26 10:35:58'),
(26, 16, '20190826103558640297894.jpg', '2019-08-26 10:35:58', '2019-08-26 10:35:58'),
(27, 16, '20190826103558258243459.jpg', '2019-08-26 10:35:58', '2019-08-26 10:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_promo`
--

CREATE TABLE `ticket_promo` (
  `ticket_promo_id` int(11) NOT NULL,
  `ticket_promo_ticket_id` int(11) DEFAULT NULL,
  `ticket_promo_name_th` text DEFAULT NULL,
  `ticket_promo_name_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_promo`
--

INSERT INTO `ticket_promo` (`ticket_promo_id`, `ticket_promo_ticket_id`, `ticket_promo_name_th`, `ticket_promo_name_en`, `created_at`, `updated_at`) VALUES
(5, 12, 'test', 'test', '2019-08-26 07:39:50', '2019-08-26 07:39:50'),
(6, 13, 'test', 'test', '2019-08-26 07:46:48', '2019-08-26 07:46:48'),
(13, 6, 'zczxc', 'zxzxc', '2019-08-26 08:25:08', '2019-08-26 08:25:08'),
(14, 14, 'test', 'testqqq', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(15, 14, 'asd', 'asd', '2019-08-26 09:18:05', '2019-08-26 09:18:05'),
(16, 8, 'zxczxc', 'zxczxc', '2019-08-26 09:31:33', '2019-08-26 09:31:33'),
(17, 15, 'asdasd', 'asdasd', '2019-08-26 10:20:14', '2019-08-26 10:20:14'),
(18, 16, 'assasas', 'asasas', '2019-08-26 10:35:58', '2019-08-26 10:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_exclusive_status` int(11) NOT NULL COMMENT 'สถานะ 2 ไม่เปน 1 เป็น',
  `tour_img` text DEFAULT NULL,
  `tour_name_th` text DEFAULT NULL,
  `tour_name_en` text DEFAULT NULL,
  `tour_conti_id` int(11) DEFAULT NULL,
  `tour_count_id` int(11) DEFAULT NULL,
  `tour_county_id` int(11) DEFAULT NULL,
  `tour_pri_th` text DEFAULT NULL,
  `tour_pri_en` text DEFAULT NULL,
  `tour_airline_en` text DEFAULT NULL,
  `tour_airline_th` text DEFAULT NULL,
  `tour_time_th` text DEFAULT NULL,
  `tour_time_en` text DEFAULT NULL,
  `tour_duration_th` text DEFAULT NULL,
  `tour_duration_en` text DEFAULT NULL,
  `tour_des_th` text DEFAULT NULL,
  `tour_des_en` text DEFAULT NULL,
  `tour_detail_th` text DEFAULT NULL,
  `tour_detail_en` text DEFAULT NULL,
  `tour_term_th` text DEFAULT NULL,
  `tour_term_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_exclusive_status`, `tour_img`, `tour_name_th`, `tour_name_en`, `tour_conti_id`, `tour_count_id`, `tour_county_id`, `tour_pri_th`, `tour_pri_en`, `tour_airline_en`, `tour_airline_th`, `tour_time_th`, `tour_time_en`, `tour_duration_th`, `tour_duration_en`, `tour_des_th`, `tour_des_en`, `tour_detail_th`, `tour_detail_en`, `tour_term_th`, `tour_term_en`, `created_at`, `updated_at`) VALUES
(1, 1, '201908220932042048794946.jpg', 'เชียงใหม่', 'Chiang Mai', 3, 7, 7, '39,999 บาท/ท่าน', '39,999 bath/person', 'thaiair', 'การบินไทย', '5 วัน 4 คืน', '5 day 4 night', 'กรก - กันยา 62', 'july - june 19', 'รายละเอียด', 'test', 'วันที่ 1 : กรุงเทพฯ – ฮ่องกง- Mongkok Ladies Market\r\nวันที่ 2 : วัดแชกงมิว-วัดหวังต้าเซียน-รีพลัสเบย์-ขอพรเจ้าแม่กวนอิม-ช้อปปิ้งนาธาน จิมซ่าจุ่ย\r\nวันที่ 3 : สวนสนุกดิสนีย์แลนด์- กรุงเทพฯ', 'Day 1: Bangkok - Hong Kong - Mongkok Ladies Market\r\nDay 2: Chae Kong Mew Temple - Wangta Sien Temple - Reputation Bay - Kao Kuan Im blessing - Nathan Tsim Sha Tsui shopping\r\nDay 3: Disneyland - Bangkok theme park', 'อัตราค่าบริการนี้รวม ค่าตั๋วเครื่องบินไป - กลับ พร้อมคณะ , ค่าภาษีสนามบินทุกแห่งที่มี , ค่านํ้าหนักกระเป๋าสัมภาระท่านละไม่เกิน 20 กก. ค่ารถรับ - ส่ง และนำเที่ยวตามรายการ , ค่าที่พักพักห้องละ 2 ท่านหรือ 3 ท่าน , ค่าเข้าชมสถานที่ต่างๆ ตามรายการ ค่าอาหารตามมื้อที่ระบุในรายการ ** กรุณาศึกษารายละเอียดในโปรแกรม**', 'This rate includes Round-trip airfare with a group, all available airport taxes, luggage weight not more than 20 kg per person, shuttle bus - for tours and tours, accommodation for 2 or 3 people per room, Entrance fees to various locations as per the list of meals, according to the meals specified in the list ** Please study the details in the program **', '2019-08-20 07:40:02', '2019-08-28 02:20:23'),
(4, 1, '20190822110105575701210.jpg', 'นาโกย่า', 'NAGOYA TAKAYAMA KOCHIA PARK PREMIUM (GS)', 1, 1, 1, '39,999 บาท', '39,999 Bath', 'AIR ASIA X', 'AIR ASIA X', '5 วัน 3 คืน', '5 day', 'กรกฎาคม - กันยายน 2562', 'july - sep 19', 'ทัวร์ญี่ปุ่น ขึ้นชมความงามภูเขาไฟฟูจิชั้น 5\r\nชม ลาเวนเดอร์ ณ สวนฮานาโนะมิโยโกะ\r\nนมัสการ สักการะสิ่งศักดิ์สิทธิ์วัดอาซากุสะ\r\nชมโตเกียวสกายทรี แลนด์มาร์กแห่งใหม่', 'Japan Tour, Visit Mount Fuji 5th Floor\r\nSeeing lavender at Hanano Miyoko Park\r\nWorship the sacred things of Asakusa Temple\r\nWatch the Tokyo Sky Tree New landmark', 'วันที่ 1 : กรุงเทพฯ – ฮ่องกง- Mongkok Ladies Market\r\nวันที่ 2 : วัดแชกงมิว-วัดหวังต้าเซียน-รีพลัสเบย์-ขอพรเจ้าแม่กวนอิม-ช้อปปิ้งนาธาน จิมซ่าจุ่ย\r\nวันที่ 3 : สวนสนุกดิสนีย์แลนด์- กรุงเทพฯ', '  Day 1: Bangkok - Hong Kong - Mongkok Ladies Market\r\nDay 2: Chae Kong Mew Temple - Wangta Sien Temple - Reputation Bay - Kao Kuan Im blessing - Nathan Tsim Sha Tsui shopping\r\nDay 3: Disneyland - Bangkok theme park', 'อัตราค่าบริการนี้รวม ค่าตั๋วเครื่องบินไป - กลับ พร้อมคณะ , ค่าภาษีสนามบินทุกแห่งที่มี , ค่านํ้าหนักกระเป๋าสัมภาระท่านละไม่เกิน 20 กก. ค่ารถรับ - ส่ง และนำเที่ยวตามรายการ , ค่าที่พักพักห้องละ 2 ท่านหรือ 3 ท่าน , ค่าเข้าชมสถานที่ต่างๆ ตามรายการ ค่าอาหารตามมื้อที่ระบุในรายการ ** กรุณาศึกษารายละเอียดในโปรแกรม**', ' This rate includes Round-trip airfare with a group, all available airport taxes, luggage weight not more than 20 kg per person, shuttle bus - for tours and tours, accommodation for 2 or 3 people per room, Entrance fees to various locations as per the list of meals, according to the meals specified in the list ** Please study the details in the program **', '2019-08-20 07:56:00', '2019-08-28 02:17:21'),
(7, 1, '20190822093033396317694.jpg', 'นาโกย่า', 'NAGOYA TAKAYAMA KOCHIA PARK PREMIUM (GS)', 1, 1, 1, '39,999 บาท/ท่าน', '39,999 bath/person', 'AIR ASIA X', 'AIR ASIA X', '5 วัน 3 คืน', '5 day 4 night', 'กรกฎาคม - กันยายน 2562', 'july - sep 19', 'ทัวร์ญี่ปุ่น ขึ้นชมความงามภูเขาไฟฟูจิชั้น 5\r\nชม ลาเวนเดอร์ ณ สวนฮานาโนะมิโยโกะ\r\nนมัสการ สักการะสิ่งศักดิ์สิทธิ์วัดอาซากุสะ\r\nชมโตเกียวสกายทรี แลนด์มาร์กแห่งใหม่', 'Japan Tour, Visit Mount Fuji 5th Floor\r\nSeeing lavender at Hanano Miyoko Park\r\nWorship the sacred things of Asakusa Temple\r\nWatch the Tokyo Sky Tree New landmark', 'วันที่ 1 : กรุงเทพฯ – ฮ่องกง- Mongkok Ladies Market\r\nวันที่ 2 : วัดแชกงมิว-วัดหวังต้าเซียน-รีพลัสเบย์-ขอพรเจ้าแม่กวนอิม-ช้อปปิ้งนาธาน จิมซ่าจุ่ย\r\nวันที่ 3 : สวนสนุกดิสนีย์แลนด์- กรุงเทพฯ', '            Day 1: Bangkok - Hong Kong - Mongkok Ladies Market\r\nDay 2: Chae Kong Mew Temple - Wangta Sien Temple - Reputation Bay - Kao Kuan Im blessing - Nathan Tsim Sha Tsui shopping\r\nDay 3: Disneyland - Bangkok theme park', 'อัตราค่าบริการนี้รวม ค่าตั๋วเครื่องบินไป - กลับ พร้อมคณะ , ค่าภาษีสนามบินทุกแห่งที่มี , ค่านํ้าหนักกระเป๋าสัมภาระท่านละไม่เกิน 20 กก. ค่ารถรับ - ส่ง และนำเที่ยวตามรายการ , ค่าที่พักพักห้องละ 2 ท่านหรือ 3 ท่าน , ค่าเข้าชมสถานที่ต่างๆ ตามรายการ ค่าอาหารตามมื้อที่ระบุในรายการ ** กรุณาศึกษารายละเอียดในโปรแกรม**', ' This rate includes Round-trip airfare with a group, all available airport taxes, luggage weight not more than 20 kg per person, shuttle bus - for tours and tours, accommodation for 2 or 3 people per room, Entrance fees to various locations as per the list of meals, according to the meals specified in the list ** Please study the details in the program **', '2019-08-20 09:07:12', '2019-08-27 10:49:05'),
(8, 1, '201908221101321491823525.jpg', 'นาโกย่า', 'NAGOYA TAKAYAMA KOCHIA PARK PREMIUM (GS)', 1, 1, 1, '39,999 บาท/ท่าน', '39,999 bath/person', 'AIR ASIA X', 'AIR ASIA X', '5 วัน 3 คืน', '5 day 4 night', 'กรกฎาคม - กันยายน 2562', 'july - sep 19', NULL, NULL, 'วันที่ 1 : กรุงเทพฯ – ฮ่องกง- Mongkok Ladies Market\r\nวันที่ 2 : วัดแชกงมิว-วัดหวังต้าเซียน-รีพลัสเบย์-ขอพรเจ้าแม่กวนอิม-ช้อปปิ้งนาธาน จิมซ่าจุ่ย\r\nวันที่ 3 : สวนสนุกดิสนีย์แลนด์- กรุงเทพฯ', 'วันที่ 1 : กรุงเทพฯ – ฮ่องกง- Mongkok Ladies Market\r\nวันที่ 2 : วัดแชกงมิว-วัดหวังต้าเซียน-รีพลัสเบย์-ขอพรเจ้าแม่กวนอิม-ช้อปปิ้งนาธาน จิมซ่าจุ่ย\r\nวันที่ 3 : สวนสนุกดิสนีย์แลนด์- กรุงเทพฯ', 'อัตราค่าบริการนี้รวม ค่าตั๋วเครื่องบินไป - กลับ พร้อมคณะ , ค่าภาษีสนามบินทุกแห่งที่มี , ค่านํ้าหนักกระเป๋าสัมภาระท่านละไม่เกิน 20 กก. ค่ารถรับ - ส่ง และนำเที่ยวตามรายการ , ค่าที่พักพักห้องละ 2 ท่านหรือ 3 ท่าน , ค่าเข้าชมสถานที่ต่างๆ ตามรายการ ค่าอาหารตามมื้อที่ระบุในรายการ ** กรุณาศึกษารายละเอียดในโปรแกรม**', 'อัตราค่าบริการนี้รวม ค่าตั๋วเครื่องบินไป - กลับ พร้อมคณะ , ค่าภาษีสนามบินทุกแห่งที่มี , ค่านํ้าหนักกระเป๋าสัมภาระท่านละไม่เกิน 20 กก. ค่ารถรับ - ส่ง และนำเที่ยวตามรายการ , ค่าที่พักพักห้องละ 2 ท่านหรือ 3 ท่าน , ค่าเข้าชมสถานที่ต่างๆ ตามรายการ ค่าอาหารตามมื้อที่ระบุในรายการ ** กรุณาศึกษารายละเอียดในโปรแกรม**', '2019-08-20 09:09:22', '2019-08-27 10:39:09'),
(10, 1, '201908230851491990756444.jpg', 'เชียงใหม่', 'Chiang Mai', 3, 7, 7, '5000', '5000', 'asdsa', 'sadas', 'dasd', 'das', 'dasd', 'adad', 'Lorem ipsum dolor amet amet, consetetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. สำหรับสิ่งที่น้อยที่สุดคือการออกกำลังกายที่เต็มไปด้วยสิ่งต่าง ๆ เช่นสิ่งที่เกิดขึ้นจากสินค้าโภคภัณฑ์ ต้องมีสีที่บริสุทธิ์ใน reprehenderit ใน voluptate velit esse cillum dolore eu fugiat nulla pariatur ยกเว้นบางครั้งเกิดเหตุการณ์ที่ไม่เป็นไปได้, ในขณะที่ culpa ที่มีคุณภาพที่ดีที่สุดของพวกเขาเป็นภาพเคลื่อนไหวที่ใช้งานได้จริง.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor amet amet, consetetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. สำหรับสิ่งที่น้อยที่สุดคือการออกกำลังกายที่เต็มไปด้วยสิ่งต่าง ๆ เช่นสิ่งที่เกิดขึ้นจากสินค้าโภคภัณฑ์ ต้องมีสีที่บริสุทธิ์ใน reprehenderit ใน voluptate velit esse cillum dolore eu fugiat nulla pariatur ยกเว้นบางครั้งเกิดเหตุการณ์ที่ไม่เป็นไปได้, ในขณะที่ culpa ที่มีคุณภาพที่ดีที่สุดของพวกเขาเป็นภาพเคลื่อนไหวที่ใช้งานได้จริง.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor amet amet, consetetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. สำหรับสิ่งที่น้อยที่สุดคือการออกกำลังกายที่เต็มไปด้วยสิ่งต่าง ๆ เช่นสิ่งที่เกิดขึ้นจากสินค้าโภคภัณฑ์ ต้องมีสีที่บริสุทธิ์ใน reprehenderit ใน voluptate velit esse cillum dolore eu fugiat nulla pariatur ยกเว้นบางครั้งเกิดเหตุการณ์ที่ไม่เป็นไปได้, ในขณะที่ culpa ที่มีคุณภาพที่ดีที่สุดของพวกเขาเป็นภาพเคลื่อนไหวที่ใช้งานได้จริง.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-22 10:14:34', '2019-08-28 02:28:07'),
(12, 1, '201908221035061487941196.jpg', 'ฮอกไกโด', 'Hokkaido', 1, 1, 5, '39,999 บาท/ท่าน', '39,999 bath/person', 'asdas', 'asdas', 'das', 'asdas', 'sdas', 'dasd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-22 10:35:06', '2019-08-28 02:50:00'),
(13, 1, '2019082304451087749161.jpg', 'เชียงไฮ้', 'Shanghai', 1, 2, 9, '39,999 บาท/ท่าน', '39,999 bath/person', 'sxxsxs', 'xssx', 'xsxs', 'xssx', 'xsxsx', 'xsxssx', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-23 04:45:10', '2019-08-28 02:51:30'),
(14, 1, '201908230622331221921726.jpg', 'ปักกิ่ง', 'Beijing', 1, 2, 9, '39,999 บาท/ท่าน', '39,999 bath/person', 'asd', 'asds', 'dasd', 'ass', 'adsdas', 'asd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-23 06:22:32', '2019-08-28 02:52:48'),
(15, 1, '201908230643061484737622.jpg', 'ลอนดอน', 'ฟหกฟก', 2, 5, 3, '39,999 บาท/ท่าน', '39,999 บาท/ท่าน', 'กฟหก', 'ฟหกฟห', 'asdasd', 'asdasd', 'asdas', 'asdasd', NULL, NULL, 'asd', 'sad', 'asdasd', 'asasd', '2019-08-23 06:43:05', '2019-08-27 10:41:02'),
(16, 1, '20190827094427611213490.jpg', 'ฮอกไกโด', 'hokaido', 1, 1, 5, '33,999 บาท/ท่าน', '33,999 บาท/ท่าน', 'AIR ASIA X', 'AIR ASIA X', '5 วัน 4 คืน', '5 day 4 night', 'กรกฎาคม - กันยายน 2562', 'กรกฎาคม - กันยายน 2562', 'ทัวร์ญี่ปุ่น ขึ้นชมความงามภูเขาไฟฟูจิชั้น 5\r\nชม ลาเวนเดอร์ ณ สวนฮานาโนะมิโยโกะ\r\nนมัสการ สักการะสิ่งศักดิ์สิทธิ์วัดอาซากุสะ\r\nชมโตเกียวสกายทรี แลนด์มาร์กแห่งใหม่', 'abc', 'วันที่ 1 : กรุงเทพฯ – ฮ่องกง- Mongkok Ladies Market\r\nวันที่ 2 : วัดแชกงมิว-วัดหวังต้าเซียน-รีพลัสเบย์-ขอพรเจ้าแม่กวนอิม-ช้อปปิ้งนาธาน จิมซ่าจุ่ย\r\nวันที่ 3 : สวนสนุกดิสนีย์แลนด์- กรุงเทพฯ', 'asd', 'อัตราค่าบริการนี้รวม ค่าตั๋วเครื่องบินไป - กลับ พร้อมคณะ , ค่าภาษีสนามบินทุกแห่งที่มี , ค่านํ้าหนักกระเป๋าสัมภาระท่านละไม่เกิน 20 กก. ค่ารถรับ - ส่ง และนำเที่ยวตามรายการ , ค่าที่พักพักห้องละ 2 ท่านหรือ 3 ท่าน , ค่าเข้าชมสถานที่ต่างๆ ตามรายการ ค่าอาหารตามมื้อที่ระบุในรายการ ** กรุณาศึกษารายละเอียดในโปรแกรม**', 'asd', '2019-08-27 09:44:27', '2019-08-27 09:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `tour_ex`
--

CREATE TABLE `tour_ex` (
  `tour_ex_id` int(11) NOT NULL,
  `tour_ex_name_th` text DEFAULT NULL,
  `tour_ex_name_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_ex`
--

INSERT INTO `tour_ex` (`tour_ex_id`, `tour_ex_name_th`, `tour_ex_name_en`, `created_at`, `updated_at`) VALUES
(1, 'ทัวร์พิเศษ', 'Exclusive Tour', '2019-08-27 00:00:00', '2019-08-27 00:00:00'),
(2, 'ทัวร์ธรรมดา', 'Normal Tour', '2019-08-27 00:00:00', '2019-08-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `traveldate`
--

CREATE TABLE `traveldate` (
  `tr_date_id` int(11) NOT NULL COMMENT 'คีย์หลัก วันเดินทางไปกลับและราคา',
  `tr_date_tour_id` int(11) DEFAULT NULL,
  `tr_date_th` text DEFAULT NULL,
  `tr_date_en` text DEFAULT NULL,
  `tr_date_pri_th` text DEFAULT NULL,
  `tr_date_pri_en` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traveldate`
--

INSERT INTO `traveldate` (`tr_date_id`, `tr_date_tour_id`, `tr_date_th`, `tr_date_en`, `tr_date_pri_th`, `tr_date_pri_en`, `created_at`, `updated_at`) VALUES
(174, 16, '05 - 07 ก.ค. 2562', '16,900.-', '05 - 07 ก.ค. 2562', '16,900.-', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(175, 16, '05 - 07 ก.ค. 2562', '16,900.-', '05 - 07 ก.ค. 2562', '16,900.-', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(176, 16, '05 - 07 ก.ค. 2562', '16,900.-', '05 - 07 ก.ค. 2562', '16,900.-', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(177, 16, '05 - 07 ก.ค. 2562', '16,900.-', '05 - 07 ก.ค. 2562', '16,900.-', '2019-08-27 09:44:27', '2019-08-27 09:44:27'),
(189, 15, 'asd', 'sada', 'das', 'asd', '2019-08-27 10:41:03', '2019-08-27 10:41:03'),
(201, 7, '05 - 07 ก.ค. 2562', '05 - 07 july. 2019', '16,900.-', '16,900.-', '2019-08-27 10:49:05', '2019-08-27 10:49:05'),
(203, 4, '05 - 07 ก.ค. 2562', '05 - 07 july. 2019', '16,999.-', '16,900.-', '2019-08-28 02:17:22', '2019-08-28 02:17:22'),
(204, 4, '05 - 07 ก.ค. 2562', '05 - 07 july. 2019', '16,999.-', '16,900.-', '2019-08-28 02:17:22', '2019-08-28 02:17:22'),
(205, 4, '05 - 07 ก.ค. 2562', '05 - 07 july. 2019', '16,999.-', '16,900.-', '2019-08-28 02:17:22', '2019-08-28 02:17:22'),
(206, 4, '05 - 07 ก.ค. 2562', '05 - 07 july. 2019', '16,999.-', '16,900.-', '2019-08-28 02:17:22', '2019-08-28 02:17:22'),
(207, 4, '05 - 07 ก.ค. 2562', '05 - 07 july. 2019', '16,999.-', '16,900.-', '2019-08-28 02:17:22', '2019-08-28 02:17:22'),
(208, 1, '4-5', '4-5', '123', '123', '2019-08-28 02:20:23', '2019-08-28 02:20:23'),
(209, 10, 'dasd', 'das', 'sadas', 'asd', '2019-08-28 02:28:07', '2019-08-28 02:28:07'),
(213, 12, 'sd', 'asda', 'asd', 'asd', '2019-08-28 02:50:00', '2019-08-28 02:50:00'),
(214, 12, 'sd', 'asda', 'asd', 'asd', '2019-08-28 02:50:00', '2019-08-28 02:50:00'),
(215, 13, 'xsx', 'sx', 'sx', 'sxsx', '2019-08-28 02:51:30', '2019-08-28 02:51:30'),
(216, 13, 'xsx', 'sx', 'sx', 'sxsx', '2019-08-28 02:51:30', '2019-08-28 02:51:30'),
(217, 13, 'xsx', 'sx', 'sx', 'sxsx', '2019-08-28 02:51:30', '2019-08-28 02:51:30'),
(218, 13, 'xsx', 'sx', 'sx', 'sxsx', '2019-08-28 02:51:31', '2019-08-28 02:51:31'),
(219, 13, 'xsx', 'sx', 'sx', 'sxsx', '2019-08-28 02:51:31', '2019-08-28 02:51:31'),
(220, 14, 'dada', 'dasd', 'asdas', 'asd', '2019-08-28 02:52:48', '2019-08-28 02:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_username` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'somsak', 'notnotnot@gmail.com', 'somsakza', '$2y$10$176o6K0aZsl2szy1Oqn3eeI.wxlIhY0zFPiulD3SDlyVjQCBdHs9m', 'Qg550eiR1YoDupCNcOsfte2edsbVtWfcMV49CNY9wQNDeW1mAjLLu1C02G0N', '2019-07-29 21:19:11', '2019-07-29 21:19:11'),
(3, 'somtum', 'somzap@gmail.com', 'somtum', '$2y$10$SLxdacBKmNiT2tVk1cS1x.1vViRyzcQ.gcDN2P/8D3piRruw9pd3m', '0hKKSms1EvpIawwHsb2kJvkCkJSts1VNSYLXkUA96ldPRBDDCE55vbnZgOyF', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `bannerword`
--
ALTER TABLE `bannerword`
  ADD PRIMARY KEY (`bannerword_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `career_register`
--
ALTER TABLE `career_register`
  ADD PRIMARY KEY (`career_register_id`);

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`continent_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`county_id`);

--
-- Indexes for table `duty`
--
ALTER TABLE `duty`
  ADD PRIMARY KEY (`duty_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticket_date`
--
ALTER TABLE `ticket_date`
  ADD PRIMARY KEY (`ticket_date_id`);

--
-- Indexes for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  ADD PRIMARY KEY (`ticket_detail_id`);

--
-- Indexes for table `ticket_image`
--
ALTER TABLE `ticket_image`
  ADD PRIMARY KEY (`ticket_image_id`);

--
-- Indexes for table `ticket_promo`
--
ALTER TABLE `ticket_promo`
  ADD PRIMARY KEY (`ticket_promo_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tour_ex`
--
ALTER TABLE `tour_ex`
  ADD PRIMARY KEY (`tour_ex_id`);

--
-- Indexes for table `traveldate`
--
ALTER TABLE `traveldate`
  ADD PRIMARY KEY (`tr_date_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bannerword`
--
ALTER TABLE `bannerword`
  MODIFY `bannerword_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก คำแบนเนอร์', AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `career_register`
--
ALTER TABLE `career_register`
  MODIFY `career_register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `continent`
--
ALTER TABLE `continent`
  MODIFY `continent_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลักทวีป', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลักประเทศ', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `county_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลักจังหวัด', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `duty`
--
ALTER TABLE `duty`
  MODIFY `duty_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลักหน้าที่', AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก คุณสมบัติ', AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ticket_date`
--
ALTER TABLE `ticket_date`
  MODIFY `ticket_date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  MODIFY `ticket_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ticket_image`
--
ALTER TABLE `ticket_image`
  MODIFY `ticket_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ticket_promo`
--
ALTER TABLE `ticket_promo`
  MODIFY `ticket_promo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tour_ex`
--
ALTER TABLE `tour_ex`
  MODIFY `tour_ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `traveldate`
--
ALTER TABLE `traveldate`
  MODIFY `tr_date_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก วันเดินทางไปกลับและราคา', AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
