---
layout:      grid12-article
title:       Python - saídas (output)
description: Python - saídas (output)
---


https://docs.python.org/3.0/whatsnew/3.0.html#print-is-a-function

http://docs.pythonsprints.com/python3_porting/py-porting.html#printing

    print "Welcome to Python!"
    print ("Welcome to Python!")

<hr>
    name = "Mike"
    print "Hello %s" % (name)


<hr>
    t = 1.15
    print "%f" % t
    # 1.150000

<hr>
    total = 1.099
    print("%.2f" % total)
    # 1.10

<hr>
    total = 1.099
    print "O total é: " + str(total)
    # O total é: 1.099

<hr>
    r = "vermelho"
    g = "verde"
    b = "azul"
    print "as cores básicas são: ", r, g, b
    # as cores básicas são:  vermelho verde azul