---
layout: grid12-article
title:  js - prototype
---


    function Coworker(name) {
      this.name = name;
    }

    var c1 = new Coworker("Ale");
    var c2 = new Coworker("Di");

    Coworker.prototype.status = "trabalhando"

    console.log(c1)
    console.log(c2)

    c1.status = "férias";
    Coworker.prototype.status = "quase de férias"

    console.log(c1)
    console.log(c2)