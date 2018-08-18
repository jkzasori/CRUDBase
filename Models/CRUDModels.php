<?php
/**
 * 
 */
require_once('Conection.php');
class CrudMOdels{
	
	function Create_Crud($name, $description, $age){
		$conect = new Conection();
		$mysql = $conect -> conectar();
		$mysql -> set_charset('utf8');

		$mysqli= $mysql->prepare("INSERT INTO person(id_person, name, description, age) VALUES(NULL, ?, ?, ?)");
		$mysqli-> bind_param("ssi", $name, $description, $age);
		if ($mysqli -> execute()) {
			return "<h3>Registro éxitoso.</h3>";
		}else{
			return "<h3>Error al procesar el registro.</h3>";
		}
	}
	function Delete_Crud($id_person){
		$conect = new Conection();
		$mysql = $conect->conectar();
		$mysql -> set_charset('utf8');
		$mysqli = $mysql-> prepare("DELETE FROM person WHERE id_person=?");
		$mysqli -> bind_param("s", $id_person);
		if ($mysqli -> execute()) {
			return "<h3>Registro eliminado éxitosamente.</h3>";
		}else{
			return "<h3>Error al eliminar el registro.</h3>";
		}
	}
	function Update_Crud($id_person, $name, $description, $age){
		$conect = new Conection();
		$mysql = $conect->conectar();
		$mysql->set_charset('utf8');
		$mysqli = $mysql->prepare("UPDATE person SET name=?, description=?, age=? WHERE id_person=?");
		$mysqli -> bind_param('ssis', $name, $description, $age, $id_person);
		if ($mysqli -> execute()) {
			header('Location: /CRUDBase');
			return "<h3>Registro actualizado éxitosamente.</h3>";
		}else{
			return "<h3>Error al actualizar el registro.</h3>";

		}	
	}

	function Read_Crud(){
		$conect = new Conection();
		$mysql = $conect->conectar();
		$mysql -> set_charset('utf8');
		$mysqli = $mysql -> prepare("SELECT * FROM person");
		$mysqli -> execute();
		$result = $mysqli->get_result();
		return $result;
	}

	function Read_Crud_ID($id_person){
		$conect = new Conection();
		$mysql = $conect->conectar();
		$mysql -> set_charset('utf8');
		$mysqli = $mysql -> prepare("SELECT * FROM person WHERE id_person=?");
		$mysqli->bind_param("s", $id_person);
		$mysqli -> execute();
		$result = $mysqli->get_result();
		$resultAll = $result->fetch_array(MYSQLI_BOTH);
		return $resultAll;
	}
	
}
?>