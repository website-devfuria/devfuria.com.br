<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>

<HEAD>
    <TITLE>Exemplo - Usando XSLT no PHP</TITLE>
</HEAD>

<BODY>

<?php 
    // Cria um processador XSLT
    $proc = xslt_create();

	// Arquivos XML e XSL
	$arquivo_xml = "file://c:/apache/softwares.xml";
	$arquivo_xsl = "file://c:/apache/softwares.xsl";

	// Arquivo HTML onde será gravado o resultado
	$arquivo_result = "file://c:/apache/resultado.html";

    // Processa o documento

    if (xslt_process($proc, $arquivo_xml, $arquivo_xsl, $arquivo_result)) {
        print "CONCLUÍDO! $arquivo_xml foi transformado por $arquivo_xsl";
        print "<br>O resultado foi gravado no arquivo $arquivo_result";
    }
    else {
        echo "Infelizmente $arquivo_xml não foi transformado por $arquivo_xsl<br>";
        echo "Erro: ".xslt_error($proc). "<br>";
        echo "Código do erro: " . xslt_errno($proc);
    }

    xslt_free($proc);
?>

</BODY>

</HTML>
