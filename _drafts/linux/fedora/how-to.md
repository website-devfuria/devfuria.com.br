



Como listar todos os usuários
-----------------------------

	# cat /etc/passwd | awk -F ":" '{print $1}'



Como instalar impressora HP
---------------------------

Instale o drive da impressora através do site: http://hplipopensource.com/hplip-web/index.html

Após a conclusão deste, localize o arquivo e execute o seguinte comando:

	# sh hplip-3.12.10a.run

Para mais informações acesse o site: http://hplipopensource.com/hplip-web/install/install/index.html


Adicionar impressora ?
----------------------

	# system-config-printer


Para gerar cd com as atualizações
----------------------------------

http://revisor.fedoraunity.org/



Qual diretório para scripts de configuração e redirecionamento do apache(.conf) ?
---------------------------------------------------------------------------------

	etc/httpd/conf.d/meuscript.conf



Drivers video
--------------

https://ask.fedoraproject.org/question/9511/how-to-install-a-intel-video-driver-on-fedora/

su -c 'yum localinstall --nogpgcheck http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm http://download1.rpmfusion.org/nonfree/fedora/rpmfusion-nonfree-release-stable.noarch.rpm'

sudo yum -y update


sudo yum -y install mesa-dri-drivers
su -c 'yum install libtxc_dxtn --enablerepo=rpmfusion-free-updates'


sudo yum -y update



Melhorar o som
--------------

http://www.ubuntero.com.br/2011/10/melhorar-qualidade-de-som-de-videos/



Softwares de MP3
----------------

http://www.abouthack.com/articles/linux/playing-mp3-in-fedora-17.html




Referências sobre fedora
-----------------


http://www.devin.com.br/gerenciador-de-pacotes-yum/

http://fedora.wiki.br/wiki/FAQ_do_Fedora_10

http://fedoraproject.org/wiki/Administration_Guide_Draft/Apache

http://forums.fedoraforum.org/showthread.php?t=184564

http://www.my-guides.net/en/guides/linux/346-fedora-17-post-installation-guide

http://www.unixmen.com/201205-howto-install-lamp-in-fedora/

http://www.howtoforge.com/installing-apache2-with-php5-and-mysql-support-on-fedora-11-lamp



Tudo sobre fedora
-----------------

http://fedora.wiki.br/wiki/FAQ_do_Fedora_10
http://fedoraproject.org/wiki/Administration_Guide_Draft/Apache