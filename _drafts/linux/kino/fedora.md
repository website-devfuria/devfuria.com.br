FEDORA 18

Baixar o RPM (kino-1.3.4-1.el6.rf.x86_64.rpm)
	http://pkgs.repoforge.org/kino/

Adicione esse repositório

	# su -c 'rpm -Uvh http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm'	
	# su -c 'rpm -Uvh http://download1.rpmfusion.org/nonfree/fedora/rpmfusion-nonfree-release-stable.noarch.rpm'
	# su -c 'rpm -Uvh http://rpm.livna.org/livna-release.rpm'

Instale as dependências

	# yum install mjpegtools mjpegtools-devel 
	# yum install libquicktime 

O software 

	# rpm -ivh kino-1.3.4-1.el6.rf.x86_64.rpm


Veja mais informações em 

* http://fedorasolved.org/post-install-solutions/yum-config
* http://ccrma.stanford.edu/planetccrma/software/libraries.html

