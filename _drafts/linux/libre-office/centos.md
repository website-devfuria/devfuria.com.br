CENTOS 6.4
===


Crie um pasta chamada libre/ será de uso temporário, depois pode apagar.
Nela colocaremos os arquivos de instalação (rpm).

Baixe o libre office, execute o comando abaixo na paste libre/:

    [root@localhost libre]# wget http://download.documentfoundation.org/libreoffice/stable/4.1.1/rpm/x86_64/LibreOffice_4.1.1_Linux_x86-64_rpm.tar.gz

Obs: 4.1 é a versão atual em set/2013.


Remova as versões anteriores

    yum remove openoffice.org* libreoffice.org*

Obs: no meu caso não funcionou, então eu tenho a versão antiga e a atual.


Extraia o arquivo "tar"

    tar -xvf LibreOffice_4.1.1_Linux_x86-64_rpm.tar.gz


Ele cria-rá uma pasta parecida com esta:

    LibreOffice_4.1.1_Linux_x86-64_rpm/


Dentro dela a outra pasta chamada RPMS/:


    LibreOffice_4.1.1_Linux_x86-64_rpm/RPMS/


Detro da pasta RPMS teremos que executar todos os arquivos rpm.

Para evitar confusão, mostrarei o resultado do comando <code>pwd</code>:

    /home/seu-usuario/outra-pasta-qualquer/libre/LibreOffice_4.1.1.2_Linux_x86-64_rpm/RPMS


Agora execute:

    yum localinstall *.rpm



Fonte

http://www.tecmint.com/install-libreoffice-on-rhel-entos-6-3-5-8-and-fedora-17-16/


