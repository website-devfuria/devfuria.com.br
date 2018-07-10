---
title:       Instalando PIL (Python Imaging Library) no Linux
description: Aprenda como instalar PI (Python Imaging Library)
capitulo:    linux-instalando-python
---


O __PIL__ é uma biblioteca de manipulação de imagens para [Python](/linux/instalando-python).


### Para instalar no __CentOS__:

    yum install python-imaging


### Para instalar no Debian:

    apt-get install python-imaging

Se você precisar configurar uma __lista de sources__, este [gist](https://gist.github.com/flaviomicheletti/73ca969a89ee2d78b1e6/edit) pode te ajudar.


### Para testar a versão instalada:

    python -c "from PIL import Image; print(Image.VERSION)"



- - -
Fontes

- [Python Imaging Library (PIL)](http://www.pythonware.com/products/pil/)
- [The Python Imaging Library Handbook](http://effbot.org/imagingbook/)


Instalando o Pillow
---

O Pillow é um fork do PIL. Ele suporta [Python](/python/) e seu desenvolvimento "parece" que é mais ativo
do que o PIL.

Ele depende dos pacotes *python-devel* e *python-setuptools*,  para instalar esses pacotes no Debian (wheezy) bastou:

    apt-get install python3-dev python3-setuptools


Eu instalei através do [pip](/linux/instalando-pip/) dessa forma:

    pip install Pillow

Para não deixar "sujeria" eu executei o comando acima na pasta `/tmp`.

Após a instalação, eu instalei mais alguns pacotes conforme sugerido na documentação. Mas que não foram necessários
durante a instalação.

    apt-get install libtiff4-dev libjpeg8-dev zlib1g-dev libfreetype6-dev liblcms2-dev libwebp-dev tcl8.5-dev tk8.5-dev python-tk


- - -
Fontes

- [Pillow v2.5.0 (PIL fork) - Installation](http://pillow.readthedocs.org/en/latest/installation.html#simple-installation)
- [Pillow on GitHub](https://github.com/python-pillow/Pillow)
- [docs.python-guide.org - Image Manipulation](http://docs.python-guide.org/en/latest/scenarios/imaging/#python-imaging-library)



Leia também
---

Aprenda a programar em nossa seção sobre a [linguagem Python](/python/).