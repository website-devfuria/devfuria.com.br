CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `label` varchar(150) NOT NULL,
  `ativo` tinyint(2) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categoria` (`id`, `codigo`, `label`, `ativo`, `ordem`) VALUES
(1, 'curso', 'Cusos', 1, 1),
(2, 'receitas-tuto-guia', 'Receitas, Tutoriais e Guia de Referência', 1, 2);

ALTER TABLE `paginas` ADD FOREIGN KEY ( `categoria` ) 
REFERENCES `devfuria_fulia`.`categoria` (`codigo`) ON DELETE RESTRICT ON UPDATE RESTRICT ;
