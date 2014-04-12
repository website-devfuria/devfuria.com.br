--
-- Atualizações
--
INSERT INTO `devfuria_fulia`.`categorias` (`id`, `codigo`, `label`, `ativo`, `ordem`) VALUES ('3', '', 'Canvas', '1', '3');
UPDATE `devfuria_fulia`.`categorias` SET `codigo` = 'canvas' WHERE `categorias`.`codigo` = '';
ALTER TABLE `paginas` ADD `nivel` VARCHAR( 13 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'basico' AFTER `categoria` 