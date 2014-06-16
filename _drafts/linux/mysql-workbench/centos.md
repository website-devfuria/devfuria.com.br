Workbench & Utilities - Centos6
===


### Workbench

Primeiro baixe os arquivos RPM no site oficial

http://dev.mysql.com/downloads/tools/

Eu abaixei o "Utilities" também e isntalei separadamente.

Vá até a sua pasta de doownload e dê permissão para execução 
	
	chmod 777 nome-do-arquivo

Segundo o manual do mysql (http://dev.mysql.com/doc/workbench/en/wb-installing-linux.html) basta executar:

	rpm -i nome-do-arquivo.prm

Mas no meu caso deu erro dependência.
Uma olhada rápida neste link...

http://certcollection.org/forum/topic/141624-how-to-install-mysql-workbench-in-centos-6/

.. e eu descobri que posso fazer isso:

	yum install nome-do-arquivo.rpm

mas antes, atualize o sistema:

	yum update


### Utilities

Baixe o arquivo e dê permissão de execução.
Ao executar o pacote rpm, obtive erro de dependência (denovo), 
agora acusava o "mysql-connector-python".

Achei o pacote para download no proprio site do mysql

http://dev.mysql.com/downloads/file.php?id=414337

É um pacote tar comprimido e na própria documentação
pede para descompactar, extrair e executar um arquio python

http://dev.mysql.com/doc/connector-python/en/connector-python-installation-source-uni

mas o dowbload trás apenas um arquivo RPM, então tá né! Exeutei o rpm sem problemas:

	yum install mysql-connector-python-1.0.12-1.el6.noarch.rpm

e depois, finalmente:

	yum install mysql-utilities-1.3.5-1.el6.noarch.rpm






