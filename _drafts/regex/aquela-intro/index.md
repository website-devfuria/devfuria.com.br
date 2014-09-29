---
layout: grid12-article
---

A expressão regular `n.a` casa com "não" e "nao", e também com coisas indesejáveis como "n-o", "n5o", "n o" e etc...

<a href="http://regexr.com/39ckk" title="">
    <img src="nao-ponto-regexr.png" alt="Figura" />
</a>

Ao substituir a expressão `n.a` por `n[ãa]o`, reduzimos a possibilidade de resultados para somente "não" e "nao".

<a href="http://regexr.com/39ckt" title="">
    <img src="nao-lista-regexr.png" alt="Figura" />
</a>
