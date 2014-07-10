Instalar Wodim no CentOS(6.5)
===


Para instalar

    # yum installwodim


Para gravar o *iso*

    wodim path/to/image.iso


O programa tenta descobrir qual é o distpositivo de CD (DVD).
Se ele não encontrar

    wodim --devices

Ele exibirá algo parecido com isto:

    wodim: Overview of accessible drives (1 found) :
    --------------------------------------------------------------
    0  dev='/dev/hda'	rwrw-- : 'Slimtype' 'DVD A  DS8A1P'
    --------------------------------------------------------------

Agora execute:

    wodim dev=/dev/hda path/to/image.iso

Referência
---

http://paradadigital.com/2010/09/25/gravar-imagem-iso-em-cd-dvd-no-linux-debian-ubuntu-pelo-terminal.html