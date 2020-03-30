-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2019 pada 06.34
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upacara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_upcr` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_upcr`, `tanggal`, `kelas`) VALUES
(14, ' Bendera', '2019-05-10', 'X AKL 2'),
(15, 'Hardiknas', '2019-05-09', 'X OTKP 1'),
(17, 'Hari Santri', '2019-05-19', 'X TBSM 1'),
(49, 'Bendera', '2019-11-18', 'X BDP 2'),
(50, 'Pramuka', '2019-11-19', 'X BDP 1'),
(53, 'Bendera', '2019-12-12', 'X OTKP 3'),
(54, 'Bendera', '2019-11-21', 'X OTKP 1'),
(55, 'Bendera', '2019-11-22', 'X RPL 2'),
(56, 'Bendera', '2019-12-24', 'X AKL 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `kd_guru` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `kd_guru`, `nama`, `gender`, `alamat`, `no_hp`) VALUES
(3, 'B', 'A.H. Jazuli, Drs 	 	', 'Laki-laki', 'Bangsri', '081234567123'),
(4, 'w', 'Abdul Qohhar, S.Psi  	', 'Laki-laki', 'Cepogo', '08531215454'),
(5, '0', 'Achmad Shokhib, S.Si 	', 'Laki-laki', 'guyangan', '082134567873'),
(6, 'AQ', 'Ahmad Arif Johan, S.Pd 	 	', 'Laki-laki', 'guyangan', '081245632177'),
(7, 'AC', 'Ahmad Islah Tamimi, S. Pd 	 	', 'Laki-laki', 'SEKURO', '082134567822'),
(8, 'AV', 'Anita Ika Widowati, S.Pd', 'Perempuan', 'BANDENGAN', '081234789522'),
(9, 'AN', 'Anugerah Sinung Prasetyo, S.Pd ', 'Laki-laki', 'KUWASEN', '089766542314'),
(10, 'Y', 'Arif Sugiyarto, S.Pd ', 'Laki-laki', 'guyangan', '083245788923'),
(11, 'AM', 'Arif Wibowo, S.Pd. Jas', 'Laki-laki', 'PAKIS AJI', '081234990862'),
(12, 'X', 'Ayu Kadarwati, S.Pd', 'Perempuan', 'guyangan', '085678900982'),
(13, 'AU', 'Budi Kurniawan, S.Pd', 'Laki-laki', 'Bangsri', '083123458765'),
(14, 'AF', 'Devitta Nia Wulandari, S.Pd 		', 'Perempuan', 'Bangsri', '081345678882'),
(15, 'AI', 'Djoko Santosa, S.Si 	', 'Laki-laki', 'BANJARAN', '085234675221'),
(16, 'R', 'Dra. Asfuriyah Lachatta	', 'Laki-laki', 'BANJARAN', '085347898090'),
(17, 'G', 'Dra. Iskarotin Alama 	 	', 'Laki-laki', 'guyangan', '08234569886'),
(18, 'F', 'Dra. Sukowati 	', 'Perempuan', 'BANJARAN', '087233789908'),
(19, 'AO', 'Drs. Ahmad Amin 		', 'Laki-laki', 'KEDUNG CINO', '089776543123'),
(20, 'L', 'Dwi Agung Suhartono, ST 		', 'Laki-laki', 'Bangsri', '081234565442'),
(21, 'AK', 'Eni Sismawati, S.Pd 	', 'Perempuan', 'WELAHAN', '089766544342'),
(22, 'D', 'Ening Lustutiani, S.Pd 	 	', 'Perempuan', 'BANJARAN', '081342567876'),
(23, 'AE', 'Hendro Purniawan, S.Pd 	 	', 'Laki-laki', 'KEDUNGLEPER', '087655422345'),
(24, 'AA', 'Ika Indriyani, S. Pd 	 	', 'Perempuan', 'guyangan', '085442367864'),
(25, 'AT', 'Indah Purnama Sari A.,S.Pd 	 	', 'Perempuan', 'Bangsri', '082341566742'),
(26, 'Z', 'Indah Rahmawati, S. Pd 	', 'Perempuan', 'SEKACER', '082345622123'),
(27, 'AW', 'Iwan Safrudin, S.Kom 	 	', 'Laki-laki', 'DONOROJO', '085432796554'),
(28, 'AG', 'Laily Rizqissalim, S.Pd 	 	', 'Perempuan', 'Bangsri', '087654231890'),
(29, 'AP', 'Mei Arma Supratiwi, S.Pd 	 	', 'Perempuan', 'guyangan', '087654321890'),
(30, 'AD', 'Muhamad Sahal Mubarrok, S.Pd 		', 'Laki-laki', 'BANJARAN', '087654234123'),
(31, 'P', 'Muhammad Abdul Latif, S. Kom 	 	', 'Laki-laki', 'SEKURO', '082345178990'),
(32, 'AX', 'Muhammad Faris Priyoga, S.Pd 	', 'Laki-laki', 'Bangsri', '08123565421'),
(33, 'AR', 'Muhammad Musafikin, S.Pd.I 		', 'Laki-laki', 'BANJARAN', '082345661223'),
(34, 'Q', 'Muhammad Rhuli, S. Pd 	', 'Laki-laki', 'Bangsri', '085432156899'),
(35, 'N', 'Mustari, Dra 	', 'Perempuan', 'WELAHAN', '082342156422'),
(36, 'I', 'Nur Azis, S. Pd 	 	', 'Laki-laki', 'Srikandang', '082134555821'),
(37, 'B', 'Nur Hayati, S.Pd 	 	', 'Perempuan', 'Srikandang', '08754312878'),
(38, 'M', 'Rina Zahara, SE 	 	', 'Perempuan', 'guyangan', '085467356442'),
(39, 'AY', 'Shaifur Rizqi Zein, S.Pd 	 	', 'Laki-laki', 'BANJARAN', '082345662124'),
(40, 'AL', 'Sittatur Rifaini, S.Pd 	', 'Perempuan', 'BANJARAN', '085345677854'),
(41, 'U', 'Suparjono, S.Pd 	', 'Laki-laki', 'Bangsri', '082345788908'),
(42, 'AJ', 'Susanti Ning Astuti, S.Kom 	 	', 'Perempuan', 'WELAHAN', '082345677851'),
(43, 'J', 'Titik Munjaeroh, S. Pd 	', 'Perempuan', 'WEDELAN', '082345123887'),
(44, 'E', 'Toetik Irawati, S.Pd 	 	', 'Perempuan', 'SUWAWAL', '085342123899'),
(45, 'AS', 'Triana Kartika Sari, S.Pd 	 	', 'Perempuan', 'BANJARAN', '087654321887'),
(46, 'C', 'Wahyu Iriyanti, S.Pd', 'Perempuan', 'KALIAMAN', '082134567898');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `pembina` varchar(255) NOT NULL,
  `pemimpin` varchar(255) NOT NULL,
  `kompi_1` varchar(255) NOT NULL,
  `kompi_2` varchar(255) NOT NULL,
  `kompi_3` varchar(255) NOT NULL,
  `bendera1` varchar(255) NOT NULL,
  `bendera2` varchar(255) NOT NULL,
  `bendera3` varchar(255) NOT NULL,
  `uud` varchar(255) NOT NULL,
  `pancasila` varchar(255) NOT NULL,
  `protokol` varchar(255) NOT NULL,
  `ajudan` varchar(255) NOT NULL,
  `dirigen` varchar(255) NOT NULL,
  `doa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `petugas_id`, `pembina`, `pemimpin`, `kompi_1`, `kompi_2`, `kompi_3`, `bendera1`, `bendera2`, `bendera3`, `uud`, `pancasila`, `protokol`, `ajudan`, `dirigen`, `doa`) VALUES
(11, 14, 'Abdul Qohhar, S.Psi  	', 'AIDA NUR ARIFAH', 'ADHETA SILVIA FESTADHONA', 'AHMAD ALAMUL HUDA', 'AHMAD ALDI IRWAN', 'ANIS ASYIATUZ ZAROH', 'ANJELIKA OKTAFIANI', 'DELTA AYU SAPUTRI', 'DELTA TRI ANGGARA PUTRA', 'DIAH ANGGI SAFITRI', 'FEBRIAN KUSUMA MAHARDIKA', 'HANNA ECHA SARI', 'INDRI RAHMATIKA AZZARO', 'INTAN PUTRI PRAMESWARI'),
(12, 15, 'Anugerah Sinung Prasetyo, S.Pd ', 'AHMAD AFVAN MAULANA', 'DESILFA REGI DIAZ NOVIANY', 'ERIKA MITA SEFTIYANI', 'DITA AYU ALISTIA', 'DITA AYU ALISTIA', 'AMANDA CITRA ERNANTA', 'ALISA NUR SITA', 'DELLA LAILATUL INAYAH', 'DESILFA REGI DIAZ NOVIANY', 'ERIKA MITA SEFTIYANI', 'FAJAR MAULIDA WAHYUNINGRUM', 'DANIEL DWI SAPUTRA', 'ALVIONITA CHRIS SAPUTRI'),
(14, 17, 'Ahmad Arif Johan, S.Pd 	 	', 'ABDUL WAKHID KHASAN ROSIDIN', 'AHMAD AFIF', 'AHMAD AZRUL MAULANA', 'AHMAD SOKHIBUL WAFA TAJUL ARIFIN', 'AHMAT THOLIQUL QILMI', 'ARIS SETYAWAN', 'ERIZA AHMAD DONI SETIAWAN', 'FRANSISKO AKINTA ANDRIYAN S.', 'IRVAN', 'FIRMAN HADI SAPUTRA', 'MUHAMAD DAFFAUR RAMADHAN', 'MUHAMMAD ADITYA NUR ROHMAN', 'MUHAMMAD ALFIN HIDAYAT'),
(39, 49, 'A.H. Jazuli, Drs 	 	', 'AISYAH ANANDA PUTRI', 'ALFAAT FALENTINO', 'ALFUNING HIKMAH', 'ANDIKA DWI KURNIAWAN', 'ANDIKA HUDI PRAYOGA', 'APRIESCHA DARA SAFARA', 'ARFIYAN AJI PRATAMA', 'BAGUS PUJI UTOMO', 'DEVITA ANGGRAINI', 'DHEA YUNIA SARI', 'FARIZ ABDILLAH QHODAR', 'HELMAESA DIEGO PUTRA', 'LUDVI ABDUL MAJID AL VAIZ'),
(40, 50, 'Achmad Shokhib, S.Si 	', 'AHMAD ABDUL WAHAB', 'AHSOL AMRI', 'AMELIA PUTRI WULANDARI', 'ANDRE SANTOSO', 'ANITA FITRIYANI', 'ARDIANSYAH WAHYU PRATAMA', 'ARI PRATAMA', 'ARISENDI NOVARUDIKA', 'BAGAS MANTOFANI', 'DESI FITRIYANI', 'EKO ARI ANANDA', 'ERFIKA MAUNITASARI', 'ERIKA DELLA PUSPITA'),
(42, 53, 'A.H. Jazuli, Drs ', 'AHMAD ULIN NUHA', 'ANGEL DISTALIA ASMARA', 'ASTRIT ILMI SAFITRI', 'BELLA FITRIANINGRUM', 'DONA AMELYA TAMARA', 'DWI ARUM MUSTIKO NING TYAS', 'ELVIRA SASKIA FATMAWATI', 'FERA PUTRI AGUSTININGSIH', 'FERDY KHOIRUL ISZHAR', 'FRABELA FEBRIANTI', 'JESICA ALFRENNINDA DWI AGUSTIN', 'KHUSNUL KHOTIMAH', 'LINDA SEPTA PUSPITA WIDYAS MAHARANI'),
(43, 54, 'A.H. Jazuli, Drs 	 	', 'AHMAD AFVAN MAULANA', 'AHMAD MUZAKI', 'ALISA NUR SITA', 'ALVIONITA CHRIS SAPUTRI', 'AMANDA CITRA ERNANTA', 'ANIK KARTINI', 'DANIEL DWI SAPUTRA', 'DELLA LAILATUL INAYAH', 'DESILFA REGI DIAZ NOVIANY', 'DEVITA EFRATANIA', 'DITA AYU ALISTIA', 'ERIKA MITA SEFTIYANI', 'FAJAR MAULIDA WAHYUNINGRUM'),
(44, 55, 'Budi Kurniawan, S.Pd', 'ADAM WAHYU ADI WANGSA', 'AGUSTIO DWI PUTRA', 'AKBAR MAULANA SAFARUDIN', 'ANDRE RIZKI PUJIYANTO', 'ANI PRATIWI', 'AQSOL AMRI', 'CALFIN DANANG FIRMANSYAH', 'CINDY PRAMITHASARI', 'DAMARA SULTAN ALAMSYAH', 'DANANG FEBY SAPUTRO', 'DENICO NARENDRA', 'DWI APRIANI', 'ELINA AYU NOVIAWATI'),
(45, 56, 'A.H. Jazuli, Drs 	 	', 'ADHETA SILVIA FESTADHONA', 'AHMAD ALAMUL HUDA', 'AHMAD ALDI IRWAN', 'AIDA NUR ARIFAH', 'ANIS ASYIATUZ ZAROH', 'ANJELIKA OKTAFIANI', 'DELTA AYU SAPUTRI', 'DELTA TRI ANGGARA PUTRA', 'DIAH ANGGI SAFITRI', 'FEBRIAN KUSUMA MAHARDIKA', 'HANNA ECHA SARI', 'INDRI RAHMATIKA AZZARO', 'INTAN PUTRI PRAMESWARI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `kelas`) VALUES
(22, 'X TBSM 1'),
(23, 'X TBSM 2'),
(24, 'X AKL 1'),
(25, 'X AKL 2'),
(26, 'X BDP 1'),
(27, 'X BDP 2'),
(28, 'X OTKP 1'),
(29, 'X OTKP 2'),
(30, 'X OTKP 3'),
(31, 'X RPL 1'),
(32, 'X RPL 2'),
(33, 'XI TBSM 1'),
(34, 'XI TBSM 2'),
(35, 'XI AKL 1'),
(36, 'XI AKL 2'),
(37, 'XI BDP 1'),
(38, 'XI BDP 2'),
(39, 'XI OTKP 1'),
(40, 'XI OTKP 2'),
(41, 'XI OTKP 3'),
(42, 'XI RPL 1'),
(43, 'XI RPL 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nis` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `nama`, `password`, `gender`, `kelas_id`, `role_id`) VALUES
(12, 2214, 'ABDUL WAKHID KHASAN ROSIDIN', '$2y$10$tv8qGfYGL4c5ZuB2jpD2wOu2s8ij/nJGp1skvRe4NDPRy9QlQ69T.', 'Laki-laki', 22, 2),
(13, 2215, 'AHMAD AFIF', '$2y$10$SvUxb0CdyMIZlM20/gg4huKm2xkQMV6degwyfqKICDgHuKiJmtRp2', 'Laki-laki', 22, 2),
(14, 2216, 'AHMAD AZRUL MAULANA', '$2y$10$Ml0y7rOy2MjSJwfwfauMEunMYIx2PXfv4GRQRaVvhLeIMmAoVIv7m', 'Laki-laki', 22, 2),
(15, 2217, 'AHMAD SOKHIBUL WAFA TAJUL ARIFIN', '$2y$10$B/Y2LYzIa0ucuZU2RbpDmO0Fl5Hgqbh0iYCDwdyzvfKZctwM.rzR2', 'Laki-laki', 22, 2),
(16, 2218, 'AHMAT THOLIQUL QILMI', '$2y$10$y8LJag3G4CK2HNzC/.6TfuiqU59PZ2hx5d4Z4u2pkKcJ9GQLDOtgO', 'Laki-laki', 22, 2),
(17, 2219, 'ARIS SETYAWAN', '$2y$10$Vi0m7/edRkkaFa82JMRQ9eDvgDwvG2Bn3gOS/MpLv2Tdl4cMf1KTO', 'Laki-laki', 22, 2),
(18, 2220, 'ERIZA AHMAD DONI SETIAWAN', '$2y$10$R0v/o4wjbW8pqrfSaJrO6eozyL7osWVUxfmnkCeJlvd7nq9TpfRMm', 'Laki-laki', 22, 2),
(19, 2221, 'FIRMAN HADI SAPUTRA', '$2y$10$Hik7lt.Ef1f62pTqlHPk/.4vSnuXGK/1XPsCII/I3K8rR4p.idcWu', 'Laki-laki', 22, 2),
(20, 2222, 'FRANSISKO AKINTA ANDRIYAN S.', '$2y$10$wRK5ZUmpjcfsNZIUHijHd.EMeMddY6T6qMIKgso0NYmMYrCr7l5I6', 'Laki-laki', 22, 2),
(21, 2223, 'IRVAN', '$2y$10$/00HsRBNgT2lMjfMR5jrhOyUgQHWXqGGZRllG2mvWJntGgLeHjb.C', 'Laki-laki', 22, 2),
(22, 2224, 'MUHAMAD DAFFAUR RAMADHAN', '$2y$10$zPwiqQQZrSFFaAqa0lww8Ov8xaFw8rBa5cwwf0ov.PlZcSrdnGOda', 'Laki-laki', 22, 2),
(23, 2225, 'MUHAMMAD ADITYA NUR ROHMAN', '$2y$10$98aBFDjaopKBTkaXRjIANOZqSgEnLS95H378IwspPBIh2/ECmZwSG', 'Laki-laki', 22, 2),
(24, 2226, 'MUHAMMAD ALFIN HIDAYAT', '$2y$10$4yrs8.4pfLV3xPOH5F4RnuyTDFc2OXNsJPuuSiQf6IFqQogee5Kju', 'Laki-laki', 22, 2),
(26, 2250, 'AANDIKA CAHYA SETIYAWAN', '$2y$10$gbINPr4ueT.lsKuN1T4aauCQdPg6WYZhissW626SIyxOxI/hhM3EC', 'Laki-laki', 23, 2),
(27, 2251, 'ACHIRUL ASHAR', '$2y$10$LGWVHxXV59JT1JbRxAtJxu2nA4A3oLglKAtmocYSo4p3j/IMGD0P.', 'Laki-laki', 23, 2),
(29, 2252, 'ACHMAD RIZAL MAULANA', '$2y$10$DswuoPMxXYqTz3VXAyKCYeifK379dmqjXTlYvbpundw9F79s4fWFC', 'Laki-laki', 23, 2),
(30, 2253, 'ADE RAHMAT SALEH', '$2y$10$97a2zeyYYjNLE14dg42ZPeL22MopROO97ZVMr6xTRryIIHmOgptBe', 'Laki-laki', 23, 2),
(31, 2254, 'ADHIF ADHI NANJAYA', '$2y$10$OsOTRFueOqXD6wS/qE3SYuLOyyfbUriFYShR1mPhSJDJAcwKNw58K', 'Laki-laki', 23, 2),
(32, 2255, 'AHMAD FARID ABDUL HAQ', '$2y$10$AYxLL4zP9rs5NuJi9eyw3uC/f1JHjHt84xr5SSs6ZApr3BKgv748S', 'Laki-laki', 23, 2),
(33, 2256, 'AHMAD GHOFUR', '$2y$10$05e4fex/QBzW4/KC3/UvL..YnPRaRfDAC0PDZGetj6ffiPRqwVKr6', 'Laki-laki', 23, 2),
(34, 2258, 'AISYA ARIF SABARA', '$2y$10$x3o9I4WlGyN5hvGZK/Oj3u2fIMc/sSzcL.pEI9O3RXBqzKIIqhce6', 'Laki-laki', 23, 2),
(35, 2259, 'ALFARIZI PUTRA RAMADHAN', '$2y$10$T6kZaN9LazzcZmT/FTdDbe.M/PUlQi8xlxasDXn.AwsuNscu11S3m', 'Laki-laki', 23, 2),
(36, 2260, 'ANDIKA CAHYA PRIYANDA', '$2y$10$FCES9vXcXsNFzZB2B2wWk.S00BV76.t7TnMcg/ZlbO4MGMxbvWPpe', 'Laki-laki', 23, 2),
(38, 2262, 'CHUSEN ISMAIL SIDIQ', '$2y$10$1rCsrSXjWUlnOzjE2gY.u.RXbdx3xyxwBUGRNdsUYIdC1EXyWgyEO', 'Laki-laki', 23, 2),
(39, 2286, 'ABELLINDO FAUSTIN', '$2y$10$34dwaHejEGjpemlRC2RtJea8vYnGrDSJLc1JZfi/61zL6cI5nU2pW', 'Laki-laki', 31, 2),
(40, 2287, 'ACHMAD HAKIM QOIRUL HAQ', '$2y$10$I6.Mf1CR7t2pQpzw5BiYXeGp/j//nId5hwP4AAo9al//DocDI6hFa', 'Laki-laki', 31, 2),
(41, 2288, 'AHMAD ANSORI', '$2y$10$aUQJBTsTc53tbx4gKlCOKeOWdlKHAlpk7BqHVwRaWN.P4m6yF0jm2', 'Laki-laki', 31, 2),
(42, 2289, 'AHMAD FAIZUL UMRI', '$2y$10$Rh63G0HN/nldXxSKNyVu1O/5vj8C98rSUdSBWiIPpzoofV5/TuT8e', 'Laki-laki', 31, 2),
(43, 2290, 'AHMAD RONZALI', '$2y$10$fioaq0oPZLv1cFTC88laPOFNSgxEJZFu8Imp5dxxrjeBwWrBLYeAa', 'Laki-laki', 31, 2),
(44, 2291, 'ANDRE SETYAWAN', '$2y$10$l2thlSZ1v03Co5vEGbPhOOB6oAatwrmmYB8bKeAVJ6/F6FWOcvr0W', 'Laki-laki', 31, 2),
(45, 2292, 'ARIDA RISQIANA', '$2y$10$.d0cPpQ9vkdtpdqhRTgIz.3lrZagM9WfW2ducXDj1ThHOk5tATBSm', 'Perempuan', 31, 2),
(46, 2293, 'BERLIN KUSUMA DIKHA', '$2y$10$tcZ/BE7kPKd5nKdwAKOV1.13zHtUNVRe1u5xDdLaSx8ejZ7jpWzpW', 'Perempuan', 31, 2),
(47, 2294, 'DAMAR HADI SURYA PRANOTO', '$2y$10$gw0FjGFAwbGPPiJ3M3VqjeuMsZZS3hE7uEivr3cy/38wKrapez.OC', 'Laki-laki', 31, 2),
(48, 2295, 'DARU TRI ATMOJO', '$2y$10$6nXu8Lx65fGTcS2uNwDg5uwaqSPWYUnKVo3cI//GO3viByI5dAB4G', 'Laki-laki', 31, 2),
(49, 2296, 'DEA NUR SAFITRI', '$2y$10$KSRMvKrhwAMHScXUz7QYEOLVQ06DQF/UiZfe6ak5OZQh9siSZsfTC', 'Perempuan', 31, 2),
(54, 2322, 'ADAM WAHYU ADI WANGSA', '$2y$10$Rd40GPLkuc9RU2TSJoIOJ.naxsJ6N8a8PQqW/HaUseThmIy.C2cZK', 'Laki-laki', 32, 2),
(55, 2323, 'AGUSTIO DWI PUTRA', '$2y$10$uK0MyvsrLQ4h1GrbaYpjuupoqP4T53rbYGh92s4p0ukjkNwY7cJhW', 'Laki-laki', 32, 2),
(56, 2324, 'AHMAD FIKRUL UMAM', '$2y$10$ap9WBfJq5lrUl9ve/RgTze1rO9ubnO./vCrlB5TjB2K.MumiDUBsy', 'Laki-laki', 31, 2),
(57, 2325, 'AKBAR MAULANA SAFARUDIN', '$2y$10$pLkvIFpVhYVgO9B2bEeeJ.Akj/hfnXzAfQlhzzvJlsY5XucSP2YEK', 'Laki-laki', 32, 2),
(58, 2326, 'ANDRE RIZKI PUJIYANTO', '$2y$10$JlnZxzDN2XmsaCVXn2oUAu9XVeUvalbm0uwlipQshF61gSi5nyt7W', 'Laki-laki', 32, 2),
(59, 2327, 'ANI PRATIWI', '$2y$10$gbfiG3O25u1ELZIx2mDjD.w7CIgua2NpEs7eRZGpmQIXQ0cyQviDq', 'Perempuan', 32, 2),
(60, 2328, 'AQSOL AMRI', '$2y$10$MCjlNxu01kmjkVb.ei3v1.W2hBJcoqksPbrLVQl9LeUuzFwQvZ7yO', 'Laki-laki', 32, 2),
(61, 2329, 'CALFIN DANANG FIRMANSYAH', '$2y$10$/vvBmUOyodyRMvgbOzv5vuzp/d9xOm9gjcJqnbert8SBE.VFeLCuS', 'Laki-laki', 32, 2),
(62, 2330, 'CINDY PRAMITHASARI', '$2y$10$Zpn8hah5x4dqckTrXMDWneUKrwXyuHPAM9PYGq9ez8mqQCuxOEg5q', 'Perempuan', 32, 2),
(63, 2331, 'DAMARA SULTAN ALAMSYAH', '$2y$10$B0jhlePQAOtgmFjsoct7COab46XihN32IJPh1uNY0aDDWDRH/uhzG', 'Laki-laki', 32, 2),
(64, 2332, 'DANANG FEBY SAPUTRO', '$2y$10$z4tg39qEFEQfhZl5DPx6wumaSYuZiStP6GE0cQpx1t9s5BlTUK9vu', 'Laki-laki', 32, 2),
(65, 2333, 'DENICO NARENDRA', '$2y$10$JIj27mKyMVLTi4C2G1UaOemeDo7XWQe9eTom1CClKKLH2W/7OSVhO', 'Laki-laki', 32, 2),
(66, 2334, 'DWI APRIANI', '$2y$10$hcvQ3DcgcqhUrCz3I2pzuujwlRxuLlfn1IvF/vEvh1UMOBNGFIYS6', 'Perempuan', 32, 2),
(67, 2335, 'ELINA AYU NOVIAWATI', '$2y$10$ebkZNtjdq77Uq9sLOboKzOusObiFSruOym62BA7ouixBB80ay5Qw.', 'Perempuan', 32, 2),
(68, 2358, 'AHMAD AFVAN MAULANA', '$2y$10$8ruDDZj4PYznlNULvjO68eD1HYylEIELxDTbEwjcqrAkKS.bWFPDu', 'Laki-laki', 28, 2),
(69, 2359, 'AHMAD MUZAKI', '$2y$10$G1f7ul8MINRRMR9Mcf9FLekNEZOYVTwOFD9fsteLKRObMfGRY72Ja', 'Laki-laki', 28, 2),
(70, 2360, 'ALISA NUR SITA', '$2y$10$zG8fOKnmmxzl/y29S7Vwnu1.qZK2xzylqdnu6dJnfZOOCzgQLHcZi', 'Perempuan', 28, 2),
(71, 2361, 'ALVIONITA CHRIS SAPUTRI', '$2y$10$t.ZoiMArWY5W0LJpSHAfgOFdgBKCuQfUaT177bFtkQpejN5kdw1R6', 'Perempuan', 28, 2),
(72, 2362, 'AMANDA CITRA ERNANTA', '$2y$10$QNR/OJpSpbuG9Z2KwCVqL.H3HJwDVk2dujm769cLvxTDV4pf7lvMq', 'Perempuan', 28, 2),
(73, 2363, 'ANIK KARTINI', '$2y$10$FfScctENwY0dn8qN3jjtbeizoHOqSJSukfnrmDBGJtPLxdmVGb2Ti', 'Perempuan', 28, 2),
(74, 2364, 'DANIEL DWI SAPUTRA', '$2y$10$mHieHRGuJ/hUhDoEClxZKenBn2Jr4r36CrBYtpmyRPfXhC0rp2Lri', 'Laki-laki', 28, 2),
(75, 2365, 'DELLA LAILATUL INAYAH', '$2y$10$.xi0IyuAf0cyiWN6hikCtObcxgs4YGpiI/yPpRvleeQbEK7qO3G8K', 'Perempuan', 28, 2),
(76, 2366, 'DESILFA REGI DIAZ NOVIANY', '$2y$10$Do8fIlHpL5wDVdsvwzsArexblGlY5WWuuEjkWmjdSCJJKgBXX40tu', 'Perempuan', 28, 2),
(77, 2367, 'DEVITA EFRATANIA', '$2y$10$/1ZubzBeu7oKqTaynTGE9u/ZPlirOwJClCZyryJcXdS82Zslqmqve', 'Perempuan', 28, 2),
(78, 2368, 'DITA AYU ALISTIA', '$2y$10$QgDF0Ia5ldO1W8HK.8kBF..UrxiFOCt9E8jh1ZHgdHjUgVGPvLVmW', 'Perempuan', 28, 2),
(79, 2369, 'ERIKA MITA SEFTIYANI', '$2y$10$celzthyBeH2CSxXB2UuqO.JCMton.jEXCkN1nuos2IwqOZtk0eF92', 'Perempuan', 28, 2),
(80, 2370, 'FAJAR MAULIDA WAHYUNINGRUM', '$2y$10$k0VnwToL3akO1THMOXdFbOSslFjOZmQU6A8lVy2Aau80nLdxTm49e', 'Laki-laki', 28, 2),
(82, 2261, 'ARIS RIZAL WIJAYANTO', '$2y$10$TPrGdppGLCR640wfvCO9RO1Ij50IW5H5RUQUhSNHAuBCLjooPAg9e', 'Laki-laki', 23, 2),
(83, 2262, 'CHUSEN ISMAIL SIDIQ', '$2y$10$HUHT3gAUW2zypgb6lTQlOOZ9UkzHB3aAtgHRm8mxpf1mYY262kupS', 'Laki-laki', 23, 2),
(85, 2302, 'KENCANA PUTRA', '$2y$10$b1H6AcxSfrnQv7dObn1tOeA4iO3BQR7.wgXwsLFckZfiuoiXwGbIm', 'Laki-laki', 31, 2),
(86, 2303, 'MAULANA NOFA KARISMA', '$2y$10$fxw6OaWXr2hCO.Qu8GY9EOLclZh.jn0cHI.wFnLoV/1IJBC2mN/fO', 'Laki-laki', 31, 2),
(87, 2304, 'MUHAMMAD ADHIM NUR KHOLIK', '$2y$10$JK9PPFR6fkRGpb9nsvfw1.mJ9/UATmZyTagpo0f7x4InYBRYJ1Z6i', 'Laki-laki', 31, 2),
(88, 2394, 'AHMAD AGUS WICAKSONO', '$2y$10$cBkBqCMYhQlj8IyyQQQAb.nXepEYyG5Xxtvkl/NFHq8wIQjYEB6Tq', 'Laki-laki', 29, 2),
(89, 2395, 'ALDI FIAN RAMADHAN', '$2y$10$NdVp9AQmBIXc7D9TFUrzy.mgeikZqpn0mtKe0GN6s6yJMPJgfRRB2', 'Laki-laki', 29, 2),
(90, 2396, 'AMALINDA DWI YULIANTI', '$2y$10$ueLzhrEkp1UVfhG4m/hI4u8eoKduJixbxBbeDpQuukDoAIP5WWRru', 'Perempuan', 29, 2),
(91, 2397, 'ASTRI NOFIA NINGRUM', '$2y$10$ADnNv2Bv1EycZXedS68BFuN2x8QpPZ0ApG3UJZmK0mLbdzYFMZL/a', 'Perempuan', 29, 2),
(92, 2398, 'AYU NOVITA SARI', '$2y$10$HU63I1j7yu6pqZUbLA6nvuXnJbDVHZrkFUtzYjJ6hSm.cL5xzKAva', 'Perempuan', 29, 2),
(93, 2399, 'DHIAH PUSPITA', '$2y$10$3kogL/X2YLsWxx1TnfBhbe2B3sJYdm9F5O0KhoHe5xzJueiGSWlUi', 'Perempuan', 29, 2),
(94, 2400, 'EKO NOOR HARDIANSYAH', '$2y$10$ESM/qqdxkdhRKppW5SESWuiR.tAm8gi0QFv1c9evHaMurEe/UUHaq', 'Laki-laki', 29, 2),
(95, 2401, 'ELEN SEPITA SARI', '$2y$10$FOFl8Iyfsy.1v9UMJeUSl.mAIpDTuTL14GX2Hmw2Xp0P.E0dNFb7i', 'Perempuan', 29, 2),
(96, 2402, 'ELVIRA ADISYA MAWARDANI', '$2y$10$FW9O0ea2VoVG8v6HVZ/aRO.f54U0aTC08k4fCbQnoLeEmGe89.J7K', 'Perempuan', 29, 2),
(97, 2403, 'FITRI ANINGSIH', '$2y$10$B81ytQEqPuQbD31t5GOGA.J7SdT55Zam6l7K5SjNv3RAT03d0oAce', 'Perempuan', 29, 2),
(98, 2404, 'GITA KRISTIYANI', '$2y$10$jj/p8aKf0Qk5xMuoMYShLuYmylZCOUjjV1VRQ8tfFQUhBa6EsujMe', 'Perempuan', 29, 2),
(99, 2405, 'HANI SALSABILA', '$2y$10$ivRTwIlURhIT59N2D/.3wOF0pEn9Z1h4Ws1OW584U9nSg9PEdwpCu', 'Perempuan', 29, 2),
(100, 2406, 'IRFAN JOKO PRASETIYO', '$2y$10$jBySLSglhgSDm.byWHrnrejHooz8xd5PbQnxnT2q7caBsv4Al0U4i', 'Laki-laki', 29, 2),
(101, 2407, 'IVANA ADITIYA', '$2y$10$pVGWoAUwt5vBGlxFsLCQPevmN1zhYNJ.Q07KcXBb3xmfIT0g2Ed32', 'Perempuan', 29, 2),
(102, 2430, 'AHMAD ULIN NUHA', '$2y$10$MYHnMOU8DxhECclhBTQKKOqMfZix0U8OWR.oszAZeB9Tie0e8Mmfa', 'Laki-laki', 30, 2),
(103, 2431, 'ANGEL DISTALIA ASMARA', '$2y$10$OQDc2GQ2SjfVXH.FmvnMDegoPyhf1NkY/495KGElKITBVyxtEn8xe', 'Perempuan', 30, 2),
(104, 2432, 'ASTRIT ILMI SAFITRI', '$2y$10$aPPDMv5aZ3zNx.0jWUNOnex12NQ/t3zPgmSxMZ88lk29/oUXz91zC', 'Perempuan', 30, 2),
(105, 2433, 'BELLA FITRIANINGRUM', '$2y$10$vNaC6DAGNpMXoLx0bAICOOFsP8QqQVCkE8plZf6bd7MeypNHFjf7u', 'Perempuan', 30, 2),
(106, 2434, 'DONA AMELYA TAMARA', '$2y$10$La803X1TNRZ4wQhXsVP/ier3Bs2BoqDtlphoE1C8VkRhTScyuo9ae', 'Perempuan', 30, 2),
(107, 2435, 'DWI ARUM MUSTIKO NING TYAS', '$2y$10$TWPALBBpORgJqRRVRtLZ7eqAm2tPVKjzZMp8QwALcH.lOCKxkJNW6', 'Perempuan', 30, 2),
(108, 2436, 'ELVIRA SASKIA FATMAWATI', '$2y$10$MlnDOAaib9nC0W.uM9oPzO/WqoAfVqmTb1H80Zm69LSCwNnFnxo/i', 'Perempuan', 30, 2),
(109, 2437, 'FERA PUTRI AGUSTININGSIH', '$2y$10$BbnSv5egR3EG2eci776vS.Hff0aq5KTSTVsaBzFPWysDkHQ0Gpe0S', 'Perempuan', 30, 2),
(110, 2438, 'FERDY KHOIRUL ISZHAR', '$2y$10$qNfoK1PtZfGel99K9ewDCuLFNT0UdwiYxLY8S.eoqD3I154DUEjkO', 'Laki-laki', 30, 2),
(111, 2439, 'FRABELA FEBRIANTI', '$2y$10$6sIfouPbua/9BJ2c1jna/.UYi72rNShVChKtn7TpL7SoU4wP2A5Im', 'Perempuan', 30, 2),
(112, 2440, 'JESICA ALFRENNINDA DWI AGUSTIN', '$2y$10$iTk/tC7WwXqxEeTw92fCFeLGFqBOAG8EGBgT5IMQl2xBMVEbmqPr2', 'Perempuan', 30, 2),
(113, 2441, 'KHUSNUL KHOTIMAH', '$2y$10$kHXHALKlgUnJ3cxpPwLt3Ol.hVuxZvdxjGnX6L6UEaQSt3eze9JCS', 'Perempuan', 30, 2),
(114, 2442, 'LINDA SEPTA PUSPITA WIDYAS MAHARANI', '$2y$10$1n9cQ5PQ8cysArwdOApg8u5SdqAhsvpOrzxKOQ92g4AUa8CC7AHUm', 'Perempuan', 30, 2),
(115, 2443, 'MARSHELLA FRANSKIA AGUSTIN', '$2y$10$WGXovuepqQIfRGyJhX5INOFu9l5pUiJ3mohmZKlU7Y1pC.0vXJMpa', 'Perempuan', 30, 2),
(116, 2466, 'ADEI RIZKI DARMAYANTI', '$2y$10$N3xVkJyPuMfEJOvSMvpLZOwtmLlocaFQddpZgo4R3h/KDeX6cupZS', 'Laki-laki', 24, 2),
(117, 2467, 'AGUS SETIAWAN', '$2y$10$P98JR0eY.4SluH/kUHux6e3LxqUrg3Y.AKSAd0V5F/xIHG9qqgeRG', 'Laki-laki', 24, 2),
(118, 2468, 'AHMAD ALDITRIA MUZAKI', '$2y$10$Anm8Kho.9QQnw2qypyq7wu1JF0C.S1tjsiCRYM5qM9.Pfu.lxRKUO', 'Laki-laki', 24, 2),
(119, 2469, 'AHMAD REYNALDI SURYA SAPUTRA', '$2y$10$AXHxL.YNUgHpn2LzxDwViOYu4kUaeEXCqVvuypbyVD76dU42/zLsK', 'Laki-laki', 24, 2),
(120, 2470, 'AL FINA DHIROSATUN NURIL HASNA', '$2y$10$sR9MXmX3vEQ1CpQOWx1IU.SdEJIw6j71D0mqKjF5joQg7QF9eNvsy', 'Perempuan', 24, 2),
(121, 2471, 'AYU DWI PUTRI', '$2y$10$UlO5xWllgrt1vg4eLvkzreEAUFrOHRIGP2UAw8uOG7B8n3M2terF6', 'Perempuan', 24, 2),
(122, 2472, 'BELA ANTANIA', '$2y$10$zulXkXFR90a.99XEOkUziuKnyTg9w0Rs2JaKA2wMHVhSB5VNjHZOK', 'Perempuan', 24, 2),
(123, 2473, 'CINDY AYU WULANDARI', '$2y$10$FNXChqscaYyfyBboNpoN2.MMCzHJcJ7cSMVq3oETWBRJZHa3rbhEm', 'Perempuan', 24, 2),
(124, 2474, 'ELIANTINA', '$2y$10$bhsZ4NTOUT28DGZGZn1xSu3OtbkusviGBTd56SC8XN/S9s69mEB36', 'Perempuan', 24, 2),
(125, 2476, 'FEBBY RIO ERLANGGA', '$2y$10$OAhZb7iKRm2mdv.q9pYXHeJ58wpf0KrDFAkRx7uMuvQAGeiDlE5Y6', 'Laki-laki', 24, 2),
(126, 2477, 'FERA ZULIA NINGRUM', '$2y$10$3vG56rlqeVsr5plHGmFeEuMXLPjtm1ZJxn3S.79KkNjVDWeyXImHO', 'Perempuan', 24, 2),
(127, 2478, 'FINA ROHMAWATI', '$2y$10$TZhBxJSHwKp/GEVX.nYW0uAxxDZIAdhWsW8k3EB33dBU/0bdUpcAK', 'Perempuan', 24, 2),
(128, 2479, 'FITRI NURDIANA SARI', '$2y$10$Eg.aAD5/kIHyUoXdZ7geV.aL3FVC7ve/7BFajAOpF2v3RV3G9CDP6', 'Perempuan', 24, 2),
(129, 2502, 'ADHETA SILVIA FESTADHONA', '$2y$10$WLos4iZRSwh9o3fXUXWQ4eRfaLS.lNyd5w5cOchxoqFaqwPjX5oti', 'Perempuan', 25, 2),
(130, 2503, 'AHMAD ALAMUL HUDA', '$2y$10$EF5EBKOazvTxJT/UTUXLPOf0GACeFLWuflyDFS5jX/pDE/RheJJn.', 'Laki-laki', 25, 2),
(131, 2504, 'AHMAD ALDI IRWAN', '$2y$10$1IoMHHLcSlhgH8IN9TyqaeIfTmS9LB0cuMVml3kLEHafRo5P6HrUW', 'Laki-laki', 25, 2),
(132, 2505, 'AIDA NUR ARIFAH', '$2y$10$vhlmLMx5gmejVoZqSzMyY.vHeEWfeI5dGoYtjJXJBaf9kUBmF2/Mi', 'Perempuan', 25, 2),
(133, 2506, 'ANIS ASYIATUZ ZAROH', '$2y$10$385PPLEiMSXIX1D99l111uPt3IwEXVGlAzD9Vwlje/hwZfiwadDga', 'Perempuan', 25, 2),
(134, 2507, 'ANJELIKA OKTAFIANI', '$2y$10$WyMMrw5rpsfWopSSpHnXqOMreg8nITmDGhwkV9Fx9ixVW8/Xxkm32', 'Perempuan', 25, 2),
(135, 2508, 'DELTA AYU SAPUTRI', '$2y$10$dL8iW8qZTRFe2ra8Bh.sIOQWz64DM6obZuHiecW4WpspBTiM91FM.', 'Perempuan', 25, 2),
(136, 2509, 'DELTA TRI ANGGARA PUTRA', '$2y$10$hS6l4BQIvwAE3AOPhVp4p.9NYN3GQ3FBOIRkZWmHCoWHm.Xc1sfM2', 'Perempuan', 25, 2),
(137, 2510, 'DIAH ANGGI SAFITRI', '$2y$10$JlL3no72UG8dX0HGinbrfuc9kAZD6U7UaCIWkCei9xBWELgXMeiyu', 'Perempuan', 25, 2),
(138, 2511, 'FEBRIAN KUSUMA MAHARDIKA', '$2y$10$aWA2nHh9DkU5pNRMJR26QO9IYq2IpeUB/xHz5R7Rz3ilemKvDzHjC', 'Laki-laki', 25, 2),
(139, 2512, 'HANNA ECHA SARI', '$2y$10$F0oo.uM2aNOPU/xSZjD7Wu3rwBll6iYkouUl8mszLU9b8Kdvs.1US', 'Perempuan', 25, 2),
(140, 2514, 'INDRI RAHMATIKA AZZARO', '$2y$10$C/8q3P2EJk2tLfaDhOl0O.LbrCfQsJ8eSGde4p8PV9ob2giCm5/vW', 'Perempuan', 25, 2),
(141, 2515, 'INTAN PUTRI PRAMESWARI', '$2y$10$RN.1PtIR.pnT3EHAiGFp9uF58a035mXNjDgmtrNVtQbhC/txtI36.', 'Perempuan', 25, 2),
(142, 2538, 'AHMAD ABDUL WAHAB', '$2y$10$1fiQrFCtbmIrd3NXvLH17efK0YKlgPfZcosi3QsidIe0KsBAZmwxW', 'Laki-laki', 26, 2),
(143, 2539, 'AHSOL AMRI', '$2y$10$bLDBdJAmfsIbQGIh2E4mGu/GcTEgM852m5gX7xrKDzCD8bYRcOEmO', 'Laki-laki', 26, 2),
(144, 2540, 'AMELIA PUTRI WULANDARI', '$2y$10$K9n71J4gEEpU1ZSvsnE./.D0V/kCDdNlFZx5uw0oFeaepCENsjYZi', 'Perempuan', 26, 2),
(145, 2541, 'ANDRE SANTOSO', '$2y$10$XB9hSAjNh3RKBKvDi.RHOec.bjff9W1NrlXnWSQHSUdZkDQ.RQE62', 'Laki-laki', 26, 2),
(146, 2542, 'ANITA FITRIYANI', '$2y$10$4faUbdogfJn107CkenkLiudnZj1uJn2jDyZfUuLu0NZXS4kgCyPrm', 'Perempuan', 26, 2),
(148, 2543, 'ARDIANSYAH WAHYU PRATAMA', '$2y$10$GV7/XkqR0uj/WccXvBspgOLwKMNN9XRQXxR8.ID96Xm0U/Q66EalS', 'Laki-laki', 26, 2),
(149, 2544, 'ARI PRATAMA', '$2y$10$LaxYjnoW/.LQuvT0NAPdJ.upNIlCPwUVP4YNgveOa6bX06SHKDn0e', 'Laki-laki', 26, 2),
(150, 2545, 'ARISENDI NOVARUDIKA', '$2y$10$MFuq.FaBtMkku3PkW/rSxOCUaZAwRT7hhquUu5WDlDYbwue.XK6jW', 'Laki-laki', 26, 2),
(151, 2546, 'BAGAS MANTOFANI', '$2y$10$eIrky4JDnqRHRIXJ.iRcu.GRzwyeUGH1pgZ7x1AvJ9RHWcGgMMgBy', 'Laki-laki', 26, 2),
(152, 2547, 'DESI FITRIYANI', '$2y$10$dIVK1FdLEUH1LYUlptWIdO2uWfbNPqUqEPz6e0DCDfD8aYQtwIJSa', 'Perempuan', 26, 2),
(153, 2548, 'EKO ARI ANANDA', '$2y$10$Toho4RH8Kw/4E65TegVMguXXF8U/J.7i0uBAccpzHtiGOwKo/XcTu', 'Laki-laki', 26, 2),
(154, 2549, 'ERFIKA MAUNITASARI', '$2y$10$Xi.VCi7O09aKu2lRC/NeI.hF7khgQNFEwON7nBijS/gjuCegt.mzy', 'Perempuan', 26, 2),
(155, 2550, 'ERIKA DELLA PUSPITA', '$2y$10$D4IrEemI5WBZBwrATITmcOKHaZq7uD9B5jgjycsmxlCqSFcnWMjjm', 'Perempuan', 26, 2),
(157, 2574, 'AISYAH ANANDA PUTRI', '$2y$10$gg/LSnCxZl24ByVlN7FpDu7.CVtR/Om1XZIpnilNnMaBJ70iMik3G', 'Perempuan', 27, 2),
(158, 2575, 'ALFAAT FALENTINO', '$2y$10$UiQCT3FI/LGnWIb5krpP2.6YVdKLvpd0bIlweYZs7gy5T6AL3DLTq', 'Laki-laki', 27, 2),
(159, 2576, 'ALFUNING HIKMAH', '$2y$10$2mf7RXHoZt8qZ4yyj.//YefLQl7O9SOFO3eA7MKwMUOQLaYuHWXU2', 'Perempuan', 27, 2),
(160, 2577, 'ANDIKA DWI KURNIAWAN', '$2y$10$ZDeNpQEv0zLZfisucGwaUOaXj2a0r5FkDL2ZLR5urdfC7zF/GJlUi', 'Laki-laki', 27, 2),
(161, 2578, 'ANDIKA HUDI PRAYOGA', '$2y$10$sFGv2g5OyC84CKfAMP/pluXdqCiYS1IFbAGDBKMncOvuqSnKzS1jK', 'Laki-laki', 27, 2),
(162, 2579, 'APRIESCHA DARA SAFARA', '$2y$10$U5xPxNbhbzFhvKKuyKQhmewQHTdOLwr0GfBBmKqCUALWKdDAx4I4G', 'Perempuan', 27, 2),
(163, 2580, 'ARFIYAN AJI PRATAMA', '$2y$10$pdG2bRL5mBA1WTWM7hFea.1mqts3Ne4nvJQXHLIfPvouweNz/1xwO', 'Laki-laki', 27, 2),
(164, 2581, 'BAGUS PUJI UTOMO', '$2y$10$9h79xn.YcNpJtBJ7oizNE..i0PRbZc4VuEe0Xatd2s3/KIR58gRlS', 'Laki-laki', 27, 2),
(165, 2582, 'DEVITA ANGGRAINI', '$2y$10$UP2FwwsqfRkXHuB7WZJkhukh9KwQTL8vtdGkUNZdVIiGuH57tEVN.', 'Perempuan', 27, 2),
(166, 2583, 'DHEA YUNIA SARI', '$2y$10$xf.I5xUR2QulibDu5jjYL.9sXYLUv7DlWiClyLu8NfoEGHWwkj47a', 'Perempuan', 27, 2),
(167, 2584, 'FARIZ ABDILLAH QHODAR', '$2y$10$IkCikn7pkNtQs93D/SIGt.Q8jJD3IDiqsnTAciUA4.5CGu/2wq2BS', 'Laki-laki', 27, 2),
(168, 2585, 'HELMAESA DIEGO PUTRA', '$2y$10$HIdrM5WXnhBOxFAVKkuRVu78JTnaiiT6ksXWhAqW..UXSueHvxceq', 'Laki-laki', 27, 2),
(169, 2587, 'LUDVI ABDUL MAJID AL VAIZ', '$2y$10$Fk9vES2fzXBzIpOXJKMM.eRP7eMrR.7bmKOBMRGZp5nayZWBYeMZ2', 'Laki-laki', 27, 2),
(171, 1941, 'KHOIRUL ANNAS', '$2y$10$C2tYMe2PDO68sB.vbQFg.eYpG/JCAaBJkRrD3Q18swR3S5mMNXD3i', 'Laki-laki', 43, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petugas_id` (`petugas_id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD CONSTRAINT `tb_jabatan_ibfk_1` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `tb_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
