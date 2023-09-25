-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2023 at 06:01 PM
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
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `zip` int(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `card` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `address`, `state`, `zip`, `phone`, `type`, `card`) VALUES
('Μαρία', 'maria@gmail.com', 'Κασομούλη', 'Athens', 11745, '+302109025525', 'Visa', '1234123412341234'),
('Μαρία', '', '', 'Bulgaria', 12345, '', 'Visa', '1234123412341234'),
('Μαρία', '', '', 'Austria', 12345, '', 'Visa', '1234123412341234'),
('Μαρία', '', '', 'Select a state', 12345, '', 'Visa', '1234123412341234'),
('Μαρία', '', '', 'Bulgaria', 12345, '', 'American Express', '1234123412341234'),
('Μαρία', '', '', 'Select a state', 12345, '', 'American Express', '1234123412341234'),
('Μαρία', '', '', 'Select a state', 12345, '', 'American Express', '1234123412341234'),
('Μαρία', '', '', 'Switzerland', 12345, '', 'American Express', '1234123412341234'),
('Μαρία', '', '', 'Cyprus', 12345, '', 'American Express', '1234123412341234'),
('Μαρία', '', '', 'Select a state', 12345, '', 'American Express', '1234123412341234'),
('Μαρία', '', '', 'Czechia', 12345, '', 'American Express', '1234123412341234'),
('Έλενα', '', '', 'Belgium', 12345, '', 'American Express', '1234123412341234'),
('Maria', 'amor@gmail.com', 'kasomouli', 'Greece', 11745, '+302109025523', 'Visa', '1234123412341234'),
('elena', 'elena@gmail.com', 'Anodou', 'Hungary', 11111, '+302109025525', 'American Express', '1234123412341234'),
('aggelos', 'elena@gmail.com', 'Anodou', 'Select a state', 11111, '+302109025525', 'American Express', '1234123412341234'),
('aggelos', 'elena@gmail.com', 'Anodou', 'Select a state', 11111, '+302109025525', 'American Express', '1234123412341234'),
('aggelos', 'elena@gmail.com', 'Anodou', 'Select a state', 11111, '+302109025525', 'American Express', '1234123412341234'),
('Mariwwwwwwwa', 'maria@gmail.com', 'kaa', 'Ireland', 11111, '+302109025525', 'American Express', '1234123412341234'),
('Maria', 'maria@gmail.com', 'Kasomouli', 'Greece', 11111, '+302109025525', 'Visa', '1234123412341234'),
('Mariwwwwwwwa', 'maria@gmail.com', 'Kasomouli', 'Austria', 11111, '+302109025525', 'Visa', '1234123412341234'),
('Giannhs', 'maria@gmail.com', 'Gian', 'Ireland', 11111, '+302109025525', 'American Express', '1234123412341234'),
('test', 'test1@gmail.com', 'sjjs', 'Greece', 11111, '+302109025525', 'Visa', '1234123412341234'),
('test', 'test1@gmail.com', 'sjjs', 'Greece', 11111, '+302109025525', 'Visa', '1234123412341234'),
('test2', 'test2@gmail.com', 'test2', 'Hungary', 11111, '+302109025525', 'MasterCard', '1234123412341234'),
('test3', 'test3@gmail.com', 'test3', 'Croatia', 11111, '+302109025525', 'Visa', '1234123412341234'),
('test4', 'test4@gmail.com', 'test4', 'Ireland', 11111, '+302109025525', 'Visa', '1234123412341234'),
('test5', 'test5@gmail.com', 'sbss', 'Croatia', 11111, '+302109025525', 'Visa', '1234123412341234'),
('ddd', 'ssd', '   ', 'Hungary', 11111, '+302109025525', 'American Express', '1234123412341234'),
('test', 'test1@gmail.com', 'sjjs', 'Select a state', 11111, '+302109025525', 'Select a type', '1234123412341234'),
('test000', 'test000@gmail.com', 'test', 'Liechtenstein', 11111, '+302109025523', 'American Express', '1234123412341234'),
('dfdffd', 'fdfdfdf', 'fdfdfd', 'Liechtenstein', 11111, '+302109025525', 'Visa', '1234123412341234'),
('dffd', 'fffd', 'ddfd', 'Not Selected', 11111, '+302109025525', 'American Express', '1234123412341234'),
('test000', 'test000@gmail.com', 'test', 'Liechtenstein', 11111, '+302109025523', 'American Express', '1234123412341234'),
('fggg', 'test@gmail.com', 'fffd', 'Belgium', 11111, '+302109025525', 'Visa', '1234123412341234'),
('Μαρία', 'test1000@gmail.com', 'Κασομούλη', 'France', 11111, '+302109025525', 'American Express', '1234123412341234'),
('δκκ', 'test@gmail.com', 'kkdd', 'Finland', 11111, '+302109025525', 'Visa', '1234123412341234'),
('dfdfdfd', 'test@test.com', 'fddfdf', 'France', 12345, '+302109025525', 'Visa', '1234123412341234'),
('', 'test21@gmail.com', '', 'Not Selected', 11111, '+302109025525', 'Not Selected', '1234123412341234'),
('', 'test21@gmail.com', '', 'Not Selected', 11111, '+302109025525', 'Not Selected', '1234123412341234'),
('Μαρία Αμοργιανού', 'test@gmail.com', 'Κασομούλη', 'Greece', 11111, '+302109025525', 'American Express', '1234123412341234'),
('Μαρία', 'testtest2@gmail.com', 'Μήτρου', 'Austria', 11111, '+302109025525', 'Visa', '1234123412341234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
