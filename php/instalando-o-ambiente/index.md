---
layout:      grid12-article
title:       Instalando o ambiente LAMP
description: Aprenda a instalar o ambiente de programação do PHP no Linux
---

Todo programador precisa saber “levantar” seu próprio ambiente de trabalho, me refiro a instalar os programas necessários
para começar o desenvolvimento. Não pense que existe um tutorial mágico que lhe ensinará a fazer essas coisas rapidamente,
porque realmente não existe.

Pouco se discute sobre o ambiente de desenvolvimento, mas um pensamento é unânime: __“o ambiente de desenvolvimento deve
simular ao máximo o ambiente de produção”__. Atualmente, utilizamos o [Vagrant](https://www.vagrantup.com/), ele isola
sua máquina da máquina de desenvolvimento. Não vou cobrir o Vagrant, porque para quem está começando, é importante aprender
a instalar primeiro em seu próprio desktop (apesar desse não ser o ideal).


### E o pessoal do Windows?

Para o pessoal Windows eu sugiro a instalação do [WAMP], procure por "wamp server". Ele já instala tudo no estilo 
"next, next, next, finish": apache, mysql, php, phpmyadmin. Irá faltar apenas o x-debug.

### LAMP, WAMP, XAMP, que negócio é esse?

Todo esse processo roda sobre um sistema operacional, podendo ser tanto o Linux como o Windows. Quando utilizamos o Linux,
diz-se que a arquitetura é a LAMP (Linux, Apache, Mysql e PHP), quando utilizamos o Windows, diz-se que a arquitetura é
WAMP (Windows, Apache, Mysql e PHP) e quando ela é híbrida, garantindo assim seu funcionamento tanto no windows como no
Linux, diz-se XAMP, onde o “X” representa o sistema operacional.


Instalando o Apache2
---

No Ubuntu digite:

    apt-get install apache2

No Fedora são três linhas...

    yum install httpd
    chkconfig --levels 235 httpd on
    systemctl start httpd.service

Para ter certeza de que o Apache foi instalado corretamente, abra um navegador qualquer é digite `http://localhost`. É 
exibido uma página simples com a frase “It’s work”.

Leia mais sobre [como instalar e configurar o Apache](/linux/cookbook/apache-via-yum-apt-get/) na seção Linux.




Instalando o PHP
---

Na sequência instalamos o php, no terminal do Ubuntu digite:

    apt-get install php5 libapache2-mod-php5

No terminal do Fedora digite:

    yum install httpd php php-common

Para testar o PHP, crie um arquivo com o nome `index.php` conforme mostrado abaixo e salve em `/var/www` (Ubuntu) e
`/var/www/html` (Fedora).

É preciso ser root para inserir arquivos nesta pasta.

```php
<?php
// index.php
echo phpinfo(); 
?>
```

Este arquivo dá um "print" no resultado da função `phpinfo()`, essa função traz dados preciosos sobre a instalação. Abra
o navegador e digite novamente `http://localhost`, agora aparecerá a tela do PHP e as informações da instalação.

Neste momento, é aconselhável instalar alguns módulos complementares que serão úteis no futuro. Com o tempo você descobrirá
os "seus" pacotes. Mas por enquanto instale estes:

no Ubuntu...

    apt-get install php5-mysql php5-curl php5-gd php5-idn\ php5-dev php-pear

no Fedora...

    yum install php-pecl-apc php-cli php-pear php-pdo php-mysql php-pgsql php-pecl-mongo php-pecl-memcache php-pecl-memcached php-gd php-mbstring php-mcrypt php-xml

Para que o Apache, juntamente com o módulo do PHP execute os scripts, eles devem ser ser salvos no “documentroot”
(raiz do documento). “DocumentRoot” nada mais é do que a pasta na qual o servidor “sabe” que contém arquivos nos quais 
ele deve ler e interpretar. Por padrão, no Linux a pasta é `/var/www` (Debian e derivados) e `/var/www/html` (RedHat e derivados).

É possível alterar este local configurando diretamente o arquivo `/etc/ini.d/conf.d`. Após realizado a configuração,
devemos parar o servidor e reiniciá-lo e prestar atenção para ver se ele não dará nenhuma mensagem de erro. Também é 
possível forçar o reinicialização sem precisar parar o servidor, evitando deixá-lo fora do ar. Essa tarefa fica por sua
conta, ok?

Além das configurações do Apache pode-se alterar as configurações do próprio PHP. Para isto basta encontrar o arquivo
`php.ini` e alterar o que for necessário. Normalmente configura-se o ambiente de desenvolvimento para que seja exibido 
todos os erros e o que mais preferir.

Leia mais sobre [como instalar o PHP](/linux/cookbook/php/) na seção Linux .



Alterando o php.ini
---

No terminal é possível utilizar alguns editores de textos como o "vi" (que já vem instalado) ou o "vim" e o "nano" 
(que devem ser instalados). Eu gosto de utilizar o nano pois ele é mais fácil. Instale o "nano" digitando:

    apt-get install nano // ubuntu
    yum install nano     // fedora

Com o nano instalado, digite:

    nano /etc/php5/apache2/php.ini // ubuntu
    nano /etc/php.ini              // fedora

Procure as linhas a seguir e altere como se segue:

    error_reporting = E_ALL
    display_erros= On
    display_startup_erros = On
    track_erros = On
    html_erros = On

Salve o arquivo digitando __CRTL+O__, confirme pressionando __ENTER__ e feche o arquivo digitando __CTRL+W___. O nano é 
muito fácil, diz aí? Reinicie o apache:

    /etc/init.d/apache2 restart // ubuntu
    systemctl start httpd.service // fedora



Instalando o X-Debug
---

O __X-debug__ é uma ferramenta útil pra cara... Ele ajuda a formatar a saída dos dados e é possível utilizá-lo com a 
interface do __NetBeans__. Neste momento, talvez você não entenda o que ele é, nem seu potencial, mas aproveite para 
instalá-lo agora. Um dia você ainda vai me agradecer, rssss. Com o PECL(pear) pode-se instalar novos pacotes no estilo
apt-get, no caso vamos instalar o pacote x-debug no Ubuntu:

    pecl install xdebug

Onde será que o Linux gravou a extensão x-debug? Digite e anote o caminho:

    find/ -name 'x-debug.so'2> /dev/null

Agora, precisamos dizer ao PHP que o x-debug existe. Par tal, é preciso incluir um linha no final do arquivo `php.ini`. 

Abra novamente o `php.ini`:

    nano /etc/php5/php.ini

No final do arquivo ou no fim da seção "extensões" inclua a seguinte linha:

    Zend_extension="/usr/lib/php5/caminho_anotado"

Reinicie o apache (o comando nós já vimos).

No Fedora é mais fácil,  bastam 2 linhas...

    yum install php-pecl-xdebug
    systemctl restart httpd.service

Leia amis sobre [como instalar o x-debug](/linux/cookbook/xdebug/) na seção Linux.




Instalando o MySql
---

Agora chegou a vez o banco de dados, instale o MySql no Ubuntu digitando...

    apt-get install mysql-server mysql-client

Enquanto os arquivos são baixados e instalados o sistema lhe perguntará qual será a senha do __root__ (para acessar o 
banco de dados), anote-a.

No Fedora é parecido, só que você é quem define a senha, então instale o MySQL no Fedora...

    yum install mysql mysql-server

Inicie o serviço...

    systemctl start mysqld.service
    systemctl enable mysqld.service

E habilite a senha digitando...

    mysqladmin -u root password [your_password_here]

Para saber se deu certo tente acessar o prompt do MySQL digitando...

    mysql -h localhost -u root -p

O sistema solicitará a senha, digite-a. Se estiver enxergando o "prompt" está tudo OK, digite `exit` para sair.

Leia mais sobre [como instalar o MySql](/linux/cookbook/mysql/) na seção Linux.




Instalando o PhpMyAdmin
---

Na sequência, instale o PhpMyAdmin, este aplicativo é responsável por oferecer uma interface amigável de trabalho ao
usuário do banco.

    apt-get install phpmyadmin

Responda as perguntas do instalador e, ao final, abra o navegador, digite `localhost/phpmyadmin`. A tela de "login" deve
ser exibida, digite novamente o usuário do MySql (root) e sua senha. Pronto, você está dentro do sistema, agora é possível
manipular o MySql com um interface amigável.

No Fedora, após a instalação, será preciso reiniciar o Apache...

    yum install phpmyadmin
    systemctl restart httpd.service




Fechando a conta
---

Anotou tudo que instalamos até aqui? vamos lá:

    Com o sistema Linux instalado, definimos uma senha para o root.
    Atualizamos o sistema (linux).
    Instalamos o servidor web apache
    Instalamos o módulo php e alteramos o php.ini para exibir os erros.
    Instalamos o x-debug para nos ajudar na debugação.
    Instalamos o banco de dados MySql.
    Instalamos o PhpMyAdmin, uma interface para o MySql.

Ufa!!! Mas ainda falta algumas "coisinhas". Ainda temos o editor de código, o controlador de versão, os navegadores e 
seus plugins, e etc.. Só que neste ponto, a escolha dos aplicativos é uma questão pessoal, então fica apenas a sugestão.

Como editor de código eu sugiro o [Netbeans](/linux/cookbook/netbeans/), ele é open source e tem umas funcionalidades 
muito interessantes. Para instalá-lo é preciso, primeiramente, ter o [java (JDK)](http://www.devfuria.com.br/linux/cookbook/java/)
previamente instalado. Tente instalar a versão __openJavaX__ (onde x é a versão do java) via Softer Center (ainda estamos
 no ubuntu). 

Atualmente, o controle de versão mais utilizado e divulgado é o [Git](http://git-scm.com/ "link-externo"), aprenda mais
sobre este controlador de versão na seção [Git](/git/).

Como navegador eu sugiro o [Firefox](/linux/cookbook/firefox/) e não se esqueça dos plugins __Firebug__ e __WebDeveloper__
eles quebram um galho enorme.

Espero que você tenha sobrevivido!