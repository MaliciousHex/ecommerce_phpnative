-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2015 pada 07.26
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `station_shop2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `user_level` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_tbl`
--

INSERT INTO `admin_tbl` (`username`, `password`, `nama`, `alamat`, `user_level`, `datetime`) VALUES
('admin', 'c93ccd78b2076528346216b3b2f701e6', 'Aries Dimas Yudhistira', 'jl. warakas 4 GG q7 no. 32', 'Super Admin', '2014-03-30 15:27:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_comment_tbl`
--

CREATE TABLE IF NOT EXISTS `product_comment_tbl` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `product_comment_tbl`
--

INSERT INTO `product_comment_tbl` (`comment_id`, `product_id`, `email`, `comment`, `datetime`) VALUES
(7, 1, 'tundra@email.com', 'product 1 comment article test', '2014-08-22 15:24:24'),
(8, 2, 'email@slatten.com', 'product 2 comment article test', '2014-08-22 15:29:55'),
(9, 6, 'email@patrik.sc', 'product 6 comment article latian', '2014-08-22 15:33:42'),
(11, 11, 'arod@email.com', 'Latian add comment untuk product no. 11', '2014-08-28 16:53:32'),
(12, 11, 'email@arod.com', 'Add comment product 11 latian', '2014-08-28 16:55:05'),
(13, 6, 'prod@email', 'test prod comment stl function', '2014-09-04 15:29:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_tbl`
--

CREATE TABLE IF NOT EXISTS `product_tbl` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) NOT NULL,
  `product_description` text NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `brand` varchar(250) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_name`, `product_description`, `gambar`, `price`, `stock`, `brand`) VALUES
(1, 'Integer eleifend sed', 'Tundra Laminating Flooring. Our laminate flooring is an affordable way to get the floor you want. And it’s an easy way, too – the click system means you can put it in place without any glue. Durable and good quality, our different laminate floors give you a choice of styles and colours so you get the style to suit your home. And to give you that little extra piece of mind, our laminate flooring comes complete with a minimum 10 year guarantee. \r\n\r\nLooking for outdoor flooring? We also offer an easy-to-lay range of garden decking. \r\n\r\nFlooring tip: When laying laminate flooring always use NIVÅ floor lining. If you''re laying straight onto concrete, complement with SPÄRRA plastic sheeting.', '01.jpg', 100, 10, 'Nike'),
(2, 'Nam cursus facilisis', 'Slatten Laminated Flooring. Our laminate flooring is an affordable way to get the floor you want. And it’s an easy way, too – the click system means you can put it in place without any glue. Durable and good quality, our different laminate floors give you a choice of styles and colours so you get the style to suit your home. And to give you that little extra piece of mind, our laminate flooring comes complete with a minimum 10 year guarantee. \r\n\r\nLooking for outdoor flooring? We also offer an easy-to-lay range of garden decking. \r\n\r\nFlooring tip: When laying laminate flooring always use NIVÅ floor lining. If you''re laying straight onto concrete, complement with SPÄRRA plastic sheeting.', '02.jpg', 200, 20, 'Puma'),
(3, 'Mauris consectetur', 'Fredde Workstations. Frame/ Support: Steel, Epoxy/polyester powder coating\r\nTable top: Particleboard, Melamine foil, ABS plastic\r\nPanels: Particleboard, Melamine foil, ABS plastic, Foil\r\nPocket: Polypropylene plastic\r\n', '03.jpg', 120, 30, 'Addidas'),
(4, 'Proin volutpat', 'Micke Workstations. Frame/ Support: Steel, Epoxy/polyester powder coating\r\nTable top: Particleboard, Melamine foil, ABS plastic\r\nPanels: Particleboard, Melamine foil, ABS plastic, Foil\r\nPocket: Polypropylene plastic', '04.jpg', 260, 40, 'Wakai'),
(5, 'Aenean tempus', 'Markus Swivel Chair. Back frame/ Armrest frame/ Back bar: Steel, Epoxy/polyester powder coating\r\nArmrest pad: Polypropylene plastic\r\nFoam: Highly resilient polyurethane foam (cold foam) 35 kg/cu.m.\r\nSeat frame: Moulded eucalyptus plywood\r\nStar base: Aluminium, Epoxy/polyester powder coating\r\nPlastic part: Polypropylene plastic, Polyethylene plastic\r\nArtificial leather parts: 25% cotton, 75% polyester, 100% polyurethane\r\nLeather: Through dyed grain leather from cattle, with a treated, embossed and pigmented surface', '05.jpg', 80, 50, 'Airwalk'),
(6, 'Nulla, Validate', 'Patrik Swivel Chair. Frame: Steel\r\nFoam: Highly resilient polyurethane foam (cold foam) 69 kg/cu.m.\r\nStar base: Aluminium, Epoxy/polyester powder coating\r\nTotal composition: 100% wool\r\nPlastic part: Polypropylene plastic, Polyethylene plastic', '06.jpg', 193, 60, 'Vans'),
(7, 'Pellentesque egestas', 'Alex Drawer Unit. Drawer stops prevent the drawer from being pulled out too far. Particleboard, Acrylic paint, Foil, ABS plastic. ', '07.jpg', 30, 70, 'Newbalance'),
(8, 'Suspendisse fermentu', 'Erik Drawer Unit. Easy to move where it is needed thanks to castors. Drawer stops prevent the drawer from being pulled out too far. \r\nFrame: Pigmented epoxy/polyester powder coating. \r\nBasematerial: Steel, Pigmented epoxy/polyester powder coating.', '08.jpg', 220, 80, 'Vans'),
(9, 'Donec laoreet velit', 'Strapats Pedal Bin. The bin is easy to move since it has a handle on the back. Easy to empty and clean as the inner bucket can be removed. Body/ Lid: Steel, Epoxy/polyester powder coating\r\nLid holder/ Bucket/ Bottom part: Polypropylene plastic\r\nHandle/ Metal handle: Stainless steel\r\nBar: Steel, Galvanised\r\nMechanism: Steel, EVA plastic, Epoxy/polyester powder coating', '09.jpg', 65, 90, 'Nike');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
