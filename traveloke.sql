-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Agu 2022 pada 16.42
-- Versi server: 5.7.33
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveloke`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tiket_masuk` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `lokasi`, `tiket_masuk`, `deskripsi`, `gambar`) VALUES
(1, 'Pantai Kuta', 'Kuta,Denpasar,Bali', 15000, 'Objek wisata pantai Kuta akan selalu masuk dalam daftar tempat wisata di kunjungi di pulau Bali bagi wisatawan yang pertama kali liburan ke Bali. Ada beberapa hal utama yang membuat pantai Kuta ramai mendapat kunjungan wisatawan. Seperti, menawarkan pantai pasir putih dengan bentangan garis pantai sangat panjang, serta pemandangan sunset.Kemudian, ombak di pantai Kuta lumayan besar dan cocok untuk aktivitas selancar pemula. Jika anda ingin berenang bersama anak-anak, maka anak anda harus selalu dalam pengawasan orang dewasa.Lebih lanjut, aktivitas utama wisatawan saat liburan ke pantai Kuta adalah duduk santai di tepi pantai, berenang, jalan-jalan, dan melihat pemandangan sunset. Karena tingginya minat wisatawan liburan ke pantai Kuta, maka hampir setiap hari jalan raya sekitar pantai Kuta akan terjadi kemacetan.Selain daya tarik pantai pasir putih, fasilitas pariwisata di sekitar area tempat wisata Kuta sangat lengkap. Anda akan dengan mudah menemukan akomodasi, tempat makan, pusat perbelanjaan, transportasi dan klub malam.\r\n', 'img-1660062389.jpg'),
(2, 'Bali Safari Marine Park', 'Serongga,Gianyar,Bali', 450000, 'Jika anda liburan keluarga ke pulau Bali dengan anak, maka tempat wisata Bali Safari & Marine Park wajib anda kunjungi. Bali Safari & Marine Park adalah sebuah kebun binatang yang memiliki luas area sangat luas, sekitar 400,000 meter persegi.Lebih lanjut, keunikan Bali Safari & Marine Park, setiap jenis satwa berkeliaran bebas dalam sebuah area besar. Karena area sangat luas, agar pengunjung dapat melihat satwa secara langsung, pengunjung akan menaiki kendaraan safari. Aktivitas ini terkenal dengan nama Safari Journey.\r\n', 'img-1660062397.jpg'),
(3, 'Pura Ulun Danu', 'Danau Beratan,Candikuning,Tabanan,Bali', 50000, 'Sebelum anda liburan ke Bali, anda akan melihat banyak foto pura yang sangat indah di Instagram, dan anda tidak tahu dimana lokasinya serta nama puranya. Jika anda pernah melihat foto sebuah pura yang terlihat berada di tengah danau, nama tempat wisata ini adalah Pura Ulun Danu Beratan Bedugul.Lebih lanjut, Pura Ulun Danu, lokasinya berada di tepi danau Beratan berada di kawasan wisata Bedugul. Menurut Wikipedia, lokasi danau Beratan Bedugul berada di ketinggian 1200 meter dari permukaan air laut. Maka itu, udara di sekitar area pura Ulun Danu Beratan sangat sejuk.\r\n', 'img-1660062406.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL,
  `bintang` char(5) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `deskripsi`, `fasilitas`, `bintang`, `gambar`) VALUES
(1, 'Suris Boutique Hotel', 'Suris Boutique Hotel berlokasi di Jalan Blambangan No 5, Kuta, Bali.Untuk menginap di Suris Boutique Hotel, traveler perlu merogoh kocek mulai dari Rp 195.174 per malam,dengan fasilitas yang super lengkap dijamin betah', 'Kolam Renang,Bar,Hot Water,AC', '3', 'img-1660062239.jpg'),
(2, 'Harris Hotel Seminyak', 'Hotel bintang 4 di Seminyak Bali ini memang tergolong hotel mewah. Hotel hotel berbintang 4 di Seminyak menawarkan harga yang lumayan mahal, tapi masih lebih murah jika dibandingkan hotel bintang 5 di Seminyak Bali. Jika hotel bintang 5 di Seminyak Bali rata rata menawarkan harga di atas 1 jutaan, maka untuk hotel bintang 4 nya cukup banyak yang menawarkan harga di bawah 1 jutaan. Tapi tetap, mungkin masih tergolong mahal untuk anda yang saat ini sedang liburan di Seminyak Bali dengan membawa budget yang minim.\r\n', 'Kolam Renang,Bar,Hot Water,AC', '4', 'img-1660062255.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_hotel`, `tipe_kamar`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 2, 'Suite Rooms', '                                                                        Kamar ini memiliki fasilitas teras untuk bersantai, televisi di pojok ruangan, kaca yang cukup besar dan cocok untuk penggemar mirror selfie, juga bathub, shower, dan perlengkapan toilet. Beberapa fasilitas dan layanan yang dimiliki hotel adalah kolam renang, spa, rental motor, restoran, kedai kopi, laundry, dan panggilan dokter jika dibutuhkan.                                                                ', 500000, 'img-1660062266.jpg'),
(2, 2, 'Deluxe Rooms', '                                                                        Kelas kamar hotel ini termasuk kedalam kamar hotel bintang 4 yang berisi kolam renang,restoran,layanan pijat dan spa.Harga hotel mulai dari 651.196 ribu saja untuk mengina dihotel ini.Buruan booking bestai                                                                ', 700000, 'img-1660062280.jpg'),
(3, 2, 'VIP Rooms', '                                                                        Kamar ini memiliki fasilitas teras untuk bersantai, televisi di pojok ruangan, kaca yang cukup besar dan cocok untuk penggemar mirror selfie, juga bathub, shower, dan perlengkapan toilet. Beberapa fasilitas dan layanan yang dimiliki hotel adalah kolam renang, spa, rental motor, restoran, kedai kopi, laundry, dan panggilan dokter jika dibutuhkan.                                                                ', 1000000, 'img-1660062275.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `jumlah_kursi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `tipe_mobil`, `merk_mobil`, `jumlah_kursi`, `harga`, `image`) VALUES
(1, 'SUV', 'Pajero Sport', '7 Seat', 800000, 'img-1660062357.jpg'),
(2, 'SUV', 'Fortuner', '7 Seat', 800000, 'img-1660062367.png'),
(3, 'MPV', 'Alphard', '6 Seat', 1000000, 'img-1660062376.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayaran`
--

CREATE TABLE `pelayaran` (
  `id_pelayaran` int(11) NOT NULL,
  `kelas_pelayaran` varchar(255) NOT NULL,
  `maskapai_pelayaran` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayaran`
--

INSERT INTO `pelayaran` (`id_pelayaran`, `kelas_pelayaran`, `maskapai_pelayaran`, `harga`, `gambar`) VALUES
(1, 'First Class', 'Kapal Pesiar', 64000000, 'img-1660062321.jpg'),
(2, 'Bisnis', 'Kapal Yacht', 28000000, 'img-1660062334.jpg'),
(3, 'Ekonomi Premium', 'Kapal Pinisi', 1500000, 'img-1660062342.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_pesanan` enum('kamar','penerbangan','mobil','pelayaran') NOT NULL,
  `hari_mulai` date NOT NULL,
  `hari_selesai` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `id_penerbangan` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_pelayaran` int(11) DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `jenis_pesanan`, `hari_mulai`, `hari_selesai`, `jumlah`, `id_hotel`, `id_kamar`, `id_penerbangan`, `id_mobil`, `id_pelayaran`, `total_harga`) VALUES
(1, 2, 'penerbangan', '2022-08-09', '2022-08-09', 2, NULL, NULL, 1, NULL, NULL, 6000000),
(2, 2, 'penerbangan', '2022-08-09', '2022-08-09', 1, NULL, NULL, 3, NULL, NULL, 1700000),
(3, 2, 'pelayaran', '2022-08-11', '2022-08-18', 1, NULL, NULL, NULL, NULL, 1, 64000000),
(4, 2, 'penerbangan', '2022-08-27', '2022-08-13', 2, NULL, NULL, 1, NULL, NULL, 6000000),
(5, 2, 'pelayaran', '2022-08-09', '2022-08-20', 2, NULL, NULL, NULL, NULL, 1, 128000000),
(6, 2, 'kamar', '2022-08-10', '2022-08-17', 2, NULL, 2, NULL, NULL, NULL, 1400000),
(7, 2, 'mobil', '2022-08-10', '2022-08-10', 2, NULL, NULL, NULL, 1, NULL, 1600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id_penerbangan` int(11) NOT NULL,
  `kelas_penerbangan` varchar(255) NOT NULL,
  `maskapai_penerbangan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbangan`
--

INSERT INTO `penerbangan` (`id_penerbangan`, `kelas_penerbangan`, `maskapai_penerbangan`, `harga`, `gambar`) VALUES
(1, 'First Class', 'Garuda Indonesia', 3000000, 'img-1660062295.jpg'),
(2, 'Ekonomi Premium', 'Lion Air', 2000000, 'img-1660062303.jpg'),
(3, 'Ekonomi', 'Citilink', 1700000, 'img-1660062308.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `name` varchar(64) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `level`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'admin', 'Administrator', 'admin', 'riorenata.id@gmail.com', '089635317755', '$2y$10$4VnXrqvjAVLvgqkBodfRxuADMkkbTdgg5SI0RujUmHK.4/0vXntWq'),
(2, 'user', 'tata', 'tata', 'tata@gmail.com', '08', '$2y$10$pkR4tczcU6axOX.zE0njf.XlViOIcJuRhP7uw43pk2bjSYacFDtdG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `hotel` (`id_hotel`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `pelayaran`
--
ALTER TABLE `pelayaran`
  ADD PRIMARY KEY (`id_pelayaran`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `username` (`id_user`),
  ADD KEY `id_hotel` (`id_hotel`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_penerbangan` (`id_penerbangan`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_pelayaran` (`id_pelayaran`);

--
-- Indeks untuk tabel `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id_penerbangan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelayaran`
--
ALTER TABLE `pelayaran`
  MODIFY `id_pelayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id_penerbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
