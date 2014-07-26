---
layout:      materia
title:       Python - funções
description: Python - funções
---




def biggest_number(*args):
    print max(args)
    return max(args)
    
def smallest_number(*args):
    print min(args)
    return min(args)

biggest_number(-10, -5, 5, 10)
smallest_number(-10, -5, 5, 10)

