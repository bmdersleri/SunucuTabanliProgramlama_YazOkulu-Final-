-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 02:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehber`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `text` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `baslik`, `text`, `resim`, `tarih`) VALUES
(1, 'İzmirde Gezilecek Yerler', 'aaaaaThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some injected or words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.\r\n\r\n', 'resimler/izmir (1).jpg', '2021-04-15 17:50:02'),
(2, 'İzmir Tarihi Yerleri', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some injected or words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.\r\n\r\n', 'resimler/izmir (1).jpg', '2021-04-19 17:50:02'),
(3, 'İzmir Hakkında', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some injected or words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.\r\n\r\n', 'resimler/izmir (1).jpg', '2021-04-04 17:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `img`) VALUES
(40, 'resimler/izmir (1).jpg'),
(41, 'resimler/izmir (2).jpg'),
(42, 'resimler/izmir (3).jpg'),
(43, 'resimler/izmir (4).jpg'),
(44, 'resimler/izmir (5).jpg'),
(45, 'resimler/izmir (6).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `hakkimizda` text NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `hakkimizda`, `resim`) VALUES
(1, 'hakkımızda', 'resimler/2337323073hakkimizda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `ad_soyad` text NOT NULL,
  `email` text NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `ad_soyad`, `email`, `mesaj`) VALUES
(7, 'ibrahim demir', 'deneme@gmail.com', 'test'),
(11, 'ibrahim demir', 'deneme@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `site_ayar`
--

CREATE TABLE `site_ayar` (
  `id` int(11) NOT NULL,
  `favicon` text COLLATE utf8_turkish_ci NOT NULL,
  `logo` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `google_maps` text COLLATE utf8_turkish_ci NOT NULL,
  `fb` text COLLATE utf8_turkish_ci NOT NULL,
  `ig` text COLLATE utf8_turkish_ci NOT NULL,
  `copy` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `site_ayar`
--

INSERT INTO `site_ayar` (`id`, `favicon`, `logo`, `title`, `google_maps`, `fb`, `ig`, `copy`) VALUES
(1, 'resimler/2059930890logo.png', 'resimler/2734924418logo.png', 'İzmir Rehber ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.096445415461!2d28.98946661568506!3d41.066884423764726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6fdcb64fda5%3A0x88def8117dd4a8b8!2sMecidiyek%C3%B6y!5e0!3m2!1str!2str!4v1517898741672\" width=\"100%\" height=\"200\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '#fb123', '#ig123', '© Copyright 2021 Tüm Hakları Saklıdır. ');

-- --------------------------------------------------------

--
-- Table structure for table `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_email` text NOT NULL,
  `sifre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yoneticiler`
--

INSERT INTO `yoneticiler` (`yonetici_id`, `yonetici_email`, `sifre`) VALUES
(1, 'yonetici', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ziyaretci_defteri`
--

CREATE TABLE `ziyaretci_defteri` (
  `ziyaret_id` int(11) NOT NULL,
  `ziyaret_yorum` text NOT NULL,
  `ziyaret_adi` text NOT NULL,
  `ziyaret_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ziyaretci_defteri`
--

INSERT INTO `ziyaretci_defteri` (`ziyaret_id`, `ziyaret_yorum`, `ziyaret_adi`, `ziyaret_tarih`) VALUES
(4, 'test', 'test', '2021-09-07 11:35:00'),
(5, 'deneme', 'deneme', '2021-09-07 11:35:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Indexes for table `site_ayar`
--
ALTER TABLE `site_ayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Indexes for table `ziyaretci_defteri`
--
ALTER TABLE `ziyaretci_defteri`
  ADD PRIMARY KEY (`ziyaret_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `site_ayar`
--
ALTER TABLE `site_ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ziyaretci_defteri`
--
ALTER TABLE `ziyaretci_defteri`
  MODIFY `ziyaret_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
