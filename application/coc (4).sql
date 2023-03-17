-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 08:02 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coc`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionplan`
--

CREATE TABLE `actionplan` (
  `ActionNum` varchar(50) NOT NULL,
  `TrackingNum` varchar(25) NOT NULL,
  `CompanyID` varchar(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `Action` varchar(50) NOT NULL,
  `ImplementDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `Status` varchar(50) NOT NULL,
  `username` varchar(16) NOT NULL,
  `DeptID` int(10) NOT NULL,
  `ActionProgress` varchar(25) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Priority` varchar(25) NOT NULL,
  `AfterAction` varchar(100) NOT NULL,
  `AfterActionVideo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actionplan`
--

INSERT INTO `actionplan` (`ActionNum`, `TrackingNum`, `CompanyID`, `EmpID`, `EmpName`, `Action`, `ImplementDate`, `DueDate`, `Status`, `username`, `DeptID`, `ActionProgress`, `Remark`, `Priority`, `AfterAction`, `AfterActionVideo`) VALUES
('ACT-0001', 'OC-0058', 'CSA', 156, 'Nur', '', '0000-00-00', '0000-00-00', 'Open', 'admin', 2, '', '', 'Critical', '', ''),
('ACT-0002', 'OC-0059', 'CSA', 75, 'Maryono', '', '0000-00-00', '0000-00-00', 'Open', 'admin', 2, '', '', 'Critical', '', ''),
('ACT-0003', 'OC-0065', 'CSA', 17, 'Rohani', '', '0000-00-00', '0000-00-00', 'Open', 'admin', 2, '', '', 'Critical', '', ''),
('ACT-0004', 'OC-0064', 'CTB', 17, 'Rohani', 'Done', '2021-04-12', '0000-00-00', 'Closed', 'admin', 2, 'Done', '', 'Critical', 'FotoJet2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AreaID` varchar(25) NOT NULL,
  `AreaName` varchar(25) NOT NULL,
  `CompanyID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AreaID`, `AreaName`, `CompanyID`) VALUES
('OF', 'Office', 'CBM'),
('WA', 'Workshop A', 'CBM'),
('WB', 'Workshop B', 'CBM'),
('WC', 'Workshop C', 'CBM'),
('WD', 'Workshop D', 'CBM'),
('Y1', 'Yard1', 'CBM'),
('Y2', 'Yard2', 'CBM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `OCCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`OCCategory`) VALUES
('ACCIDENT'),
('AUDIT'),
('OBSERVATION'),
('RISK ASSESMENT'),
('Safety Management By Walking Around(SMBWA)'),
('SAFETY SAFARY');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyID` varchar(10) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `PhoneNum` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyID`, `CompanyName`, `Address`, `City`, `Country`, `PhoneNum`) VALUES
('CA', 'Cladtek Arabia', '-', 'Dammam', 'Saudi Arabia', 0),
('CBM', 'Cladtek BI Metal Manufacture Batam', 'JL.Tenggiri', 'Batam', 'Indonesia', 0),
('CHS', 'Cladtek Holding Singapore', 'Singapore', 'Singapore', 'Singapore', 1),
('CME', 'Cladtek Middle East', '-', '-', '-', 1),
('CSA', 'Cladtek Saudi Arabia', '-', '-', '-', 1),
('CTB', 'Cladtek Brazil', 'Brazil', 'Brazil', 'Brazil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CompanyID` varchar(10) NOT NULL,
  `ProjectID` varchar(25) NOT NULL,
  `ProjectName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CompanyID`, `ProjectID`, `ProjectName`) VALUES
('CBM', 'CA GENERAL', 'Clatek Arabia Project'),
('CHS', 'CA001', 'Cladtek Arabia Project'),
('CA', 'CA003', 'Spool Fabrication Project'),
('CA', 'CA004', 'Mobilisation'),
('CA', 'CA005', 'Aramco Cladded Flanges Project'),
('CA', 'CA006', 'Aramco Clad Spools Project'),
('CA', 'CA010', 'Aramco Clad Pipe Spool Project'),
('CA', 'CA011', 'Aramco Clad Pipe Spool Project'),
('CA', 'CA012', 'Aramco Clad Pipe Spool Project'),
('CA', 'CA013', 'Aramco Clad Pipe Spool Project'),
('CA', 'CA014', 'Aramco Clad Spool Fabrication'),
('CA', 'CA015', 'Aramco Spool Fabrication'),
('CA', 'CA016', 'Aramco Spool Fabrication'),
('CA', 'CA017', 'Aramco Clad Flanges Project'),
('CA', 'CA018', 'Aramco Cladded Pipe Spool'),
('CA', 'CA019', 'Aramco Cladded Flange Project'),
('CA', 'CA020', 'ARAMCO CLADDED FALNGES PROJECT'),
('CA', 'CA021', 'Replace11PipelinesinBRRIfield'),
('CA', 'CA022', 'Replace11PipelinesinBRRIfield'),
('CA', 'CA023', 'Aramco Clad Pipe Spools'),
('CA', 'CA024', 'OffshoreHook-UpUpgradeMdfSCADA'),
('CA', 'CA025', 'ARAMCO CLADDED FITTING PROJECT'),
('CA', 'CA026', 'D7057-Marjan TP10 and Ass.Fclt'),
('CA', 'CA027', 'SA FOR OFFSHORE FACILITIES'),
('CA', 'CA028', 'ARAMCO CLAD PIPE SPOOL'),
('CA', 'CA029', 'ARAMCO CLAD PIPE SPOOL'),
('CA', 'CA030', 'Petronash Arabia Project'),
('CA', 'CA031', 'PETRONASH ARABIA PROJECT'),
('CA', 'CA032', 'Hawiyah Unayzah Gas Reservoir'),
('CA', 'CA033', 'WELD REPAIR FLANGES'),
('CA', 'CA034', 'MARJAN PACK 2 SS7'),
('CA', 'CA035', 'MARJAN PACKAGE II'),
('CA', 'CA036', 'MARJAN PACKAGE II'),
('CA', 'CA037', 'Hawiyah Unayzah Gas Reservoir'),
('CA', 'CA038', 'WELDER MOBILIZATION FOR NSH'),
('CA', 'CA039', 'Hawiyah Unayzah Gas Reservoir'),
('CA', 'CA040', 'WELD OVERLAY OF FLANGES'),
('CA', 'CA041', 'ARAMCO CLAD SPOOL PROJECT'),
('CA', 'CA042', 'MIP PKG-02-Offshore Oil'),
('CA', 'CA043', 'D7068-MIP-PKG01-OFFSHORE'),
('CBM', 'CAGNL', 'Aramco SFNY Subsea Spools'),
('CBM', 'CHS00030', '2128 - STP KG D6 Ruby FPSO'),
('CBM', 'CHS00031', 'Elbow Fitting Qualification'),
('CBM', 'CHS00040', 'Aramco Cladded Flanges Project'),
('CBM', 'CHS00115', 'Aramco Clad Spools Project'),
('CBM', 'CHS00178', 'Aramco Clad Pipe Spool Project'),
('CBM', 'CHS00193', 'Aramco Spool Fabrication'),
('CBM', 'CHS00199', 'LTA OFFSHORE FACILITIES PROJEC'),
('CBM', 'CHS00215', 'Petronash Arabia Project'),
('CBM', 'CHS00273', 'Gas Development Project'),
('CBM', 'CMECT269', 'Cladtek Arabia Project'),
('CHS', 'CSA-001', 'CPXCHS001 - LAPTOPS & HDD'),
('CHS', 'CSA-AUTO', 'CPXCHS002 - GOOGLE MAIL SYSTEM'),
('CBM', 'CT1111', 'D7068-MIP-PKG01-OFFSHORE-GOSP'),
('CHS', 'CT359', 'TEST'),
('CBM', 'CT422', 'CT397 ARAMCO ASIA JAPAN K.K.'),
('CBM', 'CT467', 'CLADTEK BRAZIL GENERAL'),
('CBM', 'CT474', 'CT408 - NCOC Kashagan Spools'),
('CBM', 'CT476', 'CT430 - Hasbah WOL Special Flg'),
('CBM', 'CT478', 'CT453 - Wellhead Ball Valve'),
('CBM', 'CT487', 'CT455 - Aramco SFNY 4 Bends'),
('CBM', 'CT500', 'CT456 - QP-NFA Complex WHP3'),
('CBM', 'CT505', 'CT269 - HYUNDAI'),
('CBM', 'CT507', 'Dangote Thermal Sleeve'),
('CBM', 'CT508', 'Aramco Hasbah Spooling'),
('CBM', 'CT512', 'Aramco Spooling'),
('CBM', 'CT517', 'Petrobras MLP Qualification'),
('CBM', 'CT518', 'Aramco Gas Gathering Manifolds'),
('CBM', 'CT521', 'Projects Excess Material'),
('CBM', 'CT524', 'Aramco CS Pipes & Bend'),
('CBM', 'CT525', 'Esso Sriracha project'),
('CBM', 'CT527', 'L&T Hasbah Accomodation'),
('CBM', 'CT528', 'Al Hosn Gas Max Pro Proj- CS'),
('CBM', 'CT529', 'CBM QH Enhancement'),
('CBM', 'CT530', 'Equinor Askeladd MLP Project'),
('CBM', 'CT541', 'Aramco Safaniya - LINE PIPE WO'),
('CBM', 'CT543', 'Aramco Hasbah Services Order'),
('CBM', 'CT546', 'ADCO BCP-Line WOL Pipes'),
('CBM', 'CT548', 'Aramco CRPO 27 WOL PFF'),
('CBM', 'CT549', 'Aramco SFNY10 WOL Project'),
('CBM', 'CT553', 'WO Pipes on D7088-EPCI'),
('CBM', 'CT554', 'Optimum Shah Gas Expansion'),
('CBM', 'CT556', 'Pertamina - Gundih MLP Project'),
('CBM', 'CT557', 'DORC - Spooling Project'),
('CBM', 'CT559', 'HHI - Clad Pipe Project'),
('CHS', 'CT560', 'CA016'),
('CBM', 'CT561', 'Qatargas-Cladded Piped & Fit'),
('CBM', 'CT563', 'Aramco Cladded Pipe Project'),
('CBM', 'CT566', 'ONGC Cladded Linepipes Project'),
('CBM', 'CT567', 'Technip-Qual WO of DJ LP Proj'),
('CBM', 'CT568', 'Aramco SFNY 5 Clad Flg & Fit'),
('CBM', 'CT569', 'Aramco SFNY 4 Clad Flg & Fit'),
('CBM', 'CT576', 'Aramco 3 Gas PDMS Fabrication'),
('CBM', 'CT578', 'JTB Gas Development Clad Proj'),
('CBM', 'CT579', 'Aramco 7306 & 7307 Line Pipes'),
('CBM', 'CT580', 'Aramco 8 SFNY Clad Pip,Fit,Flg'),
('CBM', 'CT581', 'Aramco SFNY 5 SSS Clad Project'),
('CBM', 'CT583', 'Aramco SFNY 4 Clad Project'),
('CHS', 'CT586', 'Hawiyah Unayzah Gas Reservoir'),
('CBM', 'CT587', 'Aramco CRPO 9 Clad Bends'),
('CBM', 'CT590', 'Technip Mero-1 MLP Project'),
('CBM', 'CT591', 'ADNOC CRA Pip,Fitt & Flg'),
('CBM', 'CT592', 'Qatargas D7375 Clad Pip & Fit'),
('CBM', 'CT595', 'CTB MLP Equipments Project'),
('CBM', 'CT596', 'Aramco WOL Blind & Specer'),
('CBM', 'CT597', 'Subsea 7 Hasbah II CRA Welders'),
('CBM', 'CT599', 'McD/IMPEX Audit'),
('CBM', 'CT600', 'CNOOC Lingshui Clad FlowLoop'),
('CBM', 'CT601', 'ICHTHYS MLP Test Program'),
('CBM', 'CT602', 'Buhasa MLP Test Program'),
('CBM', 'CT603', 'MPN Idaho MLP Repair Work'),
('CBM', 'CT604', 'Aramco LTA 36 CRA Bends'),
('CBM', 'CT605', 'Aramco LTA 36 & 37 CRA Bends'),
('CBM', 'CT606', 'Aramco LTA 37 CRA Bends'),
('CBM', 'CT607', 'EPCI of WHP12N Jacket'),
('CBM', 'CT609', 'Hornsea II J-Tube Pipe Bend'),
('CBM', 'CT611', 'Aramco CRPO 36 Project'),
('CBM', 'CT612', 'Aramco TP-10 MRJN Project'),
('CBM', 'CT614', 'Shell Power Nap Clad Bend'),
('CBM', 'CT615', 'Aramco Berri & Marjan CS Flang'),
('CBM', 'CT616', 'Aramco Berri CS Fitting'),
('CBM', 'CT617', 'CNOOC Lingshui (Qualification)'),
('CBM', 'CT618', 'PCML Yetagun Gas Sea Water'),
('CBM', 'CT619', 'PTMI RT Shooting Service'),
('CBM', 'CT620', 'PHM - Bend & Coating Project'),
('CBM', 'CT623', 'Aramco Spool Fabrication'),
('CBM', 'CT625', 'Aramco CRPO36 (greenfield)'),
('CBM', 'CT626', 'Aramco CRPO 36 (Brownfield)'),
('CBM', 'CT627', 'Aramco CRPO 37 Clad project'),
('CBM', 'CT628', 'CSI Project'),
('CBM', 'CT629', 'Aramco TP-10 MRJN Clad Flange'),
('CBM', 'CT630', 'CNOOC Lingshui'),
('CBM', 'CT631', 'CNOOC Lingshui 17-2 Project'),
('CBM', 'CT632', 'CTB Coil Qualification'),
('CBM', 'CT633', 'ONGC Bend Testing Project'),
('CBM', 'CT634', 'Aramco CRPO47/48/49 Pipe & Ben'),
('CBM', 'CT635', 'Aramco CRPO47/48/49 Flanges'),
('CBM', 'CT636', 'Mobilization Charge'),
('CBM', 'CT637', 'Aramco CRPO47/48/49 CS LRBends'),
('CBM', 'CT638', 'Aramco CS Bends D7068– Marjan'),
('CBM', 'CT639', 'Aramco Clad Flanges'),
('CBM', 'CT640', 'PHM Bend Pipe for Hulu & RU V'),
('CBM', 'CT641', 'PHM Bend Pipe for Tunu & RU V'),
('CBM', 'CT642', 'PHM Bend Pipe for Tunu & RU V'),
('CBM', 'CT643', 'Qatargas NFPS I2P1 Clad Flange'),
('CBM', 'CT644', 'Aramco Clad Flanges - D6255'),
('CBM', 'CT645', 'Aramco CRA LINEPIPE (WOL)'),
('CBM', 'CT646', 'Brikasa Mock Up'),
('CBM', 'CT647', 'Sumitomo WOL Pipe'),
('CBM', 'CT648', 'Aramco Pup Piece'),
('CBM', 'CT649', 'North Malay Basin Phase 3'),
('CBM', 'CT650', 'Shell HCU H1-N2 Crude Flex'),
('CBM', 'CT651', 'Aramco CRA Clad Induction Bend'),
('CBM', 'CT652', 'Aramco, CRA INDUCTION BENDS'),
('CBM', 'CT653', 'Kowel Korea Inconel 625 wire'),
('CBM', 'CT654', 'Aramco Mock Up Bends'),
('CBM', 'CT655', 'OCTG Connector Trial'),
('CBM', 'CT656', 'Aramco Cladded Barred Tee'),
('CBM', 'CT657', 'SEPIA PROJECT'),
('CBM', 'CT658', 'Pertamina JTB Spooling'),
('CBM', 'CT659', 'Saudi Aramco CRA PIPING BENDS'),
('CBM', 'CT660', 'Saudi Aramco Cladding of Pipes'),
('CBM', 'CT661', 'CRPO 37 - CLADDED FLANGES'),
('CBM', 'CT662', 'UPSET ENDS MLP PIPE TRIAL'),
('CBM', 'CT663', 'Aramco D7018 CLADDING OF PIPES'),
('CBM', 'CT664', 'PIPES, FLANGES & FITTING'),
('CBM', 'CT665', 'Cladding Seamless Line pipes'),
('CA', 'CT666', 'Saudi Aramco Cladded Spools'),
('CBM', 'CT667', 'Aramco Bends'),
('CBM', 'CT668', 'Aramco CRPO 37 Fitting'),
('CBM', 'CT669', 'Aramco Cladding Piping'),
('CBM', 'CT671', 'Weld Overlay Pipe & Bend'),
('CBM', 'CT672', 'Aramco PQR MATERIALS'),
('CBM', 'CT673', 'Weld Overlay Flanges'),
('CBM', 'CT674', 'ADNOC Weld Overlay Pipe'),
('CBM', 'CT675', 'Saudi Aramco Cladded Spools'),
('CBM', 'CT676', 'EPIC FOR CO2 WAG INJECTION'),
('CBM', 'CT677', 'IBF Cladded Pipe and Fittings'),
('CBM', 'CT678', 'Aramco CS INDUCTION BENDS'),
('CBM', 'CT679', 'Formosa 2 Offshore Wind Farm'),
('CBM', 'CT680', 'CUEL-Chevron Thailand Phase 59'),
('CBM', 'CT681', 'Keppel-Offshore Substation'),
('CBM', 'CT682', 'Qatar Gas-Brownfield Tie-ins'),
('CBM', 'CT683', 'Reliance Project WOL Nozzle'),
('CBM', 'CT684', 'MLP Internal Qualification Tri'),
('CBM', 'CT685', 'KSH - Shell Philippines'),
('CBM', 'CT686', 'QG - Cladded Fitting'),
('CBM', 'CT687', 'WILHELM-CLADDING & FABRICATION'),
('CBM', 'CT688', 'NOV Purchase Welded Pipe'),
('CBM', 'CT689', 'N8318 – SEPIA PROJECT WOL'),
('CBM', 'CT690', 'Qatar Gas Cladded Fittings'),
('CBM', 'CT691', 'API 5L Qualification'),
('CBM', 'CT692', 'JSN Project (Induction Bends)'),
('CBM', 'CT693', 'Qualification Coil'),
('CBM', 'CT697', 'Bend Trials and Mock Up'),
('CBM', 'CT698', 'Wilhelm Cladding and Fabric'),
('CBM', 'CT699', 'Aramco Bend Pipe'),
('CBM', 'CT700', 'Cladded Flange_6D Scope'),
('CBM', 'CT701', 'TYRA REDEVELOPMENT EPC PROJECT'),
('CBM', 'CT702', 'MLP Hydroforming Evaluation'),
('CBM', 'CT703', 'Aramco Spool'),
('CBM', 'CT704', 'Aramco Spool Fabrication'),
('CBM', 'CT705', 'E0660 -BP Tortue Tower'),
('CBM', 'CT706', 'Cladtek Upset Qualifications'),
('CBM', 'CT707', 'Hawiyah Unayzah Gas Reservoir'),
('CBM', 'CT708', 'Hawiyah Unayzah Gas Reservoir'),
('CBM', 'CT709', 'Ring Gasket Qualification'),
('CBM', 'CT711', 'Dos Bocas New Refinery'),
('CBM', 'CT713', 'Induction Bends'),
('CBM', 'CT714', 'Induction Pipe Bends'),
('CBM', 'CT715', 'Shell Eastern Crude Flex'),
('CBM', 'CT716', 'Weld Overlay Flange Project'),
('CBM', 'CTBGN', 'MLP Transtion Weld and WOL');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DeptID` int(10) NOT NULL,
  `Dept_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DeptID`, `Dept_Name`) VALUES
(1, 'Project Operations'),
(2, 'Production'),
(3, 'Business Development'),
(4, 'Quality Control'),
(5, 'Maintenance & Engineering'),
(6, 'Production Automation'),
(7, 'Process Optimization & Design'),
(8, 'Quality Assurance'),
(9, 'Health,Safety, & Environment'),
(10, 'Supply Chain Management'),
(11, 'Human Resources'),
(12, 'Finance & Accounting'),
(13, 'ITES'),
(14, 'Technical'),
(15, 'Project (Others)'),
(16, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(10) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `No_Hp` int(12) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `DeptID` int(10) NOT NULL,
  `CompanyID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `EmpName`, `No_Hp`, `Title`, `DeptID`, `CompanyID`) VALUES
(1, 'Paul Anthony Montague', 0, 'Business Development', 3, 'CBM'),
(12, 'Suyanto', 0, 'Sr. Production Foreman', 2, 'CBM'),
(17, 'Rohani', 0, 'SHV Supervisor', 2, 'CBM'),
(20, 'Herwansah', 0, 'Sr. Production Foreman', 2, 'CBM'),
(31, 'Lisbet', 0, 'Blast & Paint Supervisor', 2, 'CBM'),
(75, 'Maryono', 0, 'Machine Shop Supervisor', 2, 'CBM'),
(78, 'Muhammad Sulaiman', 0, 'Sr. Production Foreman', 2, 'CBM'),
(79, 'Jaka Haryana', 0, 'Store Foreman', 10, 'CBM'),
(92, 'Leorandus Manurung', 0, 'Machine Shop Superintendent', 2, 'CBM'),
(106, 'Jan Jonswan Hutasoit', 0, 'Sr. HSE Manager', 9, 'CBM'),
(109, 'Dede Irwan', 0, 'Sr. QC Inspector', 4, 'CBM'),
(116, 'Maniar Herawaty Simanjuntak', 0, 'QC Document Controller Supervisor', 4, 'CBM'),
(119, 'Jimmy Janward Hutagalung', 0, 'Sr. QC Inspector', 4, 'CBM'),
(132, 'Abdillah', 0, 'Sr. QC Inspector', 4, 'CBM'),
(134, 'Yunasri', 0, 'Sr. QC Inspector', 4, 'CBM'),
(143, 'Gunawan Hadi Prawira', 0, 'Engineering Superintendent', 5, 'CBM'),
(149, 'Kamiruddin', 0, 'Sr. Production Foreman', 2, 'CBM'),
(153, 'Judika Manurung', 0, 'Sr. Production Foreman', 2, 'CBM'),
(155, 'Oktoreno Sibuea', 0, 'Liner Supervisor', 2, 'CBM'),
(156, 'Nur Fahmi', 0, 'TH Supervisor', 2, 'CBM'),
(157, 'Hendi Saputra', 0, 'Sr. Production Foreman', 2, 'CBM'),
(160, 'Dedi Mulyadi', 0, 'Sr. Production Foreman', 2, 'CBM'),
(166, 'Bustami', 0, 'Sr. Production Foreman', 2, 'CBM'),
(173, 'Lisdiansyah', 0, 'Manual Repair Foreman', 2, 'CBM'),
(174, 'Jasriono', 0, 'Sr. Packing & Carpenter Foreman', 2, 'CBM'),
(184, 'Asiman Simalango', 0, 'Sr. Production Foreman', 2, 'CBM'),
(199, 'Awaluddin Daulay', 0, 'Production Foreman', 2, 'CBM'),
(200, 'Janatul Khalik', 0, 'Sr. Production Foreman', 2, 'CBM'),
(213, 'Asyantini Winasis', 0, 'Sr. QC Document Controller', 4, 'CBM'),
(219, 'Pesan Mirgot Situmorang', 0, 'Sr. Production Foreman', 2, 'CBM'),
(222, 'Juanto Ambarita', 0, 'Production Foreman', 2, 'CBM'),
(231, 'Mediana Magdalena Siagian', 0, 'Finance Manager', 12, 'CBM'),
(237, 'Edi Syahputra', 0, 'Sr. Production Foreman', 2, 'CBM'),
(239, 'Awisy Karni', 0, 'Production Foreman', 2, 'CBM'),
(250, 'Hamid Salamah', 0, 'Sr. Production Foreman', 2, 'CBM'),
(251, 'Dwi Cahyono', 0, 'Production Foreman', 2, 'CBM'),
(255, 'Tismono', 0, 'Production Foreman', 2, 'CBM'),
(261, 'Bambang Prastiono', 0, 'Store Foreman', 10, 'CBM'),
(263, 'Shomad Ibrahim', 0, 'Material Movement Foreman', 2, 'CBM'),
(267, 'Yuli Fatmawati', 0, 'Sr. Purchasing Supervisor', 10, 'CBM'),
(268, 'Dul Halim', 0, 'Sr. Production Foreman', 2, 'CBM'),
(269, 'Al Imran', 0, 'Sr. Production Foreman', 2, 'CBM'),
(281, 'Andi Rianto', 0, 'Production Foreman', 2, 'CBM'),
(284, 'Jamarsen Saragih', 0, 'Bending & TH Supervisor', 2, 'CBM'),
(305, 'Gatot Hartojo', 0, 'Sr. Manual Repair Foreman', 2, 'CBM'),
(306, 'Rahmat Gunanda', 0, 'Production Foreman', 2, 'CBM'),
(308, 'Suriadi', 0, 'Sr. Production Foreman', 2, 'CBM'),
(321, 'Muhammad Nur Dharma', 0, 'Sr. Project Manager', 1, 'CBM'),
(332, 'Sazli Rahmat', 0, 'Sr. Production Foreman', 2, 'CBM'),
(335, 'Decky Heryanto', 0, 'Production Foreman', 2, 'CBM'),
(339, 'Martana', 0, 'Production Foreman', 2, 'CBM'),
(343, 'Ilham Laxi Lita', 0, 'Store Foreman', 10, 'CBM'),
(349, 'Suryanarayanan Venkataramanan', 0, 'Project Operations Manager', 14, 'CBM'),
(354, 'Junaidi', 0, 'Electrical Control System Supervisor', 5, 'CBM'),
(361, 'Hot Bangun T.', 0, 'Production Foreman', 2, 'CBM'),
(381, 'Marwan Syarif', 0, 'Sr. Production Foreman', 2, 'CBM'),
(401, 'Suherimon', 0, 'MLP Superintendent', 2, 'CBM'),
(402, 'Sultan Juliadi Hutabarat', 0, 'Production Foreman', 2, 'CBM'),
(537, 'R. Padmanaba Bayu sutrisna', 0, 'Bending & HT Superintendent', 1, 'CBM'),
(538, 'Samuel Pakpahan', 0, 'Maintenance Foreman', 5, 'CBM'),
(539, 'Syahrial', 0, 'Sr. Production Foreman', 2, 'CBM'),
(554, 'Putra Pernandes', 0, 'Sr. Production Foreman', 2, 'CBM'),
(564, 'Fran Ellis Sinaga', 0, 'Store Foreman', 10, 'CBM'),
(567, 'Himawan Azis', 0, 'Production Foreman', 2, 'CBM'),
(571, 'Hermansyah Manurung', 0, 'Material Movement Supervisor', 2, 'CBM'),
(591, 'Dedy Irawan', 0, 'Production Foreman', 2, 'CBM'),
(604, 'Cynthia Lee', 0, 'Group Finance Manager', 12, 'CBM'),
(679, 'Joni Mart Sitio', 0, 'Quality Control Superintendent', 4, 'CBM'),
(699, 'Heru Suprapto', 0, 'Material Movement Foreman', 2, 'CBM'),
(742, 'Kabib', 0, 'Security Coordinator', 11, 'CBM'),
(829, 'Saiful Muslim', 0, 'Production Foreman', 2, 'CBM'),
(847, 'Charles Edison Simangunsong', 0, 'Maintenance Superintendent', 5, 'CBM'),
(956, 'Patar Pangaribuan', 0, 'Sr. Project Manager', 1, 'CBM'),
(967, 'Armenthos Putra Candra', 0, 'NDT Supervisor', 4, 'CBM'),
(984, 'Yudika Nainggolan', 0, 'Production Foreman', 2, 'CBM'),
(990, 'Yurisman Gunadi', 0, 'Sr. QC Inspector', 4, 'CBM'),
(993, 'Leonard Panjaitan', 0, 'Maintenance D/S Supervisor', 5, 'CBM'),
(994, 'Supriadi', 0, 'Maintenance Supervisor', 5, 'CBM'),
(1018, 'Vinod Kumar Ramashankar Upadhyay', 0, 'Special Project Manager', 15, 'CBM'),
(1056, 'Raja Muhammad Rais', 0, 'Sr. NDE Technician', 4, 'CBM'),
(1077, 'Marga Suryasastra', 0, 'Sr. Production Foreman', 2, 'CBM'),
(1115, 'Dedy Januar', 0, 'Production Foreman', 2, 'CBM'),
(1119, 'Haryanto', 0, 'Production Foreman', 2, 'CBM'),
(1139, 'Budiyoto', 0, 'Maintenance Foreman', 5, 'CBM'),
(1148, 'Charles R Lumban Tobing', 0, 'Production Foreman', 2, 'CBM'),
(1153, 'Franciscus Xaverius Tomy Andriyanto', 0, 'Quality Control Supervisor', 4, 'CBM'),
(1161, 'Rio Tadria', 0, 'Sr. NDE Technician', 4, 'CBM'),
(1169, 'Sarjono', 0, 'Manual Repair Supervisor', 2, 'CBM'),
(1203, 'Joni Saputra bin Abdul Hamid', 0, 'Store Foreman', 10, 'CBM'),
(1213, 'Tinora Sinaga', 0, 'Sr. HR Officer', 11, 'CBM'),
(1240, 'Suindra', 0, 'Production Foreman', 2, 'CBM'),
(1253, 'Irwan Loser Pardede', 0, 'Store Manager', 10, 'CBM'),
(1296, 'Dwi Dian Larasati', 0, 'Planning Superintendent', 1, 'CBM'),
(1339, 'Hardianto', 0, 'Sr. QC Technician', 4, 'CBM'),
(1361, 'Ramot Silitonga', 0, 'NDT Supervisor', 4, 'CBM'),
(1366, 'Rejeki Sinaga', 0, 'Sr. QC Document Controller', 4, 'CBM'),
(1393, 'Bernat P.S Turnip', 0, 'Sr. QC Technician', 4, 'CBM'),
(1418, 'Darmin', 0, 'Manual Repair Foreman', 2, 'CBM'),
(1464, 'Riyawan', 0, 'Maintenance Supervisor', 5, 'CBM'),
(1475, 'Hotmanagam Sianturi', 0, 'Facility Foreman', 5, 'CBM'),
(1477, 'Syaifudin', 0, 'Sr. Technician - Electric', 5, 'CBM'),
(1518, 'Khoirul Anwar', 0, 'MLP Supervisor', 2, 'CBM'),
(1527, 'Yuli Yanti Ginting', 0, 'Logistic Supervisor', 10, 'CBM'),
(1549, 'Hotner Hutagalung', 0, 'Production Foreman', 2, 'CBM'),
(1553, 'Andita Sakti Putra', 0, 'Sr. Design Engineer', 14, 'CBM'),
(1558, 'Ahmad Yasir', 0, 'Sr. QC Engineer', 4, 'CBM'),
(1560, 'Rizal TP Hutagalung', 0, 'NDE Superintendent', 4, 'CBM'),
(1563, 'Philipus Dore Niron', 0, 'Sr. QC Technician', 4, 'CBM'),
(1573, 'Herry Faisal', 0, 'Production Foreman', 2, 'CBM'),
(1575, 'John Piter Sitompul', 0, 'Project Coordinator', 1, 'CBM'),
(1587, 'Bambang Maradongan Tua Sinaga', 0, 'Sr. NDT Supervisor', 4, 'CBM'),
(1602, 'Redho Dyanovitra', 0, 'Maintenance Supervisor', 5, 'CBM'),
(1639, 'Teddy Salawiska', 0, 'Sr. QC Engineer Supervisor', 4, 'CBM'),
(1641, 'Yogi Supardi', 0, 'Production Foreman', 2, 'CBM'),
(1675, 'Diansyah Aras', 0, 'Production Foreman', 2, 'CBM'),
(1692, 'Mohammad Nahrowi', 0, 'Production Foreman', 2, 'CBM'),
(1702, 'Frans Musa Situmorang', 0, 'Sr. QC Inspector', 4, 'CBM'),
(1741, 'Iwanto', 0, 'Production Foreman', 2, 'CBM'),
(1752, 'Horas Parulian Situmorang', 0, 'Sr. QC Technician', 4, 'CBM'),
(1757, 'Handi Mariyanto', 0, 'Sr. QC Technician', 4, 'CBM'),
(1758, 'Marsaldi', 0, 'Sr. QC Technician', 4, 'CBM'),
(1778, 'Doni Dwi Pramuda', 0, 'Sr. QC Technician', 4, 'CBM'),
(1788, 'Mirza Efendi', 0, 'Production Foreman', 2, 'CBM'),
(1830, 'Agus Ridwan', 0, 'Sr. NDT Engineer', 4, 'CBM'),
(1838, 'Eflia Hendri', 0, 'Maintenance Foreman', 5, 'CBM'),
(1874, 'Franklin', 0, 'Supply Chain Manager', 10, 'CBM'),
(1909, 'Ronsen Panggabean', 0, 'NDT Supervisor', 4, 'CBM'),
(1912, 'Khairil', 0, 'Facility Operations Superintendent', 5, 'CBM'),
(1923, 'Sarwoto', 0, 'Maintenance Foreman', 5, 'CBM'),
(1932, 'Tomoyuki Ueno', 0, 'Production Manager', 2, 'CBM'),
(1941, 'Nasrul Adi Jaya', 0, 'Sr. Welding Engineer', 14, 'CBM'),
(1943, 'Iswantika Eka Putra', 0, 'Automation Manager', 6, 'CBM'),
(1945, 'Dosroha Manalu', 0, 'Sr. Maintenance Foreman', 5, 'CBM'),
(1951, 'Poppi Shoma', 0, 'General Affair Coordinator', 11, 'CBM'),
(1956, 'Septi Cristian Saragih', 0, 'Material Supervisor', 10, 'CBM'),
(1961, 'Muhammad Fadli', 0, 'Packing & Carpenter Supervisor', 2, 'CBM'),
(1965, 'Agustina Simamora', 0, 'Project Manager', 1, 'CBM'),
(1971, 'Untung Ady Suroso', 0, 'Design Superintendent', 4, 'CBM'),
(1976, 'Dhani Purwadi', 0, 'Sr. Project Engineer', 1, 'CBM'),
(1997, 'Agusni', 0, 'Maintenance Foreman', 5, 'CBM'),
(2004, 'Arya Rakasiwi', 0, 'Maintenance Foreman', 5, 'CBM'),
(2026, 'Doni Mardiansyah', 0, 'Production Foreman', 2, 'CBM'),
(2039, 'Zulistian', 0, 'Production Foreman', 2, 'CBM'),
(2040, 'Muhklizar', 0, 'Production Foreman', 2, 'CBM'),
(2051, 'Rizal Saleh', 0, 'Production Foreman', 2, 'CBM'),
(2079, 'Puguh Setyawan', 0, 'Spool Fab. Welder Supervisor', 2, 'CBM'),
(2099, 'Tari Rumantias', 0, 'Sr. Production Admin', 2, 'CBM'),
(2109, 'Wahyu Hidayat', 0, 'Facility Foreman', 5, 'CBM'),
(2138, 'Fauzul Azim', 0, 'Maintenance Foreman', 5, 'CBM'),
(2152, 'Edy Sudarman Sinaga', 0, 'Blast & Paint Foreman', 2, 'CBM'),
(2154, 'Jhon Ismanto Girsang', 0, 'Sr. MD NDE Technician', 4, 'CBM'),
(2164, 'Albert Hasudungan Panjaitan', 0, 'Material Movement Foreman', 2, 'CBM'),
(2165, 'Suhendra Aidil', 0, 'Sr. NDE Technician', 4, 'CBM'),
(2171, 'Indra', 0, 'Spool Fab. Fitter Supervisor', 2, 'CBM'),
(2177, 'Bambang Margono', 0, 'Spool Fab. Superintendent', 2, 'CBM'),
(2190, 'Irfan Novianto Cahyo', 0, 'SHV Supervisor', 2, 'CBM'),
(2205, 'Ricco Samosir', 0, 'Sr. Technician - Electric', 5, 'CBM'),
(2215, 'Deny Tirta Kusuma', 0, 'Electrical Superintendent', 5, 'CBM'),
(2218, 'Gandhi Perkasa Purnama Putra', 0, 'Sr. Design Engineer', 5, 'CBM'),
(2227, 'Chu Beng Yan', 0, 'Chief Financial Officer', 12, 'CBM'),
(2364, 'Farmansyah Sarumaha', 0, 'Facility Foreman', 5, 'CBM'),
(2527, 'M Ridha', 0, 'Project Manager', 1, 'CBM'),
(2528, 'Lia Aristantya Ermiyanty Sihombing', 0, 'Project Document Controller Supervisor', 1, 'CBM'),
(2627, 'Yanda Saputra', 0, 'MLP Superintendent', 2, 'CBM'),
(2726, 'Ronny Saut Parasian', 0, 'Sr. MD NDE Technician', 4, 'CBM'),
(2765, 'David Michael Mcloughlin', 0, 'Welding Specialist', 2, 'CBM'),
(2801, 'Reylina Garcia Tayactac', 0, 'Marketing & Tendering Manager', 3, 'CBM'),
(2868, 'Engky Suwito', 0, 'Sr. Technician Mechanical', 5, 'CBM'),
(2935, 'Devanan Patar Manaratua Hutahaean', 0, 'Sr. NDE Technician', 4, 'CBM'),
(2939, 'Jhonson Effendy Simanjuntak', 0, 'Sr. NDE Technician', 4, 'CBM'),
(2943, 'Roni Jekson Alfredo Sitompul', 0, 'Sr. NDE Technician', 4, 'CBM'),
(2955, 'Rudyanto Edward P Manurung', 0, 'Sr. NDE Technician', 4, 'CBM'),
(2964, 'Okkie Hardian', 0, 'Sr. QC Inspector', 4, 'CBM'),
(2992, 'Romuel Saragih', 0, 'Sr. QC Inspector', 4, 'CBM'),
(2996, 'Zaenal Sugilar', 0, 'Sr. MD NDE Technician', 4, 'CBM'),
(3020, 'Dicky Fernando Hutajulu', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3210, 'Ganesh Karri', 0, 'Production Lead Control & Automation WOL', 5, 'CBM'),
(3231, 'Friendly Alfredo Samosir', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3300, 'Cahyo Andono', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3331, 'Wayne Leslie Williams', 0, 'Maintenance Manager', 5, 'CBM'),
(3346, 'Zulhendri', 0, 'MLP Superintendent', 2, 'CBM'),
(3358, 'Hendra Mangampu Tua Rajagukguk', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3364, 'Ida Puspitasari', 0, 'Sr. QC Document Controller', 4, 'CBM'),
(3377, 'Sisianto', 0, 'Facility Foreman', 5, 'CBM'),
(3380, 'Agus Rianto', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3463, 'Ahmad Syukur', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3476, 'Angga Wijaya', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3477, 'Freniking. S', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3489, 'Alan Batara Alauddin', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3490, 'Daud Tambun', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3492, 'Maradona Hasudungan Butarbutar', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3493, 'Sahat Tambunan', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3496, 'Abdurohman Bin Rawinda', 0, 'QC Manager', 4, 'CBM'),
(3498, 'Sasi Kanth Medicherla', 0, 'Consultant', 4, 'CBM'),
(3547, 'Julian Dwi Cahyo', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3549, 'M. Nasir', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3597, 'Armin Fluner Nainggolan', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3599, 'Mahrizal Suito Siregar', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3610, 'Nurhadi', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3686, 'Dayanandan Jayachandra Babu', 0, 'Process Improvement Lead', 7, 'CBM'),
(3714, 'Craig Duncan', 0, 'General Manager', 16, 'CBM'),
(3717, 'Sigit Naharudin', 0, 'Assistant HR Manager', 11, 'CBM'),
(3756, 'Patar Maringan Parulian Siahaan', 0, 'Sr. MD NDE Technician', 4, 'CBM'),
(3759, 'Syafri', 0, 'Sr. QC Inspector', 4, 'CBM'),
(3775, 'Afrishella Irviani Asnawi', 0, 'Sr. EPICOR Admin', 13, 'CBM'),
(3821, 'Andreas Suryanda Laksono', 0, 'Sales Manager', 3, 'CBM'),
(3824, 'Vion Cavell', 0, 'Sr. Accountant Supervisor', 12, 'CBM'),
(3825, 'Romaida Hutabarat', 0, 'QA Manager', 8, 'CBM'),
(3858, 'Dicki Fadjar Dewanto', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3863, 'Iman Simorangkir', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3864, 'Indra Jaya Hutabarat', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3865, 'Steven Jems Sumarauw', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3875, 'Arif Fianto', 0, 'Production Foreman', 2, 'CBM'),
(3879, 'Ariko Yuliandri', 0, 'Sr. QC Inspector', 4, 'CBM'),
(3882, 'Partomuan Samosir', 0, 'Sr. QC Inspector', 4, 'CBM'),
(3974, 'Juhman Hadi', 0, 'Sr. NDE Technician', 4, 'CBM'),
(3977, 'Mangidotua Sebastianus Situmorang', 0, 'Sr. QC Inspector', 4, 'CBM'),
(4010, 'Bornok Tampubolon', 0, 'Sr. QC Inspector', 4, 'CBM'),
(4066, 'Hartono', 0, 'Sr. QC Inspector', 4, 'CBM'),
(4094, 'Aman Siregar', 0, 'Production Foreman', 2, 'CBM'),
(4106, 'Fernando Siboro', 0, 'ITES Manager', 13, 'CBM'),
(4107, 'Sumarlin', 0, 'Sr. NDE Technician', 4, 'CBM'),
(4108, 'Imom Jarkasi', 0, 'Sr. NDE Technician', 4, 'CBM'),
(4124, 'Maryanta', 0, 'Sr. NDE Technician', 4, 'CBM'),
(4125, 'Riwanto', 0, 'Sr. NDE Technician', 4, 'CBM'),
(4155, 'Fian Sofian Ariyadi', 0, 'Sr. Technical Engineer', 14, 'CBM'),
(4172, 'Stefanno Widy Yunior', 0, 'Technical Manager', 14, 'CBM'),
(4223, 'Aang Junaidi', 0, 'Engineering & Automation Superintendent', 6, 'CBM'),
(4227, 'Ahmad Saad', 0, 'Equipment & Build Foreman', 2, 'CBM'),
(4400, 'Satoto Subandoro', 0, 'HRIS Supervisor', 11, 'CBM'),
(4577, 'Sakun Purwandono Adi Nugroho', 0, 'Warehouse Supervisor', 10, 'CBM');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocID` varchar(25) NOT NULL,
  `LocName` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `AreaID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocID`, `LocName`, `Description`, `AreaID`) VALUES
('1ST', 'FIRST FLOOR AREA', 'FIRST FLOOR AREA', 'OF'),
('2ND', 'SECOND FLOOR AREA', 'SECOND FLOOR AREA', 'OF'),
('3RD', 'THIRD FLOOR AREA', 'THIRD FLOOR AREA', 'OF'),
('AB', 'AUTO BLASTING', 'AUTO BLASTING', 'WC'),
('BA', 'BEVEL AREA', 'BEVEL AREA', 'WB'),
('BC', 'BLACK COATING', 'BLACK COATING', 'WD'),
('CA', 'COMPRESSOR AREA', 'COMPRESSOR AREA', 'WA'),
('CAN', 'CANTEEN AREA', 'CANTEEN AREA', 'Y1'),
('CC', 'CLIENT CONTAINER', 'CLIENT CONTAINER', 'Y1'),
('CNC', 'CNC', 'CNC', 'WD'),
('CR', 'DARK ROOM/CONTROL ROOM', 'DARK ROOM/CONTROL ROOM', 'WB'),
('CRP', 'CARPENTER', 'CARPENTER', 'WD'),
('DRT', 'DRT', 'DRT', 'WB'),
('EC', 'E.C. (END CLAD)', 'E.C. (END CLAD)', 'WB'),
('EDCU', 'EDDY CURRENT', 'EDDY CURRENT', 'WB'),
('EXP', 'EXPAND', 'EXPAND', 'WB'),
('FAR', 'FIRST AID ROOM', 'FIRST AID ROOM', 'Y1'),
('FDC', 'FDC BENDING', 'FDC BENDING', 'WC'),
('FDC-FIT', 'FDC FITTING/FLATGE', 'FDC FITTING/FLATGE', 'WD'),
('FO', 'FINANCE OFFICE', 'FINANCE OFFICE', 'OF'),
('FS', 'FABRIKASI STATION', 'FABRIKASI STATION', 'WB'),
('FUR', 'FURNACE', 'FURNACE', 'WC'),
('FV', 'FINAL VISUAL (QC)', 'FINAL VISUAL (QC)', 'WA'),
('HR', 'HR OFFICE', 'HR OFFICE', 'OF'),
('HYD', 'HYDROTEST', 'HYDROTEST', 'WB'),
('IB', 'INDUCTION BEND', 'INDUCTION BEND', 'WC'),
('MHYD', 'HYDROTEST (MANUAL HYDROTEST)', 'HYDROTEST (MANUAL HYDROTEST)', 'WD'),
('MLP', 'MLP', 'MLP', 'WB'),
('MRL1', 'MEETING ROOM 1ST FLOOR', 'MEETING ROOM 1ST FLOOR', 'OF'),
('MRL2', 'MEETING ROOM 2ND FLOOR', 'MEETING ROOM 2ND FLOOR', 'OF'),
('MRL3', 'MEETING ROOM WASIT 3RD FLOOR', 'MEETING ROOM WASIT 3RD FLOOR', 'OF'),
('MRS', 'MANUAL REPAIR STATION', 'MANUAL REPAIR STATION', 'WA'),
('MS', 'MACHINING STATION', 'MACHINING STATION', 'WA'),
('PAC', 'PARKING AREA CAR', 'PARKING AREA', 'Y1'),
('PAM', 'PARKING AREA MOTORCYCLE', 'PARKING AREA MOTORCYCLE', 'Y1'),
('PAR', 'PARKING AREA', 'PARKING AREA', 'Y2'),
('PIKLING', 'PIKLING', 'PIKLING', 'WA'),
('PL1', 'PANTRY LEVEL 1', 'PANTRY LEVEL 1', 'OF'),
('PL2', 'PANTRY LEVEL 2', 'PANTRY LEVEL 2', 'OF'),
('QS', 'QH STATION', 'QH STATION', 'WA'),
('RCP', 'RECEPTIONIST', 'RECEPTIONIST', 'Y1'),
('RT', 'RADIOGRAPHY TESTING (DOG HOUSE)', 'RADIOGRAPHY TESTING (DOG HOUSE)', 'WB'),
('RTB', 'RT BUNKER', 'RT BUNKER', 'WC'),
('S1', 'POST SECURITY 1', 'POST SECURITY 1', 'Y1'),
('S2', 'POST SECURITY 2', 'POST SECURITY 2', 'Y1'),
('SF', 'SPOOL FABRIKASI', 'SPOOL FABRIKASI', 'WD'),
('SHV', 'SHV', 'SHV', 'WC'),
('SHV-3', 'SHV (3 STATION)', 'SHV (3 STATION)', 'WA'),
('SR', 'SERVER ROOM', 'SERVER ROOM', 'OF'),
('TS', 'TH STATION', 'TH STATION', 'WA'),
('TSA', 'TOILET SHOP A', 'TOILET SHOP A', 'Y1'),
('TSD', 'TOILET SHOP D', 'TOILET SHOP D', 'Y1'),
('VA', 'VISUAL AREA (INTERNAL QC PRODUCTION)', 'VISUAL AREA (INTERNAL QC PRODUCTION)', 'WA'),
('VIA', 'VISUAL AREA', 'VISUAL AREA', 'WB'),
('WE', 'Workshop E', 'Workshop E', 'Y2'),
('WS', 'WELDING SPOOL', 'WELDING SPOOL', 'WD'),
('WWB', 'WW BENDING', 'WW BENDING', 'WC'),
('WWS', 'WW STATION', 'WW STATION', 'WC'),
('Y2', 'YARD 2 AREA', 'YARD 2 AREA', 'Y2');

-- --------------------------------------------------------

--
-- Table structure for table `oc`
--

CREATE TABLE `oc` (
  `TrackingNum` varchar(25) NOT NULL,
  `CompanyID` varchar(10) NOT NULL,
  `OCType` varchar(50) NOT NULL,
  `ShortChart` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Shift` varchar(50) NOT NULL,
  `Time` time NOT NULL,
  `AreaID` varchar(25) NOT NULL,
  `LocID` varchar(25) NOT NULL,
  `Problem` varchar(500) NOT NULL,
  `Suggestion` varchar(500) NOT NULL,
  `OCCategory` varchar(50) NOT NULL,
  `Action` varchar(100) NOT NULL,
  `ImplementDate` date NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `CustID` varchar(25) NOT NULL,
  `BeforeAction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oc`
--

INSERT INTO `oc` (`TrackingNum`, `CompanyID`, `OCType`, `ShortChart`, `Date`, `Shift`, `Time`, `AreaID`, `LocID`, `Problem`, `Suggestion`, `OCCategory`, `Action`, `ImplementDate`, `Status`, `Remark`, `Name`, `EmpName`, `EmpID`, `CustID`, `BeforeAction`) VALUES
('OC-0003', 'CBM', 'Self Observation', '', '2021-04-08', 'N/S', '00:00:00', 'WA', 'CA', 'dwadwd', 'dw', 'AUDIT', '', '0000-00-00', 'Open', 'Employee', '', '', 153, '0', ''),
('OC-0022', 'CBM', 'dwdwag', '', '2021-04-08', 'N/S', '00:00:00', 'WA', 'FV', 'dadwada', 'dawada', 'RISK ASSESMENT', '', '0000-00-00', 'Closed', 'Visitor', 'dwada', '', 0, '0', ''),
('OC-0041', 'CTB', 'adwada', '', '2021-04-09', 'D/S', '00:00:00', 'WA', 'MRS', 'dwada', 'dwadada', 'SAFETY SAFARY', '', '0000-00-00', 'Closed', 'Client', '', '', 0, 'CA020', ''),
('OC-0043', 'CSA', 'Un Safe Action', '', '2021-04-10', 'D/S', '00:00:00', 'WA', 'FV', 'wdwada', 'dwada', 'SAFETY SAFARY', '', '0000-00-00', 'Closed', 'Employee', '', '', 3775, '', ''),
('OC-0044', 'CSA', 'Self Observation', '', '2021-04-10', 'N/S', '00:00:00', 'WB', 'MLP', 'dwda', 'dawda', 'SAFETY SAFARY', '', '0000-00-00', 'Assign', 'Employee', '', '', 134, '', ''),
('OC-0045', 'CSA', 'Self Observation', '', '2021-04-10', 'D/S', '00:00:00', 'WA', 'MRS', 'dwdwaa', 'dada', 'OBSERVATION', '', '0000-00-00', 'Open', 'Employee', '', '', 134, '', ''),
('OC-0046', 'CSA', 'Self Observation', '', '2021-04-10', 'D/S', '00:00:00', 'WA', 'CA', 'dwadwa', 'dawdaw', 'RISK ASSESMENT', '', '0000-00-00', 'Open', 'Visitor', 'dwada', '', 0, '', ''),
('OC-0050', 'CSA', 'Self Observation', '', '2021-04-10', 'N/S', '00:00:00', 'WA', 'MRS', 'dwdaw', 'dwadwada', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 78, '', ''),
('OC-0052', 'CSA', 'Unsafe Procedure', '', '2021-04-03', 'D/S', '00:00:00', 'WA', 'FV', 'dwdwad', 'wadawda', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Visitor', 'dwda', '', 0, '', ''),
('OC-0054', 'CTB', 'Self Observation', '', '2021-04-10', 'N/S', '00:00:00', 'WA', 'MRS', 'wadwada', 'awdawda', 'RISK ASSESMENT', '', '0000-00-00', 'Open', 'Visitor', 'dwada', '', 0, '', ''),
('OC-0055', 'CSA', 'Self Observation', '', '2021-04-09', 'N/S', '00:00:00', 'WA', 'FV', 'dwdwawda', 'dwada', 'SAFETY SAFARY', '', '0000-00-00', 'Closed', 'Visitor', 'ada', '', 0, '', ''),
('OC-0056', 'CME', 'Un Safe Condition', '', '2021-04-11', 'N/S', '00:00:00', 'WB', 'DRT', 'dwadad', 'dwada', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 12, '', ''),
('OC-0057', 'CME', 'Self Observation', '', '2021-04-18', 'N/S', '00:00:00', 'WA', 'FV', '321312', '311', 'RISK ASSESMENT', '', '0000-00-00', 'Open', 'Employee', '', '', 12, '', 'Pasted_image1.png'),
('OC-0058', 'CSA', 'adwadsad', '', '2021-04-18', 'N/S', '00:00:00', 'WA', 'CA', 'dwadwa', 'dwada', 'RISK ASSESMENT', '', '0000-00-00', 'Assign', 'Visitor', 'Brazil', '', 0, '', ''),
('OC-0059', 'CSA', 'Un Safe Action', '', '2021-04-11', 'D/S', '00:00:00', 'OF', '2ND', 'aaaa', 'aaa', 'SAFETY SAFARY', '', '0000-00-00', 'Assign', 'Client', '', '', 0, 'CA001', ''),
('OC-0060', 'CME', 'Self Observation', '', '2021-04-11', 'N/S', '00:00:00', 'OF', '2ND', 'adwadadw', 'adawdwa', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', 'Afrishella', 3775, '', ''),
('OC-0061', 'CME', 'Self Observation', '', '2021-04-12', 'N/S', '00:00:00', 'OF', '3RD', 'dwadwa', 'dada', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Client', '', '', 0, 'CA001', ''),
('OC-0062', 'CME', 'Self Observation', '', '2021-04-12', 'N/S', '11:14:31', 'WA', 'FV', 'dwad', 'dwaadwa', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Visitor', 'dwada', '', 0, '', ''),
('OC-0063', 'CME', 'Self Observation', '', '2021-04-12', 'N/S', '10:19:24', 'WA', 'FV', 'd', 'dwa', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Visitor', '0000000000', '', 0, '', ''),
('OC-0064', 'CTB', 'Self Observation', '', '2021-04-12', 'N/S', '10:20:30', 'WA', 'MRS', 'dwada', 'dadaaw', 'RISK ASSESMENT', '', '0000-00-00', 'Closed', 'Visitor', 'dwadaw', '', 0, '', ''),
('OC-0065', 'CSA', 'Good Service', '', '2021-04-12', 'N/S', '00:00:00', 'WA', 'FV', 'waa', 'dwadaw', 'SAFETY SAFARY', '', '0000-00-00', 'Assign', 'Visitor', 'dwadaw', '', 0, '', ''),
('OC-0066', 'CSA', 'Un Safe Condition', '', '2021-04-12', 'N/S', '00:00:00', 'OF', '2ND', 'dqwdq', 'dwqd', 'RISK ASSESMENT', '', '0000-00-00', 'Open', 'Visitor', 'wdqw', '', 0, '', ''),
('OC-0067', 'CME', 'aaaaa', '', '2021-04-12', 'N/S', '00:00:00', 'OF', '2ND', 'dwa', 'dawda', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Client', '', '', 0, 'CA GENERAL', ''),
('OC-0068', 'CBM', 'Good Service', '', '2021-04-13', 'D/S', '00:00:00', 'OF', '1ST', 'dqdq', 'dwdq', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0069', 'CBM', 'Good Service', '', '2021-04-13', 'N/S', '00:00:00', 'WA', 'MRS', 'dadwaad', 'wada', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0070', 'CBM', 'Good Service', '', '2021-04-13', 'D/S', '00:00:00', 'WA', 'MRS', 'dwada', 'dwadaw', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0071', 'CBM', 'Good Service', '', '2021-04-13', 'N/S', '00:00:00', 'OF', '2ND', 'DWDA', 'DWADAW', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Visitor', '', '', 0, '', ''),
('OC-0072', 'CBM', 'Good Service', '', '2021-04-13', 'N/S', '00:00:00', 'OF', '2ND', 'dwa', 'dwadwa', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Visitor', '', '', 0, '', ''),
('OC-0073', 'CBM', 'Un Safe Condition', '', '2021-04-13', 'D/S', '00:00:00', 'OF', '1ST', 'dwada', 'dwada', 'Safety Management By Walking Around(SMBWA)', '', '0000-00-00', 'Open', 'Visitor', '', '', 0, '', ''),
('OC-0074', 'CBM', 'Un Safe Action', '', '2021-04-13', 'D/S', '00:00:00', 'WA', 'CA', 'ddwa', 'dwda', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0075', 'CBM', 'A', '', '2021-04-13', 'N/S', '00:00:00', 'WA', 'FV', 'DWAWWDAD', 'DWAAWD', 'Safety Management By Walking Around(SMBWA)', '', '0000-00-00', 'Open', 'Employee', '', '', 134, '', ''),
('OC-0076', 'CBM', 'Nearmiss', '', '2021-04-13', 'N/S', '00:00:00', 'WA', 'FV', 'WDADAD', 'ADDAW', 'Safety Management By Walking Around(SMBWA)', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0077', 'CME', 'Un Safe Action', '', '2021-04-13', 'D/S', '00:00:00', 'WA', 'FV', 'dwadwa', 'dwada', 'Safety Management By Walking Around(SMBWA)', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0078', 'CA', 'Un Safe Condition', '', '2021-04-13', 'D/S', '00:00:00', 'WB', 'DRT', 'ddwa', 'dwaaw', 'Safety Management By Walking Around(SMBWA)', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0079', 'CBM', 'Un Safe Condition', '', '2021-04-13', 'D/S', '00:00:00', 'WB', 'DRT', 'dwadwaa', 'dwada', 'SAFETY SAFARY', '', '0000-00-00', 'Open', 'Employee', '', '', 1, '', ''),
('OC-0080', 'CBM', 'Good Service', '', '2021-04-13', 'N/S', '00:00:00', 'WA', 'MRS', 'dwaw', 'dwada', 'SAFETY SAFARY', '', '0000-00-00', 'Open', '', '', '', 0, '', ''),
('OC-0081', 'CHS', 'Good Service', '', '2021-04-13', 'N/S', '00:00:00', 'OF', '1ST', 'da', 'da', 'OBSERVATION', '', '0000-00-00', 'Open', 'Visitor', '', '', 0, '', ''),
('OC-0082', 'CBM', 'Achievement', '', '2021-04-13', 'D/S', '00:00:00', 'WB', 'CR', 'dwadadwa', 'dawdaw', 'Safety Management By Walking Around(SMBWA)', '', '0000-00-00', 'Open', 'Visitor', 'dwada', '', 0, '', ''),
('OC-0083', 'CBM', 'dqwdqdqdq', '', '2021-04-13', 'D/S', '00:00:00', 'WB', 'HYD', 'dwqdqw', 'dqwqw', 'OBSERVATION', '', '0000-00-00', 'Open', 'Employee', '', '', 134, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `No_Hp` int(12) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL,
  `CompanyID` varchar(10) NOT NULL,
  `DeptID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `Email`, `No_Hp`, `id_session`, `level`, `CompanyID`, `DeptID`, `Name`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'admin@cladtek.com', 1234, '21232f297a57a5a743894a0e4a801fc3-20210210084219', 'admin', 'CBM', 13, ''),
('automationhod', 'e122209364fa4591bd1aa89732eca3b7', 'automationhod@gmail.com', 0, 'fe1f2655b666fcbfe928747c4ab0524d-20210411053127', 'user', 'CBM', 6, 'Production Automation HOD'),
('businesshod', 'c20d1eabf2ed550481e6e0508980f365', 'businesshod@gmail.com', 0, 'd647115449f0db981be6ce9b1dcefcc6-20210411052430', 'user', 'CBM', 3, 'Business HOD'),
('financehod', 'cf69a16a8f55b8976180eba5e34b71b6', 'financehod@gmail.com', 0, '698a9886b29fa4ba7bafe141d17b45fb-20210411053503', 'user', 'CBM', 12, 'Finance HOD'),
('hrhod', '21d241bb120ab9bd0133ac1cc3da4f26', 'hrhod@gmail.com', 0, '50af04f7625b9330336bbec07d2c2f07-20210411053436', 'user', 'CBM', 11, 'HR HOD'),
('hseadmin', 'baf75bb2f03506484678c95b744733d6', 'hseadmin@gmail.com', 0, '9e47e70249b73b18348e4de0e93395bf-20210411053707', 'admin', 'CBM', 9, 'HSE Admin'),
('hsehod', '4190f18afd6281e6c63dcd7977af7bfa', 'hsehod@gmail.com', 0, '7e4387f0365ea54c54c0775484e8ee52-20210411053335', 'admin', 'CBM', 9, 'HSE HOD'),
('iteshod', 'e43a79c1b46b9851d867f6ca4f15d48f', 'iteshod@gmail.com', 0, '51663e5565ca8f9b2f6484ca578f46dc-20210411053532', 'user', 'CBM', 13, 'ITES HOD'),
('mthod', '135af29e7d7bb808ab5fdd57218c9fa7', 'mthod@gmail.com', 0, '29367d973d457e21ce5f2f3527d4db8a-20210411052946', 'user', 'CBM', 5, 'Maintenance HOD'),
('productionhod', 'f1a37096674c048c1a8ef3893fbd98e1', 'producion@gmail.com', 0, '8e2d84a1b47768206a425e687316aec7-20210411052352', 'user', 'CBM', 2, 'Production HOD'),
('project2hod', '8108e1bae0a39e3209b39e4b4ece3b69', 'project2hod@gmail.com', 0, 'e05a151a57d29e00aed2820cb8a43a85-20210411053739', 'user', 'CBM', 15, 'Project Others HOD'),
('projecthod', '42a1bb5ac34b6a194fb2caabe4a02eba', 'projecthod@gmail.com', 0, '92290a9f0499cb03c070132b80f65be1-20210411052219', 'user', 'CBM', 1, 'Project HOD'),
('qahod', '305d2ded79298cee38a3065e996cd52f', 'qahod@gmail.com', 0, 'b41e25acb4be501292ba0524fd19fa4f-20210411053157', 'user', 'CBM', 8, 'QA HOD'),
('qchod', 'de446c0af0698792dc708746d052a067', 'qchod', 0, '91f53943e77b274bd4149d8790be520a-20210411052846', 'user', 'CBM', 4, 'QC HOD'),
('scmhod', '776ef753f991fa0cc5e12bc15699bf38', 'scmhod@gmail.com', 0, '8650399d5ec407667cb3120c7b455993-20210411053401', 'user', 'CBM', 10, 'SCM HOD'),
('technicalhod', 'ce69e785a3f34347156a41c3fa3b243c', 'technicalhod@gmail.com', 0, 'b1a0fe755c7ec6c10438dcaed862d88f-20210411053642', 'user', 'CBM', 14, 'Technical HOD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionplan`
--
ALTER TABLE `actionplan`
  ADD PRIMARY KEY (`ActionNum`),
  ADD KEY `TN` (`TrackingNum`),
  ADD KEY `CO` (`CompanyID`),
  ADD KEY `US` (`username`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AreaID`),
  ADD KEY `COMPA` (`CompanyID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`OCCategory`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ProjectID`),
  ADD KEY `CMP` (`CompanyID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DeptID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`),
  ADD KEY `DP` (`DeptID`),
  ADD KEY `COM` (`CompanyID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocID`),
  ADD KEY `AREA` (`AreaID`);

--
-- Indexes for table `oc`
--
ALTER TABLE `oc`
  ADD PRIMARY KEY (`TrackingNum`),
  ADD KEY `CT` (`OCCategory`),
  ADD KEY `CM` (`CompanyID`),
  ADD KEY `LOC` (`LocID`),
  ADD KEY `AR` (`AreaID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `COMPANY` (`CompanyID`),
  ADD KEY `DEPT` (`DeptID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DeptID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actionplan`
--
ALTER TABLE `actionplan`
  ADD CONSTRAINT `CO` FOREIGN KEY (`CompanyID`) REFERENCES `oc` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TN` FOREIGN KEY (`TrackingNum`) REFERENCES `oc` (`TrackingNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `US` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `COMPA` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `CMP` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `COM` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DP` FOREIGN KEY (`DeptID`) REFERENCES `department` (`DeptID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `AREA` FOREIGN KEY (`AreaID`) REFERENCES `area` (`AreaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `oc`
--
ALTER TABLE `oc`
  ADD CONSTRAINT `AR` FOREIGN KEY (`AreaID`) REFERENCES `location` (`AreaID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CM` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CT` FOREIGN KEY (`OCCategory`) REFERENCES `category` (`OCCategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LOC` FOREIGN KEY (`LocID`) REFERENCES `location` (`LocID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `COMPANY` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DEPT` FOREIGN KEY (`DeptID`) REFERENCES `department` (`DeptID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
