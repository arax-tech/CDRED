-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 06:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdred`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Started',
  `isSubmited` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `employment_verication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `application_id`, `first_name`, `middle_name`, `last_name`, `mobile_number`, `email`, `pin_code`, `address`, `city`, `country`, `status`, `isSubmited`, `employment_verication`, `created_at`, `updated_at`) VALUES
(26, 1016, 35261261, 'Deborah', 'Calista Weber', 'Juarez', '+1-671', 'wybysoxoq@mailinator.com', 'Fuga Provident dol', 'Pariatur Reiciendis', 'Explicabo Nostrum a', '241', 'Started', 'No', 'Pending', '2023-05-20 05:37:07', '2023-05-23 14:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `application_education`
--

CREATE TABLE `application_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_of_study` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_education`
--

INSERT INTO `application_education` (`id`, `user_id`, `application_id`, `country`, `institute`, `level`, `field_of_study`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(47, 1016, 24, '87', 'Doloribus corrupti', 'PhD', 'Sapiente dolor in qu', '2012-07-12', '2015-10-27', '2023-05-20 04:37:43', '2023-05-20 04:37:43'),
(48, 1016, 24, '224', 'Voluptatibus quam po', 'Bachelors', 'Ut saepe dolores mai', '2000-08-13', '1988-03-31', '2023-05-20 04:37:43', '2023-05-20 04:37:43'),
(52, 1016, 26, '138', 'Est iure do reicien', 'Diploma', 'Dolorem voluptatem', '2023-05-30', '2023-11-11', '2023-05-23 14:35:28', '2023-05-23 14:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `application_professionals`
--

CREATE TABLE `application_professionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whether` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_professionals`
--

INSERT INTO `application_professionals` (`id`, `user_id`, `application_id`, `country`, `internship`, `company`, `whether`, `experience_duration`, `experience_type`, `company_email`, `company_contact`, `designation`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(18, 1016, 24, '146', 'Yes', 'Garrett Workman LLC', 'Paid', '85', 'Years', 'xoba@mailinator.com', 'Cunningham and Davis Trading', 'Quidem praesentium d', '2017-07-01', '1980-08-22', '2023-05-20 04:37:51', '2023-05-20 04:37:51'),
(19, 1016, 24, '49', 'No', 'Abbott and Cameron Inc', 'Paid', '95', 'Months', 'zatosuxuw@mailinator.com', 'Mosley Lester Inc', 'Corporis voluptates', '2006-12-19', '1989-11-23', '2023-05-20 04:37:51', '2023-05-20 04:37:51'),
(20, 1016, 26, '7', 'No', 'Marks and Conrad Plc', 'Paid', '56', 'Months', 'rybitij@mailinator.com', 'Weaver Horn Plc', 'Qui sed ut est quae', '1974-02-12', '2002-02-18', '2023-05-20 05:37:20', '2023-05-20 05:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeric_code` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso2` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `numeric_code`, `iso2`, `phonecode`, `currency`, `currency_symbol`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '004', 'AF', '93', 'AFN', '؋', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(2, 'Aland Islands', '248', 'AX', '358-18', 'EUR', '€', '2018-07-20 20:11:03', '2023-05-03 11:22:23'),
(3, 'Albania', '008', 'AL', '355', 'ALL', 'Lek', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(4, 'Algeria', '012', 'DZ', '213', 'DZD', 'دج', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(5, 'American Samoa', '016', 'AS', '1-684', 'USD', '$', '2018-07-20 20:11:03', '2023-05-03 11:22:27'),
(6, 'Andorra', '020', 'AD', '376', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(7, 'Angola', '024', 'AO', '244', 'AOA', 'Kz', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(8, 'Anguilla', '660', 'AI', '1-264', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:22:31'),
(9, 'Antarctica', '010', 'AQ', '672', 'AAD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(10, 'Antigua And Barbuda', '028', 'AG', '1-268', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:22:36'),
(11, 'Argentina', '032', 'AR', '54', 'ARS', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(12, 'Armenia', '051', 'AM', '374', 'AMD', '֏', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(13, 'Aruba', '533', 'AW', '297', 'AWG', 'ƒ', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(14, 'Australia', '036', 'AU', '61', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(15, 'Austria', '040', 'AT', '43', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(16, 'Azerbaijan', '031', 'AZ', '994', 'AZN', 'm', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(17, 'Bahamas The', '044', 'BS', '1-242', 'BSD', 'B$', '2018-07-20 20:11:03', '2023-05-03 11:22:39'),
(18, 'Bahrain', '048', 'BH', '973', 'BHD', '.د.ب', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(19, 'Bangladesh', '050', 'BD', '880', 'BDT', '৳', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(20, 'Barbados', '052', 'BB', '1-246', 'BBD', 'Bds$', '2018-07-20 20:11:03', '2023-05-03 11:22:54'),
(21, 'Belarus', '112', 'BY', '375', 'BYN', 'Br', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(22, 'Belgium', '056', 'BE', '32', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(23, 'Belize', '084', 'BZ', '501', 'BZD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(24, 'Benin', '204', 'BJ', '229', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(25, 'Bermuda', '060', 'BM', '1-441', 'BMD', '$', '2018-07-20 20:11:03', '2023-05-03 11:22:58'),
(26, 'Bhutan', '064', 'BT', '975', 'BTN', 'Nu.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(27, 'Bolivia', '068', 'BO', '591', 'BOB', 'Bs.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(28, 'Bosnia and Herzegovina', '070', 'BA', '387', 'BAM', 'KM', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(29, 'Botswana', '072', 'BW', '267', 'BWP', 'P', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(30, 'Bouvet Island', '074', 'BV', '0055', 'NOK', 'kr', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(31, 'Brazil', '076', 'BR', '55', 'BRL', 'R$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(32, 'British Indian Ocean Territory', '086', 'IO', '246', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(33, 'Brunei', '096', 'BN', '673', 'BND', 'B$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(34, 'Bulgaria', '100', 'BG', '359', 'BGN', 'Лв.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(35, 'Burkina Faso', '854', 'BF', '226', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(36, 'Burundi', '108', 'BI', '257', 'BIF', 'FBu', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(37, 'Cambodia', '116', 'KH', '855', 'KHR', 'KHR', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(38, 'Cameroon', '120', 'CM', '237', 'XAF', 'FCFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(39, 'Canada', '124', 'CA', '1', 'CAD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(40, 'Cape Verde', '132', 'CV', '238', 'CVE', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(41, 'Cayman Islands', '136', 'KY', '1-345', 'KYD', '$', '2018-07-20 20:11:03', '2023-05-03 11:23:02'),
(42, 'Central African Republic', '140', 'CF', '236', 'XAF', 'FCFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(43, 'Chad', '148', 'TD', '235', 'XAF', 'FCFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(44, 'Chile', '152', 'CL', '56', 'CLP', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(45, 'China', '156', 'CN', '86', 'CNY', '¥', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(46, 'Christmas Island', '162', 'CX', '61', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(47, 'Cocos (Keeling) Islands', '166', 'CC', '61', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(48, 'Colombia', '170', 'CO', '57', 'COP', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(49, 'Comoros', '174', 'KM', '269', 'KMF', 'CF', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(50, 'Congo', '178', 'CG', '242', 'XAF', 'FC', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(51, 'Democratic Republic of the Congo', '180', 'CD', '243', 'CDF', 'FC', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(52, 'Cook Islands', '184', 'CK', '682', 'NZD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(53, 'Costa Rica', '188', 'CR', '506', 'CRC', '₡', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(54, 'Cote D\'Ivoire (Ivory Coast)', '384', 'CI', '225', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(55, 'Croatia', '191', 'HR', '385', 'HRK', 'kn', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(56, 'Cuba', '192', 'CU', '53', 'CUP', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(57, 'Cyprus', '196', 'CY', '357', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(58, 'Czech Republic', '203', 'CZ', '420', 'CZK', 'Kč', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(59, 'Denmark', '208', 'DK', '45', 'DKK', 'Kr.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(60, 'Djibouti', '262', 'DJ', '253', 'DJF', 'Fdj', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(61, 'Dominica', '212', 'DM', '1-767', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:23:08'),
(62, 'Dominican Republic', '214', 'DO', '1-809', 'DOP', '$', '2018-07-20 20:11:03', '2023-05-03 11:23:30'),
(63, 'East Timor', '626', 'TL', '670', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(64, 'Ecuador', '218', 'EC', '593', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(65, 'Egypt', '818', 'EG', '20', 'EGP', 'ج.م', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(66, 'El Salvador', '222', 'SV', '503', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(67, 'Equatorial Guinea', '226', 'GQ', '240', 'XAF', 'FCFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(68, 'Eritrea', '232', 'ER', '291', 'ERN', 'Nfk', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(69, 'Estonia', '233', 'EE', '372', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(70, 'Ethiopia', '231', 'ET', '251', 'ETB', 'Nkf', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(71, 'Falkland Islands', '238', 'FK', '500', 'FKP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(72, 'Faroe Islands', '234', 'FO', '298', 'DKK', 'Kr.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(73, 'Fiji Islands', '242', 'FJ', '679', 'FJD', 'FJ$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(74, 'Finland', '246', 'FI', '358', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(75, 'France', '250', 'FR', '33', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(76, 'French Guiana', '254', 'GF', '594', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(77, 'French Polynesia', '258', 'PF', '689', 'XPF', '₣', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(78, 'French Southern Territories', '260', 'TF', '262', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(79, 'Gabon', '266', 'GA', '241', 'XAF', 'FCFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(80, 'Gambia The', '270', 'GM', '220', 'GMD', 'D', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(81, 'Georgia', '268', 'GE', '995', 'GEL', 'ლ', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(82, 'Germany', '276', 'DE', '49', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(83, 'Ghana', '288', 'GH', '233', 'GHS', 'GH₵', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(84, 'Gibraltar', '292', 'GI', '350', 'GIP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(85, 'Greece', '300', 'GR', '30', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(86, 'Greenland', '304', 'GL', '299', 'DKK', 'Kr.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(87, 'Grenada', '308', 'GD', '1-473', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:23:36'),
(88, 'Guadeloupe', '312', 'GP', '590', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(89, 'Guam', '316', 'GU', '1-671', 'USD', '$', '2018-07-20 20:11:03', '2023-05-03 11:23:42'),
(90, 'Guatemala', '320', 'GT', '502', 'GTQ', 'Q', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(91, 'Guernsey and Alderney', '831', 'GG', '44-1481', 'GBP', '£', '2018-07-20 20:11:03', '2023-05-03 11:23:39'),
(92, 'Guinea', '324', 'GN', '224', 'GNF', 'FG', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(93, 'Guinea-Bissau', '624', 'GW', '245', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(94, 'Guyana', '328', 'GY', '592', 'GYD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(95, 'Haiti', '332', 'HT', '509', 'HTG', 'G', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(96, 'Heard Island and McDonald Islands', '334', 'HM', '672', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(97, 'Honduras', '340', 'HN', '504', 'HNL', 'L', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(98, 'Hong Kong S.A.R.', '344', 'HK', '852', 'HKD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(99, 'Hungary', '348', 'HU', '36', 'HUF', 'Ft', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(100, 'Iceland', '352', 'IS', '354', 'ISK', 'kr', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(101, 'India', '356', 'IN', '91', 'INR', '₹', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(102, 'Indonesia', '360', 'ID', '62', 'IDR', 'Rp', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(103, 'Iran', '364', 'IR', '98', 'IRR', '﷼', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(104, 'Iraq', '368', 'IQ', '964', 'IQD', 'د.ع', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(105, 'Ireland', '372', 'IE', '353', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(106, 'Israel', '376', 'IL', '972', 'ILS', '₪', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(107, 'Italy', '380', 'IT', '39', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(108, 'Jamaica', '388', 'JM', '1-876', 'JMD', 'J$', '2018-07-20 20:11:03', '2023-05-03 11:23:48'),
(109, 'Japan', '392', 'JP', '81', 'JPY', '¥', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(110, 'Jersey', '832', 'JE', '44-1534', 'GBP', '£', '2018-07-20 20:11:03', '2023-05-03 11:23:51'),
(111, 'Jordan', '400', 'JO', '962', 'JOD', 'ا.د', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(112, 'Kazakhstan', '398', 'KZ', '7', 'KZT', 'лв', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(113, 'Kenya', '404', 'KE', '254', 'KES', 'KSh', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(114, 'Kiribati', '296', 'KI', '686', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(115, 'North Korea', '408', 'KP', '850', 'KPW', '₩', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(116, 'South Korea', '410', 'KR', '82', 'KRW', '₩', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(117, 'Kuwait', '414', 'KW', '965', 'KWD', 'ك.د', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(118, 'Kyrgyzstan', '417', 'KG', '996', 'KGS', 'лв', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(119, 'Laos', '418', 'LA', '856', 'LAK', '₭', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(120, 'Latvia', '428', 'LV', '371', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(121, 'Lebanon', '422', 'LB', '961', 'LBP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(122, 'Lesotho', '426', 'LS', '266', 'LSL', 'L', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(123, 'Liberia', '430', 'LR', '231', 'LRD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(124, 'Libya', '434', 'LY', '218', 'LYD', 'د.ل', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(125, 'Liechtenstein', '438', 'LI', '423', 'CHF', 'CHf', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(126, 'Lithuania', '440', 'LT', '370', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(127, 'Luxembourg', '442', 'LU', '352', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(128, 'Macau S.A.R.', '446', 'MO', '853', 'MOP', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(129, 'Macedonia', '807', 'MK', '389', 'MKD', 'ден', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(130, 'Madagascar', '450', 'MG', '261', 'MGA', 'Ar', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(131, 'Malawi', '454', 'MW', '265', 'MWK', 'MK', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(132, 'Malaysia', '458', 'MY', '60', 'MYR', 'RM', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(133, 'Maldives', '462', 'MV', '960', 'MVR', 'Rf', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(134, 'Mali', '466', 'ML', '223', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(135, 'Malta', '470', 'MT', '356', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(136, 'Man (Isle of)', '833', 'IM', '44-1624', 'GBP', '£', '2018-07-20 20:11:03', '2023-05-03 11:23:56'),
(137, 'Marshall Islands', '584', 'MH', '692', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(138, 'Martinique', '474', 'MQ', '596', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(139, 'Mauritania', '478', 'MR', '222', 'MRO', 'MRU', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(140, 'Mauritius', '480', 'MU', '230', 'MUR', '₨', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(141, 'Mayotte', '175', 'YT', '262', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(142, 'Mexico', '484', 'MX', '52', 'MXN', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(143, 'Micronesia', '583', 'FM', '691', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(144, 'Moldova', '498', 'MD', '373', 'MDL', 'L', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(145, 'Monaco', '492', 'MC', '377', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(146, 'Mongolia', '496', 'MN', '976', 'MNT', '₮', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(147, 'Montenegro', '499', 'ME', '382', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(148, 'Montserrat', '500', 'MS', '1-664', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:24:00'),
(149, 'Morocco', '504', 'MA', '212', 'MAD', 'DH', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(150, 'Mozambique', '508', 'MZ', '258', 'MZN', 'MT', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(151, 'Myanmar', '104', 'MM', '95', 'MMK', 'K', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(152, 'Namibia', '516', 'NA', '264', 'NAD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(153, 'Nauru', '520', 'NR', '674', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(154, 'Nepal', '524', 'NP', '977', 'NPR', '₨', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(155, 'Bonaire, Sint Eustatius and Saba', '535', 'BQ', '599', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(156, 'Netherlands', '528', 'NL', '31', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(157, 'New Caledonia', '540', 'NC', '687', 'XPF', '₣', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(158, 'New Zealand', '554', 'NZ', '64', 'NZD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(159, 'Nicaragua', '558', 'NI', '505', 'NIO', 'C$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(160, 'Niger', '562', 'NE', '227', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(161, 'Nigeria', '566', 'NG', '234', 'NGN', '₦', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(162, 'Niue', '570', 'NU', '683', 'NZD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(163, 'Norfolk Island', '574', 'NF', '672', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(164, 'Northern Mariana Islands', '580', 'MP', '1-670', 'USD', '$', '2018-07-20 20:11:03', '2023-05-03 11:24:03'),
(165, 'Norway', '578', 'NO', '47', 'NOK', 'kr', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(166, 'Oman', '512', 'OM', '968', 'OMR', '.ع.ر', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(167, 'Pakistan', '586', 'PK', '92', 'PKR', '₨', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(168, 'Palau', '585', 'PW', '680', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(169, 'Palestinian Territory Occupied', '275', 'PS', '970', 'ILS', '₪', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(170, 'Panama', '591', 'PA', '507', 'PAB', 'B/.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(171, 'Papua new Guinea', '598', 'PG', '675', 'PGK', 'K', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(172, 'Paraguay', '600', 'PY', '595', 'PYG', '₲', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(173, 'Peru', '604', 'PE', '51', 'PEN', 'S/.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(174, 'Philippines', '608', 'PH', '63', 'PHP', '₱', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(175, 'Pitcairn Island', '612', 'PN', '870', 'NZD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(176, 'Poland', '616', 'PL', '48', 'PLN', 'zł', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(177, 'Portugal', '620', 'PT', '351', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(178, 'Puerto Rico', '630', 'PR', '1-787', 'USD', '$', '2018-07-20 20:11:03', '2023-05-03 11:24:23'),
(179, 'Qatar', '634', 'QA', '974', 'QAR', 'ق.ر', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(180, 'Reunion', '638', 'RE', '262', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(181, 'Romania', '642', 'RO', '40', 'RON', 'lei', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(182, 'Russia', '643', 'RU', '7', 'RUB', '₽', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(183, 'Rwanda', '646', 'RW', '250', 'RWF', 'FRw', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(184, 'Saint Helena', '654', 'SH', '290', 'SHP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(185, 'Saint Kitts And Nevis', '659', 'KN', '1-869', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:24:27'),
(186, 'Saint Lucia', '662', 'LC', '1-758', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:24:30'),
(187, 'Saint Pierre and Miquelon', '666', 'PM', '508', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(188, 'Saint Vincent And The Grenadines', '670', 'VC', '1-784', 'XCD', '$', '2018-07-20 20:11:03', '2023-05-03 11:24:34'),
(189, 'Saint-Barthelemy', '652', 'BL', '590', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(190, 'Saint-Martin (French part)', '663', 'MF', '590', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(191, 'Samoa', '882', 'WS', '685', 'WST', 'SAT', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(192, 'San Marino', '674', 'SM', '378', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(193, 'Sao Tome and Principe', '678', 'ST', '239', 'STD', 'Db', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(194, 'Saudi Arabia', '682', 'SA', '966', 'SAR', '﷼', '2018-07-20 20:11:03', '2021-09-26 13:09:09'),
(195, 'Senegal', '686', 'SN', '221', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(196, 'Serbia', '688', 'RS', '381', 'RSD', 'din', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(197, 'Seychelles', '690', 'SC', '248', 'SCR', 'SRe', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(198, 'Sierra Leone', '694', 'SL', '232', 'SLL', 'Le', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(199, 'Singapore', '702', 'SG', '65', 'SGD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(200, 'Slovakia', '703', 'SK', '421', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(201, 'Slovenia', '705', 'SI', '386', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(202, 'Solomon Islands', '090', 'SB', '677', 'SBD', 'Si$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(203, 'Somalia', '706', 'SO', '252', 'SOS', 'Sh.so.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(204, 'South Africa', '710', 'ZA', '27', 'ZAR', 'R', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(205, 'South Georgia', '239', 'GS', '500', 'GBP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(206, 'South Sudan', '728', 'SS', '211', 'SSP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(207, 'Spain', '724', 'ES', '34', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(208, 'Sri Lanka', '144', 'LK', '94', 'LKR', 'Rs', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(209, 'Sudan', '729', 'SD', '249', 'SDG', '.س.ج', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(210, 'Suriname', '740', 'SR', '597', 'SRD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(211, 'Svalbard And Jan Mayen Islands', '744', 'SJ', '47', 'NOK', 'kr', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(212, 'Swaziland', '748', 'SZ', '268', 'SZL', 'E', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(213, 'Sweden', '752', 'SE', '46', 'SEK', 'kr', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(214, 'Switzerland', '756', 'CH', '41', 'CHF', 'CHf', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(215, 'Syria', '760', 'SY', '963', 'SYP', 'LS', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(216, 'Taiwan', '158', 'TW', '886', 'TWD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(217, 'Tajikistan', '762', 'TJ', '992', 'TJS', 'SM', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(218, 'Tanzania', '834', 'TZ', '255', 'TZS', 'TSh', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(219, 'Thailand', '764', 'TH', '66', 'THB', '฿', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(220, 'Togo', '768', 'TG', '228', 'XOF', 'CFA', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(221, 'Tokelau', '772', 'TK', '690', 'NZD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(222, 'Tonga', '776', 'TO', '676', 'TOP', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(223, 'Trinidad And Tobago', '780', 'TT', '+1-868', 'TTD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(224, 'Tunisia', '788', 'TN', '216', 'TND', 'ت.د', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(225, 'Turkey', '792', 'TR', '90', 'TRY', '₺', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(226, 'Turkmenistan', '795', 'TM', '993', 'TMT', 'T', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(227, 'Turks And Caicos Islands', '796', 'TC', '+1-649', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(228, 'Tuvalu', '798', 'TV', '688', 'AUD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(229, 'Uganda', '800', 'UG', '256', 'UGX', 'USh', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(230, 'Ukraine', '804', 'UA', '380', 'UAH', '₴', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(231, 'United Arab Emirates', '784', 'AE', '971', 'AED', 'إ.د', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(232, 'United Kingdom', '826', 'GB', '44', 'GBP', '£', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(233, 'United States', '840', 'US', '1', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(234, 'United States Minor Outlying Islands', '581', 'UM', '1', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(235, 'Uruguay', '858', 'UY', '598', 'UYU', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(236, 'Uzbekistan', '860', 'UZ', '998', 'UZS', 'лв', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(237, 'Vanuatu', '548', 'VU', '678', 'VUV', 'VT', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(238, 'Vatican City State (Holy See)', '336', 'VA', '379', 'EUR', '€', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(239, 'Venezuela', '862', 'VE', '58', 'VEF', 'Bs', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(240, 'Vietnam', '704', 'VN', '84', 'VND', '₫', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(241, 'Virgin Islands (British)', '092', 'VG', '+1-284', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(242, 'Virgin Islands (US)', '850', 'VI', '+1-340', 'USD', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(243, 'Wallis And Futuna Islands', '876', 'WF', '681', 'XPF', '₣', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(244, 'Western Sahara', '732', 'EH', '212', 'MAD', 'MAD', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(245, 'Yemen', '887', 'YE', '967', 'YER', '﷼', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(246, 'Zambia', '894', 'ZM', '260', 'ZMW', 'ZK', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(247, 'Zimbabwe', '716', 'ZW', '263', 'ZWL', '$', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(248, 'Kosovo', '926', 'XK', '383', 'EUR', '€', '2020-08-15 15:33:50', '2021-08-01 14:37:57'),
(249, 'Curaçao', '531', 'CW', '599', 'ANG', 'ƒ', '2020-10-25 14:54:20', '2021-08-01 14:37:27'),
(250, 'Sint Maarten (Dutch part)', '534', 'SX', '1721', 'ANG', 'ƒ', '2020-12-05 13:03:39', '2021-08-01 14:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NotUsed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(3, '43FX68K1DTVPMZB', '500', 'Used', '2023-05-08 10:02:12', '2023-05-08 10:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `id_proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_change_evidence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_experience_letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_slips` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_statement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apprenticeship_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affidavit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `application_id`, `id_proof`, `name_change_evidence`, `work_experience_letter`, `appointment_letter`, `pay_slips`, `resume`, `salary_statement`, `apprenticeship_certificate`, `affidavit`, `status`, `created_at`, `updated_at`) VALUES
(5, 1016, 26, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, 'Requested', '2023-05-20 05:37:33', '2023-05-20 05:37:33');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2023_05_05_063408_create_applications_table', 2),
(5, '2023_05_05_064216_create_application_education_table', 2),
(6, '2023_05_05_064237_create_application_professionals_table', 2),
(7, '2023_05_05_064323_create_payment_links_table', 2),
(8, '2023_05_05_064337_create_coupons_table', 2),
(9, '2023_05_06_143014_create_reports_table', 3),
(10, '2023_05_06_150112_create_notifications_table', 4),
(11, '2023_05_09_190048_create_documents_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `type`, `message`, `created_at`, `updated_at`) VALUES
(42, 0, 'Admin', '<b>Arham Khan</b> has create new application...', '2023-05-20 04:29:58', '2023-05-20 04:29:58'),
(45, 1016, 'User', '<b>Admin</b> have send <b>documents</b> request, <b>CR24231825</b>...', '2023-05-20 05:37:33', '2023-05-20 05:37:33'),
(46, 1016, 'User', '<b>Admin</b> has update status to <b>Started</b>...', '2023-05-23 14:16:53', '2023-05-23 14:16:53');

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
-- Table structure for table `payment_links`
--

CREATE TABLE `payment_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UnPaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `pdf`, `created_at`, `updated_at`) VALUES
(7, 1016, 'Get_Started_With_Smallpdf.pdf', '2023-05-09 06:47:43', '2023-05-09 06:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_no` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isVerified` int(11) NOT NULL DEFAULT 0,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_no`, `name`, `email`, `password`, `phone`, `address`, `verification_code`, `isVerified`, `role`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1000, 0, 'Admin', 'admin@info.com', '$2y$10$vN2i64itqZ03Ef0M/R8UCOpGt5g9c8vggQwfdodLPPXY0ID4aJIfK', '+1 (182) 834-2104', 'Islamabad, Pakistan', NULL, 1, 'Admin', '08.jpg', NULL, 'xTS7RXZWgZGrIjM26JmdTIHTr0p8yftJrPo3dcv77w7ZUEzBk5yJ5Y6ygXye', '2023-05-01 07:21:09', '2023-05-06 10:26:50'),
(1016, 24231825, 'Arham Khan', 'arhamkhaninnocent@gmail.com', '$2y$10$hBwJSKl477FHd7sswlG55OCSv69si3pYxWmnXaKQ1yiMzMw/hj25e', '+92-3065831989', 'Islamabad, Pakistan', '7df23bb63deacb76af5dfbc9c3a1965882a672f0', 1, 'User', NULL, NULL, NULL, '2023-05-09 06:34:32', '2023-05-09 06:35:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_education`
--
ALTER TABLE `application_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_professionals`
--
ALTER TABLE `application_professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_links`
--
ALTER TABLE `payment_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `application_education`
--
ALTER TABLE `application_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `application_professionals`
--
ALTER TABLE `application_professionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `payment_links`
--
ALTER TABLE `payment_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
