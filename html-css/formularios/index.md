---
layout:      grid12-index
title:       Formulários web e seus controles
description: Tudo o que você precisa saber sobre Formulários Web e seus controles.
---

Um __formulário web__ é a porta de entrada dos dados de sua aplicação.

É nele que seu usuário faz a entrada de dados.

Abaixo, temos um exemplo de formulário.

```html
<form action="script-para-onde-envio-os-dados.php" method="post">
    <p>Name:  <input type="text" name="username" value="João da Silva" /></p>
    <p>Email: <input type="text" name="email"  value="joao@dasilva.com" /></p>
    <p><input type="submit" value="Submit me!" /></p>
</form>
```

Leia uma [Introdução aos formulários web](/html-css/formularios/intro-formularios-web/).




Controles básicos (input)
---


A tag `input` compõem a maioria dos controles básicos.

```html
<input type="" name=""/>
```

A propriedade `name` será associada ao valor do campo.

Se o propriedade `name` for, por exemplo, "idade" e o valor digitado pelo usuário for `36` os dados para o servidor serão:

```html
idade=36
```

Alterando-se a propriedade `type` podemos obter os seguintes controles:


{% include /menus/html-forms-input.html %}



Controles básicos (não input)
---

Nesta categoria encontram-se os controles "combo box", "list box" e "text box multiline":

{% include /menus/html-forms-ninput.html %}