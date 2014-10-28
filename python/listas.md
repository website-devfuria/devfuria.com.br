---
layout:      grid93-article
title:       Python - O básico de listas
description: O básico de lista em Python
menu:        python-artigos
---

Abaixo temos um exemplo de uma lista:

{% highlight python %}
animals = ["pangolin", "cassowary", "sloth", "dog"];
animals[0]   # 'pangolin'
animals[1]   # 'cassowary'
animals[2]   # 'sloth'
animals[3]   # 'dog'
{% endhighlight %}

Contamos o índice da lista a partir do zero, veja:

{% highlight python %}
+-------------+-------------+-------------+-------------+-------------+
| "pangolin"  | "cassowary" |   "sloth"   |    "dog"    |lanca um erro|
+-------------+-------------+-------------+-------------+-------------+
      0              1             2              3            4
{% endhighlight %}

Ao acessar um índice inexistente recebemos um erro.

{% highlight python %}animals[4]   # IndexError: list index out of range{% endhighlight %}

Podemos fatiar (leia-se acessar) um lista de diversas formas, veja a matéria sobre
[fatiamento de sequencias](../sequencias-fatiamento/ "Python - Sequencias").



### Percorrendo a lista (list looping)

{% highlight python %}
myList = [1, 2, 3, 4]
for number in myList:
    print number * 2
# 2
# 4
# 6
# 8
{% endhighlight %}

{% highlight python %}
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
{% endhighlight %}

{% highlight python %}
list_a = [3, 9, 17, 15, 19]
list_b = [2, 4, 8, 10, 30, 40, 50, 60, 70, 80, 90]

for a, b in zip(list_a, list_b):
    # Add your code here!
    if a > b:
        print a
    else:
        print b
{% endhighlight %}




### Juntando listas (join lists)

{% highlight python %}
m = [1, 2, 3]
n = [4, 5, 6]
o = m + n
print o # [1, 2, 3, 4, 5, 6]

o += [7, 8, 9]
print o # [1, 2, 3, 4, 5, 6, 7, 8, 9]
{% endhighlight %}



Funções nativas para listas
---

### append()

{% highlight python %}
nums = ["um"]
print nums # ['um']

nums.append("dois")
nums.append("tres")
nums.append("quatro")
print nums # ['um', 'dois', 'tres', 'quatro']
{% endhighlight %}


### index()

{% highlight python %}
animals = ["ant", "bat", "cat"]
print animals.index("bat") # 1
{% endhighlight %}


### insert()

{% highlight python %}
animals = ["ant", "bat", "cat"]
animals.insert(1, "dog")
print animals # ["ant", "dog", "bat", "cat"]
{% endhighlight %}


### remove()

Remove através do valor
{% highlight python %}
animals = ["ant", "bat", "cat"]
animals.remove("ant")
print animals # ["bat", "cat"]
{% endhighlight %}


### pop()

Remove através do índice (retorna o valor removido).
{% highlight python %}
animals = ["ant", "bat", "cat"]
animals.pop(0)
# 'ant'
print animals # ["bat", "cat"]
{% endhighlight %}

Semelhante a utilização de `del()`:

{% highlight python %}
animals = ["ant", "bat", "cat"]
del(animals[0])
print animals # ["bat", "cat"]
{% endhighlight %}


### sort()

{% highlight python %}
lista = ["c", "b", "a"]
print lista # ['c', 'b', 'a']

lista.sort()
print lista # ['a', 'b', 'c']
{% endhighlight %}
