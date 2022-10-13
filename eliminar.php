<?php
    include("coneccion.php");
    $con = f_conectar();

 if (isset($_GET['ID']))
    {
  	 $id = $_GET['ID'];
   echo "$id";
    }

    $query = "DELETE FROM ESTADOS WHERE ID = $id";
     echo "$query";
    $resultado = mysqli_query($con,$query);
    if (!$resultado) {
    	die("consulta fallo");
    }
    	
   header("location:estados.php"); 
?>
?>