CENTOS 6.4
===

Talvez seja preciso instalar o EPEL antes:

    # wget http://dl.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    # rpm -ivh EPEL-release-6-8.noarch.rpm 


Instale o software:

    # yum install phpmyadmin -y 


Reinicie o apache

    # /etc/init.d/httpd restart 
