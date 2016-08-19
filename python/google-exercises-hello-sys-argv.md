---
title:       Hello Word com sys.argv
description: Artigo baseado na lista de exercícios do Google Python Exercise que demosntra um 'Hello World' utilizando a propriedade sys.argv
menu:        python-google
---

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