Debugando (depurando)
======================


> Precisamos debugar o programa para sabermos onde [e como] está ocorrendo o erro.
<small>Conversa imaginária entre programador e estagiário</small>

Essa frase faz parte do dia a dia do desenvolvedor e, não raro, ela tira o sono de muita gente.

Debugar é um esforço para encontrar determinado ponto (às vezes vários pontos) "defeituoso" no código para que seja
corrigido.

Debugar é o aportuguesamento da palavra debug. É sinônimo de depurar, acho que esse é o termo mais correto.
Mas gramática não é o tema desta matéria. Nosso objetivo aqui é enteder esse processo.

Ao sentar-se na frente do computador para codificar (seja lá o que for) o desenvolvedor estabelece, ou deveria estabelecer,
uma conversa com o computador e seu código fonte:

	dev: E aí computer, me mostre o VALOR da variável "resultado".

	cpu: Ok, mas parece que não está retornando nada, veja o valor que ela contém... "".

	O dev para e pensa um pouco: Qual será o tipo do dado, pois o valor não está ajudando muito.

	dev: Computer, me mostra agora TIPO de dado da variável "resultado".

	cpu: string(0)

	O dev novamente reflexivo: O valor é "", o tipo é string. Acho que vou "parar" em outro ponto...


Esse é o processo de depuração: ir parando em determinados pontos do código fonte e pedir para o computador mostrar o
que vai em sua memória.

Acredite, isso não é nada sexy.

Esse "ponto" ao qual estou me referindo nada mais é do que uma linha de código, por isso que 99% dos editores de código
enumeram as linhas do arquivo. Seu colega de trabalho do andar de cima te liga é diz: "veja o erro está na linha 37".
Você deve olhar a linha 37 com a tranquilidade de que estão tratando exatamente a mesma linha.

Em muitos casos, o problema não está exatamente na linha que estamos debugando. O problema é culpa de umas linhas um
pouco mais acima, ou até de outro script.

Em outros casos, podem aparecer diversos erros, mas que foram ocasionados por uma única linha. A correção dessa linha
siginifica a correção de todos os erros descobertos. Veja a tirinha baixo:

<div class="imagem">
    <img src="../../imagens/tirinha16-debugando.png" alt="Desenho em quadrinhos satirizando as mensagens de debugação!" />
    <p>Se programar já é uma arte, imagine debugar!!!</p>
    <p>Fonte:<a href="http://vidadeprogramador.com.br/2011/08/19/erro-nao-documentado/">Vida de programador</a></p>
</div>

Debugar é também sinônimo de teste. Porém "testes" é uma palavra com escopo ampliado.

Veja o que a Wikipedia tem a nos dizer: [http://pt.wikipedia.org/wiki/Teste\_de\_software](http://pt.wikipedia.org/wiki/Teste_de_software "Sobre 'testes'")

Não vamos falar sobre testes agora, ok? Mas apenas formas simples de depuração.



Formas rudimentares
-------------------

A forma mais rudimentar de debugar em JS é exibir um alerta. Com o tempo você vai se encher com as popup e logo vai 
procurar uma alternativa.

	var minha_variavel = "Hello, word";
	alert(minha_variavel);

<div class="imagem">
    <img src="../../imagens/debug-alert.png" alt="Janela popup!" />
    <p><a href="http://www.google.com.br/imgres?um=1&client=firefox-a&rls=org.mozilla:en-US:unofficial&hl=pt-BR&biw=1600&bih=708&tbm=isch&tbnid=QdpAyAyAgh-OjM:&imgrefurl=https://www.cs.washington.edu/education/courses/190m/11su/labs/lab5-pimpmytext.shtml&docid=lmm1bXv6kpfLaM&imgurl=https://www.cs.washington.edu/education/courses/190m/11su/labs/5/output2-helloworld.png&w=326&h=121&ei=8QFnUZ_0LabC4AP-tIBw&zoom=1&ved=1t:3588,r:9,s:0,i:109&iact=rc&dur=363&page=1&tbnh=96&tbnw=260&start=0&ndsp=18&tx=77&ty=32
">Fonte da imagem acima</a></p>
</div>


Outra forma, também rudimentar, seria mostrar o resultado na própria página (nosso HTML) através do método write() do
objeto "document".

	var minha_variavel = "Hello word";
	document.write(minha_variavel);

<div class="imagem">
    <img src="../../imagens/debug-write.png" alt="Janela popup!" />
    <p><a href="http://www.google.com.br/imgres?um=1&client=firefox-a&rls=org.mozilla:en-US:unofficial&hl=pt-BR&biw=1600&bih=708&tbm=isch&tbnid=WDUlN6phJWfzBM:&imgrefurl=http://blueashes.com/2011/web-development/install-nodejs-on-windows/&docid=s3IiGVujcMe7DM&imgurl=http://blueashes.com/wp-content/uploads/2011/11/node-js-hello-world.png&w=620&h=200&ei=8QFnUZ_0LabC4AP-tIBw&zoom=1&ved=1t:3588,r:15,s:0,i:127&iact=rc&dur=585&page=1&tbnh=110&tbnw=342&start=0&ndsp=18&tx=58&ty=56">Fonte da imagem acima</a></p>
</div>




Depuradores (subindo um degrau)
-------------------------------

Quem desenvolve em JS e utiliza o FireFox para ver o resultado pode contar com o FireBug (já comentei um monte de vez
sobre esse plugin em matérias anteriores). Se você ainda não tem ele instalado, faça isso imediatamente.

O FireBug é um plugin do navegador Firefox, ele é opensource e está disponível para download em:
[https://addons.mozilla.org/pt-br/firefox/addon/firebug](https://addons.mozilla.org/pt-br/firefox/addon/firebug "FireBug")

	var minha_variavel = "Hello word!";
	console.log(minha_variavel);


A imagem abaixo ilustra o resultado do console do firebug, repare que o desenvolvedor está usando o plugin do firebug
na IDE Eclipse.

<div class="imagem">
    <img src="../../imagens/debug-firebug.png" alt="Janela popup!" />
    <p><a href="http://1.bp.blogspot.com/-yxbVFlzsyK8/UBUm7iInQAI/AAAAAAAAFpQ/l4ZSI-Mv4Ps/s1600/console.png">Fonte da imagem acima</a></p>
</div>

Ele parece-se com o do navegador (document.write) mas não se engane, a janela do console tem muitas outras 
funcionalidades e atrativos.

<span style="text-decoration:line-through;">Em breve, voltarei para apresentar brevemente o FireBug.</span>

Já voltei. 

Cada vídeo que eu gravo é uma aventura! No primeiro, havia a voz da minha pequena grande Joana, neste eu
estava com gripe e minha voz (que já é baixa) ficou super abafada. Tentei amplificar mais consegui apenas alguns chiados.

De qualquer forma, vale a pena assistir ao video. É uma breve demonstração do Firebug e das funcionalidades comentadas.

<div class="imagem">
	<iframe width="560" height="315" src="http://www.youtube.com/embed/IP8xDTGkfjc" frameborder="0" allowfullscreen></iframe>
</div>


Como saber se o código não está com problemas ?
----------------------------------------------------

Estou mereferindo ao código quebrado, aquele que nem compila ou, em nosso caso, onde a linguágem é interpretada, estou me referindo ao código que demosntra erros. *E como demostrar os erros?*.

Quando executamos o arquivo (seja .html ou .php ou qualquer outra linguagem que vocẽ use) os erros podem não aparecerem, em outras palavra, alguns erros são "timidos". Para encorajá-los a sair da "toca" é preciso utilizar o console.log() e, obviamente, manter o firebug aberto.

O teste mais básico que podemos fazer em um script JS é abrir o HTML, ligar o Firebug (acione a tecla F12), escolha a aba "console" e
recarrega a página con a tecla F5 ( à vezes precisamos executar um CTRl + F5, isso força a atualização).

Se não aparecer nenhuma mensagem de erro, ótimo! Seu script está correto (pelo menos do ponto de vista da sintaxe).


