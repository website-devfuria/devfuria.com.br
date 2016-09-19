---
title:       HTML & CSS - Tabelas 
description:
---

As tabelas acomodam dados tabulares.

Isso parece óbvio, mas não foi assim no começo da internet. Pela falta de recursos apropriados e pela instabilidade 
advindo dos navegadores, muitos desenvolvedores utilizavam-se de tabelas para fazer o layout da página. Isso é uma 
prática condenável e seu remédio chama-se __tableless__, que nada mais é do que um conceito (ou talvez um princípio)
onde evita-se utilizar a tabela em algo que não seja dados tabulares.

Uma tabela contém linhas `tr` e campos `td`.

```html
<table>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
</table>
```

Podemos utilizar as tag's `thead`, `tbody` e `tfoot` que representam o cabeçalho, o corpo e o rodapé da tabela,
respectivamente. Essas ags permitem que o desenvovedor divida as tabelas em seções lógicas. Por exemplo, você pode colocar
todos os títulos da sua coluna dentro do elemento `thead`, oq ue lhe fornece meio de estilizar separadamente essa área
em particular. Veja algumas regas:

- Se utilizar um elemento `thead` e `tfoot` em uma tabela, você precisará pelo menos utilizar um elemento `tbody`.
- Você só pode utilizar um elemento `head` e `tfoot` em uma tabela.
- Mas poderá utilizar vários `tbody` caso precise dividir tabelas complexas em partes mais legíveis e gerenciáveis.
- Quando temos campos do cabeçalho (dentro da tag `thead`) utilizamos a tag `th` no lugar da `td`, pois essa representa
melhor o cabeçalho.

Veja um exemplo mais completo:

```html
<table>
    <thead>
        <tr>
            <th>campo 1</th>
            <th>campo 2</th>
            <th>campo 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>dado 1</td>
            <td>dado 2</td>
            <td>dado 3</td>
        </tr>
        <tr>
            <td>dado 1</td>
            <td>dado 2</td>
            <td>dado 3</td>
        </tr>
        <tr>
            <td>dado 1</td>
            <td>dado 2</td>
            <td>dado 3</td>
        </tr>
    </tbody>
    <tfoot>
        Este é o rodapé
    </tfoot>
</table>
```

- - -
Fontes:

- [HTML table - MDN](https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/table "link-externo")

Estilizando
---

O exemplo abaixo foi simplificado e extraído do livro do Andy Budd (Criando Páginas Web com CSS).

É uma tabela com tamanho fixo, zebrada e com o efeito __hover__ nas linhas (passe o mouse sobre as linhas para ver o efeito).

<div data-height="427" data-theme-id="2897" data-slug-hash="gbaJPE" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/gbaJPE/'>Estilizando tabelas</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>

A especificação CSS tem dois models de borda de tabela: separado (`separate`) e fundido (`collapse`). No modelo separado,
as bordas são posicionadas em torno de células individuais e, no modelo fundido, as células compartilham as bordas. A 
maioria dos navegadores assume o padrão do modelo separado, mas, pessoalmente, acho o modelo fundido mais útil. 

A propriedade `border-collapse` do elemento `table` pode assumir dois valores: `separate` ou `collapse`.

Para distinguir a linha inicial da tabela, aplicamos uma pequena imagem disposta lado a lado como fundo para o elemento
`thead`, veja a imagem:

![](bar.gif)

Se você não possui muita prática em criar imagens com degrade como a demonstrado acima, opte por colocar uma cor sólida.

Para zebrar a tabela criamos a regra `.even`.

```css
.even {
  background-color:#edf5ff;
}
```

Como conhecemos previamente a tabela (é uma tabela estática) podemos aplicar manualmente a regra a cada linha par.

```html
...
<tr class="odd">
...
```

Alerto para as estilizações antigas e fora de uso que encontramos na Internet, a que eu acabei de demonstrar é uma delas.
Essa foi uma forma muito comum de zebrar tabelas, caso sua tabela fosse dinâmica (de tamanho variável, desconhecido), 
uma linguagem do lado do servidor poderia ajudar a zebrar a lista. JavaScript também foi muito utilizado para tal.
Atualmente podemos lançar mão dos __seletores CSS 3__, no caso o seletor `:nth-child`. Atualizando nosso CSS temos:

```css
tr:nth-child(even) {
    background-color: #edf5ff;
}
```

O efeito __hover__ nas linhas da tabela utiliza-se da pseudoclasse `:hover` no elemento `tr`.

```html
tr:hover {
  background-color:#3d80df;
  color: #fff;
}
```

Indevidamente, o efeito é aplicado a linha do cabeçalho (primeira linha). Para "desligar" o efeito na linha do cabeçalho
podemos escrever o inverso para as linhas (`tr`) do elemento `thead`, veja:

```css
thead tr:hover {
  background-color: transparent;
  color: inherit;
}
```


- - -
Fontes:

- Criando Páginas Web com CSS, Andy Budd, Capítulo 6.
