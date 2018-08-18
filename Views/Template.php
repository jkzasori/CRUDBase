<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CRUDBase</title>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="José Támara">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">


    
    
  
    
  </head>
  <body class="">
    <div class="container">
      <form method="post">
        <input type="text" name="nameC" placeholder="Name">
        <input type="text" name="descriptionC" placeholder="description">
        <input type="number" name="ageC" placeholder="age">
        <input type="submit" name="Enviar" class="btn">
      </form>     
       <?php
        $crud = new CrudControllers();
        $crud -> Create_Crud();
        $crud -> Delete_Crud();
       ?>
       <table class="responsive-table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Description</th>
             <th>Age</th>
             <th>Delete</th>
             <th>Update</th>
           </tr>
         </thead>
         <tbody>
           <?php
           $crud -> Read_Crud();
           ?>
         </tbody>
       </table>
     </div>
<!--Modal delete -->
<form method="post">
  <div id="modalDelete" class="modal center">
    <div class="  modal-content ">
      <div class="">
        <h5 class=" ">ELIMINAR REGISTRO CRUDBase</h5>
      </div>
      <div class=" white">
        <input  type="text" name="id_personD" id="id_personD" hidden="">
        <div class="input-field">
          <input class="black-text " type="text" id="RegistroELimina" placeholder="ID del registro a Eliminar" disabled="">
          <label for="RegistroELimina" class=" red-text text-accent-4"> ID Del Registro a eliminar</label>  
        </div>  
      </div>
    </div>
    <div class="modal-footer">
      <input type="submit" name="" value="Eliminar"  class="modal-close  btn  waves-light col s12 ">
      <input type="button" name="" value="Cerrar"  class="modal-close  pulse btn  waves-light col s12 ">
    </div>  
  </div>
</form>


    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
     });

            $(document).on('mouseover','#elimina', function(){
              let idbutton=this.name;
              $('#id_personD').val(idbutton);
              $('#RegistroELimina').val(idbutton);
            });
          
     </script>

  </body>
</html>
     <?php
ob_end_flush();
?>