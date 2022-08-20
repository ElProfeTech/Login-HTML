<?php

session_start();

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];



$conexion= mysqli_connect("localhost","root","", "empresa");

$consulta= "select * from login where usuario= '$usuario' and clave= '$clave'";

$resultado= mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if($filas>0)
{

    $_SESSION['user']=$usuario;
header("location:bienvenida.php");


}

else
{
    echo "Datos incorrectos";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
