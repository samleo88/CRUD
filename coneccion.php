<?php
  function f_conectar()
  {
   $usuario="root";
   $servidor="localhost";
   $clave="";
   $db ="tienda_virtual";
   $con = mysqli_connect($servidor,$usuario,$clave) or die ("error conectando".mysql_error()); 
   mysqli_select_db($con,$db);
 
   return $con;
  }

 $conectando = f_conectar();
 /*<a href="estados.php">Regresar</a>*/

  /*  header("location:estados.php");*/
/*echo "...conectado..." ;*/
?>
<!--<p>..Conectado correctamente: -->