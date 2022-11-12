-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2022 at 05:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE17_CR4_Amina Brakmic_BigLibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `LibraryItem`
--

CREATE TABLE `LibraryItem` (
  `type` varchar(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ISBN_code` varchar(20) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(80) NOT NULL,
  `publisher_date` date DEFAULT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(40) NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `LibraryItem`
--

INSERT INTO `LibraryItem` (`type`, `title`, `ISBN_code`, `publisher_name`, `publisher_address`, `publisher_date`, `author_first_name`, `author_last_name`, `short_description`, `image`) VALUES
('Book', 'Faktologija', '123456789', 'BUYBOOK', 'sweden', '2022-11-16', 'Hans', 'Rossling', 'Test test', 'image.jpg'),
('Book', 'Divojka', '147258369', 'BUYBOOK', 'Croatia', '2022-02-17', 'Tarik', 'Dodic', 'Test3', 'image.jpg4'),
('Book', 'Knjiga Salaudinova', '321654987', 'BUYBOOK', 'Germany', '2022-05-10', 'Tariq', 'Ali', 'Test1', 'image.jpg2'),
('Book', 'SNIJEG', '456789123', 'BUYBOOK', 'Turkey', '2022-01-04', 'Orhan', 'Pamuk', 'Test2', 'image.jpg3'),
('DVD', 'avengers', '6792513594736', 'BUYBOOK', 'Austria', '2022-08-21', 'Hans', 'Rossling', 'Test10', 'image.jpg10'),
('CD', 'Iron Man', '6874329876', 'BUYBOOK', 'Austria', '2022-07-19', 'Hans', 'Rossling', 'Test8', 'image.jpg4'),
('Book', 'Sa nama se zavrsava', '852741963', 'BUYBOOK', 'Slovenia', '2022-06-21', 'KOLIN', 'HUVER', 'Test4', 'image.jpg5'),
('Book', 'CAST', '963852741', 'BUYBOOK', 'Bosnia and Herzegowina', '2022-04-18', 'ELIF', 'SAFAK', 'Test4', 'image.jpg5'),
('CD', 'HULK', '9764186462761', 'BUYBOOK', 'Italy', '2022-08-29', 'Hans', 'Rossling', 'Test5', 'image.jpg8'),
('Book', 'Dzevdet i sinovi', '987654321', 'BUYBOOK', 'Austria', '2022-11-08', 'Orhan', 'Pamuk', 'Test test test', 'image.jpg1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LibraryItem`
--
ALTER TABLE `LibraryItem`
  ADD PRIMARY KEY (`ISBN_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
