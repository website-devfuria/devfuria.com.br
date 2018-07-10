---
title:       Aprendendo a ler mensagens de erro
description: Aprenderemos como ler mensagens de erro do MySQL.
capitulo:    sql-intro
ordem:       3
---

Na [matéria anterior](../mysql-pelo-terminal/) vimos como se conectar com o banco de dados via console e é isso que vamos continuar fazendo aqui

O que fazer depois que acabamos de logar-se no DB?

Quais são os primeiros comandos?

É isso o que veremos nesta matéria


Começando com um erro (1064)!
---

Vamos começar bem!!! rssss

Após logar-se no MySQL, acreditando que você está no console conforme abaixo:

    flavio@cpu04:~/projetos/devfuria/www.devfuria.com.br$ mysql -u root -p
    Enter password: 
    Welcome to the MySQL monitor.  Commands end with ; or \g.
    Your MySQL connection id is 176
    Server version: 5.5.38-0+wheezy1 (Debian)

    Copyright (c) 2000, 2014, Oracle and/or its affiliates. All rights reserved.

    Oracle is a registered trademark of Oracle Corporation and/or its
    affiliates. Other names may be trademarks of their respective
    owners.

    Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

    mysql> 

Vamos causar um erro, digite `qualquercoisa;` no terminal, não esqueça do ponto e vírgula no final!

Você deve estar vendo o seguinte erro:

    ERROR 1064 (42000): You have an error in your SQL syntax;
    check the manual that corresponds to your MySQL server version for the right syntax to use near 'qualquer coisa' at line 1

Que erro maravilhoso!!!

Se não gostou dele, então melhor ir se acostumando, pois você verá esse erro "zilhões" de vezes.

Que informações vemos na mensagem de erro?

- O número do erro
- A descrição do erro
- Aonde está o erro

Localizou essa informações? Não? tente de novo!

O erro é `1064`, não e o 42000!

A primeira parte da mensagem diz que temos um erro de sintaxe (`You have a error in your SQL syntax;`).

A segunda parte, a mais importante, diz aonde está o erro. Mas não sem antes dar uma bronca: vai buscar no manual a
forma correta (`check the manual corresponds...`).

E, finalmente, nos avisa onde está o erro. Ele diz que está "perto de" (`...near 'qualquer coisa'`).

E de "quebra" diz qual é a linha.

__Essas informações serão extremamente úteis quando precisar debugar sua SQL!__

Por isso, repito, acostume-se com ela e jamais a ignore.

Já sabemos como logar no MySQL pelo terminal e sabemos também como ler as mensagens de erro.

Então vamos para o próximo passo: [Listar e selecionar bases de dados](../mysql-listar-base/).
