---
layout:      grid93-article
title:       Python - O básico de listas
description: O básico de lista em Python
menu:        python-artigos
---


### Fatiamento (slicing)

{% highlight python %}
p = ["p", "y", "t", "h", "o", "n"] 
p[0:0] # ''
p[0:1] # 'p'
p[0:2] # 'py'
p[0:3] # 'pyt'
p[0:4] # 'pyth'
p[0:5] # 'pytho'
p[0:6] # 'python'
{% endhighlight %}

{% highlight python %}
p = ["p", "y", "t", "h", "o", "n"] 
p[:0] # ''
p[:1] # 'p'
p[:2] # 'py'
p[:3] # 'pyt'
p[:4] # 'pyth'
p[:5] # 'pytho'
p[:6] # 'python'
{% endhighlight %}

{% highlight python %}
p = ["p", "y", "t", "h", "o", "n"] 
p[0:0] # ''
p[0:1] # 'p'
p[1:2] # 'y'
p[2:3] # 't'
p[3:4] # 'h'
p[4:5] # 'o'
p[5:6] # 'n'
p[6:6] # ''
{% endhighlight %}

{% highlight python %}
p = ["p", "y", "t", "h", "o", "n"] 
p[:]  # 'python'
p[1:] # 'ython'
p[2:] # 'thon'
p[3:] # 'hon'
p[4:] # 'on'
p[5:] # 'n'
p[6:] # ''
{% endhighlight %}

O trecho abaixo é para ilustrar como vários caminhos chegam no mesmo lugar.

{% highlight python %}
p = ["p", "y", "t", "h", "o", "n"] 
(p == p[0:6]) # True
(p == p[:6])  # True
(p == p[:])   # True
{% endhighlight %}

...ou seja, se aplicarmos um "print" nas formas acima, o resultado será exatamente o mesmo, veja:

{% highlight python %}
print p       // ['p', 'y', 't', 'h', 'o', 'n']
print p[0:6]  // ['p', 'y', 't', 'h', 'o', 'n']
print p[:6]   // ['p', 'y', 't', 'h', 'o', 'n']
print p[:]    // ['p', 'y', 't', 'h', 'o', 'n']
{% endhighlight %}


Leia mais sobre [fatimanento de sequencias](../sequencias-fatiamento/ "Python - Sequencias").



Funções nativas p/ listas
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



Juntando listas (join lists)
---

{% highlight python %}
m = [1, 2, 3]
n = [4, 5, 6]
o = m + n
print o # [1, 2, 3, 4, 5, 6]

o += [7, 8, 9]
print o # [1, 2, 3, 4, 5, 6, 7, 8, 9]
{% endhighlight %}



Percorrendo a lista (list looping)
---

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