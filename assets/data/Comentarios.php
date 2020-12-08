<?php
    include('conexion_registro.php');

    $obj = new Conexion;

    $nombre     = $_POST['nombrecon'];
    $correo     = $_POST['correocon'];
    $asunto     = $_POST['asuntocon'];
    $mensaje    = $_POST['mensajecon'];

    $res = $obj->registraComentario($nombre,$correo,$asunto,$mensaje);

    if($res == 1){
        $datosreg  = array('dato' => 'ok');
    }else{
        $datosreg  = array('dato' => 'no');

    }
    echo json_encode($datosreg, JSON_FORCE_OBJECT);

?>