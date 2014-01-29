<HTML>
<HEAD>
<TITLE>Websites</TITLE>
</HEAD>
<BODY>

<?php

$inicial = array("titulo"=>"<h2>",
				"url"=>"<u>");

$final = array ("titulo"=>"</h2>",
				"url"=>"</u><br>",
				"palavras_chave"=>"<br>",
				"descricao"=>"<br>");

$ultimo="";

// cria estrutura em árvore
$doc = domxml_open_file("c:\apache\dom.xml");

// Nodo raiz
$raiz = $doc->document_element();
ProcessaNodo($raiz);



function ProcessaNodo ($nodo)
{
	global $ultimo, $inicial, $final;

	switch($nodo->node_type())
	{
		case XML_ELEMENT_NODE:

			$nome=strtolower(trim($nodo->tagname));
			switch($nome)
			{
				case "site":
					$ultimo="";
				break;
		
				case "titulo":
					print $inicial["titulo"];
					$ultimo=$nome;
				break;
	
				case "url":
					$ultimo=$nome;
					$nome=strtoupper($nome);
					print "<b>$nome:</b> ";
					print $inicial["url"];
				break;

				case "descricao":
	
				case "palavras_chave":
					$ultimo=$nome;
					$nome=ucfirst($nome);
					print "<b>$nome:</b> ";
				break;
	
				default:
					$ultimo="";
				break;
			}

		case XML_TEXT_NODE:
			if(!empty($ultimo) && !empty($nodo->content))
			{ 
				print $nodo->content . $final[$ultimo]; 
				$ultimo="";
			}
		break;
	}


	$filhos = $nodo->child_nodes();
	if(is_array($filhos))
	{
		foreach($filhos as $f)
			ProcessaNodo($f);
	}

}


?>

</BODY>
</HTML>
