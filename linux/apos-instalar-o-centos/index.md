---
title:       Após instalar o CentOS
description: O que instalar depois de instalar o CentOS
capitulo:    linux-artigos
ordem:
---


### Habilitar menu de contexto no Nautilus "Open in terminal"

    yum install nautilus-open-terminal


### NTFs:

Para abrir dispositivos que utilizem USB

Instale:

    yum install ntfs-3g -y

Realizando a montagem do dispositivo:

    mount -t ntfs /dev/sdb1 /mnt ou mount -t ntfs-3g /dev/sdb1 /mnt


### Codecs MPEG 4  AAC e  H.264

Instale as dependências

    yum install autoconf automake gcc gcc-c++ git libtool make nasm pkgconfig zlib-devel

Seguir o guia...

    https://trac.ffmpeg.org/wiki/CentosCompilationGuide


Veja também

- [vivaolinux.com.br/artigo/CentOS-Pos-instalacao-basica](http://www.vivaolinux.com.br/artigo/CentOS-Pos-instalacao-basica)
- [hardware.com.br/tutoriais/centos/pagina3.html](http://www.hardware.com.br/tutoriais/centos/pagina3.html)
