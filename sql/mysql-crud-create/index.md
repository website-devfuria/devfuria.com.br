---
title:       CRUD - C de create (insert)
description: Entenda o sql INSERT, para quem nunca viu SQL!
capitulo:    sql-intro
ordem:       11
---


Esta matéria é indicada para quem está começando a aprender os comandos básicos de SQL. Ela faz parte de uma sequência, se
você caiu aqui de paraquedas talvez queira ler [Entendendo o que é CRUD](../mysql-crud).

A instrução `INSERT INTO` insere dados:

    INSERT INTO pet VALUES();

O statement acima pode ser traduzido da seguinte forma: 

    Insira na tabela 'pet' os seguintes valores ('valor1', 'valor2', 'valor3')

Bastante intuitivo, não acha? Eu acho.

Vamos utilizar o exemplo abaixo para a nossa tabela `pet`.

    INSERT INTO pet VALUES ('Puffball','Diane','hamster','f','1999-03-30',NULL);

O exemplo acima é curto, então ele "ainda" é legível. 

Se fosse uma tabela maior, escrever em um linha só tornaria a "querie" ilegível.

Uma saída para queries maiores é fazer como o exemplo abaixo.

    INSERT INTO pet VALUES (
        'Puffball',
        'Diane',
        'hamster',
        'f',
        '1999-03-30',
        NULL
    );

Veja como ficou o comando digitado no console.

    mysql> INSERT INTO pet VALUES ( 
        -> 'Puffball',
        -> 'Diane',
        -> 'hamster',
        -> 'f',
        -> '1993-03-30',
        -> NULL
        -> );

Manteremos esse padrão quando formos programar isso do lado do servidor.

Em outras palavras, vá se acostumando com esse formato.

Como ficou nossa tabela? 

Utilizamos a instrução `select` que é assunto do próximo tópico [CRUD - R de read, é o nosso select!](../mysql-crud-read/).