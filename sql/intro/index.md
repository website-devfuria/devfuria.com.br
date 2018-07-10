---
layout:      artigo
title:       Introdução ao conceito intuitivo de banco de dados
description: O que é um banco de dados? O que é uma tabela? O que são registros?
---

![Desenho em quadrinhos satirizando ao (mal)uso do Excel!](vida_prog_112.png "O Excel foi, é e sempre será utilizado
indevidamente como banco de dados.")

[Fonte da imagem](http://vidadeprogramador.com.br/2011/05/24/banco-de-dados/)

O Excel foi, é e sempre será utilizado indevidamente como banco de dados. Essa foi só para descontrair, porque se eu
começasse essa seção com "Na década de 70..." a matéria perderia a graça e aprender deve ser algo divertido.

Hum Hum! tudo bem vamos lá...

Na década de 70 um pesquizador chamado Edgar Frank "Ted" Codd desenvolveu um produto de modelo de dado relacional
chamado SEQUEL (Strutucred English Query Language, Linguagem de Consulta em Inglês Estruturado) que mais tarde veio a
se tornar o nosso conhecido __SQL__ (Structured Query Language, Linguagem de Consulta Estruturada).


![Foto de Edgar Frank Codd](edgar-f-codd.jpg "Edgar Frank Codd (1923-2013) Pai da SEQUEL")

Edgar Frank Codd (1923-2013) Pai da SEQUEL


Em pouco tempo a ANSI (American National Standards Institute) assumiu os trabalhos padronizando a __SQL__. Mas como tudo em
 nossa área, a padronização tem suas exceções. Existem os dialetos __SQL__, cada sistema de banco de dados implementou sua
própria versão da padronização (é para rir ou para chorar?).

Alguns anúncios de emprego especificam o dialeto como requisito para a vaga.

Você já viu pedirem experiência em __T-SQL__ ou __PL/SQL__ ?

Vejamos os pricipais dialetos:

![Exemplos de dialetos SQL](sql-dialetos.png "Exemplos de dialetos SQL")

Na verdade, o quadro não é tão ruim assim. Se você domina um dialeto, terá facilidade para migrar para outro. Segundo os
irmãos Kline autores do livro "Sql - O Guia Essencial - Manual de Referência Profissional, 3 edição":

> Programadores e administradores agora têm o benefício de serem capazes de aprender uma única linguagem que, com
> pequenos ajustes, é aplicável a uma vasta variedade de plataformas de banco de dados, aplicações e produtos.
> (Daniel e Kevin)

Neste curso, eu abordarei o dialeto __MySQL__.


DB = BD = SGBDR
---

__"Banco de dados"__ abreviamos para `BD`.

Em inglês, __"Data Base"__ abreviamos para `DB`.

Alguém que não tinha nada para fazer, resolveu ajudar e criou mais um termo: __SGBDR__ (Sistema Gerenciador de Banco de
Dados Relacional).

Eu gosto de utilizar a forma em inglês DB, é essa que você verá aqui no curso.



Banco de dados
---

Banco de dados nada mais é que um sistema capaz de armazenar e recuperar uma grande quantidade de dados.

Novamente os irmãos Kline nos dão mais dicas sobre o que é um SGBDR:

> Um SGBDR é definido como um sistema que usuários observam dados como uma coleção de tabelas relacionadas entre si
> através de valores de dados comuns.




Tabelas, Registros e Colunas
---

### Colunas

São os `campos` de uma informação, por exemplo:

    nome do produto, preco

...são 2 possíveis campos (ou colunas)


### Registros

São os dados abaixo das referidas colunas:

    Camiseta Regata, 11.99 -- esse é um registro
    Camisa Social,   15.00 -- esse é outro registro




### Tabelas

Se juntarmos as colunas e os registros teremos as tabelas:

![Tabelas](ex01-tabela.jpg "Tabelas")

[Fonte da imagem](http://blog.thiagobelem.net/relacionamento-de-tabelas-no-mysql/)



### DB

Agora me responda sem pensar muito, o que é um conjunto de tabelas ? ... nosso __banco de dados__.

A imagem abaixo ilustra nosso banco de dados:


![Diagrama que representa um banco de dados](db.jpg "Diagrama que representa um banco de dados")

[Fonte da imagem](http://www2.itssolucoes.com.br/banco-de-dadoss)

O cilindro azul e verde representam um banco de dados, os quadros abaixo deles representam nossas tabelas,
esses quadros estão no formato __ER (Entidade Relacionamento)__, falaremos disso em breve.

Mas a figura oficial de um banco de dados é esta aqui:

![diagrama oficial que representa um banco de dados](db02.jpg "Isto sim é um Banco de Dados")

Eu quiz apenas introduzir os conceitos de forma intuitiva, falaremos exaustivamente "dessas coisas" no decorrer do curso.

