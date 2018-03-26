---
title:       Criando tabelas no MySQL
description: Aprenda como criar tabelas no MySQL.
capitulo:    sql-intro
ordem:       7
---



Antes de mais nada, precisamos [criar a base de dados](../mysql-criando-base-de-dados/).

No meu caso, eu criarei uma base chamada `devlabs`, mas você pode usar esse nome ou outro de sua preferência.

    CREATE DATABASE devalbs;
    USE devlabs;


Criar uma tabela é uma tarefa fácil e corriqueira. O trabalho pesado fica por conta da parte conceitual, explico:

A criação de uma base de dados com tabelas e tudo mais depende de muito planejamento.

Não existe uma fórmula única, muito pelo contrário. Desenhar a base de dados é como programar, há sempre mais de um
caminho para a mesma solução.

Vale lembrar que seu aprendizado está em constante evolução e que você criará bases de dados diferentes ao longo do tempo.
(eu não crio base de dados como criava a 5 anos atrás).

Junto com a questão conceital, temos os __tipos de dados__. Cada campo (coluna) da tabela deve ser de um tipo. Ainda não
falamos sobre tipos de dados do MySQL, veremos o assunto em breve.


### Uma tabela de exemplo

Eu retirei o exemplo do [manual do MySQL](http://dev.mysql.com/doc/refman/5.7/en/creating-tables.html):
imagine que precisamos construir um sistema para um PetShop. Talvez você queira registrar os nome dos bichanos e seus
respectivos donos.

Já temos dois campos:

    nome (dos bichanos),
    dono (dos bichanos)

Aí você descobre que seria interessante registrar a espécie (gato, cachorro, pássaro, etc..), o gênero (sexo), a data de
nascimento e a data de falecimento:

    espécie,
    sexo,
    data de nascimento,
    data de óbito

Nossa tabela ficará assim:

    nome | dono | espécie | sexo | nascimento | óbito

Os campos `nome`, `dono` e `espécie` são do __tipo string__ que podem variar de tamanho. Para isso temos o tipo `VARCHAR`
que traduzindo, (grosseiramente) significa "caracter variante". A variação ocorre no tamanho, o limite dessa variação é
especificado por parênteses logo após o tipo. (falaremos dos tipo de dados em breve).

Já o campo `sexo` também é do tipo `string` mas seu tamanho não é variável, é fixo. Podemos ter nessa coluna os seguintes
valores: `f` para feminino e `m` para masculino. O tipo de dado utilizado será `CHAR`.

Os campos `nascimento` e `óbito` são do tipo __data__, utilizaremos o tipo `DATE`. O MySQL (e a maioria do banco de dados)
armazenam a data no seguinte formato: __ano-mes-dia__, ou melhor, __aaaa-mm-dd__.
Ex: a data 11/09/2001 apresenta o seguinte formato: 2001-09-11.

Como o exemplo é em inglês, vamos manter os nomes nessa língua:

    name | owner | species | sex | birth | death

Agora que já sabemos o que vamos construir...

### Botando a mão na massa

O comando que cria a tabela é, em sua essência, o seguinte:

    CREATE TABLE nome-da-tabela (descrição de cada coluna);

Os campos são compostos pelos seu nome seguido do tipo e separados por vírgula, ex:

    nome-do-campo VARCHAR(100),

Para ficar mais legível, formatamos o statement sql da seguinte forma:

    CREATE TABLE pet (
        name VARCHAR(20),
        owner VARCHAR(20),
        species VARCHAR(20),
        sex CHAR(1),
        birth DATE,
        death DATE
    );

Aí você me pergunta, como digitar isso no console?

Vá digitando e apertando o ENTER, pois o comando somente será enviado quando inserirmos o sinal `;`.

Veja com eu digitei:

    mysql> CREATE TABLE pet (
        -> name VARCHAR(20),
        -> ower VARCHAR(20),
        -> species VARCHAR(20),
        -> sex CHAR(1),
        -> birth DATE,
        -> death DATE
        -> );
    Query OK, 0 rows affected (0.25 sec)

Agora podemos popular (inserir dados) nossa tabela.

Poderemos fazer isso de registro em registro com a instrução __insert into__ ou podemos fazer em uma "tacada só"
[populando tabela a partir de uma arquivo de texto no MySQL](../populando-tabela-a-partir-de-um-arquivo-de-texto-no-mysql/).

- - -
Fonte

- [Manual do MySQL - Creating a Table](http://dev.mysql.com/doc/refman/5.7/en/creating-tables.html)