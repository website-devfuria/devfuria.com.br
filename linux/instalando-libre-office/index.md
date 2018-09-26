---
title:       Instalando o Libre Office no Linux
description: Aprenda como instalar o Libre Office no Linux
capitulo:    linux-instalando-utils
---



### CentOS 6.4


Vá até od iretório `/tmp` e crie um pasta chamada `/libre` (será de uso temporário, depois o sistema apagará).

Nela colocaremos os arquivos de instalação (rpm).

Baixe o __Libre Office__, execute o comando:

    wget http://download.documentfoundation.org/libreoffice/stable/4.1.1/rpm/x86_64/LibreOffice_4.1.1_Linux_x86-64_rpm.tar.gz

Obs: 4.1 é a versão atual em set/2013.


Remova as versões anteriores

    yum remove openoffice.org* libreoffice.org*

No meu caso não funcionou, o sistema manteve a versão antiga e a atual.


Extraia o arquivo __tar__:

    tar -xvf LibreOffice_4.1.1_Linux_x86-64_rpm.tar.gz


Ele cria-rá uma pasta parecida com esta:

    LibreOffice_4.1.1_Linux_x86-64_rpm/


Dentro dela, há outra pasta chamada `/RPMS`:


    LibreOffice_4.1.1_Linux_x86-64_rpm/RPMS/


Detro da pasta `/RPMS` teremos que executar todos os arquivos __rpm__.

Agora execute:

    yum localinstall *.rpm


- - -
Fonte

- [http://www.tecmint.com/install-libreoffice-on-rhel-entos-6-3-5-8-and-fedora-17-16/](http://www.tecmint.com/install-libreoffice-on-rhel-entos-6-3-5-8-and-fedora-17-16/)





### Fedora

Acima da versão 17 do Fedora, já vem instalado.

Na versão 17, execute:

    yum list|grep libreoffice
    yum install libreoffice


- - -
Fonte

-[http://www.youtube.com/watch?v=E3RhI23hFYs](http://www.youtube.com/watch?v=E3RhI23hFYs)


