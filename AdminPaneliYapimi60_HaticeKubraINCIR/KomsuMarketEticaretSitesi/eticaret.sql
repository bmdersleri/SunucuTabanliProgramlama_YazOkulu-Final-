-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Eyl 2021, 20:42:12
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int(11) NOT NULL,
  `abone_email` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abone`
--

INSERT INTO `abone` (`abone_id`, `abone_email`) VALUES
(1, 'denemeabone@mail');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `anahtarkelime` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesai` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `baslik`, `aciklama`, `anahtarkelime`, `telefon`, `email`, `adres`, `facebook`, `instagram`, `youtube`, `twitter`, `logo`, `mesai`) VALUES
(1, 'Komşu Market ', 'Komşu Market e-Ticaret', 'Komşu Market', '(XXX)-XXX-XX-XX', 'nfmnwfkw@fhkafjlw', 'XXX  Mahallesi XXX Caddesi XXX Sokak No:XX   Türkiye', 'facebook ', 'instagram ', 'youtube ', 'twitter ', '367991771244926400logo1.png', '7/24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cokluresim`
--

CREATE TABLE `cokluresim` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cokluresim`
--

INSERT INTO `cokluresim` (`id`, `resim`, `urun_id`) VALUES
(11, '423801572505922077çarliston.jpg', 5),
(12, '4081632261862123814domat.jpg', 1),
(15, '348121868520356517beypazarı.PNG', 21),
(16, '51311366476012591695kızılay.PNG', 22),
(17, '14971760238117809525limonata.PNG', 23),
(18, '6077392143906435790ıcetea.PNG', 24),
(19, '49004199356114056537erikli.PNG', 25),
(20, '46229416338113680927ayran.PNG', 26),
(21, '4802063265434131723sut.PNG', 29),
(22, '83220711038113817950icimsut.PNG', 30),
(23, '9545261497733452948tahsildarpey.PNG', 31),
(24, '663993278952773818suzmepe.PNG', 32),
(25, '61967170496513774957krema.PNG', 33),
(26, '46754843872118403198burgu.PNG', 34),
(27, '157358114275718087tahsildardil.PNG', 35),
(28, '9690146738844321265meyvesuyu.PNG', 28),
(29, '4999583082410314898kola.PNG', 27),
(30, '97372997905913567810tozseker.PNG', 40),
(31, '2114324886319959042kupseker.PNG', 39),
(32, '858586386618415229salca.PNG', 38),
(33, '53170339117819137443un.PNG', 37),
(34, '77741556118818351433tuz.PNG', 36),
(35, '652670607269723880yag.PNG', 41),
(36, '703293953816054696pirinç.PNG', 12),
(37, '673916487855602039fazulye.PNG', 42),
(38, '71092545914911574394kırmızımer.PNG', 43),
(39, '52804173353915568mısır.PNG', 44),
(40, '727577110315653753buğday.PNG', 45),
(41, '513181764967127960bulgur.PNG', 46),
(42, '2198237851403182214siyahpir.PNG', 47),
(43, '12958369379710491809muz.PNG', 48),
(44, '61182898568416253160uzum.PNG', 49),
(45, '43219538275113640397sefta.PNG', 50),
(46, '1381644421912371992armut.PNG', 51),
(47, '1924687634996696479elma.PNG', 52),
(48, '176940379888907190portakal.PNG', 53),
(49, '79376679160315843300nar.PNG', 54),
(50, '38992445508414939468siyahuzum.PNG', 55),
(51, '6478333456146607912kavun.PNG', 56),
(52, '213714410585391708erik.PNG', 57),
(53, '74217995332673033siyahzeytin.jpg', 3),
(54, '3668521543344415085tulumpeynir.jpg', 4),
(55, '466448211714373103labne.PNG', 14),
(56, '62307873600417906798pekmez.PNG', 15),
(57, '14182878273812272790tahin.PNG', 16),
(58, '2211905463668652956visnerecel.PNG', 17),
(59, '9391067874541021057cilekreceli.PNG', 18),
(60, '7982925371305708079kayısıreceli.PNG', 19),
(61, '67459057918135851incirreceli.PNG', 20),
(62, '9065154280637568582sogan.PNG', 13),
(63, '866827854111202376kabak.jpg', 6),
(64, '2530987289513969927salata.jpg', 2),
(65, '866428281472043787koybiberi.PNG', 62),
(66, '91138554324918463493ıspanak.PNG', 61),
(67, '4510645286611507760fasulye.PNG', 60),
(68, '7617073292613252128dolmabiber.PNG', 59),
(69, '3511698558235819835patates.PNG', 58),
(70, '783611490064268808kırmızıbiber.jpg', 7),
(71, '705344114891285568kakao.PNG', 63),
(72, '333321335612242363kabartmatozu.PNG', 64),
(73, '3931202288881843123vanilya.PNG', 65),
(74, '443679393606219332puding.PNG', 66),
(75, '5129306543019726625irmik.PNG', 67),
(76, '77994523502511004992karbonat.PNG', 68),
(77, '1490056408372597079cekirdek.PNG', 69),
(78, '94997070041019826116lays.PNG', 70),
(79, '28181773296619259134torku.PNG', 71),
(80, '720861359527146663679katlı.PNG', 72),
(81, '5806363947093560121gong.PNG', 73),
(82, '5342655586310052571burcak.PNG', 74),
(83, '62431846835717668723dove.PNG', 75),
(84, '2460159327017583177kulaktemiz.PNG', 76),
(85, '3675828090977448803pamuk.png', 77),
(86, '8456407719916298967dismacun.PNG', 78),
(87, '50136162789819047500selinkolonya.PNG', 79),
(88, '5436734947946432169sabun.PNG', 80),
(89, '63131377645418139856solo.PNG', 82),
(90, '74034462936810987034maske.PNG', 83),
(91, '40835592869714798708çoptorba.PNG', 84),
(92, '2353859760741931002bulaşıksabunu.PNG', 85),
(93, '3410248359398849885yumoş.PNG', 86),
(94, '14963412096614637265perwoll.PNG', 87);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_detay`, `hakkimizda_resim`, `hakkimizda_misyon`, `hakkimizda_vizyon`) VALUES
(1, 'Komsu Market ', '<p>Komşu Market en iyi kalitede &uuml;r&uuml;nleri, en bol &ccedil;eşit ve en uygun fiyatlarla g&uuml;ler y&uuml;zl&uuml; hizmet anlayışı &ccedil;er&ccedil;evesinde m&uuml;şterilerine sunmaktadır. Komşu Market, gelişen perakende sekt&ouml;r&uuml; standartlarını g&ouml;z &ouml;n&uuml;nde bulundurarak s&uuml;rekli yenilik&ccedil;ilik felsefesini ilke edinmiştir ve sekt&ouml;r standartlarını geliştiren uygulamaları ile m&uuml;şterilerine farklı alışveriş deneyimleri sunmaktadır.</p>\r\n', '5777199420281752543logo.png', 'Perakende sektörünün öncüsü Komşu Market,  coğrafi bölgedeki tüm illere hizmet sunan mağazacılık anlayışı ile keyifli alışverişin, yenilikçiliğin ve kalitenin adresidir.', 'Komşu Market Ticaret A.Ş. 16-08-2021 itibariyle kurulmuş olup müşterilerine en iyi hizmeti vermeyi amaçlamaktadır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`, `kategori_sira`, `kategori_durum`) VALUES
(1, 'İçecek', 1, 1),
(2, 'Süt ve Ürünleri', 2, 1),
(3, 'Temel Gıda ', 3, 1),
(4, 'Bakliyat', 4, 1),
(5, 'Meyve', 5, 1),
(6, 'Atıştırmalık', 8, 1),
(7, 'Fırın/Pastane', 9, 1),
(10, 'Kahvaltılık', 6, 1),
(11, 'Sebze', 7, 1),
(12, 'Kişisel Bakım', 10, 1),
(13, 'Temizlik', 11, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_adi`, `kullanici_sifre`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_tel`, `kullanici_resim`, `kullanici_mail`) VALUES
(1, '2021-08-31 12:09:32', 'komsumarket', 'e10adc3949ba59abbe56e057f20f883e', 'komsumarket', 2, 'Türkiye', 'İstanbul', 'Üsküdar', '011 111 11 11', '', 'komsumarket@k'),
(3, '2021-08-31 12:10:52', 'yetkilikullanici', 'e10adc3949ba59abbe56e057f20f883e', 'yetkilikullanici', 2, 'Türkiye', 'İstanbul', 'Kadıköy', '022 222 22 22', '', 'yetkilikullanici@sad'),
(9, '2021-08-31 12:10:39', 'deneme', 'e10adc3949ba59abbe56e057f20f883e', 'deneme', 1, 'Türkiye', 'Ankara', 'Tunalı', '055 555 55 55 ', '6735098250914785340personel2.jpg', 'deneme@sad'),
(10, '2021-08-31 12:10:34', 'Ayşe', 'fcea920f7412b5da7be0cf42b8c93759', 'Ayse', 1, 'Türkiye', 'Ankara', 'Bahçelievler', '022 222 22 22', '', 'ayse@sad'),
(11, '2021-08-31 12:10:16', 'denemeyeni7', 'fcea920f7412b5da7be0cf42b8c93759', 'denemeyeni7', 1, 'Türkiye', 'İstanbul', 'Tarabya', '033 333 33 33 ', '', 'denemeyeni7@sad'),
(12, '2021-09-02 16:52:27', 'deneme3', 'fcea920f7412b5da7be0cf42b8c93759', 'deneme3', 1, 'Türkiye', 'istanbul', 'Beşiktaş', '022 222 22 22', '', 'deneme3@sad'),
(13, '2021-09-07 17:29:15', 'Fitnat', '25d55ad283aa400af464c76d713c07ad', 'Fİtnat', 1, '', '', '', '', '', 'fitnat@xn--oadka-m4a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `toplam_fiyat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `odeme_turu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_onay` int(6) NOT NULL,
  `siparis_not` text COLLATE utf8_turkish_ci NOT NULL,
  `siparis_yeniadet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `kullanici_id`, `urun_id`, `siparis_zaman`, `urun_adet`, `urun_fiyat`, `toplam_fiyat`, `odeme_turu`, `siparis_onay`, `siparis_not`, `siparis_yeniadet`) VALUES
(1, 12, 5, '2021-09-01 18:41:24', 3, '10.00', '35.4', '1', 0, '', 0),
(2, 12, 5, '2021-09-01 18:41:34', 3, '10.00', '106.2', '1', 0, '', 0),
(3, 12, 4, '2021-09-01 21:39:32', 2, '30.00', '106.2', '1', 1, '', 0),
(4, 12, 5, '2021-09-01 21:39:15', 3, '10.00', '141.6', '1', 1, '', 0),
(5, 12, 4, '2021-09-01 21:39:05', 3, '30.00', '141.6', '1', 1, '', 0),
(6, 12, 5, '2021-09-01 21:41:08', 3, '10.00', '', '1', 0, '', 0),
(7, 12, 4, '2021-09-02 21:55:23', 1, '30.00', '', '1', 0, '', 0),
(8, 12, 6, '2021-09-02 21:54:41', 1, '8.00', '47.2', '1', 0, 'yeni adet ', 1),
(9, 12, 7, '2021-09-02 21:57:29', 4, '10.00', '82.6', '1', 0, 'güncelleme ', 4),
(10, 0, 24, '2021-09-05 09:44:43', 3, '6.00', '21.24', '1', 1, '', 0),
(11, 12, 23, '2021-09-05 09:46:20', 3, '6.00', '42.48', '1', 0, '', 0),
(12, 12, 24, '2021-09-05 09:46:20', 3, '6.00', '42.48', '1', 0, '', 0),
(13, 13, 37, '2021-09-07 17:57:55', 3, '15.00', '76.7', '1', 0, '', 0),
(14, 13, 38, '2021-09-07 17:57:55', 2, '10.00', '76.7', '1', 0, '', 0),
(15, 13, 37, '2021-09-07 17:58:44', 3, '15.00', '76.7', '1', 0, '', 0),
(16, 13, 38, '2021-09-07 17:58:45', 2, '10.00', '76.7', '1', 0, '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_button` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` int(11) NOT NULL,
  `slider_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_link`, `slider_button`, `slider_resim`, `slider_sira`, `slider_durum`, `slider_banner`) VALUES
(5, 'Bakliyat ', 'Bakliyat Ürünleri', 'Bakliyat ', 'Bakliyat ', '597793993688757977bakli.jpg', 2, 1, 1),
(7, 'Manav', 'Manav Ürünleri', 'Manav', 'Manav', '11182799407412745229manav.jpg', 3, 1, 1),
(8, 'Sebze', 'Sebze Ürünleri', 'Sebze', 'Sebze', '23154127152217841622sebze.jpg', 4, 1, 1),
(9, 'Süt ', 'Süt Ürünleri', 'Süt', 'Süt', '7636494634361334234süt.jpg', 5, 1, 0),
(10, 'Temizlik', 'Temizlik Ürünleri', 'Temizlik', 'Temizlik', '27353752134511762098temizlik.jpg', 1, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_sira` int(11) NOT NULL,
  `urun_model` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_renk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` float(10,2) NOT NULL,
  `onecikan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_durum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_etiket` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `kategori_id`, `urun_resim`, `urun_baslik`, `urun_aciklama`, `urun_sira`, `urun_model`, `urun_renk`, `urun_adet`, `urun_fiyat`, `onecikan`, `urun_durum`, `urun_zaman`, `urun_etiket`) VALUES
(1, 11, '6413449258915866325domat.jpg', 'Domates', '<p>Domates 1Kg.</p>\r\n', 1, 'Domates', 'Kırmızı', 1000, 3.00, '1', '1', '2021-09-05 15:12:03', 'Domates'),
(2, 11, '7180907191428144564salata.jpg', 'Salatalık', '<p>Salatalık</p>\r\n', 2, 'Salatalık', 'Yeşil', 1000, 5.00, '1', '1', '2021-09-05 06:36:59', 'Salatalık'),
(3, 10, '6388662140017756276siyahzeytin.jpg', 'Siyah zeytin', '<p>Siyah zeytin</p>\r\n', 3, 'Siyah zeytin', 'siyah', 1000, 25.00, '1', '1', '2021-08-28 19:25:16', 'Siyah zeytin'),
(4, 10, '44152260316018247945tulumpeynir.jpg', 'Tulum peynir', '<p>Tulum peynir</p>\r\n', 4, 'Tulum peynir', 'beyaz', 4000, 30.00, '1', '1', '2021-08-28 19:25:51', 'Tulum peynir'),
(5, 11, '96423266975216118883çarliston.jpg', 'Çarliston Biber', '<p>&Ccedil;arliston Biber 1Kg.</p>\r\n', 5, 'Çarliston biber', 'Yeşil', 5000, 10.00, '1', '1', '2021-09-05 15:11:44', 'Çarliston biber'),
(6, 11, '523688662448479038kabak.jpg', 'Kabak  ', '<p>Kabak&nbsp; 1Kg.</p>\r\n', 6, 'Kabak', 'Yeşil', 10000, 8.00, '1', '1', '2021-09-05 15:12:37', 'Kabak  '),
(7, 11, '2083584844475466744kırmızıbiber.jpg', 'Kırmızı Biber', '<p>Kırmızı Biber 1Kg.</p>\r\n', 7, 'Kırmızı Biber', 'Kırmızı', 4000, 10.00, '1', '1', '2021-09-05 15:11:11', 'Kırmızı Biber'),
(12, 4, '6687024560216429490pirinç.PNG', 'Baldo Pirinç', '<p>Baldo Pirin&ccedil; 2Kg.</p>\r\n\r\n<p>Marka:Yayla</p>\r\n', 1, 'Baldo Pirinç', 'Beyaz', 200, 33.00, '1', '1', '2021-09-05 14:19:27', 'Baldo Pirinç'),
(13, 11, '3053276509014998445sogan.PNG', 'Soğan', '<p>Soğan 1Kg.</p>\r\n', 4, 'Soğan', 'Kahverengi', 5000, 10.00, '1', '1', '2021-09-05 15:09:21', 'Soğan'),
(14, 10, '20273152450810886785labne.PNG', 'Labne Peynir', '<p>Labne Peynir</p>\r\n\r\n<p>Marka: Pinar</p>\r\n', 5, 'Labne Peynir', 'Beyaz', 1000, 10.00, '1', '1', '2021-09-05 06:34:41', 'Labne Peynir'),
(15, 10, '7687594816544734871pekmez.PNG', 'Üzüm Pekmezi', '<p>&Uuml;z&uuml;m Pekmezi 1300gr.</p>\r\n\r\n<p>Marka: Seyidoğlu</p>\r\n', 1, 'Üzüm Pekmezi', 'Siyah', 1000, 25.00, '1', '1', '2021-09-05 06:40:07', 'Üzüm Pekmezi'),
(16, 10, '44315172047017594697tahin.PNG', 'Tahin', '<p>Tahin 1000gr</p>\r\n\r\n<p>Marka: Seyidoğlu&nbsp;</p>\r\n', 2, 'Tahin', 'Krem', 1000, 30.00, '1', '1', '2021-09-05 06:42:45', 'Tahin'),
(17, 10, '181821118501539507visnerecel.PNG', 'Vişne Reçeli', '<p>Vişne Re&ccedil;eli 380gt</p>\r\n\r\n<p>Marka: Tat</p>\r\n', 6, 'Vişne Reçeli', 'Kırmızı', 1000, 10.00, '1', '1', '2021-09-05 06:46:51', 'Vişne Reçeli'),
(18, 10, '6925031526171411100cilekreceli.PNG', 'Çilek Reçeli', '<p>&Ccedil;ilek Re&ccedil;eli 380gr</p>\r\n\r\n<p>Marka: Tat</p>\r\n', 7, 'Çilek Reçeli', 'Kırmızı', 1000, 10.00, '1', '1', '2021-09-05 06:50:04', 'Çilek Reçeli'),
(19, 10, '7342084402067312938kayısıreceli.PNG', 'Kayısı Reçeli', '<p>Kayısı Re&ccedil;eli 380gr</p>\r\n\r\n<p>Marka:Tat</p>\r\n', 8, 'Kayısı Reçeli', 'Turuncu', 1000, 10.00, '1', '1', '2021-09-05 06:52:17', 'Kayısı Reçeli'),
(20, 10, '71195281069761448incirreceli.PNG', 'İncir Reçeli', '<p>İncir Re&ccedil;eli 380gr.</p>\r\n\r\n<p>Marka:Tat</p>\r\n', 9, 'İncir Reçeli', '.', 1000, 10.00, '1', '1', '2021-09-05 06:53:51', 'İncir Reçeli'),
(21, 1, '507771456673639792beypazarı.PNG', 'Beypazarı Maden Suyu', '<p>Maden Suyu 6x200ml.</p>\r\n\r\n<p>Marka:&nbsp;Beypazarı</p>\r\n', 1, 'Maden Suyu', '.', 1000, 6.00, '1', '1', '2021-09-05 09:32:31', 'Maden Suyu'),
(22, 1, '72070395081414974494kızılay.PNG', 'Kızılay Maden Suyu', '<p>Maden Suyu 6x200ml</p>\r\n\r\n<p>Marka: Kıızılay</p>\r\n', 2, 'Maden Suyu', '.', 1000, 8.00, '1', '1', '2021-09-05 09:34:38', 'Maden Suyu'),
(23, 1, '9037825283022025286limonata.PNG', 'Uludağ Limonata Şekersiz', '<p>Limonata Şekersiz 1L</p>\r\n\r\n<p>Marka: Uludağ</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, 'Limonata Şekersiz', 'Sarı', 1000, 6.00, '1', '1', '2021-09-05 09:36:53', 'Limonata Şekersiz'),
(24, 1, '6446351482979177273ıcetea.PNG', 'Lipton İceTea Şeftali', '<p>İceTea Şeftali 1,5L</p>\r\n\r\n<p>Marka: Lipton</p>\r\n', 4, 'İceTea Şeftali', 'Kırmızı', 1000, 6.00, '1', '1', '2021-09-05 09:38:51', 'İceTea Şeftali'),
(25, 1, '41284531823315672057erikli.PNG', 'Erikli Su ', '<p>Su 5L</p>\r\n\r\n<p>Marka: Erikli</p>\r\n', 5, 'Su ', '.', 1000, 6.00, '1', '1', '2021-09-05 09:40:29', 'Su '),
(26, 1, '3310331175909775189ayran.PNG', 'Sütaş Ayran', '<p>&nbsp;Ayran 1L.</p>\r\n\r\n<p>Marka: S&uuml;taş</p>\r\n', 6, 'Ayran', 'Beyaz', 1000, 6.00, '1', '1', '2021-09-05 09:43:14', 'Ayran'),
(27, 1, '13873419444518617864kola.PNG', 'Gazlı İçecek', '<p>Gazlı İ&ccedil;ecek 2,5L.</p>\r\n\r\n<p>Marka: Coca Cola</p>\r\n', 7, 'Gazlı İçecek', 'Siyah', 1000, 10.00, '1', '1', '2021-09-05 13:41:25', 'Gazlı İçecek'),
(28, 1, '171110509606853674meyvesuyu.PNG', 'Meyve Suyu', '<p>Meyve Suyu&nbsp;%100 Karışık, 1L</p>\r\n\r\n<p>Marka: Dimes</p>\r\n', 8, 'Meyve Suyu', 'Turuncu', 1000, 7.00, '1', '1', '2021-09-05 13:43:08', 'Meyve Suyu'),
(29, 2, '27430086197410587650sut.PNG', 'Süt', '<p>S&uuml;t 1L</p>\r\n\r\n<p>Marka: Pınar</p>\r\n', 1, 'Süt', 'Beyaz', 1000, 8.00, '1', '1', '2021-09-05 13:45:29', 'Süt'),
(30, 2, '86002221210513800847icimsut.PNG', 'Laktozsuz Süt', '<p>Laktozsuz Sut 1L</p>\r\n\r\n<p>Marka: İ&ccedil;im</p>\r\n', 2, 'Laktozsuz Süt', 'Beyaz', 1000, 7.00, '1', '1', '2021-09-05 13:47:27', 'Laktozsuz Süt'),
(31, 2, '6578462118328642755tahsildarpey.PNG', 'Ezine Klasik İnek Peyniri', '<p>Ezine Klasik İnek Peyniri 600gr</p>\r\n\r\n<p>Marka: Tahsildaroğlu</p>\r\n', 3, 'Ezine Klasik İnek Peyniri', 'Beyaz', 1000, 40.00, '1', '1', '2021-09-05 13:49:44', 'Ezine Klasik İnek Peyniri'),
(32, 2, '72896344159444553suzmepe.PNG', 'Süzme Peynir', '<p>S&uuml;zme Peynir 450gr</p>\r\n\r\n<p>Marka: Torku</p>\r\n', 4, 'Süzme Peynir', 'Beyaz', 1000, 16.00, '1', '1', '2021-09-05 13:51:14', 'Süzme Peynir'),
(33, 2, '36761268534511601839krema.PNG', 'Krema', '<p>Krema %35 yağlı 200Ml.</p>\r\n\r\n<p>Marka: İ&ccedil;im</p>\r\n', 5, 'Krema', 'Beyaz', 1000, 8.00, '1', '1', '2021-09-05 13:54:55', 'Krema'),
(34, 2, '4935823322821618747burgu.PNG', 'Burgu Peynir', '<p>Burgu Peynir 200gr</p>\r\n\r\n<p>Marka: Muratbey</p>\r\n', 6, 'Burgu Peynir', 'Beyaz', 1000, 16.00, '1', '1', '2021-09-05 13:56:39', 'Burgu Peynir'),
(35, 2, '75474252910714093249tahsildardil.PNG', 'Dil Peynir', '<p>Dil Peynir 250gr</p>\r\n\r\n<p>Marka Tahsildaroğlu</p>\r\n', 7, 'Dil Peynir', 'Beyaz', 1000, 20.00, '1', '1', '2021-09-05 13:58:07', 'Dil Peynir'),
(36, 3, '5488844673715916879tuz.PNG', 'İyotlu Tuz', '<p>İyotlu Tuz 750gr.</p>\r\n\r\n<p>Marka: Billur</p>\r\n', 1, 'İyotlu Tuz', 'Beyaz', 1000, 7.00, '1', '1', '2021-09-05 14:03:40', 'İyotlu Tuz'),
(37, 3, '9523083000711246713un.PNG', 'Un', '<p>Un 2Kg.</p>\r\n\r\n<p>Marka: S&ouml;ke</p>\r\n', 2, 'Un', 'Beyaz', 1000, 15.00, '1', '1', '2021-09-05 14:05:08', 'Un'),
(38, 3, '51550832536215731021salca.PNG', 'Domates Salçası', '<p>Domates Sal&ccedil;ası 830gr</p>\r\n\r\n<p>Marka: Tat</p>\r\n', 3, 'Domates Salçası', 'Kırmızı', 1000, 10.00, '1', '1', '2021-09-05 14:07:29', 'Domates Salçası'),
(39, 3, '8445637178014217806kupseker.PNG', 'Küp Şeker', '<p>K&uuml;p Şeker 1Kg</p>\r\n\r\n<p>Marka: Doğuş</p>\r\n', 4, 'Kup Şeker', 'Beyaz', 1000, 7.00, '1', '1', '2021-09-05 14:09:11', 'Küp Şeker'),
(40, 3, '59461883673811164960tozseker.PNG', 'Toz Şeker', '<p>Toz Şeker 1Kg.</p>\r\n\r\n<p>Marka: Doğuş</p>\r\n', 6, 'Toz Şeker', 'Beyaz', 1000, 8.00, '1', '1', '2021-09-05 14:10:25', 'Toz Şeker'),
(41, 3, '45094755375517447385yag.PNG', 'Ayçicek Yağı', '<p>Ay&ccedil;icek Yağı 1L.</p>\r\n\r\n<p>Marka: Yudum</p>\r\n', 6, 'Ayçicek Yağı', 'Sarı', 1000, 30.00, '1', '1', '2021-09-05 14:15:41', 'Ayçicek Yağı'),
(42, 4, '9056824583216689129fazulye.PNG', 'Kuru Fasulye', '<p>Beyaz Fasulye 1Kg.</p>\r\n\r\n<p>Marka: Yayla</p>\r\n', 2, 'Kuru Fasulye', 'Beyaz', 200, 15.00, '1', '1', '2021-09-05 14:21:13', 'Kuru Fasulye'),
(43, 4, '9849029979181302604kırmızımer.PNG', 'Kırmızı Mercimek', '<p>Kırmızı Mercimek 1Kg.</p>\r\n\r\n<p>Marka: Yayla</p>\r\n', 3, 'Kırmızı Mercimek', 'Kırmızı', 1000, 15.00, '1', '1', '2021-09-05 14:22:46', 'Kırmızı Mercimek'),
(44, 4, '226982269578513258mısır.PNG', 'Cin Mısır', '<p>Cin Mısır 500gr.</p>\r\n\r\n<p>Marka: Yayla</p>\r\n', 4, 'Cin Mısır', 'Sarı', 200, 6.00, '1', '1', '2021-09-05 14:24:28', 'Cin Mısır'),
(45, 4, '58100324976518181553buğday.PNG', 'Buğday', '<p>Buğday 1Kg.</p>\r\n\r\n<p>Marka: Yayla</p>\r\n', 5, 'Buğday', 'Sarı', 200, 15.00, '1', '1', '2021-09-05 14:26:50', 'Buğday'),
(46, 4, '4321086175911444450bulgur.PNG', 'Bulgur', '<p>Pilavlık&nbsp;Bulgur 1Kg.</p>\r\n\r\n<p>Marka: Yayla</p>\r\n', 6, 'Bulgur', 'Sarı', 200, 7.00, '1', '1', '2021-09-05 14:28:13', 'Bulgur'),
(47, 4, '8920942296014999233siyahpir.PNG', 'Siyah Pirinç', '<p>Siyah Pirin&ccedil; 500gr.</p>\r\n\r\n<p>Marka: Yayla</p>\r\n', 7, 'Siyah Pirinç', 'Siyah', 200, 19.00, '1', '1', '2021-09-05 14:30:06', 'Siyah Pirinç'),
(48, 5, '4617173424211990795muz.PNG', 'İthal Muz', '<p>İthal Muz 1Kg</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'İthal Muz', 'Sarı', 1000, 15.00, '1', '1', '2021-09-05 14:32:28', 'İthal Muz'),
(49, 5, '6174039557634283494uzum.PNG', 'Üzüm', '<p>&Uuml;z&uuml;m 1Kg.</p>\r\n', 2, 'Üzüm', 'Yeşil', 1000, 10.00, '1', '1', '2021-09-05 14:34:12', 'Üzüm'),
(50, 5, '68832269037918433348sefta.PNG', 'Şeftali', '<p>Şeftali 1Kg.</p>\r\n', 3, 'Şeftali', 'Kırmızı', 1000, 10.00, '1', '1', '2021-09-05 14:35:10', 'Şeftali'),
(51, 5, '3559997072487688450armut.PNG', 'Armut', '<p>Armut 1Kg.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 4, 'Armut', 'Yeşil', 1000, 10.00, '1', '1', '2021-09-05 14:36:11', 'Armut'),
(52, 5, '37704931191917066019elma.PNG', 'Golden Elma', '<p>Golden Elma 1Kg.</p>\r\n', 5, 'Golden Elma', 'Kırmızı', 1000, 10.00, '1', '1', '2021-09-05 14:37:51', 'Golden Elma'),
(53, 5, '35417181202311037809portakal.PNG', 'Portakal', '<p>Portakal 1Kg.</p>\r\n', 6, 'Portakal', 'Turuncu', 1000, 15.00, '1', '1', '2021-09-05 14:40:06', 'Portakal'),
(54, 5, '3749898623142201533nar.PNG', 'Nar', '<p>Nar 1Kg.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 7, 'Nar', 'Kırmızı', 1000, 20.00, '1', '1', '2021-09-05 14:42:24', 'Nar'),
(55, 5, '6334036839234393055siyahuzum.PNG', 'Siyah Üzüm', '<p>Siyah &Uuml;z&uuml;m 1Kg.</p>\r\n', 8, 'Siyah Üzüm', 'Siyah', 1000, 10.00, '1', '1', '2021-09-05 14:44:26', 'Siyah Üzüm'),
(56, 5, '45349029957418495984kavun.PNG', 'Kavun', '<p>Kavun 1Kg.</p>\r\n', 9, 'Kavun', 'Sarı', 1000, 3.00, '1', '1', '2021-09-05 14:45:51', 'Kavun'),
(57, 5, '1976242928669545994erik.PNG', 'Mürdüm Erik', '<p>M&uuml;rd&uuml;m Erik 1Kg.</p>\r\n', 10, 'Mürdüm Erik', 'Mor', 1000, 7.00, '1', '1', '2021-09-05 14:54:05', 'Mürdüm Erik'),
(58, 11, '68867138920713903815patates.PNG', 'Patates', '<p>Patates 1Kg.</p>\r\n', 3, 'Patates', 'Kahverengi', 1000, 5.00, '1', '1', '2021-09-05 15:14:06', 'Patates'),
(59, 11, '29183956064812381071dolmabiber.PNG', 'Dolma Biber', '<p>Dolma Biber 1Kg.</p>\r\n', 8, 'Dolma Biber', 'Yeşil', 1000, 8.00, '1', '1', '2021-09-05 15:16:13', 'Dolma Biber'),
(60, 11, '48367844153016177219fasulye.PNG', 'Taze Fasulye', '<p>Taze Fasulye 1Kg.</p>\r\n', 9, 'Taze Fasulye', 'Yeşil', 1000, 16.00, '1', '1', '2021-09-05 15:17:19', 'Taze Fasulye'),
(61, 11, '88393759294214412128ıspanak.PNG', 'Ispanak', '<p>Ispanak 1Kg.</p>\r\n', 10, 'Ispanak', 'Yeşil', 1000, 15.00, '1', '1', '2021-09-05 15:18:27', 'Ispanak'),
(62, 11, '2426575917091529066koybiberi.PNG', 'Köy Biberi', '<p>K&ouml;y Biberi 1Kg.</p>\r\n', 11, 'Köy Biberi', 'Yeşil', 10000, 10.00, '1', '1', '2021-09-05 15:20:39', 'Köy Biberi'),
(63, 7, '22027485122417757344kakao.PNG', 'Kakao ', '<p>Kakao 2X25gr.</p>\r\n\r\n<p>Marka: Dr. Oetker</p>\r\n', 1, 'Kakao ', 'Kahverengi', 200, 6.00, '1', '1', '2021-09-05 17:36:59', 'Kakao '),
(64, 7, '30422686927717077083kabartmatozu.PNG', 'Kabartma Tozu', '<p>Kabartma Tozu 10&#39;lu 100gr</p>\r\n\r\n<p>Marka: Dr.Oether</p>\r\n', 2, 'Kabartma Tozu', 'Beyaz', 200, 4.00, '1', '1', '2021-09-05 17:33:38', 'Kabartma Tozu'),
(65, 7, '8528612474517135523vanilya.PNG', 'Vanilin', '<p>Şekerli Vanilin 15&#39;li 75gr.</p>\r\n\r\n<p>Marka: Dr.Oetker</p>\r\n', 3, 'Vanilin', 'Beyaz', 200, 5.00, '1', '1', '2021-09-05 17:36:50', 'Vanilin'),
(66, 7, '25215759563316599544puding.PNG', 'Kakaolu Puding', '<p>Kakaolu Puding 147gr.</p>\r\n\r\n<p>Marka: Dr.Oetker</p>\r\n', 4, 'Kakaolu Puding', 'Kahverengi', 200, 4.00, '1', '1', '2021-09-05 17:36:38', 'Kakaolu Puding'),
(67, 7, '56539864592410035376irmik.PNG', 'İrmik', '<p>İrmik 500gr</p>\r\n\r\n<p>Marka: Filiz</p>\r\n', 5, 'İrmik', 'Sarı', 1000, 5.00, '1', '1', '2021-09-05 17:38:09', 'İrmik'),
(68, 7, '48987734746017053291karbonat.PNG', 'Karbonat', '<p>Karbonat 5&#39;li 25gr</p>\r\n\r\n<p>Marka: Dr.Oetker</p>\r\n', 6, 'Karbonat', 'Beyaz', 200, 2.00, '1', '1', '2021-09-05 17:39:22', 'Karbonat'),
(69, 6, '11718992968418361029cekirdek.PNG', 'Ayçekirdek', '<p>Ay&ccedil;ekirdek 180gr.</p>\r\n\r\n<p>Marka: Tadım</p>\r\n', 1, 'Ayçekirdek', '.', 1000, 5.00, '1', '1', '2021-09-05 17:42:51', 'Ayçekirdek'),
(70, 6, '14203597696217987229lays.PNG', 'Patates Cipsi', '<p>Patates Cipsi 134gr.</p>\r\n\r\n<p>Marka: Lays</p>\r\n', 2, 'Patates Cipsi', 'Sarı', 1000, 5.00, '1', '1', '2021-09-05 17:43:58', 'Patates Cipsi'),
(71, 6, '9369774833615668547torku.PNG', 'Bisküvi', '<p>Bisk&uuml;vi&nbsp; 279gr</p>\r\n\r\n<p>Marka: Torku</p>\r\n', 3, 'Bisküvi', 'Kahverengi', 1000, 15.00, '1', '1', '2021-09-05 17:45:46', 'Bisküvi'),
(72, 6, '98116358060939012149katlı.PNG', '9 Katlı Bisküvi ', '<p>9 Katlı Bisk&uuml;vi&nbsp; 39gr</p>\r\n\r\n<p>Marka: &Uuml;lker</p>\r\n', 4, '9 Katlı Bisküvi ', 'Kahverengi', 1000, 2.00, '1', '1', '2021-09-05 17:47:09', '9 Katlı Bisküvi '),
(73, 6, '6844063317971217743gong.PNG', 'Pirinç patlağı', '<p>Pirin&ccedil; patlağı 64gr</p>\r\n\r\n<p>Marka: Eti</p>\r\n', 5, 'Pirinç patlağı', 'Beyaz-Sarı', 1000, 3.00, '1', '1', '2021-09-05 17:48:26', 'Pirinç patlağı'),
(74, 6, '3809649156914785907burcak.PNG', 'Buğday Bisküvi', '<p>Buğday Bisk&uuml;vi 131gr</p>\r\n\r\n<p>Marka: Eti</p>\r\n', 6, 'Buğday Bisküvi', 'Kahverengi', 1000, 3.00, '1', '1', '2021-09-05 17:50:06', 'Buğday Bisküvi'),
(75, 12, '33081110324419704772dove.PNG', 'Sabun', '<p>Sabun 4X100gr</p>\r\n\r\n<p>Marka: Dove</p>\r\n', 1, 'Sabun', 'Beyaz', 1000, 25.00, '1', '1', '2021-09-05 17:54:06', 'Sabun'),
(76, 12, '67091099846670337kulaktemiz.PNG', 'Kulak Temizleme Çöpü', '<p>Kulak Temizleme &Ccedil;&ouml;p&uuml; 200&#39;l&uuml;</p>\r\n\r\n<p>Marka: Cle Up</p>\r\n', 2, 'Kulak Temizleme Çöpü', 'Beyaz', 1000, 15.00, '1', '1', '2021-09-05 17:58:10', 'Kulak Temizleme Çöpü'),
(77, 12, '4077397310251723086pamuk.png', 'Pamuk ', '<p>Pamuk 70&#39;adet</p>\r\n\r\n<p>Marka: İpek</p>\r\n', 3, 'Pamuk ', 'Beyaz', 1000, 8.00, '1', '1', '2021-09-05 18:00:24', 'Pamuk '),
(78, 12, '8831559017118022496dismacun.PNG', 'Diş Macunu', '<p>Diş Macunu 100ml</p>\r\n\r\n<p>Marka: Golgate</p>\r\n', 4, 'Diş Macunu', 'Beyaz', 1000, 15.00, '1', '1', '2021-09-05 18:01:36', 'Diş Macunu'),
(79, 12, '1863291136854352458selinkolonya.PNG', 'Kolonya', '<p>Kolonya 200ml</p>\r\n\r\n<p>Marka: Selin</p>\r\n', 5, 'Kolonya', '.', 200, 15.00, '1', '1', '2021-09-05 18:04:38', 'Kolonya'),
(80, 12, '43541789791719967394sabun.PNG', 'El Sabunu', '<p>El Sabunu 4X70gr</p>\r\n\r\n<p>Marka: Hacı Şakir</p>\r\n', 6, 'El Sabunu', 'Beyaz', 200, 10.00, '1', '1', '2021-09-05 18:06:02', 'El Sabunu'),
(82, 13, '71578680349818535857solo.PNG', 'Peçete', '<p>Pe&ccedil;ete 200 Yaprak</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'Peçete', 'Beyaz', 1000, 5.00, '1', '1', '2021-09-05 18:09:07', 'Peçete'),
(83, 13, '4517935379110099283maske.PNG', 'Cerrahi Maske', '<p>3 Katlı Cerrahi Maske&nbsp;</p>\r\n\r\n<p>Marka: Evony</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'Cerrahi Maske', 'Yeşil', 1000, 25.00, '1', '1', '2021-09-05 18:22:29', 'Cerrahi Maske'),
(84, 13, '99806460025611939128çoptorba.PNG', 'Çöp Torbası', '<p>K&uuml;&ccedil;&uuml;k Boy &Ccedil;&ouml;p Torbası 30&#39;lu</p>\r\n\r\n<p>Marka: Cook</p>\r\n', 3, 'Çöp Torbası', 'Beyaz', 1000, 15.00, '1', '1', '2021-09-05 18:13:59', 'Çöp Torbası'),
(85, 13, '67449328373113666247bulaşıksabunu.PNG', 'Sıvı Bulaşık Sabunu', '<p>Sıvı Bulaşık Sabunu 650ml</p>\r\n\r\n<p>Marka: Fairy&nbsp;</p>\r\n', 4, 'Sıvı Bulaşık Sabunu', 'Sarı', 1000, 15.00, '1', '1', '2021-09-05 18:16:45', 'Sıvı Bulaşık Sabunu'),
(86, 13, '7095847551668006192yumoş.PNG', 'Çamaşır Yumaşatıcısı', '<p>&Ccedil;amaşır Yumaşatıcısı 1440ml.</p>\r\n\r\n<p>Marka: Yumoş</p>\r\n', 5, 'Çamaşır Yumaşatıcısı', 'Beyaz', 1000, 15.00, '1', '1', '2021-09-05 18:19:09', 'Çamaşır Yumaşatıcısı'),
(87, 13, '97325267556014927410perwoll.PNG', 'Renkli Sıvı Çamaşır Deterjanı', '<p>Sıvı &Ccedil;amaşır Deterjanı 3L</p>\r\n', 6, 'Renkli Sıvı Çamaşır Deterjanı', 'Beyaz', 1000, 25.00, '1', '1', '2021-09-05 18:21:08', 'Renkli Sıvı Çamaşır Deterjanı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_detay`, `yorum_zaman`, `urun_id`, `kullanici_id`, `yorum_onay`) VALUES
(2, 'yeni kırmızı biber', '2021-08-31 16:00:34', 7, 12, 1),
(3, 'deneme', '2021-08-31 16:00:36', 7, 12, 1),
(4, 'denemdmwofowelkfew', '2021-08-31 15:52:30', 7, 12, 0),
(5, 'fşufıwfnlwşdöifwsıosd', '2021-08-31 15:52:37', 7, 12, 0),
(6, 'kırmızı biber yeni yorum', '2021-08-31 16:17:35', 7, 11, 1),
(7, '', '2021-09-07 16:44:08', 69, 0, 0),
(8, 'deneme yorumur', '2021-09-07 16:54:56', 69, 0, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cokluresim`
--
ALTER TABLE `cokluresim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `cokluresim`
--
ALTER TABLE `cokluresim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
