CENT OS 6.4
===


### Instalar última versão do firefox

    # wget Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    # rpm -Uvh epel-release-6-8.noarch.rpm

    # wget http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
    # rpm -Uvh remi-release-6.rpm

    # yum --enablerepo=remi list firefox
    # yum --enablerepo=remi install firefox


Fonte

http://www.tecmint.com/install-firefox-in-rhelcentos-6-3-fedora-17-16/



### Atualizando da versão 17 para 24


Adicionar os seguites repositórios:

    # rpm -Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    # rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm



O comando seguite mostra na tela o pacote que poderá ser atualizado

    # yum --enablerepo=remi list firefox


Atualize... 

    # yum update firefox

...ou instale

    # yum install firefox


Fonte

http://www.if-not-true-then-false.com/2011/install-firefox-on-fedora-centos-red-hat-rhel/












