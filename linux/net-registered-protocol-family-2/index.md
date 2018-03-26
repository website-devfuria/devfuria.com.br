---
title:       Resolvendo o erro "NET Registered protocol family 2" no Virtual Box
description: Ao iniciar CentOS 5.6 no Virtual Box aparece o seguinte erro "NET Registered protocol family 2"
capitulo:    linux-virtualbox
ordem:       6
---

O iniciar a máquia virtual CentOS 5.6 (não confunda com a 6.5) no Virtual Box ela trava e é exibido o erro
`NET: Registered protocol family 2`, veja a imagem:

![Imagem ilustrando erro na virtual box](vbox-hang-1.png "Imagem ilustrando erro na virtual box")

Para resolver basta habiltar a opção __Enable IO APIC__ nas configurações da máquina virtual, veja imagem:

![Imagem ilustrando erro na virtual box](vbox-hang-2.png "Imagem ilustrando erro na virtual box")


### Fonte

- [virtual-box-net-registered-protocol-2-hang](http://m04m.com/2012/01/13/virtual-box-net-registered-protocol-2-hang/)
