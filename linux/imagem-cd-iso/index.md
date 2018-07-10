---
title:       O que é uma "imagem de CD" ?
description: O que é um arquivo com extensão .iso?
capitulo:    linux-artigos
---

### ... e o que é um arquivo .iso ?

Uma imagem de CD é um arquivo comum de computador que contém a representação exata dos dados que estão no CD, e que pode,
por exemplo, ser transmitido pela Internet. Os programas para gravar CD podem usar arquivos de imagem para criar um CD real.

Para que o CD seja corretamente gravado, o arquivo __.iso__ não pode aparecer quando você acessa o CD! Ao invés disto
você deve ver vários arquivos e diretórios.

O formato __.iso__ é mais ou menos como um arquivo __.zip__: Ele contém outros arquivos e diretórios, e apenas estes vão
aparecer no CD final.

Alguns programas arquivadores permitem que você "desempacote" arquivos __.iso__. Não use esta funcionalidade para criar
 um CD com os arquivos desempacotados!

O CD resultante vai falhar para iniciar o computador pois o formato __.iso__ possui informações especiais quanto a iniciar
 a partir do CD, que são perdidas quando você desempacota o arquivo.

Veja abaixo __como gravar corretamente uma imagem de CD no Linux__.



Como gravar um CD-R ou um DVD com um arquivo ISO no Linux/Unix?
---

Use o programa __cdrecord__. Imaginando que seu arquivo iso se chama `seu-arquivo.iso`, no terminal digite:

    nice --18 cdrecord -eject -v speed=2 dev=0,6,0 -data -pad seu-arquivo.iso

Outra opção são os programas __K3B__ e o __X-CD-Roast__:

* [K3b](http://k3b.plainblack.com/)
1. Selecione o menu Tools - CD - Burn CD Image.
2. No diálogo que abre, informe o caminho para a imagem no campo Image to Burn,
3. verifique se os outros campos estão corretos,
4. então clique em Start.

* [X-CD-Roast](http://www.xcdroast.org/)
1. Após o programa iniciar, clique em Setup escolha a aba HD settings.
2. Copie a imagem do CD Debian para um dos diretórios que são mostrados na tabela.
3. (Se a tabela estiver vazia, digite o caminho de um diretório que você queira usar como temporário, e clique em Add.)
4. Clique em OK para sair da configuração.
5. A seguir, selecione Create CD e então Write Tracks.
6. Escolha a aba Layout tracks,
7. selecione a linha que mostra o nome do arquivo de imagem e
8. clique em Add e então em Accept track layout.
9. Finalmente, clique em Write tracks.


- - -
Fonte
- [https://www.debian.org/CD/faq/#what-is](https://www.debian.org/CD/faq/#what-is)