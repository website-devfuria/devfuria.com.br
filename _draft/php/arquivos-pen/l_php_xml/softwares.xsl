<?xml version="1.0" ?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


<xsl:template match="/">
<html>

<head>
<title>Softwares</title>
</head>

<body>

<font size="6"><b>Softwares Matematicos</b></font><br />
<font size="3">Lista retirada do site <u>www.somatematica.com.br</u></font>
<br />


<xsl:for-each select="lista/software">

<p>Titulo: <b><xsl:value-of select="titulo" /></b><br />
Tipo: <i><xsl:value-of select="tipo" /></i><br />
Descricao: <xsl:value-of select="descricao" /><br />
Tamanho: <xsl:value-of select="tamanho" /></p>
<hr />

</xsl:for-each>

</body>

</html>

</xsl:template>
</xsl:stylesheet>
