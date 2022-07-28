-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 06:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Pwd`) VALUES
(1, 'sirelite11@gmail.com', '$2y$10$PE0xuY8DrtFJKTqPn2IlyumzhHaDFgazWQ5rnTgVrS.8W0IRj6sp2');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `Buyers_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Item_price` int(11) NOT NULL,
  `Item_Qty` int(11) NOT NULL,
  `Total_price` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Descrip` varchar(1000) NOT NULL,
  `Available_Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `Buyers_id`, `Product_id`, `DateReg`, `Item_price`, `Item_Qty`, `Total_price`, `Name`, `Model`, `Brand`, `Category`, `Image`, `Descrip`, `Available_Qty`) VALUES
(88, 0, 6, '2022-05-31 22:39:10', 10000, 1, 10000, 'Turtle Neck', 'Sweather', 'Nike', 'Clothings', '44092clothe.png', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 6),
(89, 3, 37, '2022-05-31 23:00:38', 143000, 1, 143000, 'Mens Xitos', 'Leather 2s', 'Nike', 'Clothings', '62265menclothe7.png', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), ', 100),
(90, 4, 20, '2022-06-03 21:50:19', 23000, 1, 23000, 'Chelsea Boot', 'Leather 2s', 'Nike', 'Shoes', '109491menshoe1.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 24);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `Buyers_id` int(255) NOT NULL,
  `Product_id` int(255) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Item_price` int(255) NOT NULL,
  `Item_Qty` int(255) NOT NULL,
  `Total_price` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Descrip` varchar(255) NOT NULL,
  `Available_Qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `Buyers_id`, `Product_id`, `DateReg`, `Item_price`, `Item_Qty`, `Total_price`, `Name`, `Model`, `Brand`, `Category`, `Image`, `Descrip`, `Available_Qty`) VALUES
(1, 3, 16, '2022-05-31 09:32:10', 300000, 1, 300000, 'Diamond Picaz', 'Fendy Silver', 'Goldie', 'Jewelries', '30011jewel4.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 11),
(3, 3, 18, '2022-05-31 09:51:17', 500000, 1, 500000, 'Pearls Pitch', 'Fendy Silver', 'Goldie', 'Jewelries', '803227jewel6.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 10),
(4, 3, 15, '2022-05-31 09:51:31', 200000, 2, 400000, 'Diamond Chirl', 'Fendy Silver', 'Goldie', 'Jewelries', '176151jewel3.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 15),
(5, 3, 14, '2022-05-31 09:51:35', 310000, 1, 310000, 'Silver Cloit', 'Fendy Silver', 'Fendy', 'Jewelries', '141686jewel2.jpeg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 15),
(7, 3, 25, '2022-05-31 12:20:32', 170999, 1, 170999, 'Sneaks Thread', 'Leather 3s', 'Nike', 'Shoes', '908909menshoe7.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 31),
(8, 3, 38, '2022-05-31 21:53:33', 143000, 1, 143000, 'Plain Tias', 'Leather 2s', 'Nike', 'Clothings', '771240menclothes.png', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), ', 100),
(9, 0, 6, '2022-05-31 22:39:10', 10000, 1, 10000, 'Turtle Neck', 'Sweather', 'Nike', 'Clothings', '44092clothe.png', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 6),
(10, 3, 37, '2022-05-31 23:00:38', 143000, 1, 143000, 'Mens Xitos', 'Leather 2s', 'Nike', 'Clothings', '62265menclothe7.png', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), ', 100),
(11, 4, 20, '2022-06-03 21:50:19', 23000, 1, 23000, 'Chelsea Boot', 'Leather 2s', 'Nike', 'Shoes', '109491menshoe1.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', 24);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Items` varchar(255) NOT NULL,
  `Total_price` int(255) NOT NULL,
  `Payment` varchar(255) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Order_Number` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Fullname`, `Email`, `Phone`, `Items`, `Total_price`, `Payment`, `DateReg`, `Order_Number`, `Status`) VALUES
(25, 'Gospel Jonathan', 'jojovocals@gmail.com', '07030548630', 'Diamond Picaz(1), A leather flip Bag(2), Pearls Pitch(1), Diamond Chirl(2), Silver Cloit(1), Sneaks Thread(1)', 1756999, 'Master Card Payment', '2022-06-02 12:05:56', '4751889161', 'Delivered'),
(26, 'Gospel Jonathan', 'jojovocals@gmail.com', '07030548630', 'Plain Tias(1)', 143000, 'Cash On Delivery', '2022-06-02 12:06:06', '3912819752', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Sellers_id` int(11) NOT NULL,
  `Category` varchar(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Descrip` varchar(1000) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Auction` varchar(255) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Sellers_id`, `Category`, `Name`, `Color`, `Brand`, `Model`, `Descrip`, `Quantity`, `Price`, `Image`, `Auction`, `DateReg`) VALUES
(4, 1, 'Accessories', 'Galaxy 21', 'Grey', 'Samsung', 'S sereis', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 19, 150000, '829064phone.png', 'Yes', '2022-05-26 22:14:10'),
(6, 1, 'Clothings', 'Turtle Neck', 'Green', 'Nike', 'Sweather', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 6, 10000, '44092clothe.png', 'Yes', '2022-05-30 21:07:40'),
(7, 1, 'Bags', 'Binge Bag', 'Black', 'Nike', 'S sereis', ' LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 21, 150000, '95747menbag1.jpg', 'Yes', '2022-05-26 22:12:37'),
(8, 1, 'Bags', 'Porche Bag', 'Brown', 'Nike', 'Petr Malik', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 12, 30000, '412346menbag.png', 'Yes', '2022-05-26 08:52:03'),
(9, 1, 'Bags', 'Piot Bag', 'Brown', 'Fenty', 'Montie', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 10, 35000, '19898menbag5.jpg', 'Yes', '2022-05-30 21:14:10'),
(10, 1, 'Bags', 'A leather flip Bag', 'Black', 'Fendy', 'Monchials', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 18, 38000, '96640menbag8.jpg', 'Yes', '2022-05-31 12:21:02'),
(11, 1, 'Bags', 'Richerios', 'Grey', 'Nike', 'Miont', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 25, 48000, '386043menbag7.jpg', 'Yes', '2022-05-26 08:52:23'),
(12, 1, 'Bags', 'Nikios', 'Grey', 'Nike', 'Mellas', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 16, 41000, '17318menbag5.jpg', 'Yes', '2022-05-26 08:52:31'),
(13, 1, 'Jewelries', 'Silver pearl', 'Silver', 'Fendy', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 15, 410000, '410827jewel1.jpg', 'Yes', '2022-05-26 08:52:35'),
(14, 1, 'Jewelries', 'Silver Cloit', 'Silver', 'Fendy', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 14, 310000, '141686jewel2.jpeg', 'Yes', '2022-05-31 12:21:02'),
(15, 1, 'Jewelries', 'Diamond Chirl', 'Silver', 'Goldie', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 13, 200000, '176151jewel3.jpg', 'Yes', '2022-05-31 12:21:02'),
(16, 1, 'Jewelries', 'Diamond Picaz', 'Silver', 'Goldie', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 10, 300000, '30011jewel4.jpg', 'Yes', '2022-05-31 12:21:02'),
(17, 1, 'Jewelries', 'Pearls', 'Silver', 'Goldie', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 25, 400000, '471616jewel5.jpg', 'Yes', '2022-05-26 08:52:48'),
(18, 1, 'Jewelries', 'Pearls Pitch', 'Silver', 'Goldie', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 9, 500000, '803227jewel6.jpg', 'Yes', '2022-05-31 12:21:02'),
(19, 1, 'Jewelries', 'Silver rits', 'Silver', 'Goldie', 'Fendy Silver', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 23, 100000, '406431jewel7.jpg', 'Yes', '2022-05-26 08:52:54'),
(20, 1, 'Shoes', 'Chelsea Boot', 'Brown', 'Nike', 'Leather 2s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 24, 23000, '109491menshoe1.jpg', 'Yes', '2022-05-26 22:12:37'),
(21, 1, 'Shoes', 'German Xiot', 'Brown', 'Fendy', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 15, 29950, '232377menshoe3.jpg', 'Yes', '2022-05-30 23:02:21'),
(22, 1, 'Shoes', 'ItalianXiot', 'Brown', 'Fendy', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 22, 69950, '56062menshoe4.jpg', 'Yes', '2022-05-28 07:41:34'),
(23, 1, 'Shoes', 'Sneaks', 'Grey', 'Fendy', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 34, 120000, '533458menshoe5.jpg', 'Yes', '2022-05-26 08:53:07'),
(24, 1, 'Shoes', 'Sneaks Crit', 'White', 'Nike', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 34, 130999, '498864menshoe6.png', 'Yes', '2022-05-26 08:53:14'),
(25, 1, 'Shoes', 'Sneaks Thread', 'White', 'Nike', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 30, 170999, '908909menshoe7.jpg', 'Yes', '2022-05-31 12:21:02'),
(26, 1, 'Shoes', 'Brogues', 'Br', 'Nike', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 34, 170999, '961865menshoe7.jpg', 'Yes', '2022-05-26 08:53:19'),
(27, 1, 'Shoes', 'Brogues', 'Brown', 'Nike', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 30, 150000, '425552menshoe8.jpg', 'Yes', '2022-05-28 07:41:34'),
(28, 1, 'Shoes', 'Sandals piot', 'Brown', 'Nike', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 23, 150000, '36991sandals.png', 'Yes', '2022-05-26 20:40:11'),
(29, 1, 'Shoes', 'Crocs', 'Brown', 'Nike', 'Leather 3s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 34, 150000, '921719shoe.png', 'Yes', '2022-05-26 08:53:32'),
(30, 1, 'Accessories', 'Game Pads', 'Black', 'Pes', 'Blackish', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 23, 150000, '543068doublepad.png', 'Yes', '2022-05-30 21:08:45'),
(31, 1, 'Accessories', '3D Game Pads', 'Black', 'Pes', 'Blackish', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 24, 190000, '163028pad.png', 'Yes', '2022-05-26 08:53:44'),
(32, 1, 'Accessories', '4D Game Controller', 'Black', 'Pes', 'Blackish', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 20, 190000, '590127ps5.png', 'Yes', '2022-05-26 22:27:41'),
(33, 1, 'Accessories', 'Mouse', 'Black', 'Microsoft', 'Blackish', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 45, 10000, '361546mouse.png', 'Yes', '2022-05-30 21:07:40'),
(34, 1, 'Accessories', 'Watch', 'Black', 'Fendy', 'Blackish', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 50, 100000, '723515watch.png', 'Yes', '2022-05-26 08:53:54'),
(35, 1, 'Accessories', 'Virtual Display', 'Black and white', 'Microsoft', 'Blackish', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.', 48, 300000, '638500virtual.png', 'Yes', '2022-05-26 21:50:00'),
(36, 0, 'Clothings', 'Mens Binge', 'yellow', 'Puma', 'Cleova', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch),', 100, 123000, '242410menclothe5.png', 'Yes', '2022-05-31 18:43:51'),
(37, 0, 'Clothings', 'Mens Xitos', 'Grey', 'Nike', 'Leather 2s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch),', 100, 143000, '62265menclothe7.png', 'Yes', '2022-05-31 18:45:07'),
(38, 0, 'Clothings', 'Plain Tias', 'Grey', 'Nike', 'Leather 2s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch),', 99, 143000, '771240menclothes.png', 'Yes', '2022-05-31 21:53:49'),
(39, 0, 'Clothings', 'Plain Taxos', 'Grey', 'Nike', 'Leather 2s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch),', 100, 103000, '258057menclothe6.png', 'Yes', '2022-05-31 18:46:04'),
(40, 0, 'Clothings', 'Sweather Lios', 'Grey', 'Nike', 'Leather 2s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch),', 100, 193000, '571572menclothe4.jpg', 'Yes', '2022-05-31 18:46:40'),
(41, 0, 'Clothings', 'Ankara Tixs', 'Grey', 'Nike', 'Leather 2s', 'JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch),', 100, 393000, '431880menclothe3.jpg', 'Yes', '2022-05-31 18:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` int(11) NOT NULL,
  `Buyers_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Item_price` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Descrip` varchar(1000) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `Buyers_id`, `Product_id`, `Item_price`, `Name`, `Brand`, `Model`, `Category`, `Image`, `Descrip`, `DateReg`) VALUES
(30, 3, 10, 38000, 'A leather flip Bag', 'Fendy', 'Monchials', 'Bags', '96640menbag8.jpg', ' JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever. ', '2022-05-31 09:32:45'),
(32, 3, 16, 300000, 'Diamond Picaz', 'Goldie', 'Fendy Silver', 'Jewelries', '30011jewel4.jpg', '  JTC Full HD 24\"\", LED CD TV combines great features and design. It has a diagonal screen size 61cm(24inch), with integratd dvd player and an in-built turner. It also recieves sattalite cable, DVB-T and DVB-T2 signals without the need for a reciever.  ', '2022-05-31 09:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `Firstname`, `Lastname`, `Email`, `Pwd`) VALUES
(1, 'Gospel', 'Jonathan', 'gospeljo@gmail.com', '1234\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fullname`, `Phone`, `Email`, `Pwd`, `DateReg`) VALUES
(3, 'Gospel Jonathan', '07030548630', 'jojovocals@gmail.com', '$2y$10$PE0xuY8DrtFJKTqPn2IlyumzhHaDFgazWQ5rnTgVrS.8W0IRj6sp2', '2022-05-31 09:21:05'),
(4, 'Gospel Jonathan', '07030548630', 'sirelite11@gmail.com', '$2y$10$Z49EUyXOSaJtndHCZvoireCVagx/IyIi1S0kGkDLzpOTR31awQDR2', '2022-06-03 21:40:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
