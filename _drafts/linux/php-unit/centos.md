CentOS 6.4

    # yum install php-pear-PHPUnit


Quando aparecer o alerta na execução do teste...

    PHP Warning:  PHP Startup: Unable to load dynamic library '/usr/lib/php/modules/module.so' - /usr/lib/php/modules/module.so: cannot open shared object file: No such file or directory in Unknown on line 0


Simplesmente digite no terminal

    # yum downgrade php-mcrypt


Fonte:

* http://lucidit.blogspot.com.br/2013/04/php-startup-unable-to-load-dynamic.html
* http://phpms.org/2012/03/guia-rapido-instalando-phpunit/
* http://netbeans.org/kb/docs/php/phpunit_pt_BR.html