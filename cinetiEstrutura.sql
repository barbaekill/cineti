-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 16:41
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
(481, 0, 0, 0, 1),
(482, 0, 1, 0, 1),
(483, 0, 2, 0, 1),
(484, 0, 3, 0, 1),
(485, 0, 4, 0, 1),
(486, 0, 5, 0, 1),
(487, 0, 6, 0, 1),
(488, 0, 7, 0, 1),
(489, 0, 8, 0, 1),
(490, 0, 9, 0, 1),
(491, 0, 10, 0, 1),
(492, 0, 11, 0, 1),
(493, 0, 12, 0, 1),
(494, 0, 13, 0, 1),
(495, 0, 14, 0, 1),
(496, 0, 15, 0, 1),
(497, 1, 0, 0, 1),
(498, 1, 1, 0, 1),
(499, 1, 2, 0, 1),
(500, 1, 3, 0, 1),
(501, 1, 4, 0, 1),
(502, 1, 5, 0, 1),
(503, 1, 6, 0, 1),
(504, 1, 7, 0, 1),
(505, 1, 8, 0, 1),
(506, 1, 9, 0, 1),
(507, 1, 10, 0, 1),
(508, 1, 11, 0, 1),
(509, 1, 12, 0, 1),
(510, 1, 13, 0, 1),
(511, 1, 14, 0, 1),
(512, 1, 15, 0, 1),
(513, 2, 0, 0, 1),
(514, 2, 1, 0, 1),
(515, 2, 2, 0, 1),
(516, 2, 3, 0, 1),
(517, 2, 4, 0, 1),
(518, 2, 5, 0, 1),
(519, 2, 6, 0, 1),
(520, 2, 7, 0, 1),
(521, 2, 8, 0, 1),
(522, 2, 9, 0, 1),
(523, 2, 10, 0, 1),
(524, 2, 11, 0, 1),
(525, 2, 12, 0, 1),
(526, 2, 13, 0, 1),
(527, 2, 14, 0, 1),
(528, 2, 15, 0, 1),
(529, 3, 0, 0, 1),
(530, 3, 1, 0, 1),
(531, 3, 2, 0, 1),
(532, 3, 3, 0, 1),
(533, 3, 4, 0, 1),
(534, 3, 5, 0, 1),
(535, 3, 6, 0, 1),
(536, 3, 7, 0, 1),
(537, 3, 8, 0, 1),
(538, 3, 9, 0, 1),
(539, 3, 10, 0, 1),
(540, 3, 11, 0, 1),
(541, 3, 12, 0, 1),
(542, 3, 13, 0, 1),
(543, 3, 14, 0, 1),
(544, 3, 15, 0, 1),
(545, 4, 0, 0, 1),
(546, 4, 1, 0, 1),
(547, 4, 2, 0, 1),
(548, 4, 3, 0, 1),
(549, 4, 4, 0, 1),
(550, 4, 5, 0, 1),
(551, 4, 6, 0, 1),
(552, 4, 7, 0, 1),
(553, 4, 8, 0, 1),
(554, 4, 9, 0, 1),
(555, 4, 10, 0, 1),
(556, 4, 11, 0, 1),
(557, 4, 12, 0, 1),
(558, 4, 13, 0, 1),
(559, 4, 14, 0, 1),
(560, 4, 15, 0, 1);

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
(1, 481, 1),
(1, 482, 1),
(1, 483, 1),
(1, 484, 1),
(1, 485, 1),
(1, 486, 1),
(1, 487, 1),
(1, 488, 1),
(1, 489, 1),
(1, 490, 1),
(1, 491, 1),
(1, 492, 1),
(1, 493, 1),
(1, 494, 1),
(1, 495, 1),
(1, 496, 1),
(1, 497, 1),
(1, 498, 1),
(1, 499, 1),
(1, 500, 1),
(1, 501, 1),
(1, 502, 1),
(1, 503, 1),
(1, 504, 1),
(1, 505, 1),
(1, 506, 1),
(1, 507, 1),
(1, 508, 1),
(1, 509, 1),
(1, 510, 1),
(1, 511, 1),
(1, 512, 1),
(1, 513, 1),
(1, 514, 1),
(1, 515, 1),
(1, 516, 1),
(1, 517, 1),
(1, 518, 1),
(1, 519, 1),
(1, 520, 1),
(1, 521, 1),
(1, 522, 1),
(1, 523, 1),
(1, 524, 1),
(1, 525, 1),
(1, 526, 1),
(1, 527, 1),
(1, 528, 1),
(1, 529, 1),
(1, 530, 1),
(1, 531, 1),
(1, 532, 1),
(1, 533, 1),
(1, 534, 1),
(1, 535, 1),
(1, 536, 1),
(1, 537, 1),
(1, 538, 1),
(1, 539, 1),
(1, 540, 1),
(1, 541, 1),
(1, 542, 1),
(1, 543, 1),
(1, 544, 1),
(1, 545, 1),
(1, 546, 1),
(1, 547, 1),
(1, 548, 1),
(1, 549, 1),
(1, 550, 1),
(1, 551, 1),
(1, 552, 1),
(1, 553, 1),
(1, 554, 1),
(1, 555, 1),
(1, 556, 1),
(1, 557, 1),
(1, 558, 1),
(1, 559, 1),
(1, 560, 1);

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
  `idAssento` int(11) NOT NULL,
  `meia` tinyint(1) NOT NULL DEFAULT '0'
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
  `destaque` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `anoLancamento`, `diretor`, `sinopse`, `tipo`, `nomeOriginal`, `nome`, `classificacao`, `duracaoMinutos`, `cartazImgPath`, `headerImgPath`, `destaque`) VALUES
(1, 2018, 'Anthony Russo', 'Thanos chega à Terra, disposto a reunir as Joias do Infinito. Para enfrentá-lo, os Vingadores precisam unir forças com os Guardiões da Galáxia.', 'Ação', 'Avengers: Infinity War', 'Vingadores: Guerra Infinita', 0, 200, 'filmeimgs/eNmGJvggGMK0W3C7AF1njAiSb9uFCgDqubTkCz5l.jpeg', 'filmeimgs/au8FpjR29TI2XfHDm3aKxlfKAZROgs9Wp84Dx5yG.jpeg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `idHorario` int(11) NOT NULL,
  `hora` tinyint(4) NOT NULL,
  `minuto` tinyint(4) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`idHorario`, `hora`, `minuto`, `deleted_at`) VALUES
(1, 18, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `idSala` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`idSala`, `tipo`, `nome`, `deleted_at`) VALUES
(1, 'Normal', 'A2', NULL);

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
  `idSala` int(11) NOT NULL,
  `ativa` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sessao`
--

INSERT INTO `sessao` (`idSessao`, `valorAssento`, `data`, `idFilme`, `idHorario`, `idSala`, `ativa`) VALUES
(1, '20.00', '2018-10-10', 1, 1, 1, 1);

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
(1, 'admin', 'root@root.com.br', '$2y$10$q1mcKLMLq66Jh7iALV36aeUFazEb1TBApC6ieHc5P6AmjPfzTDKDm', 2, NULL);

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
  MODIFY `idAssento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=561;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `idHorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `idSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sessao`
--
ALTER TABLE `sessao`
  MODIFY `idSessao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `assento_sessao_ibfk_2` FOREIGN KEY (`idSessao`) REFERENCES `sessao` (`idSessao`) ON DELETE CASCADE;

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
