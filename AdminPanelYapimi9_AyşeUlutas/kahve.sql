-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 08:58 AM
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
-- Database: `kahve`
--

-- --------------------------------------------------------

--
-- Table structure for table `anasayfa`
--

CREATE TABLE `anasayfa` (
  `yazi_id` int(11) NOT NULL,
  `yazi_baslik` text NOT NULL,
  `yazi_icerik` text NOT NULL,
  `yazi_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anasayfa`
--

INSERT INTO `anasayfa` (`yazi_id`, `yazi_baslik`, `yazi_icerik`, `yazi_img`) VALUES
(1, 'Kahve Nedir?', 'Kahve, coffea isimli ağacın meyvelerinden  çeşitli işlemler sonucu  çekirdeklerinin ayrılması ve bölgeden bölgeye farklılık gösteren demleme şekilleriyle hazırlanmasıyla elde edilen içecek türüdür. Bu meyvelerin çekirdekleri çeşitli işlemlerden sonra suda demlenerek tüketilir. Her ülkenin kültürel damak alışkanlıklarına göre ortaya çıkardığı kendine özgü içecekleri olsa da, kahve bunlardan farklı olarak yeryüzündeki çoğu insanın hayatına girmeyi başarmıştır. Her toplum kendine göre anlamlar yüklemiştir kahveye; kendine göre kavurmuş, demlemiş ve sunmuştur. Ortaya çıktığı günden bu yana sayısız insanın geçim kaynağı olmuştur ve yetiştiği bölgenin ekonomisine yön vermiştir. Günümüzde ise değerini artırarak insanların beğenisini kazanmaya ve dünyanın her köşesine durmaksınız ulaşmaya devam ediyor. Bu yüzden de dünya üzerinde petrolden sonra en çok ticareti yapılan madde olma özelliğini hala koruyor.\r\n        ', 'uploads/2394924712banner.jpg');

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
(32, 'uploads/galeri (1).jpg'),
(33, 'uploads/galeri (2).jpg'),
(34, 'uploads/galeri (3).jpg'),
(35, 'uploads/galeri (4).jpg'),
(36, 'uploads/galeri (5).jpg'),
(37, 'uploads/galeri (6).jpg');

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
(1, 'test1998 yılında \"En yeni iletişim ve bilgisayar teknolojilerini kullanarak müşterilerine dünya standartlarında çözümler sunmak\" ilkesiyle yola çıkan isimtescil.net, geçen 16 yıllık süreçte Dünya ve Türkiye’ye, en büyük domain ve hosting firmalarından biri olmayı başarmıştır.\r\n\r\n2008 yılında alan adları standartlarını belirleyen ve denetleyen tek otorite ICANN\'e akredite olan isimtescil.net, 2010 yılından beri Türkiye\'nin en büyük 500 bilişim şirketi arasında yer almakta ve kurulduğu günden buyana 1 milyonun üzerinde domain kaydı ve 200 bininin üzerinde barındırma hizmetne ev sahipliği yapmıştır.\r\n\r\n', 'uploads/2292020258hakkimizda.jpg');

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
-- Table structure for table `kahveler`
--

CREATE TABLE `kahveler` (
  `kahve_id` int(11) NOT NULL,
  `kahve_adi` text NOT NULL,
  `kahve_img` text NOT NULL,
  `kahve_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kahveler`
--

INSERT INTO `kahveler` (`kahve_id`, `kahve_adi`, `kahve_img`, `kahve_kategori`) VALUES
(1, 'Kahve Adı 1', 'uploads/kahve (1).png', '1'),
(2, 'Kahve Adı 1', 'uploads/kahve (2).png', '1'),
(3, 'Kahve Adı 1', 'uploads/kahve (3).png', '1'),
(4, 'Kahve Adı 1', 'uploads/kahve (4).png', '1'),
(5, 'Kahve Adı 1', 'uploads/kahve (5).png', '1'),
(6, 'Kahve Adı 1', 'uploads/kahve (6).png', '1'),
(7, 'Kahve Adı 1', 'uploads/kahve (7).png', '2'),
(8, 'Kahve Adı 1', 'uploads/kahve (8).png', '2'),
(9, 'Kahve Adı 1', 'uploads/kahve (9).png', '2'),
(10, 'Kahve Adı 1', 'uploads/kahve (10).png', '2'),
(11, 'Kahve Adı 1', 'uploads/kahve (11).png', '2'),
(12, 'Kahve Adı 1', 'uploads/kahve (12).png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`) VALUES
(1, 'Soğuk Kahveler'),
(2, 'Sıcak Kahveler');

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_eposta` text NOT NULL,
  `kul_adi` text NOT NULL,
  `kul_sifre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_eposta`, `kul_adi`, `kul_sifre`) VALUES
(1, 'deneme@gmail.com', 'ibrahim demir', '123'),
(2, 'deneme22444@gmail.com', 'ibrahim123', '123'),
(3, 'deneme22@gmail.com', 'ibrahim123', '123'),
(4, 'deneme22@gmail.com', 'ibrahim123', '123'),
(5, 'deneme34@gmail.com', 'ibrahim2', '123'),
(6, 'deneme444@gmail.com', '123ibo', '123');

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
(1, 'uploads/2658823206logo.png', 'uploads/2168927347logo.png', 'Bulut Kahvecisi', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.096445415461!2d28.98946661568506!3d41.066884423764726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6fdcb64fda5%3A0x88def8117dd4a8b8!2sMecidiyek%C3%B6y!5e0!3m2!1str!2str!4v1517898741672\" width=\"100%\" height=\"200\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '#fb', '#ig', '© Copyright 2021 Tüm Hakları Saklıdır.');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`yazi_id`);

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
-- Indexes for table `kahveler`
--
ALTER TABLE `kahveler`
  ADD PRIMARY KEY (`kahve_id`);

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `yazi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kahveler`
--
ALTER TABLE `kahveler`
  MODIFY `kahve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
