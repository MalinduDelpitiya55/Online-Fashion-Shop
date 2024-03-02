-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 02:57 PM
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
-- Database: `ceylonstyle_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `cartID` int(15) NOT NULL,
  `id` int(15) NOT NULL,
  `producID` int(15) NOT NULL,
  `size` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`cartID`, `id`, `producID`, `size`, `qty`) VALUES
(26, 10, 13, 'l', 2),
(27, 10, 6, 'xl', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `oderID` int(15) NOT NULL,
  `id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(32) NOT NULL,
  `district` varchar(50) NOT NULL,
  `post` int(5) NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `cardname` varchar(15) NOT NULL,
  `cardnumber` int(16) NOT NULL,
  `expmonth` int(10) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oderID`, `id`, `fname`, `lname`, `email`, `tele`, `address`, `city`, `district`, `post`, `ctype`, `cardname`, `cardnumber`, `expmonth`, `cvv`) VALUES
(19, 10, 'abc', 'def', 'abc@gmail.com', 123456780, 'tangalle road, colombo.', 'matara', 'Ampara', 225, 'mastercard', 'abc def', 2147483647, 12, 123),
(20, 9, 'abc', 'def', 'abc@gmail.com', 123456780, 'tangalle road, colombo.', 'matara', 'Ampara', 225, 'visa', 'abc def', 2147483647, 12, 324);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `producID` int(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image1` varchar(150) NOT NULL,
  `image2` varchar(150) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `mainCatagory` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `subCatagory` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT 'Machine wash cold, color may transfer Wash separately Do not bleach Low iron Tumble dry or flat ',
  `meterialDetails` varchar(100) DEFAULT '95% POLYESTER 5% SPANDEX'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`producID`, `title`, `price`, `image1`, `image2`, `image3`, `mainCatagory`, `catagory`, `subCatagory`, `description`, `meterialDetails`) VALUES
(2, 'Odel Solid Crew Neck T-shirt', 3990.00, 'T-shirt15.jpeg', 'T-shirt14.jpeg', 'T-shirt13.jpeg', 'men', 'mens casualwear', 't shirts & polos', 'Machine wash cold, color may transfer\nWash separately\nDo not bleach\nLow iron\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(5, 'Biconic Green Cowl Neck Off Shoulder Side Ruched Slit Dress', 4990.00, 'Dresses07.jpg', 'Dresses08.jpg', 'Dresses09.jpg', 'women', 'womens casualwear', 'dresses', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat ', '95% POLYESTER 5% SPANDEX'),
(6, 'Biconic Purple Floral Front Gathered Ruffled Top', 2990.00, '16.jpeg', '17.jpeg', '18.jpeg', 'women', 'womens casualwear', 'tops & t shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(7, 'Biconic Black Crop Graphic Tee', 2290.00, '19.jpeg', '20.jpeg', '21.jpeg', 'women', 'womens casualwear', 'tops & t shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(8, 'Biconic Multi Sweetheart Neckline Peplum Top', 2750.00, '22.jpeg', '23.jpeg', '24.jpeg', 'women', 'womens casualwear', 'tops & t shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(9, 'Biconic Pink Aop Floral Tie Up Shirt', 3290.00, '25.jpeg', '26.jpeg', '27.jpeg', 'women', 'womens casualwear', 'shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(10, 'Giordano 0534300902 Women\'S Acute Collar Long Sleeves Comfort Fit Shirt', 5750.00, '28.jpeg', '29.jpeg', '30.jpeg', 'women', 'womens casualwear', 'shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(11, 'Odel Basics Red Knee Length Regular Fitted Skirt', 3490.00, '31.jpeg', '32.jpeg', '33.jpeg', 'women', 'womens casualwear', 'skirts & shorts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(12, 'Wyos Printed T-Shirt', 2750.00, 'T-shirt07.jpg', 'T-shirt08.jpg', 'T-shirt09.jpg', 'men', 'mens casualwear', 't shirts & polos', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(13, 'Odel Printed T-shirt', 4300.00, 'T-shirt01.jpg', 'T-shirt02.jpg', 'T-shirt03.jpg', 'men', 'mens casualwear', 't shirts & polos', '', ''),
(14, 'Wyos Printed Hooded Skinny', 2190.00, '34.jpeg', '35.jpeg', '36.jpeg', 'men', 'mens casualwear', 'skinnies & tank tops', '', ''),
(15, 'Wyos Printed Skinny', 3490.00, '37.jpeg', '38.jpeg', '39.jpeg', 'men', 'mens casualwear', 'skinnies & tank tops', '', ''),
(16, 'Calvin Klein Men\'s Beige Denim Shirt', 5400.00, '40.jpeg', '41.jpeg', '42.jpeg', 'men', 'mens casualwear', 'shirts', '', ''),
(17, 'Wyos Printed Slim Fit Shirt', 4790.00, '43.jpeg', '44.jpeg', '45.jpeg', 'men', 'mens casualwear', 'shirts', '', ''),
(18, 'Wyos Printed Slim Fit Shirt', 5790.00, '46.jpeg', '47.jpeg', '48.jpeg', 'men', 'mens casualwear', 'shirts', '', ''),
(19, 'Wyos Denim Shorts', 3750.00, '49.jpeg', '50.jpeg', '51.jpeg', 'men', 'mens casualwear', 'shorts', '', ''),
(20, 'Levi\'S 551 Z Men Mid Rise Black Jeans', 6990.00, '52.jpeg', '53.jpeg', '54.jpeg', 'men', 'mens casualwear', 'bottoms', '', ''),
(21, 'Levi\'s 517 Boot Cut Black Mens Jean', 6290.00, '55.jpeg', '56.jpeg', '57.jpeg', 'men', 'mens casualwear', 'bottoms', '', ''),
(22, 'Hemago Leather Belt', 6490.00, '58.jpeg', '59.jpeg', '60.jpeg', 'men', 'mens-accessories', 'belts', '', ''),
(23, 'Hemago Leather Belt', 6500.00, '61.jpeg', '62.jpeg', '63.jpeg', 'men', 'mens-accessories', 'belts', '', ''),
(24, 'LACOSTE L.12.12 Blanc Eau de Toilette', 12800.00, '64.jpeg', '64.jpeg', '64.jpeg', 'men', 'men\'s grooming', 'fragrances', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchasedetails`
--

CREATE TABLE `purchasedetails` (
  `puechaseid` int(11) NOT NULL,
  `oderID` int(15) NOT NULL,
  `producID` int(15) NOT NULL,
  `size` varchar(15) NOT NULL,
  `id` int(15) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchasedetails`
--

INSERT INTO `purchasedetails` (`puechaseid`, `oderID`, `producID`, `size`, `id`, `date`) VALUES
(20, 19, 21, 'm', 10, '2024-02-01 17:55:50'),
(21, 19, 15, 'xxl', 10, '2024-02-01 17:55:50'),
(22, 20, 22, 'xl', 9, '2024-02-01 18:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(15) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(250) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `userEmail`, `userPassword`, `fullName`, `birthday`, `gender`, `phoneNumber`, `address`, `role`) VALUES
(8, 'malindu', 'abc@gmail.com', '$2y$10$9j.IpMUD91iuoc1jXm.xYu71dLW9s5kN4ZufeKUuUo/UqiXwuFuYq', '', '', '', 0, '', 'admin'),
(9, 'Delpitiya', 'abcd@gmail.com', '$2y$10$W2wuNFNCCSmTsGxl00un.OIjOLOFKy3Ugr/3QQaD2ZmO/QLQgJ7y.', '', '', '', 0, '', 'customer'),
(10, 'akash', 'akash@gmail.com', '$2y$10$bqQdgtxGQgDNfLb7yTXRaOjyauU9tpYyT5MhuxxvXbG7RPGohFURe', 'akash hirumal', '2024-02-15', 'Male', 123456780, 'tangalle road, colombo.', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `productIDconstrain` (`producID`),
  ADD KEY `userIDconstrain` (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`oderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`producID`);

--
-- Indexes for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  ADD PRIMARY KEY (`puechaseid`),
  ADD KEY `order` (`oderID`),
  ADD KEY `product` (`producID`),
  ADD KEY `user` (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `cartID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `oderID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `producID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  MODIFY `puechaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD CONSTRAINT `productIDconstrain` FOREIGN KEY (`producID`) REFERENCES `products` (`producID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userIDconstrain` FOREIGN KEY (`id`) REFERENCES `userlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
