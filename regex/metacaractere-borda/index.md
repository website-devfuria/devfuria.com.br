---
title:       "Metacaractere borda \\b"
description: 
capitulo:    er-metacaracteres
ordem:       10
---

O metacaractere borda marca a borda de um "trecho" (letras, números e sublinhado).

A borda é útil para marcar palavras exatas e não parciais.

A expressão `\bdia\b` casa com a palavra inteira "dia".

Já com a parcial "dia" da palavra "diafragma" ela não casa.

<table>
    <thead>
        <tr>
            <th>expressão regular</th>
            <th>casa com...</th>
            <th>diagrama</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>\bdia\b</code></td>
            <td>
                bom-<code>dia</code>!<br />
                <code>dia</code>fragma<br />
                melodia<code>dia</code><br />
            </td>
            <td><img src="metacaractere-borda-01.png" alt="Figura ilustrando o metacaractere borda" title="Expresão regular: metacaractere borda" /></td>
        </tr>
        <tr>
            <td><code>dia\b</code></td>
            <td>
                bom-<code>dia</code>!<br />
                diafragma<br />
                melodia<code>dia</code><br />
            </td>
            <td><img src="metacaractere-borda-02.png" alt="Figura ilustrando o metacaractere borda" title="Expresão regular: metacaractere borda" /></td>
        </tr>
        <tr>
            <td><code>\bdia\b</code></td>
            <td>
                bom-<code>dia</code>!<br />
                <code>dia</code>fragma<br />
                melodiadia<br />
            </td>
            <td><img src="metacaractere-borda-03.png" alt="Figura ilustrando o metacaractere borda" title="Expresão regular: metacaractere borda" /></td>
        </tr>
    </tbody>
</table>

Obs: "Boundary" significa limite, fronteira, divisão, marco, etc...