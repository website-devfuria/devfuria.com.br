Como criar um repositório na rede local
=======================================

Considerando dois computadores na mesma rede interna (um servidor e um cliente).


### O servidor

1. Crie a pasta onde ficará os repositórios.

2. Crie um repositório qualquer:

		# svnadmin create /local/dos/repositorios/projeto01

3. Dê permissão de escrita/execução:

		# chmod 777 -R /local/dos/repositorios/projeto01


4. O servidor svn deve ser inicializado:

		# svnserver -d -r /local/dos/repositorios

Obs: se o OS for reinicializado este comando deve ser reexecutado.

### O cliente

1. Dê um "checkout". Você deve saber a localização do servidor:

		# svn co svn://host_ou_ip/repositorios/projeto01

2. Faça alguma alteração, adicione arquivos na pasta da cópia de trabalho (work copy) e execute:

		# svn add "nome dos arquivos"

3. Aplique um "commit":

		# svn commit -m "menssagem qualquer"

Leia mais em:

* http://wiki.ubuntu-br.org/Subversion
