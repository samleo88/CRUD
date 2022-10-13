


<?php
 
 include("coneccion.php");
 $con = f_conectar();


  if (isset($_POST['guardar_estado']))
    {
  	 $codigo = $_POST['codigo'];
  	 $nombre = $_POST['descripcion'];
   echo "$codigo";
   echo "$nombre";
    }

    $query = "insert into ESTADOS(id, nombre) values ($codigo,UPPER('$nombre'))";
     echo "$query";
    $resultado = mysqli_query($con,$query);
    if (!$resultado) {
    	die("consulta fallo");
    }
    	
   header("location:estados.php"); 
?>