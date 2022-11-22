-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 01:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashgrill`
--

-- --------------------------------------------------------

CREATE TABLE `Categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  

CREATE TABLE `service` (
  `s_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `service_image` varchar(100) NOT NULL
) 


CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
   `appointment_date` date NOT NULL
  `appointment_day` varchar(80) NOT NULL,
   `appointment_time` time NOT NULL
)


CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(12) NOT NULL,
  `businessname` varchar(100) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `user_role` int(11) NOT NULL
) 
-- --------------------------------------------------------

CREATE TABLE `book` (
   `book_id` int(11) NOT NULL
   `appointment_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `optional_name` int(11) NOT NULL,
   `optional_email` varchar(80) NOT NULL
) 


-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `Order_id` varchar(50) NOT NULL,
  `Currency` varchar(50) NOT NULL,
  `payment_date` date NOT NULL
) 


CREATE TABLE `booked_slots` (
  `booked_slot_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `Order_id` varchar(50) NOT NULL,
  `Currency` varchar(50) NOT NULL,
  `payment_date` date NOT NULL
)

CREATE TABLE `bookeddetails` (
  `booked_slot_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `orders`
--
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
)






--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `service`, `time`, `price`, `service_image`) VALUES
(5, 'Food', 1, 50, 'cropped-pancakes-scaled-1669076169.jpg');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
