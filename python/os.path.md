---
layout:      grid12-article
title:       Python - os.path
description: Como funcionam as funções<br />basename(), dirname() e os.path.abspath()<br />do módulo os.path.
---

Neste artigo teremos um peque vislumbre do módulo __os.path__ e suas principais função como

- `basename()`,
- `dirname()` e
- `os.path.abspath()`

Veremos também as combinações...

- `os.path.abspath(os.path.dirname(""))`
- `os.path.dirname(os.path.abspath(""))`


os.path.basename()
---

Se aplicarmos a função split na URL (`"path/path".split("/")`), teremos uma lista como resposta parecida com esta
`['path', 'path']`. Em outras palavras, a função __basename()__ separa a URL em uma lista e retorna o último elemento,
veja:

    url.split("/")[-1]

Exemplo, a URL é separada em lista...

```python
"project/foo.py".split("/")
# ['project', 'foo.py']
```

Retorna-se o último elemento (`[-1]`) da lista...

```python
"project/foo.py".split("/")[-1]
# 'foo.py'

```

Eis a definição na documentação "Return the base name of pathname path. This is the second element of the pair returned 
by passing path to the function `split()`".

Dá a impressão que ele pega sempre o último elemento, veja mais exemplos.

```python
os.path.basename("")
# ''

os.path.basename("path")
# 'path'

os.path.basename("path/")
# ''

os.path.basename("path/to")
# 'to'

os.path.basename("path/to/")
# ''

os.path.basename("path/to/project")
# 'project'

os.path.basename("path/to/project/")
# ''

os.path.basename("path/to/project/foo.py")
# 'foo.py'

os.path.basename()
# TypeError: basename() takes exactly 1 argument (0 given)
```



os.path.dirname()
---

A função __dirname()__ separa a URL e retorna o "range" que vai do primeiro item até o penúltimo (`[:-1]`).

    url.split("/")[:-1]

O resultado do trecho acima ainda seria uma lista e, no caso, será convertido para string. Mas é obvio que a função faz
muito mais que isso.

Exemplo, a URL é separada em lista...

```python
"project/foo.py".split("/")
# ['project', 'foo.py']
```

Retorna-se o range do primeiro até o penúltimo elemento (`[-1]`) da lista...

```python
"project/foo.py".split("/")[:-1]
# ['project']
```

Eis a definição na documentação "Return the directory name of pathname path. This is the first element of the pair 
returned by passing path to the function `split()`".

Veja mais exemplos.

```python
os.path.dirname("")
# ''

os.path.dirname("path")
# ''

os.path.dirname("path/")
# 'path'

os.path.dirname("path/to")
# 'path'

os.path.dirname("path/to/")
# 'path/to'

os.path.dirname("path/to/project")
# 'path/to'

os.path.dirname("path/to/project/")
# 'path/to/project'

os.path.dirname("path/to/project/foo.py")
# 'path/to/project'

os.path.dirname()
# TypeError: dirname() takes exactly 1 argument (0 given)
```



os.path.abspath()
---

É um "join()" entre o local de execução do script e a URL passada como parâmetro.

Supondo o funcionamento...

```python
abs  = os.getcwd() = "/var/www"
path = "project/index"
return abs + path
```

Só que `path` recebe um tratamento que, diga-se de passagem, difere tanto de __dirname__ como de __basename__. Talvez
seja o efeito da função `normpath()`, como comentado na documentação.

Para ter uma idéia, é como se ele a URL fosse separada em uma lista e retornado todos os elementos desde que não seja
`""` (string de cumprimento zero). Exemplo:

```python
"path/".split("/")    --> ['path', '']       --> "path"
"path/to".split("/")  --> ['path', 'to']     --> "path/to"
"path/to/".split("/") --> ['path', 'to', ''] --> "path/to"
```

Eis a definição na documentação "Return a normalized absolutized version of the pathname path. On most platforms, this 
is equivalent to calling the function `normpath()` as follows: `normpath(join(os.getcwd(), path))`".

Veja mais exemplo e repare no acréscimo do pasta `home/`.

```python
os.path.abspath("")
# '/home'

os.path.abspath("path")
# '/home/path'

os.path.abspath("path/")
# '/home/path'

os.path.abspath("path/to")
# '/home/path/to'

os.path.abspath("path/to/")
# '/home/path/to'

os.path.abspath("path/to/project")
# '/home/path/to/project'

os.path.abspath("path/to/project/")
# '/home/path/to/project'

os.path.abspath("path/to/project/foo.py")
# '/home/path/to/project/foo.py'

os.path.abspath()
# TypeError: abspath() takes exactly 1 argument (0 given)

```


os.path.abspath(os.path.dirname(""))
---

Sabemos que __abspath__ é um "join" do caminho absoluto com o caminho (path) passado como parâmetro. Sabemos também
que __dirname__ retornará somente a pasta (sem o arquivo).

Estou executando os comandos abaixo na raiz da pasta `home`, ou seja `cd /home`.

```python
os.path.abspath(os.path.dirname(""))
# '/home'

os.path.abspath(os.path.dirname("path"))
# '/home'

os.path.abspath(os.path.dirname("path/"))
# '/home/path'

os.path.abspath(os.path.dirname("path/to"))
# '/home/path'

os.path.abspath(os.path.dirname("path/to/"))
# '/home/path/to'

os.path.abspath(os.path.dirname("path/to/project"))
# '/home/path/to'

os.path.abspath(os.path.dirname("path/to/project/"))
# '/home/path/to/project'

os.path.abspath(os.path.dirname("path/to/project/foo.py"))
# '/home/path/to/project'

```


os.path.dirname(os.path.abspath(""))
---

O comando acima é o inverso do anterior, se você já sabe o funcionamento de cada um deles não será difícil deduzir o 
resultado da operação.

Estou executando os comandos abaixo na raiz da pasta `home`, ou seja `cd /home`.

```python
os.path.dirname(os.path.abspath(""))
# '/'

os.path.dirname(os.path.abspath("path"))
# '/home'

os.path.dirname(os.path.abspath("path/"))
# '/home'

os.path.dirname(os.path.abspath("path/to"))
# '/home/path'

os.path.dirname(os.path.abspath("path/to/"))
# '/home/path'

os.path.dirname(os.path.abspath("path/to/project"))
# '/home/path/to'

os.path.dirname(os.path.abspath("path/to/project/"))
# '/home/path/to'

os.path.dirname(os.path.abspath("path/to/project/foo.py"))
# '/home/path/to/project'

```



Leia também
---

- [Python - os](/python/os/)