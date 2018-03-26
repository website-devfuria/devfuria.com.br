---
title:       Listar e selecionar bases de dados
description: Aprenda como listar e selecionar uma base de dado no MySQl
capitulo:    sql-intro
ordem:       4
---


Quer saber __quais são as base de dados__ existente em seu servidor MySQL?

A instrução [show](http://dev.mysql.com/doc/refman/5.7/en/show-databases.html) nos ajudará:

    show databases;

Se o seu servidor estiver como o meu (zerado), ele exibirá apenas duas bases:

    +--------------------+
    | Database           |
    +--------------------+
    | information_schema |
    | mysql              |
    +--------------------+


Essas duas bases são do próprio MySQL. Quando criar suas bases elas estarão listadas junto com essas duas, sempre.



Selecionando a base para uso
---

Acabamos de listar todas as bases.

Agora, como selecionamos uma base qualquer para uso?

Com a instrução [use](http://dev.mysql.com/doc/refman/5.7/en/use.html), veja:

    use nome-da-base-da-dados;

Quando formos para uma linguagem de programação do lado do servidor (como PHP, Ruby, Python e etc...), devemos nos lembrar
desta sequência:

1. Conectar com o DB
2. Escolher uma base de dados qualquer
3. Executar os statements SQL


Já logamos, já escolhemos a base...então [vamos experimentar a instrução 'select'](../mysql-experimentado-select).
