-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2015 às 20:53
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
  `status` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agents`
--

INSERT INTO `agents` (`id`, `created`, `modified`, `photo_file_name`, `name`, `url`, `email`, `phone`, `cell_phone`, `fax`, `description`, `google_plus`, `facebook`, `twitter`, `instagram`, `status`) VALUES
('5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-18 17:28:54', '2015-06-18 23:11:52', 0x5061756c6f4c7972612e6a7067, 'Paulo Lyra', 'paulo-lyra', 'paulo@realtykaza.com', '900 123 456 789', '900 123 456 789', '900 123 456 789', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet est nec augue malesuada dictum. Nullam elementum dictum libero quis tristique. Aenean dictum, elit non rutrum aliquam, risus lacus interdum quam, eu lacinia diam dui ac urna. Nunc leo mauris...</p>\r\n', '', 'https://www.facebook.com/paulolyrajr', '', 'https://instagram.com/gus_ssilva/', '1');

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
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `propertie_id`, `created`, `modified`, `photo_file_name`, `description`, `status`, `position`) VALUES
('55831b64-9eb0-40a4-8ba4-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 21:26:28', '2015-06-19 17:41:36', 0x352e6a7067, '<p>The Harbour &eacute; um retiro privado de pura perfei&ccedil;&atilde;o de &aacute;guas costeiras calmas com luxuriantes jardins bot&acirc;nicos em cinco hectares de terra em frente &agrave; ba&iacute;a que podem tornar-se a sua nova ilha tropical privada. Este novo projeto possui 330 resid&ecirc;ncias de luxo em 2 torres de 25 andares cada, com elevador privativo, servi&ccedil;o completo de beach club, daybeds e lounges. Conta ainda com atividades de clube aquatico como paddleboards, caiaques, jetskis, mergulho, windsurfing, bicicletas e muito mais.</p>\r\n', '1', 1),
('5584332f-bc84-4ca2-ad5c-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:20:15', '2015-06-19 17:41:36', 0x342e6a7067, '<p>Com imponente arquitetura, lojas de departamentos dominantes no mercado, restaurantes de chef renomados e varejistas best-in-class, Miami Worldcenter &eacute; desenvolvido pela Forbes Company, um propriet&aacute;rio reconhecido nacionalmente, desenvolvedor e gerente...</p>\r\n', '1', 2);

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
  `garages` int(11) DEFAULT NULL
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
('55842fad-9388-4858-9cec-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:05:17', '2015-06-19 17:25:48', 700000, '2,6', 3, 4, 1);

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
('5580912e-1274-4053-a31b-02acc0a80084', '5580912e-fc50-4a93-97c4-02acc0a80084', '2015-06-16 23:12:14', '2015-06-16 23:12:14', '', '', '', '', '', '', ''),
('55809161-eecc-4295-98e0-02acc0a80084', '55809161-dda8-409e-aad8-02acc0a80084', '2015-06-16 23:13:05', '2015-06-16 23:13:05', '', '', '', '', '', '', ''),
('55809170-daa8-4646-aa67-02acc0a80084', '55809170-c87c-4955-b858-02acc0a80084', '2015-06-16 23:13:20', '2015-06-16 23:13:20', '', '', '', '', '', '', ''),
('55809184-8f04-4e93-a56c-02acc0a80084', '55809184-5bd4-48af-892b-02acc0a80084', '2015-06-16 23:13:40', '2015-06-16 23:13:40', '', '', '', '', '', '', ''),
('55809190-05f0-4b54-b924-02acc0a80084', '5580918f-4d38-418f-bbce-02acc0a80084', '2015-06-16 23:13:52', '2015-06-16 23:13:52', '', '', '', '', '', '', ''),
('5580919c-87cc-4355-8953-02acc0a80084', '5580919c-c5b8-4bf3-8021-02acc0a80084', '2015-06-16 23:14:04', '2015-06-16 23:14:04', '', '', '', '', '', '', ''),
('558306c7-9750-4970-a064-02acc0a80084', '558306c7-cca8-4597-8573-02acc0a80084', '2015-06-18 19:58:31', '2015-06-18 20:11:06', 'Miami, FL, United States', '25.968042', '-80.14478600000001', 'Biscayne Boulevard, Aventura', 'Florida', 'Aventura', '33160'),
('55830df5-9274-4fb2-8263-02acd56dfdae', '55830df5-f514-4986-924a-02acd56dfdae', '2015-06-18 20:29:09', '2015-06-18 20:29:09', '', '', '', '', '', '', ''),
('5583193d-4bac-4951-a54c-02acd56dfdae', '5583193c-2eac-4f24-a3fa-02acd56dfdae', '2015-06-18 21:17:17', '2015-06-18 21:17:17', '', '', '', '', '', '', ''),
('55842fad-b5cc-4adf-a4dc-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:05:17', '2015-06-19 17:11:57', 'Miami, FL, United States', '25.7479599', '-80.26591789999998', '550 Biltmore Way, Coral Gables, FL 33134, Estados Unidos', 'Florida', 'Coral Gables', '33134');

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
('558437d1-e75c-42df-b453-02acc0a80084', '55842fac-ce80-4b84-8755-02acc0a80084', '2015-06-19 17:40:01', '2015-06-19 17:42:57', 0x342e6a7067, '1', 2);

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
  `featured` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `properties`
--

INSERT INTO `properties` (`id`, `agent_id`, `created`, `modified`, `name`, `description`, `photo_file_name`, `type`, `url`, `status`, `featured`) VALUES
('558306c7-cca8-4597-8573-02acc0a80084', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-18 19:58:31', '2015-06-19 17:24:01', 'THE HARBOR - AVENTURA', '<h2>OPINI&Atilde;O SOBRE O THE HARBOR - AVENTURA, FLORIDA</h2>\r\n\r\n<p>The Harbour &eacute; um retiro privado de pura perfei&ccedil;&atilde;o de &aacute;guas costeiras calmas com luxuriantes jardins bot&acirc;nicos em cinco hectares de terra em frente &agrave; ba&iacute;a que podem tornar-se a sua nova ilha tropical privada. Este novo projeto possui 330 resid&ecirc;ncias de luxo em 2 torres de 25 andares cada, com elevador privativo, servi&ccedil;o completo de beach club, daybeds e lounges. Conta ainda com atividades de clube aquatico como paddleboards, caiaques, jetskis, mergulho, windsurfing, bicicletas e muito mais.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO THE HARBOR - AVENTURA, FLORIDA</h2>\r\n\r\n<p>EDIF&Iacute;CIO<br />\r\n<br />\r\n&bull; 330 resid&ecirc;ncias de luxo em duas torres de 25 andares com elevadores privativos.&nbsp;<br />\r\n&bull; Lindo projeto arquitet&ocirc;nico desenvolvido pela empresa de renome mundial Corwil Architects.<br />\r\n&bull; Condom&iacute;nio fechado e privado.&nbsp;<br />\r\n&bull; Dram&aacute;tico &aacute;trio interior e exterior de v&aacute;rios andares com vista panor&acirc;mica para a piscina e para a ba&iacute;a.&nbsp;<br />\r\n&bull; Interiores elegantes e contempor&acirc;neos desenvolvidos por The Design Agency.&nbsp;<br />\r\n&bull; Marina privada planejada com rampas para barcos com acesso &agrave; ba&iacute;a e ao oceano.&nbsp;<br />\r\n&bull; Servi&ccedil;o completo privado Beach Club com sof&aacute;s e lounges.&nbsp;<br />\r\n&bull; Deck de relaxamento e bronzeamento.&nbsp;<br />\r\n&bull; Deslumbrante piscina de borda infinita com vista para a ba&iacute;a.&nbsp;<br />\r\n&bull; Restaurante e bar no interior e exterior acess&iacute;vel a partir do lobby, da piscina ao ar livre e da marina.&nbsp;<br />\r\n&bull; Aqua Activities Club totalmente equipado oferecendo pedalinhos, caiaques, jetskis, equipamento de snorkeling, windsurf, bicicletas e muito mais.&nbsp;<br />\r\n&bull; Trilhas da serenidade e esta&ccedil;&otilde;es de fitness Vita Course pela propriedade.&nbsp;<br />\r\n&bull; &Aacute;rea para crian&ccedil;as repleta de divers&atilde;o incluindo Water Play Zone, sal&atilde;o de jogos e playground.<br />\r\n&bull; Instala&ccedil;&otilde;es desportivas de t&ecirc;nis, squash, futebol, basquete e jogo aberto.&nbsp;<br />\r\n&bull; &Aacute;rea de reuni&otilde;es e churrasqueira grande ao ar livre.<br />\r\n&bull; Parque cercado para c&atilde;es.&nbsp;<br />\r\n&bull; Concierge exclusivo, limpeza a seco e servi&ccedil;os de lavanderia no local.&nbsp;<br />\r\n&bull; Estacionamento seguro coberto com vigil&acirc;ncia 24 horas e servi&ccedil;o de valet.&nbsp;<br />\r\n&bull; 24 horas de pessoal de seguran&ccedil;a e monitoramento de v&iacute;deo.&nbsp;<br />\r\n<br />\r\nLUSH &ndash; The Spa<br />\r\n<br />\r\n&bull; Spa privado com &aacute;reas de tratamento internas e externas.&nbsp;<br />\r\n&bull; Menu completo de tratamentos de spa e terapias dispon&iacute;veis.&nbsp;<br />\r\n&bull; Rodeado por jardins bot&acirc;nicos luxuosos e lindo paisagismo.&nbsp;<br />\r\n&bull; Piscinas quentes e frias de hidroterapia.&nbsp;<br />\r\n&bull; Sauna a vapor e sauna.<br />\r\n&bull; Vesti&aacute;rios masculinos e femininos separados.&nbsp;<br />\r\n<br />\r\nENERGY &ndash; The Fitness center<br />\r\n<br />\r\n&bull; Equipamentos State-of-the-art e diversas &aacute;reas de atividade.&nbsp;<br />\r\n&bull; Esteiras de n&iacute;vel profissional, m&aacute;quinas el&iacute;pticas, m&aacute;quinas de remo, bicicletas de spinning e outras m&aacute;quinas de cardio.&nbsp;<br />\r\n&bull; M&aacute;quinas de muscula&ccedil;&atilde;o da melhor marca e extensa cole&ccedil;&atilde;o livre de peso.&nbsp;<br />\r\n&bull; Est&uacute;dio aberto para yoga, Pilates, e aer&oacute;bica.&nbsp;<br />\r\n&bull; &Aacute;rea de pr&aacute;tica de yoga ao ar livre adicional.&nbsp;<br />\r\n&bull; Personal trainers certificados.&nbsp;<br />\r\n&bull; Aulas e atividades com instrutor dispon&iacute;veis.&nbsp;<br />\r\n&bull; Bar de smoothies e sucos org&acirc;nicos.&nbsp;<br />\r\n<br />\r\nGROVE &ndash; The Social Lounge<br />\r\n<br />\r\n&bull; &Aacute;rea de lazer de dois andares exclusiva para os moradores e seus convidados.<br />\r\n&bull; Sala de m&iacute;dia com TV de tela plana e de programa&ccedil;&atilde;o premium incluindo filmes, NFL, MLB, NBA, NHL, Copa do Mundo e da Liga de futebol, esportes NCAA e muito mais.&nbsp;<br />\r\n&bull; Mesa de bilhar full-size.&nbsp;<br />\r\n&bull; Mesas de Poker, mesas de jogos de tabuleiro para damas, xadrez e outros favoritos.&nbsp;<br />\r\n&bull; Biblioteca com livros, revistas populares e jornais locais e internacionais.&nbsp;<br />\r\n&bull; Internet wi-fi de alta velocidade por toda parte.</p>\r\n', 0x352e6a7067, 'Apartment', 'the-harbor-aventura', '1', '1'),
('55842fac-ce80-4b84-8755-02acc0a80084', '5582e3b6-7054-479d-acb3-02acd56dfdae', '2015-06-19 17:05:16', '2015-06-19 17:43:57', 'PARAMOUNT MIAMI WORLDCENTER', '<h2>OPINI&Atilde;O SOBRE O PARAMOUNT MIAMI WORLDCENTER - MIAMI DOWNTOWN, FLORIDA</h2>\r\n\r\n<p>Projetado por Elkus Manfredi, Paramount oferecer&aacute; uma variedade de amplas resid&ecirc;ncias de luxo. As unidades possuem teto com 3 metros de altura a partir do ch&atilde;o, um elevador privado e terra&ccedil;os de 3 ou 4.30 metros. O projeto tamb&eacute;m inclui 16 villas, com cerca de 279 m&sup2; de espa&ccedil;o interior, piscina privada e jacuzzi. Acima do Shopping Center, o deck de instala&ccedil;&otilde;es de 6 hectares vai incluir piscinas, centro de fitness de ponta, spa, anfiteatro e parque para animais dom&eacute;sticos. Paramount Worldcenter ter&aacute; tamb&eacute;m uma piscina, bar e jacuzzi em um espa&ccedil;o de instala&ccedil;&otilde;es separado, localizado no &uacute;ltimo piso.&nbsp;<br />\r\n<br />\r\n<strong>Sobre o Miami World Center</strong>&nbsp;<br />\r\n<br />\r\nCom imponente arquitetura, lojas de departamentos dominantes no mercado, restaurantes de chef renomados e varejistas best-in-class, Miami Worldcenter &eacute; desenvolvido pela Forbes Company, um propriet&aacute;rio reconhecido nacionalmente, desenvolvedor e gerente de distintos centros comerciais regionais, e Taubman Centers, um fundo de investimento imobili&aacute;rio que possui, desenvolve, adquire e opera centros comerciais regionais a n&iacute;vel internacional, em conjunto com o desenvolvedor master de Miami Worldcenter, Miami Worldcenter Associates.&nbsp;<br />\r\n<br />\r\nLocalizado na porta de tudo que Miami tem para oferecer, o projeto de dez blocos est&aacute; situado imediatamente ao norte do Central Business District, que se estende entre 2nd Avenue e Miami Avenue at&eacute; a 11th Street. Miami Worldcenter est&aacute; em estreita proximidade com o aeroporto, porto, ferrovia e estradas.</p>\r\n\r\n<h2>CARACTER&Iacute;STICAS DO PARAMOUNT MIAMI WORLDCENTER - MIAMI DOWNTOWN, FLORIDA</h2>\r\n\r\n<p><strong>Amenidades do 9&ordm; andar</strong><br />\r\n&bull; Conservat&oacute;rio<br />\r\n&bull; Sal&atilde;o de Recrea&ccedil;&atilde;o<br />\r\n&bull; Lounge ao ar livre<br />\r\n&bull; State-of-the-art Fitness Center<br />\r\n&bull; Est&uacute;dio de Boxe<br />\r\n&bull; &Aacute;rea de Aer&oacute;bica<br />\r\n&bull; Salas de Tratamento<br />\r\n&bull; Sal&atilde;o de Cabelereiros e Manicure<br />\r\n&bull; Jardins de Banho Outdoor<br />\r\n&bull; Sala Play Kids<br />\r\n&bull; Sala de Video Games<br />\r\n&bull; Sal&atilde;o Social (mesa de bilhar, etc.)<br />\r\n&bull; Karaoke / Sala de Jam<br />\r\n&bull; Est&uacute;dio de Grava&ccedil;&atilde;o<br />\r\n<br />\r\n<strong>Amenidades do 10&ordm; andar</strong><br />\r\n&bull; Piscinas de estilo Resort com cabanas na piscina<br />\r\n&bull; Trilhas para pedestres<br />\r\n&bull; &Aacute;reas de piquenique e churrasco<br />\r\n<br />\r\n<strong>Amenidades do Skyview Yacht Deck localizado no topo da Paramount Miami Worldcenter</strong><br />\r\n&bull; Sal&atilde;o Skyview<br />\r\n&bull; Piscina<br />\r\n&bull; Bar<br />\r\n&bull; Deck de Yoga<br />\r\n<br />\r\n<strong>Caracter&iacute;sticas das Resid&ecirc;ncias</strong><br />\r\n&bull; Acesso por elevador privado com foyers privados<br />\r\n&bull; Tetos de 10 p&eacute;s em todas espa&ccedil;os de living<br />\r\n&bull; Salas de estar ao ar livre, com terra&ccedil;os de 11 p&eacute;s ou 14 p&eacute;s de profundidade<br />\r\n&bull; Grandes espa&ccedil;os de entretenimento<br />\r\n&bull; Cozinhas europeias de designer<br />\r\n&bull; Chuveiros de Chuva<br />\r\n&bull; Banheiras de hidromassagem<br />\r\n&bull; Lavandarias de tamanho full-size<br />\r\n&bull; Est&uacute;dios de lock-out (em 3 quartos de resid&ecirc;ncias)<br />\r\n&bull; PARAMOUNT Mobile App<br />\r\n<br />\r\nTHE MALL AT MIAMI WORLDCENTER<br />\r\nThe Mall at Miami Worldcenter possui 765 mil p&eacute;s quadrados de varejo best-in-class, restaurantes destino e entretenimento emocionante, assim como a 120.000 sf Bloomingdale&#39;s de 120.000 p&eacute;s quadrados e a Macy&#39;s de 195.000 p&eacute;s quadrados. Tudo no local mais acess&iacute;vel na regi&atilde;o.&nbsp;<br />\r\n<br />\r\n7TH STREET PROMENADE<br />\r\n90.000 p&eacute;s quadrados de lojas especializadas, restaurantes e v&aacute;rias torres residenciais que unem-se ao hotel e ao centro de conven&ccedil;&otilde;es ao The Mall at Miami Worldcenter.&nbsp;<br />\r\n<br />\r\nMARRIOTT MARQUIS HOTEL &amp; CONVENTION CENTER<br />\r\nO Marriot Marquis, um deslumbrante hotel de 2.000 quartos e centro de conven&ccedil;&otilde;es de 600.000 p&eacute;s quadrados, ligando Miami Worldcenter a um fluxo constante de tr&aacute;fego.&nbsp;<br />\r\n<br />\r\n1200 UNIDADES RESIDENCIAIS DE LUXO<br />\r\nV&aacute;rias torres residenciais com 1.200 unidades de luxo.</p>\r\n', 0x342e6a7067, 'Apartment', 'paramount-miami-worldcenter', '1', '1');

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
  `email` varchar(70) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `status` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `structures`
--

INSERT INTO `structures` (`id`, `created`, `modified`, `facebook`, `google_plus`, `twitter`, `pinterest`, `dribbble`, `linkedin`, `email`, `phone`, `fax`, `status`) VALUES
('5584578c-b5fc-4f32-a2f7-02acd56dfdae', '2015-06-19 19:55:24', '2015-06-19 20:14:06', '123', '123', '123', '123', '123', '123', 'info@realtykaza.com', '+399 (500) 321 9548', '+399 (500) 321 9548', '1'),
('55845b88-4888-4871-891b-02acd56dfdae', '2015-06-19 20:12:24', '2015-06-19 20:12:31', '', '', '', '', '', '', '', '', '', '0');

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
  `lembrete_resposta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `username`, `password`, `role`, `name`, `email`, `photo_file_name`, `description`, `status`, `position`, `lembrete_pergunta`, `lembrete_resposta`) VALUES
('55842d6a-a118-4aeb-8dab-02acd56dfdae', '2015-06-19 16:55:38', '2015-06-19 16:55:38', 'rogerio_1', '0be84d273f7b91498f833e0f3330f9b2d9c3365e', 'Guests', 'Rogerio Pontes', 'rogerio@designlab.com.br', NULL, NULL, 1, 0, 'Qual é a sua cor favorita?', 'blue'),
('55842dff-ca0c-4ef2-ab0d-02acc0a80084', '2015-06-19 16:58:07', '2015-06-19 16:58:07', 'Kaza23', 'bef43e896bc3e21c6b615a359e9f8d7b6bb6d3f4', 'Guests', 'Kaza Realty', 'paulo@realtykaza.com', NULL, NULL, 1, 0, 'Qual é a sua cor favorita?', 'amarelo');

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

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
