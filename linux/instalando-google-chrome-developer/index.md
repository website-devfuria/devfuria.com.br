---
title:       Instalando a última versão do Google Chrome
description: Como instalar a ultima versão do navegador Google Chrome no Linux
capitulo:    linux-instalando-utils
---

Escolha sua versão e baixe o Chrome no seguinte link...

[http://www.google.com.br/chrome/](http://www.google.com.br/chrome/)


O link disponibiliza pacotes `deb`(Debian, Ubuntu) e pacotes `rpm` (CentOS,
Fedora, openSUSE).

No meu caso eu escolhi o __rpm__ pois meu sistema é CentOS.

Após baixar o arquivo, [dê permissão de execução](/linux/como-dar-permissao-de-execucao/).



### RPM

Eu optei em executar através do __yum__, deu tudo certo, bastou...

    yum google-chrome-stable_current_x86_64

Mas você também poderá executar...

    rpm -ivh google-chrome-stable_current_x86_64.rpm


### DEB

    dpkg -i google-chrome-stable_current_x86_64.deb
