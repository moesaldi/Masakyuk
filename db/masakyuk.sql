-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 06:31 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masakyuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'vegetarian'),
(2, 'non vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `nama_resep` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `ingridient` text NOT NULL,
  `rating` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `petunjuk_pembuatan` text NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `nama_resep`, `deskripsi`, `deskripsi_singkat`, `ingridient`, `rating`, `gambar`, `petunjuk_pembuatan`, `kategori`) VALUES
(1, 'Ayam Kecap', 'Olahan ayam tidak pernah gagal memuaskan selera makan keluarga di rumah. Salah satunya ayam kecap pedas gurih yang bisa disajikan sebagai menu utama. Sedikit berminyak, menu ini memberi kombinasi rasa manis, pedas, dan gurih sekaligus. ', 'Ayam kecap adalah potongan ayam yang dilumuri dengan kecap manis', '- 300 gram ayam potong<br>\r\n- 2 siung bawang putih<br>\r\n- 1 ruas jahe<br>\r\n- 200 ml air<br>\r\n- 5 buah cabai rawit<br>\r\n- 2 butir bawang merah<br>\r\n- merica bubuk secukupnya<br>\r\n- 2 sendok makan kecap manis<br>\r\n- minyak goreng secukupnya<br>\r\n- 1 sendok teh gula pasir<br>\r\n- garam secukupnya<br>', 0, 'ayam_kecap.jpg', '1. Goreng ayam setengah matang, tiriskan.<br>\r\n2. Tumis bawang merah dan bawang putih, tambahkan jahe memar, irisan cabai hingga harum.<br>\r\n3. Beri garam dan merica bubuk, lalu tuang air.<br>\r\n4. Setelah mendidih, masukkan ayam. Tambahkan kecap dan gula pasir secukupnya.<br>\r\n5. Masak sampai ayam matang dan kuah menyusut hingga separuhnya.<br>', 2),
(2, 'Ayam Goreng Mentega', 'Ayam merupakan protein hewani yang mudah diolah menjadi beragam sajian, termasuk ayam goreng mentega. Dikenal sebagai masakan peranakan, ternyata ayam goreng mentega berasal dari Belanda yang ditandai dengan kehadiran mentega dan saus Inggris. Masuk ke Indonesia di zaman kolonial Belanda, masakan ini dipopulerkan dari restoran peranakan.<br\r\n\r\n \r\n\r\nProses membuat menu hasil silang budaya ini ternyata cukup mudah. Potongan ayam menjadi bahan utamanya. Untuk pelengkap, Kawan Kuliner bisa tambahkan potongan daun bawang segar untuk menambah aroma. ', 'Ayam gorng mentega adalah potongan ayam yang dilumuri dengan bumbu mentega yang enak dan gurih', '- 4 siung bawang putih<br>\r\n- 1 kg ayam (potong sesuai selera)<br>\r\n- 3 cm kunyit (haluskan)<br>\r\n- kaldu ayam bubuk (secukupnya)<br>\r\n- ketumbar bubuk (secukupnya)<br>\r\n- garam (secukupnya)<br>\r\n\r\nBumbu saus mentega:<br>\r\n- mentega (secukupnya)<br>\r\n- 4 sdm kecap manis<br>\r\n- 1 sdm saus tiram<br>\r\n- 1 sdt tepung maizena (larutkan ke 1 sdm air)<br>\r\n- 4 siung bawang putih (cincang halus)<br>\r\n- 1 batang daun bawang (cincang kasar)<br>\r\n- 1 buah bawang bombay (iris tipis)<br>\r\n- 1 sdm kecap asin<br>\r\n- merica bubuk (secukupnya)<br>\r\n- garam (secukupnya)<br>\r\n- 2 buah cabai merah besar (buang isi, iris serong)<br>\r\n- 150 ml air<br>', 1, 'ayam_mentega.jpg', 'a. Rebus ayam bersama bumbu sampai matang, tunggu sampai asat. Lalu goreng ayam sampai matang. Tiriskan.<br>\r\nb. Buat saus mentega, lelehkan mentega 2 sdm.<br>\r\nc. Tumis bawang putih dan bawang bombay. Tambahkan kecap manis, kecap asin, saus tiram, merica bubuk, tepung maizena, garam, daun bawang, dan cabai merah. Aduk rata. Tuang air, aduk dan masak hingga mendidih.<br>\r\nd. Masukkan ayam goreng, aduk rata.<br>', 2),
(3, 'Ayam Goreng Pedas Manis', 'Ayam Goreng Pedas Manis adalah ayam goreng bumbu bawang putih dengan dilimuri saus pedas manis', 'Ayam Goreng Pedas Manis adalah ayam goreng bumbu bawang putih dengan dilimuri saus pedas manis', '- 300 gram dada ayam, potong-potong<br>\r\n- 2 sdm tepung maizena<br>\r\n- 1 butir telur<br>\r\n- 1 sdm tepung terigu<br>\r\n- 1 sdt garam<br>\r\nBumbu pedas manis:<br>\r\n- 6 siung bawang putih, geprak, tak perlu dibuang kulitnya<br>\r\n- 4 buah cabai merah kering, haluskan beberapa<br>\r\n- 1 sdm madu<br>\r\n- 2 siung bawang merah, haluskan<br>\r\n- 2 sdm gula pasir<br>\r\n- 1 sdm margarin<br>', 1, 'pedasmanis.jpg', 'a. Campur semua tepung, garam, dan telur. Rendam ayam dan biarkan selama 30 menit.<br>\r\nb. Goreng ayam hingga kecokelatan, tiriskan.<br>\r\nc. Tumis bawang putih sampai kering dan matang. Masukkan margarin, tumis bawang merah hingga harum. Masukkan gula pasir, cabai kering dan madu.<br>\r\nd. Masukkan ayam goreng dan aduk rata dengan bumbu.<br>', 2),
(4, 'Nasi Tim Vegetarian', 'Nasi Tim dengan campuran sayuran dan jamur dengan bumbu yang sedap yang sangat cocok untuk para vegetarian.', 'Nasi tim dengan campuran sayurran dan jamur.', '3 cup beras, cuci bersih<br>\r\n5 cm jahe, iris2<br>\r\n1 sdm saus tiram<br>\r\n2 sdm kecap asin Raja Rasa<br>\r\n1 sdm kecap manis<br>\r\n1/2 sdm minyak wijen<br>\r\n1 sdt kaldu jamur<br><br>\r\nBahan Lauk:<br>\r\n5 cm jahe, digeprek<br>\r\n5 butir telur rebus (optional)<br>\r\n1 sdt margarin<br>\r\n1 sdm minyak goreng olive<br>\r\n3 lbr ham putih<br>\r\n1 bh wortel ukuran sedang<br>\r\n5 bh jamur tiram<br>\r\n500 ml air panas<br>\r\n2 sdm saus tiram<br>\r\n1 sdm kecap manis<br>\r\n1 sdm kecap asin Raja Rasa<br>\r\n1 sdm kecap jamur<br>\r\n1 sdt garam<br>\r\n1 sdt kaldu jamur<br>\r\n1 sdt gula pasir<br>\r\n1 sdm minyak wijen<br>\r\nCabe, digoreng dan diulek kasar sbg pendamping nasi tim<br>', 1, 'nasitim.jpg', 'a. Rendam jamur dgn air panas hingga mengembang dan lembek, cuci bersih dgn digosok2, peras. Potong kecil2 jamur, potong dadu wortel, potong dadu ham.<br>\r\nb. Panaskan margarin dgn minyak. Tumis ham hingga kecoklatan, tambahkan jahe, tumis hingga harum. Tambahkan jamur dan wortel, tumis dan aduk rata brsama ham.<br>\r\nc. Tambahkan air panas, bumbu2 kecap dan bumbu lainnya. Aduk rata, masukan telur rebus. Aduk rata, dan masak sejenak. Jgn smpai air kuah habis. Matikan kompor.<br>\r\nd. Tumis jahe dengan minyak goreng secukupnya, hingga harum. Masukkan beras, aduk rata. Tmbahkan bumbu kecap dll. Aduk rata. Pindahkan ke rice cooker.<br>', 1),
(5, 'Sop Sayuran', 'Sop sayuran', 'Sop Sayuran', '400 cc air<br>\r\n1 buah jagung manis disisir<br>\r\n2 buah wortel ukuran sedang (sy pke organik, tdk pun tdk apa)<br>\r\n10 buah buncis (organik juga, tdk pun tdk maslh), siangi ujungny<br>\r\n1 buah tomat besar (ambil dagingnya buang bijinya)<br>\r\n1/4 bawang bombay besar<br>\r\nBawang merah goreng(bwg goreng pada umumnya)<br>\r\nSeledri<br>\r\nBawang putih goreng (irisan/cacahan baput yg digoreng)<br>\r\nKaldu jamur<br>\r\nLada putih<br>\r\nGula<br>\r\nStgh batang daun bawang besar<br>', 2, 'sop.jpg', 'a. Rebus air hingga mendidih<br>\r\nb. Sementara menunggu air. Cuci semua sayuran, (kupas sayuran yg butuh dikupas.. krn saya pke organik jd hny membuang bagian kecil tnp dikupas). Potong2 wortel, buncis. Potong dadu bawang bombay dan tomat. Sisir jagung. Iris halus batang daun bawang. Jadikan kesemuanya dalam satu wadah trmsuk jagung manis<br>\r\nc. Saat air mendidih masukkan: 1 sdt bwg merah goreng, stgh sdt baput goreng, 1.5 sdt garam, stgh sdt lada putih, 1 sdm gula, 2 sdt kaldu jamur.<br>\r\nd. Masukkan semua sayuran yg td telah dipotong-potong. Tunggu hingga semuanya matang<br>', 1),
(6, 'Sayur Asem', 'Sayur asem adalah sayur bening dengan cita rasa yang menyegarkan', 'Sayur asem adalah sayur bening dengan cita rasa yang menyegarkan', '- 3 lembar daun salam<br>\r\n- 6 buah melinjo<br>\r\n- 1 ikat kacang panjang<br>\r\n- 3 cabai hijau besar<br>\r\n- 1 sendok makan gula merah<br>\r\n- 3 buah jagung manis (dipotong jadi 3 atau 4 bagian)<br>\r\n- 1 buah labu siam ukuran sedang (buang kulitnya lalu potong dadu)<br>\r\n- 1 genggam daun melinjo muda<br>\r\n- 3 sendok makan kacang tanah<br>\r\n- 1 ruas jari lengkuas<br>\r\n- 3 sendok makan air asam<br>\r\n- 2 liter air<br><br>\r\n\r\nBumbu halus:<br>\r\n- 5 siung bawang merah<br>\r\n- 4 siung bawang putih<br>\r\n- 2 butir kemiri<br>\r\n- 2 buah cabai merah<br>\r\n- 1 sendok teh terasi bakar<br>\r\n- Garam secukupnya<br>', 4, 'sayurasem.jpg', 'a. Potong semua sayur sesuai ukuran pas.<br>\r\nb. Rebus air sampai mendidih, masukkan melinjo, kacang tanah, dan jagung. Rebus sampai semua bahan empuk.<br>\r\nc. Masukkan bumbu yang sudah dihaluskan, lengkuas memar dan daun salam, serta cabai hijau.<br>\r\nd. Bumbui sayur asem dengan gula merah, air asam jawa dan garam,<br>\r\ne. Masukkan labu siam, kacang panjang dan daun melinjo. Masak sampai matang.<br>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`) VALUES
(1, 'aldi', '123', 'aldi', 'aldi@mm.mmm'),
(2, 'qq', 'qq', 'q', 'qq@qq.qq'),
(3, 'novia', '123', 'novia', 'novia@gmail.com'),
(4, 'aa', 'aa', 'aa', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
