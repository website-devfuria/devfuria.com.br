ruby


sudo apt-get install curl gawk libreadline6-dev zlib1g-dev libssl-dev libyaml-dev libsqlite3-dev sqlite3 autoconf libncurses5-dev automake libtool bison pkg-config libffi-dev

apt-get install build-essential libgcrypt11-dev zlib1g-dev libreadline-dev openssl libopenssl-ruby1.9.1 libruby1.9.1 git-core


\curl -sSL https://get.rvm.io | bash -s stable --ruby=2.2.2 --rails


./configure CONFIGURE_OPTS=--disable-install-doc


gem install rails --source https://rubygems.org
gem update --system
