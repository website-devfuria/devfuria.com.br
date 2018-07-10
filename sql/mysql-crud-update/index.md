---
title:       CRUD - U de update
description: Entenda o sql UPDATE, para quem nunca viu SQL!
capitulo:    sql-intro
ordem:       13
---


Esta matéria é indicada para quem está começando a aprender os comandos básicos de SQL. Ela faz parte de uma sequência, se
você caiu aqui de "para quedas" talvez queira ler [Entendendo o que é CRUD](../mysql-crud).

O statement `update` atualiza os registros.

    UPDATE table SET campos=valores

Traduzindo o comando acima: 

    atualize na tabela xyz os seguintes campos e valores

Um detalhe importante é que a instrução irá atualizar todos os registros e nem sempre o queremos atualizar a tabela inteira.

Para restringir a atualização em alguns poucos registros, precisaremos utilizar as condições.

Veja o sql como ficou.

    UPDATE table SET campos=valores WHERE condicao

Traduzindo o sql acima: 

    atualize na tabela xyz os seguintes campos e valores onde a condição seja verdadeira

Outro detalhe é o trecho `SET campos=valores`. Depois do `set` separamos os campos e valores por vírgula,
veja o sql abaixo.

    UPDATE table SET campo1=valor1, campo2=valor2 WHERE condicao
    
Voltando para nossa querida tabela `pet`, imagine que queremos atualizar os campos `birth` e `species`, mas apenas o 
registro no qual `name` seja igual a "Bowser". É o que faz o sql abaixo.

    UPDATE pet SET birth = '1989-08-31', species = 'horse' WHERE name = 'Bowser';

Na construção de statement SQL devemos sempre nos preocupar com sua estética, pois isso auxilia na sua legibilidade.

Veja como ficou o sql anterior.

    UPDATE pet SET
    birth = '1989-08-31',
    species = 'horse'
    WHERE name = 'Bowser';

Agora veja como ficou digitado no console.


    mysql> UPDATE pet SET
        -> birth = '1989-08-31',
        -> species = 'horse'
        -> WHERE name = 'Bowser';
    Query OK, 1 row affected (0.08 sec)
    Rows matched: 1  Changed: 1  Warnings: 0


Você já aprendeu sobre o [insert](../mysql-crud-create/), [select](../mysql-crud-read/) e update. 

Agora só falta o delete [CRUD - D de delete](../mysql-crud-delete/)
