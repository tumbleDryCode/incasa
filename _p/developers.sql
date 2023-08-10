-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 07:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developers`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Our Company', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">Pramukh Web Solution is a website design and Web development Company dedicated to provide web based solutions to all type of businesses. Located in Ahmedabad, Gujarat (India).</p>\r\n<p class=\"text_all_p_tag_css\">Pramukh Web Solution is a one stop solution for all your IT needs. It Provides full featured innovative and high quality cost effective IT web designing solutions ranging from customized web development, PHP web development, ASP.NET and all kind of programming to complete web solutions including web design, Web Development in PHP, eCommerce Solutions, Multimedia, and Print publication solutions, CSS/XHTML Web Design, Content Management, SEO (Web Promotion), Domain Registration, Web Hosting to businesses throughout the India.</p>\r\n<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">Pramukh Web Solution is a website design and Web development Company dedicated to provide web based solutions to all type of businesses. Located in Ahmedabad, Gujarat (India).</p>\r\n<p class=\"text_all_p_tag_css\">Pramukh Web Solution is a one stop solution for all your IT needs. It Provides full featured innovative and high quality cost effective IT web designing solutions ranging from customized web development, PHP web development, ASP.NET and all kind of programming to complete web solutions including web design, Web Development in PHP, eCommerce Solutions, Multimedia, and Print publication solutions, CSS/XHTML Web Design, Content Management, SEO (Web Promotion), Domain Registration, Web Hosting to businesses throughout the India.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'condos-pool.png'),
(11, 'New About title', '<p>hehehaha</p>', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(2, 'disha', 'disha@gmail.com', 'disha', '1999-02-02', '9689689698'),
(6, 'final', 'final@gmail.com', 'final', '2020-04-29', '7979656578'),
(7, 'test', 'test@gmail.com', 'test', '2020-04-29', '8997979765'),
(8, 'check', 'check@gmail.com', 'check', '2020-04-29', '8979785688'),
(9, 'admin', 'admin@gmail.com', 'admin', '1999-12-06', '9878786545'),
(10, 'testadmin', 'testa@aa.xom', 'testadmin', '2023-07-27', '9138837');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(9, 'navi mumbai', 3),
(10, 'vapi', 2),
(11, 'valsad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'demo', 'demo@gmail.com', '9765989689', 'demo', 'demo'),
(4, 'test', 'test@gmail.com', '7976976979', 'test', 'test'),
(5, 'final', 'final@gmail.com', '7697967967', 'final', 'final'),
(6, 'disha', 'disha@gmail.com', '7898797696', 'demo', 'demo'),
(7, 'qqqq', 'admin@gmail.com', '123123', 'hey hey hey', 'what is up'),
(8, 'hgghg', 'profitcode@gmail.com', '913883735', 'hey hey heya', 'yrtyt is mesage');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(2, 15, 'Magicbricks made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment in Mira Road. Thanks to the team for providing relevant tools like EMI calculator and smart search.\r\n', 1, '2020-04-03'),
(3, 18, 'I am young professional, Magicbricks search helped me in shortlisting property in Navi Mumbai. I learned what kind of property will cost me how much and what are the types of amenities I will be getting?', 1, '2020-04-03'),
(4, 21, 'I was looking for a flat in Andheri and Magicbricks website helped me get one smoothly. I could choose not just the property but also check what others had to say about the area. The site is simple and user friendly.\r\n', 1, '2020-04-03'),
(5, 23, 'The constant touch through other true calls really surprised me.They sent their officer to get the photographs of my shop & promptly posted all the pics which helped me in getting the tenant fast. Hats off to Magicbricks.\r\n', 1, '2020-04-03'),
(6, 24, 'I moved to Mumbai from Delhi early this year and I looked online for a suitable apartment for rent in areas near my workplace in Andheri. Thanks Magicbricks for giving me so many options with Travel Time search.\r\n', 0, '2020-04-03'),
(9, 14, 'My Test Desc', 0, '2023-07-27'),
(10, 29, 'sending feedback from her', 0, '2023-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `hall` int(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `totalfloor` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `floor`, `size`, `price`, `location`, `city`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `totalfloor`, `date`) VALUES
(11, 'Moradia COimra', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'office', '2 BHK', 'sale', 1, 2, 3, 4, 5, '3rd Floor', 4321, 897898, 'sabji market main road vapi', 'lisboa', 'lx', '<div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>                              <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>               </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>                              </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>               </ul>               </div>', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', 15, 'sold out', '', '', '', '', '2020-04-03 00:28:14'),
(13, 'Moradia Alenquer', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'bunglow', '2 BHK', 'sale', 3, 2, 2, 1, 1, '4th Floor', 321, 987898, 'main road chala near dominos pizza ', 'lisboa', 'lx', '<div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>                              <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>               </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>                              </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>               </ul>               </div>', '111.jpg', '222.jpg', '333.jpg', '444.jpg', '555.jpg', 16, 'available', '', '', '', '', '2020-04-03 00:28:14'),
(14, 'Moradia Santarem', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'flat', '3 BHK', 'rent', 3, 2, 2, 1, 1, '2nd Floor', 3241, 9878987, 'vapi main road market vapi', 'lisboa', 'lx', '<div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>                              <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>               </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>                              </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>               </ul>               </div>', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', 15, 'available', '', '', '', '', '2020-04-03 00:40:48'),
(15, 'Moradia Alenquer', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'appartment', '2 BHK', 'rent', 2, 2, 1, 1, 1, '2nd Floor', 1500, 1556000, 'Main road vapi market', 'lisboa', 'lx', '<div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>                              <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>               </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>                              </ul>               </div>               <div class=\"col-md-4\">               <ul>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>               <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>               </ul>               </div>', '01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', 15, 'available', '', '', '', '', '2020-04-03 14:45:49'),
(17, 'Moradia Aveiro', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'flat', '2 BHK', 'rent', 2, 2, 1, 1, 1, '2nd Floor', 1500, 1550000, 'bhilad main market', 'lisboa', 'lx', '<p>&nbsp;</p>  <!---feature area start--->  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>  </ul>  </div>  <!---feature area end---->  <p>&nbsp;</p>', '01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', 21, 'available', '', '', '', '', '2020-04-03 17:47:40'),
(18, 'Moradia Alenquer', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'flat', '2 BHK', 'sale', 3, 3, 2, 1, 2, '1st Floor', 343, 34243423, 'vcxb', 'lisboa', 'lx', '<p>&nbsp;</p>  <!---feature area start--->  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>  </ul>  </div>  <!---feature area end---->  <p>&nbsp;</p>', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', 21, 'available', '', '', '', '', '2020-04-03 17:54:06'),
(19, 'Moradia Alenquer', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'flat', '2 BHK', 'sale', 2, 2, 1, 1, 1, '3rd Floor', 1250, 1500000, 'testing', 'lisboa', 'lx', '<p>&nbsp;</p>  <!---feature area start--->  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>  </ul>  </div>  <!---feature area end---->  <p>&nbsp;</p>', '11.jpg', '22.jpg', '33.jpg', '44.jpg', '55.jpg', 15, 'available', 'house-floor-plan.png', '', '', '', '2020-04-03 20:12:38'),
(20, 'Moradia Azamuja', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'office', '1,2 BHK', 'rent', 99, 88, 77, 66, 55, '5th Floor', 1111, 9999500, 'boiser road near dmart', 'lisboa', 'lx', '<p>&nbsp;</p>  <!---feature area start--->  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>3 Years</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>8 People</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>  </ul>  </div>  <!---feature area end---->  <p>&nbsp;</p>', '01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg', 23, 'available', 'floor.jpg', 'basement.jpg', 'ground.jpg', '12 Floor', '2020-04-03 20:30:34'),
(22, 'Moradia Azamuja', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'bunglow', '3 BHK', 'sale', 3, 2, 1, 1, 1, '2nd Floor', 1950, 4550467, 'main market near swami school', 'lisboa', 'lx', '<p>&nbsp;</p>  <!---feature area start--->  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>  </ul>  </div>  <!---feature area end---->  <p>&nbsp;</p>', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', 16, 'sold out', 'floor1.png', 'basement1.jpg', 'ground1.jpg', '2 Floor', '2020-04-04 01:38:36'),
(23, 'casa nova', 'Moradia para recupera??o/requalifica??o - Azambuja    A propriedade conta com moradia com ?rea de implanta??o de 100m2*,   inserido num lote 160m2 (Urbano) e de cerca de 18.000m2 (Rustico).   Conforme pedido de informa??o pr?via da Camara Municipal da Azambuja**, existe a confirma??o de puder efectuar renova??es/retifica??es em conformidade com a lei .   (conforme informa??o previa*)   ( documento sob-consulta se solicitado** )    Vasta ?rea de terreno totalmente delimitado e vedado que pode utilizar para lazer , mas tambem para cultivo pois possui po?o murado com ?gua 365 dias/ano.   Situa-se em localidade tranquila ( Casais de Baixo) , perto da sede de concelho (Azambuja) ;   Com boa localiza??o, a cerca de 30 minutos de Lisboa, ? uma oportunidade de viver ou ter uma \"casa de campo\" com acessibilidades a 5 minutos de esta??o de comboios e a 10 da entrada da Auto-Estrada A1    Contacte e venha visitar !', 'appartment', '1 BHK', 'sale', 1, 1, 1, 1, 1, '1st Floor', 120, 20000, 'aa@aa.com', 'lisboa', 'lx', '<p>&nbsp;</p>  <!---feature area start--->  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Appartment</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>  </ul>  </div>  <div class=\"col-md-4\">  <ul>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>  <li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>  </ul>  </div>  <!---feature area end---->  <p>&nbsp;</p>', 'splash.gif', 'splash.gif', 'splash.gif', 'splash.gif', 'splash.gif', 24, 'available', '', 'splash.gif', '', '1 Floor', '2023-07-19 11:20:40'),
(29, 'youhggg', '', 'house', '', 'sell', 1, 1, 0, 1, 1, '1', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', '', 29, 'active', '', '', '', '1', '2023-08-01 15:41:42'),
(30, 'fggdgdg gfgdfg', '', '', '', '', 1, 1, 0, 1, 1, '1', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', '', 29, '', '', '', '', '1', '2023-08-01 16:56:36'),
(31, 'newest', '', 'farm', '', 'auction', 1, 1, 0, 1, 1, '1', 0, 233, '', '', '', '												<!---feature area start--->\r\n												<div class=\"col-md-4\">\r\n														<ul>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n														</ul>\r\n													</div>\r\n													<div class=\"col-md-4\">\r\n														<ul>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple  : </span>Yes</li>\r\n														\r\n														</ul>\r\n													</div>\r\n													<div class=\"col-md-4\">\r\n														<ul>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n														</ul>\r\n													</div>\r\n												<!---feature area end---->\r\n											', '', '', '', '', '', 29, 'sold', '', '', '', '1', '2023-08-01 17:07:44'),
(32, 'bewer title', '', 'house', '', 'sell', 1, 1, 0, 1, 1, '1', 0, 0, '', '', '', '												<!---feature area start--->\r\n												<div class=\"col-md-4\">\r\n														<ul>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n														</ul>\r\n													</div>\r\n													<div class=\"col-md-4\">\r\n														<ul>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple  : </span>Yes</li>\r\n														\r\n														</ul>\r\n													</div>\r\n													<div class=\"col-md-4\">\r\n														<ul>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n														<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n														</ul>\r\n													</div>\r\n												<!---feature area end---->\r\n											', 'IMG-20230718-WA0000.jpg', '', '', '', '', 29, 'withdrawn', '', '', '', '1', '2023-08-01 19:07:24'),
(34, 'This is big', '<p><span style=\"background-color: #808000;\"><em><strong>This is bigThis is bigThis is bigThis is bigThis is bigThis is bigThis is bigThis is bigThis is big</strong></em></span></p>', 'ranch', '', 'rent', 12, 12, 12, 12, 12, '1', 1200, 29999, 'Avenida de Ceuta', 'theCity', 'the State', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1.jpg', '1.jpg', '2.jpg', '3.jpg', '1.jpg', 29, 'pending', '1.jpg', '2.jpg', '3.jpg', '3', '2023-08-01 20:32:38'),
(35, 'dgfdgd dfggdfg', '<p>dgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfgdgfdgd dfggdfg</p>', 'house', '', 'sell', 1, 1, 0, 1, 1, '', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', 'admin/property/', 29, 'active', 'admin/property/', 'admin/property/', 'admin/property/', '', '2023-08-01 21:04:44'),
(36, 'Nova Moradia para estriar saved ss saved', '<p>Nova Moradia para estriarNova Moradia para estriarNova Mo<span style=\"background-color: #ff0000;\">radia para estriarNova Moradi</span>a para estriar</p>', 'house', '', 'sell', 5, 2, 2, 2, 2, '2', 120, 222222, 'Rua Dom Nuno Alvares Pereira', 'Batalha', 'Leiria', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'admin/property/', 'admin/property/', 'admin/property/', 'admin/property/1.jpg', 'admin/property/', 29, 'active', 'admin/property/', 'admin/property/', 'admin/property/', '2', '2023-08-04 19:35:53'),
(37, 'Neeewwww', '', 'house', '', 'sell', 1, 1, 0, 1, 1, '', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', '', 29, 'active', '', '', '', '', '2023-08-06 16:32:02'),
(38, 'Neeewwww', '', 'house', '', 'sell', 1, 1, 0, 1, 1, '', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', '', 29, 'active', '', '', '', '', '2023-08-06 16:58:18'),
(39, 'Neeewwww', '', 'house', '', 'sell', 1, 1, 0, 1, 1, '', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', '', 29, 'active', '', '', '', '', '2023-08-06 17:02:55'),
(40, 'Neeewwww', '', 'house', '5', 'sell', 1, 1, 0, 1, 1, '', 0, 0, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '', '', '', '', '', 29, 'active', '', '', '', '', '2023-08-06 17:05:10'),
(41, 'the bew titl', '', 'house', '5', 'sell', 1, 1, 0, 1, 1, '1', 123, 12000, '', '', '', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '41_1691340588.gif', '', '', '', '', 29, 'active', '', '', '', '2', '2023-08-06 17:06:49'),
(42, 'title of yhe prop', '', 'house', '5', 'sell', 3, 2, 0, 2, 2, '2', 121, 12000, 'Rua Dom Nuno Alvares Pereira', 'santarem', 'Lisboa', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Temple : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '42_1691427112.jpg', 'admin/property/', 'admin/property/', 'admin/property/', 'admin/property/', 29, 'active', 'admin/property/', 'admin/property/', 'admin/property/', '2', '2023-08-07 17:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `qmedia`
--

CREATE TABLE `qmedia` (
  `_id` int(11) NOT NULL,
  `m_rtype` int(4) DEFAULT NULL,
  `m_uid` int(11) DEFAULT NULL,
  `m_coid` int(11) DEFAULT NULL,
  `m_catid` int(11) DEFAULT NULL,
  `m_pid` int(12) DEFAULT NULL,
  `m_file` text DEFAULT NULL,
  `m_file_thumb` text DEFAULT NULL,
  `m_data` text DEFAULT NULL,
  `m_vala` text DEFAULT NULL,
  `m_valb` text DEFAULT NULL,
  `m_valc` text DEFAULT NULL,
  `m_dadded` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `qmedia`
--

INSERT INTO `qmedia` (`_id`, `m_rtype`, `m_uid`, `m_coid`, `m_catid`, `m_pid`, `m_file`, `m_file_thumb`, `m_data`, `m_vala`, `m_valb`, `m_valc`, `m_dadded`) VALUES
(1, 0, 29, 5, 5, 36, '5', '5', '5', '5', '5', '5', '1691316422'),
(2, 0, 29, 5, 5, 36, '36_1691316769.jpg', 's_thumb36_1691316769.jpg', '5', '5', '5', '5', '1691316769'),
(3, 0, 29, 5, 5, 36, '36_1691316769.jpg', 's_thumb36_1691316769.jpg', '5', '5', '5', '5', '1691316774'),
(4, 0, 29, 5, 5, 36, '36_1691316769.jpg', 's_thumb36_1691316769.jpg', '5', '5', '5', '5', '1691316784'),
(5, 0, 29, 5, 5, 36, '36.jpg', 's_thumb36.jpg', '5', '5', '5', '5', '1691318274'),
(6, 0, 29, 5, 5, 36, '36_1691318660.jpg', 's_thumb36_1691318660.jpg', '5', '5', '5', '5', '1691318656'),
(7, 0, 29, 5, 5, 36, '36_1691318673.jpg', 's_thumb36_1691318673.jpg', '5', '1691327322', '5', '5', '1691318663'),
(8, 5, 29, 5, 5, 36, '36_1691318691.jpg', 's_thumb36_1691318691.jpg', '5', '1691327630', '5', '5', '1691318676'),
(9, 5, 29, 5, 5, 36, '36_1691318867.jpg', 's_thumb36_1691318867.jpg', '5', '1691327442', '5', '5', '1691318695'),
(10, 0, 29, 5, 5, 36, '36_1691319909.jpg', 's_thumb36_1691319909.jpg', '5', '1691327854', '5', '5', '1691319899'),
(11, 0, 29, 5, 5, 36, '36_1691323288.png', 's_thumb36_1691323288.png', '5', '5', '5', '5', '1691323121'),
(12, 5, 29, 5, 5, 36, '36_1691323427.png', 's_thumb36_1691323427.png', '5', '1691327307', '5', '5', '1691323419'),
(13, 5, 29, 5, 5, 36, '36_1691323592.png', 's_thumb36_1691323592.png', '5', '1691327829', '5', '5', '1691323585'),
(14, 0, 29, 5, 5, 36, '36_1691323699.gif', 's_thumb36_1691323699.gif', '5', '5', '5', '5', '1691323692'),
(15, 5, 29, 5, 5, 36, '36_1691323859.jpg', 's_thumb36_1691323859.jpg', '5', '1691331518', '5', '5', '1691323855'),
(16, 5, 29, 5, 5, 35, '35_1691328068.png', 's_thumb35_1691328068.png', '5', '1000000001', '5', '5', '1691328055'),
(17, 0, 29, 5, 5, 35, '35_1691328073.png', 's_thumb35_1691328073.png', '5', '1000000001', '5', '5', '1691328069'),
(18, 5, 29, 5, 5, 35, '35_1691328081.png', 's_thumb35_1691328081.png', '5', '1691328102', '5', '5', '1691328076'),
(19, 5, 29, 5, 5, 35, '35_1691328094.jpg', 's_thumb35_1691328094.jpg', '5', '1000000001', '5', '5', '1691328082'),
(20, 5, 29, 5, 5, 29, '29_1691335874.jpg', 's_thumb29_1691335874.jpg', '5', '1000000001', '5', '5', '1691335863'),
(21, 5, 29, 5, 5, 41, '41_1691340588.gif', 's_thumb41_1691340588.gif', '5', '1000000001', '5', '5', '1691340582'),
(22, 5, 29, 5, 5, 41, '41_1691343372.jpg', 's_thumb41_1691343372.jpg', '5', '1000000001', '5', '5', '1691343367'),
(23, 5, 29, 5, 5, 41, '41_1691343376.png', 's_thumb41_1691343376.png', '5', '1000000001', '5', '5', '1691343373'),
(24, 5, 29, 5, 5, 42, '42_1691427112.jpg', 's_thumb42_1691427112.jpg', '5', '1000000001', '5', '5', '1691427099');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(2, 'gujarat'),
(3, 'goa'),
(4, 'maharashtra'),
(7, 'bihar'),
(9, 'chhattisgarh'),
(10, 'uttar pardesh'),
(15, 'rajasthan'),
(16, 'Lisboa'),
(17, 'Coimbra');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`) VALUES
(14, 'admin', 'admin@gmail.com', '9876543210', 'admin', 'user', '3.jpg'),
(15, 'aryan', 'aryan@gmail.com', '9878678678', 'aryan', 'agent', '2.jpg'),
(16, 'demo', 'demo@gmail.com', '7976976979', 'demo', 'user', '1.jpg'),
(21, 'disha', 'disha@gmail.com', '7976956956', 'disha', 'agent', '2.jpg'),
(22, 'disha', 'disha1@gmail.com', '8997897869', 'disha', 'agent', '1.jpg'),
(23, 'testing', 'testing@gmail.com', '9869596597', 'testing', 'builder', '1.jpg'),
(24, 'some', 'some@gmail.com', '9689698697', 'some', 'builder', '3.jpg'),
(25, 'test', 'test12@gmail.com', '9798678969', 'test', 'builder', 'avatar-3.jpg'),
(28, 'Joao Barros', 'profcode@hotmail.com', '913883735', 'incasa', 'builder', 'adddata.gif'),
(29, 'test191', 'test191@191', '191', '191', 'agent', 'tools.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `qmedia`
--
ALTER TABLE `qmedia`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `qmedia`
--
ALTER TABLE `qmedia`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
