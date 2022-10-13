<?php
    include("coneccion.php");
    $con = f_conectar();

 if (isset($_GET['ID']))
    {
  	 $id = $_GET['ID'];
    }

    $query = "SELECT * FROM ESTADOS WHERE ID = $id";
    
    $resultado = mysqli_query($con,$query);

    if (mysqli_num_rows($resultado) == 1) {
    	$row = mysqli_fetch_array($resultado); 
    	 $nombre = $row['NOMBRE'];
    }
    	
   /*header("location:estados.php"); */
?>

<html>
<head>
	<title> ESTADOS</title>
</head>
<body>
  <form name=form id=form method=post action= update.php>
  <p align=center><b>Editar ESTADOS</b></p>
  <br>
  <br>
  <div>		
    <table border=2>
		<tr>
			<?php  echo "      SE MODIFICARÁ EL ID = $id";?>
            <td>Código </td>
            <td>Descripción</td>
			<td><input type=hidden name=id value= <?php echo $id?> ></td>
        </tr>    
		<tr><td> <?php echo $id ?> </td> 
			<td><input type=text name=descripcion value= <?php echo $nombre?> ></td>
		</tr>
		<tr align="center">
			<td colspan=2> 
			<input type=submit id=bt name="update" value="Modificar" > 

			</td>
		</tr>
	</table>
  </div>
  </form>	
</body>
</html>

