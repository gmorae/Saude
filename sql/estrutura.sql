-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Maio-2019 às 00:13
-- Versão do servidor: 5.5.64-MariaDB-1ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `gu1700928`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estrutura`
--

CREATE TABLE IF NOT EXISTS `estrutura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `estrutura`
--

INSERT INTO `estrutura` (`id`, `titulo`, `texto`) VALUES
(1, 'Sala de espera', 'Esse espaço é designado para os acompanhantes, lá temos 3 toaletes para atender todas as necessidades de nossos clientes. Além disso a sala de espera oferece um café para quem aguarda a futura mamãe'),
(2, 'Recepção', 'Lá nossos atendentes estarão à disposição seja qual for a sua dúvida e de prontidão para respondê-la.'),
(3, 'Sala das crianças', 'Disponibilizamos essa área para os pequeninos enquanto suas mães ou familiares fazem algum tratamento. O espaço pode ser vigiado através de sua estrutura e apresenta vários brinquedos '),
(4, 'Sala de massagem e acupuntura', 'Essa é a sala mais tranquila de toda a clínica, focamos em manter a sua calma e tranquilidade como um de seus maiores objetivos durante todo o processo da gravidez. Para isso, nossa clínica apresenta um espaço equipado  e  confortável.'),
(5, 'Sala de pilates', 'Área ampla designada para receber grupos de mães. Apresenta colchonetes e diversos equipamentos específicos para qualificar nosso atendimento.'),
(6, 'Orientações posturais', 'Esse espaço disponibiliza a realização de inúmeros exercícios em grupos para auxiliar nas dores, para compartilhar experiências e ajudar aquelas mamães de primeira viagem '),
(7, 'Escritorio', 'Para uso dos funcionários em caso de reuniões  '),
(8, 'Depósito', 'A ser utilizado exclusivamente para armazenamento dos produtos, que serão utilizados na clínica'),
(9, 'Sala de estética', 'Apresentamos diversos modos de evitar as indesejáveis celulites e estrias a partir de hidratantes e outro procedimentos.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
