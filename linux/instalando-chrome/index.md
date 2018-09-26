---
title:       Instalando o navegador Chome no Linux
description: Como instalar o navegador Google Chrome no Linux
capitulo:    linux-instalando-utils
---



CentOS
---

Adicione ao repositório do Chrome criando o seguinte arquivo.

	/etc/yum.repos.d/google-chrome.repo

No arquivo, insira o seguinte conteúdo:

	[google-chrome]
	name=google-chrome
	baseurl=http://dl.google.com/linux/chrome/rpm/stable/$basearch
	enabled=1
	gpgcheck=1
	gpgkey=https://dl-ssl.google.com/linux/linux_signing_key.pub


Agora instale via `yum`.

    yum install google-chrome-stable



### Caso tenha problemas, caminho alternativo...

Ttrata-se de um script que faz o trabalho pesado:

    wget http://chrome.richardlloyd.org.uk/install_chrome.sh
    chmod u+x install_chrome.sh
    ./install_chrome.sh

- - -
Fonte:

- [www.tecmint.com/install-google-chrome](http://www.tecmint.com/install-google-chrome-on-redhat-centos-fedora-linux/	)


Fedora
---

Instale as dependências:

    yum install redhat-lsb wget

Baixar o pacote __rpm__ no site da google e dê [permissão para execução](/linux/como-dar-permissao-de-execucao/).


Instale:

    rpm -ivh nome-do-pacote.rpm






Ubuntu
---

Instale via Software Center ou via __repositório__:

Baixar pacote e dar [permissão para execução](/linux/como-dar-permissao-de-execucao/).

    https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb


Instalar dependências

    apt-get install libxss1

Executar o pacote.

    dpkg google-crhme*.deb
