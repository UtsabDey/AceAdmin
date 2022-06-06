-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 10:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aceadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `district_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Uttora', 58, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(2, 'Dhanmondi', 58, 1, 1, '2021-09-08 11:11:24', '2021-09-11 12:16:11'),
(3, 'Chuadanga', 2, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(4, 'Chittagong', 2, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(5, 'Bogra', 3, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(6, 'Sylhet', 3, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(7, 'Bandarban', 3, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(8, 'Sirajganj', 4, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(9, 'Lakshmipur', 5, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(10, 'Bhola', 6, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`id`, `name`, `status`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Men', 1, 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(2, 'Kid', 1, 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(3, 'Women', 1, 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(4, 'Meat', 1, 4, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(5, 'Fish', 1, 4, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(6, 'Fresh Vegetables', 1, 4, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(7, 'Rice', 1, 4, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(8, 'Egg', 1, 4, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(9, 'Dry Fruits', 1, 4, '2022-05-31 11:11:24', '2021-09-08 11:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `register_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `is_default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `opening_balance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `current_balance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `reffered_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `register_from`, `customer_type_id`, `name`, `email`, `phone`, `gender`, `address`, `country`, `district_id`, `area_id`, `zip_code`, `is_default`, `opening_balance`, `current_balance`, `reffered_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'showroom', 3, 'Alex John', 'john@gmail.com', '01600000001', 'male', 'Test', 'Bangladesh', 58, 1, 1210, 'Yes', '10.00', '10.00', 0, 1, '2022-05-31 22:34:29', '2022-06-01 01:00:50'),
(2, 'eccomerce', 3, 'Jone Doe', 'john@gmail.com', '01600000002', 'Male', 'Test', 'Bangladesh', 4, 4, 1210, 'Yes', '10.00', '10.00', 0, 1, '2022-05-31 22:36:06', '2022-05-31 22:36:06'),
(4, 'showroom', 4, 'Utsab Dey', 'utsab@gmail.com', '01685168481', 'Male', 'Mirpur-6', 'Bangladesh', 58, 2, 1210, 'Yes', '100.00', '100.00', 0, 1, '2022-06-01 06:19:36', '2022-06-01 06:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer_types`
--

CREATE TABLE `customer_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_types`
--

INSERT INTO `customer_types` (`id`, `name`, `percentage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VIP', 60, 1, '2022-05-31 22:25:55', '2022-06-01 23:10:28'),
(2, 'REFERRAL', 20, 1, '2022-05-31 22:26:11', '2022-05-31 22:26:11'),
(3, 'REGULAR', 15, 1, '2022-05-31 22:26:24', '2022-05-31 22:26:24'),
(4, 'LUCKY', 50, 1, '2022-05-31 22:26:47', '2022-05-31 22:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_cost` decimal(16,6) DEFAULT 0.000000,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `shipping_cost`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Natore', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(2, 'testv', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-11 12:16:11'),
(3, 'Chuadanga', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(4, 'Chittagong', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(5, 'Bogra', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(6, 'Sylhet', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(7, 'Bandarban', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(8, 'Sirajganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(9, 'Lakshmipur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(10, 'Bhola', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(11, 'Lalmonirhat', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(12, 'Rajbari', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(13, 'Narayanganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(14, 'Kishoreganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(15, 'Mymensingh', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(16, 'Comilla', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(17, 'Narail', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(18, 'Satkhira', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(19, 'Madaripur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(20, 'Shariatpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(21, 'Thakurgaon', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(22, 'Rangpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(23, 'Dinajpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(24, 'Panchagarh', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(25, 'Rangamati', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(26, 'Jessore', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(27, 'Khagrachhari', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(28, 'Joypurhat', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(29, 'Gazipur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(30, 'Jhenaidah', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(31, 'Noakhali', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(32, 'Rajshahi', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(33, 'Manikganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(34, 'Kushtia', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(35, 'Pabna', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(36, 'Moulvibazar', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(37, 'Khulna', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(38, 'Kurigram', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(39, 'Jamalpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(40, 'Munshiganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(41, 'Narsingdi', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(42, 'Patuakhali', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(43, 'Netrakona', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(44, 'Gaibandha', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(45, 'Meherpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(46, 'Brahmanbaria', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(47, 'Sherpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(48, 'Magura', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(49, 'Nilphamari', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(50, 'Nawabganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(51, 'Barisal', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(52, 'Sunamganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(53, 'Barguna', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(54, 'Faridpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(55, 'Jhalokati', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(56, 'Tangail', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(57, 'Pirojpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(58, 'Dhaka', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(59, 'Gopalganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(60, 'Feni', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(61, 'Bagerhat', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(62, 'Cox\'s Bazar', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(63, 'Chandpur', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24'),
(64, 'Habiganj', '0.000000', 1, 1, 1, '2021-09-08 11:11:24', '2021-09-08 11:11:24');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_21_054617_create_customer_types_table', 1),
(6, '2022_05_28_054902_create_districts_table', 1),
(7, '2022_05_28_060636_create_areas_table', 1),
(8, '2022_05_30_112819_create_customers_table', 1),
(9, '2022_06_01_083544_create_product_types_table', 2),
(10, '2022_06_01_104509_create_category_types_table', 3),
(11, '2022_06_02_054255_create_products_table', 4);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `wholesale_price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `sub_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_measure_id` bigint(20) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_type_id`, `category_id`, `brand`, `country_id`, `code`, `purchase_price`, `wholesale_price`, `sale_price`, `status`, `sub_text`, `unit_measure_id`, `image`, `vat`, `vat_type`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 1, 1, 'Twelve', 18, 101, 700, 900, 1000, 1, '10', 5, NULL, '10', 'Percentage', '2022-06-02 04:25:08', '2022-06-02 04:25:08'),
(2, 'Pant', 1, 1, 'Twelve', 18, 101, 500, 700, 900, 1, '10', 5, NULL, '10', 'Percentage', '2022-06-02 04:25:44', '2022-06-02 04:25:44'),
(3, 'Sun-Glass', 1, 1, 'Twelve', 18, 101, 100, 150, 200, 1, '10', 5, NULL, '10', 'Percentage', '2022-06-02 04:26:35', '2022-06-02 04:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', '', '', 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(2, 'Medicine', '', '', 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(3, 'Book', '', '', 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(4, 'Food', '', '', 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24'),
(5, 'General', '', '', 1, '2022-05-31 11:11:24', '2021-09-08 11:11:24');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alex John', 'admin@gmail.com', NULL, '$2y$10$rBUrsL53BX6mBmZBDPICWeULmhzjJxRGZA/d57oUm8YUlc6SqLfR2', NULL, '2022-05-31 22:22:46', '2022-05-31 22:22:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_district_id_foreign` (`district_id`),
  ADD KEY `areas_created_by_foreign` (`created_by`),
  ADD KEY `areas_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_types_type_id_foreign` (`type_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_customer_type_id_foreign` (`customer_type_id`),
  ADD KEY `customers_district_id_foreign` (`district_id`),
  ADD KEY `customers_area_id_foreign` (`area_id`);

--
-- Indexes for table `customer_types`
--
ALTER TABLE `customer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_created_by_foreign` (`created_by`),
  ADD KEY `districts_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_type_id_foreign` (`product_type_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_types`
--
ALTER TABLE `customer_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `areas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `areas_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `category_types`
--
ALTER TABLE `category_types`
  ADD CONSTRAINT `category_types_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `product_types` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `customers_customer_type_id_foreign` FOREIGN KEY (`customer_type_id`) REFERENCES `customer_types` (`id`),
  ADD CONSTRAINT `customers_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `districts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_types` (`id`),
  ADD CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
