-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2024 at 10:12 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shorestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `firstname`, `lastname`, `companyname`, `Phone`, `Email`, `Address`, `CreatedDate`) VALUES
(1, 'KONG', 'SOTHA', 'KK', '011121314', 'ksotha@gmail.com', 'PP', '2024-10-21 03:32:40'),
(2, 'Im', 'Dalin', 'Dalin', '012223344', 'dalin@gmail.com', 'TAKEO', '2024-10-21 03:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `OrderId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `OrderDate` datetime DEFAULT NULL,
  `TotalAmount` double DEFAULT NULL,
  `Status` char(1) DEFAULT NULL,
  `customerId` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`OrderId`),
  KEY `customerId` (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

DROP TABLE IF EXISTS `orderitem`;
CREATE TABLE IF NOT EXISTS `orderitem` (
  `OrderItemId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Quantity` int DEFAULT NULL,
  `SubTotal` double DEFAULT NULL,
  `ProductId` int UNSIGNED DEFAULT NULL,
  `OrderId` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`OrderItemId`),
  KEY `OrderId` (`OrderId`),
  KEY `ProductId` (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `paymentId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `paymentMethod` varchar(255) DEFAULT NULL,
  `Amount` double DEFAULT NULL,
  `paymentDate` datetime DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `OrderId` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`paymentId`),
  KEY `OrderId` (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Product_Code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Product_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Product_Type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Product_Brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Product_price` decimal(10,2) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Product_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `Product_Code`, `Product_Name`, `Product_Type`, `Product_Brand`, `Product_price`, `Description`, `Product_photo`) VALUES
(12, 'P-1729486981', 'PUMA', 'Shoes', 'PUMA', 50.00, 'សម្រាប់អ្នកលេងកីឡា', '2c4647af7964052309803e9c4dee684b.jpg'),
(14, 'P-1729487025', 'adidas', 'Shoes', 'Adidas', 80.00, 'សម្រាប់អ្នកលេងកីឡា', '0763d8979c4246c4593ff72d4852d892.jpg'),
(16, 'P-1729487201', 'adidas', 'Shoes', 'Adidas', 50.00, 'សម្រាប់អ្នកលេងកីឡា', '4526eb80faacd9e4c8f77b8db7ecf69e.jpg'),
(17, 'P-1729487427', 'adidas', 'Shoes', 'Adidas', 100.00, 'សម្រាប់អ្នកលេងកីឡា', 'cd7d56a0e2139be55e39080debb9f78e.jpg'),
(19, 'P-1729487465', 'adidas', 'Shoes', 'Adidas', 50.00, 'សម្រាប់អ្នកលេងកីឡា', 'b8cdc07f9ae7e5f126b0640340720a5b.jpg'),
(20, 'P-1729487498', 'adidas', 'Shoes', 'Adidas', 50.00, 'សម្រាប់អ្នកលេងកីឡា', '34f931f8e88b634a3361e224c901b2e2.jpg'),
(22, 'P-1729487721', 'adidas', 'Shoes', 'Adidas', 100.00, 'សម្រាប់អ្នកលេងកីឡា', 'a7ca3083b6b2ff54c04956b7472915fb.jpg'),
(24, 'P-1729487838', 'adidas', 'Shoes', 'Adidas', 70.00, 'សម្រាប់អ្នកលេងកីឡា', 'p8.jpg'),
(25, 'P-1729489025', 'PUMA', 'SHOES', 'PUMA', 80.00, 'សម្រាប់អ្នកលេងកីឡា', '2fd770150abddfab356e80c615363b21.jpg'),
(26, 'P-1729489829', 'PUMA', 'SHOES', 'PUMA', 80.00, 'សម្រាប់អ្នកលេងកីឡា', 'b38910dc01198ab67b903a23a5c7c90a.jpg'),
(27, 'P-1729495598', 'NIKE', 'Shoes', 'NIKE', 65.00, 'សម្រាប់អ្នកលេងកីឡា', '55f81ad82a442c8dd918251d6eb5f981.jpg'),
(28, 'P-1729500038', 'PETRO', 'Shoes', 'PETRO', 45.00, 'សម្រាប់អ្នកលេងកីឡា', '468912d1942bc4e14f708d74c6ed9535.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `Role_Id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`UserId`),
  KEY `Role_Id` (`Role_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `password`, `firstname`, `Lastname`, `status`, `createdDate`, `Role_Id`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'BY', 'KIMHY', '1', '2024-10-21 02:52:13', 1),
(4, 'kimhy', '827ccb0eea8a706c4c34a16891f84e7b', 'BY', 'KIMHY', '1', '2024-10-21 02:52:58', 2),
(6, 'Manager', '827ccb0eea8a706c4c34a16891f84e7b', 'IM', 'Dalin', '1', '2024-10-21 05:15:16', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `Role_Id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Role_Name` varchar(255) NOT NULL,
  `Created_date` date NOT NULL,
  PRIMARY KEY (`Role_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`Role_Id`, `Role_Name`, `Created_date`) VALUES
(1, 'admin', '2024-10-21'),
(2, 'Manager', '2024-10-21'),
(3, 'HR', '2024-10-21');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`CustomerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `user_role` (`Role_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
