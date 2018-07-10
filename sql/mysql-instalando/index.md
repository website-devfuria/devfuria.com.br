---
title:       Instalando o MySQL e acessando via terminal
description: Aprenda a instalar e acessar o MySQL no terminal do Linux.
capitulo:    sql-intro
ordem:       1
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

    mysqladmin -u root password sua-senha-aqui



Para testar a instalação
---

Se tudo ocorreu bem poderemos [acessar o servidor MySQL via console](../mysql-pelo-terminal)
e saber se ele está ou não funcionando.

