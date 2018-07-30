---
title:       Instalando o Team Viewer no Linux
description: Aprenda como instalar o Team Viewer no Linux
capitulo:    linux-instalando-utils
---

TeamViewer é um pacote para o controle remoto, compartilhamento de desktop, reuniões on-line, web conferência e
transferência de arquivos entre computadores.


### Instalando no Fedora

Baixar pacote.

	http://download.teamviewer.com/download/teamviewer_linux.rpm


Dar permissão de execução.

	chmod 777 teamviewer_linux.rpm

Executar o rpm.

	rpm -ivh teamviewer_linux.rpm



### Instalando no Ubuntu

Baixar o pacote conforma arquitetura.

32 bits:

	http://download.teamviewer.com/download/teamviewer_linux.deb

64 bits:

	http://download.teamviewer.com/download/teamviewer_linux_x64.deb

Dar permissão de execução

	chmod 777 file

Executar o pacote deb.

	dpkg -i teamviewer_linux.deb