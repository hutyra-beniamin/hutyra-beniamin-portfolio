-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2020 at 03:54 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_beniaminHutyra_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_beniaminHutyra_petadoption` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr11_beniaminHutyra_petadoption`;

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animal_id` int(11) NOT NULL,
  `animal_name` varchar(55) DEFAULT NULL,
  `animal_species` varchar(55) DEFAULT NULL,
  `animal_age` int(11) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `desc` varchar(255) NOT NULL,
  `type` enum('small','large') NOT NULL DEFAULT 'small',
  `hobbies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animal_id`, `animal_name`, `animal_species`, `animal_age`, `address`, `zipcode`, `city`, `image`, `desc`, `type`, `hobbies`) VALUES
(1, 'Lucy', 'Cat', 1, 'Arbeitergasse 36', 1050, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie', 'small', 'fun'),
(3, 'Benlol', 'Doggo', 5, 'Arbeitergasse 12', 1050, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie pie', 'large', 'fun fun fun '),
(4, 'Bruno', 'dog', 1, 'Kaiserstraße 52', 1060, 'Salzburg', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie', 'small', 'fun fun fun '),
(5, 'bruno', 'cat', 8, 'Arbeitergasse 37', 1050, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie super ', 'large', 'football'),
(6, 'Ben', 'cat', 10, 'Arbeitergasse 1', 1010, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie boy', 'large', 'sleeping'),
(7, 'Amidala', 'dog', 14, 'Arbeitergasse 85', 1020, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'a really lady', 'large', 'fun fun fun '),
(8, 'Benlol', 'cat', 4, 'Arbeitergasse 8', 1040, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie pie', 'small', 'football and fun'),
(9, 'Bibi', 'cat', 4, 'Kaiserstraße 5', 1060, 'Salzburg', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie pie', 'large', 'fun fun fun '),
(10, 'Kuba', 'dog', 8, 'Siebenstrenegasse 12', 1070, 'Wien', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'sweet and cut', 'large', 'sleep and eat'),
(11, 'Arek', 'dog', 6, 'Kaiserstraße 10', 1550, 'Salzburg', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'bossy', 'large', 'making trouble'),
(12, 'Iva', 'cat', 17, 'Arbeitergasse 77', 1080, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie pie', 'small', 'fun fun fun '),
(13, 'Luludi', 'dog', 5, 'Arbeitergasse 101', 1050, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'crazy one', 'small', 'sleep'),
(14, 'Mimi', 'cat', 1, 'Arbeitergasse 8', 1040, 'Vienna', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie pie', 'small', 'fun'),
(15, 'tomtom', 'cat', 2, 'Siebenstrenegasse 48', 1070, 'Wien', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f34353137302f6b697474656e732d6361742d6361742d70757070792d727573682d34353137302e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'cutie boy', 'small', 'football and fun');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(1, 'Beniamin', 'ben123@gmail.com', '855f0f7c0674260e2fd5975ef586ce5a1931e8d60d9c67eadccb6c44e1035e52', 'user'),
(2, 'Beniamin', 'ben@outlook.com', '17f0e7ec5589e760412e921f6758f97e3d2901f2a19b10182f1968166689c44b', 'admin'),
(3, 'lucy', 'lucy@lucy.com', '7b11b79d054fe6da5b045d7e68a5ea2c5f8331d9e482fb999508350cc7ae8c67', 'user'),
(4, 'Paulina', 'paulina@gmail.com', '095fe24f3abe7ca685b84d9d6e7d7203645de1b3f18c2fdbeb5be769daf03781', 'user'),
(5, 'Love', 'love@love.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;