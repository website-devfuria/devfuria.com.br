---
layout:      nulo
title:       Aplicando o CSS de forma embedded (incorporada)
capitulo:    "html-segundo"
ordem:       5
---
<html>
    <head>
        <title>Aplicando o CSS de forma embedded (incorporada)</title>
        <meta charset="UTF-8">
        <style>
        /*
         * Olá, é este estilo que eu quero que você atente!
         */
        p {
            color: blue
        }
        </style>
    </head>
    <body>

        <h1>Aplicando o CSS de forma embedded (incorporada)</h1>
        <p>| <a href="../aplicando-css-de-forma-inline">artigo anterior</a> | <a href="../">index</a> |</p>

        <img src="css-embedded.jpg" title="css embedded" alt="[figura css embedded]" />

        <p>Neste exemplo eu vou estilizar todos os parágrafos com a cor azul.</p>
        <p>
            Só que vamos utilizar a forma embedded (incorporada), ou seja, <br />
            colocaremos a regra CSS entre a tag <code>style</code> e essa, por sua vez, ficará <br />
            entre a tag <code>head</code> do codumento.
        </p>

        <pre><code>&lt;style&gt;
p {
    color: blue
}
&lt;/style&gt;</code></pre>

        <p>Veja o código fonte desta página para entender melhor!</p>
        <p>Agora vamos ver a forma externa <a href="../aplicando-css-de-forma-linked">Aplicando o CSS de forma linked</a>.</p>

    </body>
</html>