-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 06:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_id` int(11) NOT NULL,
  `First_Middle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Birth_date` date NOT NULL,
  `Specialization` varchar(15) NOT NULL,
  `Appointment_date` date NOT NULL,
  `Degree_borad_year_division_Position` text NOT NULL,
  `Job_from_to_Org` text NOT NULL,
  `Membership` varchar(40) NOT NULL,
  `Registrar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_id`, `First_Middle_Name`, `Last_Name`, `Birth_date`, `Specialization`, `Appointment_date`, `Degree_borad_year_division_Position`, `Job_from_to_Org`, `Membership`, `Registrar_id`) VALUES
(1, ' Marmarin,Hamid', 'Rawli', '0000-00-00', 'Pathologist', '2011-05-06', ' SSC_Dhaka _2011 _A _5 ,HSC_Dhaka _2013 _A _5 ,MBBS_Dhaka _2016 _A _5 ,_ _ _ _ ,_ _ _ _', ' __ _ ,__ _ ,__ _ ,__ _ ,__ _ ', 'bma ', 0),
(2, ' Marmarin,Hamid', 'Rawli', '0000-00-00', 'Pathologist', '2011-05-06', ' SSC_Dhaka _2011 _A _5 ,HSC_Dhaka _2013 _A _5 ,MBBS_Dhaka _2016 _A _5 ,_ _ _ _ ,_ _ _ _', ' __ _ ,__ _ ,__ _ ,__ _ ,__ _ ', 'bma ', 0),
(3, ' Muntaha,anjuman', 'diara', '0000-00-00', '', '2016-03-05', ' SSC_Comilla _2000 _B _0 ,_ _ _ _ ,_ _ _ _ ,_ _ _ _ ,_ _ _ _', ' __ _ ,__ _ ,__ _ ,__ _ ,__ _ ', '', 0),
(4, ' Muntaha,anjuman', 'diara', '0000-00-00', '', '2016-03-05', ' SSC_Comilla _2000 _B _0 ,_ _ _ _ ,_ _ _ _ ,_ _ _ _ ,_ _ _ _', ' __ _ ,__ _ ,__ _ ,__ _ ,__ _ ', '', 0),
(5, ' Muntaha,anjuman', 'diara', '0000-00-00', '', '2016-03-05', ' SSC_Comilla _2000 _B _0 ,_ _ _ _ ,_ _ _ _ ,_ _ _ _ ,_ _ _ _', ' __ _ ,__ _ ,__ _ ,__ _ ,__ _ ', '', 0),
(6, ' a,b', 'c', '0000-00-00', '', '0000-00-00', ' _ _ _ _ ,_ _ _ _ ,_ _ _ _ ,_ _ _ _ ,_ _ _ _', ' __ _ ,__ _ ,__ _ ,__ _ ,__ _ ', 'american medical society ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Supplier_Id_Name` varchar(40) NOT NULL,
  `Medicin_id` int(11) NOT NULL,
  `Medicine_type` varchar(30) NOT NULL,
  `Supply_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Medicine_name` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit_price` int(11) NOT NULL,
  `Manufacture_Expiry_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Supplier_Id_Name`, `Medicin_id`, `Medicine_type`, `Supply_date`, `Medicine_name`, `Quantity`, `Unit_price`, `Manufacture_Expiry_date`) VALUES
(' 1211 ,orinjit', 1, 'parasiteam', '2018-05-09 19:57:11', '  Napa ,Seclo ,', 100, 10, ''),
(' 1211 ,orinjit', 2, 'parasiteam', '2018-05-09 19:58:09', '  Napa ,Seclo ,', 100, 10, '2016-03-12 '),
(' 1211 ,orinjit', 3, 'parasiteamol ,Omepra', '2018-05-09 19:58:54', '  Napa ,Seclo ,', 100, 10, '2016-03-12 '),
(' 1211 ,orinjit', 4, 'parasiteamol ,Omepra', '2018-05-09 19:59:38', '  Napa ,Seclo , , , ', 100, 10, '2016-03-12 '),
(' 1211 ,orinjit', 5, 'parasiteamol ,Omeprazole , , ,', '2018-05-09 20:00:27', '  Napa ,Seclo , , , ', 100, 10, '2016-03-12 '),
(' 1211 ,orinjit', 6, 'parasiteamol ,Omeprazole , , ,', '2018-05-09 20:01:09', '  Napa ,Seclo , , , ', 100, 10, '2016-03-12 ,2018-09-'),
(' 1211 ,orinjit', 7, 'parasiteamol ,Omeprazole , , ,', '2018-05-09 20:01:41', '  Napa ,Seclo , , , ', 100, 10, '2016-03-12 ,2018-09-03 ;2018-0');

-- --------------------------------------------------------

--
-- Table structure for table `nurseinfo`
--

CREATE TABLE `nurseinfo` (
  `Nurse_id` int(11) NOT NULL,
  `First_Middle_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Birth_date` date NOT NULL,
  `Appointment_date` date NOT NULL,
  `Degree_board_year_division_Position` text NOT NULL,
  `Job_from_to_Org` text NOT NULL,
  `Spervisor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurseinfo`
--

INSERT INTO `nurseinfo` (`Nurse_id`, `First_Middle_Name`, `Last_Name`, `Birth_date`, `Appointment_date`, `Degree_board_year_division_Position`, `Job_from_to_Org`, `Spervisor_id`) VALUES
(1, 'Muntaha,anjuman', 'diara', '1997-03-06', '2011-03-12', ' SSC_Borishal _2011 _B+ _0 ,_ _ _ _ ,_ _ _ _ ,_ _ _ _ ,_ _ _ _', '__ _ ,__ _ ,__ _ ,__ _ ,__ _', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Doctor_id` int(11) NOT NULL,
  `Ward_id` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Admission_date` date NOT NULL,
  `$First_Middle_name` varchar(30) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Birth_date` date NOT NULL,
  `Mobile1` varchar(15) NOT NULL,
  `Mobile2` varchar(15) NOT NULL,
  `Pres_StreetNo_Village` varchar(10) NOT NULL,
  `Pres_Street_Name` varchar(20) NOT NULL,
  `Pres_Area` varchar(20) NOT NULL,
  `Pres_Thana` varchar(15) NOT NULL,
  `Pres_District` varchar(15) NOT NULL,
  `Perma_StreetNo_Village` varchar(15) NOT NULL,
  `Perma_Street_Name` varchar(20) NOT NULL,
  `Perma_Area` varchar(15) NOT NULL,
  `Perma_Thana` varchar(15) NOT NULL,
  `Perma_District` varchar(15) NOT NULL,
  `Profession` varchar(12) NOT NULL,
  `Amount` varchar(8) NOT NULL,
  `CabinNo_WardNo` varchar(3) DEFAULT NULL,
  `Age` varchar(3) NOT NULL,
  `Doc_id` varchar(8) NOT NULL,
  `Bed_id` varchar(3) NOT NULL,
  `Height_Weight` varchar(8) NOT NULL,
  `Symptom` text NOT NULL,
  `BP_high_low` varchar(8) NOT NULL,
  `Breakfast` text NOT NULL,
  `Lunch` text NOT NULL,
  `Dinner` text NOT NULL,
  `Hobby` varchar(20) NOT NULL,
  `Game` varchar(15) NOT NULL,
  `Others` varchar(8) NOT NULL,
  `Disease_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Doctor_id`, `Ward_id`, `ID`, `Admission_date`, `$First_Middle_name`, `Last_name`, `Birth_date`, `Mobile1`, `Mobile2`, `Pres_StreetNo_Village`, `Pres_Street_Name`, `Pres_Area`, `Pres_Thana`, `Pres_District`, `Perma_StreetNo_Village`, `Perma_Street_Name`, `Perma_Area`, `Perma_Thana`, `Perma_District`, `Profession`, `Amount`, `CabinNo_WardNo`, `Age`, `Doc_id`, `Bed_id`, `Height_Weight`, `Symptom`, `BP_high_low`, `Breakfast`, `Lunch`, `Dinner`, `Hobby`, `Game`, `Others`, `Disease_name`) VALUES
(0, 0, 1, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 2, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 3, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 4, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 5, '1999-02-02', 'Mayamin', 'Raha', '1970-01-01', '01860777554', '0165865562', 'jmgh', 'hnjn', 'nf', '', 'fh', 'hf', '', 'gh', 'bjmn', 'likl', 'farmer', '65656', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 6, '2018-12-13', 'fdf', 'dfdsa', '1970-01-01', '156565', '887878', 'gfgfgf', 'sdfsdf', 'fsdfd', 'dfds', 'dfsdfddf', 'dfdfdsfd', '', 'dfdfdfdf', 'dfdfdfdfdf', 'dfdfdff', 'retired', '5858', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 7, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 8, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 9, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 10, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 11, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 12, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 13, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 14, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 15, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 16, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 17, '0000-00-00', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 18, '2016-06-25', 'Abdul', 'abc', '1983-02-25', '01720055960', '01720066498', '25', 'mogbajar', 'Dhaka', 'rajshahi', 'comilla', '14', '', '300sqfeet', 'mohanogor', 'rajshahi', 'private job', '2000', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 19, '2018-05-06', 'Moonzarin', 'Rachi', '1999-05-06', '01963355448', '01860888885', 'gfg', 'hgdh', 'dsfgf', 'ftgfg', '', 'fgfg', '', 'gfgfg', 'fgfg', 'fgf', 'business', '6665', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 20, '2016-03-12', 'Tina', 'Dina', '1965-02-12', '01720066398', '0185233964', 'Nowga', 'hatirpul20', '', '', 'Dhaka', 'Nowga', '', '', '', 'Dhaka', 'private job', '6000', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 0, 21, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ', , , , , ', ', ', ', , ', ',,', ',,', '', 'game', 'tourism', ''),
(0, 0, 22, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ', , , , , ', ', ', ', , ', ',,', ',,', '', 'game', 'tourism', ''),
(0, 0, 23, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ', , , , , ', ', ', ', , ', ',,', ',,', '', 'game', 'tourism', ''),
(0, 0, 24, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ', , , , , ', ', ', ', , ', ',,', ',,', '', 'game', 'tourism', ''),
(0, 0, 25, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ', , , , , ', ', ', ', , ', ',,', ',,', '', 'game', 'tourism', ''),
(0, 0, 26, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', ', , , , , ', ', ', ', , ', ',,', ',,', '', 'game', 'tourism', ''),
(0, 0, 27, '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '45,56', 'fd, fd, dfs, dfs, ghg, gf', '85, 77', 'fgd, fdf, dfd', 'dfd,dff,dfdfujj', 'yujn,jyju,tuty', 'yuy', 'chess', 'writing', 'uyu');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ward`
--

CREATE TABLE `patient_ward` (
  `Patient_Id` int(11) NOT NULL,
  `Ward_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Patient_id` varchar(8) NOT NULL,
  `Doctor_id` varchar(8) NOT NULL,
  `Advice_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Medicine_name` varchar(10) NOT NULL,
  `Quantity` varchar(5) NOT NULL,
  `Times_a_day` varchar(10) NOT NULL,
  `Morning` varchar(10) NOT NULL,
  `Noon` varchar(10) NOT NULL,
  `Evening` varchar(10) NOT NULL,
  `Test_list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Patient_id`, `Doctor_id`, `Advice_date_time`, `Medicine_name`, `Quantity`, `Times_a_day`, `Morning`, `Noon`, `Evening`, `Test_list`) VALUES
('27', '', '2018-05-08 18:38:27', 'Napa ,Fixo', '100mg', '2 ,2', '1 ,,1 ,', ' ,,1 ,', '1 ,, ,', 'ecg ,eco cardiogram,blood test');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `Registrar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('admin', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wardinfo`
--

CREATE TABLE `wardinfo` (
  `Ward_id` int(11) NOT NULL,
  `Ward_name` varchar(10) NOT NULL,
  `Registrar_Id` varchar(30) NOT NULL,
  `Supervisor_Id` varchar(30) NOT NULL,
  `Bed_No_type_rent_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wardinfo`
--

INSERT INTO `wardinfo` (`Ward_id`, `Ward_name`, `Registrar_Id`, `Supervisor_Id`, `Bed_No_type_rent_Status`) VALUES
(1, 'Shishu101', '', '', ' 25_medium_500 _empty ,__ _ ,__ _ ,__ _ ,__ _');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Medicin_id`);

--
-- Indexes for table `nurseinfo`
--
ALTER TABLE `nurseinfo`
  ADD PRIMARY KEY (`Nurse_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`Registrar_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wardinfo`
--
ALTER TABLE `wardinfo`
  ADD PRIMARY KEY (`Ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `Medicin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nurseinfo`
--
ALTER TABLE `nurseinfo`
  MODIFY `Nurse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `Registrar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wardinfo`
--
ALTER TABLE `wardinfo`
  MODIFY `Ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
