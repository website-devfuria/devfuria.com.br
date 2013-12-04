<?php

include('Transmission.class.php');

/*
 *Class for upload files 
 * Protocols: FTP, FTPS, HTTP, HTTPS and SSH2 
 * Compatibility * PHP version 4 or higher 
 * @ Author Leonardo Gonçalves Ramos <leogr2003@yahoo.com.br> 
 * @ Copyright Copyright (c) 2009, Leonardo Gonçalves Ramos
*/
class Upload extends Transmission {

	/*
	 * Directory of your site 
	 */
	var $dirLocalFile;

	/*
	 * Class Constructor
	 */
	function Upload($protocol) {		
		parent::Transmission($protocol);		
	}	
	
	function setConnection($dirLocalFile,$server,$remoteFile,$user,$password,$port) {		

		if($dirLocalFile=="") {
			parent::setExceptions("Error: The file / site not specified.");
		} else {
			$this->dirLocalFile = $dirLocalFile;		
		}
		parent::setConnection($server,$remoteFile,$user,$password,$port);
						
	}
	/*
	 * $dirFile: Directory/File. Ex.: /My Documents/webFiles/document.pdf
	 * $fileSize: Specifies the maximum size of the file to validate upload (optional)
	 * $arrayExtensions: Array of valid extensions to upload (optional)
	 */
	function fileCheck($dirFile,$fileSize,$arrayExtensions) {
		if(filesize($dirFile)>$fileSize) {
			parent::setExceptions("Error: The file size exceeded the permitted limit.");
			return false;
		} else {
			$extValidate = false;
			foreach($arrayExtensions as $pos => $ext) {
				$file_array = pathinfo($dirFile);
				if($ext==$file_array['extension']) {
					$extValidate = true;
					return true;
					break;					
				}
			}
			if(!$extValidate) {
				parent::setExceptions("Error: the file extension is invalid.");
				return false;
			}
		}		
	}	
	
	/* 
	 * Starts the File Upload 
	 * $file: If $file is "MOVE", the method will delete the file folder location. 
	 * If $file is "COPY" will be maintained in the file folder location. 
	*/
	function start($file) {
		
		/*
		 * Copy (transmits) the file to the remote server
		 */
		if(!copy($this->dirLocalFile,parent::$this->dirRemoteFile)) {
			parent::setExceptions("Error: Unable to copy the server certificate for the documents. Please contact the administrator of the GED.");
			return false;
		} else {
			if($file=="MOVE" OR is_null($file) OR (!isset($file))) {
				if(!unlink($this->dirLocalFile)) {
					parent::setExceptions("Error: Unable to remove the file's folder location.");
					return false;		
				}
				else {
					return true;									
				}
			} else {
				return true;
			}
		}		
	}

	function getExceptions() {
		return parent::getExceptions();
	}	
	
}