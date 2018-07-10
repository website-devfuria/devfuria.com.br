---
title:       Populando tabela a partir de uma arquivo de texto no MySQL
description: Vamos aprender como popular uma tabela no MySQL apartir de um arquivo de texto.
capitulo:    sql-intro
ordem:       8
---


A instrução [load data local infile](http://dev.mysql.com/doc/refman/5.7/en/load-data.html) lê um 
arquivo de texto separado por tabulações (tab) e insere os dados na tabela.

Muito prático, pelo menos quando já temos arquivos separado por tabulações.

    LOAD DATA LOCAL INFILE '/caminho/seu-arquivo' INTO TABLE nome-da-tabela;


Na matéria [Criando tabelas no MySQL](/sql/mysql-criando-tabelas/) criamos a tabela `pet`, agora vamos popular esta tabela.

Vamos criar um arquivo chamado `pet.txt`, seu conteúdo se parece com o seguinte:

    Fluffy	Harold	cat	f	1993-02-04	\N
    Claws	Gwen	cat	m	1994-03-17	\N
    Buffy	Harold	dog	f	1989-05-13	\N
    Fang	Benny	dog	m	1990-08-27	\N
    Bowser	Diane	dog	m	1979-08-31	1995-07-29
    Chirpy	Gwen	bird	f	1998-09-11	\N
    Whistler	Gwen	bird	\N	1997-12-09	\N
    Slim	Benny	snake	m	1996-04-29	\N

...onde `\N` representa valores nulos (desconhecidos).

No meu caso eu salvei o arquivo na pasta `/home/flavio`. Meu sql ficou assim:

    LOAD DATA LOCAL INFILE '/home/flavio/pet.txt' INTO TABLE pet;

Se sua instalação do MySQL não permitir a execução da instrução você verá o __erro 1148 (The used command is not allowed
with this MySQL version)__, veja no final deste artigo como lidar com ele.


Como saber se deu certo? Execute a istrução [select](http://dev.mysql.com/doc/refman/5.7/en/selecting-all.html)...

    SELECT * FROM pet;

...sua tela deve parecer-se com a minha:

    +----------+--------+---------+------+------------+------------+
    | name     | ower   | species | sex  | birth      | death      |
    +----------+--------+---------+------+------------+------------+
    | Fluffy   | Harold | cat     | f    | 1993-02-04 | NULL       |
    | Claws    | Gwen   | cat     | m    | 1994-03-17 | NULL       |
    | Buffy    | Harold | dog     | f    | 1989-05-13 | NULL       |
    | Fang     | Benny  | dog     | m    | 1990-08-27 | NULL       |
    | Bowser   | Diane  | dog     | m    | 1979-08-31 | 1995-07-29 |
    | Chirpy   | Gwen   | bird    | f    | 1998-09-11 | NULL       |
    | Whistler | Gwen   | bird    | NULL | 1997-12-09 | NULL       |
    | Slim     | Benny  | snake   | m    | 1996-04-29 | NULL       |
    +----------+--------+---------+------+------------+------------+


Se você conseguiu inserir os dados mas eles não ficaram igual ao meu exemplo limpe a tabela com a sql `TRUNCATE TABLE pet;`
e tente novamente.

Se preferir peque o exemplo neste [gist](https://gist.github.com/flaviomicheletti/8359890).

Na próxima matéria veremos como [manipular nossa tabela](../mysql-instrucoes-tabelas/), para isso utilizaremos algumas 
instruções muito úteis (continuaremos utilizando a tabela pet).

- - -
Fonte

- [Manual do MySQL - Loading Data into a Table](http://dev.mysql.com/doc/refman/5.7/en/loading-tables.html)



Lidando com o erro 1148
---

Ao executar a instrução `LOAD DATA LOCAL INFILE` e aparecer a seguinte mensagem de erro:

    ERROR 1148 (42000): The used command is not allowed with this MySQL version

Significa que a ela não está habilitada. 

Se você estiver no console será fácil resolver, basta logar-se ao MySQL com a opção `--local-infile`:

    mysql --local-infile -u root -p

Para maiores detalhes veja [Manual do MySQL - Security Issues with LOAD DATA LOCAL](http://dev.mysql.com/doc/refman/5.7/en/load-data-local.html).