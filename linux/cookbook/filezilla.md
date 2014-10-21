---
layout: grid12-article
title: Instalando o Filezilla (FTP)
description: Aprenda a isntalar o Filezilla no Linux
---

O [Filezilla](https://filezilla-project.org/ "link-externo") é um cliente de
[FTP](http://pt.wikipedia.org/wiki/File_Transfer_Protocol "link-externo").

Compilar seu código fonte é um desafio, veja a 
[documentação oficial](https://wiki.filezilla-project.org/Client_Compile "link-externo") 
de como compilar os fontes e tire suas próprias conclusões. 

Abaixo seguem receitas de como instalar via __apt-get__ / __yum__:


### Centos 6.4+

	# yum -y install filezilla

### Fedora 17+

	# yum -y install filezilla

### Ubuntu

    # apt-get -y install filezilla filezilla-locales

Ou instale via software center

Fonte: [http://wiki.ubuntu-br.org/FileZilla](http://wiki.ubuntu-br.org/FileZilla "link-externo")



### Debian 7.5 (wheezy)

É preciso adicionar algum canal de repositório.

Altere o arquivo `/etc/apt/sources.list`, inclua a seguinte linha:

    deb http://packages.linuxmint.com/ debian main upstream import

Atualizamos o __apt-get__:

    apt-get update

Agora é só instalar:

    apt-get install filezilla

