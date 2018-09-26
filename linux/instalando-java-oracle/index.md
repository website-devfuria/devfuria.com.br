---
title:       Instalando conjunto de utilitários JDK (Java Development Kit) versão Oracle
description: Aprenda a instalar JDK-8 (Java Development Kit) versão Oracle
capitulo:    linux-instalando-utils
---

Caso você precise executar o Java no navegador talvez o OpenJDK lhe deixe na mão, então a solução é
instalar a versão do Java da Oracle.

Se o seu objetivo era instalar a versão OpenJDK veja esta est a receita
[Instalando conjunto de utilitários JDK (Java Development Kit)](/linux/instalando-java/)

Para certificar-se de sua versão execute...

    $ java -version
    java version "1.6.0_31"
    OpenJDK Runtime Environment (IcedTea6 1.13.3) (6b31-1.13.3-1~deb7u1)
    OpenJDK 64-Bit Server VM (build 23.25-b01, mixed mode)

A receita original mostrava como desintalar o OpenJDK, mas em meu caso haviam softwares que dependiam desta versão,
então optei por não desintalar a versão OpenJDK e parece que o sistema convive com as duas versões.

    // Desinstale se não precisar do OpenJDK
    apt-get remove --purge openjdk-*


Adicione os repositórios abaixo.

    echo "deb http://ppa.launchpad.net/webupd8team/java/ubuntu trusty main" | tee /etc/apt/sources.list.d/webupd8team-java.list
    echo "deb-src http://ppa.launchpad.net/webupd8team/java/ubuntu trusty main" | tee -a /etc/apt/sources.list.d/webupd8team-java.list

Adicione a key.

    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys EEA14886

Atualize a lista de pacotes.

    apt-get update

Agora, instale o JDK 8 digitando...

    apt-get install oracle-java8-installer
