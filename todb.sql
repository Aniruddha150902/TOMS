-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 08:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `ADMIN_NAME` varchar(255) NOT NULL,
  `ADMIN_EMAIL` varchar(255) NOT NULL,
  `ADMIN_PASSWORD` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_EMAIL`, `ADMIN_PASSWORD`) VALUES
(1, 'ANIRUDDHA', 'anibhu2134@gmail.com', 'abcd@1234');

-- --------------------------------------------------------

--
-- Table structure for table `fine_tickets`
--

CREATE TABLE `fine_tickets` (
  `FINE_ID` int(11) NOT NULL,
  `FINE_DESCRIPTION` varchar(255) NOT NULL,
  `FINE_AMOUNT` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fine_tickets`
--

INSERT INTO `fine_tickets` (`FINE_ID`, `FINE_DESCRIPTION`, `FINE_AMOUNT`) VALUES
(102, 'Driving a special purpose vehicle without obtaining a License.', '1000.00'),
(103, 'Failure to obtain authorization to drive a vehicle loaded with chemicals, hazardous waste, &amp;e.', '2000.00'),
(104, 'Failure to have a Licence to drive a specific class of vehiceles.', '2000.00'),
(105, 'Failure to carry a Driving Licence when driving.', '1500.00'),
(106, 'Driving a special purpose vehicle without obtaining a licence', '2000.00'),
(107, 'Failure to comply with road rules.', '2000.00'),
(108, 'Not compliance with Speed limits provisions.', '3000.00'),
(109, 'Excessive emission of smoke &amp;c.', '1000.00'),
(110, 'DRIVER NOT WEARING HELMET', '1000.00');

--
-- Triggers `fine_tickets`
--
DELIMITER $$
CREATE TRIGGER `before_insert_fine_amount` BEFORE INSERT ON `fine_tickets` FOR EACH ROW BEGIN  
IF NEW.FINE_AMOUNT < 0 THEN SET NEW.FINE_AMOUNT = 0;  
END IF;  
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_fine_amount` BEFORE UPDATE ON `fine_tickets` FOR EACH ROW BEGIN  
IF NEW.FINE_AMOUNT < 0 THEN SET NEW.FINE_AMOUNT = 0;  
END IF;  
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OWNER_ID` int(11) NOT NULL,
  `OWNER_NAME` varchar(255) NOT NULL,
  `DL_NO` varchar(15) NOT NULL,
  `OWNER_EMAIL` varchar(255) NOT NULL,
  `PHONE_NO` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OWNER_ID`, `OWNER_NAME`, `DL_NO`, `OWNER_EMAIL`, `PHONE_NO`) VALUES
(13, 'AMOGH', 'SD2398231945', 'amogh232@gmial.com', 9384298923),
(14, 'Austin Briggs', 'KD9248923276', 'driggs45@yahoo.com', 9899283891),
(15, 'Major Burns', 'LK9832839493', 'bruns2983@gmail.com', 2222421799),
(16, 'Serena Parra', 'KS298289403', 'parra293@gmail.com', 9238994883);

--
-- Triggers `owner`
--
DELIMITER $$
CREATE TRIGGER `Check_Phno` BEFORE INSERT ON `owner` FOR EACH ROW BEGIN
IF NEW.PHONE_NO < 1000000000 OR NEW.PHONE_NO > 9999999999 THEN
SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'ERROR: \r\n         PHONE NUMBER MUST BE OF 10 DIGITS!';
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Check_Phno_update` BEFORE UPDATE ON `owner` FOR EACH ROW BEGIN
IF NEW.PHONE_NO < 1000000000 OR NEW.PHONE_NO > 9999999999 THEN
SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'ERROR:\r\n\t\tPHONE NUMBER MUST BE OF 10 DIGITS!';
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

CREATE TABLE `tpo` (
  `OFFICER_ID` int(11) NOT NULL,
  `OFFICER_NAME` varchar(255) NOT NULL,
  `OFFICER_EMAIL` varchar(255) NOT NULL,
  `OFFICER_PASSWORD` varchar(16) NOT NULL,
  `POLICE_STATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tpo`
--

INSERT INTO `tpo` (`OFFICER_ID`, `OFFICER_NAME`, `OFFICER_EMAIL`, `OFFICER_PASSWORD`, `POLICE_STATION`) VALUES
(13, 'aniruddha', 'aniruddha@gmail.com', 'abcd', 'bengaluru'),
(14, 'bhuvan', 'bhuvan@gmail.com', '1234', 'mumbai'),
(17, 'Ryan Spence', 'spence9283@yahoo.com', 'safji2932@#sf', 'JP Nagar'),
(18, 'Osiris Gillespie', 'gillespie2983@gmail.com', 'ask@(*WI92', 'Jayanagar');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VEHICLE_ID` int(11) NOT NULL,
  `LICENSE_NUMBER` varchar(10) NOT NULL,
  `VEHICLE_TYPE` varchar(255) NOT NULL,
  `VEHICLE_MODEL` varchar(255) NOT NULL,
  `OWNER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VEHICLE_ID`, `LICENSE_NUMBER`, `VEHICLE_TYPE`, `VEHICLE_MODEL`, `OWNER_ID`) VALUES
(11, 'KA01HX3443', 'CAR', 'HONDA CITY', 14),
(12, 'KA92HE9234', 'Sedan', 'MARUTHI SWIFT', 15),
(13, 'KA93UB8055', 'Bike', 'CHETHAK', 13),
(14, 'KA92LA9232', '3-WHEELERS(AUTO)', 'BAJAJ', 14);

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `NOTICE_ID` int(11) NOT NULL,
  `VEHICLE_ID` int(11) DEFAULT NULL,
  `FINE_ID` int(11) DEFAULT NULL,
  `OFFICER_ID` int(11) DEFAULT NULL,
  `PLACE` varchar(255) NOT NULL,
  `DATE` varchar(20) DEFAULT NULL,
  `STATUS` varchar(8) NOT NULL DEFAULT 'NOT PAID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`NOTICE_ID`, `VEHICLE_ID`, `FINE_ID`, `OFFICER_ID`, `PLACE`, `DATE`, `STATUS`) VALUES
(14, 11, 108, 17, 'Basavanagudi', '2021-03-09T21:18', 'NOT PAID'),
(15, 11, 108, 17, 'Srinagar', '2023-01-25T16:20', 'PAID'),
(16, 11, 104, 17, 'JP Nagar', '2018-05-25T08:28', 'NOT PAID'),
(17, 13, 106, 14, 'Mumbai', '2023-01-25T16:24', 'NOT PAID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD UNIQUE KEY `ADMIN_EMAIL` (`ADMIN_EMAIL`);

--
-- Indexes for table `fine_tickets`
--
ALTER TABLE `fine_tickets`
  ADD PRIMARY KEY (`FINE_ID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OWNER_ID`),
  ADD UNIQUE KEY `DL_NO` (`DL_NO`),
  ADD UNIQUE KEY `OWNER_EMAIL` (`OWNER_EMAIL`),
  ADD UNIQUE KEY `PHONE_NO` (`PHONE_NO`);

--
-- Indexes for table `tpo`
--
ALTER TABLE `tpo`
  ADD PRIMARY KEY (`OFFICER_ID`),
  ADD UNIQUE KEY `OFFICER_EMAIL` (`OFFICER_EMAIL`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VEHICLE_ID`),
  ADD UNIQUE KEY `LICENSE_NUMBER` (`LICENSE_NUMBER`),
  ADD KEY `OWNER_ID` (`OWNER_ID`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`NOTICE_ID`),
  ADD KEY `VEHICLE_ID` (`VEHICLE_ID`),
  ADD KEY `FINE_ID` (`FINE_ID`),
  ADD KEY `OFFICER_ID` (`OFFICER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fine_tickets`
--
ALTER TABLE `fine_tickets`
  MODIFY `FINE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `OWNER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tpo`
--
ALTER TABLE `tpo`
  MODIFY `OFFICER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VEHICLE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `NOTICE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`) ON DELETE SET NULL;

--
-- Constraints for table `violations`
--
ALTER TABLE `violations`
  ADD CONSTRAINT `violations_ibfk_1` FOREIGN KEY (`VEHICLE_ID`) REFERENCES `vehicle` (`VEHICLE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `violations_ibfk_2` FOREIGN KEY (`FINE_ID`) REFERENCES `fine_tickets` (`FINE_ID`),
  ADD CONSTRAINT `violations_ibfk_3` FOREIGN KEY (`OFFICER_ID`) REFERENCES `tpo` (`OFFICER_ID`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
