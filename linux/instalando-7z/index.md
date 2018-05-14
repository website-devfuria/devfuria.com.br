---
title:       Instalando 7-Zip (7z, 7zip, sevenzip)
description: Aprenda como instalar o compressor de arquivos 7-Zip
capitulo:    linux-instalando-utils
---


> 7-Zip (sevenzip) é um compactador de arquivos open-source para o sistema operacional Microsoft Windows e Linux. O
> programa, desenvolvido por Igor Pavlov, é distribuído sobre a licença GNU LGPL, e compete diretamente com os programas
> de código-fechado WinZip e WinRAR. Atualmente o formato 7z, o principal formato de compactação do programa, é o que
> leva maior taxa de compactação, ganhando inclusive do formato RAR.
> (Ubuntu wiki)

- Formatos de compactação: 7z, ZIP, GZIP, BZIP2 e TAR
- Formatos para descompactação: 7z, RAR, CAB, ISO, WIM, MSI, ARJ, LZH, CHM, Z, CPIO, RPM, DEB e NSIS


Instalando via yum
---

    yum install p7zip p7zip-full p7zip-rar lzma lzma-dev

Em um CentoOS 6.4, os pacotes __p7zip-full__ e __p7zip-rar__ não foram encontrados, mas também não foram necessários.


Instalando via apt-get
---

    apt-get install p7zip p7zip-full p7zip-rar lzma lzma-dev


Manipulando arquivos com extensão .7z
---

Pegadinha: o alias (apelido) do programa não é __7zip__  como esperado e sim __7za__.

- Para compactar arquivos:

    `$ 7za a nome-do-arquivo.7z pasta-a-ser-compactada`

- Para descompactar arquivos:

    `$ 7za x nome-do-arquivo.7z`

- Para testar os arquivos:

    `$ 7za t nome-do-arquivo.7z `

- Para listar todos os arquivos:

    `$ 7za l nome-do-arquivo.7z `



### Fontes:

- [Site oficial: http://www.7-zip.org/](http://www.7-zip.org/)
- [Ubuntu wiki: 7zip](http://wiki.ubuntu-br.org/7zip)
- [Descompactando arquivos 7z](http://www.vivaolinux.com.br/dica/Descompactando-arquivos-7z)