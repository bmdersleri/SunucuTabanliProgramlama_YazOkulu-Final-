-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Eyl 2021, 16:54:12
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kisisel_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `k_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `k_adi`, `sifre`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `text` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `baslik`, `text`, `resim`, `tarih`) VALUES
(11, 'PHP MySQL Apache ve phpMyAdmin Kurulumları #1', 'Ders İçeriği : Bu videoda php mysql apache ve php myadmin kurulumları detaylı bir şekilde gösterilmiştir.\r\n\r\nYoutube Kanalımız: BMDersleri\r\nBağlantı: https://www.youtube.com/channel/UCIdY...\r\nKısa Bağlantı: https://bit.ly/32k9MnJ\r\nGithub Adresimiz: https://github.com/bmdersleri', 'img/blog/2176827163001.png', '2021-09-06 17:53:34'),
(12, 'php.ini ayarları #2', 'Açıklama: php.ini ayarları\r\n\r\nYoutube Kanalımız: BMDersleri\r\nhttps://www.youtube.com/channel/UCIdY...\r\nKısa Bağlantı: https://bit.ly/32k9MnJ\r\nGithub Adresimiz: https://github.com/bmdersleri', 'img/blog/2680126470002.png', '2021-09-06 17:55:14'),
(13, 'PHP\'de HTML Form Hazırlama #11', 'Ders içeriği : Bu videoda PHP’de Html Form Yapımı, Form Elemanları Kullanımı, Form Elemanları Örnekleri, Get ve Post Komutu Uygulamaları anlatılmıştır.\r\n\r\nAnahtar Kelimeler: #phpformhazırlama #htmlformahazırlama #getkomutu #postkomutu #formörnekleri\r\n\r\n\r\n\r\nYoutube Kanalımız: BMDersleri\r\nhttps://www.youtube.com/channel/UCIdY...\r\nKısa Bağlantı: https://bit.ly/32k9MnJ\r\n​​​​Github Adresimiz: https://github.com/bmdersleri', 'img/blog/2798926399003.png', '2021-09-06 17:59:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `img`) VALUES
(29, 'img/galeri/2351024857001.png'),
(30, 'img/galeri/2635824783002.png'),
(31, 'img/galeri/2316021696003.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `ad` text NOT NULL,
  `email` text NOT NULL,
  `konu` text NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesaj_id`, `ad`, `email`, `konu`, `mesaj`, `tarih`) VALUES
(9, 'Deneme Ad Soyad', 'deneme@testmail.com', 'Denem Mesajı', 'Kişsel Blog sayfanız hakkında bilgilendirme istiyorum.', '2021-09-07 14:14:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayar`
--

CREATE TABLE `site_ayar` (
  `id` int(11) NOT NULL,
  `favicon` text COLLATE utf8_turkish_ci NOT NULL,
  `logo` text COLLATE utf8_turkish_ci NOT NULL,
  `logo_dark` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `google_maps` text COLLATE utf8_turkish_ci NOT NULL,
  `fb` text COLLATE utf8_turkish_ci NOT NULL,
  `ig` text COLLATE utf8_turkish_ci NOT NULL,
  `copy` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_ayar`
--

INSERT INTO `site_ayar` (`id`, `favicon`, `logo`, `logo_dark`, `title`, `google_maps`, `fb`, `ig`, `copy`) VALUES
(1, 'img/2966527179favicon.png', 'img/2148429132Kisisel-Blog-1024x410.jpg', 'img/3189325961Kisisel-Blog-1024x410.jpg', 'Kişisel Blog', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.069929355651!2d30.34489411559101!3d37.694556724543226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c42e010ebf9131%3A0xf1d277424034f1e7!2sMehmet%20Akif%20Ersoy%20%C3%9Cniversitesi%20M%C3%BChendislik-mimarl%C4%B1k%20Fak%C3%BCltesi!5e0!3m2!1str!2str!4v1630949891621!5m2!1str!2str\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '#fb', '#ig', '© Copyright 2021 Tüm Hakları Saklıdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE `yazar` (
  `yazar_id` int(11) NOT NULL,
  `yazar_img` text NOT NULL,
  `yazar_adi` text NOT NULL,
  `yazar_hakkinda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`yazar_id`, `yazar_img`, `yazar_adi`, `yazar_hakkinda`) VALUES
(1, 'img/2424429910Maku-logo.jpg', 'Ben Kenan ÜLKER', '2003 yılında başladığım Ortaca Lisesi eğitiminden sonra 2011 yılında Mustafa Kemal Üniversitesi inşaat mühendisliği bölümünden mezun oldum. 2017 yılında Mehmet Akif Ersoy Üniversitesi Bilgisayar Mühendisliği bölümünü kazandım. ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `site_ayar`
--
ALTER TABLE `site_ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazar`
--
ALTER TABLE `yazar`
  ADD PRIMARY KEY (`yazar_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `site_ayar`
--
ALTER TABLE `site_ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yazar`
--
ALTER TABLE `yazar`
  MODIFY `yazar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
