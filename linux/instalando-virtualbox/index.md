---
title:       Instalando o VirtualBox no Linux
description: Aprenda como instalar o VirtualBox no Linux
capitulo:    linux-virtualbox
ordem:       1
---


CentOS
---

Baixar os seguintes pacotes ( http://rpm.pbone.net ):

    VirtualBox-4.2-4.2.18_88780_el6-1.x86_64.rpm
    SDL-1.2.14-3.el6.x86_64.rpm
    dkms-2.2.0.3-8.1.noarch.rpm
    epel-release-6-8.noarch.rpm

Instale-os:

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


Reinicie (`reboot`) e execute:

    /etc/init.d/vboxdrv setup


 Caso apareça o erro: "Failed to load VMMR0.r0 (VERR_SUPLIB_WORLD_WRITABLE)", execute no terminal:

    wget http://download.virtualbox.org/virtualbox/4.3.0/Oracle_VM_VirtualBox_Extension_Pack-4.3.0-89960.vbox-extpack
    chmod o-w /usr
    chmod o-w /usr/lib
    vboxmanage extpack install Oracle_VM_VirtualBox_Extension_Pack-4.3.0-89960.vbox-extpack

- - -
Fontes

- [www.if-not-true-then-false.com/install-virtualbox-with-yum-on-fedora-centos-red-hat-rhel](http://www.if-not-true-then-false.com/2010/install-virtualbox-with-yum-on-fedora-centos-red-hat-rhel/)
- [www.if-not-true-then-false.com/install-virtualbox-guest-additions-on-fedora-centos-red-hat-rhel](http://www.if-not-true-then-false.com/2010/install-virtualbox-guest-additions-on-fedora-centos-red-hat-rhel/)




Fedora 18
---

Baixe o rpm e instale.

O segredo está em baixar o rpm correto, no meu caso eu utilizei este aqui:

http://download.virtualbox.org/virtualbox/rpm/fedora/18/x86_64/VirtualBox-4.2-4.2.18_88780_fedora18-1.x86_64.rpm

Neste link, procure a versão do seu fedora e baixe o rpm, aí é só executar:

	rpm -ivh VirtualBox[restante do arquivo].rpm



Fedora
---

Numa pasta qualquer, crie um arquivo chamado `virtualbox.repo` e insira nele o seguinte conteúdo:

	[virtualbox]
	name=Fedora $releasever - $basearch - VirtualBox
	baseurl=http://download.virtualbox.org/virtualbox/rpm/fedora/$releasever/$basearch
	enabled=1
	gpgcheck=1
	gpgkey=http://download.virtualbox.org/virtualbox/debian/oracle_vbox.asc


Mover o arquivo recém criado para a pasta de repositórios adicionais do Fedora:

    mv virtualbox.repo /etc/yum.repos.d/

Agora, instale o pacote DMKS executando:

    yum install dkms

Instalar o Vbox:

    yum install VirtualBox-4.2

- - -
Fonte:
- [install-oracle-virtualbox-on-fedora](http://www.zealfortechnology.com/2012/06/install-oracle-virtualbox-on-fedora.html)



Ubuntu
---

Utilize o Software Center ou siga esse tutorial [Como instalar o VirtualBox no Ubuntu ](http://ubuntued.info/como-instalar-o-virtualbox-no-ubuntu)




Configurações
---


### Para acessar pendrive no virtual box no Ubuntu

Baixe e instale o arquivo de extensão de pacote abaixo:

    Oracle_VM_VirtualBox_Extension_Pack-4.1.18-78361.vbox-extpack

Obs: Desculpe, você terá que procurar este arquivo na net.


Após a instalação, inicialize o terminal e execute os seguintes comandos:

    sudo apt-get update
    sudo apt-get install dkms
    sudo adduser seu_usuário vboxusers

Além da instalação acima também será preciso instalar o __samba__. Para isso, plugue o USB na máquina, entre nas suas
configurações e habilite a opção compartilhamento. Após a conclusão, inicialize a VirtualBox e nas configurações encontre
o seu USB.


### Para acesar pendrive no virtual box no Fedora


É preciso adicionar seu usuário ao grupo vboxusers

    adduser seu_usuario vboxusers



### Resolvendo o erro: 'Kernel driver not installed(rc = 1908)' no Ubuntu


Quando o virtual box apresenta o seguinte erro:

    Kernel driver not installed(rc = 1908)
    '/etc/init.d/vboxdrv setup'

Execute para corrigir:

    apt-get install virtual-dkms
    modprobe vboxdrv



### Resolvendo o erro '/etc/init.d/vboxdrv setup' no Fedora


Quando o VirtualBox apresenta o erro acima, execute para corrigir:

    yum install kernel-develckernel-headers gcc dkms

Execute  em seguida:

    /etc/init.d/vboxdrv setup


<!--
Compartilhando pastas
---

https://forums.virtualbox.org/viewtopic.php?t=15868
http://www.vivaolinux.com.br/dica/Compartilhamento-de-pastas-no-VirtualBox
-->