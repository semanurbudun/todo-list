-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2024, 16:10:21
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `todo_list`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yapilacaklar`
--

CREATE TABLE `yapilacaklar` (
  `id` int(254) NOT NULL,
  `adi` varchar(254) NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp(),
  `durum` int(11) NOT NULL,
  `oncelikdurum` int(11) DEFAULT NULL,
  `icerik` longtext NOT NULL,
  `bitistarih` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yapilacaklar`
--

INSERT INTO `yapilacaklar` (`id`, `adi`, `tarih`, `durum`, `oncelikdurum`, `icerik`, `bitistarih`) VALUES
(1, 'Görüntü İşleme Ödev', '2024-05-26', 1, 1, '   yolo ile başla ', '2024-05-14'),
(8, 'Web Programlama', '2024-05-08', 1, 1, 'To do list.', '2024-05-09'),
(9, 'Web Programlama ÖDEV ', '2024-05-12', 0, NULL, ' XDFGH', '2024-05-11');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yapilacaklar`
--
ALTER TABLE `yapilacaklar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yapilacaklar`
--
ALTER TABLE `yapilacaklar`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
