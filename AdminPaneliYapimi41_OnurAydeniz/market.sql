-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Eyl 2021, 10:01:13
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `market`
--
CREATE DATABASE IF NOT EXISTS `market` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `market`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `id` int(11) NOT NULL,
  `foto` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustIcerik` varchar(6000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `link` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `altBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `altIcerik` varchar(6000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `foto`, `ustBaslik`, `ustIcerik`, `link`, `altBaslik`, `altIcerik`) VALUES
(1, 'kahvalti.jpg', 'Kahvaltının Önemi', '<p>Her kültür, her ülke sabahları farklı kahvaltı seçeneklerine uyanıyor. Şeker ve yağın bir numaraları tüketim alternatiflerini oluşturduğu, portakal suyu ve tatlı mısır gevrekleri gibi opsiyonların kahvaltıda kötü seçimler olduğundan, sabah ilk olarak ne yenmesi gerektiğini anlamak kafa karıştırıcı olabilir...</p>', 'https://www.sencard.com.tr/sen-programi/sen/saglik', 'Merhaba!', '<p>Güne başlamak için mağazamıza girdiğinizde, size güler yüzlü hizmet, sıcak bir atmosfer ve her şeyden önce en kaliteli malzemelerle yapılmış mükemmel ürünler sunmaya kendimizi adadık. Memnun değilseniz, lütfen bize bildirin, işleri düzeltmek için elimizden geleni yapacağız!</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `foto` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `foto`, `ustBaslik`, `baslik`, `icerik`) VALUES
(1, 'kahvalti_hakkimizda.jpg', '50 yılı aşkın tecrübe', 'Hikayemiz', '<p>1984&nbsp; yılından günümüze&nbsp; başta Şirinevler halk pazarı olmak üzere perakende satışa başlamıştır &nbsp;ve sonrasında Şirinevler, Bahçelievler, Bakırköy’deki, seçkin ürün yelpazesiyle, eşsiz yöresel lezzetleriyle, butik şarküteri hizmetini değerli müşterilerine sunmaya devam etmektedir.</p><p>50 yılı aşkın kahvaltılık ürün tecrübesiyle ve zengin, kaliteli, yöresel&nbsp;çeşit anlayışıyla artık cafe,&nbsp; restaurant ve otellerin açık büfe kahvaltıların tedarik&nbsp;adresi olarak da hizmete başlamış bulunmaktadır ve&nbsp;ayrıca online alışveriş sitesiyle de tüm Türkiye\'ye hizmet etmektedir.</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `email`, `mesaj`, `tarih`) VALUES
(24, 'aaa', 'aaa', 'aaa', '2019-03-18 08:45:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kadi` char(50) NOT NULL,
  `parola` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kadi`, `parola`) VALUES
(1, 'admin', '105a9a2d46f64e147097c986076d2164');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `magaza`
--

CREATE TABLE `magaza` (
  `id` int(11) NOT NULL,
  `ustBaslik` char(50) NOT NULL DEFAULT '0',
  `anaBaslik` varchar(500) NOT NULL DEFAULT '0',
  `adres` char(250) NOT NULL DEFAULT '0',
  `telefon` char(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `magaza`
--

INSERT INTO `magaza` (`id`, `ustBaslik`, `anaBaslik`, `adres`, `telefon`) VALUES
(1, 'Yayla Kahvaltı Dünyası', 'Çalışma Saatleri', '<p><i>Ferit Selim Paşa Caddesi No:7&nbsp;</i><br><i>Bahçelievler, İstanbul&nbsp;</i></p>', '0(538) 021-6997');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `magazasaat`
--

CREATE TABLE `magazasaat` (
  `id` int(11) NOT NULL,
  `gun` char(50) NOT NULL,
  `saat` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `magazasaat`
--

INSERT INTO `magazasaat` (`id`, `gun`, `saat`) VALUES
(1, 'Pazartesi', '08:00 - 22:00'),
(2, 'Salı', '08:00 - 22:00'),
(3, 'Çarşamba', '08:00 - 22:00'),
(4, 'Perşembe', '08:00 - 22:00'),
(5, 'Cuma', '08:00 - 22:00'),
(6, 'Cumartesi', '07:30 - 23:00'),
(7, 'Pazar', '07:30 - 22:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `foto` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `sira` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `foto`, `baslik`, `ustBaslik`, `icerik`, `aktif`, `sira`) VALUES
(3, 'zeytin.jpg', 'Zeytinin Önemi', 'Zeytin', '<p>Zeytin ağacının yaprağı ve meyvesi kullanılmaktadır. Zeytin ağacının yaprağı çok eski yıllardan beri tedavilerde kullanılmaktadır. Özellikle sıtmanın tedavi edilmesinde etkin rol üstlenmektedir. Zeytin yaprağı çay olarak tüketilebilmektedir. Yüksek tansiyonun düşürülmesine yardımcı olmaktadır...</p>', 1, 1),

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `magaza`
--
ALTER TABLE `magaza`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `magazasaat`
--
ALTER TABLE `magazasaat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `magaza`
--
ALTER TABLE `magaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `magazasaat`
--
ALTER TABLE `magazasaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
