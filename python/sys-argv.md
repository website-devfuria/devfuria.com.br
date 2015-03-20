---
layout:      grid12-article
title:       Python - sys.argv
description: Neste artigo veremos o funcionamento de sys.argv na linguagem Python
---

`sys.argv` é a [lista](/python/listas/) de argumentos passado para um script Python.

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


<br>
Fontes:

- [docs.python.org/3.4 - sys.argv](https://docs.python.org/3.4/library/sys.html#sys.argv "link-externo")
- [www.tutorialspoint.com - command_line_arguments](http://www.tutorialspoint.com/python/python_command_line_arguments.htm "link-externo")
- [www.diveintopython.net - command_line_arguments](http://www.diveintopython.net/scripts_and_streams/command_line_arguments.html "link-externo")