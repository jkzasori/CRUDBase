<?php
/**
 * 
 */
class Conection{
	
	public function conectar(){
		$mysqli = new mysqli('localhost', 'root','','bdCRUD');
		return $mysqli;
	}
}
?>