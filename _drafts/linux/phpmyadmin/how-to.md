Para acessar sem ter que digitar senha
======================================


Edite o arquivo abaixo...

	# nano usr/share/phpmyadmin/libraries/config.default.php

...alterando as seguintes variáveis

	$cfg['Servers']['auth-type'] = 'config';
	$cfg['Servers']['user'] = 'nome_do_usuario';
	$cfg['Servers']['password'] = 'Senha_do_usuario';
	
	
Para alterar apenas a senha, digite no terminal...

	# mysqladmin -u root -p'oldpassword' password newpass
