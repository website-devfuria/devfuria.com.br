Instalação do Python 3.3, pip 1.5 e Django 1.6
=============================================


	// yum -y update NÂO executado


	yum groupinstall -y 'development tools'
	yum install -y zlib-dev openssl-devel sqlite-devel bzip2-devel

A zlib-dev ele não achou


### Python

	cd /opt
	wget http://www.python.org/ftp/python/3.3.3/Python-3.3.3.tar
	yum install xz-libs (já estava instalado)
	xz -d Python-3.3.3.tar.xz
	tar -xvf Python-3.3.3.tar

	cd Python-3.3.3    
	/configure
	make
	make altinstall

Nenhuma mensagem de erro.

	ln -s /usr/local/bin/python3 /usr/bin/python3

Verificação:

	ls -ltr /usr/bin/python*
	ls -ltr /usr/local/bin/python*
	/usr/local/bin/python3.3 --version 
	python3 --version


### pip

	cd opt/
	wget https://bootstrap.pypa.io/get-pip.py
	python3 get-pip.py
	

### Django

	pip install Django==1.6.5

Conferindo:

	python -c "import django; print(django.get_version())"



