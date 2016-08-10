---
layout:      grid12-article
title:       Instalando o sqlite no Linux
description: Aprenda como instalar o banco de dados sqlite no Linux
---

[sqlite](https://www.sqlite.org/) é um banco de dados famoso pela sua facilidade de instalação. Cada banco de dados é
representado por um arquivo no disco rígido. Exatamente por isso, ele acompanha muitos softwares outros softwares, pois
serve como banco de dados inicial.

Execute os comandos abaixo no terminal para instalar na família Debian/Ubuntu.

    # apt-get install sqlite3
    # apt-get install libsqlite3-dev

Para visualizar cada arquivo, ou melhor, cada banco de dados, você poderá instalar o aplicativo __sqlitebrowser__:

    # apt-get install sqlitebrowser

No Debian, após a instalação, o aplicativo pode ser encontrado no seguinte menu: Applications/Programming/SQLite database browser.

![sqlitebrowser](sqlitebrowser.png "sqlitebrowser")
