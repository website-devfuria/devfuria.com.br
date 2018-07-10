---
title:       Basic Python Exercises - sys.argv
description: Exercício que demosntra um 'Hello World' utilizando a propriedade sys.argv
capitulo:    python-google
ordem:       6
---

<p>
    Se você caiu de paraquêdas nesta página, nós estamos na seção Python realizando os exercícios de programação da
    lista do <a href="https://developers.google.com/edu/python/exercises/basic">Google Python Exercise</a>
</p>
<p>
    O Google mantém um breve tutorial e alguns exercícios sobre Python, eu apenas traduzi os enunciados. O legal dos
    exercícios é que eles vem com os testes prontos, ou seja, você olha para o teste para ver como o código deveria
    funcionar e implementa as funções até os testes passarem. Copie o conteúdo abaixo em um arquivo chamado <code>script.py</code>
    e execute no terminal <code>python script.py</code>.
</p>
<p>
    O exercício acaba quando todos os
    <a href="/python/tdd-primeiros-passos-com-testes-unitarios/">testes</a>
    estiverem passando.
</p>

Este é o exemplo de "Hello Word" da Google, apesar de simples não pude deixar de incluí-lo pois
ele ilustra como utilizar a propriedade [sis.argv](/python/sys-argv/).

Crie um arquivo denominado `hello.py` e insira o conteúdo abaixo.

```python
import sys

# Define a main() function that prints a little greeting.
def main():
  # Get the name from the command line, using 'World' as a fallback.
  if len(sys.argv) >= 2:
    name = sys.argv[1]
  else:
    name = 'World'

  print('Hello', name)

# This is the standard boilerplate that calls the main() function.
if __name__ == '__main__':
  main()
```

Execute no terminal....

    python hello.py
    // Hello Word

    python hello.py Alice
    // Hello Alice