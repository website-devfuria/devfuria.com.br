---
layout:      basico3
title:       Resconstruindo a biografia de Rasmus Ledorf
description:
capitulo:    "html-aplicando-conhecimento"
ordem:       6
---

Quando eu idealizei este pequeno curso eu estava preocupado em ensinar a você com exemplos reais e não com exemplos
didáticos.

Porque, por mais que os exemplos imaginados sejam didáticos, nada é mais didático do que um exemplo real, verdadeiro.

Então saí em busca de exemplos reais. A primeira grande dificuldade era (ainda é) encontrar páginas estúpidamente
simples e que facilitassem o aprendizado. Quem procura acha e foi isso que aconteceu, eu encontrei.

Eu encontrei esta mini [biografia de Rasmus Ledorf](http://lerdorf.com/bio/) o inventor da linguagem PHP. A página é
realmente bem simples, mas logo me deparei com o segundo grande problema: a maioria das páginas reais, seja simples ou
complexa, pequena ou grande, são carentes de uma refatoração. Em outras palavras, os exemplos reais de qualquer espécie
não são uma excelência quando o requisito é qualidade de codificação. Claro que existem exceções, a dificuldade é
encontrar numa mesma página 1) Simplicidade, 2) Marcação semântica e 3) Boas práticas. Na maioria dos casos, a gente
encontra um, mas não encontra outro.

![](bio-rasmus-ledorf.png)

A figura acima é um recorte que eu fiz do site, veja neste link [http://lerdorf.com/bio/](http://lerdorf.com/bio/) o
original.


## Desafio: extrair informação, cor e imagem.

A primeira coisa que você precisa fazer é aprender a extrair o conteúdo do site. Como a página é pequena, um simples
"CTRL C, CTRL V" ajudará a você a extrair o texto. Para extrair a imagem basta clicar com o botão direito em cima dela
e pedir para salvar em seu dico local. Já para extrair as cores você terá que suar um pouco, você deve examinar o código
fonte e encontrar as referêcnias das cores utilizadas.

Uma vez com o conteúdo extraido, você pode preparar o terreno para o segundo desafio e deixar tudo em um pasta (o
arquivo da figura e o arquivo de seu HTML).


## Desafio: olhar crítico.

Eu quero não só ensinar a você como criar um arquivo HTML adequado, mas quero que você desenvolva um olhar crítico quanto
a qualidade e semântica do HTML original que você observou. Você consegue criticar algum ponto ? Consegue elaborar
alguma melhoria no código que está observando ? Consegue indicar algum problema ou recurso mal utilizado ?


## Desafio: reconstrua o HTML.

Agora você deve olhar para a página original e, mentalmente, esboçar uma marcação para o HTML. Esqueça o HTML original,
crie o seu próprio como se ele ainda não existisse. Concretize sua ideia colocando ela no arquivo que você havia,
previamente, preparado.


## Desafio: exponha seu trabalho.

Esse desafio vai exigir de você coragem, além de disposição. Já imaginou se todos divulgassem seu HTML ? Dessa forma,
todos poderiam observar no trabalho do colega, como cada um elaborou sua página HTML! Pensando nisso, eu organizei um
repositório para utilizarmos...

Utilize essa página caso precise de ajuda!


## Desafio: estilize seu HTML.

Chegou a hora de aplicar o CSS. O processo é bem parecido, você deve observar a sua página (tanto código quanto a
renderização no navegador) e idealizar uma estilização.

O primeiro passo que você deve dar é fazer a imagem flutuar à direita do texto. Talvez eu ainda não tenha mostrado como
fazer isso, então segue o código CSS:

```css
img {
    float: right
}
```

Esse questão de flutuar elementos é muito importante, você deve encontrar no index desse compêndio alguns artigos
sobre o assunto. É esse a nossa grande lição neste desafio sobre CSS: flutuar uma imagem através do texto! As demais
regras e propriedades de CSS são de formatação (borda, core de fundo, cor de texto, etc...) acredito que você dará
contas dela sozinha(o).


## Bônus 1: aproveite para entender a responsividade

Muito se fala sobre Design Responsivo, a habilidade de sua página responder (se adequar) à diferentes tamanhos de telas.

Eu acredito que HTML seja responsivo por natureza, é preciso deixar o HTML fazer o seu trabalho. Em outras palavras...

Exprimente alterar o tamanho da janela de seu navegador.

![[aqui vai um gif]]('foo.gif')


## Bônus 2: você achou este exemplo bobo ?

Então veja como a Internet possui páginas dos estilos mais plurais imagináveis e inimaginável.

Dê uma olhada no site desse "figura" [https://dbaron.org/](https://dbaron.org/).

Notou que a home é a biografia dele e que é bem no estilo da do Lerdof ?

Veja também o HTML da página, obviamente!

