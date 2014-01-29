<?php
/*
 * SSH2 UPLOAD
 */

include('Upload.class.php');

$upload = new Upload("SSH2");

$upload->setConnection("files/Filetest.txt",'192.100.1.1', "/var/www/dir/dir2/test.txt","user","password","");

/*
 * Building rules by determining the maximum size limit and file types to upload
 */
$acceptedTypes = array("txt","doc","rtf");
$size = 102400;//100KB
if(!$upload->fileCheck("files/Filetest.txt.txt",$size,$acceptedTypes)) {	
	echo $upload->getExceptions();	
}
else {
	
	if($upload->start("MOVE")) {
		echo "Upload OK!";
	} else {
		echo "Upload ERROR!";
	}
}

?>