---
layout:      materia
title:       Python - o básico sobre dicionários
description: O básico sobre dicionários (Python)
---

Criando o dicionário;

{% highlight python %}
people = {
    "name": "joao",
    "age": 39,
    "skylls": ['python', 'ruby', 'php']
}
{% endhighlight %}

Atribuindo valores:

{% highlight python %}print people['age']= 40{% endhighlight %}

Acessando os dados:

{% highlight python %}
print people['name']
print people['age']
print people['skylls']

# joao
# 40
# ['python', 'ruby', 'php']
{% endhighlight %}

Dicionários também podem ser criados dinamicamente como no exemplo baixo.

{% highlight python %}
dic = {}
dic['name'] = "joao"
dic['age']  = "39"
{% endhighlight %}


### Percorrendo dicionários (dictionaries looping)

{% highlight python %}
d = {'a': 'apple', 'b': 'berry', 'c': 'cherry'}

for key in d:
    print key + " " + d[key]

"""
a apple
c cherry
b berry
"""
{% endhighlight %}

Abaixo, mais um exemplo.

{% highlight python %}
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
{% endhighlight %}



### Funções para dicionários

{% highlight python %}
my_dict = {
    "1": "a",
    "2": "b",
    "3": "c"
}

my_dict.items()  # dict_items([('1', 'a'), ('3', 'c'), ('2', 'b')])
my_dict.keys()   # dict_keys(['1', '3', '2'])
my_dict.values() # dict_values(['a', 'c', 'b'])
{% endhighlight %}