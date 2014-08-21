---
layout:      materia
title:       Introdução a Expressões Regulares
description: 
---

__O que são Expressões Regulares ?__

Expressões Regulares é uma técnica para procurar, de forma bem específica, um texto abrangente.

A expressão regular relaciona todas as ocorrências (__matches__) de um padrão (__pattern__) em um trecho de texto
(__subject__).

<table>
    <thead>
        <tr>
            <th>termo</th>
            <th>significado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>matches</td>
            <td>Casar, encontrar, combinar, ocorrências, conferir, encaixar e igualar.</td>
        </tr>
        <tr>
            <td>pattern</td>
            <td>Padrão, a expressão regular propriamente dita. String de padrão de procura.</td>
        </tr>
        <tr>
            <td>subject</td>
            <td>Texto que será vasculhado por nossa expresão regular.</td>
        </tr>
    </tbody>
</table>

O exemplo mais simples possível de uma expressão regular seria a busca pelo "termo exato":

O assunto (subject) seria `Casa com a palavra exemplo`.

E queremos encontrar o padrão (nossa expressão regular ) `exemplo`.

O resultado (matches) seria:

<pre>
Casa com a palavra <span class="regex">exemplo</span>
</pre>
