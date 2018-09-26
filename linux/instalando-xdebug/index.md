---
title:       Instalando o x-debug no Linux
description: Como instalar x-debug no Linux.
capitulo:    linux-instalando-php
---

O __x-debug__ é uma ferramenta de depuração para a linguagem PHP.

Sem o x-debug, o resultado de `var_dump($array)` virá sem formatação, dificultando a depuração.

Com o x-debug, o resultado de `var_dump($array)` virá bem formatado, e será fácil depurar o programa.

Obviamente que `var_dump($array)` é só um exemplo simples, você também poderá olhar "dentro" de objetos. Sem contar que,
quando o script PHP lançar uma erro o x-debug exibirá o __traceback__ completo.

O site Oficial é [xdebug.org](http://xdebug.org/index.php).



Debian (wheezy)
---

Primeiro é preciso fazer o download.

Mas como saber qual a versão correta para o seus sistema?

Aí entra o "pulo do gato". O site do x-debug disponibiliza uma página onde você encontrará uma caixa de texto grande.
Nela você deve inserir o conteúdo de seu `phpinfo()`, isso mesmo! Maluco né ? Vou explicar melhor...

Crie um arquivo denominado `info.php` e salve no documentroot `/var/www/`. Insira no arquivo o seguinte conteúdo:

    <?php echo phpinfo(); ?>

Agora abra no navegador a URL `http://localhost/info.php`, você deve estar vendo uma página com informações da instalação
de seu PHP.

Copie todo o conteúdo desta página, acione __CTRL + A__ e depois copie.

Vá até a página do [x-debug](http://xdebug.org/wizard.php) e cole a informação dentro daquela caixa de texto.

Clique no botão __"Analyse my phpinfo() output"__ e bingo! A página seguinte será o passo a passo para instalação
do x-debug (personalizado para sua máquina). Inclusive com o link para o download da versão correta do x-debug.

Para você ter um idéia do resultado, eu vou lhe mostrar o guia para a minha máquina:

Dica: como você terá que executar o __phpize__, instale antes essas pacotes `apt-get install php5-dev php-pear`.

No meu caso, a versão é `2.3.0`, você precisa seguir o que foi dito acima para descobrir qual o seu link.

    Download xdebug-2.3.0.tgz

Descompactar.

    tar -xvzf xdebug-2.3.0.tgz

Entre na pasta.

    cd xdebug-2.3.0

Execute o __phpize__, você verá algo próximo a isso:

    Configuring for:
    ...
    Zend Module Api No:      20100525
    Zend Extension Api No:   220100525

Dica: quanto você executa o `phpize` no seu terminal você ver´a uma numeração conforme exemplo acima. O seu número deve
ser idêntico ao mostrado pelo página "wizard" do x-debu. Se for diferente, atualize o phpize, como? Como root execute
`apt-get install php7.0-dev  `.

Caso os números estahem corretos continuamos com a compilação, execute...

    ./configure
    make

Copie o módulo

    cp modules/xdebug.so /usr/lib/php5/20100525

Atualize seu arquivo `php.ini`,  eu utilizo o editor "nano", então...

    nano /etc/php5/apache2/php.ini

Acrescente esta linha ao arquivo.

    zend_extension = /usr/lib/php5/20100525/xdebug.so

Aproveite para habilitar o c-debug para o terminal, então repita o passo anterior mas neste arquivo...

    nano /etc/php5/cli/php.ini

Reinicie o servidor web (apache)

    /etc/init.d/apache2 restart





Ubuntu 15.4 (Vivid Vervet)
---

Brother, eu fui pelo Software Center, sem sofrimentos!

Para conferir a instalação execute o comando abaixo.

    php -v

Sua tela deve ser algo semelhante ao exibido abaixo.

    PHP 5.6.4-4ubuntu6 (cli) (built: Apr 17 2015 15:47:51)
    Copyright (c) 1997-2014 The PHP Group
    Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies
        with Zend OPcache v7.0.4-dev, Copyright (c) 1999-2014, by Zend Technologies
        with Xdebug v2.2.6, Copyright (c) 2002-2014, by Derick Rethans

A última linha indica que o __xdebug__ foi instalado.




Ubuntu (versões antigas)
---

Dica: talvez seja muito mais fácil instalar pelo Software-Center, caso não consiga...

Instale os seguintes pacotes:

    apt-get install php5-dev php-pear

Com o PECL (pear) pode-se instalar novos pacotes no estilo `apt-get`, instale o x-debug:

    pecl install xdebug

Onde será que o Linux gravou a extensão x-debug? Digite e anote o caminho:

    find / -name 'xdebug.so' 2> /dev/null

Agora, precisamos dizer ao PHP que o x-debug existe. Par tal, é preciso incluir um linha no final do arquivo `php.ini`.

Abra o `php.ini`:

    nano /etc/php5/php.ini

No final do arquivo ou no fim da seção "extensões" inclua a seguinte linha:

    zend_extension = caminho_anotado

Reinicie o apache

    /etc/init.d/apache2 restart



Fedora
---

 __Apache__ e o __PHP__ devem estar instalados.


Execute o comando abaixo e [reinicie o apache](/linux/reiniciar-servidor-apache/)

    yum install php-pecl-xdebug
