-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 06:20 AM
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
(1, 'Biconic Maroon Sleeveless Neck Tie Up Front Cut Out Dress', 4490.00, 'dresses000.jpeg', 'dresses00.jpeg', 'dresses0.jpeg', 'women', 'womens casualwear', 'dresses', 'Machine wash cold, color may transfer\nWash separately\nDo not bleach\nLow iron\nTumble dry or flat ', '95% POLYESTER 5% SPANDEX'),
(2, 'Odel Solid Crew Neck T-shirt', 3990.00, 'T-shirt15.jpeg', 'T-shirt14.jpeg', 'T-shirt13.jpeg', 'men', 'mens casualwear', 't shirts & polos', 'Machine wash cold, color may transfer\nWash separately\nDo not bleach\nLow iron\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(4, 'Biconic Yellow Front Cut Out Midi Dress', 6990.00, 'Dresses01.jpg', 'Dresses02.jpg', 'Dresses03.jpg', 'women', 'womens casualwear', 'dresses', 'Machine wash cold, color may transfer\nWash separately\nDo not bleach\nLow iron\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(5, 'Biconic Green Cowl Neck Off Shoulder Side Ruched Slit Dress', 4990.00, 'Dresses07.jpg', 'Dresses08.jpg', 'Dresses09.jpg', 'women', 'womens casualwear', 'dresses', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat ', '95% POLYESTER 5% SPANDEX'),
(6, 'Biconic Purple Floral Front Gathered Ruffled Top', 2990.00, '16.jpeg', '17.jpeg', '18.jpeg', 'women', 'womens casualwear', 'tops & t shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(7, 'Biconic Black Crop Graphic Tee', 2290.00, '19.jpeg', '20.jpeg', '21.jpeg', 'women', 'womens casualwear', 'tops & t shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat ', '95% COTTON 5% SPANDEX'),
(8, 'Biconic Multi Sweetheart Neckline Peplum Top', 2750.00, '22.jpeg', '23.jpeg', '24.jpeg', 'women', 'womens casualwear', 'tops & t shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(9, 'Biconic Pink Aop Floral Tie Up Shirt', 3290.00, '25.jpeg', '26.jpeg', '27.jpeg', 'women', 'womens casualwear', 'shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(10, 'Giordano 0534300902 Women\'S Acute Collar Long Sleeves Comfort Fit Shirt', 5750.00, '28.jpeg', '29.jpeg', '30.jpeg', 'women', 'womens casualwear', 'shirts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(11, 'Odel Basics Red Knee Length Regular Fitted Skirt', 3490.00, '31.jpeg', '32.jpeg', '33.jpeg', 'women', 'womens casualwear', 'skirts & shorts', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(12, 'Wyos Printed T-Shirt', 2750.00, 'T-shirt07.jpg', 'T-shirt08.jpg', 'T-shirt09.jpg', 'men', 'mens casualwear', 't shirts & polos', 'Machine wash cold, color may transfer\r\nWash separately\r\nDo not bleach\r\nLow iron\r\nTumble dry or flat', '95% COTTON 5% SPANDEX'),
(13, 'Odel Printed T-shirt', 4.00, 'T-shirt01.jpg', 'T-shirt02.jpg', 'T-shirt03.jpg', 'men', 'mens casualwear', 't shirts & polos', '', ''),
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
(24, 'LACOSTE L.12.12 Blanc Eau de Toilette', 12800.00, '64.jpeg', '64.jpeg', '64.jpeg', 'men', 'men\'s grooming', 'fragrances', '', ''),
(25, 'Calvin Klein Everyone EDP', 18500.00, '65.jpeg', '66.jpeg', '67.jpeg', 'men', 'men\'s grooming', 'fragrances', '', '');

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
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `userEmail`, `userPassword`, `fullName`, `birthday`, `gender`, `phoneNumber`, `address`) VALUES
(1, 'malindu', 'mdelpitiya234@gmail.com', '$2y$10$RqFNn.QbuvlpPTXgb3664OxqSp8Zo1HqcYZQ2sUnnQ264K/.NugyK', 'Malindu Delpitiya', '2024-01-06', 'Male', 769876543, 'no26,galle road, colombo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`producID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `producID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
