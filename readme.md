# Site [www.devfuria.com.br](http://www.devfuria.com.br "DevFuria")

O site aborda desenvolvimento de aplicações web.

Ele é feito especialmente para o público iniciante.

Não é um blog, ele parece-se mais com um site de cursos.



## Instalação - jekyll

1. Você deve [instalar a linguagem ruby](http://www.devfuria.com.br/linux/instalando-ruby-on-rails/).
   Talvez você precise rodar como root `apt-get install ruby-dev`
2. Instale a gem do Jekyll `gem install jekyll`.
3. Instale a gem de [sitemap](https://rubygems.org/gems/jekyll-sitemap) `gem install jekyll-sitemap`.
4. Instale a gem do [redcarpter](https://rubygems.org/gems/redcarpet/) `gem install redcarpet`.
5. Instale a gem do [pygments.rb](https://rubygems.org/gems/pygments.rb/) `gem install pygments.rb`.
6. Clone o repositório (`git clone https://github.com/devfuria/devfuria.com.br.git`).
7. Execute o jekyll `jekyll server` e veja o resultado em [http://localhost:4000/](http://localhost:4000/).


## Instalação - php

1. Gere o site (`jekyll build`) lembre-se de incluir o disqus e o googleanalytics
2. Instale as dependencias: `~/composer.phar install`
6. Crie a pasta `./logs` e dê permissão `777`
7. Para visualizar tenha um [virtualhost](http://devfuria.com.br/misc/apache-virtual-host) devidamente configurado.


## Você pode contribuir sim!!!

Quer ajudar de alguma forma?

A primeira coisa que você terá que fazer é definir "em que" e "como" ajudar.

Para gerar o site utilize o jekyll.


## Contato

sitedevfuria@gmail.com
