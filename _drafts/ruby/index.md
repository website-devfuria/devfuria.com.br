---
layout:      grid12-article
title:       Ruby
description: Ruby
---

### Executando

    ruby teste.rb


Ou através do console interativo __IRB__


### Comentários

    # Comentários

    =begin
      Comentários
    =end

O "=begin" quanto o "=end" devem ficar no início da linha, na coluna 0 do arquivo. Os comentários de blocos não costumam
ser muito usados Ruby, a própria documentação do Rails usa apenas comentários de linha.


### Saídas

    puts "Olá Mundo"
    print "Olá Mundo"
    p "Olá Mundo"

### Entradas


O método `gets` permiti atribuir a uma variável um valor digitado no console através do teclado desde que o valor seja
uma string.

    nome = gets



### Descobrir tipo de variável

Utilize o `.class`:

    num = 87
    puts num.class  # Fixnum


Inferência de tipos
---

    ano = 1950

A variavel `ano` é do tipo __Fixnum__ (inteiros)

http://www.caelum.com.br/apostila-ruby-on-rails/ruby-basico/#3-3-variaveis-strings-e-comentarios