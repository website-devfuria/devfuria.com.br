---
layout:      grid12-article
title:       Python - Expressões Regulares
description: O básico sobre Expressões Regulares (regex) na linguagem Python
---

Para aprender sobre expressões regulares em Python é necessário, antes de tudo, entendermos sobre as próprias expressões
regulares. Veja na seção [Regex](/regex/).

Em Python temos o módulo __re__, então a primeira coisa que precisamos fazer é importá-lo.

    import re

Podemos chamar o método `match(pattern, subject)`.

    match('seu-expressão', 'seu-texto-que-será-procurado')

Se houver resultado a função retorna um objeto match.

    >>> import re
    >>> re.match('1', '1')
    <_sre.SRE_Match object; span=(0, 1), match='1'>

Se NÂO houver resultado o retorno é `None`.

    >>> import re
    >>> re.match('1', '2)
    >>>


### O prefixo r

O prefixo `r` antes da expressão regular evita o pré-processamento da ER pela linguagem.

Colocamos o modificador r (do inglês "raw", crú) imediatamente antes das aspas, assim: (`r'\bdia\b'`).

A linguagem Python irá processar o metacarctere `\b` para o símbolo de backspace `\x08`.

    >>> '\b'
    '\x08'
    >>> r'\b'
    '\\b'
    >>> 

Nem sempre é preciso a presença do prefixo, você irá se deparar com expressões que não utilizam o prefixo.
E está correto, pois apenas alguns símbolos são processados. 
Veja a [documentação do Python](https://docs.python.org/3.4/reference/lexical_analysis.html#literals "link-externo") 
para maiores detalhes.

Em nosso exemplo, a expressão `\bdia\b` casa com "dia" mas não casa com "bom-dia", veja código abaixo.

```python
import re

def erCasaComDia(subject):
    pattern = r'\bdia\b'
    return re.match(pattern, subject)

assert erCasaComDia('dia')
assert not erCasaComDia('bom-dia')
```

Importante destacar que sem o prefixo r teríamos que escapar todos as barras.

Veja a tabela abaixo, teríamos que escrever como a coluna esquerda.

Já com o uso do prefixo podemos escrever como a coluna da direita.

<table>
    <tr>
        <th>Regular String</th><th>Raw string</th>
    </tr>
    <tr>
        <td>"ab*"</td><td>r"ab*"</td>
    </tr>
    <tr>
        <td>"\\\\section" </td><td>r"\\section"</td>
    </tr>
    <tr>
        <td>"\\w+\\s+\\1"/td><td>r"\w+\s+\1"</td>
    </tr>
</table>

 	
 	
	
 	


