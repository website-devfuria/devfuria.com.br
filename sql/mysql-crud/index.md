---
layout:      materia-sql
title:       Eu crudo, você cruda, eles crudam
description: "Entendendo o que é CRUD, CRUD não é para comer! Trata-se das 4 operações básicas de SQL: create (insert), read (select), update, delete."
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

Este [Gist](https://gist.github.com/flaviomicheletti/8359890 "link-externo") poderá te ajudar caso você queira criar 
rapidamente a tabela

Então vamos ao CRUD...

<div class="list-group">
    <a href="../mysql-crud-create/" class="list-group-item">CRUD - C de create (insert)</a>
    <a href="../mysql-crud-read/" class="list-group-item">CRUD - R de read (select)</a>
    <a href="../mysql-crud-update/" class="list-group-item">CRUD - U de update</a>
    <a href="../mysql-crud-delete/" class="list-group-item">CRUD - D de delete</a>
</div> 
