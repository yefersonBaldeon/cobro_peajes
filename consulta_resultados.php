<?php

session_start();

$usuario=$_SESSION["usuario"];

$coneccion=mysqli_connect("localhost","root","","login");


$consulta="SELECT*FROM usuarios where usuaio='$usuario'";

$resultado=mysqli_query($coneccion,$consulta);

if(!$resultado){

    echo "hay un error al consultar";
}


else{

    $filas=mysqli_num_rows($resultado);
    $contenido = mysqli_fetch_array($resultado);
  
    $a=$contenido[3];
    $b=$contenido[4];
    $c=$contenido[5];
    $d=$contenido[6];
    }
?>