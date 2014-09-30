---
layout:      grid12-article
title:       Python - propriedades
description: Python - propriedades
---


{% highlight python %}
class Car(object):
    estado = "desconhecido"
{% endhighlight %}

{% highlight python %}
porsche = Car()
ferrari = Car()
bmw = Car()
{% endhighlight %}

{% highlight python %}
porsche.estado = "usado"
ferrari.estado = "novo"
{% endhighlight %}

{% highlight python %}
print porsche.estado # usado
print ferrari.estado # novo
print bmw.estado     # desconhecido
{% endhighlight %}









