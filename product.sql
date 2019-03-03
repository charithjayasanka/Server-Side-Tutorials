-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 05:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
use tutorials;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charith`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'LENOVO Ideapad 330S-14IKB', 'one.small.jpg', 'one.big.jpg', 'LENOVO Ideapad 330S-14IKB 14\" Intel® Core™ i3 Laptop - 256 GB SSD, Blue', 'Technical specifications for LENOVO Ideapad 330S-14IKB 14\" Intel® Core™ i3 Laptop - 256 GB SSD, Blue\r\nOVERVIEW\r\nType	Laptop\r\nOperating system	Windows 10 (64-bit)\r\nPERFORMANCE\r\nProcessor	- Intel® Core™ i3-8130U Processor\r\n- Dual-core\r\n- 2.2 GHz / 3.4 GHz\r\n- 4 MB cache\r\nRAM	8 GB DDR4 (2133 MHz)\r\nStorage	256 GB SSD\r\nSCREEN\r\nTouchscreen	No\r\nScreen size	14\"\r\nScreen type	IPS LCD\r\nResolution	Full HD 1920 x 1080p\r\nCONNECTIVITY\r\nWiFi	- AC WiFi\r\n- 1x1\r\nEthernet	No\r\nBluetooth	Bluetooth 4.1\r\nUSB	- USB Type-C x 1\r\n- USB 3.0 x 2\r\nVideo connections	HDMI x 1\r\nAudio connections	3.5 mm jack\r\nSOUND\r\nAudio software	Dolby Audio Premium\r\nSpeakers	Dual speakers\r\nMEDIA\r\nDisc drive	No\r\nMemory card reader	4-in-1\r\nFEATURES\r\nCamera	720p webcam\r\nMouse / trackpad	Multi-touch trackpad\r\nKeyboard	Membrane keyboard\r\nOther features	Microphone\r\nPOWER\r\nBattery type	2-cell Lithium-polymer\r\nBattery life	Up to 6 hours\r\nGENERAL\r\nColour	Midnight blue\r\nBox contents	- Lenovo IdeaPad 330S-14IKB 14\" Intel® Core™ i3 Laptop\r\n- Charger\r\n- Quick start guide\r\nDimensions	18.9 x 323.1 x 234.8 mm (H x W x D)\r\nWeight	1.67 kg\r\nManufacturer’s guarantee	1 year\r\nSoftware	* Full version of Microsoft Office not included\r\n* Full version of anti-virus / internet security not included\r\n\r\n- McAfee LiveSafe (30 day trial)\r\n- Office 365 (30 day trial)\r\n- Lenovo App Explorer\r\n- Lenovo Vantage\r\n- Lenovo ID\r\n- Lenovo Settings', '429.00', 100),
(2, 'HP 14\" AMD Ryzen 3 Laptop', 'two.small.jpg', 'two.big.jpg', 'HP 14\" AMD Ryzen 3 Laptop - 128 GB SSD, Black', 'Technical specifications for HP 14\" AMD Ryzen 3 Laptop - 128 GB SSD, Black\r\nOVERVIEW\r\nType	Laptop\r\nOperating system	Windows 10 (64-bit)\r\nPERFORMANCE\r\nProcessor	- AMD Ryzen 3 2200U Processor\r\n- Dual-core\r\n- 2.5 GHz / 3.4 GHz\r\n- 1 MB cache\r\nRAM	4 GB DDR4 (2400 MHz)\r\nStorage	128 GB SSD\r\nSCREEN\r\nTouchscreen	No\r\nScreen size	14\"\r\nScreen type	SVA\r\nResolution	HD Ready 1366 x 768p\r\nScreen features	WLED backlighting\r\nCONNECTIVITY\r\nWiFi	- Dual-band AC WiFi\r\n- 1x1\r\nEthernet	Gigabit Ethernet port\r\nBluetooth	Bluetooth 4.2\r\nUSB	- USB 3.1 x 2\r\n- USB 2.0 x 1\r\nVideo connections	HDMI 1.4 x 1\r\nAudio connections	3.5 mm jack\r\nOther connections	Miracast\r\nSOUND\r\nSpeakers	Yes\r\nMEDIA\r\nDisc drive	No\r\nMemory card reader	SD\r\nFEATURES\r\nCamera	HP TrueVision HD webcam\r\nMouse / trackpad	Multi-touch trackpad with gesture control\r\nKeyboard	Membrane keyboard\r\nSecurity features	Kensington security lock slot\r\nPOWER\r\nBattery type	3-cell Lithium-ion\r\nBattery life	10.5 hours\r\nGENERAL\r\nColour	Smoke Grey\r\nBox contents	- HP 14-cm0503sa 14\" AMD Ryzen 3 Laptop\r\n- Documentation\r\n- Cables\r\n- Power adapter\r\nDimensions	19.9 x 234 x 335 mm (H x W x D)\r\nWeight	1.47 kg\r\nManufacturer’s guarantee	1 year\r\nSoftware	* Full version of Microsoft Office not included\r\n* Full version of anti-virus / internet security not included\r\n\r\n- McAfee LiveSafe (trial version)\r\n- Netflix (subscription required)\r\n- Audio Switch\r\n- CoolSense\r\n- JumpStart\r\n- Office 365 (30 day trial)', '329.00', 120),
(3, 'ACER TC-885.021', 'three.small.jpg', 'three.big.jpg', 'ACER TC-885.021 Intel® Core™ i7+ Desktop PC - 1 TB HDD, Black', 'Technical specifications for ACER TC-885.021 Intel® Core™ i7+ Desktop PC - 1 TB HDD, Black\r\nOVERVIEW\r\nType	Desktop PC\r\nOperating system	Windows 10 (64-bit)\r\nPERFORMANCE\r\nProcessor	- Intel® Core™ i7+ 8700 Processor\r\n- Hexa-core\r\n- 3.2 GHz / 4.6 GHz\r\n- 12 MB cache\r\nRAM	- 4 GB DDR4 (2666 MHz)\r\n- 32 GB maximum installable RAM\r\nStorage	1 TB HDD (7200 rpm)\r\nIntel Optane	16 GB\r\nCONNECTIVITY\r\nWiFi	- Intel® dual-band AC WiFi\r\n- 1x1\r\n- Up to 433 Mbps\r\nEthernet	Gigabit Ethernet port\r\nBluetooth	Bluetooth 5.0\r\nUSB	- USB Type-C x 1\r\n- USB 3.1 x 3\r\n- USB 2.0 x 4\r\nVideo connections	- HDMI x 2\r\n- VGA x 1\r\nAudio connections	3.5 mm jack x 5\r\nSOUND\r\nAudio software	Integrated high definition sound\r\nMEDIA\r\nDisc drive	DVD\r\nMemory card reader	SD\r\nExpansion card slot	- PCIe 2.0 (x1) x 1\r\n- PCIe 3.0 (x16) x 1\r\n- M.2 (for SSD) x 1\r\n- M.2 (for WLAN) x 1\r\nFEATURES\r\nMouse / trackpad	Wireless mouse\r\nKeyboard	Wireless membrane keyboard with numeric keypad\r\nPOWER\r\nPSU	300 W\r\nGENERAL\r\nColour	Black\r\nBox contents	- Acer TC-885.021 Intel® Core™ i7+ Desktop PC\r\n- Antenna\r\n- Mouse\r\n- Keyboard\r\nDimensions	350 x 163 x 340 mm (H x W x D)\r\nManufacturer’s guarantee	1 year\r\nSoftware	* Full version of Microsoft Office not included\r\n* Full version of anti-virus / internet security not included\r\n\r\n- Office 365 (30 day trial)', '549.00', 200),
(4, 'APPLE MacBook Pro 15\" with Tou', 'four.small.jpg', 'four.big.jpg', 'APPLE MacBook Pro 15\" with Touch Bar - 512 GB SSD, Space Grey (2018)', 'Technical specifications for APPLE MacBook Pro 15\" with Touch Bar - 512 GB SSD, Space Grey (2018)\r\nOVERVIEW\r\nType	MacBook Pro\r\nOperating system	macOS High Sierra\r\nPERFORMANCE\r\nProcessor	- Intel® Core™ i7 Processor\r\n- Hexa-core\r\n- 2.6 GHz / 4.3 GHz\r\nRAM	16 GB DDR4 (2400 MHz)\r\nGraphics card	- AMD Radeon Pro 560X\r\n- 4 GB DDR5\r\nStorage	512 GB SSD\r\nSCREEN\r\nTouchscreen	No\r\nScreen size	15\"\r\nScreen type	Retina display\r\nResolution	2560 x 1600\r\nScreen features	- LED backlighting\r\n- IPS technology\r\n- 227 pixels per inch\r\n- 500 nits brightness\r\n- Wide colour (P3)\r\n- True tone technology\r\nCONNECTIVITY\r\nWiFi	AC WiFi\r\nEthernet	No\r\nBluetooth	Bluetooth 5.0\r\nVideo connections	Thunderbolt 3 x 4\r\nAudio connections	3.5 mm jack\r\nSOUND\r\nAudio software	High dynamic range\r\nSpeakers	Yes\r\nMEDIA\r\nDisc drive	No\r\nMemory card reader	No\r\nFEATURES\r\nCamera	720p FaceTime HD camera\r\nMouse / trackpad	Force Touch trackpad\r\nKeyboard	Full-size backlit keyboard\r\nOther features	- Ambient light sensor\r\n- Touch Bar with integrated Touch ID sensor\r\n- Microphone x 3\r\nPOWER\r\nBattery type	Lithium-polymer\r\nBattery life	- In use: Up to 10 hours\r\n- Standby: Up to 30 days\r\nGENERAL\r\nColour	Space grey\r\nBox contents	- Apple MacBook Pro 15\" with Touch Bar\r\n- USB Type-C Power Adapter - 61 W\r\n- USB Type-C Charge Cable - 2 m\r\nDimensions	14.9 x 304.1 x 212.4 mm (H x W x D)\r\nWeight	1.37 kg\r\nManufacturer’s guarantee	1 year\r\nSoftware	Built in apps:\r\n- Photos\r\n- iMovie\r\n- GarageBand\r\n- Pages\r\n- Numbers\r\n- Keynote\r\n- Siri\r\n- Safari\r\n- Mail\r\n- FaceTime\r\n- Messages\r\n- Maps\r\n- Notes\r\n- Calendar\r\n- Contacts\r\n- Reminders\r\n- Photo Booth\r\n- Preview\r\n- iTunes\r\n- iBooks\r\n- App Store\r\n- Time Machine', '2.00', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
