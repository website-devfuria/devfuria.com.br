<?php


include('Transmission.class.php');

/*
 *Class for upload files 
 * Protocols: FTP, FTPS, HTTP, HTTPS and SSH2 
 * Compatibility * PHP version 4 or higher 
 * @ Author Leonardo Gonçalves Ramos <leogr2003@yahoo.com.br> 
 * @ Copyright Copyright (c) 2009, Leonardo Gonçalves Ramos
*/
class Download extends Transmission {
	
	/*
	 * Content of file
	 */
	var $content;
	
	/*
	 * Class Constructor  
	 */
	function Download($protocol) {				
		parent::Transmission($protocol);		
	}
	
	/*
	 * See 'setConnection' of Transmission 	 
	 */
	function setConnection($server,$remoteFile,$user,$password,$port) {
		parent::setConnection($server,$remoteFile,$user,$password,$port);
	}
	
	/*
	 *  Check the file to download 
	 */
	function start() {
		
		if(is_file(parent::$this->dirRemoteFile)) {			
			$this->setContent(parent::$this->dirRemoteFile);
			return true;	
		} else {
			parent::setExceptions("Error: File not found.");
			return false;	
		}		
	}
	
	/*
	 * Set file content 
	 */
	function setContent($dir) {
		$this->content = $dir;
	}
	
	/*
	 * Content for download 
	 */
	function getContent() {
		$file_name = basename(parent::$this->dirRemoteFile);
		
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=".$file_name);			
		header("Content-Transfer-Encoding: binary");
		
		return readfile($this->content);	
	}
	
	/*
	 * Return exceptions
	 */
	function getExceptions() {
		return parent::getExceptions();
	}
			
}


?>