<?php 

	$conexion=mysqli_connect('localhost','root','','pcc2022_evalfinal');

 ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/6539CV.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Mensajes Recibidos</title>
  </head>
  <style>
    
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #ECFF00;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: black;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #FFFFFF ;
}

.navbar a.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}

  </style>
<body>
<div class="navbar">  
  <a href="inicio.php"><strong>Inicio</strong></a> 
  <a href="tiendas.php"><strong>Tiendas</strong></a> 
  <a href="contactenos.php"><strong>Contactenos</strong></a>
</div>
<font face="Arial" size="6"><strong>Mensajes Recibidos</strong></font><br><br>
	<table class="table table-striped" >
		<tr>
			<td scope="col">No. Mensaje</td>
			<td scope="col">Nombre</td>
			<td scope="col">Telefono</td>
			<td scope="col">Correo</td>
			<td scope="col">Mensaje</td>	
		</tr>

		<?php 
		$sql="SELECT * from mensajes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nomensaje'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['mensaje'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</html>