---
layout:      materia
title:       Instalando o MySql no Linux
description: Aprenda como instalar o banco de dados MySql no Linux
---

MySql é um banco de dados opensource.

Ao término de cada receita, você podeŕa checar se a instalação foi bem sucedida seguindo os passos:

	# mysql -h localhost -u root -p

Pedirá a senha que você acabou de definir e mostrar o prompt do mysql como abaixo:

	mysql>

Digite __exit__ para sair.




### CentOS

Instalar o software:

	# yum install mysql mysql-server -y 

Iniciar e habilitar o serviço:

	# /etc/init.d/mysqld start
	
	# chkconfig mysqld on 

Setar uma senha para o root (do mysql):

	# /usr/bin/mysql_secure_installation



### Fedora 17

	# yum install mysql mysql-server

Iniciar e habilitar o serviço:

	# systemctl start mysqld.service
	
	# systemctl enable mysqld.service

Setar uma senha para o root (do mysql):

	# mysqladmin -u root password sua_senha_aqui



### Ubuntu

	# apt-get install mysql-server mysql-client

Setar uma senha para o root (do mysql):

	# mysqladmin -u root password sua_senha_aqui
