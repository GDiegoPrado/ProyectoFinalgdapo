<?php
include ("bd.php");
    
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['tel']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['msj']) >= 1){
        $name = trim($_POST['name']);
        $tel = trim($_POST['tel']);
        $email = trim($_POST['email']);
        $msj = trim($_POST['msj']);
        $consulta = "INSERT INTO mensajes(nombre, telefono, correo, mensaje) 
        VALUES ('$name','$tel','$email','$msj')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Has enviado correctamente el mensaje!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
        } else{
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
    }
?>