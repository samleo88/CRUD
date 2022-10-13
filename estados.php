<html>
<head>
	<title> ESTADOS</title>
</head>
<body>
  <form name=form id=form method=post action=guardar.php>
  <p align=center><b>Formulario ESTADOS</b></p>
  <br></div>
  <br>
  <div>		
    <table border=2>
		<tr>
			<td>Código</td>
			<td><input type=number name=codigo id=t1 required></td>
		</tr>
		<tr>
			<td>Descripción</td>
			<td><input type=text name=descripcion id=t2 required></td>
		</tr>
		<tr align="center">
			<td colspan=2> <?--# de columna sde la celda -->
			<input type=submit id=bt name="guardar_estado" value="Guarda Estado" >
			</td>
		</tr>
	</table>
  </div>
		<br>
		<br>
  <div>
	<table WIDTH="50%" BORDER="2">
		<tr align="center">
			<td>Código</td>
			<td>Descipción</td>
			<td>Acciones</td>
		</tr>
		<tr>
		</tr>
		<body>
            <?php
                include("coneccion.php");
                $con = f_conectar();
	            $select=('SELECT * FROM ESTADOS');

                $resultado = mysqli_query($con,$select);


                while ($row =  mysqli_fetch_array($resultado)) 
                {
             ?>   	
                    <tr>	
                	  <td> <?php echo $row['ID'] ?> </td>
                	  <td> <?php echo $row['NOMBRE'] ?> </td>   
                	  <td> <a href="editar.php?ID=<?php echo $row['ID']?>" > Editar
                	  </a> </td>   
                	  <td> <a href="eliminar.php?ID=<?php echo $row['ID']?>" > Borrar
                	  </a> </td>   
                	</tr>   

               <?php } ?>


		</body>
	</table>
  </div>
  </form>	
</body>
</html>
