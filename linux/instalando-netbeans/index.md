---
title:       Instalando o Netbeans no Linux
description: Como instalar o Netbeans no Linux
capitulo:    linux-instalando-editores
---


Baixe a última versão no site oficial [http://netbeans.org](http://netbeans.org) e dê
[permissão de execução](/linux/como-dar-permissao-de-execucao)

Execute o arquivo (como usuário normal:

	$ ./nome_do_arquivo

Talvez seja necessário reiniciar a máquina.


Os sabores do Netbeans
---

O __Netbeans__ foi originalmente escrito para dar suporte a linguagem Java. Mas ele também dá suporte a linguagem PHP,
C, C++ e Python.

O projeto do Python não é desenvolvido diretamente pela Oracle, mas sim pela comunidade.

Você pode escolher baixar a versão completa (Java + PHP + C) ou baixar cada versão e instalar uma a uma. O resultado
final é o mesmo, você terá uma IDE para as 3 linguagens mencionadas. A vantagem e instalar separadamente é que você
pode fazer a combinação que quizer, por exemplo:

- PHP e C
- Java e PHP
- Java e C

O módulo Python não vem com a versão full. Você tem que instalar separadamente.

Baixe o pacote a partir deste link [netbeans-6.5-python-linux.sh](http://dlc.sun.com.edgesuite.net/netbeans/6.5/python/ea/ ).

Dê permissão ao arquivo (`chmod 775 netbeans-6.5-python-linux.sh`) e excute:

    ./netbeans-6.5-python-linux.sh

O problema é que a versão está defazada 6.5!!!

- - -
Fonte
- [wiki.netbeans.org/Python](http://wiki.netbeans.org/Python)




