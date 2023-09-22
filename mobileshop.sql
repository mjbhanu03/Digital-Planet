-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 03:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `u_id`, `p_id`, `quantity`) VALUES
(5, 4, 25, 1),
(6, 4, 27, 1),
(7, 4, 36, 1),
(22, 9, 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cg_id` int(11) NOT NULL,
  `cg_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cg_id`, `cg_name`) VALUES
(1, 'iPhone'),
(2, 'Smart Watch'),
(4, 'Sunglassess'),
(5, 'Wrist Watch'),
(6, 'Mobile Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `u_id`, `p_id`, `quantity`) VALUES
(1, 5, 27, 1),
(2, 5, 28, 2),
(3, 5, 36, 1),
(4, 5, 35, 1),
(5, 5, 34, 3),
(6, 10, 25, 1),
(7, 10, 25, 1),
(8, 10, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `cg_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` varchar(300) NOT NULL,
  `p_price` int(20) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cg_id`, `p_name`, `p_desc`, `p_price`, `p_image`) VALUES
(24, 1, 'iPhone 12 Pro Max ', 'This is very best iphone please buy this one. And say other to buy this iphone too so we progress more as uch you can think.', 139458, '../../uploaded_images/iphone.avif'),
(25, 6, 'Boat Rockerz 450', 'Playback- It provides a massive battery backup of upto 15 hours for a superior playback time. Drivers- Its 40mm dynamic drivers help pump out immersive HD audio all day long. Charging Time 3 hours Earcushions- It has been ergonomically designed and structured as an on-ear headphone to provide the be', 1349, '../../uploaded_images/headphone.avif'),
(27, 6, '3 in 1 Ambrane Fast Charging Cables', 'Blazing Charging - All combined 3 in 1 cable supports fast charging with the speed 2.1A to all your gadgets including mobiles, tablets, speakers and much more. Ultra Durable - The cable is crafted with braided wire giving you an extra tough braided cable with 10000+ bends lifespan cycle.', 299, '../../uploaded_images/Ambrane 3 in 1 cable.webp'),
(28, 6, 'Syska IEB600 Bluetooth Airbuds', 'Play Back Time- Syska Sonic Buds Offers Non Stop Playback of Upto 50Hrs Playtime Low Latency- Anti-lag technology ensures this true wireless earbuds be your partner in Gaming with the low latency ', 1499, '../../uploaded_images/Syska ieb600.jpg'),
(29, 4, 'Prada Sunglass 17WS', 'Prada fashion sunglasses are the epitome of understated elegance, for cosmopolitan, in vogue men and women, who are seeking exceptional quality and design.', 899, '../../uploaded_images/Prada Sunglass 1.jpg'),
(30, 6, 'ZEBRONICS Zeb-Action 50 Wireless BT v5.0', 'Powerful portable wireless speaker with 16W (8+8) RMS output power and a cool fabric finish. ZEB-ACTION 50 has dual passive radiators for that punchy bass and 2x 52mm drivers for full range audio to cover crisp Trebles and warm vocal output. Provides 8H of backup time at 50% volume, by simply chargi', 999, '../../uploaded_images/Zeb Action 50.jpg'),
(31, 6, 'SYSKA NB072 Neckband', 'Robust Bass Dual Pairing Charging Time up to 2 Hrs Play Time up to 40Hrs (60% Volume) Fast Charging Support. Warranty Summary 6 Months', 1199, '../../uploaded_images/syska nb072 neckband.jpg'),
(32, 5, 'Hublot Black Magic With Steel Belt', 'Its strap in mettalic belt with a gold case and a minimalist black dial, would become the aesthetic signature of Hublot watches. Decades later, it is the standard for high-end sports watches.', 1499, '../../uploaded_images/Hublot Black Magic.jpg'),
(33, 6, 'Minix Voice calling Smart Watch With 15 Days Battery Life', 'FITNESS TRACKING : Minix Voice offers 8 sports modes for a variety of activities. It includes basketball, football, swimming, walking, badminton, skipping, cycling and running. COMPACT DESIGN AND BLUETOOTH CALLING : Featuring an elegant and sophisticated square design. It comes with a sleek and fine', 2999, '../../uploaded_images/minix voice.jpg'),
(34, 6, 'Airpods Pro 2', 'Custom high-excursion Apple driver. Custom high dynamic range amplifier. Active Noise Cancellation. Adaptive Transparency. Vent system for pressure equalization. Personalized Spatial Audio with dynamic head tracking 1 Adaptive EQ.', 1299, '../../uploaded_images/Airpods Pro 2.jpg'),
(35, 6, 'Ambrane Stringz 38', 'Ambrane Stringz 38 offers you high-quality sound experience with deep bass. The unique and improved speakers make sure you enjoy the real audio experience.', 299, '../../uploaded_images/ambrane earphone ep 99.webp'),
(36, 6, 'iWatch Silicon 44mm Belts', 'Belts Valid for 44,45,49mm Dials Size  ', 99, '../../uploaded_images/iWatch Silicon Belts.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_gmail` varchar(50) NOT NULL,
  `u_number` bigint(10) NOT NULL,
  `u_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_username`, `u_password`, `u_gmail`, `u_number`, `u_address`) VALUES
(4, 'Avinash Shiyani  ', '123', 'avi@gmail.com', 2147483647, 'Nr Amber Chowkdi, Very Big BUNGLOW, Opp Anywhere house, Street No.2,12 house No.,Jamnagar-361005'),
(5, 'Mange Jay', '123', 'jay@gmail.com', 2147483647, '203, J J'),
(7, 'apporva ', '256', 'anadi@gmail.com', 7412589630, 'digjam circle , defence colony somewhere hai hagve ajdklasj'),
(8, 'admin ', 'admin@123', 'admin@gmail.com', 7016515225, ' '),
(9, 'Iram Khan', '112233', 'iram347@gmail.com', 124421, 'bygjuyui'),
(10, 'aneeja ', '13', 'aneeja12@gmail.com', 123456789, 'khodiyar colony');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `u_id`, `p_id`) VALUES
(120, 4, 36),
(121, 4, 27),
(122, 4, 25),
(123, 4, 24),
(124, 4, 29),
(125, 4, 30),
(126, 4, 35),
(127, 4, 28),
(130, 9, 27),
(132, 10, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cg_id` (`cg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cg_id`) REFERENCES `categories` (`cg_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
