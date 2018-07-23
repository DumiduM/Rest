-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 09:34 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookss`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` varchar(15) NOT NULL,
  `lang` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `author` varchar(15) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `lang`, `name`, `author`, `image`, `price`) VALUES
('1', 'Java', 'Learning Java', 'Bert Bates', 'http://t1.gstatic.com/images?q=tbn:ANd9GcRqZN74PNFHRawd87cHSI08dSU0UkagLxzA-dot-F28FBQgB0Fz', 150),
('2', 'C', 'Learn C#', 'Sam A. Abolrous', 'https://books.google.lk/books/content?id=Z4B3GQAACAAJ&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE72HWqmxImoUVdR4tza-MDyEUH73pg7c88pZP6VE4VsYr6RWbpOPKmX2pzs0ON1NridRuZ3QN8Yp6Ema1QWu4hK6gG3gUo6VUlMHKvxT5NS3PtM5baZHeQZoK-afHfyjJWRhl0iE', 180),
('3', 'php', 'Head first php', 'Lynn Beighley', 'https://books.google.lk/books/content?id=wXwrAQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE7342FzxmhTeEnpdj3XB8ToG_8b1a4dpMZsK7KeC-Ayyo15-2vt4Sr4NM6VweEtGEPUA2uZBYiOdJ1plgF9E4OYixBxA-3xTewsf4j1ssM5fE-pN4GbGXSpEXY2lAhJes77aS2LT', 220);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
