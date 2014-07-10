CENTOS 6.4

Instalar o software:

	# yum install mysql mysql-server -y 

Iniciar e habilitar o serviço:

	# /etc/init.d/mysqld start
	
	# chkconfig mysqld on 

Setar uma senha para o root (do mysql):

	# /usr/bin/mysql_secure_installation
