-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 01:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resistor_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `krepselis`
--

CREATE TABLE `krepselis` (
  `krepselio_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prekes_id` int(11) NOT NULL,
  `kiekis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ohm_categories`
--

CREATE TABLE `ohm_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `ohm_range_from` int(11) NOT NULL,
  `ohm_range_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ohm_categories`
--

INSERT INTO `ohm_categories` (`id`, `category_name`, `ohm_range_from`, `ohm_range_to`) VALUES
(1, '0-99', 0, 99),
(2, '100-999', 100, 999),
(3, '1000-9999', 1000, 9999),
(4, '10000-99999', 10000, 99999),
(5, '100000-999999', 100000, 999999),
(6, '1000000-9999999', 1000000, 9999999),
(7, '10000000-99999999', 10000000, 99999999);

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `pavadinimas` varchar(200) NOT NULL,
  `kaina` float NOT NULL,
  `aprasymas` varchar(500) NOT NULL,
  `varza` double(100,2) NOT NULL,
  `kiekis` int(11) NOT NULL,
  `nuotrauka` varchar(100) NOT NULL,
  `ziedai` int(11) NOT NULL,
  `ohm_id` int(11) NOT NULL,
  `resistor_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `category_id`, `pavadinimas`, `kaina`, `aprasymas`, `varza`, `kiekis`, `nuotrauka`, `ziedai`, `ohm_id`, `resistor_type`) VALUES
(1, 4, 'REZISTORIUS 0.22 Om  0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\nTemperatūrinis koeficientas : 200 ppm/°C\r\nRezistoriaus išvadai : Ø0.6 x 28mm\r\n', 0.20, 5, '../../media/img1.jpg', 4, 1, 'Metalizuotas'),
(2, 4, 'REZISTORIUS 0.47R 1W ø4x10mm 5%', 0.2, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 0.47, 100, '../../media/img2.jpg', 0, 1, 'Anglies pluošto'),
(3, 4, 'REZISTORIUS MOR 0.68R 1W ø4x10mm 5%', 0.2, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 0.68, 100, '../../media/img3.jpg', 4, 1, 'Anglies pluošto'),
(4, 4, 'REZISTORIUS 1.2R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1.20, 100, '../../media/img4.jpg', 4, 1, 'Metalizuotas'),
(5, 4, 'REZISTORIUS 1.1R 0.25W 5%, 0207, ø2.5x6.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 1.10, 100, '../../media/img5.jpg', 5, 1, 'Anglies pluošto'),
(6, 4, 'REZISTORIUS 1.5R 0.25W, 5%, 0207,ø2.5x6.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 1.50, 100, '../../media/img6.jpg', 6, 1, 'Metalo oksido'),
(7, 4, 'REZISTORIUS MOR 1.8R 2W Ø5x12mm 5%', 0.1, '2 W galios metalo oksido rezistorius.\r\n        Padengtas aukštos kokybės apsauginiu sluoksniu.\r\n        Atsparus išoriniam poveikiui.\r\n        Korpusas pagamintas iš itin grynos keramikos.\r\n        Maksimali perkrovos įtampa: 700 V Išvadų matmenys: Ø0,7x35 mm\r\n        ', 1.80, 100, '../../media/img7.jpg', 4, 1, 'Metalizuotas'),
(8, 4, 'REZISTORIUS 1.3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1.30, 100, '../../media/img8.jpg', 5, 1, 'Anglies pluošto'),
(9, 4, 'REZISTORIUS 2.2R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 2.20, 100, '../../media/img9.jpg', 4, 1, 'Anglies pluošto'),
(10, 4, 'REZISTORIUS 2.7R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 2.70, 100, '../../media/img10.jpg', 4, 1, 'Metalo oksido'),
(11, 4, 'REZISTORIUS 3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 3.00, 100, '../../media/img11.jpg', 4, 1, 'Metalo oksido'),
(12, 4, 'REZISTORIUS 3.3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 3.30, 100, '../../media/img12.jpg', 4, 1, 'Metalizuotas'),
(13, 4, 'REZISTORIUS 3.6R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 3.60, 100, '../../media/img13.jpg', 4, 1, 'Metalo oksido'),
(14, 4, 'REZISTORIUS MOR 3.9R 2W Ø5x12mm 5%', 0.1, '2 W galios metalo oksido rezistorius.\r\n        Padengtas aukštos kokybės apsauginiu sluoksniu.\r\n        Atsparus išoriniam poveikiui.\r\n        Korpusas pagamintas iš itin grynos keramikos.\r\n        Maksimali perkrovos įtampa: 700 V Išvadų matmenys: Ø0,7x35 mm\r\n        ', 3.90, 100, '../../media/img14.jpg', 4, 1, 'Metalizuotas'),
(15, 4, 'REZISTORIUS 4.3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 4.30, 100, '../../media/img15.jpg', 4, 1, 'Metalo oksido'),
(16, 4, 'REZISTORIUS 4.7R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 4.70, 100, '../../media/img1.jpg', 4, 1, 'Anglies pluošto'),
(17, 4, 'REZISTORIUS 5.1R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 5.10, 100, '../../media/img2.jpg', 4, 1, 'Metalo oksido'),
(18, 4, 'REZISTORIUS 5.6R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 5.60, 100, '../../media/img3.jpg', 4, 1, 'Metalizuotas'),
(19, 4, 'REZISTORIUS 6.2R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 6.20, 100, '../../media/img4.jpg', 4, 1, 'Metalizuotas'),
(20, 4, 'REZISTORIUS 6.8R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 6.80, 100, '../../media/img5.jpg', 4, 1, 'Metalo oksido'),
(21, 4, 'REZISTORIUS 7.5R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 7.50, 100, '../../media/img6.jpg', 4, 1, 'Anglies pluošto'),
(22, 4, 'REZISTORIUS MOR 8.2R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 8.20, 100, '../../media/img7.jpg', 4, 1, 'Anglies pluošto'),
(23, 4, 'REZISTORIUS 9.1R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 9.10, 100, '../../media/img8.jpg', 4, 1, 'Anglies pluošto'),
(24, 4, 'REZISTORIUS 16R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 16.00, 100, '../../media/img9.jpg', 4, 1, 'Anglies pluošto'),
(25, 4, 'REZISTORIUS 18R 0.25W 5%, 0207, ø2.5x6.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 18.00, 100, '../../media/img10.jpg', 4, 1, 'Metalo oksido'),
(26, 4, 'REZISTORIUS 20R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 20.00, 100, '../../media/img11.jpg', 4, 1, 'Anglies pluošto'),
(27, 4, 'REZISTORIUS 22R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 22.00, 100, '../../media/img12.jpg', 4, 1, 'Anglies pluošto'),
(28, 4, 'REZISTORIUS MFR 24R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 24.00, 100, '../../media/img13.jpg', 4, 1, 'Metalo oksido'),
(29, 4, 'REZISTORIUS 30R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 30.00, 100, '../../media/img14.jpg', 4, 1, 'Metalizuotas'),
(30, 4, 'REZISTORIUS 43R 0.25W 5%, 0207, ø2.5x6.5mm', 0.05, 'Dydis - 2.5x7mm.\r\n        Minimalus pardavimo kiekis - 10vnt\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Rezistoriaus išvadų matmenys: ø0,45 x 28 mm\r\n        ', 43.00, 100, '../../media/img15.jpg', 4, 1, 'Metalo oksido'),
(31, 4, 'REZISTORIUS MOR 56R 2W Ø5x12mm 5%', 0.1, 'Metalo-oksido 2W rezistorius.\r\n        Padengtas aukštos kokybės apsauginiu sluoksniu.\r\n        Atsparus išorės poveikiui.\r\n        Korpusas pagamintas iš ypač švarios keramikos.\r\n        Išvadai : 0.7 x 35 mm\r\n        ', 56.00, 100, '../../media/img1.jpg', 4, 1, 'Metalizuotas'),
(32, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 62.00, 100, '../../media/img2.jpg', 4, 1, 'Anglies pluošto'),
(33, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 82.00, 100, '../../media/img3.jpg', 4, 1, 'Metalo oksido'),
(34, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100.00, 100, '../../media/img4.jpg', 4, 2, 'Anglies pluošto'),
(35, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 120.00, 100, '../../media/img5.jpg', 4, 2, 'Metalizuotas'),
(36, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 180.00, 100, '../../media/img6.jpg', 4, 2, 'Metalizuotas'),
(37, 4, 'REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 240.00, 100, '../../media/img7.jpg', 4, 2, 'Metalizuotas'),
(38, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 360.00, 100, '../../media/img8.jpg', 4, 2, 'Metalo oksido'),
(39, 4, 'REZISTORIUS 0.22 Om  0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\nTemperatūrinis koeficientas : 200 ppm/°C\r\nRezistoriaus išvadai : Ø0.6 x 28mm\r\n', 0.20, 100, '../../media/img9.jpg', 4, 1, 'Metalo oksido'),
(40, 4, 'REZISTORIUS 0.47R 1W ø4x10mm 5%', 0.2, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 0.47, 100, '../../media/img10.jpg', 4, 1, 'Metalo oksido'),
(41, 4, 'REZISTORIUS MOR 0.68R 1W ø4x10mm 5%', 0.2, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 0.68, 100, '../../media/img11.jpg', 4, 1, 'Metalizuotas'),
(42, 4, 'REZISTORIUS 1.2R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1.20, 100, '../../media/img12.jpg', 4, 1, 'Anglies pluošto'),
(43, 4, 'REZISTORIUS 1.1R 0.25W 5%, 0207, ø2.5x6.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 1.10, 100, '../../media/img13.jpg', 4, 1, 'Anglies pluošto'),
(44, 4, 'REZISTORIUS 1.5R 0.25W, 5%, 0207,ø2.5x6.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 1.50, 100, '../../media/img14.jpg', 4, 1, 'Metalizuotas'),
(45, 4, 'REZISTORIUS MOR 1.8R 2W Ø5x12mm 5%', 0.1, '2 W galios metalo oksido rezistorius.\r\n        Padengtas aukštos kokybės apsauginiu sluoksniu.\r\n        Atsparus išoriniam poveikiui.\r\n        Korpusas pagamintas iš itin grynos keramikos.\r\n        Maksimali perkrovos įtampa: 700 V Išvadų matmenys: Ø0,7x35 mm\r\n        ', 1.80, 100, '../../media/img15.jpg', 4, 1, 'Anglies pluošto'),
(46, 4, 'REZISTORIUS 1.3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1.30, 100, '../../media/img1.jpg', 4, 1, 'Metalo oksido'),
(47, 4, 'REZISTORIUS 2.2R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 2.20, 100, '../../media/img2.jpg', 4, 1, 'Metalizuotas'),
(48, 4, 'REZISTORIUS 2.7R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 2.70, 100, '../../media/img3.jpg', 4, 1, 'Anglies pluošto'),
(49, 4, 'REZISTORIUS 3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 3.00, 100, '../../media/img4.jpg', 4, 1, 'Metalizuotas'),
(50, 4, 'REZISTORIUS 3.3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 3.30, 100, '../../media/img5.jpg', 4, 1, 'Metalo oksido'),
(51, 4, 'REZISTORIUS 3.6R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 3.60, 100, '../../media/img6.jpg', 4, 1, 'Metalizuotas'),
(52, 4, 'REZISTORIUS MOR 3.9R 2W Ø5x12mm 5%', 0.1, '2 W galios metalo oksido rezistorius.\r\n        Padengtas aukštos kokybės apsauginiu sluoksniu.\r\n        Atsparus išoriniam poveikiui.\r\n        Korpusas pagamintas iš itin grynos keramikos.\r\n        Maksimali perkrovos įtampa: 700 V Išvadų matmenys: Ø0,7x35 mm\r\n        ', 3.90, 100, '../../media/img7.jpg', 4, 1, 'Metalo oksido'),
(53, 4, 'REZISTORIUS 4.3R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 4.30, 100, '../../media/img8.jpg', 4, 1, 'Metalizuotas'),
(54, 4, 'REZISTORIUS 4.7R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 4.70, 100, '../../media/img9.jpg', 4, 1, 'Anglies pluošto'),
(55, 4, 'REZISTORIUS 5.1R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 5.10, 100, '../../media/img10.jpg', 4, 1, 'Metalizuotas'),
(56, 4, 'REZISTORIUS 5.6R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 5.60, 100, '../../media/img11.jpg', 4, 1, 'Metalo oksido'),
(57, 4, 'REZISTORIUS 6.2R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 6.20, 100, '../../media/img12.jpg', 4, 1, 'Anglies pluošto'),
(58, 4, 'REZISTORIUS 6.8R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 6.80, 100, '../../media/img13.jpg', 4, 1, 'Metalo oksido'),
(59, 4, 'REZISTORIUS 7.5R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 7.50, 100, '../../media/img14.jpg', 4, 1, 'Metalo oksido'),
(60, 4, 'REZISTORIUS MOR 8.2R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 8.20, 100, '../../media/img15.jpg', 4, 1, 'Metalizuotas'),
(61, 4, 'REZISTORIUS 9.1R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 9.10, 100, '../../media/img1.jpg', 4, 1, 'Metalizuotas'),
(62, 4, 'REZISTORIUS 16R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 16.00, 100, '../../media/img2.jpg', 4, 1, 'Metalo oksido'),
(63, 4, 'REZISTORIUS 18R 0.25W 5%, 0207, ø2.5x6.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 18.00, 100, '../../media/img3.jpg', 4, 1, 'Anglies pluošto'),
(64, 4, 'REZISTORIUS 20R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0,45 x 28 mm\r\n        ', 20.00, 100, '../../media/img4.jpg', 4, 1, 'Metalizuotas'),
(65, 4, 'REZISTORIUS 22R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 22.00, 100, '../../media/img5.jpg', 4, 1, 'Metalo oksido'),
(66, 4, 'REZISTORIUS MFR 24R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 24.00, 100, '../../media/img6.jpg', 4, 1, 'Anglies pluošto'),
(67, 4, 'REZISTORIUS 30R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 30.00, 100, '../../media/img7.jpg', 4, 1, 'Metalo oksido'),
(68, 4, 'REZISTORIUS 43R 0.25W 5%, 0207, ø2.5x6.5mm', 0.05, 'Dydis - 2.5x7mm.\r\n        Minimalus pardavimo kiekis - 10vnt\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Rezistoriaus išvadų matmenys: ø0,45 x 28 mm\r\n        ', 43.00, 100, '../../media/img8.jpg', 4, 1, 'Metalizuotas'),
(69, 4, 'REZISTORIUS MOR 56R 2W Ø5x12mm 5%', 0.1, 'Metalo-oksido 2W rezistorius.\r\n        Padengtas aukštos kokybės apsauginiu sluoksniu.\r\n        Atsparus išorės poveikiui.\r\n        Korpusas pagamintas iš ypač švarios keramikos.\r\n        Išvadai : 0.7 x 35 mm\r\n        ', 56.00, 100, '../../media/img9.jpg', 4, 1, 'Metalo oksido'),
(70, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 62.00, 100, '../../media/img10.jpg', 4, 1, 'Metalizuotas'),
(71, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 82.00, 100, '../../media/img11.jpg', 4, 1, 'Metalo oksido'),
(72, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100.00, 100, '../../media/img12.jpg', 4, 2, 'Metalizuotas'),
(73, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 120.00, 100, '../../media/img13.jpg', 4, 2, 'Metalizuotas'),
(74, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 180.00, 100, '../../media/img14.jpg', 4, 2, 'Metalo oksido'),
(75, 4, 'REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 240.00, 100, '../../media/img15.jpg', 4, 2, 'Metalo oksido'),
(76, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 360.00, 100, '../../media/img1.jpg', 4, 2, 'Anglies pluošto'),
(77, 4, 'Rezistorius 10vnt. pak', 1.99, 'Svoris	0.000179 kg. Prekinis ženklas	TCO', 50000000.00, 100, '../../media/img2.jpg', 4, 7, 'Anglies pluošto'),
(78, 4, 'REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 0.3, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 800 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img3.jpg', 4, 2, 'Metalo oksido'),
(79, 4, 'REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 0.1, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 900 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1001.00, 100, '../../media/img4.jpg', 4, 3, 'Metalizuotas'),
(80, 4, 'REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 0.2, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 1000 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100001.00, 100, '../../media/img5.jpg', 4, 5, 'Anglies pluošto'),
(81, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img6.jpg', 4, 6, 'Metalo oksido'),
(82, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img7.jpg', 4, 6, 'Metalo oksido'),
(83, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img8.jpg', 4, 7, 'Anglies pluošto'),
(84, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000000.00, 100, '../../media/img9.jpg', 4, 0, 'Anglies pluošto'),
(85, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img10.jpg', 4, 7, 'Metalo oksido'),
(86, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 82.00, 100, '../../media/img11.jpg', 4, 1, 'Metalizuotas'),
(87, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100.00, 100, '../../media/img12.jpg', 4, 2, 'Metalo oksido'),
(88, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 120.00, 100, '../../media/img13.jpg', 4, 2, 'Anglies pluošto'),
(89, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 180.00, 100, '../../media/img14.jpg', 4, 2, 'Metalo oksido'),
(90, 4, 'REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 240.00, 100, '../../media/img15.jpg', 4, 2, 'Metalo oksido'),
(91, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img1.jpg', 4, 2, 'Metalo oksido'),
(92, 4, 'Rezistorius 10vnt. pak', 0.99, 'Svoris	0.000179 kg. Prekinis ženklas	ATE', 420.00, 100, '../../media/img2.jpg', 4, 2, 'Metalizuotas'),
(93, 4, 'REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 0.3, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 800 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img3.jpg', 4, 2, 'Metalizuotas'),
(94, 4, 'REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 0.1, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 900 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1001.00, 100, '../../media/img4.jpg', 4, 3, 'Metalo oksido'),
(95, 4, 'REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 0.2, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 1000 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100001.00, 100, '../../media/img5.jpg', 4, 5, 'Metalo oksido'),
(96, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img6.jpg', 4, 6, 'Metalo oksido'),
(97, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img7.jpg', 4, 6, 'Metalizuotas'),
(98, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img8.jpg', 4, 7, 'Anglies pluošto'),
(99, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000000.00, 100, '../../media/img9.jpg', 4, 0, 'Anglies pluošto'),
(100, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img10.jpg', 4, 7, 'Metalo oksido'),
(101, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 82.00, 100, '../../media/img11.jpg', 4, 1, 'Metalo oksido'),
(102, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100.00, 100, '../../media/img12.jpg', 4, 2, 'Anglies pluošto'),
(103, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 120.00, 100, '../../media/img13.jpg', 4, 2, 'Metalizuotas'),
(104, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 180.00, 100, '../../media/img14.jpg', 4, 2, 'Metalo oksido'),
(105, 4, 'REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 240.00, 100, '../../media/img15.jpg', 4, 2, 'Metalizuotas'),
(106, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img1.jpg', 4, 2, 'Anglies pluošto'),
(107, 4, 'REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 0.3, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 800 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img2.jpg', 4, 2, 'Metalizuotas'),
(108, 4, 'REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 0.1, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 900 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1001.00, 100, '../../media/img3.jpg', 4, 3, 'Anglies pluošto'),
(109, 4, 'REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 0.2, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 1000 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100001.00, 100, '../../media/img4.jpg', 4, 5, 'Anglies pluošto'),
(110, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img5.jpg', 4, 6, 'Anglies pluošto'),
(111, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img6.jpg', 4, 6, 'Anglies pluošto'),
(112, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img7.jpg', 4, 7, 'Metalizuotas'),
(113, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 998985.00, 100, '../../media/img8.jpg', 4, 5, 'Anglies pluošto'),
(114, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 999999999.00, 100, '../../media/img9.jpg', 4, 7, 'Metalizuotas'),
(115, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 64.00, 100, '../../media/img10.jpg', 4, 1, 'Metalizuotas'),
(116, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 150000.00, 100, '../../media/img11.jpg', 4, 5, 'Anglies pluošto'),
(117, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 180000.00, 100, '../../media/img12.jpg', 4, 5, 'Anglies pluošto'),
(118, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 2000000.00, 100, '../../media/img13.jpg', 4, 6, 'Metalo oksido'),
(119, 4, 'REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 5000000.00, 100, '../../media/img14.jpg', 4, 6, 'Anglies pluošto'),
(120, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 700000000.00, 100, '../../media/img15.jpg', 4, 7, 'Anglies pluošto'),
(121, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.79, 'Svoris	0.000159 kg. Prekinis ženklas	ARCOL', 85.00, 100, '../../media/img1.jpg', 4, 1, 'Metalo oksido'),
(122, 4, 'REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 0.3, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 800 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img2.jpg', 4, 2, 'Metalizuotas'),
(123, 4, 'REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 0.1, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 900 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1001.00, 100, '../../media/img3.jpg', 4, 3, 'Anglies pluošto'),
(124, 4, 'REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 0.2, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 1000 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100001.00, 100, '../../media/img4.jpg', 4, 5, 'Metalo oksido'),
(125, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img5.jpg', 4, 6, 'Anglies pluošto'),
(126, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img6.jpg', 4, 6, 'Metalo oksido'),
(127, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img7.jpg', 4, 7, 'Metalizuotas'),
(128, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000000.00, 100, '../../media/img8.jpg', 4, 0, 'Metalo oksido'),
(129, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img9.jpg', 4, 7, 'Anglies pluošto'),
(130, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 82.00, 100, '../../media/img10.jpg', 4, 1, 'Metalo oksido'),
(131, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100.00, 100, '../../media/img11.jpg', 4, 2, 'Metalizuotas'),
(132, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 120.00, 100, '../../media/img12.jpg', 4, 2, 'Metalo oksido'),
(133, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 180.00, 100, '../../media/img13.jpg', 4, 2, 'Metalo oksido'),
(134, 4, 'REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 240.00, 100, '../../media/img14.jpg', 4, 2, 'Metalizuotas'),
(135, 4, 'REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img15.jpg', 4, 2, 'Metalo oksido'),
(136, 4, 'REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 0.3, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 800 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 780.00, 100, '../../media/img1.jpg', 4, 2, 'Metalo oksido'),
(137, 4, 'REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 0.1, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 900 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 1001.00, 100, '../../media/img2.jpg', 4, 3, 'Metalo oksido'),
(138, 4, 'REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 0.2, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 1000 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 100001.00, 100, '../../media/img3.jpg', 4, 5, 'Metalo oksido'),
(139, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img4.jpg', 4, 6, 'Metalo oksido'),
(140, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 1000000.00, 100, '../../media/img5.jpg', 4, 6, 'Metalo oksido'),
(141, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 100000000.00, 100, '../../media/img6.jpg', 4, 7, 'Metalizuotas'),
(142, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 998985.00, 100, '../../media/img7.jpg', 4, 5, 'Metalizuotas'),
(143, 4, 'REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 0.1, 'Metalo plėvelinis 0.6W galios rezistorius\r\n        Temperatūrinis koeficientas : 50 ppm/°C\r\n        Korpuso matmenys : Ø2.5x6.8mm\r\n        Išvadai : Ø0.6 x 28mm\r\n        ', 999999999.00, 100, '../../media/img8.jpg', 4, 7, 'Anglies pluošto'),
(144, 4, 'REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 0.03, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 400 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 64.00, 100, '../../media/img9.jpg', 4, 1, 'Metalo oksido'),
(145, 4, 'REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 150000.00, 100, '../../media/img10.jpg', 4, 5, 'Anglies pluošto'),
(146, 4, 'REZISTORIUS MOR 120R 1W ø4x10mm 5%', 0.08, 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.\r\n        Maksimali perkrovos įtampa: 700 V\r\n        Rezistoriaus išvadai: 0,7 x 28 mm\r\n        ', 180000.00, 100, '../../media/img11.jpg', 4, 5, 'Metalo oksido'),
(147, 4, 'REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 0.05, 'Rezistoriaus tipas: anglies plėvelinis\r\n        Maksimali perkrovos įtampa: 500 V\r\n        Išvadų matmenys: ø0.45 x 28 mm\r\n        ', 2000000.00, 100, '../../media/img12.jpg', 4, 6, 'Metalizuotas');


-- --------------------------------------------------------


--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
    `id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image_path`) VALUES
(1, 'Varistoriai', '../../media/varistoriai.jpg'),
(2, 'Didelės galios juostiniai rezistoriai', '../../media/djuostiniai.jpg'),
(3, 'SMD metalo juostiniai rezistoriai', '../../media/Smd-rezistoriai.jpg'),
(4, 'Anglies juostiniai rezistoriai', '../../media/anglies-juostiniai.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `user_id` int(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `vardas` varchar(11) NOT NULL,
  `pavarde` varchar(20) NOT NULL,
  `miestas` varchar(20) NOT NULL,
  `adresas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ziedu_kiekis`
--

CREATE TABLE `ziedu_kiekis` (
  `id` int(11) NOT NULL,
  `kategorija` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ziedu_kiekis`
--

INSERT INTO `ziedu_kiekis` (`id`, `kategorija`) VALUES
(1, '4 ziedai'),
(2, '5 ziedai'),
(3, '6 ziedai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krepselis`
--
ALTER TABLE `krepselis`
  ADD PRIMARY KEY (`krepselio_id`);

--
-- Indexes for table `ohm_categories`
--
ALTER TABLE `ohm_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ziedu_kiekis`
--
ALTER TABLE `ziedu_kiekis`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
