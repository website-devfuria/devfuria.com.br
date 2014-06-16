FEDORA 17+


	# yum install mysql mysql-server


Iniciar e habilitar o serviço:

	# systemctl start mysqld.service
	
	# systemctl enable mysqld.service

Setar uma senha para o root (do mysql):

	# mysqladmin -u root password sua_senha_aqui


Checar se deu tudo certo:

	# mysql -h localhost -u root -p

Pedira a senha que você acabou de definir e 
mostrar o prompt do mysql

	mysql>

Digite *exit* para sair
