Receitas báscias
===


### Configure Sua Primeira Instância

    $ vagrant box add base http://files.vagrantup.com/lucid32.box
    $ vagrant init
    $ vagrant up

ou 

    $ vagrant box add lucid32 http://files.vagrantup.com/lucid32.box
    $ vagrant init lucid32
    $ vagrant up


### Entenda sobre o VagrantFile em

    http://friendsofvagrant.github.io/v1/docs/getting-started/introduction.html




1. Configuração do Projeto Vagrant
---


    $ mkdir vagrant_guide
    $ cd vagrant_guide
    $ vagrant init

Exemplo da estrutura de arquivos

    /projeto
        /app <-- vagrant init, git init
        /outras pastas




2. Boxes
---

Depois da inicialização do projeto, o primeiro passo sempre é definir a base box no Vagrantfile.

Baixe a box de http://files.vagrantup.com/lucid32.box.


### Adicionando Boxes

    vagrant box add lucid32 http://files.vagrantup.com/lucid32.box

Obs: se vc baixou a máquina então não precisa apontar para a url e sim para o local físico


### Removendo Boxes

    $ vagrant box remove my_box


### Avisando o VagrantFile que sua box existe

    Vagrant::Config.run do |config|
      config.vm.box = "lucid32"
    end


### Ligando e desligando a máquina:

    $ vagrant up
    $ vagrant destroy


### vagrant SSH

Acesse a máquina como no terminal. Na pasta onde está o projeto (projeto/app) digite:


    # vagrant ssh

Para sair digite apenas *exit*


Acessando os Arquivos do Projeto:

    ls /vagrant



3. Provisionamento
---

Crie o arquivo manifests/default.pp n a pasta app/, ficará assim:

    vagrant_guide/
        app/
            manifests/
                default.pp


Coloque o seguinte conteúdo nele:

    class apache {
      exec { 'apt-get update':
        command => '/usr/bin/apt-get update'
      }

      package { "apache2":
        ensure => present,
      }

      service { "apache2":
        ensure => running,
        require => Package["apache2"],
      }
    }

    include apache

Avise ao VagrantFile que o provisionamento existe

    Vagrant::Config.run do |config|
      config.vm.box = "lucid32"

      # Habilita o provisionador Puppet
      config.vm.provision :puppet
    end

Execute um reload

    vagrant reload

Acesse a SSH execute:

    wget -qO- 127.0.0.1



4. Redirecionamento de Portas
---

Avise ao VagrantFile do redirecionamento:

Vagrant::Config.run do |config|

  # Redireciona a porta 80 do guest para a porta 4567 do host
  config.vm.forward_port 80, 4567

end

Faça um reload

Abra o navegador e digite
    
    localhost:4567



5. Empacotamento

---

Tenha certeza que o ambiente virtual já foi criado pelo comando "vagrant up".

Execute:
    
    $ vagrant package --vagrantfile Vagrantfile.pkg

Para distribuir execute os comandos da seção "Configure Sua Primeira Instância".




6. Desmontagem
---

### Suspender

    vagrant suspend

Isso irá salvar o estado de execução atual de sua máquina virtual e então pará-la. 

Para retomar o trabalho novamente em algum momento, execute

    vagrant resume

### Parar

    vagrant halt

Ele tentará fazer um desligamento normal na sua VM (como se estivesse rodando um halt numa máquina linux).

Para retomar o trabalho, rode
    
    vagrant up 

...que irá reinicar a máquina mas não repetirá a sequência de importação (uma vez que ela já foi importada antes).



### Destruir completamente seu ambiente virtual

    vagrant destroy

... irá apagar literalmente todos os rastros da máquina virtual do disco. 

Para voltar ao trabalho novamente, execute 

    vagrant up

... e seu ambiente será reconstruído.


Este é o passo para trocar de ambiente (reconstriundo instantaneamente).
