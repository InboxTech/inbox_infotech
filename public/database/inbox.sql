-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 12:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_exps`
--

CREATE TABLE `applicant_exps` (
  `aeid` bigint(20) UNSIGNED NOT NULL,
  `job_application_id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_for_job_change` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_exps`
--

INSERT INTO `applicant_exps` (`aeid`, `job_application_id`, `company_name`, `position`, `details`, `start_date`, `end_date`, `reason_for_job_change`, `other`, `created_at`, `updated_at`) VALUES
(1, 1, 'Numerator', 'Team leader', 'Test', '2022-09-01', '2022-09-30', 'Test1', 'Test  2', NULL, NULL),
(2, 1, 'Minacs', 'CSR', 'Test2', '2022-09-29', '2022-09-29', 'Future ref', 'Test', NULL, NULL),
(3, 10, 'Numerator', 'TL', 'Date', '2022-10-12', '2022-10-27', 'Test', NULL, NULL, NULL),
(4, 11, 'Numerator', 'TL', 'Date', '2022-10-12', '2022-10-27', 'Test', NULL, NULL, NULL),
(5, 12, 'Numerator', 'TL', 'Date', '2022-10-12', '2022-10-27', 'Test', NULL, NULL, NULL),
(6, 13, 'Numerator', 'TL', 'Date', '2022-10-12', '2022-10-27', 'Test', NULL, NULL, NULL),
(7, 13, 'Test', 'Test1', '12-10-2022', '27-10-2022', 'test', 'test1', NULL, NULL, NULL),
(8, 14, 'Numerator', 'TL', 'Date', '2022-10-12', '2022-10-27', 'Test', NULL, NULL, NULL),
(9, 14, 'Minacs', 'SUP', '12-10-2022', '27-10-2022', 'test', 'test1', NULL, NULL, NULL),
(10, 15, 'Numerator', 'TL', 'Date', '2022-10-12', '2022-10-27', 'Test', NULL, NULL, NULL),
(11, 15, 'Minacs', 'SUP', '12-10-2022', '27-10-2022', 'test', 'test1', NULL, NULL, NULL),
(12, 16, 'Astron E Services', 'Hr Head', 'HR', '2017-08-14', '2022-11-14', 'Relocated to Baroda', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_qualifications`
--

CREATE TABLE `applicant_qualifications` (
  `aqid` bigint(20) UNSIGNED NOT NULL,
  `job_application_id` int(11) NOT NULL,
  `name_of_the_examination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_the_boardoruniversity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_the_institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_passing` year(4) DEFAULT NULL,
  `cgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_qualifications`
--

INSERT INTO `applicant_qualifications` (`aqid`, `job_application_id`, `name_of_the_examination`, `name_of_the_boardoruniversity`, `name_of_the_institution`, `year_of_passing`, `cgpa`, `created_at`, `updated_at`) VALUES
(1, 1, 'BCA', 'MSU', 'MCA', 0000, '9.5', NULL, NULL),
(2, 1, 'MCA', 'Navrachana', 'Navrachana', 0000, '5.1', NULL, NULL),
(3, 7, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(4, 7, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(5, 7, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(6, 7, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(7, 9, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(8, 9, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(9, 9, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(10, 9, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(11, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 10, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(13, 10, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(14, 10, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(15, 10, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(16, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 11, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(18, 11, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(19, 11, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(20, 11, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(21, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 12, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(23, 12, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(24, 12, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(25, 12, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(26, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 13, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(28, 13, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(29, 13, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(30, 13, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(31, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 14, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(33, 14, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(34, 14, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(35, 14, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(36, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 15, 'SSC', 'GESB', 'MSU1', 2022, '100', NULL, NULL),
(38, 15, 'HSC', 'GESB', 'MSU2', 2006, '100', NULL, NULL),
(39, 15, 'BCA', 'MSU', 'MSU', 2008, '96', NULL, NULL),
(40, 15, 'MCA', 'NUV', 'NUv', 2016, '96', NULL, NULL),
(41, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 16, 'SSC', 'St Ann;s high school Vadinar', 'GEB', 2011, 'B+', NULL, NULL),
(43, 16, 'HSC', 'St Ann;s high school Vadinar', 'GEB', 2013, 'B', NULL, NULL),
(44, 16, 'B.com', 'SVET', 'GTU', 2016, 'B', NULL, NULL),
(45, 16, 'MBA', 'LD Arts College', 'GTU', 2018, 'B+', NULL, NULL),
(46, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Prestigious Asia Leadership Summit and Award', '<p>Inbox Infotech won the prestigious Asia Leadership Summit and Award(2016-2017)</p>', '1665636881.png', 1, NULL, '2022-10-12 23:22:50', '2022-10-12 23:25:10'),
(2, 'Hot 100 Startup Awards', '<p>Inbox Infotech was recognized as Hot 100 Startup Awards – 2017</p>', '1665637165.png', 1, NULL, '2022-10-12 23:29:25', '2022-10-12 23:29:25'),
(3, 'IWC', '<p>Inbox Infotech was honored among IWC (Indian Women Convention) – Women Leader, Excellence in IT, 2017</p>', '1665637296.png', 1, NULL, '2022-10-12 23:31:36', '2022-10-12 23:31:36'),
(4, 'Woman Entrepreneur', '<p>Inbox Infotech bagged Middle-East Asia Leadership Summit and wards (2016-2017) – Woman Entrepreneur of the Year 2016</p>', '1665637350.png', 1, NULL, '2022-10-12 23:32:30', '2022-10-12 23:32:30'),
(5, 'ISO 27001-2013 for Information Security Management System', '<p>Inbox Infotech Private LTD. has been awarded &nbsp;ISO 27001-2013 for Information Security Management System</p>', '1665637410.jpg', 1, NULL, '2022-10-12 23:33:30', '2022-10-12 23:33:30'),
(6, 'ISO 9001-2015 for Quality Management System', '<p>Inbox Infotech Private LTD. has been awarded ISO 9001-2015 for Quality Management System</p>', '1665637444.jpg', 1, NULL, '2022-10-12 23:34:04', '2022-10-12 23:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `carrers`
--

CREATE TABLE `carrers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joinin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `endmdate` date NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postedby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrers`
--

INSERT INTO `carrers` (`id`, `position`, `salary`, `experience`, `joinin`, `jobdescription`, `image`, `status`, `startdate`, `endmdate`, `skill`, `postedby`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Laravel Developers', '₹35,000.00 – ₹40,000.00 per month', '3+ years', '30 Days', '<p><strong>Responsibilities:</strong></p><p>Design, develop and implement applications that support day-to-day operations using PHP, HTML, MySQL, jQuery, JavaScript and MVC frameworks – Responsible for solving complex technical issues and giving quick solutions Active involvement in client communication to understand functional requirements<br>Active involvement in client communication to understand functional requirements<br>Ensure quality projects are delivered within defined timelines<br>Ensure quality standards are met according to guidelines provided technically<br>&nbsp;</p><p><strong>Skills and Qualifications:</strong></p><p>Strong knowledge of PHP web frameworks Laravel<br>Understanding the fully synchronous behaviour of PHP<br>Understanding of MVC design patterns<br>Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3<br>Knowledge of object oriented PHP programming<br>Understanding accessibility and security compliance {{Depending on the specific project}}<br>Strong knowledge of the common PHP or web server exploits and their solutions<br>Understanding fundamental design principles behind a scalable application<br>User authentication and authorization between multiple systems, servers, and environments<br>Integration of multiple data sources and databases into one system<br>Familiarity with limitations of PHP as a platform and its workarounds<br>creating database schemas that represent and support business processes<br>Familiarity with SQL/MySQL databases and their declarative query languages<br>Proficient understanding of code versioning tools, such as Git Supplemental Pay<br>&nbsp;</p><p><strong>Education</strong>: Bachelor’s (Preferred)</p><p><strong>Experience</strong>: 3 years (Preferred) software development: 3 years (Preferred) HTML5: 3 years (Preferred)</p><p><strong>Work Remotely</strong>: No</p>', '1665461711.jpg', '1', '2022-09-28', '2022-10-07', 'PHP, Laravel, CSS, HTML, JS', 'shyam', NULL, '2022-09-28 07:39:10', '2022-10-11 01:02:02'),
(4, 'ddd', 'ddd', 'ddd', 'ddd', 'Job Testingthe klknkjlkjklj hjbjbjk', '1665461679.jpg', '1', '2022-09-28', '2022-10-09', 'jkbjknbjkbkjbjjbbnb', 'shyam', NULL, '2022-09-28 07:51:39', '2022-10-10 22:44:39'),
(5, 'HTML Developer', '15 LPA', '2 Years', '30 days', 'Testing the job details', '1665461513.png', '1', '2022-10-11', '2022-10-30', 'Laravel, Css, HTML, Javascript', 'shyam', NULL, '2022-10-10 22:41:53', '2022-10-10 22:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `category__tickets`
--

CREATE TABLE `category__tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category__tickets`
--

INSERT INTO `category__tickets` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Software', 1, NULL, '2022-10-14 04:26:45', '2022-10-14 04:26:45'),
(2, 'Hardware', 1, NULL, '2022-10-14 04:39:10', '2022-10-14 04:39:10'),
(3, 'New System Setup', 1, NULL, '2022-10-14 04:39:27', '2022-10-14 04:39:27'),
(4, 'test1', 0, '2022-10-14 04:41:28', '2022-10-14 04:40:16', '2022-10-14 04:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `clientlogos`
--

CREATE TABLE `clientlogos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientlogos`
--

INSERT INTO `clientlogos` (`id`, `name`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Amazon', '1665116872.png', '0', NULL, '2022-10-06 22:54:19', '2022-10-06 23:18:33'),
(2, 'HCL', '1665116922.png', '1', NULL, '2022-10-06 22:58:42', '2022-10-06 22:58:42'),
(3, 'Verzion', '1665116953.png', '0', NULL, '2022-10-06 22:59:13', '2022-10-06 23:18:54'),
(4, 'Brillio', '1665117275.png', '1', NULL, '2022-10-06 23:04:35', '2022-10-06 23:04:35'),
(5, 'ABB', '1665117298.png', '1', NULL, '2022-10-06 23:04:58', '2022-10-06 23:04:58'),
(6, 'Sun', '1665117330.png', '0', NULL, '2022-10-06 23:05:30', '2022-10-06 23:19:18'),
(7, 'Vizee', '1665117434.png', '1', NULL, '2022-10-06 23:07:14', '2022-10-06 23:07:14'),
(8, 'Tech Mahindra', '1665117520.png', '0', NULL, '2022-10-06 23:07:26', '2022-10-06 23:19:41'),
(9, 'Matrix', '1665117542.png', '1', NULL, '2022-10-06 23:09:02', '2022-10-06 23:09:02'),
(10, 'MI', '1665117572.png', '1', NULL, '2022-10-06 23:09:32', '2022-10-06 23:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galleryimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_name`, `title`, `short_details`, `long_details`, `main_image`, `nav_title`, `nav_description`, `galleryimages`, `createdby`, `updatedby`, `created_at`, `updated_at`, `status`, `deleted_at`) VALUES
(53, 'About Us', 'Message From CEO', 'Payal Patel', '<p>Inbox Infotech is co-operates with clients in solving the hardest problems they face in their businesses—and the world. We do this by channeling the diversity of our people and their thinking.</p><p>To get your business’s growth started with the latest enterprise-level IT support and security solutions, get in touch with us!</p><p>For media queries: payal.patel@inboxtechs.com</p><p>&nbsp;</p>', 'Payal-Patel (1)_1665138608.jpg', 'CEO', NULL, NULL, 'shyam', 'shyam', '2022-10-07 04:08:45', '2022-10-07 07:50:43', 1, NULL),
(54, 'About us | Company Overview', 'Extending a helping hand for the future', 'Inbox Infotech, the pioneer of offering IT solutions combines business intelligence along with experience to incorporate new innovative changes and deliver constructive results.\r\nPromising to offer agile, innovative and competitive services for custom application and software development, Inbox Infotech seeks to be your one-stop solution for software development.\r\nWe are proud to be the holders of eminent industry awards that reflect our past contribution and excellence throughout the field.', '<p><strong>World-class solutions</strong></p><p>Our thorough research and expertise have essentially acquired successful solutions with the help of a committed team that is aimed to help individuals grow in the challenging world. With an aim to establishing an excellent team, we build bespoke teams around the domain and technology requirements drawn from a wide talent pool of a large team of professionals. The expertise has been developed post working across a number of industries that underpins the varied suite of solutions.</p><p>We aim to create and deliver technology and business solutions that fit the needs of the clients and also deliver the best outcome to a wide range of clients. Offering end-to-end IT solutions combined with the highest quality standard and efficiency, we offer innovation, technical expertise, and integrity as the primary hallmarks of our work.</p><p>&nbsp;</p>', 'image-removebg-preview_1665149002.png', 'What we do', 'At Inbox Infotech Pvt Ltd, we are the global leaders delivering enterprise level IT Support and Solutions in the field of cyber security, artificial intelligence, IoT, web and application development, data center solutions, custom ERP solutions, and mobile app development. By catering to a vast majority of companies in the field of hospitality, education, IT and many others, we seek to be the number one IT support solution.\r\n\r\nOur primary mission lies in helping a wide array of customers to attain business objectives and offer dynamic IT solutions and services. By effectively partnering with the clients to offer innovative solutions and adapt to a complex environment, we offer best-in-class services to the members. By functioning as a complete stakeholder to business, we present to you a consulting-led approach that encompasses the enterprise value chain. The rapidly changing state of affairs along with the latest technologies is introduced each day to suit the requirement of the clients.', NULL, 'shyam', 'shyam', '2022-10-07 04:20:46', '2022-10-07 07:57:41', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `ip`, `message`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'inbox', 'shyamkumar390007@gmail.com', '127.0.0.1', 'Test', 1, '2022-10-04 06:22:34', '2022-10-05 23:34:39', '2022-10-05 23:34:39'),
(2, 'shyam', 'shyamkumar@inboxtechs.in', '127.0.0.1', 'test', 1, '2022-10-04 06:25:17', '2022-10-05 23:36:29', '2022-10-05 23:36:29'),
(20, 'Kisan', 'shyamkumar@inboxtechs.in', '127.0.0.1', 'Test', NULL, '2022-10-04 07:05:27', '2022-10-05 23:33:07', '2022-10-05 23:33:07'),
(21, 'Kisan', 'shyamkumar@inboxtechs.in', '127.0.0.1', 'Test hjhjhhjhk', 1, '2022-10-04 07:06:02', '2022-10-06 00:15:07', NULL),
(22, 'shyam', 'shyamkumar390007@gmail.com', '127.0.0.1', 'test2', 0, '2022-10-06 00:18:39', '2022-10-06 00:18:39', NULL),
(23, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 1, '2022-10-06 00:31:53', '2022-10-13 05:32:35', NULL),
(24, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:32:50', '2022-10-06 00:32:50', NULL),
(25, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:33:07', '2022-10-06 00:33:07', NULL),
(26, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:34:27', '2022-10-06 00:34:27', NULL),
(27, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:36:47', '2022-10-06 00:36:47', NULL),
(28, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:38:13', '2022-10-06 00:38:13', NULL),
(29, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:39:13', '2022-10-06 00:39:13', NULL),
(30, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:40:09', '2022-10-06 00:40:09', NULL),
(31, 'Kisan', 'kisan@inbox.com', '127.0.0.1', 'test email', 0, '2022-10-06 00:42:25', '2022-10-06 00:42:25', NULL),
(32, 'shyam', '9033569861', '127.0.0.1', 'test', 0, '2022-10-06 05:32:30', '2022-10-06 05:32:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `gender`, `project_id`, `email`, `status`, `phone`, `image`, `password`, `address`, `city`, `state`, `country`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Rahul1', 'Rathore1', 'female', 1, 'rahulp@inbox.com', 1, '9876543210', '1665998284.png', 'Testq', '4th Floor Ocen building', 'Vadodara', 'Gujarat', 'India', 'Testd', NULL, NULL, '2022-10-17 03:55:32'),
(2, 'Shyam', 'pandey', 'male', 2, 'shyam@gmail.com', 1, '9033569861', '1665998300.jpg', '$2y$10$LD0sT4He6xq/4zZqv5lhMe66NzymBn4AxZUz9T9FPy5YbsVXgmMAC', 'Test', 'etst', 'test', 'test', 'Test', NULL, '2022-10-17 03:46:45', '2022-10-17 06:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `job_application_id` bigint(20) UNSIGNED NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ready_to_reallocates` int(11) NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobapplications`
--

INSERT INTO `jobapplications` (`job_application_id`, `job_post_id`, `first_name`, `last_name`, `citizenship`, `date_of_birth`, `address`, `zip_code`, `city`, `state`, `phone_no`, `email_id`, `ready_to_reallocates`, `resume`, `photo`, `status`, `comment`, `updatedby`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'shyamkumar', 'pandey', 'Indian', '2022-09-29', 'Shivnagar behind suvejpumping', '390004', 'Vadodara', 'Gujarat', '9033569861', 'shyamkumar390007@gmail.com', 1, 'test', 'avatar-01.jpg', 4, 'test1', 'shyam', NULL, '2022-09-30 03:50:07', NULL),
(2, 2, 'Ramkumar', 'Pandey', 'Indian', '2022-09-29', 'Shivnagar behind suvejpumping', '390004', 'Vadodara', 'Gujarat', '9638300345', 'ram@gmail.com', 1, 'test', 'test', 2, 'Good Candi.', 'shyam', NULL, '2022-09-30 03:50:52', NULL),
(3, 1, 'Sojan', 'Raj', 'Indian', '2022-09-29', 'Shivnagar behind suvejpumping', '390004', 'Vadodara', 'Gujarat', '7048504389', 'sojan@gmail.com', 1, 'test', 'test', 1, NULL, '', NULL, '2022-09-29 01:45:25', NULL),
(4, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665557126.pdf', '1665557126.jpg', 1, NULL, NULL, '2022-10-12 01:15:26', '2022-10-12 01:15:26', NULL),
(5, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665557279.pdf', '1665557279.jpg', 1, NULL, NULL, '2022-10-12 01:17:59', '2022-10-12 01:17:59', NULL),
(6, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665558000.pdf', '1665557999.jpg', 1, NULL, NULL, '2022-10-12 01:30:00', '2022-10-12 01:30:00', NULL),
(7, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665558145.pdf', '1665558145.jpg', 1, NULL, NULL, '2022-10-12 01:32:25', '2022-10-12 01:32:25', NULL),
(8, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665558225.pdf', '1665558225.jpg', 1, NULL, NULL, '2022-10-12 01:33:45', '2022-10-12 01:33:45', NULL),
(9, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665558309.pdf', '1665558309.jpg', 1, NULL, NULL, '2022-10-12 01:35:09', '2022-10-12 01:35:09', NULL),
(10, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665558336.pdf', '1665558336.jpg', 1, NULL, NULL, '2022-10-12 01:35:36', '2022-10-12 01:35:36', NULL),
(11, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665561889.pdf', '1665561889.jpg', 1, NULL, NULL, '2022-10-12 02:34:49', '2022-10-12 02:34:49', NULL),
(12, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665563737.pdf', '1665563737.jpg', 1, NULL, NULL, '2022-10-12 03:05:37', '2022-10-12 03:05:37', NULL),
(13, 2, 'shyam', 'pandey', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665563804.pdf', '1665563804.jpg', 1, NULL, NULL, '2022-10-12 03:06:44', '2022-10-12 03:06:44', NULL),
(14, 2, 'shyamp', 'pandeyk', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665563910.pdf', '1665563910.jpg', 1, NULL, NULL, '2022-10-12 03:08:30', '2022-10-12 03:08:30', NULL),
(15, 2, 'shyamp', 'pandeyk', 'indian', '2022-12-31', 'gg', 'gg', 'gg', 'gg', '9033569861', 'shyamkumar390007@gmail.com', 1, '1665564029.pdf', '1665564029.jpg', 2, NULL, 'shyam', '2022-10-12 03:10:29', '2022-10-12 03:17:22', NULL),
(16, 2, 'Sojan', 'Raj', 'indian', '1992-08-25', '108-b gokul township', '380091', 'Vadodara', 'Gujarat', '9879303581', 'sojanraj25@gmail.com', 1, '1665574909.png', '1665574908.jpg', 3, 'Resume not up the mark', 'shyam', '2022-10-12 06:11:49', '2022-10-12 06:14:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaderships`
--

CREATE TABLE `leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderships`
--

INSERT INTO `leaderships` (`id`, `name`, `title`, `details`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'shyam', 'SR. Developer', '<p>As General Counsel of Elixir, Tony oversees global legal activities and policies across all aspects.</p>', '1665061066.png', '1', '2022-10-12 10:17:05', NULL, '2022-10-12 04:47:05'),
(3, 'Kishann', 'Sr. Php developer', '<p>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</p>', '1665061868.png', '1', '2022-10-12 10:17:09', '2022-10-06 07:38:58', '2022-10-12 04:47:09'),
(4, 'Payal Patel', 'CEO and Founder', '<p>our core purpose and will always care more than our competition, bringing the highest levels of intensity, commitment, and competitiveness to everything we do.</p>', '1665570305.jpg', '1', NULL, '2022-10-12 04:55:05', '2022-10-12 04:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_23_124326_create_sessions_table', 1),
(7, '2022_09_26_033944_update_users_table', 2),
(8, '2022_09_26_064244_create_cms_table', 3),
(9, '2022_09_26_082519_update_cmss_table', 4),
(11, '2022_09_28_110929_create_carrers_table', 5),
(12, '2022_09_29_042310_create_jobapplications_table', 6),
(13, '2022_09_29_045858_create_applicant_qualifications_table', 7),
(14, '2022_09_29_050013_create_applicant_exps_table', 7),
(15, '2022_09_30_094819_create_service_images_table', 8),
(16, '2022_09_30_100012_create_services_table', 9),
(17, '2022_09_30_125418_create_activity_log_table', 10),
(18, '2022_10_03_101930_create_products_table', 11),
(19, '2022_10_04_061328_create_sliders_table', 12),
(20, '2022_10_04_110524_create_contactus_table', 13),
(21, '2022_10_06_111037_create_leaderships_table', 14),
(22, '2022_10_06_132855_create_clientlogos_table', 15),
(23, '2022_10_07_052144_create_testimonials_table', 16),
(24, '2022_10_13_035241_create_awards_table', 17),
(25, '2022_10_13_105453_create_views_table', 18),
(27, '2022_10_14_081103_create_category__tickets_table', 20),
(28, '2022_10_14_101448_create_sub__category__tickets_table', 21),
(29, '2022_10_14_122320_create_customers_table', 22),
(30, '2022_10_14_125427_create_projects_table', 22),
(31, '2022_10_17_110813_create_supporttickets_table', 23),
(32, '2022_10_17_111757_create_ticketassignments_table', 23),
(33, '2022_10_17_113422_create_ticketreplys_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imaage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noindex_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `short_desc`, `long_desc`, `meta_tags`, `meta_desc`, `con_tag`, `imaage`, `image_alt`, `noindex_tag`, `tax1`, `tax2`, `tax3`, `tax4`, `tax5`, `createdby`, `updatedby`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Human resource management', 'Project human resource (HR) management is an element of project management concerned with organizing, managing, and leading a project team. The team includes everyone who has assigned roles and responsibilities for completing the project.', '<p>Project human resource (HR) management is an element of project management concerned with organizing, managing, and leading a project team. The team includes everyone who has assigned roles and responsibilities for completing the project.</p><p>Project teams present unique opportunities and challenges because they bring staff from different functional areas together in new roles and relationships. An employee with no supervisory experience might lead a project phase, assuming authority over more senior employees.</p><p>A subject-matter expert might have the opportunity to weigh in on strategy and budget decisions. With proper management, these new team dynamics can provide development opportunities and enhance project results.</p><p>HR project management is a component of project resource management, which is itself part of an overall project management plan. In the world of project planning, project HR management lives here:</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665402697.png', 'HRM', NULL, NULL, NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-03 06:45:14', '2022-10-10 06:21:37'),
(2, 'ECOM', 'In the Ecom project, we bring together various disciplines to go beyond the current knowledge to develop an evidence-based behavioural and communication package for health professionals and agencies throughout Europe in case of major outbreaks of infectious diseases.', '<p><strong>OUR APPROACH</strong></p><p>Our goal is reached through the following specific objectives:</p><p>To assess the time-dependent influences of epidemiology and risk communication including media content on human behaviour during the A/H1N1 pandemic;<br>To analyse, using social marketing principles, vaccination behaviour, audience segmentation, and vaccination service delivery;<br>To analyse knowledge, attitudes, risk perception, vaccination non-response and reasons for resistance during past epidemics;<br>To apply Discrete Choice Experiments to determine acceptance of preventive measures in the case of epidemic outbreaks;</p><p><br>To integrate the key findings of the studies under the first four objectives, to determine critical factors, groups, and media to be addressed in the development of effective strategies;<br>To test behavioural interventions and communication strategies tailored to different target audiences;<br>To finalize and disseminate a package of evidence-based tools that can be tailored to individual European countries.</p><p>&nbsp;</p><p><strong>OUR OUTCOME</strong></p><p>The main outcome of the Ecom project can be divided into seven key messages:</p><p>Risk perception and recognition of personal risk status can be influenced by ‘trustworthy’ sources of information;<br>Mass media / digital media have a spotlight effect that increases perception of risk but moves on in advance of later advice about appropriate action;<br>There is a need to tailor communication and behavioural programmes to different groups;<br>A dominant current characteristic of many existing programmes is a focus on rational decision making and the transmission of accurate advice;<br>Disease characteristics, perceptions of efficacy of advice and personal risk perception have a big impact on decision making and compliance;<br>Healthcare workers are key sources of information and public opinion, but are often not optimally used in such roles due to their lack of accurate risk perception and of understanding about risks associated with pandemic events;<br>Under-vaccinated groups are often as diverse in their opinions and actions as the rest of the population; however they do have distinct information, access and support needs.<br>&nbsp;</p>', NULL, NULL, NULL, '1665402983.jpg', 'ECOM', NULL, NULL, NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-03 06:53:49', '2022-10-10 06:26:23'),
(3, 'Vehicle Tracking System', 'Get real-time, 360-degree view of your fleet’s daily operations, thereby reducing costs, increasing productivity & stay on top of vehicle maintenance with Intelligent Vehicle Tracking System.', '<p>Get more accurate historical data of working/running hours to let your business relied on better data. Increase customer billing accuracy and reduce irrelevant customer claims using real data ensuring accurate &amp; timely payroll. Get daily running reports along with vehicle wise reports of arrival and departure times.</p>', NULL, NULL, NULL, '1665403497.jpg', 'Product', NULL, NULL, NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 06:34:57', '2022-10-10 06:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `attr_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `attr_image`, `name`, `created_at`, `updated_at`) VALUES
(9, 1, '777774256.png', 'HRM', NULL, NULL),
(10, 2, '399496925.jpg', 'ECOM', NULL, NULL),
(12, 1, '647862855.jpg', 'HRM', NULL, NULL),
(13, 1, '557729146.jpg', 'HRM', NULL, NULL),
(14, 2, '510301072.jpg', 'Ecom', NULL, NULL),
(15, 2, '787394110.jpg', 'Ecom', NULL, NULL),
(16, 3, '492069196.jpg', 'apd', NULL, NULL),
(17, 3, '767586879.jpg', 'apd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BSNL', 1, NULL, '2022-10-16 22:59:28', '2022-10-16 22:59:28'),
(2, 'Project 1', 1, NULL, '2022-10-16 23:07:54', '2022-10-16 23:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imaage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noindex_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short_desc`, `long_desc`, `meta_tags`, `meta_desc`, `con_tag`, `imaage`, `image_alt`, `noindex_tag`, `tax1`, `tax2`, `tax3`, `tax4`, `tax5`, `createdby`, `updatedby`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test1', '<p>test2</p>', 'test9', 'test10', 'test11', '1664780721.jpg', 'test3', 'test12', 'test4', 'test5', 'test6', 'test7', 'test8', NULL, NULL, NULL, '2022-10-03 07:23:36', '2022-10-03 01:35:21', '2022-10-03 01:53:36'),
(4, 'test1', 'test2', '<p>test3</p>', 'test9', 'test10', 'test11', '1664781602.jpg', 'test3', 'test12', 'test4', 'test5', 'test6', 'test7', 'test8', NULL, NULL, NULL, '2022-10-03 07:23:42', '2022-10-03 01:50:02', '2022-10-03 01:53:42'),
(5, 'test1', 'test2', '<p>hhh</p>', 'test9', 'test10', 'test11', '1664781710.jpg', 'test3', 'test12', 'test4', 'test5', 'test6', 'test7', 'test8', NULL, NULL, NULL, '2022-10-03 07:23:48', '2022-10-03 01:51:50', '2022-10-03 01:53:48'),
(6, 'Business Analytics', 'Enhance creativity and unlock new possibilities with the Business Services of Inbox Infotech solutions. our Business analytics service support take a business-related decision by using data-analytics tools like Power BI, Tableau, Zoho. Our Business analytics capabilities to using data analytics to assess processes, determine requirements, and deliver data-driven recommendations and reports to executives and stakeholders to grow the business.', '<p><strong>Why Choose This Service</strong><br>Improves performance of the business.</p><p>Provides faster and more accurate decisions.</p><p>Make the right choice regarding consumer behavior, trends, and performance.</p><p>Inspires change and innovation by answering questions about the consumer<br>&nbsp;</p><p><strong>Is SQL required for business Analytics?</strong></p><p>A business Analytics doesn\'t need to get trained on database administration. All he can do is to learn some simple functions to work with SQL which will help them do better in your data driven projects.</p><p><br><strong>what are the best tool for business Analytics?</strong><br>Microsoft Visio,Zoho, PowerBI Google Docs,Microsoft Excel,Google Analytics and Tableau,SQL.</p><p>&nbsp;</p>', 'Business Analytics Services', 'Business Analytics Services in Vadodara', 'https://inboxtechs.com/Business-Analytics', '1665381403.png', 'Business Analytics', 'index follow', 'far fa-handshake', NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-03 01:52:27', '2022-10-11 00:31:47'),
(7, 'Internet Of Things', 'Internet of Things has become the common ground in all walks of life that essentially connect one to another. We are uniquely positioned to bring an improvement in business value, enhance efficiency and bring a reduction to maintenance cost and operations. We have partnered with leading innovators in addition to industry memberships to deliver world-class solutions for IoT requirements.', '<p><strong>Why Choose This Service</strong><br>Connect and scale with optimum efficiencyData and data managementEase to add innovative business applicationsSingle point of adaptation of data models and protocolsIntegrate and alter business processesAugmented Intelligence</p><p><strong>What are the common kinds of IoT services?</strong></p><p>Some of the common Iot services are monitoring health in real time, tracking mobile asset, vehicle management system, controlling and monitoring environment, controlling a smart home and many more.<br><strong>What are the best clouds for IoT?</strong></p><p>The best clouds for IoT are AWS IoT Platform, Kaa IoT platform, Microsoft Azure IoT Platform, Microsoft Azure IoT Suite and many mire.<br><strong>IoT solutions are invented by whom?</strong><br>Kevin Ashton had invented IoT and was used the first ever time in the year 1999 to explain a connection between internet and the physical world with the help of sensors.<br>&nbsp;</p>', 'IOT', NULL, NULL, '1665385437.jpg', 'IOT', NULL, 'far fa-lightbulb', NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-03 02:54:32', '2022-10-10 01:34:43'),
(8, 'Artificial Intelligence', 'Enhance creativity and unlock new possibilities with the artificial intelligence services of Inbox Infotech solutions. Our AI capabilities are embedded in the software to offer you automated and intelligent solutions. Our AI technologies support a diverse environment including machine learning, computer vision, forecasting and optimization, and natural language processing. Value our technologies are true to meet the changing business needs.', '<p><strong>Why Choose This Service</strong><br>Advanced AI algorithms</p><p>Data and data management</p><p>Digital Assistance</p><p>Computational systems</p><p>Reduce human error</p><p>24/7 Support<br>&nbsp;</p><p><strong>What are the common examples of AI technologies?</strong></p><p>The common examples of AI technologies are speech recognition, national language understanding, dialogue management/conversational AI.</p><p><br><strong>What are AI services?</strong></p><p>Artificial intelligence refers to basically third-party that offers artificial intelligence outsourcing. There are a multiple Cloud AI service providers that offer specialised hardware as needed for AI tasks including GPU based processing facilitating intensive workloads.</p><p><strong>What are the popular 3 kinds of AI?</strong></p><p>The popular kinds of AI are artificial narrow intelligence, artificial general intelligence and artificial super intelligence.</p>', NULL, NULL, NULL, '1665385868.jpg', 'AI', NULL, 'fab fa-500px', NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-10 01:41:08', '2022-10-10 01:43:23'),
(9, 'Cloud Services', 'Let a single provider seamlessly and securely connect to diverse cloud solutions. Our industry-leading partnerships let you grow your business, its efficiency, and productivity. The services are catered to helping build an agile IT ecosystem using hybrid multi-cloud environments, networks, and security that is required globally. The world-class solutions enable to expand across the globe and improve efficiency and productivity while delivering seamless customer experience.', '<p><strong>Why Choose This Service</strong></p><p><br>Improved data security</p><p>Higher scalability</p><p>Disaster recovery management</p><p>Greater mobility</p><p>Improved control over data</p><p>Cost reduction</p><p><br><strong>What are the common kinds of cloud services?</strong></p><p>The usage of cloud services is associated with common cloud offerings that include software as a service, infrastructure as a service, and software as a service.</p><p><br><strong>Is cloud safe to be used?</strong></p><p>Yes, cloud is extremely safe to be used as the data stays extremely safe inside the cloud. It is a lot safer as compared to a hard drive.</p><p><br><strong>Can my cloud data be seen to anybody?</strong><br>The data is visible to only people with whom you have shared the access to view it. Thus, the access needs to be given only to those who can be trusted.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665386621.jpg', 'Cloud Service', NULL, 'fab fa-cloudsmith', NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-10 01:53:41', '2022-10-10 01:55:35'),
(10, 'Cyber Security', 'High integrated cyber security solutions combined with advanced technology protects the enterprise by efficiently identifying and managing the vulnerabilities. This is done with an assessment, simulation and mitigation strategies. Discover advanced industry-leading security solutions with the help of Inbox Infotech solutions to help you stop threats and help you grow the business.', '<p><strong>Why Choose This Service</strong></p><p><br>Identify potential threats</p><p>Explore security flaws</p><p>Security monitoring is done 24*7</p><p>Data-driven approach</p><p>Investigate and manage breaches</p><p>Safeguard personal information</p><p><br><strong>What are the popular kinds of cyber security?</strong></p><p>Some of the common kinds of cyber threats are computer viruses, Trojan horses, and key-loggers.</p><p>&nbsp;</p><p><strong>How is cyber security service provided?</strong></p><p>The services are aimed at keeping software up to date, practice the password management skills, takes care of phishing scams, protects sensitive data, and many other services.</p><p>&nbsp;</p><p><strong>What are the common kinds of cyber attacks?</strong><br>A few of the common cyber attacks are phishing, password attack, SQL injection attack, eavesdropping attack, man-in-the-middle attack and many more.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665389389.jpg', 'Cyber Security', NULL, 'fas fa-user-secret', NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-10 02:39:49', '2022-10-10 03:09:45'),
(11, 'Machine Learning', 'Transform the business processes into intelligent autonomous with the help of the machine learning services of Inbox Infotech. Offering both supervised, semi-supervised and unsupervised machine learning on structured and unstructured data, the services are aims towards building, training, validating, the optimize, deploy and test machine learning models with the help of tools and technologies.', '<p><strong>Why Choose This Service</strong></p><p><br>Simplify product marketing</p><p>Facilitate easier detection of spam</p><p>Accurate sales forecasts</p><p>Simplify data entry documentation</p><p>Customer segmentation</p><p>Upgrade precision pertaining to financial rules</p><p><br><strong>How is machine learning different from deep learning ?</strong></p><p>Deep learning refers to a sub field of representation learning which a subfield of machine learning is. Deep learning, distinct to that of machine learning extracts features automatically from the raw data and becomes efficient.</p><p><br><strong>What is machine learning?</strong></p><p>Machine learning is the system’s ability to comprehend a task without explicitly being programmed from a given data.</p><p><br><strong>What are the four kinds of machine learning algorithms?</strong><br>The four distinct kinds of machine learning algorithms are supervised algorithms, non-supervised algorithms, semi-supervised algorithms and reinforcement learning algorithms</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665389964.jpg', 'Machine Learning', NULL, 'fas fa-diagnoses', NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 02:49:24', '2022-10-10 02:49:24'),
(12, 'Web Development', 'Promising to offer agile, innovative and competitive services for custom application and software development, Inbox Infotech seeks to be your one-stop solution for software development. Offering next-level business software development services, we aim to offer both backend and front software development services to cater to distinct software project needs and requirements. Contact us for any requirement, from start-ups to large scale organizations, we offer comprehensive business software development solutions to all.', '<p><strong>Why Choose This Service</strong><br>Easier navigation</p><p>Improve user engagement</p><p>Innovative web applications</p><p>Cross-platform capabilities</p><p>Improved SEO</p><p>Reach out to a larger audience<br>Graphics Development</p><p><br>We present innovative and creative graphic ideas to increase the footfall of the website with immaculate graphic designs. Our graphic designing solutions are crafted to cater to your needs. With the help of using varied media and platforms, we ensure to work our strategies that help a company understand the design issues and work on them accordingly. By developing core visual communication projects using diverse elements; our graphics development services build a long term professional relationship with the clients.</p><p>&nbsp;</p><p><strong>What does a web development company do?</strong><br>A web development company offers a number of services such as competition monitoring, HTML E-mail Template Design, Blog customization/management, Pay per click campaign management, Sales presentation development, usability testing, development website, write content and many other services likewise.</p><p>&nbsp;</p><p><strong>What should one look for while choosing a web development company?</strong></p><p>A few points need to be considered while choosing a web development company. Some of them are listening to your ideas, having your own ideas, having a marketing department, aware of the responsive design, having a portfolio of live websites and a few more.</p><p><br><strong>Who are responsible for developing my website?</strong></p><p>A number of individuals are involved in the development of your website, including web designers, web developers, web content writers, graphic designers who make use of their expertise and experience to put down to play.</p>', NULL, NULL, NULL, '1665391855.jpg', 'Web Development', NULL, 'fas fa-globe', NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 03:20:55', '2022-10-10 03:20:55'),
(13, 'Mobile Applications', 'Take your mobile application to the next level by exploring our customized mobile app solutions. With Inbox Infotech, experience the power of working with an extremely proficient and knowledgeable team of application developers. Offering integrated app development solutions for both Android and iOS platforms, we are where your dream meets reality.', '<p><strong>Why Choose This Service</strong><br>Increase wide-scale accessibility</p><p>Transform the usability experience</p><p>Improved connection with customers</p><p>Strengthen brand image</p><p>Offer improvised value to the customers</p><p>Nurture customer loyalty</p><p><br><strong>What is the usual process of mobile app development?</strong></p><p>The usual process of web Development Company is fairly a standardised one, and includes mobile app designing, development, deployment along with a few processes involved post its launch.</p><p><br><strong>On what platforms can you avail mobile application development from Inbox Infotech?</strong></p><p>Inbox Infotech offers mobile application development on Android and iOS platform.</p><p><br><strong>How many days does it take to design and develop a mobile app?</strong><br>It takes a period of 14-20 days to design and develop a mobile app. However the tenure deems to vary according to the complexity of the app.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665392304.jpg', 'App Development', NULL, 'fas fa-mobile-alt', NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 03:28:24', '2022-10-10 03:28:24'),
(14, 'Data Centre Solutions', 'Meet ever-changing demands of the dynamic Indian marketplace with our data center solutions. Offering award-winning state-of-the-art facilities, we offer a suite of collocation services which are aimed at offering cost-effective, secured and scalable data center solutions. We have been the pioneer of data center innovation and have been scaling faster than any other data center solution provider, serving more than a thousand customers on board.', '<p><strong>Why Choose This Service</strong></p><p><br>Adapt to distinct business situations</p><p>Client centric solutions</p><p>Takes care of legal compliances</p><p>Improved network reliability</p><p>Security management</p><p>Cost efficiency</p><p><br><strong>What are the essential kinds of DCIM software?</strong></p><p>There are two main categories of the DCIM software, namely monitoring automation software and planning/implementation software.</p><p><br><strong>There are two main categories of the DCIM software, namely monitoring automation software and planning/implementation software?</strong><br>There are two main categories of the DCIM software, namely monitoring automation software and planning/implementation software.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665392726.png', 'Data Centre Solutions', NULL, 'fab fa-microsoft', NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 03:35:26', '2022-10-10 03:35:26'),
(15, 'Infrastructure Management', 'With smart IT infrastructure solutions, the digital age can be easily conquered. Inbox InfoTech’s infrastructure management solutions offer a consolidated end-to-end view of the applications and infrastructure. Offering an integrated dashboard, we enable our clients to monitor the network infrastructure, applications, servers along with other components to optimize IT performance. The proven automation tools essentially standardize operations and eliminate all manual processes while improving accuracy and precision.', '<p><strong>Why Choose This Service</strong><br>Boost productivity</p><p>Using the best of technology</p><p>Improved centralized management</p><p>Low capital outlay</p><p>Reduced downtime</p><p>Expert analysis of Infrastructure</p><p><br>What are the primary components of an IT infrastructure?<br>Why is infrastructure management important?<br>What are the crucial domains of a typical IT infrastructure?<br>The crucial domains of an IT infrastructure is user domain, a LAN domain, WAN domain, remote access domain, Lan to WAN domain, application domain and many others.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665393086.jpg', 'Infrastructure Management', NULL, 'far fa-window-restore', NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 03:41:26', '2022-10-10 03:41:26'),
(16, 'UX / UI Design', 'We present innovative and creative graphic ideas to increase the footfall of the website with immaculate graphic designs. Our graphic designing solutions are crafted to cater to your needs. With the help of using varied media and platforms, we ensure to work our strategies that help a company understand the design issues and work on them accordingly. By developing core visual communication projects using diverse elements; our graphics development services build a long term professional relationship with the clients.', '<p><strong>Why Choose This Service</strong></p><p><br>Customer retention ability</p><p>Increased productivity</p><p>Reduced development time</p><p>Lower support costs</p><p>Customer acquisition</p><p>Improve user experience<br>&nbsp;</p><p><strong>What are the common services offered by graphic designers?</strong></p><p>Some of the common services offered by graphic designers are logo design, exhibition designs, trade show designs, t-shirt designs, newsletter design, stationery design and a few more.</p><p><br><strong>Can you help me with logo designing?</strong></p><p>Yes, we can help you with logo designing as we have a large team of professional graphic designers who ensure high-quality logo design services.</p><p><br><strong>How long does it take to design a website?</strong><br>It takes about 7-10 days to design a website completely. It, however, tends to vary as per the number of website pages.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665393451.jpg', 'UX / UI Design', NULL, 'fas fa-laptop-code', NULL, NULL, NULL, NULL, 'shyam', NULL, '1', NULL, '2022-10-10 03:47:31', '2022-10-10 03:47:31'),
(17, 'E-Commerce', 'Offering easy navigation and an engaging interface, Inbox Infotech offers e-commerce business solutions that facilitate an administrator with easy management facilities at Inbox Infotech. We are a certified eCommerce website development company where we aim to take care of all criteria for the development services of the online store. Offering eCommerce hosting solutions, we develop a customized and secured online eCommerce store. Entrust our services for an agile-driven eCommerce website solution.', '<p><strong>Why Choose This Service</strong></p><p><br>Streamline production and service delivery</p><p>Simplify sales and marketing</p><p>Save time and costs</p><p>Pleasant customer experience</p><p>Stay competitive</p><p>Lowered costs</p><p><br><strong>What kind of customer services is offered?</strong></p><p>The ecommerce consultants answer all queries related to your ecommerce website.</p><p><br><strong>Can the e-Commerce website be used with my own domain name?</strong></p><p>The e-Commerce website can be used with your own domain name and you can simply point the domain directly to the new Network Solutions Ecommerce. There is no need to use a sub domain or any temporary one.</p><p><br><strong>How will shoppers be able to find my ecommerce store?</strong><br>With the help of SEO experts and strategies, potential shoppers are able to find you store.</p><p>&nbsp;</p>', NULL, NULL, NULL, '1665393770.jpg', 'E-Commerce', NULL, 'fas fa-shopping-cart', NULL, NULL, NULL, NULL, 'shyam', 'shyam', '1', NULL, '2022-10-10 03:52:50', '2022-10-10 03:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `attr_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `attr_image`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, '589076161.jpg', 'test13', NULL, NULL),
(2, 4, '706787511.jpg', 'test13', NULL, NULL),
(3, 5, '996928903.jpg', 'test13', NULL, NULL),
(4, 6, '613200133.png', 'BI', NULL, NULL),
(7, 7, '432029213.jpg', 'IOT', NULL, NULL),
(9, 6, '728720667.png', 'BI', NULL, NULL),
(10, 7, '489892140.jpg', 'IOT', NULL, NULL),
(11, 7, '443605783.jpg', 'IOT', NULL, NULL),
(12, 8, '201596593.png', 'AI', NULL, NULL),
(13, 8, '422958598.jpg', 'AI', NULL, NULL),
(14, 9, '523700860.jpg', 'Cloud Service', NULL, NULL),
(15, 9, '853299739.jpg', 'Cloud Service', NULL, NULL),
(16, 9, '499234652.png', 'Cloud Service', NULL, NULL),
(17, 10, '433544235.jpg', 'Cyber Security', NULL, NULL),
(18, 10, '990362617.jpg', 'Cyber Security', NULL, NULL),
(19, 10, '174347967.png', 'Cyber Security', NULL, NULL),
(20, 11, '313593599.jpg', 'Machine Learning', NULL, NULL),
(21, 11, '409283337.jpg', 'Machine Learning', NULL, NULL),
(22, 12, '837862787.jpg', 'Web Development', NULL, NULL),
(23, 12, '579934091.jpg', 'Web Development', NULL, NULL),
(24, 12, '895346328.png', 'Web Development', NULL, NULL),
(25, 13, '962050655.jpg', 'App Development', NULL, NULL),
(26, 13, '459498884.jpg', 'App Development', NULL, NULL),
(27, 13, '266047050.jpg', 'App Development', NULL, NULL),
(28, 14, '807943264.jpg', 'Data Centre Solutions', NULL, NULL),
(29, 14, '800973978.jpg', 'Data Centre Solutions', NULL, NULL),
(30, 15, '560507483.jpg', 'Infrastructure Management', NULL, NULL),
(31, 15, '777108693.jpg', 'Infrastructure Management', NULL, NULL),
(32, 16, '228683403.jpg', 'UX / UI Design', NULL, NULL),
(33, 16, '981124051.jpg', 'UX / UI Design', NULL, NULL),
(34, 17, '416435276.jpg', 'E-Commerce', NULL, NULL),
(35, 17, '966147933.jpg', 'E-Commerce', NULL, NULL),
(36, 17, '548291374.jpg', 'E-Commerce', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UEw4O4JQaVfp5B5yTrFBIZuWWKIrrTORDUUjl62Z', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUnM0NzBvVUhyUG44aDZCdDNLZ2ZwNjRTZTltNFZmVjB4elludzhxOCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vc3VwcG9ydHRpY2tldHMvdXBkYXRlLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGt1cEFZQjlsVkFKMlpqai9MVjc3VWVxRy9NTmFZdDdpMFlKVXptR3pBdC5NRXVCZjFZRXRHIjt9', 1666176596);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_txt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `btn_txt`, `btn_link`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1665049114.jpg', 'Expert Consultants', 'Over 6 years of experience in helping clients finding comprehensive solutions.', 1, '2022-10-04 01:32:08', '2022-10-06 04:08:34', NULL),
(2, '1665048219.jpg', 'Growth Partners', 'Connect with top consultants hand-picked by Inbox Infotech, consulting and finance.', 1, '2022-10-04 01:49:39', '2022-10-06 03:53:39', NULL),
(3, '1665047470.jpg', 'Helping Leaders', 'We look forward to help you in taking your company to new height.', 1, '2022-10-04 01:50:29', '2022-10-06 03:41:11', NULL),
(5, '1664868170.jpg', 'test', 'test', 1, '2022-10-04 01:52:50', '2022-10-04 01:53:01', '2022-10-04 01:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub__category__tickets`
--

CREATE TABLE `sub__category__tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub__category__tickets`
--

INSERT INTO `sub__category__tickets` (`id`, `name`, `category_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OS Issue', 1, 1, NULL, '2022-10-14 05:45:55', '2022-10-14 06:10:23'),
(2, 'Printer', 2, 1, NULL, '2022-10-14 06:12:06', '2022-10-14 06:12:06'),
(3, 'Mouse', 2, 1, NULL, '2022-10-14 06:18:25', '2022-10-14 06:18:58'),
(4, 'Keyboard', 2, 1, NULL, '2022-10-14 06:19:12', '2022-10-14 06:19:12'),
(5, 'Monitor Issue', 2, 1, NULL, '2022-10-14 06:19:57', '2022-10-14 06:19:57'),
(6, 'Others', 1, 1, NULL, '2022-10-14 06:20:14', '2022-10-14 06:20:14'),
(7, 'Others', 2, 1, NULL, '2022-10-14 06:20:31', '2022-10-14 06:20:31'),
(8, 'New Printer setup', 3, 1, NULL, '2022-10-14 06:20:58', '2022-10-14 06:20:58'),
(9, 'New PC Setup', 3, 1, NULL, '2022-10-14 06:21:16', '2022-10-14 06:21:16'),
(10, 'Others', 3, 1, NULL, '2022-10-14 06:21:28', '2022-10-14 06:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `supporttickets`
--

CREATE TABLE `supporttickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finalstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approxclosetime` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternetcontactno` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `replystatus` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supporttickets`
--

INSERT INTO `supporttickets` (`id`, `cust_id`, `category_id`, `user_id`, `project_id`, `subject`, `priority`, `message`, `status`, `finalstatus`, `approxclosetime`, `image`, `alternetcontactno`, `replystatus`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'Test1', '1', 'Test3', '1', '0', '2022-10-17 15:15:36', 'tedt.jpg', '8866560456', 1, '2022-10-19 05:40:33', '2022-10-18 04:58:05', NULL),
(2, 2, 4, 1, 2, 'Mouse not working', '2', 'Hello Team, \r\n\r\nMy kwyboard is not working from last 1 day kindly check and do needful.', '1', '0', '2022-10-19 04:57:05', '1666155425.jpg', '9033569861', 0, '2022-10-19 05:40:38', '2022-10-18 23:27:05', '2022-10-18 23:27:05'),
(3, 1, 5, 1, 1, 'Monitor not working', '3', 'My monitor is not working.', '3', '0', '2022-10-22 05:22:18', '1666156938.png', '9033569861', 0, '2022-10-19 05:40:43', '2022-10-18 23:52:18', '2022-10-18 23:52:18'),
(4, 1, 9, 1, 1, 'Required System Update', '4', 'I want to setup my system', '1', '0', '2022-10-22 05:39:29', NULL, '9033569861', 0, '2022-10-19 05:40:46', '2022-10-19 00:09:29', '2022-10-19 00:09:29'),
(5, 2, 2, 1, 2, 'Required System Update', '1', 'Testing', '1', '0', '2022-10-20 08:26:00', NULL, '9033569861', 0, '2022-10-19 06:18:30', '2022-10-19 08:48:30', '2022-10-19 08:48:30'),
(6, 2, 2, 1, 2, 'Required System Update', '1', 'Testing', '1', '0', '2022-10-20 17:26:00', NULL, '9033569861', 0, '2022-10-19 06:20:14', '2022-10-19 08:50:14', '2022-10-19 08:50:14'),
(7, 1, 5, 1, 1, 'Mouse not working', '4', 'Not working', '1', '0', '2022-10-20 16:11:00', '1666161520.jpg', '9033569861', 0, '2022-10-19 06:38:42', '2022-10-19 09:08:42', '2022-10-19 09:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `title`, `details`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Filippo Fuggitti', 'Bloomberg LP', '<p>A very big congratulations to the team at Inbox Infotech for doing such a great job. The professionals have put together a wonderful website that has been integrated with the right graphics and web designing solutions. My website is extremely user friendly and the visitors love it.</p>', '1665125359.jpg', '1', NULL, '2022-10-07 00:23:09', '2022-10-07 01:19:19'),
(2, 'Ashwini Kumar', 'Indian Army', '<p>A very big congratulations to the team at Inbox Infotech for doing such a great job. The professionals have put together a wonderful website that has been integrated with the right graphics and web designing solutions. My website is extremely user friendly and the visitors love it.</p>', '1665122320.png', '1', NULL, '2022-10-07 00:28:40', '2022-10-07 00:28:40'),
(3, 'Meir Razzon', 'Hostel Pass', '<p>I am really impressed with the quality of services that have been received from Inbox Infotech. The services were right on schedule with professional reasonable prices and courteous in dealings. The services were delivered right on time. I have received an e-commerce website for the products I offer. My revenue has increased since my new website and I will definitely use the services again.</p>', '1665122454.png', '1', NULL, '2022-10-07 00:30:54', '2022-10-07 00:30:54'),
(4, 'shyam', 'test', '<p>test</p>', '1665125420.jpg', '1', '2022-10-07 06:50:56', '2022-10-07 01:20:20', '2022-10-07 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `ticketassignments`
--

CREATE TABLE `ticketassignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `toassignuser_id` int(11) NOT NULL,
  `myassignuser_id` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticketreplys`
--

CREATE TABLE `ticketreplys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentby` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_type` int(11) NOT NULL DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `status`, `created_at`, `updated_at`, `users_type`, `deleted_at`) VALUES
(1, 'shyam', 'shyamkumar390007@gmail.com', NULL, '$2y$10$kupAYB9lVAJ2Zjj/LV77UeqG/MNaYt7i0YJUzmGzAt.MEuBf1YEtG', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-23 07:18:16', '2022-10-13 01:13:07', 1, NULL),
(2, 'inbox', 'shyamkumar@inboxtechs.in', NULL, '$2y$10$QjUKp4vHJvKRQn9YIYSsLuI6d41Zt6Qqx7aUOW3BIXWcZR9WKdHiu', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-25 22:19:09', '2022-09-25 22:19:09', 2, NULL),
(4, 'Kishan', 'kisan@inbox.com', NULL, '$2y$10$55chp5v/FZm1R7qOJzY3YOBOc/1uorPoqHSiuxkzWNX60l5hGIcu2', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-09-28 02:42:01', '2022-10-13 01:13:19', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `applicant_exps`
--
ALTER TABLE `applicant_exps`
  ADD PRIMARY KEY (`aeid`);

--
-- Indexes for table `applicant_qualifications`
--
ALTER TABLE `applicant_qualifications`
  ADD PRIMARY KEY (`aqid`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrers`
--
ALTER TABLE `carrers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category__tickets`
--
ALTER TABLE `category__tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientlogos`
--
ALTER TABLE `clientlogos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`job_application_id`);

--
-- Indexes for table `leaderships`
--
ALTER TABLE `leaderships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub__category__tickets`
--
ALTER TABLE `sub__category__tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supporttickets`
--
ALTER TABLE `supporttickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketassignments`
--
ALTER TABLE `ticketassignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketreplys`
--
ALTER TABLE `ticketreplys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_exps`
--
ALTER TABLE `applicant_exps`
  MODIFY `aeid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applicant_qualifications`
--
ALTER TABLE `applicant_qualifications`
  MODIFY `aqid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carrers`
--
ALTER TABLE `carrers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category__tickets`
--
ALTER TABLE `category__tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clientlogos`
--
ALTER TABLE `clientlogos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobapplications`
--
ALTER TABLE `jobapplications`
  MODIFY `job_application_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `leaderships`
--
ALTER TABLE `leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub__category__tickets`
--
ALTER TABLE `sub__category__tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supporttickets`
--
ALTER TABLE `supporttickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticketassignments`
--
ALTER TABLE `ticketassignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticketreplys`
--
ALTER TABLE `ticketreplys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
