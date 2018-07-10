---
title:       Python - sys.argv
description: Neste artigo veremos o funcionamento de sys.argv na linguagem Python
capitulo:    python-artigos
ordem:       13
---

`sys.argv` é a lista de argumentos passado para um script Python.

- sys.argv[0] é o nome do script
- sys.argv[1] é primeiro parâmetro
- sys.argv[2] é segundo parâmetro
- etc...


### Exemplo

Crie um arquivo chamado `foo.py` com o seguinte conteúdo.

```python
# -*- coding: utf-8 -*-

import sys

for arg in sys.argv:
    print(arg)
```

Executando no terminal `python foo.py arg1 arg2 arg3`, o resultado será:

    foo.py
    arg1
    arg2
    arg3


### Fontes:

- [docs.python.org/3.4 - sys.argv](https://docs.python.org/3.4/library/sys.html#sys.argv)
- [www.tutorialspoint.com - command_line_arguments](http://www.tutorialspoint.com/python/python_command_line_arguments.htm)
- [www.diveintopython.net - command_line_arguments](http://www.diveintopython.net/scripts_and_streams/command_line_arguments.html)


### Outros funções de sys

Para sabermos mais sobre a versão Python utilizada podemos lançar mão da propriedade `sys.version_info`.

    >>> sys.version_info
    sys.version_info(major=3, minor=4, micro=3, releaselevel='final', serial=0)

Para fatiar a versão podemo sfazer algo semelhenta ao mostrado abaixo.

    >>> sys.version_info[:2]
    (3, 4)
