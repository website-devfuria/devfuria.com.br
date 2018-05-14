---
title:       Como redirecionar as saida do terminal (mysql) para um arquivo
description: Descubra como fazer para salvar seus comandos sql em um arquivo qualquer
capitulo:    linux-artigos
ordem:
---

Imagina que você queira executar um comando no terminal (mysql) do Linux e em seguida guardar a resposta em um arquivo qualquer.

Você pode utilizar o utilitário __tee__.

Exemplo, vou me logar no __MySQL__ e guardar a resposta em um arquivo chamado `foo.log`

    mysql -h localhost -u root -p --tee ~/foo.sql







    