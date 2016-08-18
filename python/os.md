---
title:       Python - os
description: Neste artigo veremos o funcionamento do módulo python.os bem como as funções listdir(), exists(), isdir(), isfile()
---

O módulo __os__ acredito que é um dos principais em Python, ele traz informações sobre o sistema operacional como 
demonstrado abaixo (via terminal).

```python
>>> import os
>>> os.name
'posix'
```

Ele é muito útil quando você precisar mexer no sistema de arquivos.

```python
#
# Exemplo 01
#
import os

path = "/var/www/"
dirs = os.listdir( path )

for file in dirs:
    print(file)
```

```python
#
# Exemplo 02
#
import os

for a in os.listdir("."):
     if os.path.isdir(a):
         print("d %s" % a)
     elif os.path.isfile(a):
         print("- %s" % a)
```

```python
#
# Exemplo 03
#
import os

if os.path.exists("z"):
     print("O diretório z existe.")
else:
     print("O diretório z não existe.")
```


Inclusive, possui módulos internos igualmente úteis como é o caso do __os.path__.


os.path
---

Vou mostrar um exemplo, seu script se chama `foo.py` e está salvo na pasta `/home/projetos/trash/`, logo temos...

    /home/projetos/trash/foo.py

Executamos...

    cd /home
    python3 projetos/trash/foo.py

O conteúdo do script `foo.py` é o seguinte...

```python
# O local onde o script esta salvo,
# relativo ao ponto onde ele é
# acionado (executado).
print(__file__)                                         # projetos/trash/foo.py

#
# Nome do script
#
print(os.path.basename(__file__))                       # foo.py

#
# Pasta relativa do script
#
print(os.path.dirname(__file__))                        # projetos/trash

#
# Pasta absoluta do script + nome do script
#
print(os.path.abspath(__file__))                        # /home/projetos/trash/foo.py
```



Leia também
---

- [Python - os.path](/python/os.path/)