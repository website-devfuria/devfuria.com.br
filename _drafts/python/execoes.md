---
layout:      materia
title:       Python - tratamento de exeções
description: Python - tratamento de exeções
---


    total=0
    while True:
        p = raw_input('+')
        if not p.strip(): break
        try:
            total += float(p)
        except ValueError:
            break
    print '---------'
    print total


slide 50