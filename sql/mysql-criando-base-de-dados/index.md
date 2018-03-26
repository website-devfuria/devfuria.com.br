---
title:       Criando uma base de dados no MySQL
description: Aprenda como criar base de dados com create databases; no MySQL.
serie:       Introdução ao MySQL
ordem:       6
---


A instrução [create database](http://dev.mysql.com/doc/refman/5.7/en/create-database.html) cria uma base de dados;

    CREATE DATABASE nome-para-a-base-de-dados;

Como exemplo, criarei uma base chamada `devlabs`.

    CREATE DATABASE devlabs;

Após criada a base de dados precisamos selecioná-la para uso, fazemos isso através do comando
[use](http://dev.mysql.com/doc/refman/5.7/en/database-use.html) seguido do nome da base, veja o exemplo:

    USE devlabs;

Uma vez que selecionamos a base de dados, é preciso saber as tabelas que ela contém, o comando abaixo lista as tabelas.

    show tables;

Não apareceu nenhuma? Não? Então vamos [criar nossa primeira tabela](../mysql-criando-tabelas/).


- - -
Fonte

- [Manual do MySQL - Creating and Using a Database](http://dev.mysql.com/doc/refman/5.7/en/database-use.html)