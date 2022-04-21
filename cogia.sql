-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 02:36 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogia`
--

-- --------------------------------------------------------

--
-- Table structure for table `jokes`
--

CREATE TABLE `jokes` (
  `id` int(11) NOT NULL,
  `joke` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jokes`
--

INSERT INTO `jokes` (`id`, `joke`) VALUES
(1, 'Bermimpilah tentang apa yang ingin kamu imppikan ,jadilah seperti yang kamu inginkan.karena bisa jadi itu memang mimpi.'),
(2, 'Semakin banyak kita belajar ,semakin banyak kita tahu, semakin banyak yang kita tahu, semakin banyak yang kita lupa.<br>\r\n      semakin sedikit yang kita tahu. jadi kenapa sibuk belajar'),
(3, 'Semua orang ingin masuk surga, tapi banyak orang yang tidak ingin mati.'),
(4, 'ketika seseorang berusaha menjauh hidupmu,jangan biarkan, sebelum dia melunasi semua utangnya.'),
(5, 'Terkadang kita membutuhkan kesendirian pada saat kita ingin buka puasa di siang hari'),
(6, 'masa depan tergantung pada impian kamu, Maka pergilah tidur sekarang.'),
(7, 'Uang tidak bisa membeli kebahagiaan ,tapi mempunyai uang akan lebih bahagia dari pada tidak punya.'),
(8, 'Kegagalan adalah kesuksesan yang tertunda dan kebohongan adalah kejujuran yang tertunda.'),
(9, 'Jadilah diri anda sendiri, jika anda jelek maka syukurilah kejelekan diri anda.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `hp`) VALUES
(16, 'fauzanpramulia', 'pramuliafauzan@gmail.com', 'a64654922f85661389715a14deb01bfe', '082169040212'),
(19, 'v', 'pram@mail.com', '202cb962ac59075b964b07152d234b70', '123'),
(21, 'wahyu', 'wahyu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '082169087654'),
(22, 'fauzan', 'fauzan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '082169040212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jokes`
--
ALTER TABLE `jokes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jokes`
--
ALTER TABLE `jokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
