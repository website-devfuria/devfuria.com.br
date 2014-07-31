---
layout:     materia
title:      Javascript - sintaxe
descriptin: Javascript - sintaxe
---


https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript#Other_types

### Switch


    switch(action) {
        case 'draw':
            drawit();
            break;
        case 'eat':
            eatit();
            break;
        default:
            donothing();
    }


### For


    for (var i = 0; i < 5; i++) {
      // Will execute 5 times
    }



### Arrays

    var a = new Array();
    a[0] = "dog";
    a[1] = "cat";
    a[2] = "hen";
    a.length
    3

A more convenient notation is to use an array literal:

    var a = ["dog", "cat", "hen"];
    a.length


### Funções


    function add(x, y) {
        var total = x + y;
        return total;
    }


### Objetos

<hr>
    var obj = new Object();

<hr>
    var obj = {};

<hr>

    function Person(name, age)
    {
      this.name = name;
      this.age = age;
    }

    // Define a object
    var You = new Person("You", 36);

<hr>
    obj.name = "Simon";
    var name = obj.name;

<hr>
    obj["name"] = "Simon";
    var name = obj["name"];

<hr>
    var obj = {
        name: "Carrot",
        "for": "Max",
        details: {
            color: "orange",
            size: 12
        }
    }


Attribute access can be chained together:

    obj.details.color
    orange
    obj["details"]["size"]
    12