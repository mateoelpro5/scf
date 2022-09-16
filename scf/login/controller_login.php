<?php

include ("../app/config/conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

//ejecucion de sql
$query_login = $pdo->prepare("SELECT * FROM usuarios WHERE email='$correo' AND estado='1'");
$query_login->execute();


$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
foreach ($usuarios as $usuario){
    $contador = $contador+1;
    $correo = $usuario['email'];
    $password_tb = $usuario['password'];
}
//echo $contador;

if ($contador == 0){
    //echo "Error al ingresar datos";
    header('Location: '.$URL.'login/error.php');
}else{
    //echo "usuario correcto";
    if (password_verify($password, $password_tb)) {
        //echo "Usuario Correcto.";
        session_start();
        $_SESSION['sesion_email'] = $correo ;
        header('Location: '.$URL.'admin');
        }else {
            echo "Error al ingresar datos";
         header('Location: '.$URL.'login/error.php');
              }

}