---
layout:      grid12-article
title:       Utilitário de terminal cat (Linux)
description: Rápido guia sobre o comando cat <br>muito utilizado no termial do Linux<br /> que concatena e exibe arquivos
---

O utilitário __cat__ copia arquivos para a saída padrão. Você pode usar cat para mostrar o conteúdo de um ou mais 
arquivos-texto na tela (terminal).

O nome cat é derivado de uma das funções desse utilitário, *catenate* (concatenar), que significa juntar sequencialmente,
ou de fim a fim.

Se você precisa ver o conteúdo um arquivo que não seja texto utilize o utilitário __od__.



### Exibe o conteúdo de um arquivo

    $ cat sample.txt

Lembrando que em Linux não pe necessário a extensão `.txt`, logo o comando poderia ser simplesmente...

    $ cat sample

### Concatena

Imaginando que `page1`, `letter` e `memo` sejam arquivos de texto, o conteúdo deles será escriot no arquivo `all`.

    $ cat page1 letter memo > all


### Criar arquivos

Outra ótima utilidade é que o cat ajuda a criar arquivos pequenos rapidamente.

    $ cat > arquivo
    Digite aqui o seu texto
    E vá pressionando a tacla ENTER
    para indicar quebra de linha
    Quando quiser terminar pressione
    CONTROL- D
    $



 
-----------------------------------------------------------------------------------------
Fonte: Linux Um Guia Prático de Comando, Editore e Pragramação Shell (Mark G. Sobel, pág 115)







