<?php
require_once("../Controllers/CRUDControllers.php");
require_once("../Models/CRUDModels.php");
        $crud = new CrudControllers();
        $crud -> Update_Crud();
        
       ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$crud -> Read_Crud_ID();
	?>
</body>
</html>