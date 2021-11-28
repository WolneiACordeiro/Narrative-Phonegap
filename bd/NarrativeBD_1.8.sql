-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para narrative
DROP DATABASE IF EXISTS `narrative`;
CREATE DATABASE IF NOT EXISTS `narrative` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `narrative`;

-- Copiando estrutura para tabela narrative.contausuario
DROP TABLE IF EXISTS `contausuario`;
CREATE TABLE IF NOT EXISTS `contausuario` (
  `idConta` int(11) NOT NULL AUTO_INCREMENT,
  `nomeConta` varchar(50) DEFAULT NULL,
  `emailConta` varchar(100) DEFAULT NULL,
  `senhaConta` varchar(50) DEFAULT NULL,
  `avatarUsuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idConta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela narrative.contausuario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `contausuario` DISABLE KEYS */;
INSERT INTO `contausuario` (`idConta`, `nomeConta`, `emailConta`, `senhaConta`, `avatarUsuario`) VALUES
	(1, 'Victor Barbosa', 'vbarbosa@gmail.com', '12344321', '2cc7a60606d59b102949e016b0ca5e36.jpg'),
	(2, 'Estevan Fernandes', 'estevamff@mail.com', '12341234', 'f76be11d920783306175659ceac49edb.jpg'),
	(3, 'Luis Cardoso', 'luis_cardoso@mail.com', '123123123', '316692d81ec0249c8a3cb00a5d06b495.jpg'),
	(4, 'Sophia Araujo', 'spsparaujo@mail.com', '12344321', '2b87168b5263da7e47c90a1157ded59b.jpg'),
	(5, 'Laura Lima', 'lauralima@gmail.com', '123321123', '40e4b4546d9380a26458300bdea7512c.jpg');
/*!40000 ALTER TABLE `contausuario` ENABLE KEYS */;

-- Copiando estrutura para tabela narrative.historia
DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `idHistoria` int(11) NOT NULL AUTO_INCREMENT,
  `tituloHistoria` varchar(150) DEFAULT NULL,
  `localHistoria` varchar(100) DEFAULT NULL,
  `cidadeHistoria` varchar(100) DEFAULT NULL,
  `estadoHistoria` varchar(100) DEFAULT NULL,
  `dataHistoria` varchar(50) DEFAULT NULL,
  `horaHistoria` varchar(50) DEFAULT NULL,
  `tagUm` varchar(50) DEFAULT NULL,
  `tagDois` varchar(50) DEFAULT NULL,
  `textoHistoria` longtext DEFAULT NULL,
  `idUsuarioHistoria` int(11) DEFAULT NULL,
  `latH` varchar(100) DEFAULT NULL,
  `longH` varchar(100) DEFAULT NULL,
  `favoritos` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idHistoria`),
  KEY `idConta_FK` (`idUsuarioHistoria`),
  CONSTRAINT `idConta_FK` FOREIGN KEY (`idUsuarioHistoria`) REFERENCES `contausuario` (`idConta`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela narrative.historia: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `historia` DISABLE KEYS */;
INSERT INTO `historia` (`idHistoria`, `tituloHistoria`, `localHistoria`, `cidadeHistoria`, `estadoHistoria`, `dataHistoria`, `horaHistoria`, `tagUm`, `tagDois`, `textoHistoria`, `idUsuarioHistoria`, `latH`, `longH`, `favoritos`, `foto`) VALUES
	(1, 'Camaradas: uma história mundial', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2021-01-20', '19:16:30', '#CAMARADAS', '#MUNDIAL', ' Percebemos, cada vez mais, que a complexidade dos estudos efetuados promove a alavancagem dos conhecimentos estratégicos para atingir a excelência. O empenho em analisar a consulta aos diversos militantes oferece uma interessante oportunidade para verificação das diretrizes de desenvolvimento para o futuro. No mundo atual, a mobilidade dos capitais internacionais facilita a criação das condições inegavelmente apropriadas.', 1, '-24.4889161642991', '-47.84110343547546', 122, '7979b20565e230de91d3fb4c2c0093cc.jpg'),
	(2, 'Ed. bela vista', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2020-05-23', '13:18:53', '#FALEI', '#LEVE', 'Pensando mais a longo prazo, o fenômeno da Internet promove a alavancagem das direções preferenciais no sentido do progresso. O que temos que ter sempre em mente é que a complexidade dos estudos efetuados auxilia a preparação e a composição das diretrizes de desenvolvimento para o futuro. No mundo atual, a consolidação das estruturas não pode mais se dissociar do sistema de participação geral. Não obstante, o comprometimento entre as equipes causa impacto indireto na reavaliação dos níveis de motivação departamental.', 3, '-24.48811649790291', '-47.84111205524632', 87, '1c2881dcc0bbc61a0f0d51106df8ded2.jpg'),
	(3, 'O que fazer com história? 14 dicas para aproveitar', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2019-09-13', '16:17:39', '#PENSE', '#NISSO', 'O incentivo ao avanço tecnológico, assim como o surgimento do comércio virtual cumpre um papel essencial na formulação do fluxo de informações. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a contínua expansão de nossa atividade não pode mais se dissociar dos conhecimentos estratégicos para atingir a excelência. Podemos já vislumbrar o modo pelo qual o acompanhamento das preferências de consumo auxilia a preparação e a composição do investimento em reciclagem técnica.', 1, '-24.4884108457368', '-47.8415767918284', 9, '6c3e293d4e0b669f091f742b222a12f0.jpg'),
	(12, 'Todas estas questões', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2017-11-15', '18:22:10', '#TODAS', '#CHUVA', 'Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a percepção das dificuldades prepara-nos para enfrentar situações atípicas decorrentes das condições inegavelmente apropriadas. Todavia, o fenômeno da Internet ainda não demonstrou convincentemente que vai participar na mudança dos níveis de motivação departamental. Gostaria de enfatizar que a complexidade dos estudos efetuados nos obriga à análise de todos os recursos funcionais envolvidos. A nível organizacional, a execução dos pontos do programa agrega valor ao estabelecimento dos métodos utilizados na avaliação de resultados. Neste sentido, a competitividade nas transações comerciais é uma das consequências das formas de ação.', 4, '-24.4888630347212', '-47.84111829938626', 453, 'c6dad5024e81e5597aa6f9e186d07a54.jpg'),
	(14, 'Kaigai kogyo kabushiki kaisha', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2020-12-27', '12:28:35', '#KKKK', '#1912', 'Em 1912 o governo do Estado de São Paulo, representado pelo então governador Albuquerque Lins, e o sindicato de Tóquio firmaram um convênio para ampliar a colonização japonesa e autorizar o funcionamento de uma companhia de beneficiamento e estocagem de arroz na Vila de Registro. O Estado doava com essa parceria 50 mil hectares de terra para serem distribuídos entre 2 mil famílias japonesas para o cultivo agrícola.\nEm 1913 a empresa de imigração japonesa “Brasil Takushoku Kabushiki Kaisha” instalou a colônia Katsura em Jiporuva, Iguape. \nO nome Katsura foi dado em homenagem ao primeiro Ministro do Japão Sr. Iaro Katsura. Em 1917 foi instalada a colônia de Registro-SP.\nConvêm salientar que apesar de Registro-SP ter recebido o título de “Berço da Imigração Japonesa” os primeiros colonos se estabeleceram em Iguape. Posteriormente foram instalados núcleos colonizadores no Bairro Quilombo em Sete Barras e em Juquiá.', 2, '-24.4888778677978', '-47.84118657137361', 142, '52faeb5e8899870ec6f9c035854972ca.jpg'),
	(17, 'Cidade de registro', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2018-03-03', '22:32:59', '#1913', '#OURO', 'O Município de Registro, situado no Vale do Ribeira, surgiu como um pequeno povoado à margem do Rio Ribeira de Iguape. Na época , explorava-se ouro no alto do Ribeira, transportado pelo rio até o porto de Iguape. Passagem obrigatória das embarcações, o povoado de Registro era o local onde um agente de Portugal registrava toda a mercadoria transportada para cobrar o dízimo destinado à Coroa Portuguesa. Daí a origem do nome Registro.\nAinda como povoado pertencente a Iguape, Registro começou a crescer à partir da chegado dos primeiros imigrantes japoneses, em 1913. Nesse mesmo ano era criada em Tóquio a KKKK. Companhia Ultramarina de Desenvolvimento, com a missão de apoiar os japoneses que partiam para o Vale do Ribeira.\nHistória do KKKK - A Kaigai Kogyo Kabushiki Kaisha, empresa com sede no Japão, foi autorizada a funcionar no Brasil em 1918 e teve papel fundamental para o desenvolvimento da colônia. Em 1922, a empresa inaugurou nas margens do Ribeira, no centro velho de Registro, um bloco de quatro armazéns com área construída de 3.100 metros quadrados em estilo arquitetônico inglês. Ali funcionaram os serviços de assessoria e de infra-estrutura para escoamento da produção agrícola da colônia.\n\nReconhecido como patrimônio cultural do Estado de São Paulo, o prédio da KKKK foi tombado pelo Conselho de Defesa do Patrimônio Histórico, Arqueológico, Artístico e Turístico (Condhepaat) em 1987,tornando-se utilidade pública, destinado à instalação de um centro cultural.\nMesmo enfrentando muitas dificuldades, os imigrantes conseguiram fazer a terra frutificar, abriram estradas e promoveram o desenvolvimento da região. Eles trouxeram o chá preto para Registro.\nEm 30 de novembro de 1944, pelo decreto lei nº. 14334, Registro emancipou-se de Iguape, tornando-se Município, cuja instalação deu-se em 1º. de janeiro 1945.', 4, '-24.4886496266305', '-47.84112089141222', 86, '463ab820a1a8347ce0c073296cdac25f.jpg'),
	(18, 'Registro 76 anos', 'Av. Pref Jonas Banks Leite', 'Registro', 'São Paulo - Brasil', '2021-05-09', '10:37:16', '#76', '#HISTÓRIA', 'Registro fica na Mesorregião do Litoral Sul Paulista, no Estado de São Paulo, a sudoeste da Capital, distante 191 km, no Vale do Ribeira. O clima é classificado como subtropical úmido. A cidade era um centro de fiscalização do ouro explorado no Alto Ribeira, no século XVII. Era o Porto de Registro de Ouro. O povoado cresceu, se desenvolveu-se e passou a ser conhecido, em 1934, como Distrito de Paz de Registro, e, em 1945, oficialmente tornou-se município de Registro.', 4, '-24.4888500804675', '-47.8417204097837', 34, 'f9b3e4038f4ee2909aa03d2e001020aa.jpg');
/*!40000 ALTER TABLE `historia` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
