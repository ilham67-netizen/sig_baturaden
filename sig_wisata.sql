-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sig_wisata.data_wisata
CREATE TABLE IF NOT EXISTS `data_wisata` (
  `kd_wisata` varchar(10) NOT NULL,
  `nama_wisata` varchar(250) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longtitude` varchar(50) DEFAULT NULL,
  `alamat` text,
  `deskripsi` text,
  PRIMARY KEY (`kd_wisata`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sig_wisata.data_wisata: ~13 rows (approximately)
/*!40000 ALTER TABLE `data_wisata` DISABLE KEYS */;
INSERT INTO `data_wisata` (`kd_wisata`, `nama_wisata`, `latitude`, `longtitude`, `alamat`, `deskripsi`) VALUES
	('KW0001', 'Telaga Sunyi', '-7.3056975', '109.2422577', 'Sawah & Hutan, Limpakuwus, Sumbang,Banyumas, Jawa Tengah,Indonesia, 53183\r\n', '<p>Telaga Sunyi merupakan sungai hening dengan udara dan alam di sekitarnya masih segar alami. Meskipun bernama &#39;Sunyi&#39;, &#39;surga tersembunyi&#39; lereng Gunung Slamet ini justru ramai dikunjungi wisatawan. Perpaduan sungai dan air terjun ini berjarak 2,5 kilometer dari gerbang Kawasan Wanawisata Baturraden. Bertempat di tengah hutan Damar dan Pinus, ketenangan suasananya memberi efek relaksasi bagi wisatawan. Tak mengherankan jika objek wisata ini kerap menjadi tempat bertapa di masa lalu. Wisatawan tidak perlu membayar mahal untuk menikmati keindahan alam kawasan wisata ini Harga tiket masuk tempat wisata ini masih tergolong terjangkau yaitu mulai dari Rp 15.000. Daya tarik Telaga Sunyi bukan hanya jernih kolamnya, tapi juga aliran air terjunnya. Curahan airnya membentuk kolam besar di bawahnya dengan kedalaman 2-6 meter. Kolam tersebut menjadi favorit wisatawan untuk berenang dan snorkeling</p>\r\n'),
	('KW0002', 'Hutan Pinus Limpakuwus', '-7.300957163477238', ' 109.2446765846574', 'Dusun III  Limpakuwus, Sumbang,Banyumas,Jawa ', 'Hutan Pinus ini berada di Lereng selatan Gunung Slamet, Kabupaten Banyumas, Jawa Tengah. Berada di ketinggian 750 Mdpl, objek wisata yang terletak di Desa Limpakuwus, Kecamatan Sumbang ini menawarkan pesona keindahan yang alami. Deretan pohon pinus berusia 30 tahunan berjajar rapi. Rindang dan asri. Hutan Pinus Limpakuwus berada di lahan milik Perhutani. Luasnya sekitar 10 hektare. Hutan ini dikelola oleh Lembaga Masyarakat Desa Hutan (LMDH) Ardi Rahayu dan dijadikan lokasi wisata alam dengan keunikan dan keindahan alam yang dimiliki. Tak sekadar menawarkan keindahan, di sini juga tersedia wahana pendukung seperti arena ATV, Hammok, dan spot-spot berswafoto yang Instagramable. Harga sewa ATV tergolong murah, Rp20 ribu untuk 4 kali putaran dengan jarak 200 meter.'),
	('KW0003', 'Pancuran Pitu & Pancuran Telu', '-7.307364781570271', '109.22402266931314', 'Dusun III Kalipagu, Ketenger, Baturaden, Banyumas, ', 'Pancuran Pitu, atau Pancuran Tujuh, merupakan salah satu lokawisata yang terletak dalam lingkungan Lokawisata Baturaden. Merupakan sumber air panas bumi yang terpancar langsung dari kaki Gunung Slamet yang keluar melalui tujuh pancuran. \r\nPancuran Telu adalah tempat Pemandian air panas terbuka yang terletak di wana wisata Baturaden. Sebutan pancuran telu karena adanya tiga buah mata air panas yang berupa pancuran sehingga dikenal dengan sebutan pancuran telu (jawa, telu=tiga). Untuk mencapai pemandian pancuran telu ini, dilakukan rjalan terlebih dulu kebagian dalam atau sisi lain dari bukit/lembah yang ada pada lokasi ini. \r\n'),
	('KW0004', 'Sendang Bidadari', '-7.318057502569997', '109.24147642328694', 'Dusun II, Karangsalam, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151', 'Sendang Bidadari atau biasa disebut dengan Curug Lawang, merupakan air terjun yang terletak di Banyumas. Obyek wisata ini menawarkan kolam dengan air terjun yang sungguh menawan. Terletak di wilayah Baturaden, Curug Lawang mulai dikenal sebagai obyek destinasi wisata baru yang lokasinya cukup tersembunyi sejak tahun 2015.<br>\r\nBerbagai aktifitas selain mandi dan rappelling, traveller juga bisa berfoto-foto, berenang serta bersantai di atas batu yang berada disekitar Sendang Bidadari. Suasana yang sejuk, udara yang dingin bisa traveller rasakan di Sendang Bidadari yang letakknya di kaki Gunung Slamet.'),
	('KW0005', 'Curug Bayan', '-7.3236925859942446', '109.2181268266875', 'Dusun II Ketenger, Ketenger, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151', 'Curug Bayan berlokasi kurang lebih 3 kilometer dari Wisata Alam Baturaden. Yang terkenal di Kabupaten Purwokerto. Lokasinya pun sangat dekat dengan jalan raya, sehingga tidak perlu trekking untuk menuju air terjun. Alamnya begitu asri, ditambah keindahan dam peninggalan Jepang dan Belanda yang masih berdiri kokoh.<br>\r\nAir terjun ini memiliki ketinggian kurang lebih 7 meter saja, namun pesonanya tetap menakjubkan. Di bawahnya terdapat kolam dengan luas 200-300 meter persegi dengan kedalaman 2-5 meter. Air terjunnya begitu jernih sehingga dasar kolam berupa batuan dapat terlihat dengan sangat jelas. Pengunjung dapat berenang dan bermain air di kolam tersebut dengan bebas.<br>\r\nDi musim kemarau, adalah waktu yang tepat untuk bermain air di sini. Karena, volume air tidak terlalu tinggi dan aliran air sangat jernih. Bahkan, batu-batu dasar kolam turut menyembul ke permukaan dengan gagahnya. Menyembulnya batu-batu ini menjadi estetika tersendiri di pemandangan Curug Bayan.'),
	('KW0006', 'Curug Gede', '-7.326088052233746', '109.22066589785175', 'Melung, Baturraden, Dusun II Ketenger, Ketenger, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151', 'Wisata Curug Gede di Banyumas Jateng adalah salah satu tempat wisata yang berada di desa katenger, kecamatan batu raden, kabupaten banyumas. Curug Gede memiliki ketinggian sekitar 50 meteran dengan kolam penampungan dibawahnya sekitar 25 m. Curug ini berada di kawasan wisata Baturaden di Desa Ketenger. Di desa ini memiliki 9 buah air terjun, dimana salah satunya adalah Curug Gede ini.Curug ini berada di ketinggian +­­_ 1500 meter dpl dan juga dikelilingi oleh bukit'),
	('KW0007', 'Curug Jenggala', '-7.308771294860768', '109.20871332483775', 'Jl. Pangeran Limboro, Dusun III Kalipagu, Ketenger, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53152', 'Curug jenggala adalah air terjun yang memiliki ketinggian 30 meter dari pemukaan tanah. Curug ini mempunyai 3 air terjun yang tingginya sejajar dan air terjun yang ditengah memiliki arus yang paling deras. Objek wisata ini menampilkan keindahan alam yang masih asri dan air terjun yang memesona. Di bawah air terjun terdapat sungai dengan batuan besar. Objek wisata ini berada di kaki gunung slamet yang membuat objek wisata ini memiliki daya tarik tersendiri. Selain itu, objek wisata ini menyediakan spot love yang terbuat dari kayu. Sehingga menarik pengunjung untuk berfoto.'),
	('KW0008', 'Lokawisata Baturaden', '-7.313021497288429', '109.22902922668746', 'Lokawisata, Dusun I Karangmangu, Karangmangu, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151', 'Lokawisata Baturraden merupakan tempat wisata lokal yang berbaur dengan alam yang dipadukan dengan wisata modern. Tempat wisata ini mempunyai suhu udara yang cukup dingin karena terletak di kaki Gunng Slamet. Ada beberapa wahana yang bisa wisatawan nikmati ketika berada di Lokawisata Baturaden salah satunya adalah, wahana kesenian lokal yang dimana pengunjung dapat menyaksikan kesenian lokal dari Kabupaten Banyumas diantaranya adalah kesenian kuda lumping, calug, dan kenthongan serta dapat mendengarkan berbagai musik tradisional. Wahana lainnya seperti kolam renang, pemandian air panas, air mancur, kolam ikan, dan masih banyak lagi. Fasilitas yang ada di Lokawisata Baturaden ini juga cukup lengkap ada mushola, hotel, toilet, berbagi kuliner, resort, café, serta area parkir yang luas. '),
	('KW0009', 'Desa Wisata Ketengger', '-7.324403962512112', '109.2237329708659', 'Dusun II Ketenger, Ketenger, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151', 'Desa Wisata Ketenger adalah salah satu dari desa wisata yang ada di Jawa Tengah. Desa ini terletak di kawasan Baturaden, Banyumas, Jateng. Letaknya yang tak begitu jauh dari kawasan wisata Baturaden, menjadi desa wisata ini sebagai salah satu incaran para pelancong untuk liburan. Suasana yang disajikan di sini cukup berbeda dengan desa wisata yang lain. Desa Wisata Ketenger ini memiliki pemadangan alam yang begitu asri dengan curug sebagai pelengkapnya. Ya, jika berlibur ke desa wisata ini Anda bisa datang ke tiga curug, yaitu curug Gede, curug Kembar dan curug Kabayan. desa wisata ini juga menyediakan kolam pancing. Selain kolam pancing, Desa Wisata Ketenger juga memiliki waduk yang dinamakan sama dengan desa ini, Waduk Ketenger. Waduk ini merupakan salah satu sisa peninggalan zaman Jepang. Sekarang, waduk ini sudah diperbarui dan diperbaiki menjadi PLTA juga lokasi wisata air.'),
	('KW0010', 'Paguyuban Desa Melung', '-7.333623', '109.2077153', 'Dusun III, Melung, Kecamatan Kedungbanteng, Kabupaten Banyumas 53151', 'Wisata paguyuban desa Melung atau yang dikenal dengan kolam renang paguyuban ini merupakan sebuah wisata yang menawarkan sensasi bermain air ataupun berenang bagi wisatawan yang berkunjung. Konsepnya berbeda dari kolam renang pada umumnya. Ini merupakan kolam renang dengan konsep outdor, dibangun di kawasan perbukitan hijau yang memanjakan mata. Objek wisata ini berada di kawasan kaki gunung Slamet. Wisata ini buka setiap hari mulai pukul 08.00 sampai pukul 17.00. Harga tiket masuk wisata dan berenang di kolam hanya Rp 10.000 saja.'),
	('KW0011', 'Curug Pengantin', '-7.3331743', '109.1026504', 'Grumbul Cidondong, Desa Cirahab, Kecamatan Lumbir, Kabupaten Banyumas 53151', 'Curug Pengantin Baturaden ini berada di kawasan Dusun Wisata Kalipagu, sebuah daerah yang berada di wilayah Desa Ketenger, yang masih merupakan daerah wisata Baturraden. Lokasinya sendiri tidak begitu jauh dari Kebun Raya Baturraden. Curug Pengantin atau Curug Penganten adalah salah satu curug terkenal yang berada di Kabupaten Banyumas. Dengan ketinggian yang mencapai sekitar 25 m dan debit air yang cukup besar bila di musim penghujan.'),
	('KW0012', 'Small World (Taman Miniatur Dunia)', '-7.331140794178441', '109.22520559776154', 'Jl. Raya Baturaden Barat No.270, Ketenger, Dusun I Karangmangu, Karangmangu, Kec. Baturaden, Purwokerto, Jawa Tengah 53151', 'Small World Purwokerto merupakan salah satu destinasi wisata edukasi berupa bangunan miniatur  sebuah tempat-tempat / monumen-monumen nasional yang berada di seluruh penjuru dunia. Di tempat wisata small world Purwokerto ini, kita akan menjumpai berbagai monumen-monumen Nasional yang berada di seluruh penjuru dunia ini seperti Kincir Angin Belanda, Menara Eiffel, Twin Tower, Big Ben, Colosseum, Angkorwatt, Patung Merlion dan juga banyak lainnya.'),
	('KW0013', 'Bukit Tranggulasih', '-7.335133533028236', '109.20054259785189', 'Desa Windujaya Rt 03/Rw 05, Kecamatan Kedungbanteng, Kabupaten Banyumas, Jawa Tengah 53151', 'Bukit Tranggulasih merupakan objek wisata alam berupa taman rekreasi buatan di Banyumas seperti Taman Satria, Bali Kemambang, dan Andhang Pangeran. Pemandangan yang disajikan Bukit Tranggulasih begitu mempesona, dari atas bukit berketingian sekitar 750 mdpl kita akan bisa menyaksikan pemandangan wilayah Purwokerto, Purbalingga hingga Pemalang. Kawasan Bukit Tranggulasih awalnya merupakan arena offroader dan croser, sehingga cocok sebagai arena memacu adrenalin. Kawasan Bukit Tranggulasih juga cocok dijadikan sebagai lokasi camping.');
/*!40000 ALTER TABLE `data_wisata` ENABLE KEYS */;

-- Dumping structure for table sig_wisata.gambar_wisata
CREATE TABLE IF NOT EXISTS `gambar_wisata` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) DEFAULT NULL,
  `kd_wisata` varchar(10) DEFAULT NULL,
  `gambar_wisata` text,
  `error` text,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_wisata.gambar_wisata: ~23 rows (approximately)
/*!40000 ALTER TABLE `gambar_wisata` DISABLE KEYS */;
INSERT INTO `gambar_wisata` (`id_gambar`, `token`, `kd_wisata`, `gambar_wisata`, `error`) VALUES
	(1, '32908', 'KW0001', 'telaga_sunyi.jpg', NULL),
	(2, '3423424', 'KW0002', 'hutan_pinus.jpg', NULL),
	(3, '4543453', 'KW0007', 'curug_jenggala.jpg', NULL),
	(4, '23432', 'KW0003', 'pancuran_telu.jpg', NULL),
	(5, '543453', 'KW0003', 'pancuran_telu2.jpg', NULL),
	(6, '7892340', 'KW0006', 'curug_gede.jpg', NULL),
	(7, '34524', 'KW0005', 'curug_bayan.jpg', NULL),
	(8, '945030', 'KW0005', 'curug_bayan2.jpg', NULL),
	(9, '45325', 'KW0004', 'sendang_bidadari.jpeg', NULL),
	(10, '453453', 'KW0004', 'curug_sendang.jpg', NULL),
	(11, ' 64643', 'KW0008', 'loka_wisata.jpg', NULL),
	(12, '345345', 'KW0008', 'lokawisata_baturaden.jpg', NULL),
	(13, '42342', 'KW0009', 'ketengger.jpg', NULL),
	(14, '76784', 'KW0009', 'wisata_ketenger.jpeg', NULL),
	(15, '67 463', 'KW0012', 'small_world.jpg', NULL),
	(16, '99029', 'KW0012', 'small_world2.jpg', NULL),
	(17, '5632', 'KW0013', 'tranggulasih.jpg', NULL),
	(18, '56432', 'KW0013', 'tranggulasih2.jpg', NULL),
	(19, '54321', 'KW0011', 'curug_penganten2.jpg', NULL),
	(20, '74399', 'KW0011', 'curug_penganten.jpg', NULL),
	(21, '445232', 'KW0010', 'desa_melung.jpg', NULL),
	(22, '03859', 'KW0010', 'desa_melung2.jpg', NULL);
/*!40000 ALTER TABLE `gambar_wisata` ENABLE KEYS */;

-- Dumping structure for table sig_wisata.peta_wisata
CREATE TABLE IF NOT EXISTS `peta_wisata` (
  `kd_peta` varchar(10) NOT NULL,
  `nama_peta` varchar(250) DEFAULT NULL,
  `geojson_file` varchar(150) DEFAULT NULL,
  `warna` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_peta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sig_wisata.peta_wisata: ~0 rows (approximately)
/*!40000 ALTER TABLE `peta_wisata` DISABLE KEYS */;
INSERT INTO `peta_wisata` (`kd_peta`, `nama_peta`, `geojson_file`, `warna`) VALUES
	('KP0001', 'Baturaden', 'baturaden.geojson', '#ff7b00');
/*!40000 ALTER TABLE `peta_wisata` ENABLE KEYS */;

-- Dumping structure for table sig_wisata.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(250) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_wisata.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_users`, `nama_user`, `username`, `password`) VALUES
	(1, 'Anggi Subarkah', 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
