<?php
/**
 * PHP
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Levantando um ambiente de programação (PHP)');
        $core->head->setDescription('Aprenda a levantar seu ambiente de programação de forma descomplicada e sem sustos');
        $core->head->setkeywords('instalando apache no linux, instalando mysql no linux, instalando phpmyadmin no linux, instalando php no linux, php.ini, x-debug, lamp ubuntu, lamp fedora' );
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_PHP;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Instalando o Ambiente no estilo NEXT, NEXT, NEXT.</h1>
                <p>Vamos instalar o ambiente em nosso próprio desktop.</p>
                <p>Alerta: esse não é o ideal... mas calma, estamos apenas começando</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">11/09/2012</span>, escrito em <span class="label label-info">05/06/2012</span>.
            </div>
        </div>


        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">Introdução</a>
                            </li>
                            <li>
                                <a href="#massa">Mão na massa</a>
                            </li>
                            <li>
                                <a href="#apache">Apache2</a>
                            </li>
                            <li>
                                <a href="#php">PHP</a>
                            </li>
                            <li>
                                <a href="#php-ini">Alterando o php.ini</a>
                            </li>
                            <li>
                                <a href="#xdebug">X-Debug</a>
                            </li>
                            <li>
                                <a href="#mysql">MySql</a>
                            </li>
                            <li>
                                <a href="#phpmyadmin">PhpMyAdmin</a>
                            </li>
                            <li>
                                <a href="#fechando">Fechando a conta</a>
                            </li>
                        </ul>
                    </div>
                </div>        

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">                
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>                         
                        <p><strong>Todo programador precisa saber “levantar” seu próprio ambiente de trabalho</strong>, me refiro a instalar os programas necessários
                            para começar o desenvolvimento. Inclua na lista: o servidor web(apache), o módulo PHP, o banco de dados, a API (interface)
                            do banco de dados, o editor de código, o controlador de versão, a escolha do sistema operacional, etc... Após instalado
                            os componentes, devemos configurar cada um deles.</p>

                        <p>Não pense que existe um tutorial mágico que lhe ensinará a fazer essas coisas rapidamente, porque realmente não existe.
                            Por outro lado, se o leitor for um inicante poderá achar a mão de obra da instalação e configuração um serviço um tanto
                            penoso, e defato o é. Então, sugiro duas situações:</p>

                        <p>a) (básico)instalar tudo muito rapidamente para poder começar a programar ou</p>

                        <p>b) (avançado)aprender a instalar tudo com muita propriedade, digno de um mestre no assunto.</p>

                        <p>O primeiro caso poderá ser resolvido com a leitura atenta desse artigo. O segundo caso eu aconselho a todos que quiserem
                            se profissionalizar. É importante que o profissional conheça as minúcias do ambiente de desenvolvimento e, se este for o
                            seu caso, procure por artigos que tratem os componentes de forma separadas pois, convenhamos, não caberia em um único
                            artigo a correta instalação e configuração de cada um dos componentes.</p>

                        <p>Há ainda a questão da preferência. Não existe o ambiente correto, existe a preferência sobre quais ferramentas instalar
                            e como configurá-las. Pouco se discute sobre o ambiente de desenvolvimento, mas um pensamento é unânime: <strong>“o ambiente de
                                desenvolvimento deve simular ao máximo o ambiente de produção”</strong>, porém acredito que isso (por enquanto) não deva ser
                            preocupação de um programador iniciante.</p>

                        <p>Se você é do mundo Linux, ótimo. Se você é do ambiente Windows, gostaria de convidá-lo a experimentar o mundo Linux.
                            Agora, se você aspira ser um profissional da área de TI, será sua obrigação conhecer outros sistemas operacionais além
                            do Windows.</p>

                        <p>Que tal começar pelo Linux?</p>

                        <h3>E o pessoal do Windows?</h3>

                        <p>Para o pessoal windows eu sugiro a instalação do WAMP, procure por "wamp server".</p>

                        <p>Ele já instala tudo no estilo next, next, next, finish: apache, mysql, php, phpmyadmin.</p>

                        <p>Irá faltar apenas o X-debug.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="massa">Botando a mão na massa</h1>
                        </div> 

                        <p>Não vou explicar em detalhes como fazer a instalação, já existe bons artigos sobre o assunto, veremos dicas práticas que
                            poderão lhe ajudar.</p>

                        <p>Se você nunca usou o linux, aconselho a leitura do livro "Linux guia prático(Morimoto)". Um livro bastante conciso, prático
                            e básico sem perder a profundidade.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Livro sobre o linux, autor Morimoto" src="linux-guia-pratico-morimoto.jpg">
                            <p>Ótimo livro para iniciantes no Linux</p>
                        </div>                        
                        
                        <p>A primeira coisa que aprende-se sobre um sistema operacional é como instalá-lo. No caso do Linux, você terá que decidir
                            entre mais de 500 distribuições(versões).</p>

                        <p>Tudo bem, existem apenas umas 10 distro principais. Em 2013 a versão do ubuntu 12.10 é uma distro bastante popular, que
                            tal começar por ela? Procure pelo site oficial, baixe a versão iso (uma imagem que é queimada, gravada bit a bit no cd)
                            e comece tentando instalar o sistema. Não aconselho a instalar o Linux como "dual boot" com o Windows, pelo menos não
                            neste momento. Utilize uma máquina virtual para reduzir o impacto, o VirtualBox da Sun (agora Oracle) é open source e
                            uma boa opção.</p>

                        <p>Explicar a <strong>instalação do Linux foge do escopo deste trabalho</strong>, também não será preciso, pois existem centenas de artigos
                            que explicam muito bem o passo a passo. Neste ponto é aconselhável trabalhar com máquinas virtuais. Repetindo,* é menos
                            impactante instalar o sistema em uma máquina virtual do que na sua máquina principal*, assim se algo der errado sempre
                            poderá voltar atrás.</p>

                        <p>De forma grotesca, há duas famílias de distro bastante conhecidas no mundo linux: A família Had Rat e a família Debian.
                            A distro Had Hat originou o CentOS e o Fedora e a família Debian originou o Ubuntu.</p>

                        <p>Teoricamente, se você conhece bem o "esquema geral" do sistema Linux conseguirá se virar em qualquer distro. As
                            diferenças, as vezes, são poucas. Como por exemplo no Ubuntu para instalar programas utiliza-se o "apt-get" e no Fedora
                            utiliza-se o "yum".</p>

                        <p><span style="text-decoration:line-through;">Como estou mais familizarizado com o Ubuntu, vou continuar este tutorial
                                considerando-o. Prometo que volto para atender aos usuários da família Had Rat (estou fazendo testes no FEDORA).</span>
                            OK já voltei.</p>

                        <p>Uma vez com o sistema Linux instalado (Ubuntu ou Fedora) a primeira coisa que deve ser feita e definir uma senha para o
                            usuário "root". Abra o termial (tente CTRL+ALT+U) e digite:</p>

                        <pre><code class="no-highlight">sudo passwd root</code></pre>

                        <p>Após digite a senha do seu usuário (definida na instalação) e na sequência digite a senha do root. Para rodar alguns
                            comandos é preciso ter autorização de root. Ou você digita "sudo" antes de cada comando (será preciso fornecer a senha
                            do root) ou vira root e vai trabalhando. Para virar root digite:</p>

                        <pre><code class="no-highlight">su root</code></pre>

                        <p>... e forneça a senha definida anteriormente. Os comandos apresentados na sequência consideram que você seja root ou
                            que utilize o "sudo". O sinal # no início de cada comando explicita o que eu acabei de falar, logo não é necessário
                            digitá-lo junto com o comando, rs.</p>
                    </div>                 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Atualizando o sistema (via terminal)</h2>
                        </div>                 

                        <p>Abra o Ubuntu e digite:</p>

                        <p>Ubuntu</p>

                        <pre><code class="no-highlight">apt-get update
apt-get upgrade</code></pre>

                        <p>No Fedora também temos os comandos update e upgrade, porém eles fazem coisas diferentes. Eu aconselho a utilizar a
                            interface gráfica para atualizar o sistema.</p>

                    </div>                 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="apache">Instalando o Apache2</h1>
                        </div>                 

                        <p>No Ubuntu digite:</p>

                        <pre><code class="no-highlight">apt-get install apache2</code></pre>

                        <p>no Fedora são três linhas...</p>

                        <pre><code class="no-highlight">yum install httpd
chkconfig --levels 235 httpd on
systemctl start httpd.service
</code></pre>

                        <p>Para ter certeza de que o apache foi instalado corretamente, abra um navegador qualquer é digite http://localhost. É
                            exibido uma página simples com a frase “It’s work”.</p>
                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="php">Instalando o PHP</h1>
                        </div>                 

                        <p>Na sequência instalamos o php, no terminal do Ubuntu digite:</p>

                        <pre><code class="no-highlight">apt-get install php5 libapache2-mod-php5</code></pre>

                        <p>No terminal do Fedora digite:</p>

                        <pre><code class="no-highlight">yum install httpd php php-common // fedora</code></pre>

                        <p>Para testar o php, crie um arquivo com onome index.php conforme mostrado abaixo e salve em /var/www (Ubuntu) e
                            /var/www/html (Fedora). É preciso ser root para inserir arquivos nesta pasta.</p>

                        <div class="code">
                            <h6>index.php</h6>
                            <pre><code class="language-php">&lt;?php
echo phpinfo();
?&gt;</code></pre>
                            <p> Este arquivo dá um print no resultado da função phpinfo(), essa função traz dados preciosos sobre a instalação</p>
                        </div>

                        <p>Abra o navegador e digite novamente http://localhost. Agora aparecerá a tela do php e as informações da instalação.</p>

                        <p>Neste momento, é aconselhável instalar alguns módulos complementares que serão úteis no futuro. Com o tempo você
                            "descobrirá" os "seus" pacotes. Mas por enquanto instale estes:</p>

                        <p>no Ubuntu...</p>

                        <pre><code class="no-highlight">apt-get install php5-mysql php5-curl php5-gd php5-idn\ php5-dev php-pear</code></pre>

                        <p>no Fedora...</p>

                        <pre><code class="no-highlight">yum install php-pecl-apc php-cli php-pear php-pdo php-mysql php-pgsql php-pecl-mongo php-pecl-memcache php-pecl-memcached php-gd php-mbstring php-mcrypt php-xml</code></pre>

                        <p>Para que o apache, juntamente com o módulo do php execute os scripts eles devem ser ser salvos no “documentroot”
                            (raiz do documento). “DocumentRoot” nada mais é do que a pasta na qual o servidor “sabe” que contém arquivos nos quais
                            ele deve ler e intrepretar. Por padrão, no Linux a pasta é /var/www (Debian e derivados) e /var/www/html (RedHat e
                            derivados).</p>

                        <p>É possível alterar este local configurando diretamente o arquivo /etc/ini.d/conf.d. Após realizado a configuração devemos
                            parar o servidor e reiniciá-lo e prestar atenção para ver se ele não derá nenhuma mensagem de erro. Também é possível
                            forçar o reinicialização sem precisar parar o servidor, evitando deixá-lo fora do ar. Essa tarefa fica por sua conta, ok?</p>

                        <p>Além das configurações do apache pode-se alterar as configurações do próprio php. Para isto basta encontrar o arquivo
                            php.ini e alterar o que for necessário. Normalmente configura-se o ambiente de desenvolvimento para que seja exibido
                            todos os erros e o que mais preferir.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="php-ini">Alterando o php.ini</h1>
                        </div>                 

                        <p>No terminal é possível utilizar alguns editores de textos como o "vi" (que já vem instalado) ou o "vim" e o "nano" (que
                            devem ser instalados). Eu gosto de utilizar o nano pois ele é mais fácil. Instale o "nano" digitando:</p>

                        <pre><code class="no-highlight">apt-get install nano // ubuntu
yum install nano // fedora
</code></pre>

                        <p>Com o nano instalado, digite:</p>

                        <pre><code class="no-highlight">nano /etc/php5/apache2/php.ini // ubuntu
nano /etc/php.ini // fedora
</code></pre>

                        <p>Procure as linhas a seguir e altere como se segue:</p>

                        <div class="code">
                            <h6>Texto Plano</h6>
                            <pre><code class="no-highlight">error_reporting = E_ALL
display_erros= On
display_startup_erros = On
track_erros = On
html_erros = On</code></pre>
                        </div>

                        <p>Salve o arquivo digitando CRTL+O, confirme pressionando ENTER, agora feche o arquivo digitando CTRL+W.
                            O nano é muito fácil, diz aí? Reinicie o apache:</p>

                        <pre><code class="no-highlight">/etc/init.d/apache2 restart // ubuntu
systemctl start httpd.service // fedora
</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="xdebug">Instalando o X-Debug</h1>
                        </div>                 

                        <p>O X-debug é uma ferramenta útil pra cara... Ele ajuda a formatar a saída dos dados e é possível utilizá-lo com a interface
                            do NetBeans. Neste momento, talvez você não entenda o que ele é, nem seu potencial, mas aproveite para instalá-lo agora.
                            Um dia você ainda vai me agradecer, rssss. Com o PECL(pear)pode-se instalar novos pacotes no estilo apt-get, no caso
                            vamos instalar o pacote x-debug no Ubuntu:</p>

                        <pre><code class="no-highlight">pecl install xdebug</code></pre>

                        <p>Onde será que o Linux gravou a extensão x-debug? Digite e anote o caminho:</p>

                        <pre><code class="no-highlight">find/ -name 'x-debug.so'2&gt; /dev/null</code></pre>

                        <p>Agora, precisamos dizer ao php que o x-debug existe. Par tal é preciso incluir um linha no final do arquivo php.ini.
                            Abra novamente o php.ini:</p>

                        <pre><code class="no-highlight">nano /etc/php5/php.ini</code></pre>

                        <p>No final do arquivo ou no fim da seção "extensões" inclua a seguinta linha:</p>

                        <div class="code">
                            <h6>Texto Plano</h6>
                            <pre><code class="no-highlight">Zend_extension="/usr/lib/php5/caminho_anotado"</code></pre>
                        </div>

                        <p>Reinicie o apache (o comando nós já vimos).</p>

                        <p>No Fedora bastam 2 linhas...</p>

                        <pre><code class="no-highlight">yum install php-pecl-xdebug
systemctl restart httpd.service</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="mysql">Instalando o MySql</h1>
                        </div>                 

                        <p>Agora chegou a vez o banco de dados, instale o mysql no Ubuntu digitando...</p>

                        <pre><code class="no-highlight">apt-get install mysql-server mysql-client</code></pre>

                        <p>Enquanto os arquivos são baixados e instalados o sistema lhe perguntará qual será a senha do root (para acessar o banco
                            de dados), anote-a.</p>

                        <p>No fedora é parecido, só que você é quem define a senha, então instale o mysql no Fedora...</p>

                        <pre><code class="no-highlight">yum install mysql mysql-server</code></pre>

                        <p>inicie o serviço... </p>

                        <pre><code class="no-highlight">systemctl start mysqld.service
systemctl enable mysqld.service
</code></pre>

                        <p>e habilite a senha digitando...</p>

                        <pre><code class="no-highlight">mysqladmin -u root password [your_password_here]</code></pre>

                        <p>Para saber se deu certo tente acessar o prompt do mysql digitando...</p>

                        <pre><code class="no-highlight">mysql -h localhost -u root -p</code></pre>

                        <p>O sistema solicitará a senha, digite-a. Se estiver enchergando o prompt está tudo OK, digite "exit" para sair.</p>

                    </div>  

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="phpmyadmin">Instalando o PhpMyAdmin</h1>
                        </div>                 

                        <p>Na sequência instale o phpmyadmin, este aplicativo é responsável por oferecer uma interface amigável de trabalho ao
                            usuário do banco.</p>

                        <pre><code class="no-highlight">apt-get install phpmyadmin</code></pre>

                        <p>Responda as perguntas que o instalardor e ao final, abra o navegador e digite "localhost/phpmyadmin"
                            a tela de login deve ser exibida, digite novamente o usuario do mysql (root) e sua senha. Pronto, você está dentro do
                            sistema, agora é possível manipular o mysql com um interface amigável.</p>

                        <p>No Fedora, após a instalação, será preciso reiniciar o apache...</p>

                        <pre><code class="no-highlight">yum install phpmyadmin
systemctl restart httpd.service
</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="fechando">Fechando a conta</h1>
                        </div>                 

                        <p>Anotou tudo que instalamos até aqui? vamos lá:</p>

                        <ol>
                            <li>Com o sistema Linux instalado, definimos uma senha para o root.</li>
                            <li>Atualizamos o sistema (linux).</li>
                            <li>Instalamos o servidor web apache</li>
                            <li>Instalamos o módulo php e alteramos o php.ini para exibir os erros.</li>
                            <li>Instalamos o x-debug para nos ajudar na debugação.</li>
                            <li>Instalamos o banco de dados Mysql.</li>
                            <li>Instalamos o Phpmyadmin, uma interface para o mysql.</li>
                        </ol>

                        <p>Ufa!!! Mas ainda falta algumas "coisinhas". Ainda temos o editor de código, o controlador de versão, os navegadores e
                            seus plugins, e etc.. Só que neste ponto, a escolha dos aplicativos é uma questão pessoal, então fica apenas a sugestão.</p>

                        <p>Como <strong>editor de código</strong> eu sugiro o <strong>Netbeans</strong>, ele é open source e tem umas funcionalidades muito interessantes. Para
                            instalá-lo é preciso, primeiramente, ter o java (JDK) previamente instalado. Tente instalar a versão openJavaX (onde x
                            é a versão do java) via Softer Center (ainda estamos no ubuntu). Após isso, basta baixar o arquivo de instalação do
                            Netbeans, procure pela versão PHP que tem aproximadamente 50MB. É preciso dar permissão de execução no arquivo e em
                            seguida executá-lo (obviamente).</p>

                        <p>Como controlador de versão eu sugiro o <strong>svn</strong> que ainda é muito utilizado. Dá para instalar pelo repositório da distro, eu
                            utilizava o svn no windows e sentia falta de uma interface no nautilus (o gerenciador de arquivos do linux) então eu
                            descobri o nautilus-svn, procure por rabbit-svn e instale ele também. Atualmente (2013) a controle de versão mais
                            utilizado e divulgado é o <strong>GIT</strong>, procure por "github" e aprenda mais sobre este controlador de versão.</p>

                        <p>Como navegador eu sugiro o <strong>Firefox</strong> e não se esqueça dos plugins <strong>Firebug e WebDeveloper</strong> eles quebram um galho enorme.</p>

                        <p>Espero que você tenha sobrevivido.</p>

                        <h2>Leituras adicionais sugeridas</h2>

                        <dl id="leitura_adcionais">
                            <dt>Internet</dt>
                            <dd>Matéria da comunidade Ubuntu onde eles comparam e demonstram os comandos equivalentes tanto no Ubuntu como no Fedora.
                                <a href="https://help.ubuntu.com/community/SwitchingToUbuntu/FromLinux/RedHatEnterpriseLinuxAndFedora" title="link-externo">https://help.ubuntu.com/community/SwitchingToUbuntu/FromLinux/RedHatEnterpriseLinuxAndFedora</a>
                            </dd>
                        </dl>
                        <?php
                        $core->paginacao->link_ativo = "/php/basico/instalando-o-ambiente/";
                        $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_PHP]);
                        include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                        ?>                        
                        
                    </div>                 

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>PHP</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_PHP);
                        $core->lista->link_ativo = "/php/basico/instalando-o-ambiente/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>