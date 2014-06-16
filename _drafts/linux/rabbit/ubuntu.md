NAUTILUS RABBIT (equivalente ao turtoise no windows)
GUI para gerenciar o SVN via nautilus


Instalê as depêndencias

	# apt-get install python-nautilus python-svn python-configobj python-glade2 meld


Baixar pacote debian e dê permissão (chmod 777 file)

	www.nautilussvn.googlecode.com/files/nautilussvn_0.12-1ubuntu2_all.deb


Execute

	# dpkg -i mauilussvn*.deb


Adicione esses pacotes ao repositório

	# add-apt-repository ppa:rabbitvcs/ppa


Atualize o sistema

	# apt-get update
	# apt-get upgrade


Instale o software

	# apt-get install rabbitvcs-nautilus3 rabbitvcs-thunar rabbitvcs-gedit rabbitvcs-cli


Reinicie o linux (halt)
