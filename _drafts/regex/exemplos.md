Exemplos de regex
---


### Curinga .*

A expressão `relatório.*amanhã` casa com

<pre>
Oi,

Tudo bem?

Preciso do <strong>relatório de vendas pra amanhã</strong>.

Pode ser?
Abraço.
</pre>


### Exemplos simples

Expressão regular `n.a`:

<pre>
<strong>não</strong> <strong>nao</strong> <strong>n-o</strong> <strong>n5o</strong> <strong>n o</strong> 
</pre>


Expressão regular `n[ãa]o`:

<pre>
<strong>não </strong> <strong>nao</strong>
</pre>



### Números

A expressão regular `[0123456789]` casa com todos os números de um texto.

Podemos simplificar a expressão regular acima para `[0-9]`.


### Para incluir o literal hífen -

...coloque ele no __final da lista__, como no exemplo abaixo.

Expressão regular `[0-9-]`:

<pre>
casando<strong>-</strong>com<strong>-</strong>números<strong>-</strong>(<strong>1</strong>, <strong>2</strong>, <strong>3</strong>, etc...)<strong>-</strong>e<strong>-</strong>o<strong>-</strong>hífen
</pre>

### Horas

Expressão regular `[0-9][0-9]:[0-9][0-9]`:

<pre>
<strong>08:30</strong>
<strong>22:50</strong>
<strong>99:00</strong>
</pre>

Mas a expressão acima também casa com valores que não são horas, exemplo "99:99".

Expressão regular `[012][0-9]:[0-5][0-9]`:

<pre>
<strong>08:30</strong>
<strong>22:50</strong>
<strong>29:00</strong>
</pre>

Já melhorou um pouco, mas ainda casa com "29:00".
 


### Vogais

Expressão regular `[aeiou]`:

<pre>
<strong>a</strong>bcd<strong>e</strong>fgh<strong>i</strong>jklmn<strong>o</strong>pqrst<strong>u</strong>vwxyz
</pre>



### Letras minúsculas (sem acentos)

Expressão regular `[a-z]`:

<pre>
<strong>abcdefghijklmnopqrstuvwxyz</strong>
</pre>



### Letras minúsculas (outras extensões)

Expressão regular `[a-k]`:

<pre>
<strong>abcdefghijk</strong>lmnopqrstuvwxyz
</pre>

Expressão regular `[^a-k]`:

<pre>
abcdefghijk<strong>lmnopqrstuvwxyz</strong>
</pre>

Expressão regular `[a-el-o]`:

<pre>
<strong>abcde</strong>fghijk<strong>lmno</strong>pqrstuvwxyz
</pre>


### Letras maiúsculas (sem acentos)

Expressão regular `[A-Z]`:

<pre>
<strong>ABCDEFGHIJKLMNOPQRSTUVWXYZ</strong>
</pre>



### Alfa numérico (sem acentos)

Expressão regular `[A-Za-z0-9]`:

<pre>
<strong>0123456789
ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz</strong>
</pre>



### Tabela ASCII


Expressão regular `[:-@]`:

<pre>
 !"#$%&'()*+,-./0123456789<strong>:;<=>?
@</strong>ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
</pre>

Expressão regular `[.,!?:]`:

<pre>
 <strong>!</strong>"#$%&'()*+<strong>,</strong>-<strong>.</strong>/0123456789<strong>:</strong>;<=><strong>?</strong>
@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
</pre>


Não utilize a expressão regular `[A-z]`, ela vai pegar algo a mais além das letras do alfabeto:

<pre>
 !"#$%&'()*+,-./0123456789:;<=>?
@<strong>ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz</strong>{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
</pre>


Todos os caracteres da tabela ASCII menos os __numéricos__, expressão regular `[^0-9]`:

<pre>
<strong> !"#$%&'()*+,-./</strong>0123456789<strong>:;<=>?
@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
`abcdefghijklmnopqrstuvwxyz{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ</strong>
</pre>

Todos os caracteres da tabela ASCII menos os alfa numéricos, expressão regular `[^A-Za-z0-9]`:

<pre>
<strong> !"#$%&'()*+,-./</strong>0123456789<strong>:;<=>?
@</strong>ABCDEFGHIJKLMNOPQRSTUVWXYZ<strong>[\]^_
`</strong>abcdefghijklmnopqrstuvwxyz<strong>{|}~¡
¢£¤¥¦§¨©ª«¬®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂ
ÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâ
ãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ</strong>
</pre>





<pre>
casando<strong>-</strong>com<strong>-</strong>números<strong>-</strong>(<strong>1</strong>, <strong>2</strong>, <strong>3</strong>, etc...)<strong>-</strong>e<strong>-</strong>o<strong>-</strong>hífen
</pre>

### Para incluir o literal colchete que fecha ]

...coloque ele no __início da lista__, como no exemplo abaixo.

Expressão regular `[]0-9]`:


<pre>
casando<strong>]</strong>com<strong>]</strong>números<strong>]</strong>(<strong>1</strong>, <strong>2</strong>, <strong>3</strong>, etc...)<strong>]</strong>e<strong>]</strong>o<strong>]</strong>colchete
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







### Exemplo <p[^>]*>
					
This will select the opening `p` tag. 
Use what ever tag you need in place of the 'p'.

Fonte http://www.mywebref.com/Code_Helper/pages/33.html