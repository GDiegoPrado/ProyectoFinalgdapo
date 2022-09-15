<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/6539CV.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Diseños/diseño3.css">
    <title>Inicio de Sesion</title>
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
  <a href="inicio.php"><strong>Inicio</strong></a>
  <a href="tiendas.php"><strong>Tiendas</strong></a> 
  <a href="contactenos.php"><strong>Contactenos</strong></a>
</div>
</body>
<font face="Arial" size="6"><strong>Iniciar Sesion</strong></font>
<form action="./validarmsj.php" method="get">
    	<h1>Iniciar Sesión</h1>
      <label for="usuario" >Ingrese su usuario</label>
    	<input type="text" name="usuario" placeholder="Ingrese su usuario">
      <label for="contrasena" >Ingrese su contraseña</label>
      <input type="password" name="contrasena" placeholder="Ingrese su contraseña">
      <input name="" id="" style="background-color:black; border-color:white; color:white"  class="btn btn-primary" type="submit" value="Iniciar Sesión" >
      </div>
    </form>
      <hr color="black" size="5px">
      <h6 align="right" width="100%">PBX: xxxx-xxxx - Dirección: xxxxxxxxxxxxxxxxxxxxxxxxㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤCarnet: 2022-40434ㅤNombre: Gelder Diego Alejandro Prado Ortiz</h6>  
</html>