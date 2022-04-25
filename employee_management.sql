-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2022 at 07:52 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `date`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2022-03-23', '09:00:00', '18:00:00', '2022-03-23 10:43:14', '2022-03-23 10:43:14', NULL),
(2, 1, '2022-03-24', '09:00:00', '18:00:00', '2022-03-24 10:43:14', '2022-03-24 10:43:14', NULL),
(3, 1, '2022-03-25', '09:00:00', '18:00:00', '2022-03-25 10:43:14', '2022-03-25 10:43:14', NULL),
(4, 1, '2022-03-27', '09:00:00', '18:00:00', '2022-03-27 10:43:14', '2022-03-27 10:43:14', NULL),
(5, 1, '2022-03-28', '09:00:00', '18:00:00', '2022-03-28 10:43:14', '2022-03-28 10:43:14', NULL),
(6, 1, '2022-03-29', '16:43:14', '18:00:00', '2022-03-29 10:43:14', '2022-03-29 10:43:14', NULL),
(7, 1, '2022-03-22', '09:00:00', '18:00:00', '2022-03-22 10:43:14', '2022-03-22 10:43:14', NULL),
(8, 2, '2022-03-29', '16:52:02', '18:00:00', '2022-03-29 10:52:02', '2022-03-29 10:52:02', NULL),
(9, 1, '2022-03-30', '10:31:42', '18:00:00', '2022-03-30 04:31:42', '2022-03-30 04:31:42', NULL),
(10, 1, '2022-03-31', '12:37:20', '18:00:00', '2022-03-31 06:37:20', '2022-03-31 06:37:20', NULL),
(11, 1, '2022-04-05', '14:05:16', '18:00:00', '2022-04-05 08:05:16', '2022-04-05 08:05:16', NULL),
(12, 1, '2022-04-06', '10:34:36', '18:00:00', '2022-04-06 04:34:36', '2022-04-06 04:34:36', NULL),
(13, 1, '2022-04-19', '14:35:13', '18:00:00', '2022-04-19 08:35:13', '2022-04-19 08:35:13', NULL),
(14, 1, '2022-04-20', '10:39:08', '18:00:00', '2022-04-20 04:39:08', '2022-04-20 04:39:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill_types`
--

CREATE TABLE `bill_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_types`
--

INSERT INTO `bill_types` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hand Cash', '1', NULL, NULL, NULL),
(2, 'Bank', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AB+', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(2, 'AB-', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(3, 'A+', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(4, 'A-', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(5, 'B+', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(6, 'B-', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(7, 'O+', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(8, 'O-', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyance_bills`
--

CREATE TABLE `conveyance_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bill_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `is_approved` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 for approved O for not approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conveyance_bills`
--

INSERT INTO `conveyance_bills` (`id`, `employee_id`, `bill_type_id`, `created_by`, `updated_by`, `description`, `amount`, `date`, `is_approved`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 1, 1, 1, NULL, 'Feast Bill', 5000, '2022-04-21', 1, '2022-04-21 08:26:08', '2022-04-21 08:26:08', NULL),
(9, 1, 2, 1, NULL, 'Vacation Bill', 3000, '2022-04-21', 0, '2022-04-21 08:26:56', '2022-04-21 08:26:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_department_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT '0 or null for no parent',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `employee_id`, `parent_department_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Support', 6, NULL, '1', '2021-08-16 00:32:07', '2021-08-16 06:12:00', NULL),
(2, 'Development', 6, NULL, '1', '2021-08-16 00:32:07', '2021-11-02 08:01:06', NULL),
(3, 'Network', 1, 1, '1', '2021-08-16 00:32:07', '2021-08-16 06:09:10', NULL),
(4, 'support', NULL, NULL, '1', '2021-10-31 05:38:30', '2021-10-31 05:38:30', NULL),
(5, 'SEOS', 1, 2, '1', '2021-11-02 09:25:27', '2021-11-02 09:26:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Technical Officer', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(2, 'Graphic Design', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(3, 'Software Engineer', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(4, 'Network Engineer', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(5, 'SEO Expert', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custom_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `emergency_contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact_relation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `join_date` date NOT NULL,
  `quit_date` date DEFAULT NULL,
  `is_current_employee` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 for current employee 0 for not current employee',
  `is_provision_period` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 for provision period 0 for not provision period',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa',
  `fb_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `li_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tt_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `custom_id`, `blood_group_id`, `department_id`, `designation_id`, `created_by`, `updated_by`, `name`, `personal_email`, `office_email`, `phone`, `office_phone`, `gender`, `present_address`, `permanent_address`, `profile_image`, `dob`, `emergency_contact_person`, `emergency_contact_phone`, `emergency_contact_address`, `emergency_contact_relation`, `nid_number`, `nid_image`, `certificate_image`, `salary`, `join_date`, `quit_date`, `is_current_employee`, `is_provision_period`, `created_at`, `updated_at`, `deleted_at`, `password`, `fb_url`, `li_url`, `tt_url`) VALUES
(1, 'NC-0001', 3, 2, 2, 1, 1, 'All Helal', 'helalnc@mail.com', 'helalnc@mail.com', '01768887770', '01768887770', 'Male', 'Mirpur 2, Dhaka', 'Mirpur 2, Dhaka', 'storage/img/profile_image/1629109087.jpg', '1990-01-01', 'Helal', '01768887770', 'Suite No. B-7 (7th Floor) , 2/2, Pallabi Main Road, Mirpur - 11.5, Dhaka Dhaka, 1216', 'Self', '9683625550', 'storage/img/nid_image/1629096033.png', 'storage/img/certificate_image/1629096033.jpg', 5000, '2022-04-03', NULL, 1, 0, '2021-08-16 00:40:33', '2022-04-24 10:50:37', NULL, '$2y$10$b7kZCm/CeRGP.WcPhlpURuBqDbo7YZZ3TuCTuozWhvyTCcHBWNVpe', 'https://www.facebook.com/al.helal.73700136', NULL, NULL),
(2, 'NC-0002', 3, 1, 1, 1, 1, 'Mehedi Hassan', 'mehedinc@mail.com', 'mehedinc@mail.com', '01617078669', '01617078669', 'Male', 'Mirpur, Dhaka', 'Mirpur, Dhaka', 'storage/img/profile_image/1629109069.jpg', '1992-01-01', 'All Helal', '01768887770', 'Mirpur 2, Dhaka', 'Colleague', '5526984560', '/employee/nid_image/1649147505BczWbdj9.png', '/employee/certificate_image/1649147480mlb5bJFP.jpg', 5000, '2018-01-01', NULL, 1, 0, '2021-08-16 00:48:47', '2022-04-05 08:31:45', NULL, '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL),
(3, 'NC-0003', 7, 1, 3, 1, 1, 'Nafiul Islam', 'nafiulsoft@gmail.com', 'nafiulislam.nc121@gmail.com', '01737138282', '01737138282', 'Male', 'Khilkhet, Dhaka', 'Khilkhet, Dhaka', 'storage/img/profile_image/1629109054.jpg', '1989-01-01', 'All Helal', '01768887770', 'Mirpur-2, Dhaka', 'Colleague', '9875494525', 'storage/img/nid_image/1629097184.png', 'storage/img/certificate_image/1629097184.jpg', 5000, '2019-01-01', NULL, 1, 0, '2021-08-16 00:59:44', '2021-08-16 04:17:34', NULL, '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL),
(4, 'NC-0004', 7, 1, 3, 1, 1, 'Sebgatullah Arnob', 'sebgatullah.cuet.cse14@gmail.com', 'sebgatullaharnob@gmail.com', '01521212602', '01521212602', 'Male', 'Shekhertek, Mohammadpur, Dhaka', 'Courtpara, Eidgapara, Kushtia', 'storage/img/profile_image/1629109032.jpg', '1995-09-28', 'All Helal', '01768887770', 'Mirpur-2, Dhaka', 'Colleague', '4564564569', 'storage/img/nid_image/1629097705.png', 'storage/img/certificate_image/1629097705.jpg', 5000, '2020-11-01', NULL, 1, 0, '2021-08-16 01:08:25', '2021-08-16 04:17:12', NULL, '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL),
(5, 'NC-0005', 3, 1, 3, 1, NULL, 'Rabbial Anower', 'rabbialnc@gmail.com', 'rabbialnc@gmail.com', '01723659050', '01723659050', 'Male', 'Mirpur 12, Dhaka', 'Mirpur 12, Dhaka', 'storage/img/profile_image/1629099766.png', '1989-11-05', 'All Helal', '01768887770', 'Mirpur-2, Dhaka', 'Colleague', '6895989306', 'storage/img/nid_image/1629099766.png', 'storage/img/certificate_image/1629099766.jpg', 5000, '2020-11-01', NULL, 1, 0, '2021-08-16 01:42:46', '2021-08-16 01:42:46', NULL, '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL),
(6, 'NC-0006', 3, 1, 3, 1, 1, 'Sayef Sharkar', 'sayefnc@gmail.com', 'sayefnc@gmail.com', '01968732021', '01968732021', 'Male', 'Khilkhat, Dhaka', 'Khilkhat, Dhaka', 'storage/img/profile_image/1629109176.jpg', '1994-01-01', 'All Helal', '01768887770', 'Mirpur-2, Dhaka', 'Colleague', '2583691596', 'storage/img/nid_image/1629100174.png', 'storage/img/certificate_image/1629100174.jpg', 5000, '2020-01-01', NULL, 1, 0, '2021-08-16 01:49:34', '2021-08-16 04:19:36', NULL, '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL),
(7, 'NC-0007', 4, 4, 2, 1, 1, 'Craig Forbes', 'pekodiwe@mailinator.com', 'dawynogi@mailinator.com', '+1 (215) 226-3956', '+1 (661) 411-8715', 'Female', 'Ut nisi maiores cons', 'Itaque eveniet dolo', 'storage/img/profile_image/1635840211.png', '1993-05-20', 'Explicabo Ea quasi', '+1 (901) 395-5178', 'Eum deserunt magni m', 'Ipsum vel eum dolore', '30545678', 'storage/img/nid_image/1635839966.png', 'storage/img/certificate_image/1635839966.jpg', 73, '2021-11-01', NULL, 1, 1, '2021-11-02 07:59:26', '2021-11-02 08:03:49', NULL, '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL),
(8, 'NC-0008', 4, 4, 1, 1, NULL, 'Ira Hunter', 'fabetiri@mailinator.com', 'memucyni@mailinator.com', '+1 (877) 724-7598', '+1 (155) 523-5675', 'Male', 'Obcaecati consequat', 'Accusamus ratione do', 'storage/img/profile_image/1635840158.png', '2002-11-13', 'Maxwell Montoya', '+1 (511) 829-9958', 'Qui blanditiis atque', 'Enim deleniti quia n', '653454612', 'storage/img/nid_image/1635840158.jpg', 'storage/img/certificate_image/1635840158.jpg', 99, '2021-11-01', NULL, 1, 1, '2021-11-02 08:02:38', '2021-11-02 08:02:55', '2021-11-02 08:02:55', '$2a$12$0m3Gug/7ssrKRFwTjipiTOQ0dcB9JeABj.JEqYD9BqE8BIUOooIMa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `title`, `description`, `start`, `end`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'teat', 'teat', '2021-11-17', NULL, 'Holiday', '2021-10-31 05:31:52', '2021-11-02 09:36:27', NULL),
(2, 'Nation Victory Day', 'Nation Victory Day', '2021-12-16', NULL, 'Holiday', '2021-11-02 09:35:27', '2021-11-02 09:35:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `recommend_employee_id` bigint(20) UNSIGNED NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `submission_type` enum('Pre','Post') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'enum [pre,post]',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `duration` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Pending,Approved,Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_id`, `leave_type_id`, `created_by`, `updated_by`, `recommend_employee_id`, `reason`, `submission_type`, `start_date`, `end_date`, `start_time`, `end_time`, `duration`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 2, 1, 1, 6, 'Test', 'Pre', '2021-08-16', '2021-08-16', '09:00:00', '18:00:00', 540, 'Approved', '2021-08-16 06:14:35', '2021-08-16 06:16:12', NULL),
(3, 2, 2, 1, 1, 1, 'Personal', 'Pre', '2021-11-04', '2021-11-08', '09:00:00', '18:00:00', 2700, 'Approved', '2021-11-02 05:47:51', '2021-11-02 05:48:07', NULL),
(4, 3, 3, 1, 1, 2, 'Personal', 'Pre', '2021-11-04', '2021-11-05', '09:00:00', '18:00:00', 1080, 'Approved', '2021-11-02 05:49:44', '2021-11-02 05:49:58', NULL),
(9, 1, 1, NULL, NULL, 2, 'Health Issue', 'Pre', '2022-03-29', '2022-03-29', NULL, NULL, 9, 'Pending', '2022-03-28 23:38:19', '2022-03-28 23:38:19', NULL),
(10, 1, 2, NULL, NULL, 2, 'qwerty', 'Post', '2022-02-28', '2022-03-05', NULL, NULL, 54, 'Pending', '2022-03-28 23:43:24', '2022-03-28 23:43:24', NULL),
(11, 1, 3, NULL, NULL, 2, 'Ramadan', 'Pre', '2022-03-31', '2022-04-03', NULL, NULL, 36, 'Pending', '2022-03-30 04:55:04', '2022-03-30 04:55:04', NULL),
(12, 2, 2, NULL, NULL, 1, '<p>Very <strong>Sick</strong>! Trying to get some <i>rest</i></p>', 'Pre', '2022-04-05', '2022-04-05', NULL, NULL, 9, 'Pending', '2022-04-05 09:20:35', '2022-04-05 09:20:35', NULL),
(13, 1, 1, NULL, NULL, 2, '<p>I have been doing <i>home office</i></p>', 'Post', '2022-04-04', '2022-04-04', NULL, NULL, 9, 'Rejected', '2022-04-06 05:46:58', '2022-04-06 05:46:58', NULL),
(14, 1, 1, NULL, NULL, 2, 'Eid  shopping', 'Pre', '2022-04-28', '2022-04-28', NULL, NULL, 9, 'Pending', '2022-04-20 04:43:12', '2022-04-20 10:03:35', '2022-04-20 10:03:35'),
(15, 1, 1, NULL, NULL, 2, 'going home', 'Pre', '2022-04-28', '2022-04-28', NULL, NULL, 9, 'Pending', '2022-04-20 10:06:09', '2022-04-20 10:13:35', '2022-04-20 10:13:35'),
(16, 1, 1, NULL, NULL, 3, 'going home', 'Pre', '2022-04-20', '2022-04-20', NULL, NULL, 9, 'Approved', '2022-04-20 10:14:10', '2022-04-21 05:36:39', '2022-04-21 05:36:39'),
(17, 1, 1, NULL, NULL, 2, 'emni', 'Pre', '2022-04-20', '2022-04-20', NULL, NULL, 9, 'Pending', '2022-04-20 10:28:38', '2022-04-20 10:29:21', '2022-04-20 10:29:21'),
(18, 1, 2, NULL, NULL, 2, 'Sickness. Bed rest', 'Pre', '2022-04-21', '2022-04-21', NULL, NULL, 9, 'Approved', '2022-04-21 05:38:16', '2022-04-21 05:38:16', NULL),
(19, 1, 1, NULL, NULL, 1, 'qwerty', 'Post', '2022-04-21', '2022-04-21', NULL, NULL, 9, 'Pending', '2022-04-21 05:39:48', '2022-04-21 05:39:54', '2022-04-21 05:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `leave_durations`
--

CREATE TABLE `leave_durations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `duration` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Casual', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(2, 'Sick', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(3, 'Earned', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL),
(4, 'Unpaid', '1', '2021-08-16 00:32:07', '2021-08-16 00:32:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `employee_id`, `created_by`, `updated_by`, `reason`, `amount`, `issue_date`, `return_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, 'Medical', 2000, '2021-11-03', '2021-11-04', 'accepted', '2021-11-02 09:26:55', '2021-11-02 09:27:27', NULL),
(7, 1, NULL, NULL, 'business purpose', 50000, '2022-03-28', NULL, 'rejected', '2022-03-28 02:42:53', '2022-03-28 02:42:53', NULL),
(8, 1, NULL, NULL, 'Vacation purpose', 5000, '2022-03-28', NULL, 'pending', '2022-03-28 02:43:48', '2022-03-28 02:43:48', NULL),
(9, 1, NULL, NULL, 'no reason', 7000, '2022-03-28', NULL, 'pending', '2022-03-28 02:58:04', '2022-03-28 02:58:04', NULL),
(10, 1, NULL, NULL, 'Ramadan', 40000, '2022-03-30', NULL, 'pending', '2022-03-30 04:56:54', '2022-03-30 04:56:54', NULL),
(11, 1, NULL, NULL, 'qwerty', 6789, '2022-04-12', NULL, 'pending', '2022-04-12 10:38:26', '2022-04-12 10:38:26', NULL),
(12, 1, NULL, NULL, 'eid bonus', 7000, '2022-04-21', NULL, 'rejected', '2022-04-21 04:42:59', '2022-04-21 04:43:06', NULL),
(13, 1, NULL, NULL, 'Medical Purpose', 5000, '2022-04-21', NULL, 'accepted', '2022-04-21 04:44:14', '2022-04-21 04:44:14', NULL),
(14, 1, NULL, NULL, 'new business', 90000, '2022-04-21', NULL, 'pending', '2022-04-21 04:54:39', '2022-04-21 04:54:44', '2022-04-21 04:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `manage_department`
--

CREATE TABLE `manage_department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `parent_department_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT '0 or null for no parent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_24_070037_create_employees_table', 1),
(5, '2021_06_24_070300_create_leaves_table', 1),
(6, '2021_06_24_070424_create_holidays_table', 1),
(7, '2021_06_24_070506_create_reports_table', 1),
(8, '2021_06_24_070523_create_tasks_table', 1),
(9, '2021_06_24_070618_create_attendances_table', 1),
(10, '2021_06_24_070643_create_notices_table', 1),
(11, '2021_06_24_074208_create_departments_table', 1),
(12, '2021_06_24_074259_create_designations_table', 1),
(13, '2021_06_24_074330_create_leave_types_table', 1),
(14, '2021_06_24_074425_create_bill_types_table', 1),
(15, '2021_06_24_074444_create_blood_groups_table', 1),
(16, '2021_06_24_075210_create_conveyance_bills_table', 1),
(17, '2021_06_24_075325_create_loans_table', 1),
(18, '2021_06_24_075707_create_manage_department_table', 1),
(19, '2021_06_24_095723_create_settings_table', 1),
(20, '2021_07_11_065542_create_leave_durations_table', 1),
(21, '2022_03_23_091846_add_password_to_employees_table', 2),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(23, '2022_04_06_140331_add_social_corner_to_employees_table', 4),
(24, '2022_04_10_120307_create_notifications_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `created_by`, `updated_by`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Dear employees of NetCoden, during the month of Ramadan our office will be function from 9:30 AM to 4:30 PM. <br> Above is for information and necessary action of all concerned.<br><br>NetCoden Authority.', '2022-04-11 06:43:32', NULL, NULL),
(2, NULL, NULL, 'The office will remain closed on the occasion of Independence and National Day on 26 March, 2022 (Saturday) <br><br>\r\nNetCoden Authority', '2022-03-09 08:02:18', NULL, NULL),
(3, NULL, 1, 'Greetings from NetCoden! We are going to have a party after office today. Stay along...<br><br>NetCoden Authority', '2022-04-08 04:07:48', '2022-04-18 07:51:09', NULL),
(4, NULL, NULL, 'Mr. Sayef has been selected as the head of department of development.<br><br>NetCoden Authority', '2022-04-10 05:35:10', NULL, NULL),
(5, NULL, NULL, 'Hello employees! This is a test notice send by Sazzad Saju', '2022-03-02 05:36:47', NULL, NULL),
(6, NULL, 1, 'Hard-Workers will be Rewarded with Higher Pay-scale. <br>NetCoden Authority', '2022-04-13 04:15:17', '2022-04-18 01:56:15', NULL),
(8, 1, NULL, 'Eid Mubarak to you all', '2022-04-18 08:15:06', '2022-04-18 02:15:06', '2022-04-18 09:24:28'),
(9, 1, 1, '<p><strong>Brilliant programmers</strong> &nbsp;will be rewarded with higher <strong>pay-scale</strong> and honor. Keep up with good work</p><p>~ <i>NetCoden Authority</i></p><i>18, april, 2022</i>', '2022-04-18 08:21:54', '2022-04-18 08:23:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('00ae24c8-4aa5-4b32-b3bc-fc8ce1ca9a7f', 'App\\Notifications\\LatestNotice', 'App\\Models\\Employee', 1, '{\"data\":\"Dear employees of NetCoden, during the month of Ramadan our office will be function from 9:30 AM to 4:30 PM. <br> Above is for information and necessary action of all concerned.<br><br>NetCoden Authority.\"}', '2022-04-19 08:33:21', '2022-04-11 06:43:32', '2022-04-19 08:33:21'),
('13dbfe98-f69c-4934-9279-6964c2db13b6', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 1, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', '2022-04-13 10:17:18', '2022-04-13 04:15:17', '2022-04-13 10:17:18'),
('15a5420d-4b02-41a4-b201-0cc29693c3e6', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 6, '{\"data\":\"adfadf\"}', NULL, '2022-04-18 02:06:59', '2022-04-18 02:06:59'),
('2a6529e7-b2d7-4270-841b-7790d51ab082', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 2, '{\"data\":\"Eid Mubarak to you all\"}', NULL, '2022-04-18 02:15:06', '2022-04-18 02:15:06'),
('32ec3e84-0cfe-40cb-aa7c-644462685f30', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 5, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', NULL, '2022-04-18 02:21:54', '2022-04-18 02:21:54'),
('3aefa3d1-8e09-47d8-8689-a547c6c34666', 'App\\Notifications\\LatestNotice', 'AppModelsEmployee', 2, '{\"data\":\"Dear employees of NetCoden, during the month of Ramadan our office will be function from 9:30 AM to 4:30 PM. <br> Above is for information and necessary action of all concerned.<br><br>NetCoden Authority.\"}', NULL, '2022-04-10 04:07:48', '2022-04-10 04:07:48'),
('3b49273a-406e-46d1-816d-18cd444c910d', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 6, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', NULL, '2022-04-13 04:15:17', '2022-04-13 04:15:17'),
('427d7788-c5b5-44e7-b179-c8517f1c9515', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 3, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', NULL, '2022-04-13 04:15:17', '2022-04-13 04:15:17'),
('4509c0d8-6036-4160-b95d-7eefb6a745e8', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 5, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', NULL, '2022-04-13 04:15:17', '2022-04-13 04:15:17'),
('48ca0a06-a3f1-4ffe-b687-c9ef779097bc', 'App\\Notifications\\LatestNotice', 'App\\Models\\Employee', 1, '{\"data\":\"Greetings from NetCoden! We are going to have a party after office today. Stay along...<br><br>NetCoden Authority\"}', '2022-04-19 08:33:25', '2022-04-09 04:07:48', '2022-04-19 08:33:25'),
('590f530b-e25a-43a9-9d52-1db6bb315405', 'App\\Notifications\\LatestNotice', 'App\\Models\\Employee', 2, '{\"data\":\"Test by Sazzad Saju\"}', NULL, '2022-04-10 04:07:48', '2022-04-10 04:07:48'),
('5c446462-29de-44d6-b54c-3c77ebdb6f4b', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 1, '{\"data\":\"Eid Mubarak to you all\"}', '2022-04-19 04:03:58', '2022-04-18 02:15:06', '2022-04-19 04:03:58'),
('707a4214-1338-4790-837b-470b647113f8', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 7, '{\"data\":\"adfadf\"}', NULL, '2022-04-18 02:06:59', '2022-04-18 02:06:59'),
('7376e2da-f503-4069-b6a7-0c9c85bf22dd', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 3, '{\"data\":\"adfadf\"}', NULL, '2022-04-18 02:06:59', '2022-04-18 02:06:59'),
('7990e8be-6825-4a34-a57a-d88b797b4058', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 6, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', NULL, '2022-04-18 02:21:54', '2022-04-18 02:21:54'),
('8153b478-216d-47df-8c6d-7f3b08ea578d', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 1, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', '2022-04-19 04:03:53', '2022-04-18 02:21:54', '2022-04-19 04:03:53'),
('881c77af-6839-4271-9bad-73cb42aca575', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 7, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', NULL, '2022-04-13 04:15:17', '2022-04-13 04:15:17'),
('8be078cd-ef5f-4067-b41f-d21bb8c196fb', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 4, '{\"data\":\"adfadf\"}', NULL, '2022-04-18 02:06:59', '2022-04-18 02:06:59'),
('9058c1f0-5419-436d-938c-68e3cf7b4042', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 3, '{\"data\":\"Eid Mubarak to you all\"}', NULL, '2022-04-18 02:15:06', '2022-04-18 02:15:06'),
('931b99ed-717e-47ab-86d0-334be858bd60', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 6, '{\"data\":\"Eid Mubarak to you all\"}', NULL, '2022-04-18 02:15:06', '2022-04-18 02:15:06'),
('94f1ccd0-3ebe-4e9d-a946-5a6b281cdff9', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 4, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', NULL, '2022-04-13 04:15:17', '2022-04-13 04:15:17'),
('9f09c153-222e-4bf8-965c-10e4f9dcc3de', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 2, '{\"data\":\"Hard workers will be rewarded with higher pay-scale. <br>NetCoden Authority\"}', NULL, '2022-04-13 04:15:17', '2022-04-13 04:15:17'),
('aa3f27fc-f494-4b45-a0d1-44223590bf98', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 7, '{\"data\":\"Eid Mubarak to you all\"}', NULL, '2022-04-18 02:15:06', '2022-04-18 02:15:06'),
('c3ab240b-db1a-4320-9cd1-56e5d1447947', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 5, '{\"data\":\"Eid Mubarak to you all\"}', NULL, '2022-04-18 02:15:06', '2022-04-18 02:15:06'),
('c69c51ce-1126-45c5-a750-61d09bb62911', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 2, '{\"data\":\"adfadf\"}', NULL, '2022-04-18 02:06:59', '2022-04-18 02:06:59'),
('c72c2964-b733-4a54-a154-76a73d80779c', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 2, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', NULL, '2022-04-18 02:21:54', '2022-04-18 02:21:54'),
('d0b3b730-c386-4747-a7e2-7ab8f89bce0e', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 3, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', NULL, '2022-04-18 02:21:54', '2022-04-18 02:21:54'),
('dbb66a2d-d479-4a88-acab-c33af6bc8f51', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 7, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', NULL, '2022-04-18 02:21:54', '2022-04-18 02:21:54'),
('dbd2470c-43b1-4496-860a-f3af1885f686', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 4, '{\"data\":\"<p><strong>Brilliant programmers<\\/strong> &nbsp;will be rewarded with higher <strong>pay-scale<\\/strong> and honor. Keep up with good work<\\/p><p>~ <i>NetCoden Authority<\\/i><\\/p><p><i>18, april, 2022<\\/i><\\/p>\"}', NULL, '2022-04-18 02:21:54', '2022-04-18 02:21:54'),
('e8a05092-9677-4bf0-bf5b-e5528c7cedac', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 1, '{\"data\":\"adfadf\"}', '2022-04-19 04:04:02', '2022-04-18 02:06:59', '2022-04-19 04:04:02'),
('f86c22ee-520a-4dc4-a6aa-071e6829b4ac', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 5, '{\"data\":\"adfadf\"}', NULL, '2022-04-18 02:06:59', '2022-04-18 02:06:59'),
('fc1056ff-c74c-4d38-a368-f2c4ec90db87', 'App\\Notifications\\NotifyNotice', 'App\\Models\\Employee', 4, '{\"data\":\"Eid Mubarak to you all\"}', NULL, '2022-04-18 02:15:06', '2022-04-18 02:15:06'),
('fd666c54-c5e0-45c9-9d12-accd8d07987d', 'App\\Notifications\\LatestNotice', 'App\\Models\\Employee', 1, '{\"data\":\"Mr. Sayef has been selected as the head of department of development. <br><br>NetCoden Authority\"}', '2022-04-19 08:33:25', '2022-04-10 05:35:10', '2022-04-19 08:33:25');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'minor,major,critical',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `employee_id`, `created_by`, `updated_by`, `description`, `level`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 'test', 'minor', '2021-10-31', '2021-10-31 05:42:37', '2021-10-31 05:42:37', NULL),
(2, 5, 1, 1, 'Rough behavior', 'minor', '2021-11-01', '2021-11-02 09:38:27', '2021-11-02 09:38:43', NULL),
(3, 3, 1, NULL, 'Misbehave', 'Mejor', '2022-03-30', '2022-03-30 06:16:14', '2022-03-30 06:16:14', NULL),
(4, 4, 1, NULL, 'Bully', 'Critical', '2022-04-06', '2022-04-06 06:01:31', '2022-04-06 06:01:31', NULL),
(5, 7, 1, NULL, 'Hello there!', 'Minor', '2022-04-12', '2022-04-12 10:22:00', '2022-04-12 10:22:00', NULL),
(6, 2, 1, NULL, 'test', 'Minor', '2022-04-19', '2022-04-19 08:46:25', '2022-04-19 08:46:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'app_name', 'EMS', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(2, 'app_url', 'localhost:8000', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(3, 'app_email', NULL, '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(4, 'app_phone', NULL, '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(5, 'office_start_hour', '09:00', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(6, 'office_end_hour', '18:00', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(7, 'flexible_time', '0', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(8, 'casual_leave', '5', '2021-08-16 00:32:07', '2021-08-16 00:32:07'),
(9, 'sick_leave', '5', '2021-08-16 00:32:07', '2021-08-16 00:32:07'),
(10, 'earned_leave', '5', '2021-08-16 00:32:07', '2021-08-16 00:32:07'),
(11, 'unpaid_leave', '5', '2021-08-16 00:32:07', '2021-08-16 00:32:07'),
(12, 'date_format', 'DD-MM-YYYY', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(13, 'time_format', 'h:mm a', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(14, 'per_page', '10', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(15, 'toast_position', 'top-end', '2021-08-16 00:32:07', '2021-10-31 05:23:16'),
(16, 'timezone', 'Asia/Dhaka', '2021-08-16 00:32:07', '2021-10-31 05:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 For not done, 1 for done',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `created_by`, `updated_by`, `title`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'test', NULL, 1, '2021-10-31 05:43:16', '2021-11-02 05:56:46', NULL),
(2, 1, 1, 'sdfsd', NULL, 1, '2021-11-08 08:46:13', '2021-11-08 08:46:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `phone`, `gender`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin Hellos', 'admin@mail.com', 'storage/img/profile/1-1635834413.jpg', '1-308-768-3955', 'Male', NULL, '$2y$10$VXlvhH0e6tz9DTIYaix22uhMbpjYXqJFRQ5NErEIaQoQR0j7P1.gO', NULL, '2021-08-16 00:32:08', '2021-11-02 06:27:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_types`
--
ALTER TABLE `bill_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyance_bills`
--
ALTER TABLE `conveyance_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_custom_id_unique` (`custom_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_durations`
--
ALTER TABLE `leave_durations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_department`
--
ALTER TABLE `manage_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bill_types`
--
ALTER TABLE `bill_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `conveyance_bills`
--
ALTER TABLE `conveyance_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `leave_durations`
--
ALTER TABLE `leave_durations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `manage_department`
--
ALTER TABLE `manage_department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
