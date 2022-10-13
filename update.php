<?php
 
 include("coneccion.php");
 $con = f_conectar();


  if (isset($_POST['update']))
    {

  	 $codigo = $_POST['id'];
  	 $nombre = $_POST['descripcion'];
     echo "llego a update: ";
   echo "$codigo";
   echo "$nombre";
    }

    $query = "update ESTADOS set nombre = upper('$nombre') where id = $codigo";
     echo "$query";
    $resultado = mysqli_query($con,$query);
    if (!$resultado) {
    	die("consulta fallo");
    }
    	
   header("location:estados.php"); 
?>