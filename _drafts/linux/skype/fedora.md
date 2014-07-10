Fedora 18, skype 4.1.0.20

Importe a chave GPGP

	# su -c "gpg --keyserver pgp.mit.edu --recv-keys 0xD66B746E"

	# su -c "gpg -a -o /etc/pki/rpm-gpg/RPM-GPG-KEY-skype --export 0xD66B746E"


Inclua o repositório do skype

Crie um arquivo chamado "skype.repo" e insira o conteúdo abaixo:

	[skype]
	name=Skype Repository
	baseurl=http://download.skype.com/linux/repos/fedora/updates/i586/
	#gpgkey=http://www.skype.com/products/skype/linux/rpm-public-key.asc
	gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-skype
	enabled=1
	gpgcheck=1

Mova o arquivo para a pasta /etc/yum.repos.d/skype.repo, veja comando abaixo:

	# mv skype.repo /etc/yum.repos.d/skype.repo


Instale o software

	# wget http://www.skype.com/go/getskype-linux-beta-fc10

	# yum install libXScrnSaver.i?86 libX11.i?86 libXv.i?86 libv4l.i?86 alsa-plugins-pulseaudio.i?86 qt-x11.i?86;yum localinstall skype-*.rpm --nogpgcheck
 

Adicione um alias ao .bashrc

	# alias skype='LD_PRELOAD=/usr/lib/libv4l/v4l1compat.so /usr/bin/skype'


Veja mais informações em:

* http://fedorasolved.org/Members/dcr226/installing-skype
