---
layout: grid12-article
---


### Exemplos simples

Expressão regular `n.a`:

<pre>
<span class="regex">não</span> <span class="regex">nao</span> <span class="regex">n-o</span> <span class="regex">n5o</span> <span class="regex">n o</span> 
</pre>


Expressão regular `n[ãa]o`:

<pre>
<span class="regex">não </span> <span class="regex">nao</span>
</pre>



### Números

Tanto a expressão regular `[0123456789]` como a expressão `[0-9]` produzem:

<pre>Este exemplo está na página <span class="regex">31</span> do livro</pre>

Dê preferência para a forma reduzida.



### Horas

Expressão regular `[0-9][0-9]:[0-9][0-9]`:

<pre>
<span class="regex">08:30</span>
<span class="regex">22:50</span>
<span class="regex">99:00</span>
</pre>

Mas a expressão acima também casa com valores que não são horas, exemplo "99:99".

Expressão regular `[012][0-9]:[0-5][0-9]`:

<pre>
<span class="regex">08:30</span>
<span class="regex">22:50</span>
<span class="regex">29:00</span>
</pre>

Já melhorou um pouco, mas ainda casa com "29:00".
 


### Vogais

Expressão regular `[aeiou]`:

<pre>
<span class="regex">a</span>bcd<span class="regex">e</span>fgh<span class="regex">i</span>jklmn<span class="regex">o</span>pqrst<span class="regex">u</span>vwxyz
</pre>



### Letras minúsculas (sem acentos)

Expressão regular `[a-z]`:

<pre>
<span class="regex">abcdefghijklmnopqrstuvwxyz</span>
</pre>



### Letras minúsculas (outras extensões)

Expressão regular `[a-k]`:

<pre>
<span class="regex">abcdefghijk</span>lmnopqrstuvwxyz
</pre>

Expressão regular `[^a-k]`:

<pre>
abcdefghijk<span class="regex">lmnopqrstuvwxyz</span>
</pre>

Expressão regular `[a-el-o]`:

<pre>
<span class="regex">abcde</span>fghijk<span class="regex">lmno</span>pqrstuvwxyz
</pre>


### Letras maiúsculas (sem acentos)

Expressão regular `[A-Z]`:

<pre>
<span class="regex">ABCDEFGHIJKLMNOPQRSTUVWXYZ</span>
</pre>



### Alfa numérico (sem acentos)

Expressão regular `[A-Za-z0-9]`:

<pre>
<span class="regex">0123456789
ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz</span>
</pre>



### Tabela ASCII


Expressão regular `[:-@]`:

<pre>
 !"#$%&'()*+,-./0123456789<span class="regex">:;<=>?
@</span>ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
</pre>

Expressão regular `[.,!?:]`:

<pre>
 <span class="regex">!</span>"#$%&'()*+<span class="regex">,</span>-<span class="regex">.</span>/0123456789<span class="regex">:</span>;<=><span class="regex">?</span>
@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
</pre>


Não utilize a expressão regular `[A-z]`, ela vai pegar algo a mais além das letras do alfabeto:

<pre>
 !"#$%&'()*+,-./0123456789:;<=>?
@<span class="regex">ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz</span>{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
</pre>


Todos os caracteres da tabela ASCII menos os __numéricos__, expressão regular `[^0-9]`:

<pre>
<span class="regex"> !"#$%&'()*+,-./</span>0123456789<span class="regex">:;<=>?
@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ</span>
</pre>

Todos os caracteres da tabela ASCII menos os alfa numéricos, expressão regular `[^A-Za-z0-9]`:

<pre>
<span class="regex"> !"#$%&'()*+,-./</span>0123456789<span class="regex">:;<=>?
@</span>ABCDEFGHIJKLMNOPQRSTUVWXYZ<span class="regex">[\]^_
`</span>abcdefghijklmnopqrstuvwxyz<span class="regex">{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ</span>
</pre>


### Para incluir o literal hífen -

...coloque ele no __final da lista__, como no exemplo abaixo.

Expressão regular `[0-9-]`:


<pre>
casando<span class="regex">-</span>com<span class="regex">-</span>números<span class="regex">-</span>(<span class="regex">1</span>, <span class="regex">2</span>, <span class="regex">3</span>, etc...)<span class="regex">-</span>e<span class="regex">-</span>o<span class="regex">-</span>hífen
</pre>

### Para incluir o literal colchete que fecha ]

...coloque ele no __início da lista__, como no exemplo abaixo.

Expressão regular `[]0-9]`:


<pre>
casando<span class="regex">]</span>com<span class="regex">]</span>números<span class="regex">]</span>(<span class="regex">1</span>, <span class="regex">2</span>, <span class="regex">3</span>, etc...)<span class="regex">]</span>e<span class="regex">]</span>o<span class="regex">]</span>colchete
</pre>



### Letras acentuadas

Para incluir acentos devemos recorrer as __classes POSIX__, elas levam em conta a localidade do sistema.

<table>
    <thead>
        <tr>
            <th>classe POSIX</th>
            <th>significado</th>
            <th>equivalente</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>[:upper:]</td>
            <td>letras maiúsculas</td>
            <td>`[A-Z]`</td>
        </tr>
        <tr>
            <td>[:lower:]</td>
            <td>letras minúsculas</td>
            <td>`[a-z]`</td>
        </tr>
        <tr>
            <td>[:alpha:]</td>
            <td>maiúsculas e minúsculas</td>
            <td>`[A-Za-z]`</td>
        </tr>
        <tr>
            <td>[:alnum:]</td>
            <td>alfa numéricos</td>
            <td>`[A-Za-z0-9]`</td>
        </tr>
        <tr>
            <td>[:digit:]</td>
            <td>Números</td>
            <td>`[0-9]`</td>
        </tr>
    </tbody>
</table>

A correta utilização é __uma classe POSIX dentro de uma lista__:

    [[:upper:]]



### Curinga .*

A expressão `relatório.*amanhã` casa com

<pre>
Oi,

Tudo bem?

Preciso do <span class="regex">relatório de vendas pra amanhã</span>.

Pode ser?
Abraço.
</pre>