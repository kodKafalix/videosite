-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Tem 2017, 19:00:35
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `video`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videolar`
--

CREATE TABLE `videolar` (
  `id` int(11) NOT NULL,
  `videoadres` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `etiket` varchar(225) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videolar`
--

INSERT INTO `videolar` (`id`, `videoadres`, `aciklama`, `etiket`) VALUES
(24, '<iframe width="560" height="315" src="https://www.youtube.com/embed/_5L2y_rCo84" frameborder="0" allowfullscreen></iframe>', 'DÃ¼ÄŸÃ¼n Dernek', 'dÃ¼ÄŸÃ¼n, dernek'),
(25, '<iframe width="560" height="315" src="https://www.youtube.com/embed/EinY7gtSy8Y" frameborder="0" allowfullscreen></iframe>', 'dÃ¼ÄŸÃ¼n dernek kamera', 'dÃ¼ÄŸÃ¼n, dernek, kamera'),
(26, '<iframe width="560" height="315" src="https://www.youtube.com/embed/axNi1vznW34" frameborder="0" allowfullscreen></iframe>', 'dÃ¼ÄŸÃ¼n dernek 2 sÃ¼nnet', 'dÃ¼ÄŸÃ¼n, dernek, 2, sÃ¼nnet');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `videolar`
--
ALTER TABLE `videolar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
