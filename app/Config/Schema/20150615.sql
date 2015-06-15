-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2015 às 19:50
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kasa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id` char(36) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `photo_file_name` blob,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `cell_phone` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `description` text,
  `google_plus` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `status` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agents`
--

INSERT INTO `agents` (`id`, `created`, `modified`, `photo_file_name`, `name`, `email`, `phone`, `cell_phone`, `fax`, `description`, `google_plus`, `facebook`, `twitter`, `instagram`, `status`) VALUES
('557b4e20-7738-4500-b472-1df4d56dfdae', '2015-06-12 23:24:48', '2015-06-15 19:24:26', 0x30395f6167656e745f70686f746f325f323730783235362e706e67, 'Ricardo Araújo', 'rocerdo@teste.com', '123456', '123445', '123446', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis fringilla pretium. Mauris tincidunt ipsum sem, ac rutrum nulla congue at. Sed lectus lorem, congue eget vehicula sed, malesuada eget dolor. Vivamus ac faucibus massa, a pretium turpis. Phasellus non consectetur purus. Integer bibendum sodales odio ut lacinia. In non sapien et felis tincidunt suscipit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed in turpis eros. In tincidunt ex nisl, non aliquam tortor blandit sit amet. Sed tristique pharetra nunc, in suscipit risus auctor aliquam. Curabitur pulvinar cursus massa nec faucibus. Aenean dapibus tellus in ultrices consequat. Ut egestas nisl est, in tincidunt felis lacinia ac. Aenean vitae euismod libero.</p>\r\n\r\n<p>Cras ultrices, urna vitae elementum hendrerit, dolor risus rhoncus neque, vel convallis orci purus id ante. Mauris dolor nisi, dapibus id congue sed, iaculis at dui. Nunc eu tortor a augue dignissim tristique in vel neque. Donec sodales et tortor at tristique. Pellentesque tempus lorem sed magna cursus, vitae accumsan purus sagittis. Aliquam mollis, tellus in facilisis scelerisque, lectus urna dictum urna, at ultricies metus lacus aliquet augue. In vel velit elementum, consequat metus et, vestibulum leo. Mauris facilisis volutpat nisi vel faucibus. Aliquam placerat interdum ante. Sed sem arcu, tempor vel interdum a, ultricies eget neque. Vivamus sed leo est.</p>\r\n\r\n<p>Vestibulum ullamcorper, nulla aliquet pellentesque accumsan, erat leo scelerisque dui, sit amet pellentesque mi arcu molestie justo. Sed efficitur eu metus nec commodo. Quisque at dictum libero. Donec et sem sit amet purus faucibus dictum ac a nulla. Cras sed tellus non justo facilisis dictum. Integer sit amet mollis erat, sed dapibus dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus tempus purus ornare metus fringilla interdum. Nullam hendrerit sed ante ut egestas. Duis ac nunc vitae nulla consectetur venenatis sit amet mollis dui. Phasellus commodo elementum libero, eu faucibus eros vulputate ut. Nam facilisis auctor lorem, venenatis maximus magna elementum vel. Pellentesque sed velit libero. Maecenas dictum augue vitae euismod ultricies. Phasellus odio eros, hendrerit eget enim eget, vulputate lacinia est.</p>\r\n\r\n<p>Nulla porta nisi vitae felis ultricies, at consequat ex posuere. Duis orci est, fringilla quis neque non, gravida tempus risus. Ut laoreet tempus lacus, sit amet luctus dui congue in. Donec non justo iaculis, ultricies dolor id, sodales magna. Nunc consequat luctus orci, ut dignissim nulla aliquam a. Vivamus tincidunt sapien leo, non mattis purus rutrum eget. Quisque congue justo nibh, at tincidunt mauris aliquet sit amet. Nunc vehicula tortor sed gravida porttitor. Quisque ac finibus justo. Phasellus in leo et nibh porta condimentum et dignissim purus.</p>\r\n\r\n<p>Curabitur rhoncus sem ut dolor bibendum, in consequat nisl scelerisque. Suspendisse potenti. Cras quis magna dignissim, faucibus turpis ac, egestas nulla. Vivamus volutpat maximus ante at eleifend. Suspendisse potenti. Morbi quis facilisis massa. Donec ac accumsan turpis. Donec sed enim vitae tortor tempus accumsan et nec elit. Aliquam vitae est purus. Vestibulum quis ante non nunc feugiat tempor. Maecenas nec aliquam purus. Vestibulum vitae sollicitudin est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sagittis aliquet viverra. Morbi a viverra ipsum. Vestibulum aliquet mollis augue eu consequat.</p>\r\n', 'Nulla porta nisi vitae felis ultricies, ', 'Nulla porta nisi vitae felis ultricies, ', 'Nulla porta nisi vitae felis ultricies, ', 'Nulla porta nisi vitae felis ultricies, ', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` char(36) NOT NULL DEFAULT '',
  `propertie_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `photo_file_name` blob,
  `status` char(1) DEFAULT '0',
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `propertie_id`, `created`, `modified`, `photo_file_name`, `status`, `position`) VALUES
('557f0939-db28-4183-83c9-02acd56dfdae', NULL, '2015-06-15 19:19:53', '2015-06-15 19:35:29', 0x736c6964655f3033315f31393230783633382e6a7067, '0', 1),
('557f094a-617c-40c3-b1c1-02acd56dfdae', NULL, '2015-06-15 19:20:10', '2015-06-15 19:35:29', 0x33395f736c6964655f6e315f373730783438312e706e67, '0', 2),
('557f095a-4af4-4dd4-85d6-02acd56dfdae', NULL, '2015-06-15 19:20:26', '2015-06-15 19:35:29', 0x736c6964655f30315f373730783438312e6a7067, '0', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` char(36) NOT NULL DEFAULT '',
  `propertie_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `price` int(11) NOT NULL,
  `area` varchar(40) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `details`
--

INSERT INTO `details` (`id`, `propertie_id`, `created`, `modified`, `price`, `area`, `bedrooms`, `bathrooms`) VALUES
('557b1cd5-1da0-42d1-b9e4-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 19:54:29', '2015-06-12 20:03:23', 1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` char(36) NOT NULL DEFAULT '',
  `propertie_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `zip_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locations`
--

INSERT INTO `locations` (`id`, `propertie_id`, `created`, `modified`, `city`, `latitude`, `longitude`, `address`, `state`, `neighborhood`, `zip_code`) VALUES
('557b1cd5-eb84-4d27-87db-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 19:54:29', '2015-06-12 20:29:23', 'Rio de Janeiro', '-23.0018498', '-43.3388286', 'Rua Dalcídio Jurandi', '12380', '34200', '234234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` char(36) NOT NULL DEFAULT '',
  `propertie_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `photo_file_name` blob,
  `status` char(1) DEFAULT '0',
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `photos`
--

INSERT INTO `photos` (`id`, `propertie_id`, `created`, `modified`, `photo_file_name`, `status`, `position`) VALUES
('557b44ea-113c-495c-8a8e-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 22:45:30', '2015-06-15 19:49:22', 0x556e7469746c65645f312e706e67, '1', 2),
('557b44ea-1c04-460c-b0c4-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 22:45:30', '2015-06-15 19:49:22', 0x736c6964655f30315f373730783438312e6a7067, '1', 3),
('557b44ea-3af0-465f-9416-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 22:45:30', '2015-06-15 19:49:22', 0x33395f736c6964655f6e315f373730783438312e706e67, '1', 4),
('557b452e-92f8-43a9-9427-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 22:46:38', '2015-06-15 19:49:21', 0x33395f736c6964655f6e315f373730783438312e706e67, '1', 1),
('557f0d74-6764-4026-bda9-02acd56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-15 19:37:56', '2015-06-15 19:49:21', 0x736c6964655f3033315f31393230783633382e6a7067, '1', 1),
('557f0d74-aea0-4d21-9d6f-02acd56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-15 19:37:56', '2015-06-15 19:49:21', 0x556e7469746c65645f312e706e67, '1', 2),
('557f0d74-dc0c-4451-8e90-02acd56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-15 19:37:56', '2015-06-15 19:49:21', 0x736c6964655f30315f373730783438312e6a7067, '1', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` char(36) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo_file_name` blob,
  `status` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `properties`
--

INSERT INTO `properties` (`id`, `created`, `modified`, `name`, `description`, `photo_file_name`, `status`) VALUES
('557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 19:54:29', '2015-06-12 22:43:21', 'Apenas Teste', '<p>Apenas Teste</p>\r\n', 0x736c6964655f30315f373730783438312e6a7067, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
