-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Feb 2019 pada 04.31
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkarangtaruna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(2) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `gambar1` varchar(300) NOT NULL,
  `gambar2` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `judul`, `isi`, `gambar`, `gambar1`, `gambar2`, `tanggal`, `hits`) VALUES
(2, 'Coaching Clinic Panahan', 'Rasulullah bersabda, ''''Ajarilah anak-anak kalian berkuda, berenang, dan memanah," (HR Bukhari/Muslim). Sementara, dalam kesempatan lain, Rasullullah bersabda, ''''Lemparkanlah (panah) dan tunggangilah (kuda).''''(HR Muslim)\r\n<br><br>\r\n Â  Â  Â  Â Melihat hadis tersebut, jelas sekali bahwa olahraga memanah memiliki kaitan erat dengan peradaban Islam. Pada masa Rasulullah dan khulafaur rasyidin, panah dan memanah menjadi sarana penting untuk berperang. Keahlian memanah memberi sumbangsih besar kepada kaum Muslimin dalam memetik kemenangan di berbagai medan perang.\r\n<br><br>\r\nÂ  Â  Â  Â Dalam kisah yang lain, kepiawaian memanah diyakini menjadi kunci kemenangan pasukan yang dipimpin Sultan Muhammad Alfatih saat berjuang merebut Konstatinopel pada abad ke-14. Dalam operasi penaklukan itu, pasukan Sultan Muhammad terlebih dahulu berenang mengarungi Selat Bosphorus, kemudian berkuda sembari melepaskan ribuan anak panah untuk mengobrak-abrik pasukan musuh. Akhirnya, kemenangan pun diperoleh.\r\n<br><br>\r\nÂ  Â  Â  Â Pada masa ketika bangsa Eropa masih terseok dalam ''''Era Kegelapan'''', peradaban Islam sudah berhasil menciptakan beragam pencapaian, baik di bidang budaya, ilmu pengetahuan, serta seni. Bahkan, ketika bangsa Eropa masih sibuk memikirkan dan membahas berapa banyak malaikat yang duduk di pucuk pohon cemara, para ulama Arab sudah menyelidiki berbagai aspek dari ilmu farmasi, psikoterapi, hingga astronomi.\r\n<br><br>\r\nÂ  Â  Â  Â Di bidang kedokteran pun ilmuwan Islam bergerak lebih maju dan lebih dulu dibanding ilmuwan Barat. Dunia Islam sudah ratusan tahun menemukan teknik anestesi dan praktik pembedahan ketika Barat belum tahu apa-apa tentang hal itu. \r\n\r\nBegitu pula dalam hal memanah. Sejak lama, para ilmuwan Islam mengatakan bahwa memanah merupakan bagian dari ilmu pengetahuan yang dapat  dikembangkan dan dipelajari lebih jauh agar membawa hasil yang lebih baik dan sempurna.\r\n<br><br>\r\nÂ  Â  Â  Â Banyak bukti menunjukkan, kegiatan memanah sudah ada sejak masa penyebaran Islam. Sejumlah teks yang ditemukan menunjukkan adanya pembahasan mengenai panahan, baik yang digunakan dalam peperangan maupun olahraga. Hal ini bukanlah hal yang mengejutkan karena memanah sudah tertanam dalam budaya Islam, bahkan sejak masa Nabi Adam AS diutus Allah SWT ke dunia.\r\n<br><br>\r\nÂ  Â  Â  Â Sejarah Islam menyatakan, Allah SWT mengutus Malaikat Jibril untuk memberikan busur dan dua anak panah kepada Nabi Adam. Busur dan anak panah itu kemudian digunakan untuk membunuh seekor burung yang mencuri tanaman milik Adam.\r\n\r\nTak hanya Nabi Adam, tetapi Nabi Muhammad pun merupakan sosok yang andal dalam hal memanah. Bahkan, di Istana Topkapi, Istanbul, Turki, tersimpan tiga buah anak panah yang diyakini milik Nabi Muhammad.\r\n<br>\r\nSumber: Pusat Data Republika', '2018_07_25_21.jpg', '', '', '2018-07-25', 65),
(3, 'Latihan Futsal Rutin Karang Taruna', 'Karang Taruna RT 008, RW 009 memiliki beberapa kegiatan rutin setiap minggunya. Dimana kegiatan ini mempunya tutor atau pelatih masing-masing dalam menjalankan kegiatannya. Kegiatan itu salah satunya adalah Latihan Futsal Rutin Anak-Anak Karang Taruna RT 008, RW 009 yang dilakukan setiap hari sabtu dan minggu pada pagi hari atau sore hari. Latihan rutin ini digandrungi bukan hanya oleh anak remaja maupun dewasa, tapi juga anak-anak mulai dari TK, SD dan juga SMP. <br><br>\r\nÂ Â Â Â Karang Taruna RT 008, RW 009 memanggil pelatih dari dalam dan luar karang taruna, karena kebetulan karang taruna RT 008, RW 009 memiliki seseorang yang sudah biasa bermain futsal di dalam kompetisi - kompetisi tingkat nasional, seperti kompetisi antar kampus maupun yang lainnya. Jadi, Ketua Karang Taruna sekaligus Pembina Karang Taruna RT 008, RW 009 berpendapat untuk menjadikan anggotanya sendiri sebagai pelatih futsal karang taruna RT 008, RW 009. <br><br>\r\nÂ Â Â Â Latihan Futsal Karang Taruna RT 008 juga sudah melakukan beberapa kali latih tanding dengan Karang Taruna sekitar, bahkan sudah pernah mengikuti ajang kompetisi kecil-kecilan yang diadakan oleh suatu instansi atau suatu perkumpulan biasa.', '2018_07_25_80.jpg', '', '', '2018-07-26', 9),
(4, 'Makrab (Malam Keakraban) Karang Taruna RT 008 RW 009', 'Malam Keakraban atau yang biasa kita sebut sebagai Makrab adalah suatu rangkaian kegiatan untuk menambah rasa persaudaraan, mempererat tali silaturahmi, menciptakan suasana kekeluargaan, dan persahabatan. Karang Taruna RT 008, RW 009 juga memiliki kegiatan Makrab yang rutin diadakan minimal 1 tahun sekali. Kegiatan Makrab diperuntukkan untuk lebih mempererat chemistry antar anggota, dan bisa membedakan keadaan saat dikeadaan formal maupun non formal. Membedakan saat berinteraksi sebagai teman sekampung atau sedaerah dan saat berinteraksi sebagai sesama anggota karang taruna. Untuk membentuk jalinan itu semua Karang Taruna RT 008, RW 009 mengadakan makrab. Beberapa agendapun disusun demi lancarnya kegiatan makrab yaitu:<br>\r\n<br>\r\nKegiatan<br>\r\n<br>1. Masak & Makan Bersama<br>\r\n     Â Â Â Â Agenda pertama adalah masak dan makan bersama, sebelumnya panitia sudah mengahruskan kepada setiap peserta membawa 1 gelas beras, 1 butir telur, dan uang iuran sebesar 10rb rupiah.. uang ini akan digunakan untuk membeli bahan makanan lainnya, jika ada lebih maka akan menjadi kas DKC Tanah Laut. kegiatan ini dimulai pukul 17.00.<br><br>\r\n\r\n2. Rapat Korwil<br>\r\nÂ Â Â Â Setelah makan-makan , selanjutnya DKC Tanah Laut akan mengadakan rapat antar korwil yang sudah ditentukan pada rapat pleno sebelumnya, yaitu membahas :<br>\r\n Â Â Â Â Â Â Â Â  a. Penyampaian & Penjelasan hasil rapat pleno.<br>\r\nÂ Â Â Â Â Â Â Â  b. Penentuan waktu kapan iuran diaktifkan.<br>\r\nÂ Â Â Â Â Â Â Â  c. keputusan Tanggal keberangkatan kunjungan ke DKR.<br>\r\nÂ Â Â Â Â Â Â Â  d. pelaksanaan kunjungan ke Ambalan.<br>\r\n\r\nrapat akan dipimpin oleh ketua DKC , selanjutnya peserta rapat dibagi permasing-masing korwil untuk membahas c & d.<br><br>\r\n\r\n3. Sharing Pengalaman<br>\r\nÂ Â Â Â Kegiatan ini dilaksanakan di halaman sekretariat kwarcab (Jika memungkinkan) akan dibuat api unggun kecil, semua anggota DKC akan duduk membentuk lingkaran mengelilingi api unggun, kegiatan dipimpin seksi acara dan kegiatan. Cerita nya bebas selama berhubungan dengan Pramuka.<br><br>\r\n\r\n4. Berbagi Kado<br>\r\nÂ Â Â Â Sebelumnya para peserta sudah menyiapkan bingkisan atau kado yang akan diserahkan kepada seksi acara, isi kado harus bermanfaat atau bisa dikonsumsi.<br><br>\r\n\r\n5. Nonton Bareng<br>\r\nÂ Â Â Â Setelah beberapa kegiatan sudah dilalui, kegiatan dilanjutkan nonton bareng didepan sekretariat kwarcab sambil meluruskan urat-urat persendian dan menikmati hidangan malam.<br><br>\r\n\r\n6. Sholat Berjamaah<br>\r\nÂ Â Â Â Untuk menambah kedakatan kepada Allah Swt maka sangat penting dan harusnya melakukan sholat berjamaah yang dapat dilakukan di mesjid terdekat.<br><br>\r\n\r\n7. Game Kecil<br>\r\nÂ Â Â Â Game ini dimaksudkan untuk melatih keberanian yaitu meniup balon sampai pecah, kemudian memerankan atau memperagakan kata yang terdapat di dalam balon.<br><br>\r\n\r\n8. Laper (Lari Pagi Ceria)<br>\r\nÂ Â Â Â Untuk menyehatkan badan dan menambah ceria DKC di pagi hari, semua peserta melakukan olahraga pagi, senam pagi dan lari pagi. Rute nya yaitu disekitar area Pelaihari.<br>', '2018_07_25_19 - Copy.jpg', '', '', '2018-07-26', 17),
(5, 'Perayaan Ulang Tahun Republik Indonesia Ke-73', 'Mengikuti lomba pada tanggal 17 Agustus dalam rangka merayakan hari kemerdekaan tersebut rasanya sudah menjadi tradisi dari banyak masyarakat Indonesia. Banyak lomba yang bisa dimainkan bagi anak-anak hingga dewasa, yang biasa dimainkan di daerah sekitaran rumah, sekolah, komunitas dan berbagai macam instansi pemerintah maupun swasta. Serangkaian lomba ini biasa digunakan untuk memeriahkan hari kemerdekaan dimana untuk menambah semangat-semangat baru untuk pemuda dan pemudi bangsa dalam memajukan bangsa indonesia kedepannya.\r\n\r\n<br>\r\nÂ Â Â Â \r\n\r\n<br>\r\nÂ Â Â Â Pemerintah sudah memiliki tema dan logo yang digunakan sebagai branding rangkaian kegiatan Peringatan Hari Ulang Tahun Republik Indonesia atau HUT RI ke-73 Kemerdekaan Republik Indonesia. Tema HUT RI tahun 2018 ini, "73 Tahun Indonesia Merdeka, Disiplin dan Berbudaya". Logo HUT RI tahun 2018 pun memuat angka "73" dan kalimat "INDONESIA MERDEKA, DISIPLIN DAN BERBUDAYA".\r\n<br>\r\n<br>\r\nÂ Â Â Â Karang Taruna RT 008/09 pun tak mau ketinggalan dalam membuat tema dan tujuan kegiatan yang akan diselenggarakan dalam memeriahkan hari Kemerdekaan Indonesia. Setiap tahunnya karang taruna selalu membuat sebuah kegiatan yang positif dalam menyambut hari kemerdekaan, dimulai dari lomba, jalan santai bersama, upacara, dan lain lain. Pada tahun ini Karang Taruna RT 008/09 Cakung Timur mempunya tema sebagai berikut :\r\n<br>\r\n<br>\r\nNama Kegiatan : "Perayaan Hari Ulang Tahun Republik Indonesia yang ke-73 Tahun"<br>\r\nTema Kegiatan : "Menumbuhkan, Membangun dan Membangkitkan Jiwa Nasionalisme Terhadap Bangsa Indonesia" <br>\r\nTujuan :<br>\r\n<ul>\r\n<li>Menjadi ajang silaturahmi warga RT 008/09 Cakung Timur, Cakung, Jakarta Timur.</li>\r\n<li>Membangun rasa Nasionalisme masyarkat terhadap Bangsa.</li>\r\n<li>Sebagai upaya menumbuhkan dan membangun kesadaran generasi muda sebagai penerus bangsa.</li>\r\n<li>Sebagai sarana untuk menghargai dan mengingat jasa para pahlawan</li>\r\n</ul>\r\n\r\n', 'TemadanTujuan.jpeg', '', '', '2018-08-01', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar1` varchar(200) NOT NULL,
  `gambar2` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `gambar1`, `gambar2`, `tanggal`, `hits`) VALUES
(5, 'Robohnya Pembatas Dinding JGC (Jakarta Garden City)', 'Pada malam hari, tepatnya pada pukul 20.00 tanggal 5 Februari 2018, telah terjadi musibah yang menimpa warga RT 008 RW 009, yaitu robohnya Pembatas Dinding Jakarta Garden City (JGC). Kejadian itu berada tepat diperbatasan daerah RT 008 dengan RT 009. Kejadian ini tidak menimbulkan korban, tetapi merugikan beberapa warga. Rumah beberapa wargapun banyak yang hancur bagian belakang rumahnya karena tertimpa puing-puing dari robohan Pembatas Dinding Jakarta Garden City (JGC) tersebut.\r\n<br><br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Diduga karena tak kuat menahan derasnya arus aliran Sungai Ciliwung, tembok sepanjang 100 meter ambruk dan menimpa sejumlah rumah warga di kawasan Kayu Tinggi, Jakarta Timur. Tembok memisahkan antara perumahan Jakarta Garden City dan permukiman Penduduk Kayu Tinggi. Rumah ambruk saat sang pemilik hendak menjalankan Shalat Isya. Pemilik rumah langsung berteriak memberi tahu warga lain untuk keluar dari dalam rumah. \r\n<br><br>\r\n<iframe width="100%" height="350" src="https://www.youtube.com/embed/Fe48xW5CwjQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 'roboh.png', '', '', '2018-07-25', 37),
(6, 'Banjir Yang Melanda Cakung Timur Khususnya Gg Cempaka VI', 'Sejumlah warga Cakung Timur, Jakarta Timur, Jumat (16/2/2018) sibuk membersihkan rumah mereka yang terendam banjir pada Kamis kemarin. Iwan, warga setempat, mengatakan banjir mulai surut dini hari tadi. "Habis tengah malam (ketinggian air) sudah mulai turun. Sekitar jam 07.00 tadi baru benar-benar kering. Makanya sekarang warga lagi beres-beresin rumah," kata Iwan saat ditemui Kompas.com, Jumat.\r\n<br><br>\r\nÂ Â Â Â Kawasan permukiman di Cakung Timur, Jakarta Timur terendam banjir. Banjir itu diakibatkan hujan deras yang melanda Jakarta sejak pagi tadi. "Genangan air setinggi 40 cm di Kompleks Cakung Timur dikarenakan hujan deras," kata Kasi Pengawas Sudin Penanggulangan Kebakaran dan Penyelamatan (PKP) Jakarta Timur, Gatot Sulaiman saat dimintai konfirmasi, Senin (5/2/2018) sekitar pukul 09.10 WIB. Menurut Gatot, banjir pun diperparah karena penampungan air di kawasan permukiman tersebut sudah tidak mampu menampung air. Saat ini petugas masih melakukan penyedotan. "Saat ini dilakukan penyedotan," ucapnya.\r\n<br><br>\r\n<iframe width="100%" height="300" src="https://www.youtube.com/embed/p_guWeX51fo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 'banjiraeon.jpg', '', '', '2018-07-26', 43),
(7, 'Warga RT 008/09 Cakung Timur Siap Mensukseskan Asian Games 2018', 'Pangdam Jaya/Jayakarta, Mayjen TNI Joni Supriyanto menyatakan Kodam Jaya telah berkoordinasi dan siap mensukseskan perhelatan even akbar olahraha, Asian Games 2018 Agustus mendatang. Hal tersebut terwujud saat dia melakukan kunjungan untuk koordinasi ke markas Indonesia Asia Games Organizing Committee (Inasgoc) pada Jumat (4/5) kemarin. "Kami jangan sampai terdadak, makanya kami juga sudah menyiapkan beberapa langkah awal seperti melaksanakan koordinasi, korve dan lain-lain", kata Joni, seperti dalam keterangan pers yang diterima Republika, Sabtu (5/5).\r\n<br>\r\n<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Pada saat kunjungannya tersebut, Joni diterima langsung oleh Ketua Inasgoc Erick Thohir dan Wakil Ketua Letjen (Purn) Syafri Syamsudin di Gedung Serba Guna Inasgoc Senayan. Langkah Pangdam Jaya menyambangi penyelenggara even akbar olahraga tersebut sejalan dengan instruksi Presiden RI Joko Widodo yang meminta seluruh Kabinet dan jajarannya agar lebih meningkatkan dukungan demi kesuksesan Asian Games.\r\n<br>\r\n<a href="https://www.republika.co.id/berita/asian-games/news-asian-games-2018/18/05/06/p891x7415-datangi-inasgoc-kodam-jaya-siap-sukseskan-asian-games-2018">Datangi Inasgoc, Kodam Jaya Siap Sukseskan Asian Games 2018</a>\r\n<br><br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Dengan banyaknya berita tersebut bahwa TNI dan Polri siap mensukseskan ASIAN GAMES 2018, kami warga RT 008/09 pun juga tak ingin kalah dalam mensukseskan ASIAN GAMES 2018. Walaupun tak bisa terjun langsung dalam mensukseskan ASIAN GAMES 2018, Karang Taruna RT 008/09 Cakung Timur melakukan beberapa hal kecil dalam ikut memeriahkan yang insya allah akan ikut membantu mensukseskan ASIAN GAMES 2018 dengan cara mengadakan acara nonton bersama ASIAN GAMES, mengadakan beberapa lomba yang mirip dengan ASIAN GAMES, dan beberapa kegiatan positif untuk membangun pemuda pemudi yang insya allah akan mungkin akan ikut ASIAN GAMES beberapa tahun kemudian.', 'WhatsApp Image 2018-07-27 at 7.14.03 PM.jpeg', '', '', '2018-08-02', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `tanggal`) VALUES
(6, 'Buka Puasa Bersama 2018 (0)', 'WhatsApp Image 2018-06-09 at 8.42.28 PM.jpeg', '2018-07-26'),
(7, 'Buka Puasa Bersama 2018 (1)', 'WhatsApp Image 2018-06-09 at 8.42.31 PM.jpeg', '2018-07-26'),
(8, 'Buka Puasa Bersama 2018 (2)', 'WhatsApp Image 2018-06-09 at 8.42.38 PM.jpeg', '2018-07-26'),
(9, 'Buka Puasa Bersama 2018 (3)', 'WhatsApp Image 2018-06-09 at 8.42.32 PM.jpeg', '2018-07-26'),
(10, 'Coaching Clinic Panahan (0)', 'WhatsApp Image 2018-07-21 at 3.26.49 PM.jpeg', '2018-07-26'),
(11, 'Coaching Clinic Panahan (1)', 'WhatsApp Image 2018-07-21 at 3.26.50 PM(1).jpeg', '2018-07-26'),
(12, 'Coaching Clinic Panahan (2)', 'WhatsApp Image 2018-07-21 at 3.26.50 PM.jpeg', '2018-07-26'),
(13, 'Jalan-Jalan Bersama Karang Taruna di Puncak Bogor (0)', '2018_07_25_20.jpg', '2018-07-26'),
(14, 'Jalan-Jalan Bersama Karang Taruna di Puncak Bogor (1)', '2018_07_25_1.jpg', '2018-07-26'),
(15, 'Jalan-Jalan Bersama Karang Taruna di Puncak Bogor (2)', '2018_07_25_11.jpg', '2018-07-26'),
(16, 'Jalan-Jalan Bersama Karang Taruna di Puncak Bogor (3)', '2018_07_25_19.jpg', '2018-07-26'),
(17, 'Jalan-Jalan Bersama Karang Taruna di Puncak Bogor (4)', '2018_07_25_9.jpg', '2018-07-26'),
(18, 'Lomba Makan Kerupuk 17 Agustus 2016', 'SUNP0034.JPG', '2018-07-26'),
(19, 'Latihan Futsal Rutin Anak-Anak Karang Taruna', '2018_07_25_80.jpg', '2018-07-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_artikel` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(7, 5, 'Firman Agam', 'agam.pro234@gmail.com', 'WOOOY', '2018-07-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_agenda`
--

CREATE TABLE `komentar_agenda` (
  `id_komentar` int(5) NOT NULL,
  `id_agenda` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar_agenda`
--

INSERT INTO `komentar_agenda` (`id_komentar`, `id_agenda`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(1, 2, 'Firda Dwi Gameswanti', 'frdgameswanti@gmail.com', 'Agam Ganteng Deh!', '2018-07-25'),
(2, 2, 'Firman Agam', 'agamgans89@gmail.com', 'Sok lu gam!', '2018-07-25'),
(3, 2, 'Cristian Ronaldo', 'cr.7@gmail.com', 'Hallo!', '2018-07-25'),
(4, 2, 'Siti Badriah', 'Siti.B@gmail.com', 'Lagi Syantik nih!', '2018-07-25'),
(5, 5, 'Firman Agam', 'agam.pro234@gmail.com', 'Hai ini komentar pertamaku, mohon dibantu agar saya mengerti cara penggunaan web ini!', '2019-01-14'),
(6, 5, 'Firman Agam', 'agam.pro234@gmail.com', 'Hai ini komentar keduaku, yang pertama lupa ke ss, mohon dibantu agar saya mengerti cara penggunaan web ini!', '2019-01-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `judul`, `link`, `urutan`) VALUES
(1, 'Home', 'index.php', 1),
(5, 'Galeri', '?tampil=galeri', 3),
(7, 'Kepengurusan', '?tampil=kepengurusan', 7),
(8, 'Alamat Sekretariat', '?tampil=alamatsekretariat', 6),
(9, 'Berita Terkini', '?tampil=beritaterkini', 2),
(10, 'Agenda Kegiatan', '?tampil=agendakegiatan', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `balasan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `balasan`, `tanggal`) VALUES
(1, 'Firman Agam', 'agamgans89@gmail.com', 'test pesan', 'ini cuma iseng cuy', 'sue lu		', '2016-09-01'),
(5, 'Firmansyah', 'firmansyah89@gmail.com', 'pesan dari pengunjung website', 'cuk', 'Laler lu cuk ya					', '2016-09-02'),
(6, 'asdasd', 'asdasd', 'pesan dari pengunjung website', 'asdasd', '', '2016-09-16'),
(7, 'asdasdas', 'asdasd', 'pesan dari pengunjung website', 'asdasdasd', '', '2016-09-16'),
(8, 'Firman Agam', 'agamgans89@gmail.com', 'pesan dari pengunjung website', 'WOOOOYYY', '', '2016-09-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'agambondan', 'agam234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link_video` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul`, `link_video`, `tanggal`) VALUES
(2, 'Maroon 5 - Sugar', '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/09R8_2nJtjg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '2018-07-20'),
(8, 'Siti Badriah - Lagi Syantik', '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Tet6_BlStEM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '2018-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `komentar_agenda`
--
ALTER TABLE `komentar_agenda`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar_agenda`
--
ALTER TABLE `komentar_agenda`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
