<?php 
	function saveFile($addr, $db) {
		$ch=fopen($addr, "w");
		fwrite($ch, $db);
		fclose($ch);
	}
	function read_file($addr) {
		if(file_exists($addr)) 
			return file_get_contents($addr);
		return '';
	}
 ?>