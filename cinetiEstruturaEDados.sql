-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2018 às 05:27
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento`
--

CREATE TABLE `assento` (
  `idAssento` int(11) NOT NULL,
  `linha` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `paraDeficiente` tinyint(1) NOT NULL,
  `idSala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assento`
--

INSERT INTO `assento` (`idAssento`, `linha`, `coluna`, `paraDeficiente`, `idSala`) VALUES
(81, 0, 0, 0, 7),
(82, 0, 1, 0, 7),
(83, 0, 2, 0, 7),
(84, 0, 3, 0, 7),
(85, 0, 4, 0, 7),
(86, 0, 5, 0, 7),
(87, 0, 6, 0, 7),
(88, 0, 7, 0, 7),
(89, 0, 8, 0, 7),
(90, 0, 9, 0, 7),
(91, 0, 10, 0, 7),
(92, 0, 11, 0, 7),
(93, 0, 12, 0, 7),
(94, 0, 13, 0, 7),
(95, 0, 14, 0, 7),
(96, 0, 15, 0, 7),
(97, 1, 0, 0, 7),
(98, 1, 1, 0, 7),
(99, 1, 2, 0, 7),
(100, 1, 3, 0, 7),
(101, 1, 4, 0, 7),
(102, 1, 5, 0, 7),
(103, 1, 6, 0, 7),
(104, 1, 7, 0, 7),
(105, 1, 8, 0, 7),
(106, 1, 9, 0, 7),
(107, 1, 10, 0, 7),
(108, 1, 11, 0, 7),
(109, 1, 12, 0, 7),
(110, 1, 13, 0, 7),
(111, 1, 14, 0, 7),
(112, 1, 15, 0, 7),
(113, 2, 0, 0, 7),
(114, 2, 1, 0, 7),
(115, 2, 2, 0, 7),
(116, 2, 3, 0, 7),
(117, 2, 4, 0, 7),
(118, 2, 5, 0, 7),
(119, 2, 6, 0, 7),
(120, 2, 7, 0, 7),
(121, 2, 8, 0, 7),
(122, 2, 9, 0, 7),
(123, 2, 10, 0, 7),
(124, 2, 11, 0, 7),
(125, 2, 12, 0, 7),
(126, 2, 13, 0, 7),
(127, 2, 14, 0, 7),
(128, 2, 15, 0, 7),
(129, 3, 0, 0, 7),
(130, 3, 1, 0, 7),
(131, 3, 2, 0, 7),
(132, 3, 3, 0, 7),
(133, 3, 4, 0, 7),
(134, 3, 5, 0, 7),
(135, 3, 6, 0, 7),
(136, 3, 7, 0, 7),
(137, 3, 8, 0, 7),
(138, 3, 9, 0, 7),
(139, 3, 10, 0, 7),
(140, 3, 11, 0, 7),
(141, 3, 12, 0, 7),
(142, 3, 13, 0, 7),
(143, 3, 14, 0, 7),
(144, 3, 15, 0, 7),
(145, 4, 0, 0, 7),
(146, 4, 1, 0, 7),
(147, 4, 2, 0, 7),
(148, 4, 3, 0, 7),
(149, 4, 4, 0, 7),
(150, 4, 5, 0, 7),
(151, 4, 6, 0, 7),
(152, 4, 7, 0, 7),
(153, 4, 8, 0, 7),
(154, 4, 9, 0, 7),
(155, 4, 10, 0, 7),
(156, 4, 11, 0, 7),
(157, 4, 12, 0, 7),
(158, 4, 13, 0, 7),
(159, 4, 14, 0, 7),
(160, 4, 15, 0, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento_sessao`
--

CREATE TABLE `assento_sessao` (
  `idSessao` int(11) NOT NULL,
  `idAssento` int(11) NOT NULL,
  `disponivel` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assento_sessao`
--

INSERT INTO `assento_sessao` (`idSessao`, `idAssento`, `disponivel`) VALUES
(1, 81, 1),
(1, 82, 1),
(1, 83, 1),
(1, 84, 1),
(1, 85, 1),
(1, 86, 1),
(1, 87, 1),
(1, 88, 1),
(1, 89, 1),
(1, 90, 1),
(1, 91, 1),
(1, 92, 1),
(1, 93, 1),
(1, 94, 1),
(1, 95, 1),
(1, 96, 1),
(1, 97, 1),
(1, 98, 1),
(1, 99, 1),
(1, 100, 1),
(1, 101, 1),
(1, 102, 1),
(1, 103, 1),
(1, 104, 1),
(1, 105, 1),
(1, 106, 1),
(1, 107, 1),
(1, 108, 1),
(1, 109, 1),
(1, 110, 1),
(1, 111, 1),
(1, 112, 1),
(1, 113, 1),
(1, 114, 1),
(1, 115, 1),
(1, 116, 1),
(1, 117, 1),
(1, 118, 1),
(1, 119, 1),
(1, 120, 1),
(1, 121, 1),
(1, 122, 1),
(1, 123, 1),
(1, 124, 1),
(1, 125, 1),
(1, 126, 1),
(1, 127, 1),
(1, 128, 1),
(1, 129, 1),
(1, 130, 1),
(1, 131, 1),
(1, 132, 1),
(1, 133, 1),
(1, 134, 1),
(1, 135, 1),
(1, 136, 1),
(1, 137, 1),
(1, 138, 1),
(1, 139, 1),
(1, 140, 1),
(1, 141, 1),
(1, 142, 1),
(1, 143, 1),
(1, 144, 1),
(1, 145, 1),
(1, 146, 1),
(1, 147, 1),
(1, 148, 1),
(1, 149, 1),
(1, 150, 1),
(1, 151, 1),
(1, 152, 1),
(1, 153, 1),
(1, 154, 1),
(1, 155, 1),
(1, 156, 1),
(1, 157, 1),
(1, 158, 1),
(1, 159, 1),
(1, 160, 1),
(2, 81, 1),
(2, 82, 1),
(2, 83, 1),
(2, 84, 1),
(2, 85, 1),
(2, 86, 1),
(2, 87, 1),
(2, 88, 1),
(2, 89, 1),
(2, 90, 1),
(2, 91, 1),
(2, 92, 1),
(2, 93, 1),
(2, 94, 1),
(2, 95, 1),
(2, 96, 1),
(2, 97, 1),
(2, 98, 1),
(2, 99, 1),
(2, 100, 1),
(2, 101, 1),
(2, 102, 1),
(2, 103, 1),
(2, 104, 1),
(2, 105, 1),
(2, 106, 1),
(2, 107, 1),
(2, 108, 1),
(2, 109, 1),
(2, 110, 1),
(2, 111, 1),
(2, 112, 1),
(2, 113, 1),
(2, 114, 1),
(2, 115, 1),
(2, 116, 1),
(2, 117, 1),
(2, 118, 1),
(2, 119, 1),
(2, 120, 1),
(2, 121, 1),
(2, 122, 1),
(2, 123, 1),
(2, 124, 1),
(2, 125, 1),
(2, 126, 1),
(2, 127, 1),
(2, 128, 1),
(2, 129, 1),
(2, 130, 1),
(2, 131, 1),
(2, 132, 1),
(2, 133, 1),
(2, 134, 1),
(2, 135, 1),
(2, 136, 1),
(2, 137, 1),
(2, 138, 1),
(2, 139, 1),
(2, 140, 1),
(2, 141, 1),
(2, 142, 1),
(2, 143, 1),
(2, 144, 1),
(2, 145, 1),
(2, 146, 1),
(2, 147, 1),
(2, 148, 1),
(2, 149, 1),
(2, 150, 1),
(2, 151, 1),
(2, 152, 1),
(2, 153, 1),
(2, 154, 1),
(2, 155, 1),
(2, 156, 1),
(2, 157, 1),
(2, 158, 1),
(2, 159, 1),
(2, 160, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(11) NOT NULL,
  `valorTotal` decimal(15,2) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idSessao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_assento`
--

CREATE TABLE `compra_assento` (
  `idCompra` int(11) NOT NULL,
  `idAssento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `idFilme` int(11) NOT NULL,
  `anoLancamento` int(11) NOT NULL,
  `diretor` varchar(255) NOT NULL,
  `sinopse` text NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nomeOriginal` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `classificacao` int(11) NOT NULL,
  `duracaoMinutos` int(11) NOT NULL,
  `cartazImgPath` varchar(250) DEFAULT NULL,
  `headerImgPath` varchar(250) NOT NULL,
  `destaque` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `anoLancamento`, `diretor`, `sinopse`, `tipo`, `nomeOriginal`, `nome`, `classificacao`, `duracaoMinutos`, `cartazImgPath`, `headerImgPath`, `destaque`) VALUES
(12, 2018, 'Sei la porra', 'Thanos chega à Terra, disposto a reunir as Joias do Infinito. Para enfrentá-lo, os Vingadores precisam unir forças com os Guardiões da Galáxia.', 'Ação', 'Vingadores: Guerra Infinita', 'Vingadores: Guerra Infinita', 0, 160, 'filmeimgs/hWF64F9zTL85z2lin6f448EAu2g0islcsko2CzP5.jpeg', 'filmeimgs/R1kYnYnBavizZ8O2RqoOeKydS0oxuwIgaEhUXds7.jpeg', 1),
(14, 2018, 'Eu', 'HAHAHAHAHAHHAHAHAHAHA', 'Terror', 'THIS FUCK', 'ESSAA PORRA', 10, 999, 'filmeimgs/GqfRkSmkBo60whjxvvNJnmi6gp3TWZ4NbUY5ZTg5.jpeg', 'filmeimgs/dodCfgfaIGf8Hyeii9de8uwXNkD9WLyahizKnUzz.jpeg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `idHorario` int(11) NOT NULL,
  `hora` tinyint(4) NOT NULL,
  `minuto` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`idHorario`, `hora`, `minuto`) VALUES
(16, 14, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `idSala` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`idSala`, `tipo`, `nome`) VALUES
(7, '3D', 'AB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `idSessao` int(11) NOT NULL,
  `valorAssento` decimal(15,2) NOT NULL,
  `data` date NOT NULL,
  `idFilme` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `idSala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessao`
--

INSERT INTO `sessao` (`idSessao`, `valorAssento`, `data`, `idFilme`, `idHorario`, `idSala`) VALUES
(1, '20.00', '2018-10-15', 12, 16, 7),
(2, '20.00', '2018-10-15', 12, 16, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `remember_token` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `password`, `tipo`, `remember_token`) VALUES
(6, 'Admin', 'root@root.com.br', '$2y$10$2wSdnDrUezaDOwUYyve0HuuEIbbHLFRaclAv0dCJ9y4AcCxRGtr62', 2, 'muo28veaIjmG2Hnfd8aHxD05YiDo5UpgtLVg0ZyvEEcmGYpqW7e6X6mvMMDS'),
(30, 'fg', 'fg', '$2y$10$evf5XcmbV5QTd5viI6KbRuuwGnwT0xH0Nf8o/GCRhzTM0pdblfT4K', 1, 'KlGw0KQcZagZRKAhwIkta3vXAdH3FXvHfOYGxkqMUDcBc2shzTPn1awetSu9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assento`
--
ALTER TABLE `assento`
  ADD PRIMARY KEY (`idAssento`),
  ADD KEY `idSala` (`idSala`);

--
-- Indexes for table `assento_sessao`
--
ALTER TABLE `assento_sessao`
  ADD KEY `idAssento` (`idAssento`),
  ADD KEY `idSessao` (`idSessao`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indexes for table `compra_assento`
--
ALTER TABLE `compra_assento`
  ADD KEY `idAssento` (`idAssento`),
  ADD KEY `idCompra` (`idCompra`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idFilme`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idHorario`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idSala`);

--
-- Indexes for table `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`idSessao`),
  ADD KEY `idFilme` (`idFilme`),
  ADD KEY `idHorario` (`idHorario`),
  ADD KEY `idSala` (`idSala`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assento`
--
ALTER TABLE `assento`
  MODIFY `idAssento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `idHorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `idSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sessao`
--
ALTER TABLE `sessao`
  MODIFY `idSessao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `assento`
--
ALTER TABLE `assento`
  ADD CONSTRAINT `assento_ibfk_1` FOREIGN KEY (`idSala`) REFERENCES `sala` (`idSala`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `assento_sessao`
--
ALTER TABLE `assento_sessao`
  ADD CONSTRAINT `assento_sessao_ibfk_1` FOREIGN KEY (`idAssento`) REFERENCES `assento` (`idAssento`),
  ADD CONSTRAINT `assento_sessao_ibfk_2` FOREIGN KEY (`idSessao`) REFERENCES `sessao` (`idSessao`);

--
-- Limitadores para a tabela `compra_assento`
--
ALTER TABLE `compra_assento`
  ADD CONSTRAINT `compra_assento_ibfk_1` FOREIGN KEY (`idAssento`) REFERENCES `assento` (`idAssento`),
  ADD CONSTRAINT `compra_assento_ibfk_2` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`idCompra`);

--
-- Limitadores para a tabela `sessao`
--
ALTER TABLE `sessao`
  ADD CONSTRAINT `sessao_ibfk_1` FOREIGN KEY (`idFilme`) REFERENCES `filme` (`idFilme`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessao_ibfk_2` FOREIGN KEY (`idHorario`) REFERENCES `horario` (`idHorario`) ON DELETE CASCADE,
  ADD CONSTRAINT `sessao_ibfk_3` FOREIGN KEY (`idSala`) REFERENCES `sala` (`idSala`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
