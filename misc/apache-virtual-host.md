---
layout:       grid12-article
title:        Apache e virtualhosts
description:  
---


    /etc/apache2/sites-available/maria:


    <VirtualHost *:80>
        ServerName www.joao.com.br
        DocumentRoot /var/www/joao
    </VirtualHost>


    <VirtualHost *:80>
        ServerName www.maria.com.br
        DocumentRoot /var/www/maria
    </VirtualHost>





Criando uma Virtual Host
---

Nosso objetivo é criar um Virtual Host para o endereço fictício `www.foo.local`. Os arquivos do projeto estarão em um
local parecido com este `/pasta/de/projetos/foo`, logo, se digitarmos a URL no navegador o servidor web deve 
redirecionar para nossa pasta (`/pasta/de/projetos/foo`).

Supomos que o projeto roda sobre o domínio `www.foo.com.br`, mas não vamos redirecionar o domínio oficial se não você
terá que alterar sua Virtual Host cada vez que quiser trocar entre a versão de produção e a de desenvolvimento.

- A versão de __produção__ responde pela ULR `www.foo.com.br`.

- A versão de __desenvolvimento__ responde pela ULR `www.foo.local`.

Vamos começar alterando o [arquivo hots](/misc/arquivo-hosts/). Normalmente, ele se encontra no endereço `/etc/hosts`.

O conteúdo deve do arquivo hosts deve ser como abaixo.

    127.0.0.1 localhost
    127.0.0.1 www.foo.local

Salve o arquivo e experimente acessar a URL `www.foo.local`, você pode fazer isso através do navegador ou pelo utilitário
__curl__: `curl www.foo.local`.

O resultado de `www.foo.local` deve ser idêntico ao resultado de `localhost`.

Agora, vamos partir para a __configuração do Apache__.

Eu estou no Debian (wheezy), se você tiver em outra distro, talvez tenha que acertar um caminho ou outro mas, em geral, a 
configuração é bem parecida.

Vamos até a pasta onde o Apache guarda os Virtual Hosts `cd /etc/apache2/sites-available`.

A partir desta pasta, o Apache pode habilitar ou desabilitar individualmente cada Virtual Hosts, faremos isso através
dos comandos listados a seguir:

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

Para surtir efeito, devemos reiniciar o Apache `service apache2 reload` (na família RedHat `/etc/apache2/conf.d/apache2 restart`).


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
Novamente, acesse a URL `www.foo.loca`, você deve ver o HTML acima renderizado.

Se encontra algum problema tente ver os logs do Apache `tail /var/log/apache2/error.log` no Debian ou 
`tail /var/log/httpd/error_log` para família RedHat.