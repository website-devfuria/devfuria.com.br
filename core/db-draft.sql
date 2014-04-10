--
-- Atualizações
-- (a primeira da lista é a mais atual)
--
UPDATE paginas SET autor = null;

UPDATE `devfuria_fulia`.`paginas`
SET `metaTitle` = 'Refatorando o código da matéria ''Code - A lâmpada'''
WHERE `paginas`.`url` = '/js/basico/code-lampadas-refatorando/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaTitle` = 'JavaScript OOP - Conceitos básicos'
WHERE `paginas`.`url` = '/js/basico/oop-primeiro-degrau/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Aprenda a debugar seus scripts em Javascript, este é o primeiro passo na depuração de código.'
WHERE `paginas`.`url` = '/js/basico/debugando/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Veremos onde colocar o JS,  OOP, FIREBUG,  a questão da segurança e separações de interesses (separation of concerns).'
WHERE `paginas`.`url` = '/js/basico/preparando-o-terreno/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Uma introdução ao Javascript, acompanha 2 script para quebrar o gelo.'
WHERE `paginas`.`url` = '/js/basico/intro/';

ALTER TABLE `paginas` ADD PRIMARY KEY ( `url` );

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Veremos Separações de Interesses (separation of concerns), onde colocar o JS, OOP, FIREBUG e a questão da segurança!.'
WHERE `paginas`.`url` = '/js/basico/preparando-o-terreno/';