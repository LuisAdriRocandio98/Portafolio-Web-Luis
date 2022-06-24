<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) && !empty($_POST['telefono'])
    && !empty($_POST['correo'])){
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $destino="luisadrianlopezrocandio@gmail.com".",".$_POST['correo'];
		$asunto="Asunto: ".$_POST['asunto'];
		$detalles="Los datos son:"."
		Nombre:".$_POST['nombre']."
		Teléfono:".$_POST['telefono']."
		Correo:".$_POST['correo']."
		mensaje:".$_POST['mensaje'];
		$remitente="from:".$_POST['correo'];

		$mail = mail($destino, $asunto, $detalles, $remitente);
		if($mail){
            alert("Correo enviado exitosamente....");
        }
    }
}



