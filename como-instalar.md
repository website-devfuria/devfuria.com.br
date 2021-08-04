# Como instalar o site devfuria localmente

## Clonando os repos

https://gist.github.com/flaviomicheletti/eb74baba38a9bdb657bcbc89df1a4e39


## Instalação o jekyll

1. Você deve [instalar a linguagem ruby](http://www.devfuria.com.br/linux/instalando-ruby-on-rails/).
   Talvez você precise rodar como root `apt-get install ruby-dev`
2. Instale a gem do Jekyll `gem install jekyll`.


## Executando localmente

1. Clone o repositório (`git clone https://github.com/devfuria/devfuria.com.br.git`).
2. Execute o jekyll `jekyll server` e veja o resultado em [http://localhost:4000/](http://localhost:4000/).


## Docker

    docker run --rm \
     --volume="$PWD:/srv/jekyll" \
     --publish [::1]:4000:4000 \
     jekyll/jekyll \
     jekyll serve
     
---
     
    docker run --rm --volume="$PWD:/srv/jekyll" --publish [::1]:4000:4000 jekyll/jekyll jekyll serve     

https://github.com/envygeeks/jekyll-docker
