-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 23.59
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5g_telkomsel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lokasi`
--

CREATE TABLE `data_lokasi` (
  `No` int(255) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `lat` float(12,6) DEFAULT NULL,
  `long` float(12,6) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_lokasi`
--

INSERT INTO `data_lokasi` (`No`, `lokasi`, `provinsi`, `kategori`, `lat`, `long`, `image`) VALUES
(1, 'Alam_Sutera', 'Banten', 'Cluster Residensial', -6.223789, 106.660538, 'alamsutera.jpg'),
(2, 'Bumi_Serpong_Damai', 'Banten', 'Cluster Residensial', -6.291945, 106.665482, 'bsd.jpg'),
(3, 'Pantai_Indah_Kapuk', 'DKI Jakarta', 'Cluster Residensial', -6.110332, 106.746170, 'pantaikapuk.jpg'),
(4, 'Kelapa_Gading', 'DKI Jakarta', 'Cluster Residensial', -6.159438, 106.897957, 'kelapagading.jpg'),
(5, 'Pondok_Indah', 'DKI Jakarta', 'Cluster Residensial', -6.277209, 106.778954, 'pondokindah.jpeg'),
(6, 'Widya_Candra', 'DKI Jakarta', 'Cluster Residensial', -6.228420, 106.815979, 'widyacandra.jpg'),
(7, 'Menteng_Residences', 'DKI Jakarta', 'Cluster Residensial', -6.195528, 106.836479, 'mentengresidence.jpg'),
(8, 'Pasar_Minggu', 'DKI Jakarta', 'Cluster Residensial', -6.281805, 106.819664, 'pasarminggu.jpg'),
(9, 'Batununggal,_Bandung', 'Jawa Barat', 'Cluster Residensial', -6.928102, 107.639305, 'batununggal.jpg'),
(10, 'Balaikota,_Surakarta', 'Jawa Tengah', 'Cluster Residensial', -7.569383, 110.829346, 'balaikotasurakarta.jpg'),
(11, 'Pakuwon_Residen,_Surabaya', 'Jawa Timur', 'Cluster Residensial', -7.257920, 112.737778, 'pakuwon.jpg'),
(12, 'Padang', 'Sumatera Barat', 'Cluster Residensial', -0.948012, 100.416122, 'padang.jpg'),
(13, 'Setiabudi_Residen,_Medan', 'Sumatera Utara', 'Cluster Residensial', 3.555155, 98.638969, 'setiabudi.jpg'),
(14, 'Balikpapan_Baru', 'Kalimantan Timur', 'Cluster Residensial', -1.237860, 116.852669, 'balikpapanbaru.jpg'),
(15, 'GraPARI_GTG_Medan', 'Sumatera Utara', '5G Hotspot', 3.601026, 98.675705, 'graparimedan.jpg'),
(16, 'GraPARI_Batam_Centre', 'Kepri', '5G Hotspot', 1.137521, 104.007133, 'graparibatam.jpg'),
(425, 'GraPARI_Terminal_3_Soekarno_Hatta', 'DKI Jakarta', '5G Hotspot', -6.115779, 106.670044, 'graparisoetta.jpg'),
(426, 'GraPARI_Solo', 'Jawa Tengah', '5G Hotspot', -7.568374, 110.815643, 'graparisolo.jpg'),
(427, 'GraPARI_Pemuda_Surabaya', 'Jawa Timur', '5G Hotspot', -7.266174, 112.743210, 'graparisurabaya.jpg'),
(428, 'GraPARI_Renon_Denpasar', 'Bali', '5G Hotspot', -8.672365, 115.228561, 'graparidenpasar.jpg'),
(429, 'GraPARI_Balikpapan', 'Kalimantan Timur', '5G Hotspot', -1.241471, 116.860748, 'graparibalikpapan.jpg'),
(430, 'GraPARI_Pettarani_Makassar', 'Sulawesi Selatan', '5G Hotspot', -5.142945, 119.439514, 'graparimakassar.jpg'),
(431, 'Institut_Teknologi_Bandung', 'Jawa Barat', 'Pendidikan', -6.891155, 107.610695, 'itb.jpeg'),
(432, 'Telkom_University', 'Jawa Barat', 'Pendidikan', -6.869414, 107.588531, 'telu.jpg'),
(433, 'Universitas_Padjadjaran', 'Jawa Barat', 'Pendidikan', -6.925961, 107.774666, 'unpad.jpg'),
(434, 'Telkomsel_Smart_Office', 'DKI Jakarta', 'Perkantoran', -6.230460, 106.817673, 'telkomsmart.jpg'),
(435, 'PT._Freeport_Indonesia', 'Papua', 'Perkantoran', -4.521050, 136.883942, 'freeport.jpg'),
(436, 'Sudirman_Central_Business_District_(SCBD)', 'DKI Jakarta', 'Perkantoran', -6.224313, 106.810860, 'scbd.jpg'),
(437, 'Event_PON_XX_Papua', 'Papua', 'Event', -2.535748, 140.447296, 'ponpapua.jpg'),
(438, 'Event_WSBK,_Mandalika', 'NTB', 'Event', -8.898041, 116.305107, 'wsbk.jpeg'),
(439, 'Event_MotoGP,_Mandalika', 'NTB', 'Event', -8.898041, 116.305107, 'motogp.jpg'),
(440, 'KTT_G20_2022', 'Bali', 'Event', -8.828313, 115.215553, 'kttbali.jpeg'),
(441, 'PIDI_4.0', 'DKI Jakarta', 'Pemerintahan', -6.218349, 106.778336, 'pidi.jpg'),
(442, 'Istana_Kepresidenan_RI', 'DKI Jakarta', 'Pemerintahan', -6.170162, 106.824196, 'istana.jpg'),
(443, 'Gedung_Kementrian_BUMN', 'DKI Jakarta', 'Pemerintahan', -6.181411, 106.825546, 'bumn.jpg'),
(444, 'Gedung_Kementrian_Kominfo', 'DKI Jakarta', 'Pemerintahan', -6.174789, 106.822395, 'kominfo.jpg'),
(445, 'Balaikota_Solo', 'Jawa Tengah', 'Pemerintahan', -7.568689, 110.829437, 'balaikotasolo.jpg'),
(446, 'Alun-Alun_Engku_Putri,_Batam', 'Kepri', 'Pemerintahan', 1.128636, 104.054626, 'alunengku.jpg'),
(447, 'Gedung_Walikota_Medan', 'Sumatera Utara', 'Pemerintahan', 3.590597, 98.674820, 'walikotamedan.jpg'),
(448, 'Candi_Borobudur', 'Jawa Tengah', 'Pariwisata', -7.607959, 110.203857, 'borobudur.jpg'),
(449, 'Candi_Prambanan', 'Jawa Tengah', 'Pariwisata', -7.751723, 110.491470, 'prambanan.jpeg'),
(450, 'Danau_Toba', 'Sumatera Utara', 'Pariwisata', 2.807324, 98.616280, 'danautoba.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_lokasi`
--
ALTER TABLE `data_lokasi`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_lokasi`
--
ALTER TABLE `data_lokasi`
  MODIFY `No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
