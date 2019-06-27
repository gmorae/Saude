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
-- Estrutura da tabela `servico_fisio`
--

CREATE TABLE IF NOT EXISTS `servico_fisio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(1000) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `servico_fisio`
--

INSERT INTO `servico_fisio` (`id`, `titulo`, `texto`) VALUES
(1, 'Pilates', 'Os exercícios de pilates ajudam no fortalecimento dos músculos, na diminuição de dor lombar, melhoram a respiração e circulação sanguínea (evitando inchaços e retenção de líquidos, proporcionam maior disposição, preparam as mamães para o momento do parto e acabam acalmando o bebê. As sessões devem ser realizadas 2 vezes por semana com duração de 30 a 60 minutos. O fato de as sessões serem realizadas em conjunto, permite que as gestantes interajam e troquem informações sobre suas experiências e medos, ganhando maior confiança.\nÉ importante atentar-se a fatores de riscos e respeitar o limite de cada gestante, visto que nenhuma gestação é exatamente igual, exigem tratamentos específicos.'),
(2, 'Massagem', 'As massagens podem ser realizadas tanto no meses antecedentes ao parto quanto nos posteriores ao parto. Elas estimulam a circulação sanguínea, promovem relaxamento, diminuição de dores locais e drenagem linfática (recomendado apenas no pós parto). Deve-se tomar cuidado nos locais de aplicação das massagens, evitando o adiantamento do parto e cuidando para  não prejudicar o bebê.'),
(3, 'Acupuntura', 'A acupuntura deve ser realizada com muito cuidado para não afetar o bebê e não promover parto precoce. Ela traz benefícios como alívio de tensão muscular, diminuição de ansiedade, melhora da circulação sanguínea, reduz os enjoos e ameaças de aborto. No pós parto também reduz a tensão e estresse, além de estimular a produção de leite materno. \r\nExistem relatos de que fazer acupuntura durante a gestação faz com que nasçam bebês mais calmos e com menos cólicas.\r\nAssim como nas demais técnicas, a acupuntura também exige atenção à forma de aplicação para não afetar a gestação.'),
(4, 'Orientações posturais', 'A gestação é um momento em que as orientações posturais são de suma importância, já que as mulheres acabam tendo o seu centro de massa alterado o que gera, muitas vezes, inúmeras dores, alteração na marcha e incômodos ao realizar atividades diárias. Nossa clínica conta com um ambiente próprio para orientações e exercícios que promovam maior conforto e menores complicações durante os meses de gestação. Vale lembrar que por ser realizada em grupos, essa atividade promove interação e troca de informações entre as futuras mamães, amenizando as preocupações e medos.'),
(5, 'Estética', 'Serviço direcionado à clientes pós parto que procuram recuperar aspectos físicos que foram alterados durante a gestação, mais uma fez a drenagem linfática é válida, assim como tratamentos para amenizar estrias, flacidez, celulites, tratamentos de pele (afetada após tantas mudanças hormonais), entre outros procedimentos.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
