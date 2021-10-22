-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2021 pada 15.43
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntxid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bookmark`
--

INSERT INTO `bookmark` (`id`, `user_id`, `product_id`) VALUES
(3, 17, 15),
(4, 17, 10),
(6, 4, 14),
(7, 4, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `cat_id` int(2) NOT NULL,
  `cat_code` int(2) NOT NULL,
  `subcat_code` int(2) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `subcat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`cat_id`, `cat_code`, `subcat_code`, `cat_name`, `subcat_name`) VALUES
(1, 11, 11, 'Properti', 'Rumah/Apartemen'),
(2, 11, 12, 'Properti', 'Ruko/Toko'),
(3, 11, 13, 'Properti', 'Tanah/Kebun'),
(4, 12, 11, 'Mobil', 'Mobil'),
(5, 12, 12, 'Mobil', 'Sparepart'),
(6, 12, 13, 'Mobil', 'Aksesoris'),
(7, 13, 11, 'Motor', 'Motor'),
(8, 13, 12, 'Motor', 'Sparepart'),
(9, 13, 13, 'Motor', 'Aksesoris'),
(10, 14, 11, 'Elektronik', 'AC'),
(11, 14, 12, 'Elektronik', 'Lemari Es'),
(12, 14, 13, 'Elektronik', 'Televisi'),
(13, 14, 14, 'Elektronik', 'Strika'),
(14, 14, 15, 'Elektronik', 'Dispenser'),
(15, 14, 16, 'Elektronik', 'Sparepart'),
(16, 14, 17, 'Elektronik', 'Aksesoris'),
(17, 15, 11, 'Komputer', 'PC (Personal Computer)'),
(18, 15, 12, 'Komputer', 'Laptop/Notebook'),
(19, 15, 13, 'Komputer', 'Sparepart'),
(20, 15, 14, 'Komputer', 'Aksesoris'),
(21, 16, 11, 'Gadget', 'Smartphone'),
(22, 16, 12, 'Gadget', 'Tablet'),
(23, 16, 13, 'Gadget', 'Candybarphone'),
(24, 16, 14, 'Gadget', 'Sparepart'),
(25, 16, 15, 'Gadget', 'Aksesoris'),
(26, 17, 11, 'Fashion', 'Pria'),
(27, 17, 12, 'Fashion', 'Wanita'),
(28, 17, 13, 'Fashion', 'Anak-anak'),
(29, 17, 14, 'Fashion', 'Aksesoris Pria'),
(30, 17, 15, 'Fashion', 'Aksesoris Wanita'),
(31, 17, 16, 'Fashion', 'Aksesoris Anak'),
(32, 18, 11, 'Ibu&bayi', 'Perlengkapan Ibu'),
(33, 18, 12, 'Ibu&bayi', 'Perlengkapan Bayi'),
(34, 19, 11, 'Perkakas Rumah', 'Ruang Tamu'),
(35, 19, 12, 'Perkakas Rumah', 'Ruang Tidur'),
(36, 19, 13, 'Perkakas Rumah', 'Dapur'),
(37, 19, 14, 'Perkakas Rumah', 'Kamar Mandi'),
(38, 19, 15, 'Perkakas Rumah', 'Luar Rumah'),
(39, 20, 11, 'Makanan&minuman', 'Makanan'),
(40, 20, 12, 'Makanan&minuman', 'Minuman'),
(41, 20, 13, 'Makanan&minuman', 'Buah'),
(42, 20, 14, 'Makanan&minuman', 'Sayur'),
(43, 21, 11, 'Jasa&sewa', 'Hotel/penginapan'),
(44, 21, 12, 'Jasa&sewa', 'Ruko/toko'),
(45, 21, 13, 'Jasa&sewa', 'Rumah/indekos'),
(46, 21, 14, 'Jasa&sewa', 'Mobil'),
(47, 21, 15, 'Jasa&sewa', 'Motor'),
(48, 21, 16, 'Jasa&sewa', 'Service Elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `about1` varchar(1000) NOT NULL,
  `about2` varchar(1000) NOT NULL,
  `about3` varchar(1000) NOT NULL,
  `created` varchar(128) NOT NULL,
  `aboutme` varchar(2000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id`, `name`, `about1`, `about2`, `about3`, `created`, `aboutme`, `email`) VALUES
(1, 'ntx.id', 'Ini adalah aplikasi jual-beli di Natuna.', 'Aplikasi ini masih banyak kekurangan di sana sini. Kritik dan saran yang membangun sangat saya butuhkan untuk pengembangan aplikasi ini. Ke depannya, saya akan membuat aplikasi androidnya untuk mempermudah mengakses melalui smartphone android.', 'Terima kasih Pak Ricky yang telah mendorong saya untuk terus belajar sehingga adanya aplikasi ini.', 'drg. Teuku Agus Surya', 'I am a dentist, husband, father, and programmer ....', 'agsur137@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `prov_code` varchar(2) NOT NULL,
  `kot_code` varchar(2) NOT NULL,
  `kec_code` varchar(2) NOT NULL,
  `prov_name` varchar(100) NOT NULL,
  `kot_name` varchar(100) NOT NULL,
  `kec_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `location`
--

INSERT INTO `location` (`id`, `prov_code`, `kot_code`, `kec_code`, `prov_name`, `kot_name`, `kec_name`) VALUES
(1, '21', '03', '04', 'Kepulauan Riau', 'Natuna', 'Midai'),
(2, '21', '03', '05', 'Kepulauan Riau', 'Natuna', 'Bunguran Barat'),
(3, '21', '03', '06', 'Kepulauan Riau', 'Natuna', 'Serasan'),
(4, '21', '03', '07', 'Kepulauan Riau', 'Natuna', 'Bunguran Timur'),
(5, '21', '03', '08', 'Kepulauan Riau', 'Natuna', 'Bunguran Utara'),
(6, '21', '03', '09', 'Kepulauan Riau', 'Natuna', 'Subi'),
(7, '21', '03', '10', 'Kepulauan Riau', 'Natuna', 'Pulau Laut'),
(8, '21', '03', '11', 'Kepulauan Riau', 'Natuna', 'Pulau Tiga'),
(9, '21', '03', '15', 'Kepulauan Riau', 'Natuna', 'Bunguran Timur Laut'),
(10, '21', '03', '16', 'Kepulauan Riau', 'Natuna', 'Bunguran Tengah'),
(11, '21', '03', '18', 'Kepulauan Riau', 'Natuna', 'Bunguran Selatan'),
(12, '21', '03', '19', 'Kepulauan Riau', 'Natuna', 'Serasan Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_code` int(2) NOT NULL,
  `subcat_code` int(2) NOT NULL,
  `name` varchar(128) NOT NULL,
  `about` varchar(512) NOT NULL,
  `price` int(11) NOT NULL,
  `image1` varchar(128) NOT NULL,
  `image2` varchar(128) NOT NULL,
  `image3` varchar(128) NOT NULL,
  `image4` varchar(128) NOT NULL,
  `image5` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_edited` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `user_id`, `cat_code`, `subcat_code`, `name`, `about`, `price`, `image1`, `image2`, `image3`, `image4`, `image5`, `date_created`, `last_edited`, `is_active`) VALUES
(9, 17, 11, 12, 'Roti Bakar Bandung', 'Roti sedap mantap.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 23000, 'resep_roti_bakar_1.jpg', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', 'Resep-Sate-Ayam-Madura-1.jpg', 'Resep-Bubur-Ayam1.jpg', 'images_mancanegara_Resep_Kebab_00.jpg', 0, 0, 1),
(10, 4, 15, 12, 'Thai Tea Ranai', 'Teh mantap.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9000, 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', '', '', '', 0, 1587663921, 1),
(11, 17, 16, 13, 'Lontong', 'Lontong Sayur mantap.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 17000, '104127_1423633018_0.jpg', '', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', '', 0, 0, 1),
(12, 4, 12, 13, 'Bubur Ayam', 'Bubur Ayam yammy.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 12000, 'Resep-Bubur-Ayam.jpg', '', '', '', '', 0, 0, 1),
(14, 17, 18, 11, 'Kopi Hitam', 'Kopi Anti Ngantuk.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 28000, '50de339f-7e20-4738-b9a4-a2ba49991add1.jpg', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', '', '', 0, 1587716671, 1),
(15, 4, 16, 13, 'Sate Ayam Kampoeng', 'Sate ayam kampung mantap.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20000, 'Resep-Sate-Ayam-Madura-1.jpg', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', '', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', 0, 1587664139, 1),
(16, 17, 13, 13, 'Mie Bakso', 'Bakso gaoyang lidah goyang kantong', 35000, 'resep-mie-bakso-780x440.jpg', '', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', '', 0, 0, 1),
(17, 4, 19, 11, 'Bubur Kacang Kacang Hijau Bubur Kacang Kacang Hijau Bubur Kacang Kacang Hijau Bubur Kacang Kacang Hijau', 'Bubur kacang hijau dengan mata ikan dan santan mantap', 17000, 'bubur-kacang-ijo-jagung-kesukaan-foto-resep-utama.jpg', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', 'f32624bc-9f6d-4d28-9633-bde315f6de5d.jpg', '', 0, 0, 1),
(18, 17, 20, 11, 'Bubur Ayam', 'Bubur Ayam kota', 13000, 'Resep-Bubur-Ayam1.jpg', 'resep-mie-bakso-780x440.jpg', '', '', '', 0, 0, 1),
(19, 17, 21, 11, 'Martabak Mesir', 'Martabak Mesir Isi Daging', 28000, '27539.jpg', '', '', 'resep-mie-bakso-780x440.jpg', '', 0, 0, 1),
(20, 4, 17, 11, 'Kebab versi 2', 'Kebab dengan berbagai rasa', 50000, 'images_mancanegara_Resep_Kebab_00.jpg', '', 'resep-mie-bakso-780x440.jpg', '', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phonenumber` bigint(11) NOT NULL,
  `whatsappnumber` bigint(11) NOT NULL,
  `prov_code` varchar(2) NOT NULL,
  `kot_code` varchar(2) NOT NULL,
  `kec_code` varchar(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_logged` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phonenumber`, `whatsappnumber`, `prov_code`, `kot_code`, `kec_code`, `address`, `image`, `password`, `role_id`, `is_active`, `date_created`, `last_logged`) VALUES
(1, 'Ricky', 'Ricky@gmail.com', 0, 0, '21', '03', '09', '', 'default.jpg', '$2y$10$EuGbwwYrQvpRcoAcBNbjGupvTgvHQjTKKgHHuSn2EZQlrnD1DQL9.', 1, 1, 1582829982, 1634737312),
(4, 'Yusfadia', 'yusfa@gmail.com', 68546544535, 7865167, '21', '03', '11', 'jl perjuangan gang Merdeka no. 17 Ranai', '23_1.jpg', '$2y$10$Muw1aKTGEYV7q5OtVWPbc.1YoHc.ty10Y4R1YDeCBts9TSBDnZyEK', 2, 1, 1582915364, 1587658128),
(17, 'Teuku Arya', 'arya@gmail.com', 899495616111, 8526465919111, '21', '03', '08', 'jl. M. nuh kelarik puskesmas', 'Ntx_brand_usage_1_created_by_logaster(1).png', '$2y$10$jnPDEkyTBK/dotB/UYXFaeEtOsFucZpzpTLGWASeUIdv4he0yHv02', 2, 1, 1586680248, 1587715716);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(19, 2, 3),
(20, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `menu_uri` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `menu_uri`) VALUES
(1, 'Dashboard', 'admin'),
(2, 'Manage', 'manage'),
(3, 'Pengaturan', 'user'),
(4, 'My Product', 'myproduct');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Profil Perusahaan', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'Profil Saya', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Ubah Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(11, 3, 'Ubah Password', 'user/password', 'fas fa-fw fa-key', 1),
(19, 2, 'Daftar Akun', 'manage/account', '', 1),
(20, 2, 'Daftar Produk', 'manage/product', '', 1),
(21, 2, 'Produk Blacklist', 'manage/blacklist', '', 1),
(22, 4, 'Produk Saya', 'myproduct', '', 1),
(23, 4, 'Bookmark', 'myproduct/bookmark', '', 1),
(24, 1, 'Ubah Password', 'admin/password', 'fas fa-fw fa-key', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
