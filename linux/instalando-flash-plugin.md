---
layout:      materia
title:       Instalando flash-plugin no Firefox
description: Aprenda como instalar flash-plugin no Firefox
---


### Fedora 19

Digite no terminal

    # yum install chromium flash-plugin


### CentOS (6.4)


Baixe dois pacotes do site da Adobe:

    http://get.adobe.com/flashplayer/?promoid=JZEFT

O pacote YUM e o pacote rpm.

Na verdade os dois são __rpm's__, não sei porque fizeram essa distinção.

Eu testei depois de instalados, então não sei dizer qual que realmente resolveu o problema.

Dê permissão para os arquivos __rpm__ (precisa ser root)

    # chmod 777 nome-do-pacote.rpm

Instale via rpm:

    # rpm -ivh nome-do-pacote.rpm

Reinicie o Firefox.


    