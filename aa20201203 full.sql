-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table aa.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cookie` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel aa.admin: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `cookie`) VALUES
	(1, 'admin', '$2y$10$pKGfQG2etJ5lDW06PZncIOqY94RJTioYG4oM4n0/Up.cUpnX5HkRO', '94kg7WLA0egZkJlsyIYChCMcFKmpjqlImafEnRwUX8Pd9fpGvXW8DiNVcD3G7o1b');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table aa.dokumentasi
CREATE TABLE IF NOT EXISTS `dokumentasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel aa.dokumentasi: ~8 rows (lebih kurang)
/*!40000 ALTER TABLE `dokumentasi` DISABLE KEYS */;
INSERT INTO `dokumentasi` (`id`, `file`) VALUES
	(1, 'g1.jpg'),
	(2, 'g2.jpg'),
	(3, 'g3.jpg'),
	(4, 'g4.jpg'),
	(5, 'g5.jpg'),
	(6, 'g6.jpg'),
	(7, 'g7.jpg'),
	(8, 'g8.jpg');
/*!40000 ALTER TABLE `dokumentasi` ENABLE KEYS */;

-- membuang struktur untuk table aa.lokasi
CREATE TABLE IF NOT EXISTS `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `url` text NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel aa.lokasi: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `lokasi` DISABLE KEYS */;
INSERT INTO `lokasi` (`id`, `nama`, `url`, `aktif`) VALUES
	(1, 'bangka belitung', 'bangkabelitung', 1),
	(2, 'bandung', 'bandung', 0);
/*!40000 ALTER TABLE `lokasi` ENABLE KEYS */;

-- membuang struktur untuk table aa.paket
CREATE TABLE IF NOT EXISTS `paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `hewan` text NOT NULL,
  `sate` int(11) NOT NULL,
  `gulai` int(11) NOT NULL,
  `antar` int(11) NOT NULL,
  `distribusi` int(11) NOT NULL,
  `sertifikat` int(11) NOT NULL,
  `risalah` int(11) NOT NULL,
  `best_seller` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel aa.paket: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
INSERT INTO `paket` (`id`, `lokasi`, `nama`, `harga`, `hewan`, `sate`, `gulai`, `antar`, `distribusi`, `sertifikat`, `risalah`, `best_seller`) VALUES
	(1, 1, 'paket a', 1400000, 'domba betina', 150, 40, 1, 1, 1, 0, 0),
	(2, 1, 'paket b', 1500000, 'domba betina', 200, 45, 1, 1, 1, 1, 0),
	(3, 1, 'paket c', 1700000, 'kambing betina', 250, 50, 1, 1, 1, 1, 1),
	(4, 1, 'paket d', 2000000, 'kambing betina', 300, 60, 1, 1, 1, 1, 0),
	(5, 1, 'paket e', 2350000, 'kambing betina', 500, 80, 1, 1, 1, 1, 0),
	(6, 1, 'paket f', 2500000, 'kambing jantan', 300, 60, 1, 1, 1, 1, 0),
	(7, 1, 'paket g', 2750000, 'kambing jantan', 350, 70, 1, 1, 1, 1, 0),
	(8, 1, 'paket h', 3000000, 'kambing jantan', 500, 80, 1, 1, 1, 1, 0),
	(9, 2, 'paket a', 1100000, 'domba betina', 100, 30, 1, 1, 1, 1, 0),
	(10, 2, 'paket b', 1200000, 'domba betina', 150, 40, 1, 1, 1, 1, 0);
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;

-- membuang struktur untuk table aa.testimoni
CREATE TABLE IF NOT EXISTS `testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel aa.testimoni: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `testimoni` DISABLE KEYS */;
INSERT INTO `testimoni` (`id`, `nama`) VALUES
	(1, 'tes1.png'),
	(2, 'tes2.png'),
	(3, 'tes3.png'),
	(4, 'tes4.png'),
	(5, 'tes5.png'),
	(6, 'tes6.png'),
	(7, 'tes7.png');
/*!40000 ALTER TABLE `testimoni` ENABLE KEYS */;

-- membuang struktur untuk table aa.unggul
CREATE TABLE IF NOT EXISTS `unggul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `konten` longtext NOT NULL,
  `linearicon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel aa.unggul: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `unggul` DISABLE KEYS */;
INSERT INTO `unggul` (`id`, `judul`, `konten`, `linearicon`) VALUES
	(1, 'Sudah Terdaftar dan Memiliki Kandang Sendiri', 'Alif Aqiqah & Catering didalam memenuhi kualitas dan pelayanan kepada anda telah terdaftar sebagai Tempat Pemotongan Hewan yang sehat dengan dikeluarkannya Surat Keterangan Tempat Pemotongan Hewan dari Dinas Pertanian terkait bernomor : 524.7/0625/TPH-MDBRT/DINPERTAN/2018. Penataan Bangunan dengan kelengkapan Kandang sendiri dengan ketersediaan Kambing atau Domba campur sekitar 40 s.d 50 ekor perbulan, Ruang Penampungan, Tempat Pembuangan Limbah, Ruang Pelayuan Daging dan tersedianya sumber air bersih. Menjadikan Alif Aqiqah & Catering terus berbenah mencapai peringkat standarisasi terbaik.', 'lnr-checkmark-circle'),
	(2, 'Pilihan Paket Aqiqah yang Tepat dan Bersertifikat', 'Kami menyediakan ragam pilihan paket harga yang tepat untuk aqiqah anda, Anda dapat memilih bebas Kambing atau Domba Aqiqah Sehat berkualitas yang kami sediakan sesuai syar\'i dan sebagai amanah kami, juga menu masakan yang dapat disesuaikan fleksible untuk memenuhi selera yang anda inginkan dengan Kombinasi Harga Murah dan Kualitas Rasa menghasilkan Ketepatan kepuasan meriah, istimewa, hemat dan Barokah. Mendapatkan Sertifikat Aqiqah bagi yang beraqiqah dan bonus mendapatkan Risalah Aqiqah. Dan Kami menyediakan Hadiah Spanduk Do\'a dan atau Selamat datang untuk Tasyakuran Aqiqah pada Pemilihan Paket tertentu.', 'lnr-magnifier'),
	(3, 'Masakan Higienis dan Tidak Berbau Prengus', 'Rasa Masakan yang sedap dan enak pada menu kami telah teruji sejak tahun 2012 yang lalu, melalui program tester masakan yang kami sediakan dan atau pada survey atas testimoni Customer Alif Aqiqah & Catering. Yang tetap Konsisten kami jaga adalah Proses yang Syar\'i, Prioritas Hiegienis plus melengkapi rasa yang enak dan sedap dengan menghilangkan bau prengus pada menu masakan. Dengan adanya Surat Laik Hiegienis dari Dinas Kesehatan (DKPPKB) Kota Pangkalpinang Nomor : 443.51/144/DINKES-PPKB/VIII/2018 dan Sertifikat Halal MUI untuk Catering dan rumah potong hewan. Upaya ini adalah didalam menjunjung amanah yang telah dipercayakan kepada kami dan Profesionalitas untuk anda.', 'lnr-dinner'),
	(4, 'Pelayanan Gratis Antar dan Distribusi', 'Ramah tamah dan Kemudahan bagi anda untuk kami utamakan. Dengan Pelayanan Online Website, Fanpage Facebook dan WA pada 24/7 (full Service) dari Petugas kami. Alif Aqiqah & Catering melayani secara cuma-cuma untuk antaran Paket Aqiqah dan Distribusi kepada Pihak yang anda tunjukkan atau Pihak yang kami sediakan didalam wilayah yang sama. Distribusi ditujukan kepada Pondok Pesantren, Anak Yatim, Panti Asuhan. Pelayanan Distribusi terdokumentasi yang nantinya dikirimkan kepada anda.', 'lnr-thumbs-up');
/*!40000 ALTER TABLE `unggul` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
