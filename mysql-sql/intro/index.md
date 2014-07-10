---
layout: materia
title: Introdução ao conceito intuitivo de banco de dados
---



![Desenho em quadrinhos satirizando ao (mal)uso do Excel!](vida_prog_112.png "O Excel foi, é e sempre será utilizado 
indevidamente como banco de dados.")

[Fonte da imagem](http://vidadeprogramador.com.br/2011/05/24/banco-de-dados/ "link-externo")

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

[Fonte da imagem](http://blog.thiagobelem.net/relacionamento-de-tabelas-no-mysql/ "link-externo")



### DB

Agora me responda sem pensar muito, o que é um conjunto de tabelas ? ... nosso __banco de dados__.

A imagem abaixo ilustra nosso banco de dados:


![Diagrama que representa um banco de dados](db.jpg "Diagrama que representa um banco de dados")

[Fonte da imagem](http://www2.itssolucoes.com.br/banco-de-dadoss "link-externo")

O cilindro azul e verde representam um banco de dados, os quadros abaixo deles representam nossas tabelas,
esses quadros estão no formato __ER (Entidade Relacionamento)__, falaremos disso em breve.

Mas a figura oficial de um banco de dados é esta aqui:

![diagrama oficial que representa um banco de dados](db02.jpg "Isto sim é um Banco de Dados")

Eu quiz apenas introduzir os conceitos de forma intuitiva, falaremos exaustivamente "dessas coisas" no decorrer do curso.



Instalando o MySQL
---

O software, normalmente, se divide em duas partes: servidor e cliente.

Existe a aplicação que roda lá no servidor e existe um pequeno emaranhado do código que roda no cliente.

Como desenvolvedor, eu instalo na minha máquina as duas partes.

### Ubuntu (família Debian)

No terminal digite:

    apt-get install mysql-server mysql-client

Enquanto os arquivos são baixados e instalados o sistema lhe perguntará qual será a senha do root (para acessar o banco
de dados), anote-a.

### Fedora (família Had-Hat)

O processo é parecido, só que você é quem define a senha:

    yum install mysql mysql-server

inicie o serviço...

    systemctl start mysqld.service
    systemctl enable mysqld.service

e habilite a senha digitando...

    mysqladmin -u root password [your_password_here]

Se tudo ocorreu bem poderemos acessar o servidor __mysql via console__.



MySql via console (terminal)
---

Para testarmos a instalação do __MySQL__ nada melhor do que acionarmos o aplicativo.

O __MySql__ utiliza a "label" mysql> na shell. Como exemlo veja a minha shell:

    [flavio@localhost www.devfuria.com.br]$

Ao entrar no __Mysql__ meu console fica como abaixo:

    mysql>

No console (terminal) é possível digitar `mysql` para "entrar" no servidor __MySQL__. Mas se digitar apenas isso 
receberemos a seguinte mensagem:

    ERROR 1045 (28000): Access denied for user 'flavio'@'localhost' (using password: NO)

Bom começarmos com um erro, pois dessa forma você irá se habituando a "encarar" essas mensagens ao invés de ignorá-las
(atitude comum de quem está iniciando).

O que podemos descobrir com a menssagem? Olha para ela atentamente e absorva todos os detalhes.

1. Primeiro sabemos o número do erro o que nos ajudará a fazer uma possível pesquisa na web e ter a certeza de que
estamos tratando do mesmo erro.

2. Depois temos a descrição do erro: __"Access denie"__, traduzindo, "Acesso negado". Mas acesso negado para quem? para qual
usuário? Leia a mensagem e descobrirá. No meus caso, mostrou o meu usuário do linux: "flavio". O arroba separa o usuário
do local no qual está instalado o servidor __Mysql__. Como estou na minha máquina local, ela acusa __"localhost"__, 
traduzindo porcamente "máquina local".

3. Por último temos a seguinte informação: (using password: NO), ou seja, "usando senha: Não", quer dizer que realizou 
uma tentiva de login sem senha.


Viu como é importante ler atentamente as mensagens de erros? Aprendemos muito com elas.

Então, como acessamos o servidor via console?

    mysql -h localhost -u root -p

Vamos entender o comando acima.

    mysql      -- evocamos o servidor
    -h         -- dizemos que o próximo dado é referente ao host
    localhost  -- informamos o o host
    -u         -- dizemos que o próximo dado é referente ao usuário
    root       -- informamos o usuário
    -p         -- dizemos que o próximo dado é referente a senha

Não vamos digitar a senha porque pode ter alguém bisbilhotando (rsrs). Então acionamos o Enter e adivinhe? 
O console solicita a senha do usuário infrmado. Agora sim pode digitar, pois a senha não é mostrada.

Espero que você esteja vendo o mesmo que eu:

    Welcome to the MySQL monitor.  Commands end with ; or \g.
    Your MySQL connection id is 14
    Server version: 5.1.71 Source distribution

    Copyright (c) 2000, 2013, Oracle and/or its affiliates. All rights reserved.

    Oracle is a registered trademark of Oracle Corporation and/or its
    affiliates. Other names may be trademarks of their respective
    owners.

    Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

    mysql> 

Agora já é possível testar e aprender sobre os statements.

Para sair do __MySQL__ digite:

    exit

O sistema responde com um simpático "Bye"... eu também, tchau!


<hr>
Fonte

* [Manual oficial do MySQL](http://dev.mysql.com/doc/index.html "link-externo") 



{% include lista-mysql.html %}