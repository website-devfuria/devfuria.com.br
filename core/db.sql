ALTER TABLE `paginas` CHANGE `label_link` `labelLink` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL 
ALTER TABLE `paginas` CHANGE `sub_secao` `categoria` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

UPDATE paginas SET categoria = "receitas-tuto-guia" WHERE categoria = "receita-guia";

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `label` varchar(150) NOT NULL,
  `ativo` tinyint(2) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categorias` (`id`, `codigo`, `label`, `ativo`, `ordem`) VALUES
(1, 'curso', 'Cusos', 1, 1),
(2, 'receitas-tuto-guia', 'Receitas, Tutoriais e Guia de Referência', 1, 2);

ALTER TABLE `paginas` ADD FOREIGN KEY ( `categoria` )
REFERENCES `devfuria_fulia`.`categorias` (`codigo`) ON DELETE RESTRICT ON UPDATE RESTRICT;
