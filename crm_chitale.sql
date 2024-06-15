-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 09:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_chitale`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_interview`
--

CREATE TABLE `candidate_interview` (
  `ci_id` int(11) NOT NULL,
  `idate` date NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `toc` varchar(20) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `prev_salary` int(10) NOT NULL,
  `year_of_exp` int(10) NOT NULL,
  `notice_period` varchar(20) NOT NULL,
  `salary_expectation` bigint(10) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `hr_remark` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_interview`
--

INSERT INTO `candidate_interview` (`ci_id`, `idate`, `firstname`, `lastname`, `gender`, `phone`, `email`, `address`, `branch`, `toc`, `companyname`, `prev_salary`, `year_of_exp`, `notice_period`, `salary_expectation`, `grade`, `hr_remark`, `status`) VALUES
(1, '2020-08-05', 'Amit', 'Ghadage', 'Male', 7458125456, 'amit@gmail.com', 'Kothrud, Pune', 'Computer', 'Experience', 'IBM', 40000, 4, '10', 55000, 'Excellent', 'Candidate ready to join next week', 'Selected'),
(2, '2020-08-07', 'Shoheb', 'Kazi', 'Male', 9527710456, 'shohebkazi456@gmail.com', 'Narhe, Pune', 'Computer', 'Fresher', '', 0, 0, '', 60000, 'Excellent', 'Candidate ready to join from tommorow', 'Selected'),
(4, '2020-08-11', 'Gautam', 'Desai', 'Male', 9584124512, 'gautam@gmail.com', 'Swargate, Pune', 'Computer', 'Experience', 'L&T', 40000, 3, '10', 60000, 'Excellent', 'Candidate ready to join from next month', 'Selected'),
(5, '2020-08-11', 'Vikram', 'Sharma', 'Male', 8451245125, 'vikram@gmail.com', 'Deccan, Pune', 'Computer', 'Fresher', '', 0, 0, '', 200000, 'Excellent', 'Candidate ready to join from next week', 'Selected'),
(6, '2020-08-11', 'Shahid', 'Shaikh', 'Male', 7458569485, 'shahid@gmail.com', 'Narhe, Pune', 'Computer', 'Fresher', '', 0, 0, '', 60000, 'Good', 'Candidate ready to join from tommorrow', 'Rejeceted'),
(8, '2020-08-11', 'Monty', 'Periera', 'Male', 9574512451, 'monty@gmail.com', 'Deccan, Pune', 'Computer', 'Experience', 'Pinnacle', 25000, 2, '15', 30000, 'Excellent', 'Candidate ready to join from next week', 'Selected');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_verification`
--

CREATE TABLE `candidate_verification` (
  `vid` int(11) NOT NULL,
  `vdate` date NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `psphone` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `toc` varchar(20) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `prev_salary` varchar(10) NOT NULL,
  `year_of_exp` varchar(10) NOT NULL,
  `hr_remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_verification`
--

INSERT INTO `candidate_verification` (`vid`, `vdate`, `firstname`, `lastname`, `psphone`, `address`, `branch`, `toc`, `companyname`, `prev_salary`, `year_of_exp`, `hr_remark`) VALUES
(1, '2020-08-14', 'Amit', 'Ghadage', 8457124505, 'Valid', 'Valid', 'Experience', 'Valid', 'Valid', 'Valid', 'Verified Successfully'),
(2, '2020-08-15', 'Shoheb', 'Kazi', 7458124565, 'Valid', 'Valid', 'Fresher', 'NA', 'NA', 'NA', 'Verified Successfully'),
(3, '2020-08-17', 'Vikram', 'Sharma', 7458124584, 'Valid', 'Valid', 'Fresher', 'NA', 'NA', 'NA', 'Verified Successfully'),
(4, '2020-08-13', 'Gautam', 'Desai', 7458124562, 'Valid', 'Valid', 'Experience', 'Valid', 'Valid', 'Valid', 'Verified Successfully'),
(5, '2020-08-18', 'Monty', 'Periera', 7458124512, 'Valid', 'Valid', 'Experience', 'Valid', 'Not Valid', 'Valid', 'Verification Fail');

-- --------------------------------------------------------

--
-- Table structure for table `client_invoice`
--

CREATE TABLE `client_invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `deliveryaddress` varchar(100) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `pname1` varchar(20) NOT NULL,
  `unitprice1` int(10) NOT NULL,
  `qty1` int(5) NOT NULL,
  `billamt1` int(10) NOT NULL,
  `pname2` varchar(20) NOT NULL,
  `unitprice2` int(10) NOT NULL,
  `qty2` int(5) NOT NULL,
  `billamt2` int(10) NOT NULL,
  `pname3` varchar(20) NOT NULL,
  `unitprice3` int(10) NOT NULL,
  `qty3` int(5) NOT NULL,
  `billamt3` int(10) NOT NULL,
  `totalbillamt` int(20) NOT NULL,
  `gstamt` int(10) NOT NULL,
  `finalbillamt` int(20) NOT NULL,
  `invoicepreparedby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_invoice`
--

INSERT INTO `client_invoice` (`invoice_id`, `invoice_date`, `company_name`, `owner_name`, `deliveryaddress`, `contactno`, `pname1`, `unitprice1`, `qty1`, `billamt1`, `pname2`, `unitprice2`, `qty2`, `billamt2`, `pname3`, `unitprice3`, `qty3`, `billamt3`, `totalbillamt`, `gstamt`, `finalbillamt`, `invoicepreparedby`) VALUES
(10, '2020-07-31', 'Ganesh Dairy', 'Ganesh', 'Narhe, Pune', 8457845745, 'Cow Milk', 40, 200, 8000, '', 0, 0, 0, '', 0, 0, 0, 8000, 1600, 9600, 'Shoheb Kazi'),
(11, '2020-08-01', 'Hira Panna', 'Deepak', 'Narhe, Pune', 7458125485, 'Cow Milk', 40, 200, 8000, '', 0, 0, 0, '', 0, 0, 0, 8000, 1600, 9600, 'Shoheb Kazi'),
(12, '2020-08-27', 'Hira Panna', 'Suresh Patil', 'Manaji Nagar Narhe', 7458451245, 'Cow Milk', 40, 100, 4000, 'Buffalo Milk', 50, 100, 5000, '', 0, 0, 0, 9000, 1800, 10800, 'Shoheb Kazi'),
(13, '2020-08-26', 'Amul Dairy', 'Ganesh', 'Kothrud, Pune', 9545744512, 'Cow Milk', 40, 100, 4000, 'Buffalo Milk', 50, 100, 5000, '', 0, 0, 0, 9000, 1800, 10800, 'Smith'),
(14, '2020-08-26', 'Hira Panna', 'Deepak', 'Katraj, Pune', 7458454545, 'Cow Milk', 40, 310, 12400, '', 0, 0, 0, '', 0, 0, 0, 12400, 2480, 14880, 'Amit Ghadage');

-- --------------------------------------------------------

--
-- Table structure for table `dailycollection`
--

CREATE TABLE `dailycollection` (
  `dc_id` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sdate` date NOT NULL,
  `myproduct` varchar(100) NOT NULL,
  `cmqty` int(10) NOT NULL,
  `cmfat` int(10) NOT NULL,
  `cmrate` int(10) NOT NULL,
  `cbill` bigint(10) NOT NULL,
  `bmqty` int(10) NOT NULL,
  `bmfat` int(10) NOT NULL,
  `bmrate` int(10) NOT NULL,
  `bbill` int(10) NOT NULL,
  `tbillamt` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailycollection`
--

INSERT INTO `dailycollection` (`dc_id`, `sname`, `sdate`, `myproduct`, `cmqty`, `cmfat`, `cmrate`, `cbill`, `bmqty`, `bmfat`, `bmrate`, `bbill`, `tbillamt`) VALUES
(1, 'Ramesh Jadhav', '2020-08-18', 'Cow Milk ', 50, 3, 30, 1500, 0, 0, 0, 0, 1500),
(2, 'Digvijay Subhedar', '2020-08-18', 'Buffalo Milk ', 0, 0, 0, 0, 80, 3, 40, 3200, 3200),
(3, 'Ramesh Jadhav', '2020-08-20', 'Cow Milk Buffalo Milk ', 50, 3, 30, 1500, 60, 3, 40, 2400, 3900),
(4, 'Mohan', '2020-08-19', 'Cow Milk Buffalo Milk ', 50, 5, 30, 1500, 50, 2, 40, 2000, 3500),
(6, 'Digvijay Subhedar', '2020-08-20', 'Cow Milk ', 60, 2, 30, 1800, 0, 0, 0, 0, 1800),
(7, 'John', '2020-08-25', 'Cow Milk Buffalo Milk ', 100, 5, 30, 3000, 100, 5, 40, 4000, 7000),
(8, 'John', '2020-08-27', 'Cow Milk Buffalo Milk ', 500, 5, 30, 15000, 500, 5, 40, 20000, 35000),
(9, 'Mohan', '2020-08-26', 'Cow Milk ', 500, 5, 30, 15000, 0, 0, 0, 0, 15000),
(10, 'Digvijay Subhedar', '2020-08-26', 'Cow Milk Buffalo Milk ', 100, 5, 30, 3000, 500, 5, 40, 20000, 23000),
(11, 'Rahul Desai', '2020-08-26', 'Cow Milk Buffalo Milk ', 1000, 5, 30, 30000, 500, 5, 40, 20000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_register`
--

CREATE TABLE `employee_register` (
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `job` varchar(20) NOT NULL,
  `adharcardno` int(12) NOT NULL,
  `pancardno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `jobloc` varchar(30) NOT NULL,
  `year_of_exp` int(10) NOT NULL,
  `hiredate` date NOT NULL,
  `emp_blood_group` varchar(20) NOT NULL,
  `spouse_name` varchar(20) NOT NULL,
  `spouse_phoneno` bigint(10) NOT NULL,
  `monthly_sal` bigint(10) NOT NULL,
  `incentive` varchar(20) NOT NULL,
  `insurance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`employee_id`, `firstname`, `lastname`, `phone`, `email`, `address`, `job`, `adharcardno`, `pancardno`, `gender`, `jobloc`, `year_of_exp`, `hiredate`, `emp_blood_group`, `spouse_name`, `spouse_phoneno`, `monthly_sal`, `incentive`, `insurance`) VALUES
(1, 'Shoheb', 'Kazi', 9987725546, 'shohebkazi456@gmail.com', 'Narhe, Pune', 'Manager', 2147483647, 'GHJHKJ454', 'Male', 'Mumbai', 2, '2020-08-03', 'B+', '', 0, 50000, 'Applicable', 'Self'),
(2, 'Amit', 'Ghadage', 7458125485, 'amit1@gmail.com', 'Kothrud, Pune', 'Chairmen', 2147483647, 'FTGS54EE', 'Male', 'Pune', 2, '2020-08-04', 'A+', '', 0, 45000, 'Applicable', 'Floater'),
(3, 'Rakesh', 'Sharma', 8457695487, 'rakhesh@gmail.com', 'Kothrud, Pune', 'Supervisor', 2147483647, 'JH54DFEF4', 'Male', 'Nashik', 5, '2020-08-08', 'O+', 'Ria Sharma', 7458124585, 30000, 'Applicable', 'Floater');

-- --------------------------------------------------------

--
-- Table structure for table `new_client`
--

CREATE TABLE `new_client` (
  `client_id` int(11) NOT NULL,
  `shopname` varchar(30) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `shopaddress` varchar(500) NOT NULL,
  `deliveryby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_client`
--

INSERT INTO `new_client` (`client_id`, `shopname`, `cname`, `mobileno`, `emailid`, `product`, `shopaddress`, `deliveryby`) VALUES
(1, 'Hira Panna', 'Deepak Thakur', 8458745847, 'hirapanna@gmail.com', 'Milk Curd ', 'Narhe Road, Near Bank of Maharashtra', 'Self'),
(3, 'As Shop', 'Ram', 8458154512, 'as@gmail.com', 'Milk Butter ', 'Kothrud, Pune', 'By Chitale'),
(4, 'Amul Dairy', 'Gautam', 8458125685, 'amuld@gmail.com', 'Milk Curd Amrakhand Shrikhand Butter ', 'Swargate, Pune', 'By Chitale');

-- --------------------------------------------------------

--
-- Table structure for table `new_retailer`
--

CREATE TABLE `new_retailer` (
  `retailer_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `aadharcardno` bigint(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_retailer`
--

INSERT INTO `new_retailer` (`retailer_id`, `fname`, `lname`, `phoneno`, `emailid`, `address`, `aadharcardno`, `gender`, `product`) VALUES
(1, 'Kanis', 'Dsouza', 8454124575, 'kanis1@gmail.com', 'Narhe, Pune', 774581245012, 'Male', 'Cow Milk Buffalo Milk '),
(2, 'Hemant', 'Sharma', 9584512451, 'hemant@gmail.com', 'Kothrud, Pune', 745124512412, 'Male', 'Cow Milk ');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pid` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `pname` varchar(20) NOT NULL,
  `cop` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `pamt` bigint(10) NOT NULL,
  `purchaseby` varchar(20) NOT NULL,
  `pofp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pid`, `pdate`, `pname`, `cop`, `qty`, `pamt`, `purchaseby`, `pofp`) VALUES
(1, '2020-08-06', 'Chair', 800, 5, 4000, 'Shoheb Kazi', 'Office Use'),
(2, '2020-08-07', 'Printer', 20000, 1, 20000, 'Amit Ghadage', 'To print the bills'),
(3, '2020-08-08', 'Table', 2000, 3, 6000, 'Rakesh Sharma', 'Office Use');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_invoice`
--

CREATE TABLE `retailer_invoice` (
  `retailer_invoice_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `deliveryaddress` varchar(100) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `pname1` varchar(20) NOT NULL,
  `unitprice1` int(10) NOT NULL,
  `qty1` int(5) NOT NULL,
  `billamt1` int(10) NOT NULL,
  `pname2` varchar(20) NOT NULL,
  `unitprice2` int(10) NOT NULL,
  `qty2` int(5) NOT NULL,
  `billamt2` int(10) NOT NULL,
  `pname3` varchar(20) NOT NULL,
  `unitprice3` int(10) NOT NULL,
  `qty3` int(5) NOT NULL,
  `billamt3` int(10) NOT NULL,
  `totalbillamt` int(20) NOT NULL,
  `gstamt` int(10) NOT NULL,
  `finalbillamt` int(20) NOT NULL,
  `invoicepreparedby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer_invoice`
--

INSERT INTO `retailer_invoice` (`retailer_invoice_id`, `invoice_date`, `company_name`, `owner_name`, `deliveryaddress`, `contactno`, `pname1`, `unitprice1`, `qty1`, `billamt1`, `pname2`, `unitprice2`, `qty2`, `billamt2`, `pname3`, `unitprice3`, `qty3`, `billamt3`, `totalbillamt`, `gstamt`, `finalbillamt`, `invoicepreparedby`) VALUES
(1, '2020-08-04', 'Amul Dairy', 'Hemant', 'Kothrud, Pune', 8457457457, 'Cow Milk', 50, 100, 5000, 'Buffalo Milk', 60, 100, 6000, '', 0, 0, 0, 11000, 2200, 13200, 'Shoheb Kazi'),
(5, '2020-08-26', 'Amul Dairy', 'Manoj', 'Narhe, Pune', 8451245745, 'Cow Milk', 50, 200, 10000, 'Buffalo Milk', 60, 200, 12000, '', 0, 0, 0, 22000, 4400, 26400, 'Shoheb Kazi'),
(6, '2020-08-26', 'Hira Panna', 'Deepak', 'Kothrud, Pune', 8458124574, 'Cow Milk', 50, 100, 5000, '', 0, 0, 0, '', 0, 0, 0, 5000, 1000, 6000, 'Amit Ghadage'),
(7, '2020-08-26', 'Amul Dairy', 'Hemant', 'Kothrud, Pune', 8454124574, 'Cow Milk', 50, 100, 5000, 'Buffalo Milk', 60, 100, 6000, '', 0, 0, 0, 11000, 2200, 13200, 'Shoheb Kazi'),
(8, '2020-08-26', 'JJ Tea Shop', 'John', 'Swargate, Pune', 8454745484, 'Cow Milk', 50, 100, 5000, 'Buffalo Milk', 60, 500, 30000, '', 0, 0, 0, 35000, 7000, 42000, 'Shoheb Kazi'),
(9, '2020-08-26', 'Amul Dairy', 'Ganesh', 'Katraj, Pune', 9584512451, 'Cow Milk', 50, 100, 5000, 'Buffalo Milk', 60, 690, 41400, '', 0, 0, 0, 46400, 9280, 55680, 'Smith');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadharcardno` bigint(12) NOT NULL,
  `supply_for` varchar(100) NOT NULL,
  `cow_milk_cost` int(10) NOT NULL,
  `buffalo_milk_cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `sname`, `phoneno`, `address`, `email`, `aadharcardno`, `supply_for`, `cow_milk_cost`, `buffalo_milk_cost`) VALUES
(1, 'Ram', 7458124574, 'Narhe, Pune', 'ram@gmail.com', 845124512451, 'Cow Milk Buffalo Milk ', 30, 40),
(2, 'Amol Sharma', 8457451245, 'Deccan, Pune', 'amol@gmail.com', 745145124512, 'Cow Milk ', 30, 0),
(3, 'Wasim Shaikh', 8456856459, 'Kothrud, Pune', 'wasim@gmail.com', 214748364742, 'Buffalo Milk ', 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `userid` int(11) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `emp_post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`userid`, `ename`, `email`, `password`, `mobileno`, `emp_post`) VALUES
(1, 'Shoheb Kazi', 'shohebkazi456@gmail.com', 'shoheb123', 9527710456, 'Supervisor'),
(2, 'Amit Ghadage', 'amit@gmail.com', 'amit123', 8954578451, 'Manager'),
(3, 'Rakesh', 'rakesh@gmail.com', 'rakesh123', 9568521245, 'Supervisor'),
(4, 'Smith', 'smith@gmail.com', 'smith123', 7458124584, 'Clerk'),
(5, 'David', 'david@gmail.com', 'david123', 9585451245, 'Supervisor'),
(6, 'Digvijay', 'digvi@gmail.com', 'digvijay123', 7458124584, 'Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `vehicle_id` int(11) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `vno` varchar(50) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `lno` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `aphoneno` bigint(10) NOT NULL,
  `aadharcardno` bigint(12) NOT NULL,
  `insurance` varchar(10) NOT NULL,
  `insurance_c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`vehicle_id`, `vname`, `vno`, `dname`, `lno`, `address`, `phoneno`, `aphoneno`, `aadharcardno`, `insurance`, `insurance_c`) VALUES
(2, 'Truck', 'MH09-6755', 'Rahul Desai', 'DL-27482484', 'Narhe, Pune', 7458124585, 7581254651, 745125865215, 'Yes', 'HDFC'),
(3, 'Truck', 'MH09-4515', 'John Dsouza', 'DL-27654181', 'Kothrud, Pune', 8451245254, 9568451251, 745125854125, 'No', ''),
(4, 'Mini Truck', 'MH09-4512', 'Karan', 'DL-9854584', 'Swargate, Pune', 8456120210, 8542102211, 745120658545, 'Yes', 'Bajaj Allianz General Insurance'),
(5, 'Truck', 'MH09-4144', 'Ishant', 'DL-2548414', 'Narhe, Pune', 8459512012, 8474512458, 956824512475, 'Yes', 'National Insurance Company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `candidate_verification`
--
ALTER TABLE `candidate_verification`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `client_invoice`
--
ALTER TABLE `client_invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `dailycollection`
--
ALTER TABLE `dailycollection`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `employee_register`
--
ALTER TABLE `employee_register`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `new_client`
--
ALTER TABLE `new_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `new_retailer`
--
ALTER TABLE `new_retailer`
  ADD PRIMARY KEY (`retailer_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `retailer_invoice`
--
ALTER TABLE `retailer_invoice`
  ADD PRIMARY KEY (`retailer_invoice_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_interview`
--
ALTER TABLE `candidate_interview`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `candidate_verification`
--
ALTER TABLE `candidate_verification`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_invoice`
--
ALTER TABLE `client_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dailycollection`
--
ALTER TABLE `dailycollection`
  MODIFY `dc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_register`
--
ALTER TABLE `employee_register`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_client`
--
ALTER TABLE `new_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_retailer`
--
ALTER TABLE `new_retailer`
  MODIFY `retailer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `retailer_invoice`
--
ALTER TABLE `retailer_invoice`
  MODIFY `retailer_invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
