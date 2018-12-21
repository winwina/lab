-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 08:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_kom` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `kerusakan` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `tgl`, `nama_kom`, `ip_address`, `kerusakan`, `lokasi`, `petugas`, `ket`) VALUES
(3, '2018-07-16 06:10:45', 'FDFSA', '::1', 'FDASF', 'lab-bawah', 'FDFAS', 'FDFD'),
(4, '2018-07-17 00:35:07', 'de', '192.168.1.3', 'ioajskja', 'lab-atas', 'lkajh', ''),
(5, '2018-07-17 01:01:30', 'andini', '192.168.1.98', 'longgar kabel VGA', 'lab-bawah', 'deni ramdani', ''),
(6, '2018-07-17 01:08:33', 'lab pc', '192.168.1.177', 'kena virus,harus di instal ulang. sama yang pinggir sebelah kiri harus di instal ulang', 'lab-bawah', 'Erin Hi & Faris Ra', 'bootable fd,ram '),
(7, '2018-07-17 01:16:09', 'LAB', '192.168.1.50', 'USB sebelah kanan mati', 'lab-atas', 'Amay jamaludin', ''),
(8, '2018-07-17 01:25:40', 'acer', '192.168.1.156', 'windows tidak dapat berkomunikasi dengan perangkat ', 'lab-bawah', 'Elma Anggara & Elis Diana Oktaviani', ''),
(9, '2018-07-17 01:25:49', 'LAB', '192.168.1.3', '', 'lab-atas', 'hilman', ''),
(10, '2018-07-17 01:31:44', 'PC', '192.168.1.5', 'belum ada activator windows', 'lab-bawah', 'asep f & miftah', ''),
(11, '2018-07-17 01:35:42', 'LG', '192.168.1.125', '', 'lab-bawah', 'Mega nurmayanti&Erna fatmawati', ''),
(12, '2018-07-17 01:37:30', 'LG', '192.168.1.125', '', 'lab-bawah', 'Mega nurmayanti&Erna fatmawati', ''),
(13, '2018-07-17 01:48:24', 'acer', '192.168.1.125', 'kerusakan pada hardware', 'lab-bawah', 'tia silpia ningsih dan novi nurinayatillah', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `key_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `name`, `key_login`) VALUES
(15, ' Desti Ramdiani  ', 83020),
(16, ' Erna Nurwanti ', 69200),
(17, ' Fahmi Rizki Rahmatuloh ', 81782),
(18, ' Gita Janwartini ', 73727),
(19, ' Ira Nursafitri ', 23827),
(20, ' Meisi Maswatussaadah ', 61834),
(21, ' Moh Nuron Abdussalam ', 96576),
(22, ' Pepy Jumyati Azizah ', 32129),
(23, ' Renra Suhendar ', 87505),
(24, ' Resa Julaeha Rahmatilah ', 26618),
(25, ' Risky Firman Azi Pamungkas ', 57795),
(26, ' Rizki Mochammad Agil ', 15983),
(27, ' Salis Anisa ', 36853),
(28, ' Siti Saniaturrohmah ', 34392);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `nama`, `tipe`, `file`) VALUES
(1, 'Winbox', 'application/x-msdownload', 'winbox.exe'),
(2, 'Mikrotik Kitchen', 'application/pdf', 'Kitchen MikroTik Halaman 1-216.pdf'),
(3, 'Pembahasan Ujikom Mikrotik', 'application/pdf', 'Share-Modul UKK Jo-Danang.web.id.pdf.pdf'),
(4, 'Materi Mikrotik Presentation', 'application/pdf', 'MTCNA Pesentation Material.pdf'),
(5, 'Konfigurasi Debian Server', 'application/pdf', '2015-08-29-09-22-32.801231_Modul-Debian-Server-Komplit.pdf'),
(6, 'Vlan Trunk', 'application/octet-stream', 'Cara konfigurasi trunking vlan pada Switch cisco.rar'),
(8, 'Vlan Router (Halaman 6)', 'application/pdf', 'Prakt4 Virtual LAN.pdf'),
(9, 'Dedi', 'application/octet-stream', 'chrome.dll.sig'),
(10, 'FAHMI RIZKI RAHMATULLOH', 'application/octet-stream', 'UTS FAHMI RIZKI X.2 TKJ.cpp'),
(11, 'RENRASUHENDAR', 'application/octet-stream', 'UTS_RENRASUHENDAR X2 TKJ.cpp'),
(12, 'moh nuron abdussalam', 'application/octet-stream', 'Untitled3.cpp'),
(13, 'moh nuron abdussalam', 'application/octet-stream', 'Untitled3.cpp'),
(14, 'Ghita janwartini', 'application/octet-stream', 'UTS_GHITA JANWARTINI_X2.cpp'),
(15, 'moh nuron abdussalam', 'application/octet-stream', 'Untitled3.cpp'),
(16, 'Risky Firman Azi Pamungkas', 'application/octet-stream', 'Risky firman azi pamungkas.cpp'),
(17, 'Salis Anisa', 'application/octet-stream', 'salis.cpp'),
(18, 'desti ramdiani', 'application/octet-stream', 'desti r.cpp'),
(19, 'Ira Nursafitri', 'application/x-msdownload', 'UTS_IRA NURSAFITRI_X2.exe'),
(20, 'resa julaeha rahmatilah', 'application/octet-stream', 'UTS_resa_x2.cpp'),
(21, 'pepy jumyati azizah', 'application/octet-stream', 'uts_pepy_x2.cpp'),
(22, 'SITI SANIATUROHMAH', 'application/octet-stream', 'UTS SITI SANIATU R X TKJ 2.cpp'),
(23, 'Ira Nursafitri', 'application/octet-stream', 'UTS_IRA NURSAFITRI_X2.cpp'),
(24, 'RIZKIMOCHAMMADAGIL', 'application/octet-stream', 'rizkimuhammadagil - Copy.cpp'),
(25, 'RIZKIMUHAMMADAGIL', 'application/octet-stream', 'rizkimuhammadagil.cpp'),
(26, 'Erna Nurwanti', 'application/octet-stream', 'UTS_ERNA_X2.cpp'),
(27, 'MEISI MASWATUSAADAH', 'application/octet-stream', 'UTS _MEISI _X2.cpp'),
(28, 'RIZKIMOCHAMMADAGIL', 'application/octet-stream', 'UTS_RIZKIMOCHAMMADAGIL X2 TKJ..cpp'),
(29, 'RIZKIMOCHAMMADAGIL', 'application/octet-stream', 'UTS_RIZKIMOCHAMMADAGIL X2 TKJ..cpp'),
(30, 'moh nuron abdussalam', 'application/octet-stream', 'Untitled2.cpp'),
(31, 'Risky firman azi pamungkas', 'application/octet-stream', 'Risky firman azi pamungkas.cpp'),
(32, 'Soal UTS Routing 3 Router', 'application/octet-stream', 'uts_praktek.pka'),
(33, 'PT', 'application/octet-stream', 'Packet Tracer 7.2 for Windows 64 bit.zip'),
(34, 'Mahisha fatih Assalam', 'application/octet-stream', 'UTS_Mahisha Fatih Assalam.pka'),
(35, 'Muhammad Ali Firdaus', 'application/octet-stream', 'UTS_Muhammad Ali Firdaus.pka'),
(36, 'TINA PUSFITA', 'application/octet-stream', 'UTS_TINA PUSFITA.pka'),
(37, 'RoyanFuad', 'application/octet-stream', 'uts_praktek_royanfuad.pka'),
(38, 'muhamad helmi safarudin', 'application/octet-stream', 'uts_muhamad helmi safarudin.pka'),
(39, 'rika wahyuni', 'application/octet-stream', 'uts praktek rika wahyuni.pka'),
(40, 'Eka purnawijaya', 'application/octet-stream', 'uts_Eka purnawijaya.pka'),
(41, 'arya dilah', 'application/octet-stream', 'arya dilah.pka'),
(42, 'fitri anisa', 'application/octet-stream', 'uts_fitri anisa.pka'),
(43, 'syifa nurhasanah', 'application/octet-stream', 'uts_syifa nurhasanah.pka'),
(44, 'nuriyanti', 'application/octet-stream', 'UTS-Nnuriyanti.pka'),
(45, 'rizki cahyadi', 'application/octet-stream', 'uts_Rizki Cahyadi.pka'),
(46, 'alni juniarti', 'application/octet-stream', 'uts_praktek alni.pka'),
(47, 'Ropi abdulah', 'application/octet-stream', 'UTS_Ropi Abdulah.pka'),
(48, 'NurawlliyahSN_XI1-TKJ', 'application/octet-stream', 'uts_praktek Nurawalliayh.pka'),
(49, 'Leti Rusmayati', 'application/octet-stream', 'uts_Leti Rusmayati.pka'),
(50, 'soal', 'image/jpeg', 'soal.JPG'),
(51, 'soal', 'image/jpeg', 'Capture.JPG'),
(52, 'fauzi', 'application/octet-stream', 'fauzi.cpp'),
(53, 'eep saepuloh', 'application/octet-stream', 'eep.cpp'),
(54, 'siti nur anggraeni', 'application/octet-stream', 'siti nur anggraeni.cpp'),
(55, 'muhammad rifki sani', 'application/octet-stream', 'UTS_MUHAMMADRIFKISANI_X-1 TKJ.cpp'),
(56, 'hanifan', 'application/octet-stream', 'Untitled5.cpp'),
(57, 'rafli dwiandra', 'application/octet-stream', 'rafli dwiandra.cpp'),
(58, 'Marwan Sirojul MA', 'application/octet-stream', 'UTS_marwansirojul_X-TKJ-1.cpp'),
(59, 'insan', 'application/octet-stream', 'Untitled1.cpp'),
(60, 'alan rivki ', 'application/octet-stream', 'Untitled3.cpp'),
(61, 'ERI HERDIANSYAH', 'application/octet-stream', 'UTS_ERI HERDIANSYAH_X TKJ 1.cpp'),
(62, 'wulan nurlaila', 'application/octet-stream', 'wulan x tkj 1.cpp'),
(63, 'isma nurlita', 'application/octet-stream', 'isma.cpp'),
(64, 'ade kuswara', 'application/octet-stream', 'ade kuswara.cpp'),
(65, 'Rival Latif Maulana', 'application/octet-stream', 'UTS_RIVAL_X1.cpp'),
(66, 'Ridwan nugraha', 'application/octet-stream', 'ridwan n.cpp'),
(67, 'MUHAMMAD NIZAR SYOPARY      KLS  X TKJ 1', 'application/octet-stream', 'M.NIZAR S.cpp'),
(68, 'M.Satria Nugraha', 'application/octet-stream', 'UTS_M.Satria Nugraha_X TKJ 1.cpp'),
(69, 'yogamaulana', 'application/octet-stream', 'UTS_YOGAMAULANA_XTKJ1.cpp'),
(70, 'Jakaria ', 'application/octet-stream', 'uts jakaria x tkj 1.cpp'),
(71, 'RUHAYANA FEBI', 'application/octet-stream', 'RUHAYANA FEBI X-TKJ.cpp'),
(72, 'muhammad miftah salimudin', 'application/octet-stream', 'wulan x tkj 1.cpp'),
(73, 'husni', 'application/octet-stream', 'pemograman_HUSNI.cpp'),
(74, 'Syahrul ramadlan', 'application/octet-stream', 'syahrulrm.cpp'),
(75, 'M.Rizky Nurfadillah', 'application/octet-stream', 'UTS_M.RIZKY_X-TKJ1.cpp'),
(76, 'Ikhsan Arif Rahman', 'application/octet-stream', 'UTS_Ikhsan_X tkj 1.cpp'),
(77, 'amay jamaludin', 'application/vnd.openxmlformats-officedocument.word', 'TUTORIAL BUAT IP ADDRESS amay.docx'),
(78, 'Asep Nursamsi', 'application/octet-stream', 'NU ASEP.rtf'),
(79, 'Ine Pardiana', 'application/msword', 'ine debian.rtf'),
(80, 'MUHAMMAD KHOLID', 'application/vnd.openxmlformats-officedocument.word', 'M. KHOLID.docx'),
(81, 'Ine Pardiana', 'application/msword', 'ine debian.rtf'),
(82, 'Riska Sintia', 'application/octet-stream', 'riskasintia.rtf'),
(83, 'sepyana', 'application/octet-stream', 'Document sepyana.rtf'),
(84, 'Selvia Mardiana', 'application/vnd.openxmlformats-officedocument.word', 'selvia xii.1.docx'),
(85, 'elis diana', 'application/vnd.openxmlformats-officedocument.word', 'Tutorial Setting IP Addrress.docx'),
(86, 'Elma Anggara', 'application/vnd.openxmlformats-officedocument.word', 'setting ip address static.docx'),
(87, 'Mega Nurmayanti', 'application/vnd.openxmlformats-officedocument.word', 'Mega Nurmayanti.docx'),
(88, 'Aldi Abdul Muiz', 'application/octet-stream', 'Perbaikan AldiAbdulMuiz.pka'),
(89, 'Mahisha Fatih As', 'application/octet-stream', 'uts_perbaikan_mahisha.pka'),
(90, 'Tina P', 'application/octet-stream', 'uts_perbaikan_tina.pka'),
(91, 'Ropi ABD', 'application/octet-stream', 'uts_perbaikan_Ropi.pka'),
(92, 'Muhammad Dikri Maulana', 'application/octet-stream', 'perbaikan M.Dikri.pka'),
(93, 'Leti Rusmayati', 'application/octet-stream', 'uts_praktek_perbaikan_Leti rusmayati_XI TKJ 1.pka'),
(94, 'Rizki Cahyadi', 'application/octet-stream', 'perbaikan Rizki.pka'),
(95, 'm.adjie.sm', 'application/octet-stream', 'uts praktek perbaikan m.adjie.sm.pka'),
(96, 'Muhammad Ali Firdaus', 'application/octet-stream', 'UTS Perbaikan Muhammad Ali Firdaus.pka'),
(97, 'NurawalliyahSN', 'application/octet-stream', 'UTS_Perbaikan_NurawalliayahSN_XI1_TKJ.pka'),
(98, 'Muhammad helmi Safarudin', 'application/octet-stream', 'UTS Perbaikan Muhammad  Helmi Safarudin.pka'),
(99, 'LAYANAN SERVER', 'application/msword', 'Layanan Server.doc'),
(100, 'LAYANAN SERVER PDF', 'application/pdf', 'Layanan Server.pdf'),
(101, 'nuriyanti', 'application/octet-stream', 'perbaikan nuriyanti x1 tkj.pka'),
(102, 'Rika irawati', 'application/octet-stream', 'rika irawati perbaikan uts XI tkj.pka'),
(103, 'CCNA', 'application/pdf', 'CCNA Lab Guide Nixtrain_1st Edition_Full Version-INDO.pdf'),
(104, 'Modul Debian ', 'application/pdf', 'Administrasi-Server-Jaringan-dengan-Debian-Wheezy.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
