Para acessar pendrive no virtual box no Ubuntu
---------------------------------------------

Baixe e instale o arquivo de extensão de pacote abaixo:

    Oracle_VM_VirtualBox_Extension_Pack-4.1.18-78361.vbox-extpack

Obs: Desculpe, você terá que procurar este arquivo na net.


Após a instalação, inicialize o terminal e execute os seguintes comandos:

    # sudo apt-get update
    # sudo apt-get install dkms
    # sudo adduser seu_usuário vboxusers

Fora a instalação acima é preciso instalar o samba para isso, plug o USB na maquina
e entre nas suas configurações e habilite a opção compartilhamento.
Após a conclusão, inicialize a VirtualBox e nas configurações encontre o seu USB.


Para acesar pendrive no virtual box no Fedora
---------------------------------------------

É preciso adicionar seu usuário ao grupo vboxusers

    # adduser seu_usuario vboxusers



Resolvendo o seguinte erro: 'Kernel driver not installed(rc = 1908)' no Ubuntu
------------------------------------------------------------------------------


Quando o virtual box apresenta o seguinte erro:

    Kernel driver not installed(rc = 1908)
    '/etc/init.d/vboxdrv setup'

Execute para corrigir:

    # apt-get install virtual-dkms
    # modprobe vboxdrv



Resolvendo o seguinte erro: '/etc/init.d/vboxdrv setup' no Fedora
-----------------------------------------------------------------


Quando o virtual box apresenta o erro acima, execute para corrigir:

	# yum install kernel-develckernel-headers gcc dkms

Execute  em seguida:

    # /etc/init.d/vboxdrv setup


(Draft) Compartilhando pastas
---

http://www.vivaolinux.com.br/dica/Compartilhamento-de-pastas-no-VirtualBox