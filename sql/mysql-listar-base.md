---
layout:      materia-fork-sql
title:       Listar e selecionar bases de dados
description: Aprenda como listar e selecionar uma base de dado no MySQl
---


Quer saber __quais são as base de dados__ existente em seu servidor MySQL?

Então digite:

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

Essa é fácil:

    use nome-da-base-da-dados;

Quando formos para uma linguagem do lado do servidor (como PHP), deveremos lembrar desta sequência:

1. Conectar com o DB
2. Escolhar uma base de dados qualquer
3. Executar os statements SQL


Já logamos, já escolhemos a base e escolhemos a tabela. Então [vamos brincar com a instrução 'select'](../mysql-experimentado-select).