-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2022 pada 09.39
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `golongan`, `jeniskelamin`, `jabatan`) VALUES
(123100011, 'Mirnawan Sukmawati, S.Pd.', '2 A', 'Perempuan', 'Kepala TU'),
(123200022, 'Warman Gunawan, S.Pd.', '3 A', 'Laki-laki', 'Bendahara Sekolah'),
(123300033, 'Sugino Jumanto, S.Pd.', '4 A', 'Laki-laki', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `jeniskelamin`, `kelas`) VALUES
(1821, 18220322, 'Ananda Putri Ramadhani', 'Perempuan', 'XI-IPA 1'),
(1822, 18220323, 'Dewi Aulia Dwi', 'Perempuan', 'XI-IPA 2'),
(1823, 18220330, 'Fadhilah Ramadhani', 'Perempuan', 'XI-IPA 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'adminsekolah@gmail.com', 'Dewi Aulia', 1, 'Staf TU Sekolah'),
('pengunjung', '4c7420670566ee2315c2292921c55166', 'pengunjungsekolah@gmail.com', 'Ananda Putri Ramadhani', 2, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
