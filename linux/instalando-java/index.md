---
title:       Instalando conjunto de utilitários JDK (Java Development Kit)
description: Aprenda a instalar o conjunto de utilitários JDK (Java Development Kit)
capitulo:    linux-instalando-utils
---

Repare que que as receitas abaixo instalam a versão "OpenJDK".  Aversão atual enquanto escreve este artigo era a 7,
procure pela versão mais atual.

Ao final da instalação o comando `java -version` deve trazer informação sobre`OpenJDK Runtime Environment`.

Se você buscava isntlar a versão Java da Oracle veja esta outra receita
[Instalando conjunto de utilitários JDK (Java Development Kit) versão Oracle](/linux/instalando-java-oracle/)

### Debian (wheezy)

	apt-get install openjdk-7-jre


### CentOS 6.5+

    su -c "yum install java-1.7.0-openjdk"


### Fedora


    su -c "yum install java-1.7.0-openjdk"


### Ubuntu 12+

Via software-center é mais fácil, procure por

	"OpenJDK" ou
	"openJavaX" (onde x é a versão mais recente).
