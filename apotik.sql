
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 02 Des 2017 pada 07.24
-- Versi Server: 10.1.20-MariaDB
-- Versi PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u132483739_aptk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `idKaryawan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `tmpLahir` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  PRIMARY KEY (`idKaryawan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `nama`, `jenisKelamin`, `tmpLahir`, `tglLahir`, `alamat`, `telepon`, `username`, `password`, `profesi`) VALUES
(1, 'Niko ', 'laki-laki', 'Batu', '2016-12-14', 'Jl.Mannga RT 3 RW 13 , Dsn Gondorejo , Kel.Oro oro Ombo , Kota batu', '08970325520', 'niko', 'niko', 'Administrator'),
(2, 'Maulinda ', 'Perempuan', 'Batu Malang', '1998-12-24', 'Jl.Raya BNS Oro Oro Ombo', '08980808443', 'linda', 'linda', 'Kasir'),
(3, 'Romi', 'laki-laki', 'Batu Malang', '1997-08-07', 'Gondorejo Batu ', '08746759302', 'romi', 'romi', 'Kasir'),
(4, 'Fida', 'Perempuan', 'Batu Malang', '2016-12-30', 'Batu Malang', '08759987342', 'fida', 'fida', 'Kasir'),
(5, 'Anis', 'Perempuan', 'Malang', '2016-12-21', 'Malang', '08978690483', 'anis', 'anis', 'Kasir'),
(6, 'Nanda', 'Perempuan', 'Malang', '2017-01-20', 'Malang', '08789272883', 'nanda', 'nanda', 'Kasir'),
(9, 'user', 'Laki-Laki', 'malang', '0000-00-00', 'khjkl', '09098', 'user', 'user', 'Administrator'),
(7, 'Dani', 'Laki-Laki', 'Malang', '1997-01-20', 'Malang', '0834328472', 'dani', 'dani', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriobat`
--

CREATE TABLE IF NOT EXISTS `kategoriobat` (
  `idKategoriobat` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`idKategoriobat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoriobat`
--

INSERT INTO `kategoriobat` (`idKategoriobat`, `kategori`) VALUES
(1, 'Sakit Kepala'),
(2, 'Sakit Gigi'),
(3, 'Migren  Ngelu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `idObat` int(11) NOT NULL,
  `idTipeobat` int(11) NOT NULL,
  `idKategoriobat` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tglExp` date NOT NULL,
  `hargaBeli` int(15) NOT NULL,
  `hargaJual` int(15) NOT NULL,
  `stok` int(10) NOT NULL,
  PRIMARY KEY (`idObat`),
  KEY `idTipeobat` (`idTipeobat`),
  KEY `idKategoriobat` (`idKategoriobat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`idObat`, `idTipeobat`, `idKategoriobat`, `nama`, `tglExp`, `hargaBeli`, `hargaJual`, `stok`) VALUES
(1, 1, 1, 'Mixagrip', '2016-12-15', 5000, 5500, 100),
(2, 2, 2, 'Saridon ', '2016-12-20', 4000, 5000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` varchar(15) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  PRIMARY KEY (`idPelanggan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `nama`, `jenisKelamin`, `alamat`, `keluhan`, `telepon`) VALUES
(1, 'Nicholas Kalmar', 'laki-laki', 'Jl.Simpang Gemulo , Ds.Sumber gondo , Kota Batu', 'meriang', '08970324857'),
(3, 'Ahmad Bustomi', 'Laki-Laki', 'Jl .Kepuharjo, Karang Ploso', 'Kepuharjo', '0876876859807');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `idPemesanan` int(11) NOT NULL,
  `idSupplier` int(11) NOT NULL,
  `idProfesikrw` int(11) NOT NULL,
  `tglPemesanan` datetime NOT NULL,
  PRIMARY KEY (`idPemesanan`),
  KEY `idSupplier` (`idSupplier`),
  KEY `idProfesikrw` (`idProfesikrw`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `idSupplier`, `idProfesikrw`, `tglPemesanan`) VALUES
(1, 1, 1, '2016-12-27 11:18:46'),
(2, 2, 3, '2016-12-27 00:00:00'),
(3, 1, 1, '2016-12-10 00:00:00'),
(4, 1, 1, '2016-12-24 00:00:00'),
(5, 3, 3, '2017-01-26 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanandetails`
--

CREATE TABLE IF NOT EXISTS `pemesanandetails` (
  `idPemesanandetails` int(11) NOT NULL,
  `idPemesanan` int(11) NOT NULL,
  `idObat` int(11) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `hargaBeli` bigint(15) NOT NULL,
  `grandTotal` bigint(20) NOT NULL,
  `bayar` bigint(20) NOT NULL,
  `kembalian` bigint(20) NOT NULL,
  PRIMARY KEY (`idPemesanandetails`),
  KEY `idObat` (`idObat`),
  KEY `idPemesanan` (`idPemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanandetails`
--

INSERT INTO `pemesanandetails` (`idPemesanandetails`, `idPemesanan`, `idObat`, `jumlah`, `hargaBeli`, `grandTotal`, `bayar`, `kembalian`) VALUES
(1, 1, 1, 4, 5000, 20000, 20000, 0),
(2, 2, 2, 100, 4000, 4000000, 4000000, 0),
(3, 3, 2, 200, 5000, 1000000, 1000000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `idPenjualan` int(11) NOT NULL,
  `idPelanggan` int(11) NOT NULL,
  `idProfesikrw` int(11) NOT NULL,
  `tglPenjualan` datetime NOT NULL,
  PRIMARY KEY (`idPenjualan`),
  KEY `idPelanggan` (`idPelanggan`),
  KEY `idProfesikrw` (`idProfesikrw`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `idPelanggan`, `idProfesikrw`, `tglPenjualan`) VALUES
(1, 1, 2, '2016-12-29 09:22:48'),
(2, 1, 2, '2016-12-29 16:48:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualandetails`
--

CREATE TABLE IF NOT EXISTS `penjualandetails` (
  `idPenjualandetails` int(11) NOT NULL,
  `idPenjualan` int(11) NOT NULL,
  `idObat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargaJual` int(15) NOT NULL,
  `grandTotal` bigint(15) NOT NULL,
  `bayar` bigint(15) NOT NULL,
  `kembalian` bigint(15) NOT NULL,
  PRIMARY KEY (`idPenjualandetails`),
  KEY `idObat` (`idObat`),
  KEY `idPenjualan` (`idPenjualan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualandetails`
--

INSERT INTO `penjualandetails` (`idPenjualandetails`, `idPenjualan`, `idObat`, `jumlah`, `hargaJual`, `grandTotal`, `bayar`, `kembalian`) VALUES
(1, 1, 1, 5, 4000, 20000, 20000, 0),
(2, 1, 2, 2, 4000, 8000, 10000, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesikrw`
--

CREATE TABLE IF NOT EXISTS `profesikrw` (
  `idProfesikrw` int(11) NOT NULL,
  `idKaryawan` int(11) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  PRIMARY KEY (`idProfesikrw`),
  KEY `idKaryawan` (`idKaryawan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profesikrw`
--

INSERT INTO `profesikrw` (`idProfesikrw`, `idKaryawan`, `profesi`) VALUES
(1, 1, 'admin'),
(2, 2, 'kasir'),
(3, 3, 'Admin'),
(4, 4, 'Kasir'),
(5, 1, 'Staf Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `idSupplier` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `perusahaan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  PRIMARY KEY (`idSupplier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `nama`, `jenisKelamin`, `perusahaan`, `alamat`, `telepon`) VALUES
(1, 'Dani Permana', 'laki-laki', 'PT MAJU PERKASA ', 'Jl.ManggaDua Jakarta Selatan ', '089765432245'),
(2, 'Dendi Santoso', 'laki-laki', 'PT GUNA BANGUN PERSADA', 'Jl.Simpang Tebet, Bogor , Indonesia', '0821638237231'),
(3, 'Prisclie', 'Perempuan', 'PT MEDICAL UTAMA', 'Jl.supriadi , Karawang , Indonesia', '089707233445');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipeobat`
--

CREATE TABLE IF NOT EXISTS `tipeobat` (
  `idTipeobat` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  PRIMARY KEY (`idTipeobat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipeobat`
--

INSERT INTO `tipeobat` (`idTipeobat`, `tipe`) VALUES
(1, 'Kapsul'),
(2, 'Pil'),
(3, 'Sirup');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
