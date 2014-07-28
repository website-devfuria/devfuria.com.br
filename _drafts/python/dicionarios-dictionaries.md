---
layout:      materia
title:       Python - dicionários
description: Python - dicionários
---



<hr>
    dic = {} # Empty dictionary
    dic['hardware'] = "o que chutamos"
    dic['software'] = "o que xingamos"


### Percorrendo dicionários (dictionaries looping)

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

<hr>
    d = {'a': 'apple', 'b': 'berry', 'c': 'cherry'}

    for key in d:
        print key + " " + d[key]

    """
    a apple
    c cherry
    b berry
    """


<hr>
    my_dict = {
        "1": "a",
        "2": "b",
        "3": "c"
    }

    print my_dict.items()

<hr>
    my_dict = {
        "1": "a",
        "2": "b",
        "3": "c"
    }

    print my_dict.keys()
    print my_dict.values()


