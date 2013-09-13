<?php

/*
 * SSH2 EXAMPLE
 */

include('Download.class.php');

$download = new Download("SSH2");

$download->setConnection('LXGED', "/var/dir/dir2/files/file.txt","user","password","");


	if($download->start()) {
		
		/*
		 * The method 'getContent ()' should be called before any HTML. 
		 */
		$download->getContent();
		
	} else {
		echo $download->getExceptions();
	}



?>