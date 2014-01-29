<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>

<HEAD>
    <TITLE>Exemplo - Usando XSLT no PHP</TITLE>
</HEAD>

<BODY>

<?php 
    // Cria um processador XSLT
    $proc = xslt_create();

	// Arquivo XML que contém os dados
	$arquivo_xml = "file://c:/apache/softwares.xml";

	// Arquivo XSL que contém a folha de estilo
	$arquivo_xsl = "file://c:/apache/softwares.xsl";

    // Processa o documento

	$resultado = xslt_process($proc, $arquivo_xml, $arquivo_xsl);
    if ($resultado)
        echo $resultado;
    else {
        echo "Infelizmente $arquivo_xml não foi transformado por $arquivo_xsl<br>";
        echo "Erro: ".xslt_error($proc). "<br>";
        echo "Código do erro: " . xslt_errno($proc);
    }

    xslt_free($proc);
?>

</BODY>
</HTML>
