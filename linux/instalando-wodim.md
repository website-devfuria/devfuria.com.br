---
layout:      materia
title:       Instalando o Wodim no CentOS
description: Aprenda como instalar o gravador de isos Wodim no CentOS
---


Wodim é um gravador de imagens iso.


### Instalando

    # yum install wodim


### Como utilizar

Para gravar o __iso__, execute:

    wodim path/to/image.iso

O programa tenta descobrir qual é o dispositivo de CD (DVD). Se ele não encontrar, execute:

    wodim --devices

O comando acima exibirá algo parecido com isto:

    wodim: Overview of accessible drives (1 found) :
    --------------------------------------------------------------
    0  dev='/dev/hda'	rwrw-- : 'Slimtype' 'DVD A  DS8A1P'
    --------------------------------------------------------------

Agora execute:

    wodim dev=/dev/hda path/to/image.iso


<hr>
Fonte

- [http://paradadigital.com/2010/09/25/gravar-imagem-iso-em-cd-dvd-no-linux-debian-ubuntu-pelo-terminal.html](http://paradadigital.com/2010/09/25/gravar-imagem-iso-em-cd-dvd-no-linux-debian-ubuntu-pelo-terminal.html "link-externo")