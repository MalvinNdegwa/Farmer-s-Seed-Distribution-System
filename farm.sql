-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 06:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone_Number` int(10) NOT NULL,
  `User_Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `Company_Name`, `Password`, `Email`, `Telephone_Number`, `User_Type`) VALUES
(4, 'SimlawSeeds', 'SimlawSeed', 'Jkiaga@gmail.com', 734569325, 'company'),
(8, 'KenyaSeed', 'KenyaSeed', 'KenyaSeed@gmail.com', 721123456, 'company'),
(9, 'SeedCoGroup', 'SeedCoGroup', 'SeedCoGroup@gmail.com', 735678945, 'company');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `Number` int(11) NOT NULL,
  `TypeofSeed` varchar(20) NOT NULL,
  `VarietyofSeed` varchar(20) NOT NULL,
  `SeedCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`Number`, `TypeofSeed`, `VarietyofSeed`, `SeedCode`) VALUES
(6, 'Wheat', 'T.durum', '00256'),
(7, 'Beans', 'Yellow Beans', '005'),
(8, 'Maize', 'Pannar', '051'),
(9, 'Beans', 'Kidney Beans', '084'),
(11, 'beans', 'black', '0234'),
(12, 'Maize', 'H628', '0069'),
(13, 'Beans', 'Green beans', '0765'),
(14, 'Beans', 'Black Beans', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ks`
--

CREATE TABLE `ks` (
  `Number` int(11) NOT NULL,
  `TypeofSeed` varchar(20) NOT NULL,
  `VarietyofSeed` varchar(20) NOT NULL,
  `SeedCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ks`
--

INSERT INTO `ks` (`Number`, `TypeofSeed`, `VarietyofSeed`, `SeedCode`) VALUES
(1, 'Maize', 'H614D', '1009'),
(3, 'Sorghum', 'Serena', '1876');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'Farmer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'SimlawSeeds', 'simlawseeds', 'SimlawSeeds'),
(2, 'KenyaSeed', 'kenyaseed', 'KenyaSeed'),
(3, 'SeedCoGroup', 'seedcogroup', 'SeedCoGroup'),
(4, 'Farmer', '1234', 'Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Farmer_id` int(11) NOT NULL,
  `County` varchar(20) NOT NULL,
  `SubCounty` varchar(20) NOT NULL,
  `Ward` varchar(20) NOT NULL,
  `Type_of_Crop` varchar(50) NOT NULL,
  `No_of_bags` int(11) NOT NULL,
  `SeedCompany` varchar(20) NOT NULL,
  `DeliveryStatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Farmer_id`, `County`, `SubCounty`, `Ward`, `Type_of_Crop`, `No_of_bags`, `SeedCompany`, `DeliveryStatus`) VALUES
(1, 0, 'Nakuru', 'Naivasha', 'Maiella', 'Irish Potato', 20, 'KenyaSeed', 0),
(2, 0, 'Nakuru', 'Gilgil', 'Elementaita', 'Beans', 10, 'KenyaSeed', 0),
(3, 0, 'Nakuru', 'Naivasha', 'Olkaria', 'Sorghum', 30, 'KenyaSeed', 0),
(4, 0, 'Nakuru', 'Naivasha', 'Maiella', 'Maize', 10, 'SeedCoGroup', 0),
(5, 0, 'Nakuru', 'Naivasha', 'Hells Gate', 'Maize', 23, 'SimlawSeeds', 0),
(6, 0, 'Nakuru', 'Gilgil', 'Elementaita', 'Maize', 10, 'KenyaSeed', 0),
(7, 0, 'Nakuru', 'Rongai', 'Solai', 'Beans', 10, 'SimlawSeeds', 0),
(8, 0, 'Nakuru', 'Kuresoi South', 'Amalo', 'Irish Potato', 12, 'KenyaSeed', 0),
(9, 0, 'Nakuru', 'Gilgil', 'Elementaita', 'Irish Potato', 12, 'SimlawSeeds', 0),
(10, 4, 'Nakuru', 'Gilgil', 'Mbaruk', 'Wheat', 12, 'SeedCoGroup', 0),
(11, 0, 'Nakuru', 'Kuresoi South', 'Kiptagich', 'Maize', 12, ' SeedCoGroup', 0),
(12, 37, 'Nakuru', 'Gilgil', 'Mbaruk', 'Irish Potato', 10, 'SeedCoGroup', 1),
(13, 0, 'Nakuru', 'Gilgil', 'Mbaruk', 'Irish Potato', 20, 'SimlawSeeds', 0),
(14, 37, 'Nakuru', 'Gilgil', 'Mbaruk', 'Wheat', 30, 'KenyaSeed', 1),
(15, 38, 'Nakuru', 'Kuresoi South', 'Kiptagich', 'Irish Potato', 10, 'SimlawSeeds', 1),
(16, 37, 'Nakuru', 'Kuresoi South', 'Tinet', 'Irish Potato', 30, 'KenyaSeed', 1),
(17, 40, 'Nakuru', 'Kuresoi North', 'Nyota', 'Beans', 10, 'KenyaSeed', 1),
(18, 40, 'Nakuru', 'Njoro', 'Kihingo', 'Irish Potato', 20, 'SeedCoGroup', 0),
(19, 41, 'Nakuru', 'Gilgil', 'Elementaita', 'Beans', 50, 'KenyaSeed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Company_id` int(11) NOT NULL,
  `Type_of_Seed` varchar(50) NOT NULL,
  `Variety_of_Seed` varchar(50) NOT NULL,
  `Seed_Code` varchar(50) NOT NULL,
  `Used` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Company_id`, `Type_of_Seed`, `Variety_of_Seed`, `Seed_Code`, `Used`) VALUES
(2, 0, 'Beans', 'Black', '1783', 1),
(3, 4, 'Wheat', 'Ks', '28973', 0),
(5, 0, 'Beans', 'Yellow Beans', '56784', 0),
(6, 4, 'Beans', 'Yellow', '1546', 0),
(7, 8, 'Maize', 'H614', '3567', 0),
(8, 4, 'Beans', 'Yellow Beans', '2096', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Telephone_Number` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User_Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `First_Name`, `Last_Name`, `Telephone_Number`, `Email`, `Password`, `User_Type`) VALUES
(5, 'Peter', 'Muchina', 721123456, 'NalinNdegwa@gmail.com', 'sdssd', 'farmer'),
(10, 'Jonah', 'Ndegwa', 765547898, 'NalinNdegwa@gmail.com', 'jndegwa', 'farmer'),
(12, 'Peter', 'Muchina', 725817350, 'Ndegwa.muchina3@gmail.com', '1234', 'farmer'),
(13, 'Malvin', 'Muchina', 765547898, 'NalinNdegwa@gmail.com', '1234', 'farmer'),
(14, 'Ian', 'Wanderi', 727865476, 'NalinNdegwa@gmail.com', '1897654', 'farmer'),
(18, 'Malvin', 'Wanderi', 765547898, 'NalinNdegwa@gmail.com', '1234', 'farmer'),
(19, 'Peter', 'Wanderi', 798233328, 'nalinndegwa@gmail.com', '1234', 'farmer'),
(26, 'Peter', 'Ndegwa', 798233328, 'NalinNdegwa@gmail.com', '1234', 'farmer'),
(27, 'Malvin', 'Muchina', 721111981, 'NalinNdegwa@gmail.com', '12345', 'farmer'),
(37, 'weston', 'axerl', 721123456, 'Ax@gmail.com', '73456', 'farmer'),
(38, 'Johnson', 'Muthee', 716279243, 'Jndegwa@gmail.com', 'Johnson', 'farmer'),
(39, '', '', 2147483647, 'Nalinndegwa@gmail.com', '', 'farmer'),
(40, 'Malvin', 'Ndegwa', 2147483647, 'NalinNdegwagmail.com', 'Muthee', 'farmer'),
(41, 'Maryanne', 'Muthoni', 725678910, 'Madodos@gmail.com ', 'Wamuthoni123', 'farmer');

-- --------------------------------------------------------

--
-- Table structure for table `scg`
--

CREATE TABLE `scg` (
  `Number` int(11) NOT NULL,
  `TypeofSeed` varchar(20) NOT NULL,
  `VarietyofSeed` varchar(50) NOT NULL,
  `SeedCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scg`
--

INSERT INTO `scg` (`Number`, `TypeofSeed`, `VarietyofSeed`, `SeedCode`) VALUES
(1, 'Beans', 'Glp 2 Rose coco', '34567'),
(2, 'Maize', 'DHO4', '3089');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `ks`
--
ALTER TABLE `ks`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scg`
--
ALTER TABLE `scg`
  ADD PRIMARY KEY (`Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ks`
--
ALTER TABLE `ks`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `scg`
--
ALTER TABLE `scg`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
