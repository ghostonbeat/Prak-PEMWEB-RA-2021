-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2021 pada 16.57
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mrk` varchar(50) NOT NULL,
  `typ` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `stg` varchar(50) NOT NULL,
  `gpu` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `hrg` bigint(50) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id`, `mrk`, `typ`, `cpu`, `ram`, `stg`, `gpu`, `img`, `hrg`) VALUES
(1, 'Acer', 'Porsche Design', 'Intel® Core™ i7-1165G7', '16 GB LPDDR4X', '1 TB NVMe™ PCIe® SSD', 'Nvidia GeForce® MX350', 'acer_porsche.PNG', 42999000),
(2, 'Apple', 'MacBook Pro 16\"', 'Apple M1 Max CPU 10-core', '32 GB Unified Memory', '1 TB SSD Storage', 'Apple M1 Max GPU 32-core', 'apple_pro16_m1_max.png', 50499000),
(3, 'Dell', 'Alienware X17', 'Intel® Core™ i9 11980HK', '64 GB DDR4 XMP', '2x2 TB PCIe® NVMe™ SSD', 'NVIDIA® GeForce RTX™ 3080', 'dell_awx17.PNG', 70299000),
(4, 'Asus', 'Vivobook S14 M433IA', 'AMD Ryzen™ 7 4700U', '8 GB DDR3', '512 GB M.2 NVMe™ PCIe® 3.0 SSD', 'AMD Radeon™ Graphics', 'asus_vivobook.PNG', 11299000),
(5, 'MSI', 'GS66 Stealth 11UH', '11th Gen. Intel® Core™ i9', '32 GB DDR4', '1TB PCIe® NVMe™ SSD', 'NVIDIA® GeForce RTX™ 3080', '619e9925a289c.png', 67999000),
(6, 'HP', 'Pavilion 15-ec2010AX', 'AMD Ryzen™ 5', '16 GB DDR4', '512 GB PCIe® NVMe™ M.2 SSD', 'NVIDIA® GeForce RTX™ 3050', '619ea47b1b5d8.png', 16499000),
(8, 'Acer', 'Swift 5 Ultrathin Notebook', 'Intel® Core™ i7-1065G7', '16 GB LPDDR4', '512 GB NVMe™ PCIe® 3.0 SSD', 'Nvidia GeForce® MX350', '619eba27dfa82.png', 14064030),
(9, 'Acer', 'Predator Triton 900', 'Intel® Core™ i7-9750H', '2*16 GB DDR4', '2*256 GB NVMe™ PCIe® 3.0 SSD', 'NVIDIA® GeForce® RTX 2080', '619ea9c1c9202.png', 69999000),
(10, 'Dell', 'Inspiron 17 2-in-1', 'Intel® Core™ i5-1135G7', '8 GB DDR4', '512 GB PCIe® NVMe™ SSD', 'NVIDIA® GeForce® MX350', '619ebbd9d55d9.png', 14935000),
(11, 'HP', 'ENVY x360 13-ay0006au', 'AMD Ryzen™ 7', '16 GB DDR4', '512 GB PCIe® NVMe™ M.2 SSD', 'AMD Radeon™ Graphics', '619ebc5a36701.png', 17999000),
(12, 'Asus', 'ExpertBook B9450FA', 'Intel® Core™ i7-10510', '16 GB LDDR3', '1 TB PCIe® M.2 NVMe™ SSD', 'Integrated Intel® UHD Graphics 620', '619ebcdb2ae38.png', 23999000),
(14, 'Apple', 'MacBook Air', 'Apple M1 CPU 8‑core', '8 GB Unified Memory', '512 GB SSD Storage', 'Apple M1 GPU 8‑core', '619ebdd20be25.png', 21299000),
(15, 'Dell', 'XPS 13 2-in-1 Laptop', 'Intel® Core™ i7-1165G7', '16 GB LPDDR4X', '256 GB PCIe® NVMe™ SSD', 'Intel® Iris Xe Graphics', '619ebe50e4d7f.png', 19149000),
(16, 'HP', 'Spectre x360 Convertible 13-aw2510TU', 'Intel® Evo™ 11th Gen Core™ i7', '16 GB LPDDR4X', '1 TB PCIe® NVMe™ TLC M.2 SSD', 'Intel® Iris® Xᵉ Graphics', '619ebecaa4e57.png', 25999000),
(17, 'Asus', 'Zenbook Pro Duo 15 OLED (UX582)', 'Intel® Core™ i9-10980HK', '32 GB DDR4', '1 TB M.2 NVMe™ PCIe® 3.0 SSD', 'NVIDIA® GeForce® RTX3070', '619ebf7121314.png', 41999000),
(18, 'MSI', 'GE76 Raider Dragon Edition Tiamat', '11th Gen. Intel® Core™ i9', '32 GB LPDDR4X', '1TB PCIe® NVMe™ SSD', 'NVIDIA® GeForce RTX™ 3080', '619ebfe08c0db.png', 69999000),
(19, 'Apple', 'MacBook Pro 14', 'Apple M1 Pro CPU 10-core', '16 GB Unified Memory', '1 TB SSD Storage', 'Apple M1 Pro GPU 16-core', '619ec07268294.png', 44999000),
(21, 'MSI', 'Alpha 17 B5EEK', 'AMD Ryzen™ 7 5000 H', '16 GB DDR4', '512GB PCIe® NVMe™ SSD', 'AMD Radeon™ RX 6600M', '61a24313e5d1d.png', 18999000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
