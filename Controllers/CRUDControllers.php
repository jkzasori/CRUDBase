<?php
/**
 * 
 */
class CrudControllers {
	function Create_Crud(){
		if (empty($_POST['nameC']) || empty($_POST['descriptionC']) || empty($_POST['ageC'])) {
			
		}else{
			$resultado = (new CrudMOdels) -> Create_Crud($_POST['nameC'], $_POST['descriptionC'], $_POST['ageC']);
			echo "".$resultado;
		}
	}
	function Delete_Crud(){
		if (empty($_POST['id_personD'])) {
			
		}else{
			echo "string".$_POST['id_personD'];
			$resultado = (new CrudMOdels) -> Delete_Crud($_POST['id_personD']);
			echo "".$resultado;
		}
	}
	function Update_Crud(){
		if (empty($_GET['idU']) || empty($_POST['nameU']) || empty($_POST['descriptionU']) || empty($_POST['ageU'])) {
			
		}else{
			$resultado = (new CrudMOdels) -> Update_Crud($_GET['idU'], $_POST['nameU'], $_POST['descriptionU'], $_POST['ageU']);
			echo "".$resultado;
		}
	}
	function Read_Crud_ID(){
		if (empty($_GET['idU'])){

		}else{
			$resultado = (new CrudMOdels) -> Read_Crud_ID($_GET['idU']);
			echo '<form method="post">
			        <input type="text" name="nameU" placeholder="Name" value="'.$resultado["name"].'">
			        <input type="text" name="descriptionU" placeholder="description" value="'.$resultado["description"].'">
			        <input type="number" name="ageU" placeholder="age" value="'.$resultado["age"].'">
			        <input type="submit" name="Enviar" class="btn">
			      </form> ';
		}
		
	}
	function Read_Crud(){
		
			$resultado = (new CrudMOdels) -> Read_Crud();
			while ($R = $resultado->fetch_array(MYSQLI_BOTH)) {
				echo'
					<tr>
						<td>'.$R["id_person"].'</td>
						<td>'.$R["name"].'</td>
						<td>'.$R["description"].'</td>
						<td>'.$R["age"].'</td>
						<td> <a type="" href="#modalDelete" name="'.$R["id_person"].'" id="elimina" class="waves-effect waves-light btn modal-trigger">Delete</a> </td>
						<td><a type="" href="Views/modalUpdate.php?idU='.$R["id_person"].'" name="'.$R["id_person"].'" id="update" class="btn">Update</a></td>
					</tr>
				';
			}
		
	}
	
}
?>