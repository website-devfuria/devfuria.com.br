CENT OS 6.4
===

Plugin para navegadores (testei apenas no firefox).

Baixe dois pacotes do site da Adobe:

http://get.adobe.com/flashplayer/?promoid=JZEFT

O pacote YUM e o pacote rpm.

Na verdade os dois são rpm, não sei porque fizeram essa distinção.

Os nomes dos pacotes são diferentes, como eu testei depois de intalados
não sei dizer qual que realemnte resolveu o problema.

Dê permissão para os arquivos rpm (precisa ser root)

    # chmod 777 nome-do-pacote.rpm

Instale cia rpm:

    # rpm -ivh nome-do-pacote.rpm

Reinicie o Firefox.