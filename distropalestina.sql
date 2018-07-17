-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2014 at 03:49 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `distropalestina`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address_admin` text CHARACTER SET utf8 NOT NULL,
  `email_admin` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone_admin` varchar(12) CHARACTER SET utf8 NOT NULL,
  `username_admin` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password_admin` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `address_admin`, `email_admin`, `phone_admin`, `username_admin`, `password_admin`) VALUES
(7, 'ganang', 'Yogyakarta', 'ganang.julianto@gmail.com', '089678720078', 'Ganang', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id_bukutamu` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `website` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `status` enum('wait','approve') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_bukutamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id_bukutamu`, `name`, `email`, `website`, `date`, `message`, `status`) VALUES
(1, 'ganang', 'ganang@yahoo.com', 'distro.com', '0000-00-00 00:00:00', 'Baju Batik distro palestina.', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_category` varchar(30) CHARACTER SET utf8 NOT NULL,
  `category` varchar(30) NOT NULL,
  `status_category` enum('public','draft') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `category`, `status_category`) VALUES
(1, 'Kaos Oblong', 'kaos-oblong', 'public'),
(2, 'Baju Pria', 'baju-pria', 'public'),
(3, 'Baju Wanita', 'baju-wanita', 'public'),
(4, 'Baju Koko', 'baju-koko', 'public'),
(5, 'Tas Anak', 'tas-anak', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id_link` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_link` varchar(30) CHARACTER SET utf8 NOT NULL,
  `url_link` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status_link` enum('draft','public') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_link`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id_link`, `name_link`, `url_link`, `status_link`) VALUES
(1, 'JadiBaru.Com', 'http://jadibaru.com', 'public'),
(2, 'Seputarti.Com', 'http://seputarti.com', 'public'),
(3, 'Stmik Elrahma', 'http://stmikelrahma.ac.id', 'public'),
(4, 'Detik.Com', 'http://detik.com', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id_option` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `values_name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_option`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id_option`, `option_name`, `values_name`) VALUES
(1, 'blogname', 'distropalestina.com'),
(2, 'description', 'selamat datang di situs distro pelestina terbaru.'),
(4, 'siteurl', 'http://distropalestina.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesan` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_pemesan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `identitas_pemesan` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address_pemesan` text CHARACTER SET utf8 NOT NULL,
  `city_pemesan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `poscode_pemesan` int(10) NOT NULL,
  `email_pemesan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone_pemesan` varchar(12) CHARACTER SET utf8 NOT NULL,
  `item_pemesan` text CHARACTER SET utf8 NOT NULL,
  `date_pemesan` datetime NOT NULL,
  `status_pemesan` enum('pending','approve') NOT NULL,
  PRIMARY KEY (`id_pemesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesan`, `name_pemesan`, `identitas_pemesan`, `address_pemesan`, `city_pemesan`, `poscode_pemesan`, `email_pemesan`, `phone_pemesan`, `item_pemesan`, `date_pemesan`, `status_pemesan`) VALUES
(1, 'angga', '12345678990', 'kepek', 'bantul', 55186, 'ganang@gmail.com', '08961901212', 'bababa', '2006-12-20 01:22:39', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_post` varchar(50) CHARACTER SET utf8 NOT NULL,
  `type_post` enum('post','page') CHARACTER SET utf8 NOT NULL,
  `content_post` text CHARACTER SET utf8 NOT NULL,
  `date_post` datetime NOT NULL,
  `author_post` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status_post` enum('public','draft') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `title_post`, `type_post`, `content_post`, `date_post`, `author_post`, `status_post`) VALUES
(1, 'Pameran Batik', 'post', '<p>Pameran Batik JE. Distro palestina mengikuti pameran batik dengan penuh semangat dan menawarkan beberapa produk dengan harga terjangkau. Kualitas produk baik dan konsumen diharapkan puas dengan layanan kami.</p>', '2014-10-01 09:27:16', 'admin', 'public'),
(2, 'Profil', 'page', 'Ini merupakan Profil kami', '2006-12-20 01:26:02', 'gng', 'public'),
(8, 'Sejarah', 'page', '<p>Sejarah berdirinya perusahaan ini</p>', '2006-12-20 05:22:21', 'gng', 'public'),
(9, 'Galery', 'page', '<p>Galery Foto usaha ini</p>', '2006-12-20 05:24:39', 'gng', 'public'),
(10, 'Contact US', 'page', '<p>Berisi Kontak Person yang ada/p>', '2006-12-20 05:24:57', 'gng', 'public'),
(11, 'Pertunjukan galery', 'post', '<p>Pertunjukan Galery motiv batik distro palestina dengan berbagai macam warna dan ukuran. Distro Palestina &ndash; Bandung Tanggal: 1 &ndash; 7 Desember 2014 Tempat:&nbsp;BTC FASHION MALL, Bandung Waktu: 10.00 &ndash; 21.00 WIB Pameran ini dielenggarakan sebagai wujud kecintaan&nbsp; kepada budaya sekaligus mencari bakat kreatif dari para pencinta batik, bordir dan tenun nusantara. Diharapkan dengan adanya Pameran Batik di Bandung&nbsp;ini maka batik, bordir dan tenun Indonesia dapat terus lestari sepanjang masa, sehingga karya cipta nusantara ini</p>', '2014-11-29 20:16:45', 'ganang', 'public'),
(12, 'Pemasaran Distrto Palestina', 'post', '<p style="text-align: justify;"><em><strong>Peminat produk distro palestina&nbsp; beragam.</strong></em> Tidak hanya &nbsp;di <span style="color: #ff0000;">Yogyakarta</span> saja, tetapi sudah sampai &nbsp;Jakarta, Bandung, Bali, dan beberapa kota besar lainnya. Seiring dengan perkembangan pasar, saat ini produk distro palestinasudah menembus ke pasar luar negeri.&nbsp; Untuk pasar ekspor misalnya, kap lampu peminatnya terbanyak dari Yunani, kaligrafi dari Turki, sedangkan penyekat buku banyak diminati pasar Jepang dan Amerika.&nbsp;</p>', '2006-12-20 18:13:28', 'gng', 'public'),
(13, 'Distro Palestina Clothing Line', 'post', '<p style="text-align: justify;"><span style="color: #800000;"><strong>Distrto Palestina</strong></span> adalah clothing line yang berdiri sejak tahun 2006. mempunyai semua item yang dibutuhkan seperti kaos , kemeja , tas , jaket , topi , sandal , boxer , celana , dress , dll dengan 114 titik distribusi yang tersebar di 33 provinsi Indonesia dan terus bertambah seiring permintaan pasar. Berawal dari pemikiran edialisme founder yang ingin menghasilkan produk-produk yang kreatif, fleksibel serta bisa mencerminkan gaya hidup anak muda zaman sekarang Untuk menjaga kualitas dan layanan bagi konsumennya, perusahaan mulai melakukan pembenahan manajemen yang lebih efektif karena sudah memiliki tempat produksi, dan gudang serta kantor sendiri. pasar luas kami berkisar dari remaja kepada semua orang bahwa orang-orang berpikiran terbuka, mandiri, dan modern. Selain itu, kami menghasilkan setiap detail produk kami dengan kualitas terbaik dan dirilis setiap produk dalam jumlah dan penawaran eksklusif dengan harga terjangkau.</p>', '2014-11-29 20:12:27', 'gng', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_product` varchar(30) CHARACTER SET utf32 NOT NULL,
  `name_product` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category_product` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description_product` text CHARACTER SET utf8 NOT NULL,
  `price_product` varchar(20) CHARACTER SET utf8 NOT NULL,
  `size_product` varchar(20) CHARACTER SET utf8 NOT NULL,
  `color_product` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status_product` enum('public','draft') NOT NULL,
  `date_product` datetime NOT NULL,
  `stock_product` enum('ada','kosong') NOT NULL,
  `picture_product` text CHARACTER SET utf8 NOT NULL,
  `author_product` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `code_product`, `name_product`, `category_product`, `description_product`, `price_product`, `size_product`, `color_product`, `status_product`, `date_product`, `stock_product`, `picture_product`, `author_product`) VALUES
(1, 'bj01', 'Baju Hem Pria', 'baju-pria', '<p><strong>Baju dengan kualitas baik. Batik ini sangat cocok untuk acara formal dan non formal.</strong></p>', '200.000,', 'xl', 'Merah', 'public', '2006-12-20 00:21:19', 'ada', '033.jpg', 'admin'),
(2, 'bj02', 'Baju Hem Pria', 'baju-koko', '<p>Baju Lengan pendek dengan warna elegan sangat baik untuk acara formal.</p>', '210.000,', 'M', 'Biru', 'public', '2014-10-01 08:12:55', 'ada', '031.jpg', 'admin'),
(3, 'bj03', 'Baju Wanita', 'baju-koko', '<p>Baju wanita dengan desain baik untuk sehari-hari.</p>', '100.000,-', 'M', 'hijau', 'public', '2014-10-01 08:16:28', 'ada', '046.jpg', 'ganang'),
(4, 'bj04', 'Baju Wanita', 'baju-wanita', '<p>Baju Wanita lengan panjang cocok untuk sehari-hari.</p>', '100.000,-', 'M', 'kuning', 'public', '2014-10-01 09:08:40', 'ada', '048.jpg', 'admin');
