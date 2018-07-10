---
title:       Eu crudo, você cruda, eles crudam
description: "Entendendo o que é CRUD, CRUD não é para comer! Trata-se das 4 operações básicas de SQL: create (insert), read (select), update, delete."
capitulo:    sql-intro
ordem:       10
---


O CRUD é um acrônimo para as 4 operações básicas de um banco de dados.

- __create__ (insert)
- __read__ (select)
- __update__ (update)
- __delete__ (delete)

O quadro acima fará parte de seu dia a dia, a imagem abaixo também.

![Imagem ilustrando o CRUD](crud.jpeg "Imagem ilustrando o CRUD")


Para começarmos a brincar com o __CRUD__ precisamos nos logar no console do __MySQL__...

    mysql -u root -p

... e ativarmos a base que criamos:

    USE devlabs;

Em matérias anteriores, nós criamos e populamos a tabela `pet`, ela será nosso objeto de estudo. Você precisará dela se
quiser acompanhar os exercícios

Para saber se você já possui a tabela, utilize o comando `SHOW TABLES`;

Este [Gist](https://gist.github.com/flaviomicheletti/8359890) poderá te ajudar caso você queira criar 
rapidamente a tabela

Então vamos a primeira letra do CRUD, a letra "c" de "create" ou melhor, "insert":

[CRUD - C de create (insert)](/sql/mysql-crud-create/)