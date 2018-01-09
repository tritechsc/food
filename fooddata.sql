-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 09:46 PM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooddata`
--

CREATE TABLE IF NOT EXISTS `fooddata` (
  `last` varchar(64) NOT NULL,
  `first` varchar(1) NOT NULL,
  `food_type` varchar(16) NOT NULL,
  `food_id` varchar(16) NOT NULL,
  `fert_quantity` varchar(64) NOT NULL,
  `fert_type` varchar(64) NOT NULL,
  `pest_quantity` varchar(64) NOT NULL,
  `pest_type` varchar(64) NOT NULL,
  `pest_interval` varchar(64) NOT NULL,
  `water_quantity` varchar(64) NOT NULL,
  `water_type` varchar(64) NOT NULL,
  `water_interval` varchar(64) NOT NULL,
  `delivery_method` varchar(64) NOT NULL,
  `delivery_distance` varchar(64) NOT NULL,
  `delivery_waste` varchar(64) NOT NULL,
  `gmo` varchar(16) NOT NULL,
  `comments` text NOT NULL,
  `date_time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fooddata`
--

INSERT INTO `fooddata` (`last`, `first`, `food_type`, `food_id`, `fert_quantity`, `fert_type`, `pest_quantity`, `pest_type`, `pest_interval`, `water_quantity`, `water_type`, `water_interval`, `delivery_method`, `delivery_distance`, `delivery_waste`, `gmo`, `comments`, `date_time`) VALUES
('grocer', 'g', 'BANANAS', '10,000', '2 pounds', '10-10-10 ', '.56 lbs', 'Imadacloprid', 'weekly', '10,0000000 lbs', 'irragation system', 'daily', 'train', '20,000000,00000 miles', '80%', 'Yes', '', '15:17:03 2017-05-02'),
('DAVIDSON', 'B', 'APPLES', '3001', '7 LBS', 'BLOOD MEAL', '1.84 LBS PER ACRE', 'DIPHENYLAMINE, THYABENDAZOLI, PYRINETHANILI', '2 TIMES A DAY.', '75 GALLONS', 'RIVER', '1.84 LBS PER ACRE', 'TRUCK', '10-200', '25%', 'NO', '0.0205 TONS OF CO2 TO TRAVEL 200 MILES', '12:31:40 2017-03-28'),
('DAVIDSON', 'B', 'BANANAS', '4011', '1 1/2 LBS PER MONTH', 'ROCK PHOSPHATE', '48.1%, 32.7%, 24', 'THIABENDAZOLE, IMAZALIL, AZOXYSTROBIN', '44 KILOGRAMS DAILY', '9,000 GALLONS A WEEK', 'IRRIGATION', 'ONCE A WEEK', 'TRUCK, BOAT', '4,200 MILES ', '70%', 'YES', '0.0245 TONS', '12:50:08 2017-03-28'),
('DAVIDSON', 'B', 'LETTUCE', '4061', '50 LBS PER ACRE', 'NITROGEN, PHOSPHORUS, POTASSIUM', '36.5%, 26.8% 22%', 'IMIDACLOID, MINDIPROMIDE, PROPAMOCARB HYDROCLORIDE ', '.39 LBS PER ACRE', '10,640 GALLONS PER ACRE ', 'IRRIGATION', '3 TIMES A DAY', 'REFRIGERATED TRUCKS', '2,000 MILES', '40%', 'YES', '0.13 TONS', '12:57:38 2017-03-29'),
('DAVIDSON', 'B', 'TOMATOES', '4064', '72.6 LBS PER ACRE', 'NITROGEN, PHOSPHORUS, POTASSIUM', '1.98 LBS PER ACRE', 'ENDOSULFAN SULFATE, AZOXYSTROBIN', '17.2%, 13.5%, 13', '361 GALLONS', 'IRRIGATION', 'ONCE A DAY', 'DELIVERY TRUCK, BOAT', '300-1,050 MILES', '84%', 'YES', '0.0195 TONS', '13:34:10 2017-03-29'),
('DAVIDSON', 'B', 'POTATOES', '4072', 'PPM OF 25', 'POTASSIUM, CALCIUM, BORON, NITROGEN', '2 LBS PER ACRE', 'CHLORPLORHAM, IMIDACLOPRID, FLUTOLANIL', '80.2%, 25.5%, 11', '0.21 GALLONS', 'IRRIGATION', 'ONCE A MONTH', 'DELIVERY TRUCK', '300-1,050 MILES', '15-25%', 'NO', '0.0195 TONS', '13:18:58 2017-03-29'),
('DAVIDSON', 'B', 'APPLES', '8000', '10 LBS', '12-12-12', '2.24 LBS PER ACRE', 'DIPHENYLAMINE, THIABENDAZOLE, PYRIMETHANIL', '87.3%. 88.5%, 83', '50 GALLONS', 'IRRIGATION', 'TWICE A DAY', 'AIRPLANE', '400 MILES', '50%', 'YES', '0.207 TONS', '13:30:39 2017-04-11'),
('grocer', 'g', 'BANANAS', '8011', '2 LBS ', 'RAW MANURE', '35 LBS PER ACRE', 'CHLORPYRIFOS', 'WEEKLY', '11,000 GALLONS', 'TRENCH SYSTEM', '2 TIMES A WEEK', 'BOAT', '5,000 MILES', '77%', 'YES', '2.59 TONS', '12:45:16 2017-04-13'),
('grocer', 'g', 'LETTUCE', '8061', '2 LBS', '10-10-10', '.45 LBS PER ACRE', 'INIBACLOPRID, NIMDIPROMIDE, PROPAMOC-HYDROCHLORID', '40%, 32.3%, 31.5', '1,281 GALLONS', 'RIVER, DAMS', 'MULTIPLE TIMES A DAY', 'AIRPLANE, BOAT', '3,500 MILES', '50%', 'YES', '1.645 TONS', '12:31:30 2017-04-17'),
('grocer', 'g', 'TOMATOES', '8064', '3 LBS', '18-18-21', '2.8 LBS PER ACRE', 'ENDOSULFAN SULFATE, AZOXYSTROBIN', 'ONCE A WEEK', '481 GALLONS', 'RIVER, DAMS', 'WEEKLY', 'AIRPLANE', '7,800 MILES', '87%', 'YES', '1.8185 TONS', '13:29:48 2017-04-17'),
('grocer', 'g', 'POTATOES', '8072', '3 LBS', '10-10-10', '1 LB PER ACRE', 'FLUTOLANIL', '14.7%', '0.36 GALLONS', 'IRRIGATION', 'TWICE WEEKLY', 'AIRPLANE, TRUCK', '650 MILES', '15%', 'YES', '0.3365 TONS', '13:24:24 2017-04-17'),
('grocer', 'g', 'APPLES', '9000', '5 LBS', '10-10-10', '1.84 LBS PER ACRE', 'DIPHENYLAMINE, THIABENDAZOLE, PYRIMETHANIL', 'MONTHLY ', '85 GALLONS', 'IRRIGATION', '3 TIMES A DAY', 'SHIP, TRUCK', '173 MILES', '25%', 'NO', '0.011 TONS', '12:59:40 2017-04-12'),
('GROCER', 'G', 'BANANAS', '9011', '1 LBS', '8-10-8', '44 KILOGRAMS PER ACRE', 'THIABENDAZOLI, IMAZALIL', 'ONCE EVERY 2 WEEKS', '9,000 GALLONS ', 'BASIN', 'ONCES A WEEK ', 'TRUCK, SHIP', '3,700', '65.4%', 'NO ', '0.0405 TONS', '12:26:27 2017-04-13'),
('GROCER', 'G', 'LETTUCE', '9061', '1.5 LBS PER SQUARE ACRE', '10-10-10', '.39 POUNDS PER ACRE', 'IMIDACLOPRID', 'MONTHLY', '1000 GALLONS PER ACRE', 'RIVER ', 'MULTIPLE TIMES A WEEK', 'REFRIGERATED TRUCK', '5,342 MILES', '35%', 'NO', '0.3446 TONS', '13:17:21 2017-04-13'),
('GROCER', 'G', 'TOMATOES', '9064', '1.5 LBS PER ACRE', '5-10-5', '1.98 LB PER ACRE', 'AZOXYSTROBIN', 'ONCE A WEEK', '200 LBS PER ACRE', 'IRRIGATION', 'ONCE EVERY 3 DAY', 'BOAT, TRUCK', '560 MILES', '67%', 'NO', '0.0061 TONS', '13:20:33 2017-04-17'),
('Grocer', 'G', 'POTATOES', '9072', '2-3 LBS', '10-20-20 GRANULA ADDING', '3.57 LBS PER ACRE', 'CHLORPLORHAM', 'MONTHLY', '2 LBS PER ACRE', 'IRRIGATION ', '1-2 TIMES A WEEK', 'TRAIN', '400 MILES', '18%', 'NO', '0.0092 TONS', '12:38:48 2017-04-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooddata`
--
ALTER TABLE `fooddata`
  ADD UNIQUE KEY `food_id` (`food_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
