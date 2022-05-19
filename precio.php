
<?php

session_start();

$usuario=$_SESSION["usuario"];

$coneccion=mysqli_connect("localhost","root","","login");


$consulta="SELECT*FROM precios";

$resultado=mysqli_query($coneccion,$consulta);

if(!$resultado){

    // echo "hay un error al consultar";
}


else{

    $filas=mysqli_num_rows($resultado);
    $contenido = mysqli_fetch_array($resultado);

    $auto=$contenido[0];  
    $camioneta=$contenido[1];  
    $publico=$contenido[2];  
    $carga=$contenido[3];  

    }

?>