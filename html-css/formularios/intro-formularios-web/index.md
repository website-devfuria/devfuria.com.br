---
layout:      grid12-article
title:       Introdução aos formulários web
description: Uma rápida intrpdução aos formulários web.
---

Um __formulário web__ é a porta de entrada dos dados de sua aplicação.

É nele que seu usuário faz a entrada de dados.

Abaixo, temos um exemplo de formulário.

{% highlight html %}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" >
    <head>
        <title> Nosso singelo formulário </title>
    </head>
    <body>
        <form action="script-para-onde-envio-os-dados.php" method="post">
            <p>
                Name:  <input type="text" name="username" value="João da Silva" />
            </p>
            <p>
                Email: <input type="text" name="email"  value="joao@dasilva.com" />
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>
    </body>
</html>
{% endhighlight %}



Como os formulários web funcionam?
---

O formulário "pega" os dados digitado pelo usuário, associa cada dado a um nome de campo e os envia ao servidor. 
Lá no outro lado (no servidor), um linguagem de servidor recebe os dados e faz alguma coisa com eles, seguindo a lógica
do script criado pelo programador.

A tag `form` é o início do formulário.

{% highlight html %}
<form>

</form>
{% endhighlight %}

Dentro das tags `form` colocamos os controles (inputs), labels e alguns botões.

Um formulário na web normalmente é chato de se preencher, só que ele é a alma dos aplicativos web, pois é através de seus
campos que o usuário faz a inserção dos dados e, dessa forma, interage com o sistema.

Um formulário pode (e deve) conter elementos que formam um par `nome=valor`.

Por exemplo, um __campo de entrada de texto__ (uma text box) chama-se `pais` e o seu valor é o texto `Brasil`. Quando
esse formulário submeter seus dados para o servidor, ele poderá trabalhar com a variável `pais` e seu valor será `Brasil`.

Esse negócio é tão simples que fica até difícil de explicar, rs.

Veja o famoso formulário horizontal do Facebook. Vamos analisar apenas a "tarja azul", temos os campos `login`, `senha` e uma
chekbox "mantanha-me conectado".

!["formulário web de exemplo"](form-facebook.png "formulário web de exemplo")

Quando o usuário preencher os dados e clicar no botão "Entrar" o servidor poderá trabalhar com os seguintes dados:

    login=email@digitado
    senha=1234
    manter=false

Essa questão da interação __formulário/servidor__  é assunto para as linguagens de servidores. Aqui, no curso de HTML e
CSS vamos nos deter apenas em seu layout e estrutura.

<hr>
Fonte:

- [My first HTML form (MDN) - Exemplo básico de formulário web](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form "link-externo")



Estilizando
---

Abaixo temos um formulário vertical, onde as labels de cada controle está alinhada a esquerda. Repare que fazemos uso
do elemento `fieldsets` para dar mais significado na estrutura. As labels também se fazem presente no exemplo, esse
elemento é utilizado para adicionar um nome significativo e descritivo a cada elemento do formulário. Em muitos
navegadores, clicar no elemento __label__ fará com que o elemento do formulário ganhe o foco.

<div data-height="852" data-theme-id="2897" data-slug-hash="zxvPBy" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/zxvPBy/'>advanced-form</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>

A estrutura básica de cada controle deve ser semelhante ao seguinte trecho:

{% highlight html %}
<p>
    <label for="url">Web Address:</label>
    <input name="url" id="url" type="text" />
</p>
{% endhighlight %}

Para que as labels fiquem à esquerda e os campos à direita, aplicamos a propriedade [float](/html-css/float/) e um tamanho
adequado no elemento `label`.

{% highlight css %}
label {
    float: left;
    width: 10em;
}
{% endhighlight %}

Os controle de opção no fieldset "remember-me" estão agora a `10em` de distância um do outro. Se você quiser, por exemplo,
diminuir para `4em` a distância entre eles sem interferir nos demais controle podemos colocar um `id` no fileadset e
aplicar uma regra as labels.

{% highlight css %}
#remember-me label {
    width: 4em;
}
{% endhighlight %}

A largura das caixas de texto foi definida aplicando-se uma largura ao elemento de entrada `input`. Entretanto, esse
elemento (`input`) abrange outros recursos de formulário como 
[checkboxe’s](/html-css/formularios/checkbox/), 
[radio buttons](/html-css/formularios/radio-buttons/) e
[botões de envio](/html-css/formularios/button-submit-reset/).
Dessa forma, configurando o elemento input com uma largura de 200 pixles, todos os elementos input terão 200 pixels.

{% highlight css %}
input {
    width: 200px;
}
{% endhighlight %}

Uma maneira de evitar esse problema é utilizar o seletor de atribuot para selecionar a input específica.

{% highlight css %}
input[type="radio"], input[type="checkbox"], input[type="submit"] {
    width: auto;
}
{% endhighlight %}

Fazer com que os botões de opção flutuem à esquerda irá trazê-los de volta ao mesmo nível dos seus labels, e uma pequena
quantidade de margem direita fornecerá o espaçamento desejado entro os dois elementos.

{% highlight css %}
input[type="radio"] {
    float: left;
    margin-right: 1em;
}
{% endhighlight %}


Criar um layout de duas colunas para grandes grupos de caixas de seleção ou de botões de opção é um pouco mais complexo.
O autor (este exemplo é do Andy Budd) justifica a utilização do elemento de título `h2` no lugar das labels pelo fato
delas (as labels) só funcionam para elementos individuais. Poderíamos utilizar outro fieldset para esse pequeno
grupo mas novamente o autor justifica problemas de incompatibilidade entre os navegadores estragaria o layout, o autor
elaborou o exemplo em uma época que o IE6 e o IE7 eram os navegadores mais utilizados, ficará a cargo do leitor decidir
qual seria a melhor estratégia para alcançar tal objetivo.

{% highlight html %}
    ...
        <fieldset id="favoriteColor">
            <h2>Favorite Color:</h2>
    ...
{% endhighlight %}

Na sequência, vem as estilizações para nosso grupo checkboxe's:

{% highlight css %}
#favoriteColor {
    margin: 0;
    padding: 0;
    border: none;
    background: transparent;
}
#favoriteColor h2 {
    width: 10em;
    float: left;
    font-size: 1em;
    font-weight: normal;
}
#favoriteColor div {
    width: 8em;
    float: left;
}
#favoriteColor label {
    width: 3em;
    float: none;
    display: inline;
}
#favoriteColor p {
    margin: 0.3em 0;
}
{% endhighlight %}

A campo data de aniversário útiliza-se de 3 elementos em sua composição: 2 textbox e 1 combobox. Esse formato é
considerado uma entrada facilita para esse tipo de campo e, apesar de antigo, ainda bastante encontrado nos sites atuais
(pelo menos enquanto escrevo o este artigo). O CSS é bastante intuitivo e dispensa comentários, então vou apenas ilustrados:

{% highlight css %}
#monthOfBirthLabel, #yearOfBirthLabel {
    /**
    A intenção do autor foi esconder a label das vistas
    mas não dos softwares leitores de tela */
    text-indent: -1000em;
    width: 0;
}
#dateOfBirth {
    width: 3em;
    margin-right: 0.5em;
}
#monthOfBirth {
    width: 10em;
    margin-right: 0.5em;
}
#yearOfBirth {
    width: 5em;
}
{% endhighlight %}

Para finalizar, os formulários precisarão de algum tipo de mensagem de feedback a fim de destacar os campos ausentes ou
aqueles incorretamente preenchidos. Para isso usamos o a regra abaixo:

{% highlight css %}
label .feedback {
    position: absolute;
    margin-left: 11em;
    left: 200px;
    right: 0;
    font-weight: bold;
    color:#760000;
    padding-left: 18px;
    background: url(http://www.devfuria.com.br/html-css/formularios/intro-formularios-web/error.png) no-repeat left top;
}
{% endhighlight %}

E o HTML deve ser...

{% highlight html %}
<p>
    <label for="email">Email Address: <span class="feedback">Incorrect email address. Please try again.</span></label>
    <input name="email" id="email" type="text" />
</p>
{% endhighlight %}
