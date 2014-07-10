UBUNTU 12+

Via software-center é mais fácil, procure por

	"OpenJDK" ou
	"openJavaX" (onde x é a versão mais recente).


ou...


1. Baixe o pacote: http://www.oracle.com/technetwork/java/javase/dowloads/jdk-6u25-download-346242.html

2. Dê permissão de execução:

		# chmod 777 nome_do_arquivo

3. Executar arquivo (no caso ele vai extrair)

		# ./nome_do_arquivo

4. Mover a pasta extraida para o local abaixo especificado.
bs: "java" é o nome da pasta que foi descompactada(pode haver variação)

		# mv java /usr/local

5. Alterar o seguinte arquivo...

		# gedit .bashrc

	...adicionando no fim do arquivo:

		export PATH=${PATH}:/usr/local/nome_do_arquivo

6. Execute na sequencia:

		# source ~/.bashrc
		# java
		# javac



Para testar, execute:

	# java --version

...a versão instalada será exibida
