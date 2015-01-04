---
layout:      grid12-article
title:       WSGI Servindo páginas web (html)
description: 
---




### Instalando o mod_wsgi


Instale as dependências

	yum install httpd httpd-devel

Baixe o __mod_wsgi__ na pasta /opt

	cd /opt
	wget https://github.com/GrahamDumpleton/mod_wsgi/archive/3.5.tar.gz

Descompacte o arquivo.

	tar -xvf 3.5

Instale o mod_wsgi

	cd mod_wsgi-3.5/
	./configure --with-python=/usr/local/bin/python3.4
	make
	make install

Reinicie o servidor Apache

	/etc/init.d/httpd restart



Configurando o módulo
---

Verifique se o `wsgi.so` contém todos os módulos ativos.
	
	ldd /etc/httpd/modules/mod_wsgi.so

Provavelmente o módulo `libpython3.4m.so.1.0` estará com o valor `not found` conforme exemplo abaixo.

    linux-vdso.so.1 =>  (0x00007fff3ab68000)
    libpython3.4m.so.1.0 => not found
    libpthread.so.0 => /lib64/libpthread.so.0 (0x00002b2fe7edc000)
    libdl.so.2 => /lib64/libdl.so.2 (0x00002b2fe80f8000)
    libutil.so.1 => /lib64/libutil.so.1 (0x00002b2fe82fc000)
    libm.so.6 => /lib64/libm.so.6 (0x00002b2fe8500000)
    libc.so.6 => /lib64/libc.so.6 (0x00002b2fe8783000)
    /lib64/ld-linux-x86-64.so.2 (0x00000038ce200000)

Para adicionar o PATH correto do modulo `libpython3.4m.so.1.0` crie um arquivo com as configurações abaixo

	nano /etc/profile.d/custom.sh

No arquivo digite:

    export LD_LIBRARY_PATH=/usr/local/lib
    export LD_RUN_PATH=/usr/local/lib/

Quando você reiniciar a máquina, o arquivo será lido e as configurações iniciadas. Mas para que eles fiquem ativos neste
instante você precisará exportar os mesmos módulos na sessão atual. Basta digitar no terminal o mesmo conteúdo inserido
no arquivo:

	export LD_LIBRARY_PATH=/usr/local/lib  (ENTER)
	export LD_RUN_PATH=/usr/local/lib/     (ENTER)

Verifique, novamente, se o modulo foi encontrado.

	ldd /etc/httpd/modules/mod_wsgi.so

Adicione no arquivo `/etc/httpd/conf/httpd.conf` na seção "Dynamic Shared Object (DSO) Support" a linha abaixo para
carregar o modulo WSGI no Apache:

	LoadModule wsgi_module modules/mod_wsgi.so

Reinicie o apache

	/etc/init.d/httpd restart



Testando as configurações do WSGI
---


Nosso objetivo será digitar  a URL `localhost/foo/` no navegador e o Apache irá executar/devolver o resultado do script
`/projetos/projeto01/index.py`. Passando a limpo:

- url:   `localhost/foo/`
- alvo:  `/projetos/projeto01/index.py`


Crie o arquivo `index.py` na sua pasta de projetos.

	nano /projetos/projeto01/index.py

No arquivo `index.py` digite o código abaixo.

    def application(environ, start_response):
        status = '200 OK'
        response_headers = [('Content-type', 'text/plain')]
        start_response(status, response_headers)
        return ["Hello world!"]

Dica: deixe o conteúdo "grudado" à esquerda e use espaços para a endentação.

Adicione no arquivo `/etc/httpd/conf/httpd.conf` a linha abaixo:

	WSGIScriptAlias ​​/foo/ /projetos/projeto01/index.py

Nota: não precisa da diretiva `<directory>`.

Reinicie o apache.

	/etc/init.d/httpd restart

No navegador digite `localhost/foo/`.

Caso apresente algum erro, experimente o log do Apache `tail /var/log/httpd/error_log` para ver mais detalhes.
