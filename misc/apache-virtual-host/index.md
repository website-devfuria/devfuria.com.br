---
layout:      artigo
title:       Apache - Configurando Virtual Hosts
description: Aprenda a utilizar Virtual Host no Apache, acompanha um exemplo prático.
---

Este artigo é para quem quer configurar o Apache (localmente), através de Virtual Hosts, com o intento de imitar o
ambiente de produção.

Quando desenvolvemos softwares, utilizamos nossa própria máquina como se fosse um servidor local, por isso chamamos ela
de __localhost__. Os desenvolvedores sempre tentam imitar ao máximo o ambiente de produção e existem algumas técnicas
para conseguir esse objetivo. Enquanto escrevo este artigo (jan/2015), a forma mais elegante de imitar o ambiente de
produção é fazer uso do [Vagrant](https://www.vagrantup.com/), mas essa não é a única forma. Durante
muito tempo (antes do Vagrant) fizemos isso utilizando uma Virtual Host, quer dizer, já é uma técnica ultrapassada, porém
ainda muito utilizada.

O servidor Apache pode ser configurado para servir apenas a um site, o que é natural quando o cliente é dono e administra
o servidor. Neste caso, a pasta principal (documentroot) `/var/www/` responderá por todos os sistemas ali instalados e
haverá uma única configuração para os diversos sistemas.

O Apache também pode ser configurado para hospedar vários sites no mesmo servidor, cada um com sua própria configuração,
fazemos isso através do [Virtual Host](http://httpd.apache.org/docs/2.4/).

Configurar o Apache com a intenção de administrá-lo é um trabalho para os profissionais de infraestrutura, porém neste
artigo nos vamos aprender a configurar o Apache apenas para adequar o ambiente de desenvolvimento. Digo isto para que
você percebe a diferença entre as abordagens:

    1. Configurar o Apache para atender a diversos sites e sistemas (ambiente de produção)
    2. Configurar o Apache para desenvolver softwares (ambiente de desenvolvimento)



O que é Virtual Host ?
---

Virtual Hosts (sites virtuais) é um recurso que permite servir mais de um site no mesmo servidor. Podem ser usadas
diretivas específicas para o controle do site virtual, como nome do administrador, erros de acesso a página, controle de
acesso e outros dados úteis para personalizar e gerenciar o site. ([wikibooks.org - Guia do Linux](http://pt.wikibooks.org/wiki/Guia_do_Linux/Avan%C3%A7ado/Apache/Virtual_Hosts))

Imagine que você precise servir 2 sites distintos: `www.joao.com.br` e `www.maria.com.br`, cada qual com sua configuração,
exemplo:

    // arquivo "/etc/apache2/sites-available/joao"
    <VirtualHost *:80>
        ServerName www.joao.com.br
        DocumentRoot /var/www/joao
    </VirtualHost>

    // arquivo "/etc/apache2/sites-available/maria"
    <VirtualHost *:80>
        ServerName www.maria.com.br
        DocumentRoot /var/www/maria
    </VirtualHost>

Se listarmos o diretório `/etc/apache2/sites-available/` veremos o seguinte resultado:

    default
    joao
    maria

Estas são as Virtual Hosts disponíveis para seu servidor Apache. Para habilitar devemos utilizar o comando `a2ensite` e
para desabilitar utilizamos o comando `a2dissite`.

Repare que ambos os exemplos apontam para o documentroot padrão `/var/www/`, ou seja o Virtual Host não é o responsável
pela redirecionamento. Se você configurar o Apache para um ambiente de produção você deve utilizar um
[servidor de DNS](http://pt.wikipedia.org/wiki/Domain_Name_System), se você configurar o Apache para um
ambiente de desenvolvimento você pode utilizar algo mais simples que um DNS, o [arquivo hots](/misc/arquivo-hosts/), por
exemplo.

Veja mais detalhes em
[hardware.com.br - Apache: Usando virtual hosts](http://www.hardware.com.br/dicas/apache-virtual-hosts.html)

Explicar o que é um Virtual Host através da teoria pode ser pouco produtivo, então vamos partir para um exemplo prático...


Criando uma Virtual Host
---

Nosso objetivo é criar um Virtual Host para o endereço fictício `www.foo.local`. Os arquivos do projeto estarão em um
local parecido com este `/pasta/de/projetos/foo`, logo, se digitarmos a URL no navegador, o servidor web deve
redirecionar para nossa pasta (`/pasta/de/projetos/foo`).

Suponhamos que o projeto rode sobre o domínio `www.foo.com.br`. Não vamos redirecionar o domínio oficial afim de evitar
que você tenha que modificar sua Virtual Host cada vez que precisar alternar entre a versão de produção e a de desenvolvimento.
Explico melhor:

- A versão de __produção__ responderá pela ULR `www.foo.com.br`

- A versão de __desenvolvimento__ responderá pela ULR `www.foo.local`

Vamos começar alterando o [arquivo hots](/misc/arquivo-hosts/). Normalmente, ele se encontra no endereço `/etc/hosts`.

O conteúdo do arquivo hosts deve ser como abaixo.

    127.0.0.1 localhost
    127.0.0.1 www.foo.local

Salve o arquivo e experimente acessar a URL `www.foo.local`, você pode fazer isso através do navegador ou pelo utilitário
__curl__: `curl www.foo.local`.

O resultado de `www.foo.local` deve ser idêntico ao resultado de `localhost`.

Agora, vamos partir para a __configuração do Apache__. Eu estou no Debian (wheezy), se você tiver em outra distro,
talvez tenha que acertar um caminho ou outro mas, em geral, a configuração é bem parecida.

Vamos até a pasta onde o Apache guarda os Virtual Hosts `cd /etc/apache2/sites-available`.

A partir desta pasta, como dito, o Apache pode habilitar ou desabilitar individualmente cada Virtual Hosts, faremos isso
através dos comandos listados a seguir:

- `a2ensite nome-do-arquivo` - para habilitar
- `a2dissite nome-do-arquivo` - para desabilitar

Quando habilitamos um "site" o Apache cria um link para a pasta `/etc/apache2/sites-enabled`, quando desabilitamos, ele
remove o link.

Crie um arquivo denominado simplesmente `foo` e insira o seguinte conteúdo.

    <VirtualHost *:80>
        ServerName www.foo.local
        ServerAlias foo.local
        DocumentRoot /pasta/de/projetos/foo
    </VirtualHost>

Corrija a diretiva `DocumentRoot` para a pasta onde está seus projetos (pode ser qualquer pasta).

Podemos, então, habilitar o novo Virtual Host com o comando abaixo.

    a2ensite foo

Para surtir efeito, devemos [reiniciar o Apache](/linux/apache-como-reiniciar-servidor-apache/).


### Testando

Na pasta `/pasta/de/projetos/foo` crie um arquivo HTML bem simples chamado `index.html`, exemplo:

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Criando Virtual Host</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Ok, sua Virtual Host foi configurada corretamente!</p>
    </body>
</html>
```
Novamente, acesse a URL `www.foo.local`, você deve ver o HTML acima renderizado.

Se encontrar algum problema, tente ver os logs do Apache `tail /var/log/apache2/error.log` no Debian ou
`tail /var/log/httpd/error_log` para família RedHat.



Veja também
---

__CGI__ é um acrónimo para a expressão inglesa __Common Gateway Interface__. Consiste numa importante tecnologia que
permite gerar páginas dinâmicas, permitindo a um navegador passar parâmetros para um programa alojado num servidor web.
Assim, designam-se por __scripts CGI__ os pequenos programas (veja exemplos ao longo da matéria) que interpretam esses
parâmetros e geram a página depois de os processar.

Leia mais no artigo [CGI Servindo páginas web (html)](/misc/cgi-common-gateway-interface/)