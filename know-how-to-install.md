# How to install devfuria site locally


__1) Clonando os repos:__

You need to clone the [repositories](/content.md).

<br />

__2) Installing jekyll:__

- You must [install ruby language](http://www.devfuria.com.br/linux/instalando-ruby-on-rails/).
  Maybe you need to run as root `apt-get install ruby-dev`
- Install Jekyll's gem `gem install jekyll`.

<br />

__3) Running Local:__

1. clone the repository (`git clone https://github.com/devfuria/devfuria.com.br.git`).
2. Run the jekyll `jekyll server` and see the result at [http://localhost:4000/](http://localhost:4000/).


<br />

__Docker:__

In case you need a Docker image...

    docker run --rm \
     --volume="$PWD:/srv/jekyll" \
     --publish [::1]:4000:4000 \
     jekyll/jekyll \
     jekyll serve
     
Other example:     

    docker run --rm --volume="$PWD:/srv/jekyll" --publish [::1]:4000:4000 jekyll/jekyll jekyll serve     

See also: https://github.com/envygeeks/jekyll-docker
