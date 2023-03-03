-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2020 at 04:43 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile-shoppee`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'One Plus 7T', '35999'),
(2, 'One Plus 7T Pro', '47999'),
(3, 'iPhone XS-Max', '99999'),
(4, 'iPhone XR', '53999'),
(5, 'iphone 8', '41999'),
(6, 'Redmi K20 Pro', '29999'),
(7, 'Redmi Note 8', '9999'),
(8, 'iPhone 7', '29999'),
(9, 'Samsung Galaxy A51', '25250'),
(10, 'Samsung Galaxy S9', '30999'),
(11, 'Samsung Galaxy S10 Plus', '129999'),
(12, 'Samsung Galaxy S20 Ultra', '97999');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'sujata kumari', 'sujata12@gmail.com', '73f5ec963b6a13db7f60f0e41a1404b7', '9145627845', 'Dhanbad', 'katrasgarh,dhanbad'),
(2, 'niraj kumar', 'niraj23@gmail.com', 'c07f9dce63be42e5595b19217e9b9d06', '9178456984', 'Dhanbad', 'Bank more,dhanbad'),
(3, 'dhiraj kumar', 'dhiraj34@gmail.com', '87f8b6b0ca04c307d23ae398de39eded', '9145858799', 'Bokaro', 'Sector-4,bokaro'),
(4, 'swati kumari', 'swati45@gmail.com', '3b391fc0edff6b1f8ce7f8652c2ab24c', '9145786595', 'Bokaro', 'sector-6,bokaro'),
(5, 'ayushi kumari', 'ayushi56@gmail.com', '4772b13659589da2284e6fef5755bc87', '9178458745', 'Bokaro', 'Sector-4,bokaro'),
(6, 'abhishek kumar', 'abhishek67@gmail.com', '51351eeb8858e05749c1f00e2044271d', '9145786547', 'Dhanbad', 'Bank more,dhanbad');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 1, 2, 'Confirmed'),
(2, 2, 3, 'Confirmed'),
(3, 2, 4, 'Confirmed'),
(4, 3, 4, 'Confirmed'),
(5, 3, 2, 'Confirmed'),
(6, 3, 4, 'Confirmed'),
(7, 3, 6, 'Confirmed'),
(11, 4, 3, 'Confirmed'),
(12, 4, 6, 'Confirmed'),
(13, 5, 7, 'Confirmed'),
(14, 6, 2, 'Confirmed'),
(15, 6, 4, 'Confirmed'),
(16, 1, 2, 'Added To Cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
