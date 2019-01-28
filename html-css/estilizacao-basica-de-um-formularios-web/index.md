---
title:       Estilização básica de um formulário web
description: A primeira coisa a ser comentado é que cada controle está acompanhado do elemento label. Esse elemento pode ajudar a adicionar estrutura e aumentar a acessibilidade aos formulários web.
capitulo:    "html-formularios"
ordem:       2
---

Abaixo temos um formulário bastante simples. O exemplo foi retirado do livro __Construindo Páginas Web com CSS (Andy Budd)__.

Vejamos a estrutura do HTML.

```html
<form action="#" method="post">
    <p>
      <label for="author">Name: </label>
      <input name="author" id="author" type="text" />
    </p>
    <p>
      <label for="email">Email Address:</label>
      <input name="email" id="email" type="text" />
    </p>

    <p>
      <label for="pass">Password:</label>
      <input name="pass" id="pass" type="password" />
    </p>
    <p>
      <label for="text">Message:</label>
      <textarea name="text" id="text" cols="20" rows="10"></textarea>
    </p>
    <p>
      <input type="button" value="Submit!" id="btnSubmit"/>
    </p>
</form>
```
Talvez você queira ver o [exemplo real](exemplo-1.html).


A primeira coisa a ser comentado é que cada controle está acompanhado do elemento `label`. Esse elemento pode ajudar a
adicionar estrutura e aumentar a acessibilidade aos formulários web. Em muitos navegadores, clicar no elemento label
fará com que o elemento do formulário ganhe o foco, veja o exemplo:

```html
<p>
  <label for="author">Name: </label>
  <input name="author" id="author" type="text" />
</p>
```

Posicionar os __labels__ de modo que eles apareçam verticalmente acima dos elementos do formulário é realmente muito simples.
__Labels__ são [elementos inline](../elementos-inline-block-level/) por padrão. Entretanto, configurar sua propriedade
 `display` como `block` fará com que eles gerem sua própria caixa de bloco, forçando os elementos "de entrada" (inputs)
para a linha de baixo. A largura das caixas de entrada de texto varia entre diferentes navegadores, portanto, para
consistência, você deve configurar explicitamente a largura das suas caixas de texto. Nesse exemplo, __pixels__ são usados,
mas, naturalmente, você poderia utilizar __ems__ para criar um layout de formulário mais auto-ajustável.

```css
label {
    display: block;
}
input {
    width: 300px;
}
```

Veja como ficou [nosso exemplo](exemplo-2.html).

