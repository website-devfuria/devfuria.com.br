---
title:       Acessando o MySQL  via console (terminal)
description: mysql -h localhost -u root -p  ...leia o artigo abaixo para entender o comando.
capitulo:    sql-intro
ordem:       2
---


Para testarmos a instalação do MySQL precisamos acionarmos o aplicativo.

O MySQL utiliza a “label” `mysql>` na shell, como exemplo veja a minha shell:

    [flavio@localhost www.devfuria.com.br]$

Ao entrar no MySQL meu console fica como abaixo:

    mysql>

No console (terminal) é possível digitar `mysql` para “entrar” no servidor MySQL. 

Mas se digitar apenas isso receberemos a seguinte mensagem:

    ERROR 1045 (28000): Access denied for user 'flavio'@'localhost' (using password: NO)

Bom começarmos com um erro, pois dessa forma você irá se habituando a “encarar” essas mensagens ao invés de ignorá-las
(atitude comum de quem está iniciando).

O que podemos descobrir com a mensagem? Olhe para ela atentamente e absorva todos os detalhes.

1. Primeiro sabemos o número do erro o que nos ajudará a fazer uma possível pesquisa na web e ter a certeza de que 
estamos tratando do mesmo erro.

2. Depois temos a descrição do erro: “Access denie”, traduzindo, “Acesso negado”. Mas acesso negado para quem? para qual
 usuário? Leia a mensagem e descobrirá. No meus caso, mostrou o meu usuário do linux: “flavio”. O arroba separa o usuário do local no qual está instalado o servidor Mysql. Como estou na minha máquina local, ela acusa “localhost”, traduzindo porcamente “máquina local”.

3. Por último temos a seguinte informação: (using password: NO), ou seja, “usando senha: Não”, quer dizer que realizou 
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

Não vamos digitar a senha porque pode ter alguém bisbilhotando (rsrs). Então acionamos o Enter e adivinhe? O console 
solicita a senha do usuário informado. Agora sim pode digitar, pois a senha não é mostrada.

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

Agora já é possível testar e praticar instruções sql e devemos 
[aprender como ler as mensagens de erros](../mysql-ler-mensagens-erro/).

Para sair do MySQL digite:

    exit

O sistema responde com um simpático "Bye" e eu também.

- - -
Fonte

* [Manual do MySQL - Connecting to and Disconnecting from the Server](http://dev.mysql.com/doc/refman/5.7/en/connecting-disconnecting.html) 
