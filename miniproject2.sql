-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 01:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `ID` int(5) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Section` varchar(20) NOT NULL,
  `Budget_Allocated` int(20) NOT NULL,
  `Budget_Utilized` int(20) NOT NULL,
  `Budget_Available` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`ID`, `Department`, `Section`, `Budget_Allocated`, `Budget_Utilized`, `Budget_Available`) VALUES
(1, 'CSE', 'UG-IT', 150000, 120800, 29200),
(2, 'CSE', 'UG-CE', 130000, 80000, 50000),
(3, 'CSE', 'PG-CE', 200000, 90000, 110000),
(4, 'CSE', 'PG-IT', 210000, 120000, 90000),
(5, 'EE', 'UG-EE', 185000, 113000, 72000),
(6, 'EE', 'PG-EE', 236000, 122000, 114000),
(7, 'ME', 'UG-ME', 256000, 143100, 112900),
(8, 'ME', 'PG-ME', 249000, 149000, 100000),
(9, 'EC', 'UG-EC', 209000, 108000, 101000),
(10, 'EC', 'PG-EC', 214500, 125600, 88900),
(11, 'CH', 'UG-CH', 245700, 164000, 81700),
(12, 'CH', 'PG-CH', 215400, 104300, 111100),
(13, 'CL', 'UG-CL', 148700, 96700, 52000),
(14, 'CL', 'PG-CL', 189400, 120000, 69400),
(15, 'IC', 'UG-IC', 150000, 69000, 81000),
(16, 'IC', 'PG-IC', 169000, 84040, 84960),
(17, 'HM', 'UG-HM', 200000, 100000, 100000),
(18, 'HM', 'PG-HM', 151500, 90900, 60600);

-- --------------------------------------------------------

--
-- Table structure for table `expense_form_1`
--

CREATE TABLE `expense_form_1` (
  `ID` int(11) NOT NULL,
  `Emp_Name` varchar(30) NOT NULL,
  `Emp_Designation` varchar(25) NOT NULL,
  `Event_Type` varchar(40) NOT NULL,
  `Sched_Start_Date` date NOT NULL,
  `Sched_End_Date` date NOT NULL,
  `Presentation_Paper` varchar(50) NOT NULL,
  `Event_Venue` varchar(50) NOT NULL,
  `Organizer_Detail` varchar(50) NOT NULL,
  `Benefits_To_Institute` varchar(50) NOT NULL,
  `Letter_Attached` varchar(5) NOT NULL,
  `Budget_Current_Year` int(7) NOT NULL,
  `Budget_Utilized` int(7) NOT NULL,
  `Budget_Available` int(7) NOT NULL,
  `FA_Registration_Fee` int(6) NOT NULL,
  `TA_DA` int(7) NOT NULL,
  `Accomodations` int(7) NOT NULL,
  `FA_Others` int(7) NOT NULL,
  `Tot_Expenditure` int(7) NOT NULL,
  `DOD_Leave_Start` date NOT NULL,
  `DOD_Leave_End` date NOT NULL,
  `No_Of_Attnd_Confr` int(3) NOT NULL,
  `When_Attnd_Confr` date NOT NULL,
  `HOD_Approved` varchar(10) NOT NULL,
  `Dean_Approved` varchar(10) NOT NULL,
  `Reason_For_Rejection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_form_1`
--

INSERT INTO `expense_form_1` (`ID`, `Emp_Name`, `Emp_Designation`, `Event_Type`, `Sched_Start_Date`, `Sched_End_Date`, `Presentation_Paper`, `Event_Venue`, `Organizer_Detail`, `Benefits_To_Institute`, `Letter_Attached`, `Budget_Current_Year`, `Budget_Utilized`, `Budget_Available`, `FA_Registration_Fee`, `TA_DA`, `Accomodations`, `FA_Others`, `Tot_Expenditure`, `DOD_Leave_Start`, `DOD_Leave_End`, `No_Of_Attnd_Confr`, `When_Attnd_Confr`, `HOD_Approved`, `Dean_Approved`, `Reason_For_Rejection`) VALUES
(1, 'Malaram Kumhar', 'Associate Professor', 'Seminar', '2019-09-03', '2019-09-05', 'Use of Advanced Data Structures', 'GLS University, Paldi', 'PhD Researcher at VIT', 'NAAC Accredition Point 1', 'Yes', 5000, 2000, 3000, 500, 300, 0, 0, 3000, '2019-09-02', '2019-09-04', 2, '2019-07-18', 'Approve', 'Reject', 'Sessionals are Arriving, so syllabus has to be completed asap								'),
(2, 'Vishal Mehta', 'Assistant Professor', 'STTP', '2019-09-12', '2019-09-30', 'Research in Fluid Mechanics', 'NIT Surat', 'Mr. Saptarshi Nakaikh, Working as an Associate Pro', 'NAAC Accredition Point 1', 'No', 6000, 2000, 4000, 500, 600, 0, 0, 10000, '2019-09-11', '2019-10-01', 1, '2019-08-26', 'Approve', 'Approve', ''),
(3, 'Pronoya Bhattacharya', 'Assistant Professor', 'Workshop', '2019-09-05', '2019-09-07', 'Internet Of Things', 'ITNU, B Audi (B101)', 'ISTE Students Chapter', 'NAAC Accredition Point 1', 'No', 10000, 2000, 8000, 500, 300, 0, 0, 20000, '2019-09-04', '2019-09-05', 1, '2019-08-31', 'Approve', 'Approve', ''),
(4, 'Roshan Tandel', 'Assistant Professor', 'Symposium', '2019-11-08', '2019-11-15', 'Research in mechatronics', 'IIT-Delhi', 'MESA - IITD', 'NAAC Accredition Point 1', 'Yes', 256000, 132000, 124000, 5000, 2500, 0, 0, 7500, '2019-11-07', '2019-11-16', 1, '2019-10-28', 'Approve', 'Approve', ''),
(5, 'Roshan Tandel', 'Assistant Professor', 'Workshop', '2019-12-01', '2019-12-13', 'Research in Fluid Mechanics', 'GLS University, Paldi', 'MESA - ITNU', 'NAAC Accredition Point 2', 'No', 256000, 132000, 124000, 2000, 1500, 1000, 1000, 10000, '2019-12-01', '2019-12-14', 0, '1970-01-01', '', '', ''),
(6, 'Pronoya Bhattacharya', 'Assistant Professor', 'Seminar', '2019-11-22', '2019-11-23', 'Data Mining', 'NIT Gandhinagar', 'ACES - NITGn', 'NAAC Accredition Point 1', 'No', 150000, 100000, 50000, 10000, 10000, 10000, 20000, 10000, '2019-11-21', '2019-11-23', 0, '1970-01-01', 'Approve', '', ''),
(7, 'Ajay Patel', 'Assistant Professor', 'Conference', '2019-11-01', '2019-11-08', 'Research in mechatronics', 'PG Research Centre, PDPU', 'MESA - ITNU', 'NAAC Accredition Point 2', 'No', 249000, 149000, 100000, 10000, 10000, 50000, 20000, 25000, '2019-11-01', '2019-11-08', 0, '1970-01-01', '', '', ''),
(8, 'Malaram Kumhar', 'Associate Professor', 'Convention', '2019-11-01', '2019-11-02', 'Internet Of Things', 'NIT Surat', 'ISTE Students Chapter', 'NAAC Accredition Point 1', 'Yes', 150000, 120800, 29200, 10000, 10000, 1000, 20000, 10000, '2019-11-01', '2019-11-02', 1, '2019-11-22', 'Reject', '', '								avfcd');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Email_ID` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Section` varchar(20) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Confirm_Pass` varchar(15) NOT NULL,
  `Token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Email_ID`, `Name`, `Department`, `Section`, `Designation`, `Password`, `Confirm_Pass`, `Token`) VALUES
('17bce034@nirmauni.ac.in', 'Siddharth Jotwani', 'CSE', '', 'Assistant Professor', 'changeme', 'changeme', ''),
('17bce036@nirmauni.ac.in', 'Dr. Madhuri Bhavsar', 'CSE', 'PG-CE', 'HOD', 'it_hod_cse', 'it_hod_cse', ''),
('acc.manager@nirmauni.ac.in', 'Krunal Verma', 'Accounts', '', 'Accounts Manager', 'kv123', 'kv123', ''),
('ajay.patel@nirmauni.ac.in', 'Ajay Patel', 'ME', 'PG-ME', 'Assistant Professor', 'ap123', 'ap123', ''),
('amit.patel@nirmauni.ac.in', 'Amit Patel', 'EE', 'PG-EE', 'Associate Professor', 'ap123', 'ap123', ''),
('anand_patel@nirmauni.ac.in', 'Anand Patel', 'ME', 'PG-ME', 'HOD', 'it_hod_me', 'it_hod_me', ''),
('arth.patel@nirmauni.ac.in', 'Arth Patel', 'CL', 'UG-CL', 'Professor', 'ap123', 'ap123', ''),
('dhaval.pujara@nirmauni.ac.in', 'Dhaval Pujara', 'EC', 'UG-EC', 'Professor', 'dp123', 'dp123', ''),
('digesh.joshi@nirmauni.ac.in', 'Digesh Joshi', 'CH', 'UG-CH', 'Associate Professor', 'djs123', 'djs123', ''),
('director_it@nirmauni.ac.in', 'Dr. Alka Mahajan', 'Dean', '', 'Director', 'itnu_director', 'itnu_director', ''),
('jigna.patel@nirmauni.ac.in', 'Jigna Patel', 'CSE', 'UG-CE', 'Assistant Professor', 'jp123', 'jp123', ''),
('mahesh.yeolekar@nirmauni.ac.in', 'Mahesh Yeolekar', 'HM', 'UG-HM', 'Assistant Professor', 'myl786', 'myl786', ''),
('malaram.kumhar@nirmauni.ac.in', 'Malaram Kumhar', 'CSE', 'UG-IT', 'Associate Professor', 'mkk123', 'mkk123', ''),
('monika.shah@nirmauni.ac.in', 'Monica Shah', 'CSE', 'UG-CE', 'Assistant Professor', 'ms123', 'ms123', ''),
('neha.patni@nirmauni.ac.in', 'Neha patni', 'CH', 'PG-CH', 'Assistant Professor', 'np123', 'np123', ''),
('nimish.shah@nirmauni.ac.in', 'Nimish Shah', 'CH', 'UG-CH', 'Associate Professor', 'ns123', 'ns123', ''),
('pronaya.bhattacharya@nirmauni.ac.in', 'Pronoya Bhattacharya', 'CSE', 'UG-IT', 'Assistant Professor', 'pbiot123', 'pbiot123', ''),
('ram.narayan@nirmauni.ac.in', 'Ram Narayan', 'IC', 'UG-IC', ' Professor', 'rn123', 'rn123', ''),
('roshan.tandel@nirmauni.ac.in', 'Roshan Tandel', 'ME', 'UG-ME', 'Assistant Professor', 'rt123', 'rt123', ''),
('rutul.patel@nirmauni.ac.in', 'Rutul Patel', 'EC', 'PG-EC', 'Assistant Professor', 'rp123', 'rp123', ''),
('sandeep.malhotra@nirmauni.ac.in', 'Sandeep Malhotra', 'HM', 'PG-HM', 'Assistant Professor', 'sm123', 'sm123', ''),
('sanjay.kapoor@nirmauni.ac.in', 'Sanjay Kapoor', 'ME', 'UG-ME', 'Associate Professor', 'sk123', 'sk123', ''),
('shivpal.yadav@nirmauni.ac.in', 'Shivpal Yadav', 'IC', 'PG-IC', 'Associate Professor', 'sy123', 'sy123', ''),
('sidj@nirmauni.ac.in', 'SD', 'Administration', '', 'Administration', 'sjdk123', 'sjdk123', ''),
('sub.shi@nirmauni.ac.in', 'Subramannyam Shivappa', 'CL', 'UG-CL', 'Assistant Professor', 'ss123', 'ss123', ''),
('vijay.ukani@nirmauni.ac.in', 'Vijay Ukani', 'CSE', 'PG-IT', 'Associate Professor', 'vj123', 'vj123', ''),
('vishal.mehta@nirmauni.ac.in', 'Vishal Mehta', 'ME', 'UG-ME', 'Assistant Professor', 'vm123', 'vm123', ''),
('vishal_parikh@nirmauni.ac.in', 'Vishal Parikh', 'CSE', 'PG-CE', 'Associate Professor', 'vupos123', 'vupos123', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Confirm_Pass` varchar(15) NOT NULL,
  `Token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`ID`, `Name`, `Department`, `Designation`, `Email_ID`, `Password`, `Confirm_Pass`, `Token`) VALUES
(1, 'Malaram Kumhar', 'CSE', 'Associate Professor', 'malaram.kumhar@nirmauni.ac.in', 'mkk123', 'mkk123', ''),
(2, 'Vishal Parikh', 'CSE', 'Associate Professor', 'vishal_parikh@nirmauni.ac.in', 'vupos123', 'vupos123', ''),
(4, 'SD', 'Administration', 'Administration', 'sidj@nirmauni.ac.in', 'sjdk123', 'sjdk123', ''),
(5, 'Vishal Mehta', 'ME', 'Assistant Professor', 'vishal.mehta@nirmauni.ac.in', 'vm123', 'vm123', ''),
(6, 'Roshan Tandel', 'ME', 'Assistant Professor', 'roshan.tandel@nirmauni.ac.in', 'rt123', 'rt123', ''),
(7, 'Sanjay Kapoor', 'ME', 'Associate Professor', 'sanjay.kapoor@nirmauni.ac.in', 'sk123', 'sk123', ''),
(8, 'Amit Patel', 'EE', 'Associate Professor', 'amit.patel@nirmauni.ac.in', 'ap123', 'ap123', ''),
(9, 'Nimish Shah', 'CH', 'Associate Professor', 'nimish.shah@nirmauni.ac.in', 'ns123', 'ns123', ''),
(10, 'Neha patni', 'CH', 'Assistant Professor', 'neha.patni@nirmauni.ac.in', 'np123', 'np123', ''),
(11, 'Ram Narayan', 'IC', ' Professor', 'ram.narayan@nirmauni.ac.in', 'rn123', 'rn123', ''),
(12, 'Shivpal Yadav', 'IC', 'Associate Professor', 'shivpal.yadav@nirmauni.ac.in', 'sy123', 'sy123', ''),
(13, 'Rutul Patel', 'EC', 'Assistant Professor', 'rutul.patel@nirmauni.ac.in', 'rp123', 'rp123', ''),
(14, 'Dhaval Pujara', 'EC', 'Professor', 'dhaval.pujara@nirmauni.ac.in', 'dp123', 'dp123', ''),
(15, 'Arth Patel', 'CL', 'Professor', 'arth.patel@nirmauni.ac.in', 'ap123', 'ap123', ''),
(16, 'Subramannyam Shivappa', 'CL', 'Assistant Professor', 'sub.shi@nirmauni.ac.in', 'ss123', 'ss123s', ''),
(17, 'Pronoya Bhattacharya', 'CSE', 'Assistant Professor', 'pronaya_bhattacharya@nirmauni.ac.in', 'pbiot123', 'pbiot123', ''),
(18, 'Digesh Joshi', 'CH', 'Associate Professor', 'digesh.joshi@nirmauni.ac.in', 'djs123', 'djs123', ''),
(19, 'Mahesh Yeolekar', 'HM', 'Assistant Professor', 'mahesh.yeolekar@nirmauni.ac.in', 'myl786', 'myl786', ''),
(20, 'Monica Shah', 'CSE', 'Assistant Professor', 'monika.shah@nirmauni.ac.in', 'ms123', 'ms123', ''),
(21, 'Jigna Patel', 'CSE', 'Assistant Professor', 'jigna.patel@nirmauni.ac.in', 'jp123', 'jp123', ''),
(22, 'Vijay Ukani', 'CSE', 'Associate Professor', 'vijay.ukani@nirmauni.ac.in', 'vj123', 'vj123', ''),
(23, 'Ajay Patel', 'ME', 'Assistant Professor', 'ajay.patel@nirmauni.ac.in', 'ap123', 'ap123', ''),
(24, 'Siddharth Jotwani', 'CSE', 'Assistant Professor', '17bce034@nirmauni.ac.in', 'sjjg123', 'sjjg123', ''),
(25, 'Dr. Madhuri Bhavsar', 'CSE', 'HOD', '17bce036@nirmauni.ac.in', 'it_hod_cse', 'it_hod_cse', ''),
(26, 'Anand Patel', 'ME', 'HOD', 'anand_patel@nirmauni.ac.in', 'it_hod_me', 'it_hod_me', ''),
(27, 'Dr. Alka Mahajan', 'Dean', 'Director', 'director_it@nirmauni.ac.in', 'itnu_director', 'itnu_director', ''),
(28, 'Sandeep Malhotra', 'HM', 'Assistant Professor', 'sandeep.malhotra@nirmauni.ac.in', 'sm123', 'sm123', '');

-- --------------------------------------------------------

--
-- Table structure for table `reimburse_manage`
--

CREATE TABLE `reimburse_manage` (
  `ID` int(5) NOT NULL,
  `TA_DA_ID` int(11) NOT NULL,
  `Emp_Name` varchar(30) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Section` varchar(20) NOT NULL,
  `Budget_Allocated` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reimburse_manage`
--

INSERT INTO `reimburse_manage` (`ID`, `TA_DA_ID`, `Emp_Name`, `Email_ID`, `Department`, `Section`, `Budget_Allocated`) VALUES
(6, 9, 'Vishal Mehta', 'vishal.mehta@nirmauni.ac.in', 'ME', 'UG-ME', 11100),
(7, 10, 'Pronoya Bhattacharya', 'pronaya.bhattacharya@nirmauni.ac.in', 'CSE', 'UG-IT', 20800);

-- --------------------------------------------------------

--
-- Table structure for table `ta_da`
--

CREATE TABLE `ta_da` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `ID_TA` int(5) NOT NULL,
  `DEPART_DATE` varchar(11) NOT NULL,
  `DEPART_PLACE` varchar(15) NOT NULL,
  `DEPART_TIME` text NOT NULL,
  `ARRIVAL_DATE` text NOT NULL,
  `ARRIVAL_PLACE` varchar(15) NOT NULL,
  `ARRIVAL_TIME` text NOT NULL,
  `TRAVELL_BY` varchar(15) NOT NULL,
  `FARE_AMT` int(5) NOT NULL,
  `HALT_DAYS` int(5) NOT NULL,
  `DA_RATE` int(5) NOT NULL,
  `DA_TOTAL` int(5) NOT NULL,
  `CON_DATE` text NOT NULL,
  `CON_PLACE_FROM` varchar(15) NOT NULL,
  `CON_PLACE_TO` varchar(15) NOT NULL,
  `CON_KM` int(15) NOT NULL,
  `CON_AMT` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta_da`
--

INSERT INTO `ta_da` (`EMAIL_ID`, `ID`, `ID_TA`, `DEPART_DATE`, `DEPART_PLACE`, `DEPART_TIME`, `ARRIVAL_DATE`, `ARRIVAL_PLACE`, `ARRIVAL_TIME`, `TRAVELL_BY`, `FARE_AMT`, `HALT_DAYS`, `DA_RATE`, `DA_TOTAL`, `CON_DATE`, `CON_PLACE_FROM`, `CON_PLACE_TO`, `CON_KM`, `CON_AMT`) VALUES
('vishal.mehta@nirmauni.ac.in', 9, 17, '2019-10-03', 'Vadodara', '18:33', '2019-10-05', 'Bhavnagar', '06:40', 'Bus', 500, 3, 1000, 1500, '2019-10-05', 'Bhavnagar', 'Vadodara', 10, 2000),
('vishal.mehta@nirmauni.ac.in', 9, 18, '2019-10-11', 'Ahmedabad', '15:00', '2019-10-14', 'Rajkot', '09:20', 'Rail', 1000, 5, 1000, 1500, '2019-10-15', 'Ahmedabad', 'Rajkot', 50, 5000),
('pronaya.bhattacharya@nirmauni.ac.in', 10, 19, '2019-11-13', 'Ahmedabad', '10:10', '2019-11-15', 'Surendranagar', '11:11', 'Bus', 300, 2, 600, 1800, '2019-11-14', 'Ahmedabad', 'Mudi', 5, 1000),
('pronaya.bhattacharya@nirmauni.ac.in', 10, 20, '2019-11-15', 'Surendranagar', '20:00', '2019-11-17', 'Ahmedabad', '12:12', 'Rail', 500, 2, 600, 1200, '2019-11-16', 'Mudi', 'Ahmedabad', 4, 800);

-- --------------------------------------------------------

--
-- Table structure for table `ta_da_1`
--

CREATE TABLE `ta_da_1` (
  `ID` int(11) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `STTP_ID` int(11) NOT NULL,
  `ALL_MONTH` text NOT NULL,
  `BASIC_PAY` int(10) NOT NULL,
  `AGP` varchar(30) NOT NULL,
  `PURPOSE` varchar(500) NOT NULL,
  `CERTIFICATES` varchar(5000) NOT NULL,
  `FARE` int(10) NOT NULL,
  `DAILY_ALL` int(10) NOT NULL,
  `CONVEYANCE` int(10) NOT NULL,
  `OTHERS` int(10) NOT NULL,
  `TOTAL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta_da_1`
--

INSERT INTO `ta_da_1` (`ID`, `EMAIL_ID`, `STTP_ID`, `ALL_MONTH`, `BASIC_PAY`, `AGP`, `PURPOSE`, `CERTIFICATES`, `FARE`, `DAILY_ALL`, `CONVEYANCE`, `OTHERS`, `TOTAL`) VALUES
(9, 'vishal.mehta@nirmauni.ac.in', 2, '2019-10', 500, '3000', 'Travelling to conference center', 'I have actually performed the journey as per details given in the bill.,Rikshaw / Taxi fares shown in the bill are actuals (see overleaf),I have drawn an advance for the journey Rs.,The organisers had provided boarding / lodging / local conveyance.', 3000, 500, 500, 300, 5000),
(10, 'pronaya.bhattacharya@nirmauni.ac.in', 3, '2019-11', 2000, '1000', 'Organization of event', 'I have actually performed the journey as per details given in the bill.,I have actually stayed in hotel at the place of visit, the bill in original submitted.,I have not preferred or drawn this claim previously.', 4000, 500, 500, 300, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expense_form_1`
--
ALTER TABLE `expense_form_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Email_ID`);

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reimburse_manage`
--
ALTER TABLE `reimburse_manage`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `reimburse_manage_ibfk_1` (`Email_ID`),
  ADD KEY `TA_DA_ID` (`TA_DA_ID`);

--
-- Indexes for table `ta_da`
--
ALTER TABLE `ta_da`
  ADD PRIMARY KEY (`ID_TA`),
  ADD KEY `EMAIL_ID` (`EMAIL_ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `ta_da_1`
--
ALTER TABLE `ta_da_1`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL_ID` (`EMAIL_ID`),
  ADD KEY `STTP_ID` (`STTP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `expense_form_1`
--
ALTER TABLE `expense_form_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration1`
--
ALTER TABLE `registration1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reimburse_manage`
--
ALTER TABLE `reimburse_manage`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ta_da`
--
ALTER TABLE `ta_da`
  MODIFY `ID_TA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ta_da_1`
--
ALTER TABLE `ta_da_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reimburse_manage`
--
ALTER TABLE `reimburse_manage`
  ADD CONSTRAINT `reimburse_manage_ibfk_1` FOREIGN KEY (`Email_ID`) REFERENCES `registration` (`Email_ID`),
  ADD CONSTRAINT `reimburse_manage_ibfk_2` FOREIGN KEY (`TA_DA_ID`) REFERENCES `ta_da_1` (`ID`);

--
-- Constraints for table `ta_da`
--
ALTER TABLE `ta_da`
  ADD CONSTRAINT `ta_da_ibfk_2` FOREIGN KEY (`EMAIL_ID`) REFERENCES `registration` (`Email_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ta_da_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `ta_da_1` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ta_da_1`
--
ALTER TABLE `ta_da_1`
  ADD CONSTRAINT `ta_da_1_ibfk_1` FOREIGN KEY (`EMAIL_ID`) REFERENCES `registration` (`Email_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ta_da_1_ibfk_2` FOREIGN KEY (`STTP_ID`) REFERENCES `expense_form_1` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
