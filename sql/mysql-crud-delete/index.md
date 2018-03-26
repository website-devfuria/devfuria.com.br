---
title:       CRUD - D de delete
description: Entenda o sql DELETE, para quem nunca viu SQL!
capitulo:    sql-intro
ordem:       14
---


Esta matéria é indicada para quem está começando a aprender os comandos básicos de SQL. Ela faz parte de uma sequência, se
você caiu aqui de paraquedas talvez queira ler [Entendendo o que é CRUD](../mysql-crud).

Adivinha o que a instrução `delete` faz? Deleta registros, isso mesmo!

Veja sua sintaxe:

    DELETE FROM pet;

Cuidado! O comando acima apagará TODOS os registros da tabela.

Aliás, esse é um erro muito comum para quem está começando.

Para apagar um determinado registro (um único), devemos utilizar a cláusula `WHERE` e uma condição que seja em específica.

Veja o sql abaixo:

    DELETE FROM pet WHERE id = 123;

Normalmente excluímos o registro pelo seu `id` (identificador). Mas como nossa tabela `pet` é desprovida de tal campo,
vamos deletar pelo campo `name` mesmo.

    DELETE FROM pet WHERE name = 'Slim';
    

Antes de deletar um registro talvez você queira executar um `select` para saber se ele está lá de fato.

E após a exclusão, talvez você queira executar novamente o `select` para ter certeza de que o registro foi excluído.

Pata tal, utilizamos a instrução [select](/sql/mysql-crud-read/) já visto em matérias anteriores.
