---
title:       SSH - acessando o Linux remotamente
description: Como acessar o Linux remotamente e de forma segura
capitulo:    linux-artigos
ordem:
---

Você precisa acessar um servidor remotamente? utilize o __SSH__.

> O SSH é uma ferramenta de acesso remoto bastante poderosa, que permite acessar máquinas Linux remotamente de forma segura.
> Ele se baseia no uso de criptografia assimétrica para criar um túnel seguro onde são transmitidos os dados, garantindo a
> segurança mesmo em casos onde a transmissão pode ser interceptada, como no caso de uma rede wireless sem encriptação.
>
> Fonte: Guia do Hardware - SSH na prática, para iniciantes



Par acessar a máquina remotamente a partir de outras máquinas Linux utilize o comando ´ssh´, seguido do login usuário
(na máquina remota) e o endereço, como em:

    ssh usuario@192.168.1.192

Outro exemplo seria

    ssh usuario@www.foo.com.br


Instalando no Ubuntu
---

    sudo apt-get install openssh-server



### Fontes

- [Guia do Hardware - SSH na prática, para iniciantes](http://www.hardware.com.br/tutoriais/ssh-iniciantes/)
- [Guia do Hardware - Dominando o SSH](http://www.hardware.com.br/tutoriais/dominando-ssh/pagina2.html)
- [Guia do Hardware - Guia de Acesso Remoto (SSH, NX Server, VNC e WTS)](http://www.hardware.com.br/guias/acesso-remoto/)