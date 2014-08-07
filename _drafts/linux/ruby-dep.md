ruby on debian
===


    apt-get install gcc g++ make build-essential  git-core automake autoconf curl gawk libgcrypt11-dev libreadline-dev libruby1.9.1 libreadline6-dev zlib1g-dev libssl-dev libyaml-dev libsqlite3-dev sqlite3  libncurses5-dev  libtool bison pkg-config libffi-dev


    ./configure CONFIGURE_OPTS=--disable-install-doc
    make
    make install


    reinicializar
    
    gem update --system

    reinicializar

    gem install rails --source https://rubygems.org


    \curl -sSL https://get.rvm.io | bash -s stable --ruby=2.1.2 --rails
