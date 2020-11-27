-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2020 at 08:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stocktrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `allfiles`
--

CREATE TABLE `allfiles` (
  `fileslno` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `filefor` varchar(50) NOT NULL,
  `fileforid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allfiles`
--

INSERT INTO `allfiles` (`fileslno`, `filename`, `filefor`, `fileforid`) VALUES
(19, 'mivi.png', 'product', '2'),
(20, 'anupam-mondal-freelancer.png', 'customer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `auditslno` int(11) NOT NULL,
  `userslno` int(20) NOT NULL,
  `actiondt` date NOT NULL,
  `actiontype` varchar(100) NOT NULL,
  `actionon` varchar(20) NOT NULL,
  `actionlogtype` varchar(50) NOT NULL,
  `actionid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`auditslno`, `userslno`, `actiondt`, `actiontype`, `actionon`, `actionlogtype`, `actionid`) VALUES
(2, 9, '2019-09-15', 'update', 'product', 'NA', 6),
(3, 9, '2019-09-15', 'update', 'supplier', 'NA', 3),
(7, 9, '2019-09-16', 'delete', 'product', 'attachment', 1),
(8, 11, '2019-09-17', 'update', 'log', 'operation update', 2),
(9, 9, '2019-09-20', 'update', 'log', 'strategy update', 2),
(10, 9, '2019-09-20', 'add', 'log', 'NA', 0),
(11, 1, '2019-10-07', 'delete', 'customer', 'attachment', 2),
(12, 1, '2019-10-07', 'delete', 'product', 'attachment', 1),
(13, 1, '2019-10-07', 'delete', 'product', 'attachment', 2),
(14, 1, '2019-10-07', 'delete', 'product', 'attachment', 2),
(15, 1, '2019-10-07', 'delete', 'supplier', 'attachment', 21);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_slno` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_comp` varchar(100) NOT NULL,
  `cust_tel1` varchar(20) NOT NULL,
  `cust_tel2` varchar(20) NOT NULL,
  `cust_mail` varchar(30) NOT NULL,
  `cust_url` varchar(30) NOT NULL,
  `cust_addr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_slno`, `cust_name`, `cust_comp`, `cust_tel1`, `cust_tel2`, `cust_mail`, `cust_url`, `cust_addr`) VALUES
(1, 'Anupam Mondal', 'Kai Technologies', '9474460058', '9433815504', 'a09051985@gmal.com', 'https://anupammondal.in', 'Protapnagar, Sonarpur, South 24 Parganas, West Bengal, India 743330'),
(2, 'Mondira Mondal', 'Moon Inc', '9433815504', '9474460058', 'contact@monninc.au', 'http://mooninc.au', 'Found Nowhere'),
(3, 'Hritick Baidya', 'Law Inc.', '9919190011', '9919190012', 'contact@law-inc.in', 'http://law-inc.in', 'Homeground, Sate Bengal, India');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `logslno` int(11) NOT NULL,
  `logno` varchar(20) NOT NULL,
  `logempslno` int(10) NOT NULL,
  `logcustslno` int(10) NOT NULL,
  `logponum` varchar(50) NOT NULL,
  `logpoval` int(20) NOT NULL,
  `logrfqdt` date NOT NULL,
  `logedd` date NOT NULL,
  `logadd` date NOT NULL,
  `logquotdt` date NOT NULL,
  `logrequestor` varchar(50) NOT NULL,
  `logpodt` date NOT NULL,
  `logsub` varchar(200) NOT NULL,
  `logdesc` varchar(400) NOT NULL,
  `logrem` varchar(100) NOT NULL,
  `logsupppay` int(11) NOT NULL,
  `loggaoffer` int(20) NOT NULL,
  `logstrtstat` varchar(100) NOT NULL,
  `logoprtstat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`logslno`, `logno`, `logempslno`, `logcustslno`, `logponum`, `logpoval`, `logrfqdt`, `logedd`, `logadd`, `logquotdt`, `logrequestor`, `logpodt`, `logsub`, `logdesc`, `logrem`, `logsupppay`, `loggaoffer`, `logstrtstat`, `logoprtstat`) VALUES
(2, '1001', 8, 2, '', 0, '2019-09-05', '0000-00-00', '0000-00-00', '0000-00-00', 'Mondira M', '0000-00-00', 'RFQ by Mondira M', 'RFQ on 05.09.2019 by Mondira M', 'Pending', 0, 0, 'Quotation Phase', 'Preparing PO'),
(3, '1003', 8, 1, '', 0, '2019-09-09', '0000-00-00', '0000-00-00', '0000-00-00', 'A Mondal', '0000-00-00', 'No Subject', 'No Description', '', 0, 100, 'Quotation Phase', ''),
(4, '1004', 9, 3, '', 0, '2019-09-15', '0000-00-00', '0000-00-00', '0000-00-00', 'Hritick B', '0000-00-00', 'Construction Equipments', 'Equipment\'s like Door Bell, Digital Lock for entry, Card Swipe System', '', 0, 0, 'Quotation Phase', ''),
(5, '1005', 9, 3, '', 0, '2019-09-15', '0000-00-00', '0000-00-00', '0000-00-00', 'Hritick B', '0000-00-00', 'Construction Equipments', 'Equipment\'s like Door Bell, Digital Lock for entry, Card Swipe System', '', 0, 0, 'Quotation Phase', '');

-- --------------------------------------------------------

--
-- Table structure for table `logsuppliers`
--

CREATE TABLE `logsuppliers` (
  `logsuppslno` int(11) NOT NULL,
  `logslno` int(20) NOT NULL,
  `suppslno` int(11) NOT NULL,
  `logprodslno` int(11) NOT NULL,
  `logprodq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logsuppliers`
--

INSERT INTO `logsuppliers` (`logsuppslno`, `logslno`, `suppslno`, `logprodslno`, `logprodq`) VALUES
(1, 1, 2, 1, 1),
(2, 1, 3, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodslno` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_manu` varchar(100) NOT NULL,
  `prod_partno` varchar(100) NOT NULL,
  `prod_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodslno`, `prod_name`, `prod_manu`, `prod_partno`, `prod_desc`) VALUES
(1, 'HP Laptop', 'Hewlett Packard', 'HP14QCS0009TU', 'HP 14\" Notebook, 4 GB RAM, 1 TB HDD, Intel 6th Gen Processor'),
(2, 'Mivi Octave', 'Mivi', 'BS16OT', 'Super Solid Bass: Enjoy powerful audio with best in class dual drivers and passive subwoofer. 360 degree HD Stereo Sound: Omni Directional transducers for 360 immersive sound experience . True Wireles'),
(3, 'Bass Heads 225', 'boAt', 'B01MCUSD3L', 'Super Extra Bass, Powerful 10mm Drivers, HD Clear Sound, In-Line Microphone, Play/Pause your music, Change your tracks and Ans/end your calls, Passive Noise Isolation, Speaker resistance 16?, Sensitiv'),
(4, 'Germkill kit for Advanced 23 L', 'HUL Pureit', '18602101000', 'HUL Pureit Germkill kit for Advanced 23 L Water Purifier - 3000 L'),
(6, 'Boult Audio AirBass Monopod', 'Boult', 'B07LG2CRYC', 'Boult Audio AirBass Monopod in-Ear Wireless Bluetooth Earphones with inbuilt Mic and IPX4 Sweatproof (Black)');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_slno` int(11) NOT NULL,
  `supp_name` varchar(100) NOT NULL,
  `supp_comp` varchar(100) NOT NULL,
  `supp_tel1` varchar(20) NOT NULL,
  `supp_tel2` varchar(20) NOT NULL,
  `supp_mail` varchar(30) NOT NULL,
  `supp_url` varchar(30) NOT NULL,
  `supp_addr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_slno`, `supp_name`, `supp_comp`, `supp_tel1`, `supp_tel2`, `supp_mail`, `supp_url`, `supp_addr`) VALUES
(1, 'Anupam Mondal', 'Anupam Inc', '9474460058', '9433815504', 'a09051985@gmail.com', 'https://anupammondal.in', 'Protapnagar, Sonarpur, South 24 Parganas, West Bengal, India 743330'),
(2, 'Prithwiraj Dasgupta', 'Ritehorn', '9191919191', '1919191919', 'pdg@gmail.com', 'http://www.ritehorn.in', 'Kolkata, India'),
(3, 'Contact Person', 'Company info', '1010101010', '1212121212', 'no@email.com', 'http://emocomp.co.in', 'No Address'),
(4, 'Tapan Mondal', 'Home', '1231231231', '2345234567', 'my@email.com', 'http://anupammondal.in', 'Refugee'),
(5, 'Jeff Bezos', 'Amazon', '1011011011', '1011011010', 'support@amazon.in', 'http://www.amazon.in', 'Bellevue, Washington, United States');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userslno` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `userpass` varchar(200) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `userrole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userslno`, `username`, `useremail`, `userpass`, `usertype`, `userrole`) VALUES
(1, 'Anupam Mondal', 'a09051985@gmail.com', '12345', 'admin', ''),
(8, 'Anupam Mondal', 'anupam@mail.com', '12345', 'employee', 'Level 2'),
(9, 'Tapan Mondal', 'tapan@email.com', '12345', 'employee', 'Level 1'),
(10, 'Fahad A', 'fahada@gmail.com', '12345', 'admin', ''),
(11, 'Kanan Mondal', 'kanan@gmail.com', '12345', 'employee', 'Level 3'),
(12, 'Fahad', '112@ere.com', '12345', 'employee', 'Level 1'),
(13, 'Abdulraheem', 'Abduraheem@yahoo.com', '12345', 'employee', 'Level 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allfiles`
--
ALTER TABLE `allfiles`
  ADD PRIMARY KEY (`fileslno`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`auditslno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_slno`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`logslno`);

--
-- Indexes for table `logsuppliers`
--
ALTER TABLE `logsuppliers`
  ADD PRIMARY KEY (`logsuppslno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodslno`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_slno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userslno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allfiles`
--
ALTER TABLE `allfiles`
  MODIFY `fileslno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `auditslno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `logslno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logsuppliers`
--
ALTER TABLE `logsuppliers`
  MODIFY `logsuppslno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodslno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userslno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
