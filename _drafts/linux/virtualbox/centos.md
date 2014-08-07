CentOS 6.4
---


Baixar os seguintes pacotes ( http://rpm.pbone.net ):

    VirtualBox-4.2-4.2.18_88780_el6-1.x86_64.rpm 
    SDL-1.2.14-3.el6.x86_64.rpm
    dkms-2.2.0.3-8.1.noarch.rpm
    epel-release-6-8.noarch.rpm 

Istale-os:

    rpm -ivh SDL
    rpm -ivh VirtualBox
    rpm -ivh dkms
    rpm -ivh epel-release-6-8.noarch.rpm 


Execute:

    yum install kernel-devel
    yum install kernel-headers-$(uname -r)
    yum install binutils gcc make patch libgomp glibc-headers glibc-devel kernel-headers


Aproveitamos para acertar o usuário:

    usermod -a -G vboxusers seu-user-name


Importante atualizr o sistema (acho que é aqui que a máquina acontece)

    yum update

Reinicie

    reboot

Rode (e cruze os dedos):

    /etc/init.d/vboxdrv setup


 Caso apareça o erro: "Failed to load VMMR0.r0 (VERR_SUPLIB_WORLD_WRITABLE)", execute no terminal:

    # wget http://download.virtualbox.org/virtualbox/4.3.0/Oracle_VM_VirtualBox_Extension_Pack-4.3.0-89960.vbox-extpack
    # chmod o-w /usr
    # chmod o-w /usr/lib
    # vboxmanage extpack install Oracle_VM_VirtualBox_Extension_Pack-4.3.0-89960.vbox-extpack



Veja mais info em

http://www.if-not-true-then-false.com/2010/install-virtualbox-with-yum-on-fedora-centos-red-hat-rhel/
http://www.if-not-true-then-false.com/2010/install-virtualbox-guest-additions-on-fedora-centos-red-hat-rhel/