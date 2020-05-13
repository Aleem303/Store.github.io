-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 11:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Cars'),
(2, 'Bikes'),
(3, 'Mobiles'),
(4, 'Laptops'),
(5, 'Furnitures'),
(6, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `picture_file_name` varchar(100) NOT NULL,
  `is_main_picture` tinyint(4) NOT NULL,
  `hover` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `product_id`, `picture_file_name`, `is_main_picture`, `hover`) VALUES
(5, 2, 'images/reborn1.jpg', 1, NULL),
(6, 2, 'images/reborn2.jpg', 0, 0),
(7, 2, 'images/reborn3.jpg', 0, 2),
(8, 2, 'images/reborn4.jpg', 0, NULL),
(9, 3, 'images/hbike1.jpg', 1, NULL),
(10, 3, 'images/hbike2.jpg', 0, 2),
(11, 3, 'images/hbike3.jpg', 0, NULL),
(12, 3, 'images/hbike4.jpg', 0, NULL),
(13, 4, 'images/caltus1.jpg', 0, NULL),
(14, 4, 'images/caltus2.jpg', 1, NULL),
(16, 4, 'images/caltus3.jpg', 0, 2),
(17, 4, 'images/caltus4.jpg', 0, NULL),
(18, 5, 'images/vigo1.jpg', 1, NULL),
(19, 5, 'images/vigo2.jpg', 0, 2),
(20, 5, 'images/vigo3.jpg', 0, NULL),
(21, 5, 'images/vigo4.jpg', 0, NULL),
(22, 6, 'images/hp1.jpg', 1, NULL),
(23, 6, 'images/hp2.jpg', 0, 0),
(24, 6, 'images/hp3.jpg', 0, 2),
(25, 6, 'images/hp4.jpg', 0, NULL),
(26, 7, 'images/hp1.jpg', 0, 0),
(27, 7, 'images/hp2.jpg', 0, 2),
(28, 7, 'images/hp3.jpg', 1, 0),
(29, 7, 'images/hp4.jpg', 0, 0),
(30, 8, 'images/macbook1.jpg', 0, 0),
(31, 8, 'images/macbook2.jpg', 1, NULL),
(32, 8, 'images/macbook3.jpg', 0, 2),
(33, 8, 'images/macbook4.jpg', 0, NULL),
(37, 9, 'images/huawei1.jpg', 0, NULL),
(38, 9, 'images/huawei2.jpg', 0, NULL),
(39, 9, 'images/huawei3.jpg', 0, 2),
(40, 9, 'images/huawei4.jpg', 1, NULL),
(41, 10, 'images/samsung1.jpg', 1, NULL),
(42, 10, 'images/samsung2.jpg', 0, 2),
(43, 10, 'images/samsung3.jpg', 0, NULL),
(44, 10, 'images/samsung4.jpg', 0, NULL),
(45, 11, 'images/samedge1.jpg', 0, NULL),
(46, 11, 'images/samedge2.jpg', 0, 2),
(47, 11, 'images/samedge3.jpg', 0, NULL),
(48, 11, 'images/samedge4.jpg', 1, NULL),
(49, 12, 'images/gaming_chair1.jpg', 1, NULL),
(50, 12, 'images/gaming_chair2.jpg', 0, 2),
(51, 12, 'images/gaming_chair3.jpg', 0, NULL),
(52, 12, 'images/gaming_chair4.jpg', 0, NULL),
(53, 13, 'images/table1.jpg', 1, NULL),
(54, 13, 'images/table2.jpg', 0, NULL),
(55, 13, 'images/table3.jpg', 0, 2),
(56, 13, 'images/table4.jpg', 0, NULL),
(57, 14, 'images/gaming_chair1.jpg', 0, NULL),
(58, 14, 'images/gaming_chair2.jpg', 0, 2),
(59, 14, 'images/gaming_chair3.jpg', 0, NULL),
(60, 14, 'images/gaming_chair4.jpg', 1, NULL),
(61, 15, 'images/H125_1.jpg', 0, NULL),
(62, 15, 'images/H125_2.jpg', 0, NULL),
(63, 15, 'images/H125_3.jpg', 1, NULL),
(64, 15, 'images/H125_4.jpg', 0, 2),
(65, 16, 'images/YBR1.jpg', 0, NULL),
(66, 16, 'images/YBR3.jpg', 1, NULL),
(67, 16, 'images/YBR2.jpg', 0, 2),
(68, 16, 'images/YBR4.jpg', 0, NULL),
(69, 17, 'images/H70_1.jpg', 0, NULL),
(70, 17, 'images/H70_2.jpg', 0, 2),
(71, 17, 'images/H70_3.jpg', 0, NULL),
(72, 17, 'images/H70_4.jpg', 1, NULL),
(73, 18, 'images/H100_1.jpg', 0, NULL),
(74, 18, 'images/H100_2.jpg', 0, 2),
(75, 18, 'images/H100_3.jpg', 0, NULL),
(76, 18, 'images/H100_4.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` longtext NOT NULL,
  `date_added` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `date_added`, `status`, `user_id`, `category_id`) VALUES
(2, 'Honda Reborn', 700000, 'Good condition full genuine spare parts', '2020-02-17 03:23:29', 1, 2, 1),
(3, 'Heavy Bike', 185000, 'Good condition full genuine spare parts.', '2020-02-17 03:23:29', 1, 8, 2),
(4, 'Suzuki Caltus 2', 600000, 'Good condition full genuine spare parts', '2020-02-17 03:23:29', 1, 2, 1),
(5, 'Toyota Vigo', 2700000, 'Good condition full genuine spare parts', '2020-02-17 03:23:29', 1, 2, 1),
(6, 'HP slim ulltrabook', 58000, '\"Hp Slim Ultrabooks in A Plus Grades\r\n\r\ni7 6th Generations With 8gb DDR4 Rams / 256Gb ', '2020-02-17 03:23:29', 1, 4, 4),
(7, 'HP M3800', 7000, 'HP M3800.\r\n\r\nNew condition.', '2020-02-17 03:23:29', 0, 4, 4),
(8, 'MACBOOK PRO 2015', 105000, 'Its brand new condtion from uk with orignal charger ', '2020-02-17 03:23:29', 0, 4, 4),
(9, 'Huawei P30 Lite, Black', 32000, 'Huawei P30 Lite\r\n\r\nBlack Colour\r\n', '2020-02-17 03:23:29', 1, 6, 3),
(10, 'Samsung s6', 12000, 'Urgent sale 3/32 ha single sim bilkul ok set ha urgent sale', '2020-02-17 03:23:29', 1, 6, 3),
(11, 'Samsung 8 edge plus', 16000, 'Set charger or glass break hy baki set ok plz contact me orginal bayers.', '2020-02-17 03:23:29', 1, 6, 3),
(12, 'Gaming Chair', 20000, 'Gaming Chair\r\n\r\n\r\n', '2020-02-17 03:23:29', 1, 7, 5),
(13, 'Centre table for lounge', 16000, 'I just had it polished.\r\n\r\nThe table is of excellent wood quality and I am just selling it off \r\n\r\n', '2020-02-17 03:23:29', 1, 7, 5),
(14, 'SMART CHAIRS', 6000, 'IMPORTER AND MANUFACTURER\r\n\r\n', '2020-02-17 03:23:29', 1, 7, 5),
(15, 'Honda 125', 85000, 'Good condition full genuine spare parts.', '2020-02-17 03:23:29', 0, 8, 2),
(17, 'Honda 70', 55000, 'Good condition full genuine spare parts.', '2020-02-17 03:23:29', 0, 8, 2),
(18, 'Honda 100', 35000, 'Good condition full genuine spare parts.', '2020-02-17 03:23:29', 0, 8, 2),
(33, 'test', 2121, 'sample text................', '2020-02-17 03:23:29', 1, 6, 1),
(39, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 1, 6, 1),
(40, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 1, 6, 1),
(42, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 1, 6, 1),
(44, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 0, 6, 1),
(45, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 1, 6, 1),
(46, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 0, 6, 1),
(47, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 0, 6, 1),
(48, 'test', 1212, 'sample text.....', '2020-02-17 03:23:29', 0, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(45) NOT NULL,
  `shop_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `type`, `shop_title`) VALUES
(1, 'Ali', 'ali@gmail.com', 'ali', 'Model Town Lahore', 'admin', ''),
(2, 'Zia', 'zia@gmail.com', 'zia', 'Faisal town lahore', 'seller', 'Zia Associates'),
(3, 'Hassan', 'shahg@gmail.com', 'hassan', 'Johar Town Lahore', 'buyer', ''),
(4, 'Qasim', 'qasim@gmail.com', 'qasim', 'Jehlem', 'seller', 'Qasim Associates'),
(5, 'Irfan', 'irfan@gmail.com', 'irfan', 'D.I Khan', 'buyer', ''),
(6, 'Kashif', 'kashif@gmail.com', 'kashif', 'lahore', 'seller', 'Kashif Associates'),
(7, 'Aleem', 'ualeem303@gmail.com', 'aleem', 'Rawalpindi', 'seller', 'Aleem Associates'),
(8, 'Arshad', 'arshad@gmail.com', 'arshad', 'Multan', 'seller', 'Arshad Associates'),
(50, 'Asif Shahzad', 'asifsh7@gmail.com', 'abc123', 'Model Town', 'seller', 'Al Hakeem Entr.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
