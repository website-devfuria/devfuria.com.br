---
layout:      grid12-article
title:       Instalando VLC no CentOS
description: Como instalar o player de audio e video VLCs no Linux
---


O __VLC__ é um player de audio e video muito bom para linux.


Vá até o diretório:

    cd /etc/yum.repos.d/

E adicione o seguinte repositório:

    wget http://pkgrepo.linuxtech.net/el6/release/linuxtech.repo

Instale o aplicativo via `yum`:

    yum install vlc
