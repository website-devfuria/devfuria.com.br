DROP TABLES IF EXISTS paginas, secoes;
DROP VIEW  IF EXISTS subsecoes, viewTotalDePaginas, viewTotalPorMesSecao, viewTotalPorSecao;

CREATE TABLE IF NOT EXISTS `secoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `href` varchar(255) NOT NULL,
  `label` varchar(50) NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`,`href`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `secoes` (`id`, `codigo`, `href`, `label`, `ativo`, `ordem`) VALUES
(1, 'html-css', 'html-css', 'HTML & CSS', 1, 2),
(2, 'logica', 'logica-de-programacao', 'Lógica de Programação', 1, 7),
(3, 'js', 'js', 'Javascript', 1, 1),
(4, 'php', 'php', 'PHP', 1, 3),
(5, 'mysql', 'mysql-sql', 'MySql & SQL', 1, 4),
(6, 'regexp', 'regexp', 'RegExp', 1, 5);


CREATE TABLE IF NOT EXISTS `paginas` (
  `ordem` int(11) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `urlLabel` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescr` varchar(255) DEFAULT NULL,
  `secao` varchar(50) NOT NULL,
  `subSecao` varchar(20) NOT NULL DEFAULT 'curso',
  `nivel` varchar(13) NOT NULL DEFAULT 'basico',
  `status` varchar(20) NOT NULL DEFAULT 'draft',
  `dtCriacao` date DEFAULT NULL,
  `dtAtualizacao` date DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`url`),
  KEY `secao` (`secao`),
  KEY `sub-secao` (`subSecao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `paginas`
  ADD CONSTRAINT `paginas_ibfk_1` FOREIGN KEY (`secao`) REFERENCES `secoes` (`codigo`);

-- viewListaPaginasCrono

-- viewListaPaginasResumo

CREATE ALGORITHM = UNDEFINED
VIEW `subsecoes` AS
select distinct `paginas`.`subSecao` AS `subsecao` from `paginas` order by `paginas`.`subSecao`;

CREATE ALGORITHM = UNDEFINED VIEW `viewTotalDePaginas` AS
select count(0) AS total from paginas;

CREATE ALGORITHM = UNDEFINED
VIEW `viewTotalPorMesSecao` AS
select date_format(`paginas`.`dtCriacao`,'%Y-%m') AS `mes`,`paginas`.`secao` AS `secao`,count(`paginas`.`secao`) AS `total`
from `paginas`
group by date_format(`paginas`.`dtCriacao`,'%Y-%m'),`paginas`.`secao`
order by `paginas`.`dtCriacao` desc;

CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `viewTotalPorSecao` AS
select `paginas`.`secao` AS `secao`,count(`paginas`.`secao`) AS `porSecao`
from `paginas`
group by `paginas`.`secao`;

CREATE ALGORITHM = UNDEFINED
VIEW `viewSubSecoes` AS
SELECT DISTINCT subSecao FROM paginas ORDER BY subSecao

