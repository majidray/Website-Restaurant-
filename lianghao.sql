-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2019 pada 09.20
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lianghao`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Jessica Wong', 'wongjessica124@gmail.com', 'Review', 'Fighting ^^ You can do it!!!', 'activated'),
(2, 'Putri cakep', 'cakep@gmail.com', 'Mari Makan Disini', 'Harga murah enak yang punya cantik cantik \r\nworth it!!!!!!!!!!!', 'activated'),
(3, 'Anggi3S', 'anggitri@gmail.com', 'whasapp', 'datanglah biar ramee!', 'activated'),
(4, 'Soniaa', 'son@gmail.com', 'anyeongg', 'kamsahamida sudah datangg', 'activated'),
(5, 'Conan Edogawa', 'vdsvs@gmail.com', 'Haha', 'hahaha', 'activated'),
(6, 'Putri', 'vdsvs@gmail.com', 'About Website', 'This website is so jjang!!', 'hold'),
(7, 'jessica wong', 'wongjessica@gmail.com', 'HAIIII', 'HALOO Selamat pagi Apa kabarrrrr??? :))))))', 'activated'),
(8, 'Ruhami Sukma Putri', 'puti@gmail.com', 'Suka', '12345123456 aaaa', 'hold');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(3, 'jessica wong', 'medan', '2019-06-09 15:36:33', '2019-06-10 15:36:33'),
(5, 'puhan', 'medan', '2019-06-20 18:45:15', '2019-06-21 18:45:15'),
(6, 'jessica wong', 'medan', '2019-06-21 09:24:57', '2019-06-22 09:24:57'),
(7, 'sonia', 'medan', '2019-06-21 09:55:53', '2019-06-22 09:55:53'),
(8, 'Putri Handayani', 'medan', '2019-06-21 10:38:39', '2019-06-22 10:38:39'),
(9, 'Ayu Maulina', 'medan', '2019-06-21 19:35:25', '2019-06-22 19:35:25'),
(10, 'alyaaa', 'm', '2019-12-15 13:45:29', '2019-12-16 13:45:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` int(1) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama`, `tipe`, `keterangan`, `harga`, `gambar`, `stok`) VALUES
(1, 'Fu Yung Hai', 1, 'Dibuat dari telur yang didadar dengan campuran berupa sayuran, daging, atau makanan laut.', '35000', 'fu_yung_hai.jpg', 1),
(2, 'Bebek Peking', 1, 'Bebek diolah dengan cara dibakar dulu, diberikan bumbu asam manis, lalu dipanggang lagi supaya bumbunya  meresap sampai ke dalam.', '50000', 'bebek_peking.jpg', 1),
(3, 'Kwetiau', 1, 'Paduan mie dengan irisan daging, bakso ikan, dan udang memang menggiurkan. Apalagi jika tambahan sayur dan telurnya pas banget.', '35000', 'kwetiau.jpg', 1),
(4, 'Tamie Capcay', 1, 'Kentalnya capcay panas dengan tambahan mi tamie yang menjadikan makanan ini jadi gurih dan kriuk-kriuk.', '45000', 'tamie_capcay.jpg', 1),
(5, 'Lanzhou Noodle', 1, 'Bakmi lembut yang disiram dengan kuah panas yang bercampur rempah-rempat dan irisan tipis daging sapi yang sangat banyak.', '45000', 'lanzhou_noodle.jpg', 1),
(6, 'Mopu Tofu', 1, 'Tahu lembut yang dimasak dengan lada hitam pekat dan pedas.', '15000', 'mapo_tofu.jpg', 1),
(7, 'Hainan Chicken Rice', 1, 'Potongan ayam rebus dipandankan dengan nasi aromatik yang membuat Anda semakin semangat ditiap gigitannya.', '45000', 'hainan_rice.jpg', 1),
(8, 'Shao Mai', 2, 'Dumpling kukus yang berisi daging atau udang dengan berbagai toping seperti unagi, crabstick, dll.', '25000', 'shao_mai.jpg', 1),
(9, 'Hakau', 2, 'Bentuknya bulat, di luarnya ada lapisan kulit pangsit yang tipis, dan bagian dalamnya berisi udang cincang.', '25000', 'hakau.jpg', 1),
(10, 'Spring Rolls', 2, 'Ini adalah gulungan kulit pangsit goreng yang diisi dengan beragam potongan sayuran, seperti wortel, kol, jamur, dan terkadang juga ada daging. ', '15000', 'spring_roll.jpg', 1),
(11, 'Xiao Long Bao', 2, 'Berisi isian daging, seafood, dan kuah kaldu yang dibungkus dengan kulit tipis', '30000', 'xiao_long_bao.jpg', 1),
(12, 'Kuotie', 2, 'Dumpling yang dimasak dengan cara digoreng  dengan filling daging dan sayuran.', '25000', 'kuotie.jpg', 1),
(13, 'Bakpao', 2, 'Dimsum ini dimasak dengan cara dikukus. Isinya bisa daging cincang, coklat dan yang lagi hits banget adalah Bakpao berisi Salted Egg Yolk.', '25000', 'bakpao.jpg', 1),
(14, 'Almond Float', 3, 'An almond float is a simple dessert made with almond-flavored gelatin and topped with fruit.', '20000', 'almond_float.jpg', 1),
(15, 'Steamed Pears With Honey', 3, 'In this simple dish, pears are filled with honey and dates and gently steamed.', '25000', 'steamed_pears_with_honey.jpg', 1),
(16, 'Mooncake', 3, 'Mooncake is a round pastry filled with a red bean or lotus seed paste and the dried yolk from a salted duck egg.', '15000', 'mooncake.jpg', 1),
(17, 'Deep-fried Mantou', 3, 'A mantou is a plain, unfilled bun. Sound boring? Well, when you deep-fry the dough and dip it in condensed milk, you have a Chinese doughnut-like delicacy', '25000', 'mantou.jpg', 1),
(18, 'Candied Hawthorn', 3, 'Sour apple-like fruit of the hawthorn bush, that, when covered in caramelized sugar, turns into an addicting snack', '20000', 'candied_hawthorn.jpg', 1),
(19, 'Tangyuan', 3, 'A chewy and sweet dessert made of glutinous rice filled with a creamy ground sesame paste. ', '15000', 'tangyuan.jpg', 1),
(20, 'Mint Tea', 4, 'High quality Mint Tea products in best price from certified Chinese Chinese Tea manufacturers.', '20000', 'mint_tea.jpg', 1),
(21, 'Green Tea', 4, 'Green tea is all about keeping it fresh. ', '20000', 'green_tea.jpg', 1),
(22, 'Jiuniang', 4, 'Jiuniang is a fermented sweet rice wine which has a soup-like consistency. It is essentially just unfiltered rice wine', '15000', 'jiuniang.jpg', 1),
(23, 'Suanmeitang', 4, 'Sour prune drink is a traditional Chinese beverage made from smoked plums, rock sugar.', '15000', 'suanmeitang.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 3, 5, 'Lanzhou Noodle', 1, 45000, ''),
(2, 5, 4, 'Tamie Capcay', 1, 45000, ''),
(3, 6, 6, 'Mopu Tofu', 2, 15000, ''),
(11, 7, 1, 'Fu Yung Hai', 1, 35000, ''),
(12, 7, 3, 'Kwetiau', 1, 35000, ''),
(13, 8, 1, 'Fu Yung Hai', 1, 35000, ''),
(14, 9, 4, 'Tamie Capcay', 1, 45000, ''),
(15, 9, 6, 'Mopu Tofu', 2, 15000, ''),
(16, 10, 5, 'Lanzhou Noodle', 1, 45000, ''),
(17, 10, 6, 'Mopu Tofu', 1, 15000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guest` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `time`, `guest`, `name`, `email`, `no_hp`, `date_created`) VALUES
(1, '2019-06-14', '12:00:00', 4, 'Ayu Maulina', 'ayumaulina@gmail.com', '+6282277839609', 1559890425),
(2, '2121-12-11', '09:26:00', 6, 'Ayu Maulina', 'ayumaulina@gmail.com', '+6282277839609', 1561084030),
(3, '2019-06-26', '21:00:00', 4, 'putri handayani', 'puhan@gmail.com', '0822', 1561088350),
(4, '2019-06-27', '18:00:00', 6, 'Ayu Maulina', 'ayumaulina@gmail.com', '+6282277839609', 1561120448),
(5, '2019-12-15', '13:02:00', 1, 'alya feb', 'alya1212@gmail.com', '081262904772', 1576392211);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `no_hp`, `alamat`, `email`, `password`, `role_id`) VALUES
(1, 'Jessica Wong', 'jessi', '+6282274642656', 'Kompleks Bena Garden No. C9, Gang Rahmat, Marindal', 'jessi@gmail.com', '$2y$10$YQ9xKgFHuSEefA7h5c0It.8Ik2y5iGskFrDR17ujiQNaip.Of4Ca2', 1),
(2, 'Ayu Maulina', 'ayumau', '+6282277839609', 'Jalan Tak Ingat Nomor Tak Ingat, Kampung Padang, Tapaktuan', 'ayumaulina@gmail.com', '$2y$10$BL5C1yjq45pUdgA18I4uZerEeG8iOk6Zcm3S1dz1JD7JdD.n.aWIK', 2),
(3, 'conan', 'conan', '082370252763', 'Jl ngalengko', 'conan@gmail.com', '$2y$10$SII2VtIc7gRQ/byEnzVRM.FtrkMb50HRDI1Aj3VacD8Ad5VACpwpW', 3),
(4, 'Patrisia Tambunan', 'Patrisia', '12344556', 'medan', 'soobin@gmail.com', '$2y$10$MDbei/FhlfiCSvxMUrblG.bzGwFn7qVnuNgEVgYRcIS2kqwtbHFma', 2),
(5, 'putri handayani', 'puhan', '0822', 'medan', 'puhan@gmail.com', '$2y$10$B20n/ttTwRllOVT0hqWZeeaVkMc3ED6pdBsJseGK7DISSe8T5g.mC', 2),
(6, 'alya feb', 'alya', '081262904772', 'medan', 'alya1212@gmail.com', '$2y$10$YG4hrn1vsI3ytpl7cA.0deD/2ZGnSGQk6UtG7r6wo1ovLaanxeeX.', 1),
(7, 'Putri Handayani', 'Putri', '081262904772', 'jl dr mansyur', 'putri123@gmail.com', '$2y$10$HyAkxJgDo18Ljb8KkAnE6uZzcZWzjhLQxxnLSgBnQ3yQBcJ.AYQMu', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
