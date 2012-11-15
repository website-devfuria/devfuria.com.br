<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(4);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $materia->titulo; ?> | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => $materia->resumo,
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_PHP . "servidor web; configurações; apache; mysql; x-debug; phpmysql".
                           "git; svn; firefox; firebug; "
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = "php";
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>
        
        <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>

        <div class="container sombra">
            <div class="row">
                <div class="span12">
                    <article>
                        <h1>Instalando o Ambiente no estilo NEXT, NEXT, NEXT.</h1>

                        <p><em>Todo programador precisa saber “levantar” seu próprio ambiente de trabalho</em>, me refiro a instalar os programas necessários
                            para começar o desenvolvimento. Inclua na lista: o servidor web(apache), o módulo PHP, o banco de dados, a API (interface)
                            do banco de dados, o editor de código, o controlador de versão, a escolha do sistema operacional, etc... Após instalado
                            os componentes, devemos configurar cada um deles.</p>

                        <p>Não pense que existe um tutorial mágico que lhe ensinará a fazer essas coisas rapidamente, porquê realmente não existe.
                            Por outro lado, se o leitor for um inicante poderá achar a mão de obra da instalação e configuração um serviço um tanto
                            penoso, e defato o é. Então, sugiro duas cituações:</p>

                        <p>a) (básico)instalar tudo muito rapidamente para poder começar a programar ou</p>

                        <p>b) (avançado)aprender a instalar tudo com muita propriedade, digno de um mestre no assunto.</p>

                        <p>O primeiro caso poderá ser resolvido com a leitura atenta desse artigo. O segundo caso eu aconselho a todos que quiserem
                            se profissionalizar. É importante que o profissional conheça as minúcias do ambiente de desenvolvimento e, se este for o
                            seu caso, procure por artigos que tratem os componentes de forma separadas pois, convenhamos, não caberia em um único
                            artigo a correta instalação e configuração de cada um dos componentes.</p>

                        <p>Há ainda a questão da preferência. Não existe o ambiente correto, existe a preferência sobre quais ferramentas instalar
                            e como configurá-las. Pouco se discute sobre o ambiente de desenvolvimento, mas um pensamento é unânime: <em>“o ambiente de
                                desenvolvimento deve simular ao máximo o ambiente de produção”</em>, porém acredito que isso (por enquanto) não deva ser
                            preocupação de um programador iniciante.</p>

                        <p>Se você é do mundo Linux, ótimo. Se você é do ambiente Windows, gostaria de convidá-lo a experimentar o mundo Linux.
                            Agora, se você aspira ser um prpfissional da área de TI, será sua obrigação conhecer outros sistemas operacionais além
                            do Windows. Que tal começar pelo Linux?.</p>

                        <h3>E o pessoal do Windows?</h3>

                        <p>Para o pessoal windows eu sugiro a instalação do WAMP procure por "wamp server", ele já instala tudo no estilo next, next,
                            next: apache, mysql, php, phpmyadmin. Irá faltar apenas o X-debug.</p>

                        <h2>Botando a mão na massa</h2>

                        <p>Se o leitor acompanhou o artigo “Um bom começo” já sabe que temos duas opções: ao conjunto <em>LAMP</em> e o conjunto <em>WAMP</em>.
                            Sem nos esquecermos no <em>XAMP</em>, e outras opções como , por exemplo, o <em>EasyPhp</em>.  Não vou explicar em detalhes como fazer
                            a instalação, já existe bons artigos sobre o assunto, veremos dicas básicas que poderão lhe ajudar.</p>

                        <p>Se você nunca usou o linux, aconselho a leitura do livro "Linux guia prático(Morimoto)". Um livro bastante consiso, prático
                            e básico sem perder a profundidade. A primeira coisa que aprende-se sobre um sistema operacional é como instalá-lo. No
                            caso do Linux, você terá que decidir entre mais de 500 distribuições(versões), rsss. Tudo bem mas existem apenas umas 10
                            distro principais. Em 2012 a versão do ubuntu12.4 é uma distro bastante popular, que tal começar por ela? Procure pelo 
                            site oficial, baixe a versão iso (uma imagem que é queimada, gravada bit a bit no cd) e comece tentando instalar o sistema.
                            Não aconselho a instalar o Linux como "dual boot" com o Windows, pelo menos não neste momento. Utilize uma máquina virtual
                            para reduzir o impacto, o VirtualBox da Sun(agora Oracle) é open source e uma boa opção.</p>

                        <p>Explicar a <em>instalação do Linux foge do escopo deste trabalho</em>, também não será preciso pois, existem centenas de artigos
                            que explicam muito bem o passo a passo. Neste ponto é aconselhá-vel trabalhar com máquinas virtuais, repetindo,* é menos
                            impactante instalar os sistema em uma máquina virtual do que na sua máquina principal*, assim se algo der errado sempre
                            poderá voltar atráz.</p>

                        <p>De forma grotesca, há duas fámílias de distro bastante conhecidas no mundo linux: A família Had Rat e a família Debian.
                            A distro Had Hat originou o CentOS e o Fedora (entre outras) e a família Debian originou o Ubuntu (entre outras).</p>

                        <p>Teoricamente, se você conhece bem o "esquema geral" conseguirá se virar em qualquer distro. As diferênças, as vezes,
                            são poucas. Como por exemplo no Ubuntu para instalar programar utiliza-se o "apt-get" e no Fedora utiliza-se o "yum".
                            Como estou mais familizarizado com o Ubuntu, vou continuar este tutorial considerando-o. Prometo que volto para atender
                            aos usuários da família Had Rat (estou fazendo testes no FEDORA).</p>

                        <p>Uma vez com o sistema Linux(Ubuntu) instalado a primeira coisa que fazemos é atualizá-lo pois, sempre sobra um monte de
                            código que não couberam no CD. Se você não conseguir fazer a atualização via interface do usuário teremos que fazer via
                            console (terminal), já já veremos os comandos.</p>

                        <p>A segunda coisa que deve ser feita e definir uma senha para o usuário "root". Abra o termial (tente CTRL+ALT+U) e digite:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre>sudo passwd root</pre>
                        </div>

                        <p>Após digite a senha do seu usuário (definida na instalação) e na sequência digite a senha do root. Para rodar alguns
                            comandos é preciso ter autoriazação de root. Ou vocẽ digita "sudo" antes de cada comando (será preciso fornecer a senha
                            do root) ou vira root e vai trabalhando. Para virar root digite:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre>su root</pre>
                        </div>

                        <p>... e forneca a senha definida anteriormente. Os comandos apresentados na sequência consideram que você seja root ou
                            que utilize o "sudo". O sinal # no início de cada comando explicita o que eu acabei de falar, logo não é necessário
                            digitá-lo junto com o comando, rs.</p>

                        <h3>Atualizando o sistema (via terminal)</h3>

                        <p>Abra o terminal e digite:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># apt-get update
# apt-get upgrade</pre>
                        </div>

                        <h3>Instalando o Apache2</h3>

                        <p>No terminal digite:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># apt-get install apache2</pre>
                        </div>

                        <p>Para ter certeza de que o apache foi instaldo corretamente, abra um navegador qualquer é digite http://localhost. Uma
                            página simples escrita “It’s work” aparecerá. Você terá que descobrir e entender (por conta própria) o que é "DocumentRoot",
                            como parar, iniciar e reinicializar o servidor apache. Outra duas coisas que são importante o leitor ir se familiarizando
                            é Virtual Host e o arquivo htaccess. Lembrando que o apache sozinho não faz muita coisa, será preciso instalar o php e
                            seus módulos.</p>

                        <h3>Instalando o PHP</h3>

                        <p>Na sequência instalamos o php, no console digite:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># apt-get install php5 libapache2-mod-php5</pre>
                        </div>

                        <p>Para testar o php, crie um pequeno arquivo com a extensão .php conforme mostrado abaixo e salve em /var/www. É preciso
                            ser root para inserir arquivos nesta pasta.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre>&lt;?php
echo phpinfo();
?&gt;</pre>
                            <p> Este arquivo dá um print no resultado da função phpinfo(), essa função traz dados preciosos sobre a instalação</p>
                        </div>

                        <p>Abra o navegador e digite novamente http://localhost. Agora aparecerá a tela do php e as informações da instalação.</p>

                        <p>Neste momento, é aconselhável instalar alguns módulos complementares que serão úteis no futuro. Com o tempo você
                            "descobrirá" os "seus" pacotes. Mas por enquanto instale estes:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># apt-get install php5-mysql php5-curl php5-gd php5-idn\ php5-dev php-pear</pre>
                        </div>

                        <p>Para que o apache, juntamente com o módulo do php execute os scripts eles devem ser ser salvos no “documentroot”
                            (raiz do documento). “DocumentRoot” nada mais é do que a pasta na qual o servidor “sabe” que contém arquivos nos quais
                            ele deve ler e intrepretar. Por padrão, no Linux a pasta é /var/www (Debian e derivados) e /var/www/html (RedHat e
                            derivados).</p>

                        <p>É possível alterar este local configurando diretamente o arquivo /etc/ini.d/conf.d. Após realizado a configuração devemos
                            parar o servidor e reiniciá-lo e prestar atenção para ver se ele não derá nenhuma menssagem de erro. Também é possível
                            forçar o reinicialização sem precisar parar o servidor, evitando deixá-lo fora do ar.</p>

                        <p>Além das configurações do apache pode-se alterar as configurações do próprio php. Para isto basta encontrar o arquivo
                            php.ini e alterar o que for necessário. Normalmente configura-se o ambiente de desenvolvimento para que seja exibido
                            todos os erros e o que mais preferir.</p>

                        <h3>Alterando o php.ini</h3>

                        <p>No terminal é possível utilizar alguns editores de textos como o "vi" (que já vem instalado) ou o "vim" e o "nano" (que
                            devem ser instalados). Eu gosto de utilizar o nano pois ele é mais fácil. Instale o "nano" digitando:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># apt-get install nano</pre>
                        </div>

                        <p>Com o nano instalado, digite:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># nano /etc/php5/apache2/php.ini</pre>
                        </div>

                        <p>Procure as linhas a seguir e altere como se segue:</p>

                        <div class="code">
                            <h6>Texto Plano</h6>
                            <pre>
error_reporting = E_ALL
display_erros= On
display_startup_erros = On
track_erros = On
html_erros = On
                            </pre>
                        </div>

                        <p>Salve o arquivo digitando CRTL+O, confirme pressionando ENTER, agora feche o arquivo digitadno CTRL+W.
                            O nano é muito fácil, diz aí? Reinicie o apache:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># /etc/init.d/apache2 restart</pre>
                        </div>

                        <h3>Instalando o X-Debug</h3>

                        <p>O X-debug é uma ferramenta útil prá cara... Ele ajuda a formatar a saída dos dados e é possível utilizá-lo com a interface
                            do NetBeans. Neste momento, talvez vocẽ não entenda o que ele é, nem seu potencial, mas aproveite para instalá-lo agora.
                            um dia você ainda vai me agradeçer, rssss. Com o PECL(pear)pode-se instalar novos pacotes no estilo apt-get, no caso
                            vamos instalar o pacote x-debug:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># pecl install xdebug</pre>
                        </div>

                        <p>Onde será que o Linux gravou a extensão x-debug? Digite e anote o caminho:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># find/ -name 'x-debug.so'2> /dev/null</pre>
                        </div>

                        <p>Agora, precisamos dizer ao php que o x-debug existe. Par tal é preciso incluir um linha no final do arquivo php.ini.
                            Abra, novamente, o php.ini:</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># nano /etc/php5/php.ini</pre>
                        </div>

                        <p>No final do arquivo ou no fim da seção "extenções" inclua a seguinta linha:</p>

                        <div class="code">
                            <h6>Texto Plano</h6>
                            <pre>Zend_extension="/usr/lib/php5/caminho_anotado"</pre>
                        </div>

                        <p>Reinicie o apache (o comando nós já vimos).</p>

                        <h3>Instalando o MySql</h3>

                        <p>Agora chegou a vez o banco de dados, instale o mysql digitando</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># apt-get install mysql-server mysql-client</pre>
                        </div>

                        <p>Enquanto os arquivos são baixados e instalados o sistema lhe pergunta qual será a senha do root (para acessar o banco de
                            dados), anote-a.</p>

                        <h3>Instalando o PhpMyAdmin</h3>

                        <p>Na sequência instale o phpmyadmin, este aplicativo é responsável por oferecer uma interface amigável de trabalho ao
                            usuário do banco.</p>

                        <div class="code">
                            <h6>Comandos Linux</h6>
                            <pre># # apt-get install phpmyadmin</pre>
                        </div>

                        <p>Responda as perguntas que o instalardor fará (nenhum segredo) e ao final, abra o navegador e digite "localhost/phpmyadmin"
                            a tela de login deve ser exibida, digite novamente o usuario do mysql (root) e sua senha. Pronto, você está dentro do
                            sistema, agora é possível manipular o mysql com um interface amigável.</p>

                        <h3>Finalizando</h3>

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

                        <p>Como <em>editor de código</em> eu sugiro o <em>Netbeans</em>, ele é open source e tem ums funcionalidades muito interessantes. Para
                            instalá-lo é preciso, primeiramente, ter o java (JDK) previamente instalado. Tente instalar a versão openJavaX (onde x
                            é a versão do java) via Softer Center (ainda estamos no ubuntu). Após isso, basta baixar o arquivo de instalação do
                            Netbeans, procure pela versão PHP que tem aproximadamente uns 50mb. É preciso dar permissão de execução no arquivo e em
                            seguida executá-lo (obviamente).</p>

                        <p>Como controlador de versão eu sugiro o <em>svn</em> que ainda é muito utilizado. Dá para instalar pelo repositório da distro, eu
                            utilizava o svn no windows e sentia falta de uma interface no nautilus (o gerenciador de arquivos do linux) então eu
                            descobri o nautilus-svn, procure por rabbit-svn e instale ele também. Atualmente (2012) a controle de versão mais
                            utilizado e divulgado é o <em>GIT</em>, procure pelo por github e aprenda mais sobre este controlador de versão.</p>

                        <p>Como navegador eu sugiro o Firefox e não se esqueça dos plugins FireBug e WebDeveloper eles quebram um galho enorme.</p>

                        <?php include BASE_PATH.COMPONENTES_PATH."materia_fim.php"; ?>
                    </article>

                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12  -->
            </div><!-- row  -->
        </div><!-- container -->

        <div class="container sem_borda">
            <div class="row">
                <div class="span10 offset1">
                    <?php include BASE_PATH.COMPONENTES_PATH."tree_parcial.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span8 offset2">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>
        </div>

    <?php include BASE_PATH.COMPONENTES_PATH."rodape.php"; ?>
        
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
        
    </body>
</html>