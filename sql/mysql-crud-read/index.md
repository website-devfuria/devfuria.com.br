---
title:       CRUD - R de read (select)
description: Entenda o sql SELECT, para quem nunca viu SQL!
capitulo:    sql-intro
ordem:       12
---


Esta matéria é indicada para quem está começando a aprender os comandos básicos de SQL. Ela faz parte de uma sequência, se
você caiu aqui de paraquedas talvez queira ler [Entendendo o que é CRUD](../mysql-crud).

Utilizamos o statement `SELECT` quando queremos resgatar dados.

De longe, esse é a instrução mais utilizada. O formato dele é o seguinte:

    SELECT campo1, campo2, campo3 FROM tabela;

Traduzindo o comando acima: 
    
    selecione os campos 1, 2 e 3 da tabela xyz

O retorno de instrução será um conjunto de registros, também conhecido como __recordeset__.

O símbolo `*` (asterisco) representa um papel importante, ele significa "todos".

    SELECT * FROM tabela;

Traduzindo o comando acima: 

    selecione todos os campos da tabela xyz

Em nosso exemplo, basta colocar o nome da tabela `pet`. Vejamos:

    SELECT * FROM pet;

Traduzindo o comando acima: 

    selecione todos os campos da tabela pet;



Filtrando os registros
---

Até agora, as instruções `select` não especificaram quais os registros a serem resgatados (exibidos).

Vamos traduzir por completo o último statement `SELECT * FROM pet;`:

    selecione todos os campos da tabela pet e me traga todos os registros

Quando não especificamos quais registros queremos o interpretador de SQL entende que é para trazer todos os registros.

Ok, então como dizemos ao interpretador que queremos determinado(s) registro(s)?

Utilizando a cláusula `WHERE` (onde) seguida de uma condição, veja o statement:

    SELECT * FROM pet WHERE condição;

E como é a condição? Essa é fácil, não preciso em explicar, basta olhar os exemplos:

    SELECT * FROM pet WHERE species = 'cat';

Traduzindo:

    selecione todos os campos da tabela pet e me traga todos os registros onde o campo 'species' seja igual a string 'cat';

Em outras palavras, quero listar todos os registros que são `'cat'`.

Experimente executar o statement, sua tela deve ser parecida com a minha.

    mysql> SELECT * FROM pet WHERE species = 'cat';
    +--------+--------+---------+------+------------+-------+
    | name   | ower   | species | sex  | birth      | death |
    +--------+--------+---------+------+------------+-------+
    | Fluffy | Harold | cat     | f    | 1993-02-04 | NULL  |
    | Claws  | Gwen   | cat     | m    | 1994-03-17 | NULL  |
    +--------+--------+---------+------+------------+-------+
    2 rows in set (0.00 sec)


E se quisermos  saber quais são os dog's?

Execute o comando abaixo.

    SELECT * FROM pet WHERE species = 'dog';

A saída será...

    mysql> SELECT * FROM pet WHERE species = 'dog';
    +--------+--------+---------+------+------------+------------+
    | name   | ower   | species | sex  | birth      | death      |
    +--------+--------+---------+------+------------+------------+
    | Buffy  | Harold | dog     | f    | 1989-05-13 | NULL       |
    | Fang   | Benny  | dog     | m    | 1990-08-27 | NULL       |
    | Bowser | Diane  | dog     | m    | 1979-08-31 | 1995-07-29 |
    +--------+--------+---------+------+------------+------------+
    3 rows in set (0.01 sec)


Uma dica importante é que a condição é uma expressão muito semelhante a utilizada em (qualquer) linguagem de programação,
ou seja, também podemos utilizar `()` parênteses e operadores lógicos como o `AND`. Em breve veremos mais sobre essas
condições (expressões).

Depois de inserido o registro, talvez queiramos alterar/atualizar os dados.

Utilizamos a instrução `update` que é assunto do próximo tópico [CRUD - U de update](../mysql-crud-update/).
