---
layout:      grid93-article
title:       Instruções úteis para manipular tabelas no MySQL
description: Instruções SQL para manipular tabelas no MySQL .
menu:        mysql
---

### DESCRIBE

O comando [DESCRIBE](http://dev.mysql.com/doc/refman/5.7/en/describe.html "link-externo") é muito útil pois ele é um 
raio-x da tabela, vamos utilizá-lo para checar se a tabela que criamos é realmente a tabela que queríamos criar.

    DESCRIBE pet;

A instrução acima trará o resultado abaixo:

    +---------+-------------+------+-----+---------+-------+
    | Field   | Type        | Null | Key | Default | Extra |
    +---------+-------------+------+-----+---------+-------+
    | name    | varchar(20) | YES  |     | NULL    |       |
    | ower    | varchar(20) | YES  |     | NULL    |       |
    | species | varchar(20) | YES  |     | NULL    |       |
    | sex     | char(1)     | YES  |     | NULL    |       |
    | birth   | date        | YES  |     | NULL    |       |
    | death   | date        | YES  |     | NULL    |       |
    +---------+-------------+------+-----+---------+-------+


### DROPT TABLE

Quer apagar a tabela? É isso o que o comando `DROP TABLE` faz.

    DROP TABLE pet;


### TRUNCATE TABLE

Truncar a tabela significa limpar todos os dados da tabela e zerar o os dados de auto incremento (calma, veremos isso em breve).

    TRUNCATE TABLE pet;

Por enquanto, vamos utilizar quando quisermos apagar todos os dados.

