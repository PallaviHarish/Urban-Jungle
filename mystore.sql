-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 06:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(8, 'Desk Plants'),
(9, 'Floor Plants'),
(10, 'Hanging Plants'),
(11, 'Flowering Plants');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(5, 'Bouquets'),
(6, 'Wall Plants'),
(7, 'Desk Plants'),
(8, 'Hanging Plants'),
(9, 'Garlands');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 1, 1267268978, 3, 1, 'pending'),
(2, 1, 1559135361, 3, 1, 'pending'),
(3, 1, 502587255, 4, 1, 'pending'),
(4, 1, 265595912, 5, 1, 'pending'),
(5, 11, 2141301482, 4, 2, 'pending'),
(6, 11, 2089190725, 5, 1, 'pending'),
(7, 11, 269527789, 1, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(8, 'EPIPREMNUM', 'Fast growing.  Ideal office plant.  Evergreen plant.  Give your plants a boost with fertiliser every month. If you notice that the plant has gone dormant - let it be until next season.', 'green, desk', 0, 8, 'pic1.png', 'pic1.png', 'pic1.png', '79', '2024-03-14 12:25:10', 'true'),
(11, 'CRASSULA', 'This plant is hardwearing and easy-care, so you can create a green home without being a gardening expert.  Decorate your home with plants combined with a plant pot to suit your style.', 'green', 0, 8, 'p2.png', 'p2.png', 'p2.png', '199', '2024-03-14 12:34:06', 'true'),
(12, 'SENECIO', 'This plant is hardwearing and easy-care, so you can create a green home without being a gardening expert.', 'small leaf', 0, 8, 'p3.png', 'p3.png', 'p3.png', '599', '2024-03-14 12:38:11', 'true'),
(13, 'ECHEVERIA', 'Native to Central America.  Suitable for both indoor and outdoor use.Placement Suitable for in- and outdoor use.  Place in a bright and sunny area.', 'cute', 0, 8, 'p4.png', 'p4.png', 'p4.png', '179', '2024-03-14 12:39:28', 'true'),
(14, 'ALOE GASTROLEA', 'Native to South Africa.  Easy care plant.  Slow growing. Minimum temperature 15°C.', 'decoration', 0, 8, 'p5.png', 'p5.png', 'p5.png', '179', '2024-03-14 12:41:13', 'true'),
(15, 'SPATHIPHYLLUM', 'This plant is hardwearing and easy-care, so you can create a green home without being a gardening expert.This plant will dry out if placed too close to a heat source such as a radiator.', 'indoor', 0, 8, 'p6.png', 'p6.png', 'p6.png', '249', '2024-03-14 12:43:32', 'true'),
(16, 'SANSEVIERIA', 'Native to South Africa and Asia.  Easy care plant.  Slow growing.  Ideal office plant.', 'Ideal office plant.', 0, 8, 'p7.png', 'p7.png', 'p7.png', '549', '2024-03-14 12:44:30', 'true'),
(17, 'ZAMIOCULCAS', 'Native to East Africa.  Slow growing.  Easy care plant.  Ideal office plant.  This plant is sensitive to over watering. This may be the cause if the leaves start to turn yellow.', 'Slow growing, Easy care plant.  Ideal office plant.', 0, 8, 'p8.png', 'p8.png', 'p8.png', '349', '2024-03-14 12:45:46', 'true'),
(18, 'FICUS ELASTICA', 'Native to Asia.  Easy care plant.  Ideal office plant.  Slow growing.  This plant is sensitive to temperature changes. This may be the cause if the leaves start to fall off.  This plant is sensitive to over and under watering. This may be the cause if the', 'green, cute', 0, 8, 'p9.png', 'p9.png', 'p9.png', '299', '2024-03-14 12:50:42', 'true'),
(19, 'DYPSIS LUTESCENS', 'Native to Madagascar.  Ideal office plant.  Sensitive to draught.This plant humidifies air and suits offices or homes with dry air. It’s sometimes called a butterfly palm due to the shape of the leaves and can boost your well-being and make the room more ', 'Potted plant, Areca palm,', 0, 9, 'ps1.png', 'ps1.png', 'ps1.png', '649', '2024-03-14 12:55:43', 'true'),
(20, 'SCHEFFLERA ARBORICOLA', 'Plants are perfect roommates – they help to create a homely feel and can lift your well-being by reducing stress. And they’re also all quiet when it’s time to go to sleep.Native to China.  Easy care plant.  Evergreen plant.', 'green, plant', 0, 9, 'ps2.png', 'ps2.png', 'ps2.png', '549', '2024-03-14 12:57:51', 'true'),
(21, 'CODIAEUM', 'Native to Indonesia, Polynesia and Malaysia.  Sensitive to draught.  This plant will dry out if placed too close to a heat source such as a radiator.  Easy care plant.', 'medium', 0, 9, 'ps3.png', 'ps3.png', 'ps3.png', '249', '2024-03-14 12:59:44', 'true'),
(22, 'ANTHURIUM', 'Native to Colombia.  Slow growing. Diameter of plant pot: 15 cm (6 \")  Height of plant: 32 cm (12 ½ \")', 'Flower', 0, 11, 'pl1.png', 'pl1.png', 'pl1.png', '449', '2024-03-14 13:02:31', 'true'),
(23, 'Chrysanthemums yellow', 'This plant is hardwearing and easy-care, so you can create a green home without being a gardening expert.', 'easy care', 0, 11, 'pl2.png', 'pl2.png', 'pl2.png', '149', '2024-03-14 13:03:30', 'true'),
(24, 'SMYCKA', 'This winding plant is primarily made from recycled plastic, but looks so real you can almost smell it. Hang it inside or outside, or use to spruce up your table setting.', 'plastic', 9, 0, 'a1.png', 'a1.png', 'a1.png', '99', '2024-03-14 13:06:02', 'true'),
(25, 'Artificial garland, multicolour', 'A colourful and decorative garland designed by Diana Ordoñez. Perfect to hang on a light chain to create a cosy atmosphere with flowers and leaves – on the balcony or in the living room.', 'colorful', 9, 0, 'a2.png', 'a2.png', 'a2.png', '699', '2024-03-14 13:07:11', 'true'),
(26, 'Dahlia', 'This bouquet, which is made with mostly recycled plastic, has a lovely mix of different flowers that you can enjoy for a long time. Decorative to have on a shelf or on your set dining table.', 'outdoor, indoor', 5, 0, 'b1.png', 'b1.png', 'b1.png', '999', '2024-03-14 13:17:29', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 1, 100, 1489664631, 1, '2024-03-03 11:07:14', 'pending'),
(2, 1, 100, 1267268978, 1, '2024-03-03 11:10:55', 'pending'),
(3, 1, 100, 1559135361, 1, '2024-03-03 11:13:05', 'pending'),
(4, 1, 500, 502587255, 1, '2024-03-03 12:49:05', 'pending'),
(5, 1, 300, 265595912, 1, '2024-03-03 12:50:50', 'pending'),
(6, 11, 1000, 2141301482, 1, '2024-03-04 06:00:02', 'pending'),
(7, 11, 650, 2089190725, 2, '2024-03-12 12:44:54', 'pending'),
(8, 11, 350, 269527789, 1, '2024-03-14 10:25:12', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(3, 'hari', 'hari@gmail.com', '$2y$10$F1ueauYQXomIY.zJ/CD2fesbtT8/cWwsCm37uDz9XxJ712XTVSG3e', 'Nisha.png', '127.0.0.1', 'hri', '123423'),
(4, 'pals12', 'p12@gmail.com', '$2y$10$eTPpJ4fCI3yi1U4ZQ.QvEeeQNKJJruQQrevSIgzm393mCB7veqQK2', 'Nisha.png', '127.0.0.1', '1234', '1234'),
(5, 'pals123', 'rere@gmail.com', '$2y$10$TD.M32YJACos86.EqpiTbOo6k80xWwudlxltHgtGgHnslrrfLOZoi', 'Nisha.png', '127.0.0.1', '1234', '1234'),
(6, 'rari', 'rari@gm.com', '$2y$10$dj0P08qgDssMiM3M/uOab.O7GVygCJONKwRAGLzApi..PJh5qWU.6', 'Nisha.png', '127.0.0.1', 'rari', '12345'),
(7, 'gege', 'g@gmail.com', '$2y$10$8lCLCFxoMg6N6zBOh..x5.6l0AW9/P3.8BpMKqHG4gPdFlLlXIbnG', 'Nisha.png', '127.0.0.1', 'gege', 'gege'),
(8, 'pals1245', 'gashgd@gmail.com', '$2y$10$3pThePAL2UukBz1eQB9ymu69aZfTJRxkngHexgVta3/wTPGRPVXYq', 'Nisha.png', '127.0.0.1', '12345', '12334'),
(9, 'hel', 'hel@gm.com', '$2y$10$IAUDx6mZYWWd6GtbmX8Sc.nz2g7j/UVkYlUHPOfjKCEB0mylj5O2a', 'Nisha.png', '127.0.0.1', '123', '123'),
(10, 'pallavi', 'p1@gmail.com', '$2y$10$TEg4lYFtMpVruiPJjsV9PeZXlxKaDEIu.ubr87XLoo3YH.wxQMG3C', 'plant.jpg', '127.0.0.1', 'pallavi', '1234567891'),
(11, 'db1', 'db@gmail.com', '$2y$10$qoGQsgDhldlZh7Na12MZPeg6jpSU1LbAjdj5CxxkADn70mPP8Kr8e', 'Nisha.png', '::1', 'db1', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
