Após instalação
---

http://www.vivaolinux.com.br/artigo/CentOS-Pos-instalacao-basica
http://www.hardware.com.br/tutoriais/centos/pagina3.html


Habilitar menu de contexto no Nautilus "Open in terminal"
---

    # yum install nautilus-open-terminal



Instalar NTFs:
---

Para abrir dispositivos que utilizem USB

Instale:

    # yum install ntfs-3g -y

Realizando a montagem do dispositivo:

    # mount -t ntfs /dev/sdb1 /mnt ou mount -t ntfs-3g /dev/sdb1 /mnt


Como instalar impressora HP
---------------------------

Instale as dependências HPLIP:

    #su -c "yum -y -d 10 -e 1 install cups cups-devel gcc-c++ ghostscript libjpeg-devel glibc-headers libtool libusb-devel make python python-devel PyXML openssl-devel net-snmp-devel policycoreutils-gui PyQt PyQt-devel dbus-python notify-python sane-backends sane-backends-devel sane-frontends xsane python-imaging python-imaging-devel"

Verifica se as bibliotecas estão desativadas:

    # su -c "rpm -ev --nodeps libsane-hpaio"
    # su -c "rpm -ev hplip-gui"
    # su -c "rpm -ev hplip"
    # su -c "rpm -ev hpijs"

Habilitando a biblioteca libcrypto:

    #su -c "ln -s /lib/libcrypto.so.0.9.8b /lib/libcrypto.so"


Desabilite o Selinux:


Realize o Download do HPLIP:

    # http://sourceforge.net/projects/hplip/files/hplip/3.13.9/hplip-3.13.9.tar.gz/download?use_mirror=ufpr


Descompacte o arquivo tar:

    # tar xvfz hplip-3.13.9.tar.gz


Altere o diretório de trabalho para o diretório hplip-3.13.9:

    # cd hplip-3.13.9

Configurando o HPLIP para a instalação:

    # . / Configure - with-hpppddir = / usr / share / cups / model / HP - libdir = / usr/lib64 - prefix = / usr - enable-qt4 - disable-libusb01_build - enable-doc-build - enable-cups-ppd-install - disable-foomatic-drv-install - disable-foomatic-ppd-install - disable-hpijs-install - disable-udev_sysfs_rules - disable-policykit - disable-cups- drv-install - enable-hpcups-install - enable-network-build - enable-dbus-build - enable-scan-build - enable-fax-build

Execute o Make:

    # make

Instale o Make:

    # su -c "make install"


Para além do root adicionar o nome de usuário "lp" e grupo "sys" usuários normais:

    # su-c "/ usr / sbin / usermod-a-G lp, sys $ USER"

Reinicie o computador e adicione a impressora:

    # system-config-printer