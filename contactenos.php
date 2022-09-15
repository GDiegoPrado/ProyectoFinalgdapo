<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/6539CV.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Diseños/diseño3.css">
    <title>Contactenos</title>
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
<body style="background: url(images/Amarillo.jpg); background-size: cover;"></body>
<body>
<div class="navbar">
  <a href="productos.php"><strong>Productos / Servicios</strong></a> 
  <a href="tiendas.php"><strong>Tiendas</strong></a> 
  <a href="inicio.php"><strong>Inicio</strong></a>
  <a href="msj.php"><strong>Ver Mensajes</strong></a>
</div>
</body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script><br>
      <font face="Arial" size="6"><strong>Contactenos</strong></font>
  <body>
    <form method="post">
    	<h1>Contactenos</h1>
      <label for="" >Nombre completo</label>
    	<input type="text" name="name" placeholder="Nombre completo">
      <label for="" >Telefono / Celular</label>
      <input type="num" name="tel" placeholder="Telefono / Celular">
      <label for="" >Correo Electronico</label>
    	<input type="email" name="email" placeholder="Email">
      <label for="" >Mensaje</label>
      <input type="text" name="msj" placeholder="Mensaje">
    	<input type="submit" name="register" style="background-color:black; border-color:white; color:white" type="button" class="btn btn-primary" >
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
  <br>
      <hr color="black" size="5px">
      <h6 align="right" width="100%">PBX: xxxx-xxxx - Dirección: xxxxxxxxxxxxxxxxxxxxxxxxㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤCarnet: 2022-40434ㅤNombre: Gelder Diego Alejandro Prado Ortiz</h6>  
    </body>
</html>