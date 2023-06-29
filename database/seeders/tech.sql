-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 10:03 PM
-- Server version: 5.7.34
-- PHP Version: 8.1.16

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbaconfe_2023`
--

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `code`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Aba Branch', '001', 'ABA', NULL, NULL);

--
-- Dumping data for table `categories`
--


INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Delegate', NULL, NULL, NULL),
(2, 'Visitors', NULL, NULL, NULL),
(3, 'Exhibitors', NULL, NULL, NULL);


--
-- Dumping data for table `enrols`
--

INSERT INTO `enrols` (`id`, `name`, `year_of_call`, `scn`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'DELEGATES', '2023', 'DEL02023', '', '', '', NULL, NULL),
(2, 'VISITORS', '2023', 'VIS02030', '', '', '', NULL, NULL),
(3, 'EXHIBITORS', '2018', 'EXH08979', '', NULL, NULL, NULL, NULL);

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `category_id`, `period_id`, `amount`, `min_age`, `max_age`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20000, NULL, NULL, NULL, NULL),
(2, 2, 2, 60000, NULL, NULL, NULL, NULL),
(3, 3, 3, 50000, NULL, NULL, NULL, NULL);


--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`id`, `name`, `virtual`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'Deligates', 0, '2023-06-04 22:59:59', NULL, NULL),
(2, 'Visitors', 0, '2023-07-23 22:59:59', NULL, NULL),
(3, 'Exhibition', 0, '2023-08-14 22:59:59', NULL, NULL);

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `reference`, `amount`, `paid_at`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2169, 'nba646d26cd18978', 22000, '2023-05-23 20:52:29', '2023-05-23 20:49:17', '2023-05-23 20:52:29', 25432, NULL);

SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
