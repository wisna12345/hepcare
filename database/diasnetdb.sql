-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2022 pada 07.14
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diasnetdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_aturan`
--

CREATE TABLE `basis_aturan` (
  `id_gejala` varchar(10) DEFAULT NULL,
  `pertanyaan` varchar(300) DEFAULT NULL,
  `fakta_ya` varchar(150) DEFAULT NULL,
  `fakta_tidak` varchar(150) DEFAULT NULL,
  `ngejala_akut` double NOT NULL,
  `ngejala_kronis` double NOT NULL,
  `ngejala_periodik` double NOT NULL,
  `rute` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_penyakit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basis_aturan`
--

INSERT INTO `basis_aturan` (`id_gejala`, `pertanyaan`, `fakta_ya`, `fakta_tidak`, `ngejala_akut`, `ngejala_kronis`, `ngejala_periodik`, `rute`, `status`, `id_penyakit`) VALUES
('g1', 'Apakah Anda memiliki gejala Flu?', 'Anda memiliki gejala Flu', 'Anda tidak memiliki gejala Flu', 0.45, 0.45, 0.1, 'g2', ' ', 0),
('g2', 'Apakah Anda merasa Lelah?', 'Anda merasa Lelah', 'Anda tidak merasa Lelah', 0.34, 0.33, 0.33, 'g3', ' ', 0),
('g3', 'Apakah Anda Demam?', 'Anda Demam', 'Anda Tidak Demam', 0.34, 0.33, 0.33, 'g4', ' ', 0),
('g4', 'Apakah Anda mengalami Diare', 'Anda mengalami Diare', 'Anda tidak mengalami Diare', 0.8, 0.1, 0.1, 'g5', ' ', 0),
('g5', 'Apakah Anda merasa mual?', 'Anda merasa mual', 'Anda tidak merasa mual', 0.34, 0.33, 0.33, 'g6', ' ', 0),
('g6', 'Apakah Anda mengalami nyeri pada perut?', 'Anda mengalami nyeri perut', 'Anda tidak mengalami nyeri perut', 0.8, 0.1, 0.1, 'g7', ' ', 0),
('g7', 'Apakah Anda mengalami mata kuning?', 'Anda mengalami mata kuning', 'Anda tidak mengalami mata kuning', 0.45, 0.45, 0.1, 'g8', ' ', 0),
('g8', 'Apakah Anda merasa kehilangan nafsu makan?', 'Anda merasa hilang nafsu makan', 'Anda tidak merasa hioang nafsu makan', 0.45, 0.1, 0.45, 'g9', ' ', 0),
('g9', 'Apakah Anda merasa lemah?', 'Anda merasa lemah', 'Anda tidak merasa lemah', 0.1, 0.8, 0.1, 'g10', ' ', 0),
('g10', 'Apakah Anda merasa lesu?', 'Anda merasa lesu', 'Anda tidak merasa lesu', 0.45, 0.45, 0.1, 'g11', ' ', 0),
('g11', 'Apakah Anda mengalami sakit otot atau merasa pegal-pegal pada otot?', 'Anda mengalami sakit otot', 'Anda tidak mengalami sakit otot', 0.34, 0.33, 0.33, 'g12', ' ', 0),
('g12', 'Apakah Anda mengalami demam ringan?', 'Anda mengalami demam ringan', 'Anda tidak mengalami demam ringan', 0.1, 0.8, 0.1, 'g13', ' ', 0),
('g13', 'Apakah Anda merasa kurang nafsu makan?', 'Anda mengalami kurang nafsu makan', 'Anda tidak mengalami kurang nafsu makan', 0.1, 0.8, 0.1, 'g14', ' ', 0),
('g13', 'Apakah Anda merasa kurang nafsu makan?', 'Anda mengalami kurang nafsu makan', 'Anda tidak mengalami kurang nafsu makan', 0.1, 0.8, 0.1, 'g14', ' ', 0),
('g14', 'Apakah Anda mengalami kulit kuning?', 'Anda mengalami kulit kuning', 'Anda tidak mengalami kulit kuning', 0.1, 0.8, 0.1, 'g15', ' ', 0),
('g15', 'Apakah air kencing Anda berwarna gelap?', 'Air kencing Anda bewarma gelap ', 'Air kencing Anda tidak berwarna gelap', 0.34, 0.33, 0.33, 'g16', ' ', 0),
('g16', 'Apakah Anda mengalami muntah?', 'Anda mengalami muntah', 'Anda tidak mengalami muntah', 0.34, 0.33, 0.33, 'g17', ' ', 0),
('g17', 'Apakah Anda merasa sakit perut?', 'Anda merasa sakit perut', 'Anda tidak merasa sakit perut', 0.1, 0.45, 0.45, 'g18', ' ', 0),
('g18', 'Apakah Anda merasa sakit kepala?', 'Anda merasa sakit kepala', 'Anda tidak merasa sakit kepala', 0.1, 0.8, 0.1, 'g19', ' ', 0),
('g19', 'Apakah Anda merasa pegal linu?', 'Anda merasa pegal linu', 'Anda tidak merasa pegal linu', 0.1, 0.1, 0.8, 'g20', ' ', 0),
('g20', 'Apakah Anda mengalami malaise?', 'Anda mengalami malaise', 'Anda tidak mengalami malaise', 0.8, 0.1, 0.1, 'g21', ' ', 0),
('g21', 'Apakah Anda mengalami nausea?', 'Anda mengalami nausea', 'Anda tidak mengalami nausea', 0.8, 0.1, 0.1, 'g22', ' ', 0),
('g22', 'Apakah Anda merasa pusing?', 'Anda merasa pusing', 'Anda tidak merasa pusing', 0.45, 0.45, 0.1, 'g23', ' ', 0),
('g23', 'Apakah Anda mengalami air kencing berwana merah?', 'Anda mengalami air kencing berwarna merah', 'Anda tidak mengalami air kencing berwarna merah', 0.8, 0.1, 0.1, 'g24', ' ', 0),
('g24', 'Apakah bola mata Anda bagian putih menjadi berwarna kuning ?', 'Anda mengalami bola mata berwarna kuning', 'Anda tidak mengalami bola matra berwarna kuning', 0.8, 0.1, 0.1, 'g25', ' ', 0),
('g25', 'Apakah Anda merasa nyeri sendi?', 'Anda merasa nyeri sendi', 'Anda tidak nyeri sendi', 0.45, 0.45, 0.1, 'g26', ' ', 0),
('g26', 'Apakah Anda merasa tidak enak pada tenggorokan?', 'Anda merasa tidak enak pada tenggorokan', 'Anda tidak merasa tidak enak pada tenggorokan', 0.8, 0.1, 0.1, 'g27', ' ', 0),
('g27', 'Apakah muncul ikterus pada Anda dalam beberapa hari terakhir ?', 'muncul ikterus pada Anda dalam beberapa hari terakhir', 'tidak muncul ikterus pada Anda dalam beberapa hari terakhir', 0.8, 0.1, 0.1, 'g28', ' ', 0),
('g28', 'Apakah Anda mengalami insidious?', 'Anda mengalami insidious', 'Anda tidak mengalami insidious', 0.1, 0.8, 0.1, 'g29', ' ', 0),
('g29', 'Apakah Anda mengalami rash?', 'Anda mengalami rash', 'Anda tidak mengalami rash', 0.1, 0.8, 0.1, 'g30', ' ', 0),
('g31', 'Apakah Anda merasa menggigil?', 'Anda merasa menggigil', 'Anda tidak merasa menggigil', 0.1, 0.1, 0.8, 'g32', ' ', 0),
('g32', 'Apakah Anda merasa nyeri perut sebelah kanan', 'Anda merasa nyeri perut sebelah kanan', 'Anda tidak merasa nyeri perut sebelah kanan', 0.1, 0.1, 0.8, 'g33', ' ', 0),
('g33', 'Apakah berat badan Anda turun tanpa sebab', 'Berat badan anda turun tanpa sebab', 'Berat bandan Anda tidak turun tanpan sebab', 0.1, 0.1, 0.8, 'g34', ' ', 0),
('g25', 'Apakah Anda merasa nyeri sendi?', 'Anda merasa nyeri sendi', 'Anda tidak nyeri sendi', 0.45, 0.45, 0.1, 'g26', ' ', 0),
('g26', 'Apakah Anda merasa tidak enak pada tenggorokan?', 'Anda merasa tidak enak pada tenggorokan', 'Anda tidak merasa tidak enak pada tenggorokan', 0.8, 0.1, 0.1, 'g27', ' ', 0),
('g27', 'Apakah muncul ikterus pada Anda dalam beberapa hari terakhir ?', 'muncul ikterus pada Anda dalam beberapa hari terakhir', 'tidak muncul ikterus pada Anda dalam beberapa hari terakhir', 0.8, 0.1, 0.1, 'g28', ' ', 0),
('g28', 'Apakah Anda mengalami insidious?', 'Anda mengalami insidious', 'Anda tidak mengalami insidious', 0.1, 0.8, 0.1, 'g29', ' ', 0),
('g29', 'Apakah Anda mengalami rash?', 'Anda mengalami rash', 'Anda tidak mengalami rash', 0.1, 0.8, 0.1, 'g30', ' ', 0),
('g31', 'Apakah Anda merasa menggigil?', 'Anda merasa menggigil', 'Anda tidak merasa menggigil', 0.1, 0.1, 0.8, 'g32', ' ', 0),
('g32', 'Apakah Anda merasa nyeri perut sebelah kanan', 'Anda merasa nyeri perut sebelah kanan', 'Anda tidak merasa nyeri perut sebelah kanan', 0.1, 0.1, 0.8, 'g33', ' ', 0),
('g33', 'Apakah berat badan Anda turun tanpa sebab', 'Berat badan anda turun tanpa sebab', 'Berat bandan Anda tidak turun tanpan sebab', 0.1, 0.1, 0.8, 'g34', ' ', 0),
('g30', 'Apakah Anda mengalami jaundice?', 'Anda mengalami jaundice', 'Anda tidak mengalami jaundice', 0.1, 0.45, 0.45, 'g31', ' ', 0),
('g34', 'Apakah Anda mengalami gangguan abnomial tidak jelas?', 'Anda mengalami abnomial tidak jelas', 'Anda tidak mengalami abnomial tidak jelas', 0.1, 0.1, 0.8, 'g35', ' ', 0),
('g35', 'Apakah Anda mengalami kembung?', 'Anda mengalami kembung', 'Anda tidak mengalami kembung', 0.1, 0.1, 0.8, 'g36', ' ', 0),
('g36', 'Apakah Anda mengalami mencret?', 'Anda mengalami mencret', 'Anda tidak mengalami mencret', 0.1, 0.1, 0.8, 'final', ' ', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_gejala`
--

CREATE TABLE `daftar_gejala` (
  `id_gejala` varchar(10) DEFAULT NULL,
  `gejala` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_gejala`
--

INSERT INTO `daftar_gejala` (`id_gejala`, `gejala`) VALUES
('g1', 'Gejala mirip flu'),
('g2', 'Rasa Lelah'),
('g3', 'Demam'),
('g4', 'Diare'),
('g5', 'Mual'),
('g6', 'Neri perut'),
('g7', 'Mata kuning'),
('g8', 'Hilang nafsu makan'),
('g9', 'Lemah'),
('g10', 'Lesu'),
('g11', 'Sakit otot/pegal-pegal pada otot (Mialgia)'),
('g12', 'Demam Ringan'),
('g13', 'Kurang nafsu makan'),
('g14', 'Kulit kuning'),
('g15', 'Air kencing berwarna gelap'),
('g16', 'Muntah'),
('g17', 'Sakit perut'),
('g18', 'Sakit kepala'),
('g19', 'Pegel linu'),
('g20', 'Malaise'),
('g21', 'Nausea'),
('g22', 'Pusing'),
('g23', 'Air kencing kemerahan'),
('g24', 'Bola mata bagian putih menjadi kekuningan'),
('g25', 'Nyeri pada sendi (Arthralgia)'),
('g26', 'Rasa tidak enak pada tenggorokan'),
('g27', 'Munculnya ikterus selama beberapa hari'),
('g28', 'Insidious'),
('g29', 'Rash'),
('g30', 'Jaundice'),
('g31', 'Mengigil'),
('g32', 'Nyeri perut sebelah kanan'),
('g33', 'Penurunan berat badan yang tidak diketahui sebabnya'),
('g34', 'Gangguan abdominal tidak jelas'),
('g35', 'Kembung'),
('g36', 'Mencret');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_penyakit`
--

CREATE TABLE `daftar_penyakit` (
  `id_penyakit` varchar(10) DEFAULT NULL,
  `nama_penyakit` varchar(50) DEFAULT NULL,
  `npenyakit` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_penyakit`
--

INSERT INTO `daftar_penyakit` (`id_penyakit`, `nama_penyakit`, `npenyakit`) VALUES
('p1', 'Hepatitis A', 0.3),
('p2', 'Hepatitis B', 0.3),
('p3', 'Hepatitis C', 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_solusi`
--

CREATE TABLE `daftar_solusi` (
  `id_solusi` varchar(10) DEFAULT NULL,
  `solusi` varchar(300) DEFAULT NULL,
  `id_penyakit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_solusi`
--

INSERT INTO `daftar_solusi` (`id_solusi`, `solusi`, `id_penyakit`) VALUES
('s0', 'Anda tidak terdeteksi mengidap penyakit Hepatitis', 'p0'),
('s1', 'Hindari minuman beralkohol dan merokok ', 'p1'),
('s2', 'Dilarang Makan dan minum yang manis ', 'p1'),
('s3', 'Dilarang makan makanan yang mengandung garam tinngi ', 'p1'),
('s4', 'Makan makanan yang mengandung banyak nutrisi dan vitamin ', 'p1'),
('s5', 'Istirahat total dan perbanyak minum air putih ', 'p1'),
('s6', 'Hindari minumn alkohol dan merokok ', 'p2'),
('s7', 'Dilarang olahraga berlebihan', 'p2'),
('s8', 'Dilarang Makan dan minum yang manis ', 'p2'),
('s9', 'Dilarang mengomsumsi makan makanan mentah dan setengah matang ', 'p2'),
('s10', 'Dilarang Mengonsumsi makanan yang mengandung banyak lemak ', 'p2'),
('s11', 'Makan makanan yang mengandung banyak nutrisi dan vitamin ', 'p2'),
(NULL, NULL, ''),
('s12', 'Istirahat total dan perbanyak minum air putih', 'p2'),
('s13', 'Dilarang mengkonsumsi makanan yang banyak mengandung garam, gula ', 'p3'),
('s14', 'Dilarang mengonsumsi alcohol dan merokok', 'p3'),
('s15', 'Diharap bisa olahraga secara teratur', 'p3'),
('s16', 'Mengonsumsi banyak sayur dan buah', 'p3'),
('s17', 'Istirahat yang cukup dan banyak mengonsumsi air putih', 'p3'),
('s18', 'Lakukan pemeriksaan yang berhubungan dengan penyakit hepatitis ', 'p3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_user`
--

CREATE TABLE `daftar_user` (
  `id_user` int(15) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `usia` int(10) DEFAULT NULL,
  `tgl_diagnosa` date DEFAULT NULL,
  `keterangan` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_user`
--

INSERT INTO `daftar_user` (`id_user`, `nama`, `password`, `jenis_kelamin`, `usia`, `tgl_diagnosa`, `keterangan`) VALUES
(1, 'hendras', 'pass', 'pria', 21, '2015-11-22', 'Negatif Asma (Normal)'),
(2, 'jimi', 'pass2', 'pria', 21, '2022-07-03', 'HEPATITIS A'),
(3, 'wili', 'pass3', 'pria', 21, '2015-11-10', '-'),
(4, 'mike', 'pass4', 'pria', 21, '2015-11-19', '-'),
(5, 'jadid', 'jadid098', 'pria', 20, '2022-06-21', '-'),
(6, 'jadid', 'jadid', 'pria', 20, '2022-06-21', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(15) NOT NULL,
  `nama_pengirim` varchar(30) DEFAULT NULL,
  `email_pengirim` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mail`
--

INSERT INTO `mail` (`id_mail`, `nama_pengirim`, `email_pengirim`, `pesan`) VALUES
(1, 'Your Name *', 'Your E-mail *', 'Your Message *'),
(2, 'hendras', 'hendras.com', 'wohoooo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `mail`
--
ALTER TABLE `mail`
  ADD KEY `id_mail` (`id_mail`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
