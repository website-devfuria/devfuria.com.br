---
layout:      grid12-article
title:       Python - for-else
description: Python
---


    fruits = ['banana', 'apple', 'orange', 'pear', 'grape']

    print 'You have...'
    for f in fruits:
        if f == 'tomato':
            print 'A tomato is not a fruit!' # (It actually is.)
            break
        print 'A', f
    else:
        print 'A fine selection of fruits!'