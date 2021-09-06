
CREATE DATABASE IF NOT EXISTS `stp_final`;
USE `stp_final`;

CREATE TABLE IF NOT EXISTS `homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `toptitle` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `topcontent` varchar(6000) COLLATE utf8_turkish_ci NOT NULL,
  `link` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `subtitle` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `subcontent` varchar(6000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `homepage` (`id`, `photo`, `toptitle`, `topcontent`, `link`, `subtitle`, `subcontent`) VALUES
	(1, 'intro.jpg', 'İÇMEYE DEĞER', '<p> Kaliteli esnaf kahvemizin her fincanı, yerel kaynaklı, elle seçilmiş malzemelerle başlar. Bir kez denediğinizde, kahvemiz günlük sabah rutininize keyifli bir katkı olacak - bunu garanti ediyoruz!</p>', 'Size', 'Size', '<p>Güne başlamak için mağazamıza girdiğinizde, size güler yüzlü hizmet, sıcak bir atmosfer ve her şeyden önce en kaliteli malzemelerle yapılmış mükemmel ürünler sunmaya kendimizi adadık. Memnun değilseniz, lütfen bize bildirin, işleri düzeltmek için elimizden geleni yapacağız!</p>');

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `toptitle` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `title` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `about_us` (`id`, `photo`, `toptitle`, `title`, `content`) VALUES
	(1, 'about.jpg', 'Güçlü Kahve, Güçlü Kökler', 'Kafemiz Hakkında', '<p>1987 yılında yılmaz kardeşler tarafından kurulan işletmemiz, Güney ve Orta Amerika''nın çeşitli bölgelerinde zanaatkar çiftçilerden elde ettiği zengin kahveleri servis etmektedir. Kendimizi dünyayı gezmeye, en iyi kahveyi bulmaya ve kafemizde size geri getirmeye adadık.</p><p>İçeri girdiğiniz andan bitirene kadar çökmekte olan karışımlarımızla şehvetinize kapılacağınızı garanti ediyoruz. son yudumun. Günlük rutininiz için, arkadaşlarınızla bir gezintiye çıkmak veya sadece biraz yalnız zaman geçirmek için bize katılın.</p>');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', '105a9a2d46f64e147097c986076d2164');

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `toptitle` char(50) NOT NULL DEFAULT '0',
  `maintitle` varchar(500) NOT NULL DEFAULT '0',
  `adress` char(250) NOT NULL DEFAULT '0',
  `phone` char(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `store` (`id`, `toptitle`, `maintitle`, `adress`, `phone`) VALUES
	(1, 'ZİYARETE GELİN', 'Çalışma Saatleri', '<p><i><strong>Cumhuriyet Caddesi</strong></i><br><i>Selçuk Mahallesi, Muratpaşa/Antalya&nbsp;</i></p>', '0 (242) 123 45 67');

CREATE TABLE IF NOT EXISTS `openingtime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` char(50) NOT NULL,
  `time` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `openingtime` (`id`, `day`, `time`) VALUES
	(1, 'Pazartesi', '09:00 - 23:00'),
	(2, 'Salı', '09:00 - 23:00'),
	(3, 'Çarşamba', '09:00 - 23:00'),
	(4, 'Perşembe', '09:00 - 23:00'),
	(5, 'Cuma', '09:00 - 23:00'),
	(6, 'Cumartesi', '10:00 - 00:00'),
	(7, 'Pazar', '10:00 - 00:00');

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `title` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `header` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `products` (`id`, `photo`, `title`, `header`, `content`) VALUES
	(1, 'products-01.jpg', 'Çay ve Kahveler', 'MÜKEMMELLİK İÇİN HARMANLANMIŞ', '<p class="mb-0">İşimizle gurur duyuyoruz ve bu gösteriyor. Bizden her içecek siparişi verdiğinizde, bunun yaşamaya değer bir deneyim olacağını garanti ediyoruz. Dünyaca ünlü Venezuela Cappuccino''muz, serinletici bir buzlu bitki çayı veya bir fincan özel kaynaklı sade kahve gibi basit bir şey olsun, daha fazlası için geri geleceksiniz.</p>'),
  (2, 'products-02.jpg', 'Mutfak ve Hamurişi', 'LEZZETLİ İKRAMLAR, İYİ YEMEKLER', '<p class="mb-0">Mevsimlik menümüzde lezzetli atıştırmalıklar, unlu mamüller ve hatta kahvaltı veya öğle yemeği için mükemmel olan tam öğünler bulunur. Özel ürünler için premium satıcıların yanı sıra, mümkün olduğunca yerel, organik çiftliklerden malzemelerimizi tedarik ediyoruz.</p>'),
	(3, 'products-03.jpg', 'Özel Karışımlar', 'DÜNYANIN DÖRT BİR YANINDAN', '<p class="mb-0">En kaliteli kahve için dünyayı gezmek gurur verici bir şeydir. Bizi ziyaret ettiğinizde, her zaman dünyanın dört bir yanından, özellikle Orta ve Güney Amerika''daki bölgelerden yeni karışımlar bulacaksınız. Karışımlarımızı küçükten büyüğe toplu miktarlarda satıyoruz. Daha fazla bilgi için lütfen bizi şahsen ziyaret edin.</p>');
