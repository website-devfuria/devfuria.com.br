---
layout:      grid12-article
title:       Instalando o x-debug no Linux
description: Como instalar x-debug no Linux.
---

O __x-debug__ é uma ferramenta de depuração para a linguagem PHP.

Sem o x-debug, o resultado de `var_dump($array)` virá sem formatação, dificultando a depuração.

Com o x-debug, o resultado de `var_dump($array)` virá bem formatado, e será fácil depurar o programa.

Obviamente que `var_dump($array)` é só um exemplo simples, você também poderá olhar "dentro" de objetos. Sem contar que,
quando o script PHP lançar uma erro o x-debug exibirá o __traceback__ completo.

O site Oficial é [xdebug.org](http://xdebug.org/index.php "link-externo").



Debian (wheezy)
---

Primeiro é preciso fazer o download.

Mas como saber qual a versão correta para o seus sistema?

Aí entra o "pulo do gato". O site do x-debug disponibiliza uma página onde você encontrará uma caixa de texto grande.
Nela você deve inserir o conteúdo de seu `phpinfo()`, isso mesmo! Maluco né? Vou explicar melhor...

Crie um arquivo denominado `info.php` e salve no documentroot `/var/www/`. Insira no arquivo o seguinte conteúdo:

    <?php echo phpinfo(); ?>

Agora abra no navegador a URL `http://localhost/info.php`, você deve estar vendo uma página com informações da instalação
de seu PHP.

Copie todo o conteúdo desta página, acione __CTRL + A__ e depois copie.

Vá até a página do [x-debug](http://xdebug.org/wizard.php "link-externo") e cole a informação dentro daquela caixa de texto.

CLique no botão __"Analyse my phpinfo() output"__ e bingo! A página seguinte será o passo a passo para instalação
do x-debug (personalizado para sua máquina). Inclusive com o link para o download da versão correta do x-debug.

Para você ter um idéia do resultado, eu vou lhe mostrar o guia para a minha máquina:

Dica: com você terá que executar o __phpize__, instale antes essas pacotes `apt-get install php5-dev php-pear`.


    // este será o link
    Download xdebug-2.3.0.tgz
    
    // descompactar
    tar -xvzf xdebug-2.3.0.tgz
    
    // entre na pasta
    cd xdebug-2.3.0

    // execute o phpize
    phpize
    // você verá algo próximo a isso:
    // Configuring for:
    // ...
    // Zend Module Api No:      20100525
    // Zend Extension Api No:   220100525

    //
    // Compile
    //
    ./configure
    make

    // copie o módulo
    cp modules/xdebug.so /usr/lib/php5/20100525

    // Atualize seu arquivi `php.ini`
    // eu utilizo o editor "nano"
    nano /etc/php5/apache2/php.ini

    // acrescente esta linha
    zend_extension = /usr/lib/php5/20100525/xdebug.so

    // reinicie o ervidor web (apache)
    /etc/init.d/apache2 restart




Ubuntu
---

Dica: talvez seja muito mais fácil instalar pelo Software-center, caso não consiga...

Instale os seguintes pacotes:

	# apt-get install php5-dev php-pear

Com o PECL (pear) pode-se instalar novos pacotes no estilo `apt-get`, instale o x-debug:

	# pecl install xdebug

Agora é preciso atualizar o arquivo `php.ini` com a inclusão da extensão __x-debug__. Mas antes, precisamos saber aonde
está a extensão, execute:

	# find/ -name 'x-debug.sos'2> /dev/null

O sistema lhe mostra o caminho, anote-o.

Abra o arquivo __php.ini__ (`/etc/php5/apache2/php.ini`) e no final do arquivo ou na seção de extensões,
inclua a seguinte linha:

	Zend_extension="/usr/lib/php5/caminho-anotado"

Reinicie o apache

	# /etc/init.d/apache2 restart



Fedora
---

 __Apache__ e o __PHP__ devem estar instalados.


Execute.

	# yum install php-pecl-xdebug


Reinicie o apache.

	# systemctl restart httpd.service
