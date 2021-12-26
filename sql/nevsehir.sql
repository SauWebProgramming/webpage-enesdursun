-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2021, 16:26:50
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nevsehir`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gezilecekyerler`
--

CREATE TABLE `gezilecekyerler` (
  `id` int(11) NOT NULL,
  `GeziYeri` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `GeziAciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gezilecekyerler`
--

INSERT INTO `gezilecekyerler` (`id`, `GeziYeri`, `GeziAciklama`) VALUES
(1, 'Göreme Açık Hava Müzesi', 'Bölgedeki en önemli turistik mekanlardan biridir Göreme Açık Hava Müzesi. Göreme sınırları içerisinde yer alır ve ilçe merkezine 2 kilometre mesafededir. Geçmişin izlerini günümüze taşıyan müze, doğal oluşum sonucu meydana gelmiş bir vadinin başında yer almaktadır. Göreme Açık Hava Müzesi, Kayseri Başpiskoposu Aziz Basil tarafından yaptırılmıştır. 1000 yıl kadar eğitime devam eden müze içerisinde, şapel, yemekhane, kilise, mutfak, manastır gibi alanlar yer alır.'),
(7, 'Hacı Bektaş-ı Veli Müzesi', 'Nevşehir’in Hacıbektaş ilçesindeki en sık ziyaret edilen mekanlar arasında gelir Hacı Bektaş Veli Külliyesi’nde 1964 yılında açılmış olan Hacı Bektaş Veli Müzesi. Üç avludan oluşan müze, Etnografya Müzesi olarak hizmete girmiştir.'),
(8, 'Derinkuyu Yeraltı Şehri', 'Bölgeye gelenlerin ilk ziyaret etmek istedikleri, en çok merak ettikleri yerlerden biridir Kapadokya’nın rengine renk katan Derinkuyu Yeraltı Şehri. 85 metre derinliğinde olan yeraltı şehri, en derin ve en geniş yerleşim alanlarından biridir. Sekiz katlıdır ve içerisinde; ahırlar, mutfak, okul ve yemekhane yer alır. İçeriye adım attığınız anda dünya ile bağınız kopacak ve eski dönemlere kısa bir yolculuk yapacaksınız.'),
(9, 'Temenni Tepesi', 'Mistik bir atmosferi olan Kapadokya Bölgesi’ndeki Ürgüp’ün güzelliklerini seyredebileceğiniz en güzel yerlerden biridirTemenni Tepesi. Peri bacaları, kaleler, camiler, kiliseler ve doğal güzellikler buradan daha bir güzel görünür sanki gözünüze. Tüm karmaşadan sıyrılıp, bölgenin büyüleyen güzelliklerini en tepeden seyretmek ruhunuzu aydınlatacak adeta. Burada, Temenni Tepesi’nin manzarası eşliğinde leziz gözlemelerden yiyip, yanında da sıcacık bir çay içebilirsiniz.'),
(11, 'Ihlara Vadisi', 'Kapadokya Bölgesi’ndeki en güzel, en özel doğal güzelliklerden biridir göğe kadar uzanan ağaçlarla çevrili Ihlara Vadisi. Kartpostalları aratmayan ve doğanın en güzel renklerini sunan vadi, Melendiz Çayı’nın görüntüsüyle birleşip benzersiz bir güzellik sunmakta ziyaretçilerine. Uzun bir yürüyüş parkuru olan vadiye girmeden önce, yolun başında vadiyi anlatan detaylı bir plan zaten karşılıyor olacak sizleri. Eğer hiç gitmediyseniz vadi içerisinde bulunan kiliseleri gördüğünüzde çok şaşıracaksınız. Yüzden fazla kilise olmasına rağmen sadece birkaçı gezilebilir durumda.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `Tarih` date NOT NULL,
  `HaberAdi` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `HaberIcerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `Tarih`, `HaberAdi`, `HaberIcerik`) VALUES
(2, '2016-11-11', 'Nevsehir Haber - 287 ', 'Selam\r\nSelam\r\nSelam\r\nSelam\r\nSelam\r\nSelam\r\nv\r\nvv\r\nSelam'),
(7, '2017-10-19', 'Nevsehir de Güneş açti', 'Nevsehir de Güneş açtiNevsehir de Güneş açtiNevsehir de Güneş açtiNevsehir de Güneş açti\r\nNevsehir de Güneş açtiNevsehir de Güneş açtiNevsehir de Güneş açti\r\nNevsehir de Güneş açtiNevsehir de Güneş açti\r\nNevsehir de Güneş açti\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkinda`
--

CREATE TABLE `hakkinda` (
  `Hakkinda` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `s1` text COLLATE utf8_turkish_ci NOT NULL,
  `s2` text COLLATE utf8_turkish_ci NOT NULL,
  `s3` text COLLATE utf8_turkish_ci NOT NULL,
  `s4` text COLLATE utf8_turkish_ci NOT NULL,
  `s5` text COLLATE utf8_turkish_ci NOT NULL,
  `s6` text COLLATE utf8_turkish_ci NOT NULL,
  `s7` text COLLATE utf8_turkish_ci NOT NULL,
  `s8` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `hakkinda`
--

INSERT INTO `hakkinda` (`Hakkinda`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES
('Nevsehir Hakkinda', 'Kent, Orta Çağ ve Yeni Çağ\'da, Seandos; Nissa ve Muşkara adıyla anılıyordu.', 'Anadolu, Büyük Selçuklu Devleti\'nin elindeyken eski adı Nissa\'nın yerinde Muşkara adında bir köy vardı.', 'Muşkara sağlam yapılı anlamındadır. 18 evlik küçük bir köy olan Muşkara, Ürgüp\'e bağlıydı.', 'Tarihçi Charles Texier\'e göre; 12. yüzyıl sonlarına doğru, yani Selçuklular zamanında, Nissa şehri halkı yavaş yavaş şehirden ayrılarak, başka bir yere göç etmişlerdir.', 'Çevre ile ilgili bilgi veren tarihçiler, bu yeni göç yerinin Muşkara olduğunu yazarlar.', 'Osmanlılar döneminde ise Muşkara yerine Nevşehir kullanılmaya başlandı.', 'IV. Mehmet\'in oğlu Şehzade III. Ahmet\'in sır katibi, Muşkaralı İbrahim, Nevşehirli Damat İbrahim Paşa olarak sadrazamlığa getirildiğinde doğduğu kent olan Muşkara\'da büyük bayındırlık hareketine girişti.', 'İmaretler, camiler, medreseler, hamam ve çeşmeler yaptırdı. Muşkara adını değiştirerek, kente Yenişehir anlamına gelen Nevşehir adını verdi.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `email` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `email`, `sifre`, `yetki`) VALUES
(3, 'admin@admin.com', 'admin', 100),
(4, 'enesdursun@gmail.com', 'enesdursun', 100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(11) NOT NULL,
  `resim` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `resim`, `aciklama`) VALUES
(2, 'images/resim2Urgup.jpg', 'Nevsehir - Urgup'),
(4, 'images/resim3Urgup.jpg', 'NEVSEHIR-URGUP');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `resim` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(256) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `resim`, `aciklama`) VALUES
(1, 'images/sslider1.jpg', 'NEVSEHIR'),
(2, 'images/sslider2.jpg', 'NEVSEHIR'),
(3, 'images/sslider3.jpg', 'NEVSEHIR'),
(8, 'images/sslider4.jpg', 'NEVSEHIR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ustmenu`
--

CREATE TABLE `ustmenu` (
  `SayfaIsmi` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `Hakkinda` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `Haberler` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `Resimler` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `GezilecekYerler` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `Iletisim` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `Panel` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `Giris` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `UyeOl` varchar(32) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ustmenu`
--

INSERT INTO `ustmenu` (`SayfaIsmi`, `Hakkinda`, `Haberler`, `Resimler`, `GezilecekYerler`, `Iletisim`, `Panel`, `Giris`, `UyeOl`) VALUES
('NEVSEHIR', 'Hakkinda', 'Haberler', 'Resimler', 'Gezilecek Yerler', 'Iletisim', 'Panel', 'Giris', 'UyeOl');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `isim` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `isim`, `yorum`) VALUES
(1, 'ABC', 'ABC');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumonay`
--

CREATE TABLE `yorumonay` (
  `id` int(11) NOT NULL,
  `isim` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumonay`
--

INSERT INTO `yorumonay` (`id`, `isim`, `yorum`) VALUES
(5, 'Enes Dursun', 'WebTeknoloji Odev\r\nWebTeknoloji Odev\r\nWebTeknoloji Odev\r\nWebTeknoloji Odev\r\nWebTeknoloji Odev\r\nWebTeknoloji Odev');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gezilecekyerler`
--
ALTER TABLE `gezilecekyerler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumonay`
--
ALTER TABLE `yorumonay`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gezilecekyerler`
--
ALTER TABLE `gezilecekyerler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumonay`
--
ALTER TABLE `yorumonay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
