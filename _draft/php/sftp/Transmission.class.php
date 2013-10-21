<?php

/*
 *Class for download / upload files 
 * Protocols: FTP, FTPS, HTTP, HTTPS and SSH2 
 * Compatibility * PHP version 4 or higher 
 * @ Author Leonardo Gonçalves Ramos <leogr2003@yahoo.com.br> 
 * @ Copyright Copyright (c) 2009, Leonardo Gonçalves Ramos 
 * /
*/

class Transmission {	
	

/*
 * properties 
 */		
	
	/*
	 * Protocol for transmission
	 */
	var $protocol;
	
	/*
	 * IP or hostname of the remote server
	 */
	var $server;
	
	/*
	 * Directory of the remote file
	 *  
	 */
	var $dirRemoteFile;
	
	/*
	 * Transmission user 
	 */
	var $user;
	
	/*
	 * Transmission password  
	 */
	var $password;

	/*
	 * Connection port
	 */
	var $conPort;	
	
	/*
	 * Exceptions
	 */
	var $exceptions = Array();
	

	
/*
 * 	METHODS
 */	
	
	/*
	 * Class Constructor	 
	 * $protocol: Ex.: "SSH2" or "FTP"	 
	 */
	function Transmission ($protocol) {
		switch ($protocol) {
			case "SSH2":
				$this->dirRemoteFile = "ssh2.sftp://";
				$this->conPort = ":22";
				break;
			case "FTP":
				$this->dirRemoteFile = "ftp://";
				$this->conPort = ":21";		
				break;
			case "FTPS":
				$this->dirRemoteFile = "ftps://";
				$this->conPort = ":21";		
				break;
			case "HTTP":
				$this->dirRemoteFile = "http://";
				$this->conPort = ":80";		
				break;
			case "HTTPS":
				$this->dirRemoteFile = "https://";
				$this->conPort = ":443";		
				break;
			default:
				$this->dirRemoteFile = null;
				break;						
		}		
	}
/* 
 * Validate the connection to remote server 
 * $server: eg: "exemplo.com.br" or "192.168.0.125" 
 * $dirRemoteFile: ex: /home/files/file.pdf 
 * $user: optional parameter 
 * $password: optional parameter 
 * $port: Optional parameter 
*/
	function setConnection($server,$remoteFile,$user,$password,$port) {
		
		/*
		 * Protocol is invalid
		 */
		if($this->dirRemoteFile==null) {
			$this->setExceptions("Error: Protocol is invalid.");
		}
		
		/* 
		 * Format address of the server		 
		 */
		if($server=="") {
			$this->setExceptions("Error: The address of the remote server has not.");			
		} else {
			$this->server = $server;
		}
		
		/*
		 * Format remote directory	 
		 */
		if($remoteFile=="") {
			$this->setExceptions("Error: The path / file was not specified.");			
		} else {
			if(substr($remoteFile,0,1)!="/") {
				$remoteFile = "/".$remoteFile;		
			}
		}

		/*
		 * If no username or password, the connection will be as public  
		 */
		if(is_null($user) OR is_null($password)) {
			$this->dirRemoteFile .= $this->server.$this->conPort.$remoteFile;			 
		} else {
			$this->dirRemoteFile .= $user.":".$password."@".$server.$this->conPort.$remoteFile;
		}				
	}
	
	/*
	 * Method to receive exceptions
	 */
	function setExceptions($msg) {
			array_push($this->exceptions, $msg);
	}
	
	/*
	 * Returns all exceptions generated
	 */
	function getExceptions() {
			$num = 0;
			foreach ($this->exceptions as $exc) {
				$ar_exc .= "$num) ".$exc;
				$num++; 
			}
			return $ar_exc;
	}
	
	
}