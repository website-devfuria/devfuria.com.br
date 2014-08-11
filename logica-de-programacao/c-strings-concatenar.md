---
layout:      materia
title:       "Concatenar duas strings - linguagem c"
description: Exercício de lógica de programação para concatenar duas strings.
---

Faça um programa para concatenar duas strings.


Solução(ões)
---

Começamos pelo teste...

{% highlight c %}
#include<stdio.h>
#include<string.h>
#include<assert.h>

int main() {
    char str1[] = "abc";
    char str2[] = "defg";

    concatenar(str1, str2);

    assert(strcmp("abcdefg", str1) == 0);    
    return (0);
}
{% endhighlight %}


### Primeira solução

{% highlight c %}
int concatenar(char s1[], char s2[]) {
    int i, j;

    for (i = 0; s1[i] != '\0'; ++i);
    for (j = 0; s2[j] != '\0'; ++j, ++i) {
        s1[i] = s2[j];
    }
}
{% endhighlight %}


### Segunda solução

{% highlight c %}
void concatenar(char s[], char t[]) {
    int i = 0, j = 0;

    while (s[i] != '\0') {
        i++;
    }

    while ((s[i++] = t[j++]) != '\0');
}
{% endhighlight %}


### Terceira solução

{% highlight c %}
void concatenar(char s1[], char s2[]) {
    int i, j;

    i = strlen(s1);

    for (j = 0; s2[j] != ""; i++, j++) {
        s1[i] = s2[j];
    }

    s1[i] = "";
}
{% endhighlight %}


### Quarta solução

{% highlight c %}
void concatenar(char *original, char *add) {
    while (*original)
        original++;

    while (*add) {
        *original = *add;
        add++;
        original++;
    }
    *original = '\0';
}
{% endhighlight %}


### Quinta solução

{% highlight c %}
void concatenar(char str1[], char str2[]) {
    strcat(str1, str2);
}
{% endhighlight %}