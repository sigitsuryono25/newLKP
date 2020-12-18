-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2020 at 09:39 
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u7756826_lautku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `crated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`email`, `nama`, `password`, `crated_on`) VALUES
('project.lautku259@gmail.com', 'Admin Lautku', '0f22928ffdbec6f6170e201a487d6bfb', '2020-11-12 09:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ads`
--

CREATE TABLE IF NOT EXISTS `tb_ads` (
  `_id_ads` bigint(20) NOT NULL,
  `ads_title` varchar(200) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `kargo_dari` int(11) DEFAULT NULL,
  `kargo_tujuan` int(11) DEFAULT NULL,
  `kargo_jumlah_muatan` varchar(10) DEFAULT NULL,
  `satuan` enum('Kg','Ton','m3','MT') NOT NULL,
  `kargo_jenis` int(11) DEFAULT NULL,
  `jasa_alamat` longtext,
  `jasa_id_kategori` int(11) DEFAULT NULL,
  `dilihat` bigint(20) DEFAULT NULL,
  `dichat` bigint(20) DEFAULT NULL,
  `_user_id` bigint(20) NOT NULL,
  `slug_title` varchar(200) NOT NULL,
  `_id_pelabuhan` int(11) NOT NULL,
  `_id_kategori` int(11) NOT NULL,
  `posting_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expired_on` datetime DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `is_premium` enum('Y','N','W') NOT NULL DEFAULT 'N',
  `is_actived` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`_id_ads`),
  KEY `tb_ads_ibfk_1` (`_id_kategori`),
  KEY `kargo_jenis` (`kargo_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ads`
--

INSERT INTO `tb_ads` (`_id_ads`, `ads_title`, `harga`, `deskripsi`, `kargo_dari`, `kargo_tujuan`, `kargo_jumlah_muatan`, `satuan`, `kargo_jenis`, `jasa_alamat`, `jasa_id_kategori`, `dilihat`, `dichat`, `_user_id`, `slug_title`, `_id_pelabuhan`, `_id_kategori`, `posting_on`, `expired_on`, `start_at`, `is_premium`, `is_actived`) VALUES
(1603872683548, 'beli barang', 2500000, 'barang desk', NULL, NULL, NULL, 'Kg', NULL, NULL, NULL, 19, 2, 1603444788, '', 100002, 2, '2020-10-28 08:12:26', NULL, NULL, 'N', 'Y'),
(1603874757268, 'Kirim Kargo Container Tronton', 25000000, 'jasa pengiriman kargo ', 100001, 100007, '150000', 'Kg', 2, NULL, NULL, 4, NULL, 1603425076215, '', 100001, 1, '2020-10-28 08:48:03', '2020-12-20 00:00:00', '2020-11-20 08:12:17', 'Y', 'Y'),
(1603877467929, 'jasa maritime', 1500000, 'deskripsi', NULL, NULL, NULL, 'Kg', NULL, 'aceh', 1, 6, NULL, 1603877282, '', 100001, 3, '2020-10-28 09:31:52', NULL, NULL, 'N', 'Y'),
(1604069825486, 'GPS furuno', 5250000, 'GPS furuno type GP38\nbahasa Indonesia\nlebih akurat dan easy use.\n\nharga blm termasuk ongkir', NULL, NULL, NULL, 'Kg', NULL, NULL, NULL, 11, NULL, 1604063894, '', 100000, 2, '2020-10-30 14:57:59', NULL, NULL, 'W', 'Y'),
(1604069887888, 'kirim cargo', 350000, '350000/ ton\nbisa lumpsum per trip 350 jt', 100005, 100008, '2000', 'Kg', 3, NULL, NULL, 13, NULL, 1604063894, '', 100012, 1, '2020-10-30 15:00:01', NULL, NULL, 'N', 'Y'),
(1604310581956, 'kapal kargo 2200 ton', 450000000, 'di sewakan TC per bulan , kapasitas 2200 ton, ada Kren PH, kapal Jepang th 1995 ', NULL, NULL, NULL, 'Kg', NULL, NULL, NULL, 22, NULL, 1604063894, '', 100000, 2, '2020-11-02 09:52:28', NULL, NULL, 'Y', 'Y'),
(1604664566580, 'Jasa Bunker BBM servis', 6800000, 'jasa servis bunker BBM dan air di pelabuhan Tanjung emas Semarang, harga nego, Utk update harga bisa hubungi segera', NULL, NULL, NULL, 'Kg', NULL, 'jl Serma Usman janatin no 16 Semarang', 1, 4, NULL, 1604063894, '', 100018, 3, '2020-11-06 12:15:59', NULL, NULL, 'Y', 'Y'),
(1604665153862, 'Jual GPS Furuno GP 39', 6250000, 'kondisi baru, GPS Furuno beberapa type , bergaransi', NULL, NULL, NULL, 'Kg', NULL, NULL, NULL, 10, NULL, 1604063894, '', 100012, 2, '2020-11-06 12:21:18', NULL, NULL, 'W', 'Y'),
(1604665601048, 'Jasa keagenan kapal', 2500000, 'siap melayani kapal anda di pelabuhan Tanjung Mas Semarang, dengan harga bersaing, bisa hubungi kami. \nemail : tmbp_group@yahoo.com', NULL, NULL, NULL, 'Kg', NULL, 'jl Serma Usman janatin no 16 Semarang', 1, 13, NULL, 1604063894, '', 100018, 3, '2020-11-06 12:29:31', NULL, NULL, 'N', 'Y'),
(1604665917811, 'Servis Mesin kapal', 7000000, 'menerima jasa servis mesin kapal, Terutama mesin merine, \nAkasaka, Hanshin, Yanmar, Cat, Mitsubishi, sumiyoshi, Nissan.\n\nseluruh Indonesia', NULL, NULL, NULL, 'Kg', NULL, 'Kendal Kaliwungu', 1, 16, NULL, 1604063894, '', 100018, 3, '2020-11-06 12:34:29', NULL, NULL, 'N', 'Y'),
(1604804781049, 'Jasa Asuransi Kapal', 15000000, 'asuransi mesin dan lambung kapal\nasuransi kerangka kapal\nasuransi hidup crew kapal\nasuransi P&I club', NULL, NULL, NULL, 'Kg', NULL, 'Jl MT Haryono 718, Ruko Plaza Semarang Jateng', 1, 15, 1, 1604804722, '', 100018, 3, '2020-11-08 03:08:57', NULL, NULL, 'Y', 'Y'),
(1604805006840, 'Jual Kapal Tongkang Minyak /CPO', 12500000000, 'Dijual 1 set TB dan TK CPo / minyak. kapasitas muatan 3000 KL, Th 2005, Doubel Hull n Bottom, serius kontek kami, harga 12,5 M nego.', NULL, NULL, NULL, 'Kg', NULL, NULL, NULL, 14, 1, 1604804722, '', 100012, 2, '2020-11-08 03:12:39', NULL, NULL, 'N', 'Y'),
(1605239712569, 'crewing ABK kapal', 1000000, 'membantu memberikan lowongan pekerjaan untuk pelaut dan tata laksana.\n\nlampirkan CV anda ke email kami', NULL, NULL, NULL, 'Kg', NULL, 'jl Usman janatin 77 Semarang', 1, 9, NULL, 1604063894, '', 100018, 3, '2020-11-13 03:58:12', NULL, NULL, 'N', 'Y'),
(1605860548994, 'Jual Sparepart Kapal', 256800, 'Menyediakan Semua jenis sparepart kapal.\nHarga bersaing', NULL, NULL, NULL, 'Kg', NULL, NULL, NULL, 5, 2, 1603425076215, '', 100001, 2, '2020-11-20 08:24:21', '2020-12-20 00:00:00', '2020-11-20 09:02:54', 'Y', 'Y'),
(1605861406324, 'Jasa Service mesin kapal', 125900, 'Harga bersaing untuk biaya sewa. Bisa langsung chat atau bisa via whatsapp', NULL, NULL, NULL, 'Kg', NULL, 'Prambanan', 1, 6, NULL, 1603425076215, '', 100003, 3, '2020-11-20 08:45:59', NULL, NULL, 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `_id_post_berita` bigint(20) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `_id_kategori_berita` int(11) NOT NULL,
  `_user_id` bigint(20) NOT NULL,
  `slug_title` varchar(200) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `dilihat` int(11) NOT NULL,
  `posting_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id_post_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`_id_post_berita`, `judul_berita`, `deskripsi`, `_id_kategori_berita`, `_user_id`, `slug_title`, `cover`, `dilihat`, `posting_on`) VALUES
(1603875342743, 'SAKTI, Wadah Perjuangan Baru untuk Awak Kapal Perikanan Sulawesi Utara', '<div class="entry">\r\n\r\n 			  <div id="attachment_30102" style="width: 310px" class="wp-caption aligncenter"><span style="color: rgb(107, 113, 122); font-size: 13px;">Bitung (Samudranesia) – Untuk meningkatkan kesejahteraan, perlindungan dan posisi tawar awak kapal perikanan, sejumlah awak kapal perikanan kota Bitung mendeklarasikan pembentukan Serikat Awak Kapal Perikanan Sulawesi Utara (SAKTI). Kegiatan yang dirangkaikan dengan rapat kerja tersebut diselenggarakan pada hari Rabu, 14 Oktober 2020 di Bitung, Sulawesi Utara (Sulut).</span><br></div>\r\n<p>Selaku Ketua SAKTI, Arnon Hiborang mengatakan bahwa SAKTI merupakan transformasi dari Forum Awak Kapal Perikanan Bersatu (FORKAB) yang telah terbentuk pada 13 Desember 2019 lalu.</p>\r\n<p>“Kami bertransformasi setelah dalam perjalanan satu tahun ini banyak kasus dan kejadian yang menimpah awak kapal perikanan yang butuh advokasi dan pendampingan,” kata Arnon dalam keterangannya yang diterima redaksi, Jumat (16/10).</p>\r\n<p>Dia menjelaskan bahwa mayoritas Awak Kapal Perikanan selama ini bekerja tanpa Perjanjian Kerja Laut dan ketiadaan jaminan sosial dan kesejahteraan.</p>\r\n<p>“Bahkan awak kapal asal Bitung yang bekerja di luar negeri saat ini diperkirakan berjumlah 300 orang sering kali melaporkan masalah yang dihadapi seperti pemotongan gaji dan kekerasan,” tambahnya.</p>\r\n<p>Sementara itu, Sekretaris Dinas Tenaga Kerja dan Transmigrasi Sulawesi Utara, Emanuel Makanaf yang hadir dalam kegiatan tersebut menyambut baik dan mendukung keberadaan SAKTI.</p>\r\n<p>“Pemerintah provinsi siap menjadi mitra SAKTI sebab prioritas kami dalam penyelesaian sengketa atau hubungan industrial adalah mengedepankan mediasi, keberadaan serikat pekerja sangat penting dalam hal ini” kata Emanuel.</p>\r\n<p>Dia berharap SAKTI dapat mendorong anggotanya untuk memiliki kompetensi yang diperlukan untuk bekerja di kapal ikan. “Anggota SAKTi wajib memiliki sertifikat keahlian yang diperlukan dalam bekerja di kapal ikan,” imbuhnya.</p>\r\n<p>Dalam kesempatan yang sama, Koordinator Nasional Destructive Fishing Watch (DFW) Indonesia, Moh Abdi Suhufan mengatakan bahwa perlindungan awak kapal perikanan menjadi sangat penting.</p>\r\n<p>“Pasar Amerika dan Eropa saat ini sangat sensitif dengan isu pekerja termasuk awak kapal perikanan sehingga pemerintah Indonesia dan industri perikanan perlu lebih memperhatikan pemenuhan hak-hak pekerja perikanan. Kesadaran awak kapal perikanan Sulawesi Utara untuk berserikat merupakan langkah strategis untuk memberikan edukasi dan informasi tentang bagaimana kerja-kerja yang aman di kapal perikanan,” tandas Abdi.</p>\r\n<p>Bitung sebagai kota industri perikanan selama ini banyak menyerap tenaga kerja sebagai awak kapal ikan dan pekerja di pabrik unit pengolahan ikan. Dalam mendukung produksi perikanan tangkap, di Bitung saat ini diperkirakan terdapat 8000 awak kapal perikanan yang bekerja pada sekitar 1.074 kapal ukuran 1-200 GT.</p><div class="crp_related "><div class="crp_clear"></div></div>\r\n\r\n\r\n			</div>', 1, 1603425076215, 'sakti-wadah-perjuangan-baru-untuk-awak-kapal-perikanan-sulawesi-utara', '1603875342743.jpg', 0, '2020-10-28 08:56:31'),
(1606184854585, 'Ters Berita aja sih', '<p>i want you to be happier</p>', 2, 1603425076215, '', '1606184854585-1600659328.jpg', 0, '2020-11-24 02:30:50'),
(1606203957034, 'anyong html 54', '<p>asdasdasdasdasdas</p>', 1, 1603425076215, '', '1606203957034-260369146.jpg', 0, '2020-11-24 07:47:58'),
(1606207404554, 'walau saktit hati', '<p>uwwowo</p>', 2, 1603425076215, '', '1606207404554-1828160837.jpg', 0, '2020-11-24 08:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE IF NOT EXISTS `tb_chat` (
  `_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `added_by` bigint(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_chat`
--

INSERT INTO `tb_chat` (`_id`, `user_id`, `nama`, `token`, `added_by`, `added_on`) VALUES
(1605863788377, 1603425076215, 'Surelabs Indonesia', 'c0IZJB5sSxycuOR32CpHi4:APA91bE7Bx-QaMl156sC0TmO70X8T_aQbjiVYp4nb2KwVgLn1uR-_yEP0AmhvA95STq8TxeNM-fvKc5mVtaliOgNK7iwt_iZp6xapZfZiTlM5rgXPDhmKhTD2y95dHFU5OnwifqTGi5l', 1603425076215, '2020-11-20 02:17:11'),
(1605863844344, 1603444788, 'lti', 'eFXIZMd0ReS8mOkxqIuuGI:APA91bGcnCeJHxGovg6PgKhaDIHvSw0YlwhKKNAy__doFaXj4bgv8TII2_GEV5IeXLtTjRzvdtlF1v9OZ0ZPMHTiUrm9FKgdop6sqlW7pqTOMSdKgzmeBqUdRFUhKY4qbvLIx6suXTWb', 1603425076215, '2020-11-20 02:17:49'),
(1605867982709, 1603425076215, 'Surelabs Indonesia', 'c0IZJB5sSxycuOR32CpHi4:APA91bE7Bx-QaMl156sC0TmO70X8T_aQbjiVYp4nb2KwVgLn1uR-_yEP0AmhvA95STq8TxeNM-fvKc5mVtaliOgNK7iwt_iZp6xapZfZiTlM5rgXPDhmKhTD2y95dHFU5OnwifqTGi5l', 1604063894, '2020-11-20 10:26:29'),
(1605868306372, 1604804722, 'ferry', 'fUi_SDneTcSJgly6JrDTeE:APA91bERvLgLrJd3bVsLd-mrpWCyLRQdfw_A4inKoiFh9r7PN626T-sbdc9fpYg30QGjD0ze7j4gTm0782vf2A7Bgh9y61EoDE_bmH5HYkQ_NQpt3XB49_DiGdY8K_2YC0Y9xCwVP6Li', 1604063894, '2020-11-20 14:02:30'),
(1605906356010, 1603444788, 'lti', 'eFXIZMd0ReS8mOkxqIuuGI:APA91bGcnCeJHxGovg6PgKhaDIHvSw0YlwhKKNAy__doFaXj4bgv8TII2_GEV5IeXLtTjRzvdtlF1v9OZ0ZPMHTiUrm9FKgdop6sqlW7pqTOMSdKgzmeBqUdRFUhKY4qbvLIx6suXTWb', 1604063894, '2020-11-20 21:06:06'),
(1606001334379, 1604804722, 'ferry', 'fUi_SDneTcSJgly6JrDTeE:APA91bERvLgLrJd3bVsLd-mrpWCyLRQdfw_A4inKoiFh9r7PN626T-sbdc9fpYg30QGjD0ze7j4gTm0782vf2A7Bgh9y61EoDE_bmH5HYkQ_NQpt3XB49_DiGdY8K_2YC0Y9xCwVP6Li', 1604063894, '2020-11-21 23:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_favorite`
--

CREATE TABLE IF NOT EXISTS `tb_favorite` (
  `_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `_id_ads` bigint(20) NOT NULL,
  `_user_id` bigint(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tb_favorite`
--

INSERT INTO `tb_favorite` (`_id`, `_id_ads`, `_user_id`, `added_on`) VALUES
(22, 1604395562216, 1603425076215, '2020-11-04 03:52:43'),
(26, 1603874757268, 1603425076215, '2020-11-04 06:18:00'),
(35, 1604395562216, 1603444788, '2020-11-04 06:44:45'),
(36, 1603874757268, 1603444788, '2020-11-04 06:45:03'),
(40, 1604482139230, 1603444788, '2020-11-06 01:44:19'),
(41, 1604478603665, 1603444788, '2020-11-06 02:05:28'),
(44, 1603872683548, 1603444788, '2020-11-09 06:14:39'),
(45, 1603872683548, 1603444788, '2020-11-09 07:30:03'),
(46, 1604310581956, 1603425076215, '2020-11-20 09:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto`
--

CREATE TABLE IF NOT EXISTS `tb_foto` (
  `_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) NOT NULL,
  `_id_references` bigint(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tb_foto`
--

INSERT INTO `tb_foto` (`_id`, `foto`, `_id_references`, `added_on`) VALUES
(1, 'default-image.jpg', 160342112, '2020-10-26 03:53:35'),
(2, 'four.jpg', 160342112, '2020-10-26 03:53:35'),
(3, 'one.jpg', 160342112, '2020-10-26 04:22:53'),
(8, '1603849640972-1789658684.jpg', 1603849640972, '2020-10-28 01:47:28'),
(9, '1603849640972-1264721932.jpg', 1603849640972, '2020-10-28 01:47:28'),
(10, '1603849794791-717575910.jpg', 1603849794791, '2020-10-28 01:50:13'),
(11, '1603849794791-811985274.jpg', 1603849794791, '2020-10-28 01:50:13'),
(12, '1603850068533-179286189.jpg', 1603850068533, '2020-10-28 01:53:28'),
(13, '1603850068533-2142489661.jpg', 1603850068533, '2020-10-28 01:53:28'),
(14, '1603850161107-1684242409.jpg', 1603850161107, '2020-10-28 01:59:43'),
(15, '1603854666993-1178993163.jpg', 1603854666993, '2020-10-28 03:07:33'),
(16, '1603854666993-1855327156.jpg', 1603854666993, '2020-10-28 03:07:34'),
(17, '1603859385318-402478314.jpg', 1603859385318, '2020-10-28 04:30:32'),
(18, '1603865516454-922373577.jpg', 1603865516454, '2020-10-28 06:13:34'),
(19, '1603865516454-2096465304.jpg', 1603865516454, '2020-10-28 06:13:34'),
(20, '1603865516454-987589899.jpg', 1603865516454, '2020-10-28 06:13:34'),
(21, '1603865924250-2103023939.jpg', 1603865924250, '2020-10-28 06:20:33'),
(22, '1603866181403-867768612.jpg', 1603866181403, '2020-10-28 06:23:34'),
(23, '1603866837085-817426224.jpg', 1603866837085, '2020-10-28 06:35:29'),
(24, '1603866837085-1390584401.jpg', 1603866837085, '2020-10-28 06:35:29'),
(25, '1603872683548-31842796.jpg', 1603872683548, '2020-10-28 08:12:26'),
(26, '1603872683548-1052996715.jpg', 1603872683548, '2020-10-28 08:12:26'),
(27, '1603874757268-703100187.jpg', 1603874757268, '2020-10-28 08:48:03'),
(28, '1603874757268-1846760069.jpg', 1603874757268, '2020-10-28 08:48:03'),
(29, '1604395562216-1407439133.jpg', 1604395562216, '2020-11-03 09:26:51'),
(30, '1604395562216-915871791.jpg', 1604395562216, '2020-11-03 09:26:51'),
(32, '1604482139230-100649774.jpg', 1604482139230, '2020-11-04 09:30:56'),
(33, '1604482139230-924428733.jpg', 1604482139230, '2020-11-04 09:30:56'),
(34, '1604482139230-1046403370.jpg', 1604482139230, '2020-11-04 09:30:56'),
(35, '1603874757268-1756719545.jpg', 1603874757268, '2020-11-16 07:19:47'),
(37, '1604478603665-1700793751.jpg', 1604478603665, '2020-11-17 09:17:08'),
(38, '1604478603665-354234220.jpg', 1604478603665, '2020-11-17 09:17:08'),
(39, '1605860548994-1938564240.jpg', 1605860548994, '2020-11-20 08:24:21'),
(40, '1605860548994-1254502967.jpg', 1605860548994, '2020-11-20 08:24:21'),
(41, '1605861406324-867707288.jpg', 1605861406324, '2020-11-20 08:38:23'),
(42, '1605861406324-1605443097.jpg', 1605861406324, '2020-11-20 08:40:51'),
(43, '1605861406324-464901563.jpg', 1605861406324, '2020-11-20 08:43:28'),
(44, '1605861406324-1032947964.jpg', 1605861406324, '2020-11-20 08:45:59'),
(45, '1604664566580-505535785.jpg', 1604664566580, '2020-11-20 10:28:22'),
(46, '1604664566580-1200896982.jpg', 1604664566580, '2020-11-20 10:30:17'),
(47, '1604664566580-2107253048.jpg', 1604664566580, '2020-11-20 10:30:18'),
(48, '1604310581956-454379709.jpg', 1604310581956, '2020-11-20 10:31:00'),
(49, '1604069825486-256603532.jpg', 1604069825486, '2020-11-20 10:41:31'),
(50, '1604069825486-812957156.jpg', 1604069825486, '2020-11-20 10:41:32'),
(51, '1604665153862-710089604.jpg', 1604665153862, '2020-11-20 21:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_chat`
--

CREATE TABLE IF NOT EXISTS `tb_item_chat` (
  `_id_item` bigint(20) NOT NULL AUTO_INCREMENT,
  `message` longtext CHARACTER SET utf8mb4,
  `user_id` bigint(20) NOT NULL,
  `user_id_dest` bigint(20) NOT NULL,
  `_id_chat` bigint(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id_item`),
  KEY `_id_chat` (`_id_chat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_item_chat`
--

INSERT INTO `tb_item_chat` (`_id_item`, `message`, `user_id`, `user_id_dest`, `_id_chat`, `added_on`) VALUES
(1, 'saya pesan ini 3', 1603425076215, 1603425076215, 1605863788377, '2020-11-20 09:16:42'),
(2, 'https://www.google.com/maps?q=-7.757872600000001,110.41230429999999\\nJl Sukun Ngiringin No B1, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', 1603425076215, 1603425076215, 1605863788377, '2020-11-20 09:17:11'),
(3, 'hi lti, saya pesan barangnya 4', 1603425076215, 1603444788, 1605863844344, '2020-11-20 09:17:38'),
(4, 'https://www.google.com/maps?q=-7.757872600000001,110.41230429999999\\nJl Sukun Ngiringin No B1, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', 1603425076215, 1603444788, 1605863844344, '2020-11-20 09:17:49'),
(5, 'test', 1604063894, 1603425076215, 1605867982709, '2020-11-20 10:26:29'),
(6, 'test', 1604063894, 1604804722, 1605868306372, '2020-11-20 10:31:52'),
(7, 'gan', 1604063894, 1604804722, 1605868306372, '2020-11-20 21:02:30'),
(8, 'test', 1604063894, 1603444788, 1605906356010, '2020-11-20 21:06:06'),
(9, 'ttttt', 1604063894, 1604804722, 1606001334379, '2020-11-21 23:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa`
--

CREATE TABLE IF NOT EXISTS `tb_jasa` (
  `_id_post_jasa` bigint(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `alamat` longtext NOT NULL,
  `deskripsi` longtext NOT NULL,
  `_id_kategori` bigint(20) NOT NULL,
  `_user_id` bigint(20) NOT NULL,
  `slug_title` varchar(200) NOT NULL,
  `_id_pelabuhan` int(11) NOT NULL,
  `posting_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id_post_jasa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kargo`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kargo` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_jenis_kargo`
--

INSERT INTO `tb_jenis_kargo` (`_id`, `nama`) VALUES
(0, 'Kapal Kargo Curah'),
(1, 'Kapal Tanker'),
(2, 'Kapal Kontainer'),
(3, 'Kapal Kargo Umum'),
(4, 'Kapal Tongkang Minyak'),
(5, 'Kapal Tongkang Batubara'),
(6, 'Kapal Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_ads`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_ads` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) NOT NULL,
  `slug_title` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_kategori_ads`
--

INSERT INTO `tb_kategori_ads` (`_id`, `nama_kategori`, `slug_title`, `added_on`) VALUES
(1, 'Kirim Kargo', 'kirim-kargo', '2020-10-23 02:54:36'),
(2, 'Jual Beli dan Sewa', 'jual-beli-sewa', '2020-10-23 02:55:15'),
(3, 'Jasa Maritime', 'jasa-maritime', '2020-10-23 02:55:40'),
(4, 'Berita Maritime', 'berita-maritime', '2020-10-23 02:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_berita`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_berita` (
  `_id_kategori` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_kategori_berita`
--

INSERT INTO `tb_kategori_berita` (`_id_kategori`, `nama_kategori`, `slug`, `added_on`) VALUES
(1, 'Lowongan Kerja', 'lowongan-kerja', '2020-10-23 02:09:31'),
(2, 'Info Maritime Lainnya', 'info-maritime-lainnya', '2020-10-23 02:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_jasa`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_jasa` (
  `_id_kategori` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_kategori_jasa`
--

INSERT INTO `tb_kategori_jasa` (`_id_kategori`, `nama_kategori`, `added_on`) VALUES
(1, 'JASA KEAGENAN KAPAL', '2020-11-02 01:27:08'),
(2, 'JASA BUNKER BBM & AIR', '2020-11-02 01:27:08'),
(3, 'JASA PENGEDOKAN KAPAL', '2020-11-02 01:34:08'),
(4, 'JASA PENGERUKAN ALUR', '2020-11-02 01:34:08'),
(5, 'JASA PERBAIKAN MESIN KAPAL', '2020-11-02 01:34:08'),
(6, 'JASA CREWING', '2020-11-02 01:34:08'),
(7, 'JASA EKSPEDISI/EMKL', '2020-11-02 01:34:08'),
(8, 'ASURANSI KAPAL & MUATAN', '2020-11-02 01:34:08'),
(9, 'TIKET KAPAL / WISATA BAHARI', '2020-11-02 01:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_media`
--

CREATE TABLE IF NOT EXISTS `tb_media` (
  `_id_media` bigint(20) NOT NULL AUTO_INCREMENT,
  `media` longtext NOT NULL,
  `id_item` bigint(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelabuhan`
--

CREATE TABLE IF NOT EXISTS `tb_pelabuhan` (
  `_id` bigint(20) NOT NULL,
  `nama_pelabuhan` varchar(200) NOT NULL,
  `daerah` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `added_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pelabuhan`
--

INSERT INTO `tb_pelabuhan` (`_id`, `nama_pelabuhan`, `daerah`, `provinsi`, `added_on`) VALUES
(100001, 'Pelabuhan Krueng Geukueh', 'Aceh', 'Aceh', '2020-10-20 07:40:29'),
(100002, 'Pelabuhan Kuala Langsa', 'Langsa', 'Aceh', '2020-10-20 07:40:29'),
(100003, 'Pelabuhan Yoseph Iskandar', 'Tapaktuan', 'Aceh', '2020-10-20 07:40:29'),
(100004, 'Pelabuhan Malahayati', 'Aceh Besar', 'Aceh', '2020-10-20 07:40:29'),
(100005, 'Pelabuhan Pangkal Balam', 'Bangka-Belitung', 'Bangka-Belitung', '2020-10-20 07:40:29'),
(100006, 'Pelabuhan Tanjung Pandan', 'Bangka-Belitung', 'Bangka-Belitung', '2020-10-20 07:40:29'),
(100007, 'Pelabuhan Merak', 'Cilegon', 'Banten', '2020-10-20 07:40:29'),
(100008, 'Pelabuhan Penawar Rindu', 'Belakang Padang', 'Batam', '2020-10-20 07:40:29'),
(100009, 'Pelabuhan Bengkulu', 'Bengkulu', 'Bengkulu', '2020-10-20 07:40:29'),
(100010, 'Pelabuhan Anggrek', 'Kwandang', 'Gorontalo', '2020-10-20 07:40:29'),
(100011, 'Pelabuhan Gorontalo', 'Gorontalo', 'Gorontalo', '2020-10-20 07:40:29'),
(100012, 'Pelabuhan Sunda Kelapa', 'Jakarta', 'Jakarta', '2020-10-20 07:40:29'),
(100013, 'Pelabuhan Tanjung Priok', 'Jakarta', 'Jakarta', '2020-10-20 07:40:29'),
(100014, 'Pelabuhan Jambi', 'Jambi', 'Jambi', '2020-10-20 07:40:29'),
(100015, 'Pelabuhan Cirebon', 'Cirebon', 'Jawa Barat', '2020-10-20 07:40:29'),
(100016, 'Pelabuhan Pertiwi Pamanukan', 'Subang', 'Jawa Barat', '2020-10-20 07:40:29'),
(100017, 'Pelabuhan Pramuka', 'Garut', 'Jawa Barat', '2020-10-20 07:40:29'),
(100018, 'Pelabuhan Tanjung Emas', 'Semarang', 'Jawa Tengah', '2020-10-20 07:40:29'),
(100019, 'Pelabuhan Tanjung Intan', 'Cilacap', 'Jawa Tengah', '2020-10-20 07:40:29'),
(100020, 'Pelabuhan Batu Guluk', 'Madura', 'Jawa Timur', '2020-10-20 07:40:29'),
(100021, 'Pelabuhan Kalianget', 'Madura', 'Jawa Timur', '2020-10-20 07:40:29'),
(100022, 'Pelabuhan Kalimas', 'Surabaya', 'Jawa Timur', '2020-10-20 07:40:29'),
(100023, 'Pelabuhan Kamal', 'Madura', 'Jawa Timur', '2020-10-20 07:40:29'),
(100024, 'Pelabuhan Ketapang', 'Banyuwangi', 'Jawa Timur', '2020-10-20 07:40:29'),
(100025, 'Pelabuhan Surindro Supjarso', 'Tulungagung', 'Jawa Timur', '2020-10-20 07:40:29'),
(100026, 'Pelabuhan Tanjung Perak', 'Surabaya', 'Jawa Timur', '2020-10-20 07:40:29'),
(100027, 'Pelabuhan Tanjung Tembaga', 'Probolinggo', 'Jawa Timur', '2020-10-20 07:40:29'),
(100028, 'Pelabuhan Tanjung Wangi', 'Banyuwangi', 'Jawa Timur', '2020-10-20 07:40:29'),
(100029, 'Pelabuhan Ujung', 'Surabaya', 'Jawa Timur', '2020-10-20 07:40:29'),
(100030, 'Dwikora', 'Pontianak', 'Kalimantan Barat', '2020-10-20 07:40:29'),
(100031, 'Pelabuhan Samudera', 'Batulicin', 'Kalimantan Selatan', '2020-10-20 07:40:29'),
(100032, 'Pelabuhan Trisakti', 'Banjarmasin', 'Kalimantan Selatan', '2020-10-20 07:40:29'),
(100033, 'Semayang', 'Balikpapan', 'Kalimantan Timur', '2020-10-20 07:40:29'),
(100034, 'TPK Palaran', 'Samarinda', 'Kalimantan Timur', '2020-10-20 07:40:29'),
(100035, 'Malundung', 'Tarakan', 'Kalimantan Utara', '2020-10-20 07:40:29'),
(100036, 'Pelabuhan ASDP Desa Jagoh', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100037, 'Pelabuhan ASDP Dompak', 'Tanjungpinang', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100038, 'Pelabuhan ASDP Parit Rempak', 'Karimun', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100039, 'Pelabuhan ASDP Tanjung Uban', 'Bintan', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100040, 'Pelabuhan ASDP Telaga Punggur', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100041, 'Pelabuhan Bakong', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100042, 'Pelabuhan Batam Centre', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100043, 'Pelabuhan Batu Ampar', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100044, 'Pelabuhan Bulang Linggi', 'Bintan', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100045, 'Pelabuhan Dabo Singkep', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100046, 'Pelabuhan Harbour Bay', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100047, 'Pelabuhan Kote', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100048, 'Pelabuhan Letung Jemaja', 'Kepulauan Anambas', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100049, 'Pelabuhan Marok Tua', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100050, 'Pelabuhan Midai', 'Natuna', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100051, 'Pelabuhan Nongsa', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100052, 'Pelabuhan Pancur', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100053, 'Pelabuhan Penagih', 'Natuna', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100054, 'Pelabuhan Penuba', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100055, 'Pelabuhan Pulau Laut', 'Natuna', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100056, 'Pelabuhan Pulau Subi', 'Natuna', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100057, 'Pelabuhan Putih', 'Sambu Belakang Padang', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100058, 'Pelabuhan Sei Tenam', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100059, 'Pelabuhan Sekupang', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100060, 'Pelabuhan Senayang', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100061, 'Pelabuhan Sijantung', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100062, 'Pelabuhan Sri Bayintan', 'Bintan', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100063, 'Pelabuhan Sri Bintan Pura', 'Tanjungpinang', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100064, 'Pelabuhan Sri Payung', 'Tanjungpinang', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100065, 'Pelabuhan Sungai Buluh', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100066, 'Pelabuhan Sunggak', 'Kepulauan Anambas', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100067, 'Pelabuhan Tanjung Balai Karimun', 'Karimun', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100068, 'Pelabuhan Tanjung Buton', 'Lingga', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100069, 'Pelabuhan Tanjung Setelung Serasan', 'Natuna', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100070, 'Pelabuhan Tarempa', 'Kepulauan Anambas', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100071, 'Pelabuhan Telaga Punggur', 'Batam', 'Kepulauan Riau', '2020-10-20 07:40:29'),
(100072, 'Pelabuhan Bakauheni', 'Lampung', 'Lampung', '2020-10-20 07:40:29'),
(100073, 'Pelabuhan Panjang', 'Lampung', 'Lampung', '2020-10-20 07:40:29'),
(100074, 'Pelabuhan Idris Sardi', 'Muara Sabak', 'Muara Sabak', '2020-10-20 07:40:29'),
(100075, 'Administrasi Pelabuhan Biak', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100076, 'Administrasi Pelabuhan Jayapura', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100077, 'Administrasi Pelabuhan Merauke', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100078, 'Kantor Pelabuhan Agats', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100079, 'Kantor Pelabuhan Amahai', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100080, 'Kantor Pelabuhan Nabire', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100081, 'Kantor Pelabuhan Pomako', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100082, 'Pelabuhan Depapre', 'Papua', 'Papua', '2020-10-20 07:40:29'),
(100083, 'Administrator Pelabuhan Fak-fak', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100084, 'Administrator Pelabuhan Manokwari', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100085, 'Administrator Pelabuhan Sorong', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100086, 'Kantor Pelabuhan Bintuni', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100087, 'Kantor Pelabuhan Kaimana', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100088, 'Kantor Pelabuhan Taminabuan', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100089, 'Kantor Pelabuhan Wasior', 'Papua Barat', 'Papua Barat', '2020-10-20 07:40:29'),
(100090, 'Pelabuhan Sungai Pakning', 'Dumai', 'Riau', '2020-10-20 07:40:29'),
(100091, 'Polewali', 'Sulawesi Barat', 'Sulawesi Barat', '2020-10-20 07:40:29'),
(100092, 'Barru', 'Sulawesi Selatan', 'Sulawesi Selatan', '2020-10-20 07:40:29'),
(100093, 'Belopa', 'Sulawesi Selatan', 'Sulawesi Selatan', '2020-10-20 07:40:29'),
(100094, 'Malili', 'Sulawesi Selatan', 'Sulawesi Selatan', '2020-10-20 07:40:29'),
(100095, 'Pare Pare', 'Sulawesi Selatan', 'Sulawesi Selatan', '2020-10-20 07:40:29'),
(100096, 'Soekarno Hatta', 'Makassar', 'Sulawesi Selatan', '2020-10-20 07:40:29'),
(100097, 'Tanjung Ringgit', 'Palopo', 'Sulawesi Selatan', '2020-10-20 07:40:29'),
(100098, 'Pelabuhan Pantoloan', 'Pantoloan', 'Sulawesi Tengah', '2020-10-20 07:40:29'),
(100099, 'Buton', 'Sulawesi Tenggara', 'Sulawesi Tenggara', '2020-10-20 07:40:29'),
(100100, 'Kendari', 'Sulawesi tenggara', 'Sulawesi tenggara', '2020-10-20 07:40:29'),
(100101, 'Pelabuhan Bitung', 'Sulawesi Utara', 'Sulawesi Utara', '2020-10-20 07:40:29'),
(100102, 'Pelabuhan Muara', 'Padang', 'Sumatera Barat', '2020-10-20 07:40:29'),
(100103, 'Pelabuhan Teluk Bayur', 'Sumatera Barat', 'Sumatera Barat', '2020-10-20 07:40:29'),
(100104, 'Pelabuhan Tanjung Api-api', 'Palembang', 'Sumatera Selatan', '2020-10-20 07:40:29'),
(100105, 'Pelabuhan Belawan', 'Sumatera Utara', 'Sumatera Utara', '2020-10-20 07:40:29'),
(100106, 'Pelabuhan Kuala Tanjung', 'Batubara', 'Sumatera Utara', '2020-10-20 07:40:29'),
(100107, 'Pelabuhan Tanjung Balai', 'Sumatera Utara', 'Sumatera Utara', '2020-10-20 07:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE IF NOT EXISTS `tb_provinsi` (
  `_id` int(11) NOT NULL,
  `nama_provinsi` varchar(200) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`_id`, `nama_provinsi`) VALUES
(11, 'ACEH'),
(12, 'SUMATERA UTARA'),
(13, 'SUMATERA BARAT'),
(14, 'RIAU'),
(15, 'JAMBI'),
(16, 'SUMATERA SELATAN'),
(17, 'BENGKULU'),
(18, 'LAMPUNG'),
(19, 'KEPULAUAN BANGKA BELITUNG'),
(21, 'KEPULAUAN RIAU'),
(31, 'DKI JAKARTA'),
(32, 'JAWA BARAT'),
(33, 'JAWA TENGAH'),
(34, 'DI YOGYAKARTA'),
(35, 'JAWA TIMUR'),
(36, 'BANTEN'),
(51, 'BALI'),
(52, 'NUSA TENGGARA BARAT'),
(53, 'NUSA TENGGARA TIMUR'),
(61, 'KALIMANTAN BARAT'),
(62, 'KALIMANTAN TENGAH'),
(63, 'KALIMANTAN SELATAN'),
(64, 'KALIMANTAN TIMUR'),
(65, 'KALIMANTAN UTARA'),
(71, 'SULAWESI UTARA'),
(72, 'SULAWESI TENGAH'),
(73, 'SULAWESI SELATAN'),
(74, 'SULAWESI TENGGARA'),
(75, 'GORONTALO'),
(76, 'SULAWESI BARAT'),
(81, 'MALUKU'),
(82, 'MALUKU UTARA'),
(91, 'PAPUA BARAT'),
(94, 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE IF NOT EXISTS `tb_rekening` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `pemilik` varchar(200) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `bank` enum('BNI','Mandiri','BCA','BRI') NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`_id`, `pemilik`, `norek`, `bank`) VALUES
(4, 'CV Lautku', '1243901218910', 'BNI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE IF NOT EXISTS `tb_report` (
  `_id` varchar(100) NOT NULL DEFAULT '',
  `_id_ads` varchar(100) NOT NULL,
  `laporan` longtext NOT NULL,
  `komentar` longtext NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`_id`, `_id_ads`, `laporan`, `komentar`, `added_by`, `added_on`) VALUES
('09a211dd-2faf-11eb-b4f6-1008b1ee002d', '1604664566580', 'eqwewqe', 'wkwkwkwkw', '1604665592', '2020-11-26 06:47:05');

--
-- Triggers `tb_report`
--
DROP TRIGGER IF EXISTS `ins_id`;
DELIMITER //
CREATE TRIGGER `ins_id` BEFORE INSERT ON `tb_report`
 FOR EACH ROW BEGIN
  IF new._id = "" THEN
    SET new._id = uuid();
  END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_request_premium`
--

CREATE TABLE IF NOT EXISTS `tb_request_premium` (
  `id` varchar(100) NOT NULL,
  `_id_ads` bigint(20) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `is_accepted` enum('Y','N') NOT NULL DEFAULT 'N',
  `alasan_ditolak` longtext NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_request_premium`
--

INSERT INTO `tb_request_premium` (`id`, `_id_ads`, `nominal`, `paket`, `durasi`, `bank`, `is_accepted`, `alasan_ditolak`, `added_on`) VALUES
('INV-1605862941819', 1605860548994, '49702', '1 Bulan', '30 days', 'Mandiri', 'Y', '', '2020-11-20 09:02:26'),
('INV-1605871550379', 1604665153862, '49405', '1 Bulan', '30 days', 'BNI', 'N', '', '2020-11-20 11:25:55'),
('INV-1605871554891', 1604665153862, '49405', '1 Bulan', '30 days', 'BNI', 'N', '', '2020-11-20 11:25:59'),
('INV-1606001237021', 1604069825486, '49974', '1 Bulan', '30 days', 'BNI', 'N', '', '2020-11-21 23:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_settings`
--

CREATE TABLE IF NOT EXISTS `tb_settings` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `fill_name` varchar(100) NOT NULL,
  `value` char(10) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_settings`
--

INSERT INTO `tb_settings` (`_id`, `fill_name`, `value`) VALUES
(1, 'Max Iklan Premium yang ditampilkan', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ulasan`
--

CREATE TABLE IF NOT EXISTS `tb_ulasan` (
  `_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `_id_ads` bigint(20) NOT NULL,
  `ulasan` longtext NOT NULL,
  `rating` double NOT NULL,
  `_user_id` bigint(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_ulasan`
--

INSERT INTO `tb_ulasan` (`_id`, `_id_ads`, `ulasan`, `rating`, `_user_id`, `added_on`) VALUES
(1, 1604654681654, 'barangnya kok gak nyampe???', 5, 1603444788, '2020-11-06 09:25:09'),
(2, 1604654681654, 'barangnya kok gak nyampe???', 5, 1603444788, '2020-11-06 09:26:24'),
(3, 1604654681654, 'barangnya kok gak nyampe???', 5, 1603444788, '2020-11-06 09:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `_user_id` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `no_telpon_kantor` char(20) NOT NULL,
  `alamat` longtext NOT NULL,
  `web` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tipe_akun` enum('Perusahaan','Individual') NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `reason_non_active` text NOT NULL,
  `token` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`_user_id`, `nama`, `pass`, `email`, `no_telp`, `nama_perusahaan`, `no_telpon_kantor`, `alamat`, `web`, `foto`, `tipe_akun`, `is_active`, `reason_non_active`, `token`, `added_on`) VALUES
(1603444788, 'Zelvia Olga Maharani', '827ccb0eea8a706c4c34a16891f84e7b', 'zelviaolga98@gmail.com', '+6285761990862', 'lti', '0852', 'sleman', 'lauwba.com', '', 'Perusahaan', 'Y', '', 'eFXIZMd0ReS8mOkxqIuuGI:APA91bGcnCeJHxGovg6PgKhaDIHvSw0YlwhKKNAy__doFaXj4bgv8TII2_GEV5IeXLtTjRzvdtlF1v9OZ0ZPMHTiUrm9FKgdop6sqlW7pqTOMSdKgzmeBqUdRFUhKY4qbvLIx6suXTWb', '2020-10-28 03:19:45'),
(1603877546, 'Yenni Suryono', '827ccb0eea8a706c4c34a16891f84e7b', 'yennicupcup@gmail.com', '+6285201461240', '', '', '', '', '', 'Perusahaan', 'Y', '', '', '2020-10-28 09:32:26'),
(1604063894, 'aaa', '2944aae2b243fce21cb2f8b6979061b0', 'aheron.ay@gmail.com', '+6281329703977', 'PT Tanjung Mas Bahari Perkasa', '0243553315', 'jl Serma Usman janatin no 16 Semarang Jawa tengah', '', '', 'Perusahaan', 'Y', '', 'dyDkmHpkTwi9pAilxhxTr-:APA91bHBTupj2EPJpWuSJ0iIZZOSMRk7IIToirswPtcepoTgRaOrxJc-3ySpKoi71YH6C3z6zjCxKZUo0Bvd3BGU43nWr2tPuZbNEemPzisTCCU59K5Fr_Re88j77TLLrmf3B8HS0Ggm', '2020-10-30 13:18:14'),
(1604665592, 'Khaerul Anam', '096fe175b0fda590c6bc59bc68fa5e89', 'akhaerul1992@gmail.com', '+6285346546349', '', '', '', '', '', 'Perusahaan', 'Y', '', 'e5H63O6xRDCMCll5cUmpdd:APA91bHBMWgp11xE2VLvK0md4ZrhxgoW0tS7sMolL8wpnQ5JXCNVW8RpTFKUfr2o6Z94fG0q7v42eLyouiRDUSycRGtzEn8BVhw4dTsj5EmymD1SMwPYgmj6XaxkfJlh2UTc66H_xJ2T', '2020-11-06 12:26:32'),
(1604804722, 'ferry', '2944aae2b243fce21cb2f8b6979061b0', 'aheron79@yahoo.co.id', '+6281224919810', '', '', '', '', '', 'Perusahaan', 'Y', '', 'fUi_SDneTcSJgly6JrDTeE:APA91bERvLgLrJd3bVsLd-mrpWCyLRQdfw_A4inKoiFh9r7PN626T-sbdc9fpYg30QGjD0ze7j4gTm0782vf2A7Bgh9y61EoDE_bmH5HYkQ_NQpt3XB49_DiGdY8K_2YC0Y9xCwVP6Li', '2020-11-08 03:05:22'),
(1603425076215, 'Sigit Suryono', '85064efb60a9601805dcea56ec5402f7', 'sigitharsy25@gmail.com', '+6289622069616', 'Surelabs Indonesia', '02741264595', 'Prambanan', '', '', 'Perusahaan', 'Y', '', 'cxPAnbcgQ4Sl-JgIwPjzhA:APA91bH3cERNcubRQCag2pHHvzU0m60D1IXAOs6cm5pOUTueW-bLSYHUwGgQrozLFpgtWZ3f0MG6wUKbdXQ1grdnT6Db7EPQ5QK4kTV6Ha12gfuCu9n_hgTkoqYk5bif7pDadkY94PKr', '2020-10-28 03:19:45');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ads`
--
ALTER TABLE `tb_ads`
  ADD CONSTRAINT `tb_ads_ibfk_1` FOREIGN KEY (`_id_kategori`) REFERENCES `tb_kategori_ads` (`_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ads_ibfk_2` FOREIGN KEY (`kargo_jenis`) REFERENCES `tb_jenis_kargo` (`_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tb_item_chat`
--
ALTER TABLE `tb_item_chat`
  ADD CONSTRAINT `tb_item_chat_ibfk_1` FOREIGN KEY (`_id_chat`) REFERENCES `tb_chat` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
