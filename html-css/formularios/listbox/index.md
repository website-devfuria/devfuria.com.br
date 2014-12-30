---
layout:      grid93-article
title:       Caixa de multipla seleção (List box)
description: Artigo a respeito do controle list box (formulário web) - HTML e CSS
menu:        html-forms
---

As __list box__ são as [combobox](../combobox/) de multipla escolha, para isso adicionamos a propriedade
`multiple`.

```html
<select multiple>
    <option>Arts</option>
    <option>Politics</option>
    <option>Science</option>
    <option>Computers and internet</option>
</select>
```

Tudo que foi dito para a combobox é válido para a __listbox__, na verdade é o mesmo controle,
só mudamos uma propriedade. 

![Ilustração de um campo list box ](select-multiple-list.png "Ilustração de um campo listobox")

Se você quiser separar o conteúdo por grupo, poderá utilizar a tag `optgroup` como o exemplo abaixo.

```html
<optgroup label="Option group 1">
    <option>Sub option 1</option>
    <option>Sub option 2</option>
    <option>Sub option 3</option>
</optgroup>
```

Veja o resultado:

<div data-height="398" data-theme-id="2897" data-slug-hash="JoGBrV" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/JoGBrV/'>Multi-Select with Optgroup sub selection</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>


