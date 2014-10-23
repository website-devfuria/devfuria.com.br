---
layout:      grid93-article
title:       Python - O básico de funções
description: O básico de funções em Python
menu:        python-artigos
---


Exemplo de funções.

{% highlight python %}
def foo():
    return "retorno da função"

print foo() # retorno da função
{% endhighlight %}

Outro exemplo

{% highlight python %}
def add_two(a, b):
    c = a + b
    return c
{% endhighlight %}

Exemplo anterior simplificado

{% highlight python %}
def add_two(a, b):
    return a + b
{% endhighlight %}


### Argumentos da função

{% highlight python %}
def biggest_number(*args):
    print max(args)
    return max(args)
{% endhighlight %}


{% highlight python %}
def smallest_number(*args):
    print min(args)
    return min(args)

biggest_number(-10, -5, 5, 10)
smallest_number(-10, -5, 5, 10)
{% endhighlight %}

