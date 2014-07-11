ruby on debian
===


    apt-get install curl gawk libreadline6-dev zlib1g-dev libssl-dev libyaml-dev libsqlite3-dev sqlite3 autoconf libncurses5-dev automake libtool bison pkg-config libffi-dev

    apt-get install build-essential libgcrypt11-dev libreadline-dev libruby1.9.1 git-core

    ./configure CONFIGURE_OPTS=--disable-install-doc
    make
    make install


    reinicializar
    
    gem update --system

    reinicializar

    gem install rails --source https://rubygems.org


    \curl -sSL https://get.rvm.io | bash -s stable --ruby=2.1.2 --rails
