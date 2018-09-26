---
title:       Instalando o rar no Fedora
description: Aprenda como instalar o rar no Fedora
capitulo:    linux-instalando-utils
---

Adicionar os repositórios abaixo:

    rpm -ivh http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm
    rpm -ivh http://download1.rpmfusion.org/nonfree/fedora/rpmfusion-nonfree-release-stable.noarch.rpm

Execute:

    yum list all > yum_list.txt
    grep unrar yum_list.txt

Instale:

    yum install unrar