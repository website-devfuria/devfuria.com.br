# How to install devfuria site locally


## 1) Clonando os repos

You need to clone the [repositories](/content.md).


## 2) Installing jekyll

1. You must [install ruby language](http://www.devfuria.com.br/linux/instalando-ruby-on-rails/).
   Maybe you need to run as root `apt-get install ruby-dev`
2. Install Jekyll's gem `gem install jekyll`.


## 3) Running Local

1. Clone o repositório (`git clone https://github.com/devfuria/devfuria.com.br.git`).
2. Run the jekyll `jekyll server` e veja o resultado em [http://localhost:4000/](http://localhost:4000/).


## Docker

In case you need a Docker image...

    docker run --rm \
     --volume="$PWD:/srv/jekyll" \
     --publish [::1]:4000:4000 \
     jekyll/jekyll \
     jekyll serve
     
Other example:     

    docker run --rm --volume="$PWD:/srv/jekyll" --publish [::1]:4000:4000 jekyll/jekyll jekyll serve     

See also: https://github.com/envygeeks/jekyll-docker
