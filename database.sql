-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 Şub 2024, 12:23:35
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sigorta`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `Id` int NOT NULL,
  `Description` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`Id`, `Description`) VALUES
(0, 'Trafik sigortası, kasko, konut sigortası, iş yeri sigortası, seyahat sigortası, sağlık sigortası, ferdi kaza sigortası, nakliyat sigortası, all risk sigortası, kefalet sigortası ve deprem sigortası (Dask) gibi geniş bir ürün yelpazesi sunarak, müşterilerimizin her türlü sigorta ihtiyacını karşılamak amacıyla faaliyet gösteriyoruz.&lt;br&gt;Profesyonel ekibimiz, satış öncesi, satış süreci ve hasar sürecinde &lt;b&gt;7 gün 24 saat&lt;/b&gt; boyunca hizmet vererek, müşterilerimizin her an yanında olmanın güvencesini sunuyor. Satış öncesinde, sigorta sürecinizin başlangıcında sizlere özel teklifler sunmak adına özenle çalışıyoruz. Sizin için en uygun sigorta çözümlerini belirlemek ve ihtiyaçlarınıza özel teklifler sunmak için alanında uzman ekibimizle birlikte çalışıyoruz.&lt;br&gt;Müşteri memnuniyetini öncelikli hedefimiz olarak benimseyerek, sigorta süreçlerinizin sorunsuz ve güvenilir bir şekilde yönetilmesini sağlıyoruz. Güçlü bir müşteri odaklı yaklaşımla, sigortanızın gereksinimlerinize uygun olması ve sizlere mükemmel bir hizmet sunmamız için sürekli olarak çaba harcıyoruz.&lt;br&gt;Sigorta ihtiyaçlarınızda geniş ürün yelpazemiz, profesyonel ekibimiz ve kesintisiz hizmet anlayışımız ile sizlere kaliteli bir sigorta deneyimi yaşatmayı amaçlıyoruz.&lt;br&gt;');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`Id`, `Name`, `Mail`, `Password`) VALUES
(1, 'Salih Gursoy', 'admin@gmail.com', '$2y$10$ri7FWDVbpRDTWBEw20MIeOrEPLETmYHnP0MfdsFSf6V7U.SLaL2Gq');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` int NOT NULL,
  `ImageUrl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`Id`, `Title`, `Category`, `ImageUrl`, `Description`, `Date`) VALUES
(1, 'Trafik Sigortası Hasarsızlık İndirimi Nasıl Hesaplanır?', 2, 'assets/img/blog/blog-1.jpg\r\n', 'Trafik sigortası hasarsızlık indirimi, bir sigortalının belirli bir süre boyunca kaza yapmaması veya kaza sonucu yapılan hasarlar nedeniyle poliçeden talep etmemesi durumunda elde ettiği bir indirimdir. Bu indirim sürücülerin sigorta primlerini düşürerek tasarruf etmelerine yardımcı olur. Hasarsızlık indirimi, sigorta şirketlerinin müşterilere daha düşük prim teklifleri sunmalarının bir yoludur<br>Trafik sigortası hasarsızlık indirimi aşağıdaki şekilde çalışır:<br>1.Hasarsızlık Sınıfları: Sigorta şirketleri, hasarsızlık indirimini belirli hasarsızlık sınıflarına göre belirler. Her yıl kaza yapmayan veya hasar bildirimi yapmayan sürücüler bir üst hasarsızlık sınıfına yükselir. Bu sınıflar genellikle Sıfır (0) hasarsızlık sınıfından başlar ve birkaç yıl boyunca artar.<br>2.İndirim Oranları: Her hasarsızlık sınıfı, sigorta şirketleri tarafından belirlenen bir indirim oranına sahiptir. Her yıl hasarsızlık sınıfı yükseldikçe, indirim oranı artar ve sürücüler daha fazla indirim alır. İndirim oranları sigorta şirketinden şirkete farklılık gösterebilir.<br>3.Hasar Bildirimi: Hasar bildirimi yapılması durumunda, sürücünün hasarsızlık indirimi sınıfı düşebilir. Örneğin, bir kaza sonucu sigorta şirketine hasar bildirimi yapılırsa, sürücünün hasarsızlık sınıfı bir veya daha fazla düşebilir. Bu durumda, sürücü daha az hasarsızlık indirimi alır ve sigorta primi artabilir.<br>4.Hasarsızlık Koruma: Bazı sigorta şirketleri hasarsızlık koruma poliçeleri sunar. Bu poliçeler sigortalının belirli bir süre içinde sınırlı sayıda hasar bildirimi yapabilmesine izin verir. Hasarsızlık koruma ile sürücü, bir hasar bildirimi yapması durumunda hasarsızlık indirimi sınıfının düşmesini önleyebilir ve primlerini aynı seviyede tutabilir.<br>5.Yeni Poliçe Başlatma: Sürücü, bir sigorta şirketinden yeni bir poliçe başlatırsa, genellikle hasarsızlık indirimi sıfır (0) hasarsızlık sınıfından başlar. Ancak, bazı sigorta şirketleri, daha önceki sigorta poliçesinde kazasızlık indirimi olan sürücülere işbirliği yapma indirimi sunabilir.<br>6.Trafik sigortası hasarsızlık indirimi, sürücülerin kaza yapmamaya veya hasar bildiriminde bulunmamaya teşvik etmek için bir motivasyon kaynağıdır. Düşük primlerle daha kapsamlı sigorta kapsamı elde etmek isteyen sürücüler için önemli bir faktördür.<br>', '2024-01-20'),
(2, 'Sağlık Sigortası Nedir ve Neden Gereklidir?', 5, 'assets/img/blog/blog-2.jpg', 'Sağlık sigortası, belirli bir prim karşılığında sigortalının tıbbi masraflarını karşılamayı taahhüt eden bir sigorta türüdür.&lt;br&gt;Sağlık sigortası, sağlık hizmetlerinin yüksek maliyetleri göz önüne alındığında gereklidir. Bir hastalık veya kaza durumunda, tıbbi faturaların sigorta şirketi tarafından karşılanması, kişinin finansal olarak korunmasını sağlar.&lt;br&gt;Sağlık sigortası, düzenli olarak sağlık kontrolü, rutin tedaviler ve ilaçlar gibi temel sağlık hizmetleri için de kapsam sağlar. Bu, kişinin sağlık durumunu takip etmesine ve sağlık sorunlarını erken teşhis etmesine yardımcı olur.&lt;br&gt;Ayrıca, acil durumlarda veya ciddi bir tıbbi durumda hastaneye yatış, ameliyat veya diğer yoğun tedaviler için finansal koruma sağlar.&lt;br&gt;Sağlık sigortası, sigorta şirketleri ile anlaşmalı sağlık kuruluşlarında daha uygun fiyatlarla hizmet almayı sağlar. Bu da sigortalının sağlık hizmetlerinden daha fazla yararlanmasını sağlar.&lt;br&gt;Sağlık sigortası, sigortalının ve ailesinin geleceğini korumak için önemlidir. Beklenmedik sağlık sorunları ortaya çıkabilir ve bu durumda sağlık sigortası, sigortalının finansal olarak sarsılmamasını sağlar.&lt;br&gt;Ayrıca, bazı ülkelerde sağlık sigortası yasal bir zorunluluktur. Bu nedenle, sağlık sigortası poliçesine sahip olmak, yasalara uyumu sağlar.&lt;br&gt;', '2024-01-21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`Id`, `Title`) VALUES
(1, 'Deprem Sigortaları'),
(2, 'Trafik Sigortaları'),
(5, 'Sağlık Sigortaları'),
(6, 'Kasko Sigortaları');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TCNo` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DocumentNo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Plate` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Meters` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BuildingYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Message` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RequestType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageUrl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SocialMedia1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SocialMedia2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SocialMedia3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SocialMedia4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`Id`, `Name`, `Status`, `ImageUrl`, `SocialMedia1`, `SocialMedia2`, `SocialMedia3`, `SocialMedia4`, `Phone`) VALUES
(1, 'Hamza Kerem Yıldırım', 'Yönetici', 'https://i.hizliresim.com/92ehob1.jpg', 'https://twitter.com/home', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '(541) 611-1461'),
(2, 'Salih Gürsoy', 'Uzman Sigorta Danışmanı', 'assets/img/team/team-3.jpg', 'https://twitter.com/home', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '5416111461'),
(3, 'Aylin Yıldırım', 'Pazarlama ve İletişim Koordinatörü', 'assets/img/team/team-4.jpg', 'https://twitter.com/home', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '5464563443'),
(4, 'Burcu Demir', 'Hasar Yönetimi Uzmanı', 'deneme', 'https://twitter.com/home', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', '(511) 456-7899');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `testimonials`
--

INSERT INTO `testimonials` (`Id`, `Name`, `Title`, `Description`) VALUES
(1, 'Ahmet Çalık', 'Kurucu', 'Sigorta şirketi sayesinde işyerimizi ve çalışanlarımızı güvence altına almak konusunda mükemmel bir deneyim yaşadık.'),
(2, 'Zeynep Kaya', 'Finans Müdürü', 'Sigorta poliçeleri konusunda sundukları profesyonel hizmet ve çözümlerle, maliyetleri düşürdük ve risklerimizi en aza indirdik.'),
(3, 'Mustafa Şensoy', 'Girişimci', 'Seyahat sigortası ile ilgili hızlı ve etkili çözümleri sayesinde, yurtdışı iş seyahatlerimizde her zaman güvende hissettik.'),
(4, 'Ayşe Demirtaş', 'Proje Yöneticisi', 'Hasar yönetimi ekibi, anında müdahale ederek işyerimizde meydana gelen su baskını hasarını hızlıca çözdü.'),
(5, 'Cem Özgür', 'Satış Temsilcisi', 'Sigorta şirketi, sunduğu kasko sigortası ile aracımızın hasarı durumunda bize hızlı ve adil bir şekilde yardımcı oldu.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
