-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Servidor: mysql.nexoscreative.com
-- Tempo de Geração: Jun 23, 2015 as 12:58 PM
-- Versão do Servidor: 5.1.56
-- Versão do PHP: 5.4.37

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `kaza`
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
  `url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `cell_phone` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `description` text,
  `google_plus` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `status` char(255) DEFAULT NULL,
  `language` varchar(20) DEFAULT 'eng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agents`
--

INSERT INTO `agents` (`id`, `created`, `modified`, `photo_file_name`, `name`, `url`, `email`, `phone`, `cell_phone`, `fax`, `description`, `google_plus`, `facebook`, `twitter`, `instagram`, `status`, `language`) VALUES
('5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-18 17:28:54', '2015-06-18 23:11:52', 0x5061756c6f4c7972612e6a7067, 'Paulo Lyra', 'paulo-lyra', 'paulo@realtykaza.com', '900 123 456 789', '900 123 456 789', '900 123 456 789', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet est nec augue malesuada dictum. Nullam elementum dictum libero quis tristique. Aenean dictum, elit non rutrum aliquam, risus lacus interdum quam, eu lacinia diam dui ac urna. Nunc leo mauris...</p>\r\n', '', 'https://www.facebook.com/paulolyrajr', '', 'https://instagram.com/gus_ssilva/', '1', 'por');

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
  `description` text,
  `status` char(1) DEFAULT '0',
  `position` int(11) DEFAULT NULL,
  `language` varchar(20) DEFAULT 'eng'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `propertie_id`, `created`, `modified`, `photo_file_name`, `description`, `status`, `position`, `language`) VALUES
('55831b64-9eb0-40a4-8ba4-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 21:26:28', '2015-06-20 15:20:31', 0x352e6a7067, '<p>The Harbour &eacute; um retiro privado de pura perfei&ccedil;&atilde;o de &aacute;guas costeiras calmas com luxuriantes jardins bot&acirc;nicos em cinco hectares de terra em frente &agrave; ba&iacute;a que podem tornar-se a sua nova ilha tropical privada. Este novo projeto possui 330 resid&ecirc;ncias de luxo em 2 torres de 25 andares cada, com elevador privativo, servi&ccedil;o completo de beach club, daybeds e lounges. Conta ainda com atividades de clube aquatico como paddleboards, caiaques, jetskis, mergulho, windsurfing, bicicletas e muito mais.</p>\r\n', '1', 3, 'por'),
('5584332f-bc84-4ca2-ad5c-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:20:15', '2015-06-20 15:20:31', 0x342e6a7067, '<p>Com imponente arquitetura, lojas de departamentos dominantes no mercado, restaurantes de chef renomados e varejistas best-in-class, Miami Worldcenter &eacute; desenvolvido pela Forbes Company, um propriet&aacute;rio reconhecido nacionalmente, desenvolvedor e gerente...</p>\r\n', '1', 2, 'por'),
('5585de2a-9858-49fd-9ccc-2657d071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:42:02', '2015-06-20 15:20:31', 0x31312e6a7067, '<p>Verde, inovador, e o novo cora&ccedil;&atilde;o do bairro Brickell em Miami, os 5,4 milh&otilde;es de p&eacute;s quadrados de propriedade de uso misto do Brickell CityCentre ir&atilde;o transformar n&atilde;o s&oacute; o layout do centro da cidade, mas traz consigo o luxo em residencias, no varejo e no mercado de viagens at&eacute; ent&atilde;o desconhecido dentro deste centro comercial e banc&aacute;rio de renome mundial em Miami.</p>\r\n', '1', 1, 'por'),
('5585e1f0-fa48-4ca3-9290-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:58:08', '2015-06-20 15:20:31', 0x31312e6a7067, '<p>Constru&iacute;do por J.Milton and Associates, este novo projeto est&aacute; localizado na 330 Sunny Isles Blvd, em Sunny Isles. O projeto compreende duas torres boutique de 26 andares com total de 160 unidades por torre, com a inaugura&ccedil;&atilde;o prevista para o final de 2015. Parque Towers vai oferecer duas op&ccedil;&otilde;es de planta: unidades de 2 e 3 quartos, que variam em tamanho de 1799 a 2400 p&eacute;s quadrados. Parque Towers &eacute; um projeto high-end, com todas as comodidades e servi&ccedil;os surpreendentes.</p>\r\n', '1', 4, 'por'),
('5585e720-d3b4-4114-af22-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:20:16', '2015-06-20 15:20:31', 0x666f746f342e706e67, '<p>Como destino tur&iacute;stico e comercial privilegiado de Orlando - que abrange cerca de 1.500 hectares ao sudoeste de The Walt Disney World Resort - ChampionsGate&reg; recebe os visitantes pela sa&iacute;da da I-4 com linhas imponentes de palmeiras muito altas por tr&aacute;s dos port&otilde;es duplos lindamente desenhados.</p>\r\n', '1', 5, 'por');

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
  `bathrooms` int(11) NOT NULL,
  `garages` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `details`
--

INSERT INTO `details` (`id`, `propertie_id`, `created`, `modified`, `price`, `area`, `bedrooms`, `bathrooms`, `garages`) VALUES
('5580912e-2880-4589-a407-02acc0a80084', '5580912e-fc50-4a93-97c4-02acc0a80084', '2015-06-16 23:12:14', '2015-06-18 17:15:37', 20000, '100', 2, 2, 1),
('55809161-d3cc-45b2-b706-02acc0a80084', '55809161-dda8-409e-aad8-02acc0a80084', '2015-06-16 23:13:05', '2015-06-18 17:15:40', 20000, '100', 2, 3, 1),
('55809170-f7e0-4829-8b0f-02acc0a80084', '55809170-c87c-4955-b858-02acc0a80084', '2015-06-16 23:13:20', '2015-06-18 17:15:43', 30000, '150', 1, 4, 1),
('55809184-5a74-48ec-b3fe-02acc0a80084', '55809184-5bd4-48af-892b-02acc0a80084', '2015-06-16 23:13:40', '2015-06-18 17:15:46', 50000, '200', 3, 3, 1),
('5580918f-5f98-4caf-a590-02acc0a80084', '5580918f-4d38-418f-bbce-02acc0a80084', '2015-06-16 23:13:51', '2015-06-18 17:15:50', 45000, '300', 1, 5, 1),
('5580919c-d30c-4c9b-8af6-02acc0a80084', '5580919c-c5b8-4bf3-8021-02acc0a80084', '2015-06-16 23:14:04', '2015-06-18 17:15:53', 10000, '50', 1, 1, 1),
('558306c7-d120-49bd-8c46-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 19:58:31', '2015-06-18 21:27:38', 450000, '120', 3, 2, 1),
('55830df5-4468-4525-b991-02acd56dfdae', '55830df5-f514-4986-924a-02acd56dfdae', '2015-06-18 20:29:09', '2015-06-18 20:29:09', 0, '', 0, 0, NULL),
('5583193d-1028-4d01-8254-02acd56dfdae', '5583193c-2eac-4f24-a3fa-02acd56dfdae', '2015-06-18 21:17:17', '2015-06-18 21:17:17', 0, '', 0, 0, NULL),
('55842fad-9388-4858-9cec-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:05:17', '2015-06-19 17:25:48', 700000, '2,6', 3, 4, 1),
('5585dc1e-a3cc-4ad5-8ea5-1b4ad071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:33:18', '2015-06-20 14:34:35', 620000, '20', 1, 1, 1),
('5585e094-52b4-4282-b443-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:52:20', '2015-06-20 14:53:19', 780000, '800', 3, 2, 1),
('5585e57f-ca28-41b4-82a3-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:13:19', '2015-06-20 15:16:41', 450000, '28', 4, 4, 2);

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
  `zip_code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locations`
--

INSERT INTO `locations` (`id`, `propertie_id`, `created`, `modified`, `city`, `latitude`, `longitude`, `address`, `state`, `neighborhood`, `zip_code`) VALUES
('5580912e-1274-4053-a31b-02acc0a80084', '5580912e-fc50-4a93-97c4-02acc0a80084', '2015-06-16 23:12:14', '2015-06-16 23:12:14', '', '', '', '', '', '', ''),
('55809161-eecc-4295-98e0-02acc0a80084', '55809161-dda8-409e-aad8-02acc0a80084', '2015-06-16 23:13:05', '2015-06-16 23:13:05', '', '', '', '', '', '', ''),
('55809170-daa8-4646-aa67-02acc0a80084', '55809170-c87c-4955-b858-02acc0a80084', '2015-06-16 23:13:20', '2015-06-16 23:13:20', '', '', '', '', '', '', ''),
('55809184-8f04-4e93-a56c-02acc0a80084', '55809184-5bd4-48af-892b-02acc0a80084', '2015-06-16 23:13:40', '2015-06-16 23:13:40', '', '', '', '', '', '', ''),
('55809190-05f0-4b54-b924-02acc0a80084', '5580918f-4d38-418f-bbce-02acc0a80084', '2015-06-16 23:13:52', '2015-06-16 23:13:52', '', '', '', '', '', '', ''),
('5580919c-87cc-4355-8953-02acc0a80084', '5580919c-c5b8-4bf3-8021-02acc0a80084', '2015-06-16 23:14:04', '2015-06-16 23:14:04', '', '', '', '', '', '', ''),
('558306c7-9750-4970-a064-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 19:58:31', '2015-06-18 20:11:06', 'Miami, FL, United States', '25.968042', '-80.14478600000001', 'Biscayne Boulevard, Aventura', 'Florida', 'Aventura', '33160'),
('55830df5-9274-4fb2-8263-02acd56dfdae', '55830df5-f514-4986-924a-02acd56dfdae', '2015-06-18 20:29:09', '2015-06-18 20:29:09', '', '', '', '', '', '', ''),
('5583193d-4bac-4951-a54c-02acd56dfdae', '5583193c-2eac-4f24-a3fa-02acd56dfdae', '2015-06-18 21:17:17', '2015-06-18 21:17:17', '', '', '', '', '', '', ''),
('55842fad-b5cc-4adf-a4dc-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:05:17', '2015-06-19 17:11:57', 'Miami, FL, United States', '25.7479599', '-80.26591789999998', '550 Biltmore Way, Coral Gables, FL 33134, Estados Unidos', 'Florida', 'Coral Gables', '33134'),
('5585dc1e-965c-4821-9d84-1b4ad071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:33:18', '2015-06-20 14:37:42', 'Miami, FL, United States', '25.7672124', '-80.18532670000002', '625 Brickell Key Dr, Miami, FL 33131, USA', 'Florida', 'Brickell', '33131'),
('5585e094-5e68-431c-89b9-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:52:20', '2015-06-20 14:54:25', 'Miami, FL, United States', '25.929338', '-80.12609399999997', '330 Sunny Isles Blvd Sunny Isles Beach, FL 33160, USA', 'Florida', 'Isles Beach', '33160'),
('5585e57f-2c10-4982-8209-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:13:19', '2015-06-20 15:17:26', 'Orlando', '28.259756', '-81.62225999999998', '8390 ChampionsGate Blvd. ChampionsGate, FL 33896', 'Florida', 'ChampionsGate', '33896');

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
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `photos`
--

INSERT INTO `photos` (`id`, `propertie_id`, `created`, `modified`, `photo_file_name`, `status`, `position`) VALUES
('557b44ea-3af0-465f-9416-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 22:45:30', '2015-06-15 19:49:22', 0x33395f736c6964655f6e315f373730783438312e706e67, '1', 4),
('557b452e-92f8-43a9-9427-1df4d56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-12 22:46:38', '2015-06-15 19:49:21', 0x33395f736c6964655f6e315f373730783438312e706e67, '1', 1),
('557f0d74-6764-4026-bda9-02acd56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-15 19:37:56', '2015-06-15 19:49:21', 0x736c6964655f3033315f31393230783633382e6a7067, '1', 1),
('557f0d74-aea0-4d21-9d6f-02acd56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-15 19:37:56', '2015-06-15 19:49:21', 0x556e7469746c65645f312e706e67, '1', 2),
('557f0d74-dc0c-4451-8e90-02acd56dfdae', '557b1cd5-7900-4e6d-aa5a-1df4d56dfdae', '2015-06-15 19:37:56', '2015-06-15 19:49:21', 0x736c6964655f30315f373730783438312e6a7067, '1', 3),
('55830733-1d80-4417-a920-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:19', '2015-06-18 21:23:20', 0x313334372e6a7067, '1', 3),
('55830733-22fc-4466-b94f-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:19', '2015-06-18 21:23:20', 0x313334342e6a7067, '1', 2),
('55830733-2dfc-4a20-ae19-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:19', '2015-06-18 21:23:21', 0x313334352e6a7067, '1', 4),
('55830733-42dc-47d9-91cd-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:19', '2015-06-18 21:23:20', 0x313334332e6a7067, '1', 1),
('55830733-56a8-40b4-a7c5-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:19', '2015-06-18 21:23:21', 0x313334362e6a7067, '1', 5),
('55830733-d2f0-4e2f-a743-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:19', '2015-06-18 21:23:21', 0x313334382e6a7067, '1', 7),
('55830734-32b0-4efb-8cac-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:20', '2015-06-18 21:23:21', 0x313335302e6a7067, '1', 8),
('55830734-b92c-4c52-884c-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 20:00:20', '2015-06-18 21:23:21', 0x313334392e6a7067, '1', 6),
('55843757-d200-4bbe-84b6-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:37:59', '2015-06-19 17:42:57', 0x312e6a7067, '1', 7),
('55843757-f2dc-4a9f-ab0d-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:37:59', '2015-06-19 17:42:57', 0x372e6a7067, '1', 1),
('55843757-fcc4-49ac-85fe-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:37:59', '2015-06-19 17:42:57', 0x322e6a7067, '1', 6),
('55843758-61bc-4d96-8edb-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:38:00', '2015-06-19 17:42:57', 0x382e6a7067, '1', 5),
('55843758-930c-48d5-a95b-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:38:00', '2015-06-19 17:42:57', 0x352e6a7067, '1', 4),
('558437d1-1b74-47d5-9d50-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:40:01', '2015-06-19 17:42:57', 0x332e6a7067, '1', 3),
('558437d1-e75c-42df-b453-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:40:01', '2015-06-19 17:42:57', 0x342e6a7067, '1', 2),
('5585dd3f-2fa0-4716-a58b-1b4ad071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:38:07', '2015-06-20 14:41:18', 0x31362e6a7067, '1', 7),
('5585dd41-607c-4e49-988d-1b52d071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:38:09', '2015-06-20 14:41:18', 0x31352e6a7067, '1', 6),
('5585dd48-e98c-4a91-86e4-1b52d071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:38:16', '2015-06-20 14:41:18', 0x31312e6a7067, '1', 1),
('5585dd4a-41cc-4080-91de-1b4ad071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:38:18', '2015-06-20 14:41:18', 0x31372e6a7067, '1', 4),
('5585dd50-964c-4bab-9824-1b52d071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:38:24', '2015-06-20 14:41:18', 0x31342e6a7067, '1', 5),
('5585dd57-3ba4-4a5a-8d19-1b4ad071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:38:31', '2015-06-20 14:41:18', 0x31322e6a7067, '1', 3),
('5585dddc-0a58-4056-858a-2657d071a87d', '5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '2015-06-20 14:40:44', '2015-06-20 14:41:18', 0x31382e6a7067, '1', 2),
('5585e130-9a44-40b5-b3e1-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:54:56', '2015-06-20 14:57:12', 0x31312e6a7067, '1', 5),
('5585e141-29e0-4bab-bf12-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:55:13', '2015-06-20 14:57:12', 0x31332e6a7067, '1', 3),
('5585e144-2590-4802-acd4-374cd071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:55:16', '2015-06-20 14:57:12', 0x31362e6a7067, '1', 1),
('5585e147-3944-47c3-b37f-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:55:19', '2015-06-20 14:57:12', 0x31322e6a7067, '1', 6),
('5585e189-a76c-4b52-bdb4-335ad071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:56:25', '2015-06-20 14:57:12', 0x31352e6a7067, '1', 2),
('5585e18c-0490-4d06-b886-374cd071a87d', '5585e091-d24c-4178-8470-335ad071a87d', '2015-06-20 14:56:28', '2015-06-20 14:57:12', 0x31342e6a7067, '1', 4),
('5585e697-9af0-4f0a-a160-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:17:59', '2015-06-20 15:19:33', 0x322e6a7067, '1', 7),
('5585e699-5df8-4ea8-93e4-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:01', '2015-06-20 15:19:33', 0x332e6a7067, '1', 6),
('5585e69a-324c-4a08-b8af-4f5ed071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:02', '2015-06-20 15:19:33', 0x352e6a7067, '1', 5),
('5585e69c-0dec-43ee-aad7-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:04', '2015-06-20 15:19:33', 0x362e6a7067, '1', 4),
('5585e69d-0d78-4d68-8a7b-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:05', '2015-06-20 15:19:33', 0x382e6a7067, '1', 10),
('5585e69e-6398-4c07-97c4-4f5ed071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:06', '2015-06-20 15:19:33', 0x372e6a7067, '1', 3),
('5585e6a0-32d8-4f15-b206-4ab0d071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:08', '2015-06-20 15:19:33', 0x342e6a7067, '1', 2),
('5585e6a1-8208-4fb0-9cf0-4f5ed071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:09', '2015-06-20 15:19:33', 0x392e6a7067, '1', 9),
('5585e6a3-8a00-4fd1-960b-4f5ed071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:11', '2015-06-20 15:19:33', 0x31302e6a7067, '1', 8),
('5585e6a6-78b8-4072-83df-4f5ed071a87d', '5585e57d-f7f0-4725-ba15-4ab0d071a87d', '2015-06-20 15:18:14', '2015-06-20 15:19:33', 0x666f746f342e706e67, '1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` char(36) NOT NULL DEFAULT '',
  `agent_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo_file_name` blob,
  `type` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT '0',
  `featured` char(1) DEFAULT '0',
  `language` varchar(20) DEFAULT 'eng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `properties`
--

INSERT INTO `properties` (`id`, `agent_id`, `created`, `modified`, `name`, `description`, `photo_file_name`, `type`, `url`, `status`, `featured`, `language`) VALUES
('558306c7-cca8-4597-8573-02acc0a80084', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-18 19:58:31', '2015-06-19 17:24:01', 'THE HARBOR - AVENTURA', '<h2>OPINI&Atilde;O SOBRE O THE HARBOR - AVENTURA, FLORIDA</h2>\r\n\r\n<p>The Harbour &eacute; um retiro privado de pura perfei&ccedil;&atilde;o de &aacute;guas costeiras calmas com luxuriantes jardins bot&acirc;nicos em cinco hectares de terra em frente &agrave; ba&iacute;a que podem tornar-se a sua nova ilha tropical privada. Este novo projeto possui 330 resid&ecirc;ncias de luxo em 2 torres de 25 andares cada, com elevador privativo, servi&ccedil;o completo de beach club, daybeds e lounges. Conta ainda com atividades de clube aquatico como paddleboards, caiaques, jetskis, mergulho, windsurfing, bicicletas e muito mais.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO THE HARBOR - AVENTURA, FLORIDA</h2>\r\n\r\n<p>EDIF&Iacute;CIO<br />\r\n<br />\r\n&bull; 330 resid&ecirc;ncias de luxo em duas torres de 25 andares com elevadores privativos.&nbsp;<br />\r\n&bull; Lindo projeto arquitet&ocirc;nico desenvolvido pela empresa de renome mundial Corwil Architects.<br />\r\n&bull; Condom&iacute;nio fechado e privado.&nbsp;<br />\r\n&bull; Dram&aacute;tico &aacute;trio interior e exterior de v&aacute;rios andares com vista panor&acirc;mica para a piscina e para a ba&iacute;a.&nbsp;<br />\r\n&bull; Interiores elegantes e contempor&acirc;neos desenvolvidos por The Design Agency.&nbsp;<br />\r\n&bull; Marina privada planejada com rampas para barcos com acesso &agrave; ba&iacute;a e ao oceano.&nbsp;<br />\r\n&bull; Servi&ccedil;o completo privado Beach Club com sof&aacute;s e lounges.&nbsp;<br />\r\n&bull; Deck de relaxamento e bronzeamento.&nbsp;<br />\r\n&bull; Deslumbrante piscina de borda infinita com vista para a ba&iacute;a.&nbsp;<br />\r\n&bull; Restaurante e bar no interior e exterior acess&iacute;vel a partir do lobby, da piscina ao ar livre e da marina.&nbsp;<br />\r\n&bull; Aqua Activities Club totalmente equipado oferecendo pedalinhos, caiaques, jetskis, equipamento de snorkeling, windsurf, bicicletas e muito mais.&nbsp;<br />\r\n&bull; Trilhas da serenidade e esta&ccedil;&otilde;es de fitness Vita Course pela propriedade.&nbsp;<br />\r\n&bull; &Aacute;rea para crian&ccedil;as repleta de divers&atilde;o incluindo Water Play Zone, sal&atilde;o de jogos e playground.<br />\r\n&bull; Instala&ccedil;&otilde;es desportivas de t&ecirc;nis, squash, futebol, basquete e jogo aberto.&nbsp;<br />\r\n&bull; &Aacute;rea de reuni&otilde;es e churrasqueira grande ao ar livre.<br />\r\n&bull; Parque cercado para c&atilde;es.&nbsp;<br />\r\n&bull; Concierge exclusivo, limpeza a seco e servi&ccedil;os de lavanderia no local.&nbsp;<br />\r\n&bull; Estacionamento seguro coberto com vigil&acirc;ncia 24 horas e servi&ccedil;o de valet.&nbsp;<br />\r\n&bull; 24 horas de pessoal de seguran&ccedil;a e monitoramento de v&iacute;deo.&nbsp;<br />\r\n<br />\r\nLUSH &ndash; The Spa<br />\r\n<br />\r\n&bull; Spa privado com &aacute;reas de tratamento internas e externas.&nbsp;<br />\r\n&bull; Menu completo de tratamentos de spa e terapias dispon&iacute;veis.&nbsp;<br />\r\n&bull; Rodeado por jardins bot&acirc;nicos luxuosos e lindo paisagismo.&nbsp;<br />\r\n&bull; Piscinas quentes e frias de hidroterapia.&nbsp;<br />\r\n&bull; Sauna a vapor e sauna.<br />\r\n&bull; Vesti&aacute;rios masculinos e femininos separados.&nbsp;<br />\r\n<br />\r\nENERGY &ndash; The Fitness center<br />\r\n<br />\r\n&bull; Equipamentos State-of-the-art e diversas &aacute;reas de atividade.&nbsp;<br />\r\n&bull; Esteiras de n&iacute;vel profissional, m&aacute;quinas el&iacute;pticas, m&aacute;quinas de remo, bicicletas de spinning e outras m&aacute;quinas de cardio.&nbsp;<br />\r\n&bull; M&aacute;quinas de muscula&ccedil;&atilde;o da melhor marca e extensa cole&ccedil;&atilde;o livre de peso.&nbsp;<br />\r\n&bull; Est&uacute;dio aberto para yoga, Pilates, e aer&oacute;bica.&nbsp;<br />\r\n&bull; &Aacute;rea de pr&aacute;tica de yoga ao ar livre adicional.&nbsp;<br />\r\n&bull; Personal trainers certificados.&nbsp;<br />\r\n&bull; Aulas e atividades com instrutor dispon&iacute;veis.&nbsp;<br />\r\n&bull; Bar de smoothies e sucos org&acirc;nicos.&nbsp;<br />\r\n<br />\r\nGROVE &ndash; The Social Lounge<br />\r\n<br />\r\n&bull; &Aacute;rea de lazer de dois andares exclusiva para os moradores e seus convidados.<br />\r\n&bull; Sala de m&iacute;dia com TV de tela plana e de programa&ccedil;&atilde;o premium incluindo filmes, NFL, MLB, NBA, NHL, Copa do Mundo e da Liga de futebol, esportes NCAA e muito mais.&nbsp;<br />\r\n&bull; Mesa de bilhar full-size.&nbsp;<br />\r\n&bull; Mesas de Poker, mesas de jogos de tabuleiro para damas, xadrez e outros favoritos.&nbsp;<br />\r\n&bull; Biblioteca com livros, revistas populares e jornais locais e internacionais.&nbsp;<br />\r\n&bull; Internet wi-fi de alta velocidade por toda parte.</p>\r\n', 0x352e6a7067, 'Apartment', 'the-harbor-aventura', '1', '1', 'por'),
('55842fac-ce80-4b84-8755-02acc0a80084', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-19 17:05:16', '2015-06-19 17:43:57', 'PARAMOUNT MIAMI WORLDCENTER', '<h2>OPINI&Atilde;O SOBRE O PARAMOUNT MIAMI WORLDCENTER - MIAMI DOWNTOWN, FLORIDA</h2>\r\n\r\n<p>Projetado por Elkus Manfredi, Paramount oferecer&aacute; uma variedade de amplas resid&ecirc;ncias de luxo. As unidades possuem teto com 3 metros de altura a partir do ch&atilde;o, um elevador privado e terra&ccedil;os de 3 ou 4.30 metros. O projeto tamb&eacute;m inclui 16 villas, com cerca de 279 m&sup2; de espa&ccedil;o interior, piscina privada e jacuzzi. Acima do Shopping Center, o deck de instala&ccedil;&otilde;es de 6 hectares vai incluir piscinas, centro de fitness de ponta, spa, anfiteatro e parque para animais dom&eacute;sticos. Paramount Worldcenter ter&aacute; tamb&eacute;m uma piscina, bar e jacuzzi em um espa&ccedil;o de instala&ccedil;&otilde;es separado, localizado no &uacute;ltimo piso.&nbsp;<br />\r\n<br />\r\n<strong>Sobre o Miami World Center</strong>&nbsp;<br />\r\n<br />\r\nCom imponente arquitetura, lojas de departamentos dominantes no mercado, restaurantes de chef renomados e varejistas best-in-class, Miami Worldcenter &eacute; desenvolvido pela Forbes Company, um propriet&aacute;rio reconhecido nacionalmente, desenvolvedor e gerente de distintos centros comerciais regionais, e Taubman Centers, um fundo de investimento imobili&aacute;rio que possui, desenvolve, adquire e opera centros comerciais regionais a n&iacute;vel internacional, em conjunto com o desenvolvedor master de Miami Worldcenter, Miami Worldcenter Associates.&nbsp;<br />\r\n<br />\r\nLocalizado na porta de tudo que Miami tem para oferecer, o projeto de dez blocos est&aacute; situado imediatamente ao norte do Central Business District, que se estende entre 2nd Avenue e Miami Avenue at&eacute; a 11th Street. Miami Worldcenter est&aacute; em estreita proximidade com o aeroporto, porto, ferrovia e estradas.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO PARAMOUNT MIAMI WORLDCENTER - MIAMI DOWNTOWN, FLORIDA</h2>\r\n\r\n<p><strong>Amenidades do 9&ordm; andar</strong><br />\r\n&bull; Conservat&oacute;rio<br />\r\n&bull; Sal&atilde;o de Recrea&ccedil;&atilde;o<br />\r\n&bull; Lounge ao ar livre<br />\r\n&bull; State-of-the-art Fitness Center<br />\r\n&bull; Est&uacute;dio de Boxe<br />\r\n&bull; &Aacute;rea de Aer&oacute;bica<br />\r\n&bull; Salas de Tratamento<br />\r\n&bull; Sal&atilde;o de Cabelereiros e Manicure<br />\r\n&bull; Jardins de Banho Outdoor<br />\r\n&bull; Sala Play Kids<br />\r\n&bull; Sala de Video Games<br />\r\n&bull; Sal&atilde;o Social (mesa de bilhar, etc.)<br />\r\n&bull; Karaoke / Sala de Jam<br />\r\n&bull; Est&uacute;dio de Grava&ccedil;&atilde;o<br />\r\n<br />\r\n<strong>Amenidades do 10&ordm; andar</strong><br />\r\n&bull; Piscinas de estilo Resort com cabanas na piscina<br />\r\n&bull; Trilhas para pedestres<br />\r\n&bull; &Aacute;reas de piquenique e churrasco<br />\r\n<br />\r\n<strong>Amenidades do Skyview Yacht Deck localizado no topo da Paramount Miami Worldcenter</strong><br />\r\n&bull; Sal&atilde;o Skyview<br />\r\n&bull; Piscina<br />\r\n&bull; Bar<br />\r\n&bull; Deck de Yoga<br />\r\n<br />\r\n<strong>Caracter&iacute;sticas das Resid&ecirc;ncias</strong><br />\r\n&bull; Acesso por elevador privado com foyers privados<br />\r\n&bull; Tetos de 10 p&eacute;s em todas espa&ccedil;os de living<br />\r\n&bull; Salas de estar ao ar livre, com terra&ccedil;os de 11 p&eacute;s ou 14 p&eacute;s de profundidade<br />\r\n&bull; Grandes espa&ccedil;os de entretenimento<br />\r\n&bull; Cozinhas europeias de designer<br />\r\n&bull; Chuveiros de Chuva<br />\r\n&bull; Banheiras de hidromassagem<br />\r\n&bull; Lavandarias de tamanho full-size<br />\r\n&bull; Est&uacute;dios de lock-out (em 3 quartos de resid&ecirc;ncias)<br />\r\n&bull; PARAMOUNT Mobile App<br />\r\n<br />\r\nTHE MALL AT MIAMI WORLDCENTER<br />\r\nThe Mall at Miami Worldcenter possui 765 mil p&eacute;s quadrados de varejo best-in-class, restaurantes destino e entretenimento emocionante, assim como a 120.000 sf Bloomingdale&#39;s de 120.000 p&eacute;s quadrados e a Macy&#39;s de 195.000 p&eacute;s quadrados. Tudo no local mais acess&iacute;vel na regi&atilde;o.&nbsp;<br />\r\n<br />\r\n7TH STREET PROMENADE<br />\r\n90.000 p&eacute;s quadrados de lojas especializadas, restaurantes e v&aacute;rias torres residenciais que unem-se ao hotel e ao centro de conven&ccedil;&otilde;es ao The Mall at Miami Worldcenter.&nbsp;<br />\r\n<br />\r\nMARRIOTT MARQUIS HOTEL &amp; CONVENTION CENTER<br />\r\nO Marriot Marquis, um deslumbrante hotel de 2.000 quartos e centro de conven&ccedil;&otilde;es de 600.000 p&eacute;s quadrados, ligando Miami Worldcenter a um fluxo constante de tr&aacute;fego.&nbsp;<br />\r\n<br />\r\n1200 UNIDADES RESIDENCIAIS DE LUXO<br />\r\nV&aacute;rias torres residenciais com 1.200 unidades de luxo.</p>\r\n', 0x342e6a7067, 'Apartment', 'paramount-miami-worldcenter', '1', '1', 'por'),
('5585dc1b-44d4-45c1-aa81-1b4ad071a87d', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-20 14:33:15', '2015-06-20 14:33:15', 'BRICKELL CITYCENTRE - MIAMI', '<h2>OPINI&Atilde;O SOBRE O BRICKELL CITYCENTRE - MIAMI BRICKELL, FLORIDA</h2>\r\n\r\n<p>Verde, inovador, e o novo cora&ccedil;&atilde;o do bairro Brickell em Miami, os 5,4 milh&otilde;es de p&eacute;s quadrados de propriedade de uso misto do Brickell CityCentre ir&atilde;o transformar n&atilde;o s&oacute; o layout do centro da cidade, mas traz consigo o luxo em residencias, no varejo e no mercado de viagens at&eacute; ent&atilde;o desconhecido dentro deste centro comercial e banc&aacute;rio de renome mundial em Miami.<br />\r\n<br />\r\nBrickell CityCentre ser&aacute; composto de seis torres, incluindo 520 mil p&eacute;s quadrados de lojas e de espa&ccedil;o de alimenta&ccedil;&atilde;o, um luxuoso hotel de 243 quartos, 93 apartamentos de alto padr&atilde;o, e 820 apartamentos distribu&iacute;dos em duas torres residenciais. Os apartamentos ocupar&atilde;o cerca de 1.128 milh&otilde;es de p&eacute;s quadrados do projeto e estar&atilde;o localizados de esquina, um de frente para a SW 1st Avenue interse&ccedil;&atilde;o SW 8th Street e o outro de frente para a Esta&ccedil;&atilde;o Metromover Eighth Street Miami, na esquina da Brickell Plaza e da SE 6th Street. As duas torres variam em altura de 1.500 p&eacute;s para pouco mais de 2.500 p&eacute;s, que comp&otilde;em cerca de 40 por cento do espa&ccedil;o bruto global de todo o projeto. As torres de condom&iacute;nio s&atilde;o parte da Fase I do projeto Brickell CityCentre, que come&ccedil;ou a ser constru&iacute;do no final de 2012 e est&atilde;o previstos para abrir de 2015.<br />\r\n<br />\r\nAl&eacute;m de apartamentos de luxo com espa&ccedil;os de living, edif&iacute;cio de escrit&oacute;rios e um shopping center enorme, o projeto, agora em sua fase de pr&eacute;-constru&ccedil;&atilde;o, inclui tamb&eacute;m um centro m&eacute;dico combinado e a um centro de bem-estar com cerca de 100.000 p&eacute;s quadrados. O Brickell CityCentre tamb&eacute;m &eacute; um hotel de luxo com 293 quartos e 93 apartamentos de luxo para residentes tempor&aacute;rios. Como parte da Fase I do projeto de desenvolvimento de mais de US$ 1 bilh&otilde;es, o hotel abrir&aacute; suas portas em algum momento de 2015, e est&aacute; contando com o fato do Brickell CityCentre estar na vanguarda de uma revitaliza&ccedil;&atilde;o urbana do bairro de Brickell e sua transforma&ccedil;&atilde;o em um destino chave comercial, financeiro e de lazer em Miami para os visitantes de todo o mundo. O hotel ir&aacute; colocar os clientes no centro de uma comunidade de arquitetura de edif&iacute;cios de escrit&oacute;rios de arranha-c&eacute;us, centros de bem-estar, paisagismo com controle climatizado state-of-the-art, e grandes experi&ecirc;ncias de varejo. O centro de bem-estar e m&eacute;dico ir&aacute; atender uma variedade de necessidades de procedimentos m&eacute;dicos restauradores e de cuidados cosm&eacute;ticos, tornando-se um destino one-of-a-kind em Miami.<br />\r\n<br />\r\nA localiza&ccedil;&atilde;o central do projeto Brickell CityCentre e sua f&aacute;cil acessibilidade &agrave; esta&ccedil;&atilde;o ferrovi&aacute;ria Miami Metromover, bem como a Interstate 95 significa que ele ser&aacute; um alvo prim&aacute;rio para inquilinos de alto n&iacute;vel que procuram um espa&ccedil;o conveniente para morar e para profissionais exigindo sa&iacute;das r&aacute;pidas para Brickell e outras partes de Miami. Varejistas de luxo ter&atilde;o nada menos que 500 mil p&eacute;s quadrados de espa&ccedil;o de varejo ao ar livre para atender aos desejos das pessoas do bairro. O novo centro comercial ir&aacute; refletir os objetivos inovadores e ecol&oacute;gicos estabelecidos para todo o projeto desde a pr&eacute;-constru&ccedil;&atilde;o. N&atilde;o s&oacute; o centro comercial de seis andares na Brickell CityCentre, refor&ccedil;ado por &aacute;reas de compras ao ar livre espa&ccedil;osos, ser&aacute; significativamente maior do que o shopping Sawgrass Mills, e tamb&eacute;m ir&aacute; apresentar um sistema de controle de temperatura de clima &uacute;nico apelidado de &quot;Climate Ribbon&quot; (Faixa Clim&aacute;tica). Composta por uma superf&iacute;cie cont&iacute;nua de vidro, a&ccedil;o e tecido, e abra&ccedil;ando o CityCentre em sua totalidade, o Climate Ribbon ir&aacute; oferecer sombra para passarelas, lojas e restaurantes ao ar livre, escadas rolantes e terra&ccedil;os para evitar a chuva e a luz solar, criando um fluxo de ar constante, a fim de otimizar temperaturas sem o uso de ar condicionado artificial.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO BRICKELL CITYCENTRE - MIAMI BRICKELL, FLORIDA</h2>\r\n\r\n<p>DESTAQUES<br />\r\n<br />\r\n&bull; 9,1 hectares ao longo South Miami Avenue entre Eighth Street e Sixth Street.<br />\r\n&bull; 5,4 milh&otilde;es de p&eacute;s quadrados de escrit&oacute;rios, resid&ecirc;ncias, hotel, varejo e espa&ccedil;o de entretenimento, al&eacute;m de um estacionamento de dois n&iacute;veis no subsolo que se estende por sete hectares abaixo da propriedade.<br />\r\n&bull; Uma caracter&iacute;stica arquitet&ocirc;nica ambientalmente progressiva inovadora &lsquo;Climate Ribbon&rsquo; que ir&aacute; fornecer o controle do clima inovador para que os clientes possam caminhar com conforto entre lojas e restaurantes.<br />\r\n&bull; Incorpora centros de transporte chave com o Miami Metromover e acesso f&aacute;cil &agrave; Interstate 95.<br />\r\n&bull; Fase II : Pr&eacute;dio de escrit&oacute;rios.<br />\r\n<br />\r\nESTAT&Iacute;STICAS<br />\r\n<br />\r\n&bull; 520 mil p&eacute;s quadrados de centro comercial<br />\r\n&bull; 120 mil p&eacute;s espa&ccedil;o de escrit&oacute;rio<br />\r\n&bull; 120 mil p&eacute;s quadrados de centro de bem-estar<br />\r\n&bull; 800 apartamentos em duas torres<br />\r\n&bull; 243 quartos de hotel<br />\r\n&bull; 93 apartamentos de luxo com servi&ccedil;os<br />\r\n&bull; 3.100 vagas de estacionamento</p>\r\n', 0x31312e6a7067, 'Apartment', 'brickell-citycentre-miami', '1', '0', 'por'),
('5585e091-d24c-4178-8470-335ad071a87d', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-20 14:52:17', '2015-06-20 14:52:32', 'PARQUE TOWERS AT ST. TROPEZ', '<h2>OPINI&Atilde;O SOBRE O PARQUE TOWERS AT ST. TROPEZ - SUNNY ISLES, FLORIDA</h2>\r\n\r\n<p>Constru&iacute;do por J.Milton and Associates, este novo projeto est&aacute; localizado na 330 Sunny Isles Blvd, em Sunny Isles. O projeto compreende duas torres boutique de 26 andares com total de 160 unidades por torre, com a inaugura&ccedil;&atilde;o prevista para o final de 2015. Parque Towers vai oferecer duas op&ccedil;&otilde;es de planta: unidades de 2 e 3 quartos, que variam em tamanho de 1799 a 2400 p&eacute;s quadrados. Parque Towers &eacute; um projeto high-end, com todas as comodidades e servi&ccedil;os surpreendentes.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO PARQUE TOWERS AT ST. TROPEZ - SUNNY ISLES, FLORIDA</h2>\r\n\r\n<p>&bull; Cigar Room<br />\r\n&bull; Piano Room<br />\r\n&bull; Business Center&nbsp;<br />\r\n&bull; Sala de Por-do-Sol&nbsp;<br />\r\n&bull; Cinema: 25 lugares<br />\r\n&bull; Sala de Billiard&nbsp;<br />\r\n&bull; Hotel Suites (14) - Cerca de 800 p&eacute;s quadrados&nbsp;<br />\r\n&bull; Brinquedoteca (Children Clubhouse)<br />\r\n&bull; Piscina<br />\r\n&bull; Piscina de Resist&ecirc;ncia&nbsp;<br />\r\n&bull; Jacuzzi<br />\r\n&bull; Centro de aluguel de bicicleta (com cart&atilde;o magn&eacute;tico)&nbsp;<br />\r\n&bull; Servi&ccedil;o de limousine<br />\r\n&bull; Manuten&ccedil;&atilde;o de Servi&ccedil;os&nbsp;<br />\r\n&bull; Restaurante na piscina: Cafe-da-manha-Almo&ccedil;o-Jantar<br />\r\n&bull; Dep&oacute;sitos refrigerados: 3 &ordm; andar / 5 x 5-4 p&eacute;s de altura<br />\r\n&bull; Sal&atilde;o de festas: 1 &ordm; andar<br />\r\n&bull; Academia: 5.000 p&eacute;s quadrados</p>\r\n', 0x31362e6a7067, 'Apartment', 'parque-towers-at-st-tropez', '1', '1', 'por'),
('5585e57d-f7f0-4725-ba15-4ab0d071a87d', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-20 15:13:17', '2015-06-20 15:13:17', 'CHAMPIONSGATE - ORLANDO', '<h2>OPINI&Atilde;O SOBRE O CHAMPIONSGATE - ORLANDO, FLORIDA</h2>\r\n\r\n<p>Como destino tur&iacute;stico e comercial privilegiado de Orlando - que abrange cerca de 1.500 hectares ao sudoeste de The Walt Disney World Resort - ChampionsGate&reg; recebe os visitantes pela sa&iacute;da da I-4 com linhas imponentes de palmeiras muito altas por tr&aacute;s dos port&otilde;es duplos lindamente desenhados. Com 36 buracos de golfe de campeonato projetados pelo campe&atilde;o internacional golfe Greg Norman, ChampionsGate &eacute; como nenhum outro resort de golfe do mundo. O resort de golfe possui tamb&eacute;m um clube de 35.000 p&eacute;s quadrados, que possui uma loja de artigos esportivos, instala&ccedil;&otilde;es para banquetes de servi&ccedil;o completo para at&eacute; 300 pessoas e um bar com servi&ccedil;o completo.<br />\r\n<br />\r\nDavid Leadbetter - o instrutor de muitos golfistas profissionais mundialmente famosos, incluindo Nick Price, Ernie Els, Michelle Wie, Trevor Immelman, Ian Poulter e Greg Norman - escolheu ChampionsGate&reg; para ser sua sede mundial para o The Leadbetter Golf Academy.&nbsp;<br />\r\n<br />\r\nChampionsGate j&aacute; possui dois campos de golfe de campeonato e est&atilde;o em curso nas primeiras duas novas comunidades, oferecendo mais um de 18 buracos de golfe, v&aacute;rias Clubhouses, Parque Aqu&aacute;tico, 8 campos de t&ecirc;nis, restaurantes, bares, etc. Quando completou os desenvolvimentos combinados em ChampionsGate contar&aacute; com mais de 5 mil casas, 54 buracos de golfe, al&eacute;m de uma escola prim&aacute;ria e um parque, hotel de 5 estrelas, comercial, varejo, lojas e restaruants.&nbsp;<br />\r\n<br />\r\nChampionsGate &eacute; bem conhecida pela sua localiza&ccedil;&atilde;o popular, na sa&iacute;da 58 da I-4. Localizado a poucos minutos dos mundialmente famosos parques da Disney na Fl&oacute;rida, da Universal Studios e da Legoland. Estando no cora&ccedil;&atilde;o da Fl&oacute;rida, sua localiza&ccedil;&atilde;o possibilita viagens de costa a costa de forma mais f&aacute;cil e r&aacute;pida. Apenas uma pequena viagem pode lev&aacute;-lo para a costa leste da Fl&oacute;rida, para aproveitar as ondas e as areias.&nbsp;<br />\r\n<br />\r\nPerto de todas as principais atra&ccedil;&otilde;es e f&aacute;cil acesso &agrave; Space Coast e The Gulf, ChampionsGate j&aacute; garantiu a sua posi&ccedil;&atilde;o como um destino privilegiado na &aacute;rea de Orlando.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO CHAMPIONSGATE - ORLANDO, FLORIDA</h2>\r\n\r\n<p><strong>The Country Club</strong><br />\r\nThe Country Club at ChampionsGate oferece um resort de alta qualidade com uma experi&ecirc;ncia real de clube de campo. Esta comunidade ir&aacute; incluir 600-800 casas unifamiliares, moradias e condom&iacute;nios e um clube de 30.000 p&eacute;s quadrados, The Plaza, com restaurantes, piscinas e um centro de fitness. A poucos minutos da Disney, The Country Club at ChampionsGate &eacute; uma casa perfeita longe de casa.&nbsp;<br />\r\n<br />\r\n<strong>The Retreat</strong><br />\r\nThe Retreat at ChampionsGate &eacute; voltado para o mercado dom&eacute;stico de aluguel de curta dura&ccedil;&atilde;o e f&eacute;rias e entrega o olhar e a sensa&ccedil;&atilde;o de um resort de luxo direto de fora de sua janela. O condom&iacute;nio ser&aacute; composto de 600-700 casas unifamiliares para serem vendidos como resorts de aluguel de curto prazo, o Oasis, uma casa do clube 20.000 p&eacute;s quadrados que inclui piscina do resort e parque aqu&aacute;tico infantil.&nbsp;<br />\r\n<br />\r\n<strong>The Vistas</strong><br />\r\n382 Casas Condos / Town homes / Golf Casas com vista para 54 buracos de golfe.</p>\r\n', 0x666f746f342e706e67, 'House', 'championsgate-orlando', '1', '0', 'por');

-- --------------------------------------------------------

--
-- Estrutura da tabela `structures`
--

CREATE TABLE IF NOT EXISTS `structures` (
  `id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `dribbble` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `status` char(1) DEFAULT '0',
  `language` varchar(20) DEFAULT 'eng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `structures`
--

INSERT INTO `structures` (`id`, `created`, `modified`, `facebook`, `google_plus`, `twitter`, `pinterest`, `dribbble`, `linkedin`, `instagram`, `address`, `email`, `phone`, `fax`, `status`, `language`) VALUES
('5584578c-b5fc-4f32-a2f7-02acd56dfdae', '2015-06-19 19:55:24', '2015-06-19 15:03:59', '123', '123', '123', '123', '123', '123', NULL, NULL, 'sales@realtykaza.com', '+399 (500) 321 9548', '+399 (500) 321 9548', '1', 'eng'),
('55845b88-4888-4871-891b-02acd56dfdae', '2015-06-19 20:12:24', '2015-06-23 12:52:31', 'https://www.facebook.com/kazainternationalrealty', '', '', '', '', '', 'https://instagram.com/kazainternationalrealty', '', 'sales@realtykaza.com', '+1 305-414-5292', '+1 305-414-5292', '1', 'por');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL DEFAULT 'First Access',
  `role` enum('Administrators','Agents','Guests') NOT NULL DEFAULT 'Guests',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo_file_name` blob,
  `description` text,
  `status` tinyint(1) DEFAULT '1',
  `position` int(11) NOT NULL DEFAULT '0',
  `lembrete_pergunta` varchar(255) DEFAULT NULL,
  `lembrete_resposta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `username`, `password`, `role`, `name`, `email`, `photo_file_name`, `description`, `status`, `position`, `lembrete_pergunta`, `lembrete_resposta`) VALUES
('55842d6a-a118-4aeb-8dab-02acd56dfdae', '2015-06-19 16:55:38', '2015-06-19 16:55:38', 'rogerio_1', '0be84d273f7b91498f833e0f3330f9b2d9c3365e', 'Guests', 'Rogerio Pontes', 'rogerio@designlab.com.br', NULL, NULL, 1, 0, 'Qual é a sua cor favorita?', 'blue'),
('55842dff-ca0c-4ef2-ab0d-02acc0a80084', '2015-06-19 16:58:07', '2015-06-19 16:58:07', 'Kaza23', 'bef43e896bc3e21c6b615a359e9f8d7b6bb6d3f4', 'Guests', 'Kaza Realty', 'paulo@realtykaza.com', NULL, NULL, 1, 0, 'Qual é a sua cor favorita?', 'amarelo');
