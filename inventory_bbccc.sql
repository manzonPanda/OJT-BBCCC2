-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 08:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_bbccc`
--
CREATE DATABASE IF NOT EXISTS `inventory_bbccc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory_bbccc`;

-- --------------------------------------------------------

--
-- Table structure for table `beginning_inv`
--

CREATE TABLE `beginning_inv` (
  `item_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beginning_inv`
--

INSERT INTO `beginning_inv` (`item_id`, `quantity`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 0),
(82, 0),
(83, 0),
(84, 0),
(85, 0),
(86, 0),
(87, 0),
(88, 0),
(89, 0),
(90, 0),
(91, 0),
(92, 0),
(93, 0),
(94, 0),
(95, 0),
(96, 0),
(97, 0),
(98, 0),
(99, 0),
(100, 0),
(101, 0),
(102, 0),
(103, 0),
(104, 0),
(105, 0),
(106, 0),
(107, 0),
(108, 0),
(109, 0),
(110, 0),
(111, 0),
(112, 0),
(113, 0),
(114, 0),
(115, 0),
(116, 0),
(117, 0),
(118, 0),
(119, 0),
(120, 0),
(121, 0),
(122, 0),
(123, 0),
(124, 0),
(125, 0),
(126, 0),
(127, 0),
(128, 0),
(129, 0),
(130, 0),
(131, 0),
(132, 0),
(133, 0),
(134, 0),
(135, 0),
(136, 0),
(137, 0),
(138, 0),
(139, 0),
(140, 0),
(141, 0),
(142, 0),
(143, 0),
(144, 0),
(145, 0),
(146, 0),
(147, 0),
(148, 0),
(149, 0),
(150, 0),
(151, 0),
(152, 0),
(153, 0),
(154, 0),
(155, 0),
(156, 0),
(157, 0),
(158, 0),
(159, 0),
(160, 0),
(161, 0),
(162, 0),
(163, 0),
(164, 0),
(165, 0),
(166, 0),
(167, 0),
(168, 0),
(169, 0),
(170, 0),
(171, 0),
(172, 0),
(173, 0),
(174, 0),
(175, 0),
(176, 0),
(177, 0),
(178, 0),
(179, 0),
(180, 0),
(181, 0),
(182, 0),
(183, 0),
(184, 0),
(185, 0),
(186, 0),
(187, 0),
(188, 0),
(189, 0),
(190, 0),
(191, 0),
(192, 0),
(193, 0),
(194, 0),
(195, 0),
(196, 0),
(197, 0),
(198, 0),
(199, 0),
(200, 0),
(201, 0),
(202, 0),
(203, 0),
(204, 0),
(205, 0),
(206, 0),
(207, 0),
(208, 0),
(209, 0),
(210, 0),
(211, 0),
(212, 0),
(213, 0),
(214, 0),
(215, 0),
(216, 0),
(217, 0),
(218, 0),
(219, 0),
(220, 0),
(221, 0),
(222, 0),
(223, 0),
(224, 0),
(225, 0),
(226, 0),
(227, 0),
(228, 0),
(229, 0),
(230, 0),
(231, 0),
(232, 0),
(233, 0),
(234, 0),
(235, 0),
(236, 0),
(237, 0),
(238, 0),
(239, 0),
(240, 0),
(241, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `name`) VALUES
(1, 'ACCTG'),
(2, 'ADMIN'),
(3, 'ADMIN-MIS'),
(4, 'AUDIT'),
(5, 'C&C'),
(6, 'FIN'),
(7, 'GROCERY'),
(8, 'GUARD'),
(9, 'HR'),
(10, 'LODGING & HALL'),
(11, 'LTB'),
(12, 'LWR'),
(13, 'MANAGER'),
(14, 'OFFICE');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('Main','Grocery','Office Supplies','Office Equipments') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `type`) VALUES
(1, ' Application Form Pink Form/BOOKLET-new ', 'Main'),
(2, ' Application Form WFD ', 'Main'),
(3, ' Application Form- Negotiable Promissory Note ', 'Main'),
(4, ' Cash Disbursement Voucher - Credit ', 'Main'),
(5, ' Certificate of Time Deposit ', 'Main'),
(6, ' Certificate of Time Deposit w/o CTD # ', 'Main'),
(7, ' Chattel Mortgage Form1 ', 'Main'),
(8, ' ID Registration Form ', 'Main'),
(9, ' Journal Voucher - Credit ', 'Main'),
(10, ' Official Receipt - Credit/Pads ', 'Main'),
(11, ' Passbook - Chips ', 'Main'),
(12, ' Passbook - Fixed Deposit Share Capital ', 'Main'),
(13, ' Passbook - Fixed Deposit Supplemental ', 'Main'),
(14, ' Passbook - Loan Passbook ', 'Main'),
(15, ' Passbook - Supplemetal Associate ', 'Main'),
(16, ' Petty Cash - Voucher ', 'Main'),
(17, ' Provisional Receipt ', 'Main'),
(18, ' Real Estate Form ', 'Main'),
(19, ' Registration Form for Lodging/Sem Hall ', 'Main'),
(20, ' Revolving Fund Voucher ', 'Main'),
(21, ' Stock Card /PCS. - Credit ', 'Main'),
(22, ' Trip Ticket ', 'Main'),
(23, ' Acknowledgement Slip-Grocery ', 'Grocery'),
(24, ' Acknowledgement Slip-Rice ', 'Grocery'),
(25, ' Journal Voucher - Grocery ', 'Grocery'),
(26, ' Official Receipt - Grocery ', 'Grocery'),
(27, ' Warehouse Issue Slip ', 'Grocery'),
(28, ' Adaptor - Socket ', 'Office Supplies'),
(29, ' Adaptor - Socket1 ', 'Office Supplies'),
(30, ' Adding Machine Tape 57mm1 ', 'Office Supplies'),
(31, ' AVR ', 'Office Supplies'),
(32, ' Ballpen - Retractable ', 'Office Supplies'),
(33, ' Ballpen - HBW Matrix OG-5 ', 'Office Supplies'),
(34, ' Ballpen - HBW Matrix OG-5a ', 'Office Supplies'),
(35, ' Ballpen - HBW (Red) ', 'Office Supplies'),
(36, ' Ballpen -Pilot Black Refill ', 'Office Supplies'),
(37, ' Ballpen Pilot  Rectract (Black)1 ', 'Office Supplies'),
(38, ' Ballpen-Pilot (Green) ', 'Office Supplies'),
(39, ' Ballpen-Pilot (Green)1 ', 'Office Supplies'),
(40, ' Ballpen-Pilot (Pink) ', 'Office Supplies'),
(41, ' Battery - KODAK AAA  ', 'Office Supplies'),
(42, ' Battery - KODAK AAA 1 ', 'Office Supplies'),
(43, ' Battery - Eveready AA  ', 'Office Supplies'),
(44, ' Battery - Eveready AA 1 ', 'Office Supplies'),
(45, ' Battery - Eveready AA 2 ', 'Office Supplies'),
(46, ' Battery - MMT AA ', 'Office Supplies'),
(47, ' Battery - Eveready C ', 'Office Supplies'),
(48, ' Battery - Eveready D ', 'Office Supplies'),
(49, ' Battery - Alkaline (23A-12V) ', 'Office Supplies'),
(50, ' Battery - Lithium 3V2 ', 'Office Supplies'),
(51, ' Battery - 9V ', 'Office Supplies'),
(52, ' Binder Clip Medium ', 'Office Supplies'),
(53, ' Binder Clip Small ', 'Office Supplies'),
(54, ' Binder Clip Big1 ', 'Office Supplies'),
(55, ' Bond Paper A3 ', 'Office Supplies'),
(56, ' Bond Paper Long /REAM ', 'Office Supplies'),
(57, ' Bond Paper Short /REAM1 ', 'Office Supplies'),
(58, ' Bookends big2 ', 'Office Supplies'),
(59, ' Bundy Clock Ribbon-1 ', 'Office Supplies'),
(60, ' Calculator Electronic Printer ', 'Office Supplies'),
(61, ' Calculator (Casio MS-10B) ', 'Office Supplies'),
(62, ' Calculator (Casio MS-120) ', 'Office Supplies'),
(63, ' Calculator Ribbon-Ad-rite Blck/Red2 ', 'Office Supplies'),
(64, ' Carbon Paper Long-Star USA ', 'Office Supplies'),
(65, ' Carbon Paper Short-1 ', 'Office Supplies'),
(66, ' Carbon Paper Short-2 ', 'Office Supplies'),
(67, ' Cash Register Tape 76mm ', 'Office Supplies'),
(68, ' Certificate/ Case ', 'Office Supplies'),
(69, ' Cleaning Kit (Evolis) ', 'Office Supplies'),
(70, ' Clipboard ', 'Office Supplies'),
(71, ' Columnar Book 24 Columns ', 'Office Supplies'),
(72, ' Columnar Pad 12 Columns ', 'Office Supplies'),
(73, ' Columnar Pad 2 columns ', 'Office Supplies'),
(74, ' Continous Paper  11x9 1/2  1 ply ', 'Office Supplies'),
(75, ' Computer Keyboard w/ Mouse ', 'Office Supplies'),
(76, ' Computer LCD Filter ', 'Office Supplies'),
(77, ' Continous Paper 11x14  7/8 1 ply-Synergy ', 'Office Supplies'),
(78, ' Continous Paper 11x9 1/2  2 ply ', 'Office Supplies'),
(79, ' Correction Tape ', 'Office Supplies'),
(80, ' Correction Tape1 ', 'Office Supplies'),
(81, ' Correction Tape2 ', 'Office Supplies'),
(82, ' Correction Tape3 ', 'Office Supplies'),
(83, ' Crayon 8\'s ', 'Office Supplies'),
(84, ' Cutter sm  ', 'Office Supplies'),
(85, ' Cutter Big (Blade) ', 'Office Supplies'),
(86, ' Cutter Small (Blade) ', 'Office Supplies'),
(87, ' Dater Stamp ', 'Office Supplies'),
(88, ' Diskettes ', 'Office Supplies'),
(89, ' DTR Card 100\'s2 ', 'Office Supplies'),
(90, ' DVD-RW w/ case1 ', 'Office Supplies'),
(91, ' DVD-RW w/ case ', 'Office Supplies'),
(92, ' Envelope - EXP. w/garter ', 'Office Supplies'),
(93, ' Envelope - Brown for time deposit 6x9a ', 'Office Supplies'),
(94, ' Envelope - Long Brown1 ', 'Office Supplies'),
(95, ' Envelope - Short Brown ', 'Office Supplies'),
(96, ' Envelope - Long White / Box ', 'Office Supplies'),
(97, ' Envelope - Short White / Box ', 'Office Supplies'),
(98, ' Eraser-1 ', 'Office Supplies'),
(99, ' Fastener ', 'Office Supplies'),
(100, ' Fastener Long 8.5" ', 'Office Supplies'),
(101, ' Fastener Long 8.5"a ', 'Office Supplies'),
(102, ' File Magazine sm ', 'Office Supplies'),
(103, ' File Magazine Big ', 'Office Supplies'),
(104, ' Finger Moistuner1 ', 'Office Supplies'),
(105, ' Folder Long ', 'Office Supplies'),
(106, ' Folder Long1 ', 'Office Supplies'),
(107, ' Folder Long2 ', 'Office Supplies'),
(108, ' Folder Short ', 'Office Supplies'),
(109, ' Folder Exp. Long ', 'Office Supplies'),
(110, ' Folder Short - Clear front ', 'Office Supplies'),
(111, ' Folder Long (Colored) ', 'Office Supplies'),
(112, ' Folder Long (Colored) Punchless ', 'Office Supplies'),
(113, ' Folder Long (Colored) Punchless1 ', 'Office Supplies'),
(114, ' Folder Short (Colored) Punchless ', 'Office Supplies'),
(115, ' Folder Short (Colored) Punchless1 ', 'Office Supplies'),
(116, ' Folder Long Sliding ', 'Office Supplies'),
(117, ' Folder Short Sliding ', 'Office Supplies'),
(118, ' Frame ', 'Office Supplies'),
(119, ' Glue all 130g ', 'Office Supplies'),
(120, ' Glue all 130g1 ', 'Office Supplies'),
(121, ' Highlighter-Stabilo ', 'Office Supplies'),
(122, ' Highlighter-Stabilo1 ', 'Office Supplies'),
(123, ' Highlighter-Stabilo2 ', 'Office Supplies'),
(124, ' Highlighter-Faber ', 'Office Supplies'),
(125, ' ID CARD (Blank 500) ', 'Office Supplies'),
(126, ' ID Lace ', 'Office Supplies'),
(127, ' ID Lace 1 ', 'Office Supplies'),
(128, ' Index Card 5x8 ', 'Office Supplies'),
(129, ' Index Card for T.D. ', 'Office Supplies'),
(130, ' Ink (numbering machine) ', 'Office Supplies'),
(131, ' Key Chain ', 'Office Supplies'),
(132, ' Laminating Film 4x6  ', 'Office Supplies'),
(133, ' Manila Paper ', 'Office Supplies'),
(134, ' Masking Tape 1" ', 'Office Supplies'),
(135, ' Masking Tape 1"a ', 'Office Supplies'),
(136, ' Masking Tape 1"1 ', 'Office Supplies'),
(137, ' Masking Tape 1/2" ', 'Office Supplies'),
(138, ' Masking Tape 1/2"a ', 'Office Supplies'),
(139, ' Mouse Pad-sm ', 'Office Supplies'),
(140, ' Newsprint (Bookpaper Short) ', 'Office Supplies'),
(141, ' Newsprint Paper Long ', 'Office Supplies'),
(142, ' Newsprint Paper Long1 ', 'Office Supplies'),
(143, ' Newsprint Paper Short ', 'Office Supplies'),
(144, ' Newsprint Paper Short1 ', 'Office Supplies'),
(145, ' Packaging Tape ', 'Office Supplies'),
(146, ' Paper Clip Jumbo ', 'Office Supplies'),
(147, ' Paper Clip Small ', 'Office Supplies'),
(148, ' Parker refill 1 ', 'Office Supplies'),
(149, ' Paste-Redstone 200gms ', 'Office Supplies'),
(150, ' Pencil Mongol ', 'Office Supplies'),
(151, ' Pencil Mongol1 ', 'Office Supplies'),
(152, ' Pencil HBW ', 'Office Supplies'),
(153, ' Pentel Pen Pilot Black/Red Fine ', 'Office Supplies'),
(154, ' Pentel Pen Pilot Black Broad1 ', 'Office Supplies'),
(155, ' Pentel Pen Pilot Blue Broad ', 'Office Supplies'),
(156, ' Pentel Pen Pilot Red Broad1 ', 'Office Supplies'),
(157, ' Plastic Cover 1 yard ', 'Office Supplies'),
(158, ' Plastic Cover for Long Folder ', 'Office Supplies'),
(159, ' Plastic Cover for Short Folder ', 'Office Supplies'),
(160, ' Polaris Photopaper/10\'s ', 'Office Supplies'),
(161, ' Power Supply ', 'Office Supplies'),
(162, ' Printer Ribbon Epson FX 2175/2190 ', 'Office Supplies'),
(163, ' Printer Ribbon Epson PLQ-20 ', 'Office Supplies'),
(164, ' Printer Ribbon Epson T10 73N 1 ', 'Office Supplies'),
(165, ' Printer Ribbon HP Ink  703 Black ', 'Office Supplies'),
(166, ' Printer Ribbon HP Ink  703 Black1 ', 'Office Supplies'),
(167, ' Printer Ribbon HP Ink  703 Black2 ', 'Office Supplies'),
(168, ' Printer Ribbon HP Ink  703 Colored2 ', 'Office Supplies'),
(169, ' Printer Ribbon HP Ink  704 Black ', 'Office Supplies'),
(170, ' Printer Ribbon HP Ink  704 Black1 ', 'Office Supplies'),
(171, ' Printer Ribbon HP 910  900 Colored ', 'Office Supplies'),
(172, ' Printer Ribbon HP Deskjet D2460 21 black ', 'Office Supplies'),
(173, ' Printer Ribbon HP Deskjet D2460 22 colored ', 'Office Supplies'),
(174, ' Printer Ribbon HP Toner CB4 35-A ', 'Office Supplies'),
(175, ' Printer Ribbon HP Toner CB4 35-A1 ', 'Office Supplies'),
(176, ' Printer Ribbon Epson LX 300 + II ', 'Office Supplies'),
(177, ' Printer Ribbon Epson LX 300 + Ila ', 'Office Supplies'),
(178, ' Printer Ribbon Epson LX 310A ', 'Office Supplies'),
(179, ' Printer Ink Epson L360 ', 'Office Supplies'),
(180, ' Puncher ', 'Office Supplies'),
(181, ' Push Pin2 ', 'Office Supplies'),
(182, ' Record Book 300 pages1 ', 'Office Supplies'),
(183, ' Record Book 500 pages ', 'Office Supplies'),
(184, ' Record Book 500 pages1 ', 'Office Supplies'),
(185, ' Riso Ink ', 'Office Supplies'),
(186, ' Riso Ink EZ ', 'Office Supplies'),
(187, ' Rubber Band /pack  ', 'Office Supplies'),
(188, ' Rubber Band /pack a ', 'Office Supplies'),
(189, ' Rubber Band /pack 1 ', 'Office Supplies'),
(190, ' Rubber Stamp ', 'Office Supplies'),
(191, ' Ruler 12" ', 'Office Supplies'),
(192, ' Scissor ', 'Office Supplies'),
(193, ' Scissor1 ', 'Office Supplies'),
(194, ' Scissor2 ', 'Office Supplies'),
(195, ' Scotch Tape 1" ', 'Office Supplies'),
(196, ' Scotch Tape 1" -  Small Roll ', 'Office Supplies'),
(197, ' Scotch Tape 1/2 \' ', 'Office Supplies'),
(198, ' Scotch Tape Dispenser ', 'Office Supplies'),
(199, ' Scotch Tape Dispenser1 ', 'Office Supplies'),
(200, ' SD Card ', 'Office Supplies'),
(201, ' Sign Pen Excellent ', 'Office Supplies'),
(202, ' Sign Pen - Pilot bx v5 .5 ', 'Office Supplies'),
(203, ' Sign Pen - Pilot G Tech C4 ', 'Office Supplies'),
(204, ' Soft Grips1 ', 'Office Supplies'),
(205, ' Special Paper 10\'s ', 'Office Supplies'),
(206, ' Special Paper 10\'s1 ', 'Office Supplies'),
(207, ' Special Paper 20\'s ', 'Office Supplies'),
(208, ' Special Paper 20\'s1 ', 'Office Supplies'),
(209, ' Stamp Pad ', 'Office Supplies'),
(210, ' Stamp Pad Ink-1 ', 'Office Supplies'),
(211, ' Stamp (Paid) ', 'Office Supplies'),
(212, ' Stapler # 35 ', 'Office Supplies'),
(213, ' Stapler # 35a ', 'Office Supplies'),
(214, ' Staple Wire No. 35 ', 'Office Supplies'),
(215, ' Staple Wire No. 35a ', 'Office Supplies'),
(216, ' Staple Wire No. 35b ', 'Office Supplies'),
(217, ' Stationery 500\'s ', 'Office Supplies'),
(218, ' Sticker Paper 10\'S ', 'Office Supplies'),
(219, ' Sticky Note 4x6 ', 'Office Supplies'),
(220, ' Stick-On Paper med ', 'Office Supplies'),
(221, ' Tape- Dispenser ', 'Office Supplies'),
(222, ' Tape- Dispenser1 ', 'Office Supplies'),
(223, ' Tape- Double Sided  ', 'Office Supplies'),
(224, ' Tape- Double Sided w/ Foam ', 'Office Supplies'),
(225, ' Thermal Paper 80x70 ', 'Office Supplies'),
(226, ' Thermal Paper 80x70a ', 'Office Supplies'),
(227, ' Toner for Xerox ', 'Office Supplies'),
(228, ' Thermal Bar Code Sticker ', 'Office Supplies'),
(229, ' Thumb Tax ', 'Office Supplies'),
(230, ' Tray 3 Layer Metal ', 'Office Supplies'),
(231, ' USB  ', 'Office Supplies'),
(232, ' USB LAN ADAPTER ', 'Office Supplies'),
(233, ' Wyteboard Marker - black/red-PILOT ', 'Office Supplies'),
(234, ' Wyteboard Marker - black/red-PILOT1 ', 'Office Supplies'),
(235, ' Yarn ', 'Office Supplies'),
(236, ' Yellow Paper ', 'Office Supplies'),
(237, ' YMCKO Ribbon-300 prints (Evolis) ', 'Office Supplies'),
(238, ' YMCKO Ribbon-300 prints (Evolis)1 ', 'Office Supplies'),
(239, ' Passbook Printer PLQ-20 ', 'Office Equipments'),
(240, ' UPS ', 'Office Equipments'),
(241, ' Wire #18 Flat Cord ', 'Office Equipments');

-- --------------------------------------------------------

--
-- Table structure for table `prevdate`
--

CREATE TABLE `prevdate` (
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prevdate`
--

INSERT INTO `prevdate` (`date`) VALUES
('2016-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `item_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `price` double(11,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_cost` double(11,2) NOT NULL,
  `supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `dept_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` date NOT NULL,
  `total_cost` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `item_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`item_id`, `quantity`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 0),
(82, 0),
(83, 0),
(84, 0),
(85, 0),
(86, 0),
(87, 0),
(88, 0),
(89, 0),
(90, 0),
(91, 0),
(92, 0),
(93, 0),
(94, 0),
(95, 0),
(96, 0),
(97, 0),
(98, 0),
(99, 0),
(100, 0),
(101, 0),
(102, 0),
(103, 0),
(104, 0),
(105, 0),
(106, 0),
(107, 0),
(108, 0),
(109, 0),
(110, 0),
(111, 0),
(112, 0),
(113, 0),
(114, 0),
(115, 0),
(116, 0),
(117, 0),
(118, 0),
(119, 0),
(120, 0),
(121, 0),
(122, 0),
(123, 0),
(124, 0),
(125, 0),
(126, 0),
(127, 0),
(128, 0),
(129, 0),
(130, 0),
(131, 0),
(132, 0),
(133, 0),
(134, 0),
(135, 0),
(136, 0),
(137, 0),
(138, 0),
(139, 0),
(140, 0),
(141, 0),
(142, 0),
(143, 0),
(144, 0),
(145, 0),
(146, 0),
(147, 0),
(148, 0),
(149, 0),
(150, 0),
(151, 0),
(152, 0),
(153, 0),
(154, 0),
(155, 0),
(156, 0),
(157, 0),
(158, 0),
(159, 0),
(160, 0),
(161, 0),
(162, 0),
(163, 0),
(164, 0),
(165, 0),
(166, 0),
(167, 0),
(168, 0),
(169, 0),
(170, 0),
(171, 0),
(172, 0),
(173, 0),
(174, 0),
(175, 0),
(176, 0),
(177, 0),
(178, 0),
(179, 0),
(180, 0),
(181, 0),
(182, 0),
(183, 0),
(184, 0),
(185, 0),
(186, 0),
(187, 0),
(188, 0),
(189, 0),
(190, 0),
(191, 0),
(192, 0),
(193, 0),
(194, 0),
(195, 0),
(196, 0),
(197, 0),
(198, 0),
(199, 0),
(200, 0),
(201, 0),
(202, 0),
(203, 0),
(204, 0),
(205, 0),
(206, 0),
(207, 0),
(208, 0),
(209, 0),
(210, 0),
(211, 0),
(212, 0),
(213, 0),
(214, 0),
(215, 0),
(216, 0),
(217, 0),
(218, 0),
(219, 0),
(220, 0),
(221, 0),
(222, 0),
(223, 0),
(224, 0),
(225, 0),
(226, 0),
(227, 0),
(228, 0),
(229, 0),
(230, 0),
(231, 0),
(232, 0),
(233, 0),
(234, 0),
(235, 0),
(236, 0),
(237, 0),
(238, 0),
(239, 0),
(240, 0),
(241, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beginning_inv`
--
ALTER TABLE `beginning_inv`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD KEY `item_idx` (`item_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD KEY `rItemID_idx` (`item_id`),
  ADD KEY `rDeptID_idx` (`dept_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beginning_inv`
--
ALTER TABLE `beginning_inv`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `beginning_inv`
--
ALTER TABLE `beginning_inv`
  ADD CONSTRAINT `itemID` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `item` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `rDeptID` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rItemID` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `sItemID` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
