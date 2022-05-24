-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 07:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookfinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `actioned_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`id`, `user_id`, `status`, `actioned_by`) VALUES
(3, 2, 5, 1),
(4, 3, 5, 1),
(5, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`) VALUES
(1, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `city_id`, `location_name`) VALUES
(1, 1, 'Uttara'),
(2, 1, 'Mirpur 1'),
(3, 1, 'Mirpur 10'),
(4, 1, 'Mirpur 12'),
(5, 1, 'Mirpur 11'),
(6, 1, 'Mirpur 2'),
(7, 1, 'Pallabi'),
(8, 1, 'Kazipara'),
(9, 1, 'Kafrul'),
(10, 1, 'Agargaon'),
(11, 1, 'Sher-e-Bangla Nagar'),
(12, 1, 'Cantonment area'),
(13, 1, 'Banani'),
(14, 1, 'Gulshan'),
(15, 1, 'Mohakhali'),
(16, 1, 'Bashundhara'),
(17, 1, 'Banasree'),
(18, 1, 'Baridhara'),
(19, 1, 'Khilkhet'),
(20, 1, 'Tejgaon'),
(21, 1, 'Farmgate'),
(22, 1, 'Mohammadpur'),
(23, 1, 'Rampura'),
(24, 1, 'Badda'),
(25, 1, 'Vatara'),
(26, 1, 'Gabtali'),
(27, 1, 'Hazaribagh'),
(28, 1, 'Dhanmondi'),
(29, 1, 'Ramna'),
(30, 1, 'Motijheel'),
(31, 1, 'Sabujbagh'),
(32, 1, 'Lalbagh'),
(33, 1, 'Kamalapur'),
(34, 1, 'Kamrangirchar'),
(35, 1, 'Islampur'),
(36, 1, 'Sadarghat'),
(37, 1, 'Kotwali'),
(38, 1, 'Sutrapur'),
(39, 1, 'Jurain'),
(40, 1, 'Dania'),
(41, 1, 'Demra'),
(42, 1, 'Shyampur'),
(43, 1, 'Matuail'),
(44, 1, 'Shahbagh'),
(45, 1, 'Paltan'),
(46, 1, 'Savar'),
(47, 1, 'Ashulia'),
(48, 1, 'Birulia');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL,
  `available_from` varchar(255) NOT NULL,
  `available_till` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `uid`, `title`, `description`, `category_id`, `quantity`, `price`, `image`, `expire_date`, `available_from`, `available_till`) VALUES
(2, 2, 'Biriyani', 'Very delicious dish', 9, 20, 329, '21052022_040559biriyani.jpg', '2022-05-23', '10:35', '22:35'),
(3, 2, 'Khichuri', 'Very delicious for breakfast', 7, 20, 234, '21052022_040559biriyani-2.jpg', '2022-05-22', '22:36', '23:36'),
(4, 3, 'Beaf curry', 'Get your lunch', 9, 2, 203, '21052022_040528biriyani-3.jpg', '2022-05-26', '08:38', '13:38'),
(5, 3, 'Mutton curry', 'Spicy and tasty', 10, 3, 642, '21052022_040535biriyani-4.jpg', '2022-05-23', '22:39', '20:41'),
(6, 4, 'Sweets', 'Get your desert', 11, 3, 300, '21052022_040540biriyani-5.jpg', '2022-05-23', '08:40', '12:40'),
(7, 4, 'French fries', 'Snacks', 8, 56, 2109, '21052022_040559biriyani-7.jpg', '2022-05-23', '22:43', '22:43');

-- --------------------------------------------------------

--
-- Table structure for table `settings_vars`
--

CREATE TABLE `settings_vars` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings_vars`
--

INSERT INTO `settings_vars` (`id`, `value`) VALUES
(1, 'roles'),
(2, 'status'),
(3, 'category');

-- --------------------------------------------------------

--
-- Table structure for table `settings_vars_variables`
--

CREATE TABLE `settings_vars_variables` (
  `id` int(11) NOT NULL,
  `var_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings_vars_variables`
--

INSERT INTO `settings_vars_variables` (`id`, `var_id`, `value`) VALUES
(1, 1, 'Admin'),
(2, 1, 'Homecook'),
(3, 1, 'Consumer'),
(4, 2, 'Pending'),
(5, 2, 'Approved'),
(6, 2, 'Declined'),
(7, 3, 'Breakfast'),
(8, 3, 'Snacks'),
(9, 3, 'Lunch'),
(10, 3, 'Dinner'),
(11, 3, 'Desert');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `own_image` varchar(255) DEFAULT NULL,
  `company_image` varchar(255) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `pickup_location` varchar(255) DEFAULT NULL,
  `nid_number` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `role`, `full_name`, `company_name`, `own_image`, `company_image`, `city`, `location`, `phone_number`, `pickup_location`, `nid_number`, `address`, `password`) VALUES
(1, 'admin@gmail.com', 1, 'Shihab Jamil', NULL, 'noImage.png', NULL, NULL, NULL, '01706822418', NULL, NULL, '', 'd534e5240c1eed89c83d01a8fe806033'),
(2, 'saidul@gmail.com', 2, 'Saidul islam', 'Delivery guy', 'noImage.png', 'noImage.png', 1, 13, '0198723331', 'Farazi', 2147483647, NULL, 'd534e5240c1eed89c83d01a8fe806033'),
(3, 'ridoy@gmail.com', 2, 'Rezwanur Haque', 'desi ', '21032022_050337Screenshot 2022-01-25 213140.png', '21032022_050337Screenshot 2022-01-25 212504.png', 1, 16, '09389233429', 'mirpur 10', 2147483647, NULL, 'd534e5240c1eed89c83d01a8fe806033'),
(4, 'abc@gmail.com', 2, 'abc', 'xyz', '02042022_050414discord.png', '02042022_050414screencapture-127-0-0-1-5500-index-html-2022-03-07-23_11_01.png', 1, 15, '812765375', 'mohakhali DOHS', 2147483647, NULL, 'd534e5240c1eed89c83d01a8fe806033'),
(5, 'consumer1@gmail.com', 3, 'consumer dummy', NULL, NULL, NULL, NULL, NULL, '281378791237', NULL, NULL, 'Dhanmondi , Dhaka', '872cc35df1cdc777b4cbe5692bcd3ca2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `approved_by` (`actioned_by`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `settings_vars`
--
ALTER TABLE `settings_vars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_vars_variables`
--
ALTER TABLE `settings_vars_variables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `var_id` (`var_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`),
  ADD KEY `role` (`role`),
  ADD KEY `location` (`location`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `settings_vars`
--
ALTER TABLE `settings_vars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings_vars_variables`
--
ALTER TABLE `settings_vars_variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `approvals_ibfk_1` FOREIGN KEY (`status`) REFERENCES `settings_vars_variables` (`id`),
  ADD CONSTRAINT `approvals_ibfk_2` FOREIGN KEY (`actioned_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `meals_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `settings_vars_variables` (`id`);

--
-- Constraints for table `settings_vars_variables`
--
ALTER TABLE `settings_vars_variables`
  ADD CONSTRAINT `settings_vars_variables_ibfk_1` FOREIGN KEY (`var_id`) REFERENCES `settings_vars` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`city`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `settings_vars_variables` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`location`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
