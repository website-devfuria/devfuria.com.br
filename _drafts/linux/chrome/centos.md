CHROME - CentoOS 6
===

Adicione ao repositório o chrome. Para isso cire o seguite arquivo

	/etc/yum.repos.d/google-chrome.repo

.. com o seguinte conteúdo

	[google-chrome]
	name=google-chrome
	baseurl=http://dl.google.com/linux/chrome/rpm/stable/$basearch
	enabled=1
	gpgcheck=1
	gpgkey=https://dl-ssl.google.com/linux/linux_signing_key.pub


Agora instale:

	# yum install google-chrome-stable


E então instale o pacote:

	# chmod u+x install_chrome.sh

        # ./install_chrome.sh


Caso tenha problemas, caminho alternativo...
---

trata-se de um script que faz o trabalho pesado:

	# wget http://chrome.richardlloyd.org.uk/install_chrome.sh
	# chmod u+x install_chrome.sh
	# ./install_chrome.sh
	
fonte: http://www.tecmint.com/install-google-chrome-on-redhat-centos-fedora-linux/	
