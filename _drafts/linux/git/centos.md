Instalar a versão 1.8.3 do git
----

Download dos arquivos:

    # wget http://git-core.googlecode.com/files/git-1.8.3.4.tar.gz
    

Instalar a bibliotecas necessárias:
        
    # yum install zlib-devel perl-CPAN gettext

Realizar a instalação:
    
    # tar xvfz git-1.8.3.4.tar.gz
    # cd git-1.8.3.4
    # ./configure
    # make
    # make install prefix=/usr
    # git --version


Referências 
---

http://www.unixmen.com/how-to-install-latest-git-on-rhel-6-centos-6/ 

http://halyph.blogspot.com.br/2013/08/how-to-install-git-1834-on-centos-64.html
