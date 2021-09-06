-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ağu 2021, 18:01:36
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
-- Veritabanı: `laravel22j`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `keywords`, `description`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Giyim&Aksesuar', 'giyim,aksesuar', 'Giyim&Aksesuar', NULL, 'giyim-aksesuar', 'True', NULL, NULL),
(2, 0, 'Elektronik', 'elektronik', 'elektronik', NULL, 'elektronik', 'True', NULL, NULL),
(3, 0, 'Ev&Yaşam', 'ev,yasam', 'Ev&Yaşam', NULL, 'ev-yasam', 'True', NULL, NULL),
(5, 0, 'Kozmetik&Kişisel Bakım', 'kozmetik,kisisel,bakim', 'Kozmetik&Kişisel Bakım', NULL, 'kozmetik-ve-kisisel-bakim', 'True', NULL, NULL),
(6, 1, 'Ayakkabı&Çanta', 'ayakkabı,çanta', 'Ayakkabı&Çanta', NULL, 'ayakkabı-çanta', 'True', NULL, NULL),
(7, 2, 'Telefon&Aksesuarları', 'Telefon&Aksesuarları', 'Telefon&Aksesuarları', NULL, 'telefon-aksesuarları', 'True', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Siteye Nasıl Kaydolurum?', '<p>Register kısmından kayıt olabilirsiniz!</p>', 1, 'true', '2021-02-08 14:11:27', '2021-02-08 14:11:27'),
(2, 'Ürünlerimi nasıl eklerim', '<p>&Uuml;r&uuml;n sat butonundan ekleyebilirsiniz.</p>', 2, 'true', '2021-02-08 14:11:56', '2021-02-08 14:11:56');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filemanager`
--

CREATE TABLE `filemanager` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `absolute_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `product_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'images/pbqjNullhmJExTvqTTk5bVnfyat3zuI6zfC6D5tB.jpg', '2021-02-08 12:07:03', '2021-02-08 12:07:03'),
(2, 1, '2', 'images/vIOx36NlGb21F8tAZ2PwiOleb8aHmqewzxkj6EZK.jpg', '2021-02-08 12:07:27', '2021-02-08 12:07:27'),
(3, 2, '1', 'images/0CgUmQSo3U7nO6DImevyjt2TN7bG4IjYAdVZbmog.jpg', '2021-02-08 12:26:30', '2021-02-08 12:26:30'),
(4, 2, '2', 'images/1CU6Dvqb8AM3BGyUxrjOsgqSA9d7KyrDEb0hftRK.jpg', '2021-02-08 12:26:37', '2021-02-08 12:26:37'),
(5, 2, '3', 'images/jTDjdXUfrDsXVnBM4UZPNDv6J01cg9y3L0jJL8OD.png', '2021-02-08 12:26:48', '2021-02-08 12:26:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `note`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ahmet Kasum', 'ahmetkasum@gmail.com', '05124545544', 'Konu', 'mesajjjj', 'ok', 'Read', '2021-08-28 11:20:02', '2021-08-28 11:20:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_08_130715_create_sessions_table', 1),
(7, '2021_02_08_135552_create_categories_table', 2),
(8, '2021_02_08_135812_category', 2),
(9, '2021_02_08_135913_create_products_table', 3),
(10, '2021_02_08_135944_product', 3),
(11, '2021_02_08_140106_create_images_table', 4),
(12, '2021_02_08_140126_image', 4),
(13, '2021_02_08_140200_create_settings_table', 5),
(14, '2021_02_08_140225_setting', 5),
(15, '2021_02_08_140259_add_phone_to_users', 6),
(16, '2021_02_08_140322_add_address_to_users', 6),
(17, '2021_02_08_140359_create_messages_table', 7),
(18, '2021_02_08_140428_message', 7),
(19, '2021_02_08_140453_create_reviews_table', 8),
(20, '2021_02_08_140517_review', 8),
(21, '2021_02_08_140552_create_faqs_table', 9),
(22, '2021_02_08_140629_faq', 9),
(23, '2021_02_08_140659_create_shopcarts_table', 10),
(24, '2021_02_08_140725_shopcart', 10),
(25, '2021_02_08_140754_create_orders_table', 11),
(26, '2021_02_08_140816_order', 11),
(27, '2021_02_08_140855_create_orderitems_table', 12),
(28, '2021_02_08_141001_orderitem', 12),
(29, '2021_02_08_141209_create_roles_table', 13),
(30, '2021_02_08_141231_role', 13),
(31, '2021_02_08_141312_create_role_user_table', 14),
(32, '2020_05_02_100001_create_filemanager_table', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `note` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orderitems`
--

INSERT INTO `orderitems` (`id`, `user_id`, `order_id`, `product_id`, `price`, `quantity`, `amount`, `total`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1649, 1, 1649.00, 1649.00, 'yok', 'Cancelled', '2021-02-08 12:43:54', '2021-02-08 13:57:20'),
(2, 1, 2, 1, 1649, 1, 1649.00, 1649.00, NULL, 'New', '2021-02-08 14:28:20', '2021-02-08 14:28:20'),
(3, 3, 3, 1, 1649, 1, 1649.00, 1649.00, NULL, 'New', '2021-08-28 12:09:52', '2021-08-28 12:09:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `note` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IP` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `address`, `phone`, `total`, `note`, `IP`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Ahmet Kasum', 'ahmetkasum@gmail.com', 'istanbul', '05350885614', 1649.00, NULL, '127.0.0.1', 'New', '2021-08-28 12:09:52', '2021-08-28 12:09:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `minquantity` int(11) NOT NULL DEFAULT 5,
  `tax` int(11) NOT NULL DEFAULT 18,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `title`, `keywords`, `description`, `image`, `category_id`, `user_id`, `price`, `quantity`, `minquantity`, `tax`, `detail`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'General Mobile GM 20 64 GB (General Mobile Türkiye Garantili)', 'General Mobile GM 20 64 GB (General Mobile Türkiye Garantili)', 'General Mobile GM 20 64 GB (General Mobile Türkiye Garantili)', 'images/KBb6YCWKmQZHSibnRJFo8lsPj1N8YDydXbWrlGH7.jpg', 7, 1, 1649.00, 10, 1, 18, '<h2>&Uuml;r&uuml;n Detayları</h2>\r\n\r\n<h2>General Mobile GM 20 64 GB Cep Telefonu</h2>\r\n\r\n<p>Teknoloji devlerinden General Mobile, akıllı telefonları ile kullanıcılarının hayatına hem renk hem de hız katıyor. Her yeni modelde kendisini geliştiren GM, ergonomik tasarımı ve gelişmiş &ouml;zellikleri ile dikkatleri &uuml;zerine &ccedil;ıkıyor. <strong>General Mobile GM 20</strong> bu alanda ilgileri toplarken &uuml;st&uuml;n &ouml;zellikleriyle kendini g&ouml;stermeye devam ediyor. Yeşil, mavi ve siyah olmak &uuml;zere 3 farklı renk se&ccedil;eneği sunuyor. Ayrıca kullanıcılarına <strong>GM 20 64 GB</strong> genişletilebilir depolama imkanı tanıyor. İnce ve hafif olması kullanım kolaylığı sağlıyor. GM 20 akıllı telefonu başta kamera &ouml;zelliği ile olmak &uuml;zere olduk&ccedil;a dikkat &ccedil;ekici bir &uuml;r&uuml;n. &Uuml;&ccedil;l&uuml; kamera sistemi olan cihaz kusursuz fotoğraflar &ccedil;ekmeyi m&uuml;mk&uuml;n kılıyor. Ayrıca, yavaş &ccedil;ekim, panoramik &ccedil;ekim gibi &ouml;zellikleri de bambaşka bir video &ccedil;ekme deneyimi yaşamanıza olanak tanıyor. Y&uuml;ksek performansı ile fark yaratan cihaz, 25 saate kadar kesintisiz kullanım imkanı sağlıyor. Android 10 desteği alan GM 20, uygun fiyatlar ile piyasaya sunulmuştur. Uygun fiyatlı cihazları ile dikkat &ccedil;eken marka, yeni modeli ile de dikkatleri &uuml;zerine &ccedil;ekmektedir. Yeni modellerine kendisin geliştiren markanın yeni &uuml;r&uuml;n&uuml; <strong>GM 20 64 GB &ouml;zellikleri</strong> ile ilgili bilgileri sayfamızda bulabilirsiniz.</p>\r\n\r\n<p><img alt=\"General Mobile 20 64 GB ile Tarzınızı Konuşturun\" src=\"https://n11scdn.akamaized.net/a1/1024/08/49/95/10/50396427.png\" /></p>\r\n\r\n<h3>General Mobile 20 64 GB &Ouml;zellikleri</h3>\r\n\r\n<p>6.08 in&ccedil;&rsquo;lik General Mobile 20 modeli 64 GB&rsquo;lık geniş bir depolama alanı sunuyor. Ayrıca bu depolama alanını harici kart ile 256 GB&rsquo;a kadar y&uuml;kseltmek m&uuml;mk&uuml;nd&uuml;r. Y&uuml;ksek &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;kl&uuml; ekranı olan General Mobile GM 20, &uuml;st&uuml;n kamera performansı ile dikkat &ccedil;ekiyor. Yapay zeka destekli General Mobile 20, 13 MP+2 MP+2 MP kamerası profesyonel kamera &ccedil;ekimi yapmayı başarıyor. &Uuml;&ccedil;l&uuml; kamera sistemi olan cihaz, en keyifli anlarınızı kusursuz bir şekilde fotoğraflamak m&uuml;mk&uuml;n. Gece modu bulunan cihaz ile karanlık gecelerde de net &ccedil;ekim yapılabiliyor. <strong>General Mobile 20 64 GB yeşil</strong> renkte modeli de siyah ve mavi renk modelleri de aynı &ouml;zelliklere sahip. Dikd&ouml;rtgen şeklinde &ccedil;er&ccedil;evesiz tasarımlı ekranı bulunan cihazın, &ccedil;entikli, damla &ccedil;entikli ve Multi touch gibi ekran &ouml;zellikleri bulunuyor. Son derece hafif ve ince tasarımlı olan GM 20, cepte veya &ccedil;antada kolayca taşınabiliyor ve ağırlık yapmıyor. Akıllı telefon almadan &ouml;nce, kullanıcı yorumlarını okumak, cihazın &ouml;zellikleri ile ilgili bilgi verir. <strong>General mobile GM 20 64 GB yorumları</strong> alıcılara &uuml;r&uuml;n hakkında gerekli bilgiyi vermektedir. 4000 mAh bataryaya sahip cihazda hem parmak izi kilidini hem de y&uuml;z tanımayı kullanmak m&uuml;mk&uuml;n. 4000 mAh batarya 25 saat 3G ve 20 saat 4G konuşma s&uuml;resi sağlıyor. GM 20 &ouml;zellikleri arasında yakınlık sens&ouml;r&uuml;, ivme&ouml;l&ccedil;er, ortam ışığı sens&ouml;r&uuml; ve pusula da bulunuyor.</p>\r\n\r\n<h3>Farklı Renk Se&ccedil;enekleri ile GM 20</h3>\r\n\r\n<p>General Mobile 20 64 GB modeli gelişmiş &ouml;zelliklerinin yanı sıra şık ve ergonomik tasarımı ile de dikkat &ccedil;ekiyor. Yeşil, mavi ve siyah metalik tasarımı ile kişilerin istedikleri tarzı ortaya koyabilmelerini sağlamaktadır. IPS LCD ekran teknolojisine sahip dokunmatik ekranlı GM 20, tasarımlarını verimlilikleri ile de birleştirmektedir. 6.08 in&ccedil; boyutlu ekran su, toz, &ccedil;izilme, kırılma gibi olumsuz etkilere karşı dayanıklıdır. Kırılmaz ve &ccedil;izilmez dayanıklı ekran, cihazın daha uzun &ouml;m&uuml;rl&uuml; olmasını sağlıyor. 720x1560 HD+ ekran &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml; ve 16 milyon renk ile videoları ve fotoğrafları ger&ccedil;ek&ccedil;i bir şekilde g&ouml;r&uuml;nt&uuml;leyebilirsiniz. Verimli batarya t&uuml;ketimi ile uzun s&uuml;reli kullanımda bile sizi yardı yolda bırakmayan &uuml;r&uuml;nler, 4000 mAh kadar Li-Po pilleri ile g&uuml;n boyunca şarjı gerektirmeden kesintisiz kullanım sağlıyor. Kesintisiz kullanım imkanı ile <strong>General Mobile GM 20 64 GB siyah</strong> renkte modeli ile şık tasarımı, y&uuml;ksek verimlilik ile birleştiriyor. 1.8 GHz cpu frekansı ve 8 &ccedil;ekirdekli cihaz y&uuml;ksek performans sergiliyor ve birka&ccedil; uygulamayı birden sorunsuz bir şekilde a&ccedil;ıyor ve kolaylıkla zorlu g&ouml;revlerin &uuml;stesinden geliyor. Ayrıca 4 GB RAM ve MicroSD kart ile 250 GB&rsquo;a kadar arttırabilir 64 GB depolama hacmi var. Yapar zeka teknolojili cihaz HDR ve Portre modu gibi &ouml;zellikleri ile profesyonel fotoğraflar &ccedil;ekmenizi sağlıyor. Ayrıca kamerasındaki yavaş &ccedil;ekim video kayıt ve time-lapse video kayıt &ouml;zellikleri sayesinde Full HD videolar &ccedil;ekmenizi sağlıyor.</p>\r\n\r\n<p><img alt=\"General Mobile GM 20 Kamera Özellikleri\" src=\"https://n11scdn.akamaized.net/a1/1024/06/03/83/73/52175243.png\" /></p>\r\n\r\n<h3>General Mobile GM 20 Kamera &Ouml;zellikleri</h3>\r\n\r\n<p>MediaTek g&uuml;&ccedil;l&uuml; yonga sistemini kullanılan modelde Android 10 işletim sistemi bulunuyor. GM 20 akıllı telefonu &ouml;zellikleri donanımlı bir telefon deneyimi yaşatıyor. Android işletim sistemi ile kolayca kullanabileceğiniz uygulamaları indirebilir b&ouml;ylece y&uuml;ksek performanslı uygulamaların keyfini &ccedil;ıkarabilirsiniz. G&uuml;n&uuml;m&uuml;zde telefon kullanıcılarının telefondan bekledikleri &ouml;zelliklerden biri de kamera ve &ccedil;ekim &ouml;zellikleridir. Bu a&ccedil;ıdan General Mobile 20 64 GB akıllı telefon hem &ouml;n hem de arka kamerasında y&uuml;ksek standartları g&ouml;zetiyor. &Uuml;&ccedil;l&uuml; kamera sistemi olan modelde 13 MP +2MP+2MP &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k sağlayan cihaz, fotoğraflarınızda en ince ayrıntıları bile ka&ccedil;ırmamanızı sağlıyor. Karanlıkta ve loş ışıkta da ayrıntılı &ccedil;ekim yapabilen model, 8 MP &ouml;n kamerası ile &ouml;zg&uuml;n selfie&rsquo;ler &ccedil;ekmenize imkan tanıyor. <strong> General Mobile GM 20 64 GB mavi</strong> renkte modeller ile de her tarzınızı yansıtmanızı hem de kaliteli fotoğraflar &ccedil;ekmenizi sağlıyor. General Mobile, y&uuml;ksek teknolojili &uuml;r&uuml;nlerini uygun fiyatlar ile t&uuml;ketici ile buluşturmaktadır. Farklı renk se&ccedil;enekleri ve arttırılabilir depolama alanı ile satışa sunulan GM General Mobile 20 64 GB modellerini sayfamızdan inceleyebilir, kolayca sipariş verebilirsiniz. Ayrıca <a href=\"https://www.n11.com/telefon-ve-aksesuarlari/cep-telefonu\" target=\"_blank\">Cep Telefonu</a> kategorimizi de ziyaret edebilirsiniz.</p>', 'general-mobile-gm-20-64-gb-general-mobile-turkiye-garantili', 'True', '2021-08-28 12:05:14', '2021-08-28 14:15:47'),
(2, 'Apple iPhone 11 128 GB (Apple Türkiye Garantili)', 'Apple iPhone 11 128 GB (Apple Türkiye Garantili)', 'Apple iPhone 11 128 GB (Apple Türkiye Garantili)', 'images/M8Cvh7SM8PJEytwUA0LQxzUg40qkHYG8ADs8LdOO.jpg', 7, 1, 7999.00, 10, 1, 18, '<div class=\"unf-info-context\">\r\n            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n<style>\r\n    .uni-content {\r\n       font-family: Arial;\r\n        font-size: 15px;\r\n        color: #202020;\r\n        padding: 25px;\r\n    }\r\n    .uni-content p {\r\n        font-size: 15px;\r\n        line-height: 24px;\r\n        padding-bottom: 25px;\r\n    }\r\n    .uni-content p:last-child {\r\n        padding-bottom: 0;\r\n    }\r\n    .uni-content a {\r\n        color: #06c;\r\n        font-size: 15px;\r\n    }\r\n    .uni-content figure {\r\n        background: none;\r\n        border: 0;\r\n        border-radius: 0;\r\n        margin: 0;\r\n        padding: 0;\r\n    }\r\n    .uni-content figure img {\r\n        width: 100%;\r\n    }\r\n    .uni-title {\r\n        font-family: arial;\r\n        font-size: 28px;\r\n        margin-bottom: 5px;\r\n    }\r\n    .uni-content .sub-title {\r\n        font-size: 20px;\r\n        margin: 0 0 15px 0;\r\n    }\r\n    .uni-content .item {\r\n        display: inline-block;\r\n        margin: 25px 0;\r\n        overflow: hidden;\r\n        position: relative;\r\n        width: 100%;\r\n    }\r\n    .uni-content .item.left figure {\r\n        float: left;\r\n       margin-right: 25px;\r\n        margin-bottom: 25px;\r\n    }\r\n    .uni-content .item.right figure {\r\n        float: right;\r\n        margin-left: 40px;\r\n        margin-bottom: 25px;\r\n    }\r\n     /* Responsive layout - Apply this for devices under 800 px */\r\n@media screen and (max-width: 800px) {\r\n div center iframe {\r\n        flex: 100%;\r\n        max-width: 100%;\r\n        height: auto;\r\n    }\r\n}\r\n\r\n/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */\r\n@media screen and (max-width: 600px) {\r\n  div center iframe {\r\n        flex: 100%;\r\n        max-width: 100%;\r\n        height: auto;\r\n    }\r\n }\r\n</style>\r\n<h2 class=\"uni-title\">Ürün Detayları</h2>\r\n<section class=\"uni-content\">\r\n    <h2 class=\"sub-title\">Apple iPhone 11 128 GB Cep Telefonu</h2>\r\n    <div>\r\n        <center>\r\n            <iframe width=\"960\" height=\"515\" src=\"https://www.youtube.com/embed/eCXu-F7SMPY?enablejsapi=1&amp;origin=https%3A%2F%2Fwww.n11.com\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" data-gtm-yt-inspected-734420_341=\"true\" id=\"869773781\" data-gtm-yt-inspected-734420_342=\"true\" data-gtm-yt-inspected-734420_399=\"true\" data-gtm-yt-inspected-734420_515=\"true\" data-gtm-yt-inspected-734420_546=\"true\" data-gtm-yt-inspected-1_25=\"true\"></iframe>\r\n            <br>\r\n    </center></div>\r\n    <p>İstediğiniz her şeyi sizler için bir araya getiren iPhone ile hayata bir adım daha yaklaşabilirsiniz. Yepyeni teknolojiler ile donatılmış olan bu ürünler gördüğünüz ve sevdiğiniz hiçbir şeyi kaçırmamanız için özel olarak geliştirilmiş kamera sistemlerinden\r\n        oluşmaktadır. Yeni çift kamerası ile teknolojide devir açan <strong>Apple iPhone 11 128 Gb</strong> belleği ile bütün hatıralarınızı bir arada saklayabilmenizi sağlıyor. Telefonlarda kullanılan sıradan çiplerin iki katı kadar hızlı çip teknolojisine\r\n        sahip bu ürünler, uzun süre dayanabilen batarya ömrü ile karşınıza çıkar. iPhone’ununuzu daha az şarj etmenizi ve daha fazla telefonunuz ile vakit geçirmenizi sağlayan ürünlerde günlük pil ömrü oldukça yüksektir. Akıllı telefon dünyasında çığır\r\n        açacak video kalitesine sahip olan bu telefonlar sayesinde anılarınızı en yüksek çözünürlükler ile kaydedebilirsiniz.</p>\r\n    <div class=\"item left\">\r\n        <figure><img src=\"https://n11scdn.akamaized.net/a1/org/03/70/71/34/13309992.jpg\" alt=\"Apple iPhone 12 Kamera Özellikleri\"></figure>\r\n        <h3 class=\"sub-title\">Apple iPhone 12 Kamera Özellikleri</h3>\r\n        <p>Yepyeni bir çift kameralı sisteme sahip olan bu telefonlar, adeta bir fotoğraf makinesiymişçesine görev görüyor. Çeşitli modları sayesinde fotoğraflarınızdan en yüksek verimi alabilmenizi sağlayan ürünler karanlıkta dahi yüksek çözünürlüklere\r\n            sahip görüntüler sunuyor. Geniş açıdan ultra geniş açıya geçmenizi sağlayacak olan <strong>iPhone 11 128 gb beyaz</strong> ışık ayarlamalarında sizlere kusursuz aydınlatmalar sunuyor. Arayüzü tekrar tasarlanmış olan bu telefonlarda ultra geniş\r\n            açı sayesinde kadrajın dışında neler olduğunu görebilir ve tüm anı olduğu gibi kayıt altına alabilirsiniz. Yeni bir perspektif kazandıran telefonlar, yüksek hafızaları sayesinde dilediğiniz gibi fotoğraflarınızı depolayabilmenizi sağlıyor.\r\n            Sevdiklerinizle ve ailenizle çekildiğiniz fotoğraflar en ince detaylarına kadar mutluluğunuzu sizler için yansıtıyor. Hızlı çekim özelliğine sahip olan ürünler, anı kolayca yakalayabilmenize yardımcı olmaktadır. Kameranın uzun süren açılış\r\n            işlemini beklemeden 3 saniye içerisinde birden fazla fotoğraf elde edebilirsiniz. Panorama çekim modları sayesinde telefonlar etraftaki bütün güzellikleri kaydedebilmenize yardımcı oluyor. <strong>iPhone 11 128 gb yorumlar</strong> ve değerlendirmeler\r\n            ile incelendiğinde kullanıcılar tarafından olumlu dönütler almaktadır. Bir telefonda aradığınız bütün özellikleri bir arada bulunduran bu ürünler, çekim kalitesini video modunda da devam ettirmektedir. Videoların etkisini en küçük detaya kadar\r\n            küçültebileceğiniz ürünlerde, video üzerinde yüksek açılı zoom özelliği bulunmaktadır. Kadraja 4 kat daha geniş bir şekilde sığabilen videolar elde etmenizi sağlayan iPhone 11, 60 kare 4K video çekebilme özelliği ile karşınıza çıkmaktadır.\r\n            Yüksek çözünürlük ve netlikte görüntüler elde etmenizi sağlayan bu ürünler, dünya üzerinde çekilmiş en zevkli videoları oluşturabilmenizi sağlamaktadır. Her anınızı geniş bir şekilde sığdırabilme özelliğine sahip olan bu telefonlar, köpeğin\r\n            frizbiyi yakalama anı gibi aksiyon anlarını yüksek çözünürlükte kayıt altına alıyor. En değerli altın anlarınızı iPhone kamerası ile kayıt altına alabilir ve adeta gerçekmiş gibi izleyebilirsiniz. <strong>iPhone 11 128 gb siyah</strong> rengi\r\n            ile asil görünüm oluştururken bir yandan da kaydettiğiniz konser performanslarında ekstra bir özellik sunuyor. Görüntüyü yakınlaştırdığınız zaman sesi de yakınlaştıran özel teknoloji ile donatılmış olan bu ürünler ile video ve fotoğraflarınızı\r\n            da kolay bir şekilde düzenleyebilirsiniz.</p>\r\n        <h3 class=\"sub-title\">Aradığınız Tüm Özellikler Apple iPhone 11\'de!</h3>\r\n        <p>Sudan korkmayan bir yapıya sahip olan bu telefonlar, oldukça dayanıklı camlara sahiptir. İki tarafı da cam yüzeyden oluşturulan ürünler çift iyon değişimi işleminden geçirilerek güçlendirilmiş olan telefon modelleri olarak karşınıza çıkıyor. İki\r\n            kata kadar daha fazla derinliğe dayanıklı olan yapılardan oluşan ürünler, 30 dakika boyunca maksimum 2 metre derinlikte suya dayanıklıdır. <strong>iPhone 11 128 gb özellikleri</strong> arasında uzun pil ömrü bulunuyor. Sizleri asla yarı yolda\r\n            bırakmayacak olan bu telefonlar, tüm gün süren şarj ömrünü sizlerle buluşturuyor. Pilinizden en iyi şekilde yararlanabilmeniz amacıyla özel olarak geliştirilmiş sistemlere sahip olan bu telefonlar, özel bir donanım ve yazılım formuna sahiptir.\r\n            Hızlı şarj özelliğine sahip olan bu ürünlerde aygıtınızı kısa süre içerisinde şarj edebilir ve 24 saat kullanabilirsiniz. Özel bir Pro çip ile geliştirilmiş olan telefonlar, oldukça hızlı bir işlemciye sahiptir. Güçlü yapısı sayesinde yaptığınız\r\n            bütün işlemler eskisinden daha hızlı ve akıcı hale gelmektedir. Yüksek düzeyde enerji verimliliği sağlayabilen yapıdan oluşan ürünler A13 Bionic teknolojisi ile geliştirilmiştir ve çevre dostu özellikleri ile kullanıcılarını memnun bırakmaya\r\n            devam etmektedir. Zamanın çok ötesinde geliştirilmiş olan <strong>iPhone 11 128 gb mor</strong>, kırmızı ve yeşil gibi renk seçenekleri ile yepyeni bir tarz oluşturuyor. Bir telefondan beklediğiniz her şey olan bu ürünler aynı zamanda gelişmiş\r\n            güvelik sistemlerine sahiptir. Parmağınızı bile kıpırdatmadan kolayca telefonunuzun kilidini açabilmenizi sağlayan Face ID kolay ve güvenli bir yöntem olarak karşınıza çıkıyor. Güvenli bir yüz doğrulama teknolojisine sahip olan bu ürünler\r\n            telefonunuzu anında açabilmenize olanak tanımaktadır. Oldukça güvenli sistemlere sahip olan telefonlarda bir bakışınızla uygulamalarınızda oturum açabilir ve kolayca hesaplarınıza erişebilirsiniz. Oldukça basit bir kurulum sistemine sahip\r\n            olan Face ID ile telefonunuzdaki bütün bilgileri güvenle saklayabilirsiniz. Özellikleri ile etkileyicilik sunan <strong>iPhone 11 128 gb fiyat</strong> açısından değerlendirildiğinde oldukça hesaplı fiyat skalaları ile karşınıza çıkmaktadır.\r\n            Bir telefondan çok daha fazlası olan bu ürünler ile teknolojiyi yeniden keşfedebilirsiniz.</p>\r\n        <div class=\"item right\">\r\n            <figure><img src=\"https://n11scdn.akamaized.net/a1/org/16/49/35/76/06729256.jpg\" alt=\"Gelişmiş Özellikleri ile Apple iPhone 11\"></figure>\r\n            <h3 class=\"sub-title\">Gelişmiş Özellikleri ile Apple iPhone 11</h3>\r\n            <p>Geniş hafızası sayesinde dilediğiniz kadar fotoğrafı ve videoyu bir arada saklayabilmenize imkan veren bu telefonlar, dilediğiniz gibi oyun oynayabilmenizi ve istediğiniz kadar uygulama indirebilmenizi de sağlamaktadır. Ultra geniş bant teknolojisi\r\n                ile karşınıza çıkan bu telefonlar, geliştirilen özel çipler sayesinde hızlı bir arayüze ve akıcı bir işlem mekanizmasına sahiptir. Yeni yapıdan oluşan U1 çip, kendi konumunuzu diğer U1 çipli Apple aygıtlar ile eşleştirerek tespit etme\r\n                özelliğine sahiptir. Böylece GPS teknolojisinde yepyeni bir devrim başlıyor. Oturma odanızda otururken AirDrop’tan dosya göndereceğiniz kişinin telefonuna kendi telefonunuzu doğrultmanız yeterli oluyor. Böylece karşınızdaki kişi direkt\r\n                olarak listenin başında beliriyor. <strong>iPhone 11 128 gb kırmızı</strong> ve yeşil renklerle sizin tarzınızı yansıtacak özel tasarımlar ile karşınıza çıkıyor. Hayatınıza renk kazandıracak olan bu telefonlar üstün çekim yetenekleri sayesinde\r\n                her anınızı rahat bir şekilde kaydedebilmenizi ve tekrar tekrar sıkılmadan izleyebilmenize olanak tanıyor. En güzel hissettiğiniz anları ağır çekim selfie modu diğer adıyla slofie ile kaydedebilirsiniz. Dilerseniz sadece gülümseyerek veya\r\n                el sallayarak poz verin, çektiğiniz pozu saniyede 120 kare çekimde sizlere sunmaktadır. Her şeyi daha etkileyici kılan bu telefonlar, geniş kamera açıları sayesinde selfie’lerinize çok daha fazla şey sığdırabilmenizi sağlamaktadır. Yatay\r\n                konuma getirdiğinizde iPhone’unuz otomatik olarak uzaklaşır ve kadrajın genişlemesini sağlamaktadır. Quicktake özelliğine sahip olan bu telefonlarda fotoğraf modundan video moduna geçiş yapmak oldukça kolaydır. Fotoğraf modunda deklanşöre\r\n                basılı tuttuğunuzda video kaydını kolay bir şekilde başlatabilirsiniz. Akıllı HDR teknolojisine sahip olan <strong>Apple iPhone 11 akıllı telefon 128 gb</strong> yapısı ile her anınızı kaydedebilmenize yardımcı oluyor. Yapay öğrenme teknolojisine\r\n                sahip olan bu telefonlar, insanları algılayarak fotoğraflarda farklı işlemler yapılabilmesini sağlıyor. Yeni nesil sistemler ile karşınıza çıkan iPhone dilediğiniz gibi görüntüler elde edebilmenizi, rahatça oyun oynayabilmenizi ve istediğiniz\r\n                kadar alana dosya sığdırabilmenizi sağlıyor. Sayfamız üzerinden sizler için uygun olan renkteki iPhone’u seçerek bu ayrıcalıklı özelliklere kolayca sahip olabilirsiniz. Ayrıca <a href=\"\" target=\"_blank\" title=\"Cep Telefonu\">Cep Telefonu</a>                kategorimizi ziyaret ederek tüm cep telefonu modelleri hakkında bilgi sahibi olabilirsiniz.</p>\r\n        </div>\r\n    </div>\r\n    <div class=\"item\" style=\"text-align: center;\">\r\n        <figure>\r\n            <img src=\"https://n11scdn3.akamaized.net/a1/org/08/28/46/18/18584442.jpg\" alt=\"\">\r\n        </figure>\r\n        <figure>\r\n            <img src=\"https://n11scdn3.akamaized.net/a1/org/14/69/85/53/38467624.jpg\" alt=\"\">\r\n        </figure>\r\n        <figure>\r\n            <img src=\"https://n11scdn3.akamaized.net/a1/org/08/97/30/13/14324076.jpg\" alt=\"\">\r\n        </figure>\r\n        <figure>\r\n            <img src=\"https://n11scdn3.akamaized.net/a1/org/10/50/69/56/16253307.jpg\" alt=\"\">\r\n        </figure>\r\n        <figure>\r\n            <img src=\"https://n11scdn3.akamaized.net/a1/org/12/82/07/60/23590653.jpg\" alt=\"\">\r\n        </figure>\r\n    </div>\r\n</section>\r\n        </div>', 'apple-iphone-11-128-gb-apple-turkiye-garantili-1107897', 'True', '2021-08-28 12:05:14', '2021-08-28 14:15:47'),
(3, 'TEK YEMEK MASASI & PERA MASA TAKIMI', 'TEK YEMEK MASASI & PERA MASA TAKIMI', 'TEK YEMEK MASASI & PERA MASA TAKIMI', 'images/LOG0QeOfYUVyPOK5UAqqIqJPvgdSMKjra9bigh3M.jpg', 3, 1, 249.00, 10, 1, 18, '<div id=\"tabPanelProDetail\" class=\"tabPanel active\" style=\"display: none;\">\r\n        \r\n\r\n\r\n\r\n\r\n\r\n<div class=\"panelContent\">\r\n    \r\n                    <section class=\"tabPanelItem features\">\r\n        <h4>Ürün Özellikleri</h4>\r\n        \r\n\r\n\r\n    <div>\r\n                <div class=\"feaItem\">\r\n            <span class=\"label\">Marka</span>\r\n\r\n                            \r\n\r\n\r\n\r\n\r\n\r\n    <a class=\"data\" href=\"https://www.n11.com/markalar/Te_Home\">\r\n                <span>Te-Home</span></a>\r\n\r\n            \r\n        </div>\r\n            </div>\r\n    \r\n         </section>     \r\n    \r\n    <section class=\"tabPanelItem productHistories\">\r\n        <h4 class=\"title\">Fiyat Takibi <div class=\"accordion-arrow active\"></div></h4>\r\n\r\n        <div class=\"histories-container hidden\">\r\n            <div class=\"histories-tab\">\r\n                <ul>\r\n                    <li class=\"active\" data-times=\"ONE_WEEK\">Haftalık</li>\r\n                    <li data-times=\"ONE_MONTH\">Aylık</li>\r\n                </ul>\r\n            </div>\r\n            <div id=\"productHistories\"></div>\r\n            <div class=\"rate-of-change\">Değişim Oranı: <b></b></div>\r\n        </div>\r\n    </section>\r\n\r\n    <section class=\"tabPanelItem details\">\r\n        <h4 class=\"title\">Ayrıntılar</h4>\r\n        \r\n        <div>\r\n            <div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;text-align: center;\"> \r\n <i style=\"\"> <font color=\"#ff0000\" face=\"Arial Black\" size=\"4\" style=\"\"> <b style=\"\">BU ÜRÜNÜMÜZÜ İSTER TEK MASA OLARAK&nbsp;</b></font></i>\r\n</div> \r\n<div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;text-align: center;\"> \r\n <i> <font color=\"#ff0000\" face=\"Arial Black\" size=\"4\"> <b>İSTER SANDALYELİ MASA TAKIMI OLARAK SATIN ALABİLİRSİNİZ.</b></font></i>\r\n</div> \r\n<div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;text-align: center;\"> \r\n <i style=\"\"> <a href=\"https://urun.n11.com/yemek-masasi/te-home-wooden-dumano-x-masa-P373700311\"><font color=\"#ff0000\" face=\"Arial Black\" size=\"4\" style=\"\"> <b style=\"\">LÜTFEN SEÇENEKLERDEN BAKINIZ.</b></font></a></i>\r\n</div> \r\n<span style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;\"> </span> \r\n<div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;\"> \r\n <a href=\"https://urun.n11.com/yemek-masasi/te-home-wooden-dumano-x-masa-P373700311\"><img src=\"https://n11scdn2.akamaized.net/a1/1024/ev-yasam/tv-unitesi/te-home-oviedo-tv-unitesi__0430356613156977.jpg\" class=\"lazy\" data-original=\"https://n11scdn2.akamaized.net/a1/1024/ev-yasam/tv-unitesi/te-home-oviedo-tv-unitesi__0430356613156977.jpg\" data-src=\"https://n11scdn2.akamaized.net/a1/1024/ev-yasam/tv-unitesi/te-home-oviedo-tv-unitesi__0430356613156977.jpg\" data-noimage=\"false\" style=\"\"></a>\r\n</div> \r\n<div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;\"> \r\n <br>\r\n</div> \r\n<div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;\"> \r\n <a href=\"https://www.n11.com/magaza/avmpark/masalar-1001198\"><img src=\"https://n11scdn1.akamaized.net/a1/org/ev-yasam/mutfak-masasi/tek-yemek-masasi-pera-masa-takimi__0778686832563481.jpg\" class=\"lazy\" data-original=\"https://n11scdn1.akamaized.net/a1/org/ev-yasam/mutfak-masasi/tek-yemek-masasi-pera-masa-takimi__0778686832563481.jpg\" data-src=\"https://n11scdn1.akamaized.net/a1/org/ev-yasam/mutfak-masasi/tek-yemek-masasi-pera-masa-takimi__0778686832563481.jpg\" data-noimage=\"false\" style=\"\"></a>\r\n</div> \r\n<div style=\"font-family: Arial , Verdana;font-size: 10.0pt;font-style: normal;font-weight: normal;\"> \r\n <br>\r\n</div>\r\n        </div>\r\n    </section>\r\n\r\n                        <section class=\"tabPanelItem delInfo\">\r\n                <h4 class=\"title\">Teslimat Bilgileri</h4>\r\n               <b> En geç 11 Şubat Perşembe günü Bursa şehrinden kargoya verilir. </b> <br> <br>\r\n                <div>\r\n                    \r\n                </div>\r\n            </section>\r\n        \r\n        <section class=\"tabPanelItem excInfo\">\r\n            <h4 class=\"title\">İade / Değişim Bilgileri</h4>\r\n            <div>\r\n                \r\n    \r\n\r\n\r\n    \r\n    \r\n        <div>\r\n                        <style>\r\n    .tabPanelItem.excInfo ul {\r\n        display: inline-block;\r\n        list-style: disc;\r\n        margin: 0 0 10px 18px;\r\n    }\r\n\r\n    .tabPanelItem.excInfo li {\r\n        display: list-item;\r\n        padding: 3px 0;\r\n        width: 100%;\r\n        list-style-type: disc;\r\n    }\r\n\r\n    .tabPanelItem.excInfo p {\r\n        display: inline-block;\r\n        width: 100%;\r\n    }\r\n</style>\r\n<ul>\r\n    <li>n11.com’dan satın aldığınız ürünler için cayma hakkınızı kullanabilirsiniz.* <a href=\"https://www.n11.com/genel/urun-iadesi-2082300\">İade Sürecini Gör</a></li>\r\n    <li>Farklı bir model, beden veya renkle <a href=\"https://www.n11.com/genel/urun-degisimi-2082301\">Ürün Değişimi</a> yapabilirsiniz.</li>\r\n    <li>Ürünü mağazaya ücretsiz göndermek için mağazanın anlaşmalı kargo firmasını tercih edin.</li>\r\n    <li>Ürünle ilgili bilgi almak için <strong>Mağazaya Soru Sor</strong> alanından mağazayla iletişime geçebilirsiniz.</li>\r\n</ul>\r\n<p>*Cayma Hakkı Kullanımı ve İade Şartları, 6502 Sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği hükümlerine tabidir.</p>\r\n                                        \r\n        </div>\r\n    \r\n\r\n            </div>\r\n        </section>\r\n\r\n            \r\n</div>\r\n\r\n    </div>', 'tek-yemek-masasi-pera-masa-takimi', 'True', '2021-08-28 12:05:14', '2021-08-28 14:15:47'),
(6, 'asdasdsas', 'asdasdas', 'asdasdsa', 'images/P2DzI7zWIv0TXMsSwxWy7LLQ8pbQySxqp7fmVmAi.jpg', 1, 2, 111.00, 11, 1, 18, '<p>asfafa</p>', 'adsadas', 'True', '2021-08-28 12:05:14', '2021-08-28 14:15:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int(11) NOT NULL DEFAULT 0,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `subject`, `review`, `IP`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Çok iyi', 'çok beğendimm teşekkürler', '127.0.0.1', 5, 'True', '2021-08-28 12:41:09', '2021-08-28 13:35:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2pkIJ0jF7o4k6acvbXq2y0K3LriWLs0GTw2pMadG', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRDJyZUtON0RPb3ViYzdDczgyS3lTc2FlcFNtOTFISEtiT0ZuV2JITyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZXNzYWdlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRDU2Uua0lTa05CMWd5WUM5ZXF4OTV1Ym5jdUM5SmtHS3dMVFg3L0ZlZUZLdU1qZUQzVkM0MiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkUWdDclc5Z29KYjBqc01LV2xtOUpnZU4yN3FBV1FOcGo3NE1WVnhqMHdZUFZXelNTUXRIS3kiO30=', 1630338727);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpserver` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpemail` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtppassword` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT 0,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `keywords`, `description`, `company`, `address`, `phone`, `fax`, `email`, `smtpserver`, `smtpemail`, `smtppassword`, `smtpport`, `facebook`, `instagram`, `twitter`, `youtube`, `aboutus`, `contact`, `references`, `status`, `created_at`, `updated_at`) VALUES
(1, '2.el Alım Satım Sitesi', '2.el Alım Satım Sitesi', '2.el Alım Satım Sitesi', '2.el Alım Satım Sitesi', '2.el Alım Satım Sitesi', '05554545454', '05545454554', 'sitemiz@info.com', 'smtp.sitemiz.com', 'smtp@email.com', '12345', 578, 'facebook.com', 'instagram.com', 'twitter.com', 'youtube.com', '<h1>Hakkımızda</h1>\r\n\r\n<h2>n11.com</h2>\r\n\r\n<p>Doğuş Planet, e-ticaret sekt&ouml;r&uuml;nde faaliyet g&ouml;stermek &uuml;zere, Doğuş Grubu ile G&uuml;ney Kore&rsquo;nin en b&uuml;y&uuml;k gruplarından SK Group&rsquo;un ortaklığında Haziran 2012&rsquo;de kuruldu.</p>\r\n\r\n<p>Doğuş Planet, SK Group&rsquo;un teknoloji ve inovasyon konusundaki tecr&uuml;besini Doğuş Grubu&rsquo;nun bilgi birikimi, b&ouml;lgesel tecr&uuml;besi ve g&uuml;c&uuml; ile birleştirmektedir.</p>\r\n\r\n<p>Bu g&uuml;&ccedil;l&uuml; ortaklık &ccedil;er&ccedil;evesinde, Doğuş Planet e-ticaret yatırımı olarak, binlerce marka ve mağazayı milyonlarca m&uuml;şteriyle buluşturan a&ccedil;ık pazar platformu alışverişin uğurlu adresi &ldquo;n11.com&rdquo;u a&ccedil;tı.</p>\r\n\r\n<p>n11.com; elektronikten tekstile, mutfak gere&ccedil;lerinden T&uuml;rkiye&rsquo;nin nadide el sanatlarına kadar farklı ihtiya&ccedil; ve zevklere hitap eden milyonlarca &uuml;r&uuml;n, alışveriş yaptık&ccedil;a kazandıran yapısı ile &uuml;yelerine yeni bir alışveriş deneyimi sunuyor. n11.com, m&uuml;şteriler tarafında g&uuml;ven ve kolaylık, mağazalar tarafında ise işbirliği ve e-ticareti geliştirme odaklı bir yaklaşım izlemektedir.</p>\r\n\r\n<p>Siz de alışverişin uğurlu d&uuml;nyasına katılabilir, milyonlarca &uuml;r&uuml;n ve binlerce mağazanın olduğu n11.com&rsquo;da, avantaj dolu alışverişin keyfini &ccedil;ıkartabilirsiniz.</p>\r\n\r\n<p>Uğurlu alışverişler.</p>\r\n\r\n<p><strong>VİZYONUMUZ</strong></p>\r\n\r\n<p>T&uuml;rkiye&rsquo;de ve b&ouml;lgede e-ticaret sekt&ouml;r&uuml;n&uuml;n lideri olmak.</p>\r\n\r\n<p><strong>MİSYONUMUZ</strong></p>\r\n\r\n<p>E-ticaret sekt&ouml;r&uuml;nde hem m&uuml;şterilere hem mağazalara yenilik&ccedil;i hizmetler sunarak T&uuml;rkiye e-ticaret sekt&ouml;r&uuml;n&uuml;n yeniden şekillendirilmesine &ouml;nc&uuml;l&uuml;k etmek.</p>\r\n\r\n<p><strong>STRATEJİMİZ</strong></p>\r\n\r\n<p>Stratejik ortaklıklarla g&uuml;&ccedil;l&uuml; entegrasyona dayanan eko-sistemimizde, m&uuml;şterilere <em>G&uuml;ven</em> ve <em>Kolaylık</em>; mağazalara ise <em>Destek</em> ve <em>&Ouml;zen</em> &uuml;zerine dayalı değer &ouml;nerileri sunmaktır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img src=\"https://n11scdn.akamaized.net/a1/org/16/06/14/59/01/45/73/58/05/84/45/46/1763895754510716556.png\" /></td>\r\n			<td><img alt=\"SK Group\" src=\"https://n11scdn.akamaized.net/a1/org/welcome/logo-sk.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">1951 yılında kurulan Doğuş Grubu, finans, otomotiv, inşaat, medya, turizm ve hizmetler, gayrimenkul, enerji ve yeme-i&ccedil;me olmak &uuml;zere sekiz sekt&ouml;rde faaliyet g&ouml;stermektedir. Yaklaşık 180 şirketi ve 35 bine yakın &ccedil;alışanı ile hizmet verdiği m&uuml;şterilerine; &uuml;st&uuml;n teknoloji, y&uuml;ksek marka kalitesi ve dinamik bir insan kaynağı sunmaktadır.<br />\r\n			<br />\r\n			Doğuş Grubu, hizmetlerini her zaman i&ccedil;in m&uuml;şteri memnuniyeti ve g&uuml;ven ilkelerini temel alarak sunmaktadır. Bunun sonucunda da d&uuml;nya &ouml;l&ccedil;eğinde saygın markalar yaratarak, T&uuml;rkiye&#39;yi b&uuml;t&uuml;n d&uuml;nyada temsil etmektedir. Grup, &ouml;zellikle hizmet sekt&ouml;r&uuml;nde b&ouml;lgesel bir lider olma vizyonunu ortaya koymaktadır.</td>\r\n			<td style=\"vertical-align:top\">1953 yılında kurulan SK Group, hem satış hem aktifler bazında Kore&rsquo;nin en b&uuml;y&uuml;k 3&rsquo;&uuml;nc&uuml; holdingi olarak konumlanmaktadır. 70 bin &ccedil;alışanı ile 2011 yılı itibariyle toplam satışları 142 milyar dolar ve toplam aktifleri 126 milyar dolar seviyesine ulaşmıştır.<br />\r\n			<br />\r\n			SK Group&rsquo;un Kore&#39;de faaliyet g&ouml;steren 94 iştiraki ve 33 &uuml;lkeyi kapsayan bir ortaklık ağı bulunmaktadır. Enerji ve kimyasal ile bilgi ve teknoloji gibi iki ana dayanak noktasına ek olarak, SK Group ayrıca pazarlama ve lojistik end&uuml;strilerinde de faaliyet g&ouml;stermektedir.<br />\r\n			<br />\r\n			SK Planet&rsquo;in e-ticaret platformu 11street, aylık ortalama 18 milyon ziyaret&ccedil;isi ve 2012&rsquo;deki 4.3 milyar dolarlık ticaret hacmi ile Kore&rsquo;nin en b&uuml;y&uuml;k a&ccedil;ık pazar platformları arasında yerini almaktadır.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<h1>İletişim</h1>\r\n\r\n<p><strong>Doğuş Planet Elektronik Ticaret ve Bilişim Hizmetleri A.Ş.</strong><br />\r\nHuzur Mah. Maslak Ayazağa Cad. 4B<br />\r\nSarıyer / İSTANBUL 34396</p>\r\n\r\n<ul>\r\n	<li>Doğuş Planet Mersis No: 0309034533200013</li>\r\n	<li>Doğuş Planet KEP (Kayıtlı e-posta adresi) : dogusplanet@hs01.kep.tr <em> </em>\r\n	<p><em>Kayıtlı elektronik posta (KEP); g&ouml;nderici ve alıcı kimliklerinin belli olduğu, g&ouml;nderi zamanının ve i&ccedil;eriğin değiştirilemediği, uyuşmazlık durumunda hukuki ge&ccedil;erliliği olan g&uuml;venli elektronik posta hizmetidir. KEP adresine e-posta g&ouml;nderebilmek i&ccedil;in KEP adresine sahip olunması, elektronik imza kullanılması ve g&ouml;nderimin yetkili KEP hizmet sağlayıcısı aracılığıyla yapılması gerekmektedir. Yasal bildirimler i&ccedil;indir. Her t&uuml;rl&uuml; işleminiz i&ccedil;in hesabım sayfamızda giriş yaptıktan sonra 7/24 Canlı Destek hizmetimizi kullanabilirsiniz.</em></p>\r\n	<em> </em></li>\r\n	<li>Maslak Vergi Dairesi - Vergi No: 3090345332</li>\r\n	<li>Ticaret Sicil No: 824 112</li>\r\n	<li>Telefon : 0850 333 0011</li>\r\n</ul>', '<p><img alt=\"\" src=\"https://etgigrup.com/wp-content/uploads/2020/04/zorlu-logo.png\" style=\"height:140px; width:200px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://etgigrup.com/wp-content/uploads/2020/04/toros-tarim-logo.png\" style=\"height:140px; width:200px\" /></p>', 'True', '2021-01-22 08:45:50', '2021-01-22 14:14:56');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shopcarts`
--

CREATE TABLE `shopcarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(3, 'Ahmet Kasum', 'ahmetkasum@gmail.com', NULL, '$2y$10$CSe.kISkNB1gyYC9eqx95ubncuC9JkGKwLTX7/FeeFKuMjeD3VC42', NULL, NULL, NULL, NULL, 'profile-photos/BhdoSMM8krFodsJrzlS9hlzNCH9B84tPXtpJRyBH.jpg', '2021-08-28 11:13:52', '2021-08-28 11:24:03', '05350885614', 'istanbul'),
(4, 'Ahmet', 'kasum@gmail.com', NULL, '$2y$10$QgCrW9goJb0jsMKWlm9JgeN27qAWQNpj74MVVxj0wYPVWzSSQtHKy', NULL, NULL, NULL, NULL, NULL, '2021-08-30 12:44:38', '2021-08-30 12:44:38', NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `filemanager`
--
ALTER TABLE `filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `shopcarts`
--
ALTER TABLE `shopcarts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `filemanager`
--
ALTER TABLE `filemanager`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `shopcarts`
--
ALTER TABLE `shopcarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
