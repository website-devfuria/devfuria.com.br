---
title:       Como tirar um screenshot (CentOS)
description: No Linux, você precisa tirar um print-screen da tela e não sabe como?
capitulo:    linux-artigos
ordem:
---

Sabe quando você quer tirar um print-screen da tela?

No CentOS 6.3, o utilitário que realiza esta tarefa não vem instalado por padrão e ao prescionar a tecla __"Print Screen"__
a seguinte mensagem de erro aparece:

    "gnome-screenshot" (No such file or directory)


Basta instalar o __gnome-screenshot__ que se encontra dentro do pacote __gnome-utils__.

Instalando o __gnome-utils__ instalamos  o __gnome-screenshot__.

    yum install gnome-utils -y


- - -
Fonte:
- [http://senecacd.wordpress.com/](http://senecacd.wordpress.com/2012/11/06/taking-screenshots-on-centos-gnome-screenshot-util/)