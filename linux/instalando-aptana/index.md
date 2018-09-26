---
title:       Instalando Aptana no Fedora
description: Aprenda como instalar o Aptana no Fedora
capitulo:    linux-instalando-editores
---


Realize o download do __Aptana__ por meio do site e extraia na pasta home

    www.aptana.org/products/studio3/download

Mova a pasta extraida para o usr/local/bin:

    mv Aptana_Studio_3 /usr/local/bin/

Vá até a pasta:

    cd Aptana_Studio_3 /usr/local/bin/

Adicione o seguinte arquivo:

    nano ~/.bashrc

Insira a seguinte linhha no arquivo:

    PATH=$PATH:/usr/local/bin/Aptana_Studio_3

Para adicionar um ícone, vá até o seguinte caminho:

    cd /usr/share/applications

Crie um novo arquivo:

    nano aptana-studio-3.desktop

Adicione no arquivo:

	[Desktop Entry]
	Name=Aptana Studio 3
	Exec=/usr/local/bin/Aptana_Studio_3/aptana
	Icon=/usr/local/bin/Aptana_Studio_3/icon.xpm
	Type=Application Categories=Development


### Fontes:

- [http://stackoverflow.com/questions/10607534/aptana-studio-3-install-using-yum](http://stackoverflow.com/questions/10607534/aptana-studio-3-install-using-yum)