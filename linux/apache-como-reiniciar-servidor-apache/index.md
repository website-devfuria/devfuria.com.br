---
title:       Como reiniciar o servidor Apache
description: Lista dos comando e uma breve explicação de como reinicializar o servidor web Apache
capitulo:    linux-instalando-apache
---

Neste breve artigo eu mostro como reinicializar o servidor web Apache no Linux.

Se você precisar apenas atualizar alguma configuração, não será preciso parar o servidor, bastará executar o comando
`reload`.

Se você precisa realmente reiniciar os servidor (parar e iniciar) execute `restart`. Este comando é um "talho" que
executa de uma vez só os comando `stop` e `start`.

Se o servidor encontra-se para e voce precisa aconá-lo execute o comando `start`.

Se deseja para o servidor execute o comando `stop`.

Veja um resumo:

- `start` inicia o serivor
- `stop` para o servidor
- `restart` executa __stop__ e depois __start__
- `reload` Lê as configurações sem parar o servidor


O comando completo varia de distro para distro, veja as diferenças:


### Família Debian, Ubuntu

    systemctl [comando] apache2.service
    service apache2 [comando]
    /etc/init.d/apache2 [comando]


### Família HadHat, CentOS

    systemctl [comando] httpd.service
    service httpd [comando]
    /etc/init.d/httpd [comando]

### Debian (wheezy)

    service apache2 [comando]

### Fedora

    systemctl [comando] httpd.service