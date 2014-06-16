---
layout: materia
title:  Como instalar o GuestAdditions (CentOS)
---


Essa receita foi testada com __CentOS 6.4__ tanto na máquina (hospedeira) como na máquina virtual (convidado).



### Instalando as dependências


Atualize seu sistema

    # yum update

Instale os headers do kernel, se não você verá a seguinte menssagem de erro: __"The headers for the current running kernel were not found"__

    # yum install kernel-devel

Instale também o GCC (compilador da GNU), se não você verá a seguinte menssagem de erro: __"The gcc utility was not found"__.

    # yum install gcc


### Instalando o Guest Addtions (adicionais de convidados)

Para habilitar a pasta com os arquivos de instalação é preciso clicar no menu __"Devices"__ e  depois na opção 
__"Install Guest Additions"__.

![Figura com o resultado de preg-set-order](devices-install-guest-additions.jpg "preg-set-order")

Após isso o __Vbox__ irá montar uma pasta (como se fosse um CD-ROM) com o nome `VBOXADDTIONS_XXX` onde XXX é a versão de
sua instalação. 

![Figura com o resultado de preg-set-order](vbox-linux-additions-run.png "preg-set-order")

Então, vamos até a pasta 

    # cd /media/VBOXADDITIONS_4.2.18.88780

E executamos o instalador:

    # ./VBoxLinuxAdditions.run

Reinicie a máquina.


### Fontes:

- [https://www.virtualbox.org/manual/ch04.html#idp55330864](https://www.virtualbox.org/manual/ch04.html#idp55330864)
- [https://www.virtualbox.org/manual/ch02.html#install-linux-host](https://www.virtualbox.org/manual/ch02.html#install-linux-host)
- [https://forums.virtualbox.org/viewtopic.php?f=3&t=39975](https://forums.virtualbox.org/viewtopic.php?f=3&t=39975)
- [http://www.vivaolinux.com.br/dica/Como-instalar-o-Guest-Additions-no-Debian-do-Virtualbox](http://www.vivaolinux.com.br/dica/Como-instalar-o-Guest-Additions-no-Debian-do-Virtualbox)
- [http://unix.stackexchange.com/questions/18435/how-to-install-virtualbox-guest-additions-on-centos-via-command-line-only](http://unix.stackexchange.com/questions/18435/how-to-install-virtualbox-guest-additions-on-centos-via-command-line-only)


Veja também
---

- [Resolvendo o erro "Building the OpenGL support module"](/linux/vbox-building-the-opengl-support-module/ "Resolvendo o erro 'Building the OpenGL support module'")
- [Resolvendo o erro "headers for the current running kernel were not found"](/linux/vbox-headers-for-the-current-running-kernel-were-not-found/ "Resolvendo o erro 'headers for the current running kernel were not found'")




