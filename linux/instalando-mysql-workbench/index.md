---
title:       Instalando Workbench & Utilities no Linux
description: Aprenda como instalar o Workbench & Utilities no Linux
capitulo:    linux-instalando-db
---

MySQL Workbench é uma ferramenta que ajuda a gerenciar o banco MySQL.

Antes de prosseguir é preciso ter o banco de dados [MySQL](/linux/instalando-mysql/) devidamente instalado.



### Ubuntu 15.4 (vivid Vervet)

    apt-get install mysql-workbench



### CentOS 6

Primeiro baixe os arquivos __rpm__ no site oficial

    http://dev.mysql.com/downloads/tools/

Eu abaixei o "Utilities" também e instalei separadamente.

Vá até a sua pasta de download e dê [permissão de execução](/linux/como-dar-permissao-de-execucao).

Segundo o [manual do mysql](http://dev.mysql.com/doc/workbench/en/wb-installing-linux.html) basta executar:

	rpm -i nome-do-arquivo.prm

Mas no meu caso deu erro dependência. Uma olhada rápida neste
[link](http://certcollection.org/forum/topic/141624-how-to-install-mysql-workbench-in-centos-6/)
eu descobri que posso fazer isso:

	yum install nome-do-arquivo.rpm

Mas antes, atualize o sistema:

	yum update



### Utilities

Baixe o arquivo e dê permissão de execução.

Ao executar o pacote rpm, obtive erro de dependência (de novo), só que agora acusava o `mysql-connector-python`.

Achei o pacote para download no próprio [site do mysql](http://dev.mysql.com/downloads/file.php?id=414337).

É um pacote __tar__ comprimido só que na [própria documentação](http://dev.mysql.com/doc/connector-python/en/connector-python-installation-source-uni)
pede para descompactar, extrair e executar um arquivo __python__. Vai entender!

Porém, o download tráz apenas um arquivo __rpm__, então tá né! Executei o __rpm__ sem problemas:

    yum install mysql-connector-python-1.0.12-1.el6.noarch.rpm

e depois, finalmente:

	yum install mysql-utilities-1.3.5-1.el6.noarch.rpm
