---
layout:      materia
title:       Python - listas
description: Python - listas
---





### Fatiamento (slicing)

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[0:0] # ''
    p[0:1] # 'p'
    p[0:2] # 'py'
    p[0:3] # 'pyt'
    p[0:4] # 'pyth'
    p[0:5] # 'pytho'
    p[0:6] # 'python'

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[:0] # ''
    p[:1] # 'p'
    p[:2] # 'py'
    p[:3] # 'pyt'
    p[:4] # 'pyth'
    p[:5] # 'pytho'
    p[:6] # 'python'

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[0:0] # ''
    p[0:1] # 'p'
    p[1:2] # 'y'
    p[2:3] # 't'
    p[3:4] # 'h'
    p[4:5] # 'o'
    p[5:6] # 'n'
    p[6:6] # ''

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[:]  # 'python'
    p[1:] # 'ython'
    p[2:] # 'thon'
    p[3:] # 'hon'
    p[4:] # 'on'
    p[5:] # 'n'
    p[6:] # ''

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    (p == p[0:6]) # True
    (p == p[:6])  # True
    (p == p[:])   # True

Leia mais sobre [fatimanento de sequencias](../sequencias/ "Python - Sequencias").

Veja também Advanced Topics in Python 7/18


### Funções nativas p/ listas

### append()

    nums = ["um"]
    print nums # ['um']
    
    nums.append("dois")
    nums.append("tres")
    nums.append("quatro")
    print  nums # ['um', 'dois', 'tres', 'quatro']


### index()

    animals = ["ant", "bat", "cat"]
    print animals.index("bat") # 1


### insert()

    animals = ["ant", "bat", "cat"]
    animals.insert(1, "dog")
    print animals # ["ant", "dog", "bat", "cat"]


### remove()

Remove através do valor

    animals = ["ant", "bat", "cat"]
    animals.remove("ant")
    print animals # ["bat", "cat"]


### pop()

Remove através do índice (retorna o valor removido).

    animals = ["ant", "bat", "cat"]
    animals.pop(0)
    # 'ant'
    print animals # ["bat", "cat"]

Semelhante a utilização de `del()`:

    animals = ["ant", "bat", "cat"]
    del(animals[0])
    print animals # ["bat", "cat"]


### sort()

    lista = ["c", "b", "a"]
    print lista # ['c', 'b', 'a']

    lista.sort()
    print lista # ['a', 'b', 'c']


Juntando listas (join lists)
---

    m = [1, 2, 3]
    n = [4, 5, 6]
    o = m + n
    print o # [1, 2, 3, 4, 5, 6]

    o += [7, 8, 9]
    print o # [1, 2, 3, 4, 5, 6, 7, 8, 9]


Percorrendo a lista (list looping)
---

    myList = [1, 2, 3, 4]
    for number in myList:
        print number * 2
    # 2
    # 4
    # 6
    # 8

<hr>
    choices = ['pizza', 'pasta', 'salad', 'nachos']

    print 'Your choices are:'
    for index, item in enumerate(choices):
        print index + 1, item

    """
    Your choices are:
    1 pizza
    2 pasta
    3 salad
    4 nachos
    """

<hr>
    list_a = [3, 9, 17, 15, 19]
    list_b = [2, 4, 8, 10, 30, 40, 50, 60, 70, 80, 90]

    for a, b in zip(list_a, list_b):
        # Add your code here!
        if a > b:
            print a
        else:
            print b



### Avançado

Advanced Topics in Python 4/18
