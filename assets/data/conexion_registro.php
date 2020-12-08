<?php
class Conexion{
    var $conn;

    function conectar(){
        $conn = null;
     try{
        $conn = new PDO('mysql:host=localhost;dbname=tiendaut','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   }catch(PDOException $e){
        die(print_r('Error conectando a la base de datos:' . $e->getMessage()));

   }
   return $conn;
        }

    function registroUsuario($user, $pass, $nombre, $correo){
        $con = $this->conectar();
         $stmt = $con->prepare('INSERT INTO usuario (usuario, contrasena, nombre, correo) VALUES (:user, :pass, :nom, :mail)');
         $rows = $stmt->execute(array(':user'=>$user,
                                         ':pass'=>$pass,
                                         ':nom'=>$nombre,
                                         ':mail'=>$correo));
         if($rows == 1){
             echo 'Inserción correcta';
         }
        }

        function registraComentario($nombre, $correo, $asunto, $mensaje){
            $con = $this->conectar();
             $stmt = $con->prepare('INSERT INTO contacto (nombre, correo, asunto, mensaje) VALUES (:nom, :mail, :asu, :men)');
             $rows = $stmt->execute(array(':nom'=>$nombre,
                                             ':mail'=>$correo,
                                            ':asu'=>$asunto,
                                            ':men'=>$mensaje));
             if($rows == 1){
                 echo 'Inserción correcta';
             }
            }

    }
?>