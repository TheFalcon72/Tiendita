-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carrito`
--

CREATE TABLE `Carrito` (
  `CarritoID` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `ProductoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Producto`
--

CREATE TABLE `Producto` (
  `ProductoID` int(11) NOT NULL,
  `ProductoMarca` varchar(200) NOT NULL,
  `ProductoNombre` varchar(255) NOT NULL,
  `ProductoPrecio` double(10,2) NOT NULL,
  `ProductoImagen` varchar(255) NOT NULL,
  `ProductoRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Producto`
--

INSERT INTO `Producto` (`ProductoID`, `ProductoMarca`, `ProductoNombre`, `ProductoPrecio`, `ProductoImagen`, `ProductoRegistro`) VALUES
(1, 'Stelios', 'PC GAMER STELIOS 80I', 53230.00, './assets/productos/1.png', '2020-03-28 11:08:57'), -- NOW()
(2, 'Telios', 'PC GAMER TELIOS IX', 105010.00, './assets/productos/2.png', '2020-03-28 11:08:57'),
(3, 'Agis', 'PC GAMER AGIS 70Z', 17488.00, './assets/productos/3.png', '2020-03-28 11:08:57'),
(4, 'Thanos', 'PC GAMER THANOS 80I X', 78750.00, './assets/productos/4.png', '2020-03-28 11:08:57'),
(5, 'Thanos', 'PC GAMER KING THANOS', 91220.00, './assets/productos/5.png', '2020-03-28 11:08:57'),
(6, 'Cougar', 'AUDÍFONOS GAMER COUGAR PHONTUM ESSENTIAL ROSA', 849.00, './assets/productos/6.png', '2020-03-28 11:08:57'),
(7, 'Cougar', 'MOUSE GAMER COUGAR MINOS XT RGB 4000DPI ROSA', 599.00, './assets/productos/7.png', '2020-03-28 11:08:57'),
(8, 'Desconosido', 'Puerta Abatible Inteligente Pequeña Para Mascotas', 1030.00, './assets/productos/8.png', '2020-03-28 11:08:57'),
(9, 'Calling Music', 'Gafas Inteligentes Inalámbricas Bluetooth5.0', 950.00, './assets/productos/9.png', '2020-03-28 11:08:57'),
(10, 'Desconosido', 'Receptor Inalámbrico Wifi Hdmi Dispositivo De Tv Streaming', 152.00, './assets/productos/10.png', '2020-03-28 11:08:57'),
(11, 'Desconosido', 'Expresion LED Alarm Clock', 1200.00, './assets/productos/11.png', '2020-03-28 11:08:57'),
(12, 'bowAI', 'OLOEY', 2000.00, './assets/productos/12.png', '2020-03-28 11:08:57'),
(13, 'Lenovo', 'Lenovo Smart Clock Essential Con Asistente De Voz Google', 1140.00, './assets/productos/13.png', '2020-03-28 11:08:57'),
(14, 'NACEB', 'KIT GAMER NACEB CYBORG PLATA (ESPAÑOL)', 580.00, './assets/productos/14.png', '2020-03-28 11:08:57'),
(15, 'Eagle Warrior', 'AUDÍFONOS GAMER EAGLE WARRIOR QUIMERA RGB', 399.00, './assets/productos/15.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `UsuarioID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `FechaRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`UsuarioID`, `Nombre`, `Apellido`, `FechaRegistro`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `CarritoID` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `ProductoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Carrito`
--
ALTER TABLE `Carrito`
  ADD PRIMARY KEY (`CarritoID`);

--
-- Indexes for table `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`ProductoID`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Carrito`
--
ALTER TABLE `Carrito`
  MODIFY `CarritoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Producto`
--
ALTER TABLE `Producto`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;