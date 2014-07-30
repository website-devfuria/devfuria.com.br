---
layout:      materia
title:       Python - dicionários
description: Python - dicionários
---


    
Criando o dicionário;

    people = {
        "name": "joao",
        "age": 39,
        "skylls": ['python', 'ruby', 'php']
    }

Atribuindo valores:

    print people['age']= 40

Acessando os dados:

    print people['name']
    print people['age']
    print people['skylls']

    # joao
    # 40
    # ['python', 'ruby', 'php']


Dicionários também podem ser criados dinamicamente como no exemplo baixo.

    dic = {}
    dic['name'] = "joao"
    dic['age']  = "39"


### Percorrendo dicionários (dictionaries looping)

    d = {'a': 'apple', 'b': 'berry', 'c': 'cherry'}

    for key in d:
        print key + " " + d[key]

    """
    a apple
    c cherry
    b berry
    """

Abaixo, mais um exemplo.

    webster = {
        "Aardvark" : "A star of a popular children's cartoon show.",
        "Baa" : "The sound a goat makes.",
        "Carpet": "Goes on the floor.",
        "Dab": "A small amount."
    }

    for word in webster:
        print webster[word]

    '''
    A star of a popular children's cartoon show.
    Goes on the floor.
    A small amount.
    The sound a goat makes.
    None
    '''

### Funções para dicionários

<hr>
    my_dict = {
        "1": "a",
        "2": "b",
        "3": "c"
    }

    print my_dict.items()  #
    print my_dict.keys()   #
    print my_dict.values() #


