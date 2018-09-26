---
title:       Como desabilitar SElinux0 (Fedora e CentOS)
description: Como desabilitar SElinux0 (Fedora e CentOS)
capitulo:    linux-artigos
ordem:
---


### O que é SELinux ?

> O SELinux (Secure Linux), um sistema que visa reforçar a segurança do sistema, aplicando um conjunto de diretivas
> rígidas de segurança. O grande problema é que o SELinux interfere no funcionamento de um grande volume de serviços e de
> softwares adicionais, o que torna necessário criar exceções para cada caso.
>
> Isso faz com que o modo "Enforcing" (Forçando) do SELinux seja aconselhável apenas em situações onde a segurança
> realmente seja um fator crítico e onde o administrador possua profundos conhecimentos do sistema, de forma a
> diagnosticar problemas causados pelas políticas de segurança e criar as exceções necessárias. Um meio termo é o nível
> "Permissive" (permissivo), onde o SELinux é aplicado apenas a alguns serviços específicos (o Apache e o Bind, por
> exemplo) e age apenas em relação a eles.
>
> Mesmo sem o SELinux, o CentOS é uma distribuição bastante segura. Enquanto você estiver estudando sobre o sistema e
> utilizando-o em servidores de rede local, é interessante desativar o sistema. Com isso, você evita situações onde
> determinados serviços não estão funcionando (apesar da configuração estar correta) por causa das restrições do SELinux.
>
> Fonte: Guia do hardware - Tutorial do CentOS


### Como desabilitar?

Procure o arquivo "config" na pasta "/etc/selinux/" e abra ele em algum editor como no exemplo abaixo:

    nano /etc/selinux/config

Altere a linha `SELINUX=enable` para `SELINUX=disabled`.

Reinicie o linux.

Teste executando:

    /usr/sbin/getenforce
	Disabled


### Fonte

- [Guia do hardware - Tutorial do CentOS](http://www.hardware.com.br/tutoriais/centos/pagina2.html)
- [docs.fedoraproject.org](http://docs.fedoraproject.org/en-US/Fedora/13/html/Security-Enhanced_Linux/sect-Security-Enhanced_Linux-Working_with_SELinux-Enabling_and_Disabling_SELinux.html)

