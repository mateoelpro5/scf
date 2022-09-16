<?php
include ("../conexion.php");


$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
//---Usuario
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$ver_pass = $_POST['verificar_pass'];

$password_encriptar = password_hash($password, PASSWORD_DEFAULT);

//password,fyh_creacion
//password,:fyh_creacion,
if($password == $ver_pass){
 echo "Las contraseñas son correctas";

    $sentencia = $pdo->prepare("INSERT INTO 
(CEDULA,NOMBRE,APELLIDO,EDAD,FEC_NAC,DIRECCION,CORREO,NUM_TEL,ESTADO,FEC_CREATE)
VALUES('$cedula','$nombre','$apellidos','$edad','$fecha','$direccion','$correo','$telefono','$estado', '$fecha_hora')
");
    if ($sentencia->execute()){


        $sentenciaUsu = $pdo->prepare("INSERT INTO usuarios
        (ID_EMP,USUARIO,PASS,ESTADO,FEC_CREATE)
        VALUES('$sentencia->insert_id','$usuario','$password_encriptar','$estado','$fecha_hora')");

    if($sentenciaUsu->execute()){

        //header('Location:'.$URL.'/admin/usuarios/');
        //session_start();
        //$_SESSION['msj'] = "Se Registro el Usuario Correctamente";
        echo "Informacion Registrada Correctamente";


    }else{
        //session_start();
        //$_SESSION['msj'] = "Error al Registrar el Usuario";
    echo "Error al Registrar la Informacion";

    }

}else{
    echo "Las contraseñas son distintas";
}
}
